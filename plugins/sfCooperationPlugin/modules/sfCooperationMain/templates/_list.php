<ul class="media-list">
<?php foreach ($articles as $i => $article): ?>
  <li class="media">
	<?php if ($article->getImage()): ?>
    <a href="<?php echo url_for('article_show_user', $article, true) ?>">
    <img class="media-object" title="<?php echo $article->getTitle() ?>"
         alt="文章附图" src="/uploads/articles/<?php echo $article->getImage() ?>" />
  <?php else: ?>
    <img class="media-object" src="/images/sample.jpg" alt="Sample"/>
    </a>
  <?php endif; ?>
    <div class="media-body">
      <div class="w-75"><?php echo link_to($article->getTitle(), 'article_show_user', $article) ?></div>
      <div class="w-25"><?php echo $article->getAbstract() ?></div>
    </div>
  </li>
<?php endforeach; ?>
</ul>