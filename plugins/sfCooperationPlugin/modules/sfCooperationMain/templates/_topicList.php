<?php $topics =  Doctrine_Core::getTable('CooperationArticle')->getTopicList(); ?>
<!--<strong>专题</strong>-->
<!--<strong>Topic</strong>-->
<div class="panel" newsname="<?php echo $topics[0]->getTitle() ?>" >
    <div class="panel-body">
      <div class="thumbnail col-sm-6 col-md-4">
    <?php if($topics[0]->getImage()):?>
      <img title="" class="w-90"  alt="文章附图" src="/uploads/articles/<?php echo $topics[0]->getImage() ?>" />
    <?php else: ?>
      <img  title="" class="w-90" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
    <?php endif; ?>
      </div>
    </div>
    <div class="panel-footer bg-white border-0">
    <?php echo link_to($topics[0]->getTitle(), 'article_show_user', $topics[0]) ?>
    <?php echo link_to($topics[0]->getAbstract(), 'article_show_user', $topics[0]) ?>
    </div>
</div>
<div class="row" newsname="<?php echo $topics[1]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($topics[1]->getTitle(), 'article_show_user', $topics[1]) ?></div>
  <div class="col-4"><?php echo link_to($topics[1]->getCreatedAt(), 'article_show_user', $topics[1]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $topics[2]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($topics[2]->getTitle(), 'article_show_user', $topics[2]) ?></div>
  <div class="col-4"><?php echo link_to($topics[2]->getCreatedAt(), 'article_show_user', $topics[2]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $topics[3]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($topics[3]->getTitle(), 'article_show_user', $topics[3]) ?></div>
  <div class="col-4"><?php echo link_to($topics[3]->getCreatedAt(), 'article_show_user', $topics[3]) ?></div>
</div>
<hr class="mx-3">
<div class="row" newsname="<?php echo $topics[4]->getTitle() ?>">
  <div class="col-8"> <?php echo link_to($topics[4]->getTitle(), 'article_show_user', $topics[4]) ?></div>
  <div class="col-4"><?php echo link_to($topics[4]->getCreatedAt(), 'article_show_user', $topics[4]) ?></div>
</div>
