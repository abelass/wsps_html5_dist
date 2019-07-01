<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

/**
 * Ajouter le markup html pour une navbar responsive
 * [<div class="navbar navbar-inverse navbar-responsive" id="nav">
 * (#INCLURE{fond=inclure/nav,env}|navbar_responsive)
 * </div>]
 *
 * @param string $nav
 * @param string $class_collapse nom de la class à plier/déplier
 * @return string
 */
function navbar_responsive($nav, $class_collapse = 'nav-collapse-main'){
	if (strpos($nav,'nav-collapse')!==false) return $nav;

	$respnav = '';

	$uls = extraire_balises($nav,"ul");
	$n = 1;
	while ($ul = array_shift($uls)
		AND strpos(extraire_attribut($ul,"class"),"nav")===false){
		$n++;
	}
	if ($ul){
		$respnav = $nav;
		$p = strpos($respnav,$ul);
		$respnav = substr_replace($respnav,
			'<a class="btn btn-navbar" data-toggle="collapse" data-target=".' . $class_collapse . '">' .
				'<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>' .
				"\n".'<div class="nav-collapse ' . $class_collapse . ' collapse">',$p,0);
		$l=strlen($respnav);$p=$l-1;
		while ($n--){
			$p = strrpos($respnav,"</ul>",$p-$l);
		}
		if ($p)
			$respnav = substr_replace($respnav,'</div>',$p+5,0);
		else
			$respnav = $nav;
	}
	return $respnav;
}
