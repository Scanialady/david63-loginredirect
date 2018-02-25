<?php
/**
*
* @version $Id: loginredirect_common.php 111 2017-09-18 16:44:09Z Scanialady $
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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
//  ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'REDIRECT_LOGIN_ANNOUNCE_TOPIC'		=> 'Du hast dich erfolgreich angemeldet. Eine neue Ankündigung wurde seit deinem letzten Besuch veröffentlicht, zu welcher du nun weitergeleitet wirst.',
	'REDIRECT_LOGIN_GROUP_TOPIC'		=> 'Du hast dich erfolgreich angemeldet. Eine neue Gruppennachricht wurde seit deinem letzte Besuch veröffentlicht, zu welcher du nun weitergeleitet wirst.',
	'REDIRECT_LOGIN_WELCOME_TOPIC'		=> 'Du hast dich erfolgreich angemeldet. Weil dies dein erster Besuch ist, wirst du nun zu unserem Begrüßungsthema weitergeleitet.',

	'REDIRECT_REFRESH_ANNOUNCE'			=> '%sWeiter zum Ankündigungsthema%s',
	'REDIRECT_REFRESH_GROUP' 			=> '%sWeiter zum Gruppenthema%s',
	'REDIRECT_REFRESH_WELCOME'			=> '%sWeiter zum Willkommensthema%s',
));
