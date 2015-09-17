<?php
/**
*
* User login redirect extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 david63
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'INVALID_ANNOUNCEMENT_TOPIC'			=> 'Le sujet de l’annonce est incorrect.',
	'INVALID_GROUP_TOPIC'					=> 'Le sujet du groupe est incorrect.',
	'INVALID_WELCOME_TOPIC'					=> 'Le sujet de bienvenue est incorrect.',

	'LATEST'								=> 'La dernière',
	'LOG_LOGIN_REDIRECT'					=> '<strong>Les paramètres de redirection ont été mis à jour</strong>',

	'REDIRECT'								=> 'Redirections après connexion',

	'REDIRECT_ANNOUNCE'						=> 'Redirection vers une annonce spécifique',
	'REDIRECT_ANNOUNCE_EXPLAIN'				=> 'Permet de rediriger tous les utilisateurs ne s’étant pas connectés depuis la publication de la dernière annonce du forum.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'		=> 'Permet d’afficher un message à l’utilisateur pour l’informer qu’une redirection est en cours vers la dernière annonce publiée.',
	'REDIRECT_ANNOUNCE_OPTIONS'				=> 'Paramètres de l’annonce',
	'REDIRECT_ANNOUNCE_PRIORITY'			=> 'Priorité de la redirection vers l’annonce',
	'REDIRECT_ANNOUNCE_PRIORITY_EXPLAIN'	=> 'Permet de spécifier quelle annonce est prioritaire.',
	'REDIRECT_ANNOUNCE_TOPIC_ID'			=> 'ID du sujet de l’annonce',
	'REDIRECT_ANNOUNCE_TOPIC_ID_EXPLAIN'	=> 'Permet de saisir l’ID du sujet de l’annonce vers laquelle les utilisateurs seront redirigés.',
	'REDIRECT_ANY_ANNOUNCE_EXPLAIN'			=> 'Permet de rediriger tous les utilisateurs ne s’étant pas connectés depuis la publication de l’annonce spécifiée.',

	'REDIRECT_ENABLED'						=> 'Activer les redirections des utilisateurs',

	'REDIRECT_GROUP'						=> 'Redirection vers le sujet de groupe',
	'REDIRECT_GROUP_ALL'					=> 'Tous les membres des groupes',
	'REDIRECT_GROUP_ALL_EXPLAIN'			=> 'En paramétrant sur « Oui », tous les groupes seront concernés au lieu du groupe sélectionné ci-dessous.',
	'REDIRECT_GROUP_EXPLAIN'				=> 'Permet de rediriger tous les membres d’un groupe, ou de tous les groupes, vers un sujet spécifique une fois la connexion établie sur le forum.',
	'REDIRECT_GROUP_ID'						=> 'Sélectionner un groupe',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'		=> 'Permet d’afficher un message à l’utilisateur pour l’informer qu’une redirection est en cours vers un sujet de groupe.',
	'REDIRECT_GROUP_OPTIONS'				=> 'Paramètres de groupe',
	'REDIRECT_GROUP_TOPIC_ID'				=> 'ID du sujet de groupe',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'		=> 'Permet de saisir l’ID du sujet de groupe vers lequel les utilisateurs seront redirigés.',

	'REDIRECT_LATEST_ANNOUNCE'				=> 'Redirection vers la dernière annonce',

	'REDIRECT_LOGIN'						=> 'Redirections après connexion',
	'REDIRECT_LOGIN_EXPLAIN'				=> 'Ici vous pouvez gérer la mise en place de redirections : afin que les nouveaux utilisateurs enregistrés lors de leur première connexion soient redirigés vers un sujet de bienvenue; afin que tous les utilisateurs soient redirigés vers la dernière annonce publiée depuis leur dernière visite; enfin, que soient redirigés tous les membres d’un groupe spécifique ou tous les membres des groupes vers un sujet en particulier.',

	'REDIRECT_MANAGE'						=> 'Gérer les redirections',

	'REDIRECT_SHOW_MESSAGE'					=> 'Message pour la redirection',

	'REDIRECT_WELCOME'            			=> 'Redirection vers le sujet de bienvenue',
	'REDIRECT_WELCOME_EXPLAIN'				=> 'Permet de rediriger tous les nouveaux utilisateurs enregistrés vers un sujet de bienvenue une fois leur connexion établie sur le forum.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'		=> 'Permet d’afficher un message à l’utilisateur pour l’informer qu’une redirection est en cours vers un sujet de bienvenue.',
	'REDIRECT_WELCOME_OPTIONS'				=> 'Paramètres de bienvenue',
	'REDIRECT_WELCOME_TOPIC_ID'				=> 'ID du sujet de bienvenue',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'		=> 'Permet de saisir l’ID du sujet de bienvenue vers lequel les utilisateurs seront redirigés.',

	'SELECTED'								=> 'Celle sélectionnée',
));
