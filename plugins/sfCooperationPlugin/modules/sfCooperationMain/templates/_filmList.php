<?php $films = Doctrine_Core::getTable('CooperationArticle')->getFilmList(); ?>
<!--<strong>影视</strong>-->
<!--<strong>Film &amp; TV</strong>-->
<div class="row">
<div class="col-sm-12"">
  <a href="#" class="thumbnail" >
    <?php if ($films[0]->getImage()): ?>
      <img class="w-100" alt="" src="/uploads/articles/<?php echo $films[0]->getImage() ?>"/>
    <?php else: ?>
      <img class="w-100" src="/images/sample.jpg"/>
    <?php endif; ?>
  </a>
</div>
<div class="col-sm-12">
  <a href="#" class="thumbnail" >
    <?php if ($films[0]->getImage()): ?>
      <img class="w-100" alt="" src="/uploads/articles/<?php echo $films[1]->getImage() ?>"/>
    <?php else: ?>
      <img class="w-100" src="/images/sample.jpg"/>
    <?php endif; ?>
  </a>
</div>
<div class="col-sm-12">
  <a href="#" class="thumbnail" >
  <?php if ($films[2]->getImage()): ?>
    <img alt="" class="w-100" src="/uploads/articles/<?php echo $films[2]->getImage() ?>"/>
  <?php else: ?>
    <img class="w-100" src="/images/sample.jpg"/>
  <?php endif; ?>
  </a>
</div>
<!--<div class="col-sm-12"">-->
<!--  <a href="#" class="thumbnail" >-->
<!--  --><?php //if ($films[3]->getImage()): ?>
<!--    <img alt="" class="w-100" src="/uploads/articles/--><?php //echo $films[3]->getImage() ?><!--"/>-->
<!--  --><?php //else: ?>
<!--    <img class="w-100" src="/images/sample.jpg"/>-->
<!--  --><?php //endif; ?>
<!--  </a>-->
<!--</div>-->
</div>