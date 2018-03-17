<div id="articles"><?php foreach ($categories as $category): ?>
<div class="category_<?php echo Cooperation::slugify($category->getName()) ?>">
<div  class="newsList J_newsList pic-mixNewsList " id="newsList323" newslisttype="2" scroll="0" _showsetting="1" >

<h1><?php echo link_to($category, 'category', $category) ?></h1>
</div>

<?php include_partial('sfCooperationMain/list', array('articles' => $category->getActiveArticles(sfConfig::get('app_max_articles_on_homepage')))) ?>

<?php if (($count = $category->countActiveArticles() - sfConfig::get('app_max_articles_on_homepage')) > 0): ?>

<div class="more_articles">and <?php echo link_to($count, 'category_article', $category) ?>more...</div>
<?php endif; ?></div>
<?php endforeach; ?></div>