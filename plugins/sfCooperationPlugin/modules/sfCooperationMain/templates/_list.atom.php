<?php use_helper('Text') ?>
 
<?php foreach ($articles as $article): ?>
  <entry>
    <title><?php echo $article->getTitle() ?></title>
    <link href="<?php echo url_for('article_show_user', $article, true) ?>" />
    <id><?php echo sha1($article->getId()) ?></id>
      <updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', $article->getDateTimeObject('created_at')->format('U')) ?></updated>
    <summary type="xhtml">
     <div xmlns="http://www.w3.org/1999/xhtml">
       <?php if ($article->getImage()): ?>
         <div>
           <a href="<?php echo url_for('article_show_user', $article, true) ?>">
             <img src="http://<?php echo $sf_request->getHost().'/uploads/articles/'.$article->getImage() ?>"
               alt="<?php echo $article->getTitle() ?>" />
           </a>
         </div>
       <?php endif; ?>
 
       <div>
         <?php echo simple_format_text($article->getBody()) ?>
       </div>
 
     </div>
    </summary>
    <author>
      <name><?php echo $article->getAuthor() ?></name>
    </author>
  </entry>
<?php endforeach; ?>