<!-- apps/frontend/modules/notice/templates/showSuccess.php -->
<?php use_helper('Text') ?>
<?php slot(
  'title',
  sprintf('%s is looking for a %s', $notice->getCompany(), $notice->getPosition()))
?>
<div class="feed">
  <a href="<?php echo url_for('category', array('sf_subject' => $category, 'sf_format' => 'atom')) ?>">Feed</a>
</div>
<div id="notice">
  <h1><?php echo $notice->getCompany() ?></h1>
  <h2><?php echo $notice->getLocation() ?></h2>
  <h3>
    <?php echo $notice->getPosition() ?>
    <small> - <?php echo $notice->getType() ?></small>
  </h3>
 
  <?php if ($notice->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $notice->getUrl() ?>">
        <img src="/uploads/notices/<?php echo $notice->getLogo() ?>"
          alt="<?php echo $notice->getCompany() ?> logo" />
      </a>
    </div>
  <?php endif; ?>
 
  <div class="description">
    <?php echo simple_format_text($notice->getDescription()) ?>
  </div>
 
  <h4>How to apply?</h4>
 
  <p class="how_to_apply"><?php echo $notice->getHowToApply() ?></p>
 
  <div class="meta">
    <small>posted on <?php echo $notice->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('notice_edit', $notice) ?>">Edit</a>
  </div>
</div>
<?php if ($sf_request->getParameter('token') == $notice->getToken()): ?>
  <?php include_partial('sfCooperationNotice/admin', array('notice' => $notice)) ?>
<?php endif; ?>