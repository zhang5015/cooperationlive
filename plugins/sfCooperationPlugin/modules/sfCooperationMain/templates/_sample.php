<?php $samples =  Doctrine_Core::getTable('CooperationArticle')->getSampleList();?>
<?php foreach($samples as $i => $sample): ?>
  <div class="panel" newsname="<?php echo $topics[0]->getTitle() ?>" >
    <div class="panel-body">
      <a class=" " style="width: 280px; height: 180px;" href="<?php echo url_for('article_show_user', $sample, true) ?>"" target="_blank">
        <img title="" style="width: 270px; height: 180px;" alt="文章附图" src="/uploads/articles/<?php echo $article->getImage() ?>" _defimg="true" />
      </a>
    </div>
    <div class="panel-footer">
    <a class="" href="<?php echo url_for('article_show_user', $sample, true) ?>" target="_blank"></a>
      <?php echo link_to($sample->getTitle(), 'article_show_user', $sample) ?>
      <p class=""><?php echo $sample->getAbstract()?></p>
    </div>
</div>
<?php endforeach; ?>
