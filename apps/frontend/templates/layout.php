<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
    <title><?php include_slot('title') ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:url" content="">
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <meta name="renderer" content="webkit">
    <meta name="mobile-agent" content="format=html5;url=http://m.cooperationlive.com">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="alternate" type="application/atom+xml" title="Latest articles" href="<?php echo url_for('article', array('sf_format' => 'atom'), true) ?>"/>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/article.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.css"/>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/site.js"></script>
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body class="container-fluid">
<div id="g_main">
  <div id="web" class="mt-3">
      <div class="row p-3">
        <div class="mx-3"><h1 class="text-danger"><strong>Cooperation Live</strong></h1>
        </div>
        <div class="ml-auto">
          <div class="row">
            <div class="m-3">
            <form id="search_form" action="<?php echo url_for('article_search') ?>" method="get">
             <input class="fk-newSearchInput" maxlength="100" placeholder="" _nsl="[]" type="text" name="query"
                    alue="<?php echo $sf_request->getParameter('query') ?>" id="search_keywords">
            </form>
              </div>
            <div class="m-3">
              <a href="javascript:void(0)" onclick="searchFormSubmit()">
                <span class="fa fa-search fa-2x text-danger"></span>
              </a>
              <script>
                  function searchFormSubmit(){
                      $("#search_form").submit();
                  }
              </script>
              </div>
            </div>
        </div>
      </div>
<div class="mx-3">
      <nav class="navbar navbar-default bg-danger" role="navigation">
	<div class="navbar-header">
            <a class="navbar-brand" href="#" ><span class="text-white"><?php echo __('首页') ?></span></a>
	</div>
	<div class="navbar-expand">
        <ul class="nav navbar-nav">
          <li><a class="navbar-brand" href="#" ><span class="text-white"><?php echo __('品牌策划') ?></span></a>
          </li>
          <li>
            <a class="navbar-brand" href="#"><span class="text-white"><?php echo __('媒体资源') ?></span></a>
          </li>
          <li><a class="navbar-brand" href="#" ><span class="text-white"><?php echo __('关于我们') ?></span></a>
          </li>
          <li>
            <a class="navbar-brand" href="#" ><span class="text-white"><?php echo __('新闻动态') ?></span></a>
          </li>
          <li>
            <a class="navbar-brand" href="#"><span class="text-white"><?php echo __('咖啡屋') ?></span></a>
          </li>
          <li><a class="navbar-brand" href="#"><span class="text-white"><?php echo __('联系我们') ?></span></a>
          </li>
        </ul>
  </div>
        </nav>
  </div>
    </div>
  <div class="container"><?php echo $sf_content ?></div>
  <div class="w-100 bg-light">
    <div class="row no-gutters"><div class="col text-center"><?php echo __('©2018 版权所有') ?>&nbsp;<?php echo __('备案号：辽ICP备18003786号-2') ?></div></div>
    <div class="row no-gutters">
      <div class="col text-right">
      <a href="http://m.cooperationlive.com/" target="_blank"><?php echo __('手机版') ?></a>
      <span>|</span>
      <a rel="nofollow" hidefocus="true" href="http://manage.cooperationlive.com" onclick='Fai.closeTip("#footerLogin");'><?php echo __('管理登录') ?></a>
      </div>
      <div class="col text-left ml-3">
      <?php include_component('sfCooperationLanguage', 'language') ?>
      </div>
    </div>
  </div>
</div>
<script src="/js/computer.js" type="text/javascript"></script>
</body>
</html>