<?php

//include(dirname(__FILE__).'/../../bootstrap/functional.php');
//
//$browser = new sfTestFunctional(new sfBrowser());
//
//$browser->
//  get('/api/index')->
//
//  with('request')->begin()->
//    isParameter('module', 'api')->
//    isParameter('action', 'index')->
//  end()->
//
//  with('response')->begin()->
//    isStatusCode(200)->
//    checkElement('body', '!/This is a temporary page/')->
//  end()
//;

// test/functional/frontend/apiActionsTest.php
include(dirname(__FILE__).'/../../bootstrap/functional.php');
 
$browser = new CooperationTestFunctional(new sfBrowser());
$browser->loadData();
 
$browser->
  info('1 - Web service security')->
 
  info('  1.1 - A token is needed to access the service')->
  get('/api/foo/notices.xml')->
  with('response')->isStatusCode(404)->
 
  info('  1.2 - An inactive account cannot access the web service')->
  get('/api/symfony/notices.xml')->
  with('response')->isStatusCode(404)->
 
  info('2 - The notices returned are limited to the categories configured for the affiliate')->
  get('/api/sensio_labs/notices.xml')->
  with('request')->isFormat('xml')->
  with('response')->begin()->
    isValid()->
    checkElement('notice', 32)->
  end()->
 
  info('3 - The web service supports the JSON format')->
  get('/api/sensio_labs/notices.json')->
  with('request')->isFormat('json')->
  with('response')->matches('/"category"\: "Programming"/')->
 
  info('4 - The web service supports the YAML format')->
  get('/api/sensio_labs/notices.yaml')->
  with('response')->begin()->
    isHeader('content-type', 'text/yaml; charset=utf-8')->
    matches('/category\: Programming/')->
  end()
;