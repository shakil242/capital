// Sassy Sidebar
//
// The basic form of the code is a fork of https://github.com/makotot/sidebar

(function (window, $) {

    function isAndroid () {
        var ua = (navigator.userAgent).toLowerCase();

        return ua.indexOf('android') > -1;
    }

    function hasTranslate3dSupport () {
        var p = document.createElement('p'),
            has3dSupport,
            transforms = {
                'transform': 'transform',
                'webkitTransform': '-webkit-transform',
                'MozTransform': '-moz-transform',
                'msTransform': '-ms-transform'
            };

        document.body.insertBefore(p, null);

        for (var transform in transforms) {
            if (p.style[transform] !== void 0) {
                p.style[transform] = 'translate3d(1px, 1px, 1px)';
                has3dSupport = window.getComputedStyle(p).getPropertyValue(transforms[transform]);
            }
        }
        document.body.removeChild(p);

        return (has3dSupport !== void 0 && has3dSupport.length && has3dSupport !== 'none');
    }



    var Sidebar = function (target, opts) {
        this.$sidebar = $(target);
        this.$body = $(document.body);
        this.$content = this.$body.find('.sidebar-left');
        this.sidebarW = this.$sidebar.width();
        this.opts = opts;
        this.meta = this.$sidebar.data('sidebar-options');

        this.init();
    };

    Sidebar.prototype = {

        defaults: {
            trigger: null,
            scrollbarDisplay: false,
            pullCb: function () {},
            pushCb: function () {}
        },

        init: function () {
            this.config = $.extend({}, this.defaults, this.opts, this.meta);

            this.$trigger = this.config.trigger ? this.$body.find(this.config.trigger) : this.$body.find('.jsc-sidebar-trigger');

            this.detect3dEnabled();
            this.attachEvent();
        },

        pushTransitionEndEvent: 'transitionEnd.push webkitTransitionEnd.push transitionend.push msTransitionEnd.push',

        pullTransitionEndEvent: 'transitionEnd.pull webkitTransitionEnd.pull transitionend.pull msTransitionEnd.pull',

        detect3dEnabled: function () {
            if (isAndroid() || !hasTranslate3dSupport()) {
                this.$content.removeClass('jsc-sidebar-pulled');
            }
        },

        attachEvent: function () {
            this.$trigger.on('click', $.proxy(function (e) {
                e.preventDefault();
                this.push();
            }, this));

            this.$content
                .on(this.pushTransitionEndEvent, $.proxy(function () {
                    this.detectPushEnd();
                    this.config.pushCb();
                }, this))
                .on('click', $.proxy(function () {
                    this.pull();
                }, this));
        },

        push: function () {
            this.$body.addClass('sidebar-closed')
        },

        pull: function () {
            if (!this.$body.removeClass('sidebar-closed')) {
                return;
            }

            this.$body.addClass('sidebar-closed');
        },

        detectPushEnd: function () {
            this.$content.addClass('jsc-sidebar-opened');
            !this.config.scrollbarDisplay && this.$content.addClass('jsc-sidebar-scroll-disabled');

            this.$content
                .addClass('jsc-sidebar-push-end')
                .off(this.pushTransitionEndEvent)
                .on(this.pullTransitionEndEvent, $.proxy(function () {
                    this.detectPullEnd();
                    this.config.pullCb();
                }, this));
        },

        detectPullEnd: function () {
            this.$content.removeClass('jsc-sidebar-disabled');
            !this.config.scrollbarDisplay && this.$content.removeClass('jsc-sidebar-scroll-disabled');

            this.$content
                .removeClass('jsc-sidebar-push-end')
                .addClass('jsc-sidebar-pull-end')
                .off(this.pullTransitionEndEvent)
                .on(this.pushTransitionEndEvent, $.proxy(function () {
                    this.detectPushEnd();
                    this.config.pushCb();
                }, this));
        }

    };

    Sidebar.defaults = Sidebar.prototype.defaults;


    $.fn.sidebar = function (options) {
        return this.each(function () {
            $(this).data('sidebar', new Sidebar(this, options));
        });
    };

})(window, jQuery);