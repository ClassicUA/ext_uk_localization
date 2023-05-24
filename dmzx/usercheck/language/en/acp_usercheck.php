<?php
/**
 *
 * User Check. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_USERCHECK_ENABLE'					=> 'User Check enable',
	'ACP_USERCHECK_ENABLE_EXPLAIN'			=> 'Enable User Check registration.',
	'ACP_USERCHECK_PROXY'					=> 'Enable proxy check',
	'ACP_USERCHECK_PROXY_EXPLAIN'			=> 'If enabled the user is checked if proxy used.',
	'ACP_USERCHECK_IP_CHECK'				=> 'Enable IP check',
	'ACP_USERCHECK_IP_CHECK_EXPLAIN'		=> 'If enabled IP is checked in database for exiting ip.',
	'ACP_USERCHECK_COOKIE_CHECK'			=> 'Enable Cookie check',
	'ACP_USERCHECK_COOKIE_CHECK_EXPLAIN'	=> 'If enabled cookie is checked.',
	'ACP_USERCHECK_SETTING_SAVED'			=> 'User Check saved.',
	'ACP_USERCHECK_VERSION'					=> 'Version',
]);
