<?php
/**
*
* @package UserReminder v1.5.0
* @copyright (c) 2019 - 2023 Mike-on-Tour
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

$lang = array_merge($lang, array(
	'MOT_UR_NAME'							=> 'Нагадування користувачам',
	'MOT_UR_ERROR_EXTENSION_NOT_ENABLE'		=> 'Розширення "%1$s" не може бути увімкнено. Будь ласка, перевірте, чи виконано необхідні вимоги для цього розширення.',
	'MOT_UR_ERROR_MESSAGE_PHPBB_VERSION'	=> 'Мінімальна необхідна версія phpBB "%1$s", але не вище ніж "%2$s“',
	'MOT_UR_PHP_VERSION_ERROR'				=> 'Мінімальна необхідна версія PHP "%1$s", але не вище ніж "%2$s“',
));
