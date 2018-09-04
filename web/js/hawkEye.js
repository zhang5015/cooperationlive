window.FAI_HAWK_EYE = !!window.FAI_HAWK_EYE ? window.FAI_HAWK_EYE: {};
window.FAI_HAWK_EYE.sdk_version = 1;
window.FAI_HAWK_EYE.FAI_HAWK_EYE_REPORT_URL = window.FAI_HAWK_EYE.jssdk_report_url; (function(a, b) {
    a._DEF = {
        _MODULE: {
            _TYPE: {
                PV_MODULE: 0,
                PERFORMANCE_MODULE: 1,
                EXCEPTION_MODULE: 2,
                CLICK_MODULE: 3,
                EVENT_MODULE: 4,
                BSS_MONITOR_MODULE: 5,
                FAI_SPEED_TEST_MODULE: 6
            },
            _KEY: {
                EXCEPTION_MODULE: "e_m",
                PERFORMANCE_MODULE: "pe_m",
                EVENT_MODULE: "b_m",
                PV_MODULE: "p_m",
                CLICK_MODULE: "c_m",
                BSS_MONITOR_MODULE: "bm_m",
                FAI_SPEED_TEST_MODULE: "fst_m"
            }
        },
        _COOKIE: {
            _AID_COOKIE: "",
            _BS_ADI_COOKIE: "",
            _BS_WID_COOKIE: "",
            _BS_ID_COOKIE: "",
            _CLI_ID_COOKIE: "_cliid"
        },
        _IDTYPE: {
            _DISTINC_ID: 1,
            _SESSION_ID: 2,
            _PV_ID: 3,
            _CLICK_ID: 4
        },
        _REPORT: {
            _BASIC: {
                _REPORT_TYPE: "b_rt",
                _PV_ID: "b_pi",
                _APP_ID: "b_a_i",
                _SDK_VERSION: "b_sv",
                _DISTINC_ID: "b_di",
                _CROSS_DOMAIN_CLI_ID: "b_cdci",
                _CLI_TIME: "b_ct",
                _AID: "b_ai",
                _BS_AID: "b_ba",
                _BS_WID: "b_bw",
                _BS_ID: "b_bi"
            },
            _URL: {
                _URL: "u_u",
                _REFER_URL: "u_ru",
            },
            _CLIENT: {
                _CLI_LANG: "c_l",
                _CLI_SCREEN_TYPE: "c_st"
            },
            _PERFORMANCE: {
                _DOMAIN_LOOKUP_TIME: "pe_dt",
                _TCP_TIME: "pe_tt",
                _REQUEST_TIME: "pe_rt",
                _BACK_END_TIME: "pe_rpt",
                _DOM_PARSE_TIME: "pe_dpt",
                _WRITER_SCREEN_TIME: "pe_wst",
                _FIRST_SCREEN_TIME: "pe_fst",
                _DOM_READY_TIME: "pe_drt",
                _FINISH_TIME: "pe_ft"
            },
            _EXCEPTION: {
                _EXCEPTION_TYPE: {
                    _JS_EXCEPTION: 0,
                    _IMG_EXCEPTION: 1,
                    _AJAX_EXCEPTION: 2
                },
                _TYPE: "e_t",
                _URL: "e_u",
                _MESSAGE: "e_m",
                _STATUS: "e_ss",
                _STACK: "e_sk",
                _LINE_NUM: "e_ln",
                _COL_NUM: "e_cn"
            },
            _EVENT: {
                _EVENT_ID: "ev_i",
                _EVENT_ID_SUB: "ev_i_s",
                _EVENT_CONTENT: "ev_c"
            },
            _CLICK: {
                _ID: "c_i",
                _PATH: "c_e_pa",
                _NAME: "c_e_n",
                _POSITION: "c_e_po",
                _TYPE: "c_t",
                _TO_URL: "c_t_u",
            },
            _PV: {
                _REFER: "p_r",
                _TITLE: "p_t",
                _PV_ID: "p_pi"
            },
            _BSS: {
                _TIME: "bs_t",
                _MONITOR_ID: "bs_i"
            }
        }
    };
    a._DATA = {};
    a._MODULES = {};
    a._TOOL = {};
    a._INTERFACE = {}
})(window.FAI_HAWK_EYE); (function(a, b) {
    a._INTERFACE._install = function() {
        for (var c in a._MODULES) {
            a._MODULES[c]._init()
        }
    };
    a._TOOL._extend = function(e, c) {
        var d = function() {};
        d.prototype = c.prototype;
        e.prototype = new d();
        e.prototype.constructor = e;
        e.uber = c.prototype
    };
    a._TOOL._getElementPath = function(c) {
        var d = [];
        do {
            d.push(a._TOOL._getElementName(c))
        } while (( c . nodeName . toLowerCase () != "html") && (c = c.parentNode));
        return d.join(" > ")
    };
    a._TOOL._getElementName = function(e) {
        var d = e.className;
        var c = e.id;
        if ( !! d || !!c) {
            return e.nodeName.toLowerCase() + "[" + (d ? 'class="' + d + '"': "") + (c ? ' id="' + c + '"': "") + "]"
        } else {
            return e.nodeName.toLowerCase()
        }
    };
    a._TOOL._getElementAttribute = function(d, c) {
        var e = d.getAttribute(c);
        if (e == null || e == b) {
            return ""
        } else {
            return e
        }
    };
    a._TOOL._getLang = function() {
        var c = navigator.userLanguage || navigator.language;
        return c
    };
    a._TOOL._getScreenSize = function() {
        return window.screen.width + "x" + window.screen.height
    };
    a._TOOL._getCookie = function(d) {
        var c, e = new RegExp("(^| )" + d + "=([^;]*)(;|$)");
        if (c = document.cookie.match(e)) {
            return unescape(c[2])
        } else {
            return null
        }
    };
    a._TOOL._sendReport = function(d, f) {
        var g = "";
        for (var e in f) {
            g += e + "=" + encodeURIComponent(f[e]) + "&"
        }
        d += "?" + g;
        var c = document.createElement("img");
        c.src = d;
        document.getElementsByTagName("head")[0].appendChild(c);
        c.parentNode.removeChild(c)
    };
    a._TOOL._getId = function(d) {
        var g = (d).toString(16);
        if (g.length < 2) {
            for (var h = 0; h < 2 - g.length; h++) {
                g = "0" + g
            }
        }
        var f = (((new Date().getTime()) & 4294967295) >>> 0).toString(16);
        if (f.length < 8) {
            for (var h = 0; h < 8 - f.length; h++) {
                f = "0" + f
            }
        }
        var c = 16777215;
        var e = ((Math.random() * c) & 16777215).toString(16);
        if (e.length < 6) {
            for (var h = 0; h < 6 - e.length; h++) {
                e = "0" + e
            }
        }
        return g + f + e
    };
    a._TOOL._getUrlDomain = function(c) {
        var d = c.split("/")[2];
        if (d == b) {
            d = ""
        }
        return d
    }
})(window.FAI_HAWK_EYE); (function(b) {
    b.fai_he_pv_id = b._TOOL._getId(b._DEF._IDTYPE._PV_ID);
    b.fai_he_script_src = "";
    if (document.currentScript && document.currentScript.src) {
        b.fai_he_script_src = document.currentScript.src
    } else {
        if (document.scripts) {
            var a = document.scripts[document.scripts.length - 1];
            if (a.src) {
                b.fai_he_script_src = a.src
            }
        }
    }
})(window.FAI_HAWK_EYE); (function(g) {
    var c = {};
    function a() {
        var l = {};
        var o = g.fai_he_pv_id;
        var q = g.jssdk_appid;
        var k = g.sdk_version;
        var m = g._TOOL._getCookie(g._DEF._COOKIE._CLI_ID_COOKIE);
        var i = g.fai_aid;
        var p = g.fai_bs_aid;
        var j = g.fai_bs_wid;
        var n = g.fai_bs_id;
        l[g._DEF._REPORT._BASIC._PV_ID] = o;
        l[g._DEF._REPORT._BASIC._APP_ID] = q;
        l[g._DEF._REPORT._BASIC._SDK_VERSION] = k;
        l[g._DEF._REPORT._BASIC._CROSS_DOMAIN_CLI_ID] = m;
        l[g._DEF._REPORT._BASIC._AID] = i;
        l[g._DEF._REPORT._BASIC._BS_AID] = p;
        l[g._DEF._REPORT._BASIC._BS_WID] = j;
        l[g._DEF._REPORT._BASIC._BS_ID] = n;
        return l
    }
    function f() {
        var i = {};
        var j = document.URL;
        var k = document.referrer;
        i[g._DEF._REPORT._URL._URL] = j;
        i[g._DEF._REPORT._URL._REFER_URL] = k;
        return i
    }
    function e() {
        var k = {};
        var j = g._TOOL._getLang();
        var i = g._TOOL._getScreenSize();
        k[g._DEF._REPORT._CLIENT._CLI_LANG] = j;
        k[g._DEF._REPORT._CLIENT._CLI_SCREEN_TYPE] = i;
        return k
    }
    var d = a();
    var b = f();
    var h = e();
    g._DATA[g._DEF._REPORT._BASIC._PV_ID] = d[g._DEF._REPORT._BASIC._PV_ID];
    g._DATA[g._DEF._REPORT._BASIC._APP_ID] = d[g._DEF._REPORT._BASIC._APP_ID];
    g._DATA[g._DEF._REPORT._BASIC._SDK_VERSION] = d[g._DEF._REPORT._BASIC._SDK_VERSION];
    g._DATA[g._DEF._REPORT._BASIC._CROSS_DOMAIN_CLI_ID] = d[g._DEF._REPORT._BASIC._CROSS_DOMAIN_CLI_ID];
    g._DATA[g._DEF._REPORT._BASIC._AID] = d[g._DEF._REPORT._BASIC._AID];
    g._DATA[g._DEF._REPORT._BASIC._BS_AID] = d[g._DEF._REPORT._BASIC._BS_AID];
    g._DATA[g._DEF._REPORT._BASIC._BS_WID] = d[g._DEF._REPORT._BASIC._BS_WID];
    g._DATA[g._DEF._REPORT._BASIC._BS_ID] = d[g._DEF._REPORT._BASIC._BS_ID];
    g._DATA[g._DEF._REPORT._URL._URL] = b[g._DEF._REPORT._URL._URL];
    g._DATA[g._DEF._REPORT._URL._REFER_URL] = b[g._DEF._REPORT._URL._REFER_URL];
    g._DATA[g._DEF._REPORT._CLIENT._CLI_LANG] = h[g._DEF._REPORT._CLIENT._CLI_LANG];
    g._DATA[g._DEF._REPORT._CLIENT._CLI_SCREEN_TYPE] = h[g._DEF._REPORT._CLIENT._CLI_SCREEN_TYPE]
})(window.FAI_HAWK_EYE); (function(e, k, c) {
    if (!Function.prototype.bind) {
        Function.prototype.bind = function(l) {
            if (typeof this !== "function") {
                throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable")
            }
            var p = Array.prototype.slice.call(arguments, 1),
            o = this,
            m = function() {},
            n = function() {
                return o.apply(this instanceof m ? this: l, p.concat(Array.prototype.slice.call(arguments)))
            };
            if (this.prototype) {
                m.prototype = this.prototype
            }
            n.prototype = new m();
            return n
        }
    }
    function j(l, m) {
        this._name = l;
        this._type = m
    }
    j.prototype.report = function(m, l) {
        var o = {};
        for (var n in k._DATA) {
            o[n] = k._DATA[n]
        }
        for (var n in m) {
            o[n] = m[n]
        }
        o[k._DEF._REPORT._BASIC._CLI_TIME] = new Date().getTime();
        o[k._DEF._REPORT._BASIC._REPORT_TYPE] = l;
        k._TOOL._sendReport(k.FAI_HAWK_EYE_REPORT_URL, o)
    };
    function g(l, m) {
        this._name = l;
        this._type = m;
        this._init = function() {
            var o = this;
            if (e.addEventListener) {
                e.addEventListener("error",
                function(q) {
                    var r = {};
                    if (q.target && q.target.tagName && (q.target.tagName.toLocaleLowerCase() == "img")) {
                        target_src_domain = k._TOOL._getUrlDomain(q.target.src);
                        self_report_url = k.jssdk_report_url;
                        if (self_report_url.indexOf(target_src_domain) == -1) {
                            r[k._DEF._REPORT._EXCEPTION._URL] = q.target.src;
                            r[k._DEF._REPORT._EXCEPTION._STACK] = "";
                            r[k._DEF._REPORT._EXCEPTION._STATUS] = 0;
                            r[k._DEF._REPORT._EXCEPTION._LINE_NUM] = 0;
                            r[k._DEF._REPORT._EXCEPTION._COL_NUM] = 0;
                            r[k._DEF._REPORT._EXCEPTION._TYPE] = k._DEF._REPORT._EXCEPTION._EXCEPTION_TYPE._IMG_EXCEPTION;
                            o.report(r, o._type)
                        }
                    }
                },
                true)
            }
            e.onerror = function(u, s, t, B, r) {
                if (u === "Script error.") {
                    return
                }
                if (s == k.fai_he_script_src) {}
                var y = {};
                var v = s;
                var x = u;
                var z = "";
                if (r && r.stack) {
                    z = r.stack
                }
                var w = 0;
                var q = t;
                var A = 0;
                if (B) {
                    A = B
                }
                y[k._DEF._REPORT._EXCEPTION._URL] = v;
                y[k._DEF._REPORT._EXCEPTION._MESSAGE] = x;
                y[k._DEF._REPORT._EXCEPTION._STACK] = z;
                y[k._DEF._REPORT._EXCEPTION._STATUS] = w;
                y[k._DEF._REPORT._EXCEPTION._LINE_NUM] = q;
                y[k._DEF._REPORT._EXCEPTION._COL_NUM] = A;
                y[k._DEF._REPORT._EXCEPTION._TYPE] = k._DEF._REPORT._EXCEPTION._EXCEPTION_TYPE._JS_EXCEPTION;
                o.report(y, o._type)
            };
            if (e.XMLHttpRequest) {
                var p = XMLHttpRequest.prototype.send;
                var n = XMLHttpRequest.prototype.open;
                XMLHttpRequest.prototype.open = function(s, r, q) {
                    n.apply(this, [s, r, q]);
                    this.ajaxUrl = r
                };
                XMLHttpRequest.prototype.send = function(r) {
                    var s = {};
                    p.apply(this, [r]);
                    if (this.onreadystatechange) {
                        this.newStateChange = q.bind(this)
                    } else {
                        this.onreadystatechange = q.bind(this)
                    }
                    function q() {
                        if (this.readyState == 4) {
                            if (! (this.status >= 200 && this.status < 300)) {
                                s[k._DEF._REPORT._EXCEPTION._URL] = this.ajaxUrl;
                                s[k._DEF._REPORT._EXCEPTION._STACK] = "";
                                s[k._DEF._REPORT._EXCEPTION._STATUS] = this.status;
                                s[k._DEF._REPORT._EXCEPTION._MESSAGE] = this.statusText;
                                s[k._DEF._REPORT._EXCEPTION._LINE_NUM] = 0;
                                s[k._DEF._REPORT._EXCEPTION._COL_NUM] = 0;
                                s[k._DEF._REPORT._EXCEPTION._TYPE] = k._DEF._REPORT._EXCEPTION._EXCEPTION_TYPE._AJAX_EXCEPTION;
                                o.report(s, o._type)
                            }
                        }
                    }
                }
            }
        }
    }
    k._TOOL._extend(g, j);
    k._MODULES[k._DEF._MODULE._KEY.EXCEPTION_MODULE] = new g("异常监控模块", k._DEF._MODULE._TYPE.EXCEPTION_MODULE);
    function f(l, m) {
        this._name = l;
        this._type = m;
        this._init = function() {
            var o = this;
            if ( !! e.addEventListener) {
                e.addEventListener("load",
                function(p) {
                    setTimeout(function() {
                        var q = n();
                        o.report(q, o._type)
                    },
                    100)
                },
                false)
            } else {
                if ( !! e.attachEvent) {
                    e.attachEvent("onload",
                    function(p) {
                        setTimeout(function() {
                            var q = n();
                            o.report(q, o._type)
                        },
                        100)
                    })
                }
            }
        };
        function n() {
            var t = {};
            if ( !! e.performance && !!e.performance.timing) {
                var o, y, u, r, w, v, x, q, s = null;
                o = performance.timing;
                y = o.domainLookupEnd - o.domainLookupStart;
                u = o.connectEnd - o.connectStart;
                r = o.responseEnd - o.requestStart;
                response_time = o.responseStart - o.navigationStart;
                w = o.domComplete - o.domInteractive;
                v = o.domInteractive - o.navigationStart;
                x = o.domComplete - o.navigationStart;
                q = o.domContentLoadedEventEnd - o.navigationStart;
                s = o.loadEventEnd - o.navigationStart;
                if ( !! e.chrome) {
                    var p = chrome.loadTimes();
                    v = Number.parseInt((p.firstPaintTime - p.startLoadTime) * 1000)
                }
                t[k._DEF._REPORT._PERFORMANCE._DOMAIN_LOOKUP_TIME] = y;
                t[k._DEF._REPORT._PERFORMANCE._TCP_TIME] = u;
                t[k._DEF._REPORT._PERFORMANCE._REQUEST_TIME] = r;
                t[k._DEF._REPORT._PERFORMANCE._BACK_END_TIME] = response_time;
                t[k._DEF._REPORT._PERFORMANCE._DOM_PARSE_TIME] = w;
                t[k._DEF._REPORT._PERFORMANCE._WRITER_SCREEN_TIME] = v;
                t[k._DEF._REPORT._PERFORMANCE._FIRST_SCREEN_TIME] = x;
                t[k._DEF._REPORT._PERFORMANCE._DOM_READY_TIME] = q;
                t[k._DEF._REPORT._PERFORMANCE._FINISH_TIME] = s
            }
            return t
        }
    }
    k._TOOL._extend(f, j);
    k._MODULES[k._DEF._MODULE._KEY.PERFORMANCE_MODULE] = new f("性能监控模块", k._DEF._MODULE._TYPE.PERFORMANCE_MODULE);
    function a(l, m) {
        this._name = l;
        this._type = m;
        this._datas = [];
        this._init = function() {
            var n = this;
            k.trackEvent = function(r, p, q) {
                var o = {};
                o[k._DEF._REPORT._EVENT._EVENT_ID] = r;
                o[k._DEF._REPORT._EVENT._EVENT_ID_SUB] = p;
                o[k._DEF._REPORT._EVENT._EVENT_CONTENT] = q;
                n.report(o, n._type)
            }
        }
    }
    k._TOOL._extend(a, j);
    k._MODULES[k._DEF._MODULE._KEY.EVENT_MODULE] = new a("行为监控模块", k._DEF._MODULE._TYPE.EVENT_MODULE);
    function h(l, m) {
        this._name = l;
        this._type = m;
        this._init = function() {
            var n = this;
            var o = ( !! k._TOOL._getCookie(k._DEF._COOKIE._CLI_ID_COOKIE)) ? 0 : 1000;
            setTimeout(function() {
                var p = {};
                p[k._DEF._REPORT._PV._REFER] = document.referrer;
                p[k._DEF._REPORT._PV._TITLE] = document.title;
                p[k._DEF._REPORT._PV._PV_ID] = k.fai_he_pv_id;
                n.report(p, n._type)
            },
            o)
        }
    }
    k._TOOL._extend(h, j);
    k._MODULES[k._DEF._MODULE._KEY.PV_MODULE] = new h("PV模块", k._DEF._MODULE._TYPE.PV_MODULE);
    function b(l, m) {
        this._name = l;
        this._type = m;
        this._init = function() {
            var o = this;
            if (e.addEventListener) {
                var q = true;
                var p = null;
                e.addEventListener("click",
                function(r) {
                    q = true;
                    p = setTimeout(function() {
                        if (q) {
                            n(r)
                        }
                    },
                    400)
                });
                e.addEventListener("dblclick",
                function(r) {
                    q = false;
                    clearTimeout(p);
                    n(r)
                })
            } else {
                if (e.attachEvent) {
                    var q = true;
                    var p = null;
                    document.attachEvent("onclick",
                    function(r) {
                        q = true;
                        var s = {};
                        s.src = r.srcElement;
                        s.screenX = r.screenX;
                        s.screenY = r.screenY;
                        s.type = r.type;
                        p = setTimeout(function() {
                            if (q) {
                                n(s)
                            }
                        },
                        400)
                    });
                    document.attachEvent("ondblclick",
                    function(r) {
                        q = false;
                        clearTimeout(p);
                        n(r)
                    })
                }
            }
            function n(v) {
                var w = {};
                var s = k._TOOL._getId(k._DEF._IDTYPE._CLICK_ID);
                var x = "";
                var r = "";
                var t = "";
                if (v.target) {
                    x = k._TOOL._getElementPath(v.target);
                    r = k._TOOL._getElementName(v.target);
                    t = k._TOOL._getElementAttribute(v.target, "href")
                } else {
                    if (v.srcElement) {
                        x = k._TOOL._getElementPath(v.srcElement);
                        r = k._TOOL._getElementName(v.srcElement);
                        t = k._TOOL._getElementAttribute(v.srcElement, "href")
                    }
                }
                var u = v.screenX + "," + v.screenY;
                var y = v.type;
                w[k._DEF._REPORT._CLICK._ID] = s;
                w[k._DEF._REPORT._CLICK._PATH] = x;
                w[k._DEF._REPORT._CLICK._NAME] = r;
                w[k._DEF._REPORT._CLICK._POSITION] = u;
                w[k._DEF._REPORT._CLICK._TYPE] = v.type;
                w[k._DEF._REPORT._CLICK._TO_URL] = t;
                o.report(w, o._type)
            }
        }
    }
    k._TOOL._extend(b, j);
    function i(l, m) {
        this._name = l;
        this._type = m;
        this._init = function() {
            var n = this;
            k.bssMonitor = function(o) {
                var p = {};
                p[k._DEF._REPORT._BSS._MONITOR_ID] = o;
                p[k._DEF._REPORT._URL._URL] = document.URL;
                p[k._DEF._REPORT._BASIC._REPORT_TYPE] = n._type;
                k._TOOL._sendReport(k.FAI_HAWK_EYE_REPORT_URL, p)
            }
        }
    }
    k._TOOL._extend(i, j);
    k._MODULES[k._DEF._MODULE._KEY.BSS_MONITOR_MODULE] = new i("业务上报模块", k._DEF._MODULE._TYPE.BSS_MONITOR_MODULE);
    function d(p, q) {
        this._name = p;
        this._type = q;
        this.testSeed = 1;
        this._init = function() {
            var u = this;
            var t = ((k.jssdk_appid == 6000) && (Math.random(1) * 10 <= 6));
            var s = ((k.jssdk_appid == 6001) && (Math.random(1) * 10 <= 2));
            if (false) {
                if ( !! e.addEventListener) {
                    e.addEventListener("load",
                    function(v) {
                        setTimeout(function() {
                            r()
                        },
                        1000)
                    },
                    false)
                }
            }
        };
        function n(s) {
            s.domain = k._TOOL._getUrlDomain(s.url);
            if ( !! JSON) {
                k.trackEvent(10000, 0, JSON.stringify(s))
            }
        }
        function r() {
            list = l();
            for (var s = 0; s < list.length; s++) {
                var v = list[s];
                if (v.type == 0) {
                    m(v)
                } else {
                    var u = "";
                    for (var t = 0; t < v.size; t++) {
                        u += "0"
                    }
                    o(u, v)
                }
            }
        }
        function m(v) {
            var s = new Image();
            var t = v;
            s.addEventListener("error",
            function() {
                var w = s.st;
                var z = new Date();
                var y = z.getTime() - w;
                var x = v;
                x.status = -1;
                x.time = y;
                n(v)
            });
            s.addEventListener("load",
            function() {
                var w = s.st;
                var y = new Date();
                var x = y.getTime() - w;
                t.status = 0;
                t.time = x;
                n(v)
            });
            var u = new Date();
            s.st = u.getTime();
            s.src = v.url + "?v=" + s.st
        }
        function o(u, w) {
            var t = w;
            if ( !! e.XMLHttpRequest) {
                var v = new Date();
                var s = v.getTime();
                xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        var y = new Date();
                        var x = y.getTime() - s;
                        if (xhr.status == 200) {
                            t.status = 0
                        } else {
                            t.status = -1
                        }
                        t.time = x;
                        n(t)
                    }
                };
                xhr.open("POST", w.url, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("pd=" + u)
            }
        }
        function l() {
            var s = [];
            var v = {};
            var u = new Date();
            var t = u.getTime();
//            v.url = "//t2.faisco.zh/tsd.gif?t=" + t;
            v.size = 103988;
            v.type = 0;
            s.push(v);
            v = {};
//            v.url = "//t4.faisco.zh/tsd.gif?t=" + t;
            v.type = 0;
            v.size = 103988;
            s.push(v);
            v = {};
//            v.url = "//t4.faisco.zh/tsu.gif?t=" + t;
            v.type = 1;
            v.size = 51200;
            s.push(v);
            v = {};
//            v.url = "//t1.faisco.zh/tsd.gif?t=" + t;
            v.size = 103988;
            v.type = 0;
            s.push(v);
            v = {};
//            v.url = "//t3.faisco.zh/tsd.gif?t=" + t;
            v.type = 0;
            v.size = 103988;
            s.push(v);
            v = {};
//            v.url = "//t3.faisco.zh/tsu.gif?t=" + t;
            v.type = 1;
            v.size = 51200;
            s.push(v);
            return s
        }
    }
    k._TOOL._extend(d, j);
    k._MODULES[k._DEF._MODULE._KEY.FAI_SPEED_TEST_MODULE] = new d("测速模块", k._DEF._MODULE._TYPE.FAI_SPEED_TEST_MODULE)
})(window, window.FAI_HAWK_EYE);
window.FAI_HAWK_EYE._INTERFACE._install();