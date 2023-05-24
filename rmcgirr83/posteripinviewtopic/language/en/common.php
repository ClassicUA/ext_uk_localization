<?php
/**
*
* @package phpBB Extension - Poster IP in viewtopic
* @copyright (c) 2020 RMcGirr83 (Rich McGirr)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'NO_RESPONSE_FROM_SERVER'	=> 'Failed to get an adequate response from the freegeoip server',
	'ERROR_FROM_SERVER'	=> 'Error was returned from server: %1$s',
	'IP_ADDRESS_INVALID'	=> 'Invalid IP address',
	'PAGE_TITLE'	=> 'Freegeoip Results',
	'PIPIV_IP'	=> '<b>IP:</b> %1$s',
	'PIPIV_COUNTRY_CODE' => '<b>Country Code:</b> %1$s',
	'PIPIV_COUNTRY_NAME'	=> '<b>Country Name:</b> %1$s',
	'PIPIV_REGION_CODE'	=> '<b>Region Code:</b> %1$s',
	'PIPIV_REGION_NAME'	=> '<b>Region Name:</b> %1$s',
	'PIPIV_CITY'			=> '<b>City:</b> %1$s',
	'PIPIV_ZIP_CODE'		=> '<b>Zip Code:</b> %1$s',
	'PIPIV_TIME_ZONE'		=> '<b>Time Zone:</b> %1$s',
	'PIPIV_LATITUDE'		=> '<b>Latitude:</b> %1$s',
	'PIPIV_LONGITUDE'		=> '<b>Longitude:</b> %1$s',
	'PIPIV_METRO_CODE'	=> '<b>Metro Code:</b> %1$s',
	'EXTENSION_REQUIREMENTS' => 'Extension requires at least phpBB version %1$s. You need to update your version of phpBB to utilize this extension.',
	'EXTENSION_REQUIRES_JAVASCRIPT'	=> 'You must have javascript enabled to see the results.',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Donate using PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Buy me a beer for creating this extension',
	'BUY_ME_A_BEER_SHORT'		=> 'Make a donation for this extension',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'This extension is completely free. It is a project that I spend my time on for the enjoyment and use of the phpBB community. If you enjoy using this extension, or if it has benefited your forum, please consider <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">buying me a beer</a>. It would be greatly appreciated. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
