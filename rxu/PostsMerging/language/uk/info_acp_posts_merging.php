<?php
/**
*
* Posts Merging extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
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

$lang = array_merge($lang, array(
	'ACP_POSTS_MERGING'				=> 'Cклеювання повідомлень',
	'ACP_POSTS_MERGING_EXPLAIN'		=> 'Тут можна налаштувати параметри розширення для склеювання повідомлень.',
	'ACP_POSTS_MERGING_SEPARATOR_PREVIEW'	=> 'Попередній перегляд відокремлювача',
	'MERGE_INTERVAL'				=> 'Інтервал склеювання повідомлень',
	'MERGE_INTERVAL_EXPLAIN'		=> 'Кількість годин, протягом якого повідомлення користувача будуть склеєні з його останнім повідомленням теми. Залиште поле порожнім або встановіть 0 для вимкнення цієї функції.',
	'MERGE_NO_TOPICS'				=> 'Теми без склеювання',
	'MERGE_NO_TOPICS_EXPLAIN'		=> 'Список розділених комами номерів тем, в яких склеювання повідомлень вимкнено.',
	'MERGE_NO_FORUMS'				=> 'Форуми без склеювання',
	'MERGE_NO_FORUMS_EXPLAIN'		=> 'Список розділених комами номерів форумів, в яких склеювання повідомлень відключено.',
	'MERGE_SEPARATOR'				=> 'Відокремлювач',
	'MERGE_SEPARATOR_EXPLAIN'		=> 'Тут ви можете налаштувати роздільник, який буде відображатися між частинами об\'єднаного повідомлення.<br />Ви можете використовувати BBCodes, які будуть розбиратися відповідно до налаштувань форуму або повідомлення.<br /><br />Ви також можете використовувати будь-який мовний рядок, наявний у вашій мові/директорії, таким чином: {L_<em>&lt;STRINGNAME&gt;</em>} де <em>&lt;STRINGNAME&gt;</em> назва перекладеного рядка, який ви хочете додати. Наприклад, {L_WROTE} буде відображено як "написав" або його переклад відповідно до локалі користувача.<br /><br />Використовуйте заповнювач <em>&#37;s</em> (один раз), щоб включити час, що минув між злиттями, у відокремлювач'.,
));
