
function(e) {
    function t(n) {
        if (r[n]) return r[n].exports;
        var i = r[n] = {
            exports: {},
            id: n,
            loaded: !1
        };
        return e[n].call(i.exports, i, i.exports, t),
        i.loaded = !0,
        i.exports
    }
    var n = window.webpackJsonp;
    window.webpackJsonp = function o(a, s) {
        for (var l, u, c = 0,
        f = []; c < a.length; c++) u = a[c],
        i[u] && f.push.apply(f, i[u]),
        i[u] = 0;
        for (l in s) Object.prototype.hasOwnProperty.call(s, l) && (e[l] = s[l]);
        for (n && n(a, s); f.length;) f.shift().call(null, t);
        if (s[0]) return r[0] = 0,
        t(0)
    };
    var r = {},
    i = {
        30 : 0
    };
    t.e = function e(n, r) {
        if (0 === i[n]) return r.call(null, t);
        if (void 0 !== i[n]) i[n].push(r);
        else {
            i[n] = [r];
            var o = document.getElementsByTagName("head")[0],
            a = document.createElement("script");
            a.type = "text/javascript",
            a.charset = "utf-8",
            a.async = !0,
            a.src = t.p + "" + n + "." + ({
                0 : "./admin/js/basic",
                1 : "./admin/js/basicMobile",
                2 : "./admin/js/versionCheck",
                3 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 98, 97, 115, 105, 99].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                4 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 100, 97, 116, 97, 73, 109, 97, 103, 101, 83, 101, 108, 101, 99, 116, 68, 105, 97, 108, 111, 103].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                5 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 100, 97, 116, 97, 83, 101, 108, 101, 99, 116, 68, 105, 97, 108, 111, 103].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                6 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 100, 105, 97, 108, 111, 103, 70, 114, 97, 109, 101, 77, 111, 98, 105, 108, 101].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                7 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 100, 105, 97, 108, 111, 103, 70, 114, 97, 109, 101, 80, 67].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                8 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 104, 116, 109, 108, 77, 117, 108, 116, 105, 83, 101, 108, 101, 99, 116, 111, 114].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                9 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 108, 111, 100, 111, 112, 80, 114, 105, 110, 116, 101, 114].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                10 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 109, 117, 108, 116, 105, 83, 101, 108, 101, 99, 116, 111, 114].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                11 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 112, 117, 116, 68, 97, 116, 97, 68, 105, 97, 108, 111, 103].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                12 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 115, 105, 109, 112, 108, 101, 68, 97, 116, 97, 65, 117, 100, 105, 111, 83, 101, 108, 101, 99, 116, 68, 105, 97, 108, 111, 103].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                13 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 115, 105, 109, 112, 108, 101, 68, 97, 116, 97, 73, 109, 97, 103, 101, 83, 101, 108, 101, 99, 116, 68, 105, 97, 108, 111, 103].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                14 : [46, 47, 98, 97, 115, 105, 99, 47, 106, 115, 47, 117, 112, 108, 111, 97, 100, 66, 117, 116, 116, 111, 110].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                15 : [46, 47, 98, 97, 115, 105, 99, 47, 119, 105, 100, 103, 101, 116, 47, 99, 104, 111, 111, 115, 101, 87, 105, 100, 103, 101, 116].map(function(c) {
                    return String.fromCharCode(c);
                }).join(''),
                16 : "./m/default/basic",
                17 : "./m/default/home",
                18 : "./m/default/memberAvatar",
                19 : "./m/default/memberChat",
                20 : "./m/default/noteView",
                21 : "./m/default/verify",
                22 : "./m/default/writer",
                23 : "./main/default/basic",
                24 : "./main/default/home",
                25 : "./main/default/memberAvatar",
                26 : "./main/default/memberChat",
                27 : "./main/default/noteView",
                28 : "./main/default/verify",
                29 : "./main/default/writer"
            } [n] || n) + ".js",
            o.appendChild(a)
        }
    },
    t.m = e,
    t.c = r,
    t.p = "/assets/"
} ([,
function(e, t, n) { (function(t) {
        e.exports = t.jQuery = n(2)
    }).call(t,
    function() {
        return this
    } ())
},
function(e, t, n) { (function(t) {
        e.exports = t.$ = n(3)
    }).call(t,
    function() {
        return this
    } ())
},
function(e, t, n) {
    var r, i; !
    function(t, n) {
        "object" == typeof e && "object" == typeof e.exports ? e.exports = t.document ? n(t, !0) : function(e) {
            if (!e.document) throw new Error("jQuery requires a window with a document");
            return n(e)
        }: n(t)
    } ("undefined" != typeof window ? window: this,
    function(n, o) {
        function a(e) {
            var t = e.length,
            n = le.type(e);
            return "function" !== n && !le.isWindow(e) && (!(1 !== e.nodeType || !t) || ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e))
        }
        function s(e, t, n) {
            if (le.isFunction(t)) return le.grep(e,
            function(e, r) {
                return !! t.call(e, r, e) !== n
            });
            if (t.nodeType) return le.grep(e,
            function(e) {
                return e === t !== n
            });
            if ("string" == typeof t) {
                if (ge.test(t)) return le.filter(t, e, n);
                t = le.filter(t, e)
            }
            return le.grep(e,
            function(e) {
                return le.inArray(e, t) >= 0 !== n
            })
        }
        function l(e, t) {
            do e = e[t];
            while (e && 1 !== e.nodeType);
            return e
        }
        function u(e) {
            var t = Ne[e] = {};
            return le.each(e.match(Ce) || [],
            function(e, n) {
                t[n] = !0
            }),
            t
        }
        function c() {
            ye.addEventListener ? (ye.removeEventListener("DOMContentLoaded", f, !1), n.removeEventListener("load", f, !1)) : (ye.detachEvent("onreadystatechange", f), n.detachEvent("onload", f))
        }
        function f() { (ye.addEventListener || "load" === event.type || "complete" === ye.readyState) && (c(), le.ready())
        }
        function d(e, t, n) {
            if (void 0 === n && 1 === e.nodeType) {
                var r = "data-" + t.replace(De, "-$1").toLowerCase();
                if (n = e.getAttribute(r), "string" == typeof n) {
                    try {
                        n = "true" === n || "false" !== n && ("null" === n ? null: +n + "" === n ? +n: je.test(n) ? le.parseJSON(n) : n)
                    } catch(e) {}
                    le.data(e, t, n)
                } else n = void 0
            }
            return n
        }
        function p(e) {
            var t;
            for (t in e) if (("data" !== t || !le.isEmptyObject(e[t])) && "toJSON" !== t) return ! 1;
            return ! 0
        }
        function h(e, t, n, r) {
            if (le.acceptData(e)) {
                var i, o, a = le.expando,
                s = e.nodeType,
                l = s ? le.cache: e,
                u = s ? e[a] : e[a] && a;
                if (u && l[u] && (r || l[u].data) || void 0 !== n || "string" != typeof t) return u || (u = s ? e[a] = K.pop() || le.guid++:a),
                l[u] || (l[u] = s ? {}: {
                    toJSON: le.noop
                }),
                "object" != typeof t && "function" != typeof t || (r ? l[u] = le.extend(l[u], t) : l[u].data = le.extend(l[u].data, t)),
                o = l[u],
                r || (o.data || (o.data = {}), o = o.data),
                void 0 !== n && (o[le.camelCase(t)] = n),
                "string" == typeof t ? (i = o[t], null == i && (i = o[le.camelCase(t)])) : i = o,
                i
            }
        }
        function m(e, t, n) {
            if (le.acceptData(e)) {
                var r, i, o = e.nodeType,
                a = o ? le.cache: e,
                s = o ? e[le.expando] : le.expando;
                if (a[s]) {
                    if (t && (r = n ? a[s] : a[s].data)) {
                        le.isArray(t) ? t = t.concat(le.map(t, le.camelCase)) : t in r ? t = [t] : (t = le.camelCase(t), t = t in r ? [t] : t.split(" ")),
                        i = t.length;
                        for (; i--;) delete r[t[i]];
                        if (n ? !p(r) : !le.isEmptyObject(r)) return
                    } (n || (delete a[s].data, p(a[s]))) && (o ? le.cleanData([e], !0) : ae.deleteExpando || a != a.window ? delete a[s] : a[s] = null)
                }
            }
        }
        function g() {
            return ! 0
        }
        function v() {
            return ! 1
        }
        function y() {
            try {
                return ye.activeElement
            } catch(e) {}
        }
        function b(e) {
            var t = We.split("|"),
            n = e.createDocumentFragment();
            if (n.createElement) for (; t.length;) n.createElement(t.pop());
            return n
        }
        function x(e, t) {
            var n, r, i = 0,
            o = typeof e.getElementsByTagName !== ke ? e.getElementsByTagName(t || "*") : typeof e.querySelectorAll !== ke ? e.querySelectorAll(t || "*") : void 0;
            if (!o) for (o = [], n = e.childNodes || e; null != (r = n[i]); i++) ! t || le.nodeName(r, t) ? o.push(r) : le.merge(o, x(r, t));
            return void 0 === t || t && le.nodeName(e, t) ? le.merge([e], o) : o
        }
        function w(e) {
            qe.test(e.type) && (e.defaultChecked = e.checked)
        }
        function T(e, t) {
            return le.nodeName(e, "table") && le.nodeName(11 !== t.nodeType ? t: t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e
        }
        function C(e) {
            return e.type = (null !== le.find.attr(e, "type")) + "/" + e.type,
            e
        }
        function N(e) {
            var t = Qe.exec(e.type);
            return t ? e.type = t[1] : e.removeAttribute("type"),
            e
        }
        function E(e, t) {
            for (var n, r = 0; null != (n = e[r]); r++) le._data(n, "globalEval", !t || le._data(t[r], "globalEval"))
        }
        function k(e, t) {
            if (1 === t.nodeType && le.hasData(e)) {
                var n, r, i, o = le._data(e),
                a = le._data(t, o),
                s = o.events;
                if (s) {
                    delete a.handle,
                    a.events = {};
                    for (n in s) for (r = 0, i = s[n].length; r < i; r++) le.event.add(t, n, s[n][r])
                }
                a.data && (a.data = le.extend({},
                a.data))
            }
        }
        function S(e, t) {
            var n, r, i;
            if (1 === t.nodeType) {
                if (n = t.nodeName.toLowerCase(), !ae.noCloneEvent && t[le.expando]) {
                    i = le._data(t);
                    for (r in i.events) le.removeEvent(t, r, i.handle);
                    t.removeAttribute(le.expando)
                }
                "script" === n && t.text !== e.text ? (C(t).text = e.text, N(t)) : "object" === n ? (t.parentNode && (t.outerHTML = e.outerHTML), ae.html5Clone && e.innerHTML && !le.trim(t.innerHTML) && (t.innerHTML = e.innerHTML)) : "input" === n && qe.test(e.type) ? (t.defaultChecked = t.checked = e.checked, t.value !== e.value && (t.value = e.value)) : "option" === n ? t.defaultSelected = t.selected = e.defaultSelected: "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
            }
        }
        function j(e, t) {
            var r, i = le(t.createElement(e)).appendTo(t.body),
            o = n.getDefaultComputedStyle && (r = n.getDefaultComputedStyle(i[0])) ? r.display: le.css(i[0], "display");
            return i.detach(),
            o
        }
        function D(e) {
            var t = ye,
            n = rt[e];
            return n || (n = j(e, t), "none" !== n && n || (nt = (nt || le("<iframe frameborder='0' width='0' height='0'/>")).appendTo(t.documentElement), t = (nt[0].contentWindow || nt[0].contentDocument).document, t.write(), t.close(), n = j(e, t), nt.detach()), rt[e] = n),
            n
        }
        function A(e, t) {
            return {
                get: function() {
                    var n = e();
                    if (null != n) return n ? void delete this.get: (this.get = t).apply(this, arguments)
                }
            }
        }
        function L(e, t) {
            if (t in e) return t;
            for (var n = t.charAt(0).toUpperCase() + t.slice(1), r = t, i = gt.length; i--;) if (t = gt[i] + n, t in e) return t;
            return r
        }
        function H(e, t) {
            for (var n, r, i, o = [], a = 0, s = e.length; a < s; a++) r = e[a],
            r.style && (o[a] = le._data(r, "olddisplay"), n = r.style.display, t ? (o[a] || "none" !== n || (r.style.display = ""), "" === r.style.display && He(r) && (o[a] = le._data(r, "olddisplay", D(r.nodeName)))) : (i = He(r), (n && "none" !== n || !i) && le._data(r, "olddisplay", i ? n: le.css(r, "display"))));
            for (a = 0; a < s; a++) r = e[a],
            r.style && (t && "none" !== r.style.display && "" !== r.style.display || (r.style.display = t ? o[a] || "": "none"));
            return e
        }
        function _(e, t, n) {
            var r = dt.exec(t);
            return r ? Math.max(0, r[1] - (n || 0)) + (r[2] || "px") : t
        }
        function q(e, t, n, r, i) {
            for (var o = n === (r ? "border": "content") ? 4 : "width" === t ? 1 : 0, a = 0; o < 4; o += 2)"margin" === n && (a += le.css(e, n + Le[o], !0, i)),
            r ? ("content" === n && (a -= le.css(e, "padding" + Le[o], !0, i)), "margin" !== n && (a -= le.css(e, "border" + Le[o] + "Width", !0, i))) : (a += le.css(e, "padding" + Le[o], !0, i), "padding" !== n && (a += le.css(e, "border" + Le[o] + "Width", !0, i)));
            return a
        }
        function M(e, t, n) {
            var r = !0,
            i = "width" === t ? e.offsetWidth: e.offsetHeight,
            o = at(e),
            a = ae.boxSizing && "border-box" === le.css(e, "boxSizing", !1, o);
            if (i <= 0 || null == i) {
                if (i = st(e, t, o), (i < 0 || null == i) && (i = e.style[t]), ot.test(i)) return i;
                r = a && (ae.boxSizingReliable() || i === e.style[t]),
                i = parseFloat(i) || 0
            }
            return i + q(e, t, n || (a ? "border": "content"), r, o) + "px"
        }
        function O(e, t, n, r, i) {
            return new O.prototype.init(e, t, n, r, i)
        }
        function F() {
            return setTimeout(function() {
                vt = void 0
            }),
            vt = le.now()
        }
        function B(e, t) {
            var n, r = {
                height: e
            },
            i = 0;
            for (t = t ? 1 : 0; i < 4; i += 2 - t) n = Le[i],
            r["margin" + n] = r["padding" + n] = e;
            return t && (r.opacity = r.width = e),
            r
        }
        function P(e, t, n) {
            for (var r, i = (Ct[t] || []).concat(Ct["*"]), o = 0, a = i.length; o < a; o++) if (r = i[o].call(n, t, e)) return r
        }
        function W(e, t, n) {
            var r, i, o, a, s, l, u, c, f = this,
            d = {},
            p = e.style,
            h = e.nodeType && He(e),
            m = le._data(e, "fxshow");
            n.queue || (s = le._queueHooks(e, "fx"), null == s.unqueued && (s.unqueued = 0, l = s.empty.fire, s.empty.fire = function() {
                s.unqueued || l()
            }), s.unqueued++, f.always(function() {
                f.always(function() {
                    s.unqueued--,
                    le.queue(e, "fx").length || s.empty.fire()
                })
            })),
            1 === e.nodeType && ("height" in t || "width" in t) && (n.overflow = [p.overflow, p.overflowX, p.overflowY], u = le.css(e, "display"), c = "none" === u ? le._data(e, "olddisplay") || D(e.nodeName) : u, "inline" === c && "none" === le.css(e, "float") && (ae.inlineBlockNeedsLayout && "inline" !== D(e.nodeName) ? p.zoom = 1 : p.display = "inline-block")),
            n.overflow && (p.overflow = "hidden", ae.shrinkWrapBlocks() || f.always(function() {
                p.overflow = n.overflow[0],
                p.overflowX = n.overflow[1],
                p.overflowY = n.overflow[2]
            }));
            for (r in t) if (i = t[r], bt.exec(i)) {
                if (delete t[r], o = o || "toggle" === i, i === (h ? "hide": "show")) {
                    if ("show" !== i || !m || void 0 === m[r]) continue;
                    h = !0
                }
                d[r] = m && m[r] || le.style(e, r)
            } else u = void 0;
            if (le.isEmptyObject(d))"inline" === ("none" === u ? D(e.nodeName) : u) && (p.display = u);
            else {
                m ? "hidden" in m && (h = m.hidden) : m = le._data(e, "fxshow", {}),
                o && (m.hidden = !h),
                h ? le(e).show() : f.done(function() {
                    le(e).hide()
                }),
                f.done(function() {
                    var t;
                    le._removeData(e, "fxshow");
                    for (t in d) le.style(e, t, d[t])
                });
                for (r in d) a = P(h ? m[r] : 0, r, f),
                r in m || (m[r] = a.start, h && (a.end = a.start, a.start = "width" === r || "height" === r ? 1 : 0))
            }
        }
        function R(e, t) {
            var n, r, i, o, a;
            for (n in e) if (r = le.camelCase(n), i = t[r], o = e[n], le.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), a = le.cssHooks[r], a && "expand" in a) {
                o = a.expand(o),
                delete e[r];
                for (n in o) n in e || (e[n] = o[n], t[n] = i)
            } else t[r] = i
        }
        function $(e, t, n) {
            var r, i, o = 0,
            a = Tt.length,
            s = le.Deferred().always(function() {
                delete l.elem
            }),
            l = function() {
                if (i) return ! 1;
                for (var t = vt || F(), n = Math.max(0, u.startTime + u.duration - t), r = n / u.duration || 0, o = 1 - r, a = 0, l = u.tweens.length; a < l; a++) u.tweens[a].run(o);
                return s.notifyWith(e, [u, o, n]),
                o < 1 && l ? n: (s.resolveWith(e, [u]), !1)
            },
            u = s.promise({
                elem: e,
                props: le.extend({},
                t),
                opts: le.extend(!0, {
                    specialEasing: {}
                },
                n),
                originalProperties: t,
                originalOptions: n,
                startTime: vt || F(),
                duration: n.duration,
                tweens: [],
                createTween: function(t, n) {
                    var r = le.Tween(e, u.opts, t, n, u.opts.specialEasing[t] || u.opts.easing);
                    return u.tweens.push(r),
                    r
                },
                stop: function(t) {
                    var n = 0,
                    r = t ? u.tweens.length: 0;
                    if (i) return this;
                    for (i = !0; n < r; n++) u.tweens[n].run(1);
                    return t ? s.resolveWith(e, [u, t]) : s.rejectWith(e, [u, t]),
                    this
                }
            }),
            c = u.props;
            for (R(c, u.opts.specialEasing); o < a; o++) if (r = Tt[o].call(u, e, c, u.opts)) return r;
            return le.map(c, P, u),
            le.isFunction(u.opts.start) && u.opts.start.call(e, u),
            le.fx.timer(le.extend(l, {
                elem: e,
                anim: u,
                queue: u.opts.queue
            })),
            u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always)
        }
        function z(e) {
            return function(t, n) {
                "string" != typeof t && (n = t, t = "*");
                var r, i = 0,
                o = t.toLowerCase().match(Ce) || [];
                if (le.isFunction(n)) for (; r = o[i++];)"+" === r.charAt(0) ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
            }
        }
        function I(e, t, n, r) {
            function i(s) {
                var l;
                return o[s] = !0,
                le.each(e[s] || [],
                function(e, s) {
                    var u = s(t, n, r);
                    return "string" != typeof u || a || o[u] ? a ? !(l = u) : void 0 : (t.dataTypes.unshift(u), i(u), !1)
                }),
                l
            }
            var o = {},
            a = e === Vt;
            return i(t.dataTypes[0]) || !o["*"] && i("*")
        }
        function X(e, t) {
            var n, r, i = le.ajaxSettings.flatOptions || {};
            for (r in t) void 0 !== t[r] && ((i[r] ? e: n || (n = {}))[r] = t[r]);
            return n && le.extend(!0, e, n),
            e
        }
        function U(e, t, n) {
            for (var r, i, o, a, s = e.contents,
            l = e.dataTypes;
            "*" === l[0];) l.shift(),
            void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));
            if (i) for (a in s) if (s[a] && s[a].test(i)) {
                l.unshift(a);
                break
            }
            if (l[0] in n) o = l[0];
            else {
                for (a in n) {
                    if (!l[0] || e.converters[a + " " + l[0]]) {
                        o = a;
                        break
                    }
                    r || (r = a)
                }
                o = o || r
            }
            if (o) return o !== l[0] && l.unshift(o),
            n[o]
        }
        function V(e, t, n, r) {
            var i, o, a, s, l, u = {},
            c = e.dataTypes.slice();
            if (c[1]) for (a in e.converters) u[a.toLowerCase()] = e.converters[a];
            for (o = c.shift(); o;) if (e.responseFields[o] && (n[e.responseFields[o]] = t), !l && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = o, o = c.shift()) if ("*" === o) o = l;
            else if ("*" !== l && l !== o) {
                if (a = u[l + " " + o] || u["* " + o], !a) for (i in u) if (s = i.split(" "), s[1] === o && (a = u[l + " " + s[0]] || u["* " + s[0]])) {
                    a === !0 ? a = u[i] : u[i] !== !0 && (o = s[0], c.unshift(s[1]));
                    break
                }
                if (a !== !0) if (a && e.throws) t = a(t);
                else try {
                    t = a(t)
                } catch(e) {
                    return {
                        state: "parsererror",
                        error: a ? e: "No conversion from " + l + " to " + o
                    }
                }
            }
            return {
                state: "success",
                data: t
            }
        }
        function J(e, t, n, r) {
            var i;
            if (le.isArray(t)) le.each(t,
            function(t, i) {
                n || Gt.test(e) ? r(e, i) : J(e + "[" + ("object" == typeof i ? t: "") + "]", i, n, r)
            });
            else if (n || "object" !== le.type(t)) r(e, t);
            else for (i in t) J(e + "[" + i + "]", t[i], n, r)
        }
        function Y() {
            try {
                return new n.XMLHttpRequest
            } catch(e) {}
        }
        function G() {
            try {
                return new n.ActiveXObject("Microsoft.XMLHTTP")
            } catch(e) {}
        }
        function Q(e) {
            return le.isWindow(e) ? e: 9 === e.nodeType && (e.defaultView || e.parentWindow)
        }
        var K = [],
        Z = K.slice,
        ee = K.concat,
        te = K.push,
        ne = K.indexOf,
        re = {},
        ie = re.toString,
        oe = re.hasOwnProperty,
        ae = {},
        se = "1.11.1",
        le = function(e, t) {
            return new le.fn.init(e, t)
        },
        ue = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        ce = /^-ms-/,
        fe = /-([\da-z])/gi,
        de = function(e, t) {
            return t.toUpperCase()
        };
        le.fn = le.prototype = {
            jquery: se,
            constructor: le,
            selector: "",
            length: 0,
            toArray: function() {
                return Z.call(this)
            },
            get: function(e) {
                return null != e ? e < 0 ? this[e + this.length] : this[e] : Z.call(this)
            },
            pushStack: function(e) {
                var t = le.merge(this.constructor(), e);
                return t.prevObject = this,
                t.context = this.context,
                t
            },
            each: function(e, t) {
                return le.each(this, e, t)
            },
            map: function(e) {
                return this.pushStack(le.map(this,
                function(t, n) {
                    return e.call(t, n, t)
                }))
            },
            slice: function() {
                return this.pushStack(Z.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq( - 1)
            },
            eq: function(e) {
                var t = this.length,
                n = +e + (e < 0 ? t: 0);
                return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
            },
            end: function() {
                return this.prevObject || this.constructor(null)
            },
            push: te,
            sort: K.sort,
            splice: K.splice
        },
        le.extend = le.fn.extend = function() {
            var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            l = arguments.length,
            u = !1;
            for ("boolean" == typeof a && (u = a, a = arguments[s] || {},
            s++), "object" == typeof a || le.isFunction(a) || (a = {}), s === l && (a = this, s--); s < l; s++) if (null != (i = arguments[s])) for (r in i) e = a[r],
            n = i[r],
            a !== n && (u && n && (le.isPlainObject(n) || (t = le.isArray(n))) ? (t ? (t = !1, o = e && le.isArray(e) ? e: []) : o = e && le.isPlainObject(e) ? e: {},
            a[r] = le.extend(u, o, n)) : void 0 !== n && (a[r] = n));
            return a
        },
        le.extend({
            expando: "jQuery" + (se + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(e) {
                throw new Error(e)
            },
            noop: function() {},
            isFunction: function(e) {
                return "function" === le.type(e)
            },
            isArray: Array.isArray ||
            function(e) {
                return "array" === le.type(e)
            },
            isWindow: function(e) {
                return null != e && e == e.window
            },
            isNumeric: function(e) {
                return ! le.isArray(e) && e - parseFloat(e) >= 0
            },
            isEmptyObject: function(e) {
                var t;
                for (t in e) return ! 1;
                return ! 0
            },
            isPlainObject: function(e) {
                var t;
                if (!e || "object" !== le.type(e) || e.nodeType || le.isWindow(e)) return ! 1;
                try {
                    if (e.constructor && !oe.call(e, "constructor") && !oe.call(e.constructor.prototype, "isPrototypeOf")) return ! 1
                } catch(e) {
                    return ! 1
                }
                if (ae.ownLast) for (t in e) return oe.call(e, t);
                for (t in e);
                return void 0 === t || oe.call(e, t)
            },
            type: function(e) {
                return null == e ? e + "": "object" == typeof e || "function" == typeof e ? re[ie.call(e)] || "object": typeof e
            },
            globalEval: function(e) {
                e && le.trim(e) && (n.execScript ||
                function(e) {
                    n.eval.call(n, e)
                })(e)
            },
            camelCase: function(e) {
                return e.replace(ce, "ms-").replace(fe, de)
            },
            nodeName: function(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            },
            each: function(e, t, n) {
                var r, i = 0,
                o = e.length,
                s = a(e);
                if (n) {
                    if (s) for (; i < o && (r = t.apply(e[i], n), r !== !1); i++);
                    else for (i in e) if (r = t.apply(e[i], n), r === !1) break
                } else if (s) for (; i < o && (r = t.call(e[i], i, e[i]), r !== !1); i++);
                else for (i in e) if (r = t.call(e[i], i, e[i]), r === !1) break;
                return e
            },
            trim: function(e) {
                return null == e ? "": (e + "").replace(ue, "")
            },
            makeArray: function(e, t) {
                var n = t || [];
                return null != e && (a(Object(e)) ? le.merge(n, "string" == typeof e ? [e] : e) : te.call(n, e)),
                n
            },
            inArray: function(e, t, n) {
                var r;
                if (t) {
                    if (ne) return ne.call(t, e, n);
                    for (r = t.length, n = n ? n < 0 ? Math.max(0, r + n) : n: 0; n < r; n++) if (n in t && t[n] === e) return n
                }
                return - 1
            },
            merge: function(e, t) {
                for (var n = +t.length,
                r = 0,
                i = e.length; r < n;) e[i++] = t[r++];
                if (n !== n) for (; void 0 !== t[r];) e[i++] = t[r++];
                return e.length = i,
                e
            },
            grep: function(e, t, n) {
                for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++) r = !t(e[o], o),
                r !== s && i.push(e[o]);
                return i
            },
            map: function(e, t, n) {
                var r, i = 0,
                o = e.length,
                s = a(e),
                l = [];
                if (s) for (; i < o; i++) r = t(e[i], i, n),
                null != r && l.push(r);
                else for (i in e) r = t(e[i], i, n),
                null != r && l.push(r);
                return ee.apply([], l)
            },
            guid: 1,
            proxy: function(e, t) {
                var n, r, i;
                if ("string" == typeof t && (i = e[t], t = e, e = i), le.isFunction(e)) return n = Z.call(arguments, 2),
                r = function() {
                    return e.apply(t || this, n.concat(Z.call(arguments)))
                },
                r.guid = e.guid = e.guid || le.guid++,
                r
            },
            now: function() {
                return + new Date
            },
            support: ae
        }),
        le.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),
        function(e, t) {
            re["[object " + t + "]"] = t.toLowerCase()
        });
        var pe = function(e) {
            function t(e, t, n, r) {
                var i, o, a, s, l, u, f, p, h, m;
                if ((t ? t.ownerDocument || t: W) !== H && L(t), t = t || H, n = n || [], !e || "string" != typeof e) return n;
                if (1 !== (s = t.nodeType) && 9 !== s) return [];
                if (q && !r) {
                    if (i = ye.exec(e)) if (a = i[1]) {
                        if (9 === s) {
                            if (o = t.getElementById(a), !o || !o.parentNode) return n;
                            if (o.id === a) return n.push(o),
                            n
                        } else if (t.ownerDocument && (o = t.ownerDocument.getElementById(a)) && B(t, o) && o.id === a) return n.push(o),
                        n
                    } else {
                        if (i[2]) return Z.apply(n, t.getElementsByTagName(e)),
                        n;
                        if ((a = i[3]) && w.getElementsByClassName && t.getElementsByClassName) return Z.apply(n, t.getElementsByClassName(a)),
                        n
                    }
                    if (w.qsa && (!M || !M.test(e))) {
                        if (p = f = P, h = t, m = 9 === s && e, 1 === s && "object" !== t.nodeName.toLowerCase()) {
                            for (u = E(e), (f = t.getAttribute("id")) ? p = f.replace(xe, "\\$&") : t.setAttribute("id", p), p = "[id='" + p + "'] ", l = u.length; l--;) u[l] = p + d(u[l]);
                            h = be.test(e) && c(t.parentNode) || t,
                            m = u.join(",")
                        }
                        if (m) try {
                            return Z.apply(n, h.querySelectorAll(m)),
                            n
                        } catch(e) {} finally {
                            f || t.removeAttribute("id")
                        }
                    }
                }
                return S(e.replace(le, "$1"), t, n, r)
            }
            function n() {
                function e(n, r) {
                    return t.push(n + " ") > T.cacheLength && delete e[t.shift()],
                    e[n + " "] = r
                }
                var t = [];
                return e
            }
            function r(e) {
                return e[P] = !0,
                e
            }
            function i(e) {
                var t = H.createElement("div");
                try {
                    return !! e(t)
                } catch(e) {
                    return ! 1
                } finally {
                    t.parentNode && t.parentNode.removeChild(t),
                    t = null
                }
            }
            function o(e, t) {
                for (var n = e.split("|"), r = e.length; r--;) T.attrHandle[n[r]] = t
            }
            function a(e, t) {
                var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && (~t.sourceIndex || J) - (~e.sourceIndex || J);
                if (r) return r;
                if (n) for (; n = n.nextSibling;) if (n === t) return - 1;
                return e ? 1 : -1
            }
            function s(e) {
                return function(t) {
                    var n = t.nodeName.toLowerCase();
                    return "input" === n && t.type === e
                }
            }
            function l(e) {
                return function(t) {
                    var n = t.nodeName.toLowerCase();
                    return ("input" === n || "button" === n) && t.type === e
                }
            }
            function u(e) {
                return r(function(t) {
                    return t = +t,
                    r(function(n, r) {
                        for (var i, o = e([], n.length, t), a = o.length; a--;) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                    })
                })
            }
            function c(e) {
                return e && typeof e.getElementsByTagName !== V && e
            }
            function f() {}
            function d(e) {
                for (var t = 0,
                n = e.length,
                r = ""; t < n; t++) r += e[t].value;
                return r
            }
            function p(e, t, n) {
                var r = t.dir,
                i = n && "parentNode" === r,
                o = $++;
                return t.first ?
                function(t, n, o) {
                    for (; t = t[r];) if (1 === t.nodeType || i) return e(t, n, o)
                }: function(t, n, a) {
                    var s, l, u = [R, o];
                    if (a) {
                        for (; t = t[r];) if ((1 === t.nodeType || i) && e(t, n, a)) return ! 0
                    } else for (; t = t[r];) if (1 === t.nodeType || i) {
                        if (l = t[P] || (t[P] = {}), (s = l[r]) && s[0] === R && s[1] === o) return u[2] = s[2];
                        if (l[r] = u, u[2] = e(t, n, a)) return ! 0
                    }
                }
            }
            function h(e) {
                return e.length > 1 ?
                function(t, n, r) {
                    for (var i = e.length; i--;) if (!e[i](t, n, r)) return ! 1;
                    return ! 0
                }: e[0]
            }
            function m(e, n, r) {
                for (var i = 0,
                o = n.length; i < o; i++) t(e, n[i], r);
                return r
            }
            function g(e, t, n, r, i) {
                for (var o, a = [], s = 0, l = e.length, u = null != t; s < l; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), u && t.push(s)));
                return a
            }
            function v(e, t, n, i, o, a) {
                return i && !i[P] && (i = v(i)),
                o && !o[P] && (o = v(o, a)),
                r(function(r, a, s, l) {
                    var u, c, f, d = [],
                    p = [],
                    h = a.length,
                    v = r || m(t || "*", s.nodeType ? [s] : s, []),
                    y = !e || !r && t ? v: g(v, d, e, s, l),
                    b = n ? o || (r ? e: h || i) ? [] : a: y;
                    if (n && n(y, b, s, l), i) for (u = g(b, p), i(u, [], s, l), c = u.length; c--;)(f = u[c]) && (b[p[c]] = !(y[p[c]] = f));
                    if (r) {
                        if (o || e) {
                            if (o) {
                                for (u = [], c = b.length; c--;)(f = b[c]) && u.push(y[c] = f);
                                o(null, b = [], u, l)
                            }
                            for (c = b.length; c--;)(f = b[c]) && (u = o ? te.call(r, f) : d[c]) > -1 && (r[u] = !(a[u] = f))
                        }
                    } else b = g(b === a ? b.splice(h, b.length) : b),
                    o ? o(null, a, b, l) : Z.apply(a, b)
                })
            }
            function y(e) {
                for (var t, n, r, i = e.length,
                o = T.relative[e[0].type], a = o || T.relative[" "], s = o ? 1 : 0, l = p(function(e) {
                    return e === t
                },
                a, !0), u = p(function(e) {
                    return te.call(t, e) > -1
                },
                a, !0), c = [function(e, n, r) {
                    return ! o && (r || n !== j) || ((t = n).nodeType ? l(e, n, r) : u(e, n, r))
                }]; s < i; s++) if (n = T.relative[e[s].type]) c = [p(h(c), n)];
                else {
                    if (n = T.filter[e[s].type].apply(null, e[s].matches), n[P]) {
                        for (r = ++s; r < i && !T.relative[e[r].type]; r++);
                        return v(s > 1 && h(c), s > 1 && d(e.slice(0, s - 1).concat({
                            value: " " === e[s - 2].type ? "*": ""
                        })).replace(le, "$1"), n, s < r && y(e.slice(s, r)), r < i && y(e = e.slice(r)), r < i && d(e))
                    }
                    c.push(n)
                }
                return h(c)
            }
            function b(e, n) {
                var i = n.length > 0,
                o = e.length > 0,
                a = function(r, a, s, l, u) {
                    var c, f, d, p = 0,
                    h = "0",
                    m = r && [],
                    v = [],
                    y = j,
                    b = r || o && T.find.TAG("*", u),
                    x = R += null == y ? 1 : Math.random() || .1,
                    w = b.length;
                    for (u && (j = a !== H && a); h !== w && null != (c = b[h]); h++) {
                        if (o && c) {
                            for (f = 0; d = e[f++];) if (d(c, a, s)) {
                                l.push(c);
                                break
                            }
                            u && (R = x)
                        }
                        i && ((c = !d && c) && p--, r && m.push(c))
                    }
                    if (p += h, i && h !== p) {
                        for (f = 0; d = n[f++];) d(m, v, a, s);
                        if (r) {
                            if (p > 0) for (; h--;) m[h] || v[h] || (v[h] = Q.call(l));
                            v = g(v)
                        }
                        Z.apply(l, v),
                        u && !r && v.length > 0 && p + n.length > 1 && t.uniqueSort(l)
                    }
                    return u && (R = x, j = y),
                    m
                };
                return i ? r(a) : a
            }
            var x, w, T, C, N, E, k, S, j, D, A, L, H, _, q, M, O, F, B, P = "sizzle" + -new Date,
            W = e.document,
            R = 0,
            $ = 0,
            z = n(),
            I = n(),
            X = n(),
            U = function(e, t) {
                return e === t && (A = !0),
                0
            },
            V = "undefined",
            J = 1 << 31,
            Y = {}.hasOwnProperty,
            G = [],
            Q = G.pop,
            K = G.push,
            Z = G.push,
            ee = G.slice,
            te = G.indexOf ||
            function(e) {
                for (var t = 0,
                n = this.length; t < n; t++) if (this[t] === e) return t;
                return - 1
            },
            ne = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            re = "[\\x20\\t\\r\\n\\f]",
            ie = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            oe = ie.replace("w", "w#"),
            ae = "\\[" + re + "*(" + ie + ")(?:" + re + "*([*^$|!~]?=)" + re + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + oe + "))|)" + re + "*\\]",
            se = ":(" + ie + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ae + ")*)|.*)\\)|)",
            le = new RegExp("^" + re + "+|((?:^|[^\\\\])(?:\\\\.)*)" + re + "+$", "g"),
            ue = new RegExp("^" + re + "*," + re + "*"),
            ce = new RegExp("^" + re + "*([>+~]|" + re + ")" + re + "*"),
            fe = new RegExp("=" + re + "*([^\\]'\"]*?)" + re + "*\\]", "g"),
            de = new RegExp(se),
            pe = new RegExp("^" + oe + "$"),
            he = {
                ID: new RegExp("^#(" + ie + ")"),
                CLASS: new RegExp("^\\.(" + ie + ")"),
                TAG: new RegExp("^(" + ie.replace("w", "w*") + ")"),
                ATTR: new RegExp("^" + ae),
                PSEUDO: new RegExp("^" + se),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + re + "*(even|odd|(([+-]|)(\\d*)n|)" + re + "*(?:([+-]|)" + re + "*(\\d+)|))" + re + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + ne + ")$", "i"),
                needsContext: new RegExp("^" + re + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + re + "*((?:-\\d)?\\d*)" + re + "*\\)|)(?=[^-]|$)", "i")
            },
            me = /^(?:input|select|textarea|button)$/i,
            ge = /^h\d$/i,
            ve = /^[^{]+\{\s*\[native \w/,
            ye = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            be = /[+~]/,
            xe = /'|\\/g,
            we = new RegExp("\\\\([\\da-f]{1,6}" + re + "?|(" + re + ")|.)", "ig"),
            Te = function(e, t, n) {
                var r = "0x" + t - 65536;
                return r !== r || n ? t: r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
            };
            try {
                Z.apply(G = ee.call(W.childNodes), W.childNodes),
                G[W.childNodes.length].nodeType
            } catch(e) {
                Z = {
                    apply: G.length ?
                    function(e, t) {
                        K.apply(e, ee.call(t))
                    }: function(e, t) {
                        for (var n = e.length,
                        r = 0; e[n++] = t[r++];);
                        e.length = n - 1
                    }
                }
            }
            w = t.support = {},
            N = t.isXML = function(e) {
                var t = e && (e.ownerDocument || e).documentElement;
                return !! t && "HTML" !== t.nodeName
            },
            L = t.setDocument = function(e) {
                var t, n = e ? e.ownerDocument || e: W,
                r = n.defaultView;
                return n !== H && 9 === n.nodeType && n.documentElement ? (H = n, _ = n.documentElement, q = !N(n), r && r !== r.top && (r.addEventListener ? r.addEventListener("unload",
                function() {
                    L()
                },
                !1) : r.attachEvent && r.attachEvent("onunload",
                function() {
                    L()
                })), w.attributes = i(function(e) {
                    return e.className = "i",
                    !e.getAttribute("className")
                }), w.getElementsByTagName = i(function(e) {
                    return e.appendChild(n.createComment("")),
                    !e.getElementsByTagName("*").length
                }), w.getElementsByClassName = ve.test(n.getElementsByClassName) && i(function(e) {
                    return e.innerHTML = "<div class='a'></div><div class='a i'></div>",
                    e.firstChild.className = "i",
                    2 === e.getElementsByClassName("i").length
                }), w.getById = i(function(e) {
                    return _.appendChild(e).id = P,
                    !n.getElementsByName || !n.getElementsByName(P).length
                }), w.getById ? (T.find.ID = function(e, t) {
                    if (typeof t.getElementById !== V && q) {
                        var n = t.getElementById(e);
                        return n && n.parentNode ? [n] : []
                    }
                },
                T.filter.ID = function(e) {
                    var t = e.replace(we, Te);
                    return function(e) {
                        return e.getAttribute("id") === t
                    }
                }) : (delete T.find.ID, T.filter.ID = function(e) {
                    var t = e.replace(we, Te);
                    return function(e) {
                        var n = typeof e.getAttributeNode !== V && e.getAttributeNode("id");
                        return n && n.value === t
                    }
                }), T.find.TAG = w.getElementsByTagName ?
                function(e, t) {
                    if (typeof t.getElementsByTagName !== V) return t.getElementsByTagName(e)
                }: function(e, t) {
                    var n, r = [],
                    i = 0,
                    o = t.getElementsByTagName(e);
                    if ("*" === e) {
                        for (; n = o[i++];) 1 === n.nodeType && r.push(n);
                        return r
                    }
                    return o
                },
                T.find.CLASS = w.getElementsByClassName &&
                function(e, t) {
                    if (typeof t.getElementsByClassName !== V && q) return t.getElementsByClassName(e)
                },
                O = [], M = [], (w.qsa = ve.test(n.querySelectorAll)) && (i(function(e) {
                    e.innerHTML = "<select msallowclip=''><option selected=''></option></select>",
                    e.querySelectorAll("[msallowclip^='']").length && M.push("[*^$]=" + re + "*(?:''|\"\")"),
                    e.querySelectorAll("[selected]").length || M.push("\\[" + re + "*(?:value|" + ne + ")"),
                    e.querySelectorAll(":checked").length || M.push(":checked")
                }), i(function(e) {
                    var t = n.createElement("input");
                    t.setAttribute("type", "hidden"),
                    e.appendChild(t).setAttribute("name", "D"),
                    e.querySelectorAll("[name=d]").length && M.push("name" + re + "*[*^$|!~]?="),
                    e.querySelectorAll(":enabled").length || M.push(":enabled", ":disabled"),
                    e.querySelectorAll("*,:x"),
                    M.push(",.*:")
                })), (w.matchesSelector = ve.test(F = _.matches || _.webkitMatchesSelector || _.mozMatchesSelector || _.oMatchesSelector || _.msMatchesSelector)) && i(function(e) {
                    w.disconnectedMatch = F.call(e, "div"),
                    F.call(e, "[s!='']:x"),
                    O.push("!=", se)
                }), M = M.length && new RegExp(M.join("|")), O = O.length && new RegExp(O.join("|")), t = ve.test(_.compareDocumentPosition), B = t || ve.test(_.contains) ?
                function(e, t) {
                    var n = 9 === e.nodeType ? e.documentElement: e,
                    r = t && t.parentNode;
                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                }: function(e, t) {
                    if (t) for (; t = t.parentNode;) if (t === e) return ! 0;
                    return ! 1
                },
                U = t ?
                function(e, t) {
                    if (e === t) return A = !0,
                    0;
                    var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                    return r ? r: (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & r || !w.sortDetached && t.compareDocumentPosition(e) === r ? e === n || e.ownerDocument === W && B(W, e) ? -1 : t === n || t.ownerDocument === W && B(W, t) ? 1 : D ? te.call(D, e) - te.call(D, t) : 0 : 4 & r ? -1 : 1)
                }: function(e, t) {
                    if (e === t) return A = !0,
                    0;
                    var r, i = 0,
                    o = e.parentNode,
                    s = t.parentNode,
                    l = [e],
                    u = [t];
                    if (!o || !s) return e === n ? -1 : t === n ? 1 : o ? -1 : s ? 1 : D ? te.call(D, e) - te.call(D, t) : 0;
                    if (o === s) return a(e, t);
                    for (r = e; r = r.parentNode;) l.unshift(r);
                    for (r = t; r = r.parentNode;) u.unshift(r);
                    for (; l[i] === u[i];) i++;
                    return i ? a(l[i], u[i]) : l[i] === W ? -1 : u[i] === W ? 1 : 0
                },
                n) : H
            },
            t.matches = function(e, n) {
                return t(e, null, null, n)
            },
            t.matchesSelector = function(e, n) {
                if ((e.ownerDocument || e) !== H && L(e), n = n.replace(fe, "='$1']"), w.matchesSelector && q && (!O || !O.test(n)) && (!M || !M.test(n))) try {
                    var r = F.call(e, n);
                    if (r || w.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
                } catch(e) {}
                return t(n, H, null, [e]).length > 0
            },
            t.contains = function(e, t) {
                return (e.ownerDocument || e) !== H && L(e),
                B(e, t)
            },
            t.attr = function(e, t) { (e.ownerDocument || e) !== H && L(e);
                var n = T.attrHandle[t.toLowerCase()],
                r = n && Y.call(T.attrHandle, t.toLowerCase()) ? n(e, t, !q) : void 0;
                return void 0 !== r ? r: w.attributes || !q ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value: null
            },
            t.error = function(e) {
                throw new Error("Syntax error, unrecognized expression: " + e)
            },
            t.uniqueSort = function(e) {
                var t, n = [],
                r = 0,
                i = 0;
                if (A = !w.detectDuplicates, D = !w.sortStable && e.slice(0), e.sort(U), A) {
                    for (; t = e[i++];) t === e[i] && (r = n.push(i));
                    for (; r--;) e.splice(n[r], 1)
                }
                return D = null,
                e
            },
            C = t.getText = function(e) {
                var t, n = "",
                r = 0,
                i = e.nodeType;
                if (i) {
                    if (1 === i || 9 === i || 11 === i) {
                        if ("string" == typeof e.textContent) return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += C(e)
                    } else if (3 === i || 4 === i) return e.nodeValue
                } else for (; t = e[r++];) n += C(t);
                return n
            },
            T = t.selectors = {
                cacheLength: 50,
                createPseudo: r,
                match: he,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {
                        dir: "parentNode",
                        first: !0
                    },
                    " ": {
                        dir: "parentNode"
                    },
                    "+": {
                        dir: "previousSibling",
                        first: !0
                    },
                    "~": {
                        dir: "previousSibling"
                    }
                },
                preFilter: {
                    ATTR: function(e) {
                        return e[1] = e[1].replace(we, Te),
                        e[3] = (e[3] || e[4] || e[5] || "").replace(we, Te),
                        "~=" === e[2] && (e[3] = " " + e[3] + " "),
                        e.slice(0, 4)
                    },
                    CHILD: function(e) {
                        return e[1] = e[1].toLowerCase(),
                        "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]),
                        e
                    },
                    PSEUDO: function(e) {
                        var t, n = !e[6] && e[2];
                        return he.CHILD.test(e[0]) ? null: (e[3] ? e[2] = e[4] || e[5] || "": n && de.test(n) && (t = E(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function(e) {
                        var t = e.replace(we, Te).toLowerCase();
                        return "*" === e ?
                        function() {
                            return ! 0
                        }: function(e) {
                            return e.nodeName && e.nodeName.toLowerCase() === t
                        }
                    },
                    CLASS: function(e) {
                        var t = z[e + " "];
                        return t || (t = new RegExp("(^|" + re + ")" + e + "(" + re + "|$)")) && z(e,
                        function(e) {
                            return t.test("string" == typeof e.className && e.className || typeof e.getAttribute !== V && e.getAttribute("class") || "")
                        })
                    },
                    ATTR: function(e, n, r) {
                        return function(i) {
                            var o = t.attr(i, e);
                            return null == o ? "!=" === n: !n || (o += "", "=" === n ? o === r: "!=" === n ? o !== r: "^=" === n ? r && 0 === o.indexOf(r) : "*=" === n ? r && o.indexOf(r) > -1 : "$=" === n ? r && o.slice( - r.length) === r: "~=" === n ? (" " + o + " ").indexOf(r) > -1 : "|=" === n && (o === r || o.slice(0, r.length + 1) === r + "-"))
                        }
                    },
                    CHILD: function(e, t, n, r, i) {
                        var o = "nth" !== e.slice(0, 3),
                        a = "last" !== e.slice( - 4),
                        s = "of-type" === t;
                        return 1 === r && 0 === i ?
                        function(e) {
                            return !! e.parentNode
                        }: function(t, n, l) {
                            var u, c, f, d, p, h, m = o !== a ? "nextSibling": "previousSibling",
                            g = t.parentNode,
                            v = s && t.nodeName.toLowerCase(),
                            y = !l && !s;
                            if (g) {
                                if (o) {
                                    for (; m;) {
                                        for (f = t; f = f[m];) if (s ? f.nodeName.toLowerCase() === v: 1 === f.nodeType) return ! 1;
                                        h = m = "only" === e && !h && "nextSibling"
                                    }
                                    return ! 0
                                }
                                if (h = [a ? g.firstChild: g.lastChild], a && y) {
                                    for (c = g[P] || (g[P] = {}), u = c[e] || [], p = u[0] === R && u[1], d = u[0] === R && u[2], f = p && g.childNodes[p]; f = ++p && f && f[m] || (d = p = 0) || h.pop();) if (1 === f.nodeType && ++d && f === t) {
                                        c[e] = [R, p, d];
                                        break
                                    }
                                } else if (y && (u = (t[P] || (t[P] = {}))[e]) && u[0] === R) d = u[1];
                                else for (; (f = ++p && f && f[m] || (d = p = 0) || h.pop()) && ((s ? f.nodeName.toLowerCase() !== v: 1 !== f.nodeType) || !++d || (y && ((f[P] || (f[P] = {}))[e] = [R, d]), f !== t)););
                                return d -= i,
                                d === r || d % r === 0 && d / r >= 0
                            }
                        }
                    },
                    PSEUDO: function(e, n) {
                        var i, o = T.pseudos[e] || T.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
                        return o[P] ? o(n) : o.length > 1 ? (i = [e, e, "", n], T.setFilters.hasOwnProperty(e.toLowerCase()) ? r(function(e, t) {
                            for (var r, i = o(e, n), a = i.length; a--;) r = te.call(e, i[a]),
                            e[r] = !(t[r] = i[a])
                        }) : function(e) {
                            return o(e, 0, i)
                        }) : o
                    }
                },
                pseudos: {
                    not: r(function(e) {
                        var t = [],
                        n = [],
                        i = k(e.replace(le, "$1"));
                        return i[P] ? r(function(e, t, n, r) {
                            for (var o, a = i(e, null, r, []), s = e.length; s--;)(o = a[s]) && (e[s] = !(t[s] = o))
                        }) : function(e, r, o) {
                            return t[0] = e,
                            i(t, null, o, n),
                            !n.pop()
                        }
                    }),
                    has: r(function(e) {
                        return function(n) {
                            return t(e, n).length > 0
                        }
                    }),
                    contains: r(function(e) {
                        return function(t) {
                            return (t.textContent || t.innerText || C(t)).indexOf(e) > -1
                        }
                    }),
                    lang: r(function(e) {
                        return pe.test(e || "") || t.error("unsupported lang: " + e),
                        e = e.replace(we, Te).toLowerCase(),
                        function(t) {
                            var n;
                            do
                            if (n = q ? t.lang: t.getAttribute("xml:lang") || t.getAttribute("lang")) return n = n.toLowerCase(),
                            n === e || 0 === n.indexOf(e + "-");
                            while ((t = t.parentNode) && 1 === t.nodeType);
                            return ! 1
                        }
                    }),
                    target: function(t) {
                        var n = e.location && e.location.hash;
                        return n && n.slice(1) === t.id
                    },
                    root: function(e) {
                        return e === _
                    },
                    focus: function(e) {
                        return e === H.activeElement && (!H.hasFocus || H.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                    },
                    enabled: function(e) {
                        return e.disabled === !1
                    },
                    disabled: function(e) {
                        return e.disabled === !0
                    },
                    checked: function(e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && !!e.checked || "option" === t && !!e.selected
                    },
                    selected: function(e) {
                        return e.parentNode && e.parentNode.selectedIndex,
                        e.selected === !0
                    },
                    empty: function(e) {
                        for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return ! 1;
                        return ! 0
                    },
                    parent: function(e) {
                        return ! T.pseudos.empty(e)
                    },
                    header: function(e) {
                        return ge.test(e.nodeName)
                    },
                    input: function(e) {
                        return me.test(e.nodeName)
                    },
                    button: function(e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && "button" === e.type || "button" === t
                    },
                    text: function(e) {
                        var t;
                        return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                    },
                    first: u(function() {
                        return [0]
                    }),
                    last: u(function(e, t) {
                        return [t - 1]
                    }),
                    eq: u(function(e, t, n) {
                        return [n < 0 ? n + t: n]
                    }),
                    even: u(function(e, t) {
                        for (var n = 0; n < t; n += 2) e.push(n);
                        return e
                    }),
                    odd: u(function(e, t) {
                        for (var n = 1; n < t; n += 2) e.push(n);
                        return e
                    }),
                    lt: u(function(e, t, n) {
                        for (var r = n < 0 ? n + t: n; --r >= 0;) e.push(r);
                        return e
                    }),
                    gt: u(function(e, t, n) {
                        for (var r = n < 0 ? n + t: n; ++r < t;) e.push(r);
                        return e
                    })
                }
            },
            T.pseudos.nth = T.pseudos.eq;
            for (x in {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) T.pseudos[x] = s(x);
            for (x in {
                submit: !0,
                reset: !0
            }) T.pseudos[x] = l(x);
            return f.prototype = T.filters = T.pseudos,
            T.setFilters = new f,
            E = t.tokenize = function(e, n) {
                var r, i, o, a, s, l, u, c = I[e + " "];
                if (c) return n ? 0 : c.slice(0);
                for (s = e, l = [], u = T.preFilter; s;) {
                    r && !(i = ue.exec(s)) || (i && (s = s.slice(i[0].length) || s), l.push(o = [])),
                    r = !1,
                    (i = ce.exec(s)) && (r = i.shift(), o.push({
                        value: r,
                        type: i[0].replace(le, " ")
                    }), s = s.slice(r.length));
                    for (a in T.filter) ! (i = he[a].exec(s)) || u[a] && !(i = u[a](i)) || (r = i.shift(), o.push({
                        value: r,
                        type: a,
                        matches: i
                    }), s = s.slice(r.length));
                    if (!r) break
                }
                return n ? s.length: s ? t.error(e) : I(e, l).slice(0)
            },
            k = t.compile = function(e, t) {
                var n, r = [],
                i = [],
                o = X[e + " "];
                if (!o) {
                    for (t || (t = E(e)), n = t.length; n--;) o = y(t[n]),
                    o[P] ? r.push(o) : i.push(o);
                    o = X(e, b(i, r)),
                    o.selector = e
                }
                return o
            },
            S = t.select = function(e, t, n, r) {
                var i, o, a, s, l, u = "function" == typeof e && e,
                f = !r && E(e = u.selector || e);
                if (n = n || [], 1 === f.length) {
                    if (o = f[0] = f[0].slice(0), o.length > 2 && "ID" === (a = o[0]).type && w.getById && 9 === t.nodeType && q && T.relative[o[1].type]) {
                        if (t = (T.find.ID(a.matches[0].replace(we, Te), t) || [])[0], !t) return n;
                        u && (t = t.parentNode),
                        e = e.slice(o.shift().value.length)
                    }
                    for (i = he.needsContext.test(e) ? 0 : o.length; i--&&(a = o[i], !T.relative[s = a.type]);) if ((l = T.find[s]) && (r = l(a.matches[0].replace(we, Te), be.test(o[0].type) && c(t.parentNode) || t))) {
                        if (o.splice(i, 1), e = r.length && d(o), !e) return Z.apply(n, r),
                        n;
                        break
                    }
                }
                return (u || k(e, f))(r, t, !q, n, be.test(e) && c(t.parentNode) || t),
                n
            },
            w.sortStable = P.split("").sort(U).join("") === P,
            w.detectDuplicates = !!A,
            L(),
            w.sortDetached = i(function(e) {
                return 1 & e.compareDocumentPosition(H.createElement("div"))
            }),
            i(function(e) {
                return e.innerHTML = "<a href='#'></a>",
                "#" === e.firstChild.getAttribute("href")
            }) || o("type|href|height|width",
            function(e, t, n) {
                if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
            }),
            w.attributes && i(function(e) {
                return e.innerHTML = "<input/>",
                e.firstChild.setAttribute("value", ""),
                "" === e.firstChild.getAttribute("value")
            }) || o("value",
            function(e, t, n) {
                if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
            }),
            i(function(e) {
                return null == e.getAttribute("disabled")
            }) || o(ne,
            function(e, t, n) {
                var r;
                if (!n) return e[t] === !0 ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value: null
            }),
            t
        } (n);
        le.find = pe,
        le.expr = pe.selectors,
        le.expr[":"] = le.expr.pseudos,
        le.unique = pe.uniqueSort,
        le.text = pe.getText,
        le.isXMLDoc = pe.isXML,
        le.contains = pe.contains;
        var he = le.expr.match.needsContext,
        me = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
        ge = /^.[^:#\[\.,]*$/;
        le.filter = function(e, t, n) {
            var r = t[0];
            return n && (e = ":not(" + e + ")"),
            1 === t.length && 1 === r.nodeType ? le.find.matchesSelector(r, e) ? [r] : [] : le.find.matches(e, le.grep(t,
            function(e) {
                return 1 === e.nodeType
            }))
        },
        le.fn.extend({
            find: function(e) {
                var t, n = [],
                r = this,
                i = r.length;
                if ("string" != typeof e) return this.pushStack(le(e).filter(function() {
                    for (t = 0; t < i; t++) if (le.contains(r[t], this)) return ! 0
                }));
                for (t = 0; t < i; t++) le.find(e, r[t], n);
                return n = this.pushStack(i > 1 ? le.unique(n) : n),
                n.selector = this.selector ? this.selector + " " + e: e,
                n
            },
            filter: function(e) {
                return this.pushStack(s(this, e || [], !1))
            },
            not: function(e) {
                return this.pushStack(s(this, e || [], !0))
            },
            is: function(e) {
                return !! s(this, "string" == typeof e && he.test(e) ? le(e) : e || [], !1).length
            }
        });
        var ve, ye = n.document,
        be = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
        xe = le.fn.init = function(e, t) {
            var n, r;
            if (!e) return this;
            if ("string" == typeof e) {
                if (n = "<" === e.charAt(0) && ">" === e.charAt(e.length - 1) && e.length >= 3 ? [null, e, null] : be.exec(e), !n || !n[1] && t) return ! t || t.jquery ? (t || ve).find(e) : this.constructor(t).find(e);
                if (n[1]) {
                    if (t = t instanceof le ? t[0] : t, le.merge(this, le.parseHTML(n[1], t && t.nodeType ? t.ownerDocument || t: ye, !0)), me.test(n[1]) && le.isPlainObject(t)) for (n in t) le.isFunction(this[n]) ? this[n](t[n]) : this.attr(n, t[n]);
                    return this
                }
                if (r = ye.getElementById(n[2]), r && r.parentNode) {
                    if (r.id !== n[2]) return ve.find(e);
                    this.length = 1,
                    this[0] = r
                }
                return this.context = ye,
                this.selector = e,
                this
            }
            return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : le.isFunction(e) ? "undefined" != typeof ve.ready ? ve.ready(e) : e(le) : (void 0 !== e.selector && (this.selector = e.selector, this.context = e.context), le.makeArray(e, this))
        };
        xe.prototype = le.fn,
        ve = le(ye);
        var we = /^(?:parents|prev(?:Until|All))/,
        Te = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
        le.extend({
            dir: function(e, t, n) {
                for (var r = [], i = e[t]; i && 9 !== i.nodeType && (void 0 === n || 1 !== i.nodeType || !le(i).is(n));) 1 === i.nodeType && r.push(i),
                i = i[t];
                return r
            },
            sibling: function(e, t) {
                for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                return n
            }
        }),
        le.fn.extend({
            has: function(e) {
                var t, n = le(e, this),
                r = n.length;
                return this.filter(function() {
                    for (t = 0; t < r; t++) if (le.contains(this, n[t])) return ! 0
                })
            },
            closest: function(e, t) {
                for (var n, r = 0,
                i = this.length,
                o = [], a = he.test(e) || "string" != typeof e ? le(e, t || this.context) : 0; r < i; r++) for (n = this[r]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && le.find.matchesSelector(n, e))) {
                    o.push(n);
                    break
                }
                return this.pushStack(o.length > 1 ? le.unique(o) : o)
            },
            index: function(e) {
                return e ? "string" == typeof e ? le.inArray(this[0], le(e)) : le.inArray(e.jquery ? e[0] : e, this) : this[0] && this[0].parentNode ? this.first().prevAll().length: -1
            },
            add: function(e, t) {
                return this.pushStack(le.unique(le.merge(this.get(), le(e, t))))
            },
            addBack: function(e) {
                return this.add(null == e ? this.prevObject: this.prevObject.filter(e))
            }
        }),
        le.each({
            parent: function(e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t: null
            },
            parents: function(e) {
                return le.dir(e, "parentNode")
            },
            parentsUntil: function(e, t, n) {
                return le.dir(e, "parentNode", n)
            },
            next: function(e) {
                return l(e, "nextSibling")
            },
            prev: function(e) {
                return l(e, "previousSibling")
            },
            nextAll: function(e) {
                return le.dir(e, "nextSibling")
            },
            prevAll: function(e) {
                return le.dir(e, "previousSibling")
            },
            nextUntil: function(e, t, n) {
                return le.dir(e, "nextSibling", n)
            },
            prevUntil: function(e, t, n) {
                return le.dir(e, "previousSibling", n)
            },
            siblings: function(e) {
                return le.sibling((e.parentNode || {}).firstChild, e)
            },
            children: function(e) {
                return le.sibling(e.firstChild)
            },
            contents: function(e) {
                return le.nodeName(e, "iframe") ? e.contentDocument || e.contentWindow.document: le.merge([], e.childNodes)
            }
        },
        function(e, t) {
            le.fn[e] = function(n, r) {
                var i = le.map(this, t, n);
                return "Until" !== e.slice( - 5) && (r = n),
                r && "string" == typeof r && (i = le.filter(r, i)),
                this.length > 1 && (Te[e] || (i = le.unique(i)), we.test(e) && (i = i.reverse())),
                this.pushStack(i)
            }
        });
        var Ce = /\S+/g,
        Ne = {};
        le.Callbacks = function(e) {
            e = "string" == typeof e ? Ne[e] || u(e) : le.extend({},
            e);
            var t, n, r, i, o, a, s = [],
            l = !e.once && [],
            c = function(u) {
                for (n = e.memory && u, r = !0, o = a || 0, a = 0, i = s.length, t = !0; s && o < i; o++) if (s[o].apply(u[0], u[1]) === !1 && e.stopOnFalse) {
                    n = !1;
                    break
                }
                t = !1,
                s && (l ? l.length && c(l.shift()) : n ? s = [] : f.disable())
            },
            f = {
                add: function() {
                    if (s) {
                        var r = s.length; !
                        function t(n) {
                            le.each(n,
                            function(n, r) {
                                var i = le.type(r);
                                "function" === i ? e.unique && f.has(r) || s.push(r) : r && r.length && "string" !== i && t(r)
                            })
                        } (arguments),
                        t ? i = s.length: n && (a = r, c(n))
                    }
                    return this
                },
                remove: function() {
                    return s && le.each(arguments,
                    function(e, n) {
                        for (var r; (r = le.inArray(n, s, r)) > -1;) s.splice(r, 1),
                        t && (r <= i && i--, r <= o && o--)
                    }),
                    this
                },
                has: function(e) {
                    return e ? le.inArray(e, s) > -1 : !(!s || !s.length)
                },
                empty: function() {
                    return s = [],
                    i = 0,
                    this
                },
                disable: function() {
                    return s = l = n = void 0,
                    this
                },
                disabled: function() {
                    return ! s
                },
                lock: function() {
                    return l = void 0,
                    n || f.disable(),
                    this
                },
                locked: function() {
                    return ! l
                },
                fireWith: function(e, n) {
                    return ! s || r && !l || (n = n || [], n = [e, n.slice ? n.slice() : n], t ? l.push(n) : c(n)),
                    this
                },
                fire: function() {
                    return f.fireWith(this, arguments),
                    this
                },
                fired: function() {
                    return !! r
                }
            };
            return f
        },
        le.extend({
            Deferred: function(e) {
                var t = [["resolve", "done", le.Callbacks("once memory"), "resolved"], ["reject", "fail", le.Callbacks("once memory"), "rejected"], ["notify", "progress", le.Callbacks("memory")]],
                n = "pending",
                r = {
                    state: function() {
                        return n
                    },
                    always: function() {
                        return i.done(arguments).fail(arguments),
                        this
                    },
                    then: function() {
                        var e = arguments;
                        return le.Deferred(function(n) {
                            le.each(t,
                            function(t, o) {
                                var a = le.isFunction(e[t]) && e[t];
                                i[o[1]](function() {
                                    var e = a && a.apply(this, arguments);
                                    e && le.isFunction(e.promise) ? e.promise().done(n.resolve).fail(n.reject).progress(n.notify) : n[o[0] + "With"](this === r ? n.promise() : this, a ? [e] : arguments)
                                })
                            }),
                            e = null
                        }).promise()
                    },
                    promise: function(e) {
                        return null != e ? le.extend(e, r) : r
                    }
                },
                i = {};
                return r.pipe = r.then,
                le.each(t,
                function(e, o) {
                    var a = o[2],
                    s = o[3];
                    r[o[1]] = a.add,
                    s && a.add(function() {
                        n = s
                    },
                    t[1 ^ e][2].disable, t[2][2].lock),
                    i[o[0]] = function() {
                        return i[o[0] + "With"](this === i ? r: this, arguments),
                        this
                    },
                    i[o[0] + "With"] = a.fireWith
                }),
                r.promise(i),
                e && e.call(i, i),
                i
            },
            when: function(e) {
                var t = 0,
                n = Z.call(arguments),
                r = n.length,
                i = 1 !== r || e && le.isFunction(e.promise) ? r: 0,
                o = 1 === i ? e: le.Deferred(),
                a = function(e, t, n) {
                    return function(r) {
                        t[e] = this,
                        n[e] = arguments.length > 1 ? Z.call(arguments) : r,
                        n === s ? o.notifyWith(t, n) : --i || o.resolveWith(t, n)
                    }
                },
                s,
                l,
                u;
                if (r > 1) for (s = new Array(r), l = new Array(r), u = new Array(r); t < r; t++) n[t] && le.isFunction(n[t].promise) ? n[t].promise().done(a(t, u, n)).fail(o.reject).progress(a(t, l, s)) : --i;
                return i || o.resolveWith(u, n),
                o.promise()
            }
        });
        var Ee;
        le.fn.ready = function(e) {
            return le.ready.promise().done(e),
            this
        },
        le.extend({
            isReady: !1,
            readyWait: 1,
            holdReady: function(e) {
                e ? le.readyWait++:le.ready(!0)
            },
            ready: function(e) {
                if (e === !0 ? !--le.readyWait: !le.isReady) {
                    if (!ye.body) return setTimeout(le.ready);
                    le.isReady = !0,
                    e !== !0 && --le.readyWait > 0 || (Ee.resolveWith(ye, [le]), le.fn.triggerHandler && (le(ye).triggerHandler("ready"), le(ye).off("ready")))
                }
            }
        }),
        le.ready.promise = function(e) {
            if (!Ee) if (Ee = le.Deferred(), "complete" === ye.readyState) setTimeout(le.ready);
            else if (ye.addEventListener) ye.addEventListener("DOMContentLoaded", f, !1),
            n.addEventListener("load", f, !1);
            else {
                ye.attachEvent("onreadystatechange", f),
                n.attachEvent("onload", f);
                var t = !1;
                try {
                    t = null == n.frameElement && ye.documentElement
                } catch(e) {}
                t && t.doScroll && !
                function e() {
                    if (!le.isReady) {
                        try {
                            t.doScroll("left")
                        } catch(t) {
                            return setTimeout(e, 50)
                        }
                        c(),
                        le.ready()
                    }
                } ()
            }
            return Ee.promise(e)
        };
        var ke = "undefined",
        Se;
        for (Se in le(ae)) break;
        ae.ownLast = "0" !== Se,
        ae.inlineBlockNeedsLayout = !1,
        le(function() {
            var e, t, n, r;
            n = ye.getElementsByTagName("body")[0],
            n && n.style && (t = ye.createElement("div"), r = ye.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", n.appendChild(r).appendChild(t), typeof t.style.zoom !== ke && (t.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", ae.inlineBlockNeedsLayout = e = 3 === t.offsetWidth, e && (n.style.zoom = 1)), n.removeChild(r))
        }),
        function() {
            var e = ye.createElement("div");
            if (null == ae.deleteExpando) {
                ae.deleteExpando = !0;
                try {
                    delete e.test
                } catch(e) {
                    ae.deleteExpando = !1
                }
            }
            e = null
        } (),
        le.acceptData = function(e) {
            var t = le.noData[(e.nodeName + " ").toLowerCase()],
            n = +e.nodeType || 1;
            return (1 === n || 9 === n) && (!t || t !== !0 && e.getAttribute("classid") === t)
        };
        var je = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        De = /([A-Z])/g;
        le.extend({
            cache: {},
            noData: {
                "applet ": !0,
                "embed ": !0,
                "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
            },
            hasData: function(e) {
                return e = e.nodeType ? le.cache[e[le.expando]] : e[le.expando],
                !!e && !p(e)
            },
            data: function(e, t, n) {
                return h(e, t, n)
            },
            removeData: function(e, t) {
                return m(e, t)
            },
            _data: function(e, t, n) {
                return h(e, t, n, !0)
            },
            _removeData: function(e, t) {
                return m(e, t, !0)
            }
        }),
        le.fn.extend({
            data: function(e, t) {
                var n, r, i, o = this[0],
                a = o && o.attributes;
                if (void 0 === e) {
                    if (this.length && (i = le.data(o), 1 === o.nodeType && !le._data(o, "parsedAttrs"))) {
                        for (n = a.length; n--;) a[n] && (r = a[n].name, 0 === r.indexOf("data-") && (r = le.camelCase(r.slice(5)), d(o, r, i[r])));
                        le._data(o, "parsedAttrs", !0)
                    }
                    return i
                }
                return "object" == typeof e ? this.each(function() {
                    le.data(this, e)
                }) : arguments.length > 1 ? this.each(function() {
                    le.data(this, e, t)
                }) : o ? d(o, e, le.data(o, e)) : void 0
            },
            removeData: function(e) {
                return this.each(function() {
                    le.removeData(this, e)
                })
            }
        }),
        le.extend({
            queue: function(e, t, n) {
                var r;
                if (e) return t = (t || "fx") + "queue",
                r = le._data(e, t),
                n && (!r || le.isArray(n) ? r = le._data(e, t, le.makeArray(n)) : r.push(n)),
                r || []
            },
            dequeue: function(e, t) {
                t = t || "fx";
                var n = le.queue(e, t),
                r = n.length,
                i = n.shift(),
                o = le._queueHooks(e, t),
                a = function() {
                    le.dequeue(e, t)
                };
                "inprogress" === i && (i = n.shift(), r--),
                i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)),
                !r && o && o.empty.fire()
            },
            _queueHooks: function(e, t) {
                var n = t + "queueHooks";
                return le._data(e, n) || le._data(e, n, {
                    empty: le.Callbacks("once memory").add(function() {
                        le._removeData(e, t + "queue"),
                        le._removeData(e, n)
                    })
                })
            }
        }),
        le.fn.extend({
            queue: function(e, t) {
                var n = 2;
                return "string" != typeof e && (t = e, e = "fx", n--),
                arguments.length < n ? le.queue(this[0], e) : void 0 === t ? this: this.each(function() {
                    var n = le.queue(this, e, t);
                    le._queueHooks(this, e),
                    "fx" === e && "inprogress" !== n[0] && le.dequeue(this, e)
                })
            },
            dequeue: function(e) {
                return this.each(function() {
                    le.dequeue(this, e)
                })
            },
            clearQueue: function(e) {
                return this.queue(e || "fx", [])
            },
            promise: function(e, t) {
                var n, r = 1,
                i = le.Deferred(),
                o = this,
                a = this.length,
                s = function() {--r || i.resolveWith(o, [o])
                };
                for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) n = le._data(o[a], e + "queueHooks"),
                n && n.empty && (r++, n.empty.add(s));
                return s(),
                i.promise(t)
            }
        });
        var Ae = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        Le = ["Top", "Right", "Bottom", "Left"],
        He = function(e, t) {
            return e = t || e,
            "none" === le.css(e, "display") || !le.contains(e.ownerDocument, e)
        },
        _e = le.access = function(e, t, n, r, i, o, a) {
            var s = 0,
            l = e.length,
            u = null == n;
            if ("object" === le.type(n)) {
                i = !0;
                for (s in n) le.access(e, t, s, n[s], !0, o, a)
            } else if (void 0 !== r && (i = !0, le.isFunction(r) || (a = !0), u && (a ? (t.call(e, r), t = null) : (u = t, t = function(e, t, n) {
                return u.call(le(e), n)
            })), t)) for (; s < l; s++) t(e[s], n, a ? r: r.call(e[s], s, t(e[s], n)));
            return i ? e: u ? t.call(e) : l ? t(e[0], n) : o
        },
        qe = /^(?:checkbox|radio)$/i; !
        function() {
            var e = ye.createElement("input"),
            t = ye.createElement("div"),
            n = ye.createDocumentFragment();
            if (t.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", ae.leadingWhitespace = 3 === t.firstChild.nodeType, ae.tbody = !t.getElementsByTagName("tbody").length, ae.htmlSerialize = !!t.getElementsByTagName("link").length, ae.html5Clone = "<:nav></:nav>" !== ye.createElement("nav").cloneNode(!0).outerHTML, e.type = "checkbox", e.checked = !0, n.appendChild(e), ae.appendChecked = e.checked, t.innerHTML = "<textarea>x</textarea>", ae.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue, n.appendChild(t), t.innerHTML = "<input type='radio' checked='checked' name='t'/>", ae.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, ae.noCloneEvent = !0, t.attachEvent && (t.attachEvent("onclick",
            function() {
                ae.noCloneEvent = !1
            }), t.cloneNode(!0).click()), null == ae.deleteExpando) {
                ae.deleteExpando = !0;
                try {
                    delete t.test
                } catch(e) {
                    ae.deleteExpando = !1
                }
            }
        } (),
        function() {
            var e, t, r = ye.createElement("div");
            for (e in {
                submit: !0,
                change: !0,
                focusin: !0
            }) t = "on" + e,
            (ae[e + "Bubbles"] = t in n) || (r.setAttribute(t, "t"), ae[e + "Bubbles"] = r.attributes[t].expando === !1);
            r = null
        } ();
        var Me = /^(?:input|select|textarea)$/i,
        Oe = /^key/,
        Fe = /^(?:mouse|pointer|contextmenu)|click/,
        Be = /^(?:focusinfocus|focusoutblur)$/,
        Pe = /^([^.]*)(?:\.(.+)|)$/;
        le.event = {
            global: {},
            add: function(e, t, n, r, i) {
                var o, a, s, l, u, c, f, d, p, h, m, g = le._data(e);
                if (g) {
                    for (n.handler && (l = n, n = l.handler, i = l.selector), n.guid || (n.guid = le.guid++), (a = g.events) || (a = g.events = {}), (c = g.handle) || (c = g.handle = function(e) {
                        return typeof le === ke || e && le.event.triggered === e.type ? void 0 : le.event.dispatch.apply(c.elem, arguments)
                    },
                    c.elem = e), t = (t || "").match(Ce) || [""], s = t.length; s--;) o = Pe.exec(t[s]) || [],
                    p = m = o[1],
                    h = (o[2] || "").split(".").sort(),
                    p && (u = le.event.special[p] || {},
                    p = (i ? u.delegateType: u.bindType) || p, u = le.event.special[p] || {},
                    f = le.extend({
                        type: p,
                        origType: m,
                        data: r,
                        handler: n,
                        guid: n.guid,
                        selector: i,
                        needsContext: i && le.expr.match.needsContext.test(i),
                        namespace: h.join(".")
                    },
                    l), (d = a[p]) || (d = a[p] = [], d.delegateCount = 0, u.setup && u.setup.call(e, r, h, c) !== !1 || (e.addEventListener ? e.addEventListener(p, c, !1) : e.attachEvent && e.attachEvent("on" + p, c))), u.add && (u.add.call(e, f), f.handler.guid || (f.handler.guid = n.guid)), i ? d.splice(d.delegateCount++, 0, f) : d.push(f), le.event.global[p] = !0);
                    e = null
                }
            },
            remove: function(e, t, n, r, i) {
                var o, a, s, l, u, c, f, d, p, h, m, g = le.hasData(e) && le._data(e);
                if (g && (c = g.events)) {
                    for (t = (t || "").match(Ce) || [""], u = t.length; u--;) if (s = Pe.exec(t[u]) || [], p = m = s[1], h = (s[2] || "").split(".").sort(), p) {
                        for (f = le.event.special[p] || {},
                        p = (r ? f.delegateType: f.bindType) || p, d = c[p] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), l = o = d.length; o--;) a = d[o],
                        !i && m !== a.origType || n && n.guid !== a.guid || s && !s.test(a.namespace) || r && r !== a.selector && ("**" !== r || !a.selector) || (d.splice(o, 1), a.selector && d.delegateCount--, f.remove && f.remove.call(e, a));
                        l && !d.length && (f.teardown && f.teardown.call(e, h, g.handle) !== !1 || le.removeEvent(e, p, g.handle), delete c[p])
                    } else for (p in c) le.event.remove(e, p + t[u], n, r, !0);
                    le.isEmptyObject(c) && (delete g.handle, le._removeData(e, "events"))
                }
            },
            trigger: function(e, t, r, i) {
                var o, a, s, l, u, c, f, d = [r || ye],
                p = oe.call(e, "type") ? e.type: e,
                h = oe.call(e, "namespace") ? e.namespace.split(".") : [];
                if (s = c = r = r || ye, 3 !== r.nodeType && 8 !== r.nodeType && !Be.test(p + le.event.triggered) && (p.indexOf(".") >= 0 && (h = p.split("."), p = h.shift(), h.sort()), a = p.indexOf(":") < 0 && "on" + p, e = e[le.expando] ? e: new le.Event(p, "object" == typeof e && e), e.isTrigger = i ? 2 : 3, e.namespace = h.join("."), e.namespace_re = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = r), t = null == t ? [e] : le.makeArray(t, [e]), u = le.event.special[p] || {},
                i || !u.trigger || u.trigger.apply(r, t) !== !1)) {
                    if (!i && !u.noBubble && !le.isWindow(r)) {
                        for (l = u.delegateType || p, Be.test(l + p) || (s = s.parentNode); s; s = s.parentNode) d.push(s),
                        c = s;
                        c === (r.ownerDocument || ye) && d.push(c.defaultView || c.parentWindow || n)
                    }
                    for (f = 0; (s = d[f++]) && !e.isPropagationStopped();) e.type = f > 1 ? l: u.bindType || p,
                    o = (le._data(s, "events") || {})[e.type] && le._data(s, "handle"),
                    o && o.apply(s, t),
                    o = a && s[a],
                    o && o.apply && le.acceptData(s) && (e.result = o.apply(s, t), e.result === !1 && e.preventDefault());
                    if (e.type = p, !i && !e.isDefaultPrevented() && (!u._default || u._default.apply(d.pop(), t) === !1) && le.acceptData(r) && a && r[p] && !le.isWindow(r)) {
                        c = r[a],
                        c && (r[a] = null),
                        le.event.triggered = p;
                        try {
                            r[p]()
                        } catch(e) {}
                        le.event.triggered = void 0,
                        c && (r[a] = c)
                    }
                    return e.result
                }
            },
            dispatch: function(e) {
                e = le.event.fix(e);
                var t, n, r, i, o, a = [],
                s = Z.call(arguments),
                l = (le._data(this, "events") || {})[e.type] || [],
                u = le.event.special[e.type] || {};
                if (s[0] = e, e.delegateTarget = this, !u.preDispatch || u.preDispatch.call(this, e) !== !1) {
                    for (a = le.event.handlers.call(this, e, l), t = 0; (i = a[t++]) && !e.isPropagationStopped();) for (e.currentTarget = i.elem, o = 0; (r = i.handlers[o++]) && !e.isImmediatePropagationStopped();) e.namespace_re && !e.namespace_re.test(r.namespace) || (e.handleObj = r, e.data = r.data, n = ((le.event.special[r.origType] || {}).handle || r.handler).apply(i.elem, s), void 0 !== n && (e.result = n) === !1 && (e.preventDefault(), e.stopPropagation()));
                    return u.postDispatch && u.postDispatch.call(this, e),
                    e.result
                }
            },
            handlers: function(e, t) {
                var n, r, i, o, a = [],
                s = t.delegateCount,
                l = e.target;
                if (s && l.nodeType && (!e.button || "click" !== e.type)) for (; l != this; l = l.parentNode || this) if (1 === l.nodeType && (l.disabled !== !0 || "click" !== e.type)) {
                    for (i = [], o = 0; o < s; o++) r = t[o],
                    n = r.selector + " ",
                    void 0 === i[n] && (i[n] = r.needsContext ? le(n, this).index(l) >= 0 : le.find(n, this, null, [l]).length),
                    i[n] && i.push(r);
                    i.length && a.push({
                        elem: l,
                        handlers: i
                    })
                }
                return s < t.length && a.push({
                    elem: this,
                    handlers: t.slice(s)
                }),
                a
            },
            fix: function(e) {
                if (e[le.expando]) return e;
                var t, n, r, i = e.type,
                o = e,
                a = this.fixHooks[i];
                for (a || (this.fixHooks[i] = a = Fe.test(i) ? this.mouseHooks: Oe.test(i) ? this.keyHooks: {}), r = a.props ? this.props.concat(a.props) : this.props, e = new le.Event(o), t = r.length; t--;) n = r[t],
                e[n] = o[n];
                return e.target || (e.target = o.srcElement || ye),
                3 === e.target.nodeType && (e.target = e.target.parentNode),
                e.metaKey = !!e.metaKey,
                a.filter ? a.filter(e, o) : e
            },
            props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
            fixHooks: {},
            keyHooks: {
                props: "char charCode key keyCode".split(" "),
                filter: function(e, t) {
                    return null == e.which && (e.which = null != t.charCode ? t.charCode: t.keyCode),
                    e
                }
            },
            mouseHooks: {
                props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                filter: function(e, t) {
                    var n, r, i, o = t.button,
                    a = t.fromElement;
                    return null == e.pageX && null != t.clientX && (r = e.target.ownerDocument || ye, i = r.documentElement, n = r.body, e.pageX = t.clientX + (i && i.scrollLeft || n && n.scrollLeft || 0) - (i && i.clientLeft || n && n.clientLeft || 0), e.pageY = t.clientY + (i && i.scrollTop || n && n.scrollTop || 0) - (i && i.clientTop || n && n.clientTop || 0)),
                    !e.relatedTarget && a && (e.relatedTarget = a === e.target ? t.toElement: a),
                    e.which || void 0 === o || (e.which = 1 & o ? 1 : 2 & o ? 3 : 4 & o ? 2 : 0),
                    e
                }
            },
            special: {
                load: {
                    noBubble: !0
                },
                focus: {
                    trigger: function() {
                        if (this !== y() && this.focus) try {
                            return this.focus(),
                            !1
                        } catch(e) {}
                    },
                    delegateType: "focusin"
                },
                blur: {
                    trigger: function() {
                        if (this === y() && this.blur) return this.blur(),
                        !1
                    },
                    delegateType: "focusout"
                },
                click: {
                    trigger: function() {
                        if (le.nodeName(this, "input") && "checkbox" === this.type && this.click) return this.click(),
                        !1
                    },
                    _default: function(e) {
                        return le.nodeName(e.target, "a")
                    }
                },
                beforeunload: {
                    postDispatch: function(e) {
                        void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                    }
                }
            },
            simulate: function(e, t, n, r) {
                var i = le.extend(new le.Event, n, {
                    type: e,
                    isSimulated: !0,
                    originalEvent: {}
                });
                r ? le.event.trigger(i, null, t) : le.event.dispatch.call(t, i),
                i.isDefaultPrevented() && n.preventDefault()
            }
        },
        le.removeEvent = ye.removeEventListener ?
        function(e, t, n) {
            e.removeEventListener && e.removeEventListener(t, n, !1)
        }: function(e, t, n) {
            var r = "on" + t;
            e.detachEvent && (typeof e[r] === ke && (e[r] = null), e.detachEvent(r, n))
        },
        le.Event = function(e, t) {
            return this instanceof le.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? g: v) : this.type = e, t && le.extend(this, t), this.timeStamp = e && e.timeStamp || le.now(), void(this[le.expando] = !0)) : new le.Event(e, t)
        },
        le.Event.prototype = {
            isDefaultPrevented: v,
            isPropagationStopped: v,
            isImmediatePropagationStopped: v,
            preventDefault: function() {
                var e = this.originalEvent;
                this.isDefaultPrevented = g,
                e && (e.preventDefault ? e.preventDefault() : e.returnValue = !1)
            },
            stopPropagation: function() {
                var e = this.originalEvent;
                this.isPropagationStopped = g,
                e && (e.stopPropagation && e.stopPropagation(), e.cancelBubble = !0)
            },
            stopImmediatePropagation: function() {
                var e = this.originalEvent;
                this.isImmediatePropagationStopped = g,
                e && e.stopImmediatePropagation && e.stopImmediatePropagation(),
                this.stopPropagation()
            }
        },
        le.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        },
        function(e, t) {
            le.event.special[e] = {
                delegateType: t,
                bindType: t,
                handle: function(e) {
                    var n, r = this,
                    i = e.relatedTarget,
                    o = e.handleObj;
                    return i && (i === r || le.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t),
                    n
                }
            }
        }),
        ae.submitBubbles || (le.event.special.submit = {
            setup: function() {
                return ! le.nodeName(this, "form") && void le.event.add(this, "click._submit keypress._submit",
                function(e) {
                    var t = e.target,
                    n = le.nodeName(t, "input") || le.nodeName(t, "button") ? t.form: void 0;
                    n && !le._data(n, "submitBubbles") && (le.event.add(n, "submit._submit",
                    function(e) {
                        e._submit_bubble = !0
                    }), le._data(n, "submitBubbles", !0))
                })
            },
            postDispatch: function(e) {
                e._submit_bubble && (delete e._submit_bubble, this.parentNode && !e.isTrigger && le.event.simulate("submit", this.parentNode, e, !0))
            },
            teardown: function() {
                return ! le.nodeName(this, "form") && void le.event.remove(this, "._submit")
            }
        }),
        ae.changeBubbles || (le.event.special.change = {
            setup: function() {
                return Me.test(this.nodeName) ? ("checkbox" !== this.type && "radio" !== this.type || (le.event.add(this, "propertychange._change",
                function(e) {
                    "checked" === e.originalEvent.propertyName && (this._just_changed = !0)
                }), le.event.add(this, "click._change",
                function(e) {
                    this._just_changed && !e.isTrigger && (this._just_changed = !1),
                    le.event.simulate("change", this, e, !0)
                })), !1) : void le.event.add(this, "beforeactivate._change",
                function(e) {
                    var t = e.target;
                    Me.test(t.nodeName) && !le._data(t, "changeBubbles") && (le.event.add(t, "change._change",
                    function(e) { ! this.parentNode || e.isSimulated || e.isTrigger || le.event.simulate("change", this.parentNode, e, !0)
                    }), le._data(t, "changeBubbles", !0))
                })
            },
            handle: function(e) {
                var t = e.target;
                if (this !== t || e.isSimulated || e.isTrigger || "radio" !== t.type && "checkbox" !== t.type) return e.handleObj.handler.apply(this, arguments)
            },
            teardown: function() {
                return le.event.remove(this, "._change"),
                !Me.test(this.nodeName)
            }
        }),
        ae.focusinBubbles || le.each({
            focus: "focusin",
            blur: "focusout"
        },
        function(e, t) {
            var n = function(e) {
                le.event.simulate(t, e.target, le.event.fix(e), !0)
            };
            le.event.special[t] = {
                setup: function() {
                    var r = this.ownerDocument || this,
                    i = le._data(r, t);
                    i || r.addEventListener(e, n, !0),
                    le._data(r, t, (i || 0) + 1)
                },
                teardown: function() {
                    var r = this.ownerDocument || this,
                    i = le._data(r, t) - 1;
                    i ? le._data(r, t, i) : (r.removeEventListener(e, n, !0), le._removeData(r, t))
                }
            }
        }),
        le.fn.extend({
            on: function(e, t, n, r, i) {
                var o, a;
                if ("object" == typeof e) {
                    "string" != typeof t && (n = n || t, t = void 0);
                    for (o in e) this.on(o, t, n, e[o], i);
                    return this
                }
                if (null == n && null == r ? (r = t, n = t = void 0) : null == r && ("string" == typeof t ? (r = n, n = void 0) : (r = n, n = t, t = void 0)), r === !1) r = v;
                else if (!r) return this;
                return 1 === i && (a = r, r = function(e) {
                    return le().off(e),
                    a.apply(this, arguments)
                },
                r.guid = a.guid || (a.guid = le.guid++)),
                this.each(function() {
                    le.event.add(this, e, r, n, t)
                })
            },
            one: function(e, t, n, r) {
                return this.on(e, t, n, r, 1)
            },
            off: function(e, t, n) {
                var r, i;
                if (e && e.preventDefault && e.handleObj) return r = e.handleObj,
                le(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace: r.origType, r.selector, r.handler),
                this;
                if ("object" == typeof e) {
                    for (i in e) this.off(i, t, e[i]);
                    return this
                }
                return t !== !1 && "function" != typeof t || (n = t, t = void 0),
                n === !1 && (n = v),
                this.each(function() {
                    le.event.remove(this, e, n, t)
                })
            },
            trigger: function(e, t) {
                return this.each(function() {
                    le.event.trigger(e, t, this)
                })
            },
            triggerHandler: function(e, t) {
                var n = this[0];
                if (n) return le.event.trigger(e, t, n, !0)
            }
        });
        var We = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
        Re = / jQuery\d+="(?:null|\d+)"/g,
        $e = new RegExp("<(?:" + We + ")[\\s/>]", "i"),
        ze = /^\s+/,
        Ie = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
        Xe = /<([\w:]+)/,
        Ue = /<tbody/i,
        Ve = /<|&#?\w+;/,
        Je = /<(?:script|style|link)/i,
        Ye = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Ge = /^$|\/(?:java|ecma)script/i,
        Qe = /^true\/(.*)/,
        Ke = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        Ze = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            legend: [1, "<fieldset>", "</fieldset>"],
            area: [1, "<map>", "</map>"],
            param: [1, "<object>", "</object>"],
            thead: [1, "<table>", "</table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: ae.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
        },
        et = b(ye),
        tt = et.appendChild(ye.createElement("div"));
        Ze.optgroup = Ze.option,
        Ze.tbody = Ze.tfoot = Ze.colgroup = Ze.caption = Ze.thead,
        Ze.th = Ze.td,
        le.extend({
            clone: function(e, t, n) {
                var r, i, o, a, s, l = le.contains(e.ownerDocument, e);
                if (ae.html5Clone || le.isXMLDoc(e) || !$e.test("<" + e.nodeName + ">") ? o = e.cloneNode(!0) : (tt.innerHTML = e.outerHTML, tt.removeChild(o = tt.firstChild)), !(ae.noCloneEvent && ae.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || le.isXMLDoc(e))) for (r = x(o), s = x(e), a = 0; null != (i = s[a]); ++a) r[a] && S(i, r[a]);
                if (t) if (n) for (s = s || x(e), r = r || x(o), a = 0; null != (i = s[a]); a++) k(i, r[a]);
                else k(e, o);
                return r = x(o, "script"),
                r.length > 0 && E(r, !l && x(e, "script")),
                r = s = i = null,
                o
            },
            buildFragment: function(e, t, n, r) {
                for (var i, o, a, s, l, u, c, f = e.length,
                d = b(t), p = [], h = 0; h < f; h++) if (o = e[h], o || 0 === o) if ("object" === le.type(o)) le.merge(p, o.nodeType ? [o] : o);
                else if (Ve.test(o)) {
                    for (s = s || d.appendChild(t.createElement("div")), l = (Xe.exec(o) || ["", ""])[1].toLowerCase(), c = Ze[l] || Ze._default, s.innerHTML = c[1] + o.replace(Ie, "<$1></$2>") + c[2], i = c[0]; i--;) s = s.lastChild;
                    if (!ae.leadingWhitespace && ze.test(o) && p.push(t.createTextNode(ze.exec(o)[0])), !ae.tbody) for (o = "table" !== l || Ue.test(o) ? "<table>" !== c[1] || Ue.test(o) ? 0 : s: s.firstChild, i = o && o.childNodes.length; i--;) le.nodeName(u = o.childNodes[i], "tbody") && !u.childNodes.length && o.removeChild(u);
                    for (le.merge(p, s.childNodes), s.textContent = ""; s.firstChild;) s.removeChild(s.firstChild);
                    s = d.lastChild
                } else p.push(t.createTextNode(o));
                for (s && d.removeChild(s), ae.appendChecked || le.grep(x(p, "input"), w), h = 0; o = p[h++];) if ((!r || le.inArray(o, r) === -1) && (a = le.contains(o.ownerDocument, o), s = x(d.appendChild(o), "script"), a && E(s), n)) for (i = 0; o = s[i++];) Ge.test(o.type || "") && n.push(o);
                return s = null,
                d
            },
            cleanData: function(e, t) {
                for (var n, r, i, o, a = 0,
                s = le.expando,
                l = le.cache,
                u = ae.deleteExpando,
                c = le.event.special; null != (n = e[a]); a++) if ((t || le.acceptData(n)) && (i = n[s], o = i && l[i])) {
                    if (o.events) for (r in o.events) c[r] ? le.event.remove(n, r) : le.removeEvent(n, r, o.handle);
                    l[i] && (delete l[i], u ? delete n[s] : typeof n.removeAttribute !== ke ? n.removeAttribute(s) : n[s] = null, K.push(i))
                }
            }
        }),
        le.fn.extend({
            text: function(e) {
                return _e(this,
                function(e) {
                    return void 0 === e ? le.text(this) : this.empty().append((this[0] && this[0].ownerDocument || ye).createTextNode(e))
                },
                null, e, arguments.length)
            },
            append: function() {
                return this.domManip(arguments,
                function(e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = T(this, e);
                        t.appendChild(e)
                    }
                })
            },
            prepend: function() {
                return this.domManip(arguments,
                function(e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = T(this, e);
                        t.insertBefore(e, t.firstChild)
                    }
                })
            },
            before: function() {
                return this.domManip(arguments,
                function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this)
                })
            },
            after: function() {
                return this.domManip(arguments,
                function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                })
            },
            remove: function(e, t) {
                for (var n, r = e ? le.filter(e, this) : this, i = 0; null != (n = r[i]); i++) t || 1 !== n.nodeType || le.cleanData(x(n)),
                n.parentNode && (t && le.contains(n.ownerDocument, n) && E(x(n, "script")), n.parentNode.removeChild(n));
                return this
            },
            empty: function() {
                for (var e, t = 0; null != (e = this[t]); t++) {
                    for (1 === e.nodeType && le.cleanData(x(e, !1)); e.firstChild;) e.removeChild(e.firstChild);
                    e.options && le.nodeName(e, "select") && (e.options.length = 0)
                }
                return this
            },
            clone: function(e, t) {
                return e = null != e && e,
                t = null == t ? e: t,
                this.map(function() {
                    return le.clone(this, e, t)
                })
            },
            html: function(e) {
                return _e(this,
                function(e) {
                    var t = this[0] || {},
                    n = 0,
                    r = this.length;
                    if (void 0 === e) return 1 === t.nodeType ? t.innerHTML.replace(Re, "") : void 0;
                    if ("string" == typeof e && !Je.test(e) && (ae.htmlSerialize || !$e.test(e)) && (ae.leadingWhitespace || !ze.test(e)) && !Ze[(Xe.exec(e) || ["", ""])[1].toLowerCase()]) {
                        e = e.replace(Ie, "<$1></$2>");
                        try {
                            for (; n < r; n++) t = this[n] || {},
                            1 === t.nodeType && (le.cleanData(x(t, !1)), t.innerHTML = e);
                            t = 0
                        } catch(e) {}
                    }
                    t && this.empty().append(e)
                },
                null, e, arguments.length)
            },
            replaceWith: function() {
                var e = arguments[0];
                return this.domManip(arguments,
                function(t) {
                    e = this.parentNode,
                    le.cleanData(x(this)),
                    e && e.replaceChild(t, this)
                }),
                e && (e.length || e.nodeType) ? this: this.remove()
            },
            detach: function(e) {
                return this.remove(e, !0)
            },
            domManip: function(e, t) {
                e = ee.apply([], e);
                var n, r, i, o, a, s, l = 0,
                u = this.length,
                c = this,
                f = u - 1,
                d = e[0],
                p = le.isFunction(d);
                if (p || u > 1 && "string" == typeof d && !ae.checkClone && Ye.test(d)) return this.each(function(n) {
                    var r = c.eq(n);
                    p && (e[0] = d.call(this, n, r.html())),
                    r.domManip(e, t)
                });
                if (u && (s = le.buildFragment(e, this[0].ownerDocument, !1, this), n = s.firstChild, 1 === s.childNodes.length && (s = n), n)) {
                    for (o = le.map(x(s, "script"), C), i = o.length; l < u; l++) r = s,
                    l !== f && (r = le.clone(r, !0, !0), i && le.merge(o, x(r, "script"))),
                    t.call(this[l], r, l);
                    if (i) for (a = o[o.length - 1].ownerDocument, le.map(o, N), l = 0; l < i; l++) r = o[l],
                    Ge.test(r.type || "") && !le._data(r, "globalEval") && le.contains(a, r) && (r.src ? le._evalUrl && le._evalUrl(r.src) : le.globalEval((r.text || r.textContent || r.innerHTML || "").replace(Ke, "")));
                    s = n = null
                }
                return this
            }
        }),
        le.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        },
        function(e, t) {
            le.fn[e] = function(e) {
                for (var n, r = 0,
                i = [], o = le(e), a = o.length - 1; r <= a; r++) n = r === a ? this: this.clone(!0),
                le(o[r])[t](n),
                te.apply(i, n.get());
                return this.pushStack(i)
            }
        });
        var nt, rt = {}; !
        function() {
            var e;
            ae.shrinkWrapBlocks = function() {
                if (null != e) return e;
                e = !1;
                var t, n, r;
                return n = ye.getElementsByTagName("body")[0],
                n && n.style ? (t = ye.createElement("div"), r = ye.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", n.appendChild(r).appendChild(t), typeof t.style.zoom !== ke && (t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", t.appendChild(ye.createElement("div")).style.width = "5px", e = 3 !== t.offsetWidth), n.removeChild(r), e) : void 0
            }
        } ();
        var it = /^margin/,
        ot = new RegExp("^(" + Ae + ")(?!px)[a-z%]+$", "i"),
        at,
        st,
        lt = /^(top|right|bottom|left)$/;
        n.getComputedStyle ? (at = function(e) {
            return e.ownerDocument.defaultView.getComputedStyle(e, null)
        },
        st = function(e, t, n) {
            var r, i, o, a, s = e.style;
            return n = n || at(e),
            a = n ? n.getPropertyValue(t) || n[t] : void 0,
            n && ("" !== a || le.contains(e.ownerDocument, e) || (a = le.style(e, t)), ot.test(a) && it.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)),
            void 0 === a ? a: a + ""
        }) : ye.documentElement.currentStyle && (at = function(e) {
            return e.currentStyle
        },
        st = function(e, t, n) {
            var r, i, o, a, s = e.style;
            return n = n || at(e),
            a = n ? n[t] : void 0,
            null == a && s && s[t] && (a = s[t]),
            ot.test(a) && !lt.test(t) && (r = s.left, i = e.runtimeStyle, o = i && i.left, o && (i.left = e.currentStyle.left), s.left = "fontSize" === t ? "1em": a, a = s.pixelLeft + "px", s.left = r, o && (i.left = o)),
            void 0 === a ? a: a + "" || "auto"
        }),
        function() {
            function e() {
                var e, t, r, i;
                t = ye.getElementsByTagName("body")[0],
                t && t.style && (e = ye.createElement("div"), r = ye.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", t.appendChild(r).appendChild(e), e.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", o = a = !1, l = !0, n.getComputedStyle && (o = "1%" !== (n.getComputedStyle(e, null) || {}).top, a = "4px" === (n.getComputedStyle(e, null) || {
                    width: "4px"
                }).width, i = e.appendChild(ye.createElement("div")), i.style.cssText = e.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", e.style.width = "1px", l = !parseFloat((n.getComputedStyle(i, null) || {}).marginRight)), e.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", i = e.getElementsByTagName("td"), i[0].style.cssText = "margin:0;border:0;padding:0;display:none", s = 0 === i[0].offsetHeight, s && (i[0].style.display = "", i[1].style.display = "none", s = 0 === i[0].offsetHeight), t.removeChild(r))
            }
            var t, r, i, o, a, s, l;
            t = ye.createElement("div"),
            t.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",
            i = t.getElementsByTagName("a")[0],
            r = i && i.style,
            r && (r.cssText = "float:left;opacity:.5", ae.opacity = "0.5" === r.opacity, ae.cssFloat = !!r.cssFloat, t.style.backgroundClip = "content-box", t.cloneNode(!0).style.backgroundClip = "", ae.clearCloneStyle = "content-box" === t.style.backgroundClip, ae.boxSizing = "" === r.boxSizing || "" === r.MozBoxSizing || "" === r.WebkitBoxSizing, le.extend(ae, {
                reliableHiddenOffsets: function() {
                    return null == s && e(),
                    s
                },
                boxSizingReliable: function() {
                    return null == a && e(),
                    a
                },
                pixelPosition: function() {
                    return null == o && e(),
                    o
                },
                reliableMarginRight: function() {
                    return null == l && e(),
                    l
                }
            }))
        } (),
        le.swap = function(e, t, n, r) {
            var i, o, a = {};
            for (o in t) a[o] = e.style[o],
            e.style[o] = t[o];
            i = n.apply(e, r || []);
            for (o in t) e.style[o] = a[o];
            return i
        };
        var ut = /alpha\([^)]*\)/i,
        ct = /opacity\s*=\s*([^)]*)/,
        ft = /^(none|table(?!-c[ea]).+)/,
        dt = new RegExp("^(" + Ae + ")(.*)$", "i"),
        pt = new RegExp("^([+-])=(" + Ae + ")", "i"),
        ht = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        mt = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        gt = ["Webkit", "O", "Moz", "ms"];
        le.extend({
            cssHooks: {
                opacity: {
                    get: function(e, t) {
                        if (t) {
                            var n = st(e, "opacity");
                            return "" === n ? "1": n
                        }
                    }
                }
            },
            cssNumber: {
                columnCount: !0,
                fillOpacity: !0,
                flexGrow: !0,
                flexShrink: !0,
                fontWeight: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {
                float: ae.cssFloat ? "cssFloat": "styleFloat"
            },
            style: function(e, t, n, r) {
                if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                    var i, o, a, s = le.camelCase(t),
                    l = e.style;
                    if (t = le.cssProps[s] || (le.cssProps[s] = L(l, s)), a = le.cssHooks[t] || le.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i: l[t];
                    if (o = typeof n, "string" === o && (i = pt.exec(n)) && (n = (i[1] + 1) * i[2] + parseFloat(le.css(e, t)), o = "number"), null != n && n === n && ("number" !== o || le.cssNumber[s] || (n += "px"), ae.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), !(a && "set" in a && void 0 === (n = a.set(e, n, r))))) try {
                        l[t] = n
                    } catch(e) {}
                }
            },
            css: function(e, t, n, r) {
                var i, o, a, s = le.camelCase(t);
                return t = le.cssProps[s] || (le.cssProps[s] = L(e.style, s)),
                a = le.cssHooks[t] || le.cssHooks[s],
                a && "get" in a && (o = a.get(e, !0, n)),
                void 0 === o && (o = st(e, t, r)),
                "normal" === o && t in mt && (o = mt[t]),
                "" === n || n ? (i = parseFloat(o), n === !0 || le.isNumeric(i) ? i || 0 : o) : o
            }
        }),
        le.each(["height", "width"],
        function(e, t) {
            le.cssHooks[t] = {
                get: function(e, n, r) {
                    if (n) return ft.test(le.css(e, "display")) && 0 === e.offsetWidth ? le.swap(e, ht,
                    function() {
                        return M(e, t, r)
                    }) : M(e, t, r)
                },
                set: function(e, n, r) {
                    var i = r && at(e);
                    return _(e, n, r ? q(e, t, r, ae.boxSizing && "border-box" === le.css(e, "boxSizing", !1, i), i) : 0)
                }
            }
        }),
        ae.opacity || (le.cssHooks.opacity = {
            get: function(e, t) {
                return ct.test((t && e.currentStyle ? e.currentStyle.filter: e.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "": t ? "1": ""
            },
            set: function(e, t) {
                var n = e.style,
                r = e.currentStyle,
                i = le.isNumeric(t) ? "alpha(opacity=" + 100 * t + ")": "",
                o = r && r.filter || n.filter || "";
                n.zoom = 1,
                (t >= 1 || "" === t) && "" === le.trim(o.replace(ut, "")) && n.removeAttribute && (n.removeAttribute("filter"), "" === t || r && !r.filter) || (n.filter = ut.test(o) ? o.replace(ut, i) : o + " " + i)
            }
        }),
        le.cssHooks.marginRight = A(ae.reliableMarginRight,
        function(e, t) {
            if (t) return le.swap(e, {
                display: "inline-block"
            },
            st, [e, "marginRight"])
        }),
        le.each({
            margin: "",
            padding: "",
            border: "Width"
        },
        function(e, t) {
            le.cssHooks[e + t] = {
                expand: function(n) {
                    for (var r = 0,
                    i = {},
                    o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + Le[r] + t] = o[r] || o[r - 2] || o[0];
                    return i
                }
            },
            it.test(e) || (le.cssHooks[e + t].set = _)
        }),
        le.fn.extend({
            css: function(e, t) {
                return _e(this,
                function(e, t, n) {
                    var r, i, o = {},
                    a = 0;
                    if (le.isArray(t)) {
                        for (r = at(e), i = t.length; a < i; a++) o[t[a]] = le.css(e, t[a], !1, r);
                        return o
                    }
                    return void 0 !== n ? le.style(e, t, n) : le.css(e, t)
                },
                e, t, arguments.length > 1)
            },
            show: function() {
                return H(this, !0)
            },
            hide: function() {
                return H(this)
            },
            toggle: function(e) {
                return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                    He(this) ? le(this).show() : le(this).hide()
                })
            }
        }),
        le.Tween = O,
        O.prototype = {
            constructor: O,
            init: function(e, t, n, r, i, o) {
                this.elem = e,
                this.prop = n,
                this.easing = i || "swing",
                this.options = t,
                this.start = this.now = this.cur(),
                this.end = r,
                this.unit = o || (le.cssNumber[n] ? "": "px")
            },
            cur: function() {
                var e = O.propHooks[this.prop];
                return e && e.get ? e.get(this) : O.propHooks._default.get(this)
            },
            run: function(e) {
                var t, n = O.propHooks[this.prop];
                return this.options.duration ? this.pos = t = le.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e,
                this.now = (this.end - this.start) * t + this.start,
                this.options.step && this.options.step.call(this.elem, this.now, this),
                n && n.set ? n.set(this) : O.propHooks._default.set(this),
                this
            }
        },
        O.prototype.init.prototype = O.prototype,
        O.propHooks = {
            _default: {
                get: function(e) {
                    var t;
                    return null == e.elem[e.prop] || e.elem.style && null != e.elem.style[e.prop] ? (t = le.css(e.elem, e.prop, ""), t && "auto" !== t ? t: 0) : e.elem[e.prop]
                },
                set: function(e) {
                    le.fx.step[e.prop] ? le.fx.step[e.prop](e) : e.elem.style && (null != e.elem.style[le.cssProps[e.prop]] || le.cssHooks[e.prop]) ? le.style(e.elem, e.prop, e.now + e.unit) : e.elem[e.prop] = e.now
                }
            }
        },
        O.propHooks.scrollTop = O.propHooks.scrollLeft = {
            set: function(e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
            }
        },
        le.easing = {
            linear: function(e) {
                return e
            },
            swing: function(e) {
                return.5 - Math.cos(e * Math.PI) / 2
            }
        },
        le.fx = O.prototype.init,
        le.fx.step = {};
        var vt, yt, bt = /^(?:toggle|show|hide)$/,
        xt = new RegExp("^(?:([+-])=|)(" + Ae + ")([a-z%]*)$", "i"),
        wt = /queueHooks$/,
        Tt = [W],
        Ct = {
            "*": [function(e, t) {
                var n = this.createTween(e, t),
                r = n.cur(),
                i = xt.exec(t),
                o = i && i[3] || (le.cssNumber[e] ? "": "px"),
                a = (le.cssNumber[e] || "px" !== o && +r) && xt.exec(le.css(n.elem, e)),
                s = 1,
                l = 20;
                if (a && a[3] !== o) {
                    o = o || a[3],
                    i = i || [],
                    a = +r || 1;
                    do s = s || ".5",
                    a /= s,
                    le.style(n.elem, e, a + o);
                    while (s !== (s = n.cur() / r) && 1 !== s && --l)
                }
                return i && (a = n.start = +a || +r || 0, n.unit = o, n.end = i[1] ? a + (i[1] + 1) * i[2] : +i[2]),
                n
            }]
        };
        le.Animation = le.extend($, {
            tweener: function(e, t) {
                le.isFunction(e) ? (t = e, e = ["*"]) : e = e.split(" ");
                for (var n, r = 0,
                i = e.length; r < i; r++) n = e[r],
                Ct[n] = Ct[n] || [],
                Ct[n].unshift(t)
            },
            prefilter: function(e, t) {
                t ? Tt.unshift(e) : Tt.push(e)
            }
        }),
        le.speed = function(e, t, n) {
            var r = e && "object" == typeof e ? le.extend({},
            e) : {
                complete: n || !n && t || le.isFunction(e) && e,
                duration: e,
                easing: n && t || t && !le.isFunction(t) && t
            };
            return r.duration = le.fx.off ? 0 : "number" == typeof r.duration ? r.duration: r.duration in le.fx.speeds ? le.fx.speeds[r.duration] : le.fx.speeds._default,
            null != r.queue && r.queue !== !0 || (r.queue = "fx"),
            r.old = r.complete,
            r.complete = function() {
                le.isFunction(r.old) && r.old.call(this),
                r.queue && le.dequeue(this, r.queue)
            },
            r
        },
        le.fn.extend({
            fadeTo: function(e, t, n, r) {
                return this.filter(He).css("opacity", 0).show().end().animate({
                    opacity: t
                },
                e, n, r)
            },
            animate: function(e, t, n, r) {
                var i = le.isEmptyObject(e),
                o = le.speed(t, n, r),
                a = function() {
                    var t = $(this, le.extend({},
                    e), o); (i || le._data(this, "finish")) && t.stop(!0)
                };
                return a.finish = a,
                i || o.queue === !1 ? this.each(a) : this.queue(o.queue, a)
            },
            stop: function(e, t, n) {
                var r = function(e) {
                    var t = e.stop;
                    delete e.stop,
                    t(n)
                };
                return "string" != typeof e && (n = t, t = e, e = void 0),
                t && e !== !1 && this.queue(e || "fx", []),
                this.each(function() {
                    var t = !0,
                    i = null != e && e + "queueHooks",
                    o = le.timers,
                    a = le._data(this);
                    if (i) a[i] && a[i].stop && r(a[i]);
                    else for (i in a) a[i] && a[i].stop && wt.test(i) && r(a[i]);
                    for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1)); ! t && n || le.dequeue(this, e)
                })
            },
            finish: function(e) {
                return e !== !1 && (e = e || "fx"),
                this.each(function() {
                    var t, n = le._data(this),
                    r = n[e + "queue"],
                    i = n[e + "queueHooks"],
                    o = le.timers,
                    a = r ? r.length: 0;
                    for (n.finish = !0, le.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                    for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                    delete n.finish
                })
            }
        }),
        le.each(["toggle", "show", "hide"],
        function(e, t) {
            var n = le.fn[t];
            le.fn[t] = function(e, r, i) {
                return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(B(t, !0), e, r, i)
            }
        }),
        le.each({
            slideDown: B("show"),
            slideUp: B("hide"),
            slideToggle: B("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        },
        function(e, t) {
            le.fn[e] = function(e, n, r) {
                return this.animate(t, e, n, r)
            }
        }),
        le.timers = [],
        le.fx.tick = function() {
            var e, t = le.timers,
            n = 0;
            for (vt = le.now(); n < t.length; n++) e = t[n],
            e() || t[n] !== e || t.splice(n--, 1);
            t.length || le.fx.stop(),
            vt = void 0
        },
        le.fx.timer = function(e) {
            le.timers.push(e),
            e() ? le.fx.start() : le.timers.pop()
        },
        le.fx.interval = 13,
        le.fx.start = function() {
            yt || (yt = setInterval(le.fx.tick, le.fx.interval))
        },
        le.fx.stop = function() {
            clearInterval(yt),
            yt = null
        },
        le.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        },
        le.fn.delay = function(e, t) {
            return e = le.fx ? le.fx.speeds[e] || e: e,
            t = t || "fx",
            this.queue(t,
            function(t, n) {
                var r = setTimeout(t, e);
                n.stop = function() {
                    clearTimeout(r)
                }
            })
        },
        function() {
            var e, t, n, r, i;
            t = ye.createElement("div"),
            t.setAttribute("className", "t"),
            t.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",
            r = t.getElementsByTagName("a")[0],
            n = ye.createElement("select"),
            i = n.appendChild(ye.createElement("option")),
            e = t.getElementsByTagName("input")[0],
            r.style.cssText = "top:1px",
            ae.getSetAttribute = "t" !== t.className,
            ae.style = /top/.test(r.getAttribute("style")),
            ae.hrefNormalized = "/a" === r.getAttribute("href"),
            ae.checkOn = !!e.value,
            ae.optSelected = i.selected,
            ae.enctype = !!ye.createElement("form").enctype,
            n.disabled = !0,
            ae.optDisabled = !i.disabled,
            e = ye.createElement("input"),
            e.setAttribute("value", ""),
            ae.input = "" === e.getAttribute("value"),
            e.value = "t",
            e.setAttribute("type", "radio"),
            ae.radioValue = "t" === e.value
        } ();
        var Nt = /\r/g;
        le.fn.extend({
            val: function(e) {
                var t, n, r, i = this[0]; {
                    if (arguments.length) return r = le.isFunction(e),
                    this.each(function(n) {
                        var i;
                        1 === this.nodeType && (i = r ? e.call(this, n, le(this).val()) : e, null == i ? i = "": "number" == typeof i ? i += "": le.isArray(i) && (i = le.map(i,
                        function(e) {
                            return null == e ? "": e + ""
                        })), t = le.valHooks[this.type] || le.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                    });
                    if (i) return t = le.valHooks[i.type] || le.valHooks[i.nodeName.toLowerCase()],
                    t && "get" in t && void 0 !== (n = t.get(i, "value")) ? n: (n = i.value, "string" == typeof n ? n.replace(Nt, "") : null == n ? "": n)
                }
            }
        }),
        le.extend({
            valHooks: {
                option: {
                    get: function(e) {
                        var t = le.find.attr(e, "value");
                        return null != t ? t: le.trim(le.text(e))
                    }
                },
                select: {
                    get: function(e) {
                        for (var t, n, r = e.options,
                        i = e.selectedIndex,
                        o = "select-one" === e.type || i < 0,
                        a = o ? null: [], s = o ? i + 1 : r.length, l = i < 0 ? s: o ? i: 0; l < s; l++) if (n = r[l], (n.selected || l === i) && (ae.optDisabled ? !n.disabled: null === n.getAttribute("disabled")) && (!n.parentNode.disabled || !le.nodeName(n.parentNode, "optgroup"))) {
                            if (t = le(n).val(), o) return t;
                            a.push(t)
                        }
                        return a
                    },
                    set: function(e, t) {
                        for (var n, r, i = e.options,
                        o = le.makeArray(t), a = i.length; a--;) if (r = i[a], le.inArray(le.valHooks.option.get(r), o) >= 0) try {
                            r.selected = n = !0
                        } catch(e) {
                            r.scrollHeight
                        } else r.selected = !1;
                        return n || (e.selectedIndex = -1),
                        i
                    }
                }
            }
        }),
        le.each(["radio", "checkbox"],
        function() {
            le.valHooks[this] = {
                set: function(e, t) {
                    if (le.isArray(t)) return e.checked = le.inArray(le(e).val(), t) >= 0
                }
            },
            ae.checkOn || (le.valHooks[this].get = function(e) {
                return null === e.getAttribute("value") ? "on": e.value
            })
        });
        var Et, kt, St = le.expr.attrHandle,
        jt = /^(?:checked|selected)$/i,
        Dt = ae.getSetAttribute,
        At = ae.input;
        le.fn.extend({
            attr: function(e, t) {
                return _e(this, le.attr, e, t, arguments.length > 1)
            },
            removeAttr: function(e) {
                return this.each(function() {
                    le.removeAttr(this, e)
                })
            }
        }),
        le.extend({
            attr: function(e, t, n) {
                var r, i, o = e.nodeType;
                if (e && 3 !== o && 8 !== o && 2 !== o) return typeof e.getAttribute === ke ? le.prop(e, t, n) : (1 === o && le.isXMLDoc(e) || (t = t.toLowerCase(), r = le.attrHooks[t] || (le.expr.match.bool.test(t) ? kt: Et)), void 0 === n ? r && "get" in r && null !== (i = r.get(e, t)) ? i: (i = le.find.attr(e, t), null == i ? void 0 : i) : null !== n ? r && "set" in r && void 0 !== (i = r.set(e, n, t)) ? i: (e.setAttribute(t, n + ""), n) : void le.removeAttr(e, t))
            },
            removeAttr: function(e, t) {
                var n, r, i = 0,
                o = t && t.match(Ce);
                if (o && 1 === e.nodeType) for (; n = o[i++];) r = le.propFix[n] || n,
                le.expr.match.bool.test(n) ? At && Dt || !jt.test(n) ? e[r] = !1 : e[le.camelCase("default-" + n)] = e[r] = !1 : le.attr(e, n, ""),
                e.removeAttribute(Dt ? n: r)
            },
            attrHooks: {
                type: {
                    set: function(e, t) {
                        if (!ae.radioValue && "radio" === t && le.nodeName(e, "input")) {
                            var n = e.value;
                            return e.setAttribute("type", t),
                            n && (e.value = n),
                            t
                        }
                    }
                }
            }
        }),
        kt = {
            set: function(e, t, n) {
                return t === !1 ? le.removeAttr(e, n) : At && Dt || !jt.test(n) ? e.setAttribute(!Dt && le.propFix[n] || n, n) : e[le.camelCase("default-" + n)] = e[n] = !0,
                n
            }
        },
        le.each(le.expr.match.bool.source.match(/\w+/g),
        function(e, t) {
            var n = St[t] || le.find.attr;
            St[t] = At && Dt || !jt.test(t) ?
            function(e, t, r) {
                var i, o;
                return r || (o = St[t], St[t] = i, i = null != n(e, t, r) ? t.toLowerCase() : null, St[t] = o),
                i
            }: function(e, t, n) {
                if (!n) return e[le.camelCase("default-" + t)] ? t.toLowerCase() : null
            }
        }),
        At && Dt || (le.attrHooks.value = {
            set: function(e, t, n) {
                return le.nodeName(e, "input") ? void(e.defaultValue = t) : Et && Et.set(e, t, n)
            }
        }),
        Dt || (Et = {
            set: function(e, t, n) {
                var r = e.getAttributeNode(n);
                if (r || e.setAttributeNode(r = e.ownerDocument.createAttribute(n)), r.value = t += "", "value" === n || t === e.getAttribute(n)) return t
            }
        },
        St.id = St.name = St.coords = function(e, t, n) {
            var r;
            if (!n) return (r = e.getAttributeNode(t)) && "" !== r.value ? r.value: null
        },
        le.valHooks.button = {
            get: function(e, t) {
                var n = e.getAttributeNode(t);
                if (n && n.specified) return n.value
            },
            set: Et.set
        },
        le.attrHooks.contenteditable = {
            set: function(e, t, n) {
                Et.set(e, "" !== t && t, n)
            }
        },
        le.each(["width", "height"],
        function(e, t) {
            le.attrHooks[t] = {
                set: function(e, n) {
                    if ("" === n) return e.setAttribute(t, "auto"),
                    n
                }
            }
        })),
        ae.style || (le.attrHooks.style = {
            get: function(e) {
                return e.style.cssText || void 0
            },
            set: function(e, t) {
                return e.style.cssText = t + ""
            }
        });
        var Lt = /^(?:input|select|textarea|button|object)$/i,
        Ht = /^(?:a|area)$/i;
        le.fn.extend({
            prop: function(e, t) {
                return _e(this, le.prop, e, t, arguments.length > 1)
            },
            removeProp: function(e) {
                return e = le.propFix[e] || e,
                this.each(function() {
                    try {
                        this[e] = void 0,
                        delete this[e]
                    } catch(e) {}
                })
            }
        }),
        le.extend({
            propFix: {
                for: "htmlFor",
                class: "className"
            },
            prop: function(e, t, n) {
                var r, i, o, a = e.nodeType;
                if (e && 3 !== a && 8 !== a && 2 !== a) return o = 1 !== a || !le.isXMLDoc(e),
                o && (t = le.propFix[t] || t, i = le.propHooks[t]),
                void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r: e[t] = n: i && "get" in i && null !== (r = i.get(e, t)) ? r: e[t]
            },
            propHooks: {
                tabIndex: {
                    get: function(e) {
                        var t = le.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : Lt.test(e.nodeName) || Ht.test(e.nodeName) && e.href ? 0 : -1
                    }
                }
            }
        }),
        ae.hrefNormalized || le.each(["href", "src"],
        function(e, t) {
            le.propHooks[t] = {
                get: function(e) {
                    return e.getAttribute(t, 4)
                }
            }
        }),
        ae.optSelected || (le.propHooks.selected = {
            get: function(e) {
                var t = e.parentNode;
                return t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex),
                null
            }
        }),
        le.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"],
        function() {
            le.propFix[this.toLowerCase()] = this
        }),
        ae.enctype || (le.propFix.enctype = "encoding");
        var _t = /[\t\r\n\f]/g;
        le.fn.extend({
            addClass: function(e) {
                var t, n, r, i, o, a, s = 0,
                l = this.length,
                u = "string" == typeof e && e;
                if (le.isFunction(e)) return this.each(function(t) {
                    le(this).addClass(e.call(this, t, this.className))
                });
                if (u) for (t = (e || "").match(Ce) || []; s < l; s++) if (n = this[s], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(_t, " ") : " ")) {
                    for (o = 0; i = t[o++];) r.indexOf(" " + i + " ") < 0 && (r += i + " ");
                    a = le.trim(r),
                    n.className !== a && (n.className = a)
                }
                return this
            },
            removeClass: function(e) {
                var t, n, r, i, o, a, s = 0,
                l = this.length,
                u = 0 === arguments.length || "string" == typeof e && e;
                if (le.isFunction(e)) return this.each(function(t) {
                    le(this).removeClass(e.call(this, t, this.className))
                });
                if (u) for (t = (e || "").match(Ce) || []; s < l; s++) if (n = this[s], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(_t, " ") : "")) {
                    for (o = 0; i = t[o++];) for (; r.indexOf(" " + i + " ") >= 0;) r = r.replace(" " + i + " ", " ");
                    a = e ? le.trim(r) : "",
                    n.className !== a && (n.className = a)
                }
                return this
            },
            toggleClass: function(e, t) {
                var n = typeof e;
                return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : le.isFunction(e) ? this.each(function(n) {
                    le(this).toggleClass(e.call(this, n, this.className, t), t)
                }) : this.each(function() {
                    if ("string" === n) for (var t, r = 0,
                    i = le(this), o = e.match(Ce) || []; t = o[r++];) i.hasClass(t) ? i.removeClass(t) : i.addClass(t);
                    else n !== ke && "boolean" !== n || (this.className && le._data(this, "__className__", this.className), this.className = this.className || e === !1 ? "": le._data(this, "__className__") || "")
                })
            },
            hasClass: function(e) {
                for (var t = " " + e + " ",
                n = 0,
                r = this.length; n < r; n++) if (1 === this[n].nodeType && (" " + this[n].className + " ").replace(_t, " ").indexOf(t) >= 0) return ! 0;
                return ! 1
            }
        }),
        le.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),
        function(e, t) {
            le.fn[t] = function(e, n) {
                return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
            }
        }),
        le.fn.extend({
            hover: function(e, t) {
                return this.mouseenter(e).mouseleave(t || e)
            },
            bind: function(e, t, n) {
                return this.on(e, null, t, n)
            },
            unbind: function(e, t) {
                return this.off(e, null, t)
            },
            delegate: function(e, t, n, r) {
                return this.on(t, e, n, r)
            },
            undelegate: function(e, t, n) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
            }
        });
        var qt = le.now(),
        Mt = /\?/,
        Ot = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
        le.parseJSON = function(e) {
            if (n.JSON && n.JSON.parse) return n.JSON.parse(e + "");
            var t, r = null,
            i = le.trim(e + "");
            return i && !le.trim(i.replace(Ot,
            function(e, n, i, o) {
                return t && n && (r = 0),
                0 === r ? e: (t = i || n, r += !o - !i, "")
            })) ? Function("return " + i)() : le.error("Invalid JSON: " + e)
        },
        le.parseXML = function(e) {
            var t, r;
            if (!e || "string" != typeof e) return null;
            try {
                n.DOMParser ? (r = new DOMParser, t = r.parseFromString(e, "text/xml")) : (t = new ActiveXObject("Microsoft.XMLDOM"), t.async = "false", t.loadXML(e))
            } catch(e) {
                t = void 0
            }
            return t && t.documentElement && !t.getElementsByTagName("parsererror").length || le.error("Invalid XML: " + e),
            t
        };
        var Ft, Bt, Pt = /#.*$/,
        Wt = /([?&])_=[^&]*/,
        Rt = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
        $t = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        zt = /^(?:GET|HEAD)$/,
        It = /^\/\//,
        Xt = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
        Ut = {},
        Vt = {},
        Jt = "*/".concat("*");
        try {
            Bt = location.href
        } catch(e) {
            Bt = ye.createElement("a"),
            Bt.href = "",
            Bt = Bt.href
        }
        Ft = Xt.exec(Bt.toLowerCase()) || [],
        le.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Bt,
                type: "GET",
                isLocal: $t.test(Ft[1]),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Jt,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {
                    xml: /xml/,
                    html: /html/,
                    json: /json/
                },
                responseFields: {
                    xml: "responseXML",
                    text: "responseText",
                    json: "responseJSON"
                },
                converters: {
                    "* text": String,
                    "text html": !0,
                    "text json": le.parseJSON,
                    "text xml": le.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(e, t) {
                return t ? X(X(e, le.ajaxSettings), t) : X(le.ajaxSettings, e)
            },
            ajaxPrefilter: z(Ut),
            ajaxTransport: z(Vt),
            ajax: function(e, t) {
                function n(e, t, n, r) {
                    var i, c, v, y, x, T = t;
                    2 !== b && (b = 2, s && clearTimeout(s), u = void 0, a = r || "", w.readyState = e > 0 ? 4 : 0, i = e >= 200 && e < 300 || 304 === e, n && (y = U(f, w, n)), y = V(f, y, w, i), i ? (f.ifModified && (x = w.getResponseHeader("Last-Modified"), x && (le.lastModified[o] = x), x = w.getResponseHeader("etag"), x && (le.etag[o] = x)), 204 === e || "HEAD" === f.type ? T = "nocontent": 304 === e ? T = "notmodified": (T = y.state, c = y.data, v = y.error, i = !v)) : (v = T, !e && T || (T = "error", e < 0 && (e = 0))), w.status = e, w.statusText = (t || T) + "", i ? h.resolveWith(d, [c, T, w]) : h.rejectWith(d, [w, T, v]), w.statusCode(g), g = void 0, l && p.trigger(i ? "ajaxSuccess": "ajaxError", [w, f, i ? c: v]), m.fireWith(d, [w, T]), l && (p.trigger("ajaxComplete", [w, f]), --le.active || le.event.trigger("ajaxStop")))
                }
                "object" == typeof e && (t = e, e = void 0),
                t = t || {};
                var r, i, o, a, s, l, u, c, f = le.ajaxSetup({},
                t),
                d = f.context || f,
                p = f.context && (d.nodeType || d.jquery) ? le(d) : le.event,
                h = le.Deferred(),
                m = le.Callbacks("once memory"),
                g = f.statusCode || {},
                v = {},
                y = {},
                b = 0,
                x = "canceled",
                w = {
                    readyState: 0,
                    getResponseHeader: function(e) {
                        var t;
                        if (2 === b) {
                            if (!c) for (c = {}; t = Rt.exec(a);) c[t[1].toLowerCase()] = t[2];
                            t = c[e.toLowerCase()]
                        }
                        return null == t ? null: t
                    },
                    getAllResponseHeaders: function() {
                        return 2 === b ? a: null
                    },
                    setRequestHeader: function(e, t) {
                        var n = e.toLowerCase();
                        return b || (e = y[n] = y[n] || e, v[e] = t),
                        this
                    },
                    overrideMimeType: function(e) {
                        return b || (f.mimeType = e),
                        this
                    },
                    statusCode: function(e) {
                        var t;
                        if (e) if (b < 2) for (t in e) g[t] = [g[t], e[t]];
                        else w.always(e[w.status]);
                        return this
                    },
                    abort: function(e) {
                        var t = e || x;
                        return u && u.abort(t),
                        n(0, t),
                        this
                    }
                };
                if (h.promise(w).complete = m.add, w.success = w.done, w.error = w.fail, f.url = ((e || f.url || Bt) + "").replace(Pt, "").replace(It, Ft[1] + "//"), f.type = t.method || t.type || f.method || f.type, f.dataTypes = le.trim(f.dataType || "*").toLowerCase().match(Ce) || [""], null == f.crossDomain && (r = Xt.exec(f.url.toLowerCase()), f.crossDomain = !(!r || r[1] === Ft[1] && r[2] === Ft[2] && (r[3] || ("http:" === r[1] ? "80": "443")) === (Ft[3] || ("http:" === Ft[1] ? "80": "443")))), f.data && f.processData && "string" != typeof f.data && (f.data = le.param(f.data, f.traditional)), I(Ut, f, t, w), 2 === b) return w;
                l = f.global,
                l && 0 === le.active++&&le.event.trigger("ajaxStart"),
                f.type = f.type.toUpperCase(),
                f.hasContent = !zt.test(f.type),
                o = f.url,
                f.hasContent || (f.data && (o = f.url += (Mt.test(o) ? "&": "?") + f.data, delete f.data), f.cache === !1 && (f.url = Wt.test(o) ? o.replace(Wt, "$1_=" + qt++) : o + (Mt.test(o) ? "&": "?") + "_=" + qt++)),
                f.ifModified && (le.lastModified[o] && w.setRequestHeader("If-Modified-Since", le.lastModified[o]), le.etag[o] && w.setRequestHeader("If-None-Match", le.etag[o])),
                (f.data && f.hasContent && f.contentType !== !1 || t.contentType) && w.setRequestHeader("Content-Type", f.contentType),
                w.setRequestHeader("Accept", f.dataTypes[0] && f.accepts[f.dataTypes[0]] ? f.accepts[f.dataTypes[0]] + ("*" !== f.dataTypes[0] ? ", " + Jt + "; q=0.01": "") : f.accepts["*"]);
                for (i in f.headers) w.setRequestHeader(i, f.headers[i]);
                if (f.beforeSend && (f.beforeSend.call(d, w, f) === !1 || 2 === b)) return w.abort();
                x = "abort";
                for (i in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) w[i](f[i]);
                if (u = I(Vt, f, t, w)) {
                    w.readyState = 1,
                    l && p.trigger("ajaxSend", [w, f]),
                    f.async && f.timeout > 0 && (s = setTimeout(function() {
                        w.abort("timeout")
                    },
                    f.timeout));
                    try {
                        b = 1,
                        u.send(v, n)
                    } catch(e) {
                        if (! (b < 2)) throw e;
                        n( - 1, e)
                    }
                } else n( - 1, "No Transport");
                return w
            },
            getJSON: function(e, t, n) {
                return le.get(e, t, n, "json")
            },
            getScript: function(e, t) {
                return le.get(e, void 0, t, "script")
            }
        }),
        le.each(["get", "post"],
        function(e, t) {
            le[t] = function(e, n, r, i) {
                return le.isFunction(n) && (i = i || r, r = n, n = void 0),
                le.ajax({
                    url: e,
                    type: t,
                    dataType: i,
                    data: n,
                    success: r
                })
            }
        }),
        le.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"],
        function(e, t) {
            le.fn[t] = function(e) {
                return this.on(t, e)
            }
        }),
        le._evalUrl = function(e) {
            return le.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                async: !1,
                global: !1,
                throws: !0
            })
        },
        le.fn.extend({
            wrapAll: function(e) {
                if (le.isFunction(e)) return this.each(function(t) {
                    le(this).wrapAll(e.call(this, t))
                });
                if (this[0]) {
                    var t = le(e, this[0].ownerDocument).eq(0).clone(!0);
                    this[0].parentNode && t.insertBefore(this[0]),
                    t.map(function() {
                        for (var e = this; e.firstChild && 1 === e.firstChild.nodeType;) e = e.firstChild;
                        return e
                    }).append(this)
                }
                return this
            },
            wrapInner: function(e) {
                return le.isFunction(e) ? this.each(function(t) {
                    le(this).wrapInner(e.call(this, t))
                }) : this.each(function() {
                    var t = le(this),
                    n = t.contents();
                    n.length ? n.wrapAll(e) : t.append(e)
                })
            },
            wrap: function(e) {
                var t = le.isFunction(e);
                return this.each(function(n) {
                    le(this).wrapAll(t ? e.call(this, n) : e)
                })
            },
            unwrap: function() {
                return this.parent().each(function() {
                    le.nodeName(this, "body") || le(this).replaceWith(this.childNodes)
                }).end()
            }
        }),
        le.expr.filters.hidden = function(e) {
            return e.offsetWidth <= 0 && e.offsetHeight <= 0 || !ae.reliableHiddenOffsets() && "none" === (e.style && e.style.display || le.css(e, "display"))
        },
        le.expr.filters.visible = function(e) {
            return ! le.expr.filters.hidden(e)
        };
        var Yt = /%20/g,
        Gt = /\[\]$/,
        Qt = /\r?\n/g,
        Kt = /^(?:submit|button|image|reset|file)$/i,
        Zt = /^(?:input|select|textarea|keygen)/i;
        le.param = function(e, t) {
            var n, r = [],
            i = function(e, t) {
                t = le.isFunction(t) ? t() : null == t ? "": t,
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t)
            };
            if (void 0 === t && (t = le.ajaxSettings && le.ajaxSettings.traditional), le.isArray(e) || e.jquery && !le.isPlainObject(e)) le.each(e,
            function() {
                i(this.name, this.value)
            });
            else for (n in e) J(n, e[n], t, i);
            return r.join("&").replace(Yt, "+")
        },
        le.fn.extend({
            serialize: function() {
                return le.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map(function() {
                    var e = le.prop(this, "elements");
                    return e ? le.makeArray(e) : this
                }).filter(function() {
                    var e = this.type;
                    return this.name && !le(this).is(":disabled") && Zt.test(this.nodeName) && !Kt.test(e) && (this.checked || !qe.test(e))
                }).map(function(e, t) {
                    var n = le(this).val();
                    return null == n ? null: le.isArray(n) ? le.map(n,
                    function(e) {
                        return {
                            name: t.name,
                            value: e.replace(Qt, "\r\n")
                        }
                    }) : {
                        name: t.name,
                        value: n.replace(Qt, "\r\n")
                    }
                }).get()
            }
        }),
        le.ajaxSettings.xhr = void 0 !== n.ActiveXObject ?
        function() {
            return ! this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && Y() || G()
        }: Y;
        var en = 0,
        tn = {},
        nn = le.ajaxSettings.xhr();
        n.ActiveXObject && le(n).on("unload",
        function() {
            for (var e in tn) tn[e](void 0, !0)
        }),
        ae.cors = !!nn && "withCredentials" in nn,
        nn = ae.ajax = !!nn,
        nn && le.ajaxTransport(function(e) {
            if (!e.crossDomain || ae.cors) {
                var t;
                return {
                    send: function(n, r) {
                        var i, o = e.xhr(),
                        a = ++en;
                        if (o.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields) for (i in e.xhrFields) o[i] = e.xhrFields[i];
                        e.mimeType && o.overrideMimeType && o.overrideMimeType(e.mimeType),
                        e.crossDomain || n["X-Requested-With"] || (n["X-Requested-With"] = "XMLHttpRequest");
                        for (i in n) void 0 !== n[i] && o.setRequestHeader(i, n[i] + "");
                        o.send(e.hasContent && e.data || null),
                        t = function(n, i) {
                            var s, l, u;
                            if (t && (i || 4 === o.readyState)) if (delete tn[a], t = void 0, o.onreadystatechange = le.noop, i) 4 !== o.readyState && o.abort();
                            else {
                                u = {},
                                s = o.status,
                                "string" == typeof o.responseText && (u.text = o.responseText);
                                try {
                                    l = o.statusText
                                } catch(e) {
                                    l = ""
                                }
                                s || !e.isLocal || e.crossDomain ? 1223 === s && (s = 204) : s = u.text ? 200 : 404
                            }
                            u && r(s, l, u, o.getAllResponseHeaders())
                        },
                        e.async ? 4 === o.readyState ? setTimeout(t) : o.onreadystatechange = tn[a] = t: t()
                    },
                    abort: function() {
                        t && t(void 0, !0)
                    }
                }
            }
        }),
        le.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /(?:java|ecma)script/
            },
            converters: {
                "text script": function(e) {
                    return le.globalEval(e),
                    e
                }
            }
        }),
        le.ajaxPrefilter("script",
        function(e) {
            void 0 === e.cache && (e.cache = !1),
            e.crossDomain && (e.type = "GET", e.global = !1)
        }),
        le.ajaxTransport("script",
        function(e) {
            if (e.crossDomain) {
                var t, n = ye.head || le("head")[0] || ye.documentElement;
                return {
                    send: function(r, i) {
                        t = ye.createElement("script"),
                        t.async = !0,
                        e.scriptCharset && (t.charset = e.scriptCharset),
                        t.src = e.url,
                        t.onload = t.onreadystatechange = function(e, n) { (n || !t.readyState || /loaded|complete/.test(t.readyState)) && (t.onload = t.onreadystatechange = null, t.parentNode && t.parentNode.removeChild(t), t = null, n || i(200, "success"))
                        },
                        n.insertBefore(t, n.firstChild)
                    },
                    abort: function() {
                        t && t.onload(void 0, !0)
                    }
                }
            }
        });
        var rn = [],
        on = /(=)\?(?=&|$)|\?\?/;
        le.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var e = rn.pop() || le.expando + "_" + qt++;
                return this[e] = !0,
                e
            }
        }),
        le.ajaxPrefilter("json jsonp",
        function(e, t, r) {
            var i, o, a, s = e.jsonp !== !1 && (on.test(e.url) ? "url": "string" == typeof e.data && !(e.contentType || "").indexOf("application/x-www-form-urlencoded") && on.test(e.data) && "data");
            if (s || "jsonp" === e.dataTypes[0]) return i = e.jsonpCallback = le.isFunction(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback,
            s ? e[s] = e[s].replace(on, "$1" + i) : e.jsonp !== !1 && (e.url += (Mt.test(e.url) ? "&": "?") + e.jsonp + "=" + i),
            e.converters["script json"] = function() {
                return a || le.error(i + " was not called"),
                a[0]
            },
            e.dataTypes[0] = "json",
            o = n[i],
            n[i] = function() {
                a = arguments
            },
            r.always(function() {
                n[i] = o,
                e[i] && (e.jsonpCallback = t.jsonpCallback, rn.push(i)),
                a && le.isFunction(o) && o(a[0]),
                a = o = void 0
            }),
            "script"
        }),
        le.parseHTML = function(e, t, n) {
            if (!e || "string" != typeof e) return null;
            "boolean" == typeof t && (n = t, t = !1),
            t = t || ye;
            var r = me.exec(e),
            i = !n && [];
            return r ? [t.createElement(r[1])] : (r = le.buildFragment([e], t, i), i && i.length && le(i).remove(), le.merge([], r.childNodes))
        };
        var an = le.fn.load;
        le.fn.load = function(e, t, n) {
            if ("string" != typeof e && an) return an.apply(this, arguments);
            var r, i, o, a = this,
            s = e.indexOf(" ");
            return s >= 0 && (r = le.trim(e.slice(s, e.length)), e = e.slice(0, s)),
            le.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"),
            a.length > 0 && le.ajax({
                url: e,
                type: o,
                dataType: "html",
                data: t
            }).done(function(e) {
                i = arguments,
                a.html(r ? le("<div>").append(le.parseHTML(e)).find(r) : e)
            }).complete(n &&
            function(e, t) {
                a.each(n, i || [e.responseText, t, e])
            }),
            this
        },
        le.expr.filters.animated = function(e) {
            return le.grep(le.timers,
            function(t) {
                return e === t.elem
            }).length
        };
        var sn = n.document.documentElement;
        le.offset = {
            setOffset: function(e, t, n) {
                var r, i, o, a, s, l, u, c = le.css(e, "position"),
                f = le(e),
                d = {};
                "static" === c && (e.style.position = "relative"),
                s = f.offset(),
                o = le.css(e, "top"),
                l = le.css(e, "left"),
                u = ("absolute" === c || "fixed" === c) && le.inArray("auto", [o, l]) > -1,
                u ? (r = f.position(), a = r.top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(l) || 0),
                le.isFunction(t) && (t = t.call(e, n, s)),
                null != t.top && (d.top = t.top - s.top + a),
                null != t.left && (d.left = t.left - s.left + i),
                "using" in t ? t.using.call(e, d) : f.css(d)
            }
        },
        le.fn.extend({
            offset: function(e) {
                if (arguments.length) return void 0 === e ? this: this.each(function(t) {
                    le.offset.setOffset(this, e, t);
                });
                var t, n, r = {
                    top: 0,
                    left: 0
                },
                i = this[0],
                o = i && i.ownerDocument;
                if (o) return t = o.documentElement,
                le.contains(t, i) ? (typeof i.getBoundingClientRect !== ke && (r = i.getBoundingClientRect()), n = Q(o), {
                    top: r.top + (n.pageYOffset || t.scrollTop) - (t.clientTop || 0),
                    left: r.left + (n.pageXOffset || t.scrollLeft) - (t.clientLeft || 0)
                }) : r
            },
            position: function() {
                if (this[0]) {
                    var e, t, n = {
                        top: 0,
                        left: 0
                    },
                    r = this[0];
                    return "fixed" === le.css(r, "position") ? t = r.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), le.nodeName(e[0], "html") || (n = e.offset()), n.top += le.css(e[0], "borderTopWidth", !0), n.left += le.css(e[0], "borderLeftWidth", !0)),
                    {
                        top: t.top - n.top - le.css(r, "marginTop", !0),
                        left: t.left - n.left - le.css(r, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map(function() {
                    for (var e = this.offsetParent || sn; e && !le.nodeName(e, "html") && "static" === le.css(e, "position");) e = e.offsetParent;
                    return e || sn
                })
            }
        }),
        le.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        },
        function(e, t) {
            var n = /Y/.test(t);
            le.fn[e] = function(r) {
                return _e(this,
                function(e, r, i) {
                    var o = Q(e);
                    return void 0 === i ? o ? t in o ? o[t] : o.document.documentElement[r] : e[r] : void(o ? o.scrollTo(n ? le(o).scrollLeft() : i, n ? i: le(o).scrollTop()) : e[r] = i)
                },
                e, r, arguments.length, null)
            }
        }),
        le.each(["top", "left"],
        function(e, t) {
            le.cssHooks[t] = A(ae.pixelPosition,
            function(e, n) {
                if (n) return n = st(e, t),
                ot.test(n) ? le(e).position()[t] + "px": n
            })
        }),
        le.each({
            Height: "height",
            Width: "width"
        },
        function(e, t) {
            le.each({
                padding: "inner" + e,
                content: t,
                "": "outer" + e
            },
            function(n, r) {
                le.fn[r] = function(r, i) {
                    var o = arguments.length && (n || "boolean" != typeof r),
                    a = n || (r === !0 || i === !0 ? "margin": "border");
                    return _e(this,
                    function(t, n, r) {
                        var i;
                        return le.isWindow(t) ? t.document.documentElement["client" + e] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + e], i["scroll" + e], t.body["offset" + e], i["offset" + e], i["client" + e])) : void 0 === r ? le.css(t, n, a) : le.style(t, n, r, a)
                    },
                    t, o ? r: void 0, o, null)
                }
            })
        }),
        le.fn.size = function() {
            return this.length
        },
        le.fn.andSelf = le.fn.addBack,
        r = [],
        i = function() {
            return le
        }.apply(t, r),
        !(void 0 !== i && (e.exports = i));
        var ln = n.jQuery,
        un = n.$;
        return le.noConflict = function(e) {
            return n.$ === le && (n.$ = un),
            e && n.jQuery === le && (n.jQuery = ln),
            le
        },
        typeof o === ke && (n.jQuery = n.$ = le),
        le
    })
}]);