<h2 class="bg-info text-white">Cooperation articles List</h2>
<table class="table-bordered">
  <thead>
    <tr class="bg-light">
      <th class="w-5">Id</th>
      <th class="w-5">Category</th>
      <th class="w-10">Title</th>
      <th class="w-5">Author</th>
      <th class="w-20">Body</th>
      <th class="w-10">Link</th>
      <th class="w-10">Image</th>
      <th class="w-10">Abstract</th>
      <th class="w-5">Is public</th>
      <th class="w-5">Is activated</th>
      <th class="w-5">Expires at</th>
      <th class="w-5">Created at</th>
      <th class="w-5">Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cooperation_articles as $cooperation_article): ?>
     <tr>
      <td class="w-5"><a href="<?php echo url_for('article/show?id='.$cooperation_article->getId()) ?>"><?php echo $cooperation_article->getId() ?></a></td>
      <td class="w-5"><?php echo $cooperation_article->getCategoryId() ?></td>
      <td class="w-10"><?php echo $cooperation_article->getTitle() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getAuthor() ?></td>
      <td class="w-20"><?php echo $cooperation_article->getBody() ?></td>
      <td class="w-10"><?php echo $cooperation_article->getLink() ?></td>
      <td class="w-10"><?php echo $cooperation_article->getImage() ?></td>
      <td class="w-10"><?php echo $cooperation_article->getAbstract() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getIsPublic() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getIsActivated() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getExpiresAt() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getCreatedAt() ?></td>
      <td class="w-5"><?php echo $cooperation_article->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('article/new') ?>">New</a>
