
<?php slot('title', sprintf('Articles in the %s category', $category->getName())) ?>
 
<div class="category">
  <h1><?php echo $category ?></h1>
</div>
 
<?php include_partial('sfCooperationArticle/list', array('articles' => $pager->getResults())) ?>
 
<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
    <a href="<?php echo url_for('category', $category) ?>?page=1">
      <img src="/legacy/images/first.png" alt="First page" title="First page" />
    </a>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
      <img src="/legacy/images/previous.png" alt="Previous page" title="Previous page" />
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
      <img src="/legacy/images/next.png" alt="Next page" title="Next page" />
    </a>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
      <img src="/legacy/images/last.png" alt="Last page" title="Last page" />
    </a>
  </div>
<?php endif; ?>
 
<div class="pagination_desc">
  <strong><?php echo count($pager) ?></strong> articles in this category
 
  <?php echo format_number_choice(
    '[0]No article in this category|[1]One article in this category|(1,+Inf]%count% articles in this category',
    array('%count%' => '<strong>'.count($pager).'</strong>'),
    count($pager)
  )
?>
</div>