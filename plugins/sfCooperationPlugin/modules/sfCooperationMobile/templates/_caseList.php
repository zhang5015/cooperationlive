<?php $caseList =  Doctrine_Core::getTable('CooperationArticle')->getCaseList(); ?>
	<div class="form Handle	formStyle2 " id="module323" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
		<div class="formBannerTitle formBannerTitle323" _bannerautoheight="1"> 
		<div class="titleLeft titleLeft323"></div> 
		<div class="titleCenter titleCenter323"> 
			<div class="titleText titleText323"> 
			<div class="titleTextIcon icon-titleText">
				 &nbsp;
			</div> 
			<div class="textContent">
				 图文展示
			</div> 
			</div> 
			<div class="formBannerMore formBannerMore323"></div> 
		</div> 
		<div class="titleRight titleRight323"></div> 
		</div> 
		<div class="formMiddle formMiddle323"> 
		<div class="middleLeft middleLeft323"></div> 
		<div class="middleCenter middleCenter323"> 
			<div class="formMiddleContent formMiddleContent323 moduleContent" _innertype="0"> 
			<div class="J_richContentPanel323 f-contentPanel"> 
				<div class="richContent richContent0 richContent323"> 
				<p style="text-align: center; line-height: 1.5em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">案例欣赏</span></strong></p> 
				<p style="text-align: center; line-height: 1.5em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">Case appreciation</span></strong></p> 
				</div> 
				<div class="clear"></div> 
			</div> 
			</div> 
		</div> 
		<div class="middleRight middleRight323"></div> 
		</div> 
	</div> 
	<div class="form Handle	formStyle41 " id="module308" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
		<div class="formBannerTitle formBannerTitle308" _bannerautoheight="1"> 
		<div class="titleLeft titleLeft308"></div> 
		<div class="titleCenter titleCenter308"> 
			<div class="titleText titleText308"> 
			<div class="titleTextIcon icon-titleText">
				 &nbsp;
			</div> 
			<div class="textContent">
				 案例欣赏
			</div> 
			</div> 
			<div class="formBannerMore formBannerMore308"></div> 
		</div> 
		<div class="titleRight titleRight308"></div> 
		</div> 
		<div class="formMiddle formMiddle308"> 
		<div class="middleLeft middleLeft308"></div> 
		<div class="middleCenter middleCenter308"> 
			<div class="formMiddleContent formMiddleContent308 moduleContent" _innertype="0"> 
			<div class="photoModule styleForm1">
				<?php foreach ($caseList as $i => $case): ?>
				<div class="g_background photoDiv " id="AD0IlIzuBRACGAAgl4DJwgUop-OVrAQwtQI4vQE">
					<a hidefocus="true">
					<div class="imgClass_160">
						<span class="imageMiddle"></span>
						<img class="photoListImg " alt="<?php echo $case->getTitle() ?>" src="/uploads/articles/<?php echo $case->getImage() ?>" />
					</div></a>
				</div>
				<?php endforeach; ?>
				<div style="clear: both;"></div>
			</div> 
			</div> 
		</div> 
		<div class="middleRight middleRight308"></div> 
		</div> 
	</div> 