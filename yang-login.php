<?php

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once(dirname(__FILE__).'/yang-config.php'); // than require~

	if(get_session('valid_user')!=null){
		require_once(ROOTPATH.CONTENT.'/home.php');
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
		require_once(ROOTPATH.CONTENT.'/home.php');
	}
	else
		yang_exit('用户名或者密码错误<br>返回上一页重试', null, '登录失败');
}
else{ //if yang-config.php has required than do html
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta name="renderer" content="webkit">
			<title>登陆</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
			<link type="text/css" rel="stylesheet" href="<?php load_css(); ?>" />
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
