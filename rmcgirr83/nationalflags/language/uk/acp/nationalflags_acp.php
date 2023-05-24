<?php

/**
*
*
* @package - National Flags language
* @copyright (c) RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'Тут ви можете додавати/редагувати та видаляти різні прапори.',
	'ACP_NO_UPLOAD'						=> '<br><strong>Якщо ви хочете використовувати зображення, ви повинні завантажити їх в ext/rmcgirr83/nationalflags/flags перед тим, як додати новий прапор. Назва прапора повинна бути в нижньому регістрі, тобто uk.gif</strong>',
	'ACP_FLAG_USERS'					=> 'Кількість користувачів',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'Прапор за замовчуванням',
	'FLAG_DEFAULT_EXPLAIN'				=> 'Якщо ви встановите значення так, прапорець буде показано першим у виборі профілю користувача, якщо користувач ще не вибрав прапор.',
	'FLAG_EDIT'							=> 'Редагувати прапор',
	'FLAG_NAME'							=> 'Назва прапора',
	'FLAG_NAME_EXPLAIN'					=> 'Назва прапора. Назва прапора відображається так, як вона є тут.',
	'FLAG_IMG'							=> 'Назва зображення',
	'FLAG_IMG_EXPLAIN'					=> 'Назва зображення. Приклад: uk.gif. Нові зображення слід завантажувати в ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'Зображення прапора',
	'FLAG_ADD'							=> 'Додати новий прапор',
	'FLAG_UPLOAD'						=> 'Завантажити прапор',
	'FLAG_UPLOAD_NOTICE'				=> 'Завантаження зображення замінить файл зображення, що вже знаходиться на сервері, якщо такий існує. Файл зображення <strong>чутливий</strong> до регістру.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'Ви не зможете перезаписати вже існуюче зображення з такою ж назвою і розширенням, як показано нижче.',
	'FLAG_FOUND'						=> 'Прапор знайдено',
	'IMAGES_ON_SERVER'					=> 'Назви зображень на сервері',

	//Settings
	'FLAGS_REQUIRED'					=> 'Обовязкове поле',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'Вибір опції "Так" тут змусить нових реєстрантів, а також тих, хто відвідує їхній профіль користувача, вибрати прапорець',
	'FLAGS_DISPLAY_AVATARS'				=> 'Відображати аватарки',
	'FLAGS_DISPLAY_AVATARS_EXPLAIN'		=> 'Якщо встановлено так, аватарки користувачів відображатимуться на сторінці прапорів. Якщо користувач не має аватарки, то для стилю за замовчуванням буде показано "без аватарки".',
	'FLAGS_DISPLAY_MSG'					=> 'Відобразити повідомлення',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Якщо ви виберете "Так", на форумі зявиться повідомлення, в якому користувачеві буде запропоновано вибрати прапор',
	'FLAGS_NUM_DISPLAY'					=> 'Кількість прапорів',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'Кількість прапорів для відображення на головній сторінці форуму',
	'FLAGS_ON_INDEX'					=> 'Відображення на головній сторінці',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'Відображати зведення про користувачів прапорів на головній сторінці',
	'FLAGS_DISPLAY_OPTIONS'				=> 'Параметри відображення',
	'FLAGS_DISPLAY_VIEWFORUM'			=> 'Відображати прапори при перегляді тем у форумах',
	'FLAGS_DISPLAY_FORUMROW'			=> 'Відображати прапори на сторінках індексу та форуму (поруч з іменами користувачів)',
	'FLAGS_DISPLAY_SEARCH'				=> 'Відображати прапори під час пошуку дописів',
	'FLAGS_DISPLAY_MEMBERLIST'			=> 'Відображати прапори в списку учасників',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'Показуйте прапори гостям',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'Якщо ви виберете "Так", прапори будуть показані гостям і ботам',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'Положення прапора',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'Де ви хочете, щоб відображався прапорець користувача',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'Після аватара користувача', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'Перед аватаром користувача', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'Після імені користувача', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'Перед іменем користувача', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'Вище рангу користувача', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'Нижче рейтингу користувачів', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'Після полів профілю', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'Перед полями профілю', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'Після контактних полів', //0

	//Logs, messages and errors
	'MSG_FLAGS_DELETED'					=> 'Прапор видалено.',
	'MSG_CONFIRM'						=> '<strong>Ви впевнені, що хочете видалити цей прапор?</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> [
		1	=> '<br><strong>%d</strong> користувач має цей прапорець, і вам доведеться вибрати інший прапорець, якщо ви вирішите видалити цей.',
		2	=> '<br><strong>%d</strong> користувачі мають цей прапорець, і вам доведеться вибрати інший прапорець, якщо ви вирішите видалити цей прапорець.',
	],
	'MSG_FLAG_EDITED'					=> 'Прапор відредаговано.',
	'MSG_FLAG_ADDED'					=> 'Додано новий прапор.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Імя прапора не визначено, це обовязкове поле.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'Зображення прапора не визначено, це обовязкове поле.',
	'FLAG_ERROR_NOT_EXIST'				=> 'Вибраного прапора не існує.',
	'FLAG_CONFIG_SAVED'					=> '<strong>Змінено налаштування державних прапорів</strong>',
	'FLAG_NAME_EXISTS'					=> 'Прапор з такою назвою вже існує',
	'FLAG_SETTINGS_CHANGED'				=> 'Змінено налаштування державних прапорів.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'Не вдалося завантажити прапор до %s. Зображення прапора може вже існувати.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'Передача була перервана, оскільки файл був ідентифікований як потенційна загроза.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'Цей файл не може бути показано, оскільки розширення <strong>%s</strong> не дозволено.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'Файл прапорів порожній.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'Надісланий прапор не може бути переданий, оскільки дані здаються неправильними або пошкодженими.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'Позначити невідповідність типу файлу: очікуване розширення %1$s, а подано розширення %2$s.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> '%s - невірне імя файлу.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'Прапор не може бути перенесений',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'Файл не може бути переданий повністю.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'Розмір прапора занадто великий.<br>Максимальний розмір, встановлений у файлі php.ini, не може бути визначений.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'Розмір прапора занадто великий.<br>Максимальний розмір, встановлений у файлі php.ini, не може бути визначений.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'Вказаний прапор не вдалося завантажити, оскільки закінчився час очікування запиту.',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'Розміри прапора визначити не вдалося',
	'FLAG_IMAGE_URL_INVALID'				=> 'Адреса прапора невірна',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'Файл не знайдено.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'Розмір прапора має бути в межах від 0 до %1d %2s.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'Прапор повинен бути рівно %3$ в ширину і %4$ у висоту. Надіслане зображення має ширину %5$ та висоту %6$.',
	'FLAGS_REQUIRE_540'			=> 'Для роботи цього розширення потрібно щонайменше PHP версії 7.1 та phpBB версії 3.2.0 або новішої.  Будь ласка, оновіть вашу версію PHP та/або версію phpBB, щоб використовувати розширення.',

	// end comment
	'TOO_SMALL_FLAGS_NUM_DISPLAY'	=> 'Вибрано занадто малу кількість прапорів для відображення',
	'TOO_LARGE_FLAGS_NUM_DISPLAY'	=> 'Число, вибране для кількості прапорів для відображення, занадто велике',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Пожертвувати за допомогою PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Купи мені пива за створення цього розширення',
	'BUY_ME_A_BEER_SHORT'		=> 'Зробити пожертву на це розширення',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Це розширення є повністю безкоштовним. Це проект, на який я витрачаю свій час для задоволення і користі спільноти phpBB. Якщо вам подобається користуватися цим розширенням, або якщо воно принесло користь вашому форуму, будь ласка, розгляньте можливість <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">пригостити мене пивом</a>.</a>. Будемо дуже вдячні за допомогу. <i class="fa fa-smile-o" style="color:green;font-size: 1.5em;" aria-hidden="true"></i>',
    
));
