<?php

/**
 * 
 */

/**
 * 
 */
function load_css($stylesheet, $echo=true){
	if(!suffix_detect($stylesheet, '.css')) //if $stylesheet does not contain suffix...
		$stylesheet .= ".css"; //then add one

	$css_folder = get_root()."/yang-includes/css"; //css folder
	$css_file = $css_folder."/".$stylesheet; // stylesheet file

	$style = make_css_element($css_file);
	if($echo){
		echo $style;
		return true;
	}
	else{
		return $style;
	}
}

/**
 * 
 */
function make_css_element($css_file){
	$tag = '<link type="text/css" rel="stylesheet" href="'.$css_file.'" >';
	return $tag;
}

/**
 * test
 */
// echo suffix_detect('style.css','.css');
// echo suffix_detect('style.css','css');
// echo suffix_detect('style','css');
// echo suffix_detect('style','css');