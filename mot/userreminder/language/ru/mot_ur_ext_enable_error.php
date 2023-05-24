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
	$lang = [];
}

$lang = array_merge($lang, [
	'MOT_UR_NAME'							=> 'Напоминания пользователям',
	'MOT_UR_ERROR_EXTENSION_NOT_ENABLE'		=> 'Расширение „%1$s“ не может быть включено. Пожалуйста, проверьте, выполнены ли необходимые требования для этого расширения.',
	'MOT_UR_ERROR_MESSAGE_PHPBB_VERSION'	=> 'Минимальная требуемая версия phpBB „%1$s“, но не выше чем „%2$s“',
	'MOT_UR_PHP_VERSION_ERROR'				=> 'Минимальная требуемая версия PHP „%1$s“, но не выше чем „%2$s“',
]);
