<table class="">
<?php foreach ($articles as $i => $article): ?>
	<DIV class="J_separatorLine separatorLine g_separator	pic-separatorLine "></DIV>
	<DIV class="J_newsListLine line noHover	 newsListLine2"
		style="height: auto;" newsname="<?php echo $article->getTitle() ?>"
		newsid="4" topswitch="on" topclassname="top1">

	<TABLE class="J_lineBody lineBody" id="lineBody4" cellspacing="0"
		cellpadding="0">
		<TBODY>
			<TR id="module323tr4">
				<TD class="J_newsTitle newsTitle mixNewsTitle" valign="top">
				<DIV class="J_articlePhotoBox articlePhotoBox " newsflag="2" newid="4">
					<?php if ($article->getImage()): ?>
					<a href="<?php echo url_for('article_show_user', $article, true) ?>">
					<img title="<?php echo $article->getTitle() ?>" class="J_newsListPic newsPic newsListNewPic"
					style="width: 136px; height: 87px;" alt="文章附图" src="/uploads/articles/<?php echo $article->getImage() ?>" />
					<?php else: ?>
					<img src="/images/sample.jpg" alt="Sample" class="sample" />
					</a>
					<?php endif; ?>
				</DIV>
				<DIV class="mixNewsStyleTitleContainer">
				<DIV class="J_mixNewsStyleTitle fk-newsListTitle mixNewsStyleTitle	pic-mixNewsStyleTitle">
					<?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
				</DIV>
				<P class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary ">
					<?php echo $article->getAbstract() ?></P>
				</TD>
			</TR>
		</TBODY>
	</TABLE>
	</DIV>

	<?php endforeach; ?>

</table>
