<?php
/**
 *
 * @package Recent Topics Extension
 * Ukrainian translation by Alex Diamantopulo
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
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
	'ACL_U_RT_VIEW'            => 'Останні Теми: вигляд (основний)',
	'ACL_U_RT_ENABLE'          => 'Останні Теми: увімкнено чи вимкнено',
	'ACL_U_RT_ALT_LOCATION'    => 'Останні Теми: використовувати альтернативне місце відображення',
	'ACL_U_RT_SORT_START_TIME' => 'Останні Теми: змінити порядок сортування',
	'ACL_U_RT_UNREAD_ONLY'     => 'Останні Теми: використовувати режим "тільки непрочитані"',
));
