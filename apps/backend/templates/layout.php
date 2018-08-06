<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Cooperation Admin Interface</title>
		<link rel="shortcut icon" href="/favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:url" content="">
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <meta name="renderer" content="webkit">
    <meta name="mobile-agent" content="format=html5;url=http://m.cooperationlive.com">
    <meta name="keywords" content="">
    <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.css"/>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="bg-info text-center">
        <a href="<?php echo url_for('homepage') ?>">
  				<h1 class="text-white">
            COOPERATION LIVE
	  			</h1>
        </a>
			</div>

      <?php if ($sf_user->isAuthenticated()): ?>
        <nav>
					<ul>
						<li><?php echo link_to('Articles', 'cooperation_article') ?></li>
						<li><?php echo link_to('Categories', 'cooperation_category') ?></li>
						<li><?php echo link_to('Users', 'sf_guard_user') ?></li>
						<li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
						<li>
							<a href="<?php echo url_for('cooperation_affiliate') ?>">Affiliates - <strong><?php echo Doctrine_Core::getTable('CooperationAffiliate')->countToBeActivated() ?></strong></a>
						</li>
					</ul>
        </nav>
      <?php endif ?>

      <div id="content" class="container-fluid">
				<?php echo $sf_content ?>
			</div>

      <div class="w-100 bg-light">
        <div class="row no-gutters"><div class="col text-center">©2018 版权所有</div></div>
        <div class="row no-gutters"><div class="col text-center">All Rights Reserved. 备案号：辽ICP备18003786号-2</div></div>
        <div class="row no-gutters">
				  <div class="col text-center">
            <a hidefocus="true" href="http://www.cooperationlive.com/" target="_blank">Back to frontend page</a>
          </div>
        </div>
     </div>
		</div>
	</body>
</html>