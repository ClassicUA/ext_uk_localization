<?php
/**
* Mailing List extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 DavidIQ.com
* @license GNU General Public License, version 2 (GPL-2.0)
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
// NOTE TO TRANSLATORS:  Text in parenthesis refers to keys on the keyboard

$lang = array_merge($lang, array(
	'ACP_MAILINGLIST_SETTINGS'			   => 'Налаштування списку розсилки',
	'ACP_MAILINGLIST_SETTINGS_EXPLAIN'	=> 'Це розширення надсилатиме сповіщення до вказаного списку розсилки, коли буде створено нове повідомлення або відповідь.',

	'MAILINGLIST_OPTIONS'				   => 'Параметри списку розсилки',

	'MAILINGLIST_EMAIL'					   => 'Email списку розсилки',
	'MAILINGLIST_EMAIL_EXPLAIN'			=> 'Це буде список розсилки, на який будуть надсилатися сповіщення',
	'MAILINGLIST_FORUMS'                => 'Форуми, на які ви підписані',
	'MAILINGLIST_FORUMS_EXPLAIN'        => 'Виберіть форуми, які буде додано до цього списку розсилки. Ви можете вибрати більше одного форуму.",
	'MAILINGLIST_POST_TYPE'				   => 'Тип допису',
	'MAILINGLIST_POST_TYPE_EXPLAIN'		=> 'Виберіть тип дописів, для яких надсилатимуться сповіщення до списку розсилки.',

	'NEW POSTS'							      => 'Нові повідомлення',
	'NEW_TOPICS'						      => 'Нові теми',
	'NEW_POSTS_NEW_TOPICS'				   => 'Нові повідомлення та нові теми',
	'NO_MAILING_LISTS'                  => 'Наразі не налаштовано жодного списку розсилки.',
	'HAS_UNSUBSCRIBE_LINK'              => 'Можете відписатися',

	'MAILINGLIST_INCLUDE_CONTENTS'		=> 'Включити вміст повідомлення',
	'MAILINGLIST_INCLUDE_CONTENTS_EXPLAIN'	=> 'Якщо встановлено значення yes, то вміст повідомлення буде надіслано в електронному листі.',
	'MAILINGLIST_UNSUBSCRIBE'			   => 'Посилання для відписки від списку розсилки',
	'MAILINGLIST_UNSUBSCRIBE_EXPLAIN'	=> 'Це буде посилання, яке показуватиметься внизу листів, надісланих до списку розсилки, щоб користувач міг відписатися від нього.',

	'MAILINGLIST_EMAIL_REQUIRED'        => 'Необхідно вказати електронну адресу списку розсилки',
	'MAILINGLIST_FORUM_OPTION_REQUIRED' => 'Принаймні один форум має бути вибраний або позначена опція <i>Усі форуми</i>.',
	'MAILINGLIST_UPDATED'				   => 'Оновлені налаштування списку розсилки для %s.',
    'MAILINGLIST_CREATED'				   => 'Список розсилки створено: %s.',
    'MAILINGLIST_DELETED'               => 'Список розсилки видалено: %s',
                                 => 'Список розсилки створено: %s',
                                 => 'Список розсилки видалено: %s',

    'MAILINGLIST_DELETE_CONFIRM'        => 'Ви впевнені, що хочете видалити цей список розсилки? Це не може бути скасовано.',
));
