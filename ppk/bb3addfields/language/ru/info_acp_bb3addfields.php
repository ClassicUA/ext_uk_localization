<?php

/**
*
* @package BB3AddFields
* @copyright (c) 2015 PPK
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
	'ACP_ADDFIELDS' => 'BB3AddFields',
	'ACP_ADDFIELDS_EXPLAIN' => 'Настройки дополнительных полей',
	'ACP_ADDFIELDS_CONFIG'						=> 'Общие настройки',
	'ACP_ADDFIELDS_CONFIG_EXPLAIN' => 'Настройки дополнительных полей',
	'ACP_ADDFIELDS_ADDFIELDS'						=> 'Шаблоны дополнительных полей',
	'ACP_ADDFIELDS_ADDFIELDS_EXPLAIN' => '<strong>Заголовок темы</strong> - шаблон для составления заголовка темы, строка в фомате: #название поля#, #название поля#, из данных указанных полей будет автоматически формироваться заголовок названия темы, названия полей необходимо обрамлять символом #решётки#, необязательные для заполнения поля необходимо заключать в {фигурные} скобки.<br /><strong>Описание шаблона</strong> - описание шаблона дополнительных полей или правила их заполнения, данный текст будет отображаться при создании новой темы перед дополнительными полями.',
	'ACP_ADDFIELDS_ADDFIELDS2'						=> 'Дополнительные поля',
	'ACP_ADDFIELDS_ADDFIELDS2_EXPLAIN' => 'Если поле является выпадающим списком или списком со множественным выбором для него нельзя указать количество полей больше 1.<br />Если количество полей равно 0 - поле отображаться не будет.<br />Для изменения порядка отображения полей, перетащите нужное поле выше или ниже других.',
	'ACP_ADDFIELDS_ADDFIELD'						=> 'Дополнительные поля',
	'ACP_ADDFIELDS_ADDFIELD_EXPLAIN' => 'Создание дополнительных полей',
	'ACP_ADDFIELDS_SET'						=> 'Назначение шаблонов',
	'ACP_ADDFIELDS_SET_EXPLAIN' => 'Назначение шаблонов дополнительных полей',

	'BB3AF_INMESSAGE' => 'Отображение дополнительных полей',
	'BB3AF_INMESSAGE_UNITED' => 'Вместе',
	'BB3AF_INMESSAGE_BEFORE' => 'До',
	'BB3AF_INMESSAGE_EXPLAIN' => 'Вместе - отображать дополнительные поля вместе с формой сообщения, До - отображать дополнительные поля до формы сообщения (<span style="color:#FF0000;">при значении опции равной <em>Вместе</em> будет невозможно определять дополнительные поля как обязательные для заполнения, а так-же создавать заголовок темы на основе дополнительных полей</span>)',
	'BB3AF_POSITION' => 'Добавление дополнительных полей',
	'BB3AF_POSITION_AFTER' => 'В конец',
	'BB3AF_POSITION_BEFORE' => 'В начало',
	'BB3AF_POSITION_EXPLAIN' => 'В начало - добавлять значения дополнительных полей в начало сообщения, В конец - в конец сообщения',
	'BB3AF_LINK' => 'Ссылка для создания темы',
	'BB3AF_LINK_WADDF' => 'Если назначен шаблон',
	'BB3AF_LINK_EXPLAIN' => 'Отображать в шапке форума отдельную ссылку для создания темы, если назначен шаблон - ссылка будет отображаться, но в форме можно будет выбрать только форум с назначенным шаблоном',

	'ADDFIELD_DESCR' => 'Описание шаблона',
	'ADDFIELD_DESCR_EXPLAIN' => '',
	'ADDFIELD_SUBJECT' => 'Заголовок темы',
	'COPY_SETS' => 'Копировать',
	'COPY_SETS_EXPLAIN' => 'Создать копию шаблона',
	'SETS_COPY' => 'Копия: ',
	'SETS_NAME'	=> 'Шаблон дополнительных полей',
	'SET_NAME' => 'Название шаблона',
	'VIEW_SETS'	=> 'Изменить',
	'ADDF_ADD'	=> 'Добавить поля',
	'ADDFS_CREATE'	=> 'Создать шаблон',
	'ADDF_CREATE'	=> 'Создать поле',
	'REQUIRED'	=> 'Обязательное для заполнения количество',
	'COUNT'	=> 'Количество полей',
	'ORDER'	=> 'Порядок отображения',
	'FIELD_IDENT'	=> 'Идентификатор поля',
	'FIELD_NAME' => 'Название поля',
	'FIELD_DESCR' => 'Значение поля',
	'NO_DATA' => 'Нет данных',
	'ADDF_SORT_SUCCESS' => 'Порядок успешно изменён.',
	'NO_NEW_ADDF' => 'Нет доступных полей для добавления.',
	'ADDF_TPL' => 'шаблон',

	'ADDF_NAME' => 'Название поля',
	'ADDF_NAME_EXPLAIN' => 'Название поля может состоять из латинских букв, цифр, символа подчёркивания, но обязательно должно содержать как минимум одну букву',
	'ADDF_DESCR' => 'Значение поля',
	'ADDF_ENABLED' => 'Включено',
	'VIEW_ADDF' => 'Изменить',
	'COPY_ADDF' => 'Копировать',
	'COPY_ADDF_EXPLAIN' => 'Создать копию поля',
	'ADDF_COPY' => 'Копия: ',
	'ADDF_OPT' => 'Опции',
	'ADDF_FILTER' => 'Фильтр',
	'ADDF_TA' => 'Многострочное',
	'ADDF_TA_EXPLAIN' => 'Если отмечено: поле будет отображаться как многострочное, иначе однострочное',
	'ADDF_INALL' => 'Везде',
	'ADDF_INALL_EXPLAIN' => 'Если отмечено: поле будет отображаться во всех шаблонах дополнительных полей (независимо от того, назначено оно в шаблон или нет)',
	'ADDF_SKIP' => 'Скрытое',
	'ADDF_SKIP_EXPLAIN' => 'Если отмечено: поле не будет отображаться в тексте сообщения (тем не менее, при редактировании или создании темы оно будет отображаться с возможностью его изменения или заполнения)',
	'ADDF_SKIP2_EXPLAIN' => 'Если отмечено: поле не будет отображаться в тексте сообщения (тем не менее, при создании темы оно будет отображаться с возможностью его заполнения)',
	'ADDF_HLP' => 'Пример',
	'ADDF_HLP_EXPLAIN' => 'Отображает строку примера для поля, если указано несколько строк, будет отображён выпадающий список с возможностью автоматической вставки в это поле',
	'ADDF_TITLE' => 'Подсказка',
	'ADDF_TITLE_EXPLAIN' => 'При наведении курсора мыши на название поля будет отображена указанная здесь подсказка',
	'ADDF_ALIAS' => 'Псевдоним',
	'ADDF_ALIAS_EXPLAIN' => 'Используется при необходимости определения псевдонимов для значений поля, т.е. если в поле <em>Пример</em> указаны подсказки, при выборе подсказки в поле будет вставлено не значение подсказки, а соответствующее ей значение из этого поля',
	'ADDF_EXISTS' => 'Из предложенных',
	'ADDF_EXISTS_EXPLAIN' => 'Если отмечено: поле может заполняться значением только из тех что предложены в поле Пример',
	'ADDF_MULTI' => 'Множественное',
	'ADDF_MULTI_EXPLAIN' => 'Если отмечено: поле будет отображаться в виде поля с возможностью выбора нескольких значений, значения будут браться из поля Пример (при этом само поле Пример отображаться НЕ будет)',
	'ADDF_BBCODE' => 'Групповой ББ-код',
	'ADDF_BBCODE_EXPLAIN' => 'Помещать поле или группу одноимённых полей в ББ-код, значение поля необходимо указывать в виде строки %s, так-же это поле можно использовать произвольно, заменяя ББ-коды любым текстом',
	'ADDF_BBCODES' => 'Одиночный ББ-код',
	'ADDF_BBCODES_EXPLAIN' => 'Помещать поле или одноимённые поля в ББ-код, значение поля необходимо указывать в виде строки %s, так-же это поле можно использовать произвольно, заменяя ББ-коды любым текстом',
	'ADDF_BR' => 'Перед полем',
	'ADDF_BR_EXPLAIN' => 'Вставлять перед полем в текст сообщения указанную строку',
	'ADDF_BR2' => 'После поля',
	'ADDF_BR2_EXPLAIN' => 'Вставлять после поля в текст сообщения указанную строку',
	'ADDF_SPLIT' => 'Разделение полей',
	'ADDF_SPLIT_EXPLAIN' => 'Разделять группу одноимённых полей указанной строкой, если ничего не указано, поля будут разделяться сивмолом новой строки (работает только если указан групповой бб-код, 0 - разделять символом пробела)',
	'ADDF_DEF' => 'По умолчанию',
	'ADDF_DEF_EXPLAIN' => 'Используется при необходимости вставки в поле значения по умолчанию, при создании темы поле будет заполнено указанными значением, если указанное здесь значение является числом и в поле Пример существует строка с таким номером - поле будет заполнено соответствующей строкой из поля Пример',
	'ADDF_CHECKAS' => 'Функция для проверки',
	'ADDF_CHECKAS_EXPLAIN' => 'Использовать для проверки поля указанную функцию, функция должна существовать и для успешной проверки должна возвращать любое значение кроме false, проверка не будет работать если поле отмечено как Множественное, функции можно определять в файле /ext/ppk/bb3addfields/core/bb3addfields_checkfunc.php',
	'ADDF_TPL' => 'Шаблон',
	'ADDF_ALREADY_EXISTS' => 'Указанное поле уже существует',
	'ADDF_BACK' => '<br /><br /><a href="%s">Вернуться назад</a>',

	'GROUPSETS_ACTION' => 'Действие',
	'GROUPSETS_SET' => 'Назначить',
	'GROUPSETS_FORUMS' => 'На форумы',
	'GROUPSETS_DESCR' => 'Описание',
	'GS_VIEW_CURR' => 'Показать назначенные (в скобках)',
	'GS_OPTIONS_ALL' => 'Все',
	'GS_OPTIONS_SELECTED' => 'Только выбранные',
	'GS_OPTIONS_NOTSELECTED' => 'Только не выбранные',
	'GS_TORRENT_ADDF' => 'Шаблон дополнительных полей',
	'GS_TORRENT_ADDF_WITHOUT' => 'Без дополнительных полей',
));