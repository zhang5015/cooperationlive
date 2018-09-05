<div><?php echo __('列表多图') ?></div>
<div class="media">
  <div class="panel panel-default col">
    <div class="panel-body">
      <img class="w-100" alt="AD0I0amXBhACGAAgvtDPxQUokPDP-QMwoQI4wAE" src="/images/AD0I0amXBhACGAAgvtDPxQUokPDP-QMwoQI4wAE.jpg" />
    </div>
    <div class="panel-footer"><?php echo __('品牌策划') ?></div>
  </div>
  <div class="panel panel-default col">
    <div class="panel-body">
      <img class="w-100" alt="AD0I0amXBhACGAAg2tDPxQUo6J_gLTChAjjBAQ" src="/images/AD0I0amXBhACGAAg2tDPxQUo6J_gLTChAjjBAQ.jpg" />
    </div>
    <div class="panel-footer"><?php echo __('影视制作') ?></div>
  </div>
    <div class="panel panel-default col">
    <div class="panel-body">
      <img class="w-100" alt="AD0I0amXBhACGAAgss-PxQUolru37AQwoAI4wQE" src="/images/AD0I0amXBhACGAAgss-PxQUolru37AQwoAI4wQE.jpg" />
    </div>
    <div class="panel-footer"><?php echo __('公关活动') ?></div>
  </div>
</div>

<div><img class="w-100" src="/images/AD0I0amXBhACGAAghq7PxQUo2PzDuQIwgAU4tAE.jpg" data-source="" /></div>

<?php $noticeList =  Doctrine_Core::getTable('CooperationArticle')->getNoticeList();?>
<div><?php echo __('文章列表') ?></div>
<?php echo link_to(__('更多'), 'category_article', $noticeList) ?>
<ul class="list-group">
<?php foreach ($noticeList as $i => $article): ?>
  <li class="list-group-item">
  <?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
  </li>
<?php endforeach; ?>
</ul>