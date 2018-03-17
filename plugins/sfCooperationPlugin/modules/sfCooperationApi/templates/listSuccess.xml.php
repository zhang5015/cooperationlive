<!-- apps/frontend/modules/api/templates/listSuccess.xml.php -->
<?xml version="1.0" encoding="utf-8"?>
<notices>
<?php foreach ($notices as $url => $notice): ?>
<notice url="<?php echo $url ?>">
<?php foreach ($notice as $key => $value): ?>
<<?php echo $key ?>>
<?php echo $value ?>
</<?php echo $key ?>>
<?php endforeach; ?>
</notice>
<?php endforeach; ?>
</notices>
