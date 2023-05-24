<?php
/**
 *
 * @package phpBB Extension - Maintenance mode
 * @copyright (c) 2020 dmzx - https://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'MAINTENANCE_SAVED'							=> 'Maintenance mode settings saved',
	'MAINTENANCE_TEXT'							=> 'Maintenance text',
	'MAINTENANCE_TEXT_EXPLAIN'					=> 'If you enter text here the "Disable board text" will be overwritten.<br />HTML is allowed.',
	'MAINTENANCE_TIMER'							=> 'Enable time countdown',
	'MAINTENANCE_TIMER_EXPLAIN'					=> 'Enable time countdown to maintenance mode.',
	'MAINTENANCE_TIME'							=> 'Set countdown time',
	'MAINTENANCE_TIME_EXPLAIN'					=> 'Example:	12/31/2020 00:00:00 PM',
	'MAINTENANCE_BACKGROUND_IMAGE'				=> 'Set background image URL',
	'MAINTENANCE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Leave empty for default background image.<br />Or enter URL to background image.',
	'MAINTENANCE_VERSION'						=> 'Version',
	'MAINTENANCE_SETTINGS_EXPLAIN'				=> 'Maintenance mode is not active go to %sBoard settings%s to enable the Maintenance mode.<br />Settings will be shown when Maintenance mode is enabled.',
	'MAINTENANCE_SOCIAL'						=> 'Enable social link',
	'MAINTENANCE_SOCIAL_EXPLAIN'				=> 'If enable social link you can add various social media links.',
	'MAINTENANCE_SETTINGS_SOCIAL'				=> 'Settings social link',
	'MAINTENANCE_SOCIAL_FACEBOOK'				=> 'Facebook enable',
	'MAINTENANCE_SOCIAL_FACEBOOK_EXPLAIN'		=> 'Enable facebook icon.',
	'MAINTENANCE_SOCIAL_FACEBOOK_URL'			=> 'Facebook URL',
	'MAINTENANCE_SOCIAL_FACEBOOK_URL_EXPLAIN'	=> 'Enter Facebook URL.',
	'MAINTENANCE_SOCIAL_TWITTER'				=> 'Twitter enable',
	'MAINTENANCE_SOCIAL_TWITTER_EXPLAIN'		=> 'Enable Twitter icon.',
	'MAINTENANCE_SOCIAL_TWITTER_URL'			=> 'Twitter URL',
	'MAINTENANCE_SOCIAL_TWITTER_URL_EXPLAIN'	=> 'Enter Twitter URL.',
	'MAINTENANCE_SOCIAL_RSS'					=> 'RSS enable',
	'MAINTENANCE_SOCIAL_RSS_EXPLAIN'			=> 'Enable RSS icon.',
	'MAINTENANCE_SOCIAL_RSS_URL'				=> 'RSS URL',
	'MAINTENANCE_SOCIAL_RSS_URL_EXPLAIN'		=> 'Enter RSS URL.',
	'MAINTENANCE_SOCIAL_YOUTUBE'				=> 'Youtube enable',
	'MAINTENANCE_SOCIAL_YOUTUBE_EXPLAIN'		=> 'Enable Youtube icon.',
	'MAINTENANCE_SOCIAL_YOUTUBE_URL'			=> 'Youtube URL',
	'MAINTENANCE_SOCIAL_YOUTUBE_URL_EXPLAIN'	=> 'Enter Youtube URL.',
	'MAINTENANCE_SOCIAL_LINKEDIN'				=> 'Linkedin enable',
	'MAINTENANCE_SOCIAL_LINKEDIN_EXPLAIN'		=> 'Enable Linkedin icon.',
	'MAINTENANCE_SOCIAL_LINKEDIN_URL'			=> 'Linkedin URL',
	'MAINTENANCE_SOCIAL_LINKEDIN_URL_EXPLAIN'	=> 'Enter Linkedin URL.',
	'MAINTENANCE_SOCIAL_GITHUB'					=> 'Github enable',
	'MAINTENANCE_SOCIAL_GITHUB_EXPLAIN'			=> 'Enable Github icon.',
	'MAINTENANCE_SOCIAL_GITHUB_URL'				=> 'Github URL',
	'MAINTENANCE_SOCIAL_GITHUB_URL_EXPLAIN'		=> 'Enter Github URL.',
	'MAINTENANCE_SOCIAL_EMAIL'					=> 'Email enable',
	'MAINTENANCE_SOCIAL_EMAIL_EXPLAIN'			=> 'Enable Email icon.',
	'MAINTENANCE_SOCIAL_EMAIL_ADRESS'			=> 'Email address',
	'MAINTENANCE_SOCIAL_EMAIL_ADRESS_EXPLAIN'	=> 'Enter Email address.',
]);
