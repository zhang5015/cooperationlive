<table class="notices">
  <?php foreach ($notices as $i => $notice): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="location">
        <?php echo $notice->getLocation() ?>
      </td>
      <td class="position">
        <?php echo link_to($notice->getPosition(), 'notice_show_user', $notice) ?>
      </td>
      <td class="company">
        <?php echo $notice->getCompany() ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>