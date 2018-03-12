<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php include_slot('title') ?></title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" type="application/atom+xml" title="Latest Notices" href="<?php echo url_for('notice', array('sf_format' => 'atom'), true) ?>" />
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
<?php use_javascript('jquery-1.4.2.min.js') ?>
<?php use_javascript('search.js') ?>
</head>
<body>
<div id="container">
<div id="header">
<div class="content">
<h1><a href="<?php echo url_for('@homepage') ?>"> <img
    src="/legacy/images/cooperation.gif" alt="Cooperation Notice Board" /> </a></h1>
<div id="sub_header">
<div class="post">
<h2>Ask for people</h2>
<div><a href="<?php echo url_for('notice_new') ?>">Post a Notice</a></div>
</div>

<div class="search">
  <h2>Ask for a notice</h2>
  <form action="<?php echo url_for('notice_search') ?>" method="get">
    <input type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>" id="search_keywords" />
    <input type="submit" value="search" />
    <img id="loader" src="/legacy/images/loader.gif" style="vertical-align: middle; display: none" />
    <div class="help">
      Enter some keywords (city, country, position, ...)
    </div>
  </form>
</div>



</div>
</div>
</div>

<div id="content"><?php if ($sf_user->hasFlash('notice')): ?>
<div class="flash_notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif ?> <?php if ($sf_user->hasFlash('error')): ?>
<div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif ?>

<div id="notice_history">Recent viewed notices:
<ul>
<?php foreach ($sf_user->getNoticeHistory() as $notice): ?>
    <li><?php echo link_to($notice->getPosition().' - '.$notice->getCompany(), 'notice_show_user', $notice) ?>
    </li>
<?php endforeach ?>
</ul>
</div>

<div class="content"><?php echo $sf_content ?></div>
</div>


<div id="footer">
  <div class="content">
    <span class="symfony">
      <img src="/legacy/images/cooperation-mini.png" />
      powered by <a href="/">
      <img src="/legacy/images/symfony.gif" alt="symfony framework" /></a>
    </span>
    <ul>
      <li>
        <a href=""><?php echo __('About Cooperation') ?></a>
      </li>
      <li class="feed">
        <?php echo link_to(__('Full feed'), 'notice', array('sf_format' => 'atom')) ?>
      </li>
      <li>
        <a href=""><?php echo __('Cooperation API') ?></a>
      </li>
      <li class="last">
        <?php echo link_to(__('Become an affiliate'), 'affiliate_new') ?>
      </li>
    </ul>
    <?php include_component('sfCooperationLanguage', 'language') ?>
  </div>
</div>

</div>
</body>
</html>
