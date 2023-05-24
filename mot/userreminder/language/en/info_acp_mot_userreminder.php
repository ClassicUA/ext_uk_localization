<?php
/**
*
* @package UserReminder v1.7.0
* @copyright (c) 2019 - 2023 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, [
	// language pack author
	'ACP_USERREMINDER_LANG_DESC'				=> 'English',
	'ACP_USERREMINDER_LANG_EXT_VER' 			=> '1.7.0',
	'ACP_USERREMINDER_LANG_AUTHOR' 				=> 'Mike-on-Tour',

	// Module
	'CONFIRM_USER_DELETE'						=> [
		1	=> 'Are you really certain that you want to delete 1 user?<br><br><strong>This removes the user permanently from the database and cannot be undone!</strong>',
		2	=> 'Are you really certain that you want to delete %d users?<br><br><strong>This removes users permanently from the database and cannot be undone!</strong>',
	],
	'NO_USER_SELECTED'							=> 'You have not selected any users for this action, please mark at least one user.',
	'USER_DELETED'								=> [
		1	=> '1 user successfully deleted',
		2	=> '%d users successfully deleted',
	],
	'USER_REMINDED'								=> [
		1	=> 'Reminding email sent to 1 user',
		2	=> 'Reminding email sent to %d users',
	],
	'USER_POSTS'								=> 'Posts',
	'DAYS_AGO'									=> 'No. of days ago',
	'AT_DATE'									=> 'On',
	'MARK_REMIND'								=> 'Remind',
	'MARK_DELETE'								=> 'Delete',
	'REMIND_MARKED'								=> 'Remind marked',
	'REMIND_ALL'								=> 'Remind all',
	'ACP_USERREMINDER_REMIND_ALL_TEXT'			=> 'Reminds all members listed in this table due for a reminder.',
	'ACP_USERREMINDER_DELETE_ALL_TEXT'			=> '<span style="color:red">Deletes <b>ALL</b> members listed in this table!</span>',
	'LOG_INACTIVE_REMIND_ONE'					=> '<strong>Sent first reminder email to inactive users</strong><br>» %s',
	'LOG_INACTIVE_REMIND_TWO'					=> '<strong>Sent second reminder email to inactive users</strong><br>» %s',
	'LOG_SLEEPER_REMIND'						=> '<strong>Sent reminder email to sleepers</strong><br>» %s',
	//ACP
	'ACP_USERREMINDER'							=> 'User reminder',
	'ACP_USERREMINDER_SETTINGS'					=> 'Settings for the user reminder',
	'ACP_USERREMINDER_SETTINGS_EXPLAIN'			=> 'This is where you customise the user reminder.',
	'ACP_USERREMINDER_SETTING_SAVED'			=> 'Settings for the user reminder successfully saved.',
	'ACP_USERREMINDER_GENERAL_SETTINGS'			=> 'General settings',
	'ACP_USERREMINDER_ROWS_PER_PAGE'			=> 'Rows per table page',
	'ACP_USERREMINDER_ROWS_PER_PAGE_TEXT'		=> 'Choose the number of rows to be displayed per table page on the other tabs.',
	'ACP_USERREMINDER_EXPERT_MODE'				=> 'Expert mode for the Reminder, Sleepers and Zeroposter tabs',
	'ACP_USERREMINDER_EXPERT_MODE_TEXT'			=> 'If you choose ´Yes´ two additional buttons will be displayed beneath the tables on the Reminder, Sleepers
													and Zeroposter tabs allowing you to remind or delete ALL members displayed in those tables.<br>
													<span style="color:red">Since especially the ´Delete all´ button can cause severe harm usage of this
													option is only recommended for administrators who are aware of the hazards involved!<br>
													Please read the respective section in the ´README.md´ file prior to using this setting.</span>',
	'ACP_USERREMINDER_TIME_SETTINGS_TITLE'		=> 'Configure the reminder intervals',
	'ACP_USERREMINDER_TIME_SETTING_TEXT'		=> 'Configure the time in days until a user is viewed as inactive, the time in days between the first and second e-mail to remind this member that a login is necessary and the following period until this user is deleted.',
	'ACP_USERREMINDER_INACTIVE'					=> 'Number of days a user must be offline before this user is viewed as inactive',
	'ACP_USERREMINDER_DAYS_REMINDED'			=> 'Number of days before a user regarded as inactive will get the second reminder mail;<br>
													sending a second mail is inactivated if you input ´0´',
	'ACP_USERREMINDER_AUTOREMIND'				=> 'Send reminder mails automatically?',
	'ACP_USERREMINDER_DAYS_UNTIL_DELETED'		=> 'Number of days after last reminder before a user can be deleted',
	'ACP_USERREMINDER_AUTODELETE'				=> 'Delete users automatically?',
	// ACP Sleeper settings
	'ACP_USERREMINDER_SLEEPER_CONFIG'			=> 'Sleeper configuration',
	'ACP_USERREMINDER_SLEEPER_CONFIG_TEXT'		=> 'You can choose here whether sleepers should be reminded and after what number of days this should happen as
													well as whether sleepers should be deleted automatically after a certain number of days.',
	'ACP_USERREMINDER_REMIND_SLEEPER'			=> 'Do you want to remind sleepers?',
	'ACP_USERREMINDER_REMIND_SLEEPER_TEXT'		=> 'If sleepers should be reminded to visit your forum after registration please select ´Yes´, in this case
													you will see some more options.',
	'ACP_USERREMINDER_SLEEPER_INACTIVE'			=> 'Number of days between registration and reminding',
	'ACP_USERREMINDER_AUTODELETE_SLEEPER'		=> 'Do you want to delete sleepers automatically?',
	'ACP_USERREMINDER_AUTODELETE_SLEEPER_TEXT'	=> 'If you select ´Yes´ sleepers will be deleted automatically.<br>
													After selecting ´Yes´ another setting will be dislayed to select the number of days after which a sleeper
													will be deleted. Depending on whether you selected to remind sleepers this number of days counts either
													starting with this reminder or with the registration.',
	'ACP_USERREMINDER_SLEEPER_DELETETIME'		=> 'Number of days until deletion',
	// ACP Zeroposter settings
	'ACP_USERREMINDER_ZEROPOSTER_CONFIG'		=> 'Zeroposter configuration',
	'ACP_USERREMINDER_ZEROPOSTER_CONFIG_TEXT'	=> 'Here you can choose whether zeroposters should be treated like original inactive users. If you activate this setting you will be able to define the inactive settings for zeroposters like those for inactive users. In this case zeroposters will be displayed in an extended table showing the dates of the first and second reminder and a select box for deletion like the table for users to be reminded.',
	'ACP_USERREMINDER_REMIND_ZEROPOSTER'		=> 'Do you want to remind and delete zeroposters like inactive users?',
	'ACP_USERREMINDER_ZP_INACTIVE'				=> 'Number of days a zeroposter must be offline before this user is viewed as inactive',
	'ACP_USERREMINDER_ZP_DAYS_REMINDED'			=> 'Number of days before a zeroposter regarded as inactive will get the second reminder mail;<br>
													sending a second mail is inactivated if you input ´0´',
	'ACP_USERREMINDER_ZP_AUTOREMIND'			=> 'Send reminder mails automatically?',
	'ACP_USERREMINDER_ZP_DAYS_UNTIL_DELETED'	=> 'Number of days after last reminder before a zeroposter can be deleted',
	'ACP_USERREMINDER_ZP_AUTODELETE'			=> 'Delete zeroposters automatically?',
	// ACP Protection settings
	'ACP_USERREMINDER_PROTECTION_CONFIG'		=> 'Protected users configuration',
	'ACP_USERREMINDER_PROTECTION_CONFIG_TEXT'	=> 'You can also name users who are protected against any reminder emails and deletion. You can either select individual users with their username and/or all members of a default group by selecting this group. Both selections work independently.',
	'ACP_USERREMINDER_PROTECTED_MEMBERS'		=> 'Input of the usernames of users you want to protect against being reminded and deleted.<br>Each username MUST BE on its own line!',
	'ACP_USERREMINDER_PROTECTED_GROUPS'			=> 'Please select the default group(s) whose members are to be protected against being reminded and deleted. Groups already selected are highlighted.<br>While pressing and holding the ´Ctrl´ key you can select more than one group by clicking the respective names',
	// ACP Mail settings
	'ACP_USERREMINDER_MAIL_SETTINGS_TITLE'		=> 'Email configuration',
	'ACP_USERREMINDER_MAIL_LIMITS_TEXT'			=> 'Here you can enter the limits defined by your provider for sending emails; these settings are important to
													prevent losing emails during sending a large number of emails which exceeds those limits.<br>
													The pre-defined values stand for a maximum number of 150 emails which can be sent within one hour
													(3600 seconds). <strong>Please enter the values which apply to your provider!</strong>',
	'ACP_USERREMINDER_MAIL_LIMIT_NUMBER'		=> 'Maximum number of emails',
	'ACP_USERREMINDER_MAIL_LIMIT_TIME'			=> 'Time frame in which this number of emails can be sent',
	'ACP_USERREMINDER_MAIL_LIMIT_SECONDS'		=> 'seconds',
	'ACP_USERREMINDER_CRON_EXP'					=> 'For your information you can see here at what time the cron task for sending emails was run the last time, how many emails can
													be sent currently without going into the queue and how many emails are currently waiting in the mail queue.',
	'ACP_USERREMINDER_LAST_CRON_RUN'			=> 'Last Cron run',
	'ACP_USERREMINDER_AVAILABLE_MAIL_CHUNK'		=> 'Currently available number of emails',
	'ACP_USERREMINDER_MAILS_WAITING'			=> 'Total number of mails currently in User Reminder´s mail queue',
	'ACP_USERREMINDER_EMAIL_BCC_TEXT'			=> 'Here you can set one email address each for sending a blind carbon copy and/or a carbon copy of the reminding emails to.',
	'ACP_USERREMINDER_EMAIL_BCC'				=> 'Send a blind carbon copy to',
	'ACP_USERREMINDER_EMAIL_CC'					=> 'Send a carbon copy to',
	'ACP_USERREMINDER_EMAIL_FROM'				=> 'From address used for reminder mails',
	'ACP_USERREMINDER_EMAIL_FROM_TEXT'			=> 'Here you can set an email address which will be used as the FROM email address in all the mails generated by User Reminder. If you leave this field empty the „From email address“ from the „Email settings“ tab will be used.',
	'ACP_USERREMINDER_SUPPRESS_REPLYTO'			=> 'Suppress the reply-to address of reminder mails',
	'ACP_USERREMINDER_SUPPRESS_REPLYTO_TEXT'	=> 'If you want to suppress the reply-to address in reminding mails, e.g. because you are using a noreply address as sender, you
													can do this here. After activating this setting the reply-to address will be deleted from the header of reminding mails.',
	// ACP Mail text edit
	'ACP_USERREMINDER_MAIL_EDIT_TITLE'			=> 'Edit the email texts',
	'ACP_USERREMINDER_MAIL_EDIT_TEXT'			=> 'Here you can edit the pre-set text of the first and second reminding email.',
	'ACP_USERREMINDER_MAIL_LANG'				=> 'Select language',
	'ACP_USERREMINDER_MAIL_FILE'				=> 'Select the file you want to edit',
	'ACP_USERREMINDER_MAIL_ONE'					=> '1st. reminder',
	'ACP_USERREMINDER_MAIL_TWO'					=> '2nd. reminder',
	'ACP_USERREMINDER_MAIL_SLEEPER'				=> 'Sleeper reminder',
	'ACP_USERREMINDER_MAIL_PREVIEW'				=> 'In the window to the right you can edit the text of the chosen email. By clicking on the ´Preview´ button the text is shown below as
													it will be displayed in the sent email. The tokens will be replaced with your respective data. Together with the preview a button will be available
													to save the text as a file on your server.<br>
													You can use the following tokens as placeholders for the respective data of the addressed user:<br>
													- {USERNAME}: The members nickname<br>
													- {LAST_VISIT}: Date of the last login<br>
													- {LAST_REMIND}: Date of the first reminding mail<br>
													- {REG_DATE}: Date of registration<br>
													The following tokens can be used as placeholders for system data:<br>
													- {SITENAME}: Name of your forum<br>
													- {FORGOT_PASS}: Link to ´I have forgotten my password´<br>
													- {ADMIN_MAIL}: The admins email address<br>
													- {EMAIL_SIG}: Salutation<br>
													- {DAYS_INACTIVE}: The above defined number of days of inactivity<br>
													- {DAYS_TIL_DELETE}: The above defined number of days until deletion<br>
													- {DAYS_DEL_SLEEPERS}: The above defined number of days until a sleeper is deleted<br>',
	'ACP_USERREMINDER_MAIL_LOAD_FILE'			=> 'Load file',
	'ACP_USERREMINDER_PREVIEW_TEXT'				=> 'Please note:<br>In the preview text the tokens for the data of the addressed user are replaced with your respective data, this means that the resulting text logically might not make any sense.',
	'ACP_USERREMINDER_MAIL_SAVE_FILE'			=> 'Save file',
	'ACP_USERREMINDER_FILE_NOT_FOUND'			=> 'Unable to load file ´%s´.',
	'ACP_USERREMINDER_FILE_ERROR'				=> 'An error occurred while saving the file ´%s´!<br>The File <strong>has not been saved</strong>!',
	'ACP_USERREMINDER_FILE_SAVED'				=> 'Successfully saved the file ´%s´.',
	'ACP_USERREMINDER_SEND_TESTMAIL'			=> 'Send a test mail to this email address',
	'ACP_USERREMINDER_SEND_TESTMAIL_EXPL'		=> 'Use the preselected email address or enter another valid address to which a test mail containing the a.m. selected mail text in the a.m. language will be sent.<br>
													NOTE: If the text has been edited please save it priot to sending the test mail, otherwise the unedited text will be used!',
	'ACP_USERREMINDER_ENTER_EMAIL_ADDRESS'		=> 'Enter a valid email address',
	'ACP_USERREMINDER_SENDMAIL'					=> 'Send mail',
	'ACP_USERREMINDER_TESTMAIL_SENT'			=> 'Test mail has been sent, please check the inbox of the specified mail box.',
	// ACP Reminder
	'ACP_USERREMINDER_REMINDER'					=> 'Remind users',
	'ACP_USERREMINDER_REMINDER_EXPLAIN'			=> 'A list of those users who were online and posted something but have been offline for the number of days defined in the settings tab to qualify as inactive.
													You can manually select these users to send them the reminding emails or delete them after the set period of time after the second reminder has passed.
													The deletion is not selectable until the defined periods in the setting tab have passed without this user having at least once logged in.',
	'ACP_USERREMINDER_REMINDER_ONE'				=> 'First reminder',
	'ACP_USERREMINDER_REMINDER_TWO'				=> 'Second reminder',
	'ACP_USERREMINDER_NO_ENTRIES'				=> 'No data available',
	'ACP_USERREMINDER_SORT_DESC'				=> 'Ascending',
	'ACP_USERREMINDER_SORT_ASC'					=> 'Descending',
	'ACP_USERREMINDER_KEY_RD'					=> 'Registration date',
	'ACP_USERREMINDER_KEY_LV'					=> 'Last visit',
	'ACP_USERREMINDER_KEY_RO'					=> '1st reminder',
	'ACP_USERREMINDER_KEY_RT'					=> '2nd reminder',
	// ACP Sleeper
	'ACP_USERREMINDER_SLEEPER'					=> 'Sleepers',
	'ACP_USERREMINDER_SLEEPER_EXPLAIN'			=> 'A list of those users who have never been online after registration and activation.',
	'ACP_USERREMINDER_REMINDER'					=> 'Reminder',
	'ACP_USERREMINDER_KEY_RE'					=> 'Date',
	// ACP Zeroposters
	'ACP_USERREMINDER_ZEROPOSTER'				=> 'Zeroposters',
	'ACP_USERREMINDER_ZEROPOSTER_EXPLAIN'		=> 'A list of those users who are online on a regular basis but have never posted anything.',
	// Support and Copyright
	'ACP_USERREMINDER_SUPPORT'					=> 'If you want to donate to User Reminder´s development please use this link',
	'ACP_USERREMINDER_VERSION'					=> '<img src="https://img.shields.io/badge/Version-%1$s-green.svg?style=plastic" /><br>&copy; 2019 - %2$d by Mike-on-Tour',
]);
