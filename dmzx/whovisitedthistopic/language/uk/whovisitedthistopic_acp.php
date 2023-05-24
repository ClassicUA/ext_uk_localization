<?php
/**
*
* @package phpBB Extension - Who Visited This Topic
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
	$lang = array();
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS'				=> 'Увімкнути "Хто відвідував цю тему" в темах',
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS_EXPLAIN'		=> 'Це покаже, хто відвідував цю тему в переглянутих темах.',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS'				=> 'Увімкнути лічильник тем "Хто відвідав цю тему"',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS_EXPLAIN'		=> 'Це покаже лічильник "Хто відвідував цю тему" в темах.',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR'					=> 'Увімкнути аватарки "Хто відвідав цю тему" в темах',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR_EXPLAIN'			=> 'Це покаже аватарки "Хто відвідав цю тему" в темах.',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS'			=> 'Увімкніть опцію "Хто відвідував цю тему" в профілі',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS_EXPLAIN'	=> 'Буде показано "Хто відвідував цю тему" в профілі'.,
	'WHOVISITEDTHISTOPIC_SETTING'						=> 'Встановити значення для параметра "Хто відвідував цю тему" в темах',
	'WHOVISITEDTHISTOPIC_SETTING_EXPLAIN'				=> 'Значення регулюється від 2 до 255 учасників. <em>За замовчуванням 10.</em>',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING'					=> 'Встановити значення для параметра "Останні переглянуті теми" у профілі',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING_EXPLAIN'			=> 'Значення регулюється від 2 до 255. <em>За замовчуванням 10.</em>',
	'WHOVISITEDTHISTOPIC_DISABLED_TOPIC'				=> 'Встановіть вимкнено для параметра “Увімкнути "Хто відвідував цю тему" в темах” у значення Так, щоб ввести значення',
	'WHOVISITEDTHISTOPIC_DISABLED_MEMBERPAGE'			=> 'Встановіть вимкнено для параметра "Увімкнути, хто відвідував цю тему в профілі" у значення Так, щоб ввести значення',
	'WHOVISITEDTHISTOPIC_SETTINGS_EXPLAIN'				=> 'Перейдіть на сторінку <em><strong>Who Visited This Topic</strong></em> у розділі "Дозволи для груп", щоб налаштувати дозволи для кожної групи.',
));
