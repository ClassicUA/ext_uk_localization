<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_IMAGEUPLOAD_SAVED'									=> 'Image Upload налаштування збережено',
	'ACP_IMAGEUPLOAD_VERSION'								=> 'Версія',
	'ACP_IMAGE_UPLOAD_CONFIGURATION'						=> 'Image Upload Конфігурація',
	'ACP_IMAGEUPLOAD_ENABLE'								=> 'Увімкнути Image Upload',
	'ACP_IMAGEUPLOAD_ENABLE_EXPLAIN'						=> 'Глобальне налаштування для ввімкнення Image Upload.',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE'							=> 'Увімкнути зображення в індексі',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE_EXPLAIN'					=> 'Глобальне ввімкнення/вимкнення зображень в індексі для всіх учасників.<br />Учасники можуть налаштувати в UCP, чи хочуть вони бачити завантажені зображення в індексі.',
	'ACP_IMAGEUPLOAD_NUMBER'								=> 'Розмір завантаження',
	'ACP_IMAGEUPLOAD_NUMBER_EXPLAIN'						=> 'Встановлений розмір завантаження в МБ за замовчуванням - 2 МБ.',
	'ACP_IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'						=> 'The maximum size your php.ini allows is <strong>%1$s %2$s</strong>!',
	'ACP_IMAGEUPLOAD_REALLY_DELETE_IMAGE'					=> 'Дійсно видалити зображення?',
	'ACP_IMAGEUPLOAD_TITLE'									=> 'Назва зображення',
	'ACP_IMAGEUPLOAD_TITLE_REAL'							=> 'Справжня назва зображення',
	'ACP_IMAGEUPLOAD_PREVIEW'								=> 'Попередній перегляд',
	'ACP_IMAGEUPLOAD_WIDTH_HEIGHT'							=> 'Ширина/Висота',
	'ACP_IMAGEUPLOAD_FOLDER_SIZE'							=> 'Загальний розмір папки',
	'ACP_IMAGEUPLOAD_USERNAME'								=> 'Завантажив',
	'ACP_IMAGEUPLOAD_SIZE'									=> 'Розмір',
	'ACP_MULTI_IMAGES'		=>	[
		1 => '%s image',
		2 => '%s images',
	],
	'ACP_IMAGEUPLOAD_SORT_USERNAME'							=> "Ім'я користувача",
	'ACP_IMAGEUPLOAD_SORT_DATE'								=> "Дата",
	'ACP_IMAGEUPLOAD_NOT_SELECTED'							=> 'Не вибрано жодного зображення',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE'							=> 'Увімкнути публікацію зображень у mChat',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE_EXPLAIN'					=> 'Встановіть значення так, щоб вставляти завантажені зображення в індекс при натисканні на кнопку вставки.',
	'ACP_IMAGEUPLOAD_POST_ENABLE'							=> 'Увімкнути кнопку завантаження зображень на сторінках публікацій',
	'ACP_IMAGEUPLOAD_POST_ENABLE_EXPLAIN'					=> 'Встановіть значення так, щоб показувати кнопку завантаження на сторінках публікацій.',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE'						=> 'Увімкнути зображення користувачів на сторінках публікацій',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE_EXPLAIN'				=> 'Глобальне ввімкнення/вимкнення зображень на сторінках публікацій',
	'ACP_IMAGEUPLOAD_EXT'									=> 'Дозволені розширення',
	'ACP_IMAGEUPLOAD_EXT_EXPLAIN'							=> 'Дозволені розширення, розділені комою (Приклад: gif,jpeg,jpg,png)',
	'ACP_IMAGE_UPLOAD_LINK_SETTINGS'						=> 'Налаштування посилання для завантаження зображень',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK'					=> 'Увімкнути пряме посилання',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK_EXPLAIN'			=> 'Пряме посилання на зображення',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK'						=> 'Увімкнути URL-теги',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK_EXPLAIN'				=> '[url=FILENAME]НАЗВА САЙТУ[/url]',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK'						=> 'Увімкнути теги IMG',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK_EXPLAIN'				=> '[img]ІМ\'Я ФАЙЛУ[/img]',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK'					=> 'Увімкнути URL-IMG теги',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK_EXPLAIN'			=> '[url=FILENAME][img]ІМ\'Я ФАЙЛУ[/img][/url]',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE'							=> 'Увімкнути багатофайлове завантаження',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE_EXPLAIN'					=> 'Глобальне ввімкнення/вимкнення для декількох завантажених зображень.',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE'										 => 'Увімкнути спливаючий центр',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE_EXPLAIN'								 => 'Вмикає спливаюче вікно на тій самій сторінці',
		'ACP_IMAGEUPLOAD_NAV_ENABLE'											=> 'Вмикає піктограму панелі навігації',
		'ACP_IMAGEUPLOAD_NAV_ENABLE_EXPLAIN'									=> 'Вмикає/вимикає посилання на панель навігації',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE'											=> 'Увімкнути кнопку завантаження зображень у mchat',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE_EXPLAIN'									=> 'Вмикає кнопку завантаження зображень machats',
));
