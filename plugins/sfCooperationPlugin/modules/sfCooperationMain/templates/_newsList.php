<?php $newArticles =  Doctrine_Core::getTable('CooperationArticle')->getNewList();?>

<?php if ($newArticles[0]): ?>
<DIV class="J_newsListLine line noHover	 newsListLine2"
	style="height: auto;" newsname="<?php echo $newArticles[0]->getTitle() ?>" newsid="5"
	topswitch="on" topclassname="top1">
<TABLE class="J_lineBody lineBody" id="lineBody5" cellspacing="0"
	cellpadding="0">
	<TBODY>
		<TR id="module323tr5">
			<TD class="J_newsTitle newsTitle mixNewsTitle" valign="top">
			<DIV class="J_articlePhotoBox articlePhotoBox " newsflag="2"
				newid="5">
				<A class="J_articlePicHref articlePicLink2" style="width: 146px; height: 87px;"
					href="<?php echo url_for('article_show_user', $newArticles[0], true) ?>"
					target="_blank">
					<?php if ($newArticles[0]->getImage()): ?>
					<img title="<?php echo $newArticles[0]->getTitle() ?>"
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" alt="文章附图"
					src="/uploads/articles/<?php echo $newArticles[0]->getImage() ?>"
					alt="Sample" class="sample" />
					<?php else: ?>
					<img 
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" 
					src="/images/sample.jpg" alt="Sample" class="sample" />
					<?php endif; ?>
				</A>
				</DIV>
			<DIV class="mixNewsStyleTitleContainer">
			<DIV class="J_newsListTopFlag	newsListTopFlag2">
			</DIV>
			<DIV class="J_newsListTopFlag	newsListTopFlag2"></DIV>
				<a class="J_mixNewsStyleTitle fk-newsListTitle mixNewsStyleTitle	pic-mixNewsStyleTitle ">
					<?php echo link_to($newArticles[0]->getTitle(), 'article_show_user', $newArticles[0]) ?>
				</a>
			</DIV>
			<P class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $newArticles[0]->getAbstract()?></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
</DIV>
<?php endif; ?>
<?php if ($newArticles[1]): ?>
<DIV
	class="J_separatorLine separatorLine g_separator	pic-separatorLine "></DIV>
<DIV class="J_newsListLine line noHover	 newsListLine2"
	style="height: auto;" newsname="<?php echo $newArticles[1]->getTitle() ?>" newsid="4"
	topswitch="on" topclassname="top1">
<TABLE class="J_lineBody lineBody" id="lineBody4" cellspacing="0"
	cellpadding="0">
	<TBODY>
		<TR id="module323tr4">
			<TD class="J_newsTitle newsTitle mixNewsTitle" valign="top">
			<DIV class="J_articlePhotoBox articlePhotoBox " newsflag="2"
				newid="5">
				<A class="J_articlePicHref articlePicLink2" style="width: 146px; height: 87px;"
					href="<?php echo url_for('article_show_user', $newArticles[1], true) ?>"
					target="_blank">
					<?php if ($newArticles[1]->getImage()): ?>
					<img title="<?php echo $newArticles[1]->getTitle() ?>"
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" alt="文章附图"
					src="/uploads/articles/<?php echo $newArticles[1]->getImage() ?>"
					alt="Sample" class="sample" />
					<?php else: ?>
					<img 
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" 
					src="/images/sample.jpg" alt="Sample" class="sample" />
					<?php endif; ?>
				</A>
				</DIV>
			<DIV class="mixNewsStyleTitleContainer">
			<DIV class="J_newsListTopFlag	newsListTopFlag2">
			</DIV>
			<DIV class="J_newsListTopFlag	newsListTopFlag2"></DIV>
				<a class="J_mixNewsStyleTitle fk-newsListTitle mixNewsStyleTitle	pic-mixNewsStyleTitle ">
					<?php echo link_to($newArticles[1]->getTitle(), 'article_show_user', $newArticles[1]) ?>
				</a>
			</DIV>
			<P class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $newArticles[1]->getAbstract()?></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
</DIV>
<?php endif; ?>
<?php if ($newArticles[2]): ?>
<DIV
	class="J_separatorLine separatorLine g_separator	pic-separatorLine "></DIV>
<DIV class="J_newsListLine line noHover	 newsListLine2"
	style="height: auto;" newsname="<?php echo $newArticles[2]->getTitle() ?>" newsid="3" topswitch="on"
	topclassname="top1">
<TABLE class="J_lineBody lineBody" id="lineBody3" cellspacing="0"
	cellpadding="0">
	<TBODY>
		<TR id="module323tr3">
			<TD class="J_newsTitle newsTitle mixNewsTitle" valign="top">
			<DIV class="J_articlePhotoBox articlePhotoBox " newsflag="2"
				newid="5">
				<A class="J_articlePicHref articlePicLink2" style="width: 146px; height: 87px;"
					href="<?php echo url_for('article_show_user', $newArticles[2], true) ?>"
					target="_blank">
					<?php if ($newArticles[2]->getImage()): ?>
					<img title="<?php echo $newArticles[2]->getTitle() ?>"
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" alt="文章附图"
					src="/uploads/articles/<?php echo $newArticles[2]->getImage() ?>"
					alt="Sample" class="sample" />
					<?php else: ?>
					<img 
					class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" 
					src="/images/sample.jpg" alt="Sample" class="sample" />
					<?php endif; ?>
				</A>
				</DIV>
			<DIV class="mixNewsStyleTitleContainer">
			<DIV class="J_newsListTopFlag	newsListTopFlag2">
			</DIV>
			<DIV class="J_newsListTopFlag	newsListTopFlag2"></DIV>
				<a class="J_mixNewsStyleTitle fk-newsListTitle mixNewsStyleTitle	pic-mixNewsStyleTitle ">
					<?php echo link_to($newArticles[2]->getTitle(), 'article_show_user', $newArticles[2]) ?>
				</a>
			</DIV>
			<P class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $newArticles[2]->getAbstract()?></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
</DIV>
<?php endif; ?>
<div
	class="J_separatorLine separatorLine g_separator	newsListSeparatorLine "></div>
<div class="clearfloat"></div>
