<div class="container">
    <div class="row">
      <div class="col-2 font-weight-bold">Id:</div>
      <div class="col-10"><?php echo $cooperation_article->getId() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Category:</div>
      <div class="col-10"><?php echo $cooperation_article->getCategoryId() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Title:</div>
      <div class="col-10"><?php echo $cooperation_article->getTitle() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Author:</div>
      <div class="col-10"><?php echo $cooperation_article->getAuthor() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Body:</div>
      <div class="col-10"><?php echo $cooperation_article->getBody() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Link:</div>
      <div class="col-10"><?php echo $cooperation_article->getLink() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Image:</div>
      <div class="col-10"><?php echo $cooperation_article->getImage() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Abstract:</div>
      <div class="col-10"><?php echo $cooperation_article->getAbstract() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Is public:</div>
      <div class="col-10"><?php echo $cooperation_article->getIsPublic() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Is activated:</div>
      <div class="col-10"><?php echo $cooperation_article->getIsActivated() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Expires at:</div>
      <div class="col-10"><?php echo $cooperation_article->getExpiresAt() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Created at:</div>
      <div class="col-10"><?php echo $cooperation_article->getCreatedAt() ?></div>
    </div>
    <div class="row">
      <div class="col-2 font-weight-bold">Updated at:</div>
      <div class="col-10"><?php echo $cooperation_article->getUpdatedAt() ?></div>
    </div>
</div>

<hr />

<a href="<?php echo url_for('article/edit?id='.$cooperation_article->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('article/index') ?>">List</a>
