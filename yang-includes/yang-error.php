<?php

/**
 * error handler
 */

//forbid error output
error_reporting(0);

//set error handler
set_error_handler("yang_error_handler");

//set a fatal error handler
register_shutdown_function('yang_shutdown');

/**
 * function yang_error_handle
 * The following error types cannot be handled with a user defined function: E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, and most of E_STRICT raised in the file where set_error_handler() is called.
 */
function yang_error_handler($errno, $errstr, $errfile, $errline){
	$logging = 	"\n\t##errno ".$errno
				."\n\t##error ".$errstr
				."\n\t##errfile ".$errfile
				."\n\t##in line ".$errline;
	logFileIO($logging); // write into logging file
	error_clear_last(); // clear last error
}

/**
 *
 */
function yang_shutdown(){
	$error = error_get_last(); //
	if($error != null ){ // if error is not null
		yang_error_handle($error['type'], $error['message'], $error['file'], $error['line']);
		logFileIO("shutdown successfully");
	}
}
