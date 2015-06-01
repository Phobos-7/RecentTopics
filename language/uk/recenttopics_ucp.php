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
	'RT_ENABLE'              => 'Відображати останні теми',
	'RT_ALT_LOCATION'        => 'Використовувати альтернативне розташування',
	'RT_ALT_LOCATION_EXP'    => 'Перемістити "Остані теми" в інше місце (як праивло в кінець сторінки, в залежності від активного стилю).',
	'RT_SORT_START_TIME'     => 'Сортувати список останніх тем за датою створення тем',
	'RT_SORT_START_TIME_EXP' => 'Замість сортування тем за датами останніх повідмолень',
	'RT_UNREAD_ONLY'         => 'Відображати тільки непрочитані теми в списку останніх тем',
));
