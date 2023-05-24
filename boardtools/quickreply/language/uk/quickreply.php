<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2021 Татьяна5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	$lang = array();
}

$lang = array_merge($lang, array(
	'QR_ATTACH_NOTICE'                 => 'До цієї відповіді прикріплено принаймні одне вкладення.',
	'QR_BBCODE'                        => 'BBCode',
	'QR_CANCEL_SUBMISSION'             => 'Скасувати надсилання',
	'QR_CTRL_ENTER'                    => 'Ви також можете надіслати свою відповідь, одночасно натиснувши клавіші Ctrl і Enter на клавіатурі.',
	'QR_FORM_HIDE'                     => 'Згорнути форму швидкої відповіді',
	'QR_FULLSCREEN'                    => 'Повноекранний редактор',
	'QR_FULLSCREEN_EXIT'               => 'Вийти з повноекранного режиму',
	'QR_INSERT_TEXT'                   => 'Вставити цитату у вікно відповіді',
	'QR_QUICKQUOTE'                    => 'Швидка цитата',
	'QR_QUICKQUOTE_TITLE'              => 'Відповісти зі швидкою цитатою',
	'QR_LOADING'                       => 'Завантаження',
	'QR_LOADING_ATTACHMENTS'           => 'Очікування закінчення завантаження вкладень...',
	'QR_LOADING_NEW_FORM_TOKEN'        => 'Тимчасова мітка форми застаріла і була оновлена.<br />Повторне відправлення форми...',
	'QR_LOADING_NEW_POSTS'             => 'У тему було додано щонайменше одне нове повідомлення.<br />Ваше повідомлення не було надіслано, тому що, можливо, ви захочете змінити його текст.<br />Отримання нових повідомлень...',
	'QR_LOADING_PREVIEW'               => 'Обробка попереднього перегляду...',
	'QR_LOADING_SUBMITTED'             => 'Ваше повідомлення було успішно відправлено.<br />Обробка результату...',
	'QR_LOADING_SUBMITTING'            => 'Надсилання вашої відповіді...',
	'QR_LOADING_WAIT'                  => 'Очікування відповіді сервера...',
	'QR_MORE'                          => 'Інші дії',
	'QR_NO_FULL_QUOTE'                 => 'Будь ласка, виділіть частину повідомлення, яку хочете процитувати.',
	'QR_PREVIEW_CLOSE'                 => 'Закрити блок попереднього перегляду',
	'QR_PROFILE'                       => 'Перейти в профіль',
	'QR_QUICKNICK'                     => 'Звернутися за нікнеймом',
	'QR_QUICKNICK_TITLE'               => 'Вставити ім\'я користувача у вікно швидкої відповіді',
	'QR_REPLY_IN_PM'                   => 'Відповісти в ЛС',
	'QR_TYPE_REPLY'                    => 'Введіть свою відповідь тут...',
	'QR_WARN_BEFORE_UNLOAD'            => 'Введена вами відповідь не була відправлена і може бути втрачена!',
	'QR_READ_NEXT'                     => 'Читати далі',
	// begin mod Translit
	'QR_TRANSLIT_TEXT'                 => 'Трансліт',
	'QR_TRANSLIT_TEXT_TO_RU'           => 'на українську', // can be changed to your language here and below
	'QR_TRANSLIT_TEXT_TOOLTIP'         => 'Для миттєвого відображення українською мовою натисніть на кнопку',
	'QR_TRANSLIT_FROM'                 => 'a,b,v,h,gh,g,d,e,ie,ye,zh,z,y,i,i,yi,i,y,k,l,m,n,o,p,r,s,t,u,f,kh,ts,ch,sh,shch,,iu,yu,ia,ya,', // language specific adaptation required (do not use spaces or line breaks), use commas as separators here and below
	'QR_TRANSLIT_TO'                   => 'а,б,в,г,г,ґ,д,е,є,є,ж,з,и,і,ї,ї,й,й,к,л,м,н,о,п,р,с,т,у,ф,х,ц,ч,ш,щ,ь,ю,ю,я,я,\ʼ',
	'QR_TRANSLIT_FROM_CAPS'            => 'A,B,V,H,Gh,G,D,E,Ih,Yh,Zh,Z,Y,I,I,Yi,I,Y,K,L,M,N,O,P,R,S,T,U,F,Kh,Ts,Ch,Sh,Shch,,Iu,Yu,Ia,Ya,',
	'QR_TRANSLIT_TO_CAPS'              => 'А,Б,В,Г,Г,Ґ,Д,Е,Є,Є,Ж,З,И,І,Ї,Ї,Й,Й,К,Л,М,Н,О,П,Р,С,Т,У,Ф,Х,Ц,Ч,Ш,Щ,ь,Ю,Я,\ʼ',
	// end mod Translit
	// begin mod CapsLock Transform
	'QR_TRANSFORM_TEXT'                => 'Зміна регістру тексту',
	'QR_TRANSFORM_TEXT_TOOLTIP'        => 'Для зміни регістру виділіть частину тексту і натисніть потрібну кнопку',
	'QR_TRANSFORM_TEXT_LOWER'          => '&#9660; абв',
	'QR_TRANSFORM_TEXT_UPPER'          => '&#9650; АБВ',
	'QR_TRANSFORM_TEXT_INVERS'         => '&#9660;&#9650; аБВ',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'  => 'нижній регістр',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'  => 'ВЕРХНІЙ РЕГІСТР',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP' => 'іНВЕРСІЯ рЕГІСТРА',
	// end mod CapsLock Transform
));
