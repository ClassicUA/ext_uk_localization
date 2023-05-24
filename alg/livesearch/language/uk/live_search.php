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
	'INCORRECT_SEARCH'			=> 'Некоректні параметри запитуваної дії',
	'LIVE_SEARCH_CAPTION'		=> 'Швидкий пошук',
	'LIVE_SEARCH_FORUM'		=> 'Форуми',
	'LIVE_SEARCH_FORUM_TXT'		=> 'Назва форуму...',
	'LIVE_SEARCH_FORUM_T'			=> 'Для швидкого пошуку почніть набирати назву форуму/категорії',
	'LIVE_SEARCH_GO_PROFILE'				=> 'Перейти до профілю',
	'LIVE_SEARCH_POSTS_BY_USER'		=> 'Повідомлення користувача',
	'LIVE_SEARCH_POSTS_BY_USER_BOARD'		=> '>у конференції',
	'LIVE_SEARCH_POSTS_BY_USER_FORUM'		=> '>>у форумі',
	'LIVE_SEARCH_POSTS_BY_USER_TOPIC'		=> '>>>в темі',
	'LIVE_SEARCH_TOOLTIP_ALL'		=> 'Пошук у всіх форумах конференції',
	'LIVE_SEARCH_TOOLTIP_BY_FORUM'		=> 'Пошук у форумі ',
	'LIVE_SEARCH_TOOLTIP_BY_TOPIC'		=> 'Пошук в темі ',
	'LIVE_SEARCH_TOPIC'		=> 'Темы',
	'LIVE_SEARCH_TOPICS_BY_USER'		=> 'Теми користувача',
	'LIVE_SEARCH_TOPICS_BY_USER_BOARD'		=> '>у конференції',
	'LIVE_SEARCH_TOPICS_BY_USER_FORUM'		=> '>>у форумі',
	'LIVE_SEARCH_TXT'		=> 'Назва теми...',
	'LIVE_SEARCH_T'			=> 'Для швидкого пошуку почніть набирати назву теми',
	'LIVE_SEARCH_USER'		=> 'Користувачі',
	'LIVESEARCH_USER_TXT'	=> 'Ім\'я...',
	'LIVESEARCH_USER_T'	=> 'Для швидкого пошуку починайте друкувати ім\'я користувача',
	'LIVESEARCH_USERTOPIC_DISABLED'	=> 'Живий пошук тем у цьому форумі відключено адміністратором',
	'LIVESEARCH_USERTOPIC_RESULT'	=> 'Теми користувача  %1$s',
	'LIVESEARCH_USERTOPIC_RESULT_IN_FORUM'	=> 'Теми користувача %1$s у форумі  %2$s',
	'LIVESEARCH_USERTOPIC_RESULT_IN_SUBFORUMS'	=> ' та його підфорумах',
	'LIVESEARCH_USERPOST_DISABLED'	=> 'Живий пошук повідомлень у цьому форумі відключено адміністратором',
	'LIVESEARCH_USERPOST_RESULT'	=> 'Повідомлення користувача  %1$s',
	'LIVESEARCH_USERPOST_RESULT_IN_FORUM'	=> 'Повідомлення користувача %1$s у форумі  %2$s',
	'LIVESEARCH_USERPOST_RESULT_IN_TOPIC'	=> 'Повідомлення користувача %1$s у темі %2$s форуму  %3$s',
	'LIVE_SEARCH_EYE_BUTTON_OPEN_T'	=> 'Показати панель пошуку',
	'LIVE_SEARCH_EYE_BUTTON_CLOSE_T'	=> 'Приховати панель пошуку',
	//*******version 2.0.*******
	'LIVE_SEARCH_GROUP'		=> 'Групи',
	'LIVE_SEARCH_GROUP_TXT'		=> 'Назва групи...',
	'LIVE_SEARCH_GROUP_T'			=> 'Для швидкого пошуку почніть набирати назву групи',
	//*******version 2.0.2.*******
	'LIVE_SEARCH_YOU_SELECTED_TOPIC'	=> 'Ви обрали тему номер ',

));
