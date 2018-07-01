<?php $caseList =  Doctrine_Core::getTable('CooperationArticle')->getCaseList(); ?>
<div>图文展示</div>
<?php foreach ($caseList as $i => $case): ?>
<img class="img-responsive" alt="<?php echo $case->getTitle() ?>" src="/uploads/articles/<?php echo $case->getImage() ?>" />
<?php endforeach; ?>
