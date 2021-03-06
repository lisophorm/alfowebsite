! function(a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery", "./blueimp-gallery"], a) : a(window.jQuery, window.blueimp.Gallery)
}(function(a, b) {
    "use strict";
    a.extend(b.prototype.options, {
        useBootstrapModal: !0
    });
    var c = b.prototype.close,
        d = b.prototype.imageFactory,
        e = b.prototype.videoFactory,
        f = b.prototype.textFactory;
    a.extend(b.prototype, {
        modalFactory: function(a, b, c, d) {
            if (!this.options.useBootstrapModal || c) return d.call(this, a, b, c);
            var e = this,
                f = this.container.children(".modal"),
                g = f.clone().show().on("click", function(a) {
                    (a.target === g[0] || a.target === g.children()[0]) && (a.preventDefault(), a.stopPropagation(), e.close())
                }),
                h = d.call(this, a, function(a) {
                    b({
                        type: a.type,
                        target: g[0]
                    }), g.addClass("in")
                }, c);
            return g.find(".modal-title").text(h.title || String.fromCharCode(160)), g.find(".modal-body").append(h), g[0]
        },
        imageFactory: function(a, b, c) {
            return this.modalFactory(a, b, c, d)
        },
        videoFactory: function(a, b, c) {
            return this.modalFactory(a, b, c, e)
        },
        textFactory: function(a, b, c) {
            return this.modalFactory(a, b, c, f)
        },
        close: function() {
            this.container.find(".modal").removeClass("in"), c.call(this)
        }
    })
});