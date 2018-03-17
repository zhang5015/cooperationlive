<TABLE id="lineBody4" cellspacing="0" cellpadding="0">
	<TBODY>
	<?php foreach ($articles as $i => $article): ?>
		<TR id="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
			<TD  valign="top">
				<div class = "title">
					<A href="<?php echo url_for('article_show_user', $article, true) ?>" target="_blank">
					<?php if ($article->getImage()): ?>
						<img class="image" title="<?php echo $article->getTitle() ?>" alt="文章附图"
								src="/uploads/articles/<?php echo $article->getImage() ?>"
								alt="Sample" />
					<?php else: ?>
						<img class="image" src="/images/sample.jpg" alt="Sample"/>
					<?php endif; ?>
				</A>
				<?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
				</div>
				<div class = "text">
					<?php echo $article->getAbstract() ?>
				</div>
			</TD>
		</TR>
	<?php endforeach; ?>
	</TBODY>
</TABLE>


