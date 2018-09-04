<!-- apps/frontend/modules/article/templates/showSuccess.php -->
<?php use_helper('Text') ?>
<?php slot('title', sprintf('%s', $article->getTitle())) ?>
<div id="article" class="container">
<h1><?php echo $article->getTitle() ?></h1>
<h2><?php echo $article->getAuthor() ?></h2>
<h3><small><?php echo __('发布于') ?> <?php echo $article->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
</h3>

<?php if ($article->getImage()): ?>
<div class="row">
  <a class="thumbnail" href="<?php echo $article->getLink() ?>">
    <img src="/uploads/articles/<?php echo $article->getImage() ?>"
	alt="<?php echo $article->getTitle() ?> logo" />
  </a>
</div>
<?php endif; ?>
<div class="text-body"><?php echo simple_format_text($article->getBody()) ?></div>

<!--
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('article_edit', $article) ?>">Edit</a>
  </div>
-->

</div>
