<!-- apps/frontend/modules/api/templates/listSuccess.json.php -->
[
<?php $nb = count($notices); $i = 0; foreach ($notices as $url => $notice): ++$i ?>
{
  "url": "<?php echo $url ?>",
<?php $nb1 = count($notice); $j = 0; foreach ($notice as $key => $value): ++$j ?>
  "<?php echo $key ?>": <?php echo json_encode($value).($nb1 == $j ? '' : ',') ?>
 
<?php endforeach; ?>
}<?php echo $nb == $i ? '' : ',' ?>
 
<?php endforeach; ?>
]