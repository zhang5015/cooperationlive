<?php use_helper('I18N', 'Date') ?>
<?php include_partial('notice/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing Notice "%%company%% is looking for a %%position%%"', array('%%company%%' => $cooperation_notice->getCompany(), '%%position%%' => $cooperation_notice->getPosition()), 'messages') ?></h1>

  <?php include_partial('notice/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('notice/form_header', array('cooperation_notice' => $cooperation_notice, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('notice/form', array('cooperation_notice' => $cooperation_notice, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('notice/form_footer', array('cooperation_notice' => $cooperation_notice, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
