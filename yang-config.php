<?php

/**
 *
 */

if(!isset($yang_config)){

	/** Project Name **/
	define('PROJECT_NAME', 'YangPHP');

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

	/* define global constant */
	// root path
	define('ROOTPATH', dirname( __FILE__ ));
	// includes path
	define('INCLUDES', '/yang-includes');
	// content path
	define('CONTENT', '/yang-content');
	// server path
	define('SERVER', '/yang-server');

	/* require required classes and functions */
	// require_once(ROOTPATH.INCLUDES.'/functions.php');
	// require_once(ROOTPATH.INCLUDES.'/log.php');
	// require_once(ROOTPATH.INCLUDES.'/yang-error.php');

	/* require all plugin classes and functions in includes folder */
	require_functions(ROOTPATH.INCLUDES);

	$yang_config = true;
}

/**
 * auto require all scripts in yang-includes folder
 * potential safety problem: could send malicious scripts into this folder could be executed 
 * @param $parent: parent directory
 */
function require_functions($parent){
	$all_files = scandir($parent);
	$pattern = '/\.php$/';
	for($i=0;$i<count($all_files);$i++){
		if( preg_match($pattern, $all_files[$i]) )
			require_once($parent."/$all_files[$i]");
	}
	return true;
}
