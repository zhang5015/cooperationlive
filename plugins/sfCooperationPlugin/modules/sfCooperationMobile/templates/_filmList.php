<?php $filmList =  Doctrine_Core::getTable('CooperationArticle')->getFilmList(); ?>
<div class="media">
<div class="panel panel-default w-30">
  <div class="panel-body">
    <?php if($filmList[0]->getImage()): ?>
      <img class="w-100" alt="<?php echo $filmList[0]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[0]->getImage() ?>"  />
    <?php else: ?>
      <img class="w-100" src="/images/AD0IlIzuBRACGAAgzYvIwgUo9vH09wQwvgE4mAE.jpg">
    <?php endif; ?>
  </div>
  <div class="panel-footer"><?php echo $filmList[0]->getTitle() ?></div>
</div>
<div class="panel panel-default w-30">
  <div class="panel-body">
    <?php if($filmList[1]->getImage()): ?>
      <img class="w-100" alt="<?php echo $filmList[1]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[1]->getImage() ?>"  />
    <?php else: ?>
      <img class="w-100" src="/images/AD0IlIzuBRACGAAgzYvIwgUo9vH09wQwvgE4mAE.jpg">
    <?php endif; ?>
  </div>
  <div class="panel-footer"><?php echo $filmList[1]->getTitle() ?></div>
</div>

<div class="panel panel-default w-30">
  <div class="panel-body">
    <?php if($filmList[2]->getImage()): ?>
      <img class="w-100" alt="<?php echo $filmList[2]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[2]->getImage() ?>"  />
    <?php else: ?>
      <img class="w-100" src="/images/AD0IlIzuBRACGAAgzYvIwgUo9vH09wQwvgE4mAE.jpg">
    <?php endif; ?>
  </div>
  <div class="panel-footer"><?php echo $filmList[2]->getTitle() ?></div>
</div>
</div>