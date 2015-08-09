// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

// requestAnimationFrame polyfill by Erik Möller
// fixes from Paul Irish and Tino Zijdel

(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };

    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());

/*Start Butter Scroll
*
*
*
*/

var Scroll = new function () {
};

// Detect browser and disable animation for Safari > 5
var browser = '';
var browserVersion = 0;
var bNoanim = false;

if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Opera';
} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    browser = 'MSIE';
} else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Netscape';
} else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Chrome';
} else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Safari';
    /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
    browserVersion = new Number(RegExp.$1);
} else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Firefox';
}
if (browserVersion === 0) {
    browserVersion = parseFloat(new Number(RegExp.$1));
}

if (browser == "Safari" && parseInt(browserVersion) > 5) {
    bNoanim = true;
}

jQuery(document).ready(function($) {

    Scroll.nScrollPosition = 0;
    Scroll.nMaxScroll = 0;
    Scroll.bScrolling = false;

    Scroll.init = function () {

        $.easing.easeOutExpo = function (x, t, b, c, d) {
            return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
        }

        // mousewheel
        if(!bNoanim) {
          disable_scroll();
          $(window).on('wheel', Scroll.anim);
        }

    }

    Scroll.mouseJump = function(e) {


        var delta = e.wheelDelta || e.originalEvent.wheelDelta || e.originalEvent.deltaY;

        if (Math.abs(delta) < 10) {
            delta = delta * -40;
        }

        Scroll.nScrollPosition -= delta;
        Scroll.nScrollPosition = Math.max(0, Math.min(Scroll.nMaxScroll, Scroll.nScrollPosition));
        Scroll.bScrolling = true;

        $(window)._scrollable().stop(true, false).scrollTo(Scroll.nScrollPosition, {'duration':400, 'easing':'easeOutExpo', onAfter: function () {
            Scroll.bScrolling = false;
        }});

        return false;
    }

    Scroll.anim = function(e) {
        requestAnimationFrame(function() {
          Scroll.mouseJump(e);
        });
    }

    $(window).on('enableFPS', function () {
        if(!bNoanim) {
            disable_scroll();
            $(window).on('mousewheel', Scroll.mouseJump);
        }
    })
    $(window).on('disableFPS', function () {
        if(!bNoanim) {
            $(window).off('mousewheel', Scroll.mouseJump);
            enable_scroll();
        }
    })


    /*
     *
     *
     *  Page finished loading
     *************************************************************************************************/
    $(window).load(function () {

        // get current scroll
        Scroll.nScrollPosition = $(window).scrollTop();

        // webkit fix
        $(window).scroll(shitfuck);
        function shitfuck() {
            Scroll.nScrollPosition = $(window).scrollTop();

            $(window).unbind('scroll', shitfuck);

            $(this).scroll(function () {
                if (!Scroll.bScrolling) {
                    Scroll.nScrollPosition = $(window).scrollTop();
                }
            })
        }
        Scroll.init();
        Scroll.nMaxScroll = $('body')[0].scrollHeight - $(window).height();
    });

        // on resize
        $(window).smartresize(function () {

            //Recalculate
            Scroll.nScrollPosition = $(window).scrollTop();
            Scroll.nMaxScroll = $('body')[0].scrollHeight - $(window).height();

        }).trigger("smartresize").trigger('scroll');

        // on content resize
        $(window).on('contentResized', function () {
            Scroll.nMaxScroll = $('body')[0].scrollHeight - $(window).height();
        });


});

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;
}

function wheel(e) {
    preventDefault(e);
}

function disable_scroll() {
    if (window.addEventListener) {
        window.addEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = wheel;

}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = null;
}
