<?php
/**
 * Utilisations de pipelines par Web simple dist
 *
 * @plugin     Web simple dist
 * @copyright  2018 - 2022
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Veraschmid\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

if (!isset($GLOBALS['z_blocs']))
	$GLOBALS['z_blocs'] = array(
		'content',
		'extra1',
		'extra2'
		,'head',
		'head_js',
		'header',
		'footer',
		'breadcrumb');

define('_ZENGARDEN_FILTRE_THEMES','spipr');
define('_ALBUMS_INSERT_HEAD_CSS',false);

if (
	defined('_SPIPR_AUTH_DEMO')?
		_SPIPR_AUTH_DEMO
		:
		(isset($GLOBALS['visiteur_session']['statut'])
		AND $GLOBALS['visiteur_session']['statut']=='0minirezo'
		AND $GLOBALS['visiteur_session']['webmestre']=='oui')
	)
	_chemin(_DIR_PLUGIN_WSPS_HTML5_DIST."demo/");

