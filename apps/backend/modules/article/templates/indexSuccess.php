<h1>Cooperation articles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Title</th>
      <th>Author</th>
      <th>Body</th>
      <th>Link</th>
      <th>Image</th>
      <th>Abstract</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cooperation_articles as $cooperation_article): ?>
    <tr>
      <td><a href="<?php echo url_for('article/show?id='.$cooperation_article->getId()) ?>"><?php echo $cooperation_article->getId() ?></a></td>
      <td><?php echo $cooperation_article->getCategoryId() ?></td>
      <td><?php echo $cooperation_article->getTitle() ?></td>
      <td><?php echo $cooperation_article->getAuthor() ?></td>
      <td><?php echo $cooperation_article->getBody() ?></td>
      <td><?php echo $cooperation_article->getLink() ?></td>
      <td><?php echo $cooperation_article->getImage() ?></td>
      <td><?php echo $cooperation_article->getAbstract() ?></td>
      <td><?php echo $cooperation_article->getIsPublic() ?></td>
      <td><?php echo $cooperation_article->getIsActivated() ?></td>
      <td><?php echo $cooperation_article->getExpiresAt() ?></td>
      <td><?php echo $cooperation_article->getCreatedAt() ?></td>
      <td><?php echo $cooperation_article->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('article/new') ?>">New</a>
