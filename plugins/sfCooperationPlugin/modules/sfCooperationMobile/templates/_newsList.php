<?php
$newArticles = Doctrine_Core::getTable('CooperationArticle')->getNewList();
?>
<div class="media">
  <img  class="w-100" src="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE.jpg"
       data-source="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE!640x640.jpg"/>
</div>

<?php echo link_to('更多', 'category_article', $newArticles) ?>

<?php foreach ($newArticles as $i => $article): ?>
  <div class="media">
    <div class="media-left">
      <?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
    </div>
    <div class="media-body">
      <img class="img-thumbnail" src=“/uploads/articles/<?php echo $article->getImage() ?>”/>
    </div>
  </div>
<?php endforeach; ?>

