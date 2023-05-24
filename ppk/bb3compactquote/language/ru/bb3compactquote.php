<?php

/**
*
* @package BB3CompactQuote
* @copyright (c) 2019 PPK
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
	'CLICK_TO_EXPAND' => 'Нажмите, чтобы раскрыть...',
));
