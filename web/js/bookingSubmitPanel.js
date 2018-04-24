Site.bookingSubmitPanel = {};
(function(y, E, i) {
	var D = 0, x = 480, c = 540, L = 0, r = 0, o = {}, K = "", w, k = "#module44", s = [], q = Fai
			.isIE6()
			|| Fai.isIE7() || Fai.isIE8(), f = [], l = {};
	E.dom = {};
	var H = Fai.top._lcid == 2052 || Fai.top._lcid == 1028;
	function v() {
		var S = (Fai.top.$("body").width() - r) / 2;
		var Q = (Fai.top.$("body").height() - L) / 2;
		var R = [];
		R
				.push('<div class="fk-panelFormBooking" id="fk-bookingSubmitPanel" style="display:none;">');
		R.push('	<div class="f-contentBg J_contentBg"></div>');
		R.push('	<div class="f-content J_content" id="module44" style="width:'
				+ r + "px; height:" + L + "px; top:" + Q + "px; left:" + S
				+ 'px;">');
		R.push('		<div class="f-content-head">');
		R
				.push('			<div class="f-content-title">' + LS.onlineBooking
						+ "</div>");
		R.push("		</div>");
		R
				.push('		<div class="f-innerContent" id="f-innerContent" style="overflow:hidden;"></div>');
		R.push('		<div class="bookingPanelMsg" id="bookingPanelMsg"></div>');
		R
				.push('		<a href="javascript:;" class="f-close J_close" onclick="return false;" title="关闭" hidefocus="true">关闭</a>');
		R.push("	</div>");
		R.push("</div>");
		return R
	}
	function N() {
		var R = [];
		if (!l.bookingOpen) {
			var T = l.bookingClosedTip;
			if (Fai.top._manageMode) {
				T += ("，"
						+ l.pleaseClick
						+ "<a target='_blank' href='javascript:Site.openMallEdit(\"manageFrameBookingEdit\");'>"
						+ l.setUp + "</a>")
			}
			R
					.push('		<table class="bookingCloseTable" cellpadding="0" cellspacing="0">');
			R.push('			<tr><td style="text-align:center;">');
			R.push('				<div class="bookingClosePic"></div>');
			R.push('				<div class="bookingCloseTip">' + T + "</div>");
			R.push("			</td></tr>");
			R.push("		</table>")
		} else {
			var Q = o.verticalShowType;
			var V = L - 110;
			R.push('<div class="tableWrap" id="tableWrap" style="height:' + V
					+ 'px">');
			Q ? h(R) : u(R);
			R.push("</div>")
		}
		var S = document.getElementById("tableWrap");
		if (S != null) {
			S.parentNode.removeChild(S)
		}
		var U = E.dom;
		U.innerContent.append(R.join(""));
		m()
	}
	function u(Q) {
		Q
				.push('	<table class="bookingSubmitPanel_table" cellpadding="0" cellspacing="0">');
		Q.push("		<tbody>");
		y.each(l.contentList, function(R, S) {
			if (S.hide) {
				return true
			}
			Q.push('		<tr _contentId="' + S.id + '" _type="' + S.type + '">');
			Q.push('			<td class="column1"><div class="itemName" title="'
					+ Fai.encodeHtml(S.name) + '">' + Fai.encodeHtml(S.name)
					+ "</div></td>");
			Q.push('			<td class="column2">');
			Q.push('				<div class="itemInput">');
			Q.push(t(S));
			S.must && S.type != 5 ? Q
					.push('		<span class="inputMust">*</span>') : Q.push("");
			Q.push("				</div>");
			Q.push("			</td>");
			Q.push("		</tr>")
		});
		if (l.validation) {
			Q.push('		<tr _validationTr="true">');
			Q.push('			<td class="column1"><div class="itemName">'
					+ LS.loginDialogCaptcha + "</div></td>");
			Q.push('			<td class="column2">');
			Q.push('				<div class="itemInput">');
			Q.push('					<div class="validateInputAndCode">');
			Q
					.push('							<input id="bookingVolidationCode" class="voteCodeInputText" type="text" maxlength="4"/>');
			Q
					.push('							<img alt="" class="voteCodePic" onclick="Site.changeCaptchaImg(this, 3)" title="'
							+ LS.msgBoradChageValidateCode
							+ '" id="memberCaptchaImg" src="validateCode.jsp?validateCodeRegType=3&Math.random()*1000">');
			Q.push("					</div>");
			Q.push('					<span class="inputMust">*</span>');
			Q.push("				</div>");
			Q.push("			</td>");
			Q.push("		</tr>")
		}
		Q.push('			<tr _submitTr="true">');
		Q.push("				<td></td>");
		Q.push('				<td class="column2">');
		Q.push('					<div class="itemInput">');
		Q.push('						<div class="addButtonshowType" id="bookingSubmitBtn">');
		Q.push('							<div class="s_ibutton s_ibutton'
				+ o[l.Def_BookingSubmit_BTN_STYLE] + '" type="botton" >');
		Q.push('								<div class="left"></div>');
		Q.push('								<div class="middle ">' + Fai.encodeHtml(l.buttonName)
				+ "</div>");
		Q.push('								<div class="right"></div>');
		Q.push("							</div>");
		Q.push("						</div>");
		Q.push("					</div>");
		Q.push("				</td>");
		Q.push("			</tr>");
		Q.push("		</tbody>");
		Q.push("	</table>")
	}
	function h(Q) {
		Q
				.push('	<table class="bookingSubmitPanel_table vertical" cellpadding="0" cellspacing="0">');
		Q.push("		<tbody>");
		y.each(l.contentList, function(R, S) {
			if (S.hide) {
				return true
			}
			Q.push('		<tr _contentId="' + S.id + '" _type="' + S.type + '">');
			Q.push('			<td class="column1">');
			Q.push('				<div class="itemName" title="' + Fai.encodeHtml(S.name)
					+ '">' + Fai.encodeHtml(S.name) + "</div>");
			Q.push('				<div class="itemInput">');
			Q.push(t(S));
			S.must && S.type != 5 ? Q
					.push('		<span class="inputMust">*</span>') : Q.push("");
			Q.push("				</div>");
			Q.push("			</td>");
			Q.push("		</tr>")
		});
		if (l.validation) {
			Q.push('		<tr _validationTr="true">');
			Q.push('			<td class="column1">');
			Q.push('				<div class="itemName">' + LS.loginDialogCaptcha
					+ "</div>");
			Q.push('				<div class="itemInput">');
			Q.push('					<div class="validateInputAndCode">');
			Q
					.push('							<input id="bookingVolidationCode" class="voteCodeInputText" type="text" maxlength="4"/>');
			Q
					.push('							<img alt="" class="voteCodePic" onclick="Site.changeCaptchaImg(this, 3)" title="'
							+ LS.msgBoradChageValidateCode
							+ '" id="memberCaptchaImg" src="validateCode.jsp?validateCodeRegType=3&Math.random()*1000">');
			Q.push("					</div>");
			Q.push('					<span class="inputMust">*</span>');
			Q.push("				</div>");
			Q.push("			</td>");
			Q.push("		</tr>")
		}
		Q.push('			<tr _submitTr="true">');
		Q.push('				<td class="column1">');
		Q.push('					<div class="itemInput">');
		Q.push('						<div class="addButtonshowType" id="bookingSubmitBtn">');
		Q.push('							<div class="s_ibutton s_ibutton'
				+ o[l.Def_BookingSubmit_BTN_STYLE] + '" type="botton" >');
		Q.push('								<div class="left"></div>');
		Q.push('								<div class="middle ">' + Fai.encodeHtml(l.buttonName)
				+ "</div>");
		Q.push('								<div class="right"></div>');
		Q.push("							</div>");
		Q.push("						</div>");
		Q.push("					</div>");
		Q.push("				</td>");
		Q.push("			</tr>");
		Q.push("		</tbody>");
		Q.push("	</table>")
	}
	function t(aq) {
		var ad = aq.id, T = aq.type, at = aq.name, af = aq.must, aa = aq.input;
		W = (aq.placeholder == i) ? "" : aq.placeholder;
		var Q = o[l.Def_BookingSubmit_ARRAY_STYLE], Z = l.Def_BookingSubmit_ARRAY_AUTO, R = l.Def_BookingSubmit_ARRAY_FIX, aj = o[l.Def_BookingSubmit_FIX_NUM];
		var Y = aa.split("\n");
		var ao = "";
		var ak = (aq.openAreaCode == i) ? true : aq.openAreaCode;
		var W = (aq.placeholder == i) ? "" : aq.placeholder;
		if (T == l.Def_ContentList_Type_SINGLE_LINE) {
			ao = "<input class='singleLineTextInput bookingSingleText' id='bookingSingleText_"
					+ ad
					+ "' placeholder='"
					+ Fai.encodeHtml(W)
					+ "' type='text' maxlength='"
					+ l.Def_LIMIT_INPUT_MAXLENTH
					+ "'/>"
		} else {
			if (T == l.Def_ContentList_Type_MULTI_LINE) {
				ao = "<textArea class='bookingMultLine' id='bookingMultLine_"
						+ ad + "' rows='3' placeholder='" + Fai.encodeHtml(W)
						+ "' maxlength='" + l.Def_LIMIT_TEXTAREA_MAXLEN
						+ "'/></textArea>"
			} else {
				if (T == l.Def_ContentList_Type_RADIO) {
					var an = [];
					y
							.each(
									Y,
									function(av, aw) {
										var au = "radioR_" + ad + "_" + av;
										if (av % aj == 0 && Q == R) {
											an
													.push("<div class='arrangeFixBox'>")
										}
										an
												.push("			<div class='singelChoice'>");
										if (q) {
											an
													.push("				<input type='radio' name='radioR_"
															+ ad
															+ "' id='"
															+ au
															+ "' value='"
															+ Fai
																	.encodeHtml(aw)
															+ "' /><label for='"
															+ au
															+ "'>"
															+ Fai
																	.encodeHtml(aw)
															+ "</label>")
										} else {
											an.push(g("radioR_" + ad, aw))
										}
										an.push("			</div>");
										if ((av % aj == aj - 1 || av == Y.length - 1)
												&& Q == R) {
											an.push("</div>")
										}
									});
					ao = an.join("")
				} else {
					if (T == l.Def_ContentList_Type_MULTIPLECHOICE) {
						var ah = [];
						y.each(Y, function(av, aw) {
							var au = "radioC_" + ad + "_" + av;
							if (av % aj == 0 && Q == R) {
								ah.push("<div class='arrangeFixBox'>")
							}
							ah.push("<div class='multiChoice'>");
							if (q) {
								ah.push("<input type='checkbox' name='radioC_"
										+ ad + "' id='" + au + "' value='"
										+ Fai.encodeHtml(aw)
										+ "' /><label for='" + au + "'>"
										+ Fai.encodeHtml(aw) + "</label>")
							} else {
								ah.push(a("radioC_" + ad, aw))
							}
							ah.push("</div>");
							if ((av % aj == aj - 1 || av == Y.length - 1)
									&& Q == R) {
								ah.push("</div>")
							}
						});
						ao = ah.join("")
					} else {
						if (T == l.Def_ContentList_Type_DROPDOWN) {
							var S = [];
							if (q) {
								S
										.push("<select class='dropDownSelect' id='dropDownSelect_"
												+ ad + "'>");
								y.each(Y, function(au, av) {
									S.push("<option value='"
											+ Fai.encodeHtml(av) + "'>"
											+ Fai.encodeHtml(av) + "</option>")
								});
								S.push("</select>")
							} else {
								S
										.push("<div class='dropDownNewSelect' id='dropDownNewSelect_"
												+ ad + "'></div>")
							}
							ao = S.join("")
						} else {
							if (T == l.Def_ContentList_Type_DESC) {
								ao = Fai.encodeHtml(aa)
							} else {
								if (T == l.Def_ContentList_Type_DATE) {
									var al = [];
									var ar = "bookingDate_" + ad;
									var am = aq.dateSetting;
									var ag = (am.type == i ? 0 : am.type) == 1;
									var X = {
										id : ar,
										dateSetting : am
									};
									s.push(X);
									al.push("<div class='siteFormMiddle'>");
									al
											.push("<input type='text' class='g_itext siteFormTimer "
													+ (ag ? "fk-startTime" : "")
													+ "' name='"
													+ ar
													+ "' id='"
													+ ar
													+ "' readonly />");
									if (ag) {
										var ai = "bookingDate_" + ad + "_end";
										var X = {
											id : ai,
											dateSetting : am
										};
										s.push(X);
										al.push("<span class='fk-timeUtile'>"
												+ LS.to + "</span>");
										al.push("<div class='fk-endTimeWrap'>");
										al
												.push("	<input type='text' class='fk-endTime g_itext siteFormTimer' name='"
														+ ai
														+ "' id='"
														+ ai
														+ "' readonly />");
										al
												.push("	<div _startId = '"
														+ ar
														+ "' class='J_endTimeMask fk-endTimeMask'></div>");
										al.push("</div>")
									}
									al.push("</div>");
									ao = al.join("")
								} else {
									if (T == l.Def_ContentList_Type_FILE_UPLOAD) {
										var ac = (aq.size > l.fileSizeLimit) ? l.fileSizeLimit
												: aq.size;
										var U = [];
										if (!aq.isAllFile) {
											var ab = (aq.dftl || "")
													+ (aq.cftl || "");
											var V = ab.split(" ");
											y.each(V, function(aw, au) {
												if (au.length > 0) {
													var av = "*." + au + ";";
													U.push(av)
												}
											})
										} else {
											U.push("*.*;")
										}
										f
												.push( {
													itemId : ad,
													buttonValue : l.siteFormSelectFile,
													fileSize : ac,
													srcjQueryUploadPath : l.srcjQueryUploadPath,
													fileTypeList : U
												});
										var ap = [];
										ap
												.push("<input type='button' class='fileUploadBtn' id='bookingUploadBtn_"
														+ ad
														+ "' value='"
														+ l.siteFormSelectFile
														+ "'/>");
										ap
												.push("<div id='bookingUploadFile_"
														+ ad
														+ "' class='bookingUploadFile' _tmpFileId='' style='display:none; margin: 8px 0 0 20px;'>"
														+ LS.siteFormSubmitNotSeletcFile
														+ "</div>");
										ap
												.push("<span id='bookingUploadDESC_"
														+ ad
														+ "' style='margin: 8px 0 0 1%; display:inline-block;'><span class='siteFormFUDescIcons newSiteFormFUDescIcons'></span>"
														+ l.siteFormFileSizeLimit
														+ "：" + ac + "M</span>");
										ao = ap.join("")
									} else {
										if (T == l.Def_ContentList_Type_PHONE) {
											var ae = [];
											if (ak) {
												if (q) {
													ae
															.push("<select class='phoneSelect' id='phoneSelect_"
																	+ ad + "'>");
													y
															.each(
																	l.mobileCtNameList,
																	function(
																			au,
																			av) {
																		ae
																				.push("<option value='"
																						+ av.ctName
																						+ "'>"
																						+ av.ctShowName
																						+ av.ctCode
																						+ "</option>")
																	});
													ae.push("</select>")
												} else {
													ae
															.push("<div class='phoneNewSelect' id='phoneNewSelect_"
																	+ ad
																	+ "'></div>")
												}
												ae
														.push("<input class='bookingPhoneWithCode' id='bookingPhoneNum_"
																+ ad
																+ "' type='number' onkeyup='(this.v=function(){this.value=this.value.replace(/[^0-9-]+/,\"\");}).call(this)'  oninput='if(value.length>11)value=value.slice(0,11)'/>");
												ao = ae.join("")
											} else {
												ao = "<input class='singleLineTextInput bookingPhoneNoCode' id='bookingPhoneNum_"
														+ ad
														+ "' type='text' onkeyup='(this.v=function(){this.value=this.value.replace(/[^0-9-]+/,\"\");}).call(this)' oninput='if(value.length>11)value=value.slice(0,11)'/>"
											}
										} else {
											if (T == l.Def_ContentList_Type_MAIL) {
												ao = "<input class='singleLineTextInput bookingMailInput' id='bookingMailInput_"
														+ ad
														+ "' type='text' name='input' />"
											} else {
												if (T == l.Def_ContentList_Type_IDENTITY) {
													ao = "<input class='singleLineTextInput bookingIdentityInput' id='bookingIdentityInput_"
															+ ad
															+ "' type='text' name='input' />"
												} else {
													if (T == l.Def_ContentList_Type_ADDRESS) {
														ao = d(aq)
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return ao
	}
	function g(Q, S) {
		y(k).off("click.nradio").on("click.nradio", ".jz-radio", function() {
			y(".R_" + Q).removeClass("jz-radio-checked");
			y(this).find("input[name=" + Q + "]").attr("checked", false);
			y(this).addClass("jz-radio-checked");
			y(this).find(".jz-radio-input").attr("checked", true)
		});
		var R = [];
		R.push("	<span class='jz-radio R_" + Q + "'>");
		R.push("		<span class='jz-radio-inner'></span>");
		R.push("		<input name='" + Q
				+ "' type='radio' class='jz-radio-input' value='"
				+ Fai.encodeHtml(S) + "'/>");
		R
				.push("		<span class='labelForRadio'>" + Fai.encodeHtml(S)
						+ "</span>");
		R.push("	</span>");
		return R.join("")
	}
	function a(Q, S) {
		y(k).off("click.ncheckbox").on("click.ncheckbox", ".jz-checkBox",
				function() {
					if (y(this).hasClass("jz-check-checked")) {
						y(this).removeClass("jz-check-checked");
						y(this).find(".jz-radio-input").attr("checked", false)
					} else {
						y(this).addClass("jz-check-checked");
						y(this).find(".jz-radio-input").attr("checked", true)
					}
				});
		var R = [];
		R.push("	<span class='bsCheckBox jz-checkBox C_" + Q + "'>");
		R.push("		<span class='jz-checkBox-inner'></span>");
		R
				.push("		<input name='"
						+ Q
						+ "' type='checkbox' style='display:none;' class='jz-radio-input' value='"
						+ Fai.encodeHtml(S) + "'/>");
		R.push("		<span class='labelForCheckBox'>" + Fai.encodeHtml(S)
				+ "</span>");
		R.push("	</span>");
		return R.join("")
	}
	function b(Q) {
		var R = function(T) {
			var Z = {
				container : y("body"),
				widgetClass : "selectTool",
				width : 75,
				id : 0,
				selectList : null,
				checkIndex : 0,
				onchange : null,
				selectIcon : false,
				selectListHeight : 185,
				selectItemHeight : 28,
				enable : false
			}, ab, aa = "", X, af, ag, ai, Y, S, ac, ah, U, aj, ad;
			ab = this.opts = y.extend( {}, Z, T, true);
			if (ab.selectList.length <= 0) {
				return
			}
			if (ab.selectList.length * ab.selectItemHeight < ab.selectListHeight) {
				ab.selectListHeight = ab.selectList.length
						* ab.selectItemHeight
			}
			Y = this;
			ai = ab.checkIndex;
			aa = '<div class="fk-select-widget J_select_widget '
					+ ab.widgetClass
					+ '" id="J_'
					+ ab.widgetClass
					+ ab.id
					+ '"><input class="seleInput" style="width:0; height:0; opacity:0; float:right;"/><div class="J_select_text_wrap f-select-text-wrap"><div class="f-select-text J_select_text '
					+ (ab.enable ? "selectEnable" : "")
					+ '" value="'
					+ ab.selectList[ai].value
					+ '">'
					+ Fai.encodeHtml(ab.selectList[ai].content)
					+ '</div><a class="f-select-arrow J_select_arrow"></a></div></div>';
			ab.container.append(aa);
			X = "";
			af = this.widgetDom = ab.container.find("#J_" + ab.widgetClass
					+ ab.id);
			E.dom.panel.find("#" + ab.container.attr("id") + "_select_list")
					.remove();
			E.dom.panel.append('<ul class="f-select-list J_select_list" id="'
					+ ab.container.attr("id") + '_select_list" style="height:'
					+ ab.selectListHeight + 'px; display:none;"></ul>');
			ag = E.dom.panel.find("#" + ab.container.attr("id")
					+ "_select_list");
			y.each(ab.selectList, function(ak, al) {
				X = '<li class="f-select-item J_select_item'
						+ (ak == ai ? " f-select-on " : "") + '" selectIndex="'
						+ ak + '" style="' + ab.selectItemHeight
						+ 'px;"><a class="J_radio_label" value="'
						+ Fai.encodeHtml(al.value) + '">'
						+ Fai.encodeHtml(al.content) + "</a></li>";
				ag.append(X);
				X = ""
			});
			this.itemDom = ac = ag.find(".J_select_item");
			S = ab.selectItemHeight * ab.selectList.length;
			if (ab.selectIcon) {
				var ae = "";
				ae = '<span class="J_select_img"></span>';
				this.itemDom.find(".J_radio_label").append(ae)
			}
			if (ab.selectListHeight < S) {
				ag.mCustomScrollbar( {
					theme : "select-theme"
				})
			}
			ag.hide();
			ad = af.find(".seleInput");
			ah = af.find(".J_select_text");
			ac.off("click.selectTool").on(
					"click.selectTool",
					function() {
						var an = y(this).find(".J_radio_label"), am = an
								.attr("value"), al = an.text(), ak = y(this)
								.index();
						ab.checkIndex = ak;
						ah.attr("value", am);
						ah.text(al);
						ag.slideUp(150);
						U.removeClass("f-select-ratate-arrow");
						ac.removeClass("f-select-on");
						y(this).addClass("f-select-on");
						if (!!ab.onchange) {
							ab.onchange(y(this), ak, Y)
						}
					});
			U = af.find(".J_select_arrow");
			aj = ab.container.parents("body");
			af.find(".J_select_text_wrap").off("click.selectTool").on(
					"click.selectTool",
					function(ak) {
						if (ab.container.length != 1) {
							return
						}
						if (ab.enable) {
							return
						}
						if (!!ag.is(":hidden")) {
							var al = ag.height();
							var am = ab.container.height()
									+ ab.container.offset().top + 10
									- y(window).scrollTop();
							if (am + al > Fai.top.$("body").height()) {
								am = ab.container.offset().top
										- ab.container.height() - al + 10
										- y(window).scrollTop()
							}
							ag.css( {
								width : ab.container.width(),
								position : "absolute",
								top : am,
								left : ab.container.offset().left
							});
							aj.find(".J_select_widget .J_select_arrow")
									.removeClass("f-select-ratate-arrow");
							ag.slideDown(150);
							U.addClass("f-select-ratate-arrow")
						} else {
							ag.slideUp(150);
							U.removeClass("f-select-ratate-arrow")
						}
						ad.focus();
						ak.stopPropagation()
					});
			ad.on("blur", function() {
				ag.slideUp(150);
				ag.parent().find(".J_select_arrow").removeClass(
						"f-select-ratate-arrow")
			});
			var V = "";
			var W = navigator.userAgent.toLowerCase();
			if (/msie/.test(W)) {
				V = "-ms-"
			} else {
				if (/chrome/.test(W) || /safari/.test(W) || /yandex/.test(W)) {
					V = "-webkit-"
				} else {
					if (/mozilla/.test(W)) {
						V = "-moz-"
					} else {
						if (/opera/.test(W)) {
							V = "-o-"
						} else {
							if (/konqueror/.test(W)) {
								V = "-khtml-"
							} else {
								V = ""
							}
						}
					}
				}
			}
			ag.css(V + "user-select", "none").attr("unselectable", "on").on(
					"selectstart mousedown", false)
		};
		y.extend(R.prototype, {
			selectValue : function(S) {
				this.itemDom.each(function() {
					var T = y(this).find(".J_radio_label").attr("value");
					if (S == T) {
						y(this).trigger("click");
						return
					}
				})
			},
			getValue : function() {
				return this.widgetDom.find(".J_select_text").attr("value")
			},
			destroy : function() {
				this.widgetDom.find(".J_select_list").mCustomScrollbar(
						"destroy");
				this.opts = null;
				this.widgetDom = null
			},
			hideList : function() {
				var S = this.widgetDom.find(".J_select_widget");
				S.slideUp(150);
				S.parent().find(".J_select_arrow").removeClass(
						"f-select-ratate-arrow")
			}
		});
		return new R(Q)
	}
	function d(S) {
		var Q = [], V = S.id, R = S.openMunicipalCode;
		if (q) {
			Q.push("<select class='addrSelect proSelect' id='proSelect_" + V
					+ "' _contentId='" + V + "'>");
			var U;
			var T;
			if (H) {
				U = site_cityUtil.getProvince()
			} else {
				U = site_cityUtil.getProvinceEn()
			}
			Q.push("<option _val='-1' value='-1'>" + l.siteFormPleaseSelect
					+ "</option>");
			y.each(U, function(W, X) {
				if (H) {
					Q.push("<option _val='" + X.name + "' value='" + X.id
							+ "'>" + site_cityUtil.simpleCityNameStr(X.name)
							+ "</option>")
				} else {
					Q.push("<option _val='" + X.name + "' value='" + X.id
							+ "'>" + site_cityUtil.simpleCityNameStrEn(X.name)
							+ "</option>")
				}
			});
			Q.push("</select>");
			Q.push("<select class='addrSelect citySelect' id='citySelect_" + V
					+ "' _contentId='" + V + "' disabled>");
			Q.push("<option _val='-1' value='-1'>" + l.siteFormPleaseSelect
					+ "</option>");
			Q.push("</select>");
			if (R) {
				Q
						.push("<select class='addrSelect countySelect' id='countySelect_"
								+ V + "' disabled>");
				Q.push("<option _val='-1' value='-1'>" + l.siteFormPleaseSelect
						+ "</option>");
				Q.push("</select>")
			}
			return Q.join("")
		} else {
			Q.push("<div class='addrNewSelect proNewSelect' id='proNewSelect_"
					+ V + "'></div>");
			Q
					.push("<div class='addrNewSelect cityNewSelect' id='cityNewSelect_"
							+ V + "'></div>");
			if (R) {
				Q
						.push("<div class='addrNewSelect countyNewSelect' id='countyNewSelect_"
								+ V + "'></div>")
			}
			return Q.join("")
		}
	}
	function z(U) {
		var V = U.fileSize;
		var T = U.itemId;
		var af = U.moduleId;
		var R = U.fileTypeList;
		var ac = U.buttonValue;
		var Q = U.isModuleButtonStyle;
		var aa = U.showType;
		var X = U.srcjQueryUploadPath;
		var ae;
		var ah;
		var S = document.documentElement || document.body;
		var W = y("#bookingUploadBtn_" + T);
		var Y = W.width();
		var ag;
		if (!Fai.isIE()) {
			var ab = {
				auto : true,
				fileTypeExts : R.join(""),
				multi : true,
				fileSizeLimit : V * 1024 * 1024,
				fileSplitSize : 20 * 1024 * 1024,
				breakPoints : true,
				isBurst : false,
				saveInfoLocal : false,
				showUploadedPercent : true,
				showUploadedSize : true,
				removeTimeout : 9999999,
				post_params : {
					app : 21,
					type : 0,
					fileUploadLimit : V
				},
				getFileSizeUrl : "/ajax/advanceUpload.jsp?cmd=_getUploadSize",
				uploader : "/ajax/advanceUpload.jsp?cmd=_mobiupload",
				onUploadSuccess : function(ai, ak) {
					var aj = y.parseJSON(ak);
					if (aj.success) {
						Fai.ing(Fai.format(LS.siteFormSubmitFileUploadSucess,
								Fai.encodeHtml(ai.name)), true);
						n("upload", aj, af, T)
					} else {
						Fai.ing("文件:" + ai.name + "，" + aj.msg)
					}
				},
				onUploadError : function(ai, aj) {
					y("#progressBody_" + ai.id).remove();
					y("#progressWrap_" + ai.id).remove();
					Fai.ing(Fai.format(LS.siteFormSubmitFileUploadSvrBusy, Fai
							.encodeHtml(ai.name)))
				}
			};
			function ad() {
				ae = W.uploadify(ab);
				W.on("click", function() {
					W.find("a")[0].click()
				})
			}
			if (typeof W.uploadify == "function") {
				ad()
			} else {
				ah = document.createElement("script");
				ah.src = X;
				ah.type = "text/javascript";
				S.appendChild(ah);
				ah.onload = function() {
					ad()
				}
			}
		} else {
			var Z = {
				file_post_name : "Filedata",
				upload_url : "/ajax/upsiteimg_h.jsp",
				button_placeholder_id : "bookingUploadBtn_" + T,
				file_size_limit : V + "MB",
				button_image_type : 6,
				file_queue_limit : 1,
				requeue_on_error : false,
				button_height : 32,
				button_width : 128,
				button_text : "<span class='fk_btText'>" + ac + "</span>",
				button_text_style : ".fk_btText{text-align:center; font-family: 微软雅黑; color: #333;}",
				button_text_top_padding : 6,
				post_params : {
					ctrl : "Filedata",
					app : 21,
					type : 0,
					isSiteForm : true
				},
				file_types : R.join(""),
				file_dialog_complete_handler : function(ai) {
					this._allSuccess = false;
					this.startUpload()
				},
				file_queue_error_handler : function(aj, ai, ak) {
					switch (ai) {
					case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
						Fai.ing(LS.siteFormSubmitCheckFileSizeErr, true);
						break;
					case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
						Fai.ing(LS.siteFormSubmitFileUploadNotAllow, true);
						break;
					case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:
						Fai.ing(Fai.format(
								LS.siteFormSubmitFileUploadOneTimeNum, "一"),
								true);
						break;
					default:
						Fai.ing(LS.siteFormSubmitFileUploadReSelect, true);
						break
					}
				},
				upload_success_handler : function(aj, ai) {
					var ak = jQuery.parseJSON(ai);
					this._allSuccess = ak.success;
					this._sysResult = ak.msg;
					if (ak.success) {
						Fai.ing(Fai.format(LS.siteFormSubmitFileUploadSucess,
								Fai.encodeHtml(aj.name)), true);
						n("upload", ak, af, T)
					} else {
						Fai.ing(LS.siteFormSubmitFileUploadFile + aj.name + "，"
								+ ak.msg)
					}
				},
				upload_error_handler : function(aj, ai, ak) {
					if (ai == -280) {
						Fai.ing(LS.siteFormSubmitFileUploadFileCancle, false)
					} else {
						if (ai == -270) {
							Fai.ing(Fai.format(
									LS.siteFormSubmitFileUploadFileExist, Fai
											.encodeHtml(aj.name)), true)
						} else {
							Fai.ing(Fai.format(
									LS.siteFormSubmitFileUploadSvrBusy, Fai
											.encodeHtml(aj.name)))
						}
					}
				},
				upload_complete_handler : function(ai) {
					if (ai.filestatus == SWFUpload.FILE_STATUS.COMPLETE) {
						setTimeout(function() {
							ae.startUpload()
						}, ae.upload_delay)
					} else {
						if (ai.filestatus == SWFUpload.FILE_STATUS.ERROR) {
							Fai.ing(Fai.format(
									LS.siteFormSubmitFileUploadSvrBusy, Fai
											.encodeHtml(ai.name)))
						}
					}
				},
				upload_start_handler : function(ai) {
					Fai.enablePopupWindowBtn(0, "save", false);
					Fai.ing(LS.siteFormSubmitFileUploadPrepare, false)
				},
				view_progress : function(ai, al, ak, aj) {
					Fai.ing(LS.siteFormSubmitFileUploadIng + aj + "%", false)
				}
			};
			ae = SWFUploadCreator.create(Z)
		}
	}
	function n(ae, aa, af, X) {
		if (ae == "upload") {
			var U = aa.id;
			var ac = aa.name;
			var S = aa.type;
			var Z = aa.size;
			var Y = aa.path;
			var T = aa.createTime;
			var Q = aa.groupId;
			var V = "";
			var R = 100;
			var ab = 100;
			var W = aa.fileId;
			var ad = y("#bookingUploadFile_" + X);
			y("#bookingUploadDESC_" + X).hide();
			ad.css("display", "inline-block");
			ad.html(ac);
			ad.attr("_tmpFileId", U).attr("_tmpFileName", ac).attr("title", ac)
					.attr("_fileId", W)
		}
	}
	function P(Q) {
		var R = [];
		R.push("pid=" + D);
		R.push("&cmd=getPanelData");
		R.push("&_colId=" + Fai.top._colId);
		R.push("&_extId=" + Fai.top._extId);
		y.ajax( {
			type : "get",
			cache : false,
			url : Site.genAjaxUrl("booking_h.jsp?") + R.join(""),
			error : function() {
				Fai.ing("服务繁忙，请稍候重试", false)
			},
			success : function(T) {
				var S = y.parseJSON(T);
				if (S.success) {
					l = S.pageData;
					K = l.css;
					o = l.moduleInfo;
					if (Fai.top._manageMode) {
						w = l.itemList
					}
					N();
					j()
				} else {
					Fai.ing("获取数据失败", false)
				}
			}
		})
	}
	function p() {
		var am = l.contentList, ap = l.Def_LIMIT_INPUT_MAXLENTH, W = l.Def_LIMIT_TEXTAREA_MAXLEN, ab = [], ao = [], af = true;
		if (am.length < 1) {
			return
		}
		for ( var ag = 0; ag < am.length; ag++) {
			var aq = am[ag];
			id = aq.id, name = aq.name, must = aq.must, type = aq.type,
					size = aq.size, openAreaCode = aq.openAreaCode,
					tmpItemContentList = {
						id : id,
						type : type,
						must : must
					};
			if (type == 0) {
				var ak = y.trim(y("#bookingSingleText_" + id).val());
				if (must && ak == "") {
					G(Fai.format(LS.siteFormSubmitInputIsEmpty, Fai
							.encodeHtml(name)));
					af = false;
					return false
				}
				if (ak.length > ap) {
					G(Fai.format(LS.siteFormSubmitInputMaxLength, Fai
							.encodeHtml(name), ap));
					af = false;
					return false
				}
				tmpItemContentList.val = ak
			} else {
				if (type == 1) {
					var R = y.trim(y("#bookingMultLine_" + id).val());
					if (must && R == "") {
						G(Fai.format(LS.siteFormSubmitInputIsEmpty, Fai
								.encodeHtml(name)));
						af = false;
						return false
					}
					if (R.length > W) {
						G(Fai.format(LS.siteFormSubmitInputMaxLength, Fai
								.encodeHtml(name), W));
						af = false;
						return false
					}
					tmpItemContentList.val = R
				} else {
					if (type == 2) {
						if (must
								&& y("input[name=radioR_" + id + "]:checked").length == 0) {
							G(Fai.format(LS.siteFormSubmitCheckIsEmpty, Fai
									.encodeHtml(name)));
							af = false;
							return false
						}
						if (y("input[name=radioR_" + id + "]:checked").length > 0) {
							tmpItemContentList.val = y(
									"input[name=radioR_" + id + "]:checked")
									.first().val()
						} else {
							tmpItemContentList.val = ""
						}
					} else {
						if (type == 3) {
							if (must
									&& y("input[name=radioC_" + id
											+ "]:checked").length == 0) {
								G(Fai.format(LS.siteFormSubmitCheckIsEmpty, Fai
										.encodeHtml(name)));
								af = false;
								return false
							}
							var ae = [];
							y("input[name=radioC_" + id + "]:checked").each(
									function(ar, at) {
										ae.push(y(this).val())
									});
							tmpItemContentList.val = ae.join("\n")
						} else {
							if (type == 4) {
								var Q = y(
										"#dropDownSelect_" + id
												+ " option:selected").val();
								if (!q) {
									Q = y("#dropDownNewSelect_" + id).find(
											".f-select-text").attr("value")
								}
								tmpItemContentList.val = Q
							} else {
								if (type == 5) {
									continue
								} else {
									if (type == 6) {
										var ak = y("#bookingDate_" + id).val(), U = aq.dateSetting ? aq.dateSetting.type
												: 0, Z = U == 1 ? y(
												"#bookingDate_" + id + "_end")
												.val() : "";
										if (must && ak == "") {
											G(Fai
													.format(
															LS.siteFormSubmitCheckIsEmpty,
															Fai
																	.encodeHtml(name)));
											af = false;
											return false
										}
										if (must && U == 1 && Z == "") {
											G(Fai
													.format(
															LS.siteFormSubmitCheckIsEmpty,
															Fai
																	.encodeHtml(name)));
											af = false;
											return false
										}
										if (U == 1) {
											if (y.trim(ak) || y.trim(Z)) {
												ak = ak + " 至 " + Z
											} else {
												ak = ""
											}
										}
										tmpItemContentList.val = ak
									} else {
										if (type == 7) {
											var T = y("#bookingUploadFile_"
													+ id);
											var aj = {};
											if (must
													&& T.attr("_tmpFileId") == "") {
												G(Fai
														.format(
																LS.siteFormSubmitCheckHasFileUpload,
																Fai
																		.encodeHtml(name)));
												af = false;
												return false
											}
											if (T.attr("_tmpFileId") == "") {
												tmpItemContentList.val = ""
											} else {
												tmpItemContentList.val = T
														.attr("_fileId");
												aj.tmpFileName = T
														.attr("_tmpFileName");
												aj.fileId = tmpItemContentList.val;
												aj.tmpFileId = T
														.attr("_tmpFileId");
												ao.push(aj)
											}
										} else {
											if (type == 8) {
												var al = y(
														"#bookingPhoneNum_"
																+ id).val();
												if (must && al == "") {
													G(Fai
															.format(
																	LS.siteFormSubmitInputIsEmpty,
																	Fai
																			.encodeHtml(name)));
													af = false;
													return false
												}
												if (must
														&& !Fai
																.isNationMobile(al)) {
													G(Fai
															.format(
																	LS.memberProfileItemCorrect,
																	Fai
																			.encodeHtml(name)));
													af = false;
													return false
												}
												if (openAreaCode) {
													var S = "";
													if (q) {
														S = y(
																"#phoneSelect_"
																		+ id)
																.val()
													} else {
														S = y(
																"#phoneNewSelect_"
																		+ id)
																.find(
																		".f-select-text")
																.attr("value")
													}
													if (y.trim(al)) {
														tmpItemContentList.val = S
																+ al
													} else {
														tmpItemContentList.val = ""
													}
												} else {
													tmpItemContentList.val = al
												}
											} else {
												if (type == 9) {
													var ah = y(
															"#bookingMailInput_"
																	+ id).val();
													if (must && ah == "") {
														G(Fai
																.format(
																		LS.siteFormSubmitInputIsEmpty,
																		Fai
																				.encodeHtml(name)));
														af = false;
														return false
													}
													if (must
															&& !Fai.isEmail(ah)) {
														G(Fai
																.format(
																		LS.memberSignupUserAddItemCorrect,
																		Fai
																				.encodeHtml(name)));
														af = false;
														return false
													}
													tmpItemContentList.val = ah
												} else {
													if (type == 10) {
														var ac = y(
																"#bookingIdentityInput_"
																		+ id)
																.val();
														if (must && ac == "") {
															G(Fai
																	.format(
																			LS.siteFormSubmitInputIsEmpty,
																			Fai
																					.encodeHtml(name)));
															af = false;
															return false
														}
														if (must
																&& !Fai
																		.isCardNo(ac)) {
															G(Fai
																	.format(
																			LS.memberSignupUserAddItemCorrect,
																			Fai
																					.encodeHtml(name)));
															af = false;
															return false
														}
														tmpItemContentList.val = ac
													} else {
														if (type == 11) {
															var aa = y(
																	"#proSelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"value");
															var ai = y(
																	"#citySelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"value");
															var an = y(
																	"#countySelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"value");
															var V = y(
																	"#proSelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"_val");
															var X = y(
																	"#citySelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"_val");
															var Y = y(
																	"#countySelect_"
																			+ id)
																	.find(
																			"option:selected")
																	.attr(
																			"_val");
															if (!q) {
																aa = y(
																		"#proNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.attr(
																				"value");
																ai = y(
																		"#cityNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.attr(
																				"value");
																an = y(
																		"#countyNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.attr(
																				"value");
																V = y(
																		"#proNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.text();
																X = y(
																		"#cityNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.text();
																Y = y(
																		"#countyNewSelect_"
																				+ id)
																		.find(
																				".f-select-text")
																		.text()
															}
															if (must
																	&& (aa == "-1" || ai == "-1")) {
																G(Fai
																		.format(
																				LS.siteFormSubmitInputIsEmpty,
																				Fai
																						.encodeHtml(name)));
																af = false;
																return false
															}
															V = aa == -1 ? ""
																	: V;
															X = ai == -1 ? ""
																	: X;
															Y = an == -1 ? ""
																	: Y;
															tmpItemContentList.val = V
																	+ X + Y
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			ab.push(tmpItemContentList)
		}
		var ad = y("#bookingVolidationCode").val();
		if (l.validation && ad == "") {
			G(Fai.format(LS.siteFormSubmitInputIsEmpty, LS.loginDialogCaptcha));
			af = false;
			return false
		}
		if (!af) {
			return false
		}
		G(LS.siteFormSubmitIng);
		if ((typeof (y(k).data("bookingHasCommit")) == "undefined")
				|| y(k).data("bookingHasCommit") == false) {
			y(k).data("bookingHasCommit", true);
			y.ajax( {
				type : "post",
				url : "ajax/booking_h.jsp",
				data : "cmd=add&pid=" + l.pid + "&validateCode=" + ad
						+ "&submitContentList=" + Fai.encodeUrl(y.toJSON(ab))
						+ "&tmpFileList=" + Fai.encodeUrl(y.toJSON(ao)),
				error : function() {
					y(k).data("bookingHasCommit", false);
					J(false)
				},
				success : function(ar) {
					y(k).data("bookingHasCommit", false);
					ar = y.parseJSON(ar);
					if (ar.success) {
						var at = o[l.Def_BookingSubmit_JUMP_URL];
						setTimeout(function() {
							at.lt == 1 ? (function() {
								Fai.top.location.href = o.jumpToUrl
							})() : Fai.top.location.reload();
							I()
						}, 2500);
						J(true, "", 2000)
					} else {
						if (ar.rt == -401) {
							J(false, ar.msg);
							y(".validateInputAndCode #bookingVolidationCode")
									.val("");
							y(".validateInputAndCode .voteCodePic").trigger(
									"click")
						} else {
							if (ar.rt == -4) {
								J(false, LS.bookingSubmitFullTips)
							} else {
								if (ar.rt == -7) {
									J(false, LS.siteImgFull)
								} else {
									if (ar.rt == -2) {
										J(false, LS.argsError)
									} else {
										J(false, LS.memberLoginError)
									}
								}
							}
						}
					}
				}
			})
		}
	}
	function G(T) {
		var S = E.dom;
		S.bookingPanelMsg.html(T);
		var R = S.content.width(), Q = S.bookingPanelMsg.width();
		S.bookingPanelMsg.css("left", (R - Q) / 2 + "px");
		S.bookingPanelMsg.show();
		setTimeout(function() {
			S.bookingPanelMsg.hide()
		}, 3000)
	}
	function J(R, U, Q) {
		var S = {
			htmlContent : Site.getDialogContent(false, Fai.format(U ? U
					: LS.siteFormSubmitError)),
			width : 205,
			height : 78
		};
		if (R) {
			var T = [];
			T
					.push("<div class='booking-sweet-alert' style='margin-top: 50px;'>");
			T.push("	<div class='sa-icon sa-success animate'>");
			T.push("		<span class='sa-line sa-tip animateSuccessTip'></span>");
			T
					.push("		<span class='sa-line sa-long animateSuccessLong'></span>");
			T.push("		<div class='sa-placeholder'></div>");
			T.push("		<div class='sa-fix'></div>");
			T.push("	</div>");
			T.push("	<div class='submitSuccessTitle'>" + LS.siteFormSubmitOk
					+ "</div>");
			T.push("</div>");
			S = {
				htmlContent : T.join(""),
				width : 500,
				height : 320,
				autoClose : Q || 0
			}
		}
		Site.popupBox(S)
	}
	function O() {
		if (q) {
			y(".proSelect").change(
					function() {
						var Q = y(this).attr("_contentId");
						var S = y(this).val();
						var T = [];
						if (H) {
							T = site_cityUtil.getCities(S)
						} else {
							T = site_cityUtil.getCitiesEn(S)
						}
						var R = [];
						R.push("<option _val='-1' value='-1'>"
								+ l.siteFormPleaseSelect + "</option>");
						y.each(T, function(U, V) {
							if (H) {
								R.push("<option _val='"
										+ V.name
										+ "' value='"
										+ V.id
										+ "'>"
										+ site_cityUtil
												.simpleCityNameStr(V.name)
										+ "</option>")
							} else {
								R.push("<option _val='"
										+ V.name
										+ "' value='"
										+ V.id
										+ "'>"
										+ site_cityUtil
												.simpleCityNameStrEn(V.name)
										+ "</option>")
							}
						});
						y("#citySelect_" + Q).removeAttr("disabled").html(
								R.join(""))
					});
			y(".citySelect").change(
					function() {
						var R = y(this).attr("_contentId");
						var T = y(this).val();
						var Q = [];
						if (H) {
							Q = site_cityUtil.getCounty(T)
						} else {
							Q = site_cityUtil.getCountyEn(T)
						}
						var S = [];
						S.push("<option _val='-1' value='-1'>"
								+ l.siteFormPleaseSelect + "</option>");
						y.each(Q, function(U, V) {
							if (H) {
								S.push("<option _val='"
										+ V.name
										+ "' value='"
										+ V.id
										+ "'>"
										+ site_cityUtil
												.simpleCityNameStr(V.name)
										+ "</option>")
							} else {
								S.push("<option _val='"
										+ V.name
										+ "' value='"
										+ V.id
										+ "'>"
										+ site_cityUtil
												.simpleCityNameStrEn(V.name)
										+ "</option>")
							}
						});
						y("#countySelect_" + R).removeAttr("disabled").html(
								S.join(""))
					})
		}
	}
	function B() {
		if (q) {
			return
		}
		var Q = [];
		y.each(l.mobileCtNameList, function(R, S) {
			Q.push( {
				content : (S.ctShowName + S.ctCode),
				value : S.ctName
			})
		});
		y
				.each(
						l.contentList,
						function(V, S) {
							var R = S.id, X = S.type, Y = S.input;
							if (X == l.Def_ContentList_Type_PHONE
									&& S.openAreaCode) {
								b( {
									container : y("#phoneNewSelect_" + R),
									widgetClass : "phoneCode",
									id : "phoneNewSelect",
									checkIndex : 0,
									width : 120,
									selectList : Q,
									onchange : function() {
									}
								})
							} else {
								if (X == l.Def_ContentList_Type_DROPDOWN) {
									var T = [];
									var W = Y.split("\n");
									y.each(W, function(ab, ac) {
										T.push( {
											content : ac,
											value : ac
										})
									});
									b( {
										container : y("#dropDownNewSelect_" + R),
										widgetClass : "drowDown",
										id : "dropDownNewSelect_",
										checkIndex : 0,
										width : 120,
										selectList : T,
										onchange : function() {
										}
									})
								} else {
									if (X == l.Def_ContentList_Type_ADDRESS) {
										var Z;
										if (H) {
											Z = site_cityUtil.getProvince()
										} else {
											Z = site_cityUtil.getProvinceEn()
										}
										var U = [];
										U.push( {
											content : l.siteFormPleaseSelect,
											value : -1
										});
										y.each(Z, function(ab, ac) {
											U.push( {
												content : ac.name,
												value : ac.id
											})
										});
										var aa = b( {
											container : y("#proNewSelect_" + R),
											widgetClass : "proAddr",
											id : "proNewSelect",
											checkIndex : 0,
											width : 120,
											selectList : U,
											onchange : function() {
												y("#countyNewSelect_" + R)
														.empty();
												b( {
													container : y("#countyNewSelect_"
															+ R),
													widgetClass : "cityAddr",
													id : "countyNewSelect_",
													checkIndex : 0,
													width : 120,
													selectList : [ {
														content : l.siteFormPleaseSelect,
														value : -1
													} ],
													enable : true,
													onchange : function() {
													}
												});
												var ae;
												var ad = aa.getValue();
												if (H) {
													ae = site_cityUtil
															.getCities(ad)
												} else {
													ae = site_cityUtil
															.getCitiesEn(ad)
												}
												var ab = [];
												ab
														.push( {
															content : l.siteFormPleaseSelect,
															value : -1
														});
												y.each(ae, function(af, ag) {
													ab.push( {
														content : ag.name,
														value : ag.id
													})
												});
												y("#cityNewSelect_" + R)
														.empty();
												var ac = b( {
													container : y("#cityNewSelect_"
															+ R),
													widgetClass : "cityAddr",
													id : "cityNewSelect",
													checkIndex : 0,
													width : 120,
													selectList : ab,
													onchange : function() {
														var af;
														var ah = ac.getValue();
														if (H) {
															af = site_cityUtil
																	.getCounty(ah)
														} else {
															af = site_cityUtil
																	.getCountyEn(ah)
														}
														var ag = [];
														ag
																.push( {
																	content : l.siteFormPleaseSelect,
																	value : -1
																});
														y
																.each(
																		af,
																		function(
																				ai,
																				aj) {
																			ag
																					.push( {
																						content : aj.name,
																						value : aj.id
																					})
																		});
														if (S.openMunicipalCode) {
															y(
																	"#countyNewSelect_"
																			+ R)
																	.empty();
															b( {
																container : y("#countyNewSelect_"
																		+ R),
																widgetClass : "cityAddr",
																id : "countyNewSelect_",
																checkIndex : 0,
																width : 120,
																selectList : ag,
																onchange : function() {
																}
															})
														}
													}
												})
											}
										});
										b( {
											container : y("#cityNewSelect_" + R),
											widgetClass : "cityAddr",
											id : "cityNewSelect",
											checkIndex : 0,
											width : 120,
											selectList : [ {
												content : l.siteFormPleaseSelect,
												value : -1
											} ],
											enable : true,
											onchange : function() {
											}
										});
										b( {
											container : y("#countyNewSelect_"
													+ R),
											widgetClass : "cityAddr",
											id : "countyNewSelect_",
											checkIndex : 0,
											width : 120,
											selectList : [ {
												content : l.siteFormPleaseSelect,
												value : -1
											} ],
											enable : true,
											onchange : function() {
											}
										})
									}
								}
							}
						})
	}
	function m() {
		O();
		B();
		Site.siteFormTimeBtn(s);
		if (Fai.top._manageMode) {
			y(".fileUploadBtn").click(function() {
				G("当前为管理态状态，文件上传无效")
			});
			y("#bookingSubmitBtn .s_ibutton").click(function() {
				G("当前为管理态状态，提交无效")
			});
			C()
		} else {
			y.each(f, function(R, Q) {
				z(Q)
			});
			y("#bookingSubmitBtn .s_ibutton").click(function() {
				p()
			})
		}
		if (Fai.top
				.$("#fk-bookingSubmitPanel f-innerContent>.mCustomScrollbar").length < 1) {
			Fai.top.$("#fk-bookingSubmitPanel .tableWrap").mCustomScrollbar( {
				theme : "fk-gray",
				advanced : {
					updateOnContentResize : true
				},
				axis : "y"
			})
		}
	}
	function C() {
		var R = E.dom.content;
		if (R.length < 0) {
			return
		}
		if (E.dom.content.find(".J_resizableTip").length > 0) {
			return
		}
		var Q = "<div class='ui-resizable-handle ui-resizable-e funPanelResizeHandle' _dir='0' style='z-index: 1000;'></div><div class='ui-resizable-handle ui-resizable-w funPanelResizeHandle' _dir='1' style='z-index: 1000;'></div><div class='ui-resizable-handle ui-resizable-s funPanelResizeHandle' _dir='2' style='z-index: 1000;'></div><div class='ui-resizable-handle ui-resizable-n funPanelResizeHandle' _dir='3' style='z-index: 1000;'></div>";
		R.append(y(Q));
		R
				.append("<a href='javascript:;' class='J_resizableTip ui-resizable-cancelTip fk-resizable-cancelTip "
						+ (x == L && c == r ? "J_resizableTipHide" : "")
						+ "' id='J_resizableTip_44' style='z-index:9999;' _faiscoTip='还原默认宽度和高度'></a>");
		E.dom.content.find(".J_resizableTip").click(function() {
			var U = (Fai.top.$("body").width() - c) / 2;
			U = U < 0 ? 0 : U;
			var T = (Fai.top.$("body").height() - x) / 2;
			T = T < 0 ? 0 : T;
			E.dom.content.css( {
				width : +c,
				height : x,
				left : U,
				top : T
			});
			E.dom.content.find("#tableWrap").css("height", (x - 110));
			y(this).hide();
			S(c, x)
		});
		R
				.children(".ui-resizable-handle")
				.off("mousedown.pzresize")
				.on(
						"mousedown.pzresize",
						function(V) {
							if (V.button != 0) {
								return
							}
							var U = {
								clientX : V.clientX,
								clientY : V.clientY
							}, T = R.width();
							startHeight = R.height();
							handle = y(this), documentElem = y(document);
							direction = parseInt(handle.attr("_dir"));
							documentElem
									.off("mousemove.pzresize")
									.on(
											"mousemove.pzresize",
											function(aa) {
												y("#fk-moduleToolbar44").hide();
												E.dom.content.find(
														".J_resizableTip")
														.hide();
												var W = {
													clientX : aa.clientX,
													clientY : aa.clientY
												}, ab = 0, Z = R.width();
												resizeHeight = R.height();
												switch (direction) {
												case 0:
													ab = parseInt(W.clientX
															- U.clientX);
													Z = T + (ab * 2);
													break;
												case 1:
													ab = parseInt(W.clientX
															- U.clientX);
													Z = T - (ab * 2);
													break;
												case 2:
													ab = parseInt(W.clientY
															- U.clientY);
													resizeHeight = startHeight
															+ (ab * 2);
													break;
												case 3:
													ab = parseInt(W.clientY
															- U.clientY);
													resizeHeight = startHeight
															- (ab * 2);
													break;
												default:
												}
												Z = Z < 450 ? 450 : Z;
												resizeHeight = resizeHeight < 100 ? 100
														: resizeHeight;
												if (direction < 2) {
													var Y = (Fai.top.$("body")
															.width() - Z) / 2;
													Y = Y <= 20 ? 20 : Y;
													if (Y > 20) {
														R.css("width", Z);
														E.dom.content.css(
																"left", Y)
													}
												} else {
													if (direction < 4) {
														var X = (Fai.top.$(
																"body")
																.height() - resizeHeight) / 2;
														X = X <= 20 ? 20 : X;
														if (X > 20) {
															R
																	.css(
																			"height",
																			resizeHeight);
															E.dom.content
																	.find(
																			"#tableWrap")
																	.css(
																			"height",
																			(resizeHeight - 110));
															E.dom.content.css(
																	"top", X)
														}
													}
												}
											});
							documentElem.off("selectstart.pzsel").on(
									"selectstart.pzsel", function() {
										return false
									});
							documentElem.off("mouseup.pzresize").on(
									"mouseup.pzresize",
									function(W) {
										documentElem.off("mousemove.pzresize")
												.off("mouseup.pzresize").off(
														"selectstart.pzsel");
										S(R.width(), R.height())
									})
						});
		function S(U, T) {
			var V = {};
			V.w = U;
			V.h = T;
			y.ajax( {
				type : "get",
				cache : false,
				url : Site.genAjaxUrl("module_h.jsp?")
						+ "cmd=set&id=44&style=104&pattern="
						+ Fai.encodeUrl(JSON.stringify(V)),
				error : function() {
					Fai.ing("服务繁忙，请稍候重试", false)
				},
				success : function(X) {
					var W = jQuery.parseJSON(X);
					if (W.success) {
						r = U;
						L = T;
						if (x == L && c == r) {
							E.dom.content.find(".J_resizableTip").addClass(
									"J_resizableTipHide")
						} else {
							E.dom.content.find(".J_resizableTip").removeClass(
									"J_resizableTipHide")
						}
					} else {
						Fai.ing(W.msg, false)
					}
				}
			})
		}
	}
	function e() {
		var R = E.dom, Q = R.panel, S = R.panelBtn;
		S.close.click(function() {
			I()
		});
		R.contentBg.click(function() {
			I()
		});
		R.panel.on("mousewheel DOMMouseScroll", function(T) {
			return false
		})
	}
	function A(Q) {
		var R = E.dom;
		R.panel = Fai.top.$("#fk-bookingSubmitPanel");
		R.content = R.panel.find(k);
		R.contentBg = R.panel.find(".J_contentBg");
		R.bookingPanelMsg = R.panel.find("#bookingPanelMsg");
		R.innerContent = R.panel.find("#f-innerContent");
		R.tableWrap = R.panel.find("#tableWrap");
		R.panelBtn = {};
		R.panelBtn.close = R.panel.find(".J_close");
		if (typeof Q.func == "function") {
			setTimeout(function() {
				Q.func.apply(E, arguments)
			}, 30)
		}
	}
	function j() {
		M( {
			func : function() {
				var Q = E.dom;
				if (Q.panel && Q.panel.length > 0) {
					if (Q.panel.is(":hidden")) {
						Q.panel.show()
					}
				} else {
					Fai.top.$("#fk-bookingSubmitPanel").show()
				}
			}
		});
		if (Fai.top._manageMode && w && w.length > 0) {
			jzUtils.run( {
				name : "moduleEditTool.init",
				callMethod : true
			}, {
				id : 44,
				isDialog : true,
				toolList : w
			})
		}
	}
	function I() {
		F();
		D = 0;
		Fai.top.$("#fk-bookingSubmitPanel").find(".J_content").trigger(
				"mouseleave.moduleEdit").end();
		var Q = document.getElementById("fk-bookingSubmitPanel");
		if (Q != null) {
			Q.parentNode.removeChild(Q)
		}
	}
	function F() {
		K = "";
		w = [];
		s = [];
		f = [];
		l = {}
	}
	E.init = function(Q) {
		I();
		var R = JSON.parse(Q);
		D = R.pid;
		L = L == 0 ? R.panelHeight : L;
		r = r == 0 ? R.panelWidth : r;
		Fai.top.$("body").append(v().join(""));
		A( {
			func : e
		});
		P()
	};
	E.refresh = function() {
		E.dom.innerContent.empty();
		F();
		P()
	};
	function M(Q) {
		if (Fai.top.$("link[href='" + K + "']").length < 1
				&& y.trim(K).length > 0) {
			Site.demandLoadCss(K, function() {
				if (typeof Q.func == "function") {
					Q.func.apply(E, arguments)
				}
			})
		} else {
			if (typeof Q.func == "function") {
				Q.func.apply(E, arguments)
			}
		}
	}
})(jQuery, Site.bookingSubmitPanel);