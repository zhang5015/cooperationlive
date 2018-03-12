<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Cooperation Admin Interface</title>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_javascripts() ?>
		<?php include_stylesheets() ?>
		<?php use_stylesheet('admin.css') ?>
	</head>
	<body>

		<div id="container">
			<div id="header">
				<h1>
					<a href="<?php echo url_for('homepage') ?>">
						<img src="" alt="Cooperation Notice Board" />
					</a>
				</h1>
			</div>

			<?php if ($sf_user->isAuthenticated()): ?>
				<div id="menu">
					<ul>
						<li><?php echo link_to('Notices', 'cooperation_notice') ?></li>
						<li><?php echo link_to('Categories', 'cooperation_category') ?></li>
						<li><?php echo link_to('Users', 'sf_guard_user') ?></li>
						<li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
						<li>
							<a href="<?php echo url_for('cooperation_affiliate') ?>">Affiliates - <strong><?php echo Doctrine_Core::getTable('CooperationAffiliate')->countToBeActivated() ?></strong></a>
						</li>
					</ul>
				</div>
			<?php endif ?>

			<div id="content">
				<?php echo $sf_content ?>
			</div>

			<div id="footer">
			<p><font face="Arial">©</font>2018 版权所有</p>
			<span>
				<a hidefocus="true" href="http://www.cooperationlive.com/" target="_blank">Back to frontend page</a>
			</span>
			</div>
		</div>
	</body>
</html>