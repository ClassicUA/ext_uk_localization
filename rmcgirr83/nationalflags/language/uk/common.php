<?php

/**
*
*
* @package - National Flags language
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'FLAGS'				=> array(
		1 => '%s прапор',
		2 => '%s прапори',
	),
	'USER_FLAG'			=> 'Прапор',
	'USER_FLAG_EXPLAIN'	=> 'Відображається прапор за замовчуванням дошки.',
	'NATIONAL_FLAGS'	=> 'Прапори',
	'FLAG_EXPLAIN'		=> 'Оберіть свій прапор',
	'USER_NEEDS_FLAG'	=> 'Будь ласка, знайдіть хвилинку і відвідайте свій профіль, щоб вибрати прапор.',
	'FLAGS_VIEWONLINE'	=> 'Перегляд прапорів',
	'FLAG_USERS'		=>  array(
		1 => '%s Користувач',
		2 => '%s Користувачі',
	),
	'MUST_CHOOSE_FLAG'	=> '<span class="error">Ви повинні вибрати прапор.</span>',
	'NO_SUCH_FLAG'		=> '<span class="error">Прапора не існує</span>',
	'NO_USER_HAS_FLAG'	=> 'Жоден користувач не має цього прапора',
	'FLAG_NOT_EXIST'	=> 'Прапора не існує',
// uncomment and translate the following line for languages for the flags other than what is in the ACP
// if a flag name in the ACP has a space, you must use _  in it's place below (hint: see "AMERICAN_SAMOA")
// see above for Unicode characters to use
	'AFGHANISTAN' => 'Afghanistan',
	'ALBANIA' => 'Albania',
	'ALGERIA' => 'Algeria',
	'AMERICAN_SAMOA' => 'American Samoa',
	'ANDORRA' => 'Andorra',
	'ANGOLA' => 'Angola',
	'ANGUILLA' => 'Anguilla',
	'ANTIGUA_&AMP;_BARBUDA' => 'Antigua &amp; Barbuda',
	'ARGENTINA' => 'Argentina',
	'ARMENIA' => 'Armenia',
	'ARUBA' => 'Aruba',
	'AUSTRALIA' => 'Australia',
	'AUSTRIA' => 'Austria',
	'AZERBAIJAN' => 'Azerbaijan',
	'BAHAMAS' => 'Bahamas',
	'BAHRAIN' => 'Bahrain',
	'BANGLADESH' => 'Bangladesh',
	'BARBADOS' => 'Barbados',
	'BELARUS' => 'Belarus',
	'BELGIUM' => 'Belgium',
	'BELIZE' => 'Belize',
	'BENIN' => 'Benin',
	'BERMUDA' => 'Bermuda',
	'BHUTAN' => 'Bhutan',
	'BOLIVIA' => 'Bolivia',
	'BONAIRE' => 'Bonaire',
	'BOSNIA_&AMP;_HERZEGOVINA' => 'Bosnia &amp; Herzegovina',
	'BOTSWANA' => 'Botswana',
	'BRAZIL' => 'Brazil',
	'BRUNEI' => 'Brunei',
	'BULGARIA' => 'Bulgaria',
	'BURKINA_FASO' => 'Burkina Faso',
	'BURUNDI' => 'Burundi',
	'CAMBODIA' => 'Cambodia',
	'CAMEROON' => 'Cameroon',
	'CANADA' => 'Canada',
	'CAPE_VERDE' => 'Cape Verde',
	'CAYMAN_ISLANDS' => 'Cayman Islands',
	'CENTRAL_AFRICAN_REPUBLIC' => 'Central African Republic',
	'CHAD' => 'Chad',
	'CHILE' => 'Chile',
	'CHINA' => 'China',
	'COLUMBIA' => 'Columbia',
	'COMOROS' => 'Comoros',
	'CONGO' => 'Congo',
	'CONGO_DEMOCRATIC_REPUBLIC' => 'Congo Democratic Republic',
	'COSTA_RICA' => 'Costa Rica',
	'COTE_D-IVOIRE' => 'Cote D-Ivoire',
	'CROATIA' => 'Croatia',
	'CUBA' => 'Cuba',
	'CYPRUS' => 'Cyprus',
	'CZECH_REPUBLIC' => 'Czech Republic',
	'DENMARK' => 'Denmark',
	'DJIBOUTI' => 'Djibouti',
	'DOMINICA' => 'Dominica',
	'DOMINICAN_REPUBLIC' => 'Dominican Republic',
	'EAST_TIMOR' => 'East Timor',
	'ECUADOR' => 'Ecuador',
	'EGYPT' => 'Egypt',
	'EL_SALVADOR' => 'El Salvador',
	'EQUATORIAL_GUINEA' => 'Equatorial Guinea',
	'ERITREA' => 'Eritrea',
	'ESTONIA' => 'Estonia',
	'ETHIOPIA' => 'Ethiopia',
	'FALKLAND_ISLANDS' => 'Falkland Islands',
	'FAROE_ISLANDS' => 'Faroe Islands',
	'FIJI' => 'Fiji',
	'FINLAND' => 'Finland',
	'FRANCE' => 'France',
	'GABON' => 'Gabon',
	'GAMBIA' => 'Gambia',
	'GEORGIA' => 'Georgia',
	'GERMANY' => 'Germany',
	'GHANA' => 'Ghana',
	'GREAT_BRITAIN' => 'Great Britain',
	'GREECE' => 'Greece',
	'GREENLAND' => 'Greenland',
	'GRENADA' => 'Grenada',
	'GUAM' => 'Guam',
	'GUATEMALA' => 'Guatemala',
	'GUINEA' => 'Guinea',
	'GUINEA_BISSAU' => 'Guinea Bissau',
	'GUYANA' => 'Guyana',
	'HAITI' => 'Haiti',
	'HONDURAS' => 'Honduras',
	'HONG_KONG' => 'Hong Kong',
	'HUNGARY' => 'Hungary',
	'ICELAND' => 'Iceland',
	'INDIA' => 'India',
	'INDONESIA' => 'Indonesia',
	'IRAN' => 'Iran',
	'IRAQ' => 'Iraq',
	'IRELAND' => 'Ireland',
	'ISLE_OF_MAN' => 'Isle of Man',
	'ISRAEL' => 'Israel',
	'ITALY' => 'Italy',
	'JAMAICA' => 'Jamaica',
	'JAPAN' => 'Japan',
	'JORDAN' => 'Jordan',
	'KAZAKHSTAN' => 'Kazakhstan',
	'KENYA' => 'Kenya',
	'KIRIBATI' => 'Kiribati',
	'KOREA_NORTH' => 'Korea North',
	'KOREA_SOUTH' => 'Korea South',
	'KUWAIT' => 'Kuwait',
	'KYRGYZSTAN' => 'Kyrgyzstan',
	'LAOS' => 'Laos',
	'LATVIA' => 'Latvia',
	'LEBANON' => 'Lebanon',
	'LESOTHO' => 'Lesotho',
	'LIBERIA' => 'Liberia',
	'LIBYA' => 'Libya',
	'LIECHTENSTEIN' => 'Liechtenstein',
	'LITHUANIA' => 'Lithuania',
	'LUXEMBOURG' => 'Luxembourg',
	'MACAU' => 'Macau',
	'MACEDONIA' => 'Macedonia',
	'MADAGASCAR' => 'Madagascar',
	'MALAWI' => 'Malawi',
	'MALAYSIA' => 'Malaysia',
	'MALDIVES' => 'Maldives',
	'MALI' => 'Mali',
	'MALTA' => 'Malta',
	'MARSHALL_ISLANDS' => 'Marshall Islands',
	'MAURITANIA' => 'Mauritania',
	'MAURITIUS' => 'Mauritius',
	'MEXICO' => 'Mexico',
	'MICRONESIA' => 'Micronesia',
	'MOLDOVA' => 'Moldova',
	'MONACO' => 'Monaco',
	'MONGOLIA' => 'Mongolia',
	'MONTSERRAT' => 'Montserrat',
	'MOROCCO' => 'Morocco',
	'MOZAMBIQUE' => 'Mozambique',
	'MYANMAR' => 'Myanmar',
	'NAMBIA' => 'Nambia',
	'NAURU' => 'Nauru',
	'NEPAL' => 'Nepal',
	'NETHERLAND_ANTILLES' => 'Netherland Antilles',
	'NETHERLANDS' => 'Netherlands',
	'NEW_ZEALAND' => 'New Zealand',
	'NICARAGUA' => 'Nicaragua',
	'NIGER' => 'Niger',
	'NIGERIA' => 'Nigeria',
	'NORFOLK_ISLAND' => 'Norfolk Island',
	'NORWAY' => 'Norway',
	'OMAN' => 'Oman',
	'PAKISTAN' => 'Pakistan',
	'PALAU_ISLAND' => 'Palau Island',
	'PALESTINE' => 'Palestine',
	'PANAMA' => 'Panama',
	'PAPUA_NEW_GUINEA' => 'Papua New Guinea',
	'PARAGUAY' => 'Paraguay',
	'PERU' => 'Peru',
	'PHILIPPINES' => 'Philippines',
	'PITCAIRN_ISLAND' => 'Pitcairn Island',
	'POLAND' => 'Poland',
	'PORTUGAL' => 'Portugal',
	'PUERTO_RICO' => 'Puerto Rico',
	'QATAR' => 'Qatar',
	'ROMANIA' => 'Romania',
	'RUSSIA' => 'Russia',
	'RWANDA' => 'Rwanda',
	'SAMOA' => 'Samoa',
	'SAN_MARINO' => 'San Marino',
	'SAO_TOME_&AMP;_PRINCIPE' => 'Sao Tome &amp; Principe',
	'SAUDI_ARABIA' => 'Saudi Arabia',
	'SENEGAL' => 'Senegal',
	'SEYCHELLES' => 'Seychelles',
	'SIERRA_LEONE' => 'Sierra Leone',
	'SINGAPORE' => 'Singapore',
	'SLOVAKIA' => 'Slovakia',
	'SLOVENIA' => 'Slovenia',
	'SOLOMON_ISLANDS' => 'Solomon Islands',
	'SOMALIA' => 'Somalia',
	'SOUTH_AFRICA' => 'South Africa',
	'SPAIN' => 'Spain',
	'SRI_LANKA' => 'Sri Lanka',
	'ST_HELENA' => 'St Helena',
	'ST_KITTS-NEVIS' => 'St Kitts-Nevis',
	'ST_LUCIA' => 'St Lucia',
	'ST_VINCENT_&AMP;_GRENADINES' => 'St Vincent &amp; Grenadines',
	'SUDAN' => 'Sudan',
	'SURINAME' => 'Suriname',
	'SWAZILAND' => 'Swaziland',
	'SWEDEN' => 'Sweden',
	'SWITZERLAND' => 'Switzerland',
	'SYRIA' => 'Syria',
	'TAIWAN' => 'Taiwan',
	'TAJIKISTAN' => 'Tajikistan',
	'TANZANIA' => 'Tanzania',
	'THAILAND' => 'Thailand',
	'TOGO' => 'Togo',
	'TONGA' => 'Tonga',
	'TRINIDAD_&AMP;_TOBAGO' => 'Trinidad &amp; Tobago',
	'TUNISIA' => 'Tunisia',
	'TURKEY' => 'Turkey',
	'TURKMENISTAN' => 'Turkmenistan',
	'TURKS_&AMP;_CAICOS_IS' => 'Turks &amp; Caicos Is',
	'TUVALU' => 'Tuvalu',
	'UGANDA' => 'Uganda',
	'UKRAINE' => 'Ukraine',
	'UNITED_ARAB_EMIRATES' => 'United Arab Emirates',
	'UNITED_STATES_OF_AMERICA' => 'United States of America',
	'URUGUAY' => 'Uruguay',
	'UZBEKISTAN' => 'Uzbekistan',
	'VANUATU' => 'Vanuatu',
	'VENEZUELA' => 'Venezuela',
	'VIETNAM' => 'Vietnam',
	'VIRGIN_ISLANDS_(BRIT)' => 'Virgin Islands (Brit)',
	'VIRGIN_ISLANDS_(USA)' => 'Virgin Islands (USA)',
	'WALES' => 'Wales',
	'WESTERN_SAHARA' => 'Western Sahara',
	'YEMEN' => 'Yemen',
	'ZAMBIA' => 'Zambia',
	'ZIMBABWE' => 'Zimbabwe',
	'COCOS_(KEELING)_ISLANDS' => 'Cocos (Keeling) Islands',
	'COOK_ISLANDS' => 'Cook Islands',
	'CURACAO' => 'Curaçao',
	'CHRISTMAS_ISLAND' => 'Christmas Island',
	'GIBRALTAR' => 'Gibraltar',
	'SAINT-MARTIN_(FRENCH_PART)' => 'Saint-Martin (French part)',
	'MARTINIQUE' => 'Martinique',
	'NEW_CALEDONIA' => 'New Caledonia',
	'NIUE' => 'Niue',
	'FRENCH_POLYNESIA' => 'French Polynesia',
	'SOUTH_SUDAN' => 'South Sudan',
	'FRENCH_SOUTHERN_TERRITORIES' => 'French Southern Territories',
	'TOKELAU' => 'Tokelau',
	'WALLIS_AND_FUTUNA_ISLANDS' => 'Wallis and Futuna Islands',
	'MAYOTTE' => 'Mayotte',
	'SERBIA' => 'Serbia',
));