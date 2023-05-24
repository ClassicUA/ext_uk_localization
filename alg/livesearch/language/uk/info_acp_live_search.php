<?php
/**
*
* livesearch [Russian]
*
* @package livesearch
* @copyright (c) 2014 alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
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

$lang = array_merge($lang, array(
	'ACP_LIVE_SEARCH'		=> 'Швидкий (живий) пошук',
	'ACP_LIVE_SEARCH_SETTINGS'				=> 'Налаштування швидкого пошуку',
	'ACP_LIVE_SEARCH_SETTINGS_FORUMS'				=> 'Швидкий пошук по форумах',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS'				=> 'Швидкий пошук по темах',
	'ACP_LIVE_SEARCH_SETTINGS_SIMILARTOPICS'				=> 'Швидкий пошук схожих тем під час створення нової теми',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=>'<strong>Важливо: Для коректної роботи налаштувань розширення потрібен MySQL версії 4.1 або вище!</strong><br />',
	'ACP_LIVE_SEARCH_SETTINGS_USERS'				=> 'Швидкий пошук по користувачах',

	'LIVE_SEARCH_MIN_NUM_SYMBLOLS'				=> 'Мінімальна кількість символів для пошуку',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_EXPLAIN'				=> 'Пошук починатиметься з введеної кількості символів',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW'				=> 'Кількість результатів',
	'LIVE_SEARCH_MAX_ITEMS_TO_SHOW_EXPLAIN'				=> 'Обмежує число результатів, які будуть показані у випадаючому списку. Рекомендоване значення 20.',
	'LIVE_SEARCH_EXCLUDE_FORUMS'		=> 'Форуми, вилучені з живого пошуку',
	'LIVE_SEARCH_EXCLUDE_FORUMS_EXPLAIN'		=> 'Список розділених комами номерів форумів',

	'LIVE_SEARCH_FORUM_ON'				=> '<strong> Увімкнути швидкий пошук по форумах</strong>',
	'LIVE_SEARCH_TOPIC_ON'				=> '<strong> Увімкнути швидкий пошук по темах</strong>',
	'LIVE_SEARCH_USER_ON'				=> '<strong> Увімкнути швидкий пошук по користувачам</strong>',
	'LIVE_SEARCH_SIMILARTOPIC_ON'				=> '<strong> Увімкнути швидкий пошук схожих тем</strong>',
	'LIVE_SEARCH_SHOW_IN_NEW_WINDOW'				=> 'Відображати результати в новому вікні ',
	'LIVE_SEARCH_SHOW_FOR_GUEST'				=> 'Показувати для гостей ',
	'LIVE_SEARCH_USE_EYE_BUTTON'				=> 'Використовувати кнопку "око" для тимчасового приховування панелі пошуку ',
	//*******version 2.0.*******
	'LIVE_SEARCH_TOPIC_LINK_TYPE'				=> 'Відображати посилання на тему в канонічному вигляді ',
	'LIVE_SEARCH_TOPIC_LINK_TYPE_EXPLAIN'		=> 'Канонічний вигляд посилання: "forum/viewtopic.php?f=N1&t=N2", неканонічний (СЕО-сумісний) вигляд:"forum/viewtopic.php?t=N2"',
	'LIVE_SEARCH_ACP_ON'				=> '<strong> Увімкнути швидкий пошук у панелі адміністратора</strong>',
	'ACP_LIVE_SEARCH_SETTINGS_ACP'				=> 'Швидкий пошук форумів, користувачів, груп у панелі адміністратора',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_USERS'				=> 'Мінімальна кількість символів для пошуку користувачів',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_GROUPS'				=> 'Мінімальна кількість символів для пошуку груп',
	'LIVE_SEARCH_MIN_NUM_SYMBLOLS_FORUMS'				=> 'Мінімальна кількість символів для пошуку форумів',
	//*******version 2.0.1.*******
	'LIVE_SEARCH_MCP_ON'				=> '<strong> Увімкнути швидкий пошук у панелі модератора</strong>',
	'MCP_LIVE_SEARCH_SETTINGS_MCP'				=> 'Швидкий пошук форумів, користувачів, груп у панелі модератора',
	//*******version 2.0.2.*******
	'LIVE_SEARCH_HIDE_AFTER_SELECT'				=> 'Приховувати блок результатів пошуку після вибірки ',
));
