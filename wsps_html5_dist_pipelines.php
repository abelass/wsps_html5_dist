<?php
/**
 * Utilisations de pipelines par Websimple dist
 *
 * @plugin     Websimple dist
 * @copyright  2018 - 2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Veraschmid\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function wsps_html5_dist_recuperer_fond($flux){

	if ($flux['args']['fond'] == 'inclure/nav'){
		$menu_repsonsive  = recuperer_fond('inclure/menu_responsive');
		$flux['data']['texte'] = preg_replace('|<ul>|', $menu_repsonsive . '<ul id="nav-menu">', $flux['data']['texte'], 1);
	}
	return $flux;
}