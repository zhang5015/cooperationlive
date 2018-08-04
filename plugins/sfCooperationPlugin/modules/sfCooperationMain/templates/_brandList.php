<?php $brandList =  Doctrine_Core::getTable('CooperationArticle')->getBrandList();?>
<!--<p><strong><span>品牌策划</span></strong></p>-->
<!--<p><strong><span>Brand Planning</span></strong></p>-->
<?php if($brandList[0]):?>
  <div class="card border-0" newsname="<?php echo $brandList[0] -> getTitle() ?>" >
    <div class="card-header bg-white border-0"><?php echo link_to($brandList[0]->getTitle(), 'article_show_user', $brandList[0]) ?></div>
    <div class="card-body"><?php echo $brandList[0]->getAbstract()?></div>
  </div>
  <hr class="mx-3">
<?php endif; ?>
<?php if($brandList[1]):?>
  <div class="card border-0" newsname="<?php echo $brandList[1] -> getTitle() ?>">
    <div class="card-header bg-white border-0"><?php echo link_to($brandList[1]->getTitle(), 'article_show_user', $brandList[1]) ?></div>
    <div class="card-body"><?php echo $brandList[1]->getAbstract()?></div>
  </div>
  <hr class="mx-3">
<?php endif; ?>
