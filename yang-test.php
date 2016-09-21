<?php
/**
 * functions test here
 */

//require config
if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once(dirname(__FILE__).'/yang-config.php'); // than require~
}
//reenable error report
error_reporting(E_ALL);

/**
 * http request test
 */
// $request = new yang_HTTP_request("http://localhost:8983/solr/gettingstarted/select?indent=on&q=*:*&wt=json");
// $request = new yang_HTTP_request("http://baidu.com");
// $response = $request->request('GET');
// echo $response;

/**
 * test exec(), execute Windows cmd
 */
echo passthru('cd C:\xampp\htdocs\wordpress');
passthru('php index.php', $return);
echo $return;