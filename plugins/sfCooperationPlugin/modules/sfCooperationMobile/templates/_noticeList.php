<?php $notices =  Doctrine_Core::getTable('CooperationArticle')->getNoticeList();?>
<table class=" formMiddle formMiddle351" cellspacing="0" cellpadding="0"> 
	<tbody> 
	<tr> 
		<td class="formMiddleLeft formMiddleLeft351"></td> 
		<td class="formMiddleCenter formMiddleCenter351 " valign="top"> 
		<div class="formMiddleContent formMiddleContent351 fk-formContentOtherPadding" tabstyle="0"> 
			<div> 
			<div class="newsList J_newsList pic-mixNewsList " id="newsList351" newslisttype="2" scroll="0" _showsetting="1"> 
				<div class="J_newsListLine line noHover	 newsListLine2" style="height: auto;" newsname="<?php echo $notices[0]->getTitle() ?>" newsid="14" topswitch="on" topclassname="top1"> 
				<table class="J_lineBody lineBody" id="lineBody14" cellspacing="0" cellpadding="0"> 
					<tbody> 
					<tr id="module351tr14"> 
						<td class="J_newsTitle newsTitle mixNewsTitle" valign="top"> 
						<div class="J_articlePhotoBox articlePhotoBox " newsflag="8" newid="14">
							<a class="J_articlePicHref articlePicLink2" style="width: 90px; height: 80px;" href="<?php echo $notices[0]->getLink() ?>" target="_blank">
							<img title="" class="J_newsListPic newsPic newsListNewPic" style="width: 80px; height: 80px;" alt="文章附图" src="/uploads/articles/<?php echo $notices[0]->getImage() ?>" />
							</a> 
						</div> 
						<div class="mixNewsStyleTitleContainer"> 
							<div class="J_newsListTopFlag	newsListTopFlag2"> 
								<?php echo link_to($notices[0]->getTitle(), 'article_show_user', $notices[0]) ?>
							</div> 
							<span class="mixNewsStyleDate fk-newsListDate"><?php echo $notices[0]->getCreatedAt() ?></span>
						</div> <p class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $notices[0]->getAbstract() ?></p> </td> 
					</tr> 
					</tbody> 
				</table> 
				</div> 
				<div class="J_separatorLine separatorLine g_separator	pic-separatorLine "></div> 
				<div class="J_newsListLine line noHover	 newsListLine2" style="height: auto;" newsname="<?php echo $notices[4]->getTitle() ?>" newsid="14" topswitch="on" topclassname="top1"> 
				<table class="J_lineBody lineBody" id="lineBody14" cellspacing="0" cellpadding="0"> 
					<tbody> 
					<tr id="module351tr14"> 
						<td class="J_newsTitle newsTitle mixNewsTitle" valign="top"> 
						<div class="J_articlePhotoBox articlePhotoBox " newsflag="8" newid="14">
							<a class="J_articlePicHref articlePicLink2" style="width: 90px; height: 80px;" href="<?php echo $notices[4]->getLink() ?>" target="_blank">
							<img title="" class="J_newsListPic newsPic newsListNewPic" style="width: 80px; height: 80px;" alt="文章附图" src="/uploads/articles/<?php echo $notices[4]->getImage() ?>" />
							</a> 
						</div> 
						<div class="mixNewsStyleTitleContainer"> 
							<div class="J_newsListTopFlag	newsListTopFlag2"> 
								<?php echo link_to($notices[4]->getTitle(), 'article_show_user', $notices[1]) ?>
							</div> 
							<span class="mixNewsStyleDate fk-newsListDate"><?php echo $notices[1]->getCreatedAt() ?></span>
						</div> <p class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $notices[1]->getAbstract() ?></p> </td> 
					</tr> 
					</tbody> 
				</table> 
				</div>
				<div class="J_separatorLine separatorLine g_separator	pic-separatorLine "></div> 
				<div class="J_newsListLine line noHover	 newsListLine2" style="height: auto;" newsname="<?php echo $notices[2]->getTitle() ?>" newsid="14" topswitch="on" topclassname="top1"> 
				<table class="J_lineBody lineBody" id="lineBody14" cellspacing="0" cellpadding="0"> 
					<tbody> 
					<tr id="module351tr14"> 
						<td class="J_newsTitle newsTitle mixNewsTitle" valign="top"> 
						<div class="J_articlePhotoBox articlePhotoBox " newsflag="8" newid="14">
							<a class="J_articlePicHref articlePicLink2" style="width: 90px; height: 80px;" href="<?php echo $notices[2]->getLink() ?>" target="_blank">
							<img title="" class="J_newsListPic newsPic newsListNewPic" style="width: 80px; height: 80px;" alt="文章附图" src="/uploads/articles/<?php echo $notices[2]->getImage() ?>" />
							</a> 
						</div> 
						<div class="mixNewsStyleTitleContainer"> 
							<div class="J_newsListTopFlag	newsListTopFlag2"> 
								<?php echo link_to($notices[2]->getTitle(), 'article_show_user', $notices[2]) ?>
							</div> 
							<span class="mixNewsStyleDate fk-newsListDate"><?php echo $notices[2]->getCreatedAt() ?></span>
						</div> <p class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $notices[2]->getAbstract() ?></p> </td> 
					</tr> 
					</tbody> 
				</table> 
				</div>
				<div class="J_separatorLine separatorLine g_separator	pic-separatorLine "></div> 
				<div class="J_newsListLine line noHover	 newsListLine2" style="height: auto;" newsname="<?php echo $notices[3]->getTitle() ?>" newsid="14" topswitch="on" topclassname="top1"> 
				<table class="J_lineBody lineBody" id="lineBody14" cellspacing="0" cellpadding="0"> 
					<tbody> 
					<tr id="module351tr14"> 
						<td class="J_newsTitle newsTitle mixNewsTitle" valign="top"> 
						<div class="J_articlePhotoBox articlePhotoBox " newsflag="8" newid="14">
							<a class="J_articlePicHref articlePicLink2" style="width: 90px; height: 80px;" href="<?php echo $notices[3]->getLink() ?>" target="_blank">
							<img title="" class="J_newsListPic newsPic newsListNewPic" style="width: 80px; height: 80px;" alt="文章附图" src="/uploads/articles/<?php echo $notices[3]->getImage() ?>" />
							</a> 
						</div> 
						<div class="mixNewsStyleTitleContainer"> 
							<div class="J_newsListTopFlag	newsListTopFlag2"> 
								<?php echo link_to($notices[3]->getTitle(), 'article_show_user', $notices[3]) ?>
							</div> 
							<span class="mixNewsStyleDate fk-newsListDate"><?php echo $notices[3]->getCreatedAt() ?></span>
						</div> <p class="mixNewsStyleSummary fk-newsListSummary	pic-mixNewsStyleSummary "><?php echo $notices[3]->getAbstract() ?></p> </td> 
					</tr> 
					</tbody> 
				</table> 
				</div>
				<div class="J_separatorLine separatorLine g_separator	newsListSeparatorLine "></div> 
				<div class="clearfloat"></div> 
			</div> 
			</div> 
		</div> </td> 
		<td class="formMiddleRight formMiddleRight351"></td> 
	</tr> 
	</tbody> 
</table> 