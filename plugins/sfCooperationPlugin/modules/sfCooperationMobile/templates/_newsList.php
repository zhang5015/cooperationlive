<?php
$newArticles = Doctrine_Core::getTable('CooperationArticle')->getNewList();
?>
<div class="media">
  <img  class="w-100" src="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE.jpg"
       data-source="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE!640x640.jpg"/>
</div>

<?php echo link_to(__('更多'), 'category_article', $newArticles) ?>

<?php foreach ($newArticles as $i => $article): ?>
  <div class="row flex-row py-1">
    <div class="col">
      <?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
    </div>
    <div class="ml-auto mr-3">
      <?php if($article->getImage()):?>
        <img style="width: 136px; height: 87px;"  alt="文章附图" src="/uploads/articles/<?php echo $article->getImage() ?>" />
      <?php else: ?>
        <img style="width: 136px; height: 87px;" alt="文章附图" src="/styles/AD0IlIzuBRACGAAg0YXJwgUoh4-8xAUwiQE4ZA.jpg" />
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>

