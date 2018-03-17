<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $cooperation_notice->getCompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo link_to($cooperation_notice->getPosition(), 'cooperation_notice_edit', $cooperation_notice) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $cooperation_notice->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $cooperation_notice->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_is_activated">
  <?php echo $cooperation_notice->getIsActivated() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $cooperation_notice->getEmail() ?>
</td>
