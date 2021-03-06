<?php
//sample config.
//make a copy, change it to your paths and save it as config.php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

$base = dirname(__FILE__) . '/../';
define('SIMPLETEST_INCLUDE_DIR' , $base . '../simpletest/');
define('RDFAPI_INCLUDE_DIR'     , $base . '/api/');
define('RDFAPI_TEST_INCLUDE_DIR', $base);
define('SPARQL_TESTFILES'       , RDFAPI_TEST_INCLUDE_DIR . 'test/unit/Sparql/');
$GLOBALS['testDebug'] = false;

$GLOBALS['dbConf'] = array(
    'type'      => 'MySQL',
    'host'      => 'localhost',
    'database'  => 'openrecommender',
    'user'      => 'root',
    'password'  => '123password'
);

//enable this to get more information about failing unit tests
$GLOBALS['debugTests'] = true;

//debug SPARQL engine
$GLOBALS['debugSparql'] = true;

//used in W3C earl report serialization
$GLOBALS['earlReport'] = array(
    'reporter' => array(
        'name'      => 'BCmoney MobileTV',
        'seeAlso'   => 'http://bcmoney-mobiletv.com/bcmoney/foaf',
        'homepage'  => 'http://bcmoney-mobiletv.com/bcmoney'
    )
);

define('LOG', false);
?>