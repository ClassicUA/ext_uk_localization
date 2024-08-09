<?php
/**
*
* @package MoT DIM v1.0.0
* @copyright (c) 2024 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if ( !defined('IN_PHPBB') )
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MOT_DIM_CHECK_RESULT'		=> 'Тестування налаштувань DIM',
	'MOT_DIM_NO_ITEMS'			=> 'Нічого немає',
	'MOT_DIM_TOTAL_USERS'		=> '%1$d всього учасників',
	'MOT_DIM_REGISTERED'		=> 'Зареєстровано',
	'MOT_DIM_NOT_ACTIVATED'		=> 'Не активований',
	'MOT_DIM_SLEEPER'			=> 'Ніколи не авторизувався',
	'MOT_DIM_ZEROPOSTER'		=> 'Zeroposter',
	'MOT_DIM_LOG_DELETION'		=> '<strong>mot/dim видалив наступних користувачів</strong><br>» %s',
]);
