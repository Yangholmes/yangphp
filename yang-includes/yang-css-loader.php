<?php

/**
 * 
 */

/**
 * 
 */
function load_css($stylesheet){
	if(!suffix_detect($stylesheet, '.css')) //if $stylesheet does not contain suffix...
		$stylesheet .= ".css"; //then add one
	$css_folder = dirname($__FILE__)."/css"; //css folder
	$css_file = $css_folder.$stylesheet; // stylesheet file

}


/**
 * 
 */
function suffix_detect($file, $suffix){
	$dot_pattern = '/^\./';
	if(!preg_match($dot_pattern, $suffix)){ //if $suffix does not contain a beginning dot
		$suffix = ".".$suffix; //then add a dot
	}
	$pattern = '/'.$suffix.'$/';
	return preg_match($pattern, $file); //test the filename, return match result
}

/**
 * test
 */
// echo suffix_detect('style.css','.css');
// echo suffix_detect('style.css','css');
// echo suffix_detect('style','css');
// echo suffix_detect('style','css');