<!-- apps/frontend/modules/article/templates/showSuccess.php -->
<?php use_helper('Text') ?>
<?php slot(
  'title',
sprintf('%s is looking for a %s', $article->getTitle(), $article->getAuthor()))
?>
<div id="article">
<h1><?php echo $article->getTitle() ?></h1>
<h2><?php echo $article->getAuthor() ?></h2>
<h3><small>published on <?php echo $article->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
</h3>

<?php if ($article->getImage()): ?>
<div class="logo"><a href="<?php echo $article->getLink() ?>"> <img
	src="/uploads/articles/<?php echo $article->getImage() ?>"
	alt="<?php echo $article->getTitle() ?> logo" /> </a></div>
<?php endif; ?>

<div class="description"><?php echo simple_format_text($article->getBody()) ?>
</div>

<!--
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('article_edit', $article) ?>">Edit</a>
  </div>
-->

</div>
