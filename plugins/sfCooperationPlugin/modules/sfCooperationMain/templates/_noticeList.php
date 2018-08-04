<?php $notices = Doctrine_Core::getTable('CooperationArticle')->getNoticeList(); ?>
<div class="panel" newsname="<?php echo $notices[0]->getTitle() ?>" >
    <div class="panel-body">
    <?php if($notices[0]->getImage()):?>
      <img title="" class="w-90"  alt="文章附图" src="/uploads/articles/<?php echo $notices[0]->getImage() ?>" />
    <?php else: ?>
      <img  title="" class="w-90" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
    <?php endif; ?>
    </div>
    <div class="panel-footer">
    <?php echo link_to($notices[0]->getTitle(), 'article_show_user', $notices[0]) ?>
    <?php echo link_to($notices[0]->getAbstract(), 'article_show_user', $notices[0]) ?>
    </div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $notices[1]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($notices[1]->getTitle(), 'article_show_user', $notices[1]) ?></div>
  <div class="col-4"><?php echo link_to($notices[1]->getCreatedAt(), 'article_show_user', $notices[1]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $notices[2]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($notices[2]->getTitle(), 'article_show_user', $notices[2]) ?></div>
  <div class="col-4"><?php echo link_to($notices[2]->getCreatedAt(), 'article_show_user', $notices[2]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $notices[3]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($notices[3]->getTitle(), 'article_show_user', $notices[3]) ?></div>
  <div class="col-4"><?php echo link_to($notices[3]->getCreatedAt(), 'article_show_user', $notices[3]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $notices[4]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($notices[4]->getTitle(), 'article_show_user', $notices[4]) ?></div>
  <div class="col-4"><?php echo link_to($notices[4]->getCreatedAt(), 'article_show_user', $notices[4]) ?></div>
</div>

