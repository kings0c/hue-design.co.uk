<?php
/*** set the content type header ***/
header("Content-type: text/css; charset: UTF-8");

/** set the paragraph color ***/
$para_color = '#0000ff';

/*** set the heading size ***/
$heading_size = '2em';

/*** set the heading color ***/
$heading_color = '#c0c0c0';

/***

Colours: be0059, 28d600, 0086e4

***/

$baseURL = "http://www.hue-design.co.uk/";
?>

@font-face {
    font-family: 'Aller';
    src: url('<?php echo $baseURL; ?>fonts/aller/allerdisplay-webfont.eot');
    src: url('<?php echo $baseURL; ?>fonts/aller/allerdisplay-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo $baseURL; ?>fonts/aller/allerdisplay-webfont.woff') format('woff'),
         url('<?php echo $baseURL; ?>fonts/aller/allerdisplay-webfont.ttf') format('truetype'),
         url('<?php echo $baseURL; ?>fonts/aller/allerdisplay-webfont.svg#aller_displayregular') format('svg');
    font-weight: normal;
    font-style: normal;
}

body {

}

#section1 {
	background: url('<?php echo $baseURL; ?>img/bgimg.jpg') no-repeat center 100%;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

}

#section1-inner {
	position:relative;
	z-index:1;
}

#section1-canvas {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
}

#section3-top {
	background: url('<?php echo $baseURL; ?>img/section3.jpg') no-repeat center center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#section4 {
	background: url('<?php echo $baseURL; ?>img/desert_road3.jpg') no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#section5 {

}

#section6-top {
	background: url('<?php echo $baseURL; ?>img/handcupkeyboardpencilman.jpg') no-repeat center 0%;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.overlay {
	background: url('<?php echo $baseURL; ?>img/scanline_overlay_5x5.png');
}
.fancybox-overlay {
	background: url('<?php echo $baseURL; ?>img/fancybox/fancybox_overlay.png');
}

.service-1 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/magenta_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

.service-2 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/green_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

.service-3 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/blue_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

.service-4 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/magenta_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

.service-5 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/green_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

.service-6 .service-header {
	background-image: url('<?php echo $baseURL; ?>img/services/blue_solid.jpg');
	background-position: 0 0px;
	background-repeat:no-repeat;
}

/*From old style.css*/
html, body {
	padding:0;
	margin:0;
	height:100%;
	width:100%;
	background: #111111;
}

body {
	/*height:9000px;*/
}

img {text-decoration: none; border: 0px}

@viewport {
    zoom: 1.0;
    width: device-width;
}

/*Begin Nav bar*/

#nav-bar {
	background: #1d4070; /* Old browsers */
	background: -moz-linear-gradient(top, #1d4070 0%, #0f3859 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1d4070), color-stop(100%,#0f3859)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #1d4070 0%,#0f3859 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #1d4070 0%,#0f3859 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #1d4070 0%,#0f3859 100%); /* IE10+ */
	background: linear-gradient(to bottom, #1d4070 0%,#0f3859 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1d4070', endColorstr='#0f3859',GradientType=0 ); /* IE6-9 */

	position:relative;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.5);
	-moz-box-shadow:    0px 3px 5px 0px rgba(0, 0, 0, 0.5);
	box-shadow:         0px 3px 5px 0px rgba(0, 0, 0, 0.5);
	z-index:999;

  font-family: 'Lato', sans-serif;
  color:white;
	text-align: center;
  overflow:hidden;
}

#show-nav {
  display:none;
}

#nav-bar,
#nav-bar ul,
#nav-bar ul li,
#nav-bar ul li a,
#nav-bar #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#nav-bar:after,
#nav-bar > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

#nav-bar ul {
  padding-top:0px;
  display:inline-block;
  text-align:center;
  position:relative;
  top:3px;
}

#nav-bar ul li {
  float: left;
}

#nav-bar ul li a {
  padding: 17px;
  font-size: 14px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 700;
  text-transform: uppercase;
  -webkit-transition: color .25s ease;
     -moz-transition: color .25s ease;
          transition: color .25s ease;
}

#nav-bar ul li a:after {
  position: absolute;
  top: 22px;
  right: 0px;
  width: 3px;
  height: 3px;
  display: block;
  background: #dddddd;
  content: '';
  -webkit-transition: background .25s ease;
     -moz-transition: background .25s ease;
          transition: background .25s ease;
}

#nav-bar ul li:last-child a:after {
  display:none;
}

#nav-bar ul li:hover a {
  color: #ffffff;
}

/*End Nav bar*/



.section {
	width:100%;
	display: table;
	position:relative;
}

.overlay {
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	left:0;
	z-index:-1;
}

#logo {
	display:block;
	margin:0 auto 20px auto;
	z-index:2;
}

#contact-logo {
	display:block;
	margin:0px auto;
	z-index:2;
	position: relative;
	top:72px;
}

#section1 {
	height: 100vh;
	z-index:0;
	background-attachment: fixed;
	position:relative;
	padding-top:10px;
}

.section-inner {
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	z-index:999;
}

#section1  h1, h2, h3 {
	font-family: 'Aller';
	font-weight: 400;
	text-shadow: 2px 2px #231f20;
	text-align:center;
	color:white;
}

#section1 h1 {
	margin:40px 0 0 0;
	font-size: 48pt;
}

#section1 h2 {
	margin:20px 0 0 0;
	font-size: 46pt;
}

#section1 h3 {
	margin:20px 0 0 0;
	font-size: 40pt;
}

/***

Colours: be0059, 28d600, 0086e4

***/

#findmore {
	margin: 40px auto;
	display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 24px;
    border: 1px solid #ffffff;
    background: #0086e4;
    -webkit-box-shadow: #323232 0px 12px 40px 5px;
    -moz-box-shadow: #323232 0px 12px 40px 5px;
    box-shadow: #323232 0px 12px 40px 5px;
    text-shadow: #591717 1px 1px 1px;
    font-size: 18px;
    font-family: 'Lato';
    letter-spacing: 0px;
    color: #ffffff;
    text-decoration: none;
	cursor: pointer;
	
	-webkit-transition: background-color 200ms ease-out;
    -moz-transition: background-color 200ms ease-out;
    -o-transition: background-color 200ms ease-out;
    transition: background-color 200ms ease-out;
}
#findmore:hover,
#findmore:focus {
    background: #178FE3;
    color: #ffffff;
    text-decoration: none;
}
#findmore:active {
    background: #720035;
    background: -webkit-gradient(linear, left top, left bottom, from(#720035), to(#982727));
    background: -moz-linear-gradient(top, #720035, #982727);
    background: linear-gradient(to bottom, #720035, #982727);
}

#section2 {
	background: #0b1b31; /* Old browsers */
	background: -moz-linear-gradient(top,  #0b1b31 0%, #132539 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0b1b31), color-stop(100%,#132539)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0b1b31 0%,#132539 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0b1b31', endColorstr='#132539',GradientType=0 ); /* IE6-9 */

	height:100%;
}

#section2-inner {
	padding:20px 0px 40px 0px;
	width:960px;
	min-height:500px;
	margin: 0px auto;
	overflow:hidden;
}

#section2-inner h2 {
	font-size:42pt;
}

.package {
	width: 310px;
	margin-right: 15px;
	float:left;
	color:white;
	text-align: center;
	position:relative;
	font-family: 'Lato';
	overflow:hidden;
}

.package-3 {
	margin-right:0px;
}


/* IE 8 */
.package-3 {
	margin-right:0px;
}

.feature-header h3 {
	font-weight: 300;
	font-family: 'Aller';
	font-size: 24pt;
	margin: 10px 0 0 0;
}

.feature-text span.blue {
	color: #33a7e5;
	font-weight: 700;
}

.feature-text span.white {
	color: #ffffff;
	font-weight: 700;
}

.package-price {
	font-weight: 700;
	font-family: 'Aller';
	font-size: 42pt;
}

.package-price sup {
	font-size:18pt;
}

.package-features {
	list-style:none;
	padding:0;
	margin:0;
}

.package-features li {
	border-top: 1px solid #1a3254;
	border-bottom: 1px solid #010d1e;
	border-collapse: collapse;
	list-style:none;
	height:55px;
	width:100%;
	display:table;
}

.feature-big {
	height:110px !important;
}

.feature-text {
	text-align: center;
	vertical-align: middle;
	display: table-cell;
}

.package-price {
	text-align: center;
	vertical-align: middle;
	display: table-cell;
}

.feature-header {
	border-top: none !important;
}

.last-feature {
	border-bottom: none !important;
}

.package-top {
	left: 10px;
	top:0px;
	position:absolute;
	height: 10px;
	width: 286px;
	border-left: 2px solid;
	border-right:2px solid;
}

.package-3 .package-top, .package-3 .package-bottom {
	left:12px;
}

.package-left {
	left: 0px;
	top:10px;
	position:absolute;
	width:10px;
	height:502px;
	height: calc(100% - 24px);
	border-top:2px solid;
	border-bottom:2px solid;
}

.package-right {
	right: 0px;
	top:10px;
	position:absolute;
	width:10px;
	height:502px;
	height: calc(100% - 24px);
	border-top:2px solid;
	border-bottom:2px solid;
}

.package-inner {
	border: 2px solid;
	width: 286px;
	background: #091930 !important;
	margin-left:10px;
	margin-top:10px;
	margin-bottom:10px;
}

.package-bottom {
	left: 10px;
	bottom: 0px;
	position:absolute;
	height: 10px;
	width: 286px;
	border-left: 2px solid;
	border-right:2px solid;
}

/*Enable all corner borders */

.package-1 .package-inner,
.package-1 .package-top,
.package-1 .package-bottom,
.package-1 .package-left,
.package-1 .package-right {
	border-color: #be0059;
}

.package-2 .package-inner,
.package-2 .package-top,
.package-2 .package-bottom ,
.package-2 .package-left,
.package-2 .package-right {
	border-color: #28d600;
}

.package-3 .package-inner,
.package-3 .package-top,
.package-3 .package-bottom,
.package-3 .package-right,
.package-3 .package-left {
	border-color: #0086e4;
}

/*Now disable the borders we don't want*/

.package-1 .package-top,
.package-1 .package-bottom {
	border-right: 0px solid #be0059;
}

.package-1 .package-right {
	border-top: 0px solid #be0059;
	border-bottom: 0px solid #be0059;
}

.package-2 .package-top,
.package-2 .package-bottom,
.package-2 .package-left,
.package-2 .package-right {
	border: 0px solid #28d600;
}

.package-3 .package-top,
.package-3 .package-bottom {
	border-left: 0px solid #0086e4;
}

.package-3 .package-left {
	border-top: 0px solid #0086e4;
	border-bottom: 0px solid #0086e4;
}

.package-3 {
	margin-right: 0 !important;
}

#section3 {
	position:relative;
}

#section3-top {
	display: table;
	width:100%;
	height:476px;
	position:relative;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#section3-top h2 {
	font-family: 'Aller';
	font-weight: 400;
	text-shadow: 2px 2px #231f20;
	text-align:center;
	font-size: 48pt;
	margin:0 auto;
	display:table-cell;
	vertical-align: middle;
	padding-bottom:75px;
	position:relative;
	z-index:2;
}

#section3-top .overlay {
	height: 100% !important;
	z-index: 1;
}

#colour-tree {
	width: 960px;
	height: 533px;
	position:absolute;
	top:241px;
	left:50%;
	margin-left: -480px;
	z-index:2;
}

#colour-tree-wrapper {
	overflow:hidden;
	height:0px;
}

#section3-bottom {
	padding: 40px;
	background: #0b1b31; /* Old browsers */
	background: -moz-linear-gradient(top,  #0b1b31 0%, #132539 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0b1b31), color-stop(100%,#132539)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0b1b31 0%,#132539 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0b1b31 0%,#132539 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0b1b31', endColorstr='#132539',GradientType=0 ); /* IE6-9 */
	overflow:hidden;
}

#section3-bottom .service {
	width: 290px;
	float:left;
	color:white;
	font-family: 'Lato';
	font-weight:400;
	font-size: 12pt;
	text-align: justify;
	position: relative;
}

.service h3 {
	font-weight: 400;
	font-size:17pt;
	color:#33a7e5;
}

.service-3, .service-6 {
	margin-right:0px !important;
}

.service {
	margin-right:45px;
}

.service-seperator {
	width:100%;
	height:10px;
	float:left;
	clear:both;
}

.service-header {
	width:290px;
	height:259px;
	position:relative;
}

.service-header h3 {
	position:absolute;
	z-index:3;
}

.service img {
	display: block;
	position:absolute;
	z-index:3;
}

/* Service image positions*/

.service-1 img {
	margin-left: 62px;
	padding-top:38px;
}

.service-2 img {
	margin-left: 38px;
	padding-top: 48px;
}

#responsive-avatar {
	margin-left: 0px !important;
	padding-top: 0px !important;
	position: absolute;
	top:80px;
	left:60px;
}

#responsive-sale {
	margin-left: 0px !important;
	padding-top: 0px !important;
	position:absolute;
	top:83px;
	left:120px;
}

#responsive-pay {
	margin-left: 0px !important;
	padding-top: 0px !important;
	position:absolute;
	top:83px;
	left:180px;
}

.service-3 img {
	margin-left: 43px;
	padding-top:57px;
}

.service-4 img {
	margin-left: 33px;
	padding-top:17px;
}

.service-5 img {
	margin-left: 60px;
	padding-top:19px;
}

.service-6 img {
	margin-left: 0px;
	padding-top:0px;
}

#section3-bottom .service h3 {
	font-family: 'Lato';
	text-shadow: none;

	width:100%;
	text-shadow: 2px 2px #231f20;
}

#services-wrapper {
	margin:0px auto;
	width:960px;
	overflow:hidden;
}

#section4 {
	height: 350px;
	overflow:hidden;
}

#section4-inner {
	width:400px;
	margin:0 auto;
	text-align:center;
}

#section4-inner .text {
	/*text-align: justify;*/
	display: block;
	width:400px;
	font-size:18pt;
	font-weight: 100;
	padding: 40px 20px;
	background: rgba(0,0,0, 0.6);
	vertical-align: middle;
	margin:0 auto;
	color: white;
	font-family: 'Lato';
}

#section4-inner .blue {
	color: #33a7e5;
	font-weight: 400;
}


#section5 {
	background: #1c3350; /* Old browsers #111111 */
	background: -moz-linear-gradient(top,  #1c3350 0%, #111111 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1c3350), color-stop(100%,#111111)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #1c3350 0%,#111111 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #1c3350 0%,#111111 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #1c3350 0%,#111111 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #1c3350 0%,#111111 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1c3350', endColorstr='#111111',GradientType=0 ); /* IE6-9 */
	overflow:hidden;
}

#section5-inner {
	width:960px;
	margin:0 auto;
}

#section5-inner h2 {
	font-size: 48pt;
}

.portfolio-item {
	width:291px;
	height: 199px;
	margin: 0px 40px 20px 0px;
	background: #000000;
	float:left;
	position:relative;
	overflow:hidden;
}

.portfolio-item a {
	width:100%;
	height:100%;
	display:block;
}

.portfolio-item .portfolio-overlay {
	position:absolute;
	top:199px;
	left:0px;
	width:100%;
	height:100%;
	background: rgba(0,0,0,0.8);
	opacity:0;
	-webkit-transition: all 0.3s ease-out; /* For Safari 3.1 to 6.0 */
    transition: all 0.3s ease-out;
	cursor:pointer;
}

.portfolio-item:hover .portfolio-overlay {
	opacity:1;
	top:0px;
}

.portfolio-item .portfolio-overlay img {
	width:32px;
	height:32px;
	display:block;
	margin:83px auto 0px auto;
}

.portfolio-item img {
	width:100%;
	height: 100%;
}

.portfolio-3, .portfolio-6, .portfolio-9 {
	margin-right:0px;
}

#section6 {
	background: #111111;
}

#section6-top {
	margin-top:100px;
	height: 261px;
	width:100%;
	position:relative;
}

#section6-top .overlay {
	z-index: 1;
}

#section6-bottom h2 {
	font-family: 'Lato';
	font-weight: 100;
	font-size: 40px;
}

#contact-form {
	padding:0;
	width:960px;
	margin:0 auto;
	padding-bottom: 40px;
	position: relative;
}

#recaptcha {
	position: relative;
	left: calc(50% - 160px);
}

#captcha-form {
	display:none;
	background: #111111;
}


#contact-form input, #contact-form textarea {
	border:0;
	padding:5px;
	margin:0;
	background:none;
	font-family: 'Lato';
	font-size:18pt;
	font-weight: 100;
	border-bottom: 1px solid #0088e6;
	color:white;
}

#contact-form #submit-form {
	border: 1px solid #0088e6;
	padding: 5px;
	width:200px;
	height:50px;
	margin: 0px auto;
	display:block;
	background: none;
	color: white;
	cursor: pointer;
}

#captcha-form #captcha-submit {
	border: 1px solid #0088e6;
	padding: 5px;
	width:200px;
	height:50px;
	margin: 10px auto;
	display:block;
	background: none;
	color: white;
	cursor: pointer;
}

#contact-form #name {
	width: 90%;
}

#contact-form #name {
	width: calc(100% - 10px);
}


#contact-form #phone {
	width: 45%;
	margin-right: calc(10% - 25px);
}

#contact-form #email {
	width: 45%;
}

#contact-form textarea {
	border: 1px solid #0088e6;
	width: calc(100% - 12px);
	height: 214px;
	resize: none;
	margin-top:30px;
}

#contact-info {
	float:left;
	font-family: 'Lato';
	font-size:26pt;
	font-weight:400;
	color:white;
	width:100%;
	text-align:center;
	margin-bottom:10px;
}

#contact-info .phone {
	text-decoration:none;
	color: #28d600;
}

#contact-info .email {
	text-decoration:none;
	color: #be0059;
}

#contact-info a:hover {
	color: white;
}

#footer {
	width: 100%;
	height: 100px;
	background: #111111;
}

#footer object {
	pointer-events: none;
}

#footer-inner {
	width: 192px;
	height:64px;
	padding-top:18px;
	margin:0px auto;
}

#footer-inner a {
	float:left;
}

#facebook-link {
	margin-right:64px;
}

#show-nav {
	display:none;
	width:64px;
	height:64px;
	float:right;
	padding-top: 5px;
	padding-bottom: 10px;
	padding-right: 10px;
	cursor:pointer;
}

/*Placeholder colour*/
::-webkit-input-placeholder { /* WebKit browsers */
    color:    #fff;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #fff;
    opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #fff;
    opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #fff;
}

/*Media Queries*/
@media screen and (min-width: 1057px) {
	#header ul {

	}
}
/* for 1056px or less - 2 columns*/
@media screen and (max-width: 1056px) and (min-width: 721px) {

	/* Top columns */

	#section2-inner {
		width: 630px;
		height: 100%;
		margin:0px auto;
	}

	.package {
		margin: 0 10px 0 0;
	}

	.package-2 {
		margin-right:0px;
	}

	.package-3 {
		margin: 20px auto;
		width: 630px;
		position: relative;
	}

	.package-3 .package-inner, .package-3 .package-top, .package-3 .package-bottom {
		width: 606px;
	}

	/*Enable all corner borders */

	.package-1 .package-top,
	.package-1 .package-bottom {
		border-right: 0px solid #be0059;
	}

	.package-1 .package-right {
		border-top: 0px solid #be0059;
		border-bottom: 0px solid #be0059;
	}

	.package-2 .package-top,
	.package-2 .package-bottom {
		border-left: 0px solid #28d600;
		border-right: 2px solid #28d600;
		left:12px;
	}


	.package-2 .package-left {
		border-top: 0px solid #28d600;
		border-bottom: 0px solid #28d600;
	}

	.package-2 .package-right {
		border-top: 2px solid #28d600;
		border-bottom: 2px solid #28d600;
	}

	.package-3 .package-top,
	.package-3 .package-bottom {
		border-left: 2px solid #0086e4;
		border-right: 2px solid #0086e4;
		left: 10px;
	}

	.package-3 .package-left {
		border-top: 2px solid #0086e4;
		border-bottom: 2px solid #0086e4;
	}

	/*Services columns */

	#colour-tree {
		display:none;
	}

	#services-wrapper {
		width:625px;
	}

	.service-2, .service-4, .service-6 {
		margin-right:0 !important;
	}

	.service-seperator {
		display:none;
	}

	.service-3 {
		margin-right: 45px !important;
		clear:left;
	}

	/*Portfolio*/

	#section5-inner {
		width: 622px;
	}

	.portfolio-3, .portfolio-5, .portfolio-7  {
		margin-right:40px;
	}

	.portfolio-2, .portfolio-4, .portfolio-6, .portfolio-8	{
		margin-right:0px;
	}

	.portfolio-9 {
		margin-left:165px;
	}

	/*Contact Form*/
	#contact-form {
		width:630px;
	}

}

/* for 720px or less - 1 column */
@media screen and (max-width: 720px) {

	#section2-inner {
		width: 310px;
		margin:0px auto;
	}

	#section2-inner h2 {
		font-size:32pt;
	}
	.section, #header {
		min-width: 465px;
	}

	.package-1 {
		width: 310px;
		margin: 0;
	}

	.package-2 {
		margin:20px 0;
	}

	.package-3 {
		margin: 0;
		width: 310px;
	}

	.package-3 .package-inner, .package-3 .package-top, .package-3 .package-bottom {
		width: 286px;
	}

	.package-3 .package-inner, .package-3 .package-top, .package-3 .package-bottom {

	}

	.package-1 .package-bottom {
		border-left:2px solid #be0059;
		border-right:2px solid #be0059;
	}

	.package-1 .package-left {
		border-bottom:2px solid #be0059;
		border-top:2px solid #be0059;
	}

	.package-1 .package-right {
		border-bottom:2px solid #be0059;
		border-top:2px solid #be0059;
	}

	.package-1 .package-top {
		border-left:2px solid #be0059;
		border-right:2px solid #be0059;
	}


	.package-2 .package-bottom,
	.package-2 .package-top {
		border-left:2px solid #28d600;
		border-right:2px solid #28d600;
		left:10px;
	}

	.package-2 .package-left, .package-2 .package-right {
		border-bottom:2px solid #28d600;
		border-top:2px solid #28d600;
	}

	.package-3 .package-bottom,
	.package-3 .package-top {
		border-left:2px solid #0086e4;
		border-right:2px solid #0086e4;
		left:10px;
	}

	.package-3 .package-left, .package-3 .package-right {
		border-bottom:2px solid #0086e4;
		border-top: 2px solid #0086e4;
	}

	/*Services columns */

	#colour-tree {
		display:none;
	}

	#services-wrapper {
		width:290px;
	}

	.service {
		margin-right:0 !important;

	}

	.right-service {
		margin-left:0 !important;
	}

	/*Portfolio*/
	#section5-inner {
		width: 291px;
	}

	.portfolio-item{
		margin-right:0px;
	}

	/*Contact Form*/
	#contact-form {
		width:310px;
	}

	/*Nav*/

	#header {
		overflow:hidden;
		height: auto;
	}

	#show-nav {
		display: block;
	}

}

/* for 480px or less */
@media screen and (max-width: 480px) {

}

/*From fancybox.css*/

/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp
{
	padding: 0;
	margin: 0;
	border: 0;
	outline: none;
	vertical-align: top;
}

.fancybox-wrap {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 8020;
}

.fancybox-skin {
	position: relative;
	background: #f9f9f9;
	color: #444;
	text-shadow: none;
	-webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
	        border-radius: 4px;
}

.fancybox-opened {
	z-index: 8030;
}

.fancybox-opened .fancybox-skin {
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}

.fancybox-outer, .fancybox-inner {
	position: relative;
}

.fancybox-inner {
	overflow: hidden;
}

.fancybox-type-iframe .fancybox-inner {
	-webkit-overflow-scrolling: touch;
}

.fancybox-error {
	color: #444;
	font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin: 0;
	padding: 15px;
	white-space: nowrap;
}

.fancybox-image, .fancybox-iframe {
	display: block;
	width: 100%;
	height: 100%;
}

.fancybox-image {
	max-width: 100%;
	max-height: 100%;
}

#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
	background-image: url('<?php echo $baseURL; ?>img/fancybox/fancybox_sprite.png');
}

#fancybox-loading {
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -22px;
	margin-left: -22px;
	background-position: 0 -108px;
	opacity: 0.8;
	cursor: pointer;
	z-index: 8060;
}

#fancybox-loading div {
	width: 44px;
	height: 44px;
	background: url('<?php echo $baseURL; ?>img/fancybox/fancybox_loading.gif') center center no-repeat;
}

.fancybox-close {
	position: absolute;
	top: -18px;
	right: -18px;
	width: 36px;
	height: 36px;
	cursor: pointer;
	z-index: 8040;
}

.fancybox-nav {
	position: absolute;
	top: 0;
	width: 40%;
	height: 100%;
	cursor: pointer;
	text-decoration: none;
	background: transparent url('<?php echo $baseURL; ?>img/fancybox/blank.gif'); /* helps IE */
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	z-index: 8040;
}

.fancybox-prev {
	left: 0;
}

.fancybox-next {
	right: 0;
}

.fancybox-nav span {
	position: absolute;
	top: 50%;
	width: 36px;
	height: 34px;
	margin-top: -18px;
	cursor: pointer;
	z-index: 8040;
	visibility: hidden;
}

.fancybox-prev span {
	left: 10px;
	background-position: 0 -36px;
}

.fancybox-next span {
	right: 10px;
	background-position: 0 -72px;
}

.fancybox-nav:hover span {
	visibility: visible;
}

.fancybox-tmp {
	position: absolute;
	top: -99999px;
	left: -99999px;
	visibility: hidden;
	max-width: 99999px;
	max-height: 99999px;
	overflow: visible !important;
}

/* Overlay helper */

.fancybox-lock {
    overflow: hidden !important;
    width: auto;
}

.fancybox-lock body {
    overflow: hidden !important;
}

.fancybox-lock-test {
    overflow-y: hidden !important;
}

.fancybox-overlay {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	display: none;
	z-index: 8010;
}

.fancybox-overlay-fixed {
	position: fixed;
	bottom: 0;
	right: 0;
}

.fancybox-lock .fancybox-overlay {
	overflow: auto;
	overflow-y: scroll;
}

/* Title helper */

.fancybox-title {
	visibility: hidden;
	font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	position: relative;
	text-shadow: none;
	z-index: 8050;
}

.fancybox-title a {
	color: #0086e4;
}

.fancybox-title a:hover {
	color: #be0059;
}

.fancybox-opened .fancybox-title {
	visibility: visible;
}

.fancybox-title-float-wrap {
	position: absolute;
	bottom: 0;
	right: 50%;
	margin-bottom: -35px;
	z-index: 8050;
	text-align: center;
}

.fancybox-title-float-wrap .child {
	display: inline-block;
	margin-right: -100%;
	padding: 2px 20px;
	background: transparent; /* Fallback for web browsers that doesn't support RGBa */
	background: rgba(0, 0, 0, 0.8);
	-webkit-border-radius: 15px;
	   -moz-border-radius: 15px;
	        border-radius: 15px;
	text-shadow: 0 1px 2px #222;
	color: #FFF;
	font-weight: bold;
	line-height: 24px;
	white-space: nowrap;
}

.fancybox-title-outside-wrap {
	position: relative;
	margin-top: 10px;
	color: #fff;
}

.fancybox-title-inside-wrap {
	padding-top: 10px;
}

.fancybox-title-over-wrap {
	position: absolute;
	bottom: 0;
	left: 0;
	color: #fff;
	padding: 10px;
	background: #000;
	background: rgba(0, 0, 0, .8);
}

/*Retina graphics!*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   only screen and (min--moz-device-pixel-ratio: 1.5),
	   only screen and (min-device-pixel-ratio: 1.5){

	#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
		background-image: url('<?php echo $baseURL; ?>img/fancybox/fancybox_sprite@2x.png');
		background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
	}

	#fancybox-loading div {
		background-image: url('<?php echo $baseURL; ?>img/fancybox/fancybox_loading@2x.gif');
		background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
	}
}
