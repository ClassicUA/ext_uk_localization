<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'IMAGEUPLOAD_UPLOAD'						=> 'Img-Upload',
	'IMAGEUPLOAD_UPLOAD_SECTION'				=> 'Image Upload section',
	'IMAGEUPLOAD_UPLOAD_MESSAGE'				=> 'Завантажте ваше зображення сюди. (Зауважте, що ця папка буде очищена, а всі завантаження будуть зареєстровані)',
	'IMAGEUPLOAD_NOT_ENABELD'					=> 'Image Upload не ввімкнено',
	'IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'				=> 'Максимальний розмір файлу становить <strong>%1$s %2$s</strong>! Через час, який може знадобитися для завантаження, це значення може бути меншим!',
	'IMAGEUPLOAD_NO_FILENAME'					=> 'Ви повинні ввести файл, який належить до вашого завантаження!',
	'IMAGEUPLOAD_CURRENT_VERSION'				=> 'Версія',
	'IMAGEUPLOAD_NEW_FILENAME'					=> 'Ім\'я файлу',
	'IMAGEUPLOAD_SUCCEEDED'						=> 'Завантаження виконано успішно!',
	'IMAGEUPLOAD_DIRECT_LINK'					=> 'Пряме посилання',
	'IMAGEUPLOAD_URL_LINK'						=> 'URL',
	'IMAGEUPLOAD_IMG_LINK'						=> 'IMG',
	'IMAGEUPLOAD_URLIMG_LINK'					=> 'URL-IMG',
	'IMAGEUPLOAD_BY'							=> 'Image Upload by',
	'IMAGEUPLOAD_COPY'							=> 'копія',
	'IMAGEUPLOAD_UPLOADED_IMAGES'				=> 'Ваші завантажені зображення',
	'IMAGEUPLOAD_POSTINGPAGE'					=> 'Тут ви знайдете завантажені вами зображення, клацніть зображення для попереднього перегляду.',
	'IMAGEUPLOAD_INDEXPAGE'						=> 'Тут ви знайдете завантажені вами зображення, клацніть зображення для попереднього перегляду, просто перетягніть його.',
	'IMAGEUPLOAD_INDEXPAGE_CHAT'				=> 'Тут ви знайдете завантажені зображення, клацніть зображення для попереднього перегляду, просто перетягніть його або натисніть кнопку заголовка, щоб опублікувати безпосередньо в mChat.',
	'IMAGEUPLOAD_UPC_INDEX'						=> 'Перегляньте завантажені зображення на індексній сторінці',
	'IMAGEUPLOAD_COLLAPSIBLE_CATEGORIES_TITLE'			=> [
		0 => 'Hide image upload',
		1 => 'Show image upload',
	],
	'IMAGEUPLOAD_UCP_DELETE_IMAGES'				=> 'Видалити зображення',
	'IMAGEUPLOAD_UCP_DELETED_IMAGES'			=> 'Видалене зображення',
	'IMAGEUPLOAD_PAGE_RETURN'					=> 'Повернення до завантажених зображень',
	'IMAGEUPLOAD_DIRECTORY_FAIL'				=> 'Помилка: каталог <strong>%s</strong> недоступний для запису!',
	'IMAGEUPLOAD_IMAGES_PAGINATION'		=>	[
		1 => '%s зображення',
		2 => '%s зображення',
	],
	'IMAGEUPLOAD_INSERT_IMAGE'					=> 'Вставити зображення',
	'IMAGEUPLOAD_INSERT_MCHAT_IMAGE'			=> 'Вставити зображення в mChat',
	'IMAGEUPLOAD_MULTI_UPLOAD_EXPLAIN' 			=> 'Розділ для завантаження декількох зображень.<br>Зображення, що завантажуються, будуть автоматично додані до ваших завантажених зображень.<br>Зображення, розмір яких перевищує максимально допустимий, не завантажуються.<br>При завантаженні декількох зображень не буде надано посилання або попереднього перегляду.',
	'IMAGEUPLOAD_MULTI_UPLOAD_DRAG' 			=> 'Перетягніть свої файли сюди',
	'IMAGEUPLOAD_MULTI_UPLOAD_BROWSE' 			=> 'Або переглянути',
	'IMAGEUPLOAD_CLOSED'						=> 'Закрити',
));
