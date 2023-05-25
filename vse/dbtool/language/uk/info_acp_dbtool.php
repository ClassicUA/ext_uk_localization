<?php
/**
*
* Database Optimize & Repair Tool [Russian]
* Translated by vovanchig@gmail.com, reviewed by Kot Matroskin (https://mindreader.hacktest.net/en/)
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
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
	'ACP_OPTIMIZE_REPAIR'	=> 'Оптимізувати й полагодити',
	'OPTIMIZE_LOG'			=> '<strong>Таблиці оптимізовані</strong><br />» %s',
	'REPAIR_LOG'			=> '<strong>Таблиці виправлено</strong><br />» %s',
	'CHECK_LOG'				=> '<strong>Таблиці перевірені</strong><br />» %s',
));
