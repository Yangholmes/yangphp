<?php

/**
 * 
 */

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once('/yang-config.php'); // than require~
}

/**
 * 
 */
$myDispatcher = new dispatcher();