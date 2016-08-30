<?php

function logFileIO($logging='', $filename='commonlog'){
	$folder = dirname(__FILE__)."/log/";
	$logFileName = $filename.'-';
	
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Asia/Shanghai');
	$currentDate = date("Y-m-d");
	$currentTime = date("Y-m-d H:i:s");

	$logFile = fopen($folder.$logFileName.$currentDate.".log", "a+");
	fwrite($logFile, $currentTime." ".$logging."\n");
	fclose($logFile);
}