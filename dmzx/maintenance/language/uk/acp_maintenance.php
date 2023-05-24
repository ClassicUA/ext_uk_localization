<?php
/**
 *
 * @package phpBB Extension - Maintenance mode
 * @copyright (c) 2020 dmzx - https://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'MAINTENANCE_SAVED'							=> 'Збережено налаштування режиму обслуговування',
	'MAINTENANCE_TEXT'							=> 'Текст обслуговування',
	'MAINTENANCE_TEXT_EXPLAIN'					=> 'Якщо ви введете тут текст, "Вимкнути текст на форумі" буде перезаписано.<br />HTML дозволено.',
	'MAINTENANCE_TIMER'							=> 'Увімкнути відлік часу',
	'MAINTENANCE_TIMER_EXPLAIN'					=> 'Увімкнути зворотний відлік часу до режиму обслуговування.',
	'MAINTENANCE_TIME'							=> 'Встановити час зворотного відліку', 'Встановити час зворотного відліку',
	'MAINTENANCE_TIME_EXPLAIN'					=> 'Приклад: 31.12.2023 00:00:00',
	'MAINTENANCE_BACKGROUND_IMAGE'				=> 'Введіть URL-адресу фонового зображення',
	'MAINTENANCE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Залиште порожнім для фонового зображення за замовчуванням.<br />Або введіть URL-адресу фонового зображення.',
	'MAINTENANCE_VERSION'						=> 'Версія',
	'MAINTENANCE_SETTINGS_EXPLAIN'				=> 'Режим обслуговування не активний перейдіть до %sНалаштування плати%s, щоб увімкнути режим обслуговування.<br />Налаштування будуть показані, коли режим обслуговування увімкнено.',
	'MAINTENANCE_SOCIAL'						=> 'Увімкнути соціальне посилання',
	'MAINTENANCE_SOCIAL_EXPLAIN'				=> 'Якщо увімкнути соціальне посилання, ви можете додавати посилання на різні соціальні мережі.',
	'MAINTENANCE_SETTINGS_SOCIAL'				=> 'Налаштування соціального посилання',
	'MAINTENANCE_SOCIAL_FACEBOOK'				=> 'Увімкнути Facebook',
	'MAINTENANCE_SOCIAL_FACEBOOK_EXPLAIN'		=> 'Увімкнути іконку Facebook.',
	'MAINTENANCE_SOCIAL_FACEBOOK_URL'			=> 'URL-адреса Facebook',
	'MAINTENANCE_SOCIAL_FACEBOOK_URL_EXPLAIN'	=> 'Введіть URL-адресу Facebook.',
	'MAINTENANCE_SOCIAL_TWITTER'				=> 'Увімкнути Twitter',
	'MAINTENANCE_SOCIAL_TWITTER_EXPLAIN'		=> 'Увімкнути іконку Twitter.',
	'MAINTENANCE_SOCIAL_TWITTER_URL'			=> 'Twitter URL',
	'MAINTENANCE_SOCIAL_TWITTER_URL_EXPLAIN'	=> 'Введіть URL-адресу Twitter.',
	'MAINTENANCE_SOCIAL_RSS'					=> 'Увімкнути RSS',
	'MAINTENANCE_SOCIAL_RSS_EXPLAIN'			=> 'Увімкнути іконку RSS.',
	'MAINTENANCE_SOCIAL_RSS_URL'				=> 'RSS URL',
	'MAINTENANCE_SOCIAL_RSS_URL_EXPLAIN'		=> 'Введіть URL-адресу RSS.',
	'MAINTENANCE_SOCIAL_YOUTUBE'				=> 'Увімкнути Youtube',
	'MAINTENANCE_SOCIAL_YOUTUBE_EXPLAIN'		=> 'Увімкнути іконку Youtube.',
	'MAINTENANCE_SOCIAL_YOUTUBE_URL'			=> 'URL-адреса Youtube',
	'MAINTENANCE_SOCIAL_YOUTUBE_URL_EXPLAIN'	=> 'Введіть URL-адресу Youtube.',
	'MAINTENANCE_SOCIAL_LINKEDIN'				=> 'Увімкнути Linkedin',
	'MAINTENANCE_SOCIAL_LINKEDIN_EXPLAIN'		=> 'Увімкнути іконку Linkedin.',
	'MAINTENANCE_SOCIAL_LINKEDIN_URL'			=> 'URL-адреса Linkedin',
	'MAINTENANCE_SOCIAL_LINKEDIN_URL_EXPLAIN'	=> 'Введіть URL-адресу Linkedin.',
	'MAINTENANCE_SOCIAL_GITHUB'					=> 'Github увімкнути',
	'MAINTENANCE_SOCIAL_GITHUB_EXPLAIN'			=> 'Увімкнути іконку Github.',
	'MAINTENANCE_SOCIAL_GITHUB_URL'				=> 'Github URL',
	'MAINTENANCE_SOCIAL_GITHUB_URL_EXPLAIN'		=> 'Введіть URL-адресу Github.',
	'MAINTENANCE_SOCIAL_EMAIL'					=> 'Email увімкнути',
	'MAINTENANCE_SOCIAL_EMAIL_EXPLAIN'			=> 'Увімкнути іконку електронної пошти.',
	'MAINTENANCE_SOCIAL_EMAIL_ADRESS'			=> 'Адреса електронної пошти',
	'MAINTENANCE_SOCIAL_EMAIL_ADRESS_EXPLAIN'	=> 'Введіть адресу електронної пошти.',
));
