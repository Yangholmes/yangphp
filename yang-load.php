<?php
/**
 * components includes:
 * xml reader
 * log
 * configuration
 */

if ( file_exists(dirname(__FILE__).'/yang-config.php') ){
	//load configuration
	require(dirname(__FILE__).'/yang-config.php');
	//entry of the app
	require(dirname(__FILE__).'/yang-entry.php');
}
else{
	//
	require(dirname(__FILE__).'/yang-includes'.'/functions.php');
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta name="renderer" content="webkit">
			<title>出错啦！</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
			
		</head>
		<body>
		<p>核心部件丢失了！</p>
		<p>T.T</p>
		</body>
	</html>

<?php
}