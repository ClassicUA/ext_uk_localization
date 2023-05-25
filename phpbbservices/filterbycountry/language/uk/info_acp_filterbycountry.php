<?php
/**
 *
 * Filter by country. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Mark D. Hamill, https://www.phpbbservices.com
 * @license GNU General Public License, version 2 (GPL-2.0)
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
// Some characters you may want to copy&paste:
// » “ “ …
//

$lang = array_merge($lang, array(
    	'ACP_FBC'					=> 'Фільтрувати за країною',
	'ACP_FBC_STATS'				=> 'Статистика',
	'ACP_FBC_STATS_TITLE'		=> 'Фільтр за статистикою по країнах',
	'ACP_FBC_STATS_TITLE_EXPLAIN'	=> 'Ця сторінка містить звіт про дозволені або заблоковані запити до сторінок за країнами з моменту останнього ввімкнення статистики для розширення. Використовуйте стрілки вгору і вниз, щоб відсортувати стовпець за зростанням або спаданням. Статистика доступна тільки з %s. <strong>Якщо для країни не було запитів на сторінку, вона не відображається.</strong> Якщо ви виберете скинути статистику, всі статистичні дані будуть дорівнювати нулю, а всі рядки будуть видалені з таблиці статистики.',
	'ACP_FBC_TITLE'				=> 'Фільтр за налаштуваннями країни',
	'ACP_FBC_TITLE_EXPLAIN'		=> 'This extension allows you to filter traffic to your board by country. This product includes GeoLite2 data created by MaxMind, available from <a href="https://www.maxmind.com" target="_blank">https://www.maxmind.com</a>. Its GeoLite2 country database is refreshed every week automatically.',
	'ACP_FBC_TITLE_SHORT'		=> 'Налаштування',

	'LOG_ACP_FBC_BAD_ACCESS'				=> '<strong>Фільтр за країною: %1$s було заборонено доступ до форуму з IP-адреси %2$s, тому що доступ з країни/країн "%3$s" заборонено.',
	'LOG_ACP_FBC_CREATE_DIRECTORY_ERROR'	=> '<strong>Не вдалося створити теку %1$s. Це може бути пов\'язано з недостатніми правами доступу. Права доступу до файлів у теці мають бути встановлені на загальнодоступні для запису (777 на Unix-системах).</strong>',
	'LOG_ACP_FBC_DEBUG'						=> '<strong>%1$s</strong>',
	'LOG_ACP_FBC_DELETE_ERROR'				=> '<strong>Не вдалося видалити %1$s. Це може бути пов\'язано з недостатніми дозволами. Потрібні повні загальнодоступні привілеї на запис.</strong>',
	'LOG_ACP_FBC_EXTRACT_ERROR'				=> '<strong>Не вдалося витягти %1$s до %2$s. Згенеровано виключення "%3$s".</strong>',
	'LOG_ACP_FBC_FILTERBYCOUNTRY_SETTINGS'	=> '<strong>Filter by country налаштування оновлено</strong>',
	'LOG_ACP_FBC_FOPEN_ERROR'				=> '<strong>Не вдалося завантажити файл: %1$s. Сервіс MaxMind може тимчасово не працювати.</strong>',
	'LOG_ACP_FBC_GZIP_OPEN_ERROR'			=> '<strong>Не вдалося відкрити gzip-файл: %1$s</strong>',
	'LOG_ACP_FBC_HTTP_ERROR'				=> '<strong>Не вдалося завантажити файл: %1$s. Виникла неочікувана помилка HTTP з кодом %1$s.</strong>',
	'LOG_ACP_FBC_MAXMIND_ERROR'				=> '<strong>Звернення до бази даних кодів країн MaxMind викликало помилку. Швидше за все, база даних пошкоджена.</strong>',
	'LOG_ACP_FBC_READ_FILE_ERROR'			=> '<strong>Немає дозволів на читання для файлу: %1$s</strong>',
	'LOG_ACP_FBC_TARBALL_MOVE_ERROR'		=> '<strong>Не вдалося перемістити файл: %1$s</strong>',
	'LOG_ACP_FBC_WRITE_FILE_ERROR'			=> '<strong>Немає прав на запис для файлу: %1$s</strong>',
));
