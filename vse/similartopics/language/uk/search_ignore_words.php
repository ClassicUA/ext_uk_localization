<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$words = array(
	'href',
	'lol',
	'www',
	'а',
	'без',
    'дякую',
    'завдяки',
    'близько',
    'більше',
    'більш-менш',
    'велика',
    'більше',
    'великі',
    'велике',
    'великий',
    'буде',
    'будуть',
    'будучи',
    'був',
    'була',
    'були',
    'було',
    'бути',
    'в',
    'вас',
    'вам',
    'вами',
    'ваш',
    'ваша',
    'ваше',
    'вашого',
    'вашої',
    'вашому',
    'ваші',
    'вашим',
    'вашими',
    'ваших',
    'вашу',
    'поблизу',
    'адже',
    'скрізь',
    'чудово',
    'поза',
    'всередині',
    'у',
    'біля',
    'ось',
    'часом',
    'часу',
    'час',
    'все',
    'все-таки',
    'все-таки',
	'завжди',
	'всього',
	'усіма',
	'усіх',
    'всякие',
    'всякий',
    'всяким',
    'всякими',
    'всякий',
    'всякое',
    'всякий',
    'всяком',
    'всякому',
    'всякий',
    'виглядає',
    'виглядають',
    'де',
    'так',
    'далеко',
    'дійсно',
    'день',
    'для',
    'дне',
    'днів',
    'днем',
    'дні',
    'дню',
    'дня',
    'дням',
    'днями',
    'днями',
    'до',
    'дім',
    'будинку',
    'домом',
    'дому',
    'його',
    'її',
    'якщо',
    'є',
    'ще',
    'же',
    'за',
    'навіщо',
    'навіщось',
    'потім',
    'потім-то',
    'захотів',
    'захотіла',
    'захотіли',
    'захочу',
    'знає',
    'знав',
    'знала',
    'знали',
    'знало',
    'знаю',
    'и',
    'і т.д',
    'і т.п',
    'бо',
    'з',
    'з-під',
    'або',
    'інакше',
    'іноді',
    'шукав',
    'шукала',
    'шукали',
    'шукало',
    'шукати',
    'їм',
    'імхо',
    'отже',
    'їх',
    'к',
    'кожен',
    'як',
    'яка',
    'які',
    'яким',
    'яких',
    'якого',
    'яке',
    'який',
    'якому',
    'яку',
    'ким',
    'коли',
    'коли-небудь',
    'кого',
    'ком',
    'кому',
    'яка',
    'якого',
    'яке',
    'якої',
    'якому',
    'яку',
    'які',
    'який',
    'яким',
    'яких',
    'хто',
    'хтось',
    'до речі',
    'куди',
    'чи',
    'або',
    'лол',
    'найкраща',
    'найкраще',
    'найкращі',
    'найкращий',
    'будь-яка',
    'будь-якого',
    'будь-який',
    'будь-кому',
    'будь-яку',
    'будь-які',
    'будь-яким',
    'будь-якими',
    'будь-яких',
    'маленька',
    'маленький',
    'маленьким',
    'маленького',
    'маленьке',
    'маленькою',
    'маленькому',
    'маленьку',
    'між',
    'менш',
    'менше',
    'мене',
    'світ',
    'мені',
    'багато',
    'мною',
    'міг',
    'могла',
    'могли',
    'могло',
    'можу',
    'моє',
    'моє',
    'можемо',
    'може',
    'мої',
    'мій',
    'моя',
    'ми',
    'на',
    'над',
    'назад',
    'найбільш',
    'найменш',
    'напише',
    'напишу',
    'напишуть',
    'наприклад',
	'нас',
	'нам',
	'нами',
	'наш',
	'наша',
	'наше',
	'нашого',
	'нашої',
	'нашем',
	'нашому',
	'наши',
	'нашим',
	'нашими',
	'наших',
    'нашу',
    'не',
    'нього',
    'недавно',
    'невже',
    'неї',
    'неї',
    'трохи',
    'ні',
    'ні',
    'ніколи',
    'ніхто',
    'ніщо',
    'нім',
    'нічого',
    'але',
    'нова',
    'нового',
    'нове',
    'нової',
    'новому',
    'новин',
    'новини',
    'новина',
    'новинами',
    'нову',
    'новий',
    'новим',
    'нових',
    'ну',
    'потрібен',
    'потрібна',
    'потрібно',
    'потрібні',
    'о',
    'про',
    'однак',
    'близько',
    'він',
    'вона',
    'вони',
    'воно',
    'від',
    'відповідь',
    'відповів',
    'відповіла',
    'відповіли',
    'відповіло',
    'звідки',
    'аж ніяк',
    'перед',
    'писав',
    'писала',
    'писали',
    'писало',
    'пише',
    'пишу',
    'пишуть',
    'погано',
    'по',
    'поблизу',
    'під',
    'будь ласка',
    'отримувала',
    'отримували',
    'отримувало',
    'отримувати',
    'отримав',
    'отримала',
    'отримали',
    'отримало',
    'отримати',
    'пор',
    'пора',
    'порам',
    'порами',
    'порі',
    'порой',
    'пору',
    'пори',
    'після',
    'тому',
    'чому',
    'майже',
    'пішли',
    'правда',
    'раніше',
    'приблизно',
    'про',
    'просто',
    'пройшов',
    'пройшла',
    'пройшли',
    'пройшло',
    'нехай',
    'нехай',
    'раз',
    'рази',
    'хіба',
    'рідше',
    'с',
    'сам',
    'сама',
    'самі',
    'самим',
    'самими',
    'самих',
    'саме',
    'самого',
    'саме',
    'самої',
    'самому',
    'самоя',
    'саму',
    'самі',
    'самий',
    'самим',
    'самими',
    'самих',
    'зробив',
    'зробила',
    'зробили',
    'зробило',
    'зараз',
    'крізь',
    'швидше',
    'скоро',
    'випадку',
    'випадком',
    'випадок',
    'випадку',
    'дивлячись',
    'з',
    'зовсім',
    'спасибі',
    'стара',
    'старого',
    'старе',
    'старої',
    'старому',
    'старому',
    'стару',
    'старий',
    'старим',
    'старих',
    'так',
    'також',
    'твого',
    'твоє',
    'твої',
    'твій',
    'твою',
    'твоя',
    'ті',
    'тебе',
    'тим',
    'тими',
    'тепер',
    'тих',
    'тобою',
    'тоді',
    'того',
    'теж',
    'тієї',
    'тільки',
    'туди',
    'у',
    'жахливо',
    'уже',
    'дізнається',
    'пішов',
    'пішла',
    'пішли',
    'пішло',
    'ходив',
    'ходила',
    'ходили',
    'ходило',
    'ходить',
    'ходити',
    'ходять',
    'добре',
    'хотів',
    'хотіла',
    'хотіли',
    'хотіло',
    'хоча',
    'хочу',
    'частіше',
    'чого',
    'чим',
    'що',
    'чимось',
    'чому',
    'через',
    'що',
    'щоб',
    'чиє',
    'чиєю',
    'чиєму',
    'чиї',
    'чиїм',
    'чиїми',
    'чиїх',
    'чия',
    'йшов',
    'йшов',
    'йшла',
    'йшли',
    'йшло',
    'ця',
    'ці',
    'цим',
    'цих',
    'це',
    'цієї',
    'цьому',
    'цей',
    'цю',
    'я',
    'є',
);
