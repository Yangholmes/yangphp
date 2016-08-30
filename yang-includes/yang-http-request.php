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
	//no necessary to build a POST and GET request function 
	return $_POST;
}
function get_GET_request(){
	//no necessary to build a POST and GET request function 
	return $_GET;
}