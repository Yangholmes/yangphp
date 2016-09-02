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
			<?php load_css("error.css"); ?>
		</head>
		<body>
		<p><?php echo $msg ?></p>
		</body>
	</html>
<?php
	exit();
}

/**
 * 
 */
function get_root(){ //get app root path
	// return realpath(dirname(__FILE__)."../../"); //parent path of this script
	$host = $_SERVER['HTTP_HOST'];
	$file = $_SERVER['PHP_SELF'];
	$file = substr($file, 0, strpos($file, "/", 1));
	$dirname = "http://".$host.$file;
	// $dirname = dir_route($dirname, -1);
	return $dirname;
}

/**
 * 
 */
function dir_route($dir, $step = 0){
	if($step<0){
		while($step!=0){
			$dir = substr($dir, 0, strrpos($dir, "/"));
			$step++;
		}
	}
	return $dir;
}

/**
 * 
 */
function suffix_detect($file, $suffix){
	$dot_pattern = '/^\./';
	if(!preg_match($dot_pattern, $suffix)){ //if $suffix does not contain a beginning dot
		$suffix = ".".$suffix; //then add a dot
	}
	$pattern = '/'.$suffix.'$/';
	return preg_match($pattern, $file); //test the filename, return match result
}

/**
 * test
 */
// get_root();