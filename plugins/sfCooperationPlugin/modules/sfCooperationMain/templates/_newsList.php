<?php $newArticles =  Doctrine_Core::getTable('CooperationArticle')->getNewList();?>

<?php if ($newArticles[0]): ?>
  <div class="panel" newsname="<?php echo $newArticles[0]->getTitle() ?>" >
    <div class="panel-body">
    <?php if($newArticles[0]->getImage()):?>
      <img title="" class="w-90"  alt="文章附图" src="/uploads/articles/<?php echo $newArticles[0]->getImage() ?>" />
    <?php else: ?>
      <img  title="" class="w-90" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
    <?php endif; ?>
    </div>
    <div class="panel-footer bg-white border-0">
    <?php echo link_to($newArticles[0]->getTitle(), 'article_show_user', $newArticles[0]) ?>
    <?php echo link_to($newArticles[0]->getAbstract(), 'article_show_user', $newArticles[0]) ?>
    </div>
</div>
<?php endif; ?>
<?php if ($newArticles[1]): ?>
  <div class="panel" newsname="<?php echo $newArticles[1]->getTitle() ?>" >
    <div class="panel-body">
    <?php if($newArticles[1]->getImage()):?>
      <img title="" class="w-90"  alt="文章附图" src="/uploads/articles/<?php echo $newArticles[1]->getImage() ?>" />
    <?php else: ?>
      <img  title="" class="w-90" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
    <?php endif; ?>
    </div>
    <div class="panel-footer bg-white border-0">
    <?php echo link_to($newArticles[1]->getTitle(), 'article_show_user', $newArticles[1]) ?>
    <?php echo link_to($newArticles[1]->getAbstract(), 'article_show_user', $newArticles[1]) ?>
    </div>
</div>
<?php endif; ?>
<?php if ($newArticles[2]): ?>
  <div class="panel" newsname="<?php echo $newArticles[2]->getTitle() ?>" >
    <div class="panel-body">
    <?php if($newArticles[2]->getImage()):?>
      <img title="" class="w-90"  alt="文章附图" src="/uploads/articles/<?php echo $newArticles[2]->getImage() ?>" />
    <?php else: ?>
      <img  title="" class="w-90" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
    <?php endif; ?>
    </div>
    <div class="panel-footer bg-white border-0">
    <?php echo link_to($newArticles[2]->getTitle(), 'article_show_user', $newArticles[2]) ?>
    <?php echo link_to($newArticles[2]->getAbstract(), 'article_show_user', $newArticles[2]) ?>
    </div>
</div>
<?php endif; ?>
