!function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : e.Popper = t()
}(this, (function () {
    "use strict";

    function e(e) {
        return e && "[object Function]" === {}.toString.call(e)
    }

    function t(e, t) {
        if (1 !== e.nodeType) return [];
        var o, n = e.ownerDocument.defaultView.getComputedStyle(e, null);
        return t ? n[t] : n
    }

    function o(e) {
        return "HTML" === e.nodeName ? e : e.parentNode || e.host
    }

    function n(e) {
        if (!e) return document.body;
        switch (e.nodeName) {
            case"HTML":
            case"BODY":
                return e.ownerDocument.body;
            case"#document":
                return e.body
        }
        var i = t(e), r = i.overflow, p = i.overflowX, s = i.overflowY;
        return /(auto|scroll|overlay)/.test(r + s + p) ? e : n(o(e))
    }

    function i(e) {
        return e && e.referenceNode ? e.referenceNode : e
    }

    function r(e) {
        return 11 === e ? re : 10 === e ? pe : re || pe
    }

    function p(e) {
        if (!e) return document.documentElement;
        for (var o = r(10) ? document.body : null, n = e.offsetParent || null; n === o && e.nextElementSibling;) n = (e = e.nextElementSibling).offsetParent;
        var i = n && n.nodeName;
        return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === t(n, "position") ? p(n) : n : e ? e.ownerDocument.documentElement : document.documentElement
    }

    function s(e) {
        var t = e.nodeName;
        return "BODY" !== t && ("HTML" === t || p(e.firstElementChild) === e)
    }

    function d(e) {
        return null === e.parentNode ? e : d(e.parentNode)
    }

    function a(e, t) {
        if (!(e && e.nodeType && t && t.nodeType)) return document.documentElement;
        var o = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING, n = o ? e : t, i = o ? t : e,
            r = document.createRange();
        r.setStart(n, 0), r.setEnd(i, 0);
        var l = r.commonAncestorContainer;
        if (e !== l && t !== l || n.contains(i)) return s(l) ? l : p(l);
        var f = d(e);
        return f.host ? a(f.host, t) : a(e, d(t).host)
    }

    function l(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "top",
            o = "top" === t ? "scrollTop" : "scrollLeft", n = e.nodeName;
        if ("BODY" === n || "HTML" === n) {
            var i = e.ownerDocument.documentElement, r = e.ownerDocument.scrollingElement || i;
            return r[o]
        }
        return e[o]
    }

    function f(e, t) {
        var o = 2 < arguments.length && void 0 !== arguments[2] && arguments[2], n = l(t, "top"), i = l(t, "left"),
            r = o ? -1 : 1;
        return e.top += n * r, e.bottom += n * r, e.left += i * r, e.right += i * r, e
    }

    function m(e, t) {
        var o = "x" === t ? "Left" : "Top", n = "Left" == o ? "Right" : "Bottom";
        return parseFloat(e["border" + o + "Width"]) + parseFloat(e["border" + n + "Width"])
    }

    function h(e, t, o, n) {
        return ee(t["offset" + e], t["scroll" + e], o["client" + e], o["offset" + e], o["scroll" + e], r(10) ? parseInt(o["offset" + e]) + parseInt(n["margin" + ("Height" === e ? "Top" : "Left")]) + parseInt(n["margin" + ("Height" === e ? "Bottom" : "Right")]) : 0)
    }

    function c(e) {
        var t = e.body, o = e.documentElement, n = r(10) && getComputedStyle(o);
        return {height: h("Height", t, o, n), width: h("Width", t, o, n)}
    }

    function g(e) {
        return le({}, e, {right: e.left + e.width, bottom: e.top + e.height})
    }

    function u(e) {
        var o = {};
        try {
            if (r(10)) {
                o = e.getBoundingClientRect();
                var n = l(e, "top"), i = l(e, "left");
                o.top += n, o.left += i, o.bottom += n, o.right += i
            } else o = e.getBoundingClientRect()
        } catch (t) {
        }
        var p = {left: o.left, top: o.top, width: o.right - o.left, height: o.bottom - o.top},
            s = "HTML" === e.nodeName ? c(e.ownerDocument) : {}, d = s.width || e.clientWidth || p.width,
            a = s.height || e.clientHeight || p.height, f = e.offsetWidth - d, h = e.offsetHeight - a;
        if (f || h) {
            var u = t(e);
            f -= m(u, "x"), h -= m(u, "y"), p.width -= f, p.height -= h
        }
        return g(p)
    }

    function b(e, o) {
        var i = 2 < arguments.length && void 0 !== arguments[2] && arguments[2], p = r(10), s = "HTML" === o.nodeName,
            d = u(e), a = u(o), l = n(e), m = t(o), h = parseFloat(m.borderTopWidth), c = parseFloat(m.borderLeftWidth);
        i && s && (a.top = ee(a.top, 0), a.left = ee(a.left, 0));
        var b = g({top: d.top - a.top - h, left: d.left - a.left - c, width: d.width, height: d.height});
        if (b.marginTop = 0, b.marginLeft = 0, !p && s) {
            var w = parseFloat(m.marginTop), y = parseFloat(m.marginLeft);
            b.top -= h - w, b.bottom -= h - w, b.left -= c - y, b.right -= c - y, b.marginTop = w, b.marginLeft = y
        }
        return (p && !i ? o.contains(l) : o === l && "BODY" !== l.nodeName) && (b = f(b, o)), b
    }

    function w(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1], o = e.ownerDocument.documentElement,
            n = b(e, o), i = ee(o.clientWidth, window.innerWidth || 0), r = ee(o.clientHeight, window.innerHeight || 0),
            p = t ? 0 : l(o), s = t ? 0 : l(o, "left"),
            d = {top: p - n.top + n.marginTop, left: s - n.left + n.marginLeft, width: i, height: r};
        return g(d)
    }

    function y(e) {
        var n = e.nodeName;
        if ("BODY" === n || "HTML" === n) return !1;
        if ("fixed" === t(e, "position")) return !0;
        var i = o(e);
        return !!i && y(i)
    }

    function E(e) {
        if (!e || !e.parentElement || r()) return document.documentElement;
        for (var o = e.parentElement; o && "none" === t(o, "transform");) o = o.parentElement;
        return o || document.documentElement
    }

    function v(e, t, r, p) {
        var s = 4 < arguments.length && void 0 !== arguments[4] && arguments[4], d = {top: 0, left: 0},
            l = s ? E(e) : a(e, i(t));
        if ("viewport" === p) d = w(l, s); else {
            var f;
            "scrollParent" === p ? "BODY" === (f = n(o(t))).nodeName && (f = e.ownerDocument.documentElement) : f = "window" === p ? e.ownerDocument.documentElement : p;
            var m = b(f, l, s);
            if ("HTML" !== f.nodeName || y(l)) d = m; else {
                var h = c(e.ownerDocument), g = h.height, u = h.width;
                d.top += m.top - m.marginTop, d.bottom = g + m.top, d.left += m.left - m.marginLeft, d.right = u + m.left
            }
        }
        var v = "number" == typeof (r = r || 0);
        return d.left += v ? r : r.left || 0, d.top += v ? r : r.top || 0, d.right -= v ? r : r.right || 0, d.bottom -= v ? r : r.bottom || 0, d
    }

    function x(e) {
        var t, o;
        return e.width * e.height
    }

    function O(e, t, o, n, i) {
        var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
        if (-1 === e.indexOf("auto")) return e;
        var p = v(o, n, r, i), s = {
            top: {width: p.width, height: t.top - p.top},
            right: {width: p.right - t.right, height: p.height},
            bottom: {width: p.width, height: p.bottom - t.bottom},
            left: {width: t.left - p.left, height: p.height}
        }, d = Object.keys(s).map((function (e) {
            return le({key: e}, s[e], {area: x(s[e])})
        })).sort((function (e, t) {
            return t.area - e.area
        })), a = d.filter((function (e) {
            var t = e.width, n = e.height;
            return t >= o.clientWidth && n >= o.clientHeight
        })), l = 0 < a.length ? a[0].key : d[0].key, f = e.split("-")[1];
        return l + (f ? "-" + f : "")
    }

    function L(e, t, o) {
        var n = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : null, r = n ? E(t) : a(t, i(o));
        return b(o, r, n)
    }

    function S(e) {
        var t, o = e.ownerDocument.defaultView.getComputedStyle(e),
            n = parseFloat(o.marginTop || 0) + parseFloat(o.marginBottom || 0),
            i = parseFloat(o.marginLeft || 0) + parseFloat(o.marginRight || 0), r;
        return {width: e.offsetWidth + i, height: e.offsetHeight + n}
    }

    function T(e) {
        var t = {left: "right", right: "left", bottom: "top", top: "bottom"};
        return e.replace(/left|right|bottom|top/g, (function (e) {
            return t[e]
        }))
    }

    function C(e, t, o) {
        o = o.split("-")[0];
        var n = S(e), i = {width: n.width, height: n.height}, r = -1 !== ["right", "left"].indexOf(o),
            p = r ? "top" : "left", s = r ? "left" : "top", d = r ? "height" : "width", a = r ? "width" : "height";
        return i[p] = t[p] + t[d] / 2 - n[d] / 2, i[s] = o === s ? t[s] - n[a] : t[T(s)], i
    }

    function D(e, t) {
        return Array.prototype.find ? e.find(t) : e.filter(t)[0]
    }

    function N(e, t, o) {
        if (Array.prototype.findIndex) return e.findIndex((function (e) {
            return e[t] === o
        }));
        var n = D(e, (function (e) {
            return e[t] === o
        }));
        return e.indexOf(n)
    }

    function P(t, o, n) {
        var i;
        return (void 0 === n ? t : t.slice(0, N(t, "name", n))).forEach((function (t) {
            t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
            var n = t.function || t.fn;
            t.enabled && e(n) && (o.offsets.popper = g(o.offsets.popper), o.offsets.reference = g(o.offsets.reference), o = n(o, t))
        })), o
    }

    function k() {
        if (!this.state.isDestroyed) {
            var e = {instance: this, styles: {}, arrowStyles: {}, attributes: {}, flipped: !1, offsets: {}};
            e.offsets.reference = L(this.state, this.popper, this.reference, this.options.positionFixed), e.placement = O(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.positionFixed = this.options.positionFixed, e.offsets.popper = C(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", e = P(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
        }
    }

    function W(e, t) {
        return e.some((function (e) {
            var o = e.name, n;
            return e.enabled && o === t
        }))
    }

    function B(e) {
        for (var t = [!1, "ms", "Webkit", "Moz", "O"], o = e.charAt(0).toUpperCase() + e.slice(1), n = 0; n < t.length; n++) {
            var i = t[n], r = i ? "" + i + o : e;
            if (void 0 !== document.body.style[r]) return r
        }
        return null
    }

    function H() {
        return this.state.isDestroyed = !0, W(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[B("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
    }

    function A(e) {
        var t = e.ownerDocument;
        return t ? t.defaultView : window
    }

    function M(e, t, o, i) {
        var r = "BODY" === e.nodeName, p = r ? e.ownerDocument.defaultView : e;
        p.addEventListener(t, o, {passive: !0}), r || M(n(p.parentNode), t, o, i), i.push(p)
    }

    function F(e, t, o, i) {
        o.updateBound = i, A(e).addEventListener("resize", o.updateBound, {passive: !0});
        var r = n(e);
        return M(r, "scroll", o.updateBound, o.scrollParents), o.scrollElement = r, o.eventsEnabled = !0, o
    }

    function I() {
        this.state.eventsEnabled || (this.state = F(this.reference, this.options, this.state, this.scheduleUpdate))
    }

    function R(e, t) {
        return A(e).removeEventListener("resize", t.updateBound), t.scrollParents.forEach((function (e) {
            e.removeEventListener("scroll", t.updateBound)
        })), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t
    }

    function U() {
        this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = R(this.reference, this.state))
    }

    function Y(e) {
        return "" !== e && !isNaN(parseFloat(e)) && isFinite(e)
    }

    function V(e, t) {
        Object.keys(t).forEach((function (o) {
            var n = "";
            -1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(o) && Y(t[o]) && (n = "px"), e.style[o] = t[o] + n
        }))
    }

    function j(e, t) {
        Object.keys(t).forEach((function (o) {
            var n;
            !1 === t[o] ? e.removeAttribute(o) : e.setAttribute(o, t[o])
        }))
    }

    function q(e, t) {
        var o = e.offsets, n = o.popper, i = o.reference, r = $, p = function (e) {
                return e
            }, s = r(i.width), d = r(n.width), a = -1 !== ["left", "right"].indexOf(e.placement),
            l = -1 !== e.placement.indexOf("-"), f = t ? a || l || s % 2 == d % 2 ? r : Z : p, m = t ? r : p;
        return {
            left: f(1 == s % 2 && 1 == d % 2 && !l && t ? n.left - 1 : n.left),
            top: m(n.top),
            bottom: m(n.bottom),
            right: f(n.right)
        }
    }

    function K(e, t, o) {
        var n = D(e, (function (e) {
            var o;
            return e.name === t
        })), i = !!n && e.some((function (e) {
            return e.name === o && e.enabled && e.order < n.order
        }));
        if (!i) {
            var r = "`" + t + "`";
            console.warn("`" + o + "` modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!")
        }
        return i
    }

    function z(e) {
        return "end" === e ? "start" : "start" === e ? "end" : e
    }

    function G(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1], o = he.indexOf(e),
            n = he.slice(o + 1).concat(he.slice(0, o));
        return t ? n.reverse() : n
    }

    function _(e, t, o, n) {
        var i = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/), r = +i[1], p = i[2], a;
        if (!r) return e;
        if (0 === p.indexOf("%")) {
            var s, d;
            switch (p) {
                case"%p":
                    s = o;
                    break;
                case"%":
                case"%r":
                default:
                    s = n
            }
            return g(s)[t] / 100 * r
        }
        return "vh" === p || "vw" === p ? (a = "vh" === p ? ee(document.documentElement.clientHeight, window.innerHeight || 0) : ee(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r : r
    }

    function X(e, t, o, n) {
        var i = [0, 0], r = -1 !== ["right", "left"].indexOf(n), p = e.split(/(\+|\-)/).map((function (e) {
            return e.trim()
        })), s = p.indexOf(D(p, (function (e) {
            return -1 !== e.search(/,|\s/)
        })));
        p[s] && -1 === p[s].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
        var d = /\s*,\s*|\s+/,
            a = -1 === s ? [p] : [p.slice(0, s).concat([p[s].split(d)[0]]), [p[s].split(d)[1]].concat(p.slice(s + 1))];
        return (a = a.map((function (e, n) {
            var i = (1 === n ? !r : r) ? "height" : "width", p = !1;
            return e.reduce((function (e, t) {
                return "" === e[e.length - 1] && -1 !== ["+", "-"].indexOf(t) ? (e[e.length - 1] = t, p = !0, e) : p ? (e[e.length - 1] += t, p = !1, e) : e.concat(t)
            }), []).map((function (e) {
                return _(e, i, t, o)
            }))
        }))).forEach((function (e, t) {
            e.forEach((function (o, n) {
                Y(o) && (i[t] += o * ("-" === e[n - 1] ? -1 : 1))
            }))
        })), i
    }

    function J(e, t) {
        var o, n = t.offset, i = e.placement, r = e.offsets, p = r.popper, s = r.reference, d = i.split("-")[0];
        return o = Y(+n) ? [+n, 0] : X(n, p, s, d), "left" === d ? (p.top += o[0], p.left -= o[1]) : "right" === d ? (p.top += o[0], p.left += o[1]) : "top" === d ? (p.left += o[0], p.top -= o[1]) : "bottom" === d && (p.left += o[0], p.top += o[1]), e.popper = p, e
    }

    var Q = Math.min, Z = Math.floor, $ = Math.round, ee = Math.max,
        te = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
        oe = function () {
            for (var e = ["Edge", "Trident", "Firefox"], t = 0; t < e.length; t += 1) if (te && 0 <= navigator.userAgent.indexOf(e[t])) return 1;
            return 0
        }(), ne, ie = te && window.Promise ? function (e) {
            var t = !1;
            return function () {
                t || (t = !0, window.Promise.resolve().then((function () {
                    t = !1, e()
                })))
            }
        } : function (e) {
            var t = !1;
            return function () {
                t || (t = !0, setTimeout((function () {
                    t = !1, e()
                }), oe))
            }
        }, re = te && !(!window.MSInputMethodContext || !document.documentMode),
        pe = te && /MSIE 10/.test(navigator.userAgent), se = function (e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }, de = function () {
            function e(e, t) {
                for (var o, n = 0; n < t.length; n++) (o = t[n]).enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
            }

            return function (t, o, n) {
                return o && e(t.prototype, o), n && e(t, n), t
            }
        }(), ae = function (e, t, o) {
            return t in e ? Object.defineProperty(e, t, {
                value: o,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = o, e
        }, le = Object.assign || function (e) {
            for (var t, o = 1; o < arguments.length; o++) for (var n in t = arguments[o]) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
            return e
        }, fe = te && /Firefox/i.test(navigator.userAgent),
        me = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
        he = me.slice(3), ce_FLIP = "flip", ce_CLOCKWISE = "clockwise", ce_COUNTERCLOCKWISE = "counterclockwise",
        ge = function () {
            function t(o, n) {
                var i = this, r = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
                se(this, t), this.scheduleUpdate = function () {
                    return requestAnimationFrame(i.update)
                }, this.update = ie(this.update.bind(this)), this.options = le({}, t.Defaults, r), this.state = {
                    isDestroyed: !1,
                    isCreated: !1,
                    scrollParents: []
                }, this.reference = o && o.jquery ? o[0] : o, this.popper = n && n.jquery ? n[0] : n, this.options.modifiers = {}, Object.keys(le({}, t.Defaults.modifiers, r.modifiers)).forEach((function (e) {
                    i.options.modifiers[e] = le({}, t.Defaults.modifiers[e] || {}, r.modifiers ? r.modifiers[e] : {})
                })), this.modifiers = Object.keys(this.options.modifiers).map((function (e) {
                    return le({name: e}, i.options.modifiers[e])
                })).sort((function (e, t) {
                    return e.order - t.order
                })), this.modifiers.forEach((function (t) {
                    t.enabled && e(t.onLoad) && t.onLoad(i.reference, i.popper, i.options, t, i.state)
                })), this.update();
                var p = this.options.eventsEnabled;
                p && this.enableEventListeners(), this.state.eventsEnabled = p
            }

            return de(t, [{
                key: "update", value: function () {
                    return k.call(this)
                }
            }, {
                key: "destroy", value: function () {
                    return H.call(this)
                }
            }, {
                key: "enableEventListeners", value: function () {
                    return I.call(this)
                }
            }, {
                key: "disableEventListeners", value: function () {
                    return U.call(this)
                }
            }]), t
        }();
    return ge.Utils = ("undefined" == typeof window ? global : window).PopperUtils, ge.placements = me, ge.Defaults = {
        placement: "bottom", positionFixed: !1, eventsEnabled: !0, removeOnDestroy: !1, onCreate: function () {
        }, onUpdate: function () {
        }, modifiers: {
            shift: {
                order: 100, enabled: !0, fn: function (e) {
                    var t = e.placement, o = t.split("-")[0], n = t.split("-")[1];
                    if (n) {
                        var i = e.offsets, r = i.reference, p = i.popper, s = -1 !== ["bottom", "top"].indexOf(o),
                            d = s ? "left" : "top", a = s ? "width" : "height",
                            l = {start: ae({}, d, r[d]), end: ae({}, d, r[d] + r[a] - p[a])};
                        e.offsets.popper = le({}, p, l[n])
                    }
                    return e
                }
            },
            offset: {order: 200, enabled: !0, fn: J, offset: 0},
            preventOverflow: {
                order: 300, enabled: !0, fn: function (e, t) {
                    var o = t.boundariesElement || p(e.instance.popper);
                    e.instance.reference === o && (o = p(o));
                    var n = B("transform"), i = e.instance.popper.style, r = i.top, s = i.left, d = i[n];
                    i.top = "", i.left = "", i[n] = "";
                    var a = v(e.instance.popper, e.instance.reference, t.padding, o, e.positionFixed);
                    i.top = r, i.left = s, i[n] = d, t.boundaries = a;
                    var l = t.priority, f = e.offsets.popper, m = {
                        primary: function (e) {
                            var o = f[e];
                            return f[e] < a[e] && !t.escapeWithReference && (o = ee(f[e], a[e])), ae({}, e, o)
                        }, secondary: function (e) {
                            var o = "right" === e ? "left" : "top", n = f[o];
                            return f[e] > a[e] && !t.escapeWithReference && (n = Q(f[o], a[e] - ("right" === e ? f.width : f.height))), ae({}, o, n)
                        }
                    };
                    return l.forEach((function (e) {
                        var t = -1 === ["left", "top"].indexOf(e) ? "secondary" : "primary";
                        f = le({}, f, m[t](e))
                    })), e.offsets.popper = f, e
                }, priority: ["left", "right", "top", "bottom"], padding: 5, boundariesElement: "scrollParent"
            },
            keepTogether: {
                order: 400, enabled: !0, fn: function (e) {
                    var t = e.offsets, o = t.popper, n = t.reference, i = e.placement.split("-")[0], r = Z,
                        p = -1 !== ["top", "bottom"].indexOf(i), s = p ? "right" : "bottom", d = p ? "left" : "top",
                        a = p ? "width" : "height";
                    return o[s] < r(n[d]) && (e.offsets.popper[d] = r(n[d]) - o[a]), o[d] > r(n[s]) && (e.offsets.popper[d] = r(n[s])), e
                }
            },
            arrow: {
                order: 500, enabled: !0, fn: function (e, o) {
                    var n;
                    if (!K(e.instance.modifiers, "arrow", "keepTogether")) return e;
                    var i = o.element;
                    if ("string" == typeof i) {
                        if (!(i = e.instance.popper.querySelector(i))) return e
                    } else if (!e.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), e;
                    var r = e.placement.split("-")[0], p = e.offsets, s = p.popper, d = p.reference,
                        a = -1 !== ["left", "right"].indexOf(r), l = a ? "height" : "width", f = a ? "Top" : "Left",
                        m = f.toLowerCase(), h = a ? "left" : "top", c = a ? "bottom" : "right", u = S(i)[l];
                    d[c] - u < s[m] && (e.offsets.popper[m] -= s[m] - (d[c] - u)), d[m] + u > s[c] && (e.offsets.popper[m] += d[m] + u - s[c]), e.offsets.popper = g(e.offsets.popper);
                    var b = d[m] + d[l] / 2 - u / 2, w = t(e.instance.popper), y = parseFloat(w["margin" + f]),
                        E = parseFloat(w["border" + f + "Width"]), v = b - e.offsets.popper[m] - y - E;
                    return v = ee(Q(s[l] - u, v), 0), e.arrowElement = i, e.offsets.arrow = (ae(n = {}, m, $(v)), ae(n, h, ""), n), e
                }, element: "[x-arrow]"
            },
            flip: {
                order: 600,
                enabled: !0,
                fn: function (e, t) {
                    if (W(e.instance.modifiers, "inner")) return e;
                    if (e.flipped && e.placement === e.originalPlacement) return e;
                    var o = v(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement, e.positionFixed),
                        n = e.placement.split("-")[0], i = T(n), r = e.placement.split("-")[1] || "", p = [];
                    switch (t.behavior) {
                        case ce_FLIP:
                            p = [n, i];
                            break;
                        case ce_CLOCKWISE:
                            p = G(n);
                            break;
                        case ce_COUNTERCLOCKWISE:
                            p = G(n, !0);
                            break;
                        default:
                            p = t.behavior
                    }
                    return p.forEach((function (s, d) {
                        if (n !== s || p.length === d + 1) return e;
                        n = e.placement.split("-")[0], i = T(n);
                        var a = e.offsets.popper, l = e.offsets.reference, f = Z,
                            m = "left" === n && f(a.right) > f(l.left) || "right" === n && f(a.left) < f(l.right) || "top" === n && f(a.bottom) > f(l.top) || "bottom" === n && f(a.top) < f(l.bottom),
                            h = f(a.left) < f(o.left), c = f(a.right) > f(o.right), g = f(a.top) < f(o.top),
                            u = f(a.bottom) > f(o.bottom),
                            b = "left" === n && h || "right" === n && c || "top" === n && g || "bottom" === n && u,
                            w = -1 !== ["top", "bottom"].indexOf(n),
                            y = !!t.flipVariations && (w && "start" === r && h || w && "end" === r && c || !w && "start" === r && g || !w && "end" === r && u),
                            E = !!t.flipVariationsByContent && (w && "start" === r && c || w && "end" === r && h || !w && "start" === r && u || !w && "end" === r && g),
                            v = y || E;
                        (m || b || v) && (e.flipped = !0, (m || b) && (n = p[d + 1]), v && (r = z(r)), e.placement = n + (r ? "-" + r : ""), e.offsets.popper = le({}, e.offsets.popper, C(e.instance.popper, e.offsets.reference, e.placement)), e = P(e.instance.modifiers, e, "flip"))
                    })), e
                },
                behavior: "flip",
                padding: 5,
                boundariesElement: "viewport",
                flipVariations: !1,
                flipVariationsByContent: !1
            },
            inner: {
                order: 700, enabled: !1, fn: function (e) {
                    var t = e.placement, o = t.split("-")[0], n = e.offsets, i = n.popper, r = n.reference,
                        p = -1 !== ["left", "right"].indexOf(o), s = -1 === ["top", "left"].indexOf(o);
                    return i[p ? "left" : "top"] = r[o] - (s ? i[p ? "width" : "height"] : 0), e.placement = T(t), e.offsets.popper = g(i), e
                }
            },
            hide: {
                order: 800, enabled: !0, fn: function (e) {
                    if (!K(e.instance.modifiers, "hide", "preventOverflow")) return e;
                    var t = e.offsets.reference, o = D(e.instance.modifiers, (function (e) {
                        return "preventOverflow" === e.name
                    })).boundaries;
                    if (t.bottom < o.top || t.left > o.right || t.top > o.bottom || t.right < o.left) {
                        if (!0 === e.hide) return e;
                        e.hide = !0, e.attributes["x-out-of-boundaries"] = ""
                    } else {
                        if (!1 === e.hide) return e;
                        e.hide = !1, e.attributes["x-out-of-boundaries"] = !1
                    }
                    return e
                }
            },
            computeStyle: {
                order: 850, enabled: !0, fn: function (e, t) {
                    var o = t.x, n = t.y, i = e.offsets.popper, r = D(e.instance.modifiers, (function (e) {
                        return "applyStyle" === e.name
                    })).gpuAcceleration;
                    void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
                    var s, d, a = void 0 === r ? t.gpuAcceleration : r, l = p(e.instance.popper), f = u(l),
                        m = {position: i.position}, h = q(e, 2 > window.devicePixelRatio || !fe),
                        c = "bottom" === o ? "top" : "bottom", g = "right" === n ? "left" : "right", b = B("transform");
                    if (d = "bottom" == c ? "HTML" === l.nodeName ? -l.clientHeight + h.bottom : -f.height + h.bottom : h.top, s = "right" == g ? "HTML" === l.nodeName ? -l.clientWidth + h.right : -f.width + h.right : h.left, a && b) m[b] = "translate3d(" + s + "px, " + d + "px, 0)", m[c] = 0, m[g] = 0, m.willChange = "transform"; else {
                        var w = "bottom" == c ? -1 : 1, y = "right" == g ? -1 : 1;
                        m[c] = d * w, m[g] = s * y, m.willChange = c + ", " + g
                    }
                    var E = {"x-placement": e.placement};
                    return e.attributes = le({}, E, e.attributes), e.styles = le({}, m, e.styles), e.arrowStyles = le({}, e.offsets.arrow, e.arrowStyles), e
                }, gpuAcceleration: !0, x: "bottom", y: "right"
            },
            applyStyle: {
                order: 900, enabled: !0, fn: function (e) {
                    return V(e.instance.popper, e.styles), j(e.instance.popper, e.attributes), e.arrowElement && Object.keys(e.arrowStyles).length && V(e.arrowElement, e.arrowStyles), e
                }, onLoad: function (e, t, o, n, i) {
                    var r = L(i, t, e, o.positionFixed),
                        p = O(o.placement, r, t, e, o.modifiers.flip.boundariesElement, o.modifiers.flip.padding);
                    return t.setAttribute("x-placement", p), V(t, {position: o.positionFixed ? "fixed" : "absolute"}), o
                }, gpuAcceleration: void 0
            }
        }
    }, ge
})), function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e(require("popper.js")) : "function" == typeof define && define.amd ? define(["popper.js"], e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e(t.Popper)
}(this, (function (t) {
    "use strict";

    function e(t) {
        return t && "object" == typeof t && "default" in t ? t : {default: t}
    }

    var n = e(t);

    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function o(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function s() {
        return (s = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
            }
            return t
        }).apply(this, arguments)
    }

    var r, a, l, c, u = function (t) {
            do {
                t += Math.floor(1e6 * Math.random())
            } while (document.getElementById(t));
            return t
        }, h = function (t) {
            var e = t.getAttribute("data-target");
            if (!e || "#" === e) {
                var n = t.getAttribute("href");
                e = n && "#" !== n ? n.trim() : null
            }
            return e
        }, f = function (t) {
            var e = h(t);
            return e && document.querySelector(e) ? e : null
        }, d = function (t) {
            var e = h(t);
            return e ? document.querySelector(e) : null
        }, g = function (t) {
            if (!t) return 0;
            var e = window.getComputedStyle(t), n = e.transitionDuration, i = e.transitionDelay, o = parseFloat(n),
                s = parseFloat(i);
            return o || s ? (n = n.split(",")[0], i = i.split(",")[0], 1e3 * (parseFloat(n) + parseFloat(i))) : 0
        }, p = function (t) {
            t.dispatchEvent(new Event("transitionend"))
        }, m = function (t) {
            return (t[0] || t).nodeType
        }, _ = function (t, e) {
            var n = !1, i = e + 5;
            t.addEventListener("transitionend", (function e() {
                n = !0, t.removeEventListener("transitionend", e)
            })), setTimeout((function () {
                n || p(t)
            }), i)
        }, v = function (t, e, n) {
            Object.keys(n).forEach((function (i) {
                var o, s = n[i], r = e[i],
                    a = r && m(r) ? "element" : null == (o = r) ? "" + o : {}.toString.call(o).match(/\s([a-z]+)/i)[1].toLowerCase();
                if (!new RegExp(s).test(a)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + a + '" but expected type "' + s + '".')
            }))
        }, b = function (t) {
            if (!t) return !1;
            if (t.style && t.parentNode && t.parentNode.style) {
                var e = getComputedStyle(t), n = getComputedStyle(t.parentNode);
                return "none" !== e.display && "none" !== n.display && "hidden" !== e.visibility
            }
            return !1
        }, y = function () {
            return function () {
            }
        }, w = function (t) {
            return t.offsetHeight
        }, E = function () {
            var t = window.jQuery;
            return t && !document.body.hasAttribute("data-no-jquery") ? t : null
        }, T = (r = {}, a = 1, {
            set: function (t, e, n) {
                void 0 === t.bsKey && (t.bsKey = {key: e, id: a}, a++), r[t.bsKey.id] = n
            }, get: function (t, e) {
                if (!t || void 0 === t.bsKey) return null;
                var n = t.bsKey;
                return n.key === e ? r[n.id] : null
            }, delete: function (t, e) {
                if (void 0 !== t.bsKey) {
                    var n = t.bsKey;
                    n.key === e && (delete r[n.id], delete t.bsKey)
                }
            }
        }), k = function (t, e, n) {
            T.set(t, e, n)
        }, L = function (t, e) {
            return T.get(t, e)
        }, C = function (t, e) {
            T.delete(t, e)
        }, A = Element.prototype.querySelectorAll, S = Element.prototype.querySelector,
        D = (l = new CustomEvent("Bootstrap", {cancelable: !0}), (c = document.createElement("div")).addEventListener("Bootstrap", (function () {
            return null
        })), l.preventDefault(), c.dispatchEvent(l), l.defaultPrevented), I = /:scope\b/;
    (function () {
        var t = document.createElement("div");
        try {
            t.querySelectorAll(":scope *")
        } catch (t) {
            return !1
        }
        return !0
    })() || (A = function (t) {
        if (!I.test(t)) return this.querySelectorAll(t);
        var e = Boolean(this.id);
        e || (this.id = u("scope"));
        var n = null;
        try {
            t = t.replace(I, "#" + this.id), n = this.querySelectorAll(t)
        } finally {
            e || this.removeAttribute("id")
        }
        return n
    }, S = function (t) {
        if (!I.test(t)) return this.querySelector(t);
        var e = A.call(this, t);
        return void 0 !== e[0] ? e[0] : null
    });
    var O = E(), N = /[^.]*(?=\..*)\.|.*/, j = /\..*/, x = /::\d+$/, P = {}, R = 1,
        H = {mouseenter: "mouseover", mouseleave: "mouseout"},
        B = ["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"];

    function M(t, e) {
        return e && e + "::" + R++ || t.uidEvent || R++
    }

    function Q(t) {
        var e = M(t);
        return t.uidEvent = e, P[e] = P[e] || {}, P[e]
    }

    function U(t, e, n) {
        void 0 === n && (n = null);
        for (var i = Object.keys(t), o = 0, s = i.length; o < s; o++) {
            var r = t[i[o]];
            if (r.originalHandler === e && r.delegationSelector === n) return r
        }
        return null
    }

    function F(t, e, n) {
        var i = "string" == typeof e, o = i ? n : e, s = t.replace(j, ""), r = H[s];
        return r && (s = r), B.indexOf(s) > -1 || (s = t), [i, o, s]
    }

    function W(t, e, n, i, o) {
        if ("string" == typeof e && t) {
            n || (n = i, i = null);
            var s = F(e, n, i), r = s[0], a = s[1], l = s[2], c = Q(t), u = c[l] || (c[l] = {}),
                h = U(u, a, r ? n : null);
            if (h) h.oneOff = h.oneOff && o; else {
                var f = M(a, e.replace(N, "")), d = r ? function (t, e, n) {
                    return function i(o) {
                        for (var s = t.querySelectorAll(e), r = o.target; r && r !== this; r = r.parentNode) for (var a = s.length; a--;) if (s[a] === r) return o.delegateTarget = r, i.oneOff && V.off(t, o.type, n), n.apply(r, [o]);
                        return null
                    }
                }(t, n, i) : function (t, e) {
                    return function n(i) {
                        return i.delegateTarget = t, n.oneOff && V.off(t, i.type, e), e.apply(t, [i])
                    }
                }(t, n);
                d.delegationSelector = r ? n : null, d.originalHandler = a, d.oneOff = o, d.uidEvent = f, u[f] = d, t.addEventListener(l, d, r)
            }
        }
    }

    function K(t, e, n, i, o) {
        var s = U(e[n], i, o);
        s && (t.removeEventListener(n, s, Boolean(o)), delete e[n][s.uidEvent])
    }

    var V = {
        on: function (t, e, n, i) {
            W(t, e, n, i, !1)
        }, one: function (t, e, n, i) {
            W(t, e, n, i, !0)
        }, off: function (t, e, n, i) {
            if ("string" == typeof e && t) {
                var o = F(e, n, i), s = o[0], r = o[1], a = o[2], l = a !== e, c = Q(t), u = "." === e.charAt(0);
                if (void 0 === r) {
                    u && Object.keys(c).forEach((function (n) {
                        !function (t, e, n, i) {
                            var o = e[n] || {};
                            Object.keys(o).forEach((function (s) {
                                if (s.indexOf(i) > -1) {
                                    var r = o[s];
                                    K(t, e, n, r.originalHandler, r.delegationSelector)
                                }
                            }))
                        }(t, c, n, e.slice(1))
                    }));
                    var h = c[a] || {};
                    Object.keys(h).forEach((function (n) {
                        var i = n.replace(x, "");
                        if (!l || e.indexOf(i) > -1) {
                            var o = h[n];
                            K(t, c, a, o.originalHandler, o.delegationSelector)
                        }
                    }))
                } else {
                    if (!c || !c[a]) return;
                    K(t, c, a, r, s ? n : null)
                }
            }
        }, trigger: function (t, e, n) {
            if ("string" != typeof e || !t) return null;
            var i, o = e.replace(j, ""), s = e !== o, r = B.indexOf(o) > -1, a = !0, l = !0, c = !1, u = null;
            return s && O && (i = O.Event(e, n), O(t).trigger(i), a = !i.isPropagationStopped(), l = !i.isImmediatePropagationStopped(), c = i.isDefaultPrevented()), r ? (u = document.createEvent("HTMLEvents")).initEvent(o, a, !0) : u = new CustomEvent(e, {
                bubbles: a,
                cancelable: !0
            }), void 0 !== n && Object.keys(n).forEach((function (t) {
                Object.defineProperty(u, t, {
                    get: function () {
                        return n[t]
                    }
                })
            })), c && (u.preventDefault(), D || Object.defineProperty(u, "defaultPrevented", {
                get: function () {
                    return !0
                }
            })), l && t.dispatchEvent(u), u.defaultPrevented && void 0 !== i && i.preventDefault(), u
        }
    }, q = "alert", z = function () {
        function t(t) {
            this._element = t, this._element && k(t, "bs.alert", this)
        }

        var e = t.prototype;
        return e.close = function (t) {
            var e = t ? this._getRootElement(t) : this._element, n = this._triggerCloseEvent(e);
            null === n || n.defaultPrevented || this._removeElement(e)
        }, e.dispose = function () {
            C(this._element, "bs.alert"), this._element = null
        }, e._getRootElement = function (t) {
            return d(t) || t.closest(".alert")
        }, e._triggerCloseEvent = function (t) {
            return V.trigger(t, "close.bs.alert")
        }, e._removeElement = function (t) {
            var e = this;
            if (t.classList.remove("show"), t.classList.contains("fade")) {
                var n = g(t);
                V.one(t, "transitionend", (function () {
                    return e._destroyElement(t)
                })), _(t, n)
            } else this._destroyElement(t)
        }, e._destroyElement = function (t) {
            t.parentNode && t.parentNode.removeChild(t), V.trigger(t, "closed.bs.alert")
        }, t.jQueryInterface = function (e) {
            return this.each((function () {
                var n = L(this, "bs.alert");
                n || (n = new t(this)), "close" === e && n[e](this)
            }))
        }, t.handleDismiss = function (t) {
            return function (e) {
                e && e.preventDefault(), t.close(this)
            }
        }, t.getInstance = function (t) {
            return L(t, "bs.alert")
        }, o(t, null, [{
            key: "VERSION", get: function () {
                return "5.0.0-alpha2"
            }
        }]), t
    }();
    V.on(document, "click.bs.alert.data-api", '[data-dismiss="alert"]', z.handleDismiss(new z));
    var X = E();
    if (X) {
        var Y = X.fn[q];
        X.fn[q] = z.jQueryInterface, X.fn[q].Constructor = z, X.fn[q].noConflict = function () {
            return X.fn[q] = Y, z.jQueryInterface
        }
    }
    var $ = function () {
        function t(t) {
            this._element = t, k(t, "bs.button", this)
        }

        var e = t.prototype;
        return e.toggle = function () {
            this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
        }, e.dispose = function () {
            C(this._element, "bs.button"), this._element = null
        }, t.jQueryInterface = function (e) {
            return this.each((function () {
                var n = L(this, "bs.button");
                n || (n = new t(this)), "toggle" === e && n[e]()
            }))
        }, t.getInstance = function (t) {
            return L(t, "bs.button")
        }, o(t, null, [{
            key: "VERSION", get: function () {
                return "5.0.0-alpha2"
            }
        }]), t
    }();
    V.on(document, "click.bs.button.data-api", '[data-toggle="button"]', (function (t) {
        t.preventDefault();
        var e = t.target.closest('[data-toggle="button"]'), n = L(e, "bs.button");
        n || (n = new $(e)), n.toggle()
    }));
    var G = E();
    if (G) {
        var Z = G.fn.button;
        G.fn.button = $.jQueryInterface, G.fn.button.Constructor = $, G.fn.button.noConflict = function () {
            return G.fn.button = Z, $.jQueryInterface
        }
    }

    function J(t) {
        return "true" === t || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t || "null" === t ? null : t)
    }

    function tt(t) {
        return t.replace(/[A-Z]/g, (function (t) {
            return "-" + t.toLowerCase()
        }))
    }

    var et = {
            setDataAttribute: function (t, e, n) {
                t.setAttribute("data-" + tt(e), n)
            }, removeDataAttribute: function (t, e) {
                t.removeAttribute("data-" + tt(e))
            }, getDataAttributes: function (t) {
                if (!t) return {};
                var e = s({}, t.dataset);
                return Object.keys(e).forEach((function (t) {
                    e[t] = J(e[t])
                })), e
            }, getDataAttribute: function (t, e) {
                return J(t.getAttribute("data-" + tt(e)))
            }, offset: function (t) {
                var e = t.getBoundingClientRect();
                return {top: e.top + document.body.scrollTop, left: e.left + document.body.scrollLeft}
            }, position: function (t) {
                return {top: t.offsetTop, left: t.offsetLeft}
            }, toggleClass: function (t, e) {
                t && (t.classList.contains(e) ? t.classList.remove(e) : t.classList.add(e))
            }
        }, nt = {
            matches: function (t, e) {
                return t.matches(e)
            }, find: function (t, e) {
                var n;
                return void 0 === e && (e = document.documentElement), (n = []).concat.apply(n, A.call(e, t))
            }, findOne: function (t, e) {
                return void 0 === e && (e = document.documentElement), S.call(e, t)
            }, children: function (t, e) {
                var n, i;
                return (n = []).concat.apply(n, t.children).filter((function (t) {
                    return t.matches(e)
                }))
            }, parents: function (t, e) {
                for (var n = [], i = t.parentNode; i && i.nodeType === Node.ELEMENT_NODE && 3 !== i.nodeType;) this.matches(i, e) && n.push(i), i = i.parentNode;
                return n
            }, prev: function (t, e) {
                for (var n = t.previousElementSibling; n;) {
                    if (n.matches(e)) return [n];
                    n = n.previousElementSibling
                }
                return []
            }, next: function (t, e) {
                for (var n = t.nextElementSibling; n;) {
                    if (this.matches(n, e)) return [n];
                    n = n.nextElementSibling
                }
                return []
            }
        }, it = "carousel", ot = ".bs.carousel",
        st = {interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0, touch: !0}, rt = {
            interval: "(number|boolean)",
            keyboard: "boolean",
            slide: "(boolean|string)",
            pause: "(string|boolean)",
            wrap: "boolean",
            touch: "boolean"
        }, at = {TOUCH: "touch", PEN: "pen"}, lt = function () {
            function t(t, e) {
                this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = nt.findOne(".carousel-indicators", this._element), this._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, this._pointerEvent = Boolean(window.PointerEvent), this._addEventListeners(), k(t, "bs.carousel", this)
            }

            var e = t.prototype;
            return e.next = function () {
                this._isSliding || this._slide("next")
            }, e.nextWhenVisible = function () {
                !document.hidden && b(this._element) && this.next()
            }, e.prev = function () {
                this._isSliding || this._slide("prev")
            }, e.pause = function (t) {
                t || (this._isPaused = !0), nt.findOne(".carousel-item-next, .carousel-item-prev", this._element) && (p(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
            }, e.cycle = function (t) {
                t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config && this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
            }, e.to = function (t) {
                var e = this;
                this._activeElement = nt.findOne(".active.carousel-item", this._element);
                var n = this._getItemIndex(this._activeElement);
                if (!(t > this._items.length - 1 || t < 0)) if (this._isSliding) V.one(this._element, "slid.bs.carousel", (function () {
                    return e.to(t)
                })); else {
                    if (n === t) return this.pause(), void this.cycle();
                    var i = t > n ? "next" : "prev";
                    this._slide(i, this._items[t])
                }
            }, e.dispose = function () {
                V.off(this._element, ot), C(this._element, "bs.carousel"), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
            }, e._getConfig = function (t) {
                return t = s({}, st, t), v(it, t, rt), t
            }, e._handleSwipe = function () {
                var t = Math.abs(this.touchDeltaX);
                if (!(t <= 40)) {
                    var e = t / this.touchDeltaX;
                    this.touchDeltaX = 0, e > 0 && this.prev(), e < 0 && this.next()
                }
            }, e._addEventListeners = function () {
                var t = this;
                this._config.keyboard && V.on(this._element, "keydown.bs.carousel", (function (e) {
                    return t._keydown(e)
                })), "hover" === this._config.pause && (V.on(this._element, "mouseenter.bs.carousel", (function (e) {
                    return t.pause(e)
                })), V.on(this._element, "mouseleave.bs.carousel", (function (e) {
                    return t.cycle(e)
                }))), this._config.touch && this._touchSupported && this._addTouchEventListeners()
            }, e._addTouchEventListeners = function () {
                var t = this, e = function (e) {
                    t._pointerEvent && at[e.pointerType.toUpperCase()] ? t.touchStartX = e.clientX : t._pointerEvent || (t.touchStartX = e.touches[0].clientX)
                }, n = function (e) {
                    t._pointerEvent && at[e.pointerType.toUpperCase()] && (t.touchDeltaX = e.clientX - t.touchStartX), t._handleSwipe(), "hover" === t._config.pause && (t.pause(), t.touchTimeout && clearTimeout(t.touchTimeout), t.touchTimeout = setTimeout((function (e) {
                        return t.cycle(e)
                    }), 500 + t._config.interval))
                };
                nt.find(".carousel-item img", this._element).forEach((function (t) {
                    V.on(t, "dragstart.bs.carousel", (function (t) {
                        return t.preventDefault()
                    }))
                })), this._pointerEvent ? (V.on(this._element, "pointerdown.bs.carousel", (function (t) {
                    return e(t)
                })), V.on(this._element, "pointerup.bs.carousel", (function (t) {
                    return n(t)
                })), this._element.classList.add("pointer-event")) : (V.on(this._element, "touchstart.bs.carousel", (function (t) {
                    return e(t)
                })), V.on(this._element, "touchmove.bs.carousel", (function (e) {
                    return function (e) {
                        e.touches && e.touches.length > 1 ? t.touchDeltaX = 0 : t.touchDeltaX = e.touches[0].clientX - t.touchStartX
                    }(e)
                })), V.on(this._element, "touchend.bs.carousel", (function (t) {
                    return n(t)
                })))
            }, e._keydown = function (t) {
                if (!/input|textarea/i.test(t.target.tagName)) switch (t.key) {
                    case"ArrowLeft":
                        t.preventDefault(), this.prev();
                        break;
                    case"ArrowRight":
                        t.preventDefault(), this.next()
                }
            }, e._getItemIndex = function (t) {
                return this._items = t && t.parentNode ? nt.find(".carousel-item", t.parentNode) : [], this._items.indexOf(t)
            }, e._getItemByDirection = function (t, e) {
                var n = "next" === t, i = "prev" === t, o = this._getItemIndex(e), s = this._items.length - 1;
                if ((i && 0 === o || n && o === s) && !this._config.wrap) return e;
                var r = (o + ("prev" === t ? -1 : 1)) % this._items.length;
                return -1 === r ? this._items[this._items.length - 1] : this._items[r]
            }, e._triggerSlideEvent = function (t, e) {
                var n = this._getItemIndex(t), i = this._getItemIndex(nt.findOne(".active.carousel-item", this._element));
                return V.trigger(this._element, "slide.bs.carousel", {relatedTarget: t, direction: e, from: i, to: n})
            }, e._setActiveIndicatorElement = function (t) {
                if (this._indicatorsElement) {
                    for (var e = nt.find(".active", this._indicatorsElement), n = 0; n < e.length; n++) e[n].classList.remove("active");
                    var i = this._indicatorsElement.children[this._getItemIndex(t)];
                    i && i.classList.add("active")
                }
            }, e._slide = function (t, e) {
                var n, i, o, s = this, r = nt.findOne(".active.carousel-item", this._element), a = this._getItemIndex(r),
                    l = e || r && this._getItemByDirection(t, r), c = this._getItemIndex(l), u = Boolean(this._interval);
                if ("next" === t ? (n = "carousel-item-left", i = "carousel-item-next", o = "left") : (n = "carousel-item-right", i = "carousel-item-prev", o = "right"), l && l.classList.contains("active")) this._isSliding = !1; else if (!this._triggerSlideEvent(l, o).defaultPrevented && r && l) {
                    if (this._isSliding = !0, u && this.pause(), this._setActiveIndicatorElement(l), this._element.classList.contains("slide")) {
                        l.classList.add(i), w(l), r.classList.add(n), l.classList.add(n);
                        var h = parseInt(l.getAttribute("data-interval"), 10);
                        h ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = h) : this._config.interval = this._config.defaultInterval || this._config.interval;
                        var f = g(r);
                        V.one(r, "transitionend", (function () {
                            l.classList.remove(n, i), l.classList.add("active"), r.classList.remove("active", i, n), s._isSliding = !1, setTimeout((function () {
                                V.trigger(s._element, "slid.bs.carousel", {relatedTarget: l, direction: o, from: a, to: c})
                            }), 0)
                        })), _(r, f)
                    } else r.classList.remove("active"), l.classList.add("active"), this._isSliding = !1, V.trigger(this._element, "slid.bs.carousel", {
                        relatedTarget: l,
                        direction: o,
                        from: a,
                        to: c
                    });
                    u && this.cycle()
                }
            }, t.carouselInterface = function (e, n) {
                var i = L(e, "bs.carousel"), o = s({}, st, et.getDataAttributes(e));
                "object" == typeof n && (o = s({}, o, n));
                var r = "string" == typeof n ? n : o.slide;
                if (i || (i = new t(e, o)), "number" == typeof n) i.to(n); else if ("string" == typeof r) {
                    if (void 0 === i[r]) throw new TypeError('No method named "' + r + '"');
                    i[r]()
                } else o.interval && o.ride && (i.pause(), i.cycle())
            }, t.jQueryInterface = function (e) {
                return this.each((function () {
                    t.carouselInterface(this, e)
                }))
            }, t.dataApiClickHandler = function (e) {
                var n = d(this);
                if (n && n.classList.contains("carousel")) {
                    var i = s({}, et.getDataAttributes(n), et.getDataAttributes(this)),
                        o = this.getAttribute("data-slide-to");
                    o && (i.interval = !1), t.carouselInterface(n, i), o && L(n, "bs.carousel").to(o), e.preventDefault()
                }
            }, t.getInstance = function (t) {
                return L(t, "bs.carousel")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "Default", get: function () {
                    return st
                }
            }]), t
        }();
    V.on(document, "click.bs.carousel.data-api", "[data-slide], [data-slide-to]", lt.dataApiClickHandler), V.on(window, "load.bs.carousel.data-api", (function () {
        for (var t = nt.find('[data-ride="carousel"]'), e = 0, n = t.length; e < n; e++) lt.carouselInterface(t[e], L(t[e], "bs.carousel"))
    }));
    var ct = E();
    if (ct) {
        var ut = ct.fn[it];
        ct.fn[it] = lt.jQueryInterface, ct.fn[it].Constructor = lt, ct.fn[it].noConflict = function () {
            return ct.fn[it] = ut, lt.jQueryInterface
        }
    }
    var ht = "collapse", ft = {toggle: !0, parent: ""}, dt = {toggle: "boolean", parent: "(string|element)"},
        gt = function () {
            function t(t, e) {
                this._isTransitioning = !1, this._element = t, this._config = this._getConfig(e), this._triggerArray = nt.find('[data-toggle="collapse"][href="#' + t.id + '"],[data-toggle="collapse"][data-target="#' + t.id + '"]');
                for (var n = nt.find('[data-toggle="collapse"]'), i = 0, o = n.length; i < o; i++) {
                    var s = n[i], r = f(s), a = nt.find(r).filter((function (e) {
                        return e === t
                    }));
                    null !== r && a.length && (this._selector = r, this._triggerArray.push(s))
                }
                this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle(), k(t, "bs.collapse", this)
            }

            var e = t.prototype;
            return e.toggle = function () {
                this._element.classList.contains("show") ? this.hide() : this.show()
            }, e.show = function () {
                var e = this;
                if (!this._isTransitioning && !this._element.classList.contains("show")) {
                    var n, i;
                    this._parent && 0 === (n = nt.find(".show, .collapsing", this._parent).filter((function (t) {
                        return "string" == typeof e._config.parent ? t.getAttribute("data-parent") === e._config.parent : t.classList.contains("collapse")
                    }))).length && (n = null);
                    var o = nt.findOne(this._selector);
                    if (n) {
                        var s = n.filter((function (t) {
                            return o !== t
                        }));
                        if ((i = s[0] ? L(s[0], "bs.collapse") : null) && i._isTransitioning) return
                    }
                    if (!V.trigger(this._element, "show.bs.collapse").defaultPrevented) {
                        n && n.forEach((function (e) {
                            o !== e && t.collapseInterface(e, "hide"), i || k(e, "bs.collapse", null)
                        }));
                        var r = this._getDimension();
                        this._element.classList.remove("collapse"), this._element.classList.add("collapsing"), this._element.style[r] = 0, this._triggerArray.length && this._triggerArray.forEach((function (t) {
                            t.classList.remove("collapsed"), t.setAttribute("aria-expanded", !0)
                        })), this.setTransitioning(!0);
                        var a = "scroll" + (r[0].toUpperCase() + r.slice(1)), l = g(this._element);
                        V.one(this._element, "transitionend", (function () {
                            e._element.classList.remove("collapsing"), e._element.classList.add("collapse", "show"), e._element.style[r] = "", e.setTransitioning(!1), V.trigger(e._element, "shown.bs.collapse")
                        })), _(this._element, l), this._element.style[r] = this._element[a] + "px"
                    }
                }
            }, e.hide = function () {
                var t = this;
                if (!this._isTransitioning && this._element.classList.contains("show") && !V.trigger(this._element, "hide.bs.collapse").defaultPrevented) {
                    var e = this._getDimension();
                    this._element.style[e] = this._element.getBoundingClientRect()[e] + "px", w(this._element), this._element.classList.add("collapsing"), this._element.classList.remove("collapse", "show");
                    var n = this._triggerArray.length;
                    if (n > 0) for (var i = 0; i < n; i++) {
                        var o = this._triggerArray[i], s = d(o);
                        s && !s.classList.contains("show") && (o.classList.add("collapsed"), o.setAttribute("aria-expanded", !1))
                    }
                    this.setTransitioning(!0), this._element.style[e] = "";
                    var r = g(this._element);
                    V.one(this._element, "transitionend", (function () {
                        t.setTransitioning(!1), t._element.classList.remove("collapsing"), t._element.classList.add("collapse"), V.trigger(t._element, "hidden.bs.collapse")
                    })), _(this._element, r)
                }
            }, e.setTransitioning = function (t) {
                this._isTransitioning = t
            }, e.dispose = function () {
                C(this._element, "bs.collapse"), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
            }, e._getConfig = function (t) {
                return (t = s({}, ft, t)).toggle = Boolean(t.toggle), v(ht, t, dt), t
            }, e._getDimension = function () {
                return this._element.classList.contains("width") ? "width" : "height"
            }, e._getParent = function () {
                var t = this, e = this._config.parent;
                m(e) ? void 0 === e.jquery && void 0 === e[0] || (e = e[0]) : e = nt.findOne(e);
                var n = '[data-toggle="collapse"][data-parent="' + e + '"]';
                return nt.find(n, e).forEach((function (e) {
                    var n = d(e);
                    t._addAriaAndCollapsedClass(n, [e])
                })), e
            }, e._addAriaAndCollapsedClass = function (t, e) {
                if (t && e.length) {
                    var n = t.classList.contains("show");
                    e.forEach((function (t) {
                        n ? t.classList.remove("collapsed") : t.classList.add("collapsed"), t.setAttribute("aria-expanded", n)
                    }))
                }
            }, t.collapseInterface = function (e, n) {
                var i = L(e, "bs.collapse"), o = s({}, ft, et.getDataAttributes(e), "object" == typeof n && n ? n : {});
                if (!i && o.toggle && "string" == typeof n && /show|hide/.test(n) && (o.toggle = !1), i || (i = new t(e, o)), "string" == typeof n) {
                    if (void 0 === i[n]) throw new TypeError('No method named "' + n + '"');
                    i[n]()
                }
            }, t.jQueryInterface = function (e) {
                return this.each((function () {
                    t.collapseInterface(this, e)
                }))
            }, t.getInstance = function (t) {
                return L(t, "bs.collapse")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "Default", get: function () {
                    return ft
                }
            }]), t
        }();
    V.on(document, "click.bs.collapse.data-api", '[data-toggle="collapse"]', (function (t) {
        "A" === t.target.tagName && t.preventDefault();
        var e = et.getDataAttributes(this), n = f(this);
        nt.find(n).forEach((function (t) {
            var n, i = L(t, "bs.collapse");
            i ? (null === i._parent && "string" == typeof e.parent && (i._config.parent = e.parent, i._parent = i._getParent()), n = "toggle") : n = e, gt.collapseInterface(t, n)
        }))
    }));
    var pt = E();
    if (pt) {
        var mt = pt.fn[ht];
        pt.fn[ht] = gt.jQueryInterface, pt.fn[ht].Constructor = gt, pt.fn[ht].noConflict = function () {
            return pt.fn[ht] = mt, gt.jQueryInterface
        }
    }
    var _t = "dropdown", vt = new RegExp("ArrowUp|ArrowDown|Escape"), bt = {
        offset: 0,
        flip: !0,
        boundary: "scrollParent",
        reference: "toggle",
        display: "dynamic",
        popperConfig: null
    }, yt = {
        offset: "(number|string|function)",
        flip: "boolean",
        boundary: "(string|element)",
        reference: "(string|element)",
        display: "string",
        popperConfig: "(null|object)"
    }, wt = function () {
        function t(t, e) {
            this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners(), k(t, "bs.dropdown", this)
        }

        var e = t.prototype;
        return e.toggle = function () {
            if (!this._element.disabled && !this._element.classList.contains("disabled")) {
                var e = this._element.classList.contains("show");
                t.clearMenus(), e || this.show()
            }
        }, e.show = function () {
            if (!(this._element.disabled || this._element.classList.contains("disabled") || this._menu.classList.contains("show"))) {
                var e = t.getParentFromElement(this._element), i = {relatedTarget: this._element};
                if (!V.trigger(this._element, "show.bs.dropdown", i).defaultPrevented) {
                    if (!this._inNavbar) {
                        if (void 0 === n.default) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org)");
                        var o = this._element;
                        "parent" === this._config.reference ? o = e : m(this._config.reference) && (o = this._config.reference, void 0 !== this._config.reference.jquery && (o = this._config.reference[0])), "scrollParent" !== this._config.boundary && e.classList.add("position-static"), this._popper = new n.default(o, this._menu, this._getPopperConfig())
                    }
                    var s;
                    "ontouchstart" in document.documentElement && !e.closest(".navbar-nav") && (s = []).concat.apply(s, document.body.children).forEach((function (t) {
                        return V.on(t, "mouseover", null, (function () {
                        }))
                    })), this._element.focus(), this._element.setAttribute("aria-expanded", !0), et.toggleClass(this._menu, "show"), et.toggleClass(this._element, "show"), V.trigger(e, "shown.bs.dropdown", i)
                }
            }
        }, e.hide = function () {
            if (!this._element.disabled && !this._element.classList.contains("disabled") && this._menu.classList.contains("show")) {
                var e = t.getParentFromElement(this._element), n = {relatedTarget: this._element};
                V.trigger(e, "hide.bs.dropdown", n).defaultPrevented || (this._popper && this._popper.destroy(), et.toggleClass(this._menu, "show"), et.toggleClass(this._element, "show"), V.trigger(e, "hidden.bs.dropdown", n))
            }
        }, e.dispose = function () {
            C(this._element, "bs.dropdown"), V.off(this._element, ".bs.dropdown"), this._element = null, this._menu = null, this._popper && (this._popper.destroy(), this._popper = null)
        }, e.update = function () {
            this._inNavbar = this._detectNavbar(), this._popper && this._popper.scheduleUpdate()
        }, e._addEventListeners = function () {
            var t = this;
            V.on(this._element, "click.bs.dropdown", (function (e) {
                e.preventDefault(), e.stopPropagation(), t.toggle()
            }))
        }, e._getConfig = function (t) {
            return t = s({}, this.constructor.Default, et.getDataAttributes(this._element), t), v(_t, t, this.constructor.DefaultType), t
        }, e._getMenuElement = function () {
            return nt.next(this._element, ".dropdown-menu")[0]
        }, e._getPlacement = function () {
            var t = this._element.parentNode, e = "bottom-start";
            return t.classList.contains("dropup") ? (e = "top-start", this._menu.classList.contains("dropdown-menu-right") && (e = "top-end")) : t.classList.contains("dropright") ? e = "right-start" : t.classList.contains("dropleft") ? e = "left-start" : this._menu.classList.contains("dropdown-menu-right") && (e = "bottom-end"), e
        }, e._detectNavbar = function () {
            return Boolean(this._element.closest(".navbar"))
        }, e._getOffset = function () {
            var t = this, e = {};
            return "function" == typeof this._config.offset ? e.fn = function (e) {
                return e.offsets = s({}, e.offsets, t._config.offset(e.offsets, t._element) || {}), e
            } : e.offset = this._config.offset, e
        }, e._getPopperConfig = function () {
            var t = {
                placement: this._getPlacement(),
                modifiers: {
                    offset: this._getOffset(),
                    flip: {enabled: this._config.flip},
                    preventOverflow: {boundariesElement: this._config.boundary}
                }
            };
            return "static" === this._config.display && (t.modifiers.applyStyle = {enabled: !1}), s({}, t, this._config.popperConfig)
        }, t.dropdownInterface = function (e, n) {
            var i = L(e, "bs.dropdown");
            if (i || (i = new t(e, "object" == typeof n ? n : null)), "string" == typeof n) {
                if (void 0 === i[n]) throw new TypeError('No method named "' + n + '"');
                i[n]()
            }
        }, t.jQueryInterface = function (e) {
            return this.each((function () {
                t.dropdownInterface(this, e)
            }))
        }, t.clearMenus = function (e) {
            if (!e || 2 !== e.button && ("keyup" !== e.type || "Tab" === e.key)) for (var n = nt.find('[data-toggle="dropdown"]'), i = 0, o = n.length; i < o; i++) {
                var s = t.getParentFromElement(n[i]), r = L(n[i], "bs.dropdown"), a = {relatedTarget: n[i]};
                if (e && "click" === e.type && (a.clickEvent = e), r) {
                    var l = r._menu, c;
                    if (n[i].classList.contains("show") && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && "Tab" === e.key) && l.contains(e.target) || V.trigger(s, "hide.bs.dropdown", a).defaultPrevented)) "ontouchstart" in document.documentElement && (c = []).concat.apply(c, document.body.children).forEach((function (t) {
                        return V.off(t, "mouseover", null, (function () {
                        }))
                    })), n[i].setAttribute("aria-expanded", "false"), r._popper && r._popper.destroy(), l.classList.remove("show"), n[i].classList.remove("show"), V.trigger(s, "hidden.bs.dropdown", a)
                }
            }
        }, t.getParentFromElement = function (t) {
            return d(t) || t.parentNode
        }, t.dataApiKeydownHandler = function (e) {
            if (!(/input|textarea/i.test(e.target.tagName) ? "Space" === e.key || "Escape" !== e.key && ("ArrowDown" !== e.key && "ArrowUp" !== e.key || e.target.closest(".dropdown-menu")) : !vt.test(e.key)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !this.classList.contains("disabled"))) {
                var n = t.getParentFromElement(this), i = this.classList.contains("show");
                if ("Escape" === e.key) return (this.matches('[data-toggle="dropdown"]') ? this : nt.prev(this, '[data-toggle="dropdown"]')[0]).focus(), void t.clearMenus();
                if (i && "Space" !== e.key) {
                    var o = nt.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", n).filter(b);
                    if (o.length) {
                        var s = o.indexOf(e.target);
                        "ArrowUp" === e.key && s > 0 && s--, "ArrowDown" === e.key && s < o.length - 1 && s++, o[s = -1 === s ? 0 : s].focus()
                    }
                } else t.clearMenus()
            }
        }, t.getInstance = function (t) {
            return L(t, "bs.dropdown")
        }, o(t, null, [{
            key: "VERSION", get: function () {
                return "5.0.0-alpha2"
            }
        }, {
            key: "Default", get: function () {
                return bt
            }
        }, {
            key: "DefaultType", get: function () {
                return yt
            }
        }]), t
    }();
    V.on(document, "keydown.bs.dropdown.data-api", '[data-toggle="dropdown"]', wt.dataApiKeydownHandler), V.on(document, "keydown.bs.dropdown.data-api", ".dropdown-menu", wt.dataApiKeydownHandler), V.on(document, "click.bs.dropdown.data-api", wt.clearMenus), V.on(document, "keyup.bs.dropdown.data-api", wt.clearMenus), V.on(document, "click.bs.dropdown.data-api", '[data-toggle="dropdown"]', (function (t) {
        t.preventDefault(), t.stopPropagation(), wt.dropdownInterface(this, "toggle")
    })), V.on(document, "click.bs.dropdown.data-api", ".dropdown form", (function (t) {
        return t.stopPropagation()
    }));
    var Et = E();
    if (Et) {
        var Tt = Et.fn[_t];
        Et.fn[_t] = wt.jQueryInterface, Et.fn[_t].Constructor = wt, Et.fn[_t].noConflict = function () {
            return Et.fn[_t] = Tt, wt.jQueryInterface
        }
    }
    var kt = {backdrop: !0, keyboard: !0, focus: !0, show: !0},
        Lt = {backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean"}, Ct = function () {
            function t(t, e) {
                this._config = this._getConfig(e), this._element = t, this._dialog = nt.findOne(".modal-dialog", t), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0, k(t, "bs.modal", this)
            }

            var e = t.prototype;
            return e.toggle = function (t) {
                return this._isShown ? this.hide() : this.show(t)
            }, e.show = function (t) {
                var e = this;
                if (!this._isShown && !this._isTransitioning) {
                    this._element.classList.contains("fade") && (this._isTransitioning = !0);
                    var n = V.trigger(this._element, "show.bs.modal", {relatedTarget: t});
                    this._isShown || n.defaultPrevented || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), V.on(this._element, "click.dismiss.bs.modal", '[data-dismiss="modal"]', (function (t) {
                        return e.hide(t)
                    })), V.on(this._dialog, "mousedown.dismiss.bs.modal", (function () {
                        V.one(e._element, "mouseup.dismiss.bs.modal", (function (t) {
                            t.target === e._element && (e._ignoreBackdropClick = !0)
                        }))
                    })), this._showBackdrop((function () {
                        return e._showElement(t)
                    })))
                }
            }, e.hide = function (t) {
                var e = this;
                if (t && t.preventDefault(), this._isShown && !this._isTransitioning && !V.trigger(this._element, "hide.bs.modal").defaultPrevented) {
                    this._isShown = !1;
                    var n = this._element.classList.contains("fade");
                    if (n && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), V.off(document, "focusin.bs.modal"), this._element.classList.remove("show"), V.off(this._element, "click.dismiss.bs.modal"), V.off(this._dialog, "mousedown.dismiss.bs.modal"), n) {
                        var i = g(this._element);
                        V.one(this._element, "transitionend", (function (t) {
                            return e._hideModal(t)
                        })), _(this._element, i)
                    } else this._hideModal()
                }
            }, e.dispose = function () {
                [window, this._element, this._dialog].forEach((function (t) {
                    return V.off(t, ".bs.modal")
                })), V.off(document, "focusin.bs.modal"), C(this._element, "bs.modal"), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
            }, e.handleUpdate = function () {
                this._adjustDialog()
            }, e._getConfig = function (t) {
                return t = s({}, kt, t), v("modal", t, Lt), t
            }, e._showElement = function (t) {
                var e = this, n = this._element.classList.contains("fade"), i = nt.findOne(".modal-body", this._dialog);
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0, i && (i.scrollTop = 0), n && w(this._element), this._element.classList.add("show"), this._config.focus && this._enforceFocus();
                var o = function () {
                    e._config.focus && e._element.focus(), e._isTransitioning = !1, V.trigger(e._element, "shown.bs.modal", {relatedTarget: t})
                };
                if (n) {
                    var s = g(this._dialog);
                    V.one(this._dialog, "transitionend", o), _(this._dialog, s)
                } else o()
            }, e._enforceFocus = function () {
                var t = this;
                V.off(document, "focusin.bs.modal"), V.on(document, "focusin.bs.modal", (function (e) {
                    document === e.target || t._element === e.target || t._element.contains(e.target) || t._element.focus()
                }))
            }, e._setEscapeEvent = function () {
                var t = this;
                this._isShown ? V.on(this._element, "keydown.dismiss.bs.modal", (function (e) {
                    t._config.keyboard && "Escape" === e.key ? (e.preventDefault(), t.hide()) : t._config.keyboard || "Escape" !== e.key || t._triggerBackdropTransition()
                })) : V.off(this._element, "keydown.dismiss.bs.modal")
            }, e._setResizeEvent = function () {
                var t = this;
                this._isShown ? V.on(window, "resize.bs.modal", (function () {
                    return t._adjustDialog()
                })) : V.off(window, "resize.bs.modal")
            }, e._hideModal = function () {
                var t = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop((function () {
                    document.body.classList.remove("modal-open"), t._resetAdjustments(), t._resetScrollbar(), V.trigger(t._element, "hidden.bs.modal")
                }))
            }, e._removeBackdrop = function () {
                this._backdrop.parentNode.removeChild(this._backdrop), this._backdrop = null
            }, e._showBackdrop = function (t) {
                var e = this, n = this._element.classList.contains("fade") ? "fade" : "";
                if (this._isShown && this._config.backdrop) {
                    if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), document.body.appendChild(this._backdrop), V.on(this._element, "click.dismiss.bs.modal", (function (t) {
                        e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && e._triggerBackdropTransition()
                    })), n && w(this._backdrop), this._backdrop.classList.add("show"), !n) return void t();
                    var i = g(this._backdrop);
                    V.one(this._backdrop, "transitionend", t), _(this._backdrop, i)
                } else if (!this._isShown && this._backdrop) {
                    this._backdrop.classList.remove("show");
                    var o = function () {
                        e._removeBackdrop(), t()
                    };
                    if (this._element.classList.contains("fade")) {
                        var s = g(this._backdrop);
                        V.one(this._backdrop, "transitionend", o), _(this._backdrop, s)
                    } else o()
                } else t()
            }, e._triggerBackdropTransition = function () {
                var t = this;
                if ("static" === this._config.backdrop) {
                    if (V.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return;
                    var e = this._element.scrollHeight > document.documentElement.clientHeight;
                    e || (this._element.style.overflowY = "hidden"), this._element.classList.add("modal-static");
                    var n = g(this._dialog);
                    V.off(this._element, "transitionend"), V.one(this._element, "transitionend", (function () {
                        t._element.classList.remove("modal-static"), e || (V.one(t._element, "transitionend", (function () {
                            t._element.style.overflowY = ""
                        })), _(t._element, n))
                    })), _(this._element, n), this._element.focus()
                } else this.hide()
            }, e._adjustDialog = function () {
                var t = this._element.scrollHeight > document.documentElement.clientHeight;
                !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
            }, e._resetAdjustments = function () {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
            }, e._checkScrollbar = function () {
                var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
            }, e._setScrollbar = function () {
                var t = this;
                if (this._isBodyOverflowing) {
                    nt.find(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top").forEach((function (e) {
                        var n = e.style.paddingRight, i = window.getComputedStyle(e)["padding-right"];
                        et.setDataAttribute(e, "padding-right", n), e.style.paddingRight = parseFloat(i) + t._scrollbarWidth + "px"
                    })), nt.find(".sticky-top").forEach((function (e) {
                        var n = e.style.marginRight, i = window.getComputedStyle(e)["margin-right"];
                        et.setDataAttribute(e, "margin-right", n), e.style.marginRight = parseFloat(i) - t._scrollbarWidth + "px"
                    }));
                    var e = document.body.style.paddingRight, n = window.getComputedStyle(document.body)["padding-right"];
                    et.setDataAttribute(document.body, "padding-right", e), document.body.style.paddingRight = parseFloat(n) + this._scrollbarWidth + "px"
                }
                document.body.classList.add("modal-open")
            }, e._resetScrollbar = function () {
                nt.find(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top").forEach((function (t) {
                    var e = et.getDataAttribute(t, "padding-right");
                    void 0 !== e && (et.removeDataAttribute(t, "padding-right"), t.style.paddingRight = e)
                })), nt.find(".sticky-top").forEach((function (t) {
                    var e = et.getDataAttribute(t, "margin-right");
                    void 0 !== e && (et.removeDataAttribute(t, "margin-right"), t.style.marginRight = e)
                }));
                var t = et.getDataAttribute(document.body, "padding-right");
                void 0 === t ? document.body.style.paddingRight = "" : (et.removeDataAttribute(document.body, "padding-right"), document.body.style.paddingRight = t)
            }, e._getScrollbarWidth = function () {
                var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", document.body.appendChild(t);
                var e = t.getBoundingClientRect().width - t.clientWidth;
                return document.body.removeChild(t), e
            }, t.jQueryInterface = function (e, n) {
                return this.each((function () {
                    var i = L(this, "bs.modal"),
                        o = s({}, kt, et.getDataAttributes(this), "object" == typeof e && e ? e : {});
                    if (i || (i = new t(this, o)), "string" == typeof e) {
                        if (void 0 === i[e]) throw new TypeError('No method named "' + e + '"');
                        i[e](n)
                    } else o.show && i.show(n)
                }))
            }, t.getInstance = function (t) {
                return L(t, "bs.modal")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "Default", get: function () {
                    return kt
                }
            }]), t
        }();
    V.on(document, "click.bs.modal.data-api", '[data-toggle="modal"]', (function (t) {
        var e = this, n = d(this);
        "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault(), V.one(n, "show.bs.modal", (function (t) {
            t.defaultPrevented || V.one(n, "hidden.bs.modal", (function () {
                b(e) && e.focus()
            }))
        }));
        var i = L(n, "bs.modal");
        if (!i) {
            var o = s({}, et.getDataAttributes(n), et.getDataAttributes(this));
            i = new Ct(n, o)
        }
        i.show(this)
    }));
    var At = E();
    if (At) {
        var St = At.fn.modal;
        At.fn.modal = Ct.jQueryInterface, At.fn.modal.Constructor = Ct, At.fn.modal.noConflict = function () {
            return At.fn.modal = St, Ct.jQueryInterface
        }
    }
    var Dt = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
        It = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
        Ot = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
        Nt = {
            "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
            a: ["target", "href", "title", "rel"],
            area: [],
            b: [],
            br: [],
            col: [],
            code: [],
            div: [],
            em: [],
            hr: [],
            h1: [],
            h2: [],
            h3: [],
            h4: [],
            h5: [],
            h6: [],
            i: [],
            img: ["src", "srcset", "alt", "title", "width", "height"],
            li: [],
            ol: [],
            p: [],
            pre: [],
            s: [],
            small: [],
            span: [],
            sub: [],
            sup: [],
            strong: [],
            u: [],
            ul: []
        };

    function jt(t, e, n) {
        var i;
        if (!t.length) return t;
        if (n && "function" == typeof n) return n(t);
        for (var o = (new window.DOMParser).parseFromString(t, "text/html"), s = Object.keys(e), r = (i = []).concat.apply(i, o.body.querySelectorAll("*")), a = function (t, n) {
            var i, o = r[t], a = o.nodeName.toLowerCase();
            if (-1 === s.indexOf(a)) return o.parentNode.removeChild(o), "continue";
            var l = (i = []).concat.apply(i, o.attributes), c = [].concat(e["*"] || [], e[a] || []);
            l.forEach((function (t) {
                (function (t, e) {
                    var n = t.nodeName.toLowerCase();
                    if (-1 !== e.indexOf(n)) return -1 === Dt.indexOf(n) || Boolean(t.nodeValue.match(It) || t.nodeValue.match(Ot));
                    for (var i = e.filter((function (t) {
                        return t instanceof RegExp
                    })), o = 0, s = i.length; o < s; o++) if (n.match(i[o])) return !0;
                    return !1
                })(t, c) || o.removeAttribute(t.nodeName)
            }))
        }, l = 0, c = r.length; l < c; l++) a(l);
        return o.body.innerHTML
    }

    var xt = "tooltip", Pt = new RegExp("(^|\\s)bs-tooltip\\S+", "g"), Rt = ["sanitize", "allowList", "sanitizeFn"],
        Ht = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(number|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacement: "(string|array)",
            boundary: "(string|element)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            allowList: "object",
            popperConfig: "(null|object)"
        }, Bt = {AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left"}, Mt = {
            animation: !0,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: 0,
            container: !1,
            fallbackPlacement: "flip",
            boundary: "scrollParent",
            sanitize: !0,
            sanitizeFn: null,
            allowList: Nt,
            popperConfig: null
        }, Qt = {
            HIDE: "hide.bs.tooltip",
            HIDDEN: "hidden.bs.tooltip",
            SHOW: "show.bs.tooltip",
            SHOWN: "shown.bs.tooltip",
            INSERTED: "inserted.bs.tooltip",
            CLICK: "click.bs.tooltip",
            FOCUSIN: "focusin.bs.tooltip",
            FOCUSOUT: "focusout.bs.tooltip",
            MOUSEENTER: "mouseenter.bs.tooltip",
            MOUSELEAVE: "mouseleave.bs.tooltip"
        }, Ut = function () {
            function t(t, e) {
                if (void 0 === n.default) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org)");
                this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners(), k(t, this.constructor.DATA_KEY, this)
            }

            var e = t.prototype;
            return e.enable = function () {
                this._isEnabled = !0
            }, e.disable = function () {
                this._isEnabled = !1
            }, e.toggleEnabled = function () {
                this._isEnabled = !this._isEnabled
            }, e.toggle = function (t) {
                if (this._isEnabled) if (t) {
                    var e = this.constructor.DATA_KEY, n = L(t.delegateTarget, e);
                    n || (n = new this.constructor(t.delegateTarget, this._getDelegateConfig()), k(t.delegateTarget, e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
                } else {
                    if (this.getTipElement().classList.contains("show")) return void this._leave(null, this);
                    this._enter(null, this)
                }
            }, e.dispose = function () {
                clearTimeout(this._timeout), C(this.element, this.constructor.DATA_KEY), V.off(this.element, this.constructor.EVENT_KEY), V.off(this.element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.tip && this.tip.parentNode.removeChild(this.tip), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
            }, e.show = function () {
                var t = this;
                if ("none" === this.element.style.display) throw new Error("Please use show on visible elements");
                if (this.isWithContent() && this._isEnabled) {
                    var e = V.trigger(this.element, this.constructor.Event.SHOW), i = function t(e) {
                            if (!document.documentElement.attachShadow) return null;
                            if ("function" == typeof e.getRootNode) {
                                var n = e.getRootNode();
                                return n instanceof ShadowRoot ? n : null
                            }
                            return e instanceof ShadowRoot ? e : e.parentNode ? t(e.parentNode) : null
                        }(this.element),
                        o = null === i ? this.element.ownerDocument.documentElement.contains(this.element) : i.contains(this.element);
                    if (e.defaultPrevented || !o) return;
                    var s = this.getTipElement(), r = u(this.constructor.NAME);
                    s.setAttribute("id", r), this.element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && s.classList.add("fade");
                    var a = "function" == typeof this.config.placement ? this.config.placement.call(this, s, this.element) : this.config.placement,
                        l = this._getAttachment(a);
                    this._addAttachmentClass(l);
                    var c, h = this._getContainer();
                    k(s, this.constructor.DATA_KEY, this), this.element.ownerDocument.documentElement.contains(this.tip) || h.appendChild(s), V.trigger(this.element, this.constructor.Event.INSERTED), this._popper = new n.default(this.element, s, this._getPopperConfig(l)), s.classList.add("show"), "ontouchstart" in document.documentElement && (c = []).concat.apply(c, document.body.children).forEach((function (t) {
                        V.on(t, "mouseover", (function () {
                        }))
                    }));
                    var f = function () {
                        t.config.animation && t._fixTransition();
                        var e = t._hoverState;
                        t._hoverState = null, V.trigger(t.element, t.constructor.Event.SHOWN), "out" === e && t._leave(null, t)
                    };
                    if (this.tip.classList.contains("fade")) {
                        var d = g(this.tip);
                        V.one(this.tip, "transitionend", f), _(this.tip, d)
                    } else f()
                }
            }, e.hide = function () {
                var t = this;
                if (this._popper) {
                    var e = this.getTipElement(), n = function () {
                        "show" !== t._hoverState && e.parentNode && e.parentNode.removeChild(e), t._cleanTipClass(), t.element.removeAttribute("aria-describedby"), V.trigger(t.element, t.constructor.Event.HIDDEN), t._popper.destroy()
                    };
                    if (!V.trigger(this.element, this.constructor.Event.HIDE).defaultPrevented) {
                        var i;
                        if (e.classList.remove("show"), "ontouchstart" in document.documentElement && (i = []).concat.apply(i, document.body.children).forEach((function (t) {
                            return V.off(t, "mouseover", y)
                        })), this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, this.tip.classList.contains("fade")) {
                            var o = g(e);
                            V.one(e, "transitionend", n), _(e, o)
                        } else n();
                        this._hoverState = ""
                    }
                }
            }, e.update = function () {
                null !== this._popper && this._popper.scheduleUpdate()
            }, e.isWithContent = function () {
                return Boolean(this.getTitle())
            }, e.getTipElement = function () {
                if (this.tip) return this.tip;
                var t = document.createElement("div");
                return t.innerHTML = this.config.template, this.tip = t.children[0], this.tip
            }, e.setContent = function () {
                var t = this.getTipElement();
                this.setElementContent(nt.findOne(".tooltip-inner", t), this.getTitle()), t.classList.remove("fade", "show")
            }, e.setElementContent = function (t, e) {
                if (null !== t) return "object" == typeof e && m(e) ? (e.jquery && (e = e[0]), void (this.config.html ? e.parentNode !== t && (t.innerHTML = "", t.appendChild(e)) : t.textContent = e.textContent)) : void (this.config.html ? (this.config.sanitize && (e = jt(e, this.config.allowList, this.config.sanitizeFn)), t.innerHTML = e) : t.textContent = e)
            }, e.getTitle = function () {
                var t = this.element.getAttribute("data-original-title");
                return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
            }, e._getPopperConfig = function (t) {
                var e = this;
                return s({}, {
                    placement: t,
                    modifiers: {
                        offset: this._getOffset(),
                        flip: {behavior: this.config.fallbackPlacement},
                        arrow: {element: "." + this.constructor.NAME + "-arrow"},
                        preventOverflow: {boundariesElement: this.config.boundary}
                    },
                    onCreate: function (t) {
                        t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                    },
                    onUpdate: function (t) {
                        return e._handlePopperPlacementChange(t)
                    }
                }, this.config.popperConfig)
            }, e._addAttachmentClass = function (t) {
                this.getTipElement().classList.add("bs-tooltip-" + t)
            }, e._getOffset = function () {
                var t = this, e = {};
                return "function" == typeof this.config.offset ? e.fn = function (e) {
                    return e.offsets = s({}, e.offsets, t.config.offset(e.offsets, t.element) || {}), e
                } : e.offset = this.config.offset, e
            }, e._getContainer = function () {
                return !1 === this.config.container ? document.body : m(this.config.container) ? this.config.container : nt.findOne(this.config.container)
            }, e._getAttachment = function (t) {
                return Bt[t.toUpperCase()]
            }, e._setListeners = function () {
                var t = this;
                this.config.trigger.split(" ").forEach((function (e) {
                    if ("click" === e) V.on(t.element, t.constructor.Event.CLICK, t.config.selector, (function (e) {
                        return t.toggle(e)
                    })); else if ("manual" !== e) {
                        var n = "hover" === e ? t.constructor.Event.MOUSEENTER : t.constructor.Event.FOCUSIN,
                            i = "hover" === e ? t.constructor.Event.MOUSELEAVE : t.constructor.Event.FOCUSOUT;
                        V.on(t.element, n, t.config.selector, (function (e) {
                            return t._enter(e)
                        })), V.on(t.element, i, t.config.selector, (function (e) {
                            return t._leave(e)
                        }))
                    }
                })), this._hideModalHandler = function () {
                    t.element && t.hide()
                }, V.on(this.element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = s({}, this.config, {
                    trigger: "manual",
                    selector: ""
                }) : this._fixTitle()
            }, e._fixTitle = function () {
                var t = typeof this.element.getAttribute("data-original-title");
                (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
            }, e._enter = function (t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || L(t.delegateTarget, n)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), k(t.delegateTarget, n, e)), t && (e._activeTrigger["focusin" === t.type ? "focus" : "hover"] = !0), e.getTipElement().classList.contains("show") || "show" === e._hoverState ? e._hoverState = "show" : (clearTimeout(e._timeout), e._hoverState = "show", e.config.delay && e.config.delay.show ? e._timeout = setTimeout((function () {
                    "show" === e._hoverState && e.show()
                }), e.config.delay.show) : e.show())
            }, e._leave = function (t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || L(t.delegateTarget, n)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), k(t.delegateTarget, n, e)), t && (e._activeTrigger["focusout" === t.type ? "focus" : "hover"] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout((function () {
                    "out" === e._hoverState && e.hide()
                }), e.config.delay.hide) : e.hide())
            }, e._isWithActiveTrigger = function () {
                for (var t in this._activeTrigger) if (this._activeTrigger[t]) return !0;
                return !1
            }, e._getConfig = function (t) {
                var e = et.getDataAttributes(this.element);
                return Object.keys(e).forEach((function (t) {
                    -1 !== Rt.indexOf(t) && delete e[t]
                })), t && "object" == typeof t.container && t.container.jquery && (t.container = t.container[0]), "number" == typeof (t = s({}, this.constructor.Default, e, "object" == typeof t && t ? t : {})).delay && (t.delay = {
                    show: t.delay,
                    hide: t.delay
                }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), v(xt, t, this.constructor.DefaultType), t.sanitize && (t.template = jt(t.template, t.allowList, t.sanitizeFn)), t
            }, e._getDelegateConfig = function () {
                var t = {};
                if (this.config) for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                return t
            }, e._cleanTipClass = function () {
                var t = this.getTipElement(), e = t.getAttribute("class").match(Pt);
                null !== e && e.length > 0 && e.map((function (t) {
                    return t.trim()
                })).forEach((function (e) {
                    return t.classList.remove(e)
                }))
            }, e._handlePopperPlacementChange = function (t) {
                this.tip = t.instance.popper, this._cleanTipClass(), this._addAttachmentClass(this._getAttachment(t.placement))
            }, e._fixTransition = function () {
                var t = this.getTipElement(), e = this.config.animation;
                null === t.getAttribute("x-placement") && (t.classList.remove("fade"), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
            }, t.jQueryInterface = function (e) {
                return this.each((function () {
                    var n = L(this, "bs.tooltip"), i = "object" == typeof e && e;
                    if ((n || !/dispose|hide/.test(e)) && (n || (n = new t(this, i)), "string" == typeof e)) {
                        if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e]()
                    }
                }))
            }, t.getInstance = function (t) {
                return L(t, "bs.tooltip")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "Default", get: function () {
                    return Mt
                }
            }, {
                key: "NAME", get: function () {
                    return xt
                }
            }, {
                key: "DATA_KEY", get: function () {
                    return "bs.tooltip"
                }
            }, {
                key: "Event", get: function () {
                    return Qt
                }
            }, {
                key: "EVENT_KEY", get: function () {
                    return ".bs.tooltip"
                }
            }, {
                key: "DefaultType", get: function () {
                    return Ht
                }
            }]), t
        }(), Ft = E();
    if (Ft) {
        var Wt = Ft.fn[xt];
        Ft.fn[xt] = Ut.jQueryInterface, Ft.fn[xt].Constructor = Ut, Ft.fn[xt].noConflict = function () {
            return Ft.fn[xt] = Wt, Ut.jQueryInterface
        }
    }
    var Kt = "popover", Vt = new RegExp("(^|\\s)bs-popover\\S+", "g"), qt = s({}, Ut.Default, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    }), zt = s({}, Ut.DefaultType, {content: "(string|element|function)"}), Xt = {
        HIDE: "hide.bs.popover",
        HIDDEN: "hidden.bs.popover",
        SHOW: "show.bs.popover",
        SHOWN: "shown.bs.popover",
        INSERTED: "inserted.bs.popover",
        CLICK: "click.bs.popover",
        FOCUSIN: "focusin.bs.popover",
        FOCUSOUT: "focusout.bs.popover",
        MOUSEENTER: "mouseenter.bs.popover",
        MOUSELEAVE: "mouseleave.bs.popover"
    }, Yt = function (t) {
        var e, n;

        function i() {
            return t.apply(this, arguments) || this
        }

        n = t, (e = i).prototype = Object.create(n.prototype), e.prototype.constructor = e, e.__proto__ = n;
        var s = i.prototype;
        return s.isWithContent = function () {
            return this.getTitle() || this._getContent()
        }, s.setContent = function () {
            var t = this.getTipElement();
            this.setElementContent(nt.findOne(".popover-header", t), this.getTitle());
            var e = this._getContent();
            "function" == typeof e && (e = e.call(this.element)), this.setElementContent(nt.findOne(".popover-body", t), e), t.classList.remove("fade", "show")
        }, s._addAttachmentClass = function (t) {
            this.getTipElement().classList.add("bs-popover-" + t)
        }, s._getContent = function () {
            return this.element.getAttribute("data-content") || this.config.content
        }, s._cleanTipClass = function () {
            var t = this.getTipElement(), e = t.getAttribute("class").match(Vt);
            null !== e && e.length > 0 && e.map((function (t) {
                return t.trim()
            })).forEach((function (e) {
                return t.classList.remove(e)
            }))
        }, i.jQueryInterface = function (t) {
            return this.each((function () {
                var e = L(this, "bs.popover"), n = "object" == typeof t ? t : null;
                if ((e || !/dispose|hide/.test(t)) && (e || (e = new i(this, n), k(this, "bs.popover", e)), "string" == typeof t)) {
                    if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                    e[t]()
                }
            }))
        }, i.getInstance = function (t) {
            return L(t, "bs.popover")
        }, o(i, null, [{
            key: "VERSION", get: function () {
                return "5.0.0-alpha2"
            }
        }, {
            key: "Default", get: function () {
                return qt
            }
        }, {
            key: "NAME", get: function () {
                return Kt
            }
        }, {
            key: "DATA_KEY", get: function () {
                return "bs.popover"
            }
        }, {
            key: "Event", get: function () {
                return Xt
            }
        }, {
            key: "EVENT_KEY", get: function () {
                return ".bs.popover"
            }
        }, {
            key: "DefaultType", get: function () {
                return zt
            }
        }]), i
    }(Ut), $t = E();
    if ($t) {
        var Gt = $t.fn[Kt];
        $t.fn[Kt] = Yt.jQueryInterface, $t.fn[Kt].Constructor = Yt, $t.fn[Kt].noConflict = function () {
            return $t.fn[Kt] = Gt, Yt.jQueryInterface
        }
    }
    var Zt = "scrollspy", Jt = {offset: 10, method: "auto", target: ""},
        te = {offset: "number", method: "string", target: "(string|element)"}, ee = function () {
            function t(t, e) {
                var n = this;
                this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " .nav-link, " + this._config.target + " .list-group-item, " + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, V.on(this._scrollElement, "scroll.bs.scrollspy", (function (t) {
                    return n._process(t)
                })), this.refresh(), this._process(), k(t, "bs.scrollspy", this)
            }

            var e = t.prototype;
            return e.refresh = function () {
                var t = this, e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                    n = "auto" === this._config.method ? e : this._config.method,
                    i = "position" === n ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), nt.find(this._selector).map((function (t) {
                    var e = f(t), o = e ? nt.findOne(e) : null;
                    if (o) {
                        var s = o.getBoundingClientRect();
                        if (s.width || s.height) return [et[n](o).top + i, e]
                    }
                    return null
                })).filter((function (t) {
                    return t
                })).sort((function (t, e) {
                    return t[0] - e[0]
                })).forEach((function (e) {
                    t._offsets.push(e[0]), t._targets.push(e[1])
                }))
            }, e.dispose = function () {
                C(this._element, "bs.scrollspy"), V.off(this._scrollElement, ".bs.scrollspy"), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
            }, e._getConfig = function (t) {
                if ("string" != typeof (t = s({}, Jt, "object" == typeof t && t ? t : {})).target && m(t.target)) {
                    var e = t.target.id;
                    e || (e = u(Zt), t.target.id = e), t.target = "#" + e
                }
                return v(Zt, t, te), t
            }, e._getScrollTop = function () {
                return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
            }, e._getScrollHeight = function () {
                return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
            }, e._getOffsetHeight = function () {
                return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
            }, e._process = function () {
                var t = this._getScrollTop() + this._config.offset, e = this._getScrollHeight(),
                    n = this._config.offset + e - this._getOffsetHeight();
                if (this._scrollHeight !== e && this.refresh(), t >= n) {
                    var i = this._targets[this._targets.length - 1];
                    this._activeTarget !== i && this._activate(i)
                } else {
                    if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                    for (var o = this._offsets.length; o--;) this._activeTarget !== this._targets[o] && t >= this._offsets[o] && (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
                }
            }, e._activate = function (t) {
                this._activeTarget = t, this._clear();
                var e = this._selector.split(",").map((function (e) {
                    return e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]'
                })), n = nt.findOne(e.join(","));
                n.classList.contains("dropdown-item") ? (nt.findOne(".dropdown-toggle", n.closest(".dropdown")).classList.add("active"), n.classList.add("active")) : (n.classList.add("active"), nt.parents(n, ".nav, .list-group").forEach((function (t) {
                    nt.prev(t, ".nav-link, .list-group-item").forEach((function (t) {
                        return t.classList.add("active")
                    })), nt.prev(t, ".nav-item").forEach((function (t) {
                        nt.children(t, ".nav-link").forEach((function (t) {
                            return t.classList.add("active")
                        }))
                    }))
                }))), V.trigger(this._scrollElement, "activate.bs.scrollspy", {relatedTarget: t})
            }, e._clear = function () {
                nt.find(this._selector).filter((function (t) {
                    return t.classList.contains("active")
                })).forEach((function (t) {
                    return t.classList.remove("active")
                }))
            }, t.jQueryInterface = function (e) {
                return this.each((function () {
                    var n = L(this, "bs.scrollspy");
                    if (n || (n = new t(this, "object" == typeof e && e)), "string" == typeof e) {
                        if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e]()
                    }
                }))
            }, t.getInstance = function (t) {
                return L(t, "bs.scrollspy")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "Default", get: function () {
                    return Jt
                }
            }]), t
        }();
    V.on(window, "load.bs.scrollspy.data-api", (function () {
        nt.find('[data-spy="scroll"]').forEach((function (t) {
            return new ee(t, et.getDataAttributes(t))
        }))
    }));
    var ne = E();
    if (ne) {
        var ie = ne.fn[Zt];
        ne.fn[Zt] = ee.jQueryInterface, ne.fn[Zt].Constructor = ee, ne.fn[Zt].noConflict = function () {
            return ne.fn[Zt] = ie, ee.jQueryInterface
        }
    }
    var oe = function () {
        function t(t) {
            this._element = t, k(this._element, "bs.tab", this)
        }

        var e = t.prototype;
        return e.show = function () {
            var t = this;
            if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && this._element.classList.contains("active") || this._element.classList.contains("disabled"))) {
                var e, n = d(this._element), i = this._element.closest(".nav, .list-group");
                if (i) {
                    var o = "UL" === i.nodeName || "OL" === i.nodeName ? ":scope > li > .active" : ".active";
                    e = (e = nt.find(o, i))[e.length - 1]
                }
                var s = null;
                if (e && (s = V.trigger(e, "hide.bs.tab", {relatedTarget: this._element})), !(V.trigger(this._element, "show.bs.tab", {relatedTarget: e}).defaultPrevented || null !== s && s.defaultPrevented)) {
                    this._activate(this._element, i);
                    var r = function () {
                        V.trigger(e, "hidden.bs.tab", {relatedTarget: t._element}), V.trigger(t._element, "shown.bs.tab", {relatedTarget: e})
                    };
                    n ? this._activate(n, n.parentNode, r) : r()
                }
            }
        }, e.dispose = function () {
            C(this._element, "bs.tab"), this._element = null
        }, e._activate = function (t, e, n) {
            var i = this,
                o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? nt.children(e, ".active") : nt.find(":scope > li > .active", e))[0],
                s = n && o && o.classList.contains("fade"), r = function () {
                    return i._transitionComplete(t, o, n)
                };
            if (o && s) {
                var a = g(o);
                o.classList.remove("show"), V.one(o, "transitionend", r), _(o, a)
            } else r()
        }, e._transitionComplete = function (t, e, n) {
            if (e) {
                e.classList.remove("active");
                var i = nt.findOne(":scope > .dropdown-menu .active", e.parentNode);
                i && i.classList.remove("active"), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
            }
            t.classList.add("active"), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), w(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && t.parentNode.classList.contains("dropdown-menu") && (t.closest(".dropdown") && nt.find(".dropdown-toggle").forEach((function (t) {
                return t.classList.add("active")
            })), t.setAttribute("aria-expanded", !0)), n && n()
        }, t.jQueryInterface = function (e) {
            return this.each((function () {
                var n = L(this, "bs.tab") || new t(this);
                if ("string" == typeof e) {
                    if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                    n[e]()
                }
            }))
        }, t.getInstance = function (t) {
            return L(t, "bs.tab")
        }, o(t, null, [{
            key: "VERSION", get: function () {
                return "5.0.0-alpha2"
            }
        }]), t
    }();
    V.on(document, "click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', (function (t) {
        t.preventDefault(), (L(this, "bs.tab") || new oe(this)).show()
    }));
    var se = E();
    if (se) {
        var re = se.fn.tab;
        se.fn.tab = oe.jQueryInterface, se.fn.tab.Constructor = oe, se.fn.tab.noConflict = function () {
            return se.fn.tab = re, oe.jQueryInterface
        }
    }
    var ae = {animation: "boolean", autohide: "boolean", delay: "number"},
        le = {animation: !0, autohide: !0, delay: 5e3}, ce = function () {
            function t(t, e) {
                this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners(), k(t, "bs.toast", this)
            }

            var e = t.prototype;
            return e.show = function () {
                var t = this;
                if (!V.trigger(this._element, "show.bs.toast").defaultPrevented) {
                    this._clearTimeout(), this._config.animation && this._element.classList.add("fade");
                    var e = function () {
                        t._element.classList.remove("showing"), t._element.classList.add("show"), V.trigger(t._element, "shown.bs.toast"), t._config.autohide && (t._timeout = setTimeout((function () {
                            t.hide()
                        }), t._config.delay))
                    };
                    if (this._element.classList.remove("hide"), w(this._element), this._element.classList.add("showing"), this._config.animation) {
                        var n = g(this._element);
                        V.one(this._element, "transitionend", e), _(this._element, n)
                    } else e()
                }
            }, e.hide = function () {
                var t = this;
                if (this._element.classList.contains("show") && !V.trigger(this._element, "hide.bs.toast").defaultPrevented) {
                    var e = function () {
                        t._element.classList.add("hide"), V.trigger(t._element, "hidden.bs.toast")
                    };
                    if (this._element.classList.remove("show"), this._config.animation) {
                        var n = g(this._element);
                        V.one(this._element, "transitionend", e), _(this._element, n)
                    } else e()
                }
            }, e.dispose = function () {
                this._clearTimeout(), this._element.classList.contains("show") && this._element.classList.remove("show"), V.off(this._element, "click.dismiss.bs.toast"), C(this._element, "bs.toast"), this._element = null, this._config = null
            }, e._getConfig = function (t) {
                return t = s({}, le, et.getDataAttributes(this._element), "object" == typeof t && t ? t : {}), v("toast", t, this.constructor.DefaultType), t
            }, e._setListeners = function () {
                var t = this;
                V.on(this._element, "click.dismiss.bs.toast", '[data-dismiss="toast"]', (function () {
                    return t.hide()
                }))
            }, e._clearTimeout = function () {
                clearTimeout(this._timeout), this._timeout = null
            }, t.jQueryInterface = function (e) {
                return this.each((function () {
                    var n = L(this, "bs.toast");
                    if (n || (n = new t(this, "object" == typeof e && e)), "string" == typeof e) {
                        if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                        n[e](this)
                    }
                }))
            }, t.getInstance = function (t) {
                return L(t, "bs.toast")
            }, o(t, null, [{
                key: "VERSION", get: function () {
                    return "5.0.0-alpha2"
                }
            }, {
                key: "DefaultType", get: function () {
                    return ae
                }
            }, {
                key: "Default", get: function () {
                    return le
                }
            }]), t
        }(), ue = E();
    if (ue) {
        var he = ue.fn.toast;
        ue.fn.toast = ce.jQueryInterface, ue.fn.toast.Constructor = ce, ue.fn.toast.noConflict = function () {
            return ue.fn.toast = he, ce.jQueryInterface
        }
    }
    return {
        Alert: z,
        Button: $,
        Carousel: lt,
        Collapse: gt,
        Dropdown: wt,
        Modal: Ct,
        Popover: Yt,
        ScrollSpy: ee,
        Tab: oe,
        Toast: ce,
        Tooltip: Ut
    }
})), function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (e = e || self).Swiper = t()
}(this, (function () {
    "use strict";

    function e(e, t) {
        for (var i = 0; i < t.length; i++) {
            var s = t[i];
            s.enumerable = s.enumerable || !1, s.configurable = !0, "value" in s && (s.writable = !0), Object.defineProperty(e, s.key, s)
        }
    }

    function t() {
        return (t = Object.assign || function (e) {
            for (var t = 1; t < arguments.length; t++) {
                var i = arguments[t];
                for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (e[s] = i[s])
            }
            return e
        }).apply(this, arguments)
    }

    function i(e) {
        return null !== e && "object" == typeof e && "constructor" in e && e.constructor === Object
    }

    function s(e, t) {
        void 0 === e && (e = {}), void 0 === t && (t = {}), Object.keys(t).forEach((function (a) {
            void 0 === e[a] ? e[a] = t[a] : i(t[a]) && i(e[a]) && Object.keys(t[a]).length > 0 && s(e[a], t[a])
        }))
    }

    var a = {
        body: {}, addEventListener: function () {
        }, removeEventListener: function () {
        }, activeElement: {
            blur: function () {
            }, nodeName: ""
        }, querySelector: function () {
            return null
        }, querySelectorAll: function () {
            return []
        }, getElementById: function () {
            return null
        }, createEvent: function () {
            return {
                initEvent: function () {
                }
            }
        }, createElement: function () {
            return {
                children: [], childNodes: [], style: {}, setAttribute: function () {
                }, getElementsByTagName: function () {
                    return []
                }
            }
        }, createElementNS: function () {
            return {}
        }, importNode: function () {
            return null
        }, location: {hash: "", host: "", hostname: "", href: "", origin: "", pathname: "", protocol: "", search: ""}
    };

    function r() {
        var e = "undefined" != typeof document ? document : {};
        return s(e, a), e
    }

    var n = {
        document: a,
        navigator: {userAgent: ""},
        location: {hash: "", host: "", hostname: "", href: "", origin: "", pathname: "", protocol: "", search: ""},
        history: {
            replaceState: function () {
            }, pushState: function () {
            }, go: function () {
            }, back: function () {
            }
        },
        CustomEvent: function () {
            return this
        },
        addEventListener: function () {
        },
        removeEventListener: function () {
        },
        getComputedStyle: function () {
            return {
                getPropertyValue: function () {
                    return ""
                }
            }
        },
        Image: function () {
        },
        Date: function () {
        },
        screen: {},
        setTimeout: function () {
        },
        clearTimeout: function () {
        },
        matchMedia: function () {
            return {}
        },
        requestAnimationFrame: function (e) {
            return "undefined" == typeof setTimeout ? (e(), null) : setTimeout(e, 0)
        },
        cancelAnimationFrame: function (e) {
            "undefined" != typeof setTimeout && clearTimeout(e)
        }
    };

    function l() {
        var e = "undefined" != typeof window ? window : {};
        return s(e, n), e
    }

    function o(e) {
        return (o = Object.setPrototypeOf ? Object.getPrototypeOf : function (e) {
            return e.__proto__ || Object.getPrototypeOf(e)
        })(e)
    }

    function d(e, t) {
        return (d = Object.setPrototypeOf || function (e, t) {
            return e.__proto__ = t, e
        })(e, t)
    }

    function h() {
        if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
        if (Reflect.construct.sham) return !1;
        if ("function" == typeof Proxy) return !0;
        try {
            return Date.prototype.toString.call(Reflect.construct(Date, [], (function () {
            }))), !0
        } catch (e) {
            return !1
        }
    }

    function p(e, t, i) {
        return (p = h() ? Reflect.construct : function (e, t, i) {
            var s = [null];
            s.push.apply(s, t);
            var a = new (Function.bind.apply(e, s));
            return i && d(a, i.prototype), a
        }).apply(null, arguments)
    }

    function u(e) {
        var t = "function" == typeof Map ? new Map : void 0;
        return (u = function (e) {
            if (null === e || (i = e, -1 === Function.toString.call(i).indexOf("[native code]"))) return e;
            var i;
            if ("function" != typeof e) throw new TypeError("Super expression must either be null or a function");
            if (void 0 !== t) {
                if (t.has(e)) return t.get(e);
                t.set(e, s)
            }

            function s() {
                return p(e, arguments, o(this).constructor)
            }

            return s.prototype = Object.create(e.prototype, {
                constructor: {
                    value: s,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), d(s, e)
        })(e)
    }

    var c = function (e) {
        var t, i;

        function s(t) {
            var i, s, a;
            return s = function (e) {
                if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return e
            }(i = e.call.apply(e, [this].concat(t)) || this), a = s.__proto__, Object.defineProperty(s, "__proto__", {
                get: function () {
                    return a
                }, set: function (e) {
                    a.__proto__ = e
                }
            }), i
        }

        return i = e, (t = s).prototype = Object.create(i.prototype), t.prototype.constructor = t, t.__proto__ = i, s
    }(u(Array));

    function v(e) {
        void 0 === e && (e = []);
        var t = [];
        return e.forEach((function (e) {
            Array.isArray(e) ? t.push.apply(t, v(e)) : t.push(e)
        })), t
    }

    function f(e, t) {
        return Array.prototype.filter.call(e, t)
    }

    function m(e, t) {
        var i = l(), s = r(), a = [];
        if (!t && e instanceof c) return e;
        if (!e) return new c(a);
        if ("string" == typeof e) {
            var n = e.trim();
            if (n.indexOf("<") >= 0 && n.indexOf(">") >= 0) {
                var o = "div";
                0 === n.indexOf("<li") && (o = "ul"), 0 === n.indexOf("<tr") && (o = "tbody"), 0 !== n.indexOf("<td") && 0 !== n.indexOf("<th") || (o = "tr"), 0 === n.indexOf("<tbody") && (o = "table"), 0 === n.indexOf("<option") && (o = "select");
                var d = s.createElement(o);
                d.innerHTML = n;
                for (var h = 0; h < d.childNodes.length; h += 1) a.push(d.childNodes[h])
            } else a = function (e, t) {
                if ("string" != typeof e) return [e];
                for (var i = [], s = t.querySelectorAll(e), a = 0; a < s.length; a += 1) i.push(s[a]);
                return i
            }(e.trim(), t || s)
        } else if (e.nodeType || e === i || e === s) a.push(e); else if (Array.isArray(e)) {
            if (e instanceof c) return e;
            a = e
        }
        return new c(function (e) {
            for (var t = [], i = 0; i < e.length; i += 1) -1 === t.indexOf(e[i]) && t.push(e[i]);
            return t
        }(a))
    }

    m.fn = c.prototype;
    var g, w, y, b = {
        addClass: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function (e) {
                return e.split(" ")
            })));
            return this.forEach((function (e) {
                var t;
                (t = e.classList).add.apply(t, s)
            })), this
        }, removeClass: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function (e) {
                return e.split(" ")
            })));
            return this.forEach((function (e) {
                var t;
                (t = e.classList).remove.apply(t, s)
            })), this
        }, hasClass: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function (e) {
                return e.split(" ")
            })));
            return f(this, (function (e) {
                return s.filter((function (t) {
                    return e.classList.contains(t)
                })).length > 0
            })).length > 0
        }, toggleClass: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function (e) {
                return e.split(" ")
            })));
            this.forEach((function (e) {
                s.forEach((function (t) {
                    e.classList.toggle(t)
                }))
            }))
        }, attr: function (e, t) {
            if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
            for (var i = 0; i < this.length; i += 1) if (2 === arguments.length) this[i].setAttribute(e, t); else for (var s in e) this[i][s] = e[s], this[i].setAttribute(s, e[s]);
            return this
        }, removeAttr: function (e) {
            for (var t = 0; t < this.length; t += 1) this[t].removeAttribute(e);
            return this
        }, transform: function (e) {
            for (var t = 0; t < this.length; t += 1) this[t].style.transform = e;
            return this
        }, transition: function (e) {
            for (var t = 0; t < this.length; t += 1) this[t].style.transition = "string" != typeof e ? e + "ms" : e;
            return this
        }, on: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = t[0], a = t[1], r = t[2], n = t[3];

            function l(e) {
                var t = e.target;
                if (t) {
                    var i = e.target.dom7EventData || [];
                    if (i.indexOf(e) < 0 && i.unshift(e), m(t).is(a)) r.apply(t, i); else for (var s = m(t).parents(), n = 0; n < s.length; n += 1) m(s[n]).is(a) && r.apply(s[n], i)
                }
            }

            function o(e) {
                var t = e && e.target && e.target.dom7EventData || [];
                t.indexOf(e) < 0 && t.unshift(e), r.apply(this, t)
            }

            "function" == typeof t[1] && (s = t[0], r = t[1], n = t[2], a = void 0), n || (n = !1);
            for (var d, h = s.split(" "), p = 0; p < this.length; p += 1) {
                var u = this[p];
                if (a) for (d = 0; d < h.length; d += 1) {
                    var c = h[d];
                    u.dom7LiveListeners || (u.dom7LiveListeners = {}), u.dom7LiveListeners[c] || (u.dom7LiveListeners[c] = []), u.dom7LiveListeners[c].push({
                        listener: r,
                        proxyListener: l
                    }), u.addEventListener(c, l, n)
                } else for (d = 0; d < h.length; d += 1) {
                    var v = h[d];
                    u.dom7Listeners || (u.dom7Listeners = {}), u.dom7Listeners[v] || (u.dom7Listeners[v] = []), u.dom7Listeners[v].push({
                        listener: r,
                        proxyListener: o
                    }), u.addEventListener(v, o, n)
                }
            }
            return this
        }, off: function () {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = t[0], a = t[1], r = t[2], n = t[3];
            "function" == typeof t[1] && (s = t[0], r = t[1], n = t[2], a = void 0), n || (n = !1);
            for (var l = s.split(" "), o = 0; o < l.length; o += 1) for (var d = l[o], h = 0; h < this.length; h += 1) {
                var p = this[h], u = void 0;
                if (!a && p.dom7Listeners ? u = p.dom7Listeners[d] : a && p.dom7LiveListeners && (u = p.dom7LiveListeners[d]), u && u.length) for (var c = u.length - 1; c >= 0; c -= 1) {
                    var v = u[c];
                    r && v.listener === r || r && v.listener && v.listener.dom7proxy && v.listener.dom7proxy === r ? (p.removeEventListener(d, v.proxyListener, n), u.splice(c, 1)) : r || (p.removeEventListener(d, v.proxyListener, n), u.splice(c, 1))
                }
            }
            return this
        }, trigger: function () {
            for (var e = l(), t = arguments.length, i = new Array(t), s = 0; s < t; s++) i[s] = arguments[s];
            for (var a = i[0].split(" "), r = i[1], n = 0; n < a.length; n += 1) for (var o = a[n], d = 0; d < this.length; d += 1) {
                var h = this[d];
                if (e.CustomEvent) {
                    var p = new e.CustomEvent(o, {detail: r, bubbles: !0, cancelable: !0});
                    h.dom7EventData = i.filter((function (e, t) {
                        return t > 0
                    })), h.dispatchEvent(p), h.dom7EventData = [], delete h.dom7EventData
                }
            }
            return this
        }, transitionEnd: function (e) {
            var t = this;
            return e && t.on("transitionend", (function i(s) {
                s.target === this && (e.call(this, s), t.off("transitionend", i))
            })), this
        }, outerWidth: function (e) {
            if (this.length > 0) {
                if (e) {
                    var t = this.styles();
                    return this[0].offsetWidth + parseFloat(t.getPropertyValue("margin-right")) + parseFloat(t.getPropertyValue("margin-left"))
                }
                return this[0].offsetWidth
            }
            return null
        }, outerHeight: function (e) {
            if (this.length > 0) {
                if (e) {
                    var t = this.styles();
                    return this[0].offsetHeight + parseFloat(t.getPropertyValue("margin-top")) + parseFloat(t.getPropertyValue("margin-bottom"))
                }
                return this[0].offsetHeight
            }
            return null
        }, styles: function () {
            var e = l();
            return this[0] ? e.getComputedStyle(this[0], null) : {}
        }, offset: function () {
            if (this.length > 0) {
                var e = l(), t = r(), i = this[0], s = i.getBoundingClientRect(), a = t.body,
                    n = i.clientTop || a.clientTop || 0, o = i.clientLeft || a.clientLeft || 0,
                    d = i === e ? e.scrollY : i.scrollTop, h = i === e ? e.scrollX : i.scrollLeft;
                return {top: s.top + d - n, left: s.left + h - o}
            }
            return null
        }, css: function (e, t) {
            var i, s = l();
            if (1 === arguments.length) {
                if ("string" != typeof e) {
                    for (i = 0; i < this.length; i += 1) for (var a in e) this[i].style[a] = e[a];
                    return this
                }
                if (this[0]) return s.getComputedStyle(this[0], null).getPropertyValue(e)
            }
            if (2 === arguments.length && "string" == typeof e) {
                for (i = 0; i < this.length; i += 1) this[i].style[e] = t;
                return this
            }
            return this
        }, each: function (e) {
            return e ? (this.forEach((function (t, i) {
                e.apply(t, [t, i])
            })), this) : this
        }, html: function (e) {
            if (void 0 === e) return this[0] ? this[0].innerHTML : null;
            for (var t = 0; t < this.length; t += 1) this[t].innerHTML = e;
            return this
        }, text: function (e) {
            if (void 0 === e) return this[0] ? this[0].textContent.trim() : null;
            for (var t = 0; t < this.length; t += 1) this[t].textContent = e;
            return this
        }, is: function (e) {
            var t, i, s = l(), a = r(), n = this[0];
            if (!n || void 0 === e) return !1;
            if ("string" == typeof e) {
                if (n.matches) return n.matches(e);
                if (n.webkitMatchesSelector) return n.webkitMatchesSelector(e);
                if (n.msMatchesSelector) return n.msMatchesSelector(e);
                for (t = m(e), i = 0; i < t.length; i += 1) if (t[i] === n) return !0;
                return !1
            }
            if (e === a) return n === a;
            if (e === s) return n === s;
            if (e.nodeType || e instanceof c) {
                for (t = e.nodeType ? [e] : e, i = 0; i < t.length; i += 1) if (t[i] === n) return !0;
                return !1
            }
            return !1
        }, index: function () {
            var e, t = this[0];
            if (t) {
                for (e = 0; null !== (t = t.previousSibling);) 1 === t.nodeType && (e += 1);
                return e
            }
        }, eq: function (e) {
            if (void 0 === e) return this;
            var t = this.length;
            if (e > t - 1) return m([]);
            if (e < 0) {
                var i = t + e;
                return m(i < 0 ? [] : [this[i]])
            }
            return m([this[e]])
        }, append: function () {
            for (var e, t = r(), i = 0; i < arguments.length; i += 1) {
                e = i < 0 || arguments.length <= i ? void 0 : arguments[i];
                for (var s = 0; s < this.length; s += 1) if ("string" == typeof e) {
                    var a = t.createElement("div");
                    for (a.innerHTML = e; a.firstChild;) this[s].appendChild(a.firstChild)
                } else if (e instanceof c) for (var n = 0; n < e.length; n += 1) this[s].appendChild(e[n]); else this[s].appendChild(e)
            }
            return this
        }, prepend: function (e) {
            var t, i, s = r();
            for (t = 0; t < this.length; t += 1) if ("string" == typeof e) {
                var a = s.createElement("div");
                for (a.innerHTML = e, i = a.childNodes.length - 1; i >= 0; i -= 1) this[t].insertBefore(a.childNodes[i], this[t].childNodes[0])
            } else if (e instanceof c) for (i = 0; i < e.length; i += 1) this[t].insertBefore(e[i], this[t].childNodes[0]); else this[t].insertBefore(e, this[t].childNodes[0]);
            return this
        }, next: function (e) {
            return this.length > 0 ? e ? this[0].nextElementSibling && m(this[0].nextElementSibling).is(e) ? m([this[0].nextElementSibling]) : m([]) : this[0].nextElementSibling ? m([this[0].nextElementSibling]) : m([]) : m([])
        }, nextAll: function (e) {
            var t = [], i = this[0];
            if (!i) return m([]);
            for (; i.nextElementSibling;) {
                var s = i.nextElementSibling;
                e ? m(s).is(e) && t.push(s) : t.push(s), i = s
            }
            return m(t)
        }, prev: function (e) {
            if (this.length > 0) {
                var t = this[0];
                return e ? t.previousElementSibling && m(t.previousElementSibling).is(e) ? m([t.previousElementSibling]) : m([]) : t.previousElementSibling ? m([t.previousElementSibling]) : m([])
            }
            return m([])
        }, prevAll: function (e) {
            var t = [], i = this[0];
            if (!i) return m([]);
            for (; i.previousElementSibling;) {
                var s = i.previousElementSibling;
                e ? m(s).is(e) && t.push(s) : t.push(s), i = s
            }
            return m(t)
        }, parent: function (e) {
            for (var t = [], i = 0; i < this.length; i += 1) null !== this[i].parentNode && (e ? m(this[i].parentNode).is(e) && t.push(this[i].parentNode) : t.push(this[i].parentNode));
            return m(t)
        }, parents: function (e) {
            for (var t = [], i = 0; i < this.length; i += 1) for (var s = this[i].parentNode; s;) e ? m(s).is(e) && t.push(s) : t.push(s), s = s.parentNode;
            return m(t)
        }, closest: function (e) {
            var t = this;
            return void 0 === e ? m([]) : (t.is(e) || (t = t.parents(e).eq(0)), t)
        }, find: function (e) {
            for (var t = [], i = 0; i < this.length; i += 1) for (var s = this[i].querySelectorAll(e), a = 0; a < s.length; a += 1) t.push(s[a]);
            return m(t)
        }, children: function (e) {
            for (var t = [], i = 0; i < this.length; i += 1) for (var s = this[i].children, a = 0; a < s.length; a += 1) e && !m(s[a]).is(e) || t.push(s[a]);
            return m(t)
        }, filter: function (e) {
            return m(f(this, e))
        }, remove: function () {
            for (var e = 0; e < this.length; e += 1) this[e].parentNode && this[e].parentNode.removeChild(this[e]);
            return this
        }
    };

    function E(e, t) {
        return void 0 === t && (t = 0), setTimeout(e, t)
    }

    function x() {
        return Date.now()
    }

    function T(e, t) {
        void 0 === t && (t = "x");
        var i, s, a, r = l(), n = r.getComputedStyle(e, null);
        return r.WebKitCSSMatrix ? ((s = n.transform || n.webkitTransform).split(",").length > 6 && (s = s.split(", ").map((function (e) {
            return e.replace(",", ".")
        })).join(", ")), a = new r.WebKitCSSMatrix("none" === s ? "" : s)) : i = (a = n.MozTransform || n.OTransform || n.MsTransform || n.msTransform || n.transform || n.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,")).toString().split(","), "x" === t && (s = r.WebKitCSSMatrix ? a.m41 : 16 === i.length ? parseFloat(i[12]) : parseFloat(i[4])), "y" === t && (s = r.WebKitCSSMatrix ? a.m42 : 16 === i.length ? parseFloat(i[13]) : parseFloat(i[5])), s || 0
    }

    function C(e) {
        return "object" == typeof e && null !== e && e.constructor && e.constructor === Object
    }

    function S() {
        for (var e = Object(arguments.length <= 0 ? void 0 : arguments[0]), t = 1; t < arguments.length; t += 1) {
            var i = t < 0 || arguments.length <= t ? void 0 : arguments[t];
            if (null != i) for (var s = Object.keys(Object(i)), a = 0, r = s.length; a < r; a += 1) {
                var n = s[a], l = Object.getOwnPropertyDescriptor(i, n);
                void 0 !== l && l.enumerable && (C(e[n]) && C(i[n]) ? S(e[n], i[n]) : !C(e[n]) && C(i[n]) ? (e[n] = {}, S(e[n], i[n])) : e[n] = i[n])
            }
        }
        return e
    }

    function M(e, t) {
        Object.keys(t).forEach((function (i) {
            C(t[i]) && Object.keys(t[i]).forEach((function (s) {
                "function" == typeof t[i][s] && (t[i][s] = t[i][s].bind(e))
            })), e[i] = t[i]
        }))
    }

    function z() {
        return g || (g = function () {
            var e = l(), t = r();
            return {
                touch: !!("ontouchstart" in e || e.DocumentTouch && t instanceof e.DocumentTouch),
                pointerEvents: !!e.PointerEvent && "maxTouchPoints" in e.navigator && e.navigator.maxTouchPoints >= 0,
                observer: "MutationObserver" in e || "WebkitMutationObserver" in e,
                passiveListener: function () {
                    var t = !1;
                    try {
                        var i = Object.defineProperty({}, "passive", {
                            get: function () {
                                t = !0
                            }
                        });
                        e.addEventListener("testPassiveListener", null, i)
                    } catch (e) {
                    }
                    return t
                }(),
                gestures: "ongesturestart" in e
            }
        }()), g
    }

    function P(e) {
        return void 0 === e && (e = {}), w || (w = function (e) {
            var t = (void 0 === e ? {} : e).userAgent, i = z(), s = l(), a = s.navigator.platform,
                r = t || s.navigator.userAgent, n = {ios: !1, android: !1}, o = s.screen.width, d = s.screen.height,
                h = r.match(/(Android);?[\s\/]+([\d.]+)?/), p = r.match(/(iPad).*OS\s([\d_]+)/),
                u = r.match(/(iPod)(.*OS\s([\d_]+))?/), c = !p && r.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                v = "Win32" === a, f = "MacIntel" === a;
            return !p && f && i.touch && ["1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768", "820x1180", "1180x820", "810x1080", "1080x810"].indexOf(o + "x" + d) >= 0 && ((p = r.match(/(Version)\/([\d.]+)/)) || (p = [0, 1, "13_0_0"]), f = !1), h && !v && (n.os = "android", n.android = !0), (p || c || u) && (n.os = "ios", n.ios = !0), n
        }(e)), w
    }

    function k() {
        return y || (y = function () {
            var e, t = l();
            return {
                isEdge: !!t.navigator.userAgent.match(/Edge/g),
                isSafari: (e = t.navigator.userAgent.toLowerCase(), e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0),
                isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent)
            }
        }()), y
    }

    Object.keys(b).forEach((function (e) {
        m.fn[e] = b[e]
    }));
    var $ = {
        name: "resize", create: function () {
            var e = this;
            S(e, {
                resize: {
                    resizeHandler: function () {
                        e && !e.destroyed && e.initialized && (e.emit("beforeResize"), e.emit("resize"))
                    }, orientationChangeHandler: function () {
                        e && !e.destroyed && e.initialized && e.emit("orientationchange")
                    }
                }
            })
        }, on: {
            init: function (e) {
                var t = l();
                t.addEventListener("resize", e.resize.resizeHandler), t.addEventListener("orientationchange", e.resize.orientationChangeHandler)
            }, destroy: function (e) {
                var t = l();
                t.removeEventListener("resize", e.resize.resizeHandler), t.removeEventListener("orientationchange", e.resize.orientationChangeHandler)
            }
        }
    }, L = {
        attach: function (e, t) {
            void 0 === t && (t = {});
            var i = l(), s = this, a = new (i.MutationObserver || i.WebkitMutationObserver)((function (e) {
                if (1 !== e.length) {
                    var t = function () {
                        s.emit("observerUpdate", e[0])
                    };
                    i.requestAnimationFrame ? i.requestAnimationFrame(t) : i.setTimeout(t, 0)
                } else s.emit("observerUpdate", e[0])
            }));
            a.observe(e, {
                attributes: void 0 === t.attributes || t.attributes,
                childList: void 0 === t.childList || t.childList,
                characterData: void 0 === t.characterData || t.characterData
            }), s.observer.observers.push(a)
        }, init: function () {
            if (this.support.observer && this.params.observer) {
                if (this.params.observeParents) for (var e = this.$el.parents(), t = 0; t < e.length; t += 1) this.observer.attach(e[t]);
                this.observer.attach(this.$el[0], {childList: this.params.observeSlideChildren}), this.observer.attach(this.$wrapperEl[0], {attributes: !1})
            }
        }, destroy: function () {
            this.observer.observers.forEach((function (e) {
                e.disconnect()
            })), this.observer.observers = []
        }
    }, I = {
        name: "observer",
        params: {observer: !1, observeParents: !1, observeSlideChildren: !1},
        create: function () {
            M(this, {observer: t(t({}, L), {}, {observers: []})})
        },
        on: {
            init: function (e) {
                e.observer.init()
            }, destroy: function (e) {
                e.observer.destroy()
            }
        }
    };

    function O(e) {
        var t = r(), i = l(), s = this.touchEventsData, a = this.params, n = this.touches;
        if (!this.animating || !a.preventInteractionOnTransition) {
            var o = e;
            o.originalEvent && (o = o.originalEvent);
            var d = m(o.target);
            if (("wrapper" !== a.touchEventsTarget || d.closest(this.wrapperEl).length) && (s.isTouchEvent = "touchstart" === o.type, (s.isTouchEvent || !("which" in o) || 3 !== o.which) && !(!s.isTouchEvent && "button" in o && o.button > 0 || s.isTouched && s.isMoved))) if (a.noSwiping && d.closest(a.noSwipingSelector ? a.noSwipingSelector : "." + a.noSwipingClass)[0]) this.allowClick = !0; else if (!a.swipeHandler || d.closest(a.swipeHandler)[0]) {
                n.currentX = "touchstart" === o.type ? o.targetTouches[0].pageX : o.pageX, n.currentY = "touchstart" === o.type ? o.targetTouches[0].pageY : o.pageY;
                var h = n.currentX, p = n.currentY, u = a.edgeSwipeDetection || a.iOSEdgeSwipeDetection,
                    c = a.edgeSwipeThreshold || a.iOSEdgeSwipeThreshold;
                if (!u || !(h <= c || h >= i.screen.width - c)) {
                    if (S(s, {
                        isTouched: !0,
                        isMoved: !1,
                        allowTouchCallbacks: !0,
                        isScrolling: void 0,
                        startMoving: void 0
                    }), n.startX = h, n.startY = p, s.touchStartTime = x(), this.allowClick = !0, this.updateSize(), this.swipeDirection = void 0, a.threshold > 0 && (s.allowThresholdMove = !1), "touchstart" !== o.type) {
                        var v = !0;
                        d.is(s.formElements) && (v = !1), t.activeElement && m(t.activeElement).is(s.formElements) && t.activeElement !== d[0] && t.activeElement.blur();
                        var f = v && this.allowTouchMove && a.touchStartPreventDefault;
                        (a.touchStartForcePreventDefault || f) && o.preventDefault()
                    }
                    this.emit("touchStart", o)
                }
            }
        }
    }

    function A(e) {
        var t = r(), i = this.touchEventsData, s = this.params, a = this.touches, n = this.rtlTranslate, l = e;
        if (l.originalEvent && (l = l.originalEvent), i.isTouched) {
            if (!i.isTouchEvent || "touchmove" === l.type) {
                var o = "touchmove" === l.type && l.targetTouches && (l.targetTouches[0] || l.changedTouches[0]),
                    d = "touchmove" === l.type ? o.pageX : l.pageX, h = "touchmove" === l.type ? o.pageY : l.pageY;
                if (l.preventedByNestedSwiper) return a.startX = d, void (a.startY = h);
                if (!this.allowTouchMove) return this.allowClick = !1, void (i.isTouched && (S(a, {
                    startX: d,
                    startY: h,
                    currentX: d,
                    currentY: h
                }), i.touchStartTime = x()));
                if (i.isTouchEvent && s.touchReleaseOnEdges && !s.loop) if (this.isVertical()) {
                    if (h < a.startY && this.translate <= this.maxTranslate() || h > a.startY && this.translate >= this.minTranslate()) return i.isTouched = !1, void (i.isMoved = !1)
                } else if (d < a.startX && this.translate <= this.maxTranslate() || d > a.startX && this.translate >= this.minTranslate()) return;
                if (i.isTouchEvent && t.activeElement && l.target === t.activeElement && m(l.target).is(i.formElements)) return i.isMoved = !0, void (this.allowClick = !1);
                if (i.allowTouchCallbacks && this.emit("touchMove", l), !(l.targetTouches && l.targetTouches.length > 1)) {
                    a.currentX = d, a.currentY = h;
                    var p = a.currentX - a.startX, u = a.currentY - a.startY, c;
                    if (!(this.params.threshold && Math.sqrt(Math.pow(p, 2) + Math.pow(u, 2)) < this.params.threshold)) if (void 0 === i.isScrolling && (this.isHorizontal() && a.currentY === a.startY || this.isVertical() && a.currentX === a.startX ? i.isScrolling = !1 : p * p + u * u >= 25 && (c = 180 * Math.atan2(Math.abs(u), Math.abs(p)) / Math.PI, i.isScrolling = this.isHorizontal() ? c > s.touchAngle : 90 - c > s.touchAngle)), i.isScrolling && this.emit("touchMoveOpposite", l), void 0 === i.startMoving && (a.currentX === a.startX && a.currentY === a.startY || (i.startMoving = !0)), i.isScrolling) i.isTouched = !1; else if (i.startMoving) {
                        this.allowClick = !1, !s.cssMode && l.cancelable && l.preventDefault(), s.touchMoveStopPropagation && !s.nested && l.stopPropagation(), i.isMoved || (s.loop && this.loopFix(), i.startTranslate = this.getTranslate(), this.setTransition(0), this.animating && this.$wrapperEl.trigger("webkitTransitionEnd transitionend"), i.allowMomentumBounce = !1, !s.grabCursor || !0 !== this.allowSlideNext && !0 !== this.allowSlidePrev || this.setGrabCursor(!0), this.emit("sliderFirstMove", l)), this.emit("sliderMove", l), i.isMoved = !0;
                        var v = this.isHorizontal() ? p : u;
                        a.diff = v, v *= s.touchRatio, n && (v = -v), this.swipeDirection = v > 0 ? "prev" : "next", i.currentTranslate = v + i.startTranslate;
                        var f = !0, g = s.resistanceRatio;
                        if (s.touchReleaseOnEdges && (g = 0), v > 0 && i.currentTranslate > this.minTranslate() ? (f = !1, s.resistance && (i.currentTranslate = this.minTranslate() - 1 + Math.pow(-this.minTranslate() + i.startTranslate + v, g))) : v < 0 && i.currentTranslate < this.maxTranslate() && (f = !1, s.resistance && (i.currentTranslate = this.maxTranslate() + 1 - Math.pow(this.maxTranslate() - i.startTranslate - v, g))), f && (l.preventedByNestedSwiper = !0), !this.allowSlideNext && "next" === this.swipeDirection && i.currentTranslate < i.startTranslate && (i.currentTranslate = i.startTranslate), !this.allowSlidePrev && "prev" === this.swipeDirection && i.currentTranslate > i.startTranslate && (i.currentTranslate = i.startTranslate), s.threshold > 0) {
                            if (!(Math.abs(v) > s.threshold || i.allowThresholdMove)) return void (i.currentTranslate = i.startTranslate);
                            if (!i.allowThresholdMove) return i.allowThresholdMove = !0, a.startX = a.currentX, a.startY = a.currentY, i.currentTranslate = i.startTranslate, void (a.diff = this.isHorizontal() ? a.currentX - a.startX : a.currentY - a.startY)
                        }
                        s.followFinger && !s.cssMode && ((s.freeMode || s.watchSlidesProgress || s.watchSlidesVisibility) && (this.updateActiveIndex(), this.updateSlidesClasses()), s.freeMode && (0 === i.velocities.length && i.velocities.push({
                            position: a[this.isHorizontal() ? "startX" : "startY"],
                            time: i.touchStartTime
                        }), i.velocities.push({
                            position: a[this.isHorizontal() ? "currentX" : "currentY"],
                            time: x()
                        })), this.updateProgress(i.currentTranslate), this.setTranslate(i.currentTranslate))
                    }
                }
            }
        } else i.startMoving && i.isScrolling && this.emit("touchMoveOpposite", l)
    }

    function D(e) {
        var t = this, i = t.touchEventsData, s = t.params, a = t.touches, r = t.rtlTranslate, n = t.$wrapperEl,
            l = t.slidesGrid, o = t.snapGrid, d = e;
        if (d.originalEvent && (d = d.originalEvent), i.allowTouchCallbacks && t.emit("touchEnd", d), i.allowTouchCallbacks = !1, !i.isTouched) return i.isMoved && s.grabCursor && t.setGrabCursor(!1), i.isMoved = !1, void (i.startMoving = !1);
        s.grabCursor && i.isMoved && i.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
        var h, p = x(), u = p - i.touchStartTime;
        if (t.allowClick && (t.updateClickedSlide(d), t.emit("tap click", d), u < 300 && p - i.lastClickTime < 300 && t.emit("doubleTap doubleClick", d)), i.lastClickTime = x(), E((function () {
            t.destroyed || (t.allowClick = !0)
        })), !i.isTouched || !i.isMoved || !t.swipeDirection || 0 === a.diff || i.currentTranslate === i.startTranslate) return i.isTouched = !1, i.isMoved = !1, void (i.startMoving = !1);
        if (i.isTouched = !1, i.isMoved = !1, i.startMoving = !1, h = s.followFinger ? r ? t.translate : -t.translate : -i.currentTranslate, !s.cssMode) if (s.freeMode) {
            if (h < -t.minTranslate()) return void t.slideTo(t.activeIndex);
            if (h > -t.maxTranslate()) return void (t.slides.length < o.length ? t.slideTo(o.length - 1) : t.slideTo(t.slides.length - 1));
            if (s.freeModeMomentum) {
                if (i.velocities.length > 1) {
                    var c = i.velocities.pop(), v = i.velocities.pop(), f = c.position - v.position,
                        m = c.time - v.time;
                    t.velocity = f / m, t.velocity /= 2, Math.abs(t.velocity) < s.freeModeMinimumVelocity && (t.velocity = 0), (m > 150 || x() - c.time > 300) && (t.velocity = 0)
                } else t.velocity = 0;
                t.velocity *= s.freeModeMomentumVelocityRatio, i.velocities.length = 0;
                var g = 1e3 * s.freeModeMomentumRatio, w = t.velocity * g, y = t.translate + w;
                r && (y = -y);
                var b, T, C = !1, S = 20 * Math.abs(t.velocity) * s.freeModeMomentumBounceRatio;
                if (y < t.maxTranslate()) s.freeModeMomentumBounce ? (y + t.maxTranslate() < -S && (y = t.maxTranslate() - S), b = t.maxTranslate(), C = !0, i.allowMomentumBounce = !0) : y = t.maxTranslate(), s.loop && s.centeredSlides && (T = !0); else if (y > t.minTranslate()) s.freeModeMomentumBounce ? (y - t.minTranslate() > S && (y = t.minTranslate() + S), b = t.minTranslate(), C = !0, i.allowMomentumBounce = !0) : y = t.minTranslate(), s.loop && s.centeredSlides && (T = !0); else if (s.freeModeSticky) {
                    for (var M, z = 0; z < o.length; z += 1) if (o[z] > -y) {
                        M = z;
                        break
                    }
                    y = -(y = Math.abs(o[M] - y) < Math.abs(o[M - 1] - y) || "next" === t.swipeDirection ? o[M] : o[M - 1])
                }
                if (T && t.once("transitionEnd", (function () {
                    t.loopFix()
                })), 0 !== t.velocity) {
                    if (g = r ? Math.abs((-y - t.translate) / t.velocity) : Math.abs((y - t.translate) / t.velocity), s.freeModeSticky) {
                        var P = Math.abs((r ? -y : y) - t.translate), k = t.slidesSizesGrid[t.activeIndex];
                        g = P < k ? s.speed : P < 2 * k ? 1.5 * s.speed : 2.5 * s.speed
                    }
                } else if (s.freeModeSticky) return void t.slideToClosest();
                s.freeModeMomentumBounce && C ? (t.updateProgress(b), t.setTransition(g), t.setTranslate(y), t.transitionStart(!0, t.swipeDirection), t.animating = !0, n.transitionEnd((function () {
                    t && !t.destroyed && i.allowMomentumBounce && (t.emit("momentumBounce"), t.setTransition(s.speed), setTimeout((function () {
                        t.setTranslate(b), n.transitionEnd((function () {
                            t && !t.destroyed && t.transitionEnd()
                        }))
                    }), 0))
                }))) : t.velocity ? (t.updateProgress(y), t.setTransition(g), t.setTranslate(y), t.transitionStart(!0, t.swipeDirection), t.animating || (t.animating = !0, n.transitionEnd((function () {
                    t && !t.destroyed && t.transitionEnd()
                })))) : t.updateProgress(y), t.updateActiveIndex(), t.updateSlidesClasses()
            } else if (s.freeModeSticky) return void t.slideToClosest();
            (!s.freeModeMomentum || u >= s.longSwipesMs) && (t.updateProgress(), t.updateActiveIndex(), t.updateSlidesClasses())
        } else {
            for (var $ = 0, L = t.slidesSizesGrid[0], I = 0; I < l.length; I += I < s.slidesPerGroupSkip ? 1 : s.slidesPerGroup) {
                var O = I < s.slidesPerGroupSkip - 1 ? 1 : s.slidesPerGroup;
                void 0 !== l[I + O] ? h >= l[I] && h < l[I + O] && ($ = I, L = l[I + O] - l[I]) : h >= l[I] && ($ = I, L = l[l.length - 1] - l[l.length - 2])
            }
            var A = (h - l[$]) / L, D = $ < s.slidesPerGroupSkip - 1 ? 1 : s.slidesPerGroup;
            if (u > s.longSwipesMs) {
                if (!s.longSwipes) return void t.slideTo(t.activeIndex);
                "next" === t.swipeDirection && (A >= s.longSwipesRatio ? t.slideTo($ + D) : t.slideTo($)), "prev" === t.swipeDirection && (A > 1 - s.longSwipesRatio ? t.slideTo($ + D) : t.slideTo($))
            } else {
                if (!s.shortSwipes) return void t.slideTo(t.activeIndex);
                !t.navigation || d.target !== t.navigation.nextEl && d.target !== t.navigation.prevEl ? ("next" === t.swipeDirection && t.slideTo($ + D), "prev" === t.swipeDirection && t.slideTo($)) : d.target === t.navigation.nextEl ? t.slideTo($ + D) : t.slideTo($)
            }
        }
    }

    function G() {
        var e = this.params, t = this.el;
        if (!t || 0 !== t.offsetWidth) {
            e.breakpoints && this.setBreakpoint();
            var i = this.allowSlideNext, s = this.allowSlidePrev, a = this.snapGrid;
            this.allowSlideNext = !0, this.allowSlidePrev = !0, this.updateSize(), this.updateSlides(), this.updateSlidesClasses(), ("auto" === e.slidesPerView || e.slidesPerView > 1) && this.isEnd && !this.isBeginning && !this.params.centeredSlides ? this.slideTo(this.slides.length - 1, 0, !1, !0) : this.slideTo(this.activeIndex, 0, !1, !0), this.autoplay && this.autoplay.running && this.autoplay.paused && this.autoplay.run(), this.allowSlidePrev = s, this.allowSlideNext = i, this.params.watchOverflow && a !== this.snapGrid && this.checkOverflow()
        }
    }

    function N(e) {
        this.allowClick || (this.params.preventClicks && e.preventDefault(), this.params.preventClicksPropagation && this.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
    }

    function B() {
        var e = this.wrapperEl, t = this.rtlTranslate;
        this.previousTranslate = this.translate, this.isHorizontal() ? this.translate = t ? e.scrollWidth - e.offsetWidth - e.scrollLeft : -e.scrollLeft : this.translate = -e.scrollTop, -0 === this.translate && (this.translate = 0), this.updateActiveIndex(), this.updateSlidesClasses();
        var i = this.maxTranslate() - this.minTranslate();
        (0 === i ? 0 : (this.translate - this.minTranslate()) / i) !== this.progress && this.updateProgress(t ? -this.translate : this.translate), this.emit("setTranslate", this.translate, !1)
    }

    var H = !1;

    function X() {
    }

    var Y = {
        init: !0,
        direction: "horizontal",
        touchEventsTarget: "container",
        initialSlide: 0,
        speed: 300,
        cssMode: !1,
        updateOnWindowResize: !0,
        nested: !1,
        width: null,
        height: null,
        preventInteractionOnTransition: !1,
        userAgent: null,
        url: null,
        edgeSwipeDetection: !1,
        edgeSwipeThreshold: 20,
        freeMode: !1,
        freeModeMomentum: !0,
        freeModeMomentumRatio: 1,
        freeModeMomentumBounce: !0,
        freeModeMomentumBounceRatio: 1,
        freeModeMomentumVelocityRatio: 1,
        freeModeSticky: !1,
        freeModeMinimumVelocity: .02,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        breakpoints: void 0,
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerColumn: 1,
        slidesPerColumnFill: "column",
        slidesPerGroup: 1,
        slidesPerGroupSkip: 0,
        centeredSlides: !1,
        centeredSlidesBounds: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        normalizeSlideIndex: !0,
        centerInsufficientSlides: !1,
        watchOverflow: !1,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: .5,
        longSwipesMs: 300,
        followFinger: !0,
        allowTouchMove: !0,
        threshold: 0,
        touchMoveStopPropagation: !1,
        touchStartPreventDefault: !0,
        touchStartForcePreventDefault: !1,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        resistance: !0,
        resistanceRatio: .85,
        watchSlidesProgress: !1,
        watchSlidesVisibility: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        preloadImages: !0,
        updateOnImagesReady: !0,
        loop: !1,
        loopAdditionalSlides: 0,
        loopedSlides: null,
        loopFillGroupWithBlank: !1,
        loopPreventsSlide: !0,
        allowSlidePrev: !0,
        allowSlideNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        noSwipingSelector: null,
        passiveListeners: !0,
        containerModifierClass: "swiper-container-",
        slideClass: "swiper-slide",
        slideBlankClass: "swiper-slide-invisible-blank",
        slideActiveClass: "swiper-slide-active",
        slideDuplicateActiveClass: "swiper-slide-duplicate-active",
        slideVisibleClass: "swiper-slide-visible",
        slideDuplicateClass: "swiper-slide-duplicate",
        slideNextClass: "swiper-slide-next",
        slideDuplicateNextClass: "swiper-slide-duplicate-next",
        slidePrevClass: "swiper-slide-prev",
        slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
        wrapperClass: "swiper-wrapper",
        runCallbacksOnInit: !0,
        _emitClasses: !1
    }, V = {
        modular: {
            useParams: function (e) {
                var t = this;
                t.modules && Object.keys(t.modules).forEach((function (i) {
                    var s = t.modules[i];
                    s.params && S(e, s.params)
                }))
            }, useModules: function (e) {
                void 0 === e && (e = {});
                var t = this;
                t.modules && Object.keys(t.modules).forEach((function (i) {
                    var s = t.modules[i], a = e[i] || {};
                    s.on && t.on && Object.keys(s.on).forEach((function (e) {
                        t.on(e, s.on[e])
                    })), s.create && s.create.bind(t)(a)
                }))
            }
        }, eventsEmitter: {
            on: function (e, t, i) {
                var s = this;
                if ("function" != typeof t) return s;
                var a = i ? "unshift" : "push";
                return e.split(" ").forEach((function (e) {
                    s.eventsListeners[e] || (s.eventsListeners[e] = []), s.eventsListeners[e][a](t)
                })), s
            }, once: function (e, t, i) {
                var s = this;
                if ("function" != typeof t) return s;

                function a() {
                    s.off(e, a), a.__emitterProxy && delete a.__emitterProxy;
                    for (var i = arguments.length, r = new Array(i), n = 0; n < i; n++) r[n] = arguments[n];
                    t.apply(s, r)
                }

                return a.__emitterProxy = t, s.on(e, a, i)
            }, onAny: function (e, t) {
                if ("function" != typeof e) return this;
                var i = t ? "unshift" : "push";
                return this.eventsAnyListeners.indexOf(e) < 0 && this.eventsAnyListeners[i](e), this
            }, offAny: function (e) {
                if (!this.eventsAnyListeners) return this;
                var t = this.eventsAnyListeners.indexOf(e);
                return t >= 0 && this.eventsAnyListeners.splice(t, 1), this
            }, off: function (e, t) {
                var i = this;
                return i.eventsListeners ? (e.split(" ").forEach((function (e) {
                    void 0 === t ? i.eventsListeners[e] = [] : i.eventsListeners[e] && i.eventsListeners[e].forEach((function (s, a) {
                        (s === t || s.__emitterProxy && s.__emitterProxy === t) && i.eventsListeners[e].splice(a, 1)
                    }))
                })), i) : i
            }, emit: function () {
                var e, t, i, s = this;
                if (!s.eventsListeners) return s;
                for (var a = arguments.length, r = new Array(a), n = 0; n < a; n++) r[n] = arguments[n];
                "string" == typeof r[0] || Array.isArray(r[0]) ? (e = r[0], t = r.slice(1, r.length), i = s) : (e = r[0].events, t = r[0].data, i = r[0].context || s), t.unshift(i);
                var l = Array.isArray(e) ? e : e.split(" ");
                return l.forEach((function (e) {
                    if (s.eventsAnyListeners && s.eventsAnyListeners.length && s.eventsAnyListeners.forEach((function (s) {
                        s.apply(i, [e].concat(t))
                    })), s.eventsListeners && s.eventsListeners[e]) {
                        var a = [];
                        s.eventsListeners[e].forEach((function (e) {
                            a.push(e)
                        })), a.forEach((function (e) {
                            e.apply(i, t)
                        }))
                    }
                })), s
            }
        }, update: {
            updateSize: function () {
                var e, t, i = this.$el;
                e = void 0 !== this.params.width && null !== this.params.width ? this.params.width : i[0].clientWidth, t = void 0 !== this.params.height && null !== this.params.width ? this.params.height : i[0].clientHeight, 0 === e && this.isHorizontal() || 0 === t && this.isVertical() || (e = e - parseInt(i.css("padding-left") || 0, 10) - parseInt(i.css("padding-right") || 0, 10), t = t - parseInt(i.css("padding-top") || 0, 10) - parseInt(i.css("padding-bottom") || 0, 10), Number.isNaN(e) && (e = 0), Number.isNaN(t) && (t = 0), S(this, {
                    width: e,
                    height: t,
                    size: this.isHorizontal() ? e : t
                }))
            }, updateSlides: function () {
                var e = l(), t = this.params, i = this.$wrapperEl, s = this.size, a = this.rtlTranslate,
                    r = this.wrongRTL, n = this.virtual && t.virtual.enabled,
                    o = n ? this.virtual.slides.length : this.slides.length,
                    d = i.children("." + this.params.slideClass), h = n ? this.virtual.slides.length : d.length, p = [],
                    u = [], c = [];

                function v(e, i) {
                    return !t.cssMode || i !== d.length - 1
                }

                var f = t.slidesOffsetBefore;
                "function" == typeof f && (f = t.slidesOffsetBefore.call(this));
                var m = t.slidesOffsetAfter;
                "function" == typeof m && (m = t.slidesOffsetAfter.call(this));
                var g = this.snapGrid.length, w = this.snapGrid.length, y = t.spaceBetween, b = -f, E = 0, x = 0;
                if (void 0 !== s) {
                    var T, C;
                    "string" == typeof y && y.indexOf("%") >= 0 && (y = parseFloat(y.replace("%", "")) / 100 * s), this.virtualSize = -y, a ? d.css({
                        marginLeft: "",
                        marginTop: ""
                    }) : d.css({
                        marginRight: "",
                        marginBottom: ""
                    }), t.slidesPerColumn > 1 && (T = Math.floor(h / t.slidesPerColumn) === h / this.params.slidesPerColumn ? h : Math.ceil(h / t.slidesPerColumn) * t.slidesPerColumn, "auto" !== t.slidesPerView && "row" === t.slidesPerColumnFill && (T = Math.max(T, t.slidesPerView * t.slidesPerColumn)));
                    for (var M, z = t.slidesPerColumn, P = T / z, k = Math.floor(h / t.slidesPerColumn), $ = 0; $ < h; $ += 1) {
                        C = 0;
                        var L = d.eq($);
                        if (t.slidesPerColumn > 1) {
                            var I = void 0, O = void 0, A = void 0;
                            if ("row" === t.slidesPerColumnFill && t.slidesPerGroup > 1) {
                                var D = Math.floor($ / (t.slidesPerGroup * t.slidesPerColumn)),
                                    G = $ - t.slidesPerColumn * t.slidesPerGroup * D,
                                    N = 0 === D ? t.slidesPerGroup : Math.min(Math.ceil((h - D * z * t.slidesPerGroup) / z), t.slidesPerGroup);
                                I = (O = G - (A = Math.floor(G / N)) * N + D * t.slidesPerGroup) + A * T / z, L.css({
                                    "-webkit-box-ordinal-group": I,
                                    "-moz-box-ordinal-group": I,
                                    "-ms-flex-order": I,
                                    "-webkit-order": I,
                                    order: I
                                })
                            } else "column" === t.slidesPerColumnFill ? (A = $ - (O = Math.floor($ / z)) * z, (O > k || O === k && A === z - 1) && (A += 1) >= z && (A = 0, O += 1)) : O = $ - (A = Math.floor($ / P)) * P;
                            L.css("margin-" + (this.isHorizontal() ? "top" : "left"), 0 !== A && t.spaceBetween && t.spaceBetween + "px")
                        }
                        if ("none" !== L.css("display")) {
                            if ("auto" === t.slidesPerView) {
                                var B = e.getComputedStyle(L[0], null), H = L[0].style.transform,
                                    X = L[0].style.webkitTransform;
                                if (H && (L[0].style.transform = "none"), X && (L[0].style.webkitTransform = "none"), t.roundLengths) C = this.isHorizontal() ? L.outerWidth(!0) : L.outerHeight(!0); else if (this.isHorizontal()) {
                                    var Y = parseFloat(B.getPropertyValue("width") || 0),
                                        V = parseFloat(B.getPropertyValue("padding-left") || 0),
                                        F = parseFloat(B.getPropertyValue("padding-right") || 0),
                                        R = parseFloat(B.getPropertyValue("margin-left") || 0),
                                        W = parseFloat(B.getPropertyValue("margin-right") || 0),
                                        q = B.getPropertyValue("box-sizing");
                                    if (q && "border-box" === q) C = Y + R + W; else {
                                        var j = L[0], _ = j.clientWidth;
                                        C = Y + V + F + R + W + (j.offsetWidth - _)
                                    }
                                } else {
                                    var U = parseFloat(B.getPropertyValue("height") || 0),
                                        K = parseFloat(B.getPropertyValue("padding-top") || 0),
                                        Z = parseFloat(B.getPropertyValue("padding-bottom") || 0),
                                        J = parseFloat(B.getPropertyValue("margin-top") || 0),
                                        Q = parseFloat(B.getPropertyValue("margin-bottom") || 0),
                                        ee = B.getPropertyValue("box-sizing");
                                    if (ee && "border-box" === ee) C = U + J + Q; else {
                                        var te = L[0], ie = te.clientHeight;
                                        C = U + K + Z + J + Q + (te.offsetHeight - ie)
                                    }
                                }
                                H && (L[0].style.transform = H), X && (L[0].style.webkitTransform = X), t.roundLengths && (C = Math.floor(C))
                            } else C = (s - (t.slidesPerView - 1) * y) / t.slidesPerView, t.roundLengths && (C = Math.floor(C)), d[$] && (this.isHorizontal() ? d[$].style.width = C + "px" : d[$].style.height = C + "px");
                            d[$] && (d[$].swiperSlideSize = C), c.push(C), t.centeredSlides ? (b = b + C / 2 + E / 2 + y, 0 === E && 0 !== $ && (b = b - s / 2 - y), 0 === $ && (b = b - s / 2 - y), Math.abs(b) < .001 && (b = 0), t.roundLengths && (b = Math.floor(b)), x % t.slidesPerGroup == 0 && p.push(b), u.push(b)) : (t.roundLengths && (b = Math.floor(b)), (x - Math.min(this.params.slidesPerGroupSkip, x)) % this.params.slidesPerGroup == 0 && p.push(b), u.push(b), b = b + C + y), this.virtualSize += C + y, E = C, x += 1
                        }
                    }
                    if (this.virtualSize = Math.max(this.virtualSize, s) + m, a && r && ("slide" === t.effect || "coverflow" === t.effect) && i.css({width: this.virtualSize + t.spaceBetween + "px"}), t.setWrapperSize && (this.isHorizontal() ? i.css({width: this.virtualSize + t.spaceBetween + "px"}) : i.css({height: this.virtualSize + t.spaceBetween + "px"})), t.slidesPerColumn > 1 && (this.virtualSize = (C + t.spaceBetween) * T, this.virtualSize = Math.ceil(this.virtualSize / t.slidesPerColumn) - t.spaceBetween, this.isHorizontal() ? i.css({width: this.virtualSize + t.spaceBetween + "px"}) : i.css({height: this.virtualSize + t.spaceBetween + "px"}), t.centeredSlides)) {
                        M = [];
                        for (var se = 0; se < p.length; se += 1) {
                            var ae = p[se];
                            t.roundLengths && (ae = Math.floor(ae)), p[se] < this.virtualSize + p[0] && M.push(ae)
                        }
                        p = M
                    }
                    if (!t.centeredSlides) {
                        M = [];
                        for (var re = 0; re < p.length; re += 1) {
                            var ne = p[re];
                            t.roundLengths && (ne = Math.floor(ne)), p[re] <= this.virtualSize - s && M.push(ne)
                        }
                        p = M, Math.floor(this.virtualSize - s) - Math.floor(p[p.length - 1]) > 1 && p.push(this.virtualSize - s)
                    }
                    if (0 === p.length && (p = [0]), 0 !== t.spaceBetween && (this.isHorizontal() ? a ? d.filter(v).css({marginLeft: y + "px"}) : d.filter(v).css({marginRight: y + "px"}) : d.filter(v).css({marginBottom: y + "px"})), t.centeredSlides && t.centeredSlidesBounds) {
                        var le = 0;
                        c.forEach((function (e) {
                            le += e + (t.spaceBetween ? t.spaceBetween : 0)
                        }));
                        var oe = (le -= t.spaceBetween) - s;
                        p = p.map((function (e) {
                            return e < 0 ? -f : e > oe ? oe + m : e
                        }))
                    }
                    if (t.centerInsufficientSlides) {
                        var de = 0;
                        if (c.forEach((function (e) {
                            de += e + (t.spaceBetween ? t.spaceBetween : 0)
                        })), (de -= t.spaceBetween) < s) {
                            var he = (s - de) / 2;
                            p.forEach((function (e, t) {
                                p[t] = e - he
                            })), u.forEach((function (e, t) {
                                u[t] = e + he
                            }))
                        }
                    }
                    S(this, {
                        slides: d,
                        snapGrid: p,
                        slidesGrid: u,
                        slidesSizesGrid: c
                    }), h !== o && this.emit("slidesLengthChange"), p.length !== g && (this.params.watchOverflow && this.checkOverflow(), this.emit("snapGridLengthChange")), u.length !== w && this.emit("slidesGridLengthChange"), (t.watchSlidesProgress || t.watchSlidesVisibility) && this.updateSlidesOffset()
                }
            }, updateAutoHeight: function (e) {
                var t, i = [], s = 0;
                if ("number" == typeof e ? this.setTransition(e) : !0 === e && this.setTransition(this.params.speed), "auto" !== this.params.slidesPerView && this.params.slidesPerView > 1) if (this.params.centeredSlides) this.visibleSlides.each((function (e) {
                    i.push(e)
                })); else for (t = 0; t < Math.ceil(this.params.slidesPerView); t += 1) {
                    var a = this.activeIndex + t;
                    if (a > this.slides.length) break;
                    i.push(this.slides.eq(a)[0])
                } else i.push(this.slides.eq(this.activeIndex)[0]);
                for (t = 0; t < i.length; t += 1) if (void 0 !== i[t]) {
                    var r = i[t].offsetHeight;
                    s = r > s ? r : s
                }
                s && this.$wrapperEl.css("height", s + "px")
            }, updateSlidesOffset: function () {
                for (var e = this.slides, t = 0; t < e.length; t += 1) e[t].swiperSlideOffset = this.isHorizontal() ? e[t].offsetLeft : e[t].offsetTop
            }, updateSlidesProgress: function (e) {
                void 0 === e && (e = this && this.translate || 0);
                var t = this.params, i = this.slides, s = this.rtlTranslate;
                if (0 !== i.length) {
                    void 0 === i[0].swiperSlideOffset && this.updateSlidesOffset();
                    var a = -e;
                    s && (a = e), i.removeClass(t.slideVisibleClass), this.visibleSlidesIndexes = [], this.visibleSlides = [];
                    for (var r = 0; r < i.length; r += 1) {
                        var n = i[r],
                            l = (a + (t.centeredSlides ? this.minTranslate() : 0) - n.swiperSlideOffset) / (n.swiperSlideSize + t.spaceBetween);
                        if (t.watchSlidesVisibility || t.centeredSlides && t.autoHeight) {
                            var o = -(a - n.swiperSlideOffset), d = o + this.slidesSizesGrid[r];
                            (o >= 0 && o < this.size - 1 || d > 1 && d <= this.size || o <= 0 && d >= this.size) && (this.visibleSlides.push(n), this.visibleSlidesIndexes.push(r), i.eq(r).addClass(t.slideVisibleClass))
                        }
                        n.progress = s ? -l : l
                    }
                    this.visibleSlides = m(this.visibleSlides)
                }
            }, updateProgress: function (e) {
                if (void 0 === e) {
                    var t = this.rtlTranslate ? -1 : 1;
                    e = this && this.translate && this.translate * t || 0
                }
                var i = this.params, s = this.maxTranslate() - this.minTranslate(), a = this.progress,
                    r = this.isBeginning, n = this.isEnd, l = r, o = n;
                0 === s ? (a = 0, r = !0, n = !0) : (r = (a = (e - this.minTranslate()) / s) <= 0, n = a >= 1), S(this, {
                    progress: a,
                    isBeginning: r,
                    isEnd: n
                }), (i.watchSlidesProgress || i.watchSlidesVisibility || i.centeredSlides && i.autoHeight) && this.updateSlidesProgress(e), r && !l && this.emit("reachBeginning toEdge"), n && !o && this.emit("reachEnd toEdge"), (l && !r || o && !n) && this.emit("fromEdge"), this.emit("progress", a)
            }, updateSlidesClasses: function () {
                var e, t = this.slides, i = this.params, s = this.$wrapperEl, a = this.activeIndex, r = this.realIndex,
                    n = this.virtual && i.virtual.enabled;
                t.removeClass(i.slideActiveClass + " " + i.slideNextClass + " " + i.slidePrevClass + " " + i.slideDuplicateActiveClass + " " + i.slideDuplicateNextClass + " " + i.slideDuplicatePrevClass), (e = n ? this.$wrapperEl.find("." + i.slideClass + '[data-swiper-slide-index="' + a + '"]') : t.eq(a)).addClass(i.slideActiveClass), i.loop && (e.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + r + '"]').addClass(i.slideDuplicateActiveClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + r + '"]').addClass(i.slideDuplicateActiveClass));
                var l = e.nextAll("." + i.slideClass).eq(0).addClass(i.slideNextClass);
                i.loop && 0 === l.length && (l = t.eq(0)).addClass(i.slideNextClass);
                var o = e.prevAll("." + i.slideClass).eq(0).addClass(i.slidePrevClass);
                i.loop && 0 === o.length && (o = t.eq(-1)).addClass(i.slidePrevClass), i.loop && (l.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass), o.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass)), this.emitSlidesClasses()
            }, updateActiveIndex: function (e) {
                var t, i = this.rtlTranslate ? this.translate : -this.translate, s = this.slidesGrid, a = this.snapGrid,
                    r = this.params, n = this.activeIndex, l = this.realIndex, o = this.snapIndex, d = e;
                if (void 0 === d) {
                    for (var h = 0; h < s.length; h += 1) void 0 !== s[h + 1] ? i >= s[h] && i < s[h + 1] - (s[h + 1] - s[h]) / 2 ? d = h : i >= s[h] && i < s[h + 1] && (d = h + 1) : i >= s[h] && (d = h);
                    r.normalizeSlideIndex && (d < 0 || void 0 === d) && (d = 0)
                }
                if (a.indexOf(i) >= 0) t = a.indexOf(i); else {
                    var p = Math.min(r.slidesPerGroupSkip, d);
                    t = p + Math.floor((d - p) / r.slidesPerGroup)
                }
                if (t >= a.length && (t = a.length - 1), d !== n) {
                    var u = parseInt(this.slides.eq(d).attr("data-swiper-slide-index") || d, 10);
                    S(this, {
                        snapIndex: t,
                        realIndex: u,
                        previousIndex: n,
                        activeIndex: d
                    }), this.emit("activeIndexChange"), this.emit("snapIndexChange"), l !== u && this.emit("realIndexChange"), (this.initialized || this.params.runCallbacksOnInit) && this.emit("slideChange")
                } else t !== o && (this.snapIndex = t, this.emit("snapIndexChange"))
            }, updateClickedSlide: function (e) {
                var t = this.params, i = m(e.target).closest("." + t.slideClass)[0], s = !1;
                if (i) for (var a = 0; a < this.slides.length; a += 1) this.slides[a] === i && (s = !0);
                if (!i || !s) return this.clickedSlide = void 0, void (this.clickedIndex = void 0);
                this.clickedSlide = i, this.virtual && this.params.virtual.enabled ? this.clickedIndex = parseInt(m(i).attr("data-swiper-slide-index"), 10) : this.clickedIndex = m(i).index(), t.slideToClickedSlide && void 0 !== this.clickedIndex && this.clickedIndex !== this.activeIndex && this.slideToClickedSlide()
            }
        }, translate: {
            getTranslate: function (e) {
                void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                var t = this.params, i = this.rtlTranslate, s = this.translate, a = this.$wrapperEl;
                if (t.virtualTranslate) return i ? -s : s;
                if (t.cssMode) return s;
                var r = T(a[0], e);
                return i && (r = -r), r || 0
            }, setTranslate: function (e, t) {
                var i = this.rtlTranslate, s = this.params, a = this.$wrapperEl, r = this.wrapperEl, n = this.progress,
                    l = 0, o = 0;
                this.isHorizontal() ? l = i ? -e : e : o = e, s.roundLengths && (l = Math.floor(l), o = Math.floor(o)), s.cssMode ? r[this.isHorizontal() ? "scrollLeft" : "scrollTop"] = this.isHorizontal() ? -l : -o : s.virtualTranslate || a.transform("translate3d(" + l + "px, " + o + "px, 0px)"), this.previousTranslate = this.translate, this.translate = this.isHorizontal() ? l : o;
                var d = this.maxTranslate() - this.minTranslate();
                (0 === d ? 0 : (e - this.minTranslate()) / d) !== n && this.updateProgress(e), this.emit("setTranslate", this.translate, t)
            }, minTranslate: function () {
                return -this.snapGrid[0]
            }, maxTranslate: function () {
                return -this.snapGrid[this.snapGrid.length - 1]
            }, translateTo: function (e, t, i, s, a) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0), void 0 === s && (s = !0);
                var r = this, n = r.params, l = r.wrapperEl;
                if (r.animating && n.preventInteractionOnTransition) return !1;
                var o, d = r.minTranslate(), h = r.maxTranslate();
                if (o = s && e > d ? d : s && e < h ? h : e, r.updateProgress(o), n.cssMode) {
                    var p, u = r.isHorizontal();
                    return 0 === t ? l[u ? "scrollLeft" : "scrollTop"] = -o : l.scrollTo ? l.scrollTo(((p = {})[u ? "left" : "top"] = -o, p.behavior = "smooth", p)) : l[u ? "scrollLeft" : "scrollTop"] = -o, !0
                }
                return 0 === t ? (r.setTransition(0), r.setTranslate(o), i && (r.emit("beforeTransitionStart", t, a), r.emit("transitionEnd"))) : (r.setTransition(t), r.setTranslate(o), i && (r.emit("beforeTransitionStart", t, a), r.emit("transitionStart")), r.animating || (r.animating = !0, r.onTranslateToWrapperTransitionEnd || (r.onTranslateToWrapperTransitionEnd = function (e) {
                    r && !r.destroyed && e.target === this && (r.$wrapperEl[0].removeEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].removeEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd), r.onTranslateToWrapperTransitionEnd = null, delete r.onTranslateToWrapperTransitionEnd, i && r.emit("transitionEnd"))
                }), r.$wrapperEl[0].addEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].addEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd))), !0
            }
        }, transition: {
            setTransition: function (e, t) {
                this.params.cssMode || this.$wrapperEl.transition(e), this.emit("setTransition", e, t)
            }, transitionStart: function (e, t) {
                void 0 === e && (e = !0);
                var i = this.activeIndex, s = this.params, a = this.previousIndex;
                if (!s.cssMode) {
                    s.autoHeight && this.updateAutoHeight();
                    var r = t;
                    if (r || (r = i > a ? "next" : i < a ? "prev" : "reset"), this.emit("transitionStart"), e && i !== a) {
                        if ("reset" === r) return void this.emit("slideResetTransitionStart");
                        this.emit("slideChangeTransitionStart"), "next" === r ? this.emit("slideNextTransitionStart") : this.emit("slidePrevTransitionStart")
                    }
                }
            }, transitionEnd: function (e, t) {
                void 0 === e && (e = !0);
                var i = this.activeIndex, s = this.previousIndex, a = this.params;
                if (this.animating = !1, !a.cssMode) {
                    this.setTransition(0);
                    var r = t;
                    if (r || (r = i > s ? "next" : i < s ? "prev" : "reset"), this.emit("transitionEnd"), e && i !== s) {
                        if ("reset" === r) return void this.emit("slideResetTransitionEnd");
                        this.emit("slideChangeTransitionEnd"), "next" === r ? this.emit("slideNextTransitionEnd") : this.emit("slidePrevTransitionEnd")
                    }
                }
            }
        }, slide: {
            slideTo: function (e, t, i, s) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0);
                var a = this, r = e;
                r < 0 && (r = 0);
                var n = a.params, l = a.snapGrid, o = a.slidesGrid, d = a.previousIndex, h = a.activeIndex,
                    p = a.rtlTranslate, u = a.wrapperEl;
                if (a.animating && n.preventInteractionOnTransition) return !1;
                var c = Math.min(a.params.slidesPerGroupSkip, r), v = c + Math.floor((r - c) / a.params.slidesPerGroup);
                v >= l.length && (v = l.length - 1), (h || n.initialSlide || 0) === (d || 0) && i && a.emit("beforeSlideChangeStart");
                var f, m = -l[v];
                if (a.updateProgress(m), n.normalizeSlideIndex) for (var g = 0; g < o.length; g += 1) -Math.floor(100 * m) >= Math.floor(100 * o[g]) && (r = g);
                if (a.initialized && r !== h) {
                    if (!a.allowSlideNext && m < a.translate && m < a.minTranslate()) return !1;
                    if (!a.allowSlidePrev && m > a.translate && m > a.maxTranslate() && (h || 0) !== r) return !1
                }
                if (f = r > h ? "next" : r < h ? "prev" : "reset", p && -m === a.translate || !p && m === a.translate) return a.updateActiveIndex(r), n.autoHeight && a.updateAutoHeight(), a.updateSlidesClasses(), "slide" !== n.effect && a.setTranslate(m), "reset" !== f && (a.transitionStart(i, f), a.transitionEnd(i, f)), !1;
                if (n.cssMode) {
                    var w, y = a.isHorizontal(), b = -m;
                    return p && (b = u.scrollWidth - u.offsetWidth - b), 0 === t ? u[y ? "scrollLeft" : "scrollTop"] = b : u.scrollTo ? u.scrollTo(((w = {})[y ? "left" : "top"] = b, w.behavior = "smooth", w)) : u[y ? "scrollLeft" : "scrollTop"] = b, !0
                }
                return 0 === t ? (a.setTransition(0), a.setTranslate(m), a.updateActiveIndex(r), a.updateSlidesClasses(), a.emit("beforeTransitionStart", t, s), a.transitionStart(i, f), a.transitionEnd(i, f)) : (a.setTransition(t), a.setTranslate(m), a.updateActiveIndex(r), a.updateSlidesClasses(), a.emit("beforeTransitionStart", t, s), a.transitionStart(i, f), a.animating || (a.animating = !0, a.onSlideToWrapperTransitionEnd || (a.onSlideToWrapperTransitionEnd = function (e) {
                    a && !a.destroyed && e.target === this && (a.$wrapperEl[0].removeEventListener("transitionend", a.onSlideToWrapperTransitionEnd), a.$wrapperEl[0].removeEventListener("webkitTransitionEnd", a.onSlideToWrapperTransitionEnd), a.onSlideToWrapperTransitionEnd = null, delete a.onSlideToWrapperTransitionEnd, a.transitionEnd(i, f))
                }), a.$wrapperEl[0].addEventListener("transitionend", a.onSlideToWrapperTransitionEnd), a.$wrapperEl[0].addEventListener("webkitTransitionEnd", a.onSlideToWrapperTransitionEnd))), !0
            }, slideToLoop: function (e, t, i, s) {
                void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0);
                var a = e;
                return this.params.loop && (a += this.loopedSlides), this.slideTo(a, t, i, s)
            }, slideNext: function (e, t, i) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var s = this.params, a = this.animating,
                    r = this.activeIndex < s.slidesPerGroupSkip ? 1 : s.slidesPerGroup;
                if (s.loop) {
                    if (a && s.loopPreventsSlide) return !1;
                    this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft
                }
                return this.slideTo(this.activeIndex + r, e, t, i)
            }, slidePrev: function (e, t, i) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                var s = this.params, a = this.animating, r = this.snapGrid, n = this.slidesGrid, l = this.rtlTranslate;
                if (s.loop) {
                    if (a && s.loopPreventsSlide) return !1;
                    this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft
                }

                function o(e) {
                    return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e)
                }

                var d, h = o(l ? this.translate : -this.translate), p = r.map((function (e) {
                    return o(e)
                })), u = (r[p.indexOf(h)], r[p.indexOf(h) - 1]);
                return void 0 === u && s.cssMode && r.forEach((function (e) {
                    !u && h >= e && (u = e)
                })), void 0 !== u && (d = n.indexOf(u)) < 0 && (d = this.activeIndex - 1), this.slideTo(d, e, t, i)
            }, slideReset: function (e, t, i) {
                return void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), this.slideTo(this.activeIndex, e, t, i)
            }, slideToClosest: function (e, t, i, s) {
                void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), void 0 === s && (s = .5);
                var a = this.activeIndex, r = Math.min(this.params.slidesPerGroupSkip, a),
                    n = r + Math.floor((a - r) / this.params.slidesPerGroup),
                    l = this.rtlTranslate ? this.translate : -this.translate;
                if (l >= this.snapGrid[n]) {
                    var o = this.snapGrid[n];
                    l - o > (this.snapGrid[n + 1] - o) * s && (a += this.params.slidesPerGroup)
                } else {
                    var d = this.snapGrid[n - 1];
                    l - d <= (this.snapGrid[n] - d) * s && (a -= this.params.slidesPerGroup)
                }
                return a = Math.max(a, 0), a = Math.min(a, this.slidesGrid.length - 1), this.slideTo(a, e, t, i)
            }, slideToClickedSlide: function () {
                var e, t = this, i = t.params, s = t.$wrapperEl,
                    a = "auto" === i.slidesPerView ? t.slidesPerViewDynamic() : i.slidesPerView, r = t.clickedIndex;
                if (i.loop) {
                    if (t.animating) return;
                    e = parseInt(m(t.clickedSlide).attr("data-swiper-slide-index"), 10), i.centeredSlides ? r < t.loopedSlides - a / 2 || r > t.slides.length - t.loopedSlides + a / 2 ? (t.loopFix(), r = s.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), E((function () {
                        t.slideTo(r)
                    }))) : t.slideTo(r) : r > t.slides.length - a ? (t.loopFix(), r = s.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), E((function () {
                        t.slideTo(r)
                    }))) : t.slideTo(r)
                } else t.slideTo(r)
            }
        }, loop: {
            loopCreate: function () {
                var e = this, t = r(), i = e.params, s = e.$wrapperEl;
                s.children("." + i.slideClass + "." + i.slideDuplicateClass).remove();
                var a = s.children("." + i.slideClass);
                if (i.loopFillGroupWithBlank) {
                    var n = i.slidesPerGroup - a.length % i.slidesPerGroup;
                    if (n !== i.slidesPerGroup) {
                        for (var l = 0; l < n; l += 1) {
                            var o = m(t.createElement("div")).addClass(i.slideClass + " " + i.slideBlankClass);
                            s.append(o)
                        }
                        a = s.children("." + i.slideClass)
                    }
                }
                "auto" !== i.slidesPerView || i.loopedSlides || (i.loopedSlides = a.length), e.loopedSlides = Math.ceil(parseFloat(i.loopedSlides || i.slidesPerView, 10)), e.loopedSlides += i.loopAdditionalSlides, e.loopedSlides > a.length && (e.loopedSlides = a.length);
                var d = [], h = [];
                a.each((function (t, i) {
                    var s = m(t);
                    i < e.loopedSlides && h.push(t), i < a.length && i >= a.length - e.loopedSlides && d.push(t), s.attr("data-swiper-slide-index", i)
                }));
                for (var p = 0; p < h.length; p += 1) s.append(m(h[p].cloneNode(!0)).addClass(i.slideDuplicateClass));
                for (var u = d.length - 1; u >= 0; u -= 1) s.prepend(m(d[u].cloneNode(!0)).addClass(i.slideDuplicateClass))
            }, loopFix: function () {
                this.emit("beforeLoopFix");
                var e, t = this.activeIndex, i = this.slides, s = this.loopedSlides, a = this.allowSlidePrev,
                    r = this.allowSlideNext, n = this.snapGrid, l = this.rtlTranslate;
                this.allowSlidePrev = !0, this.allowSlideNext = !0;
                var o = -n[t] - this.getTranslate();
                t < s ? (e = i.length - 3 * s + t, e += s, this.slideTo(e, 0, !1, !0) && 0 !== o && this.setTranslate((l ? -this.translate : this.translate) - o)) : t >= i.length - s && (e = -i.length + t + s, e += s, this.slideTo(e, 0, !1, !0) && 0 !== o && this.setTranslate((l ? -this.translate : this.translate) - o)), this.allowSlidePrev = a, this.allowSlideNext = r, this.emit("loopFix")
            }, loopDestroy: function () {
                var e = this.$wrapperEl, t = this.params, i = this.slides;
                e.children("." + t.slideClass + "." + t.slideDuplicateClass + ",." + t.slideClass + "." + t.slideBlankClass).remove(), i.removeAttr("data-swiper-slide-index")
            }
        }, grabCursor: {
            setGrabCursor: function (e) {
                if (!(this.support.touch || !this.params.simulateTouch || this.params.watchOverflow && this.isLocked || this.params.cssMode)) {
                    var t = this.el;
                    t.style.cursor = "move", t.style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", t.style.cursor = e ? "-moz-grabbin" : "-moz-grab", t.style.cursor = e ? "grabbing" : "grab"
                }
            }, unsetGrabCursor: function () {
                this.support.touch || this.params.watchOverflow && this.isLocked || this.params.cssMode || (this.el.style.cursor = "")
            }
        }, manipulation: {
            appendSlide: function (e) {
                var t = this.$wrapperEl, i = this.params;
                if (i.loop && this.loopDestroy(), "object" == typeof e && "length" in e) for (var s = 0; s < e.length; s += 1) e[s] && t.append(e[s]); else t.append(e);
                i.loop && this.loopCreate(), i.observer && this.support.observer || this.update()
            }, prependSlide: function (e) {
                var t = this.params, i = this.$wrapperEl, s = this.activeIndex;
                t.loop && this.loopDestroy();
                var a = s + 1;
                if ("object" == typeof e && "length" in e) {
                    for (var r = 0; r < e.length; r += 1) e[r] && i.prepend(e[r]);
                    a = s + e.length
                } else i.prepend(e);
                t.loop && this.loopCreate(), t.observer && this.support.observer || this.update(), this.slideTo(a, 0, !1)
            }, addSlide: function (e, t) {
                var i = this.$wrapperEl, s = this.params, a = this.activeIndex;
                s.loop && (a -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + s.slideClass));
                var r = this.slides.length;
                if (e <= 0) this.prependSlide(t); else if (e >= r) this.appendSlide(t); else {
                    for (var n = a > e ? a + 1 : a, l = [], o = r - 1; o >= e; o -= 1) {
                        var d = this.slides.eq(o);
                        d.remove(), l.unshift(d)
                    }
                    if ("object" == typeof t && "length" in t) {
                        for (var h = 0; h < t.length; h += 1) t[h] && i.append(t[h]);
                        n = a > e ? a + t.length : a
                    } else i.append(t);
                    for (var p = 0; p < l.length; p += 1) i.append(l[p]);
                    s.loop && this.loopCreate(), s.observer && this.support.observer || this.update(), s.loop ? this.slideTo(n + this.loopedSlides, 0, !1) : this.slideTo(n, 0, !1)
                }
            }, removeSlide: function (e) {
                var t = this.params, i = this.$wrapperEl, s = this.activeIndex;
                t.loop && (s -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + t.slideClass));
                var a, r = s;
                if ("object" == typeof e && "length" in e) {
                    for (var n = 0; n < e.length; n += 1) a = e[n], this.slides[a] && this.slides.eq(a).remove(), a < r && (r -= 1);
                    r = Math.max(r, 0)
                } else a = e, this.slides[a] && this.slides.eq(a).remove(), a < r && (r -= 1), r = Math.max(r, 0);
                t.loop && this.loopCreate(), t.observer && this.support.observer || this.update(), t.loop ? this.slideTo(r + this.loopedSlides, 0, !1) : this.slideTo(r, 0, !1)
            }, removeAllSlides: function () {
                for (var e = [], t = 0; t < this.slides.length; t += 1) e.push(t);
                this.removeSlide(e)
            }
        }, events: {
            attachEvents: function () {
                var e = r(), t = this.params, i = this.touchEvents, s = this.el, a = this.wrapperEl, n = this.device,
                    l = this.support;
                this.onTouchStart = O.bind(this), this.onTouchMove = A.bind(this), this.onTouchEnd = D.bind(this), t.cssMode && (this.onScroll = B.bind(this)), this.onClick = N.bind(this);
                var o = !!t.nested;
                if (!l.touch && l.pointerEvents) s.addEventListener(i.start, this.onTouchStart, !1), e.addEventListener(i.move, this.onTouchMove, o), e.addEventListener(i.end, this.onTouchEnd, !1); else {
                    if (l.touch) {
                        var d = !("touchstart" !== i.start || !l.passiveListener || !t.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        s.addEventListener(i.start, this.onTouchStart, d), s.addEventListener(i.move, this.onTouchMove, l.passiveListener ? {
                            passive: !1,
                            capture: o
                        } : o), s.addEventListener(i.end, this.onTouchEnd, d), i.cancel && s.addEventListener(i.cancel, this.onTouchEnd, d), H || (e.addEventListener("touchstart", X), H = !0)
                    }
                    (t.simulateTouch && !n.ios && !n.android || t.simulateTouch && !l.touch && n.ios) && (s.addEventListener("mousedown", this.onTouchStart, !1), e.addEventListener("mousemove", this.onTouchMove, o), e.addEventListener("mouseup", this.onTouchEnd, !1))
                }
                (t.preventClicks || t.preventClicksPropagation) && s.addEventListener("click", this.onClick, !0), t.cssMode && a.addEventListener("scroll", this.onScroll), t.updateOnWindowResize ? this.on(n.ios || n.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", G, !0) : this.on("observerUpdate", G, !0)
            }, detachEvents: function () {
                var e = r(), t = this.params, i = this.touchEvents, s = this.el, a = this.wrapperEl, n = this.device,
                    l = this.support, o = !!t.nested;
                if (!l.touch && l.pointerEvents) s.removeEventListener(i.start, this.onTouchStart, !1), e.removeEventListener(i.move, this.onTouchMove, o), e.removeEventListener(i.end, this.onTouchEnd, !1); else {
                    if (l.touch) {
                        var d = !("onTouchStart" !== i.start || !l.passiveListener || !t.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        s.removeEventListener(i.start, this.onTouchStart, d), s.removeEventListener(i.move, this.onTouchMove, o), s.removeEventListener(i.end, this.onTouchEnd, d), i.cancel && s.removeEventListener(i.cancel, this.onTouchEnd, d)
                    }
                    (t.simulateTouch && !n.ios && !n.android || t.simulateTouch && !l.touch && n.ios) && (s.removeEventListener("mousedown", this.onTouchStart, !1), e.removeEventListener("mousemove", this.onTouchMove, o), e.removeEventListener("mouseup", this.onTouchEnd, !1))
                }
                (t.preventClicks || t.preventClicksPropagation) && s.removeEventListener("click", this.onClick, !0), t.cssMode && a.removeEventListener("scroll", this.onScroll), this.off(n.ios || n.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", G)
            }
        }, breakpoints: {
            setBreakpoint: function () {
                var e = this.activeIndex, t = this.initialized, i = this.loopedSlides, s = void 0 === i ? 0 : i,
                    a = this.params, r = this.$el, n = a.breakpoints;
                if (n && (!n || 0 !== Object.keys(n).length)) {
                    var l = this.getBreakpoint(n);
                    if (l && this.currentBreakpoint !== l) {
                        var o = l in n ? n[l] : void 0;
                        o && ["slidesPerView", "spaceBetween", "slidesPerGroup", "slidesPerGroupSkip", "slidesPerColumn"].forEach((function (e) {
                            var t = o[e];
                            void 0 !== t && (o[e] = "slidesPerView" !== e || "AUTO" !== t && "auto" !== t ? "slidesPerView" === e ? parseFloat(t) : parseInt(t, 10) : "auto")
                        }));
                        var d = o || this.originalParams, h = a.slidesPerColumn > 1, p = d.slidesPerColumn > 1;
                        h && !p ? (r.removeClass(a.containerModifierClass + "multirow " + a.containerModifierClass + "multirow-column"), this.emitContainerClasses()) : !h && p && (r.addClass(a.containerModifierClass + "multirow"), "column" === d.slidesPerColumnFill && r.addClass(a.containerModifierClass + "multirow-column"), this.emitContainerClasses());
                        var u = d.direction && d.direction !== a.direction,
                            c = a.loop && (d.slidesPerView !== a.slidesPerView || u);
                        u && t && this.changeDirection(), S(this.params, d), S(this, {
                            allowTouchMove: this.params.allowTouchMove,
                            allowSlideNext: this.params.allowSlideNext,
                            allowSlidePrev: this.params.allowSlidePrev
                        }), this.currentBreakpoint = l, this.emit("_beforeBreakpoint", d), c && t && (this.loopDestroy(), this.loopCreate(), this.updateSlides(), this.slideTo(e - s + this.loopedSlides, 0, !1)), this.emit("breakpoint", d)
                    }
                }
            }, getBreakpoint: function (e) {
                var t = l();
                if (e) {
                    var i = !1, s = Object.keys(e).map((function (e) {
                        if ("string" == typeof e && 0 === e.indexOf("@")) {
                            var i = parseFloat(e.substr(1));
                            return {value: t.innerHeight * i, point: e}
                        }
                        return {value: e, point: e}
                    }));
                    s.sort((function (e, t) {
                        return parseInt(e.value, 10) - parseInt(t.value, 10)
                    }));
                    for (var a = 0; a < s.length; a += 1) {
                        var r = s[a], n = r.point;
                        r.value <= t.innerWidth && (i = n)
                    }
                    return i || "max"
                }
            }
        }, checkOverflow: {
            checkOverflow: function () {
                var e = this.params, t = this.isLocked,
                    i = this.slides.length > 0 && e.slidesOffsetBefore + e.spaceBetween * (this.slides.length - 1) + this.slides[0].offsetWidth * this.slides.length;
                e.slidesOffsetBefore && e.slidesOffsetAfter && i ? this.isLocked = i <= this.size : this.isLocked = 1 === this.snapGrid.length, this.allowSlideNext = !this.isLocked, this.allowSlidePrev = !this.isLocked, t !== this.isLocked && this.emit(this.isLocked ? "lock" : "unlock"), t && t !== this.isLocked && (this.isEnd = !1, this.navigation && this.navigation.update())
            }
        }, classes: {
            addClasses: function () {
                var e = this.classNames, t = this.params, i = this.rtl, s = this.$el, a = this.device, r = [];
                r.push("initialized"), r.push(t.direction), t.freeMode && r.push("free-mode"), t.autoHeight && r.push("autoheight"), i && r.push("rtl"), t.slidesPerColumn > 1 && (r.push("multirow"), "column" === t.slidesPerColumnFill && r.push("multirow-column")), a.android && r.push("android"), a.ios && r.push("ios"), t.cssMode && r.push("css-mode"), r.forEach((function (i) {
                    e.push(t.containerModifierClass + i)
                })), s.addClass(e.join(" ")), this.emitContainerClasses()
            }, removeClasses: function () {
                var e = this.$el, t = this.classNames;
                e.removeClass(t.join(" ")), this.emitContainerClasses()
            }
        }, images: {
            loadImage: function (e, t, i, s, a, r) {
                var n, o = l();

                function d() {
                    r && r()
                }

                m(e).parent("picture")[0] || e.complete && a ? d() : t ? ((n = new o.Image).onload = d, n.onerror = d, s && (n.sizes = s), i && (n.srcset = i), t && (n.src = t)) : d()
            }, preloadImages: function () {
                var e = this;

                function t() {
                    null != e && e && !e.destroyed && (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1), e.imagesLoaded === e.imagesToLoad.length && (e.params.updateOnImagesReady && e.update(), e.emit("imagesReady")))
                }

                e.imagesToLoad = e.$el.find("img");
                for (var i = 0; i < e.imagesToLoad.length; i += 1) {
                    var s = e.imagesToLoad[i];
                    e.loadImage(s, s.currentSrc || s.getAttribute("src"), s.srcset || s.getAttribute("srcset"), s.sizes || s.getAttribute("sizes"), !0, t)
                }
            }
        }
    }, F = {}, R = function () {
        function t() {
            for (var e, i, s = arguments.length, a = new Array(s), r = 0; r < s; r++) a[r] = arguments[r];
            1 === a.length && a[0].constructor && a[0].constructor === Object ? i = a[0] : (e = a[0], i = a[1]), i || (i = {}), i = S({}, i), e && !i.el && (i.el = e);
            var n = this;
            n.support = z(), n.device = P({userAgent: i.userAgent}), n.browser = k(), n.eventsListeners = {}, n.eventsAnyListeners = [], void 0 === n.modules && (n.modules = {}), Object.keys(n.modules).forEach((function (e) {
                var t = n.modules[e];
                if (t.params) {
                    var s = Object.keys(t.params)[0], a = t.params[s];
                    if ("object" != typeof a || null === a) return;
                    if (!(s in i && "enabled" in a)) return;
                    !0 === i[s] && (i[s] = {enabled: !0}), "object" != typeof i[s] || "enabled" in i[s] || (i[s].enabled = !0), i[s] || (i[s] = {enabled: !1})
                }
            }));
            var l = S({}, Y);
            n.useParams(l), n.params = S({}, l, F, i), n.originalParams = S({}, n.params), n.passedParams = S({}, i), n.params && n.params.on && Object.keys(n.params.on).forEach((function (e) {
                n.on(e, n.params.on[e])
            })), n.params && n.params.onAny && n.onAny(n.params.onAny), n.$ = m;
            var o = m(n.params.el);
            if (e = o[0]) {
                if (o.length > 1) {
                    var d = [];
                    return o.each((function (e) {
                        var s = S({}, i, {el: e});
                        d.push(new t(s))
                    })), d
                }
                var h, p, u;
                return e.swiper = n, e && e.shadowRoot && e.shadowRoot.querySelector ? (h = m(e.shadowRoot.querySelector("." + n.params.wrapperClass))).children = function (e) {
                    return o.children(e)
                } : h = o.children("." + n.params.wrapperClass), S(n, {
                    $el: o,
                    el: e,
                    $wrapperEl: h,
                    wrapperEl: h[0],
                    classNames: [],
                    slides: m(),
                    slidesGrid: [],
                    snapGrid: [],
                    slidesSizesGrid: [],
                    isHorizontal: function () {
                        return "horizontal" === n.params.direction
                    },
                    isVertical: function () {
                        return "vertical" === n.params.direction
                    },
                    rtl: "rtl" === e.dir.toLowerCase() || "rtl" === o.css("direction"),
                    rtlTranslate: "horizontal" === n.params.direction && ("rtl" === e.dir.toLowerCase() || "rtl" === o.css("direction")),
                    wrongRTL: "-webkit-box" === h.css("display"),
                    activeIndex: 0,
                    realIndex: 0,
                    isBeginning: !0,
                    isEnd: !1,
                    translate: 0,
                    previousTranslate: 0,
                    progress: 0,
                    velocity: 0,
                    animating: !1,
                    allowSlideNext: n.params.allowSlideNext,
                    allowSlidePrev: n.params.allowSlidePrev,
                    touchEvents: (p = ["touchstart", "touchmove", "touchend", "touchcancel"], u = ["mousedown", "mousemove", "mouseup"], n.support.pointerEvents && (u = ["pointerdown", "pointermove", "pointerup"]), n.touchEventsTouch = {
                        start: p[0],
                        move: p[1],
                        end: p[2],
                        cancel: p[3]
                    }, n.touchEventsDesktop = {
                        start: u[0],
                        move: u[1],
                        end: u[2]
                    }, n.support.touch || !n.params.simulateTouch ? n.touchEventsTouch : n.touchEventsDesktop),
                    touchEventsData: {
                        isTouched: void 0,
                        isMoved: void 0,
                        allowTouchCallbacks: void 0,
                        touchStartTime: void 0,
                        isScrolling: void 0,
                        currentTranslate: void 0,
                        startTranslate: void 0,
                        allowThresholdMove: void 0,
                        formElements: "input, select, option, textarea, button, video, label",
                        lastClickTime: x(),
                        clickTimeout: void 0,
                        velocities: [],
                        allowMomentumBounce: void 0,
                        isTouchEvent: void 0,
                        startMoving: void 0
                    },
                    allowClick: !0,
                    allowTouchMove: n.params.allowTouchMove,
                    touches: {startX: 0, startY: 0, currentX: 0, currentY: 0, diff: 0},
                    imagesToLoad: [],
                    imagesLoaded: 0
                }), n.useModules(), n.emit("_swiper"), n.params.init && n.init(), n
            }
        }

        var i, s, a, r = t.prototype;
        return r.emitContainerClasses = function () {
            var e = this;
            if (e.params._emitClasses && e.el) {
                var t = e.el.className.split(" ").filter((function (t) {
                    return 0 === t.indexOf("swiper-container") || 0 === t.indexOf(e.params.containerModifierClass)
                }));
                e.emit("_containerClasses", t.join(" "))
            }
        }, r.getSlideClasses = function (e) {
            var t = this;
            return e.className.split(" ").filter((function (e) {
                return 0 === e.indexOf("swiper-slide") || 0 === e.indexOf(t.params.slideClass)
            })).join(" ")
        }, r.emitSlidesClasses = function () {
            var e = this;
            e.params._emitClasses && e.el && e.slides.each((function (t) {
                var i = e.getSlideClasses(t);
                e.emit("_slideClass", t, i)
            }))
        }, r.slidesPerViewDynamic = function () {
            var e = this.params, t = this.slides, i = this.slidesGrid, s = this.size, a = this.activeIndex, r = 1;
            if (e.centeredSlides) {
                for (var n, l = t[a].swiperSlideSize, o = a + 1; o < t.length; o += 1) t[o] && !n && (r += 1, (l += t[o].swiperSlideSize) > s && (n = !0));
                for (var d = a - 1; d >= 0; d -= 1) t[d] && !n && (r += 1, (l += t[d].swiperSlideSize) > s && (n = !0))
            } else for (var h = a + 1; h < t.length; h += 1) i[h] - i[a] < s && (r += 1);
            return r
        }, r.update = function () {
            var e = this;
            if (e && !e.destroyed) {
                var t = e.snapGrid, i = e.params;
                i.breakpoints && e.setBreakpoint(), e.updateSize(), e.updateSlides(), e.updateProgress(), e.updateSlidesClasses(), e.params.freeMode ? (s(), e.params.autoHeight && e.updateAutoHeight()) : (("auto" === e.params.slidesPerView || e.params.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0)) || s(), i.watchOverflow && t !== e.snapGrid && e.checkOverflow(), e.emit("update")
            }

            function s() {
                var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                    i = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate());
                e.setTranslate(i), e.updateActiveIndex(), e.updateSlidesClasses()
            }
        }, r.changeDirection = function (e, t) {
            void 0 === t && (t = !0);
            var i = this.params.direction;
            return e || (e = "horizontal" === i ? "vertical" : "horizontal"), e === i || "horizontal" !== e && "vertical" !== e || (this.$el.removeClass("" + this.params.containerModifierClass + i).addClass("" + this.params.containerModifierClass + e), this.emitContainerClasses(), this.params.direction = e, this.slides.each((function (t) {
                "vertical" === e ? t.style.width = "" : t.style.height = ""
            })), this.emit("changeDirection"), t && this.update()), this
        }, r.init = function () {
            this.initialized || (this.emit("beforeInit"), this.params.breakpoints && this.setBreakpoint(), this.addClasses(), this.params.loop && this.loopCreate(), this.updateSize(), this.updateSlides(), this.params.watchOverflow && this.checkOverflow(), this.params.grabCursor && this.setGrabCursor(), this.params.preloadImages && this.preloadImages(), this.params.loop ? this.slideTo(this.params.initialSlide + this.loopedSlides, 0, this.params.runCallbacksOnInit) : this.slideTo(this.params.initialSlide, 0, this.params.runCallbacksOnInit), this.attachEvents(), this.initialized = !0, this.emit("init"), this.emit("afterInit"))
        }, r.destroy = function (e, t) {
            void 0 === e && (e = !0), void 0 === t && (t = !0);
            var i, s = this, a = s.params, r = s.$el, n = s.$wrapperEl, l = s.slides;
            return void 0 === s.params || s.destroyed || (s.emit("beforeDestroy"), s.initialized = !1, s.detachEvents(), a.loop && s.loopDestroy(), t && (s.removeClasses(), r.removeAttr("style"), n.removeAttr("style"), l && l.length && l.removeClass([a.slideVisibleClass, a.slideActiveClass, a.slideNextClass, a.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")), s.emit("destroy"), Object.keys(s.eventsListeners).forEach((function (e) {
                s.off(e)
            })), !1 !== e && (s.$el[0].swiper = null, i = s, Object.keys(i).forEach((function (e) {
                try {
                    i[e] = null
                } catch (e) {
                }
                try {
                    delete i[e]
                } catch (e) {
                }
            }))), s.destroyed = !0), null
        }, t.extendDefaults = function (e) {
            S(F, e)
        }, t.installModule = function (e) {
            t.prototype.modules || (t.prototype.modules = {});
            var i = e.name || Object.keys(t.prototype.modules).length + "_" + x();
            t.prototype.modules[i] = e
        }, t.use = function (e) {
            return Array.isArray(e) ? (e.forEach((function (e) {
                return t.installModule(e)
            })), t) : (t.installModule(e), t)
        }, i = t, a = [{
            key: "extendedDefaults", get: function () {
                return F
            }
        }, {
            key: "defaults", get: function () {
                return Y
            }
        }], (s = null) && e(i.prototype, s), a && e(i, a), t
    }();
    Object.keys(V).forEach((function (e) {
        Object.keys(V[e]).forEach((function (t) {
            R.prototype[t] = V[e][t]
        }))
    })), R.use([$, I]);
    var W = {
        update: function (e) {
            var t = this, i = t.params, s = i.slidesPerView, a = i.slidesPerGroup, r = i.centeredSlides,
                n = t.params.virtual, l = n.addSlidesBefore, o = n.addSlidesAfter, d = t.virtual, h = d.from, p = d.to,
                u = d.slides, c = d.slidesGrid, v = d.renderSlide, f = d.offset;
            t.updateActiveIndex();
            var m, g, w, y = t.activeIndex || 0;
            m = t.rtlTranslate ? "right" : t.isHorizontal() ? "left" : "top", r ? (g = Math.floor(s / 2) + a + o, w = Math.floor(s / 2) + a + l) : (g = s + (a - 1) + o, w = a + l);
            var b = Math.max((y || 0) - w, 0), E = Math.min((y || 0) + g, u.length - 1),
                x = (t.slidesGrid[b] || 0) - (t.slidesGrid[0] || 0);

            function T() {
                t.updateSlides(), t.updateProgress(), t.updateSlidesClasses(), t.lazy && t.params.lazy.enabled && t.lazy.load()
            }

            if (S(t.virtual, {
                from: b,
                to: E,
                offset: x,
                slidesGrid: t.slidesGrid
            }), h === b && p === E && !e) return t.slidesGrid !== c && x !== f && t.slides.css(m, x + "px"), void t.updateProgress();
            if (t.params.virtual.renderExternal) return t.params.virtual.renderExternal.call(t, {
                offset: x,
                from: b,
                to: E,
                slides: function () {
                    for (var e = [], t = b; t <= E; t += 1) e.push(u[t]);
                    return e
                }()
            }), void (t.params.virtual.renderExternalUpdate && T());
            var C = [], M = [];
            if (e) t.$wrapperEl.find("." + t.params.slideClass).remove(); else for (var z = h; z <= p; z += 1) (z < b || z > E) && t.$wrapperEl.find("." + t.params.slideClass + '[data-swiper-slide-index="' + z + '"]').remove();
            for (var P = 0; P < u.length; P += 1) P >= b && P <= E && (void 0 === p || e ? M.push(P) : (P > p && M.push(P), P < h && C.push(P)));
            M.forEach((function (e) {
                t.$wrapperEl.append(v(u[e], e))
            })), C.sort((function (e, t) {
                return t - e
            })).forEach((function (e) {
                t.$wrapperEl.prepend(v(u[e], e))
            })), t.$wrapperEl.children(".swiper-slide").css(m, x + "px"), T()
        }, renderSlide: function (e, t) {
            var i = this.params.virtual;
            if (i.cache && this.virtual.cache[t]) return this.virtual.cache[t];
            var s = i.renderSlide ? m(i.renderSlide.call(this, e, t)) : m('<div class="' + this.params.slideClass + '" data-swiper-slide-index="' + t + '">' + e + "</div>");
            return s.attr("data-swiper-slide-index") || s.attr("data-swiper-slide-index", t), i.cache && (this.virtual.cache[t] = s), s
        }, appendSlide: function (e) {
            if ("object" == typeof e && "length" in e) for (var t = 0; t < e.length; t += 1) e[t] && this.virtual.slides.push(e[t]); else this.virtual.slides.push(e);
            this.virtual.update(!0)
        }, prependSlide: function (e) {
            var t = this.activeIndex, i = t + 1, s = 1;
            if (Array.isArray(e)) {
                for (var a = 0; a < e.length; a += 1) e[a] && this.virtual.slides.unshift(e[a]);
                i = t + e.length, s = e.length
            } else this.virtual.slides.unshift(e);
            if (this.params.virtual.cache) {
                var r = this.virtual.cache, n = {};
                Object.keys(r).forEach((function (e) {
                    var t = r[e], i = t.attr("data-swiper-slide-index");
                    i && t.attr("data-swiper-slide-index", parseInt(i, 10) + 1), n[parseInt(e, 10) + s] = t
                })), this.virtual.cache = n
            }
            this.virtual.update(!0), this.slideTo(i, 0)
        }, removeSlide: function (e) {
            if (null != e) {
                var t = this.activeIndex;
                if (Array.isArray(e)) for (var i = e.length - 1; i >= 0; i -= 1) this.virtual.slides.splice(e[i], 1), this.params.virtual.cache && delete this.virtual.cache[e[i]], e[i] < t && (t -= 1), t = Math.max(t, 0); else this.virtual.slides.splice(e, 1), this.params.virtual.cache && delete this.virtual.cache[e], e < t && (t -= 1), t = Math.max(t, 0);
                this.virtual.update(!0), this.slideTo(t, 0)
            }
        }, removeAllSlides: function () {
            this.virtual.slides = [], this.params.virtual.cache && (this.virtual.cache = {}), this.virtual.update(!0), this.slideTo(0, 0)
        }
    }, q = {
        name: "virtual",
        params: {
            virtual: {
                enabled: !1,
                slides: [],
                cache: !0,
                renderSlide: null,
                renderExternal: null,
                renderExternalUpdate: !0,
                addSlidesBefore: 0,
                addSlidesAfter: 0
            }
        },
        create: function () {
            M(this, {virtual: t(t({}, W), {}, {slides: this.params.virtual.slides, cache: {}})})
        },
        on: {
            beforeInit: function (e) {
                if (e.params.virtual.enabled) {
                    e.classNames.push(e.params.containerModifierClass + "virtual");
                    var t = {watchSlidesProgress: !0};
                    S(e.params, t), S(e.originalParams, t), e.params.initialSlide || e.virtual.update()
                }
            }, setTranslate: function (e) {
                e.params.virtual.enabled && e.virtual.update()
            }
        }
    }, j = {
        handle: function (e) {
            var t = l(), i = r(), s = this.rtlTranslate, a = e;
            a.originalEvent && (a = a.originalEvent);
            var n = a.keyCode || a.charCode, o = this.params.keyboard.pageUpDown, d = o && 33 === n, h = o && 34 === n,
                p = 37 === n, u = 39 === n, c = 38 === n, v = 40 === n;
            if (!this.allowSlideNext && (this.isHorizontal() && u || this.isVertical() && v || h)) return !1;
            if (!this.allowSlidePrev && (this.isHorizontal() && p || this.isVertical() && c || d)) return !1;
            if (!(a.shiftKey || a.altKey || a.ctrlKey || a.metaKey || i.activeElement && i.activeElement.nodeName && ("input" === i.activeElement.nodeName.toLowerCase() || "textarea" === i.activeElement.nodeName.toLowerCase()))) {
                if (this.params.keyboard.onlyInViewport && (d || h || p || u || c || v)) {
                    var f = !1;
                    if (this.$el.parents("." + this.params.slideClass).length > 0 && 0 === this.$el.parents("." + this.params.slideActiveClass).length) return;
                    var m = t.innerWidth, g = t.innerHeight, w = this.$el.offset();
                    s && (w.left -= this.$el[0].scrollLeft);
                    for (var y = [[w.left, w.top], [w.left + this.width, w.top], [w.left, w.top + this.height], [w.left + this.width, w.top + this.height]], b = 0; b < y.length; b += 1) {
                        var E = y[b];
                        E[0] >= 0 && E[0] <= m && E[1] >= 0 && E[1] <= g && (f = !0)
                    }
                    if (!f) return
                }
                this.isHorizontal() ? ((d || h || p || u) && (a.preventDefault ? a.preventDefault() : a.returnValue = !1), ((h || u) && !s || (d || p) && s) && this.slideNext(), ((d || p) && !s || (h || u) && s) && this.slidePrev()) : ((d || h || c || v) && (a.preventDefault ? a.preventDefault() : a.returnValue = !1), (h || v) && this.slideNext(), (d || c) && this.slidePrev()), this.emit("keyPress", n)
            }
        }, enable: function () {
            var e = r();
            this.keyboard.enabled || (m(e).on("keydown", this.keyboard.handle), this.keyboard.enabled = !0)
        }, disable: function () {
            var e = r();
            this.keyboard.enabled && (m(e).off("keydown", this.keyboard.handle), this.keyboard.enabled = !1)
        }
    }, _ = {
        name: "keyboard",
        params: {keyboard: {enabled: !1, onlyInViewport: !0, pageUpDown: !0}},
        create: function () {
            M(this, {keyboard: t({enabled: !1}, j)})
        },
        on: {
            init: function (e) {
                e.params.keyboard.enabled && e.keyboard.enable()
            }, destroy: function (e) {
                e.keyboard.enabled && e.keyboard.disable()
            }
        }
    }, U = {
        lastScrollTime: x(), lastEventBeforeSnap: void 0, recentWheelEvents: [], event: function () {
            return l().navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : function () {
                var e = r(), t = "onwheel" in e;
                if (!t) {
                    var i = e.createElement("div");
                    i.setAttribute("onwheel", "return;"), t = "function" == typeof i.onwheel
                }
                return !t && e.implementation && e.implementation.hasFeature && !0 !== e.implementation.hasFeature("", "") && (t = e.implementation.hasFeature("Events.wheel", "3.0")), t
            }() ? "wheel" : "mousewheel"
        }, normalize: function (e) {
            var t = 0, i = 0, s = 0, a = 0;
            return "detail" in e && (i = e.detail), "wheelDelta" in e && (i = -e.wheelDelta / 120), "wheelDeltaY" in e && (i = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (t = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (t = i, i = 0), s = 10 * t, a = 10 * i, "deltaY" in e && (a = e.deltaY), "deltaX" in e && (s = e.deltaX), e.shiftKey && !s && (s = a, a = 0), (s || a) && e.deltaMode && (1 === e.deltaMode ? (s *= 40, a *= 40) : (s *= 800, a *= 800)), s && !t && (t = s < 1 ? -1 : 1), a && !i && (i = a < 1 ? -1 : 1), {
                spinX: t,
                spinY: i,
                pixelX: s,
                pixelY: a
            }
        }, handleMouseEnter: function () {
            this.mouseEntered = !0
        }, handleMouseLeave: function () {
            this.mouseEntered = !1
        }, handle: function (e) {
            var t = e, i = this, s = i.params.mousewheel;
            i.params.cssMode && t.preventDefault();
            var a = i.$el;
            if ("container" !== i.params.mousewheel.eventsTarget && (a = m(i.params.mousewheel.eventsTarget)), !i.mouseEntered && !a[0].contains(t.target) && !s.releaseOnEdges) return !0;
            t.originalEvent && (t = t.originalEvent);
            var r = 0, n = i.rtlTranslate ? -1 : 1, l = U.normalize(t);
            if (s.forceToAxis) if (i.isHorizontal()) {
                if (!(Math.abs(l.pixelX) > Math.abs(l.pixelY))) return !0;
                r = -l.pixelX * n
            } else {
                if (!(Math.abs(l.pixelY) > Math.abs(l.pixelX))) return !0;
                r = -l.pixelY
            } else r = Math.abs(l.pixelX) > Math.abs(l.pixelY) ? -l.pixelX * n : -l.pixelY;
            if (0 === r) return !0;
            if (s.invert && (r = -r), i.params.freeMode) {
                var o = {time: x(), delta: Math.abs(r), direction: Math.sign(r)}, d = i.mousewheel.lastEventBeforeSnap,
                    h = d && o.time < d.time + 500 && o.delta <= d.delta && o.direction === d.direction;
                if (!h) {
                    i.mousewheel.lastEventBeforeSnap = void 0, i.params.loop && i.loopFix();
                    var p = i.getTranslate() + r * s.sensitivity, u = i.isBeginning, c = i.isEnd;
                    if (p >= i.minTranslate() && (p = i.minTranslate()), p <= i.maxTranslate() && (p = i.maxTranslate()), i.setTransition(0), i.setTranslate(p), i.updateProgress(), i.updateActiveIndex(), i.updateSlidesClasses(), (!u && i.isBeginning || !c && i.isEnd) && i.updateSlidesClasses(), i.params.freeModeSticky) {
                        clearTimeout(i.mousewheel.timeout), i.mousewheel.timeout = void 0;
                        var v = i.mousewheel.recentWheelEvents;
                        v.length >= 15 && v.shift();
                        var f = v.length ? v[v.length - 1] : void 0, g = v[0];
                        if (v.push(o), f && (o.delta > f.delta || o.direction !== f.direction)) v.splice(0); else if (v.length >= 15 && o.time - g.time < 500 && g.delta - o.delta >= 1 && o.delta <= 6) {
                            var w = r > 0 ? .8 : .2;
                            i.mousewheel.lastEventBeforeSnap = o, v.splice(0), i.mousewheel.timeout = E((function () {
                                i.slideToClosest(i.params.speed, !0, void 0, w)
                            }), 0)
                        }
                        i.mousewheel.timeout || (i.mousewheel.timeout = E((function () {
                            i.mousewheel.lastEventBeforeSnap = o, v.splice(0), i.slideToClosest(i.params.speed, !0, void 0, .5)
                        }), 500))
                    }
                    if (h || i.emit("scroll", t), i.params.autoplay && i.params.autoplayDisableOnInteraction && i.autoplay.stop(), p === i.minTranslate() || p === i.maxTranslate()) return !0
                }
            } else {
                var y = {time: x(), delta: Math.abs(r), direction: Math.sign(r), raw: e},
                    b = i.mousewheel.recentWheelEvents;
                b.length >= 2 && b.shift();
                var T = b.length ? b[b.length - 1] : void 0;
                if (b.push(y), T ? (y.direction !== T.direction || y.delta > T.delta || y.time > T.time + 150) && i.mousewheel.animateSlider(y) : i.mousewheel.animateSlider(y), i.mousewheel.releaseScroll(y)) return !0
            }
            return t.preventDefault ? t.preventDefault() : t.returnValue = !1, !1
        }, animateSlider: function (e) {
            var t = l();
            return !(this.params.mousewheel.thresholdDelta && e.delta < this.params.mousewheel.thresholdDelta || this.params.mousewheel.thresholdTime && x() - this.mousewheel.lastScrollTime < this.params.mousewheel.thresholdTime || !(e.delta >= 6 && x() - this.mousewheel.lastScrollTime < 60) && (e.direction < 0 ? this.isEnd && !this.params.loop || this.animating || (this.slideNext(), this.emit("scroll", e.raw)) : this.isBeginning && !this.params.loop || this.animating || (this.slidePrev(), this.emit("scroll", e.raw)), this.mousewheel.lastScrollTime = (new t.Date).getTime(), 1))
        }, releaseScroll: function (e) {
            var t = this.params.mousewheel;
            if (e.direction < 0) {
                if (this.isEnd && !this.params.loop && t.releaseOnEdges) return !0
            } else if (this.isBeginning && !this.params.loop && t.releaseOnEdges) return !0;
            return !1
        }, enable: function () {
            var e = U.event();
            if (this.params.cssMode) return this.wrapperEl.removeEventListener(e, this.mousewheel.handle), !0;
            if (!e) return !1;
            if (this.mousewheel.enabled) return !1;
            var t = this.$el;
            return "container" !== this.params.mousewheel.eventsTarget && (t = m(this.params.mousewheel.eventsTarget)), t.on("mouseenter", this.mousewheel.handleMouseEnter), t.on("mouseleave", this.mousewheel.handleMouseLeave), t.on(e, this.mousewheel.handle), this.mousewheel.enabled = !0, !0
        }, disable: function () {
            var e = U.event();
            if (this.params.cssMode) return this.wrapperEl.addEventListener(e, this.mousewheel.handle), !0;
            if (!e) return !1;
            if (!this.mousewheel.enabled) return !1;
            var t = this.$el;
            return "container" !== this.params.mousewheel.eventsTarget && (t = m(this.params.mousewheel.eventsTarget)), t.off(e, this.mousewheel.handle), this.mousewheel.enabled = !1, !0
        }
    }, K = {
        update: function () {
            var e = this.params.navigation;
            if (!this.params.loop) {
                var t = this.navigation, i = t.$nextEl, s = t.$prevEl;
                s && s.length > 0 && (this.isBeginning ? s.addClass(e.disabledClass) : s.removeClass(e.disabledClass), s[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass)), i && i.length > 0 && (this.isEnd ? i.addClass(e.disabledClass) : i.removeClass(e.disabledClass), i[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass))
            }
        }, onPrevClick: function (e) {
            e.preventDefault(), this.isBeginning && !this.params.loop || this.slidePrev()
        }, onNextClick: function (e) {
            e.preventDefault(), this.isEnd && !this.params.loop || this.slideNext()
        }, init: function () {
            var e, t, i = this.params.navigation;
            (i.nextEl || i.prevEl) && (i.nextEl && (e = m(i.nextEl), this.params.uniqueNavElements && "string" == typeof i.nextEl && e.length > 1 && 1 === this.$el.find(i.nextEl).length && (e = this.$el.find(i.nextEl))), i.prevEl && (t = m(i.prevEl), this.params.uniqueNavElements && "string" == typeof i.prevEl && t.length > 1 && 1 === this.$el.find(i.prevEl).length && (t = this.$el.find(i.prevEl))), e && e.length > 0 && e.on("click", this.navigation.onNextClick), t && t.length > 0 && t.on("click", this.navigation.onPrevClick), S(this.navigation, {
                $nextEl: e,
                nextEl: e && e[0],
                $prevEl: t,
                prevEl: t && t[0]
            }))
        }, destroy: function () {
            var e = this.navigation, t = e.$nextEl, i = e.$prevEl;
            t && t.length && (t.off("click", this.navigation.onNextClick), t.removeClass(this.params.navigation.disabledClass)), i && i.length && (i.off("click", this.navigation.onPrevClick), i.removeClass(this.params.navigation.disabledClass))
        }
    }, Z = {
        update: function () {
            var e = this.rtl, t = this.params.pagination;
            if (t.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                var i,
                    s = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                    a = this.pagination.$el,
                    r = this.params.loop ? Math.ceil((s - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length;
                if (this.params.loop ? ((i = Math.ceil((this.activeIndex - this.loopedSlides) / this.params.slidesPerGroup)) > s - 1 - 2 * this.loopedSlides && (i -= s - 2 * this.loopedSlides), i > r - 1 && (i -= r), i < 0 && "bullets" !== this.params.paginationType && (i = r + i)) : i = void 0 !== this.snapIndex ? this.snapIndex : this.activeIndex || 0, "bullets" === t.type && this.pagination.bullets && this.pagination.bullets.length > 0) {
                    var n, l, o, d = this.pagination.bullets;
                    if (t.dynamicBullets && (this.pagination.bulletSize = d.eq(0)[this.isHorizontal() ? "outerWidth" : "outerHeight"](!0), a.css(this.isHorizontal() ? "width" : "height", this.pagination.bulletSize * (t.dynamicMainBullets + 4) + "px"), t.dynamicMainBullets > 1 && void 0 !== this.previousIndex && (this.pagination.dynamicBulletIndex += i - this.previousIndex, this.pagination.dynamicBulletIndex > t.dynamicMainBullets - 1 ? this.pagination.dynamicBulletIndex = t.dynamicMainBullets - 1 : this.pagination.dynamicBulletIndex < 0 && (this.pagination.dynamicBulletIndex = 0)), n = i - this.pagination.dynamicBulletIndex, o = ((l = n + (Math.min(d.length, t.dynamicMainBullets) - 1)) + n) / 2), d.removeClass(t.bulletActiveClass + " " + t.bulletActiveClass + "-next " + t.bulletActiveClass + "-next-next " + t.bulletActiveClass + "-prev " + t.bulletActiveClass + "-prev-prev " + t.bulletActiveClass + "-main"), a.length > 1) d.each((function (e) {
                        var s = m(e), a = s.index();
                        a === i && s.addClass(t.bulletActiveClass), t.dynamicBullets && (a >= n && a <= l && s.addClass(t.bulletActiveClass + "-main"), a === n && s.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), a === l && s.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next"))
                    })); else {
                        var h = d.eq(i), p = h.index();
                        if (h.addClass(t.bulletActiveClass), t.dynamicBullets) {
                            for (var u = d.eq(n), c = d.eq(l), v = n; v <= l; v += 1) d.eq(v).addClass(t.bulletActiveClass + "-main");
                            if (this.params.loop) if (p >= d.length - t.dynamicMainBullets) {
                                for (var f = t.dynamicMainBullets; f >= 0; f -= 1) d.eq(d.length - f).addClass(t.bulletActiveClass + "-main");
                                d.eq(d.length - t.dynamicMainBullets - 1).addClass(t.bulletActiveClass + "-prev")
                            } else u.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), c.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next"); else u.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), c.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next")
                        }
                    }
                    if (t.dynamicBullets) {
                        var g = Math.min(d.length, t.dynamicMainBullets + 4),
                            w = (this.pagination.bulletSize * g - this.pagination.bulletSize) / 2 - o * this.pagination.bulletSize,
                            y = e ? "right" : "left";
                        d.css(this.isHorizontal() ? y : "top", w + "px")
                    }
                }
                if ("fraction" === t.type && (a.find("." + t.currentClass).text(t.formatFractionCurrent(i + 1)), a.find("." + t.totalClass).text(t.formatFractionTotal(r))), "progressbar" === t.type) {
                    var b;
                    b = t.progressbarOpposite ? this.isHorizontal() ? "vertical" : "horizontal" : this.isHorizontal() ? "horizontal" : "vertical";
                    var E = (i + 1) / r, x = 1, T = 1;
                    "horizontal" === b ? x = E : T = E, a.find("." + t.progressbarFillClass).transform("translate3d(0,0,0) scaleX(" + x + ") scaleY(" + T + ")").transition(this.params.speed)
                }
                "custom" === t.type && t.renderCustom ? (a.html(t.renderCustom(this, i + 1, r)), this.emit("paginationRender", a[0])) : this.emit("paginationUpdate", a[0]), a[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](t.lockClass)
            }
        }, render: function () {
            var e = this.params.pagination;
            if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                var t = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                    i = this.pagination.$el, s = "";
                if ("bullets" === e.type) {
                    for (var a = this.params.loop ? Math.ceil((t - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length, r = 0; r < a; r += 1) e.renderBullet ? s += e.renderBullet.call(this, r, e.bulletClass) : s += "<" + e.bulletElement + ' class="' + e.bulletClass + '"></' + e.bulletElement + ">";
                    i.html(s), this.pagination.bullets = i.find("." + e.bulletClass)
                }
                "fraction" === e.type && (s = e.renderFraction ? e.renderFraction.call(this, e.currentClass, e.totalClass) : '<span class="' + e.currentClass + '"></span> / <span class="' + e.totalClass + '"></span>', i.html(s)), "progressbar" === e.type && (s = e.renderProgressbar ? e.renderProgressbar.call(this, e.progressbarFillClass) : '<span class="' + e.progressbarFillClass + '"></span>', i.html(s)), "custom" !== e.type && this.emit("paginationRender", this.pagination.$el[0])
            }
        }, init: function () {
            var e = this, t = e.params.pagination;
            if (t.el) {
                var i = m(t.el);
                0 !== i.length && (e.params.uniqueNavElements && "string" == typeof t.el && i.length > 1 && (i = e.$el.find(t.el)), "bullets" === t.type && t.clickable && i.addClass(t.clickableClass), i.addClass(t.modifierClass + t.type), "bullets" === t.type && t.dynamicBullets && (i.addClass("" + t.modifierClass + t.type + "-dynamic"), e.pagination.dynamicBulletIndex = 0, t.dynamicMainBullets < 1 && (t.dynamicMainBullets = 1)), "progressbar" === t.type && t.progressbarOpposite && i.addClass(t.progressbarOppositeClass), t.clickable && i.on("click", "." + t.bulletClass, (function (t) {
                    t.preventDefault();
                    var i = m(this).index() * e.params.slidesPerGroup;
                    e.params.loop && (i += e.loopedSlides), e.slideTo(i)
                })), S(e.pagination, {$el: i, el: i[0]}))
            }
        }, destroy: function () {
            var e = this.params.pagination;
            if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                var t = this.pagination.$el;
                t.removeClass(e.hiddenClass), t.removeClass(e.modifierClass + e.type), this.pagination.bullets && this.pagination.bullets.removeClass(e.bulletActiveClass), e.clickable && t.off("click", "." + e.bulletClass)
            }
        }
    }, J = {
        setTranslate: function () {
            if (this.params.scrollbar.el && this.scrollbar.el) {
                var e = this.scrollbar, t = this.rtlTranslate, i = this.progress, s = e.dragSize, a = e.trackSize,
                    r = e.$dragEl, n = e.$el, l = this.params.scrollbar, o = s, d = (a - s) * i;
                t ? (d = -d) > 0 ? (o = s - d, d = 0) : -d + s > a && (o = a + d) : d < 0 ? (o = s + d, d = 0) : d + s > a && (o = a - d), this.isHorizontal() ? (r.transform("translate3d(" + d + "px, 0, 0)"), r[0].style.width = o + "px") : (r.transform("translate3d(0px, " + d + "px, 0)"), r[0].style.height = o + "px"), l.hide && (clearTimeout(this.scrollbar.timeout), n[0].style.opacity = 1, this.scrollbar.timeout = setTimeout((function () {
                    n[0].style.opacity = 0, n.transition(400)
                }), 1e3))
            }
        }, setTransition: function (e) {
            this.params.scrollbar.el && this.scrollbar.el && this.scrollbar.$dragEl.transition(e)
        }, updateSize: function () {
            if (this.params.scrollbar.el && this.scrollbar.el) {
                var e = this.scrollbar, t = e.$dragEl, i = e.$el;
                t[0].style.width = "", t[0].style.height = "";
                var s, a = this.isHorizontal() ? i[0].offsetWidth : i[0].offsetHeight, r = this.size / this.virtualSize,
                    n = r * (a / this.size);
                s = "auto" === this.params.scrollbar.dragSize ? a * r : parseInt(this.params.scrollbar.dragSize, 10), this.isHorizontal() ? t[0].style.width = s + "px" : t[0].style.height = s + "px", i[0].style.display = r >= 1 ? "none" : "", this.params.scrollbar.hide && (i[0].style.opacity = 0), S(e, {
                    trackSize: a,
                    divider: r,
                    moveDivider: n,
                    dragSize: s
                }), e.$el[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](this.params.scrollbar.lockClass)
            }
        }, getPointerPosition: function (e) {
            return this.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientX : e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientY : e.clientY
        }, setDragPosition: function (e) {
            var t, i = this.scrollbar, s = this.rtlTranslate, a = i.$el, r = i.dragSize, n = i.trackSize,
                l = i.dragStartPos;
            t = (i.getPointerPosition(e) - a.offset()[this.isHorizontal() ? "left" : "top"] - (null !== l ? l : r / 2)) / (n - r), t = Math.max(Math.min(t, 1), 0), s && (t = 1 - t);
            var o = this.minTranslate() + (this.maxTranslate() - this.minTranslate()) * t;
            this.updateProgress(o), this.setTranslate(o), this.updateActiveIndex(), this.updateSlidesClasses()
        }, onDragStart: function (e) {
            var t = this.params.scrollbar, i = this.scrollbar, s = this.$wrapperEl, a = i.$el, r = i.$dragEl;
            this.scrollbar.isTouched = !0, this.scrollbar.dragStartPos = e.target === r[0] || e.target === r ? i.getPointerPosition(e) - e.target.getBoundingClientRect()[this.isHorizontal() ? "left" : "top"] : null, e.preventDefault(), e.stopPropagation(), s.transition(100), r.transition(100), i.setDragPosition(e), clearTimeout(this.scrollbar.dragTimeout), a.transition(0), t.hide && a.css("opacity", 1), this.params.cssMode && this.$wrapperEl.css("scroll-snap-type", "none"), this.emit("scrollbarDragStart", e)
        }, onDragMove: function (e) {
            var t = this.scrollbar, i = this.$wrapperEl, s = t.$el, a = t.$dragEl;
            this.scrollbar.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, t.setDragPosition(e), i.transition(0), s.transition(0), a.transition(0), this.emit("scrollbarDragMove", e))
        }, onDragEnd: function (e) {
            var t = this.params.scrollbar, i = this.scrollbar, s = this.$wrapperEl, a = i.$el;
            this.scrollbar.isTouched && (this.scrollbar.isTouched = !1, this.params.cssMode && (this.$wrapperEl.css("scroll-snap-type", ""), s.transition("")), t.hide && (clearTimeout(this.scrollbar.dragTimeout), this.scrollbar.dragTimeout = E((function () {
                a.css("opacity", 0), a.transition(400)
            }), 1e3)), this.emit("scrollbarDragEnd", e), t.snapOnRelease && this.slideToClosest())
        }, enableDraggable: function () {
            if (this.params.scrollbar.el) {
                var e = r(), t = this.scrollbar, i = this.touchEventsTouch, s = this.touchEventsDesktop,
                    a = this.params, n = this.support, l = t.$el[0],
                    o = !(!n.passiveListener || !a.passiveListeners) && {passive: !1, capture: !1},
                    d = !(!n.passiveListener || !a.passiveListeners) && {passive: !0, capture: !1};
                n.touch ? (l.addEventListener(i.start, this.scrollbar.onDragStart, o), l.addEventListener(i.move, this.scrollbar.onDragMove, o), l.addEventListener(i.end, this.scrollbar.onDragEnd, d)) : (l.addEventListener(s.start, this.scrollbar.onDragStart, o), e.addEventListener(s.move, this.scrollbar.onDragMove, o), e.addEventListener(s.end, this.scrollbar.onDragEnd, d))
            }
        }, disableDraggable: function () {
            if (this.params.scrollbar.el) {
                var e = r(), t = this.scrollbar, i = this.touchEventsTouch, s = this.touchEventsDesktop,
                    a = this.params, n = this.support, l = t.$el[0],
                    o = !(!n.passiveListener || !a.passiveListeners) && {passive: !1, capture: !1},
                    d = !(!n.passiveListener || !a.passiveListeners) && {passive: !0, capture: !1};
                n.touch ? (l.removeEventListener(i.start, this.scrollbar.onDragStart, o), l.removeEventListener(i.move, this.scrollbar.onDragMove, o), l.removeEventListener(i.end, this.scrollbar.onDragEnd, d)) : (l.removeEventListener(s.start, this.scrollbar.onDragStart, o), e.removeEventListener(s.move, this.scrollbar.onDragMove, o), e.removeEventListener(s.end, this.scrollbar.onDragEnd, d))
            }
        }, init: function () {
            if (this.params.scrollbar.el) {
                var e = this.scrollbar, t = this.$el, i = this.params.scrollbar, s = m(i.el);
                this.params.uniqueNavElements && "string" == typeof i.el && s.length > 1 && 1 === t.find(i.el).length && (s = t.find(i.el));
                var a = s.find("." + this.params.scrollbar.dragClass);
                0 === a.length && (a = m('<div class="' + this.params.scrollbar.dragClass + '"></div>'), s.append(a)), S(e, {
                    $el: s,
                    el: s[0],
                    $dragEl: a,
                    dragEl: a[0]
                }), i.draggable && e.enableDraggable()
            }
        }, destroy: function () {
            this.scrollbar.disableDraggable()
        }
    }, Q = {
        setTransform: function (e, t) {
            var i = this.rtl, s = m(e), a = i ? -1 : 1, r = s.attr("data-swiper-parallax") || "0",
                n = s.attr("data-swiper-parallax-x"), l = s.attr("data-swiper-parallax-y"),
                o = s.attr("data-swiper-parallax-scale"), d = s.attr("data-swiper-parallax-opacity");
            if (n || l ? (n = n || "0", l = l || "0") : this.isHorizontal() ? (n = r, l = "0") : (l = r, n = "0"), n = n.indexOf("%") >= 0 ? parseInt(n, 10) * t * a + "%" : n * t * a + "px", l = l.indexOf("%") >= 0 ? parseInt(l, 10) * t + "%" : l * t + "px", null != d) {
                var h = d - (d - 1) * (1 - Math.abs(t));
                s[0].style.opacity = h
            }
            if (null == o) s.transform("translate3d(" + n + ", " + l + ", 0px)"); else {
                var p = o - (o - 1) * (1 - Math.abs(t));
                s.transform("translate3d(" + n + ", " + l + ", 0px) scale(" + p + ")")
            }
        }, setTranslate: function () {
            var e = this, t = e.$el, i = e.slides, s = e.progress, a = e.snapGrid;
            t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function (t) {
                e.parallax.setTransform(t, s)
            })), i.each((function (t, i) {
                var r = t.progress;
                e.params.slidesPerGroup > 1 && "auto" !== e.params.slidesPerView && (r += Math.ceil(i / 2) - s * (a.length - 1)), r = Math.min(Math.max(r, -1), 1), m(t).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function (t) {
                    e.parallax.setTransform(t, r)
                }))
            }))
        }, setTransition: function (e) {
            void 0 === e && (e = this.params.speed), this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function (t) {
                var i = m(t), s = parseInt(i.attr("data-swiper-parallax-duration"), 10) || e;
                0 === e && (s = 0), i.transition(s)
            }))
        }
    }, ee = {
        getDistanceBetweenTouches: function (e) {
            if (e.targetTouches.length < 2) return 1;
            var t = e.targetTouches[0].pageX, i = e.targetTouches[0].pageY, s = e.targetTouches[1].pageX,
                a = e.targetTouches[1].pageY;
            return Math.sqrt(Math.pow(s - t, 2) + Math.pow(a - i, 2))
        }, onGestureStart: function (e) {
            var t = this.support, i = this.params.zoom, s = this.zoom, a = s.gesture;
            if (s.fakeGestureTouched = !1, s.fakeGestureMoved = !1, !t.gestures) {
                if ("touchstart" !== e.type || "touchstart" === e.type && e.targetTouches.length < 2) return;
                s.fakeGestureTouched = !0, a.scaleStart = ee.getDistanceBetweenTouches(e)
            }
            a.$slideEl && a.$slideEl.length || (a.$slideEl = m(e.target).closest("." + this.params.slideClass), 0 === a.$slideEl.length && (a.$slideEl = this.slides.eq(this.activeIndex)), a.$imageEl = a.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), a.$imageWrapEl = a.$imageEl.parent("." + i.containerClass), a.maxRatio = a.$imageWrapEl.attr("data-swiper-zoom") || i.maxRatio, 0 !== a.$imageWrapEl.length) ? (a.$imageEl && a.$imageEl.transition(0), this.zoom.isScaling = !0) : a.$imageEl = void 0
        }, onGestureChange: function (e) {
            var t = this.support, i = this.params.zoom, s = this.zoom, a = s.gesture;
            if (!t.gestures) {
                if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
                s.fakeGestureMoved = !0, a.scaleMove = ee.getDistanceBetweenTouches(e)
            }
            a.$imageEl && 0 !== a.$imageEl.length ? (t.gestures ? s.scale = e.scale * s.currentScale : s.scale = a.scaleMove / a.scaleStart * s.currentScale, s.scale > a.maxRatio && (s.scale = a.maxRatio - 1 + Math.pow(s.scale - a.maxRatio + 1, .5)), s.scale < i.minRatio && (s.scale = i.minRatio + 1 - Math.pow(i.minRatio - s.scale + 1, .5)), a.$imageEl.transform("translate3d(0,0,0) scale(" + s.scale + ")")) : "gesturechange" === e.type && s.onGestureStart(e)
        }, onGestureEnd: function (e) {
            var t = this.device, i = this.support, s = this.params.zoom, a = this.zoom, r = a.gesture;
            if (!i.gestures) {
                if (!a.fakeGestureTouched || !a.fakeGestureMoved) return;
                if ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2 && !t.android) return;
                a.fakeGestureTouched = !1, a.fakeGestureMoved = !1
            }
            r.$imageEl && 0 !== r.$imageEl.length && (a.scale = Math.max(Math.min(a.scale, r.maxRatio), s.minRatio), r.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale(" + a.scale + ")"), a.currentScale = a.scale, a.isScaling = !1, 1 === a.scale && (r.$slideEl = void 0))
        }, onTouchStart: function (e) {
            var t = this.device, i = this.zoom, s = i.gesture, a = i.image;
            s.$imageEl && 0 !== s.$imageEl.length && (a.isTouched || (t.android && e.cancelable && e.preventDefault(), a.isTouched = !0, a.touchesStart.x = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX, a.touchesStart.y = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY))
        }, onTouchMove: function (e) {
            var t = this.zoom, i = t.gesture, s = t.image, a = t.velocity;
            if (i.$imageEl && 0 !== i.$imageEl.length && (this.allowClick = !1, s.isTouched && i.$slideEl)) {
                s.isMoved || (s.width = i.$imageEl[0].offsetWidth, s.height = i.$imageEl[0].offsetHeight, s.startX = T(i.$imageWrapEl[0], "x") || 0, s.startY = T(i.$imageWrapEl[0], "y") || 0, i.slideWidth = i.$slideEl[0].offsetWidth, i.slideHeight = i.$slideEl[0].offsetHeight, i.$imageWrapEl.transition(0), this.rtl && (s.startX = -s.startX, s.startY = -s.startY));
                var r = s.width * t.scale, n = s.height * t.scale;
                if (!(r < i.slideWidth && n < i.slideHeight)) {
                    if (s.minX = Math.min(i.slideWidth / 2 - r / 2, 0), s.maxX = -s.minX, s.minY = Math.min(i.slideHeight / 2 - n / 2, 0), s.maxY = -s.minY, s.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, s.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !s.isMoved && !t.isScaling) {
                        if (this.isHorizontal() && (Math.floor(s.minX) === Math.floor(s.startX) && s.touchesCurrent.x < s.touchesStart.x || Math.floor(s.maxX) === Math.floor(s.startX) && s.touchesCurrent.x > s.touchesStart.x)) return void (s.isTouched = !1);
                        if (!this.isHorizontal() && (Math.floor(s.minY) === Math.floor(s.startY) && s.touchesCurrent.y < s.touchesStart.y || Math.floor(s.maxY) === Math.floor(s.startY) && s.touchesCurrent.y > s.touchesStart.y)) return void (s.isTouched = !1)
                    }
                    e.cancelable && e.preventDefault(), e.stopPropagation(), s.isMoved = !0, s.currentX = s.touchesCurrent.x - s.touchesStart.x + s.startX, s.currentY = s.touchesCurrent.y - s.touchesStart.y + s.startY, s.currentX < s.minX && (s.currentX = s.minX + 1 - Math.pow(s.minX - s.currentX + 1, .8)), s.currentX > s.maxX && (s.currentX = s.maxX - 1 + Math.pow(s.currentX - s.maxX + 1, .8)), s.currentY < s.minY && (s.currentY = s.minY + 1 - Math.pow(s.minY - s.currentY + 1, .8)), s.currentY > s.maxY && (s.currentY = s.maxY - 1 + Math.pow(s.currentY - s.maxY + 1, .8)), a.prevPositionX || (a.prevPositionX = s.touchesCurrent.x), a.prevPositionY || (a.prevPositionY = s.touchesCurrent.y), a.prevTime || (a.prevTime = Date.now()), a.x = (s.touchesCurrent.x - a.prevPositionX) / (Date.now() - a.prevTime) / 2, a.y = (s.touchesCurrent.y - a.prevPositionY) / (Date.now() - a.prevTime) / 2, Math.abs(s.touchesCurrent.x - a.prevPositionX) < 2 && (a.x = 0), Math.abs(s.touchesCurrent.y - a.prevPositionY) < 2 && (a.y = 0), a.prevPositionX = s.touchesCurrent.x, a.prevPositionY = s.touchesCurrent.y, a.prevTime = Date.now(), i.$imageWrapEl.transform("translate3d(" + s.currentX + "px, " + s.currentY + "px,0)")
                }
            }
        }, onTouchEnd: function () {
            var e = this.zoom, t = e.gesture, i = e.image, s = e.velocity;
            if (t.$imageEl && 0 !== t.$imageEl.length) {
                if (!i.isTouched || !i.isMoved) return i.isTouched = !1, void (i.isMoved = !1);
                i.isTouched = !1, i.isMoved = !1;
                var a = 300, r = 300, n = s.x * a, l = i.currentX + n, o = s.y * r, d = i.currentY + o;
                0 !== s.x && (a = Math.abs((l - i.currentX) / s.x)), 0 !== s.y && (r = Math.abs((d - i.currentY) / s.y));
                var h = Math.max(a, r);
                i.currentX = l, i.currentY = d;
                var p = i.width * e.scale, u = i.height * e.scale;
                i.minX = Math.min(t.slideWidth / 2 - p / 2, 0), i.maxX = -i.minX, i.minY = Math.min(t.slideHeight / 2 - u / 2, 0), i.maxY = -i.minY, i.currentX = Math.max(Math.min(i.currentX, i.maxX), i.minX), i.currentY = Math.max(Math.min(i.currentY, i.maxY), i.minY), t.$imageWrapEl.transition(h).transform("translate3d(" + i.currentX + "px, " + i.currentY + "px,0)")
            }
        }, onTransitionEnd: function () {
            var e = this.zoom, t = e.gesture;
            t.$slideEl && this.previousIndex !== this.activeIndex && (t.$imageEl && t.$imageEl.transform("translate3d(0,0,0) scale(1)"), t.$imageWrapEl && t.$imageWrapEl.transform("translate3d(0,0,0)"), e.scale = 1, e.currentScale = 1, t.$slideEl = void 0, t.$imageEl = void 0, t.$imageWrapEl = void 0)
        }, toggle: function (e) {
            var t = this.zoom;
            t.scale && 1 !== t.scale ? t.out() : t.in(e)
        }, in: function (e) {
            var t, i, s, a, r, n, l, o, d, h, p, u, c, v, f, m, g = this.zoom, w = this.params.zoom, y = g.gesture,
                b = g.image;
            y.$slideEl || (this.params.virtual && this.params.virtual.enabled && this.virtual ? y.$slideEl = this.$wrapperEl.children("." + this.params.slideActiveClass) : y.$slideEl = this.slides.eq(this.activeIndex), y.$imageEl = y.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), y.$imageWrapEl = y.$imageEl.parent("." + w.containerClass)), y.$imageEl && 0 !== y.$imageEl.length && (y.$slideEl.addClass("" + w.zoomedSlideClass), void 0 === b.touchesStart.x && e ? (t = "touchend" === e.type ? e.changedTouches[0].pageX : e.pageX, i = "touchend" === e.type ? e.changedTouches[0].pageY : e.pageY) : (t = b.touchesStart.x, i = b.touchesStart.y), g.scale = y.$imageWrapEl.attr("data-swiper-zoom") || w.maxRatio, g.currentScale = y.$imageWrapEl.attr("data-swiper-zoom") || w.maxRatio, e ? (f = y.$slideEl[0].offsetWidth, m = y.$slideEl[0].offsetHeight, s = y.$slideEl.offset().left + f / 2 - t, a = y.$slideEl.offset().top + m / 2 - i, l = y.$imageEl[0].offsetWidth, o = y.$imageEl[0].offsetHeight, d = l * g.scale, h = o * g.scale, c = -(p = Math.min(f / 2 - d / 2, 0)), v = -(u = Math.min(m / 2 - h / 2, 0)), (r = s * g.scale) < p && (r = p), r > c && (r = c), (n = a * g.scale) < u && (n = u), n > v && (n = v)) : (r = 0, n = 0), y.$imageWrapEl.transition(300).transform("translate3d(" + r + "px, " + n + "px,0)"), y.$imageEl.transition(300).transform("translate3d(0,0,0) scale(" + g.scale + ")"))
        }, out: function () {
            var e = this.zoom, t = this.params.zoom, i = e.gesture;
            i.$slideEl || (this.params.virtual && this.params.virtual.enabled && this.virtual ? i.$slideEl = this.$wrapperEl.children("." + this.params.slideActiveClass) : i.$slideEl = this.slides.eq(this.activeIndex), i.$imageEl = i.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), i.$imageWrapEl = i.$imageEl.parent("." + t.containerClass)), i.$imageEl && 0 !== i.$imageEl.length && (e.scale = 1, e.currentScale = 1, i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"), i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"), i.$slideEl.removeClass("" + t.zoomedSlideClass), i.$slideEl = void 0)
        }, toggleGestures: function (e) {
            var t = this.zoom, i = t.slideSelector, s = t.passiveListener;
            this.$wrapperEl[e]("gesturestart", i, t.onGestureStart, s), this.$wrapperEl[e]("gesturechange", i, t.onGestureChange, s), this.$wrapperEl[e]("gestureend", i, t.onGestureEnd, s)
        }, enableGestures: function () {
            this.zoom.gesturesEnabled || (this.zoom.gesturesEnabled = !0, this.zoom.toggleGestures("on"))
        }, disableGestures: function () {
            this.zoom.gesturesEnabled && (this.zoom.gesturesEnabled = !1, this.zoom.toggleGestures("off"))
        }, enable: function () {
            var e = this.support, t = this.zoom;
            if (!t.enabled) {
                t.enabled = !0;
                var i = !("touchstart" !== this.touchEvents.start || !e.passiveListener || !this.params.passiveListeners) && {
                    passive: !0,
                    capture: !1
                }, s = !e.passiveListener || {passive: !1, capture: !0}, a = "." + this.params.slideClass;
                this.zoom.passiveListener = i, this.zoom.slideSelector = a, e.gestures ? (this.$wrapperEl.on(this.touchEvents.start, this.zoom.enableGestures, i), this.$wrapperEl.on(this.touchEvents.end, this.zoom.disableGestures, i)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.on(this.touchEvents.start, a, t.onGestureStart, i), this.$wrapperEl.on(this.touchEvents.move, a, t.onGestureChange, s), this.$wrapperEl.on(this.touchEvents.end, a, t.onGestureEnd, i), this.touchEvents.cancel && this.$wrapperEl.on(this.touchEvents.cancel, a, t.onGestureEnd, i)), this.$wrapperEl.on(this.touchEvents.move, "." + this.params.zoom.containerClass, t.onTouchMove, s)
            }
        }, disable: function () {
            var e = this.zoom;
            if (e.enabled) {
                var t = this.support;
                this.zoom.enabled = !1;
                var i = !("touchstart" !== this.touchEvents.start || !t.passiveListener || !this.params.passiveListeners) && {
                    passive: !0,
                    capture: !1
                }, s = !t.passiveListener || {passive: !1, capture: !0}, a = "." + this.params.slideClass;
                t.gestures ? (this.$wrapperEl.off(this.touchEvents.start, this.zoom.enableGestures, i), this.$wrapperEl.off(this.touchEvents.end, this.zoom.disableGestures, i)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.off(this.touchEvents.start, a, e.onGestureStart, i), this.$wrapperEl.off(this.touchEvents.move, a, e.onGestureChange, s), this.$wrapperEl.off(this.touchEvents.end, a, e.onGestureEnd, i), this.touchEvents.cancel && this.$wrapperEl.off(this.touchEvents.cancel, a, e.onGestureEnd, i)), this.$wrapperEl.off(this.touchEvents.move, "." + this.params.zoom.containerClass, e.onTouchMove, s)
            }
        }
    }, te = {
        loadInSlide: function (e, t) {
            void 0 === t && (t = !0);
            var i = this, s = i.params.lazy;
            if (void 0 !== e && 0 !== i.slides.length) {
                var a = i.virtual && i.params.virtual.enabled ? i.$wrapperEl.children("." + i.params.slideClass + '[data-swiper-slide-index="' + e + '"]') : i.slides.eq(e),
                    r = a.find("." + s.elementClass + ":not(." + s.loadedClass + "):not(." + s.loadingClass + ")");
                !a.hasClass(s.elementClass) || a.hasClass(s.loadedClass) || a.hasClass(s.loadingClass) || r.push(a[0]), 0 !== r.length && r.each((function (e) {
                    var r = m(e);
                    r.addClass(s.loadingClass);
                    var n = r.attr("data-background"), l = r.attr("data-src"), o = r.attr("data-srcset"),
                        d = r.attr("data-sizes"), h = r.parent("picture");
                    i.loadImage(r[0], l || n, o, d, !1, (function () {
                        if (null != i && i && (!i || i.params) && !i.destroyed) {
                            if (n ? (r.css("background-image", 'url("' + n + '")'), r.removeAttr("data-background")) : (o && (r.attr("srcset", o), r.removeAttr("data-srcset")), d && (r.attr("sizes", d), r.removeAttr("data-sizes")), h.length && h.children("source").each((function (e) {
                                var t = m(e);
                                t.attr("data-srcset") && (t.attr("srcset", t.attr("data-srcset")), t.removeAttr("data-srcset"))
                            })), l && (r.attr("src", l), r.removeAttr("data-src"))), r.addClass(s.loadedClass).removeClass(s.loadingClass), a.find("." + s.preloaderClass).remove(), i.params.loop && t) {
                                var e = a.attr("data-swiper-slide-index");
                                if (a.hasClass(i.params.slideDuplicateClass)) {
                                    var p = i.$wrapperEl.children('[data-swiper-slide-index="' + e + '"]:not(.' + i.params.slideDuplicateClass + ")");
                                    i.lazy.loadInSlide(p.index(), !1)
                                } else {
                                    var u = i.$wrapperEl.children("." + i.params.slideDuplicateClass + '[data-swiper-slide-index="' + e + '"]');
                                    i.lazy.loadInSlide(u.index(), !1)
                                }
                            }
                            i.emit("lazyImageReady", a[0], r[0]), i.params.autoHeight && i.updateAutoHeight()
                        }
                    })), i.emit("lazyImageLoad", a[0], r[0])
                }))
            }
        }, load: function () {
            var e = this, t = e.$wrapperEl, i = e.params, s = e.slides, a = e.activeIndex,
                r = e.virtual && i.virtual.enabled, n = i.lazy, l = i.slidesPerView;

            function o(e) {
                if (r) {
                    if (t.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]').length) return !0
                } else if (s[e]) return !0;
                return !1
            }

            function d(e) {
                return r ? m(e).attr("data-swiper-slide-index") : m(e).index()
            }

            if ("auto" === l && (l = 0), e.lazy.initialImageLoaded || (e.lazy.initialImageLoaded = !0), e.params.watchSlidesVisibility) t.children("." + i.slideVisibleClass).each((function (t) {
                var i = r ? m(t).attr("data-swiper-slide-index") : m(t).index();
                e.lazy.loadInSlide(i)
            })); else if (l > 1) for (var h = a; h < a + l; h += 1) o(h) && e.lazy.loadInSlide(h); else e.lazy.loadInSlide(a);
            if (n.loadPrevNext) if (l > 1 || n.loadPrevNextAmount && n.loadPrevNextAmount > 1) {
                for (var p = n.loadPrevNextAmount, u = l, c = Math.min(a + u + Math.max(p, u), s.length), v = Math.max(a - Math.max(u, p), 0), f = a + l; f < c; f += 1) o(f) && e.lazy.loadInSlide(f);
                for (var g = v; g < a; g += 1) o(g) && e.lazy.loadInSlide(g)
            } else {
                var w = t.children("." + i.slideNextClass);
                w.length > 0 && e.lazy.loadInSlide(d(w));
                var y = t.children("." + i.slidePrevClass);
                y.length > 0 && e.lazy.loadInSlide(d(y))
            }
        }
    }, ie = {
        LinearSpline: function (e, t) {
            var i, s, a, r, n, l = function (e, t) {
                for (s = -1, i = e.length; i - s > 1;) e[a = i + s >> 1] <= t ? s = a : i = a;
                return i
            };
            return this.x = e, this.y = t, this.lastIndex = e.length - 1, this.interpolate = function (e) {
                return e ? (n = l(this.x, e), r = n - 1, (e - this.x[r]) * (this.y[n] - this.y[r]) / (this.x[n] - this.x[r]) + this.y[r]) : 0
            }, this
        }, getInterpolateFunction: function (e) {
            this.controller.spline || (this.controller.spline = this.params.loop ? new ie.LinearSpline(this.slidesGrid, e.slidesGrid) : new ie.LinearSpline(this.snapGrid, e.snapGrid))
        }, setTranslate: function (e, t) {
            var i, s, a = this, r = a.controller.control, n = a.constructor;

            function l(e) {
                var t = a.rtlTranslate ? -a.translate : a.translate;
                "slide" === a.params.controller.by && (a.controller.getInterpolateFunction(e), s = -a.controller.spline.interpolate(-t)), s && "container" !== a.params.controller.by || (i = (e.maxTranslate() - e.minTranslate()) / (a.maxTranslate() - a.minTranslate()), s = (t - a.minTranslate()) * i + e.minTranslate()), a.params.controller.inverse && (s = e.maxTranslate() - s), e.updateProgress(s), e.setTranslate(s, a), e.updateActiveIndex(), e.updateSlidesClasses()
            }

            if (Array.isArray(r)) for (var o = 0; o < r.length; o += 1) r[o] !== t && r[o] instanceof n && l(r[o]); else r instanceof n && t !== r && l(r)
        }, setTransition: function (e, t) {
            var i, s = this, a = s.constructor, r = s.controller.control;

            function n(t) {
                t.setTransition(e, s), 0 !== e && (t.transitionStart(), t.params.autoHeight && E((function () {
                    t.updateAutoHeight()
                })), t.$wrapperEl.transitionEnd((function () {
                    r && (t.params.loop && "slide" === s.params.controller.by && t.loopFix(), t.transitionEnd())
                })))
            }

            if (Array.isArray(r)) for (i = 0; i < r.length; i += 1) r[i] !== t && r[i] instanceof a && n(r[i]); else r instanceof a && t !== r && n(r)
        }
    }, se = {
        getRandomNumber: function (e) {
            return void 0 === e && (e = 16), "x".repeat(e).replace(/x/g, (function () {
                return Math.round(16 * Math.random()).toString(16)
            }))
        }, makeElFocusable: function (e) {
            return e.attr("tabIndex", "0"), e
        }, makeElNotFocusable: function (e) {
            return e.attr("tabIndex", "-1"), e
        }, addElRole: function (e, t) {
            return e.attr("role", t), e
        }, addElRoleDescription: function (e, t) {
            return e.attr("aria-role-description", t), e
        }, addElControls: function (e, t) {
            return e.attr("aria-controls", t), e
        }, addElLabel: function (e, t) {
            return e.attr("aria-label", t), e
        }, addElId: function (e, t) {
            return e.attr("id", t), e
        }, addElLive: function (e, t) {
            return e.attr("aria-live", t), e
        }, disableEl: function (e) {
            return e.attr("aria-disabled", !0), e
        }, enableEl: function (e) {
            return e.attr("aria-disabled", !1), e
        }, onEnterKey: function (e) {
            var t = this.params.a11y;
            if (13 === e.keyCode) {
                var i = m(e.target);
                this.navigation && this.navigation.$nextEl && i.is(this.navigation.$nextEl) && (this.isEnd && !this.params.loop || this.slideNext(), this.isEnd ? this.a11y.notify(t.lastSlideMessage) : this.a11y.notify(t.nextSlideMessage)), this.navigation && this.navigation.$prevEl && i.is(this.navigation.$prevEl) && (this.isBeginning && !this.params.loop || this.slidePrev(), this.isBeginning ? this.a11y.notify(t.firstSlideMessage) : this.a11y.notify(t.prevSlideMessage)), this.pagination && i.is("." + this.params.pagination.bulletClass) && i[0].click()
            }
        }, notify: function (e) {
            var t = this.a11y.liveRegion;
            0 !== t.length && (t.html(""), t.html(e))
        }, updateNavigation: function () {
            if (!this.params.loop && this.navigation) {
                var e = this.navigation, t = e.$nextEl, i = e.$prevEl;
                i && i.length > 0 && (this.isBeginning ? (this.a11y.disableEl(i), this.a11y.makeElNotFocusable(i)) : (this.a11y.enableEl(i), this.a11y.makeElFocusable(i))), t && t.length > 0 && (this.isEnd ? (this.a11y.disableEl(t), this.a11y.makeElNotFocusable(t)) : (this.a11y.enableEl(t), this.a11y.makeElFocusable(t)))
            }
        }, updatePagination: function () {
            var e = this, t = e.params.a11y;
            e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.bullets.each((function (i) {
                var s = m(i);
                e.a11y.makeElFocusable(s), e.params.pagination.renderBullet || (e.a11y.addElRole(s, "button"), e.a11y.addElLabel(s, t.paginationBulletMessage.replace(/\{\{index\}\}/, s.index() + 1)))
            }))
        }, init: function () {
            var e = this, t = e.params.a11y;
            e.$el.append(e.a11y.liveRegion);
            var i = e.$el;
            t.containerRoleDescriptionMessage && e.a11y.addElRoleDescription(i, t.containerRoleDescriptionMessage), t.containerMessage && e.a11y.addElLabel(i, t.containerMessage);
            var s, a, r, n = e.$wrapperEl, l = n.attr("id") || "swiper-wrapper-" + e.a11y.getRandomNumber(16);
            e.a11y.addElId(n, l), s = e.params.autoplay && e.params.autoplay.enabled ? "off" : "polite", e.a11y.addElLive(n, s), t.itemRoleDescriptionMessage && e.a11y.addElRoleDescription(m(e.slides), t.itemRoleDescriptionMessage), e.a11y.addElRole(m(e.slides), "group"), e.slides.each((function (t) {
                var i = m(t);
                e.a11y.addElLabel(i, i.index() + 1 + " / " + e.slides.length)
            })), e.navigation && e.navigation.$nextEl && (a = e.navigation.$nextEl), e.navigation && e.navigation.$prevEl && (r = e.navigation.$prevEl), a && a.length && (e.a11y.makeElFocusable(a), "BUTTON" !== a[0].tagName && (e.a11y.addElRole(a, "button"), a.on("keydown", e.a11y.onEnterKey)), e.a11y.addElLabel(a, t.nextSlideMessage), e.a11y.addElControls(a, l)), r && r.length && (e.a11y.makeElFocusable(r), "BUTTON" !== r[0].tagName && (e.a11y.addElRole(r, "button"), r.on("keydown", e.a11y.onEnterKey)), e.a11y.addElLabel(r, t.prevSlideMessage), e.a11y.addElControls(r, l)), e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.$el.on("keydown", "." + e.params.pagination.bulletClass, e.a11y.onEnterKey)
        }, destroy: function () {
            var e, t;
            this.a11y.liveRegion && this.a11y.liveRegion.length > 0 && this.a11y.liveRegion.remove(), this.navigation && this.navigation.$nextEl && (e = this.navigation.$nextEl), this.navigation && this.navigation.$prevEl && (t = this.navigation.$prevEl), e && e.off("keydown", this.a11y.onEnterKey), t && t.off("keydown", this.a11y.onEnterKey), this.pagination && this.params.pagination.clickable && this.pagination.bullets && this.pagination.bullets.length && this.pagination.$el.off("keydown", "." + this.params.pagination.bulletClass, this.a11y.onEnterKey)
        }
    }, ae = {
        init: function () {
            var e = l();
            if (this.params.history) {
                if (!e.history || !e.history.pushState) return this.params.history.enabled = !1, void (this.params.hashNavigation.enabled = !0);
                var t = this.history;
                t.initialized = !0, t.paths = ae.getPathValues(this.params.url), (t.paths.key || t.paths.value) && (t.scrollToSlide(0, t.paths.value, this.params.runCallbacksOnInit), this.params.history.replaceState || e.addEventListener("popstate", this.history.setHistoryPopState))
            }
        }, destroy: function () {
            var e = l();
            this.params.history.replaceState || e.removeEventListener("popstate", this.history.setHistoryPopState)
        }, setHistoryPopState: function () {
            this.history.paths = ae.getPathValues(this.params.url), this.history.scrollToSlide(this.params.speed, this.history.paths.value, !1)
        }, getPathValues: function (e) {
            var t = l(), i = (e ? new URL(e) : t.location).pathname.slice(1).split("/").filter((function (e) {
                return "" !== e
            })), s = i.length;
            return {key: i[s - 2], value: i[s - 1]}
        }, setHistory: function (e, t) {
            var i = l();
            if (this.history.initialized && this.params.history.enabled) {
                var s;
                s = this.params.url ? new URL(this.params.url) : i.location;
                var a = this.slides.eq(t), r = ae.slugify(a.attr("data-history"));
                s.pathname.includes(e) || (r = e + "/" + r);
                var n = i.history.state;
                n && n.value === r || (this.params.history.replaceState ? i.history.replaceState({value: r}, null, r) : i.history.pushState({value: r}, null, r))
            }
        }, slugify: function (e) {
            return e.toString().replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
        }, scrollToSlide: function (e, t, i) {
            if (t) for (var s = 0, a = this.slides.length; s < a; s += 1) {
                var r = this.slides.eq(s);
                if (ae.slugify(r.attr("data-history")) === t && !r.hasClass(this.params.slideDuplicateClass)) {
                    var n = r.index();
                    this.slideTo(n, e, i)
                }
            } else this.slideTo(0, e, i)
        }
    }, re = {
        onHashCange: function () {
            var e = r();
            this.emit("hashChange");
            var t = e.location.hash.replace("#", "");
            if (t !== this.slides.eq(this.activeIndex).attr("data-hash")) {
                var i = this.$wrapperEl.children("." + this.params.slideClass + '[data-hash="' + t + '"]').index();
                if (void 0 === i) return;
                this.slideTo(i)
            }
        }, setHash: function () {
            var e = l(), t = r();
            if (this.hashNavigation.initialized && this.params.hashNavigation.enabled) if (this.params.hashNavigation.replaceState && e.history && e.history.replaceState) e.history.replaceState(null, null, "#" + this.slides.eq(this.activeIndex).attr("data-hash") || ""), this.emit("hashSet"); else {
                var i = this.slides.eq(this.activeIndex), s = i.attr("data-hash") || i.attr("data-history");
                t.location.hash = s || "", this.emit("hashSet")
            }
        }, init: function () {
            var e = r(), t = l();
            if (!(!this.params.hashNavigation.enabled || this.params.history && this.params.history.enabled)) {
                this.hashNavigation.initialized = !0;
                var i = e.location.hash.replace("#", "");
                if (i) for (var s = 0, a = this.slides.length; s < a; s += 1) {
                    var n = this.slides.eq(s);
                    if ((n.attr("data-hash") || n.attr("data-history")) === i && !n.hasClass(this.params.slideDuplicateClass)) {
                        var o = n.index();
                        this.slideTo(o, 0, this.params.runCallbacksOnInit, !0)
                    }
                }
                this.params.hashNavigation.watchState && m(t).on("hashchange", this.hashNavigation.onHashCange)
            }
        }, destroy: function () {
            var e = l();
            this.params.hashNavigation.watchState && m(e).off("hashchange", this.hashNavigation.onHashCange)
        }
    }, ne = {
        run: function () {
            var e = this, t = e.slides.eq(e.activeIndex), i = e.params.autoplay.delay;
            t.attr("data-swiper-autoplay") && (i = t.attr("data-swiper-autoplay") || e.params.autoplay.delay), clearTimeout(e.autoplay.timeout), e.autoplay.timeout = E((function () {
                var t;
                e.params.autoplay.reverseDirection ? e.params.loop ? (e.loopFix(), t = e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.isBeginning ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (t = e.slideTo(e.slides.length - 1, e.params.speed, !0, !0), e.emit("autoplay")) : (t = e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.params.loop ? (e.loopFix(), t = e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")) : e.isEnd ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (t = e.slideTo(0, e.params.speed, !0, !0), e.emit("autoplay")) : (t = e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")), (e.params.cssMode && e.autoplay.running || !1 === t) && e.autoplay.run()
            }), i)
        }, start: function () {
            return void 0 === this.autoplay.timeout && !this.autoplay.running && (this.autoplay.running = !0, this.emit("autoplayStart"), this.autoplay.run(), !0)
        }, stop: function () {
            return !!this.autoplay.running && void 0 !== this.autoplay.timeout && (this.autoplay.timeout && (clearTimeout(this.autoplay.timeout), this.autoplay.timeout = void 0), this.autoplay.running = !1, this.emit("autoplayStop"), !0)
        }, pause: function (e) {
            this.autoplay.running && (this.autoplay.paused || (this.autoplay.timeout && clearTimeout(this.autoplay.timeout), this.autoplay.paused = !0, 0 !== e && this.params.autoplay.waitForTransition ? (this.$wrapperEl[0].addEventListener("transitionend", this.autoplay.onTransitionEnd), this.$wrapperEl[0].addEventListener("webkitTransitionEnd", this.autoplay.onTransitionEnd)) : (this.autoplay.paused = !1, this.autoplay.run())))
        }, onVisibilityChange: function () {
            var e = r();
            "hidden" === e.visibilityState && this.autoplay.running && this.autoplay.pause(), "visible" === e.visibilityState && this.autoplay.paused && (this.autoplay.run(), this.autoplay.paused = !1)
        }, onTransitionEnd: function (e) {
            this && !this.destroyed && this.$wrapperEl && e.target === this.$wrapperEl[0] && (this.$wrapperEl[0].removeEventListener("transitionend", this.autoplay.onTransitionEnd), this.$wrapperEl[0].removeEventListener("webkitTransitionEnd", this.autoplay.onTransitionEnd), this.autoplay.paused = !1, this.autoplay.running ? this.autoplay.run() : this.autoplay.stop())
        }
    }, le = {
        setTranslate: function () {
            for (var e = this.slides, t = 0; t < e.length; t += 1) {
                var i = this.slides.eq(t), s = -i[0].swiperSlideOffset;
                this.params.virtualTranslate || (s -= this.translate);
                var a = 0;
                this.isHorizontal() || (a = s, s = 0);
                var r = this.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(i[0].progress), 0) : 1 + Math.min(Math.max(i[0].progress, -1), 0);
                i.css({opacity: r}).transform("translate3d(" + s + "px, " + a + "px, 0px)")
            }
        }, setTransition: function (e) {
            var t = this, i = t.slides, s = t.$wrapperEl;
            if (i.transition(e), t.params.virtualTranslate && 0 !== e) {
                var a = !1;
                i.transitionEnd((function () {
                    if (!a && t && !t.destroyed) {
                        a = !0, t.animating = !1;
                        for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) s.trigger(e[i])
                    }
                }))
            }
        }
    }, oe = {
        setTranslate: function () {
            var e, t = this.$el, i = this.$wrapperEl, s = this.slides, a = this.width, r = this.height,
                n = this.rtlTranslate, l = this.size, o = this.browser, d = this.params.cubeEffect,
                h = this.isHorizontal(), p = this.virtual && this.params.virtual.enabled, u = 0;
            d.shadow && (h ? (0 === (e = i.find(".swiper-cube-shadow")).length && (e = m('<div class="swiper-cube-shadow"></div>'), i.append(e)), e.css({height: a + "px"})) : 0 === (e = t.find(".swiper-cube-shadow")).length && (e = m('<div class="swiper-cube-shadow"></div>'), t.append(e)));
            for (var c = 0; c < s.length; c += 1) {
                var v = s.eq(c), f = c;
                p && (f = parseInt(v.attr("data-swiper-slide-index"), 10));
                var g = 90 * f, w = Math.floor(g / 360);
                n && (g = -g, w = Math.floor(-g / 360));
                var y = Math.max(Math.min(v[0].progress, 1), -1), b = 0, E = 0, x = 0;
                f % 4 == 0 ? (b = 4 * -w * l, x = 0) : (f - 1) % 4 == 0 ? (b = 0, x = 4 * -w * l) : (f - 2) % 4 == 0 ? (b = l + 4 * w * l, x = l) : (f - 3) % 4 == 0 && (b = -l, x = 3 * l + 4 * l * w), n && (b = -b), h || (E = b, b = 0);
                var T = "rotateX(" + (h ? 0 : -g) + "deg) rotateY(" + (h ? g : 0) + "deg) translate3d(" + b + "px, " + E + "px, " + x + "px)";
                if (y <= 1 && y > -1 && (u = 90 * f + 90 * y, n && (u = 90 * -f - 90 * y)), v.transform(T), d.slideShadows) {
                    var C = h ? v.find(".swiper-slide-shadow-left") : v.find(".swiper-slide-shadow-top"),
                        S = h ? v.find(".swiper-slide-shadow-right") : v.find(".swiper-slide-shadow-bottom");
                    0 === C.length && (C = m('<div class="swiper-slide-shadow-' + (h ? "left" : "top") + '"></div>'), v.append(C)), 0 === S.length && (S = m('<div class="swiper-slide-shadow-' + (h ? "right" : "bottom") + '"></div>'), v.append(S)), C.length && (C[0].style.opacity = Math.max(-y, 0)), S.length && (S[0].style.opacity = Math.max(y, 0))
                }
            }
            if (i.css({
                "-webkit-transform-origin": "50% 50% -" + l / 2 + "px",
                "-moz-transform-origin": "50% 50% -" + l / 2 + "px",
                "-ms-transform-origin": "50% 50% -" + l / 2 + "px",
                "transform-origin": "50% 50% -" + l / 2 + "px"
            }), d.shadow) if (h) e.transform("translate3d(0px, " + (a / 2 + d.shadowOffset) + "px, " + -a / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + d.shadowScale + ")"); else {
                var M = Math.abs(u) - 90 * Math.floor(Math.abs(u) / 90),
                    z = 1.5 - (Math.sin(2 * M * Math.PI / 360) / 2 + Math.cos(2 * M * Math.PI / 360) / 2),
                    P = d.shadowScale, k = d.shadowScale / z, $ = d.shadowOffset;
                e.transform("scale3d(" + P + ", 1, " + k + ") translate3d(0px, " + (r / 2 + $) + "px, " + -r / 2 / k + "px) rotateX(-90deg)")
            }
            var L = o.isSafari || o.isWebView ? -l / 2 : 0;
            i.transform("translate3d(0px,0," + L + "px) rotateX(" + (this.isHorizontal() ? 0 : u) + "deg) rotateY(" + (this.isHorizontal() ? -u : 0) + "deg)")
        }, setTransition: function (e) {
            var t = this.$el;
            this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), this.params.cubeEffect.shadow && !this.isHorizontal() && t.find(".swiper-cube-shadow").transition(e)
        }
    }, de = {
        setTranslate: function () {
            for (var e = this.slides, t = this.rtlTranslate, i = 0; i < e.length; i += 1) {
                var s = e.eq(i), a = s[0].progress;
                this.params.flipEffect.limitRotation && (a = Math.max(Math.min(s[0].progress, 1), -1));
                var r = -180 * a, n = 0, l = -s[0].swiperSlideOffset, o = 0;
                if (this.isHorizontal() ? t && (r = -r) : (o = l, l = 0, n = -r, r = 0), s[0].style.zIndex = -Math.abs(Math.round(a)) + e.length, this.params.flipEffect.slideShadows) {
                    var d = this.isHorizontal() ? s.find(".swiper-slide-shadow-left") : s.find(".swiper-slide-shadow-top"),
                        h = this.isHorizontal() ? s.find(".swiper-slide-shadow-right") : s.find(".swiper-slide-shadow-bottom");
                    0 === d.length && (d = m('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "left" : "top") + '"></div>'), s.append(d)), 0 === h.length && (h = m('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "right" : "bottom") + '"></div>'), s.append(h)), d.length && (d[0].style.opacity = Math.max(-a, 0)), h.length && (h[0].style.opacity = Math.max(a, 0))
                }
                s.transform("translate3d(" + l + "px, " + o + "px, 0px) rotateX(" + n + "deg) rotateY(" + r + "deg)")
            }
        }, setTransition: function (e) {
            var t = this, i = t.slides, s = t.activeIndex, a = t.$wrapperEl;
            if (i.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), t.params.virtualTranslate && 0 !== e) {
                var r = !1;
                i.eq(s).transitionEnd((function () {
                    if (!r && t && !t.destroyed) {
                        r = !0, t.animating = !1;
                        for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) a.trigger(e[i])
                    }
                }))
            }
        }
    }, he = {
        setTranslate: function () {
            for (var e = this.width, t = this.height, i = this.slides, s = this.slidesSizesGrid, a = this.params.coverflowEffect, r = this.isHorizontal(), n = this.translate, l = r ? e / 2 - n : t / 2 - n, o = r ? a.rotate : -a.rotate, d = a.depth, h = 0, p = i.length; h < p; h += 1) {
                var u = i.eq(h), c = s[h], v = (l - u[0].swiperSlideOffset - c / 2) / c * a.modifier, f = r ? o * v : 0,
                    g = r ? 0 : o * v, w = -d * Math.abs(v), y = a.stretch;
                "string" == typeof y && -1 !== y.indexOf("%") && (y = parseFloat(a.stretch) / 100 * c);
                var b = r ? 0 : y * v, E = r ? y * v : 0, x = 1 - (1 - a.scale) * Math.abs(v);
                Math.abs(E) < .001 && (E = 0), Math.abs(b) < .001 && (b = 0), Math.abs(w) < .001 && (w = 0), Math.abs(f) < .001 && (f = 0), Math.abs(g) < .001 && (g = 0), Math.abs(x) < .001 && (x = 0);
                var T = "translate3d(" + E + "px," + b + "px," + w + "px)  rotateX(" + g + "deg) rotateY(" + f + "deg) scale(" + x + ")";
                if (u.transform(T), u[0].style.zIndex = 1 - Math.abs(Math.round(v)), a.slideShadows) {
                    var C = r ? u.find(".swiper-slide-shadow-left") : u.find(".swiper-slide-shadow-top"),
                        S = r ? u.find(".swiper-slide-shadow-right") : u.find(".swiper-slide-shadow-bottom");
                    0 === C.length && (C = m('<div class="swiper-slide-shadow-' + (r ? "left" : "top") + '"></div>'), u.append(C)), 0 === S.length && (S = m('<div class="swiper-slide-shadow-' + (r ? "right" : "bottom") + '"></div>'), u.append(S)), C.length && (C[0].style.opacity = v > 0 ? v : 0), S.length && (S[0].style.opacity = -v > 0 ? -v : 0)
                }
            }
        }, setTransition: function (e) {
            this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
        }
    }, pe = {
        init: function () {
            var e = this.params.thumbs;
            if (this.thumbs.initialized) return !1;
            this.thumbs.initialized = !0;
            var t = this.constructor;
            return e.swiper instanceof t ? (this.thumbs.swiper = e.swiper, S(this.thumbs.swiper.originalParams, {
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            }), S(this.thumbs.swiper.params, {
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            })) : C(e.swiper) && (this.thumbs.swiper = new t(S({}, e.swiper, {
                watchSlidesVisibility: !0,
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            })), this.thumbs.swiperCreated = !0), this.thumbs.swiper.$el.addClass(this.params.thumbs.thumbsContainerClass), this.thumbs.swiper.on("tap", this.thumbs.onThumbClick), !0
        }, onThumbClick: function () {
            var e = this.thumbs.swiper;
            if (e) {
                var t = e.clickedIndex, i = e.clickedSlide;
                if (!(i && m(i).hasClass(this.params.thumbs.slideThumbActiveClass) || null == t)) {
                    var s;
                    if (s = e.params.loop ? parseInt(m(e.clickedSlide).attr("data-swiper-slide-index"), 10) : t, this.params.loop) {
                        var a = this.activeIndex;
                        this.slides.eq(a).hasClass(this.params.slideDuplicateClass) && (this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft, a = this.activeIndex);
                        var r = this.slides.eq(a).prevAll('[data-swiper-slide-index="' + s + '"]').eq(0).index(),
                            n = this.slides.eq(a).nextAll('[data-swiper-slide-index="' + s + '"]').eq(0).index();
                        s = void 0 === r ? n : void 0 === n ? r : n - a < a - r ? n : r
                    }
                    this.slideTo(s)
                }
            }
        }, update: function (e) {
            var t = this.thumbs.swiper;
            if (t) {
                var i = "auto" === t.params.slidesPerView ? t.slidesPerViewDynamic() : t.params.slidesPerView,
                    s = this.params.thumbs.autoScrollOffset, a = s && !t.params.loop;
                if (this.realIndex !== t.realIndex || a) {
                    var r, n, l = t.activeIndex;
                    if (t.params.loop) {
                        t.slides.eq(l).hasClass(t.params.slideDuplicateClass) && (t.loopFix(), t._clientLeft = t.$wrapperEl[0].clientLeft, l = t.activeIndex);
                        var o = t.slides.eq(l).prevAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index(),
                            d = t.slides.eq(l).nextAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index();
                        r = void 0 === o ? d : void 0 === d ? o : d - l == l - o ? l : d - l < l - o ? d : o, n = this.activeIndex > this.previousIndex ? "next" : "prev"
                    } else n = (r = this.realIndex) > this.previousIndex ? "next" : "prev";
                    a && (r += "next" === n ? s : -1 * s), t.visibleSlidesIndexes && t.visibleSlidesIndexes.indexOf(r) < 0 && (t.params.centeredSlides ? r = r > l ? r - Math.floor(i / 2) + 1 : r + Math.floor(i / 2) - 1 : r > l && (r = r - i + 1), t.slideTo(r, e ? 0 : void 0))
                }
                var h = 1, p = this.params.thumbs.slideThumbActiveClass;
                if (this.params.slidesPerView > 1 && !this.params.centeredSlides && (h = this.params.slidesPerView), this.params.thumbs.multipleActiveThumbs || (h = 1), h = Math.floor(h), t.slides.removeClass(p), t.params.loop || t.params.virtual && t.params.virtual.enabled) for (var u = 0; u < h; u += 1) t.$wrapperEl.children('[data-swiper-slide-index="' + (this.realIndex + u) + '"]').addClass(p); else for (var c = 0; c < h; c += 1) t.slides.eq(this.realIndex + c).addClass(p)
            }
        }
    }, ue = [q, _, {
        name: "mousewheel",
        params: {
            mousewheel: {
                enabled: !1,
                releaseOnEdges: !1,
                invert: !1,
                forceToAxis: !1,
                sensitivity: 1,
                eventsTarget: "container",
                thresholdDelta: null,
                thresholdTime: null
            }
        },
        create: function () {
            M(this, {
                mousewheel: {
                    enabled: !1,
                    lastScrollTime: x(),
                    lastEventBeforeSnap: void 0,
                    recentWheelEvents: [],
                    enable: U.enable,
                    disable: U.disable,
                    handle: U.handle,
                    handleMouseEnter: U.handleMouseEnter,
                    handleMouseLeave: U.handleMouseLeave,
                    animateSlider: U.animateSlider,
                    releaseScroll: U.releaseScroll
                }
            })
        },
        on: {
            init: function (e) {
                !e.params.mousewheel.enabled && e.params.cssMode && e.mousewheel.disable(), e.params.mousewheel.enabled && e.mousewheel.enable()
            }, destroy: function (e) {
                e.params.cssMode && e.mousewheel.enable(), e.mousewheel.enabled && e.mousewheel.disable()
            }
        }
    }, {
        name: "navigation",
        params: {
            navigation: {
                nextEl: null,
                prevEl: null,
                hideOnClick: !1,
                disabledClass: "swiper-button-disabled",
                hiddenClass: "swiper-button-hidden",
                lockClass: "swiper-button-lock"
            }
        },
        create: function () {
            M(this, {navigation: t({}, K)})
        },
        on: {
            init: function (e) {
                e.navigation.init(), e.navigation.update()
            }, toEdge: function (e) {
                e.navigation.update()
            }, fromEdge: function (e) {
                e.navigation.update()
            }, destroy: function (e) {
                e.navigation.destroy()
            }, click: function (e, t) {
                var i, s = e.navigation, a = s.$nextEl, r = s.$prevEl;
                !e.params.navigation.hideOnClick || m(t.target).is(r) || m(t.target).is(a) || (a ? i = a.hasClass(e.params.navigation.hiddenClass) : r && (i = r.hasClass(e.params.navigation.hiddenClass)), !0 === i ? e.emit("navigationShow") : e.emit("navigationHide"), a && a.toggleClass(e.params.navigation.hiddenClass), r && r.toggleClass(e.params.navigation.hiddenClass))
            }
        }
    }, {
        name: "pagination",
        params: {
            pagination: {
                el: null,
                bulletElement: "span",
                clickable: !1,
                hideOnClick: !1,
                renderBullet: null,
                renderProgressbar: null,
                renderFraction: null,
                renderCustom: null,
                progressbarOpposite: !1,
                type: "bullets",
                dynamicBullets: !1,
                dynamicMainBullets: 1,
                formatFractionCurrent: function (e) {
                    return e
                },
                formatFractionTotal: function (e) {
                    return e
                },
                bulletClass: "swiper-pagination-bullet",
                bulletActiveClass: "swiper-pagination-bullet-active",
                modifierClass: "swiper-pagination-",
                currentClass: "swiper-pagination-current",
                totalClass: "swiper-pagination-total",
                hiddenClass: "swiper-pagination-hidden",
                progressbarFillClass: "swiper-pagination-progressbar-fill",
                progressbarOppositeClass: "swiper-pagination-progressbar-opposite",
                clickableClass: "swiper-pagination-clickable",
                lockClass: "swiper-pagination-lock"
            }
        },
        create: function () {
            M(this, {pagination: t({dynamicBulletIndex: 0}, Z)})
        },
        on: {
            init: function (e) {
                e.pagination.init(), e.pagination.render(), e.pagination.update()
            }, activeIndexChange: function (e) {
                (e.params.loop || void 0 === e.snapIndex) && e.pagination.update()
            }, snapIndexChange: function (e) {
                e.params.loop || e.pagination.update()
            }, slidesLengthChange: function (e) {
                e.params.loop && (e.pagination.render(), e.pagination.update())
            }, snapGridLengthChange: function (e) {
                e.params.loop || (e.pagination.render(), e.pagination.update())
            }, destroy: function (e) {
                e.pagination.destroy()
            }, click: function (e, t) {
                e.params.pagination.el && e.params.pagination.hideOnClick && e.pagination.$el.length > 0 && !m(t.target).hasClass(e.params.pagination.bulletClass) && (!0 === e.pagination.$el.hasClass(e.params.pagination.hiddenClass) ? e.emit("paginationShow") : e.emit("paginationHide"), e.pagination.$el.toggleClass(e.params.pagination.hiddenClass))
            }
        }
    }, {
        name: "scrollbar",
        params: {
            scrollbar: {
                el: null,
                dragSize: "auto",
                hide: !1,
                draggable: !1,
                snapOnRelease: !0,
                lockClass: "swiper-scrollbar-lock",
                dragClass: "swiper-scrollbar-drag"
            }
        },
        create: function () {
            M(this, {scrollbar: t({isTouched: !1, timeout: null, dragTimeout: null}, J)})
        },
        on: {
            init: function (e) {
                e.scrollbar.init(), e.scrollbar.updateSize(), e.scrollbar.setTranslate()
            }, update: function (e) {
                e.scrollbar.updateSize()
            }, resize: function (e) {
                e.scrollbar.updateSize()
            }, observerUpdate: function (e) {
                e.scrollbar.updateSize()
            }, setTranslate: function (e) {
                e.scrollbar.setTranslate()
            }, setTransition: function (e, t) {
                e.scrollbar.setTransition(t)
            }, destroy: function (e) {
                e.scrollbar.destroy()
            }
        }
    }, {
        name: "parallax", params: {parallax: {enabled: !1}}, create: function () {
            M(this, {parallax: t({}, Q)})
        }, on: {
            beforeInit: function (e) {
                e.params.parallax.enabled && (e.params.watchSlidesProgress = !0, e.originalParams.watchSlidesProgress = !0)
            }, init: function (e) {
                e.params.parallax.enabled && e.parallax.setTranslate()
            }, setTranslate: function (e) {
                e.params.parallax.enabled && e.parallax.setTranslate()
            }, setTransition: function (e, t) {
                e.params.parallax.enabled && e.parallax.setTransition(t)
            }
        }
    }, {
        name: "zoom",
        params: {
            zoom: {
                enabled: !1,
                maxRatio: 3,
                minRatio: 1,
                toggle: !0,
                containerClass: "swiper-zoom-container",
                zoomedSlideClass: "swiper-slide-zoomed"
            }
        },
        create: function () {
            var e = this;
            M(e, {
                zoom: t({
                    enabled: !1,
                    scale: 1,
                    currentScale: 1,
                    isScaling: !1,
                    gesture: {
                        $slideEl: void 0,
                        slideWidth: void 0,
                        slideHeight: void 0,
                        $imageEl: void 0,
                        $imageWrapEl: void 0,
                        maxRatio: 3
                    },
                    image: {
                        isTouched: void 0,
                        isMoved: void 0,
                        currentX: void 0,
                        currentY: void 0,
                        minX: void 0,
                        minY: void 0,
                        maxX: void 0,
                        maxY: void 0,
                        width: void 0,
                        height: void 0,
                        startX: void 0,
                        startY: void 0,
                        touchesStart: {},
                        touchesCurrent: {}
                    },
                    velocity: {x: void 0, y: void 0, prevPositionX: void 0, prevPositionY: void 0, prevTime: void 0}
                }, ee)
            });
            var i = 1;
            Object.defineProperty(e.zoom, "scale", {
                get: function () {
                    return i
                }, set: function (t) {
                    if (i !== t) {
                        var s = e.zoom.gesture.$imageEl ? e.zoom.gesture.$imageEl[0] : void 0,
                            a = e.zoom.gesture.$slideEl ? e.zoom.gesture.$slideEl[0] : void 0;
                        e.emit("zoomChange", t, s, a)
                    }
                    i = t
                }
            })
        },
        on: {
            init: function (e) {
                e.params.zoom.enabled && e.zoom.enable()
            }, destroy: function (e) {
                e.zoom.disable()
            }, touchStart: function (e, t) {
                e.zoom.enabled && e.zoom.onTouchStart(t)
            }, touchEnd: function (e, t) {
                e.zoom.enabled && e.zoom.onTouchEnd(t)
            }, doubleTap: function (e, t) {
                e.params.zoom.enabled && e.zoom.enabled && e.params.zoom.toggle && e.zoom.toggle(t)
            }, transitionEnd: function (e) {
                e.zoom.enabled && e.params.zoom.enabled && e.zoom.onTransitionEnd()
            }, slideChange: function (e) {
                e.zoom.enabled && e.params.zoom.enabled && e.params.cssMode && e.zoom.onTransitionEnd()
            }
        }
    }, {
        name: "lazy",
        params: {
            lazy: {
                enabled: !1,
                loadPrevNext: !1,
                loadPrevNextAmount: 1,
                loadOnTransitionStart: !1,
                elementClass: "swiper-lazy",
                loadingClass: "swiper-lazy-loading",
                loadedClass: "swiper-lazy-loaded",
                preloaderClass: "swiper-lazy-preloader"
            }
        },
        create: function () {
            M(this, {lazy: t({initialImageLoaded: !1}, te)})
        },
        on: {
            beforeInit: function (e) {
                e.params.lazy.enabled && e.params.preloadImages && (e.params.preloadImages = !1)
            }, init: function (e) {
                e.params.lazy.enabled && !e.params.loop && 0 === e.params.initialSlide && e.lazy.load()
            }, scroll: function (e) {
                e.params.freeMode && !e.params.freeModeSticky && e.lazy.load()
            }, resize: function (e) {
                e.params.lazy.enabled && e.lazy.load()
            }, scrollbarDragMove: function (e) {
                e.params.lazy.enabled && e.lazy.load()
            }, transitionStart: function (e) {
                e.params.lazy.enabled && (e.params.lazy.loadOnTransitionStart || !e.params.lazy.loadOnTransitionStart && !e.lazy.initialImageLoaded) && e.lazy.load()
            }, transitionEnd: function (e) {
                e.params.lazy.enabled && !e.params.lazy.loadOnTransitionStart && e.lazy.load()
            }, slideChange: function (e) {
                e.params.lazy.enabled && e.params.cssMode && e.lazy.load()
            }
        }
    }, {
        name: "controller", params: {controller: {control: void 0, inverse: !1, by: "slide"}}, create: function () {
            M(this, {controller: t({control: this.params.controller.control}, ie)})
        }, on: {
            update: function (e) {
                e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
            }, resize: function (e) {
                e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
            }, observerUpdate: function (e) {
                e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline)
            }, setTranslate: function (e, t, i) {
                e.controller.control && e.controller.setTranslate(t, i)
            }, setTransition: function (e, t, i) {
                e.controller.control && e.controller.setTransition(t, i)
            }
        }
    }, {
        name: "a11y",
        params: {
            a11y: {
                enabled: !0,
                notificationClass: "swiper-notification",
                prevSlideMessage: "Previous slide",
                nextSlideMessage: "Next slide",
                firstSlideMessage: "This is the first slide",
                lastSlideMessage: "This is the last slide",
                paginationBulletMessage: "Go to slide {{index}}",
                containerMessage: null,
                containerRoleDescriptionMessage: null,
                itemRoleDescriptionMessage: null
            }
        },
        create: function () {
            M(this, {a11y: t(t({}, se), {}, {liveRegion: m('<span class="' + this.params.a11y.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>')})})
        },
        on: {
            afterInit: function (e) {
                e.params.a11y.enabled && (e.a11y.init(), e.a11y.updateNavigation())
            }, toEdge: function (e) {
                e.params.a11y.enabled && e.a11y.updateNavigation()
            }, fromEdge: function (e) {
                e.params.a11y.enabled && e.a11y.updateNavigation()
            }, paginationUpdate: function (e) {
                e.params.a11y.enabled && e.a11y.updatePagination()
            }, destroy: function (e) {
                e.params.a11y.enabled && e.a11y.destroy()
            }
        }
    }, {
        name: "history", params: {history: {enabled: !1, replaceState: !1, key: "slides"}}, create: function () {
            M(this, {history: t({}, ae)})
        }, on: {
            init: function (e) {
                e.params.history.enabled && e.history.init()
            }, destroy: function (e) {
                e.params.history.enabled && e.history.destroy()
            }, transitionEnd: function (e) {
                e.history.initialized && e.history.setHistory(e.params.history.key, e.activeIndex)
            }, slideChange: function (e) {
                e.history.initialized && e.params.cssMode && e.history.setHistory(e.params.history.key, e.activeIndex)
            }
        }
    }, {
        name: "hash-navigation",
        params: {hashNavigation: {enabled: !1, replaceState: !1, watchState: !1}},
        create: function () {
            M(this, {hashNavigation: t({initialized: !1}, re)})
        },
        on: {
            init: function (e) {
                e.params.hashNavigation.enabled && e.hashNavigation.init()
            }, destroy: function (e) {
                e.params.hashNavigation.enabled && e.hashNavigation.destroy()
            }, transitionEnd: function (e) {
                e.hashNavigation.initialized && e.hashNavigation.setHash()
            }, slideChange: function (e) {
                e.hashNavigation.initialized && e.params.cssMode && e.hashNavigation.setHash()
            }
        }
    }, {
        name: "autoplay",
        params: {
            autoplay: {
                enabled: !1,
                delay: 3e3,
                waitForTransition: !0,
                disableOnInteraction: !0,
                stopOnLastSlide: !1,
                reverseDirection: !1
            }
        },
        create: function () {
            M(this, {autoplay: t(t({}, ne), {}, {running: !1, paused: !1})})
        },
        on: {
            init: function (e) {
                e.params.autoplay.enabled && (e.autoplay.start(), r().addEventListener("visibilitychange", e.autoplay.onVisibilityChange))
            }, beforeTransitionStart: function (e, t, i) {
                e.autoplay.running && (i || !e.params.autoplay.disableOnInteraction ? e.autoplay.pause(t) : e.autoplay.stop())
            }, sliderFirstMove: function (e) {
                e.autoplay.running && (e.params.autoplay.disableOnInteraction ? e.autoplay.stop() : e.autoplay.pause())
            }, touchEnd: function (e) {
                e.params.cssMode && e.autoplay.paused && !e.params.autoplay.disableOnInteraction && e.autoplay.run()
            }, destroy: function (e) {
                e.autoplay.running && e.autoplay.stop(), r().removeEventListener("visibilitychange", e.autoplay.onVisibilityChange)
            }
        }
    }, {
        name: "effect-fade", params: {fadeEffect: {crossFade: !1}}, create: function () {
            M(this, {fadeEffect: t({}, le)})
        }, on: {
            beforeInit: function (e) {
                if ("fade" === e.params.effect) {
                    e.classNames.push(e.params.containerModifierClass + "fade");
                    var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0
                    };
                    S(e.params, t), S(e.originalParams, t)
                }
            }, setTranslate: function (e) {
                "fade" === e.params.effect && e.fadeEffect.setTranslate()
            }, setTransition: function (e, t) {
                "fade" === e.params.effect && e.fadeEffect.setTransition(t)
            }
        }
    }, {
        name: "effect-cube",
        params: {cubeEffect: {slideShadows: !0, shadow: !0, shadowOffset: 20, shadowScale: .94}},
        create: function () {
            M(this, {cubeEffect: t({}, oe)})
        },
        on: {
            beforeInit: function (e) {
                if ("cube" === e.params.effect) {
                    e.classNames.push(e.params.containerModifierClass + "cube"), e.classNames.push(e.params.containerModifierClass + "3d");
                    var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        resistanceRatio: 0,
                        spaceBetween: 0,
                        centeredSlides: !1,
                        virtualTranslate: !0
                    };
                    S(e.params, t), S(e.originalParams, t)
                }
            }, setTranslate: function (e) {
                "cube" === e.params.effect && e.cubeEffect.setTranslate()
            }, setTransition: function (e, t) {
                "cube" === e.params.effect && e.cubeEffect.setTransition(t)
            }
        }
    }, {
        name: "effect-flip", params: {flipEffect: {slideShadows: !0, limitRotation: !0}}, create: function () {
            M(this, {flipEffect: t({}, de)})
        }, on: {
            beforeInit: function (e) {
                if ("flip" === e.params.effect) {
                    e.classNames.push(e.params.containerModifierClass + "flip"), e.classNames.push(e.params.containerModifierClass + "3d");
                    var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0
                    };
                    S(e.params, t), S(e.originalParams, t)
                }
            }, setTranslate: function (e) {
                "flip" === e.params.effect && e.flipEffect.setTranslate()
            }, setTransition: function (e, t) {
                "flip" === e.params.effect && e.flipEffect.setTransition(t)
            }
        }
    }, {
        name: "effect-coverflow",
        params: {coverflowEffect: {rotate: 50, stretch: 0, depth: 100, scale: 1, modifier: 1, slideShadows: !0}},
        create: function () {
            M(this, {coverflowEffect: t({}, he)})
        },
        on: {
            beforeInit: function (e) {
                "coverflow" === e.params.effect && (e.classNames.push(e.params.containerModifierClass + "coverflow"), e.classNames.push(e.params.containerModifierClass + "3d"), e.params.watchSlidesProgress = !0, e.originalParams.watchSlidesProgress = !0)
            }, setTranslate: function (e) {
                "coverflow" === e.params.effect && e.coverflowEffect.setTranslate()
            }, setTransition: function (e, t) {
                "coverflow" === e.params.effect && e.coverflowEffect.setTransition(t)
            }
        }
    }, {
        name: "thumbs",
        params: {
            thumbs: {
                swiper: null,
                multipleActiveThumbs: !0,
                autoScrollOffset: 0,
                slideThumbActiveClass: "swiper-slide-thumb-active",
                thumbsContainerClass: "swiper-container-thumbs"
            }
        },
        create: function () {
            M(this, {thumbs: t({swiper: null, initialized: !1}, pe)})
        },
        on: {
            beforeInit: function (e) {
                var t = e.params.thumbs;
                t && t.swiper && (e.thumbs.init(), e.thumbs.update(!0))
            }, slideChange: function (e) {
                e.thumbs.swiper && e.thumbs.update()
            }, update: function (e) {
                e.thumbs.swiper && e.thumbs.update()
            }, resize: function (e) {
                e.thumbs.swiper && e.thumbs.update()
            }, observerUpdate: function (e) {
                e.thumbs.swiper && e.thumbs.update()
            }, setTransition: function (e, t) {
                var i = e.thumbs.swiper;
                i && i.setTransition(t)
            }, beforeDestroy: function (e) {
                var t = e.thumbs.swiper;
                t && e.thumbs.swiperCreated && t && t.destroy()
            }
        }
    }];
    return R.use(ue), R
})), function (a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
}((function (a) {
    "use strict";

    function b(a) {
        if (a instanceof Date) return a;
        if (String(a).match(g)) return String(a).match(/^[0-9]*$/) && (a = Number(a)), String(a).match(/\-/) && (a = String(a).replace(/\-/g, "/")), new Date(a);
        throw new Error("Couldn't cast `" + a + "` to a date object.")
    }

    function c(a) {
        var b = a.toString().replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1");
        return new RegExp(b)
    }

    function d(a) {
        return function (b) {
            var d = b.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);
            if (d) for (var f = 0, g = d.length; f < g; ++f) {
                var h = d[f].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/), j = c(h[0]), k = h[1] || "", l = h[3] || "",
                    m = null;
                h = h[2], i.hasOwnProperty(h) && (m = i[h], m = Number(a[m])), null !== m && ("!" === k && (m = e(l, m)), "" === k && m < 10 && (m = "0" + m.toString()), b = b.replace(j, m.toString()))
            }
            return b.replace(/%%/, "%")
        }
    }

    function e(a, b) {
        var c = "s", d = "";
        return a && (1 === (a = a.replace(/(:|;|\s)/gi, "").split(/\,/)).length ? c = a[0] : (d = a[0], c = a[1])), Math.abs(b) > 1 ? c : d
    }

    var f = [], g = [], h = {precision: 100, elapse: !1, defer: !1};
    g.push(/^[0-9]*$/.source), g.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), g.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), g = new RegExp(g.join("|"));
    var i = {
        Y: "years",
        m: "months",
        n: "daysToMonth",
        d: "daysToWeek",
        w: "weeks",
        W: "weeksToMonth",
        H: "hours",
        M: "minutes",
        S: "seconds",
        D: "totalDays",
        I: "totalHours",
        N: "totalMinutes",
        T: "totalSeconds"
    }, j = function (b, c, d) {
        this.el = b, this.$el = a(b), this.interval = null, this.offset = {}, this.options = a.extend({}, h), this.instanceNumber = f.length, f.push(this), this.$el.data("countdown-instance", this.instanceNumber), d && ("function" == typeof d ? (this.$el.on("update.countdown", d), this.$el.on("stoped.countdown", d), this.$el.on("finish.countdown", d)) : this.options = a.extend({}, h, d)), this.setFinalDate(c), !1 === this.options.defer && this.start()
    };
    a.extend(j.prototype, {
        start: function () {
            null !== this.interval && clearInterval(this.interval);
            var a = this;
            this.update(), this.interval = setInterval((function () {
                a.update.call(a)
            }), this.options.precision)
        }, stop: function () {
            clearInterval(this.interval), this.interval = null, this.dispatchEvent("stoped")
        }, toggle: function () {
            this.interval ? this.stop() : this.start()
        }, pause: function () {
            this.stop()
        }, resume: function () {
            this.start()
        }, remove: function () {
            this.stop.call(this), f[this.instanceNumber] = null, delete this.$el.data().countdownInstance
        }, setFinalDate: function (a) {
            this.finalDate = b(a)
        }, update: function () {
            if (0 !== this.$el.closest("html").length) {
                var b, c = void 0 !== a._data(this.el, "events"), d = new Date;
                b = this.finalDate.getTime() - d.getTime(), b = Math.ceil(b / 1e3), b = !this.options.elapse && b < 0 ? 0 : Math.abs(b), this.totalSecsLeft !== b && c && (this.totalSecsLeft = b, this.elapsed = d >= this.finalDate, this.offset = {
                    seconds: this.totalSecsLeft % 60,
                    minutes: Math.floor(this.totalSecsLeft / 60) % 60,
                    hours: Math.floor(this.totalSecsLeft / 60 / 60) % 24,
                    days: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                    daysToWeek: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                    daysToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 % 30.4368),
                    weeks: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7),
                    weeksToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7) % 4,
                    months: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 30.4368),
                    years: Math.abs(this.finalDate.getFullYear() - d.getFullYear()),
                    totalDays: Math.floor(this.totalSecsLeft / 60 / 60 / 24),
                    totalHours: Math.floor(this.totalSecsLeft / 60 / 60),
                    totalMinutes: Math.floor(this.totalSecsLeft / 60),
                    totalSeconds: this.totalSecsLeft
                }, this.options.elapse || 0 !== this.totalSecsLeft ? this.dispatchEvent("update") : (this.stop(), this.dispatchEvent("finish")))
            } else this.remove()
        }, dispatchEvent: function (b) {
            var c = a.Event(b + ".countdown");
            c.finalDate = this.finalDate, c.elapsed = this.elapsed, c.offset = a.extend({}, this.offset), c.strftime = d(this.offset), this.$el.trigger(c)
        }
    }), a.fn.countdown = function () {
        var b = Array.prototype.slice.call(arguments, 0);
        return this.each((function () {
            var c = a(this).data("countdown-instance");
            if (void 0 !== c) {
                var d = f[c], e = b[0];
                j.prototype.hasOwnProperty(e) ? d[e].apply(d, b.slice(1)) : null === String(e).match(/^[$A-Z_][0-9A-Z_$]*$/i) ? (d.setFinalDate.call(d, e), d.start()) : a.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi, e))
            } else new j(this, b[0], b[1])
        }))
    }
})), "function" != typeof Object.create && (Object.create = function (d) {
    function h() {
    }

    return h.prototype = d, new h
}), function (d, h, l, m) {
    var k = {
        init: function (b, a) {
            var c = this;
            c.elem = a, c.$elem = d(a), c.imageSrc = c.$elem.data("zoom-image") ? c.$elem.data("zoom-image") : c.$elem.attr("src"), c.options = d.extend({}, d.fn.elevateZoom.options, b), c.options.tint && (c.options.lensColour = "none", c.options.lensOpacity = "1"), "inner" == c.options.zoomType && (c.options.showLens = !1), c.$elem.parent().removeAttr("title").removeAttr("alt"), c.zoomImage = c.imageSrc, c.refresh(1), d("#" + c.options.gallery + " a").click((function (a) {
                return c.options.galleryActiveClass && (d("#" + c.options.gallery + " a").removeClass(c.options.galleryActiveClass), d(this).addClass(c.options.galleryActiveClass)), a.preventDefault(), d(this).data("zoom-image") ? c.zoomImagePre = d(this).data("zoom-image") : c.zoomImagePre = d(this).data("image"), c.swaptheimage(d(this).data("image"), c.zoomImagePre), !1
            }))
        }, refresh: function (b) {
            var a = this;
            setTimeout((function () {
                a.fetch(a.imageSrc)
            }), b || a.options.refresh)
        }, fetch: function (b) {
            var a = this, c = new Image;
            c.onload = function () {
                a.largeWidth = c.width, a.largeHeight = c.height, a.startZoom(), a.currentImage = a.imageSrc, a.options.onZoomedImageLoaded(a.$elem)
            }, c.src = b
        }, startZoom: function () {
            var b = this;
            if (b.nzWidth = b.$elem.width(), b.nzHeight = b.$elem.height(), b.isWindowActive = !1, b.isLensActive = !1, b.isTintActive = !1, b.overWindow = !1, b.options.imageCrossfade && (b.zoomWrap = b.$elem.wrap('<div style="height:' + b.nzHeight + "px;width:" + b.nzWidth + 'px;" class="zoomWrapper" />'), b.$elem.css("position", "absolute")), b.zoomLock = 1, b.scrollingLock = !1, b.changeBgSize = !1, b.currentZoomLevel = b.options.zoomLevel, b.nzOffset = b.$elem.offset(), b.widthRatio = b.largeWidth / b.currentZoomLevel / b.nzWidth, b.heightRatio = b.largeHeight / b.currentZoomLevel / b.nzHeight, "window" == b.options.zoomType && (b.zoomWindowStyle = "overflow: hidden;background-position: 0px 0px;text-align:center;background-color: " + String(b.options.zoomWindowBgColour) + ";width: " + String(b.options.zoomWindowWidth) + "px;height: " + String(b.options.zoomWindowHeight) + "px;float: left;background-size: " + b.largeWidth / b.currentZoomLevel + "px " + b.largeHeight / b.currentZoomLevel + "px;display: none;z-index:100;border: " + String(b.options.borderSize) + "px solid " + b.options.borderColour + ";background-repeat: no-repeat;position: absolute;"), "inner" == b.options.zoomType) {
                var a = b.$elem.css("border-left-width");
                b.zoomWindowStyle = "overflow: hidden;margin-left: " + String(a) + ";margin-top: " + String(a) + ";background-position: 0px 0px;width: " + String(b.nzWidth) + "px;height: " + String(b.nzHeight) + "px;float: left;display: none;cursor:" + b.options.cursor + ";px solid " + b.options.borderColour + ";background-repeat: no-repeat;position: absolute;"
            }
            "window" == b.options.zoomType && (lensHeight = b.nzHeight < b.options.zoomWindowWidth / b.widthRatio ? b.nzHeight : String(b.options.zoomWindowHeight / b.heightRatio), lensWidth = b.largeWidth < b.options.zoomWindowWidth ? b.nzWidth : b.options.zoomWindowWidth / b.widthRatio, b.lensStyle = "background-position: 0px 0px;width: " + String(b.options.zoomWindowWidth / b.widthRatio) + "px;height: " + String(b.options.zoomWindowHeight / b.heightRatio) + "px;float: right;display: none;overflow: hidden;z-index: 999;-webkit-transform: translateZ(0);opacity:" + b.options.lensOpacity + ";filter: alpha(opacity = " + 100 * b.options.lensOpacity + "); zoom:1;width:" + lensWidth + "px;height:" + lensHeight + "px;background-color:" + b.options.lensColour + ";cursor:" + b.options.cursor + ";border: " + b.options.lensBorderSize + "px solid " + b.options.lensBorderColour + ";background-repeat: no-repeat;position: absolute;"), b.tintStyle = "display: block;position: absolute;background-color: " + b.options.tintColour + ";filter:alpha(opacity=0);opacity: 0;width: " + b.nzWidth + "px;height: " + b.nzHeight + "px;", b.lensRound = "", "lens" == b.options.zoomType && (b.lensStyle = "background-position: 0px 0px;float: left;display: none;border: " + String(b.options.borderSize) + "px solid " + b.options.borderColour + ";width:" + String(b.options.lensSize) + "px;height:" + String(b.options.lensSize) + "px;background-repeat: no-repeat;position: absolute;"), "round" == b.options.lensShape && (b.lensRound = "border-top-left-radius: " + String(b.options.lensSize / 2 + b.options.borderSize) + "px;border-top-right-radius: " + String(b.options.lensSize / 2 + b.options.borderSize) + "px;border-bottom-left-radius: " + String(b.options.lensSize / 2 + b.options.borderSize) + "px;border-bottom-right-radius: " + String(b.options.lensSize / 2 + b.options.borderSize) + "px;"), b.zoomContainer = d('<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:' + b.nzOffset.left + "px;top:" + b.nzOffset.top + "px;height:" + b.nzHeight + "px;width:" + b.nzWidth + 'px;"></div>'), d("body").append(b.zoomContainer), b.options.containLensZoom && "lens" == b.options.zoomType && b.zoomContainer.css("overflow", "hidden"), "inner" != b.options.zoomType && (b.zoomLens = d("<div class='zoomLens' style='" + b.lensStyle + b.lensRound + "'>&nbsp;</div>").appendTo(b.zoomContainer).click((function () {
                b.$elem.trigger("click")
            })), b.options.tint && (b.tintContainer = d("<div/>").addClass("tintContainer"), b.zoomTint = d("<div class='zoomTint' style='" + b.tintStyle + "'></div>"), b.zoomLens.wrap(b.tintContainer), b.zoomTintcss = b.zoomLens.after(b.zoomTint), b.zoomTintImage = d('<img style="position: absolute; left: 0px; top: 0px; max-width: none; width: ' + b.nzWidth + "px; height: " + b.nzHeight + 'px;" src="' + b.imageSrc + '">').appendTo(b.zoomLens).click((function () {
                b.$elem.trigger("click")
            })))), isNaN(b.options.zoomWindowPosition) ? b.zoomWindow = d("<div style='z-index:999;left:" + b.windowOffsetLeft + "px;top:" + b.windowOffsetTop + "px;" + b.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo("body").click((function () {
                b.$elem.trigger("click")
            })) : b.zoomWindow = d("<div style='z-index:999;left:" + b.windowOffsetLeft + "px;top:" + b.windowOffsetTop + "px;" + b.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo(b.zoomContainer).click((function () {
                b.$elem.trigger("click")
            })), b.zoomWindowContainer = d("<div/>").addClass("zoomWindowContainer").css("width", b.options.zoomWindowWidth), b.zoomWindow.wrap(b.zoomWindowContainer), "lens" == b.options.zoomType && b.zoomLens.css({backgroundImage: "url('" + b.imageSrc + "')"}), "window" == b.options.zoomType && b.zoomWindow.css({backgroundImage: "url('" + b.imageSrc + "')"}), "inner" == b.options.zoomType && b.zoomWindow.css({backgroundImage: "url('" + b.imageSrc + "')"}), b.$elem.bind("touchmove", (function (a) {
                a.preventDefault(), b.setPosition(a.originalEvent.touches[0] || a.originalEvent.changedTouches[0])
            })), b.zoomContainer.bind("touchmove", (function (a) {
                "inner" == b.options.zoomType && b.showHideWindow("show"), a.preventDefault(), b.setPosition(a.originalEvent.touches[0] || a.originalEvent.changedTouches[0])
            })), b.zoomContainer.bind("touchend", (function (a) {
                b.showHideWindow("hide"), b.options.showLens && b.showHideLens("hide"), b.options.tint && "inner" != b.options.zoomType && b.showHideTint("hide")
            })), b.$elem.bind("touchend", (function (a) {
                b.showHideWindow("hide"), b.options.showLens && b.showHideLens("hide"), b.options.tint && "inner" != b.options.zoomType && b.showHideTint("hide")
            })), b.options.showLens && (b.zoomLens.bind("touchmove", (function (a) {
                a.preventDefault(), b.setPosition(a.originalEvent.touches[0] || a.originalEvent.changedTouches[0])
            })), b.zoomLens.bind("touchend", (function (a) {
                b.showHideWindow("hide"), b.options.showLens && b.showHideLens("hide"), b.options.tint && "inner" != b.options.zoomType && b.showHideTint("hide")
            }))), b.$elem.bind("mousemove", (function (a) {
                0 == b.overWindow && b.setElements("show"), b.lastX === a.clientX && b.lastY === a.clientY || (b.setPosition(a), b.currentLoc = a), b.lastX = a.clientX, b.lastY = a.clientY
            })), b.zoomContainer.bind("mousemove", (function (a) {
                0 == b.overWindow && b.setElements("show"), b.lastX === a.clientX && b.lastY === a.clientY || (b.setPosition(a), b.currentLoc = a), b.lastX = a.clientX, b.lastY = a.clientY
            })), "inner" != b.options.zoomType && b.zoomLens.bind("mousemove", (function (a) {
                b.lastX === a.clientX && b.lastY === a.clientY || (b.setPosition(a), b.currentLoc = a), b.lastX = a.clientX, b.lastY = a.clientY
            })), b.options.tint && "inner" != b.options.zoomType && b.zoomTint.bind("mousemove", (function (a) {
                b.lastX === a.clientX && b.lastY === a.clientY || (b.setPosition(a), b.currentLoc = a), b.lastX = a.clientX, b.lastY = a.clientY
            })), "inner" == b.options.zoomType && b.zoomWindow.bind("mousemove", (function (a) {
                b.lastX === a.clientX && b.lastY === a.clientY || (b.setPosition(a), b.currentLoc = a), b.lastX = a.clientX, b.lastY = a.clientY
            })), b.zoomContainer.add(b.$elem).mouseenter((function () {
                0 == b.overWindow && b.setElements("show")
            })).mouseleave((function () {
                b.scrollLock || b.setElements("hide")
            })), "inner" != b.options.zoomType && b.zoomWindow.mouseenter((function () {
                b.overWindow = !0, b.setElements("hide")
            })).mouseleave((function () {
                b.overWindow = !1
            })), b.minZoomLevel = b.options.minZoomLevel ? b.options.minZoomLevel : 2 * b.options.scrollZoomIncrement, b.options.scrollZoom && b.zoomContainer.add(b.$elem).bind("mousewheel DOMMouseScroll MozMousePixelScroll", (function (a) {
                b.scrollLock = !0, clearTimeout(d.data(this, "timer")), d.data(this, "timer", setTimeout((function () {
                    b.scrollLock = !1
                }), 250));
                var e = a.originalEvent.wheelDelta || -1 * a.originalEvent.detail;
                return a.stopImmediatePropagation(), a.stopPropagation(), a.preventDefault(), 0 < e / 120 ? b.currentZoomLevel >= b.minZoomLevel && b.changeZoomLevel(b.currentZoomLevel - b.options.scrollZoomIncrement) : b.options.maxZoomLevel ? b.currentZoomLevel <= b.options.maxZoomLevel && b.changeZoomLevel(parseFloat(b.currentZoomLevel) + b.options.scrollZoomIncrement) : b.changeZoomLevel(parseFloat(b.currentZoomLevel) + b.options.scrollZoomIncrement), !1
            }))
        }, setElements: function (b) {
            if (!this.options.zoomEnabled) return !1;
            "show" == b && this.isWindowSet && ("inner" == this.options.zoomType && this.showHideWindow("show"), "window" == this.options.zoomType && this.showHideWindow("show"), this.options.showLens && this.showHideLens("show"), this.options.tint && "inner" != this.options.zoomType && this.showHideTint("show")), "hide" == b && ("window" == this.options.zoomType && this.showHideWindow("hide"), this.options.tint || this.showHideWindow("hide"), this.options.showLens && this.showHideLens("hide"), this.options.tint && this.showHideTint("hide"))
        }, setPosition: function (b) {
            if (!this.options.zoomEnabled) return !1;
            this.nzHeight = this.$elem.height(), this.nzWidth = this.$elem.width(), this.nzOffset = this.$elem.offset(), this.options.tint && "inner" != this.options.zoomType && (this.zoomTint.css({top: 0}), this.zoomTint.css({left: 0})), this.options.responsive && !this.options.scrollZoom && this.options.showLens && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.largeWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.widthRatio = this.largeWidth / this.nzWidth, this.heightRatio = this.largeHeight / this.nzHeight, "lens" != this.options.zoomType && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.options.zoomWindowWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.zoomLens.css("width", lensWidth), this.zoomLens.css("height", lensHeight), this.options.tint && (this.zoomTintImage.css("width", this.nzWidth), this.zoomTintImage.css("height", this.nzHeight))), "lens" == this.options.zoomType && this.zoomLens.css({
                width: String(this.options.lensSize) + "px",
                height: String(this.options.lensSize) + "px"
            })), this.zoomContainer.css({top: this.nzOffset.top}), this.zoomContainer.css({left: this.nzOffset.left}), this.mouseLeft = parseInt(b.pageX - this.nzOffset.left), this.mouseTop = parseInt(b.pageY - this.nzOffset.top), "window" == this.options.zoomType && (this.Etoppos = this.mouseTop < this.zoomLens.height() / 2, this.Eboppos = this.mouseTop > this.nzHeight - this.zoomLens.height() / 2 - 2 * this.options.lensBorderSize, this.Eloppos = this.mouseLeft < 0 + this.zoomLens.width() / 2, this.Eroppos = this.mouseLeft > this.nzWidth - this.zoomLens.width() / 2 - 2 * this.options.lensBorderSize), "inner" == this.options.zoomType && (this.Etoppos = this.mouseTop < this.nzHeight / 2 / this.heightRatio, this.Eboppos = this.mouseTop > this.nzHeight - this.nzHeight / 2 / this.heightRatio, this.Eloppos = this.mouseLeft < 0 + this.nzWidth / 2 / this.widthRatio, this.Eroppos = this.mouseLeft > this.nzWidth - this.nzWidth / 2 / this.widthRatio - 2 * this.options.lensBorderSize), 0 >= this.mouseLeft || 0 > this.mouseTop || this.mouseLeft > this.nzWidth || this.mouseTop > this.nzHeight ? this.setElements("hide") : (this.options.showLens && (this.lensLeftPos = String(this.mouseLeft - this.zoomLens.width() / 2), this.lensTopPos = String(this.mouseTop - this.zoomLens.height() / 2)), this.Etoppos && (this.lensTopPos = 0), this.Eloppos && (this.tintpos = this.lensLeftPos = this.windowLeftPos = 0), "window" == this.options.zoomType && (this.Eboppos && (this.lensTopPos = Math.max(this.nzHeight - this.zoomLens.height() - 2 * this.options.lensBorderSize, 0)), this.Eroppos && (this.lensLeftPos = this.nzWidth - this.zoomLens.width() - 2 * this.options.lensBorderSize)), "inner" == this.options.zoomType && (this.Eboppos && (this.lensTopPos = Math.max(this.nzHeight - 2 * this.options.lensBorderSize, 0)), this.Eroppos && (this.lensLeftPos = this.nzWidth - this.nzWidth - 2 * this.options.lensBorderSize)), "lens" == this.options.zoomType && (this.windowLeftPos = String(-1 * ((b.pageX - this.nzOffset.left) * this.widthRatio - this.zoomLens.width() / 2)), this.windowTopPos = String(-1 * ((b.pageY - this.nzOffset.top) * this.heightRatio - this.zoomLens.height() / 2)), this.zoomLens.css({backgroundPosition: this.windowLeftPos + "px " + this.windowTopPos + "px"}), this.changeBgSize && (this.nzHeight > this.nzWidth ? ("lens" == this.options.zoomType && this.zoomLens.css({"background-size": this.largeWidth / this.newvalueheight + "px " + this.largeHeight / this.newvalueheight + "px"}), this.zoomWindow.css({"background-size": this.largeWidth / this.newvalueheight + "px " + this.largeHeight / this.newvalueheight + "px"})) : ("lens" == this.options.zoomType && this.zoomLens.css({"background-size": this.largeWidth / this.newvaluewidth + "px " + this.largeHeight / this.newvaluewidth + "px"}), this.zoomWindow.css({"background-size": this.largeWidth / this.newvaluewidth + "px " + this.largeHeight / this.newvaluewidth + "px"})), this.changeBgSize = !1), this.setWindowPostition(b)), this.options.tint && "inner" != this.options.zoomType && this.setTintPosition(b), "window" == this.options.zoomType && this.setWindowPostition(b), "inner" == this.options.zoomType && this.setWindowPostition(b), this.options.showLens && (this.fullwidth && "lens" != this.options.zoomType && (this.lensLeftPos = 0), this.zoomLens.css({
                left: this.lensLeftPos + "px",
                top: this.lensTopPos + "px"
            })))
        }, showHideWindow: function (b) {
            "show" != b || this.isWindowActive || (this.options.zoomWindowFadeIn ? this.zoomWindow.stop(!0, !0, !1).fadeIn(this.options.zoomWindowFadeIn) : this.zoomWindow.show(), this.isWindowActive = !0), "hide" == b && this.isWindowActive && (this.options.zoomWindowFadeOut ? this.zoomWindow.stop(!0, !0).fadeOut(this.options.zoomWindowFadeOut) : this.zoomWindow.hide(), this.isWindowActive = !1)
        }, showHideLens: function (b) {
            "show" != b || this.isLensActive || (this.options.lensFadeIn ? this.zoomLens.stop(!0, !0, !1).fadeIn(this.options.lensFadeIn) : this.zoomLens.show(), this.isLensActive = !0), "hide" == b && this.isLensActive && (this.options.lensFadeOut ? this.zoomLens.stop(!0, !0).fadeOut(this.options.lensFadeOut) : this.zoomLens.hide(), this.isLensActive = !1)
        }, showHideTint: function (b) {
            "show" != b || this.isTintActive || (this.options.zoomTintFadeIn ? this.zoomTint.css({opacity: this.options.tintOpacity}).animate().stop(!0, !0).fadeIn("slow") : (this.zoomTint.css({opacity: this.options.tintOpacity}).animate(), this.zoomTint.show()), this.isTintActive = !0), "hide" == b && this.isTintActive && (this.options.zoomTintFadeOut ? this.zoomTint.stop(!0, !0).fadeOut(this.options.zoomTintFadeOut) : this.zoomTint.hide(), this.isTintActive = !1)
        }, setLensPostition: function (b) {
        }, setWindowPostition: function (b) {
            var a = this;
            if (isNaN(a.options.zoomWindowPosition)) a.externalContainer = d("#" + a.options.zoomWindowPosition), a.externalContainerWidth = a.externalContainer.width(), a.externalContainerHeight = a.externalContainer.height(), a.externalContainerOffset = a.externalContainer.offset(), a.windowOffsetTop = a.externalContainerOffset.top, a.windowOffsetLeft = a.externalContainerOffset.left; else switch (a.options.zoomWindowPosition) {
                case 1:
                    a.windowOffsetTop = a.options.zoomWindowOffety, a.windowOffsetLeft = +a.nzWidth;
                    break;
                case 2:
                    a.options.zoomWindowHeight > a.nzHeight && (a.windowOffsetTop = -1 * (a.options.zoomWindowHeight / 2 - a.nzHeight / 2), a.windowOffsetLeft = a.nzWidth);
                    break;
                case 3:
                    a.windowOffsetTop = a.nzHeight - a.zoomWindow.height() - 2 * a.options.borderSize, a.windowOffsetLeft = a.nzWidth;
                    break;
                case 4:
                    a.windowOffsetTop = a.nzHeight, a.windowOffsetLeft = a.nzWidth;
                    break;
                case 5:
                    a.windowOffsetTop = a.nzHeight, a.windowOffsetLeft = a.nzWidth - a.zoomWindow.width() - 2 * a.options.borderSize;
                    break;
                case 6:
                    a.options.zoomWindowHeight > a.nzHeight && (a.windowOffsetTop = a.nzHeight, a.windowOffsetLeft = -1 * (a.options.zoomWindowWidth / 2 - a.nzWidth / 2 + 2 * a.options.borderSize));
                    break;
                case 7:
                    a.windowOffsetTop = a.nzHeight, a.windowOffsetLeft = 0;
                    break;
                case 8:
                    a.windowOffsetTop = a.nzHeight, a.windowOffsetLeft = -1 * (a.zoomWindow.width() + 2 * a.options.borderSize);
                    break;
                case 9:
                    a.windowOffsetTop = a.nzHeight - a.zoomWindow.height() - 2 * a.options.borderSize, a.windowOffsetLeft = -1 * (a.zoomWindow.width() + 2 * a.options.borderSize);
                    break;
                case 10:
                    a.options.zoomWindowHeight > a.nzHeight && (a.windowOffsetTop = -1 * (a.options.zoomWindowHeight / 2 - a.nzHeight / 2), a.windowOffsetLeft = -1 * (a.zoomWindow.width() + 2 * a.options.borderSize));
                    break;
                case 11:
                    a.windowOffsetTop = a.options.zoomWindowOffety, a.windowOffsetLeft = -1 * (a.zoomWindow.width() + 2 * a.options.borderSize);
                    break;
                case 12:
                    a.windowOffsetTop = -1 * (a.zoomWindow.height() + 2 * a.options.borderSize), a.windowOffsetLeft = -1 * (a.zoomWindow.width() + 2 * a.options.borderSize);
                    break;
                case 13:
                    a.windowOffsetTop = -1 * (a.zoomWindow.height() + 2 * a.options.borderSize), a.windowOffsetLeft = 0;
                    break;
                case 14:
                    a.options.zoomWindowHeight > a.nzHeight && (a.windowOffsetTop = -1 * (a.zoomWindow.height() + 2 * a.options.borderSize), a.windowOffsetLeft = -1 * (a.options.zoomWindowWidth / 2 - a.nzWidth / 2 + 2 * a.options.borderSize));
                    break;
                case 15:
                    a.windowOffsetTop = -1 * (a.zoomWindow.height() + 2 * a.options.borderSize), a.windowOffsetLeft = a.nzWidth - a.zoomWindow.width() - 2 * a.options.borderSize;
                    break;
                case 16:
                    a.windowOffsetTop = -1 * (a.zoomWindow.height() + 2 * a.options.borderSize), a.windowOffsetLeft = a.nzWidth;
                    break;
                default:
                    a.windowOffsetTop = a.options.zoomWindowOffety, a.windowOffsetLeft = a.nzWidth
            }
            a.isWindowSet = !0, a.windowOffsetTop += a.options.zoomWindowOffety, a.windowOffsetLeft += a.options.zoomWindowOffetx, a.zoomWindow.css({top: a.windowOffsetTop}), a.zoomWindow.css({left: a.windowOffsetLeft}), "inner" == a.options.zoomType && (a.zoomWindow.css({top: 0}), a.zoomWindow.css({left: 0})), a.windowLeftPos = String(-1 * ((b.pageX - a.nzOffset.left) * a.widthRatio - a.zoomWindow.width() / 2)), a.windowTopPos = String(-1 * ((b.pageY - a.nzOffset.top) * a.heightRatio - a.zoomWindow.height() / 2)), a.Etoppos && (a.windowTopPos = 0), a.Eloppos && (a.windowLeftPos = 0), a.Eboppos && (a.windowTopPos = -1 * (a.largeHeight / a.currentZoomLevel - a.zoomWindow.height())), a.Eroppos && (a.windowLeftPos = -1 * (a.largeWidth / a.currentZoomLevel - a.zoomWindow.width())), a.fullheight && (a.windowTopPos = 0), a.fullwidth && (a.windowLeftPos = 0), "window" != a.options.zoomType && "inner" != a.options.zoomType || (1 == a.zoomLock && (1 >= a.widthRatio && (a.windowLeftPos = 0), 1 >= a.heightRatio && (a.windowTopPos = 0)), a.largeHeight < a.options.zoomWindowHeight && (a.windowTopPos = 0), a.largeWidth < a.options.zoomWindowWidth && (a.windowLeftPos = 0), a.options.easing ? (a.xp || (a.xp = 0), a.yp || (a.yp = 0), a.loop || (a.loop = setInterval((function () {
                a.xp += (a.windowLeftPos - a.xp) / a.options.easingAmount, a.yp += (a.windowTopPos - a.yp) / a.options.easingAmount, a.scrollingLock ? (clearInterval(a.loop), a.xp = a.windowLeftPos, a.yp = a.windowTopPos, a.xp = -1 * ((b.pageX - a.nzOffset.left) * a.widthRatio - a.zoomWindow.width() / 2), a.yp = -1 * ((b.pageY - a.nzOffset.top) * a.heightRatio - a.zoomWindow.height() / 2), a.changeBgSize && (a.nzHeight > a.nzWidth ? ("lens" == a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"}), a.zoomWindow.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"})) : ("lens" != a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvalueheight + "px"}), a.zoomWindow.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvaluewidth + "px"})), a.changeBgSize = !1), a.zoomWindow.css({backgroundPosition: a.windowLeftPos + "px " + a.windowTopPos + "px"}), a.scrollingLock = !1, a.loop = !1) : (a.changeBgSize && (a.nzHeight > a.nzWidth ? ("lens" == a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"}), a.zoomWindow.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"})) : ("lens" != a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvaluewidth + "px"}), a.zoomWindow.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvaluewidth + "px"})), a.changeBgSize = !1), a.zoomWindow.css({backgroundPosition: a.xp + "px " + a.yp + "px"}))
            }), 16))) : (a.changeBgSize && (a.nzHeight > a.nzWidth ? ("lens" == a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"}), a.zoomWindow.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"})) : ("lens" == a.options.zoomType && a.zoomLens.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvaluewidth + "px"}), a.largeHeight / a.newvaluewidth < a.options.zoomWindowHeight ? a.zoomWindow.css({"background-size": a.largeWidth / a.newvaluewidth + "px " + a.largeHeight / a.newvaluewidth + "px"}) : a.zoomWindow.css({"background-size": a.largeWidth / a.newvalueheight + "px " + a.largeHeight / a.newvalueheight + "px"})), a.changeBgSize = !1), a.zoomWindow.css({backgroundPosition: a.windowLeftPos + "px " + a.windowTopPos + "px"})))
        }, setTintPosition: function (b) {
            this.nzOffset = this.$elem.offset(), this.tintpos = String(-1 * (b.pageX - this.nzOffset.left - this.zoomLens.width() / 2)), this.tintposy = String(-1 * (b.pageY - this.nzOffset.top - this.zoomLens.height() / 2)), this.Etoppos && (this.tintposy = 0), this.Eloppos && (this.tintpos = 0), this.Eboppos && (this.tintposy = -1 * (this.nzHeight - this.zoomLens.height() - 2 * this.options.lensBorderSize)), this.Eroppos && (this.tintpos = -1 * (this.nzWidth - this.zoomLens.width() - 2 * this.options.lensBorderSize)), this.options.tint && (this.fullheight && (this.tintposy = 0), this.fullwidth && (this.tintpos = 0), this.zoomTintImage.css({left: this.tintpos + "px"}), this.zoomTintImage.css({top: this.tintposy + "px"}))
        }, swaptheimage: function (b, a) {
            var c = this, e = new Image;
            c.options.loadingIcon && (c.spinner = d("<div style=\"background: url('" + c.options.loadingIcon + "') no-repeat center;height:" + c.nzHeight + "px;width:" + c.nzWidth + 'px;z-index: 2000;position: absolute; background-position: center center;"></div>'), c.$elem.after(c.spinner)), c.options.onImageSwap(c.$elem), e.onload = function () {
                c.largeWidth = e.width, c.largeHeight = e.height, c.zoomImage = a, c.zoomWindow.css({"background-size": c.largeWidth + "px " + c.largeHeight + "px"}), c.zoomWindow.css({"background-size": c.largeWidth + "px " + c.largeHeight + "px"}), c.swapAction(b, a)
            }, e.src = a
        }, swapAction: function (b, a) {
            var c = this, e = new Image;
            if (e.onload = function () {
                c.nzHeight = e.height, c.nzWidth = e.width, c.options.onImageSwapComplete(c.$elem), c.doneCallback()
            }, e.src = b, c.currentZoomLevel = c.options.zoomLevel, c.options.maxZoomLevel = !1, "lens" == c.options.zoomType && c.zoomLens.css({backgroundImage: "url('" + a + "')"}), "window" == c.options.zoomType && c.zoomWindow.css({backgroundImage: "url('" + a + "')"}), "inner" == c.options.zoomType && c.zoomWindow.css({backgroundImage: "url('" + a + "')"}), c.currentImage = a, c.options.imageCrossfade) {
                var f = c.$elem, g = f.clone();
                c.$elem.attr("src", b), c.$elem.after(g), g.stop(!0).fadeOut(c.options.imageCrossfade, (function () {
                    d(this).remove()
                })), c.$elem.width("auto").removeAttr("width"), c.$elem.height("auto").removeAttr("height"), f.fadeIn(c.options.imageCrossfade), c.options.tint && "inner" != c.options.zoomType && (g = (f = c.zoomTintImage).clone(), c.zoomTintImage.attr("src", a), c.zoomTintImage.after(g), g.stop(!0).fadeOut(c.options.imageCrossfade, (function () {
                    d(this).remove()
                })), f.fadeIn(c.options.imageCrossfade), c.zoomTint.css({height: c.$elem.height()}), c.zoomTint.css({width: c.$elem.width()})), c.zoomContainer.css("height", c.$elem.height()), c.zoomContainer.css("width", c.$elem.width()), "inner" != c.options.zoomType || c.options.constrainType || (c.zoomWrap.parent().css("height", c.$elem.height()), c.zoomWrap.parent().css("width", c.$elem.width()), c.zoomWindow.css("height", c.$elem.height()), c.zoomWindow.css("width", c.$elem.width()))
            } else c.$elem.attr("src", b), c.options.tint && (c.zoomTintImage.attr("src", a), c.zoomTintImage.attr("height", c.$elem.height()), c.zoomTintImage.css({height: c.$elem.height()}), c.zoomTint.css({height: c.$elem.height()})), c.zoomContainer.css("height", c.$elem.height()), c.zoomContainer.css("width", c.$elem.width());
            c.options.imageCrossfade && (c.zoomWrap.css("height", c.$elem.height()), c.zoomWrap.css("width", c.$elem.width())), c.options.constrainType && ("height" == c.options.constrainType && (c.zoomContainer.css("height", c.options.constrainSize), c.zoomContainer.css("width", "auto"), c.options.imageCrossfade ? (c.zoomWrap.css("height", c.options.constrainSize), c.zoomWrap.css("width", "auto"), c.constwidth = c.zoomWrap.width()) : (c.$elem.css("height", c.options.constrainSize), c.$elem.css("width", "auto"), c.constwidth = c.$elem.width()), "inner" == c.options.zoomType && (c.zoomWrap.parent().css("height", c.options.constrainSize), c.zoomWrap.parent().css("width", c.constwidth), c.zoomWindow.css("height", c.options.constrainSize), c.zoomWindow.css("width", c.constwidth)), c.options.tint && (c.tintContainer.css("height", c.options.constrainSize), c.tintContainer.css("width", c.constwidth), c.zoomTint.css("height", c.options.constrainSize), c.zoomTint.css("width", c.constwidth), c.zoomTintImage.css("height", c.options.constrainSize), c.zoomTintImage.css("width", c.constwidth))), "width" == c.options.constrainType && (c.zoomContainer.css("height", "auto"), c.zoomContainer.css("width", c.options.constrainSize), c.options.imageCrossfade ? (c.zoomWrap.css("height", "auto"), c.zoomWrap.css("width", c.options.constrainSize), c.constheight = c.zoomWrap.height()) : (c.$elem.css("height", "auto"), c.$elem.css("width", c.options.constrainSize), c.constheight = c.$elem.height()), "inner" == c.options.zoomType && (c.zoomWrap.parent().css("height", c.constheight), c.zoomWrap.parent().css("width", c.options.constrainSize), c.zoomWindow.css("height", c.constheight), c.zoomWindow.css("width", c.options.constrainSize)), c.options.tint && (c.tintContainer.css("height", c.constheight), c.tintContainer.css("width", c.options.constrainSize), c.zoomTint.css("height", c.constheight), c.zoomTint.css("width", c.options.constrainSize), c.zoomTintImage.css("height", c.constheight), c.zoomTintImage.css("width", c.options.constrainSize))))
        }, doneCallback: function () {
            this.options.loadingIcon && this.spinner.hide(), this.nzOffset = this.$elem.offset(), this.nzWidth = this.$elem.width(), this.nzHeight = this.$elem.height(), this.currentZoomLevel = this.options.zoomLevel, this.widthRatio = this.largeWidth / this.nzWidth, this.heightRatio = this.largeHeight / this.nzHeight, "window" == this.options.zoomType && (lensHeight = this.nzHeight < this.options.zoomWindowWidth / this.widthRatio ? this.nzHeight : String(this.options.zoomWindowHeight / this.heightRatio), lensWidth = this.options.zoomWindowWidth < this.options.zoomWindowWidth ? this.nzWidth : this.options.zoomWindowWidth / this.widthRatio, this.zoomLens && (this.zoomLens.css("width", lensWidth), this.zoomLens.css("height", lensHeight)))
        }, getCurrentImage: function () {
            return this.zoomImage
        }, getGalleryList: function () {
            var b = this;
            return b.gallerylist = [], b.options.gallery ? d("#" + b.options.gallery + " a").each((function () {
                var a = "";
                d(this).data("zoom-image") ? a = d(this).data("zoom-image") : d(this).data("image") && (a = d(this).data("image")), a == b.zoomImage ? b.gallerylist.unshift({
                    href: "" + a,
                    title: d(this).find("img").attr("title")
                }) : b.gallerylist.push({href: "" + a, title: d(this).find("img").attr("title")})
            })) : b.gallerylist.push({href: "" + b.zoomImage, title: d(this).find("img").attr("title")}), b.gallerylist
        }, changeZoomLevel: function (b) {
            this.scrollingLock = !0, this.newvalue = parseFloat(b).toFixed(2), newvalue = parseFloat(b).toFixed(2), maxheightnewvalue = this.largeHeight / (this.options.zoomWindowHeight / this.nzHeight * this.nzHeight), maxwidthtnewvalue = this.largeWidth / (this.options.zoomWindowWidth / this.nzWidth * this.nzWidth), "inner" != this.options.zoomType && (maxheightnewvalue <= newvalue ? (this.heightRatio = this.largeHeight / maxheightnewvalue / this.nzHeight, this.newvalueheight = maxheightnewvalue, this.fullheight = !0) : (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue, this.fullheight = !1), maxwidthtnewvalue <= newvalue ? (this.widthRatio = this.largeWidth / maxwidthtnewvalue / this.nzWidth, this.newvaluewidth = maxwidthtnewvalue, this.fullwidth = !0) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1), "lens" == this.options.zoomType && (maxheightnewvalue <= newvalue ? (this.fullwidth = !0, this.newvaluewidth = maxheightnewvalue) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1))), "inner" == this.options.zoomType && (maxheightnewvalue = parseFloat(this.largeHeight / this.nzHeight).toFixed(2), maxwidthtnewvalue = parseFloat(this.largeWidth / this.nzWidth).toFixed(2), newvalue > maxheightnewvalue && (newvalue = maxheightnewvalue), newvalue > maxwidthtnewvalue && (newvalue = maxwidthtnewvalue), maxheightnewvalue <= newvalue ? (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue > maxheightnewvalue ? maxheightnewvalue : newvalue, this.fullheight = !0) : (this.heightRatio = this.largeHeight / newvalue / this.nzHeight, this.newvalueheight = newvalue > maxheightnewvalue ? maxheightnewvalue : newvalue, this.fullheight = !1), maxwidthtnewvalue <= newvalue ? (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue > maxwidthtnewvalue ? maxwidthtnewvalue : newvalue, this.fullwidth = !0) : (this.widthRatio = this.largeWidth / newvalue / this.nzWidth, this.newvaluewidth = newvalue, this.fullwidth = !1)), scrcontinue = !1, "inner" == this.options.zoomType && (this.nzWidth > this.nzHeight && (this.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, this.fullwidth = this.fullheight = !0)), this.nzHeight > this.nzWidth && (this.newvaluewidth <= maxwidthtnewvalue ? scrcontinue = !0 : (scrcontinue = !1, this.fullwidth = this.fullheight = !0))), "inner" != this.options.zoomType && (scrcontinue = !0), scrcontinue && (this.zoomLock = 0, this.changeZoom = !0, this.options.zoomWindowHeight / this.heightRatio <= this.nzHeight && (this.currentZoomLevel = this.newvalueheight, "lens" != this.options.zoomType && "inner" != this.options.zoomType && (this.changeBgSize = !0, this.zoomLens.css({height: String(this.options.zoomWindowHeight / this.heightRatio) + "px"})), "lens" == this.options.zoomType || "inner" == this.options.zoomType) && (this.changeBgSize = !0), this.options.zoomWindowWidth / this.widthRatio <= this.nzWidth && ("inner" != this.options.zoomType && this.newvaluewidth > this.newvalueheight && (this.currentZoomLevel = this.newvaluewidth), "lens" != this.options.zoomType && "inner" != this.options.zoomType && (this.changeBgSize = !0, this.zoomLens.css({width: String(this.options.zoomWindowWidth / this.widthRatio) + "px"})), "lens" == this.options.zoomType || "inner" == this.options.zoomType) && (this.changeBgSize = !0), "inner" == this.options.zoomType && (this.changeBgSize = !0, this.nzWidth > this.nzHeight && (this.currentZoomLevel = this.newvaluewidth), this.nzHeight > this.nzWidth && (this.currentZoomLevel = this.newvaluewidth))), this.setPosition(this.currentLoc)
        }, closeAll: function () {
            self.zoomWindow && self.zoomWindow.hide(), self.zoomLens && self.zoomLens.hide(), self.zoomTint && self.zoomTint.hide()
        }, changeState: function (b) {
            "enable" == b && (this.options.zoomEnabled = !0), "disable" == b && (this.options.zoomEnabled = !1)
        }
    };
    d.fn.elevateZoom = function (b) {
        return this.each((function () {
            var a = Object.create(k);
            a.init(b, this), d.data(this, "elevateZoom", a)
        }))
    }, d.fn.elevateZoom.options = {
        zoomActivation: "hover",
        zoomEnabled: !0,
        preloading: 1,
        zoomLevel: 1,
        scrollZoom: !1,
        scrollZoomIncrement: .1,
        minZoomLevel: !1,
        maxZoomLevel: !1,
        easing: !1,
        easingAmount: 12,
        lensSize: 200,
        zoomWindowWidth: 400,
        zoomWindowHeight: 400,
        zoomWindowOffetx: 0,
        zoomWindowOffety: 0,
        zoomWindowPosition: 1,
        zoomWindowBgColour: "#fff",
        lensFadeIn: !1,
        lensFadeOut: !1,
        debug: !1,
        zoomWindowFadeIn: !1,
        zoomWindowFadeOut: !1,
        zoomWindowAlwaysShow: !1,
        zoomTintFadeIn: !1,
        zoomTintFadeOut: !1,
        borderSize: 4,
        showLens: !0,
        borderColour: "#888",
        lensBorderSize: 1,
        lensBorderColour: "#000",
        lensShape: "square",
        zoomType: "window",
        containLensZoom: !1,
        lensColour: "white",
        lensOpacity: .4,
        lenszoom: !1,
        tint: !1,
        tintColour: "#333",
        tintOpacity: .4,
        gallery: !1,
        galleryActiveClass: "zoomGalleryActive",
        imageCrossfade: !1,
        constrainType: !1,
        constrainSize: !1,
        loadingIcon: !1,
        cursor: "default",
        responsive: !0,
        onComplete: d.noop,
        onZoomedImageLoaded: function () {
        },
        onImageSwap: d.noop,
        onImageSwapComplete: d.noop
    }
}(jQuery, window, document), function (n) {
    "function" == typeof define && define.amd ? define(["jquery"], n) : "object" == typeof module && module.exports ? module.exports = function (e, t) {
        return void 0 === t && (t = "undefined" != typeof window ? require("jquery") : require("jquery")(e)), n(t), t
    } : n(jQuery)
}((function (u) {
    var e = function () {
        if (u && u.fn && u.fn.select2 && u.fn.select2.amd) var e = u.fn.select2.amd;
        var t, n, i, h, s, o, f, g, m, v, y, _, r, a, b;

        function w(e, t) {
            return r.call(e, t)
        }

        function l(e, t) {
            var n, i, r, s, o, a, l, c, u, d, p, h = t && t.split("/"), f = y.map, g = f && f["*"] || {};
            if (e) {
                for (o = (e = e.split("/")).length - 1, y.nodeIdCompat && b.test(e[o]) && (e[o] = e[o].replace(b, "")), "." === e[0].charAt(0) && h && (e = h.slice(0, h.length - 1).concat(e)), u = 0; u < e.length; u++) if ("." === (p = e[u])) e.splice(u, 1), u -= 1; else if (".." === p) {
                    if (0 === u || 1 === u && ".." === e[2] || ".." === e[u - 1]) continue;
                    0 < u && (e.splice(u - 1, 2), u -= 2)
                }
                e = e.join("/")
            }
            if ((h || g) && f) {
                for (u = (n = e.split("/")).length; 0 < u; u -= 1) {
                    if (i = n.slice(0, u).join("/"), h) for (d = h.length; 0 < d; d -= 1) if (r = (r = f[h.slice(0, d).join("/")]) && r[i]) {
                        s = r, a = u;
                        break
                    }
                    if (s) break;
                    !l && g && g[i] && (l = g[i], c = u)
                }
                !s && l && (s = l, a = c), s && (n.splice(0, a, s), e = n.join("/"))
            }
            return e
        }

        function x(t, n) {
            return function () {
                var e = a.call(arguments, 0);
                return "string" != typeof e[0] && 1 === e.length && e.push(null), o.apply(h, e.concat([t, n]))
            }
        }

        function A(t) {
            return function (e) {
                m[t] = e
            }
        }

        function D(e) {
            if (w(v, e)) {
                var t = v[e];
                delete v[e], _[e] = !0, s.apply(h, t)
            }
            if (!w(m, e) && !w(_, e)) throw new Error("No " + e);
            return m[e]
        }

        function c(e) {
            var t, n = e ? e.indexOf("!") : -1;
            return -1 < n && (t = e.substring(0, n), e = e.substring(n + 1, e.length)), [t, e]
        }

        function S(e) {
            return e ? c(e) : []
        }

        return e && e.requirejs || (e ? n = e : e = {}, m = {}, v = {}, y = {}, _ = {}, r = Object.prototype.hasOwnProperty, a = [].slice, b = /\.js$/, f = function (e, t) {
            var n, i = c(e), r = i[0], s = t[1];
            return e = i[1], r && (n = D(r = l(r, s))), r ? e = n && n.normalize ? n.normalize(e, function (t) {
                return function (e) {
                    return l(e, t)
                }
            }(s)) : l(e, s) : (r = (i = c(e = l(e, s)))[0], e = i[1], r && (n = D(r))), {
                f: r ? r + "!" + e : e,
                n: e,
                pr: r,
                p: n
            }
        }, g = {
            require: function (e) {
                return x(e)
            }, exports: function (e) {
                var t = m[e];
                return void 0 !== t ? t : m[e] = {}
            }, module: function (e) {
                return {
                    id: e, uri: "", exports: m[e], config: function (e) {
                        return function () {
                            return y && y.config && y.config[e] || {}
                        }
                    }(e)
                }
            }
        }, s = function (e, t, n, i) {
            var r, s, o, a, l, c, u, d = [], p = typeof n;
            if (c = S(i = i || e), "undefined" == p || "function" == p) {
                for (t = !t.length && n.length ? ["require", "exports", "module"] : t, l = 0; l < t.length; l += 1) if ("require" === (s = (a = f(t[l], c)).f)) d[l] = g.require(e); else if ("exports" === s) d[l] = g.exports(e), u = !0; else if ("module" === s) r = d[l] = g.module(e); else if (w(m, s) || w(v, s) || w(_, s)) d[l] = D(s); else {
                    if (!a.p) throw new Error(e + " missing " + s);
                    a.p.load(a.n, x(i, !0), A(s), {}), d[l] = m[s]
                }
                o = n ? n.apply(m[e], d) : void 0, e && (r && r.exports !== h && r.exports !== m[e] ? m[e] = r.exports : o === h && u || (m[e] = o))
            } else e && (m[e] = n)
        }, t = n = o = function (e, t, n, i, r) {
            if ("string" == typeof e) return g[e] ? g[e](t) : D(f(e, S(t)).f);
            if (!e.splice) {
                if ((y = e).deps && o(y.deps, y.callback), !t) return;
                t.splice ? (e = t, t = n, n = null) : e = h
            }
            return t = t || function () {
            }, "function" == typeof n && (n = i, i = r), i ? s(h, e, t, n) : setTimeout((function () {
                s(h, e, t, n)
            }), 4), o
        }, o.config = function (e) {
            return o(e)
        }, t._defined = m, (i = function (e, t, n) {
            if ("string" != typeof e) throw new Error("See almond README: incorrect module build, no module name");
            t.splice || (n = t, t = []), w(m, e) || w(v, e) || (v[e] = [e, t, n])
        }).amd = {jQuery: !0}, e.requirejs = t, e.require = n, e.define = i), e.define("almond", (function () {
        })), e.define("jquery", [], (function () {
            var e = u || $;
            return null == e && console && console.error && console.error("Select2: An instance of jQuery or a jQuery-compatible library was not found. Make sure that you are including jQuery before Select2 on your web page."), e
        })), e.define("select2/utils", ["jquery"], (function (s) {
            var r = {};

            function u(e) {
                var t = e.prototype, n = [];
                for (var i in t) "function" == typeof t[i] && "constructor" !== i && n.push(i);
                return n
            }

            function e() {
                this.listeners = {}
            }

            r.Extend = function (e, t) {
                var n = {}.hasOwnProperty;

                function i() {
                    this.constructor = e
                }

                for (var r in t) n.call(t, r) && (e[r] = t[r]);
                return i.prototype = t.prototype, e.prototype = new i, e.__super__ = t.prototype, e
            }, r.Decorate = function (i, r) {
                var e = u(r), t = u(i);

                function s() {
                    var e = Array.prototype.unshift, t = r.prototype.constructor.length, n = i.prototype.constructor;
                    0 < t && (e.call(arguments, i.prototype.constructor), n = r.prototype.constructor), n.apply(this, arguments)
                }

                r.displayName = i.displayName, s.prototype = new function () {
                    this.constructor = s
                };
                for (var n = 0; n < t.length; n++) {
                    var o = t[n];
                    s.prototype[o] = i.prototype[o]
                }

                function a(e) {
                    var t = function () {
                    };
                    e in s.prototype && (t = s.prototype[e]);
                    var n = r.prototype[e];
                    return function () {
                        return Array.prototype.unshift.call(arguments, t), n.apply(this, arguments)
                    }
                }

                for (var l = 0; l < e.length; l++) {
                    var c = e[l];
                    s.prototype[c] = a(c)
                }
                return s
            }, e.prototype.on = function (e, t) {
                this.listeners = this.listeners || {}, e in this.listeners ? this.listeners[e].push(t) : this.listeners[e] = [t]
            }, e.prototype.trigger = function (e) {
                var t = Array.prototype.slice, n = t.call(arguments, 1);
                this.listeners = this.listeners || {}, null == n && (n = []), 0 === n.length && n.push({}), (n[0]._type = e) in this.listeners && this.invoke(this.listeners[e], t.call(arguments, 1)), "*" in this.listeners && this.invoke(this.listeners["*"], arguments)
            }, e.prototype.invoke = function (e, t) {
                for (var n = 0, i = e.length; n < i; n++) e[n].apply(this, t)
            }, r.Observable = e, r.generateChars = function (e) {
                for (var t = "", n = 0; n < e; n++) t += Math.floor(36 * Math.random()).toString(36);
                return t
            }, r.bind = function (e, t) {
                return function () {
                    e.apply(t, arguments)
                }
            }, r._convertData = function (e) {
                for (var t in e) {
                    var n = t.split("-"), i = e;
                    if (1 !== n.length) {
                        for (var r = 0; r < n.length; r++) {
                            var s = n[r];
                            (s = s.substring(0, 1).toLowerCase() + s.substring(1)) in i || (i[s] = {}), r == n.length - 1 && (i[s] = e[t]), i = i[s]
                        }
                        delete e[t]
                    }
                }
                return e
            }, r.hasScroll = function (e, t) {
                var n = s(t), i = t.style.overflowX, r = t.style.overflowY;
                return (i !== r || "hidden" !== r && "visible" !== r) && ("scroll" === i || "scroll" === r || n.innerHeight() < t.scrollHeight || n.innerWidth() < t.scrollWidth)
            }, r.escapeMarkup = function (e) {
                var t = {
                    "\\": "&#92;",
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#39;",
                    "/": "&#47;"
                };
                return "string" != typeof e ? e : String(e).replace(/[&<>"'\/\\]/g, (function (e) {
                    return t[e]
                }))
            }, r.__cache = {};
            var n = 0;
            return r.GetUniqueElementId = function (e) {
                var t = e.getAttribute("data-select2-id");
                return null != t || (t = e.id ? "select2-data-" + e.id : "select2-data-" + (++n).toString() + "-" + r.generateChars(4), e.setAttribute("data-select2-id", t)), t
            }, r.StoreData = function (e, t, n) {
                var i = r.GetUniqueElementId(e);
                r.__cache[i] || (r.__cache[i] = {}), r.__cache[i][t] = n
            }, r.GetData = function (e, t) {
                var n = r.GetUniqueElementId(e);
                return t ? r.__cache[n] && null != r.__cache[n][t] ? r.__cache[n][t] : s(e).data(t) : r.__cache[n]
            }, r.RemoveData = function (e) {
                var t = r.GetUniqueElementId(e);
                null != r.__cache[t] && delete r.__cache[t], e.removeAttribute("data-select2-id")
            }, r.copyNonInternalCssClasses = function (e, t) {
                var n = e.getAttribute("class").trim().split(/\s+/);
                n = n.filter((function (e) {
                    return 0 === e.indexOf("select2-")
                }));
                var i = t.getAttribute("class").trim().split(/\s+/);
                i = i.filter((function (e) {
                    return 0 !== e.indexOf("select2-")
                }));
                var r = n.concat(i);
                e.setAttribute("class", r.join(" "))
            }, r
        })), e.define("select2/results", ["jquery", "./utils"], (function (h, f) {
            function i(e, t, n) {
                this.$element = e, this.data = n, this.options = t, i.__super__.constructor.call(this)
            }

            return f.Extend(i, f.Observable), i.prototype.render = function () {
                var e = h('<ul class="select2-results__options" role="listbox"></ul>');
                return this.options.get("multiple") && e.attr("aria-multiselectable", "true"), this.$results = e
            }, i.prototype.clear = function () {
                this.$results.empty()
            }, i.prototype.displayMessage = function (e) {
                var t = this.options.get("escapeMarkup");
                this.clear(), this.hideLoading();
                var n = h('<li role="alert" aria-live="assertive" class="select2-results__option"></li>'),
                    i = this.options.get("translations").get(e.message);
                n.append(t(i(e.args))), n[0].className += " select2-results__message", this.$results.append(n)
            }, i.prototype.hideMessages = function () {
                this.$results.find(".select2-results__message").remove()
            }, i.prototype.append = function (e) {
                this.hideLoading();
                var t = [];
                if (null != e.results && 0 !== e.results.length) {
                    e.results = this.sort(e.results);
                    for (var n = 0; n < e.results.length; n++) {
                        var i = e.results[n], r = this.option(i);
                        t.push(r)
                    }
                    this.$results.append(t)
                } else 0 === this.$results.children().length && this.trigger("results:message", {message: "noResults"})
            }, i.prototype.position = function (e, t) {
                t.find(".select2-results").append(e)
            }, i.prototype.sort = function (e) {
                return this.options.get("sorter")(e)
            }, i.prototype.highlightFirstItem = function () {
                var e = this.$results.find(".select2-results__option--selectable"),
                    t = e.filter(".select2-results__option--selected");
                0 < t.length ? t.first().trigger("mouseenter") : e.first().trigger("mouseenter"), this.ensureHighlightVisible()
            }, i.prototype.setClasses = function () {
                var t = this;
                this.data.current((function (e) {
                    var i = e.map((function (e) {
                        return e.id.toString()
                    }));
                    t.$results.find(".select2-results__option--selectable").each((function () {
                        var e = h(this), t = f.GetData(this, "data"), n = "" + t.id;
                        null != t.element && t.element.selected || null == t.element && -1 < i.indexOf(n) ? (this.classList.add("select2-results__option--selected"), e.attr("aria-selected", "true")) : (this.classList.remove("select2-results__option--selected"), e.attr("aria-selected", "false"))
                    }))
                }))
            }, i.prototype.showLoading = function (e) {
                this.hideLoading();
                var t = {disabled: !0, loading: !0, text: this.options.get("translations").get("searching")(e)},
                    n = this.option(t);
                n.className += " loading-results", this.$results.prepend(n)
            }, i.prototype.hideLoading = function () {
                this.$results.find(".loading-results").remove()
            }, i.prototype.option = function (e) {
                var t = document.createElement("li");
                t.classList.add("select2-results__option"), t.classList.add("select2-results__option--selectable");
                var n = {role: "option"},
                    i = window.Element.prototype.matches || window.Element.prototype.msMatchesSelector || window.Element.prototype.webkitMatchesSelector;
                for (var r in (null != e.element && i.call(e.element, ":disabled") || null == e.element && e.disabled) && (n["aria-disabled"] = "true", t.classList.remove("select2-results__option--selectable"), t.classList.add("select2-results__option--disabled")), null == e.id && t.classList.remove("select2-results__option--selectable"), null != e._resultId && (t.id = e._resultId), e.title && (t.title = e.title), e.children && (n.role = "group", n["aria-label"] = e.text, t.classList.remove("select2-results__option--selectable"), t.classList.add("select2-results__option--group")), n) {
                    var s = n[r];
                    t.setAttribute(r, s)
                }
                if (e.children) {
                    var o = h(t), a = document.createElement("strong");
                    a.className = "select2-results__group", this.template(e, a);
                    for (var l = [], c = 0; c < e.children.length; c++) {
                        var u = e.children[c], d = this.option(u);
                        l.push(d)
                    }
                    var p = h("<ul></ul>", {class: "select2-results__options select2-results__options--nested"});
                    p.append(l), o.append(a), o.append(p)
                } else this.template(e, t);
                return f.StoreData(t, "data", e), t
            }, i.prototype.bind = function (t, e) {
                var l = this, n = t.id + "-results";
                this.$results.attr("id", n), t.on("results:all", (function (e) {
                    l.clear(), l.append(e.data), t.isOpen() && (l.setClasses(), l.highlightFirstItem())
                })), t.on("results:append", (function (e) {
                    l.append(e.data), t.isOpen() && l.setClasses()
                })), t.on("query", (function (e) {
                    l.hideMessages(), l.showLoading(e)
                })), t.on("select", (function () {
                    t.isOpen() && (l.setClasses(), l.options.get("scrollAfterSelect") && l.highlightFirstItem())
                })), t.on("unselect", (function () {
                    t.isOpen() && (l.setClasses(), l.options.get("scrollAfterSelect") && l.highlightFirstItem())
                })), t.on("open", (function () {
                    l.$results.attr("aria-expanded", "true"), l.$results.attr("aria-hidden", "false"), l.setClasses(), l.ensureHighlightVisible()
                })), t.on("close", (function () {
                    l.$results.attr("aria-expanded", "false"), l.$results.attr("aria-hidden", "true"), l.$results.removeAttr("aria-activedescendant")
                })), t.on("results:toggle", (function () {
                    var e = l.getHighlightedResults();
                    0 !== e.length && e.trigger("mouseup")
                })), t.on("results:select", (function () {
                    var e = l.getHighlightedResults();
                    if (0 !== e.length) {
                        var t = f.GetData(e[0], "data");
                        e.hasClass("select2-results__option--selected") ? l.trigger("close", {}) : l.trigger("select", {data: t})
                    }
                })), t.on("results:previous", (function () {
                    var e = l.getHighlightedResults(), t = l.$results.find(".select2-results__option--selectable"),
                        n = t.index(e);
                    if (!(n <= 0)) {
                        var i = n - 1;
                        0 === e.length && (i = 0);
                        var r = t.eq(i);
                        r.trigger("mouseenter");
                        var s = l.$results.offset().top, o = r.offset().top, a = l.$results.scrollTop() + (o - s);
                        0 === i ? l.$results.scrollTop(0) : o - s < 0 && l.$results.scrollTop(a)
                    }
                })), t.on("results:next", (function () {
                    var e = l.getHighlightedResults(), t = l.$results.find(".select2-results__option--selectable"),
                        n = t.index(e) + 1;
                    if (!(n >= t.length)) {
                        var i = t.eq(n);
                        i.trigger("mouseenter");
                        var r = l.$results.offset().top + l.$results.outerHeight(!1),
                            s = i.offset().top + i.outerHeight(!1), o = l.$results.scrollTop() + s - r;
                        0 === n ? l.$results.scrollTop(0) : r < s && l.$results.scrollTop(o)
                    }
                })), t.on("results:focus", (function (e) {
                    e.element[0].classList.add("select2-results__option--highlighted"), e.element[0].setAttribute("aria-selected", "true")
                })), t.on("results:message", (function (e) {
                    l.displayMessage(e)
                })), h.fn.mousewheel && this.$results.on("mousewheel", (function (e) {
                    var t = l.$results.scrollTop(), n = l.$results.get(0).scrollHeight - t + e.deltaY,
                        i = 0 < e.deltaY && t - e.deltaY <= 0, r = e.deltaY < 0 && n <= l.$results.height();
                    i ? (l.$results.scrollTop(0), e.preventDefault(), e.stopPropagation()) : r && (l.$results.scrollTop(l.$results.get(0).scrollHeight - l.$results.height()), e.preventDefault(), e.stopPropagation())
                })), this.$results.on("mouseup", ".select2-results__option--selectable", (function (e) {
                    var t = h(this), n = f.GetData(this, "data");
                    t.hasClass("select2-results__option--selected") ? l.options.get("multiple") ? l.trigger("unselect", {
                        originalEvent: e,
                        data: n
                    }) : l.trigger("close", {}) : l.trigger("select", {originalEvent: e, data: n})
                })), this.$results.on("mouseenter", ".select2-results__option--selectable", (function (e) {
                    var t = f.GetData(this, "data");
                    l.getHighlightedResults().removeClass("select2-results__option--highlighted").attr("aria-selected", "false"), l.trigger("results:focus", {
                        data: t,
                        element: h(this)
                    })
                }))
            }, i.prototype.getHighlightedResults = function () {
                return this.$results.find(".select2-results__option--highlighted")
            }, i.prototype.destroy = function () {
                this.$results.remove()
            }, i.prototype.ensureHighlightVisible = function () {
                var e = this.getHighlightedResults();
                if (0 !== e.length) {
                    var t = this.$results.find(".select2-results__option--selectable").index(e),
                        n = this.$results.offset().top, i = e.offset().top, r = this.$results.scrollTop() + (i - n),
                        s = i - n;
                    r -= 2 * e.outerHeight(!1), t <= 2 ? this.$results.scrollTop(0) : (s > this.$results.outerHeight() || s < 0) && this.$results.scrollTop(r)
                }
            }, i.prototype.template = function (e, t) {
                var n = this.options.get("templateResult"), i = this.options.get("escapeMarkup"), r = n(e, t);
                null == r ? t.style.display = "none" : "string" == typeof r ? t.innerHTML = i(r) : h(t).append(r)
            }, i
        })), e.define("select2/keys", [], (function () {
            return {
                BACKSPACE: 8,
                TAB: 9,
                ENTER: 13,
                SHIFT: 16,
                CTRL: 17,
                ALT: 18,
                ESC: 27,
                SPACE: 32,
                PAGE_UP: 33,
                PAGE_DOWN: 34,
                END: 35,
                HOME: 36,
                LEFT: 37,
                UP: 38,
                RIGHT: 39,
                DOWN: 40,
                DELETE: 46
            }
        })), e.define("select2/selection/base", ["jquery", "../utils", "../keys"], (function (n, i, r) {
            function s(e, t) {
                this.$element = e, this.options = t, s.__super__.constructor.call(this)
            }

            return i.Extend(s, i.Observable), s.prototype.render = function () {
                var e = n('<span class="select2-selection" role="combobox"  aria-haspopup="true" aria-expanded="false"></span>');
                return this._tabindex = 0, null != i.GetData(this.$element[0], "old-tabindex") ? this._tabindex = i.GetData(this.$element[0], "old-tabindex") : null != this.$element.attr("tabindex") && (this._tabindex = this.$element.attr("tabindex")), e.attr("title", this.$element.attr("title")), e.attr("tabindex", this._tabindex), e.attr("aria-disabled", "false"), this.$selection = e
            }, s.prototype.bind = function (e, t) {
                var n = this, i = e.id + "-results";
                this.container = e, this.$selection.on("focus", (function (e) {
                    n.trigger("focus", e)
                })), this.$selection.on("blur", (function (e) {
                    n._handleBlur(e)
                })), this.$selection.on("keydown", (function (e) {
                    n.trigger("keypress", e), e.which === r.SPACE && e.preventDefault()
                })), e.on("results:focus", (function (e) {
                    n.$selection.attr("aria-activedescendant", e.data._resultId)
                })), e.on("selection:update", (function (e) {
                    n.update(e.data)
                })), e.on("open", (function () {
                    n.$selection.attr("aria-expanded", "true"), n.$selection.attr("aria-owns", i), n._attachCloseHandler(e)
                })), e.on("close", (function () {
                    n.$selection.attr("aria-expanded", "false"), n.$selection.removeAttr("aria-activedescendant"), n.$selection.removeAttr("aria-owns"), n.$selection.trigger("focus"), n._detachCloseHandler(e)
                })), e.on("enable", (function () {
                    n.$selection.attr("tabindex", n._tabindex), n.$selection.attr("aria-disabled", "false")
                })), e.on("disable", (function () {
                    n.$selection.attr("tabindex", "-1"), n.$selection.attr("aria-disabled", "true")
                }))
            }, s.prototype._handleBlur = function (e) {
                var t = this;
                window.setTimeout((function () {
                    document.activeElement == t.$selection[0] || n.contains(t.$selection[0], document.activeElement) || t.trigger("blur", e)
                }), 1)
            }, s.prototype._attachCloseHandler = function (e) {
                n(document.body).on("mousedown.select2." + e.id, (function (e) {
                    var t = n(e.target).closest(".select2");
                    n(".select2.select2-container--open").each((function () {
                        this != t[0] && i.GetData(this, "element").select2("close")
                    }))
                }))
            }, s.prototype._detachCloseHandler = function (e) {
                n(document.body).off("mousedown.select2." + e.id)
            }, s.prototype.position = function (e, t) {
                t.find(".selection").append(e)
            }, s.prototype.destroy = function () {
                this._detachCloseHandler(this.container)
            }, s.prototype.update = function (e) {
                throw new Error("The `update` method must be defined in child classes.")
            }, s.prototype.isEnabled = function () {
                return !this.isDisabled()
            }, s.prototype.isDisabled = function () {
                return this.options.get("disabled")
            }, s
        })), e.define("select2/selection/single", ["jquery", "./base", "../utils", "../keys"], (function (e, t, n, i) {
            function r() {
                r.__super__.constructor.apply(this, arguments)
            }

            return n.Extend(r, t), r.prototype.render = function () {
                var e = r.__super__.render.call(this);
                return e[0].classList.add("select2-selection--single"), e.html('<span class="select2-selection__rendered"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'), e
            }, r.prototype.bind = function (t, e) {
                var n = this;
                r.__super__.bind.apply(this, arguments);
                var i = t.id + "-container";
                this.$selection.find(".select2-selection__rendered").attr("id", i).attr("role", "textbox").attr("aria-readonly", "true"), this.$selection.attr("aria-labelledby", i), this.$selection.on("mousedown", (function (e) {
                    1 === e.which && n.trigger("toggle", {originalEvent: e})
                })), this.$selection.on("focus", (function (e) {
                })), this.$selection.on("blur", (function (e) {
                })), t.on("focus", (function (e) {
                    t.isOpen() || n.$selection.trigger("focus")
                }))
            }, r.prototype.clear = function () {
                var e = this.$selection.find(".select2-selection__rendered");
                e.empty(), e.removeAttr("title")
            }, r.prototype.display = function (e, t) {
                var n = this.options.get("templateSelection");
                return this.options.get("escapeMarkup")(n(e, t))
            }, r.prototype.selectionContainer = function () {
                return e("<span></span>")
            }, r.prototype.update = function (e) {
                if (0 !== e.length) {
                    var t = e[0], n = this.$selection.find(".select2-selection__rendered"), i = this.display(t, n);
                    n.empty().append(i);
                    var r = t.title || t.text;
                    r ? n.attr("title", r) : n.removeAttr("title")
                } else this.clear()
            }, r
        })), e.define("select2/selection/multiple", ["jquery", "./base", "../utils"], (function (r, e, d) {
            function s(e, t) {
                s.__super__.constructor.apply(this, arguments)
            }

            return d.Extend(s, e), s.prototype.render = function () {
                var e = s.__super__.render.call(this);
                return e[0].classList.add("select2-selection--multiple"), e.html('<ul class="select2-selection__rendered"></ul>'), e
            }, s.prototype.bind = function (e, t) {
                var i = this;
                s.__super__.bind.apply(this, arguments);
                var n = e.id + "-container";
                this.$selection.find(".select2-selection__rendered").attr("id", n), this.$selection.on("click", (function (e) {
                    i.trigger("toggle", {originalEvent: e})
                })), this.$selection.on("click", ".select2-selection__choice__remove", (function (e) {
                    if (!i.isDisabled()) {
                        var t = r(this).parent(), n = d.GetData(t[0], "data");
                        i.trigger("unselect", {originalEvent: e, data: n})
                    }
                })), this.$selection.on("keydown", ".select2-selection__choice__remove", (function (e) {
                    i.isDisabled() || e.stopPropagation()
                }))
            }, s.prototype.clear = function () {
                var e = this.$selection.find(".select2-selection__rendered");
                e.empty(), e.removeAttr("title")
            }, s.prototype.display = function (e, t) {
                var n = this.options.get("templateSelection");
                return this.options.get("escapeMarkup")(n(e, t))
            }, s.prototype.selectionContainer = function () {
                return r('<li class="select2-selection__choice"><button type="button" class="select2-selection__choice__remove" tabindex="-1"><span aria-hidden="true">&times;</span></button><span class="select2-selection__choice__display"></span></li>')
            }, s.prototype.update = function (e) {
                if (this.clear(), 0 !== e.length) {
                    for (var t = [], n = this.$selection.find(".select2-selection__rendered").attr("id") + "-choice-", i = 0; i < e.length; i++) {
                        var r = e[i], s = this.selectionContainer(), o = this.display(r, s),
                            a = n + d.generateChars(4) + "-";
                        r.id ? a += r.id : a += d.generateChars(4), s.find(".select2-selection__choice__display").append(o).attr("id", a);
                        var l = r.title || r.text;
                        l && s.attr("title", l);
                        var c = this.options.get("translations").get("removeItem"),
                            u = s.find(".select2-selection__choice__remove");
                        u.attr("title", c()), u.attr("aria-label", c()), u.attr("aria-describedby", a), d.StoreData(s[0], "data", r), t.push(s)
                    }
                    this.$selection.find(".select2-selection__rendered").append(t)
                }
            }, s
        })), e.define("select2/selection/placeholder", [], (function () {
            function e(e, t, n) {
                this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n)
            }

            return e.prototype.normalizePlaceholder = function (e, t) {
                return "string" == typeof t && (t = {id: "", text: t}), t
            }, e.prototype.createPlaceholder = function (e, t) {
                var n = this.selectionContainer();
                return n.html(this.display(t)), n[0].classList.add("select2-selection__placeholder"), n[0].classList.remove("select2-selection__choice"), n
            }, e.prototype.update = function (e, t) {
                var n = 1 == t.length && t[0].id != this.placeholder.id;
                if (1 < t.length || n) return e.call(this, t);
                this.clear();
                var i = this.createPlaceholder(this.placeholder);
                this.$selection.find(".select2-selection__rendered").append(i)
            }, e
        })), e.define("select2/selection/allowClear", ["jquery", "../keys", "../utils"], (function (s, i, a) {
            function e() {
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), null == this.placeholder && this.options.get("debug") && window.console && console.error && console.error("Select2: The `allowClear` option should be used in combination with the `placeholder` option."), this.$selection.on("mousedown", ".select2-selection__clear", (function (e) {
                    i._handleClear(e)
                })), t.on("keypress", (function (e) {
                    i._handleKeyboardClear(e, t)
                }))
            }, e.prototype._handleClear = function (e, t) {
                if (!this.isDisabled()) {
                    var n = this.$selection.find(".select2-selection__clear");
                    if (0 !== n.length) {
                        t.stopPropagation();
                        var i = a.GetData(n[0], "data"), r = this.$element.val();
                        this.$element.val(this.placeholder.id);
                        var s = {data: i};
                        if (this.trigger("clear", s), s.prevented) this.$element.val(r); else {
                            for (var o = 0; o < i.length; o++) if (s = {data: i[o]}, this.trigger("unselect", s), s.prevented) return void this.$element.val(r);
                            this.$element.trigger("input").trigger("change"), this.trigger("toggle", {})
                        }
                    }
                }
            }, e.prototype._handleKeyboardClear = function (e, t, n) {
                n.isOpen() || t.which != i.DELETE && t.which != i.BACKSPACE || this._handleClear(t)
            }, e.prototype.update = function (e, t) {
                if (e.call(this, t), this.$selection.find(".select2-selection__clear").remove(), !(0 < this.$selection.find(".select2-selection__placeholder").length || 0 === t.length)) {
                    var n = this.$selection.find(".select2-selection__rendered").attr("id"),
                        i = this.options.get("translations").get("removeAllItems"),
                        r = s('<button type="button" class="select2-selection__clear" tabindex="-1"><span aria-hidden="true">&times;</span></button>');
                    r.attr("title", i()), r.attr("aria-label", i()), r.attr("aria-describedby", n), a.StoreData(r[0], "data", t), this.$selection.prepend(r)
                }
            }, e
        })), e.define("select2/selection/search", ["jquery", "../utils", "../keys"], (function (i, l, c) {
            function e(e, t, n) {
                e.call(this, t, n)
            }

            return e.prototype.render = function (e) {
                var t = i('<span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" /></span>');
                this.$searchContainer = t, this.$search = t.find("input"), this.$search.prop("autocomplete", this.options.get("autocomplete"));
                var n = e.call(this);
                return this._transferTabIndex(), n.append(this.$searchContainer), n
            }, e.prototype.bind = function (e, t, n) {
                var i = this, r = t.id + "-results", s = t.id + "-container";
                e.call(this, t, n), i.$search.attr("aria-describedby", s), t.on("open", (function () {
                    i.$search.attr("aria-controls", r), i.$search.trigger("focus")
                })), t.on("close", (function () {
                    i.$search.val(""), i.resizeSearch(), i.$search.removeAttr("aria-controls"), i.$search.removeAttr("aria-activedescendant"), i.$search.trigger("focus")
                })), t.on("enable", (function () {
                    i.$search.prop("disabled", !1), i._transferTabIndex()
                })), t.on("disable", (function () {
                    i.$search.prop("disabled", !0)
                })), t.on("focus", (function (e) {
                    i.$search.trigger("focus")
                })), t.on("results:focus", (function (e) {
                    e.data._resultId ? i.$search.attr("aria-activedescendant", e.data._resultId) : i.$search.removeAttr("aria-activedescendant")
                })), this.$selection.on("focusin", ".select2-search--inline", (function (e) {
                    i.trigger("focus", e)
                })), this.$selection.on("focusout", ".select2-search--inline", (function (e) {
                    i._handleBlur(e)
                })), this.$selection.on("keydown", ".select2-search--inline", (function (e) {
                    if (e.stopPropagation(), i.trigger("keypress", e), i._keyUpPrevented = e.isDefaultPrevented(), e.which === c.BACKSPACE && "" === i.$search.val()) {
                        var t = i.$selection.find(".select2-selection__choice").last();
                        if (0 < t.length) {
                            var n = l.GetData(t[0], "data");
                            i.searchRemoveChoice(n), e.preventDefault()
                        }
                    }
                })), this.$selection.on("click", ".select2-search--inline", (function (e) {
                    i.$search.val() && e.stopPropagation()
                }));
                var o = document.documentMode, a = o && o <= 11;
                this.$selection.on("input.searchcheck", ".select2-search--inline", (function (e) {
                    a ? i.$selection.off("input.search input.searchcheck") : i.$selection.off("keyup.search")
                })), this.$selection.on("keyup.search input.search", ".select2-search--inline", (function (e) {
                    if (a && "input" === e.type) i.$selection.off("input.search input.searchcheck"); else {
                        var t = e.which;
                        t != c.SHIFT && t != c.CTRL && t != c.ALT && t != c.TAB && i.handleSearch(e)
                    }
                }))
            }, e.prototype._transferTabIndex = function (e) {
                this.$search.attr("tabindex", this.$selection.attr("tabindex")), this.$selection.attr("tabindex", "-1")
            }, e.prototype.createPlaceholder = function (e, t) {
                this.$search.attr("placeholder", t.text)
            }, e.prototype.update = function (e, t) {
                var n = this.$search[0] == document.activeElement;
                this.$search.attr("placeholder", ""), e.call(this, t), this.resizeSearch(), n && this.$search.trigger("focus")
            }, e.prototype.handleSearch = function () {
                if (this.resizeSearch(), !this._keyUpPrevented) {
                    var e = this.$search.val();
                    this.trigger("query", {term: e})
                }
                this._keyUpPrevented = !1
            }, e.prototype.searchRemoveChoice = function (e, t) {
                this.trigger("unselect", {data: t}), this.$search.val(t.text), this.handleSearch()
            }, e.prototype.resizeSearch = function () {
                this.$search.css("width", "25px");
                var e = "100%";
                "" === this.$search.attr("placeholder") && (e = .75 * (this.$search.val().length + 1) + "em"), this.$search.css("width", e)
            }, e
        })), e.define("select2/selection/selectionCss", ["../utils"], (function (i) {
            function e() {
            }

            return e.prototype.render = function (e) {
                var t = e.call(this), n = this.options.get("selectionCssClass") || "";
                return -1 !== n.indexOf(":all:") && (n = n.replace(":all:", ""), i.copyNonInternalCssClasses(t[0], this.$element[0])), t.addClass(n), t
            }, e
        })), e.define("select2/selection/eventRelay", ["jquery"], (function (o) {
            function e() {
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this,
                    r = ["open", "opening", "close", "closing", "select", "selecting", "unselect", "unselecting", "clear", "clearing"],
                    s = ["opening", "closing", "selecting", "unselecting", "clearing"];
                e.call(this, t, n), t.on("*", (function (e, t) {
                    if (-1 !== r.indexOf(e)) {
                        t = t || {};
                        var n = o.Event("select2:" + e, {params: t});
                        i.$element.trigger(n), -1 !== s.indexOf(e) && (t.prevented = n.isDefaultPrevented())
                    }
                }))
            }, e
        })), e.define("select2/translation", ["jquery", "require"], (function (t, n) {
            function i(e) {
                this.dict = e || {}
            }

            return i.prototype.all = function () {
                return this.dict
            }, i.prototype.get = function (e) {
                return this.dict[e]
            }, i.prototype.extend = function (e) {
                this.dict = t.extend({}, e.all(), this.dict)
            }, i._cache = {}, i.loadPath = function (e) {
                if (!(e in i._cache)) {
                    var t = n(e);
                    i._cache[e] = t
                }
                return new i(i._cache[e])
            }, i
        })), e.define("select2/diacritics", [], (function () {
            return {
                "Ⓐ": "A",
                "Ａ": "A",
                "À": "A",
                "Á": "A",
                "Â": "A",
                "Ầ": "A",
                "Ấ": "A",
                "Ẫ": "A",
                "Ẩ": "A",
                "Ã": "A",
                "Ā": "A",
                "Ă": "A",
                "Ằ": "A",
                "Ắ": "A",
                "Ẵ": "A",
                "Ẳ": "A",
                "Ȧ": "A",
                "Ǡ": "A",
                "Ä": "A",
                "Ǟ": "A",
                "Ả": "A",
                "Å": "A",
                "Ǻ": "A",
                "Ǎ": "A",
                "Ȁ": "A",
                "Ȃ": "A",
                "Ạ": "A",
                "Ậ": "A",
                "Ặ": "A",
                "Ḁ": "A",
                "Ą": "A",
                "Ⱥ": "A",
                "Ɐ": "A",
                "Ꜳ": "AA",
                "Æ": "AE",
                "Ǽ": "AE",
                "Ǣ": "AE",
                "Ꜵ": "AO",
                "Ꜷ": "AU",
                "Ꜹ": "AV",
                "Ꜻ": "AV",
                "Ꜽ": "AY",
                "Ⓑ": "B",
                "Ｂ": "B",
                "Ḃ": "B",
                "Ḅ": "B",
                "Ḇ": "B",
                "Ƀ": "B",
                "Ƃ": "B",
                "Ɓ": "B",
                "Ⓒ": "C",
                "Ｃ": "C",
                "Ć": "C",
                "Ĉ": "C",
                "Ċ": "C",
                "Č": "C",
                "Ç": "C",
                "Ḉ": "C",
                "Ƈ": "C",
                "Ȼ": "C",
                "Ꜿ": "C",
                "Ⓓ": "D",
                "Ｄ": "D",
                "Ḋ": "D",
                "Ď": "D",
                "Ḍ": "D",
                "Ḑ": "D",
                "Ḓ": "D",
                "Ḏ": "D",
                "Đ": "D",
                "Ƌ": "D",
                "Ɗ": "D",
                "Ɖ": "D",
                "Ꝺ": "D",
                "Ǳ": "DZ",
                "Ǆ": "DZ",
                "ǲ": "Dz",
                "ǅ": "Dz",
                "Ⓔ": "E",
                "Ｅ": "E",
                "È": "E",
                "É": "E",
                "Ê": "E",
                "Ề": "E",
                "Ế": "E",
                "Ễ": "E",
                "Ể": "E",
                "Ẽ": "E",
                "Ē": "E",
                "Ḕ": "E",
                "Ḗ": "E",
                "Ĕ": "E",
                "Ė": "E",
                "Ë": "E",
                "Ẻ": "E",
                "Ě": "E",
                "Ȅ": "E",
                "Ȇ": "E",
                "Ẹ": "E",
                "Ệ": "E",
                "Ȩ": "E",
                "Ḝ": "E",
                "Ę": "E",
                "Ḙ": "E",
                "Ḛ": "E",
                "Ɛ": "E",
                "Ǝ": "E",
                "Ⓕ": "F",
                "Ｆ": "F",
                "Ḟ": "F",
                "Ƒ": "F",
                "Ꝼ": "F",
                "Ⓖ": "G",
                "Ｇ": "G",
                "Ǵ": "G",
                "Ĝ": "G",
                "Ḡ": "G",
                "Ğ": "G",
                "Ġ": "G",
                "Ǧ": "G",
                "Ģ": "G",
                "Ǥ": "G",
                "Ɠ": "G",
                "Ꞡ": "G",
                "Ᵹ": "G",
                "Ꝿ": "G",
                "Ⓗ": "H",
                "Ｈ": "H",
                "Ĥ": "H",
                "Ḣ": "H",
                "Ḧ": "H",
                "Ȟ": "H",
                "Ḥ": "H",
                "Ḩ": "H",
                "Ḫ": "H",
                "Ħ": "H",
                "Ⱨ": "H",
                "Ⱶ": "H",
                "Ɥ": "H",
                "Ⓘ": "I",
                "Ｉ": "I",
                "Ì": "I",
                "Í": "I",
                "Î": "I",
                "Ĩ": "I",
                "Ī": "I",
                "Ĭ": "I",
                "İ": "I",
                "Ï": "I",
                "Ḯ": "I",
                "Ỉ": "I",
                "Ǐ": "I",
                "Ȉ": "I",
                "Ȋ": "I",
                "Ị": "I",
                "Į": "I",
                "Ḭ": "I",
                "Ɨ": "I",
                "Ⓙ": "J",
                "Ｊ": "J",
                "Ĵ": "J",
                "Ɉ": "J",
                "Ⓚ": "K",
                "Ｋ": "K",
                "Ḱ": "K",
                "Ǩ": "K",
                "Ḳ": "K",
                "Ķ": "K",
                "Ḵ": "K",
                "Ƙ": "K",
                "Ⱪ": "K",
                "Ꝁ": "K",
                "Ꝃ": "K",
                "Ꝅ": "K",
                "Ꞣ": "K",
                "Ⓛ": "L",
                "Ｌ": "L",
                "Ŀ": "L",
                "Ĺ": "L",
                "Ľ": "L",
                "Ḷ": "L",
                "Ḹ": "L",
                "Ļ": "L",
                "Ḽ": "L",
                "Ḻ": "L",
                "Ł": "L",
                "Ƚ": "L",
                "Ɫ": "L",
                "Ⱡ": "L",
                "Ꝉ": "L",
                "Ꝇ": "L",
                "Ꞁ": "L",
                "Ǉ": "LJ",
                "ǈ": "Lj",
                "Ⓜ": "M",
                "Ｍ": "M",
                "Ḿ": "M",
                "Ṁ": "M",
                "Ṃ": "M",
                "Ɱ": "M",
                "Ɯ": "M",
                "Ⓝ": "N",
                "Ｎ": "N",
                "Ǹ": "N",
                "Ń": "N",
                "Ñ": "N",
                "Ṅ": "N",
                "Ň": "N",
                "Ṇ": "N",
                "Ņ": "N",
                "Ṋ": "N",
                "Ṉ": "N",
                "Ƞ": "N",
                "Ɲ": "N",
                "Ꞑ": "N",
                "Ꞥ": "N",
                "Ǌ": "NJ",
                "ǋ": "Nj",
                "Ⓞ": "O",
                "Ｏ": "O",
                "Ò": "O",
                "Ó": "O",
                "Ô": "O",
                "Ồ": "O",
                "Ố": "O",
                "Ỗ": "O",
                "Ổ": "O",
                "Õ": "O",
                "Ṍ": "O",
                "Ȭ": "O",
                "Ṏ": "O",
                "Ō": "O",
                "Ṑ": "O",
                "Ṓ": "O",
                "Ŏ": "O",
                "Ȯ": "O",
                "Ȱ": "O",
                "Ö": "O",
                "Ȫ": "O",
                "Ỏ": "O",
                "Ő": "O",
                "Ǒ": "O",
                "Ȍ": "O",
                "Ȏ": "O",
                "Ơ": "O",
                "Ờ": "O",
                "Ớ": "O",
                "Ỡ": "O",
                "Ở": "O",
                "Ợ": "O",
                "Ọ": "O",
                "Ộ": "O",
                "Ǫ": "O",
                "Ǭ": "O",
                "Ø": "O",
                "Ǿ": "O",
                "Ɔ": "O",
                "Ɵ": "O",
                "Ꝋ": "O",
                "Ꝍ": "O",
                "Œ": "OE",
                "Ƣ": "OI",
                "Ꝏ": "OO",
                "Ȣ": "OU",
                "Ⓟ": "P",
                "Ｐ": "P",
                "Ṕ": "P",
                "Ṗ": "P",
                "Ƥ": "P",
                "Ᵽ": "P",
                "Ꝑ": "P",
                "Ꝓ": "P",
                "Ꝕ": "P",
                "Ⓠ": "Q",
                "Ｑ": "Q",
                "Ꝗ": "Q",
                "Ꝙ": "Q",
                "Ɋ": "Q",
                "Ⓡ": "R",
                "Ｒ": "R",
                "Ŕ": "R",
                "Ṙ": "R",
                "Ř": "R",
                "Ȑ": "R",
                "Ȓ": "R",
                "Ṛ": "R",
                "Ṝ": "R",
                "Ŗ": "R",
                "Ṟ": "R",
                "Ɍ": "R",
                "Ɽ": "R",
                "Ꝛ": "R",
                "Ꞧ": "R",
                "Ꞃ": "R",
                "Ⓢ": "S",
                "Ｓ": "S",
                "ẞ": "S",
                "Ś": "S",
                "Ṥ": "S",
                "Ŝ": "S",
                "Ṡ": "S",
                "Š": "S",
                "Ṧ": "S",
                "Ṣ": "S",
                "Ṩ": "S",
                "Ș": "S",
                "Ş": "S",
                "Ȿ": "S",
                "Ꞩ": "S",
                "Ꞅ": "S",
                "Ⓣ": "T",
                "Ｔ": "T",
                "Ṫ": "T",
                "Ť": "T",
                "Ṭ": "T",
                "Ț": "T",
                "Ţ": "T",
                "Ṱ": "T",
                "Ṯ": "T",
                "Ŧ": "T",
                "Ƭ": "T",
                "Ʈ": "T",
                "Ⱦ": "T",
                "Ꞇ": "T",
                "Ꜩ": "TZ",
                "Ⓤ": "U",
                "Ｕ": "U",
                "Ù": "U",
                "Ú": "U",
                "Û": "U",
                "Ũ": "U",
                "Ṹ": "U",
                "Ū": "U",
                "Ṻ": "U",
                "Ŭ": "U",
                "Ü": "U",
                "Ǜ": "U",
                "Ǘ": "U",
                "Ǖ": "U",
                "Ǚ": "U",
                "Ủ": "U",
                "Ů": "U",
                "Ű": "U",
                "Ǔ": "U",
                "Ȕ": "U",
                "Ȗ": "U",
                "Ư": "U",
                "Ừ": "U",
                "Ứ": "U",
                "Ữ": "U",
                "Ử": "U",
                "Ự": "U",
                "Ụ": "U",
                "Ṳ": "U",
                "Ų": "U",
                "Ṷ": "U",
                "Ṵ": "U",
                "Ʉ": "U",
                "Ⓥ": "V",
                "Ｖ": "V",
                "Ṽ": "V",
                "Ṿ": "V",
                "Ʋ": "V",
                "Ꝟ": "V",
                "Ʌ": "V",
                "Ꝡ": "VY",
                "Ⓦ": "W",
                "Ｗ": "W",
                "Ẁ": "W",
                "Ẃ": "W",
                "Ŵ": "W",
                "Ẇ": "W",
                "Ẅ": "W",
                "Ẉ": "W",
                "Ⱳ": "W",
                "Ⓧ": "X",
                "Ｘ": "X",
                "Ẋ": "X",
                "Ẍ": "X",
                "Ⓨ": "Y",
                "Ｙ": "Y",
                "Ỳ": "Y",
                "Ý": "Y",
                "Ŷ": "Y",
                "Ỹ": "Y",
                "Ȳ": "Y",
                "Ẏ": "Y",
                "Ÿ": "Y",
                "Ỷ": "Y",
                "Ỵ": "Y",
                "Ƴ": "Y",
                "Ɏ": "Y",
                "Ỿ": "Y",
                "Ⓩ": "Z",
                "Ｚ": "Z",
                "Ź": "Z",
                "Ẑ": "Z",
                "Ż": "Z",
                "Ž": "Z",
                "Ẓ": "Z",
                "Ẕ": "Z",
                "Ƶ": "Z",
                "Ȥ": "Z",
                "Ɀ": "Z",
                "Ⱬ": "Z",
                "Ꝣ": "Z",
                "ⓐ": "a",
                "ａ": "a",
                "ẚ": "a",
                "à": "a",
                "á": "a",
                "â": "a",
                "ầ": "a",
                "ấ": "a",
                "ẫ": "a",
                "ẩ": "a",
                "ã": "a",
                "ā": "a",
                "ă": "a",
                "ằ": "a",
                "ắ": "a",
                "ẵ": "a",
                "ẳ": "a",
                "ȧ": "a",
                "ǡ": "a",
                "ä": "a",
                "ǟ": "a",
                "ả": "a",
                "å": "a",
                "ǻ": "a",
                "ǎ": "a",
                "ȁ": "a",
                "ȃ": "a",
                "ạ": "a",
                "ậ": "a",
                "ặ": "a",
                "ḁ": "a",
                "ą": "a",
                "ⱥ": "a",
                "ɐ": "a",
                "ꜳ": "aa",
                "æ": "ae",
                "ǽ": "ae",
                "ǣ": "ae",
                "ꜵ": "ao",
                "ꜷ": "au",
                "ꜹ": "av",
                "ꜻ": "av",
                "ꜽ": "ay",
                "ⓑ": "b",
                "ｂ": "b",
                "ḃ": "b",
                "ḅ": "b",
                "ḇ": "b",
                "ƀ": "b",
                "ƃ": "b",
                "ɓ": "b",
                "ⓒ": "c",
                "ｃ": "c",
                "ć": "c",
                "ĉ": "c",
                "ċ": "c",
                "č": "c",
                "ç": "c",
                "ḉ": "c",
                "ƈ": "c",
                "ȼ": "c",
                "ꜿ": "c",
                "ↄ": "c",
                "ⓓ": "d",
                "ｄ": "d",
                "ḋ": "d",
                "ď": "d",
                "ḍ": "d",
                "ḑ": "d",
                "ḓ": "d",
                "ḏ": "d",
                "đ": "d",
                "ƌ": "d",
                "ɖ": "d",
                "ɗ": "d",
                "ꝺ": "d",
                "ǳ": "dz",
                "ǆ": "dz",
                "ⓔ": "e",
                "ｅ": "e",
                "è": "e",
                "é": "e",
                "ê": "e",
                "ề": "e",
                "ế": "e",
                "ễ": "e",
                "ể": "e",
                "ẽ": "e",
                "ē": "e",
                "ḕ": "e",
                "ḗ": "e",
                "ĕ": "e",
                "ė": "e",
                "ë": "e",
                "ẻ": "e",
                "ě": "e",
                "ȅ": "e",
                "ȇ": "e",
                "ẹ": "e",
                "ệ": "e",
                "ȩ": "e",
                "ḝ": "e",
                "ę": "e",
                "ḙ": "e",
                "ḛ": "e",
                "ɇ": "e",
                "ɛ": "e",
                "ǝ": "e",
                "ⓕ": "f",
                "ｆ": "f",
                "ḟ": "f",
                "ƒ": "f",
                "ꝼ": "f",
                "ⓖ": "g",
                "ｇ": "g",
                "ǵ": "g",
                "ĝ": "g",
                "ḡ": "g",
                "ğ": "g",
                "ġ": "g",
                "ǧ": "g",
                "ģ": "g",
                "ǥ": "g",
                "ɠ": "g",
                "ꞡ": "g",
                "ᵹ": "g",
                "ꝿ": "g",
                "ⓗ": "h",
                "ｈ": "h",
                "ĥ": "h",
                "ḣ": "h",
                "ḧ": "h",
                "ȟ": "h",
                "ḥ": "h",
                "ḩ": "h",
                "ḫ": "h",
                "ẖ": "h",
                "ħ": "h",
                "ⱨ": "h",
                "ⱶ": "h",
                "ɥ": "h",
                "ƕ": "hv",
                "ⓘ": "i",
                "ｉ": "i",
                "ì": "i",
                "í": "i",
                "î": "i",
                "ĩ": "i",
                "ī": "i",
                "ĭ": "i",
                "ï": "i",
                "ḯ": "i",
                "ỉ": "i",
                "ǐ": "i",
                "ȉ": "i",
                "ȋ": "i",
                "ị": "i",
                "į": "i",
                "ḭ": "i",
                "ɨ": "i",
                "ı": "i",
                "ⓙ": "j",
                "ｊ": "j",
                "ĵ": "j",
                "ǰ": "j",
                "ɉ": "j",
                "ⓚ": "k",
                "ｋ": "k",
                "ḱ": "k",
                "ǩ": "k",
                "ḳ": "k",
                "ķ": "k",
                "ḵ": "k",
                "ƙ": "k",
                "ⱪ": "k",
                "ꝁ": "k",
                "ꝃ": "k",
                "ꝅ": "k",
                "ꞣ": "k",
                "ⓛ": "l",
                "ｌ": "l",
                "ŀ": "l",
                "ĺ": "l",
                "ľ": "l",
                "ḷ": "l",
                "ḹ": "l",
                "ļ": "l",
                "ḽ": "l",
                "ḻ": "l",
                "ſ": "l",
                "ł": "l",
                "ƚ": "l",
                "ɫ": "l",
                "ⱡ": "l",
                "ꝉ": "l",
                "ꞁ": "l",
                "ꝇ": "l",
                "ǉ": "lj",
                "ⓜ": "m",
                "ｍ": "m",
                "ḿ": "m",
                "ṁ": "m",
                "ṃ": "m",
                "ɱ": "m",
                "ɯ": "m",
                "ⓝ": "n",
                "ｎ": "n",
                "ǹ": "n",
                "ń": "n",
                "ñ": "n",
                "ṅ": "n",
                "ň": "n",
                "ṇ": "n",
                "ņ": "n",
                "ṋ": "n",
                "ṉ": "n",
                "ƞ": "n",
                "ɲ": "n",
                "ŉ": "n",
                "ꞑ": "n",
                "ꞥ": "n",
                "ǌ": "nj",
                "ⓞ": "o",
                "ｏ": "o",
                "ò": "o",
                "ó": "o",
                "ô": "o",
                "ồ": "o",
                "ố": "o",
                "ỗ": "o",
                "ổ": "o",
                "õ": "o",
                "ṍ": "o",
                "ȭ": "o",
                "ṏ": "o",
                "ō": "o",
                "ṑ": "o",
                "ṓ": "o",
                "ŏ": "o",
                "ȯ": "o",
                "ȱ": "o",
                "ö": "o",
                "ȫ": "o",
                "ỏ": "o",
                "ő": "o",
                "ǒ": "o",
                "ȍ": "o",
                "ȏ": "o",
                "ơ": "o",
                "ờ": "o",
                "ớ": "o",
                "ỡ": "o",
                "ở": "o",
                "ợ": "o",
                "ọ": "o",
                "ộ": "o",
                "ǫ": "o",
                "ǭ": "o",
                "ø": "o",
                "ǿ": "o",
                "ɔ": "o",
                "ꝋ": "o",
                "ꝍ": "o",
                "ɵ": "o",
                "œ": "oe",
                "ƣ": "oi",
                "ȣ": "ou",
                "ꝏ": "oo",
                "ⓟ": "p",
                "ｐ": "p",
                "ṕ": "p",
                "ṗ": "p",
                "ƥ": "p",
                "ᵽ": "p",
                "ꝑ": "p",
                "ꝓ": "p",
                "ꝕ": "p",
                "ⓠ": "q",
                "ｑ": "q",
                "ɋ": "q",
                "ꝗ": "q",
                "ꝙ": "q",
                "ⓡ": "r",
                "ｒ": "r",
                "ŕ": "r",
                "ṙ": "r",
                "ř": "r",
                "ȑ": "r",
                "ȓ": "r",
                "ṛ": "r",
                "ṝ": "r",
                "ŗ": "r",
                "ṟ": "r",
                "ɍ": "r",
                "ɽ": "r",
                "ꝛ": "r",
                "ꞧ": "r",
                "ꞃ": "r",
                "ⓢ": "s",
                "ｓ": "s",
                "ß": "s",
                "ś": "s",
                "ṥ": "s",
                "ŝ": "s",
                "ṡ": "s",
                "š": "s",
                "ṧ": "s",
                "ṣ": "s",
                "ṩ": "s",
                "ș": "s",
                "ş": "s",
                "ȿ": "s",
                "ꞩ": "s",
                "ꞅ": "s",
                "ẛ": "s",
                "ⓣ": "t",
                "ｔ": "t",
                "ṫ": "t",
                "ẗ": "t",
                "ť": "t",
                "ṭ": "t",
                "ț": "t",
                "ţ": "t",
                "ṱ": "t",
                "ṯ": "t",
                "ŧ": "t",
                "ƭ": "t",
                "ʈ": "t",
                "ⱦ": "t",
                "ꞇ": "t",
                "ꜩ": "tz",
                "ⓤ": "u",
                "ｕ": "u",
                "ù": "u",
                "ú": "u",
                "û": "u",
                "ũ": "u",
                "ṹ": "u",
                "ū": "u",
                "ṻ": "u",
                "ŭ": "u",
                "ü": "u",
                "ǜ": "u",
                "ǘ": "u",
                "ǖ": "u",
                "ǚ": "u",
                "ủ": "u",
                "ů": "u",
                "ű": "u",
                "ǔ": "u",
                "ȕ": "u",
                "ȗ": "u",
                "ư": "u",
                "ừ": "u",
                "ứ": "u",
                "ữ": "u",
                "ử": "u",
                "ự": "u",
                "ụ": "u",
                "ṳ": "u",
                "ų": "u",
                "ṷ": "u",
                "ṵ": "u",
                "ʉ": "u",
                "ⓥ": "v",
                "ｖ": "v",
                "ṽ": "v",
                "ṿ": "v",
                "ʋ": "v",
                "ꝟ": "v",
                "ʌ": "v",
                "ꝡ": "vy",
                "ⓦ": "w",
                "ｗ": "w",
                "ẁ": "w",
                "ẃ": "w",
                "ŵ": "w",
                "ẇ": "w",
                "ẅ": "w",
                "ẘ": "w",
                "ẉ": "w",
                "ⱳ": "w",
                "ⓧ": "x",
                "ｘ": "x",
                "ẋ": "x",
                "ẍ": "x",
                "ⓨ": "y",
                "ｙ": "y",
                "ỳ": "y",
                "ý": "y",
                "ŷ": "y",
                "ỹ": "y",
                "ȳ": "y",
                "ẏ": "y",
                "ÿ": "y",
                "ỷ": "y",
                "ẙ": "y",
                "ỵ": "y",
                "ƴ": "y",
                "ɏ": "y",
                "ỿ": "y",
                "ⓩ": "z",
                "ｚ": "z",
                "ź": "z",
                "ẑ": "z",
                "ż": "z",
                "ž": "z",
                "ẓ": "z",
                "ẕ": "z",
                "ƶ": "z",
                "ȥ": "z",
                "ɀ": "z",
                "ⱬ": "z",
                "ꝣ": "z",
                "Ά": "Α",
                "Έ": "Ε",
                "Ή": "Η",
                "Ί": "Ι",
                "Ϊ": "Ι",
                "Ό": "Ο",
                "Ύ": "Υ",
                "Ϋ": "Υ",
                "Ώ": "Ω",
                "ά": "α",
                "έ": "ε",
                "ή": "η",
                "ί": "ι",
                "ϊ": "ι",
                "ΐ": "ι",
                "ό": "ο",
                "ύ": "υ",
                "ϋ": "υ",
                "ΰ": "υ",
                "ώ": "ω",
                "ς": "σ",
                "’": "'"
            }
        })), e.define("select2/data/base", ["../utils"], (function (i) {
            function n(e, t) {
                n.__super__.constructor.call(this)
            }

            return i.Extend(n, i.Observable), n.prototype.current = function (e) {
                throw new Error("The `current` method must be defined in child classes.")
            }, n.prototype.query = function (e, t) {
                throw new Error("The `query` method must be defined in child classes.")
            }, n.prototype.bind = function (e, t) {
            }, n.prototype.destroy = function () {
            }, n.prototype.generateResultId = function (e, t) {
                var n = e.id + "-result-";
                return n += i.generateChars(4), null != t.id ? n += "-" + t.id.toString() : n += "-" + i.generateChars(4), n
            }, n
        })), e.define("select2/data/select", ["./base", "../utils", "jquery"], (function (e, l, c) {
            function n(e, t) {
                this.$element = e, this.options = t, n.__super__.constructor.call(this)
            }

            return l.Extend(n, e), n.prototype.current = function (e) {
                var t = this;
                e(Array.prototype.map.call(this.$element[0].querySelectorAll(":checked"), (function (e) {
                    return t.item(c(e))
                })))
            }, n.prototype.select = function (r) {
                var s = this;
                if (r.selected = !0, null != r.element && "option" === r.element.tagName.toLowerCase()) return r.element.selected = !0, void this.$element.trigger("input").trigger("change");
                if (this.$element.prop("multiple")) this.current((function (e) {
                    var t = [];
                    (r = [r]).push.apply(r, e);
                    for (var n = 0; n < r.length; n++) {
                        var i = r[n].id;
                        -1 === t.indexOf(i) && t.push(i)
                    }
                    s.$element.val(t), s.$element.trigger("input").trigger("change")
                })); else {
                    var e = r.id;
                    this.$element.val(e), this.$element.trigger("input").trigger("change")
                }
            }, n.prototype.unselect = function (r) {
                var s = this;
                if (this.$element.prop("multiple")) {
                    if (r.selected = !1, null != r.element && "option" === r.element.tagName.toLowerCase()) return r.element.selected = !1, void this.$element.trigger("input").trigger("change");
                    this.current((function (e) {
                        for (var t = [], n = 0; n < e.length; n++) {
                            var i = e[n].id;
                            i !== r.id && -1 === t.indexOf(i) && t.push(i)
                        }
                        s.$element.val(t), s.$element.trigger("input").trigger("change")
                    }))
                }
            }, n.prototype.bind = function (e, t) {
                var n = this;
                (this.container = e).on("select", (function (e) {
                    n.select(e.data)
                })), e.on("unselect", (function (e) {
                    n.unselect(e.data)
                }))
            }, n.prototype.destroy = function () {
                this.$element.find("*").each((function () {
                    l.RemoveData(this)
                }))
            }, n.prototype.query = function (i, e) {
                var r = [], s = this;
                this.$element.children().each((function () {
                    if ("option" === this.tagName.toLowerCase() || "optgroup" === this.tagName.toLowerCase()) {
                        var e = c(this), t = s.item(e), n = s.matches(i, t);
                        null !== n && r.push(n)
                    }
                })), e({results: r})
            }, n.prototype.addOptions = function (e) {
                this.$element.append(e)
            }, n.prototype.option = function (e) {
                var t;
                e.children ? (t = document.createElement("optgroup")).label = e.text : void 0 !== (t = document.createElement("option")).textContent ? t.textContent = e.text : t.innerText = e.text, void 0 !== e.id && (t.value = e.id), e.disabled && (t.disabled = !0), e.selected && (t.selected = !0), e.title && (t.title = e.title);
                var n = this._normalizeItem(e);
                return n.element = t, l.StoreData(t, "data", n), c(t)
            }, n.prototype.item = function (e) {
                var t = {};
                if (null != (t = l.GetData(e[0], "data"))) return t;
                var n = e[0];
                if ("option" === n.tagName.toLowerCase()) t = {
                    id: e.val(),
                    text: e.text(),
                    disabled: e.prop("disabled"),
                    selected: e.prop("selected"),
                    title: e.prop("title")
                }; else if ("optgroup" === n.tagName.toLowerCase()) {
                    t = {text: e.prop("label"), children: [], title: e.prop("title")};
                    for (var i = e.children("option"), r = [], s = 0; s < i.length; s++) {
                        var o = c(i[s]), a = this.item(o);
                        r.push(a)
                    }
                    t.children = r
                }
                return (t = this._normalizeItem(t)).element = e[0], l.StoreData(e[0], "data", t), t
            }, n.prototype._normalizeItem = function (e) {
                return e !== Object(e) && (e = {
                    id: e,
                    text: e
                }), null != (e = c.extend({}, {text: ""}, e)).id && (e.id = e.id.toString()), null != e.text && (e.text = e.text.toString()), null == e._resultId && e.id && null != this.container && (e._resultId = this.generateResultId(this.container, e)), c.extend({}, {
                    selected: !1,
                    disabled: !1
                }, e)
            }, n.prototype.matches = function (e, t) {
                return this.options.get("matcher")(e, t)
            }, n
        })), e.define("select2/data/array", ["./select", "../utils", "jquery"], (function (e, t, f) {
            function i(e, t) {
                this._dataToConvert = t.get("data") || [], i.__super__.constructor.call(this, e, t)
            }

            return t.Extend(i, e), i.prototype.bind = function (e, t) {
                i.__super__.bind.call(this, e, t), this.addOptions(this.convertToOptions(this._dataToConvert))
            }, i.prototype.select = function (n) {
                var e = this.$element.find("option").filter((function (e, t) {
                    return t.value == n.id.toString()
                }));
                0 === e.length && (e = this.option(n), this.addOptions(e)), i.__super__.select.call(this, n)
            }, i.prototype.convertToOptions = function (e) {
                var t = this, n = this.$element.find("option"), i = n.map((function () {
                    return t.item(f(this)).id
                })).get(), r = [];

                function s(e) {
                    return function () {
                        return f(this).val() == e.id
                    }
                }

                for (var o = 0; o < e.length; o++) {
                    var a = this._normalizeItem(e[o]);
                    if (0 <= i.indexOf(a.id)) {
                        var l = n.filter(s(a)), c = this.item(l), u = f.extend(!0, {}, a, c), d = this.option(u);
                        l.replaceWith(d)
                    } else {
                        var p = this.option(a);
                        if (a.children) {
                            var h = this.convertToOptions(a.children);
                            p.append(h)
                        }
                        r.push(p)
                    }
                }
                return r
            }, i
        })), e.define("select2/data/ajax", ["./array", "../utils", "jquery"], (function (e, t, s) {
            function n(e, t) {
                this.ajaxOptions = this._applyDefaults(t.get("ajax")), null != this.ajaxOptions.processResults && (this.processResults = this.ajaxOptions.processResults), n.__super__.constructor.call(this, e, t)
            }

            return t.Extend(n, e), n.prototype._applyDefaults = function (e) {
                var t = {
                    data: function (e) {
                        return s.extend({}, e, {q: e.term})
                    }, transport: function (e, t, n) {
                        var i = s.ajax(e);
                        return i.then(t), i.fail(n), i
                    }
                };
                return s.extend({}, t, e, !0)
            }, n.prototype.processResults = function (e) {
                return e
            }, n.prototype.query = function (n, i) {
                var r = this;
                null != this._request && (s.isFunction(this._request.abort) && this._request.abort(), this._request = null);
                var t = s.extend({type: "GET"}, this.ajaxOptions);

                function e() {
                    var e = t.transport(t, (function (e) {
                        var t = r.processResults(e, n);
                        r.options.get("debug") && window.console && console.error && (t && t.results && Array.isArray(t.results) || console.error("Select2: The AJAX results did not return an array in the `results` key of the response.")), i(t)
                    }), (function () {
                        "status" in e && (0 === e.status || "0" === e.status) || r.trigger("results:message", {message: "errorLoading"})
                    }));
                    r._request = e
                }

                "function" == typeof t.url && (t.url = t.url.call(this.$element, n)), "function" == typeof t.data && (t.data = t.data.call(this.$element, n)), this.ajaxOptions.delay && null != n.term ? (this._queryTimeout && window.clearTimeout(this._queryTimeout), this._queryTimeout = window.setTimeout(e, this.ajaxOptions.delay)) : e()
            }, n
        })), e.define("select2/data/tags", ["jquery"], (function (t) {
            function e(e, t, n) {
                var i = n.get("tags"), r = n.get("createTag");
                void 0 !== r && (this.createTag = r);
                var s = n.get("insertTag");
                if (void 0 !== s && (this.insertTag = s), e.call(this, t, n), Array.isArray(i)) for (var o = 0; o < i.length; o++) {
                    var a = i[o], l = this._normalizeItem(a), c = this.option(l);
                    this.$element.append(c)
                }
            }

            return e.prototype.query = function (e, c, u) {
                var d = this;
                this._removeOldTags(), null != c.term && null == c.page ? e.call(this, c, (function e(t, n) {
                    for (var i = t.results, r = 0; r < i.length; r++) {
                        var s = i[r], o = null != s.children && !e({results: s.children}, !0);
                        if ((s.text || "").toUpperCase() === (c.term || "").toUpperCase() || o) return !n && (t.data = i, void u(t))
                    }
                    if (n) return !0;
                    var a = d.createTag(c);
                    if (null != a) {
                        var l = d.option(a);
                        l.attr("data-select2-tag", !0), d.addOptions([l]), d.insertTag(i, a)
                    }
                    t.results = i, u(t)
                })) : e.call(this, c, u)
            }, e.prototype.createTag = function (e, t) {
                if (null == t.term) return null;
                var n = t.term.trim();
                return "" === n ? null : {id: n, text: n}
            }, e.prototype.insertTag = function (e, t, n) {
                t.unshift(n)
            }, e.prototype._removeOldTags = function (e) {
                this.$element.find("option[data-select2-tag]").each((function () {
                    this.selected || t(this).remove()
                }))
            }, e
        })), e.define("select2/data/tokenizer", ["jquery"], (function (d) {
            function e(e, t, n) {
                var i = n.get("tokenizer");
                void 0 !== i && (this.tokenizer = i), e.call(this, t, n)
            }

            return e.prototype.bind = function (e, t, n) {
                e.call(this, t, n), this.$search = t.dropdown.$search || t.selection.$search || n.find(".select2-search__field")
            }, e.prototype.query = function (e, t, n) {
                var i = this;
                t.term = t.term || "";
                var r = this.tokenizer(t, this.options, (function (e) {
                    var t = i._normalizeItem(e);
                    if (!i.$element.find("option").filter((function () {
                        return d(this).val() === t.id
                    })).length) {
                        var n = i.option(t);
                        n.attr("data-select2-tag", !0), i._removeOldTags(), i.addOptions([n])
                    }
                    !function (e) {
                        i.trigger("select", {data: e})
                    }(t)
                }));
                r.term !== t.term && (this.$search.length && (this.$search.val(r.term), this.$search.trigger("focus")), t.term = r.term), e.call(this, t, n)
            }, e.prototype.tokenizer = function (e, t, n, i) {
                for (var r = n.get("tokenSeparators") || [], s = t.term, o = 0, a = this.createTag || function (e) {
                    return {id: e.term, text: e.term}
                }; o < s.length;) {
                    var l = s[o];
                    if (-1 !== r.indexOf(l)) {
                        var c = s.substr(0, o), u = a(d.extend({}, t, {term: c}));
                        null != u ? (i(u), s = s.substr(o + 1) || "", o = 0) : o++
                    } else o++
                }
                return {term: s}
            }, e
        })), e.define("select2/data/minimumInputLength", [], (function () {
            function e(e, t, n) {
                this.minimumInputLength = n.get("minimumInputLength"), e.call(this, t, n)
            }

            return e.prototype.query = function (e, t, n) {
                t.term = t.term || "", t.term.length < this.minimumInputLength ? this.trigger("results:message", {
                    message: "inputTooShort",
                    args: {minimum: this.minimumInputLength, input: t.term, params: t}
                }) : e.call(this, t, n)
            }, e
        })), e.define("select2/data/maximumInputLength", [], (function () {
            function e(e, t, n) {
                this.maximumInputLength = n.get("maximumInputLength"), e.call(this, t, n)
            }

            return e.prototype.query = function (e, t, n) {
                t.term = t.term || "", 0 < this.maximumInputLength && t.term.length > this.maximumInputLength ? this.trigger("results:message", {
                    message: "inputTooLong",
                    args: {maximum: this.maximumInputLength, input: t.term, params: t}
                }) : e.call(this, t, n)
            }, e
        })), e.define("select2/data/maximumSelectionLength", [], (function () {
            function e(e, t, n) {
                this.maximumSelectionLength = n.get("maximumSelectionLength"), e.call(this, t, n)
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), t.on("select", (function () {
                    i._checkIfMaximumSelected()
                }))
            }, e.prototype.query = function (e, t, n) {
                var i = this;
                this._checkIfMaximumSelected((function () {
                    e.call(i, t, n)
                }))
            }, e.prototype._checkIfMaximumSelected = function (e, n) {
                var i = this;
                this.current((function (e) {
                    var t = null != e ? e.length : 0;
                    0 < i.maximumSelectionLength && t >= i.maximumSelectionLength ? i.trigger("results:message", {
                        message: "maximumSelected",
                        args: {maximum: i.maximumSelectionLength}
                    }) : n && n()
                }))
            }, e
        })), e.define("select2/dropdown", ["jquery", "./utils"], (function (t, e) {
            function n(e, t) {
                this.$element = e, this.options = t, n.__super__.constructor.call(this)
            }

            return e.Extend(n, e.Observable), n.prototype.render = function () {
                var e = t('<span class="select2-dropdown"><span class="select2-results"></span></span>');
                return e.attr("dir", this.options.get("dir")), this.$dropdown = e
            }, n.prototype.bind = function () {
            }, n.prototype.position = function (e, t) {
            }, n.prototype.destroy = function () {
                this.$dropdown.remove()
            }, n
        })), e.define("select2/dropdown/search", ["jquery"], (function (s) {
            function e() {
            }

            return e.prototype.render = function (e) {
                var t = e.call(this),
                    n = s('<span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="-1" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" /></span>');
                return this.$searchContainer = n, this.$search = n.find("input"), this.$search.prop("autocomplete", this.options.get("autocomplete")), t.prepend(n), t
            }, e.prototype.bind = function (e, t, n) {
                var i = this, r = t.id + "-results";
                e.call(this, t, n), this.$search.on("keydown", (function (e) {
                    i.trigger("keypress", e), i._keyUpPrevented = e.isDefaultPrevented()
                })), this.$search.on("input", (function (e) {
                    s(this).off("keyup")
                })), this.$search.on("keyup input", (function (e) {
                    i.handleSearch(e)
                })), t.on("open", (function () {
                    i.$search.attr("tabindex", 0), i.$search.attr("aria-controls", r), i.$search.trigger("focus"), window.setTimeout((function () {
                        i.$search.trigger("focus")
                    }), 0)
                })), t.on("close", (function () {
                    i.$search.attr("tabindex", -1), i.$search.removeAttr("aria-controls"), i.$search.removeAttr("aria-activedescendant"), i.$search.val(""), i.$search.trigger("blur")
                })), t.on("focus", (function () {
                    t.isOpen() || i.$search.trigger("focus")
                })), t.on("results:all", (function (e) {
                    null != e.query.term && "" !== e.query.term || (i.showSearch(e) ? i.$searchContainer[0].classList.remove("select2-search--hide") : i.$searchContainer[0].classList.add("select2-search--hide"))
                })), t.on("results:focus", (function (e) {
                    e.data._resultId ? i.$search.attr("aria-activedescendant", e.data._resultId) : i.$search.removeAttr("aria-activedescendant")
                }))
            }, e.prototype.handleSearch = function (e) {
                if (!this._keyUpPrevented) {
                    var t = this.$search.val();
                    this.trigger("query", {term: t})
                }
                this._keyUpPrevented = !1
            }, e.prototype.showSearch = function (e, t) {
                return !0
            }, e
        })), e.define("select2/dropdown/hidePlaceholder", [], (function () {
            function e(e, t, n, i) {
                this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n, i)
            }

            return e.prototype.append = function (e, t) {
                t.results = this.removePlaceholder(t.results), e.call(this, t)
            }, e.prototype.normalizePlaceholder = function (e, t) {
                return "string" == typeof t && (t = {id: "", text: t}), t
            }, e.prototype.removePlaceholder = function (e, t) {
                for (var n = t.slice(0), i = t.length - 1; 0 <= i; i--) {
                    var r = t[i];
                    this.placeholder.id === r.id && n.splice(i, 1)
                }
                return n
            }, e
        })), e.define("select2/dropdown/infiniteScroll", ["jquery"], (function (n) {
            function e(e, t, n, i) {
                this.lastParams = {}, e.call(this, t, n, i), this.$loadingMore = this.createLoadingMore(), this.loading = !1
            }

            return e.prototype.append = function (e, t) {
                this.$loadingMore.remove(), this.loading = !1, e.call(this, t), this.showLoadingMore(t) && (this.$results.append(this.$loadingMore), this.loadMoreIfNeeded())
            }, e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), t.on("query", (function (e) {
                    i.lastParams = e, i.loading = !0
                })), t.on("query:append", (function (e) {
                    i.lastParams = e, i.loading = !0
                })), this.$results.on("scroll", this.loadMoreIfNeeded.bind(this))
            }, e.prototype.loadMoreIfNeeded = function () {
                var e = n.contains(document.documentElement, this.$loadingMore[0]);
                if (!this.loading && e) {
                    var t = this.$results.offset().top + this.$results.outerHeight(!1);
                    this.$loadingMore.offset().top + this.$loadingMore.outerHeight(!1) <= t + 50 && this.loadMore()
                }
            }, e.prototype.loadMore = function () {
                this.loading = !0;
                var e = n.extend({}, {page: 1}, this.lastParams);
                e.page++, this.trigger("query:append", e)
            }, e.prototype.showLoadingMore = function (e, t) {
                return t.pagination && t.pagination.more
            }, e.prototype.createLoadingMore = function () {
                var e = n('<li class="select2-results__option select2-results__option--load-more"role="option" aria-disabled="true"></li>'),
                    t = this.options.get("translations").get("loadingMore");
                return e.html(t(this.lastParams)), e
            }, e
        })), e.define("select2/dropdown/attachBody", ["jquery", "../utils"], (function (f, a) {
            function e(e, t, n) {
                this.$dropdownParent = f(n.get("dropdownParent") || document.body), e.call(this, t, n)
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), t.on("open", (function () {
                    i._showDropdown(), i._attachPositioningHandler(t), i._bindContainerResultHandlers(t)
                })), t.on("close", (function () {
                    i._hideDropdown(), i._detachPositioningHandler(t)
                })), this.$dropdownContainer.on("mousedown", (function (e) {
                    e.stopPropagation()
                }))
            }, e.prototype.destroy = function (e) {
                e.call(this), this.$dropdownContainer.remove()
            }, e.prototype.position = function (e, t, n) {
                t.attr("class", n.attr("class")), t[0].classList.remove("select2"), t[0].classList.add("select2-container--open"), t.css({
                    position: "absolute",
                    top: -999999
                }), this.$container = n
            }, e.prototype.render = function (e) {
                var t = f("<span></span>"), n = e.call(this);
                return t.append(n), this.$dropdownContainer = t
            }, e.prototype._hideDropdown = function (e) {
                this.$dropdownContainer.detach()
            }, e.prototype._bindContainerResultHandlers = function (e, t) {
                if (!this._containerResultsHandlersBound) {
                    var n = this;
                    t.on("results:all", (function () {
                        n._positionDropdown(), n._resizeDropdown()
                    })), t.on("results:append", (function () {
                        n._positionDropdown(), n._resizeDropdown()
                    })), t.on("results:message", (function () {
                        n._positionDropdown(), n._resizeDropdown()
                    })), t.on("select", (function () {
                        n._positionDropdown(), n._resizeDropdown()
                    })), t.on("unselect", (function () {
                        n._positionDropdown(), n._resizeDropdown()
                    })), this._containerResultsHandlersBound = !0
                }
            }, e.prototype._attachPositioningHandler = function (e, t) {
                var n = this, i = "scroll.select2." + t.id, r = "resize.select2." + t.id,
                    s = "orientationchange.select2." + t.id, o = this.$container.parents().filter(a.hasScroll);
                o.each((function () {
                    a.StoreData(this, "select2-scroll-position", {x: f(this).scrollLeft(), y: f(this).scrollTop()})
                })), o.on(i, (function (e) {
                    var t = a.GetData(this, "select2-scroll-position");
                    f(this).scrollTop(t.y)
                })), f(window).on(i + " " + r + " " + s, (function (e) {
                    n._positionDropdown(), n._resizeDropdown()
                }))
            }, e.prototype._detachPositioningHandler = function (e, t) {
                var n = "scroll.select2." + t.id, i = "resize.select2." + t.id, r = "orientationchange.select2." + t.id;
                this.$container.parents().filter(a.hasScroll).off(n), f(window).off(n + " " + i + " " + r)
            }, e.prototype._positionDropdown = function () {
                var e = f(window), t = this.$dropdown[0].classList.contains("select2-dropdown--above"),
                    n = this.$dropdown[0].classList.contains("select2-dropdown--below"), i = null,
                    r = this.$container.offset();
                r.bottom = r.top + this.$container.outerHeight(!1);
                var s = {height: this.$container.outerHeight(!1)};
                s.top = r.top, s.bottom = r.top + s.height;
                var o = this.$dropdown.outerHeight(!1), a = e.scrollTop(), l = e.scrollTop() + e.height(),
                    c = a < r.top - o, u = l > r.bottom + o, d = {left: r.left, top: s.bottom},
                    p = this.$dropdownParent;
                "static" === p.css("position") && (p = p.offsetParent());
                var h = {top: 0, left: 0};
                (f.contains(document.body, p[0]) || p[0].isConnected) && (h = p.offset()), d.top -= h.top, d.left -= h.left, t || n || (i = "below"), u || !c || t ? !c && u && t && (i = "below") : i = "above", ("above" == i || t && "below" !== i) && (d.top = s.top - h.top - o), null != i && (this.$dropdown[0].classList.remove("select2-dropdown--below"), this.$dropdown[0].classList.remove("select2-dropdown--above"), this.$dropdown[0].classList.add("select2-dropdown--" + i), this.$container[0].classList.remove("select2-container--below"), this.$container[0].classList.remove("select2-container--above"), this.$container[0].classList.add("select2-container--" + i)), this.$dropdownContainer.css(d)
            }, e.prototype._resizeDropdown = function () {
                var e = {width: this.$container.outerWidth(!1) + "px"};
                this.options.get("dropdownAutoWidth") && (e.minWidth = e.width, e.position = "relative", e.width = "auto"), this.$dropdown.css(e)
            }, e.prototype._showDropdown = function (e) {
                this.$dropdownContainer.appendTo(this.$dropdownParent), this._positionDropdown(), this._resizeDropdown()
            }, e
        })), e.define("select2/dropdown/minimumResultsForSearch", [], (function () {
            function e(e, t, n, i) {
                this.minimumResultsForSearch = n.get("minimumResultsForSearch"), this.minimumResultsForSearch < 0 && (this.minimumResultsForSearch = 1 / 0), e.call(this, t, n, i)
            }

            return e.prototype.showSearch = function (e, t) {
                return !(function e(t) {
                    for (var n = 0, i = 0; i < t.length; i++) {
                        var r = t[i];
                        r.children ? n += e(r.children) : n++
                    }
                    return n
                }(t.data.results) < this.minimumResultsForSearch) && e.call(this, t)
            }, e
        })), e.define("select2/dropdown/selectOnClose", ["../utils"], (function (s) {
            function e() {
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), t.on("close", (function (e) {
                    i._handleSelectOnClose(e)
                }))
            }, e.prototype._handleSelectOnClose = function (e, t) {
                if (t && null != t.originalSelect2Event) {
                    var n = t.originalSelect2Event;
                    if ("select" === n._type || "unselect" === n._type) return
                }
                var i = this.getHighlightedResults();
                if (!(i.length < 1)) {
                    var r = s.GetData(i[0], "data");
                    null != r.element && r.element.selected || null == r.element && r.selected || this.trigger("select", {data: r})
                }
            }, e
        })), e.define("select2/dropdown/closeOnSelect", [], (function () {
            function e() {
            }

            return e.prototype.bind = function (e, t, n) {
                var i = this;
                e.call(this, t, n), t.on("select", (function (e) {
                    i._selectTriggered(e)
                })), t.on("unselect", (function (e) {
                    i._selectTriggered(e)
                }))
            }, e.prototype._selectTriggered = function (e, t) {
                var n = t.originalEvent;
                n && (n.ctrlKey || n.metaKey) || this.trigger("close", {originalEvent: n, originalSelect2Event: t})
            }, e
        })), e.define("select2/dropdown/dropdownCss", ["../utils"], (function (i) {
            function e() {
            }

            return e.prototype.render = function (e) {
                var t = e.call(this), n = this.options.get("dropdownCssClass") || "";
                return -1 !== n.indexOf(":all:") && (n = n.replace(":all:", ""), i.copyNonInternalCssClasses(t[0], this.$element[0])), t.addClass(n), t
            }, e
        })), e.define("select2/i18n/en", [], (function () {
            return {
                errorLoading: function () {
                    return "The results could not be loaded."
                }, inputTooLong: function (e) {
                    var t = e.input.length - e.maximum, n = "Please delete " + t + " character";
                    return 1 != t && (n += "s"), n
                }, inputTooShort: function (e) {
                    return "Please enter " + (e.minimum - e.input.length) + " or more characters"
                }, loadingMore: function () {
                    return "Loading more results…"
                }, maximumSelected: function (e) {
                    var t = "You can only select " + e.maximum + " item";
                    return 1 != e.maximum && (t += "s"), t
                }, noResults: function () {
                    return "No results found"
                }, searching: function () {
                    return "Searching…"
                }, removeAllItems: function () {
                    return "Remove all items"
                }, removeItem: function () {
                    return "Remove item"
                }
            }
        })), e.define("select2/defaults", ["jquery", "./results", "./selection/single", "./selection/multiple", "./selection/placeholder", "./selection/allowClear", "./selection/search", "./selection/selectionCss", "./selection/eventRelay", "./utils", "./translation", "./diacritics", "./data/select", "./data/array", "./data/ajax", "./data/tags", "./data/tokenizer", "./data/minimumInputLength", "./data/maximumInputLength", "./data/maximumSelectionLength", "./dropdown", "./dropdown/search", "./dropdown/hidePlaceholder", "./dropdown/infiniteScroll", "./dropdown/attachBody", "./dropdown/minimumResultsForSearch", "./dropdown/selectOnClose", "./dropdown/closeOnSelect", "./dropdown/dropdownCss", "./i18n/en"], (function (l, s, o, a, c, u, d, p, h, f, g, t, m, v, y, _, b, $, w, x, A, D, S, E, O, C, L, T, q, e) {
            function n() {
                this.reset()
            }

            return n.prototype.apply = function (e) {
                if (null == (e = l.extend(!0, {}, this.defaults, e)).dataAdapter && (null != e.ajax ? e.dataAdapter = y : null != e.data ? e.dataAdapter = v : e.dataAdapter = m, 0 < e.minimumInputLength && (e.dataAdapter = f.Decorate(e.dataAdapter, $)), 0 < e.maximumInputLength && (e.dataAdapter = f.Decorate(e.dataAdapter, w)), 0 < e.maximumSelectionLength && (e.dataAdapter = f.Decorate(e.dataAdapter, x)), e.tags && (e.dataAdapter = f.Decorate(e.dataAdapter, _)), null == e.tokenSeparators && null == e.tokenizer || (e.dataAdapter = f.Decorate(e.dataAdapter, b))), null == e.resultsAdapter && (e.resultsAdapter = s, null != e.ajax && (e.resultsAdapter = f.Decorate(e.resultsAdapter, E)), null != e.placeholder && (e.resultsAdapter = f.Decorate(e.resultsAdapter, S)), e.selectOnClose && (e.resultsAdapter = f.Decorate(e.resultsAdapter, L))), null == e.dropdownAdapter) {
                    if (e.multiple) e.dropdownAdapter = A; else {
                        var t = f.Decorate(A, D);
                        e.dropdownAdapter = t
                    }
                    0 !== e.minimumResultsForSearch && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, C)), e.closeOnSelect && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, T)), null != e.dropdownCssClass && (e.dropdownAdapter = f.Decorate(e.dropdownAdapter, q)), e.dropdownAdapter = f.Decorate(e.dropdownAdapter, O)
                }
                null == e.selectionAdapter && (e.multiple ? e.selectionAdapter = a : e.selectionAdapter = o, null != e.placeholder && (e.selectionAdapter = f.Decorate(e.selectionAdapter, c)), e.allowClear && (e.selectionAdapter = f.Decorate(e.selectionAdapter, u)), e.multiple && (e.selectionAdapter = f.Decorate(e.selectionAdapter, d)), null != e.selectionCssClass && (e.selectionAdapter = f.Decorate(e.selectionAdapter, p)), e.selectionAdapter = f.Decorate(e.selectionAdapter, h)), e.language = this._resolveLanguage(e.language), e.language.push("en");
                for (var n = [], i = 0; i < e.language.length; i++) {
                    var r = e.language[i];
                    -1 === n.indexOf(r) && n.push(r)
                }
                return e.language = n, e.translations = this._processTranslations(e.language, e.debug), e
            }, n.prototype.reset = function () {
                function a(e) {
                    return e.replace(/[^\u0000-\u007E]/g, (function (e) {
                        return t[e] || e
                    }))
                }

                this.defaults = {
                    amdLanguageBase: "./i18n/",
                    autocomplete: "off",
                    closeOnSelect: !0,
                    debug: !1,
                    dropdownAutoWidth: !1,
                    escapeMarkup: f.escapeMarkup,
                    language: {},
                    matcher: function e(t, n) {
                        if (null == t.term || "" === t.term.trim()) return n;
                        if (n.children && 0 < n.children.length) {
                            for (var i = l.extend(!0, {}, n), r = n.children.length - 1; 0 <= r; r--) null == e(t, n.children[r]) && i.children.splice(r, 1);
                            return 0 < i.children.length ? i : e(t, i)
                        }
                        var s = a(n.text).toUpperCase(), o = a(t.term).toUpperCase();
                        return -1 < s.indexOf(o) ? n : null
                    },
                    minimumInputLength: 0,
                    maximumInputLength: 0,
                    maximumSelectionLength: 0,
                    minimumResultsForSearch: 0,
                    selectOnClose: !1,
                    scrollAfterSelect: !1,
                    sorter: function (e) {
                        return e
                    },
                    templateResult: function (e) {
                        return e.text
                    },
                    templateSelection: function (e) {
                        return e.text
                    },
                    theme: "default",
                    width: "resolve"
                }
            }, n.prototype.applyFromElement = function (e, t) {
                var n = e.language, i = this.defaults.language, r = t.prop("lang"),
                    s = t.closest("[lang]").prop("lang"),
                    o = Array.prototype.concat.call(this._resolveLanguage(r), this._resolveLanguage(n), this._resolveLanguage(i), this._resolveLanguage(s));
                return e.language = o, e
            }, n.prototype._resolveLanguage = function (e) {
                if (!e) return [];
                if (l.isEmptyObject(e)) return [];
                if (l.isPlainObject(e)) return [e];
                var t;
                t = Array.isArray(e) ? e : [e];
                for (var n = [], i = 0; i < t.length; i++) if (n.push(t[i]), "string" == typeof t[i] && 0 < t[i].indexOf("-")) {
                    var r = t[i].split("-")[0];
                    n.push(r)
                }
                return n
            }, n.prototype._processTranslations = function (e, t) {
                for (var n = new g, i = 0; i < e.length; i++) {
                    var r = new g, s = e[i];
                    if ("string" == typeof s) try {
                        r = g.loadPath(s)
                    } catch (e) {
                        try {
                            s = this.defaults.amdLanguageBase + s, r = g.loadPath(s)
                        } catch (e) {
                            t && window.console && console.warn && console.warn('Select2: The language file for "' + s + '" could not be automatically loaded. A fallback will be used instead.')
                        }
                    } else r = l.isPlainObject(s) ? new g(s) : s;
                    n.extend(r)
                }
                return n
            }, n.prototype.set = function (e, t) {
                var n = {};
                n[l.camelCase(e)] = t;
                var i = f._convertData(n);
                l.extend(!0, this.defaults, i)
            }, new n
        })), e.define("select2/options", ["jquery", "./defaults", "./utils"], (function (d, n, p) {
            function e(e, t) {
                this.options = e, null != t && this.fromElement(t), null != t && (this.options = n.applyFromElement(this.options, t)), this.options = n.apply(this.options)
            }

            return e.prototype.fromElement = function (e) {
                var t = ["select2"];
                null == this.options.multiple && (this.options.multiple = e.prop("multiple")), null == this.options.disabled && (this.options.disabled = e.prop("disabled")), null == this.options.autocomplete && e.prop("autocomplete") && (this.options.autocomplete = e.prop("autocomplete")), null == this.options.dir && (e.prop("dir") ? this.options.dir = e.prop("dir") : e.closest("[dir]").prop("dir") ? this.options.dir = e.closest("[dir]").prop("dir") : this.options.dir = "ltr"), e.prop("disabled", this.options.disabled), e.prop("multiple", this.options.multiple), p.GetData(e[0], "select2Tags") && (this.options.debug && window.console && console.warn && console.warn('Select2: The `data-select2-tags` attribute has been changed to use the `data-data` and `data-tags="true"` attributes and will be removed in future versions of Select2.'), p.StoreData(e[0], "data", p.GetData(e[0], "select2Tags")), p.StoreData(e[0], "tags", !0)), p.GetData(e[0], "ajaxUrl") && (this.options.debug && window.console && console.warn && console.warn("Select2: The `data-ajax-url` attribute has been changed to `data-ajax--url` and support for the old attribute will be removed in future versions of Select2."), e.attr("ajax--url", p.GetData(e[0], "ajaxUrl")), p.StoreData(e[0], "ajax-Url", p.GetData(e[0], "ajaxUrl")));
                var n = {};

                function i(e, t) {
                    return t.toUpperCase()
                }

                for (var r = 0; r < e[0].attributes.length; r++) {
                    var s = e[0].attributes[r].name, o = "data-";
                    if (s.substr(0, o.length) == o) {
                        var a = s.substring(o.length), l = p.GetData(e[0], a);
                        n[a.replace(/-([a-z])/g, i)] = l
                    }
                }
                d.fn.jquery && "1." == d.fn.jquery.substr(0, 2) && e[0].dataset && (n = d.extend(!0, {}, e[0].dataset, n));
                var c = d.extend(!0, {}, p.GetData(e[0]), n);
                for (var u in c = p._convertData(c)) -1 < t.indexOf(u) || (d.isPlainObject(this.options[u]) ? d.extend(this.options[u], c[u]) : this.options[u] = c[u]);
                return this
            }, e.prototype.get = function (e) {
                return this.options[e]
            }, e.prototype.set = function (e, t) {
                this.options[e] = t
            }, e
        })), e.define("select2/core", ["jquery", "./options", "./utils", "./keys"], (function (t, c, u, i) {
            var d = function (e, t) {
                null != u.GetData(e[0], "select2") && u.GetData(e[0], "select2").destroy(), this.$element = e, this.id = this._generateId(e), t = t || {}, this.options = new c(t, e), d.__super__.constructor.call(this);
                var n = e.attr("tabindex") || 0;
                u.StoreData(e[0], "old-tabindex", n), e.attr("tabindex", "-1");
                var i = this.options.get("dataAdapter");
                this.dataAdapter = new i(e, this.options);
                var r = this.render();
                this._placeContainer(r);
                var s = this.options.get("selectionAdapter");
                this.selection = new s(e, this.options), this.$selection = this.selection.render(), this.selection.position(this.$selection, r);
                var o = this.options.get("dropdownAdapter");
                this.dropdown = new o(e, this.options), this.$dropdown = this.dropdown.render(), this.dropdown.position(this.$dropdown, r);
                var a = this.options.get("resultsAdapter");
                this.results = new a(e, this.options, this.dataAdapter), this.$results = this.results.render(), this.results.position(this.$results, this.$dropdown);
                var l = this;
                this._bindAdapters(), this._registerDomEvents(), this._registerDataEvents(), this._registerSelectionEvents(), this._registerDropdownEvents(), this._registerResultsEvents(), this._registerEvents(), this.dataAdapter.current((function (e) {
                    l.trigger("selection:update", {data: e})
                })), e[0].classList.add("select2-hidden-accessible"), e.attr("aria-hidden", "true"), this._syncAttributes(), u.StoreData(e[0], "select2", this), e.data("select2", this)
            };
            return u.Extend(d, u.Observable), d.prototype._generateId = function (e) {
                return "select2-" + (null != e.attr("id") ? e.attr("id") : null != e.attr("name") ? e.attr("name") + "-" + u.generateChars(2) : u.generateChars(4)).replace(/(:|\.|\[|\]|,)/g, "")
            }, d.prototype._placeContainer = function (e) {
                e.insertAfter(this.$element);
                var t = this._resolveWidth(this.$element, this.options.get("width"));
                null != t && e.css("width", t)
            }, d.prototype._resolveWidth = function (e, t) {
                var n = /^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i;
                if ("resolve" == t) {
                    var i = this._resolveWidth(e, "style");
                    return null != i ? i : this._resolveWidth(e, "element")
                }
                if ("element" == t) {
                    var r = e.outerWidth(!1);
                    return r <= 0 ? "auto" : r + "px"
                }
                if ("style" != t) return "computedstyle" != t ? t : window.getComputedStyle(e[0]).width;
                var s = e.attr("style");
                if ("string" != typeof s) return null;
                for (var o = s.split(";"), a = 0, l = o.length; a < l; a += 1) {
                    var c = o[a].replace(/\s/g, "").match(n);
                    if (null !== c && 1 <= c.length) return c[1]
                }
                return null
            }, d.prototype._bindAdapters = function () {
                this.dataAdapter.bind(this, this.$container), this.selection.bind(this, this.$container), this.dropdown.bind(this, this.$container), this.results.bind(this, this.$container)
            }, d.prototype._registerDomEvents = function () {
                var t = this;
                this.$element.on("change.select2", (function () {
                    t.dataAdapter.current((function (e) {
                        t.trigger("selection:update", {data: e})
                    }))
                })), this.$element.on("focus.select2", (function (e) {
                    t.trigger("focus", e)
                })), this._syncA = u.bind(this._syncAttributes, this), this._syncS = u.bind(this._syncSubtree, this), this._observer = new window.MutationObserver((function (e) {
                    t._syncA(), t._syncS(e)
                })), this._observer.observe(this.$element[0], {attributes: !0, childList: !0, subtree: !1})
            }, d.prototype._registerDataEvents = function () {
                var n = this;
                this.dataAdapter.on("*", (function (e, t) {
                    n.trigger(e, t)
                }))
            }, d.prototype._registerSelectionEvents = function () {
                var n = this, i = ["toggle", "focus"];
                this.selection.on("toggle", (function () {
                    n.toggleDropdown()
                })), this.selection.on("focus", (function (e) {
                    n.focus(e)
                })), this.selection.on("*", (function (e, t) {
                    -1 === i.indexOf(e) && n.trigger(e, t)
                }))
            }, d.prototype._registerDropdownEvents = function () {
                var n = this;
                this.dropdown.on("*", (function (e, t) {
                    n.trigger(e, t)
                }))
            }, d.prototype._registerResultsEvents = function () {
                var n = this;
                this.results.on("*", (function (e, t) {
                    n.trigger(e, t)
                }))
            }, d.prototype._registerEvents = function () {
                var n = this;
                this.on("open", (function () {
                    n.$container[0].classList.add("select2-container--open")
                })), this.on("close", (function () {
                    n.$container[0].classList.remove("select2-container--open")
                })), this.on("enable", (function () {
                    n.$container[0].classList.remove("select2-container--disabled")
                })), this.on("disable", (function () {
                    n.$container[0].classList.add("select2-container--disabled")
                })), this.on("blur", (function () {
                    n.$container[0].classList.remove("select2-container--focus")
                })), this.on("query", (function (t) {
                    n.isOpen() || n.trigger("open", {}), this.dataAdapter.query(t, (function (e) {
                        n.trigger("results:all", {data: e, query: t})
                    }))
                })), this.on("query:append", (function (t) {
                    this.dataAdapter.query(t, (function (e) {
                        n.trigger("results:append", {data: e, query: t})
                    }))
                })), this.on("keypress", (function (e) {
                    var t = e.which;
                    n.isOpen() ? t === i.ESC || t === i.TAB || t === i.UP && e.altKey ? (n.close(e), e.preventDefault()) : t === i.ENTER ? (n.trigger("results:select", {}), e.preventDefault()) : t === i.SPACE && e.ctrlKey ? (n.trigger("results:toggle", {}), e.preventDefault()) : t === i.UP ? (n.trigger("results:previous", {}), e.preventDefault()) : t === i.DOWN && (n.trigger("results:next", {}), e.preventDefault()) : (t === i.ENTER || t === i.SPACE || t === i.DOWN && e.altKey) && (n.open(), e.preventDefault())
                }))
            }, d.prototype._syncAttributes = function () {
                this.options.set("disabled", this.$element.prop("disabled")), this.isDisabled() ? (this.isOpen() && this.close(), this.trigger("disable", {})) : this.trigger("enable", {})
            }, d.prototype._isChangeMutation = function (e) {
                var t = this;
                if (e.addedNodes && 0 < e.addedNodes.length) {
                    for (var n = 0; n < e.addedNodes.length; n++) if (e.addedNodes[n].selected) return !0
                } else {
                    if (e.removedNodes && 0 < e.removedNodes.length) return !0;
                    if (Array.isArray(e)) return e.some((function (e) {
                        return t._isChangeMutation(e)
                    }))
                }
                return !1
            }, d.prototype._syncSubtree = function (e) {
                var t = this._isChangeMutation(e), n = this;
                t && this.dataAdapter.current((function (e) {
                    n.trigger("selection:update", {data: e})
                }))
            }, d.prototype.trigger = function (e, t) {
                var n = d.__super__.trigger, i = {
                    open: "opening",
                    close: "closing",
                    select: "selecting",
                    unselect: "unselecting",
                    clear: "clearing"
                };
                if (void 0 === t && (t = {}), e in i) {
                    var r = i[e], s = {prevented: !1, name: e, args: t};
                    if (n.call(this, r, s), s.prevented) return void (t.prevented = !0)
                }
                n.call(this, e, t)
            }, d.prototype.toggleDropdown = function () {
                this.isDisabled() || (this.isOpen() ? this.close() : this.open())
            }, d.prototype.open = function () {
                this.isOpen() || this.isDisabled() || this.trigger("query", {})
            }, d.prototype.close = function (e) {
                this.isOpen() && this.trigger("close", {originalEvent: e})
            }, d.prototype.isEnabled = function () {
                return !this.isDisabled()
            }, d.prototype.isDisabled = function () {
                return this.options.get("disabled")
            }, d.prototype.isOpen = function () {
                return this.$container[0].classList.contains("select2-container--open")
            }, d.prototype.hasFocus = function () {
                return this.$container[0].classList.contains("select2-container--focus")
            }, d.prototype.focus = function (e) {
                this.hasFocus() || (this.$container[0].classList.add("select2-container--focus"), this.trigger("focus", {}))
            }, d.prototype.enable = function (e) {
                this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("enable")` method has been deprecated and will be removed in later Select2 versions. Use $element.prop("disabled") instead.'), null != e && 0 !== e.length || (e = [!0]);
                var t = !e[0];
                this.$element.prop("disabled", t)
            }, d.prototype.data = function () {
                this.options.get("debug") && 0 < arguments.length && window.console && console.warn && console.warn('Select2: Data can no longer be set using `select2("data")`. You should consider setting the value instead using `$element.val()`.');
                var t = [];
                return this.dataAdapter.current((function (e) {
                    t = e
                })), t
            }, d.prototype.val = function (e) {
                if (this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("val")` method has been deprecated and will be removed in later Select2 versions. Use $element.val() instead.'), null == e || 0 === e.length) return this.$element.val();
                var t = e[0];
                Array.isArray(t) && (t = t.map((function (e) {
                    return e.toString()
                }))), this.$element.val(t).trigger("input").trigger("change")
            }, d.prototype.destroy = function () {
                this.$container.remove(), this._observer.disconnect(), this._observer = null, this._syncA = null, this._syncS = null, this.$element.off(".select2"), this.$element.attr("tabindex", u.GetData(this.$element[0], "old-tabindex")), this.$element[0].classList.remove("select2-hidden-accessible"), this.$element.attr("aria-hidden", "false"), u.RemoveData(this.$element[0]), this.$element.removeData("select2"), this.dataAdapter.destroy(), this.selection.destroy(), this.dropdown.destroy(), this.results.destroy(), this.dataAdapter = null, this.selection = null, this.dropdown = null, this.results = null
            }, d.prototype.render = function () {
                var e = t('<span class="select2 select2-container"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>');
                return e.attr("dir", this.options.get("dir")), this.$container = e, this.$container[0].classList.add("select2-container--" + this.options.get("theme")), u.StoreData(e[0], "element", this.$element), e
            }, d
        })), e.define("jquery-mousewheel", ["jquery"], (function (e) {
            return e
        })), e.define("jquery.select2", ["jquery", "jquery-mousewheel", "./select2/core", "./select2/defaults", "./select2/utils"], (function (r, e, s, t, o) {
            if (null == r.fn.select2) {
                var a = ["open", "close", "destroy"];
                r.fn.select2 = function (t) {
                    if ("object" == typeof (t = t || {})) return this.each((function () {
                        var e = r.extend(!0, {}, t);
                        new s(r(this), e)
                    })), this;
                    if ("string" != typeof t) throw new Error("Invalid arguments for Select2: " + t);
                    var n, i = Array.prototype.slice.call(arguments, 1);
                    return this.each((function () {
                        var e = o.GetData(this, "select2");
                        null == e && window.console && console.error && console.error("The select2('" + t + "') method was called on an element that is not using Select2."), n = e[t].apply(e, i)
                    })), -1 < a.indexOf(t) ? this : n
                }
            }
            return null == r.fn.select2.defaults && (r.fn.select2.defaults = t), s
        })), {define: e.define, require: e.require}
    }(), t = e.require("jquery.select2");
    return u.fn.select2.amd = e, t
})), $((function () {
    var form = $("#contact-form"), formMessages = $(".form-message");
    $(form).submit((function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({type: "POST", url: $(form).attr("action"), data: formData}).done((function (response) {
            $(formMessages).removeClass("error"), $(formMessages).addClass("success"), $(formMessages).text(response), $("#contact-form input,#contact-form textarea").val("")
        })).fail((function (data) {
            $(formMessages).removeClass("success"), $(formMessages).addClass("error"), "" !== data.responseText ? $(formMessages).text(data.responseText) : $(formMessages).text("Oops! An error occured and your message could not be sent.")
        }))
    }))
}));