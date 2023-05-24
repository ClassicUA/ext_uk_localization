<?php

/**
*
* @package BB3PostsReserve
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
	'ACP_BB3POSTSRESERVE' => 'BB3PostsReserve',

	'BB3POSTSRESERVE_MAX_POSTS'	=> 'Резервирование сообщений',
	'BB3POSTSRESERVE_MAX_POSTS_EXPLAIN'	=> 'Максимальное количество сообщений для резервирования (0 - отключить функцию)',

	'ACL_CAT_PPKEXT' => 'Расширения PPK',

	'U_CANRESERVEPOSTS'		=> '<span style="font-weight:bold;color:#55557f;">BB3PostsReserve</span>: Может резервировать сообщения при создании тем',
));
