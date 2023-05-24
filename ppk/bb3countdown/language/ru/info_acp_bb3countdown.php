<?php

/**
*
* @package BB3CountDown
* @copyright (c) 2014 PPK
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
	'BB3CD_CONFIG' => 'Настройки',

	'ACP_BB3CD_COUNTDOWN' => 'BB3CountDown',

	'BB3CD_COUNTDOWN' => 'Обратный отсчёт',
	'BB3CD_COUNTDOWN_EXPLAIN' => 'Настройки счётчика времени обратного отсчёта',

	'BB3CD_PRECISION' => 'Точность измерения',
	'BB3CD_PRECISION_SEC' => 'до секунд',
	'BB3CD_PRECISION_MIN' => 'до минут',
	'BB3CD_PRECISION_HOUR' => 'до часов',
	'BB3CD_PRECISION_DAY' => 'до дней',
	'BB3CD_PRECISION_EXPLAIN' => 'Точность обратного отсчёта',

	'BB3CD_END' => 'Дата окончания показа сообщения о наступившем событии',
	'BB3CD_END_EXPLAIN' => '(в формате ГГГГ-ММ-ДД ЧЧ:ММ:СС, 0 или пустая строка - отображать всегда)',

	'BB3CD_START' => 'Дата события',
	'BB3CD_START_EXPLAIN' => '(в формате ГГГГ-ММ-ДД ЧЧ:ММ:СС)',

	'BB3CD_PREFIX' => 'Префикс сообщения в счётчике обратного отсчёта',
	'BB3CD_PREFIX_EXPLAIN' => '(до 255 символов, можно использовать html код)',

	'BB3CD_SUFFIX' => 'Суффикс сообщения в счётчике обратного отсчёта',
	'BB3CD_SUFFIX_EXPLAIN' => '(до 255 символов, можно использовать html код)',

	'BB3CD_PASSED' => 'Сообщение отображаемое при наступлении события',
	'BB3CD_PASSED_EXPLAIN' => '(до 255 символов, можно использовать html код)',

	'BB3CD_PRECISIONSPEED' => 'Изменение точности',
	'BB3CD_PRECISIONSPEED_EXPLAIN' => 'Три опции,
		<br /><strong>опция 1</strong> включать точность <b>до часов</b> когда до события остаётся меньше указанного количества дней,
		<br /><strong>опция 2</strong> включать точность <b>до минут</b> когда до события остаётся меньше указанного количества часов,
		<br /><strong>опция 3</strong> включать точность <b>до секунд</b> когда до события остаётся меньше указанного количества минут',

	'BB3CD_OPTION' => 'опция',
	'BB3CD_DAYS' => 'дней',
	'BB3CD_HOURS' => 'часов',
	'BB3CD_MINUTES' => 'минут',
));
