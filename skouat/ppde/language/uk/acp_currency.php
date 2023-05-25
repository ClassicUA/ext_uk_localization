<?php
/**
 *
 * PayPal Donation extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015-2020 Skouat
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
// ’ « » “ ” …
//

/**
 * mode: currency
 */
$lang = array_merge($lang, array(
	'PPDE_DC_CONFIG'             => 'Управління валютними операціями',
	'PPDE_DC_CONFIG_EXPLAIN'     => 'Тут ви можете керувати валютами.',
	'PPDE_DC_CREATE_CURRENCY'    => 'Додати валюту',
	'PPDE_DC_DEFAULT_CURRENCY'   => '(валюта за замовчуванням)',
	'PPDE_DC_ENABLE'             => 'Увімкнути валюту',
	'PPDE_DC_ENABLE_EXPLAIN'     => 'Якщо увімкнено, валюта відображатиметься у скриньці.',
	'PPDE_DC_ISO_CODE'           => 'Код ISO 4217',
	'PPDE_DC_ISO_CODE_EXPLAIN'   => 'Літерний код валюти.<br>Для отримання додаткової інформації про ISO 4217, будь ласка, зверніться до PayPal Donation Extension <a href="https://www.phpbb.com/customise/db/extension/paypal_donation_extension/faq/1841" title="PayPal Donation Extension FAQ">FAQ</a> (зовнішнє посилання).',
	'PPDE_DC_LOCALE_AVAILABLE'   => 'Виявлено розширення PHP <code>intl</code>. Перейдіть до модуля PPDE "Загальні налаштування", щоб вибрати налаштування вашої локалі.',
	'PPDE_DC_LOCALE_DEPRECATED'  => 'Ця опція вимкнена, оскільки ваш сервер сумісний з розширенням PHP <code>intl</code>.',
	'PPDE_DC_LOCALE_UNAVAILABLE' => 'PPDE не виявляє розширення PHP <code>intl</code>. Подумайте про встановлення цього розширення PHP для кращої роботи.',
	'PPDE_DC_NAME'               => 'Назва валюти',
	'PPDE_DC_NAME_EXPLAIN'       => 'Назва валюти (наприклад, євро).',
	'PPDE_DC_POSITION'           => 'Позиція валюти',
	'PPDE_DC_POSITION_EXPLAIN'   => 'Визначте, де буде розташовано символ валюти відносно відображуваної суми.<br>eg: <strong>$20</strong> або <strong>15€</strong>.',
	'PPDE_DC_POSITION_LEFT'      => 'Ліворуч.',
	'PPDE_DC_POSITION_RIGHT'     => 'Праворуч',
	'PPDE_DC_SYMBOL'             => 'Символ валюти',
	'PPDE_DC_SYMBOL_EXPLAIN'     => 'Визначте символ валюти.<br>наприклад: <strong>$</strong> для долара США, <strong>€</strong> для євро.',
));

/**
 * Confirm box
 */
$lang = array_merge($lang, array(
	'PPDE_DC_ADDED'             => 'Додано валюту.',
	'PPDE_DC_CONFIRM_OPERATION' => 'Ви впевнені, що хочете видалити вибрану валюту?',
	'PPDE_DC_DELETED'           => 'Валюта була видалена.',
	'PPDE_DC_GO_TO_PAGE'        => '%sРедагувати існуючу валюту%s',
	'PPDE_DC_UPDATED'           => 'Валюту було оновлено',
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'PPDE_CANNOT_DISABLE_DEFAULT_CURRENCY' => 'Ви не можете відключити валюту за замовчуванням.',
	'PPDE_DC_EMPTY_NAME'                   => 'Введіть назву валюти.',
	'PPDE_DC_EMPTY_ISO_CODE'               => 'Введіть код ISO.',
	'PPDE_DC_EMPTY_SYMBOL'                 => 'Введіть символ.',
	'PPDE_DC_EXISTS'                       => 'Ця валюта вже існує.',
	'PPDE_DC_INVALID_HASH'                 => 'Посилання пошкоджене. Хеш недійсний.',
	'PPDE_DC_NO_CURRENCY'                  => 'Валюту не знайдено.',
	'PPDE_DISABLE_BEFORE_DELETION'         => 'Перед видаленням цієї валюти ви повинні вимкнути її.',
));
