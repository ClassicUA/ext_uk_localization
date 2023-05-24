<?php
/**
*
* Google Analytics extension for the phpBB Forum Software package.
* Russian translation by HD321kbps
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_GOOGLEANALYTICS'				=> 'Google Analytics',
	'ACP_GOOGLEANALYTICS_ID'			=> 'Google Analytics ID',
	'ACP_GOOGLEANALYTICS_ID_EXPLAIN'	=> 'Введіть свій Google Analytics ID код, Наприклад: <samp>UA-000000-00</samp> or Measurement ID <samp>G-XXXXXXXXXX</samp>.<br /><br />Google Analytics може відстежувати сеанси зареєстрованих користувачів на декількох пристроях, щоб забезпечити більш точну кількість користувачів у звітах. Щоб увімкнути цю розширену функціональність, необхідно налаштувати відстеження ідентифікатора користувача у своєму обліковому записі Google Analytics. <a href="https://support.google.com/analytics/answer/3123666">Натисніть для отримання додаткової інформації <i class="icon fa-external-link fa-fw" aria-hidden="true"></i></a>.',
	'ACP_GOOGLEANALYTICS_ID_INVALID'	=> '“%s” является недопустимым Google Analytics ID кодом.<br />Он должен быть в формате “UA-000000-00” or “G-XXXXXXXXXX”.',
	'ACP_GOOGLEANALYTICS_TAG_INVALID'	=> '“Глобальний тег сайту (gtag.js)" повинен бути обраним тегом сценарію Google Analytics при використанні ідентифікатора вимірювання.',
	'ACP_GA_ANONYMIZE_IP'				=> 'Увімкнути анонімізацію IP-адреси',
	'ACP_GA_ANONYMIZE_IP_EXPLAIN'		=> 'Увімкніть цю опцію, якщо ви хочете, щоб дані, зібрані Google Analytics, відповідали вимогам Загального регламенту захисту даних ЄС (GDPR). Зверніть увагу, що ввімкнення цієї опції може дещо знизити точність географічної звітності.',
	'ACP_GOOGLEANALYTICS_TAG'			=> 'Тег сценарію Google Analytics',
	'ACP_GOOGLEANALYTICS_TAG_EXPLAIN'	=> 'Выберите предпочитаемый код Google Analytics. Global Site Tag (gtag.js) - это текущий код, рекомендованный Google. Google Analytics tag (analytics.js) - это старый код. <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/migration">Натисніть для отримання додаткової інформації <i class="icon fa-external-link fa-fw" aria-hidden="true"></i></a>.',
	'ACP_GA_ANALYTICS_TAG'				=> 'Тег Google Analytics (analytics.js)',
	'ACP_GA_GTAGS_TAG'					=> 'Глобальний тег сайту (gtag.js)',
));
