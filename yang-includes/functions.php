<?php

/**
 * 
 */
function yang_exit($msg='', $args=array(), $title='出错啦'){
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta name="renderer" content="webkit">
			<title><?php echo $title; ?></title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
			<link type="text/css" rel="stylesheet" href="<?php load_css("error.css"); ?>" />
		</head>
		<body>
		<p><?php echo $msg ?></p>
		</body>
	</html>
<?php
}

/**
 * 
 */
function get_root(){ //get app root path
	return realpath(dirname(__FILE__)."../../"); //parent path of this script
}