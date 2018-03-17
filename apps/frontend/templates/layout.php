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
																			<form id="search_form" action="<?php echo url_for('notice_search') ?>" method="get">
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
	</body>

</html>