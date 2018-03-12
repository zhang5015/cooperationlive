<!-- apps/frontend/modules/notice/templates/indexSuccess.php -->

<div id="notices">
  <?php foreach ($categories as $category): ?>
    <div class="category_<?php echo Cooperation::slugify($category->getName()) ?>">
      <div class="category">
  <div class="feed">
   <a href="<?php echo url_for('category', array('sf_subject' => $category, 'sf_format' => 'atom')) ?>">Feed</a>
</div>
<h1>
  <?php echo link_to($category, 'category', $category) ?>
</h1>
      </div>

      <?php include_partial('sfCooperationNotice/list', array('notices' => $category->getActiveNotices(sfConfig::get('app_max_notices_on_homepage')))) ?>

      <?php if (($count = $category->countActiveNotices() - sfConfig::get('app_max_notices_on_homepage')) > 0): ?>

<div class="more_notices">
  and <?php echo link_to($count, 'category', $category) ?>
  more...
</div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>