<h1>Cooperation affiliates List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Url</th>
      <th>Email</th>
      <th>Token</th>
      <th>Is active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cooperation_affiliates as $cooperation_affiliate): ?>
    <tr>
      <td><a href="<?php echo url_for('sfCooperationAffiliate/edit?id='.$cooperation_affiliate->getId()) ?>"><?php echo $cooperation_affiliate->getId() ?></a></td>
      <td><?php echo $cooperation_affiliate->getUrl() ?></td>
      <td><?php echo $cooperation_affiliate->getEmail() ?></td>
      <td><?php echo $cooperation_affiliate->getToken() ?></td>
      <td><?php echo $cooperation_affiliate->getIsActive() ?></td>
      <td><?php echo $cooperation_affiliate->getCreatedAt() ?></td>
      <td><?php echo $cooperation_affiliate->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sfCooperationAffiliate/new') ?>">New</a>
