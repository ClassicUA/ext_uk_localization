<?php
/**
 *
 * Advanced BBCode Box
 *
 * @copyright (c) 2020 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACP_ABBC3_MODULE'		=> 'Advanced BBCode Box',
	'ACP_ABBC3_SETTINGS'	=> 'Налаштування',
	'LOG_ABBC3_ENABLE_FAIL'	=> '<strong>Advanced BBCode Box не вдалося створити каталог:</strong><br>%s',
));
