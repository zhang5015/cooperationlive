<!-- apps/frontend/modules/notice/templates/_admin.php -->
<div id="notice_actions">
  <h3>Admin</h3>
  <ul>
    <?php if (!$notice->getIsActivated()): ?>
      <li><?php echo link_to('Edit', 'notice_edit', $notice) ?></li>
      <li> <?php echo link_to('Publish', 'notice_publish', $notice, array('method' => 'put')) ?></li>
    <?php endif; ?>
    <li><?php echo link_to('Delete', 'notice_delete', $notice, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></li>
    <?php if ($notice->getIsActivated()): ?>
      <li<?php $notice->expiresSoon() and print ' class="expires_soon"' ?>>
        <?php if ($notice->isExpired()): ?>
          Expired
        <?php else: ?>
          Expires in <strong><?php echo $notice->getDaysBeforeExpires() ?></strong> days
        <?php endif; ?>
 

        <?php if ($notice->expiresSoon()): ?>
 - <?php echo link_to('Extend', 'notice_extend', $notice, array('method' => 'put')) ?> for another <?php echo sfConfig::get('app_active_days') ?> days
<?php endif; ?>
      </li>
    <?php else: ?>
      <li>
        [Bookmark this <?php echo link_to('URL', 'notice_show', $notice, true) ?> to manage this notice in the future.]
      </li>
    <?php endif; ?>
  </ul>
</div>