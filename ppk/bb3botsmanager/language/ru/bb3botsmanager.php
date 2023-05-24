<?php

/**
*
* @package BB3BotsManager
* @copyright (c) 2022 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'BB3BM_REGISTER_ACTION' => 'Вы не можете зарегистрироваться на форуме',
	'BB3BM_LOGIN_ACTION' => 'Вы не можете войти на форум',
));
