<?php

/**
 * 
 */

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once(ROOTPATH.'/yang-config.php'); // than require~
}

/**
 * 
 */
$myDispatcher = new dispatcher();