$(window).load(function() {

	//Append google fonts to head
	//$('head').append("<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700,100italic' rel='stylesheet' type='text/css'>");

	//Show Navigation Button (1 column layout)
	$('#show-nav').click(function() {
		$('#header ul').toggle(500);
	});

	//Animations
	var controller = $.superscrollorama({
		triggerAtCenter : true,
		reverse: false
	});

	//Services
	controller.addTween('#section3-top h2', TweenMax.from( $('#section3-top h2'), .25, {css:{right:'2000px'}, ease:Quad.easeInOut}));

	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

	if (w > 950) {
		var s = skrollr.init();
	}
	if (w > 1056) {
		//Colour tree fill and 1st line of services
		controller.addTween(
			'#colour-tree-wrapper',
			(new TimelineLite())
			.append(
				TweenMax.fromTo($('#colour-tree-wrapper'), 1.5,
					{
						css:{height:'0px'},
						immediateRender:true,
						ease:Quad.easeInOut
					},
					{
						css:{height:'534px'},
						ease:Quad.easeInOut
					}
			)).append([
				TweenMax.fromTo($('.service-1 .service-header'), 1,
					{
						css:{'background-position-y':'259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-2 .service-header'), 1,
					{
						css:{'background-position-y':'259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-3 .service-header'), 1,
					{
						css:{'background-position-y':'259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				)
			]).append([ //Image fade-ins
				TweenMax.fromTo($('.service-1 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-2 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-3 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				)
			])
			,
			0
		);

		//Second half of colour tree
		controller.addTween(
			'.service-4',
			(new TimelineLite())
			.append([
				TweenMax.fromTo($('.service-4 .service-header'), 1,
					{
						css:{'background-position-y':'-259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-5 .service-header'), 1,
					{
						css:{'background-position-y':'-259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-6 .service-header'), 1,
					{
						css:{'background-position-y':'-259px'},
						ease:Quad.easeInOut
					},
					{
						css:{'background-position-y':'0px'},
						ease:Quad.easeInOut
					}
				)
			]).append([ //Image fade-ins
				TweenMax.fromTo($('.service-4 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-5 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.service-6 .service-header img'), 0.5,
					{
						css:{'opacity':'0'},
						ease:Quad.easeInOut
					},
					{
						css:{'opacity':'1'},
						ease:Quad.easeInOut
					}
				)
			])
			,
			0, -300
		);


		//Portfolio Animations
		controller.addTween(
			'#section5',
			(new TimelineLite())
			.append([
				TweenMax.fromTo($('.portfolio-item:nth-child(2)'), 1,
					{
						css:{
							'top':'500px',
							'opacity': '-2.5'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(3)'), 1,
					{
						css:{
							'top':'500px',
							'opacity': '-2.5'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(4)'), 1,
					{
						css:{
							'top':'500px',
							'opacity': '-2.5'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				)
			]).append([
				TweenMax.fromTo($('.portfolio-item:nth-child(5)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(6)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(7)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				)
			]).append([
				TweenMax.fromTo($('.portfolio-item:nth-child(8)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(9)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				),
				TweenMax.fromTo($('.portfolio-item:nth-child(10)'), 1,
					{
						css:{
							'top':'200px',
							'opacity': '0'
						},
						ease:Quad.easeInOut
					},
					{
						css:{
							'top':'0px',
							'opacity': '1'
						},
						ease:Quad.easeInOut
					}
				)
			])
			,

			0, -100
		);
	}

	//Spinning sale wheel
	function spinWheel() {
		$('#responsive-sale').animate({  borderSpacing: 360 }, {
		step: function(now,fx) {
		  $(this).css('-webkit-transform','rotate('+now+'deg)');
		  $(this).css('-moz-transform','rotate('+now+'deg)');
		  $(this).css('transform','rotate('+now+'deg)');
		},
		duration:5000,
		complete: function() {
			$('#responsive-sale').css("border-spacing","0");
			spinWheel();
		}
		},'linear');
	}

	spinWheel();

	//Fancybox
	$(".fancybox").fancybox({
		afterLoad: function() {
			if (this.element.find('img').attr('alt') != ("#" || "Zoom Icon")) {
				this.title = '<a href="http://' + this.element.find('img').attr('alt') + '">Visit Website</a> ' + this.title;
			}
		},
		helpers : {
    		title : {
    			type : 'over'
			},
			overlay: {
			  locked: false
			}
		}
	});

	//Placeholder clear
	$("#contact-form input:text").focus(function() {
		$(this).attr("value","");
	});

	$("#contact-form textarea").focus(function() {
		$(this).text("");
	});

	//Smoothscroll for page anchors
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
});
