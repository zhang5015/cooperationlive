<?php $topicList =  Doctrine_Core::getTable('CooperationArticle')->getTopicList(); ?>
<div class="form Handle	formStyle2 " id="module319" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle319" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft319"></div> 
	<div class="titleCenter titleCenter319"> 
		<div class="titleText titleText319"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 图文展示
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore319"></div> 
	</div> 
	<div class="titleRight titleRight319"></div> 
	</div> 
	<div class="formMiddle formMiddle319"> 
	<div class="middleLeft middleLeft319"></div> 
	<div class="middleCenter middleCenter319"> 
		<div class="formMiddleContent formMiddleContent319 moduleContent" _innertype="0"> 
		<div class="J_richContentPanel319 f-contentPanel"> 
			<div class="richContent richContent0 richContent319"> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">专题</span></strong></p> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">Topic</span></strong></p> 
			</div> 
			<div class="clear"></div> 
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight319"></div> 
	</div> 
</div> 
<div class="form Handle	formStyle6 " id="module320" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle320" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft320"></div> 
	<div class="titleCenter titleCenter320"> 
		<div class="titleText titleText320"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 文章列表
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore320">
				<?php echo link_to('更多', 'category_article', $topicList) ?>
		</div> 
	</div> 
	<div class="titleRight titleRight320"></div> 
	</div> 
	<div class="formMiddle formMiddle320"> 
	<div class="middleLeft middleLeft320"></div> 
	<div class="middleCenter middleCenter320"> 
		<div class="formMiddleContent formMiddleContent320 moduleContent" _innertype="0"> 
		<div class="newsList " id="newsList320">
		<?php foreach ($topicList as $i => $article): ?>
			<div class="newsLine line icon-gline firstClass	wholeLine J_lineH j-lineH" id="newsLine11" newsname="<?php echo $article->getTitle() ?>" newsid="11" topswitch="on" topclassname="top1">
				<div class="lineBody lineBodyTable" id="lineBody11">
				<div class="linkTableCell">
					<div class="linkTable">
					<?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
					</div>
				</div>
				</div>
				<div class="newsElementsPanel g_newsElementsPanel J_newsElementsPanel" >
				<!-- onclick="window.location.href=&quot;nd.php?mid=320&amp;id=11&amp;groupId=0&amp;typeList=&quot;" -->
				<div class="ne_newsTime">
					<?php echo $article->getCreatedAt() ?>
				</div>
				</div>
			</div>
			<div class="g_separator separatorLine"></div>
			<?php endforeach; ?>
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight320"></div> 
	</div> 
</div> 