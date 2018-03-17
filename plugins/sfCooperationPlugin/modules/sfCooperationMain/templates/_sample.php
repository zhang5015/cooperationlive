<?php $samples =  Doctrine_Core::getTable('CooperationArticle')->getSampleList();?>
<div title="" class="form form419 formIndex3 formStyle7" id="module419" _independent="false" _global="false" _autoheight="1" _inpopupzone="0" _inpack="0" _infullmeasure="0" _inmulmcol="0" _intab="0" _side="0" _banid="" _sys="0" _moduleid="419" _modulestyle="7" _moduletype="1" _indexclass="formIndex3"> 
	<table class="formTop formTop419" cellspacing="0" cellpadding="0"> 
	<tbody> 
		<tr> 
		<td class="left"></td> 
		<td class="center"></td> 
		<td class="right"></td> 
		</tr> 
	</tbody> 
	</table> 
	<table class="formMiddle formMiddle419" cellspacing="0" cellpadding="0"> 
	<tbody> 
		<tr> 
		<td class="formMiddleLeft formMiddleLeft419"></td> 
		<td class="formMiddleCenter formMiddleCenter419 " valign="top"> 
			<div class="formMiddleContent formMiddleContent419 fk-formContentOtherPadding" tabstyle="0"> 
			<div> 
				<div class="newsList J_newsList	newsNewModuleStyle_four	" id="newsList419" newslisttype="6" scroll="0" _showsetting="0"> 
				<?php foreach($samples as $i => $sample): ?>
				<div class="J_newsListLine line noHover fk-newsLineHeight	newsListLine1" style="width: 270px; height: auto;" newsname="<?php echo $sample->getTitle()?>" newsid="15" topswitch="on" topclassname="top1"> 
					<table class="J_lineBody lineBody" id="lineBody15" cellspacing="0" cellpadding="0"> 
					<tbody> 
						<tr id="module419tr15"> 
						<td class="mixNewsTitle newsListLineBodyTd" valign="top"> 
							<div class="J_articlePhotoBox articlePhotoBox" newsflag="8" newid="15">
							<a class="J_articlePicHref articlePicLink1" style="width: 280px; height: 180px;" href="<?php echo url_for('article_show_user', $sample, true) ?>"" target="_blank"> 
								<div class="cutImgPanel J_cutImgPanel newsListCutImgPanel2" style="bottom: 0px;"></div>
								<img title="" class="J_newsListPic newsPic newsListNewsPic1" style="width: 270px; height: 180px;" alt="文章附图" src="/uploads/articles/<?php echo $article->getImage() ?>" _defimg="true" />
							</a>
							</div> 
							<div class="J_articleDesc newsListArticleDesc"> 
							<div class="J_newsTitle newsTitle newsListNewsTitle1"> 
								<div class="J_newsListTopFlag	newsListTopFlag1">
								<a class="no-mixNewsStyleTitleTip" href="<?php echo url_for('article_show_user', $sample, true) ?>" target="_blank"></a>
								</div> 
								<?php echo link_to($sample->getTitle(), 'article_show_user', $sample) ?>
							</div> 
							<p class="mixNewsStyleSummary fk-newsListSummary "><?php echo $sample->getAbstract()?></p> 
							</div>	</td> 
						</tr> 
					</tbody> 
					</table> 
				</div> 
				<?php endforeach; ?>
				<div class="clearfloat"></div> 
				</div> 
			</div> 
			</div>	</td> 
		<td class="formMiddleRight formMiddleRight419"></td> 
		</tr> 
	</tbody> 
	</table> 
	<table class="formBottom formBottom419" cellspacing="0" cellpadding="0"> 
	<tbody> 
		<tr> 
		<td class="left left419"></td> 
		<td class="center center419"></td> 
		<td class="right right419"></td> 
		</tr> 
	</tbody> 
	</table> 
	<div class="clearfloat clearfloat419"></div> 
						</div> 