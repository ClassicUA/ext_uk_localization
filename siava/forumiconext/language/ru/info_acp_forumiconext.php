<?php

/**
 *
 * Forum Icons Extended. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Siava, https://siava.ru
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'FIE_EXT'						=> 'Forum Icons Extended',
	'FIE_EXT_EXPLAIN'				=> 'Прячет стандартные значки форумов, если используются пользовательские Значки (картинки или иконки) форума в ACP > Управление форумами > Редактирование форума:<br>- картинка форума цветная (оригинальная), если в форуме есть непрочитанные сообщения. Также для гостей, если не включена маркировка тем для гостей;<br>- картинка форума серая для зарегистрированных пользователей, если нет непрочитанных сообщений.<br><br><strong>По-умолчанию используется CSS</strong>. Цветные картинки преобразуются в серые средствами CSS. Корректно работает во всех современных браузерах (Mozilla 35+, Chrome 19+, Opera 15+). IE7-11 с помощью костылей как всегда:)<br><br><strong>Если не использовать CSS</strong>, то вам потребуется добавить в папку к картинкам форума второй набор изображений для прочитанных форумов, добавив <strong>-read</strong> в название перед расширением файла. Например, если название картинки <strong>forum_icon.png</strong>, то название второго файла должно быть <strong>forum_icon<span style="color:red">-read</span>.png</strong>',
	'FIE_SETTINGS'					=> 'Настройки Forum Icons Extended',
	'FIE_SETTINGS_UPDATED'			=> '<strong>Изменены настройки Forum Icons Extended</strong>',
	'FIE_VERSION'					=> 'Версия: <strong>%s</strong>',
	'FIE_CSS_ENABLED'				=> 'Использовать CSS',
));
