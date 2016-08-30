<?php

require_once '../yang-mysql-lib/yang-mysql-class.php'; //
require_once 'login.php';
require_once 'register.php';

session_start(); // start a session

/**
 * register (signup)
 */
	// echo json_encode($_POST);
	// echo $_POST['user'];

echo json_encode(isset($_SESSION['valid_user']));
echo "begin";

if(!isset($_SESSION['valid_user'])){

	if(login($_POST['user'], $_POST['password']))
		$_SESSION['valid_user'] = $_POST['user'];
	// register($_POST['user'], $_POST['password'], $_POST['email'], null);
}
else{
	echo "you are already in!".$_SESSION['valid_user'];
}