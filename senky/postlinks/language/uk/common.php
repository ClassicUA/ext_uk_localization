<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
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
	'PL_LINK'				=> 'Посилання',
	'PL_BBCODE'				=> 'BBcode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Приховати посилання на пост',
	'PL_SHOW'				=> 'Показати посилання на пост',

	'CLICK_TO_COPY_LINK'	=> 'Натисніть, щоб вибрати посилання на пост у текстовому форматі',
	'CLICK_TO_COPY_BBCODE'	=> 'Натисніть, щоб вибрати посилання на пост у BBcode форматі',
	'CLICK_TO_COPY_HTML'	=> 'Натисніть, щоб вибрати посилання на пост у HTML форматі',
));
