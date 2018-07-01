<?php $topicList =  Doctrine_Core::getTable('CooperationArticle')->getTopicList(); ?>
<div>文章列表</div>
<?php echo link_to('更多', 'category_article', $topicList) ?>
<div class="list-group">
<?php foreach ($topicList as $i => $article): ?>
  <div class="list-group-item">
    <div class="list-group-item-dark"><?php echo link_to($article->getTitle(), 'article_show_user', $article) ?></div>
    <div class="list-group-item-light"><?php echo $article->getCreatedAt() ?></div>
  </div>
<?php endforeach; ?>
</div>










