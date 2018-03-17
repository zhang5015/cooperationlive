<?php $filmList =  Doctrine_Core::getTable('CooperationArticle')->getFilmList(); ?>

<div class="form Handle	formStyle2 " id="module316" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle316" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft316"></div> 
	<div class="titleCenter titleCenter316"> 
		<div class="titleText titleText316"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 图文展示
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore316"></div> 
	</div> 
	<div class="titleRight titleRight316"></div> 
	</div> 
	<div class="formMiddle formMiddle316"> 
	<div class="middleLeft middleLeft316"></div> 
	<div class="middleCenter middleCenter316"> 
		<div class="formMiddleContent formMiddleContent316 moduleContent" _innertype="0"> 
		<div class="J_richContentPanel316 f-contentPanel"> 
			<div class="richContent richContent0 richContent316"> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">影视</span></strong><br /> </p> 
			<p style="text-align: center; line-height: 1.75em;"><strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 1rem;">Film &amp; TV</span></strong></p> 
			</div> 
			<div class="clear"></div> 
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight316"></div> 
	</div> 
</div> 
<div class="form Handle	formStyle41 " id="module324" _height="0" _intab="0" _bheight="0" _autowidth="1" _width="0" _autoheight="1"> 
	<div class="formBannerTitle formBannerTitle324" _bannerautoheight="1"> 
	<div class="titleLeft titleLeft324"></div> 
	<div class="titleCenter titleCenter324"> 
		<div class="titleText titleText324"> 
		<div class="titleTextIcon icon-titleText">
				 &nbsp;
		</div> 
		<div class="textContent">
				 列表多图
		</div> 
		</div> 
		<div class="formBannerMore formBannerMore324"></div> 
	</div> 
	<div class="titleRight titleRight324"></div> 
	</div> 
	<div class="formMiddle formMiddle324"> 
	<div class="middleLeft middleLeft324"></div> 
	<div class="middleCenter middleCenter324"> 
		<div class="formMiddleContent formMiddleContent324 moduleContent" _innertype="0"> 
		<div class="mPhotoList" id="mMultiPhotoList324"> 
			<div class="photoSlide" id="photoSlide324"> 
			<div class="photoSlideList" id="photoSlideList324">
				<div class="photoCrossedSlideSec" photoid="AD0I0amXBhACGAAggq7PxQUorN2lPTDZATjFAQ">
					<a hidefocus="true">
					<div class="imgClass_160" id="CrossedSlideSecImgAD0I0amXBhACGAAggq7PxQUorN2lPTDZATjFAQmodule324">
						<span class="imageMiddle"></span>
						<?php if($filmList[0]->getImage()): ?>
							<img class="style2Img photoListImg " id="AD0I0amXBhACGAAggq7PxQUorN2lPTDZATjFAQ" alt="<?php echo $filmList[0]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[0]->getImage() ?>"  />
						<?php else: ?>
							<img class="style2Img photoListImg " src="/images/sample.jpg" />
						<?php endif; ?>
					</div>
					</a>
				</div>
				<div class="photoCrossedSlideSec" photoid="AD0I0amXBhACGAAghK7PxQUo-JnT0wIw9wE4xQE">
					<a hidefocus="true">
					<div class="imgClass_160" id="CrossedSlideSecImgAD0I0amXBhACGAAghK7PxQUo-JnT0wIw9wE4xQEmodule324">
						<span class="imageMiddle"></span>
						<?php if($filmList[1]->getImage()): ?>
							<img class="style2Img photoListImg " id="AD0I0amXBhACGAAghK7PxQUo-JnT0wIw9wE4xQE" alt="<?php echo $filmList[1]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[1]->getImage() ?>"  />
						<?php else: ?>
							<img class="style2Img photoListImg " src="/images/sample.jpg" />
						<?php endif; ?>
					</div>
					</a>
				</div>
				<div class="photoCrossedSlideSec" style="display: none;" photoid="AD0I0amXBhACGAAgr8-PxQUowt7q6gUw9wE4xQE">
					<a hidefocus="true">
					<div class="imgClass_160" id="CrossedSlideSecImgAD0I0amXBhACGAAgr8-PxQUowt7q6gUw9wE4xQEmodule324">
						<span class="imageMiddle"></span>
						<?php if($filmList[2]->getImage()): ?>
							<img class="style2Img photoListImg " id="AD0I0amXBhACGAAgr8-PxQUowt7q6gUw9wE4xQE" alt="<?php echo $filmList[2]->getTitle() ?>" src="/uploads/articles/<?php echo $filmList[2]->getImage() ?>"  />
						<?php else: ?>
							<img class="style2Img photoListImg " src="/images/sample.jpg" />
						<?php endif; ?>
					</div>
					</a>
				</div>
			</div> 
			</div> 
		</div> 
		</div> 
	</div> 
	<div class="middleRight middleRight324"></div> 
	</div> 
</div> 
