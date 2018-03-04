<?php

//include(dirname(__FILE__).'/../../bootstrap/functional.php');
//
//$browser = new sfTestFunctional(new sfBrowser());
//
//$browser->
//  get('/notice/index')->
//
//  with('request')->begin()->
//    isParameter('module', 'notice')->
//    isParameter('action', 'index')->
//  end()->
//
//  with('response')->begin()->
//    isStatusCode(200)->
//    checkElement('body', '!/This is a temporary page/')->
//  end()
//;
//// test/functional/frontend/noticeActionsTest.php
//$browser->setHttpHeader('X_REQUESTED_WITH', 'XMLHttpRequest');
//$browser->
//  info('5 - Live search')->
// 
//  get('/search?query=sens*')->
//  with('response')->begin()->
//    checkElement('table tr', 2)->
//  end()
//;
//
//// test/functional/frontend/noticeActionsTest.php
//$browser->setHttpHeader('ACCEPT_LANGUAGE', 'fr_FR,fr,en;q=0.7');
//$browser->
//  info('6 - User culture')->
// 
//  restart()->
// 
//  info('  6.1 - For the first request, symfony guesses the best culture')->
//  get('/')->
//  with('response')->isRedirected()->
//  followRedirect()->
//  with('user')->isCulture('fr')->
// 
//  info('  6.2 - Available cultures are en and fr')->
//  get('/it/')->
//  with('response')->isStatusCode(404)
//;
// 
//$browser->setHttpHeader('ACCEPT_LANGUAGE', 'en,fr;q=0.7');
//$browser->
//  info('  6.3 - The culture guessing is only for the first request')->
// 
//  get('/')->
//  with('response')->isRedirected()->
//  followRedirect()->
//  with('user')->isCulture('fr')
// test/functional/frontend/noticeActionsTest.php
$browser->
  info('  7 - Notice creation page')->
 
  get('/fr/')->
  with('view_cache')->isCached(true, false)->
 
  createNotice(array('category_id' => Doctrine_Core::getTable('CooperationCategory')->findOneBySlug('programming')->getId()), true)->
 
  get('/fr/')->
  with('view_cache')->isCached(true, false)->
  with('response')->checkElement('.category_programming .more_notices', '/23/')
;
;