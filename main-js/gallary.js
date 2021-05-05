!(function t(e, i, n) {
  function s(r, l) {
    if (!i[r]) {
      if (!e[r]) {
        var h = "function" == typeof require && require;
        if (!l && h) return h(r, !0);
        if (o) return o(r, !0);
        var a = new Error("Cannot find module '" + r + "'");
        throw ((a.code = "MODULE_NOT_FOUND"), a);
      }
      var u = (i[r] = { exports: {} });
      e[r][0].call(
        u.exports,
        function (t) {
          var i = e[r][1][t];
          return s(i ? i : t);
        },
        u,
        u.exports,
        t,
        e,
        i,
        n
      );
    }
    return i[r].exports;
  }
  for (
    var o = "function" == typeof require && require, r = 0;
    r < n.length;
    r++
  )
    s(n[r]);
  return s;
})(
  {
    1: [
      function (t, e, i) {
        !(function (i, n) {
          "use strict";
          "function" == typeof define && define.amd
            ? define([
                "eventEmitter/EventEmitter",
                "eventie/eventie",
              ], function (t, e) {
                return n(i, t, e);
              })
            : "object" == typeof e && e.exports
            ? (e.exports = n(i, t("wolfy87-eventemitter"), t("eventie")))
            : (i.imagesLoaded = n(i, i.EventEmitter, i.eventie));
        })(window, function (t, e, i) {
          "use strict";
          function n(t, e) {
            for (var i in e) t[i] = e[i];
            return t;
          }
          function s(t) {
            return "[object Array]" == c.call(t);
          }
          function o(t) {
            var e = [];
            if (s(t)) e = t;
            else if ("number" == typeof t.length)
              for (var i = 0; i < t.length; i++) e.push(t[i]);
            else e.push(t);
            return e;
          }
          function r(t, e, i) {
            if (!(this instanceof r)) return new r(t, e, i);
            "string" == typeof t && (t = document.querySelectorAll(t)),
              (this.elements = o(t)),
              (this.options = n({}, this.options)),
              "function" == typeof e ? (i = e) : n(this.options, e),
              i && this.on("always", i),
              this.getImages(),
              a && (this.jqDeferred = new a.Deferred());
            var s = this;
            setTimeout(function () {
              s.check();
            });
          }
          function l(t) {
            this.img = t;
          }
          function h(t, e) {
            (this.url = t), (this.element = e), (this.img = new Image());
          }
          var a = t.jQuery,
            u = t.console,
            c = Object.prototype.toString;
          (r.prototype = new e()),
            (r.prototype.options = {}),
            (r.prototype.getImages = function () {
              this.images = [];
              for (var t = 0; t < this.elements.length; t++) {
                var e = this.elements[t];
                this.addElementImages(e);
              }
            }),
            (r.prototype.addElementImages = function (t) {
              "IMG" == t.nodeName && this.addImage(t),
                this.options.background === !0 &&
                  this.addElementBackgroundImages(t);
              var e = t.nodeType;
              if (e && f[e]) {
                for (
                  var i = t.querySelectorAll("img"), n = 0;
                  n < i.length;
                  n++
                ) {
                  var s = i[n];
                  this.addImage(s);
                }
                if ("string" == typeof this.options.background) {
                  var o = t.querySelectorAll(this.options.background);
                  for (n = 0; n < o.length; n++) {
                    var r = o[n];
                    this.addElementBackgroundImages(r);
                  }
                }
              }
            });
          var f = { 1: !0, 9: !0, 11: !0 };
          r.prototype.addElementBackgroundImages = function (t) {
            for (
              var e = m(t),
                i = /url\(['"]*([^'"\)]+)['"]*\)/gi,
                n = i.exec(e.backgroundImage);
              null !== n;

            ) {
              var s = n && n[1];
              s && this.addBackground(s, t), (n = i.exec(e.backgroundImage));
            }
          };
          var m =
            t.getComputedStyle ||
            function (t) {
              return t.currentStyle;
            };
          return (
            (r.prototype.addImage = function (t) {
              var e = new l(t);
              this.images.push(e);
            }),
            (r.prototype.addBackground = function (t, e) {
              var i = new h(t, e);
              this.images.push(i);
            }),
            (r.prototype.check = function () {
              function t(t, i, n) {
                setTimeout(function () {
                  e.progress(t, i, n);
                });
              }
              var e = this;
              if (
                ((this.progressedCount = 0),
                (this.hasAnyBroken = !1),
                !this.images.length)
              )
                return void this.complete();
              for (var i = 0; i < this.images.length; i++) {
                var n = this.images[i];
                n.once("progress", t), n.check();
              }
            }),
            (r.prototype.progress = function (t, e, i) {
              this.progressedCount++,
                (this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded),
                this.emit("progress", this, t, e),
                this.jqDeferred &&
                  this.jqDeferred.notify &&
                  this.jqDeferred.notify(this, t),
                this.progressedCount == this.images.length && this.complete(),
                this.options.debug && u && u.log("progress: " + i, t, e);
            }),
            (r.prototype.complete = function () {
              var t = this.hasAnyBroken ? "fail" : "done";
              if (
                ((this.isComplete = !0),
                this.emit(t, this),
                this.emit("always", this),
                this.jqDeferred)
              ) {
                var e = this.hasAnyBroken ? "reject" : "resolve";
                this.jqDeferred[e](this);
              }
            }),
            (l.prototype = new e()),
            (l.prototype.check = function () {
              var t = this.getIsImageComplete();
              return t
                ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth")
                : ((this.proxyImage = new Image()),
                  i.bind(this.proxyImage, "load", this),
                  i.bind(this.proxyImage, "error", this),
                  i.bind(this.img, "load", this),
                  i.bind(this.img, "error", this),
                  void (this.proxyImage.src = this.img.src));
            }),
            (l.prototype.getIsImageComplete = function () {
              return this.img.complete && void 0 !== this.img.naturalWidth;
            }),
            (l.prototype.confirm = function (t, e) {
              (this.isLoaded = t), this.emit("progress", this, this.img, e);
            }),
            (l.prototype.handleEvent = function (t) {
              var e = "on" + t.type;
              this[e] && this[e](t);
            }),
            (l.prototype.onload = function () {
              this.confirm(!0, "onload"), this.unbindEvents();
            }),
            (l.prototype.onerror = function () {
              this.confirm(!1, "onerror"), this.unbindEvents();
            }),
            (l.prototype.unbindEvents = function () {
              i.unbind(this.proxyImage, "load", this),
                i.unbind(this.proxyImage, "error", this),
                i.unbind(this.img, "load", this),
                i.unbind(this.img, "error", this);
            }),
            (h.prototype = new l()),
            (h.prototype.check = function () {
              i.bind(this.img, "load", this),
                i.bind(this.img, "error", this),
                (this.img.src = this.url);
              var t = this.getIsImageComplete();
              t &&
                (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"),
                this.unbindEvents());
            }),
            (h.prototype.unbindEvents = function () {
              i.unbind(this.img, "load", this),
                i.unbind(this.img, "error", this);
            }),
            (h.prototype.confirm = function (t, e) {
              (this.isLoaded = t), this.emit("progress", this, this.element, e);
            }),
            (r.makeJQueryPlugin = function (e) {
              (e = e || t.jQuery),
                e &&
                  ((a = e),
                  (a.fn.imagesLoaded = function (t, e) {
                    var i = new r(this, t, e);
                    return i.jqDeferred.promise(a(this));
                  }));
            }),
            r.makeJQueryPlugin(),
            r
          );
        });
      },
      { eventie: 2, "wolfy87-eventemitter": 3 },
    ],
    2: [
      function (t, e, i) {
        !(function (t) {
          "use strict";
          function n(e) {
            var i = t.event;
            return (i.target = i.target || i.srcElement || e), i;
          }
          var s = document.documentElement,
            o = function () {};
          s.addEventListener
            ? (o = function (t, e, i) {
                t.addEventListener(e, i, !1);
              })
            : s.attachEvent &&
              (o = function (t, e, i) {
                (t[e + i] = i.handleEvent
                  ? function () {
                      var e = n(t);
                      i.handleEvent.call(i, e);
                    }
                  : function () {
                      var e = n(t);
                      i.call(t, e);
                    }),
                  t.attachEvent("on" + e, t[e + i]);
              });
          var r = function () {};
          s.removeEventListener
            ? (r = function (t, e, i) {
                t.removeEventListener(e, i, !1);
              })
            : s.detachEvent &&
              (r = function (t, e, i) {
                t.detachEvent("on" + e, t[e + i]);
                try {
                  delete t[e + i];
                } catch (n) {
                  t[e + i] = void 0;
                }
              });
          var l = { bind: o, unbind: r };
          "function" == typeof define && define.amd
            ? define(l)
            : "object" == typeof i
            ? (e.exports = l)
            : (t.eventie = l);
        })(window);
      },
      {},
    ],
    3: [
      function (t, e, i) {
        (function () {
          "use strict";
          function t() {}
          function i(t, e) {
            for (var i = t.length; i--; ) if (t[i].listener === e) return i;
            return -1;
          }
          function n(t) {
            return function () {
              return this[t].apply(this, arguments);
            };
          }
          var s = t.prototype,
            o = this,
            r = o.EventEmitter;
          (s.getListeners = function (t) {
            var e,
              i,
              n = this._getEvents();
            if (t instanceof RegExp) {
              e = {};
              for (i in n) n.hasOwnProperty(i) && t.test(i) && (e[i] = n[i]);
            } else e = n[t] || (n[t] = []);
            return e;
          }),
            (s.flattenListeners = function (t) {
              var e,
                i = [];
              for (e = 0; e < t.length; e += 1) i.push(t[e].listener);
              return i;
            }),
            (s.getListenersAsObject = function (t) {
              var e,
                i = this.getListeners(t);
              return i instanceof Array && ((e = {}), (e[t] = i)), e || i;
            }),
            (s.addListener = function (t, e) {
              var n,
                s = this.getListenersAsObject(t),
                o = "object" == typeof e;
              for (n in s)
                s.hasOwnProperty(n) &&
                  -1 === i(s[n], e) &&
                  s[n].push(o ? e : { listener: e, once: !1 });
              return this;
            }),
            (s.on = n("addListener")),
            (s.addOnceListener = function (t, e) {
              return this.addListener(t, { listener: e, once: !0 });
            }),
            (s.once = n("addOnceListener")),
            (s.defineEvent = function (t) {
              return this.getListeners(t), this;
            }),
            (s.defineEvents = function (t) {
              for (var e = 0; e < t.length; e += 1) this.defineEvent(t[e]);
              return this;
            }),
            (s.removeListener = function (t, e) {
              var n,
                s,
                o = this.getListenersAsObject(t);
              for (s in o)
                o.hasOwnProperty(s) &&
                  ((n = i(o[s], e)), -1 !== n && o[s].splice(n, 1));
              return this;
            }),
            (s.off = n("removeListener")),
            (s.addListeners = function (t, e) {
              return this.manipulateListeners(!1, t, e);
            }),
            (s.removeListeners = function (t, e) {
              return this.manipulateListeners(!0, t, e);
            }),
            (s.manipulateListeners = function (t, e, i) {
              var n,
                s,
                o = t ? this.removeListener : this.addListener,
                r = t ? this.removeListeners : this.addListeners;
              if ("object" != typeof e || e instanceof RegExp)
                for (n = i.length; n--; ) o.call(this, e, i[n]);
              else
                for (n in e)
                  e.hasOwnProperty(n) &&
                    (s = e[n]) &&
                    ("function" == typeof s
                      ? o.call(this, n, s)
                      : r.call(this, n, s));
              return this;
            }),
            (s.removeEvent = function (t) {
              var e,
                i = typeof t,
                n = this._getEvents();
              if ("string" === i) delete n[t];
              else if (t instanceof RegExp)
                for (e in n) n.hasOwnProperty(e) && t.test(e) && delete n[e];
              else delete this._events;
              return this;
            }),
            (s.removeAllListeners = n("removeEvent")),
            (s.emitEvent = function (t, e) {
              var i,
                n,
                s,
                o,
                r,
                l = this.getListenersAsObject(t);
              for (o in l)
                if (l.hasOwnProperty(o))
                  for (i = l[o].slice(0), s = i.length; s--; )
                    (n = i[s]),
                      n.once === !0 && this.removeListener(t, n.listener),
                      (r = n.listener.apply(this, e || [])),
                      r === this._getOnceReturnValue() &&
                        this.removeListener(t, n.listener);
              return this;
            }),
            (s.trigger = n("emitEvent")),
            (s.emit = function (t) {
              var e = Array.prototype.slice.call(arguments, 1);
              return this.emitEvent(t, e);
            }),
            (s.setOnceReturnValue = function (t) {
              return (this._onceReturnValue = t), this;
            }),
            (s._getOnceReturnValue = function () {
              return this.hasOwnProperty("_onceReturnValue")
                ? this._onceReturnValue
                : !0;
            }),
            (s._getEvents = function () {
              return this._events || (this._events = {});
            }),
            (t.noConflict = function () {
              return (o.EventEmitter = r), t;
            }),
            "function" == typeof define && define.amd
              ? define(function () {
                  return t;
                })
              : "object" == typeof e && e.exports
              ? (e.exports = t)
              : (o.EventEmitter = t);
        }.call(this));
      },
      {},
    ],
    4: [
      function (t, e, i) {
        !(function (t, n) {
          "object" == typeof i ? (e.exports = n()) : (t.CreateControls = n());
        })(this, function () {
          "use strict";
          function t(t, e, i) {
            var n = document.createElement(t);
            return (
              e && "object" == typeof e
                ? e.forEach(function (t) {
                    n.classList.add(t);
                  })
                : n.classList.add(e),
              n
            );
          }
          function e() {
            for (
              var e = t("div", n.CONTROLS),
                i = t("button", n.CONTROLS_CLOSE),
                l = t("button", [n.CONTROLS_ARROW, n.CONTROLS_NEXT]),
                h = t("button", [n.CONTROLS_ARROW, n.CONTROLS_PREV]),
                a = [i, l, h],
                u = 0;
              u < a.length;
              u++
            )
              e.appendChild(a[u]);
            var c = t("span", n.CONTROLS_BTN),
              f = t("span", n.CONTROLS_BTN),
              m = t("span", n.CONTROLS_BTN);
            return (
              (c.innerHTML = s),
              (f.innerHTML = r),
              (m.innerHTML = o),
              i.appendChild(c),
              l.appendChild(f),
              h.appendChild(m),
              e
            );
          }
          var i = {},
            n = {
              CONTROLS: "m-p-g__controls",
              CONTROLS_CLOSE: "m-p-g__controls-close",
              CONTROLS_ARROW: "m-p-g__controls-arrow",
              CONTROLS_NEXT: "m-p-g__controls-arrow--next",
              CONTROLS_PREV: "m-p-g__controls-arrow--prev",
              CONTROLS_BTN: "m-p-g__btn",
            },
            s =
              '<svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>',
            o =
              '<svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>',
            r =
              '<svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>';
          return (i.init = e), i;
        });
      },
      {},
    ],
    5: [
      function (t, e, i) {
        var n = t("./material-photo-gallery");
        window.MaterialPhotoGallery = n;
      },
      { "./material-photo-gallery": 6 },
    ],
    6: [
      function (t, e, i) {
        !(function (n, s) {
          "function" == typeof define && define.amd
            ? define(s)
            : "object" == typeof i
            ? (e.exports = s(
                t("imagesLoaded"),
                t("./vendor/google-image-layout"),
                t("./create-controls")
              ))
            : (n.Gallery = s(window.imagesLoaded, window.GoogleImageLayout));
        })(this, function (t, e, i) {
          "use strict";
          function n(t, e, i) {
            var n;
            return function () {
              var s = this,
                o = arguments,
                r = function () {
                  (n = null), i || t.apply(s, o);
                },
                l = i && !n;
              clearTimeout(n), (n = setTimeout(r, e)), l && t.apply(s, o);
            };
          }
          var s = function (t) {
              (this._element = t), this._layout();
            },
            o = !1,
            r = "transform",
            l = "Webkit Moz ms".split(" "),
            h = "",
            a = document.createElement("div");
          if ((void 0 !== a.style.transform && (o = !0), o === !1))
            for (var u = 0; u < l.length; u++)
              if (void 0 !== a.style[l[u] + "Transform"]) {
                (h = l[u]), (r = h + "Transform"), (o = !0);
                break;
              }
          var c,
            f = {
              transition: "transitionend",
              WebkitTransition: "webkitTransitionEnd",
              MozTransition: "transitionend",
              OTransition: "otransitionend",
            },
            a = document.createElement("div");
          for (var m in f)
            if ("undefined" != typeof a.style[m]) {
              c = f[m];
              break;
            }
          return (
            (s.prototype._cssClasses = {
              GALLERY: "m-p-g",
              THUMBS_BOX: "m-p-g__thumbs",
              THUMB_IMG: "m-p-g__thumbs-img",
              FULL_BOX: "m-p-g__fullscreen",
              FULL_IMG: "m-p-g__fullscreen-img",
              CONTROLS: "m-p-g__controls",
              CONTROLS_CLOSE: "m-p-g__controls-close",
              CONTROLS_NEXT: "m-p-g__controls-arrow--next",
              CONTROLS_PREV: "m-p-g__controls-arrow--prev",
            }),
            (s.prototype._layout = function () {
              var i = this,
                s = t(document.querySelector("div[data-google-image-layout]"));
              s.on("progress", function (t, e) {
                e.img.setAttribute("data-width", e.img.offsetWidth),
                  e.img.setAttribute("data-height", e.img.offsetHeight);
              }),
                s.on("done", function (t) {
                  new e().init({
                    after: function () {
                      i.init();
                    },
                  });
                }),
                s.on("fail", function (t) {
                  var e = i._element,
                    n = document.createElement("div");
                  n.className = "m-p-g__alertBox";
                  var s = document.createElement("h2");
                  s.innerHTML = "Error";
                  var o = document.createElement("p");
                  n.appendChild(s), n.appendChild(o), e.appendChild(n);
                  var r = [];
                  t.images.forEach(function (t) {
                    t.isLoaded || r.push(t.img.currentSrc);
                  }),
                    (o.innerHTML = "Failed to load: " + r);
                }),
                (window.onresize = n(function () {
                  new e().init({
                    after: function () {
                      setTimeout(function () {
                        i._handleResize();
                      }, 500);
                    },
                  });
                }, 25));
            }),
            (s.prototype.init = function () {
              var t = i.init();
              this._element.appendChild(t),
                (this._gallery = this._element),
                (this._thumbsBox = this._gallery.querySelector(
                  "." + this._cssClasses.THUMBS_BOX
                )),
                (this._thumbsNodeList = this._thumbsBox.querySelectorAll(
                  "." + this._cssClasses.THUMB_IMG
                )),
                (this._thumbs = Array.prototype.slice.call(
                  this._thumbsNodeList
                )),
                (this._fullBox = this._gallery.querySelector(
                  "." + this._cssClasses.FULL_BOX
                )),
                (this._controls = this._gallery.querySelector(
                  "." + this._cssClasses.CONTROLS
                )),
                (this._closeBtn = this._controls.querySelector(
                  "." + this._cssClasses.CONTROLS_CLOSE
                )),
                (this._prevBtn = this._controls.querySelector(
                  "." + this._cssClasses.CONTROLS_PREV
                )),
                (this._nextBtn = this._controls.querySelector(
                  "." + this._cssClasses.CONTROLS_NEXT
                )),
                (this._fullImgsLoaded = !1),
                (this._fullImgOpen = !1),
                this._bindEvents.call(this),
                this._loadFullImgs.call(this);
            }),
            (s.prototype._bindEvents = function () {
              for (var t = 0, e = this._thumbs.length; e > t; t++)
                this._thumbs[t].addEventListener(
                  "click",
                  this._handleThumbClick.bind(this)
                ),
                  this._thumbs[t].addEventListener(
                    "mouseover",
                    this._handleThumbHover.bind(this)
                  );
              this._closeBtn.addEventListener(
                "click",
                this._handleClose.bind(this)
              ),
                this._nextBtn.addEventListener(
                  "click",
                  this._handleNext.bind(this)
                ),
                this._prevBtn.addEventListener(
                  "click",
                  this._handlePrev.bind(this)
                ),
                window.addEventListener(
                  "scroll",
                  this._handleScroll.bind(this)
                );
            }),
            (s.prototype._handleScroll = n(function () {
              this._resetFullImg.call(this);
            }, 25)),
            (s.prototype._handleResize = function () {
              this._resetFullImg.call(this);
            }),
            (s.prototype._loadFullImgs = function () {
              for (var t, e, i = 0, n = this._thumbs.length; n > i; i++)
                (t = this._thumbs[i].getAttribute("data-full")),
                  (e = new Image()),
                  (e.src = t),
                  e.classList.add(this._cssClasses.FULL_IMG),
                  this._fullBox.appendChild(e);
              this._loadFullImgsDone.call(this);
            }),
            (s.prototype._loadFullImgsDone = function () {
              var e = t(this._fullBox);
              e.on(
                "done",
                function (t) {
                  var e = t.images;
                  (this._fullImgs = []),
                    (this._fullImgDimensions = []),
                    (this._fullImgsTransforms = []);
                  for (var i = 0, n = e.length; n > i; i++) {
                    var s = e[i].img.getBoundingClientRect();
                    this._fullImgs.push(e[i].img),
                      this._positionFullImgs.call(this, e[i].img, i),
                      this._fullImgDimensions.push(s);
                  }
                  this._fullImgsLoaded = !0;
                }.bind(this)
              );
            }),
            (s.prototype._positionFullImgs = function (t, e, i) {
              var n = this._transformFullImg(t, this._thumbs[e]);
              this._fullImgsTransforms.push(n),
                (t.style.marginTop = -t.height / 2 + "px"),
                (t.style.marginLeft = -t.width / 2 + "px"),
                i !== !1 && (t.style[r] = n);
            }),
            (s.prototype._transformFullImg = function (t, e, i) {
              var n, s, o, r;
              (t = t.getBoundingClientRect()),
                (e = e.getBoundingClientRect()),
                i
                  ? ((n = (e.width / i.width).toFixed(3)),
                    (s = (e.height / i.height).toFixed(3)),
                    (o = e.left - i.left + i.width / 2),
                    (r = e.top - i.top + i.height / 2))
                  : ((n = (e.width / t.width).toFixed(3)),
                    (s = (e.height / t.height).toFixed(3)),
                    (o = e.left - t.left + t.width / 2),
                    (r = e.top - t.top + t.height / 2));
              var l =
                "translate(" + o + "px," + r + "px) scale(" + n + "," + s + ")";
              return l;
            }),
            (s.prototype._resetFullImg = function () {
              this._fullImgsTransforms = [];
              for (var t = 0, e = this._fullImgs.length; e > t; t++) {
                ({
                  width: this._fullImgDimensions[t].width,
                  height: this._fullImgDimensions[t].height,
                  left: this._fullImgDimensions[t].left,
                  top: this._fullImgDimensions[t].top,
                });
                t === this._thumbIndex && this._fullImgOpen
                  ? (this._fullImgs[t].removeAttribute("style"),
                    this._positionFullImgs.call(this, this._fullImgs[t], t, !1))
                  : (this._fullImgs[t].removeAttribute("style"),
                    this._positionFullImgs.call(this, this._fullImgs[t], t));
              }
            }),
            (s.prototype._handleThumbHover = function (t) {
              this._fullImgsLoaded &&
                !this._fullImgOpen &&
                this._transformThumbSetup.call(this, t);
            }),
            (s.prototype._handleThumbClick = function (t) {
              this._thumb != t.target &&
                ((this._thumb = t.target),
                (this._thumbIndex = this._thumbs.indexOf(this._thumb)),
                (this._fullImg = this._fullImgs[this._thumbIndex])),
                this._setupComplete &&
                  this._fullImgsLoaded &&
                  !this._fullImgOpen &&
                  (this._activateFullImg.call(this),
                  this._activateControls.call(this),
                  this._activateFullBox.call(this),
                  this._disableScroll());
            }),
            (s.prototype._transformThumbSetup = function (t, e) {
              (this._setupComplete = !1),
                (this._thumb = t.target),
                (this._thumbIndex = this._thumbs.indexOf(this._thumb)),
                (this._fullImg = this._fullImgs[this._thumbIndex]),
                (this._setupComplete = !0),
                e && e();
            }),
            (s.prototype._activateFullImg = function () {
              this._thumb.classList.add("hide"),
                this._fullImg.classList.add("active"),
                (this._fullImg.style[r] = "translate3d(0,0,0)"),
                (this._fullImgOpen = !0),
                this._fullImgs.forEach(function (t) {
                  t.classList.contains("active") ||
                    t.classList.add("almost-active");
                });
            }),
            (s.prototype._activateFullBox = function () {
              this._fullBox.classList.add("active");
            }),
            (s.prototype._activateControls = function () {
              this._controls.classList.add("active");
            }),
            (s.prototype._handleClose = function () {
              this._fullImgOpen && this._closeFullImg.call(this);
            }),
            (s.prototype._closeFullImg = function () {
              var t = function () {
                this._fullBox.classList.remove("active"),
                  this._controls.classList.remove("active"),
                  (this._fullImg.style[r] = this._fullImgsTransforms[
                    this._thumbIndex
                  ]),
                  this._thumb.classList.remove("hide"),
                  this._fullImgs.forEach(function (t) {
                    t.classList.remove("almost-active");
                  });
                var t = function () {
                  this._fullImg.classList.remove("active"),
                    this._fullImg.removeEventListener(c, t),
                    (this._fullImgOpen = !1);
                }.bind(this);
                this._fullImg.addEventListener(c, t), this._enableScroll();
              }.bind(this);
              window.requestAnimationFrame(t);
            }),
            (s.prototype._handleNext = function () {
              this._fullImgOpen && this._changeImg.call(this, "next");
            }),
            (s.prototype._handlePrev = function () {
              this._fullImgOpen && this._changeImg.call(this, "prev");
            }),
            (s.prototype._changeImg = function (t) {
              (this._thumbIndex = this._fullImgs.indexOf(this._fullImg)),
                "next" === t
                  ? (this._thumbIndex += 1)
                  : (this._thumbIndex -= 1),
                (this._newFullImg =
                  "next" === t
                    ? this._fullImg.nextElementSibling
                    : this._fullImg.previousElementSibling),
                (this._newFullImg && "IMG" === this._newFullImg.nodeName) ||
                  ((this._newFullImg =
                    "next" === t
                      ? (this._newFullImg = this._fullImgs[0])
                      : (this._newFullImg = this._fullImgs[
                          this._fullImgs.length - 1
                        ])),
                  "next" === t
                    ? (this._thumbIndex = 0)
                    : (this._thumbIndex = this._fullImgs.length - 1)),
                (this._newFullImg.style[r] = "translate3d(0,0,0)"),
                this._fullImg.classList.remove("active"),
                (this._fullImg.style[r] = this._fullImgsTransforms[
                  this._thumbIndex - 1
                ]),
                (this._fullImg = this._newFullImg),
                this._fullImg.classList.add("active");
            }),
            (s.prototype._disableScroll = function () {
              function t(t) {
                (t = t || window.event),
                  t.preventDefault && t.preventDefault(),
                  (t.returnValue = !1);
              }
              (window.onwheel = t), (window.ontouchmove = t);
            }),
            (s.prototype._enableScroll = function () {
              (window.onwheel = null), (window.ontouchmove = null);
            }),
            s
          );
        });
      },
      {
        "./create-controls": 4,
        "./vendor/google-image-layout": 7,
        imagesLoaded: 1,
      },
    ],
    7: [
      function (t, e, i) {
        !(function (t, n) {
          "function" == typeof define && define.amd
            ? define(function () {
                return n(t);
              })
            : "object" == typeof i
            ? (e.exports = n)
            : (t.GoogleImageLayout = n(t));
        })(this, function (t) {
          "use strict";
          var e = {},
            i = [],
            n = 5,
            s = function (t) {
              return [].map.call(t, function (t) {
                return t;
              });
            },
            o = function (t, e, i) {
              for (var n, s = 0, o = 0; o < t.length; o++)
                (n = t[o]),
                  (s +=
                    parseInt(n.getAttribute("data-width")) /
                    parseInt(n.getAttribute("data-height")));
              return e / s;
            },
            r = function (t, e) {
              i.push(e);
              for (var n, s = 0; s < t.length; s++)
                (n = t[s]),
                  (n.style.width =
                    (e * parseInt(n.getAttribute("data-width"))) /
                      parseInt(n.getAttribute("data-height")) +
                    "px"),
                  (n.style.height = e + "px"),
                  n.classList.add("layout-completed");
            };
          return (
            (e.init = function (t) {
              t = t || {};
              for (
                var i,
                  n = document.querySelectorAll(
                    "div[data-google-image-layout]"
                  ),
                  s = n.length,
                  o = 0;
                s > o;
                o++
              )
                (i = n[o]), e.align(i);
              t.after && t.after();
            }),
            (e.align = function (t) {
              var e = t.clientWidth,
                i = parseInt(t.getAttribute("data-max-height") || 120),
                l = s(t.querySelectorAll("img"));
              t: for (; l.length > 0; ) {
                for (var h = 1; h <= l.length; h++) {
                  var a = l.slice(0, h),
                    u = o(a, e, n);
                  if (i > u) {
                    r(a, u), (l = l.slice(h));
                    continue t;
                  }
                }
                r(a, Math.min(i, u));
                break;
              }
            }),
            e
          );
        });
      },
      {},
    ],
  },
  {},
  [5]
);
