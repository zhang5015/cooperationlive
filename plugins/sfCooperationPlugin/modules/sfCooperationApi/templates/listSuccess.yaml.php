<!-- apps/frontend/modules/api/templates/listSuccess.yaml.php -->
<?php foreach ($notices as $url => $notice): ?>
- url:
<?php echo $url ?>

<?php foreach ($notice as $key => $value): ?>
<?php echo $key ?>
:
<?php echo sfYaml::dump($value) ?>

<?php endforeach; ?>
<?php endforeach; ?>