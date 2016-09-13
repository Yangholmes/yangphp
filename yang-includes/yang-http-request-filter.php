<?php
/**
 * all operator about http communication
 */

/**
 * receive POST or GET request
 * $_POST --An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.
 * $_GET -- $HTTP_GET_VARS [deprecated] — HTTP GET variables
 */
function get_POST_request(){
	// filter for the request
	$post_string = json_encode($_POST);
	$post_array = json_decode($post_string);
	return $post_array;
}
function get_GET_request(){
	// filter for the request
	$get_string = json_encode($_GET);
	$get_array = json_decode($get_string);
	return $get_array;
}

/**
 * test
 */
echo json_encode( get_POST_request() );
echo json_encode( get_GET_request() );
