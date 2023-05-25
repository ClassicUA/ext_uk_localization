<?php
/**
*
* @package phpBB Extension - Senky Post Links
* Russian translation by HD321kbps
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
	'ACP_POST_LINKS'	=> 'Посилання на пости',

	'PL_ENABLE'			=> 'Увімкнути посилання на пости',
	'PL_ENABLE_EXPLAIN'	=> 'Якщо увімкнено, кожне повідомлення міститиме посилання, типів увімкнених нижче.',
	'PL_LINK_ENABLE'	=> 'Увімкнути посилання у вигляді тексту',
	'PL_BBCODE_ENABLE'	=> 'Увімкнути BBcode посилання',
	'PL_HTML_ENABLE'	=> 'Увімкнути HTML посилання',
));
