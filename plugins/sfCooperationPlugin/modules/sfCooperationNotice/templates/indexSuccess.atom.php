<!-- apps/frontend/modules/notice/templates/indexSuccess.atom.php -->
<?xml version="1.0" encoding="utf-8"?>
<feed
	xmlns="http://www.w3.org/2005/Atom">
<title>Cooperation</title>
<subtitle>
Latest Notices
</subtitle>
<link
	href="<?php echo url_for('notice', array('sf_format' => 'atom'), true) ?>"
	rel="self" />
<link
	href="<?php echo url_for('@homepage', true) ?>" />
<updated>
<?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', Doctrine_Core::getTable('CooperationNotice')->getLatestPost()->getDateTimeObject('created_at')->format('U')) ?>
</updated>
<author>
<name>
Cooperation
</name>
</author>
<id>
<?php echo sha1(url_for('notice', array('sf_format' => 'atom'), true)) ?>
</id>

<?php foreach ($categories as $category): ?>
<?php include_partial('sfCooperationNotice/list', array('notices' => $category->getActiveNotices(sfConfig::get('app_max_notices_on_homepage')))) ?>
<?php endforeach; ?>
</feed>
