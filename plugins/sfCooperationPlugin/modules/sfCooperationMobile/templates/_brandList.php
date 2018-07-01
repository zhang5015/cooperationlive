<?php
	$brands =  Doctrine_Core::getTable('CooperationArticle')->getBrandList();
?>

<ul class="list-group">
<?php foreach ($brands as $i => $article): ?>
   <li class="list-group-item">
     <span><?php echo link_to($article->getTitle(), 'article_show_user', $article) ?></span>
     <span class="float-right"><?php echo $article->getAbstract() ?></span
   </li>
<?php endforeach; ?>
</ul>


