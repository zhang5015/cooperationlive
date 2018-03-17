<?php $brandList =  Doctrine_Core::getTable('CooperationArticle')->getBrandList();?>
<div class="mulMColList" id="mulMCol320_cid_2"> 
	<div title="" class="form form335 formStyle1 formInMulMCol" id="module335" _independent="false" _global="false" _autoheight="1" _inpopupzone="0" _inpack="0" _infullmeasure="0" _inmulmcol="320" _intab="0" _side="0" _banid="" _sys="0" _moduleid="335" _modulestyle="1" _moduletype="1" _indexclass=""> 
		<table class="formTop formTop335" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="left"></td> 
			<td class="center"></td> 
			<td class="right"></td> 
			</tr> 
		</tbody> 
		</table> 
		<table class=" formMiddle formMiddle335" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="formMiddleLeft formMiddleLeft335"></td> 
			<td class="formMiddleCenter formMiddleCenter335" valign="top"> 
				<div class="formMiddleContent formMiddleContent335 fk-formContentOtherPadding" tabstyle="0"> 
				<div class="richContent richContent0"> 
					<p style="text-align: center; line-height: normal;"> <strong><span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 30px;">品牌策划</span></strong> </p> 
					<p style="text-align: center; line-height: normal;"> <strong><span style="color: rgb(255, 255, 255); font-family: Arial; font-size: 18px;">Brand Planning</span></strong></p> 
				</div> 
				</div> </td> 
			<td class="formMiddleRight formMiddleRight335"></td> 
			</tr> 
		</tbody> 
		</table> 
		<table class="formBottom formBottom335" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="left left335"></td> 
			<td class="center center335"></td> 
			<td class="right right335"></td> 
			</tr> 
		</tbody> 
		</table> 
		<div class="clearfloat clearfloat335"></div> 
	</div> 
	<div title="" class="form form338 formStyle7 formInMulMCol" id="module338" _independent="false" _global="false" _autoheight="1" _inpopupzone="0" _inpack="0" _infullmeasure="0" _inmulmcol="320" _intab="0" _side="0" _banid="" _sys="0" _moduleid="338" _modulestyle="7" _moduletype="1" _indexclass=""> 
		<table class="formTop formTop338" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="left"></td> 
			<td class="center"></td> 
			<td class="right"></td> 
			</tr> 
		</tbody> 
		</table> 
		<table class=" formMiddle formMiddle338" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="formMiddleLeft formMiddleLeft338"></td> 
			<td class="formMiddleCenter formMiddleCenter338" valign="top"> 
				<div class="formMiddleContent formMiddleContent338 fk-formContentOtherPadding" tabstyle="0"> 
				<div> 
					<div class="newsList J_newsList	newsNewModuleStyle_one" id="newsList338" newslisttype="3" scroll="0" _showsetting="0"> 
					<?php if($brandList[0]):?>
					<div class="J_newsListLine line noHover g_item fk-newsLineHeight" newsname="<?php echo $brandList[0] -> getTitle() ?>" newsid="9" topswitch="on" topclassname="top1"> 
						<div class="J_lineBody lineBody newsListLineBody1" id="lineBody9"> 
						<div class="J_titleLine fk-titleLine"> 
							<div class="J_newsTitle newsTitle J_noChangeStyle newsListNewsTitle3"> 
							<div class="J_newsListTopFlag"></div> 
								<?php echo link_to($brandList[0]->getTitle(), 'article_show_user', $brandList[0]) ?>
							</div> 
							<div class="clearfloat"></div> 
						</div> 
						<div> 
							<p class="pic-mixNewsStyleSummary fk-newsListSummary"><?php echo $brandList[0]->getAbstract()?></p> 
						</div> 
						</div> 
					</div> 
					<div class="J_separatorLine separatorLine g_separator"></div> 
					<?php endif; ?>
					<?php if($brandList[1]):?>
					<div class="J_newsListLine line noHover g_item fk-newsLineHeight" newsname="<?php echo $brandList[1] -> getTitle() ?>" newsid="9" topswitch="on" topclassname="top1"> 
						<div class="J_lineBody lineBody newsListLineBody1" id="lineBody9"> 
						<div class="J_titleLine fk-titleLine"> 
							<div class="J_newsTitle newsTitle J_noChangeStyle newsListNewsTitle3"> 
							<div class="J_newsListTopFlag"></div> 
								<?php echo link_to($brandList[1]->getTitle(), 'article_show_user', $brandList[1]) ?>
							</div> 
							<div class="clearfloat"></div> 
						</div> 
						<div> 
							<p class="pic-mixNewsStyleSummary fk-newsListSummary"><?php echo $brandList[1]->getAbstract()?></p> 
						</div> 
						</div> 
					</div>  
					<div class="J_separatorLine separatorLine g_separator newsListSeparatorLine"></div> 
					<?php endif; ?>
					<div class="clearfloat"></div> 
					</div> 
				</div> 
				</div> 
				</td> 
			<td class="formMiddleRight formMiddleRight338"></td> 
			</tr> 
		</tbody> 
		</table> 
		<table class="formBottom formBottom338" cellspacing="0" cellpadding="0"> 
		<tbody> 
			<tr> 
			<td class="left left338"></td> 
			<td class="center center338"></td> 
			<td class="right right338"></td> 
			</tr> 
		</tbody> 
		</table> 
		<div class="clearfloat clearfloat338"></div> 
	</div> 
	</div> 
<div class="mulModuleColStyleLine"></div> 