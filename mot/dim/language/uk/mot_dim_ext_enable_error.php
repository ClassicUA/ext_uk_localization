<?php
/**
*
* @package MoT DIM v0.1.0
* @copyright (c) 2024 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MOT_DIM_EXT_NAME'						=> 'Видалення неактивних користувачів',
	'MOT_DIM_ERROR_EXTENSION_NOT_ENABLE'	=> 'Розширення "%1$s" не може бути ввімкнено. Будь ласка, перевірте, чи виконані необхідні вимоги для цього розширення.',
	'MOT_DIM_ERROR_MESSAGE_PHPBB_VERSION'	=> 'Потрібна мінімальна версія phpBB: "%1$s", але менша за "%2$s“',
	'MOT_DIM_PHP_VERSION_ERROR'				=> 'Мінімальна версія PHP - "%1$s", але менша за "%2$s“',
]);
