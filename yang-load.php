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
}
else{
	//
	require(dirname(__FILE__).INCLUDES.'/functions.php');
	yang_exit('核心组件丢失');
}