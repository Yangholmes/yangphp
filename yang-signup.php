<?php

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once(dirname(__FILE__).'/yang-config.php'); // than require~
}
if( @ $_POST['user'] == null ){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="renderer" content="webkit">
		<title>注册</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<?php 
			load_css('signup.css'); 
			load_js('jquery-2.1.1.js'); 
			?>
	</head>
	<body>
		<form id="login" action="yang-signup.php" method="post">
			<input type="text" name="user" >
			<input type="password" name="password" >
			<input type="email" name="email" >
			<input type="submit" value="submit">
		</form>
	</body>
</html>
<?php
}
else{
	$user = $_POST['user'];
	$password = $_POST['password'];
	$email = $_POST['email'];



	$password = sha1($password); //encrypt password
	$new_user = [ 	"username"=>$user,
					"password"=>$password,
					"email"=>$email ];

	$signup = new yangMysql();
	$password = sha1($password);
	$only = $signup->simpleSelect(null,"username='$user'", null, null);
	if($signup->row == 0){
		$result = $signup->insert($new_user);
		echo $result;
		if($result!=0)
			yang_exit('注册成功！请<a href="yang-login.php">登录</a>', null, '注册成功');
		else
			yang_exit('注册信息不合法！<br>返回上一页<a href="yang-signup.php">重试</a>', null, '注册失败');
	}
	else
		yang_exit('用户名已存在<br>返回上一页<a href="yang-signup.php">重试</a>', null, '注册失败');

}