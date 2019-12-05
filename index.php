<?php

/**
 * @defgroup plugins_generic_maillogger
 */

/**
 * @file plugins/generic/mailLogger/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_maillogger
 * @brief Wrapper for the Mail Logger plugin.
 *
 */
require_once('MailLoggerPlugin.inc.php');

return new MailLoggerPlugin();

?>
