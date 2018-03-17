<?php
	$newArticles =  Doctrine_Core::getTable('CooperationArticle')->getNewList();
?>

<div class="form Handle	formStyle2 " id="module314" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
		 <div class="formBannerTitle formBannerTitle314" _bannerautoheight="1"> 
			<div class="titleLeft titleLeft314"></div> 
			<div class="titleCenter titleCenter314"> 
			 <div class="titleText titleText314"> 
				<div class="titleTextIcon icon-titleText">
				 &nbsp;
				</div> 
				<div class="textContent">
				 图文展示
				</div> 
			 </div> 
			 <div class="formBannerMore formBannerMore314"></div> 
			</div> 
			<div class="titleRight titleRight314"></div> 
		 </div> 
		 <div class="formMiddle formMiddle314"> 
			<div class="middleLeft middleLeft314"></div> 
			<div class="middleCenter middleCenter314"> 
			 <div class="formMiddleContent formMiddleContent314 moduleContent" _innertype="0"> 
				<div class="J_richContentPanel314 f-contentPanel"> 
				 <div class="richContent richContent0 richContent314"> 
					<p><img style="max-width: 100%;" alt=" " src="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE.jpg" data-source="/images/AD0I0amXBhACGAAg-K3PxQUonfG97wIwgAU4tAE!640x640.jpg" /></p> 
				 </div> 
				 <div class="clear"></div> 
				</div> 
			 </div> 
			</div> 
			<div class="middleRight middleRight314"></div> 
		 </div> 
		</div> 
		<div class="form Handle	formStyle6 " id="module315" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
		 <div class="formBannerTitle formBannerTitle315" _bannerautoheight="1"> 
			<div class="titleLeft titleLeft315"></div> 
			<div class="titleCenter titleCenter315"> 
			 <div class="titleText titleText315"> 
				<div class="titleTextIcon icon-titleText">
				 &nbsp;
				</div> 
				<div class="textContent">
				 文章列表
				</div> 
			 </div> 
					<div class="formBannerMore formBannerMore315">
						<?php echo link_to('更多', 'category_article', $newArticles) ?>
					</div> 
			</div> 
			<div class="titleRight titleRight315"></div> 
		 </div> 
		 <div class="formMiddle formMiddle315"> 
			<div class="middleLeft middleLeft315"></div> 
			<div class="middleCenter middleCenter315"> 
			 <div class="formMiddleContent formMiddleContent315 moduleContent" _innertype="0"> 
				<div class="newsList " id="newsList315">
				<?php foreach ($newArticles as $i => $article): ?>
				 <div class="newsLine line icon-gline One	firstClass	J_picNum " id="newsLine14" picnum="2" newsname="<?php echo $article->getTitle() ?>" newsid="14" topswitch="on" topclassname="top1">
						<div class="lineBody lineBodyPic" id="lineBody14">
							<div class="fontTableCell">
							<div class="fontHiddenTable">
								<div class="twoLineHidden">
								<?php echo link_to($article->getTitle(), 'article_show_user', $article) ?>
								</div>
							</div>
							</div>
							<div class="picTableCell" style="width: 50px; height: 50px;">
							<div class="newsLeftImg" id="newsImg14" style="background: url(&quot;/uploads/articles/<?php echo $article->getImage() ?>&quot;) no-repeat center/cover; width: 50px; height: 50px;" alt="文章封面图"></div>
							</div>
						</div>
					</div>
					<div class="g_separator separatorLine"></div>
				<?php endforeach; ?>
				</div> 
			 </div> 
			</div> 
			<div class="middleRight middleRight315"></div> 
		 </div> 
		</div> 
