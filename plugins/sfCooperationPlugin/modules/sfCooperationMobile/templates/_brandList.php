<?php
	$brands =  Doctrine_Core::getTable('CooperationArticle')->getBrandList();
?>

<div class="form Handle	formStyle2 " id="module317" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle317" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft317"></div> 
	<div class="titleCenter titleCenter317"> 
		<div class="titleText titleText317"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 图文展示
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore317"></div> 
	</div> 
	<div class="titleRight titleRight317"></div> 
	</div> 
	<div class="formMiddle formMiddle317"> 
	<div class="middleLeft middleLeft317"></div> 
	<div class="middleCenter middleCenter317"> 
		<div class="formMiddleContent formMiddleContent317 moduleContent" _innertype="0"> 
		<div class="J_richContentPanel317 f-contentPanel"> 
			<div class="richContent richContent0 richContent317"> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">品牌策划</span></strong></p> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">Brand Planning</span></strong></p> 
			</div> 
			<div class="clear"></div> 
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight317"></div> 
	</div> 
</div> 
<div class="form Handle	formStyle2 " id="module318" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle318" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft318"></div> 
	<div class="titleCenter titleCenter318"> 
		<div class="titleText titleText318"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 图文展示
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore318"></div> 
	</div> 
	<div class="titleRight titleRight318"></div> 
	</div> 
	<div class="formMiddle formMiddle318"> 
	<div class="middleLeft middleLeft318"></div> 
	<div class="middleCenter middleCenter318"> 
		<div class="formMiddleContent formMiddleContent318 moduleContent" _innertype="0"> 
		<div class="J_richContentPanel318 f-contentPanel">
			<div class="richContent richContent0 richContent318">
			<?php foreach ($brands as $i => $article): ?>
				<p style="text-align: center;"><span style="color: rgb(30, 80, 174); font-family: 微软雅黑; font-size: 0.8rem;"><?php echo link_to($article->getTitle(), 'article_show_user', $article) ?></span></p>
				<p style="text-align: center;"><span style="font-family: 微软雅黑; font-size: 0.6rem;"><?php echo $article->getAbstract() ?></span></p>
				<p><br /></p>
				<p style="text-align: center;"><span style="color: rgb(204, 204, 204); font-family: 微软雅黑; font-size: 0.6rem;">—————————————————————</span></p>
				<p><br /></p>
			<?php endforeach; ?>
			</div>
			<div class="clear"></div> 
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight318"></div> 
	</div> 
</div> 