<?php

/**
 * 
 */

/**
 * 
 */
function load_js($javascript, $echo=true){
	if($javascript == null || $javascript == "")
		return null;
	if(!suffix_detect($javascript, '.js')) //if $javascript does not contain suffix...
		$javascript .= ".js"; //then add one

	$js_folder = get_root()."/yang-includes/js"; //js folder
	$js_file = $js_folder."/".$javascript; // javascript file

	$script = make_js_element($js_file);
	if($echo){
		echo $script;
		return true;
	}
	else{
		return $script;
	}
}

/**
 * 
 */
function make_js_element($js_file){
	$tag = '<script type="text/javascript" src="'.$js_file.'" ></script>';
	return $tag;
}

/**
 * test
 */
// load_js('jquery-2.1.1');