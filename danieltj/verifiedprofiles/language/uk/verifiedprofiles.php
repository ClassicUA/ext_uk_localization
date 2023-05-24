<?php

/**
 * @package Verified Profiles
 * @copyright (c) 2021 Daniel James
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if ( ! defined( 'IN_PHPBB' ) ) {

	exit;

}

if ( empty( $lang ) || ! is_array( $lang ) ) {

	$lang = [];

}

$lang = array_merge( $lang, [
	'VERIFIED' => 'Перевірено',
	'VERIFIED_TIP' => 'Користувача перевірено',
	'VERIFIED_LABEL' => 'Підтвердити',
	'VERIFIED_EXPLAIN' => 'Встановіть значення так, щоб підтвердити профіль цього користувача.',
] );
