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

	return $_POST;
}
function get_GET_request(){
	// filter for the request

	return $_GET;
}

/**
 * 
 */
function get_ALL_request(){
	$request = get_POST_request() ? get_POST_request() : get_GET_request();
	$request = request_head_check($request);
	return $request;
}

/**
 * 
 */
function request_head_check($request){
	if( !$request['action'] )
		$request['action'] = 'default.php';
	if( !$request['data'] )
		$request['data'] = null;
	return $request;
}

/**
 * test
 */
// echo json_encode( get_POST_request() );
// echo json_encode( get_GET_request() );
// echo json_encode( get_ALL_request() );