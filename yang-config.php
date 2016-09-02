<?php

/**
 * 
 */

if(!isset($yang_config)){

	// ** MySQL settings - You can get this info from your web host ** //
	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL port */
	define('DB_PORT', '3306');

	/** MySQL database password */
	define('DB_PASSWORD', '1001');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The name of the database  */
	define('DB_DATABASE', 'yang-test');

	/** The name of the table  */
	define('DB_TABLE', 'test_user');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

	$yang_config = true;
}

//root path
define('ROOTPATH', dirname( __FILE__ ));
//includes path
define('INCLUDES', '/yang-includes');
//content path
define('CONTENT', '/yang-content');

require(ROOTPATH.INCLUDES.'/functions.php');
require(ROOTPATH.INCLUDES.'/log.php');
require(ROOTPATH.INCLUDES.'/yang-class-mysql.php');
require(ROOTPATH.INCLUDES.'/yang-xml.php');
require(ROOTPATH.INCLUDES.'/yang-session.php');
require(ROOTPATH.INCLUDES.'/yang-error.php');
require(ROOTPATH.INCLUDES.'/yang-css-loader.php');
require(ROOTPATH.INCLUDES.'/yang-js-loader.php');