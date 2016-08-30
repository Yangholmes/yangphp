<?php

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once(dirname(__FILE__).'/yang-config.php'); // than require~

	echo json_encode(get_session('valid_user'));
	if(get_session('valid_user')!=null){
		echo "you've already in";
		return true;
	}
	$user = $_POST['user'];
	$password = $_POST['password'];

	$login = new yangMysql();
	$password = sha1($password);
	$login->simpleSelect(null,"username='$user' and password='$password'", null, null);

	if($login->row==1){
		set_session('valid_user', $user);
		echo "you log in!";
	}
	else
		echo "fail!";
}
else{ //if yang-config.php has required than do html
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>登陆</title>
		</head>
		<body>
			<form id="login" action="yang-login.php" method="post">
			<input type="text" name="user" >
			<input type="password" name="password" >
			<input type="submit" value="submit">
		</form>
		</body>
	</html>
<?php
}
