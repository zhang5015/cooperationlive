<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php include_slot('title') ?></title>
		<?php include_javascripts() ?>
		<?php include_stylesheets() ?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Cache-Control" content="no-transform">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta property="og:url" content="">
		<meta name="format-detection" content="telephone=no,email=no,address=no">
		<meta name="renderer" content="webkit">
		<meta name="mobile-agent" content="format=html5;url=http://m.cooperationlive.com">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="alternate" type="application/atom+xml" title="Latest articles" href="<?php echo url_for('article', array('sf_format' => 'atom'), true) ?>" />
	</head>

	<body class="g_body g_locale2052 g_cusSiteWidth ">
		<div id="g_main" class="g_main g_col7" style="width: 1905px;">
			<div id="web" class="g_web ">
				<table class="webTopTable" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td align="center">
								<div id="webTop" class="webTop">
									<div id="corpTitle" class="corpTitle corpTitle2" fontpatterntitle="false" style="top: 31px; left: 3px;" _linktype="0">
										<span style="color: rgb(254, 87, 34);" color="rgb(254,87,34)">
											<div class="newPrimaryTitle">
												<span style="font-size: 36px;">
													<font face="arial black, avant garde, 微软雅黑">
														<b>Cooperation Live</b>
													</font>
												</span>
											</div>
										</span>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="absTopTable" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td align="center">
								<div id="absTopForms" class="forms sideForms absForms">
									<div style="position: absolute;"></div>
									<!-- for ie6 --></div>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="webNavTable" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td align="center">
								<div id="webNav" class="webNav"></div>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="webHeaderTable J_webHeaderTable" id="webHeaderTable" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td class="J_webHeaderTable webHeaderTd fk-moduleZoneWrap" align="center">
								<div id="fk-webHeaderZone" class="elemZone elemZoneModule J_moduleZone fk-webHeaderZone fk-moduleZone forms sideForms">
									<div class="fk-moduleZoneBg fk-elemZoneBg J_zoneContentBg elemZoneBg"></div>
									<div id="module423" _indexclass="formIndex1" _moduletype="1" _modulestyle="62" _moduleid="423" class="form  formIndex1 formStyle62 formInZone " title="" _sys="0" _banid="" style="position: absolute; top: 32px; left: 811px; width: 342px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="1" _global="true" _independent="false">
										<table class="formTop formTop423" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="left"></td>
													<td class="center"></td>
													<td class="right"></td>
												</tr>
											</tbody>
										</table>
										<table class=" formMiddle formMiddle423" style="" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="formMiddleLeft formMiddleLeft423"></td>
													<td class="formMiddleCenter formMiddleCenter423 " valign="top">
														<div class="formMiddleContent formMiddleContent423 fk-formContentOtherPadding" tabstyle="0">
															<div class="J_newSearchBox fk-newSearchBox fk-newSearchBox9 fk-useFontIconBtn " style="background-color: transparent; height: 26px;" _type="9" _stylecolor="#ff6537" _bordertype="0" _bgcolor="transparent" _usethemecolor="1">
																<div class="fk-newSearchSelectWrap" style="">
																	<div class="fk-newSearchSelect" style="">
																		<div class="fk-newSearchBoxContainer" style="height: 26px;">
																			<form id="search_form" action="<?php echo url_for('article_search') ?>" method="get">
																			<input class="fk-newSearchInput" maxlength="100" placeholder="" _nsl="[]" type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>" id="search_keywords">
																			<span style="position: absolute; left: 0px; top: 0px; height: 26px; line-height: 26; padding-left: 8px; padding-top: 6px;" class="fk_lowIEPlaceholderStyle"></span>
																			</form>
																		</div>
																	</div>
																</div>
																<div id="fk-newSearchFontIcon9" class="fk-searchBoxBtn" style="height: 26px;" href="javascript:;" onclick="Site.searchInSite(423);return false;">
																	<span class=" faisco-icons-newSearch5 " style="line-height: 26px;"></span>
																</div>
															</div>
														</div>
													</td>
													<td class="formMiddleRight formMiddleRight423"></td>
												</tr>
											</tbody>
										</table>
										<table class="formBottom formBottom423" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="left left423"></td>
													<td class="center center423"></td>
													<td class="right right423"></td>
												</tr>
											</tbody>
										</table>
										<div class="clearfloat clearfloat423"></div>
									</div>
								</div>
								<div id="webHeader" class="webHeader">
									<table class="headerTable" cellpadding="0" cellspacing="0">
										<tbody>
											<tr>
												<td class="headerCusLeft"></td>
												<td class="headerCusMiddle" valign="top" align="center">
													<div class="headerNav ">
														<div id="navV2Wrap">
															<div id="navV2" class="nav navV2">
																<div class="navMainContent">
																	<div class="navContent">
																		<div id="navCenterContent" class="navCenterContent">
																			<div style="width: 960px;" id="navCenter" class="navCenter">
																				<div style="display: none;" class="itemPrev"></div>
																				<div class="itemContainer">
																					<div title="" id="nav2" class="item itemCol2 itemIndex1" colid="2" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/" onclick="return false;">
																								<span class="itemName0">首页</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav105" class="item itemCol105 itemIndex2" colid="105" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/en/" onclick="return false;">
																								<span class="itemName0">品牌策划</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav106" class="item itemCol106 itemIndex3" colid="106" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/en/" onclick="return false;">
																								<span class="itemName0">媒体资源</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav107" class="item itemCol107 itemIndex4" colid="107" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/en/" onclick="return false;">
																								<span class="itemName0">关于我们</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav108" class="item itemCol108 itemIndex5" colid="108" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/en/article" onclick="return false;">
																								<span class="itemName0">新闻动态</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav110" class="item itemCol110 itemIndex6" colid="110" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://cafe.cooperationlive.com/en" onclick="return false;">
																								<span class="itemName0">咖啡屋</span></a>
																						</div>
																					</div>
																					<div class="itemSep"></div>
																					<div title="" id="nav109" class="item itemCol109 itemIndex7" colid="109" onclick='window.open("/", "_self")' _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
																						<div class="itemCenter">
																							<a hidefocus="true" style="outline: medium none;" href="http://www.cooperationlive.com/en/" onclick="return false;">
																								<span class="itemName0">联系我们</span></a>
																						</div>
																					</div>
																				</div>
																				<div style="display: none;" class="itemNext"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td class="headerCusRight"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<?php echo $sf_content ?></div>
				<table id="webFooterTable" class="webFooterTable J_webFooterTable" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td class="fk-moduleZoneWrap" valign="top" align="center">
								<div id="webFooter" class="webFooter">
									<div id="footer" class="footer">
										<table class="footerTop" cellpadding="0" cellspacing="0">
											<tbody>
												<tr valign="top">
													<td class="topLeft"></td>
													<td class="topCenter"></td>
													<td class="topRight"></td>
												</tr>
											</tbody>
										</table>
										<table class="footerMiddle" cellpadding="0" cellspacing="0">
											<tbody>
												<tr valign="top">
													<td class="middleLeft"></td>
													<td class="middleCenter" align="center">
														<div class="footerContent">
															<div id="footerNav" class="footerNav	footerPattern1" cusheight="1">
																<div class="footerItemListBox">
																	<ul class="footerItemListContainer J_footerItemListContainer">
																		<?php include_component('sfCooperationLanguage', 'language') ?>
																	</ul>
																</div>
															</div>
															<div class="footerInfo">
																<p><font face="Arial">©</font>2018 版权所有</p>
															</div>
															<div class="footerSupport" id="footerSupport">
																<span class="footerMobile">
																	<a hidefocus="true" href="http://m.cooperationlive.com/" target="_blank">手机版</a></span>
																<span class="footerSep">|</span>
																<span id="footerLogin" class="footerLogin">
																	<a name="popupLogin" rel="nofollow" hidefocus="true" href="http://manage.cooperationlive.com" onclick='Fai.closeTip("#footerLogin");'>管理登录</a></span>
																<span class="bgplayerButton" id="bgplayerButton" style="display: none;"></span>
															</div>
														</div>
													</td>
													<td class="middleRight"></td>
												</tr>
											</tbody>
										</table>
										<table class="footerBottom" cellpadding="0" cellspacing="0">
											<tbody>
												<tr valign="top">
													<td class="bottomLeft"></td>
													<td class="bottomCenter"></td>
													<td class="bottomRight"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfloat"></div>
			</div>
		<div class="floatLeftTop manageTranTop" style="top: 0px;">
			<div id="floatLeftTopForms" class="forms sideForms floatForms"></div>
		</div>
		<div class="floatRightTop manageTranTop" style="top: 0px;">
			<div id="floatRightTopForms" class="forms sideForms floatForms"></div>
		</div>
		<div class="floatLeftBottom">
			<div id="floatLeftBottomForms" class="forms sideForms floatForms"></div>
		</div>
		<div class="floatRightBottom">
			<div id="floatRightBottomForms" class="forms sideForms floatForms"></div>
		</div>
		<div id="popupLevel" class="popupLevel">
			<div id="popupLevelWrap" class="popupLevelWrap">
				<div id="popupLevelEditToolArea" class="popupLevelEditToolArea">
					<div id="popupLevelEditPanel" class="popupLevelEditPanel"></div>
					<div id="popupLevelEditTool" class="popupLevelEditTool"></div>
				</div>
				<div id="popupLevelForms" class="forms sideForms popupLevelForms"></div>
			</div>
		</div>
		<div id="bgMusic" class="bgMusic"></div>
		<!-- 样式面板 -->
		<div class="fk-funPanelStyleArea" id="fk-funPanelStyleArea">
			<div class="fk-funPanelStyle fk-funPanel" id="fk-funPanelStyle">
				<transition name="component-fade" mode="out-in">
					<keep-alive>
						<template v-if="panelOpen">
							<fk-funpanelstyle :curpanel="curPanel" :panelopen="panelOpen" :panelleft="panelLeft" @closepanelclick="closePanelClick" @switchpaneltype="switchPanelType"></fk-funpanelstyle>
						</template>
					</keep-alive>
				</transition>
			</div>
		</div>
	<script type="text/javascript">
    Fai.top = window;
    var _Global = {}, bgmCloseToOpen = false, statId = -1, _debug = false, _isPre = false, _devMode = false, _colOtherStyleData = {
        "independentList" : [],
        "y" : 252,
        "hh" : false,
        "fh" : false,
        "h" : 0,
        "layout4Width" : 0,
        "layout5Width" : 0
    }, // 当前页面的数据
    _templateOtherStyleData = {
        "h" : 960,
        "independentList" : [],
        "hh" : false,
        "fh" : false,
        "y" : 0,
        "layout4Width" : 0,
        "layout5Width" : 0
    }, // 全局的数据
    _allowedHtmlUrl = false, _openHtmlUrl = false, _advertType = 4, _isBUser = true;

    var _homeHost = "www.cooperationlive.com";

    var _templateDefLayout = {
        BANNER_NAV : 0,
        NAV_FLOAT : 1,
        LEFT_NAV_BANNER_RIGHT_HIDE : 3,
        LEFT_NAV_CENTER_BANNER_RIGHT_HIDE : 4,
        LEFT_BANNER_NAV_RIGHT_HIDE : 5,
        LEFT_NAV_EXPEND_CENTER_BANNER : 6,
        CENTER_TOP_BANNER_RIGHT_HIDE : 7,
        LEFT_HIDE_CENTER_TOP_BANNER : 8,
        NAV_FLOAT_ON_BANNER : 9,
        NAV_BANNER : 10
    };

    $(function() {

        Site.ajaxLoadModuleDom(2, 0, {
            "_ajaxLoadModuleList" : [],
            "_partDomInfoList" : [],
            "fullUrl" : "http://www.cooperationlive.com/"
        });

        Site.showOrHideMailBox();

//        Site.loginSiteInit('nz15518796', 'cooperationlive.com', false, "");

        // topBarMember

        if (Fai.top._manageMode) {
            Fai.top._bigAdOptions = {
//                "sevenCelebration" : false,
                "sevenKnowMoreUrl" : "http://www.cooperationlive.com/",
                "sevenQQUrl" : "http://www.cooperationlive.com/",
                "dailyImgUrl" : "http://www.cooperationlive.com/"
            }
        }

        // 绑定退出事件
        Site.bindBeforeUnloadEvent(false, false, false);

        Site.initTemplateLayout(_templateDefLayout.NAV_FLOAT, true, true);
        // spider统计

        // ajax统计
        Site.total({
            colId : 2,
            pdId : -1,
            ndId : -1,
            sc : 0,
            rf : "",
            statId : statId
        });
        // 保留旧用户的初始化版式区域4 和区域5 中，区域4的padding-right空间
        Site.colLayout45Width();
        // 各个模块inc吐出脚本

        Site.initCorpTitleJump();
//        Site.initModuleSiteSearch('423');
//        Site.fixCusWidthSearchBox('423');
//        Site.bindSearchBtnEvent('423');
        Site.initModulePhotoSwitch(
                        319,
                        {
                            "data" : [
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/ABUIABACGAAgtLzI1AUomoG_vQYwwAc42AQ!800x800.jpg",
                                        "width" : 720,
                                        "height" : 450,
                                        "widthOr" : 720,
                                        "heightOr" : 450,
                                        "pic" : "ABUIABACGAAgtLzI1AUomoG_vQYwwAc42AQ"
                                    },
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/ABUIABACGAAgvLzI1AUotJqkvwIwqAg4wwU!700x700.jpg",
                                        "width" : 677,
                                        "height" : 450,
                                        "widthOr" : 677,
                                        "heightOr" : 450,
                                        "pic" : "ABUIABACGAAgvLzI1AUotJqkvwIwqAg4wwU"
                                    },
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/ABUIABACGAAgm73I1AUomujQ1wYwoAY42AQ!600x600.jpg",
                                        "width" : 600,
                                        "height" : 450,
                                        "widthOr" : 600,
                                        "heightOr" : 450,
                                        "pic" : "ABUIABACGAAgm73I1AUomujQ1wYwoAY42AQ"
                                    } ],
                            "width" : 850,
                            "height" : 450,
                            "playTime" : 4000,
                            "animateTime" : 1500,
                            "showImageName" : false,
                            "switchWrapName" : false,
                            "moduleId" : "photoSwitch319",
                            "cusPicSize" : true,
                            "picScale" : 0,
                            "manuallyCarousel" : false
                        }, 1, 'carouselPhotos');

        Site.loadNewsList(323, {
            "y" : 1,
            "s" : 0,
            "w" : 1
        }, false);
        Site.loadNewsNewStyle(323, false, false, false, true, false, false,
                true, true, false, false);
        Site.initMixNews({
            moduleId : 323,
            leader : '0'
        });

        Site.initMulColModuleInIE('#module318');
        Site.hoverChangeImage();
        Site.hoverStyle();
        Site.loadPhotoList(337, 2, true, 6, 'listPhotos');
        jzUtils.run({
            "name" : "ImageEffect.FUNC.BASIC.Init",
            "callMethod" : true
        }, {
            "moduleId" : 337,
            "imgEffOption" : {
                "effType" : 6,
                "borderType" : false,
                "borderColor" : "#000",
                "borderWidth" : 1,
                "borderStyle" : 1,
                "style" : 88,
                "fullMaskCusBg" : false,
                "fullMaskCusDisc" : false,
                "halfMaskCusBg" : false,
                "halfMaskCusDisc" : false,
                "fullMaskOpenDisc" : false
            },
            "tagetOption" : {
                "nameHidden" : true,
                "nameWordWrap" : false,
                "targetParent" : "photoForm",
                "target" : "imgDiv",
                "picScale" : 2
            },
            "callback" : Site.createImageEffectContent_photo,
            "callbackArgs" : []
        });
        Fai.top.photoSlideTmp337 = {};
        Fai.top.photoSlideTmp337 = {
            "photoSlideId" : "photoSlide_337",
            "photoSlideType" : 0,
            "photoDataList" : [
                    {
                        "id" : 0,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgp4vIwgUo-KP7RzC_ATiYAQ",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgp4vIwgUo-KP7RzC_ATiYAQ.jpg",
                        "picWidth" : 190,
                        "picHeight" : 152
                    },
                    {
                        "id" : 1,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgr4vIwgUolIWZ0wMwvgE4mAE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgr4vIwgUolIWZ0wMwvgE4mAE.jpg",
                        "picWidth" : 190,
                        "picHeight" : 152
                    },
                    {
                        "id" : 2,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgx4vIwgUovJey9gcwvgE4mAE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgx4vIwgUovJey9gcwvgE4mAE.jpg",
                        "picWidth" : 190,
                        "picHeight" : 152
                    },
                    {
                        "id" : 3,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgzYvIwgUo9vH09wQwvgE4mAE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgzYvIwgUo9vH09wQwvgE4mAE.jpg",
                        "picWidth" : 190,
                        "picHeight" : 152
                    } ],
            "pluginsOptions" : {
                "closeBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "prevBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "nextBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "descPanel" : {
                    "on" : true,
                    "arg" : {}
                }
            }
        };

        Site.loadNewsList(338, {
            "y" : 2,
            "c" : "#efefef",
            "s" : 0,
            "w" : 1
        }, false);
        Site.loadNewsNewStyle(338, true, false, false, true, false, false,
                false, true, false, false);

        Site.loadNewsList(417, {
            "y" : 0,
            "s" : 0,
            "w" : 1
        }, false);
        Site.loadNewsNewStyle(417, false, false, false, true, false, false,
                false, true, false, false);
        Site.initMixNews({
            moduleId : 417,
            leader : '1'
        });

        Site.loadNewsList(333, {
            "y" : 0,
            "s" : 0,
            "w" : 1
        }, true);
        Site.loadNewsNewStyle(333, false, false, false, true, false, false,
                true, false, false, false);

        Site.initMulColModuleInIE('#module320');
        Site.loadNewsList(419, {
            "y" : 0,
            "s" : 0,
            "w" : 1
        }, false);
        Site.loadNewsNewStyle(419, false, false, false, true, false, true,
                true, false, false, true);

        Site.loadNewsList(351, {
            "y" : 2,
            "c" : "#ebebeb",
            "s" : 0,
            "w" : 1
        }, false);
        Site.loadNewsNewStyle(351, false, false, false, true, false, false,
                false, false, false, false);
        Site.initMixNews({
            moduleId : 351,
            leader : '0'
        });

        Site.initModulePhotoSwitch(
                        352,
                        {
                            "data" : [
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAg_arIwgUopujupwIwvAI4swM.jpg",
                                        "width" : 316,
                                        "height" : 435,
                                        "widthOr" : 316,
                                        "heightOr" : 435,
                                        "pic" : "AD0IlIzuBRACGAAg_arIwgUopujupwIwvAI4swM"
                                    },
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgyKvIwgUo5qbHBzC8AjizAw.jpg",
                                        "width" : 316,
                                        "height" : 435,
                                        "widthOr" : 316,
                                        "heightOr" : 435,
                                        "pic" : "AD0IlIzuBRACGAAgyKvIwgUo5qbHBzC8AjizAw"
                                    },
                                    {
                                        "name" : "",
                                        "href" : "",
                                        "target" : "_blank",
                                        "src" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgkavIwgUo9PjgzwEwvAI4swM.jpg",
                                        "width" : 316,
                                        "height" : 435,
                                        "widthOr" : 316,
                                        "heightOr" : 435,
                                        "pic" : "AD0IlIzuBRACGAAgkavIwgUo9PjgzwEwvAI4swM"
                                    } ],
                            "width" : 316,
                            "height" : 435,
                            "playTime" : 4000,
                            "animateTime" : 1500,
                            "showImageName" : true,
                            "switchWrapName" : false,
                            "moduleId" : "photoSwitch352",
                            "cusPicSize" : true,
                            "picScale" : 0,
                            "manuallyCarousel" : false
                        }, 1, 'carouselPhotos');

        Site.initMulColModuleInIE('#module348');
        Site.loadPhotoList(353, 2, true, 6, 'listPhotos');
        jzUtils.run({
            "name" : "ImageEffect.FUNC.BASIC.Init",
            "callMethod" : true
        }, {
            "moduleId" : 353,
            "imgEffOption" : {
                "effType" : 6,
                "borderType" : false,
                "borderColor" : "#000",
                "borderWidth" : 1,
                "borderStyle" : 1,
                "style" : 88,
                "fullMaskCusBg" : false,
                "fullMaskCusDisc" : false,
                "halfMaskCusBg" : false,
                "halfMaskCusDisc" : false,
                "fullMaskOpenDisc" : false
            },
            "tagetOption" : {
                "nameHidden" : true,
                "nameWordWrap" : false,
                "targetParent" : "photoForm",
                "target" : "imgDiv",
                "picScale" : 2
            },
            "callback" : Site.createImageEffectContent_photo,
            "callbackArgs" : []
        });
        Fai.top.photoSlideTmp353 = {};
        Fai.top.photoSlideTmp353 = {
            "photoSlideId" : "photoSlide_353",
            "photoSlideType" : 0,
            "photoDataList" : [
                    {
                        "id" : 0,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAggt7IwgUo2NipKzCpAjjKAQ",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAggt7IwgUo2NipKzCpAjjKAQ.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 1,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAg-N-IwgUovMOQhQUwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAg-N-IwgUovMOQhQUwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 2,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgg_DIwgUoieeZkgEwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgg_DIwgUoieeZkgEwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 3,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgh_DIwgUowIme9QIwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgh_DIwgUowIme9QIwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 4,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgkuDIwgUooJ3jlwUwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgkuDIwgUooJ3jlwUwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 5,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgluDIwgUooMWN2gUwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgluDIwgUooMWN2gUwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 6,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgmeDIwgUosJ5DMKkCOMoB",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgmeDIwgUosJ5DMKkCOMoB.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    },
                    {
                        "id" : 7,
                        "name" : "",
                        "basic" : "",
                        "pic" : "AD0IlIzuBRACGAAgnODIwgUo_7yyqQQwqQI4ygE",
                        "picPath" : "http://www.cooperationlive.com/images/AD0IlIzuBRACGAAgnODIwgUo_7yyqQQwqQI4ygE.jpg",
                        "picWidth" : 297,
                        "picHeight" : 202
                    } ],
            "pluginsOptions" : {
                "closeBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "prevBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "nextBtn" : {
                    "on" : true,
                    "arg" : {}
                },
                "descPanel" : {
                    "on" : true,
                    "arg" : {}
                }
            }
        };

        Site.initSimpleTextContent(420, 0);
        Site.initSimpleTextContent(421, 0);
        Site.initSimpleTextContent(422, 0);

        // 收集浏览器信息，统计dog
        Site.sendBrowerInfo(false);

        // 如果有首页弹窗的话，需要先打开首页弹窗

        Site.initPage(); // 这个要放在最后，因为模块组初始化时会把一些模块隐藏，导致没有高度，所以要放最后执行

        setTimeout(afterModuleLoaded, 0);

        Site.triggerGobalEvent("siteReadyLoad");

    });

    function afterModuleLoaded() {

        Site.initPage2();

    } // afterModuleLoaded end

    var _lcid = 2052, _siteDomain = '//www.cooperationlive.com', _resRoot = '//www.cooperationlive.com', _colId = 2, _fromColId = -1, _designAuth = false, _manageMode = false, _oem = false, _siteVer = 10, _manageStatus = false;

    var _jzProUrl = '';
    var _flyerManageDomain = '';
    var _siteAdmDomain = '';

    _jzProUrl = 'www.cooperationlive.com';
    _flyerManageDomain = 'www.cooperationlive.com';
    _siteAdmDomain = 'cooperationlive.com';

    _Global._webRightBar = false;
    var _isMemberLogin = false;// 会员是否登陆了
    var _noCover = 0; // 隐藏弹窗遮罩层
    _Global._footerHidden = false; // 底部是否隐藏 原因：需要判断有些底部js方法是否运行 true:隐藏；false: 显示

    var _navPositionFixTop = false; // 导航栏固定到顶部

    var nav2SubMenu = [];
    var nav105SubMenu = [];
    var nav106SubMenu = [];
    var nav107SubMenu = [];
    var nav108SubMenu = [];
    var nav110SubMenu = [];
    var nav109SubMenu = [];

    var _useBannerVersionTwo = true; // 使用横幅2.0的标志
    var _customBackgroundData = {
        "styleDefault" : true,
        "s" : true,
        "h" : false,
        "r" : 3,
        "ps" : 0,
        "o" : "",
        "sw" : -1,
        "swt" : 0,
        "e" : 0,
        "wbh" : -1,
        "wbw" : -1,
        "clw" : -1,
        "crw" : -1,
        "wbws" : -1,
        "wbs" : 0,
        "id" : "",
        "p" : "",
        "bBg" : {
            "y" : 0,
            "r" : 3,
            "ps" : 0,
            "f" : "",
            "p" : "",
            "c" : ""
        },
        "cBg" : {
            "y" : 0,
            "r" : 3,
            "ps" : 0,
            "f" : "",
            "p" : "",
            "c" : ""
        },
        "cmBg" : {
            "y" : 0,
            "r" : 3,
            "ps" : 0,
            "f" : "",
            "p" : "",
            "c" : ""
        },
        "bm" : {},
        "cm" : {},
        "cp" : {
            "y" : 0
        }
    }; // 自定义的数据
    var _templateBackgroundData = {
        "styleDefault" : true,
        "s" : true,
        "h" : false,
        "r" : 3,
        "o" : "",
        "sw" : -1,
        "e" : 0,
        "wbh" : -1,
        "wbw" : -1,
        "clw" : -1,
        "crw" : -1,
        "wbws" : -1,
        "wbs" : 1,
        "id" : "",
        "p" : "",
        "bBg" : {
            "y" : 0,
            "r" : 3,
            "f" : "",
            "p" : "",
            "c" : "#000",
            "ps" : 0
        },
        "cBg" : {
            "y" : 0,
            "r" : 3,
            "f" : "",
            "p" : "",
            "c" : "#000",
            "ps" : 0
        },
        "cmBg" : {
            "y" : 0,
            "r" : 3,
            "f" : "",
            "p" : "",
            "c" : "#000",
            "ps" : 0
        },
        "bm" : {},
        "cm" : {},
        "cp" : {
            "y" : 0
        },
        "ps" : 0,
        "swt" : 0
    };// 模版的数据
    var _resImageRoot = '';

    var _templateBannerData = {
        "ce" : {},
        "h" : true,
        "pl" : 0,
        "s" : 0,
        "i" : 4000,
        "a" : 1500,
        "o" : false,
        "t" : 1,
        "p" : 0,
        "pt" : 0,
        "bt" : 1,
        "ws2" : false,
        "l" : [],
        "f" : {},
        "n" : [],
        "c" : 3,
        "at" : 0,
        "ws" : false
    }; // 模版的数据

    var _pageBannerData = {
        "s" : 0,
        "i" : 4000,
        "a" : 1500,
        "h" : false,
        "o" : false,
        "t" : 1,
        "p" : 0,
        "pt" : 0,
        "pl" : 0,
        "bt" : 1,
        "ws2" : false,
        "l" : [],
        "f" : {},
        "ce" : {},
        "n" : [],
        "c" : 3,
        "at" : 0,
        "ws" : false
    }; // 当前页面的自定义数据（页面独立样式设置）
    var _bannerData = _templateBannerData;

    var _templateBannerV2Data = {
        "s" : 0,
        "bl" : [],
        "bt" : 1,
        "at" : 0,
        "i" : 4000,
        "a" : 1500,
        "blh" : {
            "t" : 0
        },
        "blw" : {
            "t" : 0
        },
        "bzb" : {
            "t" : 0
        },
        "bla" : 0,
        "ble" : {
            "t" : 0,
            "at" : 0
        }
    }; // 横幅2.0模版的数据
    var _pageBannerV2Data = {
        "s" : 0,
        "bl" : [],
        "bt" : 1,
        "at" : 0,
        "i" : 4000,
        "a" : 1500,
        "blh" : {
            "t" : 0
        },
        "blw" : {
            "t" : 0
        },
        "bzb" : {
            "t" : 0
        },
        "bla" : 0,
        "ble" : {
            "t" : 0,
            "at" : 0
        }
    }; // 横幅2.0当前页面的自定义数据（页面独立样式设置）
    var _bannerV2Data = _templateBannerV2Data;

    var _closePhotoDetailEditSettings = true; // 针对全站搜索，判断是否要剔除三个搜索图片的功能
    var _siteSeachRangeLength = 12; // 全站搜索的搜索范围总数

    var _useTemplateHeaderZone = true; // 是否使用全局模版
    var _useTemplateFooterZone = true; // 是否使用全局模版

    var _mallOpen = false;
    var _couponOpen = false

    var toolBoxShowView = false;
    var toolBoxShowSet = false;
    var toolBoxShowABTool = false;
    var _wideBanner = true;

    var _navStyleData = {
        "no" : true,
        "s" : 0,
        "ns" : {
            "w" : -1,
            "h" : -1
        },
        "cs" : {
            "w" : -1,
            "h" : -1,
            "wy" : 0
        },
        "np" : {},
        "ncp" : {
            "y" : 0,
            "t" : -1,
            "r" : -1,
            "b" : -1,
            "l" : -1,
            "hl" : -1,
            "ht" : -1
        },
        "cp" : {
            "y" : 0,
            "t" : -1,
            "l" : -1
        },
        "nis" : {
            "w" : -1,
            "h" : -1
        },
        "gt" : {
            "f" : "微软雅黑",
            "s" : 12,
            "w" : 0,
            "c" : "#000",
            "y" : 0
        },
        "ht" : {
            "c" : "#000",
            "y" : 0
        },
        "nb" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "cb" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "nib" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "nihb" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "niss" : {
            "w" : 20,
            "h" : 50
        },
        "nisb" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "nsigt" : {
            "f" : "微软雅黑",
            "s" : 12,
            "w" : 0,
            "c" : "#000",
            "y" : 0
        },
        "nsiht" : {
            "c" : "#000",
            "y" : 0
        },
        "nsis" : {
            "w" : -1,
            "h" : -1
        },
        "nsib" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "nsihb" : {
            "c" : "#000",
            "r" : 0,
            "f" : "",
            "p" : "",
            "y" : 0
        },
        "nsiho" : 0,
        "nmove" : 0,
        "v" : 2,
        "nsmt" : {},
        "nsmb" : {},
        "nrs" : {
            "n" : {
                "t" : 0
            },
            "c" : {
                "t" : 0
            },
            "i" : {
                "t" : 0
            },
            "smt" : {
                "t" : 0
            },
            "smb" : {
                "t" : 0
            },
            "si" : {
                "t" : 0
            },
            "is" : {
                "t" : 0
            },
            "sis" : {
                "t" : 0
            },
            "tmt" : {
                "t" : 0
            },
            "tmb" : {
                "t" : 0
            },
            "ti" : {
                "t" : 0
            },
            "tis" : {
                "t" : 0
            }
        },
        "nsw" : {
            "n" : {
                "t" : 0
            },
            "c" : {
                "t" : 0
            },
            "i" : {
                "t" : 0
            },
            "sm" : {
                "t" : 0
            },
            "si" : {
                "t" : 0
            },
            "is" : {
                "t" : 0
            },
            "sis" : {
                "t" : 0
            }
        },
        "nbr" : {
            "n" : {
                "t" : 0
            },
            "i" : {
                "t" : 0
            },
            "sm" : {
                "t" : 0
            },
            "si" : {
                "t" : 0
            },
            "is" : {
                "t" : 0
            },
            "sis" : {
                "t" : 0
            },
            "tm" : {
                "t" : 0
            },
            "ti" : {
                "t" : 0
            },
            "tis" : {
                "t" : 0
            }
        },
        "ntf" : {},
        "ntmt" : {},
        "ntmb" : {},
        "onft" : false
    }; // 栏目导航样式
    var _navStyleV2Data = {
        "no" : true,
        "s" : 0,
        "snt" : 0,
        "onft" : false,
        "nmove" : 0,
        "oinc" : false,
        "nhi" : true,
        "ns" : {
            "y" : 0,
            "w" : -1,
            "h" : -1
        },
        "np" : {
            "y" : 0
        },
        "nct" : {
            "y" : 0,
            "cw" : 960
        },
        "nal" : {
            "y" : 0
        },
        "nifc" : {
            "y" : 0
        },
        "nif" : {
            "y" : 0
        },
        "nis" : {
            "y" : 0,
            "w" : -1,
            "h" : -1
        },
        "nisp" : {
            "y" : 1,
            "s" : 20
        },
        "nir" : {
            "y" : 0
        },
        "nib" : {
            "y" : 0,
            "t" : true,
            "b" : true,
            "l" : true,
            "r" : true
        },
        "snfc" : {
            "y" : 0
        },
        "snf" : {
            "y" : 0
        },
        "snr" : {
            "y" : 0
        },
        "snb" : {
            "y" : 0,
            "t" : true,
            "b" : true,
            "l" : true,
            "r" : true
        },
        "nst" : 1,
        "nmw" : 1200
    }; // 栏目导航2.0样式
    var _useNavVersionTwo = true; // 使用导航2.0
    _Global._navHidden = false; // true:隐藏；flase：显示
    _Global._topBarV2 = false; // true:隐藏；flase：显示
    _Global._stylePanelV1 = false; // true:隐藏；flase：显示
    _Global._stylePanelV2 = false; // true:隐藏；flase：显示

    var _useFooterVersionTwo = false;

    _Global._oemHiddenSupport = false;
    _Global._hideSupportAllowed = false;
    _Global._hiddenSupport = false;
    _Global._hiddenLogin = false;
    _Global._hiddenMobile = false;
    _Global._ipcList = 0;
    _Global._hiddenICP = false;
    _Global._hiddenFooterInfo = true;
    _Global._footerInfoV2 = "©2018 - 版权所有";
    _defaultFooterInfo = "©2018 - 版权所有";

    var _cityJsLink = "/js/city2.min.js?v=201710231308";
    var _majorColorData = "#ff6537";
    // 浮动按钮样式链接缓存
    var _floatBtnCssLink = "/css/floatBtn1.min.css?v=201712061746";
    var _themeColorType = 8;
    var _siteDemo = false;

    _Global._backToTop = true;
    var _aid = 16194071;
    var _acctCreateTime = 1519523951000;
    var _siteId = 0;
    var _templateLayout = _templateDefLayout.NAV_FLOAT;
    var _webBannerHeight = -1;
    var _isTemplateVersion2 = true;
    var _uiMode = false;
    var _isNewUserForLayoutToNewVersion = true;
    var _undo = {
        allow : {
            undo : 0,
            redo : 0
        }
    };
    var _choiceCurrencyVal = "￥";
    var _moduleAnimationPercent = -1;
    var file_size_limit = parseInt("1");
    _Global.styleChangeNum = 0;
    _Global.showSaveGuide = false; // 大保存是否出现新手指引
    _Global._useTemplateBackground = true; // 是否使用模版

    var _newUserGuide = false; // 是否需要新手指引，false代表不需要
    if (false) { // 本地环境，到时候测试完可以去掉
        if (_aid > 9855603 && !true) {
            _newUserGuide = true;
        }
    } else {
        if (_aid > 15971536 && !true) { // undefined and false
            _newUserGuide = true; // 传到全局，当前
        }
    }
    var _executedCountForUserGuide = 1; // 用于新手指引

    _Global._siteAdvancedSetting = false;
	</script> 
	</body>

</html>