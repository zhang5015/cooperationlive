// var _faiAjax = function () {
//     // for regexp
//     var r = /\?/;
//     var _o = {
//         type: "get",
//         url: "",
//         data: "",
//         error: function () {
//         },
//         success: function () {
//         }
//     };
//     var _sendRequest = function (o) {
//         var xmlhttp = null;
//         // init option code
//         o.type = o.type || _o.type;
//         o.url = o.url || _o.url;
//         o.data = o.data || _o.data;
//         o.error = o.error || _o.error;
//         o.success = o.success || _o.success;
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome,
//             // Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             return;
//         }
//         // the instructions param takes the form of an
//         // eval statement
//         if (o.type != "post") {
//             o.url += (this.r.test(o.url) ? "&" : "?") + o.data;
//             xmlhttp.open("GET", o.url, true);
//             xmlhttp.onreadystatechange = function () {
//                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                     o.success(xmlhttp.responseText);
//                 } else if (o.error) {
//                     o.error();
//                 }
//             }
//             xmlhttp.send();
//         } else {
//             xmlhttp.open("POST", o.url, true);
//             // Send the proper header information
//             // along with the request
//             xmlhttp.setRequestHeader("Content-type",
//                 "application/x-www-form-urlencoded; charset=UTF-8");
//             xmlhttp.onreadystatechange = function () {
//                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                     o.success(xmlhttp.responseText);
//                 } else {
//                     o.error();
//                 }
//             }
//             xmlhttp.send(o.data);
//         }
//     }
//     return {
//         ajax: function (option) {
//             try {
//                 // 此次调用的错误不让抛出给window。防止函数重入
//                 _sendRequest(option);
//             } catch (e) {
//                 // alert(e);
//             }
//         }
//     };
// }();
var _jsErrCahche = [];
window.onerror = function (sMsg, sUrl, sLine) {
    if (typeof Mobi == 'undefined') {
        if ((window.DocumentTouch && document instanceof window.DocumentTouch)
            || 'ontouchstart' in document.documentElement) {
            alert('您的网页未加载完成，请尝试按“刷新”重新加载。');
        } else {
            alert('您的网页未加载完成，请尝试按“CTRL+功能键F5”重新加载。');
        }

    }
    if (sLine < 1 || typeof sMsg != 'string' || sMsg.length < 1) {
        return;
    }

    var log = "Error:" + sMsg + ";Line:" + sLine + ";Url:" + sUrl
        + ";UserAgent:" + navigator.userAgent;
    var alertLog = "Error:" + sMsg + "\n" + "Line:" + sLine + "\n"
        + "Url:" + sUrl + "\n";
    var encodeUrl = function (url) {
        return typeof url === "undefined" ? ""
            : encodeURIComponent(url);
    };

    // var ajax = true;
    // var obj = {
    //     'm': sMsg,
    //     'u': sUrl,
    //     'l': sLine
    // };
    // for (var i = 0; i < _jsErrCahche.length; i++) {
    //     if (_jsErrCahche[i].m == obj.m && _jsErrCahche[i].u == obj.u
    //         && _jsErrCahche[i].l == obj.l) {
    //         ajax = false;
    //         break;
    //     }
    // }

    // if (ajax) {
    //     _jsErrCahche.push(obj);
    //     _faiAjax.ajax({
    //         type: "post",
    //         url: "ajax/logJsErr.php?cmd=jsErr",
    //         data: 'msg=' + encodeUrl(log)
    //     });
    // }
    // if (false) {
    //     console.log(alertLog);
    // }
};

if (typeof Fai == 'undefined') {
    Fai = {};
    // 解决页面被嵌套在iframe的场景

    Fai.top = window;

}

Mobi.bookingBoxBind(false);

Fai.top._isFaiHost = true;
Fai.top._bannerData = {
    "showType": 0,
    "bn": 2,
    "b": [
        {
            "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
            "t": 1,
            "lt": 0,
            "u": "",
            "ide": "",
            "col": 0,
            "aj": "",
            "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI?f=AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
            "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!640x640.jpg",
            "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        },
        {
            "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
            "t": 1,
            "lt": 0,
            "u": "",
            "ide": "",
            "col": 0,
            "aj": "",
            "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI?f=AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
            "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!640x640.jpg",
            "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        }],
    "c": [
        {
            "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
            "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
            "t": 1,
            "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        },
        {
            "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
            "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
            "t": 1,
            "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
            "w": 640,
            "h": 300
        }],
    "h": false,
    "st": 6,
    "et": 1
}; // 横幅数据
Fai.top._resRoot = 'http://m.cooperationlive.com';
Fai.top._templateFrameId = 1027;
Fai.top._templateLayoutId = 4;
Fai.top._mobiSiteTitleChanged = 0; // 用于记录网站标题是否有改动
Fai.top._mobiSiteTitle = {
    "fontType": 0,
    "align": 0,
    "font": {
        "size": 12,
        "family": "",
        "colorType": 0,
        "color": "#000"
    },
    "name": "网站模板-文化传媒",
    "bgType": "0",
    "bgFont": {
        "color": "#000",
        "alpha": 100
    },
    "bgImgFileId": "",
    "bgImgStyle": "1",
    "mbt": 0,
    "mbc": {
        "color": "#000",
        "alpha": 100
    },
    "mbi": "",
    "mbit": 1,
    "mths": 0
}; // 网站标题数据
Fai.top._onlineServiceJson = {
    "serviceId": {
        "serviceId": 6
    },
    "phone": {
        "open": true,
        "type": 1,
        "fName": "电话咨询",
        "phoneInfo": [{
            "name": "电话咨询",
            "number": ""
        }],
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-call1",
            "content": "\\e62c",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "phone"
    },
    "sms": {
        "open": true,
        "name": "信息咨询",
        "number": "",
        "type": 2,
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-mail1",
            "content": "\\e6a0",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "sms"
    },
    "map": {
        "open": true,
        "name": "在线地图",
        "city": "",
        "mark": "",
        "d_address": "",
        "type": 3,
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-gps1",
            "content": "\\e67c",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "map"
    },
    "msg": {
        "open": true,
        "name": "在线留言",
        "type": 4,
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-message1",
            "content": "\\e6b2",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "msg"
    },
    "qq": {
        "open": true,
        "type": 5,
        "fName": "QQ客服",
        "qqInfo": [{
            "name": "QQ客服",
            "number": ""
        }],
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-qq1",
            "content": "\\e6ca",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "qq"
    },
    "weChat": {
        "open": false,
        "name": "微信客服",
        "type": -2,
        "code": "",
        "baseSetting": {
            "c": 0,
            "i": 0,
            "id": 0,
            "iconType": 0,
            "colIconType": 0,
            "colIconCusType": 0,
            "classname": "faisco-icons-M001038",
            "content": "\\eb25",
            "color": "",
            "iconFileId": ""
        },
        "typeStr": "weChat"
    }
};// 在线客服
Fai.top._openOnlineService = true;
Fai.top._manageMode = false;
Fai.top.sessionMemberId = 0;
Fai.top.memberName = "";
Fai.top._colInfo = {
    "aid": 16194071,
    "wid": 0,
    "id": 3,
    "type": 3,
    "flag": 0,
    "moduleList": [303, 314, 315, 316, 324, 317, 318, 319, 320, 325,
        321, 322, 323, 308],
    "moduleHidden": [301],
    "createTime": 1519524363000,
    "updateTime": 1499856878000,
    "authMemberLevelId": 0,
    "extId": 0,
    "other": {
        "pgt": 0,
        "pgb": {
            "type": 0,
            "catalogList": [],
            "s": 4
        }
    },
    "name": "首页",
    "defaultName": "首页",
    "url": "/mobible.php",
    "valid": true,
    "baseSetting": {
        "c": 0,
        "i": 0,
        "iconType": 0,
        "id": 0,
        "content": "",
        "classname": "",
        "color": "",
        "colIconType": 0,
        "colIconCusType": 0,
        "iconFileId": "",
        "jumpCtrl": {
            "ide": "",
            "columnType": 0
        }
    },
    "columnStyle": {
        "s": 2
    },
    "title": {
        "fontType": 0,
        "align": 0,
        "font": {
            "size": 12,
            "family": "",
            "colorType": 0,
            "color": "#000"
        },
        "bgType": "0",
        "bgFont": {
            "color": "#000",
            "alpha": 100
        },
        "bgImgFileId": "",
        "bgImgStyle": "1",
        "mbt": 0,
        "mbc": {
            "color": "#000",
            "alpha": 100
        },
        "mbi": "",
        "mbit": 1,
        "mths": 0
    },
    "logo": {
        "i": "",
        "h": true,
        "a": 1,
        "style": 0,
        "marginType": 0,
        "margin": {
            "top": 0,
            "bottom": 0,
            "left": 0,
            "right": 0
        }
    },
    "banner": {
        "showType": 0,
        "h": false,
        "bn": 1,
        "b": [{
            "i": "1",
            "t": 0
        }],
        "st": 6,
        "et": 1,
        "c": []
    },
    "independent": false,
    "allowed": true,
    "selectable": true,
    "forbid": false
};
Fai.top._lcid = 2052; // 当前的语言版本
Fai.top._serviceList = [{
    "serviceType": "0",
    "serviceAccount": "10000",
    "showFont": "QQ客服",
    "showType": true,
    "isFontIcon": "true",
    "color": "rgb(238, 82, 102)",
    "fileId": "",
    "classname": "faisco-icons-scQq",
    "filePath": ""
}]; // 商城主题在线客服
Fai.top._mallService = 1;
Fai.top.inTabMaqueeHelper = {}; // 记录标签模块内子模块的动画函数
Fai.top._isBUser = true;
Fai.top._webDebug = false; // 本地环境(独立开发也是true)
Fai.top._jzProUrl = '';
Fai.top._portalHost = '';
Fai.top._homeHost = '';
//    Fai.top._jzProUrl = 'jz.faisco.com';
//    Fai.top._portalHost = 'www.faisco.cn';
//    Fai.top._homeHost = 'www.faisco.com';

jm(document)
    .ready(
        function () {
            Mobi.ajaxLoadModuleDom(3, 0, {
                "_ajaxLoadModuleIDList": [],
                "fullUrl": "http://m.cooperationlive.com/",
                "topBarOptionInfo": {
                    "mobiMallOpen": false
                }
            });
//                        // 判断该栏目是否被删除
//                        if (jm.isEmptyObject(Fai.top._colInfo)) {
//                            alert("该栏目已经删除，点击确定后，将返回到首页");
//                            document.location.href = "/index.php"
//                        }
            Mobi.viewPageBeforeInit();
            // 绑定退出事件
            jm(window)
                .bind(
                    "load",
                    function () {
                        // 当前模块
                        // start
                        Mobi.initSwipe('bannerSwipe', {
                            "showType": 0,
                            "bn": 2,
                            "b": [{
                                "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                "t": 1,
                                "lt": 0,
                                "u": "",
                                "ide": "",
                                "col": 0,
                                "aj": "",
                                "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI?f=AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!640x640.jpg",
                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                "w": 640,
                                "h": 300
                            }, {
                                "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                "t": 1,
                                "lt": 0,
                                "u": "",
                                "ide": "",
                                "col": 0,
                                "aj": "",
                                "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI?f=AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!640x640.jpg",
                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                "w": 640,
                                "h": 300
                            }],
                            "c": [{
                                "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                "t": 1,
                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                "w": 640,
                                "h": 300
                            }, {
                                "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                "t": 1,
                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                "w": 640,
                                "h": 300
                            }],
                            "h": false,
                            "st": 6,
                            "et": 1
                        });
                        if (!Mobi.bannerAnimate
                            .init({
                                "showType": 0,
                                "bn": 2,
                                "b": [
                                    {
                                        "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                        "t": 1,
                                        "lt": 0,
                                        "u": "",
                                        "ide": "",
                                        "col": 0,
                                        "aj": "",
                                        "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI?f=AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!640x640.jpg",
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    },
                                    {
                                        "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                        "t": 1,
                                        "lt": 0,
                                        "u": "",
                                        "ide": "",
                                        "col": 0,
                                        "aj": "",
                                        "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI?f=AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!640x640.jpg",
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    }],
                                "c": [
                                    {
                                        "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                        "t": 1,
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    },
                                    {
                                        "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                        "t": 1,
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    }],
                                "h": false,
                                "st": 6,
                                "et": 1
                            })) {
                            Mobi.initBannerDefaultDom({
                                "showType": 0,
                                "bn": 2,
                                "b": [
                                    {
                                        "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                        "t": 1,
                                        "lt": 0,
                                        "u": "",
                                        "ide": "",
                                        "col": 0,
                                        "aj": "",
                                        "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI?f=AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!640x640.jpg",
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    },
                                    {
                                        "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                        "t": 1,
                                        "lt": 0,
                                        "u": "",
                                        "ide": "",
                                        "col": 0,
                                        "aj": "",
                                        "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI?f=AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!640x640.jpg",
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    }],
                                "c": [
                                    {
                                        "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                        "t": 1,
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    },
                                    {
                                        "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                        "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                        "t": 1,
                                        "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                        "w": 640,
                                        "h": 300
                                    }],
                                "h": false,
                                "st": 6,
                                "et": 1
                            });
                            Mobi
                                .initSwipe(
                                    'bannerSwipe',
                                    {
                                        "showType": 0,
                                        "bn": 2,
                                        "b": [
                                            {
                                                "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                                "t": 1,
                                                "lt": 0,
                                                "u": "",
                                                "ide": "",
                                                "col": 0,
                                                "aj": "",
                                                "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI?f=AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!640x640.jpg",
                                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                                "w": 640,
                                                "h": 300
                                            },
                                            {
                                                "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                                "t": 1,
                                                "lt": 0,
                                                "u": "",
                                                "ide": "",
                                                "col": 0,
                                                "aj": "",
                                                "du": "http://12289556.s61i.faiusr.com/0/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI?f=AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!640x640.jpg",
                                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                                "w": 640,
                                                "h": 300
                                            }],
                                        "c": [
                                            {
                                                "i": "AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI",
                                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI.jpg",
                                                "t": 1,
                                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg1-_XywUogOHuogYwgAU4rAI!100x100.jpg",
                                                "w": 640,
                                                "h": 300
                                            },
                                            {
                                                "i": "AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI",
                                                "p": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI.jpg",
                                                "t": 1,
                                                "tp": "http://12289556.s61i.faiusr.com/2/AD0IlIzuBRACGAAg0v_XywUo_OijhgIwgAU4rAI!100x100.jpg",
                                                "w": 640,
                                                "h": 300
                                            }],
                                        "h": false,
                                        "st": 6,
                                        "et": 1
                                    });
                        }
                        ;

                        // 调整导航栏与g_web的top值
                        // 部分主题有css3动画，所以会导致计算失误，需要等css3动画执行完之后计算
                        Mobi.autoFixGWebTop(4);
                        Mobi.initBgmCookie();
                        Mobi.initFooterHeight();
                    });
            // 手机视图初始化函数
            Mobi.initMobiPage({
                "id": 1027,
                "createTime": "2017-07-09",
                "preview": "/images/template/1027/1027.jpg",
                "previewGif": "/images/template/1027/1027.gif",
                "color": 0,
                "style": [
                    "/css/template/1027_1.min.css?v=201711201610",
                    "/css/template/1027_2.min.css?v=201711201610",
                    "/css/template/1027_3.min.css?v=201711201610",
                    "/css/template/1027_4.min.css?v=201711201610",
                    "/css/template/1027_5.min.css?v=201711201610",
                    "/css/template/1027_6.min.css?v=201711201610",
                    "/css/template/1027_7.min.css?v=201711201610",
                    "/css/template/1027_8.min.css?v=201711201610",
                    "/css/template/1027_9.min.css?v=201711201610"],
                "type": 0,
                "moduleStyle": 0,
                "designType": 1,
                "presetIndex": 0,
                "cube": 0,
                "layout": 4,
                "imagePage": 347,
                "backgroundImage": 0,
                "colors": [],
                "colorsName": []
            });
            // 取统计数据
            if (true) {
                Mobi.statisticalMobiVisitors({
                    colId: 3,
                    pdId: -1,
                    ndId: -1,
                    sc: 0,
                    rf: "",
                    statId: -1
                });
                if (!false) {
                    // 统计访问时长
                    Mobi.mobiStatVisitTime();
                }
            }

            // 前端性能数据上报
            Mobi.report();

            // 用于添加分销的标识码 dannel
            Mobi.addDistCode();

            Mobi.initShare('footerShareWeixin',
                'footerShareWeibo', 'footerShareQQ');
            Mobi.initFooterLanguageEvent();
            Mobi.showQqBg();
            Mobi.showPhonesBg();
            Mobi.unLoadForWechat();
            Mobi.setShowSiteTitleBgFlag('0');
            Mobi.changeSiteTitleBg('null', 'null', 'null',
                'null', 'null');
            Mobi.logoSizeCompressByMargin();
            Mobi.titlePositionRefreshByLogo();
            Mobi.initModuleCubeNavItemHeight(6, 303);
            Mobi.loadImgAlone(303);
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel314',
                'rich');
            Mobi.initMixNews({
                moduleId: 315,
                imgWidth: 113
            });
            Mobi.fixIphoneMargin({
                moduleId: 315
            });
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel316',
                'rich');
            Mobi.photoCrossedSlideSecSwipe('324',
                'photoSlideList324', 'photoSlide324');
            Mobi
                .initModulePhotoDetailSwipe(
                    'module324',
                    [
                        {
                            "id": "AD0I0amXBhACGAAggq7PxQUorN2lPTDZATjFAQ",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0I0amXBhACGAAghK7PxQUo-JnT0wIw9wE4xQE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0I0amXBhACGAAgr8-PxQUowt7q6gUw9wE4xQE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        }]);
            Mobi.copyModulePhotoDetailSwipe('module324');
            Mobi.defImageHeightType2('module324', 0);
            Mobi.loadImgAlone(324, 2);
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel317',
                'rich');
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel318',
                'rich');
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel319',
                'rich');
            Mobi.fixIphoneMargin({
                moduleId: 320
            });
            Mobi.photoCrossedSlideSecSwipe('325',
                'photoSlideList325', 'photoSlide325');
            Mobi
                .initModulePhotoDetailSwipe(
                    'module325',
                    [
                        {
                            "id": "AD0I0amXBhACGAAgvtDPxQUokPDP-QMwoQI4wAE",
                            "openLink": false,
                            "ide": "",
                            "desc": "品牌策划",
                            "name": "品牌策划",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0I0amXBhACGAAg2tDPxQUo6J_gLTChAjjBAQ",
                            "openLink": false,
                            "ide": "",
                            "desc": "影视制作",
                            "name": "影视制作",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0I0amXBhACGAAgss-PxQUolru37AQwoAI4wQE",
                            "openLink": false,
                            "ide": "",
                            "desc": "公关活动",
                            "name": "公关活动",
                            "mobiDetail": 0
                        }]);
            Mobi.copyModulePhotoDetailSwipe('module325');
            Mobi.defImageHeightType2('module325', 0);
            Mobi.loadImgAlone(325, 2);
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel321',
                'rich');
            Mobi.initMixNews({
                moduleId: 322,
                imgWidth: 113
            });
            Mobi.fixIphoneMargin({
                moduleId: 322
            });
            Mobi.addParentDivToTable();
            Mobi.initModulePhotoSwipe('J_richContentPanel323',
                'rich');
            Mobi.fixImageHeightPhoList('module308', 0);
            Mobi
                .initModulePhotoDetailSwipe(
                    'module308',
                    [
                        {
                            "id": "AD0IlIzuBRACGAAgl4DJwgUop-OVrAQwtQI4vQE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0IlIzuBRACGAAg-N-IwgUovMOQhQUwqQI4ygE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0IlIzuBRACGAAgkuDIwgUooJ3jlwUwqQI4ygE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        },
                        {
                            "id": "AD0IlIzuBRACGAAgluDIwgUooMWN2gUwqQI4ygE",
                            "openLink": false,
                            "ide": "",
                            "desc": "",
                            "name": "",
                            "mobiDetail": 0
                        }]);
            Mobi.loadImgAlone(308, 1);
            Mobi.manageFaiscoAd(4);
            initManagePage();
        });

// 针对管理态做初始化 by jser 2017-10-23
function initManagePage() {
    var isManageMode = (Fai.top._manageMode === true);
    if (!isManageMode) {
        return;
    }
    Fai.top.Mobi.logDogWithInitManagePage();
}

// 获取url参数
function getUrlQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return null;
}

// 页面错误提示
function errnoIng() {
    // 获取参数errno
    var errno = getUrlQueryString("errno");
    if (errno == 14) {
        Mobi.ing(LS.memberLoginNoPermission);
    }
}

// Mobi.preventScroll(document.getElementById("g_body"));

// 访客态下，统计微信浏览器的使用情况
// if (Mobi.isWechat()) {
//     Mobi.logDog(200055, 1);
// } else {
//     Mobi.logDog(200055, 0);
// }

// 解决苹果手机浏览模板网站，右下角的手机模板显示不正常的bug
if (false) {
    var mallBuy = localStorage.getItem("mallBuyCallBack");
    if (!!mallBuy) {
        localStorage.removeItem("mallBuyCallBack");
        mallBuy = jm.parseJSON(mallBuy);
        if (mallBuy.login) {
            Mobi.mallBuy(mallBuy.productId, mallBuy.buyType,
                mallBuy.entry, mallBuy.moduleId, jm
                    .parseJSON(mallBuy.option), mallBuy.count);
        }
    }
}