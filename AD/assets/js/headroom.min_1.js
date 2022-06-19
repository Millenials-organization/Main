!(function (a, b) {
  "use strict";
  function c(a) {
    (this.callback = a), (this.ticking = !1);
  }
  function d(a) {
    if (arguments.length <= 0)
      throw new Error("Missing arguments in extend function");
    var b,
      c,
      e = a || {};
    for (c = 1; c < arguments.length; c++) {
      var f = arguments[c] || {};
      for (b in f)
        e[b] = "object" == typeof e[b] ? d(e[b], f[b]) : e[b] || f[b];
    }
    return e;
  }
  function e(a, b) {
    (b = d(b, e.options)),
      (this.lastKnownScrollY = 0),
      (this.elem = a),
      (this.debouncer = new c(this.update.bind(this))),
      (this.tolerance = b.tolerance),
      (this.classes = b.classes),
      (this.offset = b.offset),
      (this.initialised = !1),
      (this.onPin = b.onPin),
      (this.onUnpin = b.onUnpin);
  }
  var f = {
    bind: !!function () {}.bind,
    classList: "classList" in b.documentElement,
    rAF: !!(
      a.requestAnimationFrame ||
      a.webkitRequestAnimationFrame ||
      a.mozRequestAnimationFrame
    ),
  };
  (a.requestAnimationFrame =
    a.requestAnimationFrame ||
    a.webkitRequestAnimationFrame ||
    a.mozRequestAnimationFrame),
    (c.prototype = {
      constructor: c,
      update: function () {
        this.callback && this.callback(), (this.ticking = !1);
      },
      requestTick: function () {
        this.ticking ||
          (requestAnimationFrame(
            this.rafCallback || (this.rafCallback = this.update.bind(this))
          ),
          (this.ticking = !0));
      },
      handleEvent: function () {
        this.requestTick();
      },
    }),
    (e.prototype = {
      constructor: e,
      init: function () {
        return e.cutsTheMustard
          ? (this.elem.classList.add(this.classes.initial),
            setTimeout(this.attachEvent.bind(this), 100),
            this)
          : void 0;
      },
      destroy: function () {
        var b = this.classes;
        (this.initialised = !1),
          a.removeEventListener("scroll", this.debouncer, !1),
          this.elem.classList.remove(b.unpinned, b.pinned, b.initial);
      },
      attachEvent: function () {
        this.initialised ||
          ((this.lastKnownScrollY = this.getScrollY()),
          (this.initialised = !0),
          a.addEventListener("scroll", this.debouncer, !1));
      },
      unpin: function () {
        var a = this.elem.classList,
          b = this.classes;
        (a.contains(b.pinned) || !a.contains(b.unpinned)) &&
          (a.add(b.unpinned),
          a.remove(b.pinned),
          this.onUnpin && this.onUnpin.call(this));
      },
      pin: function () {
        var a = this.elem.classList,
          b = this.classes;
        a.contains(b.unpinned) &&
          (a.remove(b.unpinned),
          a.add(b.pinned),
          this.onPin && this.onPin.call(this));
      },
      getScrollY: function () {
        return void 0 !== a.pageYOffset
          ? a.pageYOffset
          : (b.documentElement || b.body.parentNode || b.body).scrollTop;
      },
      getViewportHeight: function () {
        return (
          a.innerHeight || b.documentElement.clientHeight || b.body.clientHeight
        );
      },
      getDocumentHeight: function () {
        var a = b.body,
          c = b.documentElement;
        return Math.max(
          a.scrollHeight,
          c.scrollHeight,
          a.offsetHeight,
          c.offsetHeight,
          a.clientHeight,
          c.clientHeight
        );
      },
      isOutOfBounds: function (a) {
        var b = 0 > a,
          c = a + this.getViewportHeight() > this.getDocumentHeight();
        return b || c;
      },
      toleranceExceeded: function (a) {
        return Math.abs(a - this.lastKnownScrollY) >= this.tolerance;
      },
      shouldUnpin: function (a, b) {
        var c = a > this.lastKnownScrollY,
          d = a >= this.offset;
        return c && d && b;
      },
      shouldPin: function (a, b) {
        var c = a < this.lastKnownScrollY,
          d = a <= this.offset;
        return (c && b) || d;
      },
      update: function () {
        var a = this.getScrollY(),
          b = this.toleranceExceeded(a);
        this.isOutOfBounds(a) ||
          (this.shouldUnpin(a, b)
            ? this.unpin()
            : this.shouldPin(a, b) && this.pin(),
          (this.lastKnownScrollY = a));
      },
    }),
    (e.options = {
      tolerance: 0,
      offset: 0,
      classes: {
        pinned: "headroom--pinned",
        unpinned: "headroom--unpinned",
        initial: "headroom",
      },
    }),
    (e.cutsTheMustard =
      "undefined" != typeof f && f.rAF && f.bind && f.classList),
    (a.Headroom = e);
})(window, document);
