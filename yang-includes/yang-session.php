<?php

/**
 * All about session
 */

if(!isset($session_started)){
	session_start();
	$session_started = true;
}

//get session value
function get_session($session_name){
	if( isset($_SESSION[$session_name]) ){
		return $_SESSION[$session_name];
	}
	else
		return null;
}

//set session value
function set_session($session_name, $session_value){
	$_SESSION[$session_name] = $session_value;
}