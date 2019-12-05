<?php
/**
 * @file plugins/generic/mailLogger/MailLoggerPlugin.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MailLoggerPlugin
 * @ingroup plugins_generic_maillogger
 *
 * @brief Clear the CSS and Template cache on every page load.
 */
class MailLoggerPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register
	 */
	public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {
			HookRegistry::register('Mail::send', [$this, 'log']);
		}
		return $success;
	}

	/**
	 * @copydoc PKPPlugin::getDisplayName
	 */
	public function getDisplayName() {
		return __('plugins.generic.mailLogger.name');
	}

	/**
	 * @copydoc PKPPlugin::getDescription
	 */
	public function getDescription() {
		return __('plugins.generic.mailLogger.description');
	}

	/**
	 * Log details about an email before it is sent
	 *
	 * @param string $hookName
	 * @param array $args
	 */
	public function log($hookName, $args) {
		$mail = $args[0];

		$dir = rtrim(Config::getVar('files', 'files_dir'), '/') . '/maillogs';
		if (!file_exists($dir)) {
			mkdir($dir);
		}
		$fn = date('Ymdhis') . '-' . microtime();
		file_put_contents("$dir/$fn", print_r($mail->_data, true));
	}
}
