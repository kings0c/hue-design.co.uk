(function($){var types=['DOMMouseScroll','mousewheel'];if($.event.fixHooks){for(var i=types.length;i;){$.event.fixHooks[types[--i]]=$.event.mouseHooks;}}
$.event.special.mousewheel={setup:function(){if(this.addEventListener){for(var i=types.length;i;){this.addEventListener(types[--i],handler,false);}}else{this.onmousewheel=handler;}},teardown:function(){if(this.removeEventListener){for(var i=types.length;i;){this.removeEventListener(types[--i],handler,false);}}else{this.onmousewheel=null;}}};$.fn.extend({mousewheel:function(fn){return fn?this.bind("mousewheel",fn):this.trigger("mousewheel");},unmousewheel:function(fn){return this.unbind("mousewheel",fn);}});function handler(event){var orgEvent=event||window.event,args=[].slice.call(arguments,1),delta=0,returnValue=true,deltaX=0,deltaY=0;event=$.event.fix(orgEvent);event.type="mousewheel";if(orgEvent.wheelDelta){delta=orgEvent.wheelDelta/120;}
if(orgEvent.detail){delta=-orgEvent.detail/3;}
deltaY=delta;if(orgEvent.axis!==undefined&&orgEvent.axis===orgEvent.HORIZONTAL_AXIS){deltaY=0;deltaX=-1*delta;}
if(orgEvent.wheelDeltaY!==undefined){deltaY=orgEvent.wheelDeltaY/120;}
if(orgEvent.wheelDeltaX!==undefined){deltaX=-1*orgEvent.wheelDeltaX/120;}
args.unshift(event,delta,deltaX,deltaY);return($.event.dispatch||$.event.handle).apply(this,args);}})(jQuery);
 
 
 $(window).load(function () {

	// detect browser
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
	
    var top = 0,
        step = 55,
        viewport = $(window).height(),
        body = browser == 'Safari' || 'Chrome' ? $('body') : $('html'),
        wheel = false;

    $('body').mousewheel(function(event, delta) {
		
        wheel = true;

        if (delta < 0) {

            top = (top+viewport) >= $(document).height() ? top : top+=step;

            body.stop().animate({scrollTop: top}, 400, function () {
                wheel = false;
            });
        } else {

            top = top <= 0 ? 0 : top-=step;

            body.stop().animate({scrollTop: top}, 400, function () {
                wheel = false;
            });
        }

        return false;
    });

    $(window).on('resize', function (e) {
        viewport = $(this).height();
    });

    $(window).on('scroll', function (e) {
        if (!wheel)
            top = $(this).scrollTop();
    });
});