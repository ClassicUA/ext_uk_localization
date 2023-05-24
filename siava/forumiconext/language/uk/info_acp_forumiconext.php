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
	'FIE_EXT_EXPLAIN'				=> 'Ховає стандартні значки форумів, якщо використовуються призначені для користувача Значки (картинки або іконки) форуму в ACP > Керування форумами > Редагування форуму:<br>- картинка форуму кольорова (оригінальна), якщо у форумі є непрочитані повідомлення. Також для гостей, якщо не ввімкнено маркування тем для гостей;<br>- картинка форуму сіра для зареєстрованих користувачів, якщо немає непрочитаних повідомлень.<br><br><strong>За замовчуванням використовується CSS</strong>. Кольорові картинки перетворюються на сірі засобами CSS. Коректно працює у всіх сучасних браузерах (Mozilla 35+, Chrome 19+, Opera 15+). IE7-11 за допомогою милиць як завжди:)<br><br><strong>Якщо не використовувати CSS</strong>, то вам буде потрібно додати в папку до картинок форуму другий набір зображень для прочитаних форумів, додавши <strong>-read</strong> у назву перед розширенням файлу. Наприклад, якщо назва картинки <strong>forum_icon.png</strong>, то назва другого файлу має бути <strong>forum_icon<span style="color:red">-read</span>.png</strong>',
	'FIE_SETTINGS'					=> 'Налаштування Forum Icons Extended',
	'FIE_SETTINGS_UPDATED'			=> '<strong>Змінено налаштування Forum Icons Extended</strong>',
	'FIE_VERSION'					=> 'Версія: <strong>%s</strong>',
	'FIE_CSS_ENABLED'				=> 'Використовувати CSS',
));
