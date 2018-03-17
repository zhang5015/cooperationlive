<?php use_helper('Text') ?>
 
<?php foreach ($notices as $notice): ?>
  <entry>
    <title><?php echo $notice->getPosition() ?> (<?php echo $notice->getLocation() ?>)</title>
    <link href="<?php echo url_for('notice_show_user', $notice, true) ?>" />
    <id><?php echo sha1($notice->getId()) ?></id>
      <updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', $notice->getDateTimeObject('created_at')->format('U')) ?></updated>
    <summary type="xhtml">
     <div xmlns="http://www.w3.org/1999/xhtml">
       <?php if ($notice->getLogo()): ?>
         <div>
           <a href="<?php echo $notice->getUrl() ?>">
             <img src="http://<?php echo $sf_request->getHost().'/uploads/notices/'.$notice->getLogo() ?>"
               alt="<?php echo $notice->getCompany() ?> logo" />
           </a>
         </div>
       <?php endif; ?>
 
       <div>
         <?php echo simple_format_text($notice->getDescription()) ?>
       </div>
 
       <h4>How to apply?</h4>
 
       <p><?php echo $notice->getHowToApply() ?></p>
     </div>
    </summary>
    <author>
      <name><?php echo $notice->getCompany() ?></name>
    </author>
  </entry>
<?php endforeach; ?>