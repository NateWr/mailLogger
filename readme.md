# Mail Logger

A plugin for OJS 3.2+ that will log every email sent by the system. This is a development tool and **should not be used on a live site**.

This can be used when developing in an environment where there is no email server set up. It hooks in before the email is sent.

The emails will be logged to the `files_dir` directory specified in your OJS config file. You will find each email at `/<files_dir>/maillog/<Ymdhis>-<microtime>`.

## Example Log

```
Array
(
    [subject] => [JPK] Journal Registration
    [body] => Daniel Barnes<br />
<br />
You have now been registered as a user with Journal of Public Knowledge. We have included your username and password in this email, which are needed for all work with this journal through its website. At any point, you can ask to be removed from the journal's list of users by contacting me.<br />
<br />
Username: zzzzzz<br />
Password: zzzzzz<br />
<br />
Thank you,<br />
Nate Wright (Editor-in-Chief)<br/><p>________________________________________________________________________</p>
    [from] => Array
        (
            [name] => pkpadmin
            [email] => admin@.com
        )

    [replyTo] => Array
        (
            [0] => Array
                (
                    [name] => Nate Wright (Editor-in-Chief)
                    [email] => z@z.com
                )

        )

    [recipients] => Array
        (
            [0] => Array
                (
                    [name] => Daniel Barnes
                    [email] => zzzzzz@zzzzzz.com
                )

        )

)
```