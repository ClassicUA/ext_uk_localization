<?php

/**
*
* @package phpBB3Fixes
* @copyright (c) 2023 PPK
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
	'ACP_PHPBB3FIXES' => 'phpBB3Fixes',
	'ACP_PHPBB3FIXES_CONFIG' => 'Настройки',
	'LOG_PHPBB3FIXES_CONFIG' => '<strong>Изменены настройки phpBB3Fixes</strong>',

));
