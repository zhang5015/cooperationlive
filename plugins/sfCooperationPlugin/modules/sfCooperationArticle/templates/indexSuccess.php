<div id="articles">
	<?php foreach ($categories as $category): ?>
	<div class = "articles">
		<div class="category">
			<h1>
				<?php echo link_to($category, 'category', $category) ?>
			</h1>
		</div>

		<?php include_partial('sfCooperationArticle/list', array('articles' => $category->getActiveArticles(sfConfig::get('app_max_articles_on_homepage')))) ?>

		<?php if (($count = $category->countActiveArticles() - sfConfig::get('app_max_articles_on_homepage')) > 0): ?>
		<div class="more_articles">
		and <?php echo link_to($count, 'category', $category) ?>
		more...
		</div>
		<?php endif; ?>
	</div>
	<?php endforeach; ?>
</div>
