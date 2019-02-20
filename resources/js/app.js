// page init
jQuery(function(){
    initOpenClose();
    //initAddClassPage();
    initNavBar();
    //$(window).scroll( $.throttle( 100 , slideNav ) );

    initSubscribeLink();
});

function initSubscribeLink() {
    var display = $(".subscribe-section__display");
    var formSection = $(".subscribe-section__form").hide();
    var result = $(".subscribe-section__result").hide();

    display.find(".btn").on("click", function (e) {
        e.preventDefault();
        display.removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeOutLeft");
        formSection.show().removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeInRight");
    });
    formSection.find(".subscribe-section__reset").on("click", function (e) {
        e.preventDefault();
        display.removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeInLeft");
        formSection.removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeOutRight");
    });

    result.find(".subscribe-section__reset").on("click", function (e) {
        e.preventDefault();
        formSection.removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeInLeft");
        result.hide().removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeOutRight");
    });

    formSection.find("form").on("submit",function (e) {
        e.preventDefault();
        $.post( $(this).attr("action"), $(this).serializeArray())
            .success(function () {
                result.find(".subscribe-section__reset").hide()
            })
            .always(function(data){
                formSection.removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeOutLeft");
                result.show().removeClass(function(index,css){return (css.match (/(^|\s)fade\S+/g) || []).join(' ');}).addClass("fadeInRight");
                var message  = result.find(".message");
                if(data.message){
                    message.text(data.message)
                }
                else if(data.responseJSON){
                    message.empty();
                   $.each(data.responseJSON, function(index,element){
                       message.append(element);
                   });
                }

            });
    });
}

// open-close init
function initOpenClose() {
    jQuery('div.open-close').openClose({
        activeClass: 'active',
        opener: '.opener',
        slider: '.slide',
        animSpeed: 400,
        effect: 'slide'
    });
}

function initNavBar() {
    $("#header-navtoggle").click(function (e) {
        e.preventDefault();
        var target = $("#header-navtoggle-target");
        target.toggleClass("active");
    });

    $(".nav .dropdown-toggle").click(function (e) {
        e.preventDefault();
        var target = $(this).siblings('.dropdown-menu').first();
        if($(window).width() < 768){
            target.toggleClass("open")
        }
    });
}

function attachNav(toggle, target) {
    toggle.click(function (e) {
        e.preventDefault();
        target.toggleClass("active");
    });
}

function slideNav() {
    console.log("throttled");
    var header = $("#header");
    var clone = $("#header-clone");
    var headerClone = null;
    if(clone.length > 0){
        headerClone = clone;
    }
    else{
        headerClone = header.clone();
    }

    headerClone.attr("id","header-clone");
    var toggle = headerClone.find("#header-navtoggle");
    toggle.attr("id","header-clone-navtoggle");

    var target = headerClone.find("#header-navtoggle-target");
    target.attr("id","header-clone-navtoggle-target");

    if($(this).scrollTop() > 50 && !headerClone.hasClass("header--fixed")){
        headerClone.prependTo("body");
        attachNav(toggle, target);
        headerClone.css("top",-headerClone.height()).addClass('header--fixed').css("transition","top 0.3s ease-in-out").css("top",0);
    }
    else if($(this).scrollTop() <= 50 && headerClone.hasClass("header--fixed")){
        headerClone.css("top",-headerClone.height()).delay(300).queue(function (next) {
            $(this).removeClass('header--fixed').css("transition","top 0s").css("top",0);
            headerClone.remove();
            next();
        });
    }
}



// add class on header

function initAddClassPage() {
    var html = jQuery('html');
    var menuHolder = jQuery('.navbar').find('.navbar-collapse');
    var opener = jQuery('.navbar-toggle');
    var className = 'menuOpened';
    var isOpened = false;


    function clickHandler() {
        if(!isOpened) {
            html.addClass(className);
            isOpened = true;
        } else {
            html.removeClass(className);
            isOpened = false;
        }
    }

    jQuery(opener).on('click', clickHandler);

}

/*
 * jQuery Open/Close plugin
 */
;(function($) {
    function OpenClose(options) {
        this.options = $.extend({
            addClassBeforeAnimation: true,
            hideOnClickOutside: false,
            activeClass:'active',
            opener:'.opener',
            slider:'.slide',
            animSpeed: 400,
            effect:'fade',
            event:'click'
        }, options);
        this.init();
    }
    OpenClose.prototype = {
        init: function() {
            if (this.options.holder) {
                this.findElements();
                this.attachEvents();
                this.makeCallback('onInit', this);
            }
        },
        findElements: function() {
            this.holder = $(this.options.holder);
            this.opener = this.holder.find(this.options.opener);
            this.slider = this.holder.find(this.options.slider);
        },
        attachEvents: function() {
            // add handler
            var self = this;
            this.eventHandler = function(e) {
                e.preventDefault();
                if (self.slider.hasClass(slideHiddenClass)) {
                    self.showSlide();
                } else {
                    self.hideSlide();
                }
            };
            self.opener.bind(self.options.event, this.eventHandler);

            // hover mode handler
            if (self.options.event === 'over') {
                self.opener.bind('mouseenter', function() {
                    if (!self.holder.hasClass(self.options.activeClass)){
                        self.showSlide();
                    }
                });
                self.holder.bind('mouseleave', function() {
                    self.hideSlide();
                });
            }

            // outside click handler
            self.outsideClickHandler = function(e) {
                if (self.options.hideOnClickOutside) {
                    var target = $(e.target);
                    if (!target.is(self.holder) && !target.closest(self.holder).length) {
                        self.hideSlide();
                    }
                }
            };

            // set initial styles
            if (this.holder.hasClass(this.options.activeClass)) {
                $(document).bind('click touchstart', self.outsideClickHandler);
            } else {
                this.slider.addClass(slideHiddenClass);
            }
        },
        showSlide: function() {
            var self = this;
            if (self.options.addClassBeforeAnimation) {
                self.holder.addClass(self.options.activeClass);
            }
            self.slider.removeClass(slideHiddenClass);
            $(document).bind('click touchstart', self.outsideClickHandler);

            self.makeCallback('animStart', true);
            toggleEffects[self.options.effect].show({
                box: self.slider,
                speed: self.options.animSpeed,
                complete: function() {
                    if (!self.options.addClassBeforeAnimation) {
                        self.holder.addClass(self.options.activeClass);
                    }
                    self.makeCallback('animEnd', true);
                }
            });
        },
        hideSlide: function() {
            var self = this;
            if (self.options.addClassBeforeAnimation) {
                self.holder.removeClass(self.options.activeClass);
            }
            $(document).unbind('click touchstart', self.outsideClickHandler);

            self.makeCallback('animStart', false);
            toggleEffects[self.options.effect].hide({
                box: self.slider,
                speed: self.options.animSpeed,
                complete: function() {
                    if (!self.options.addClassBeforeAnimation) {
                        self.holder.removeClass(self.options.activeClass);
                    }
                    self.slider.addClass(slideHiddenClass);
                    self.makeCallback('animEnd', false);
                }
            });
        },
        destroy: function() {
            this.slider.removeClass(slideHiddenClass).css({ display:'' });
            this.opener.unbind(this.options.event, this.eventHandler);
            this.holder.removeClass(this.options.activeClass).removeData('OpenClose');
            $(document).unbind('click touchstart', this.outsideClickHandler);
        },
        makeCallback: function(name) {
            if (typeof this.options[name] === 'function') {
                var args = Array.prototype.slice.call(arguments);
                args.shift();
                this.options[name].apply(this, args);
            }
        }
    };

    // add stylesheet for slide on DOMReady
    var slideHiddenClass = 'js-slide-hidden';
    (function() {
        var tabStyleSheet = $('<style type="text/css">')[0];
        var tabStyleRule = '.' + slideHiddenClass;
        tabStyleRule += '{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}';
        if (tabStyleSheet.styleSheet) {
            tabStyleSheet.styleSheet.cssText = tabStyleRule;
        } else {
            tabStyleSheet.appendChild(document.createTextNode(tabStyleRule));
        }
        $('head').append(tabStyleSheet);
    }());

    // animation effects
    var toggleEffects = {
        slide: {
            show: function(o) {
                o.box.stop(true).hide().slideDown(o.speed, o.complete);
            },
            hide: function(o) {
                o.box.stop(true).slideUp(o.speed, o.complete);
            }
        },
        fade: {
            show: function(o) {
                o.box.stop(true).hide().fadeIn(o.speed, o.complete);
            },
            hide: function(o) {
                o.box.stop(true).fadeOut(o.speed, o.complete);
            }
        },
        none: {
            show: function(o) {
                o.box.hide().show(0, o.complete);
            },
            hide: function(o) {
                o.box.hide(0, o.complete);
            }
        }
    };

    // jQuery plugin interface
    $.fn.openClose = function(opt) {
        return this.each(function() {
            jQuery(this).data('OpenClose', new OpenClose($.extend(opt, { holder: this })));
        });
    };
}(jQuery));

jQuery('#nav [data-toggle="dropdown"][href!="#"]').on('click', function() {
    if(jQuery(this.parentNode).hasClass('open')) {
        location.href = this.href;
    }
});