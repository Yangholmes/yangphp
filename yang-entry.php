<?php

/**
 * if session is set and valid, goto homepage
 * if not, goto login page
 */

if(get_session('valid_user')!=null){ //the visitor has already login 
	require_once(ROOTPATH.CONTENT.'/home.php');
}
else{
	require(ROOTPATH.'/yang-login.php'); //the visitor haven't login
}