<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $cooperation_article->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $cooperation_article->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $cooperation_article->getTitle() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $cooperation_article->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $cooperation_article->getBody() ?></td>
    </tr>
    <tr>
      <th>Link:</th>
      <td><?php echo $cooperation_article->getLink() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $cooperation_article->getImage() ?></td>
    </tr>
    <tr>
      <th>Abstract:</th>
      <td><?php echo $cooperation_article->getAbstract() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $cooperation_article->getIsPublic() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $cooperation_article->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $cooperation_article->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $cooperation_article->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $cooperation_article->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('article/edit?id='.$cooperation_article->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('article/index') ?>">List</a>
