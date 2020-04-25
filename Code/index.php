<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/register.inc.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
    $uname = $_SESSION['username'];
} else {
    $logged = 'out';
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--POPUP CODE GOES HERE-->
<head>
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	 $(window).load(function(){       
   setInterval(function(){ $('#myModal').modal('show'); }, 10000);
    }); 
</script>
</head>
<body>
	<div class="container">
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
        		<div class="modal-content">
           			 <div class="modal-header">
    <!-- Modal content-->
    <div class="modal-content">
      	<div class="modal-header">
      	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       	 <h4 class="modal-title">SWAR RANG 2018</h4>
      </div>
      <div class="modal-body">
        <p>Register Soon!!!!!!</p>

      </div>
      		<div class="modal-footer">
      			<div class="col-12 col-sm-6 col-md-6">
      			<form action="https://goo.gl/forms/lbBwrUwHcsEHHiAy2" class="wpcf7-form wpcf7-style-1" enctype="multipart/form-data" novalidate="novalidate">
       			 <button type="submit" class="wpcf7-form-control btn btn-primary btn-lg btn btn-primary style-2">Enroll Now</button>
        		<button type="button" class="wpcf7-form-control btn btn-primary btn-lg btn 	btn-primary style-2" data-dismiss="modal">Close</button>
    			</div>
				</form>
			</div>
 	 	</div>
	</div>
	</div>
</div>
</div>
</body>
<!--end here->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://ttdemo2.wpengine.com/yogax/xmlrpc.php">
    <title>Home</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Yogax  &raquo; Feed" href="http://ttdemo2.wpengine.com/yogax/feed/" />
<link rel="alternate" type="application/rss+xml" title="Yogax  &raquo; Comments Feed" href="http://ttdemo2.wpengine.com/yogax/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/ttdemo2.wpengine.com\/yogax\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.6"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">

.subscribe_form {
  text-align: center;
}

  .w3-top-right  input[type=text] {
    border: 1px solid ##FFFFFF;  
  }
}
.site-wrapper.full-width {
    width: 100%;
}
*, :after, :before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.3.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='font-awesome-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='yogax-streamline-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/yogax-streamline.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='iconsmind-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/iconsmind.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='ttbase-framework-font-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/ttbase-font.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='ttbase-framework-plugins-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/plugins.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='ttbase-framework-shortcodes-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/shortcodes.min.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='yogax-fonts-css'  href='https://fonts.googleapis.com/css?family=Source%2BSans%2BPro%3A400%2C400i%2C600%2C700%7CQuicksand%3A400%2C700%7CMerriweather%3A400%2C400i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='yogax-theme-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/css/theme.min.css?ver=1.1.0' type='text/css' media='all' />
<style id='yogax-theme-inline-css' type='text/css'>

/* WP Customizer start */
.logo-wrapper img { width: ; }
.navigation { padding-top: 0; }
.navigation { padding-bottom: 0; }

.header-top-full .navigation, .header-top-boxed .navigation, .header-boxed .boxed-wrapper, .header-stacked .navigation .menubar { background-color: #ffffff; }
.header-border .navigation { border-bottom-color: rgba(67,78,95,0.16); }
.sticky-nav { background-color: #ffffff; }
.header-stacked .navigation .topbar { background-color: #262d38; }
.nav-menu li a, .header-search .search i, .header-cart .cart i, .header-language .menu .has-dropdown a, .header-language .menu .has-dropdown i, .header-transparent-full .sticky-nav.scrolled .nav-menu > ul > li > a, .header-transparent-boxed .sticky-nav.scrolled .nav-menu > ul > li > a, .header-transparent-full .sticky-nav.scrolled .header-search .search i, .header-transparent-boxed .sticky-nav.scrolled .header-search .search i, .header-transparent-full .sticky-nav.scrolled .header-cart .cart i, .header-transparent-full .sticky-nav.scrolled .header-language .menu .has-dropdown a, .header-transparent-full .sticky-nav.scrolled .header-language .menu .has-dropdown i, .header-transparent-boxed .sticky-nav.scrolled .header-cart .cart i, .header-transparent-boxed .sticky-nav.scrolled .header-language .menu .has-dropdown a, .header-transparent-boxed .sticky-nav.scrolled .header-language .menu .has-dropdown i { color: #434e5f; }
.header-transparent-full .nav-menu > ul > li > a, .header-transparent-boxed .nav-menu > ul > li > a, .header-transparent-full .header-search .search i, .header-transparent-boxed .header-search .search i, .header-transparent-full .header-cart .cart i, .header-transparent-full .header-language .menu .has-dropdown a, .header-transparent-full .header-language .menu .has-dropdown i, .header-transparent-boxed .header-cart .cart i, .header-transparent-boxed .header-language .menu .has-dropdown a, .header-transparent-boxed .header-language .menu .has-dropdown i { color: #434e5f; }
.nav-menu>ul>li>a:hover { color: #e24886; }
.no-dash .nav-menu > ul > li.active > a, .nav-menu > ul > li.active > a:after, .nav-menu > ul > li > a:hover:after { color: #e24886; }
.nav-menu ul li.no-mega-menu .second-lvl>ul>li, .nav-menu ul li.no-mega-menu .second-lvl>ul>li>ul>li, .nav-menu li.mega-menu .second-lvl, .nav-menu li.no-mega-menu .second-lvl, .nav-menu ul li.no-mega-menu .second-lvl>ul>li>ul { background-color: #ffffff; }
.nav-menu li .second-lvl, .nav-menu li.mega-menu .second-lvl, .nav-menu li.no-mega-menu .second-lvl, .nav-menu ul li.no-mega-menu .second-lvl>ul>li>ul { border-bottom-color: #e24886; }
.nav-menu ul ul li a, .nav-menu li.mega-menu .second-lvl ul li:last-child a, .nav-menu ul li.no-mega-menu .second-lvl>ul>li a { border-bottom-color: #e3edf6; }
.nav-menu li.mega-menu .second-lvl ul li.menu-title>a { color: #e24886; }
.nav-menu ul ul li a, .header-transparent-boxed .nav-menu ul ul li a, .header-transparent-full .nav-menu ul ul li a { color: #434e5f; }
.nav-menu ul ul li a:hover { color: #e24886; }
.nav-menu li.mega-menu .second-lvl ul li a:before { background-color: #e24886; }
.nav-menu ul li.no-mega-menu .second-lvl>ul>li a:hover { border-color: #e24886; }
.nav-menu ul ul li.active > a { color: #e24886; }
#mobile-header { background-color: #ffffff; }
#mobile-navigation { background-color: #ffffff; }
#mobile-navigation-btn, #mobile-shopping-btn { color: #e24886; }
#mobile-navigation ul li a { color: #434e5f; }
#mobile-navigation ul li a:hover, #mobile-navigation ul li a:hover .fa, #mobile-navigation li.open > a, #mobile-navigation ul li.current-menu-item > a, #mobile-navigation ul li.current-menu-ancestor > a, #mobile-navigation li.open > a .fa { color: #e24886; }
#mobile-navigation ul li a { border-bottom-color: #e3edf6; }
.background.color { background-color: #ebf3f9; }
.header_text_wrapper h1 { color: #434e5f; }
.background .separator { border-color: #434e5f; }
.header_text_wrapper .subtitle { color: #e24886; }
.breadcrumb li a, .breadcrumb>li+li:before { color: #e24886; }
.breadcrumb li a:hover { color: #e24886; }
.breadcrumb>.active { color: #434e5f; }
.share-button .post-sharing { background: #2c3449; }
.share-button .post-sharing li { border-color: #ababab; }
.share-button .post-sharing li a { color: #ababab; }
.share-button .post-sharing li:hover { border-color: #e24886; }
.share-button .post-sharing li:hover a { color: #e24886; }
body { background-color: #ffffff; }
body { background-image: url(""); }
.primary-color, .vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-list .vc_tta-tab.vc_active a, .vc_tta.vc_general .vc_tta-panel.vc_active .vc_tta-panel-title>a, .vc_general.vc_tta .vc_tta-panel.vc_active .vc_tta-panel-heading:hover, .vc_general.vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a, .vc_general.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a, .blog-normal .content-wrap .entry-posted-on, .ttbase-recent-posts-entry-posted-on, .icons-tabs .active .tab-title, .icons-tabs .active .tab-title i, .icons-tabs .tab-title:hover, .icons-tabs .tab-title:hover i, .text-tabs .active .tab-title, .ttbase-icon-box-icon, .ttbase-icon-box-one .ttbase-icon-box-one-icon, .ttbase-icon-box-one-img-alt, .ttbase-icon-box-two .ttbase-icon-box-two-icon, .ttbase-icon-box-three .ttbase-icon-box-three-icon, .ttbase-icon-box-four .ttbase-icon-box-four-icon, .ttbase-icon-box-five .ttbase-icon-box-five-icon, .ttbase-icon-box-seven .ttbase-icon-box-seven-icon, .comment-list .author-name, cite, .ttbase-testimonial-carousel .testimonial-quote:before, .ttbase-testimonial-carousel .testimonial-quote:after, .widget .twitter-feed .slides li:before, .owl-theme .owl-nav .owl-next:hover:after, .owl-theme .owl-nav .owl-prev:hover:after, .btn-primary.color-3, .ttbase-pricing-table .price, .products li .price, .product .price, .quantity .input-group-btn button.btn, .woocommerce-tabs > ul > li a:hover, .woocommerce-tabs > ul > li.active a, .star-rating:before, .star-rating span, #reviews .comment-text .star-rating span, p.stars a, p.stars a.star-1:after, p.stars a.star-2:after, p.stars a.star-3:after, p.stars a.star-4:after, p.stars a.star-5:after, .header-cart .woocommerce-Price-amount, .timetable-tabs.ui-tabs .ui-tabs-nav li.ui-tabs-active a, .timetable-tabs.ui-tabs .ui-tabs-nav li a:hover { color: #e24886; }
h2:after, .ttbase-heading-single-line:after, .vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-list .vc_tta-tab.vc_active a, .vc_general.vc_tta .vc_tta-panel.vc_active .vc_tta-panel-heading, .vc_general.vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading, .vc_general.vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading:hover, .vc_tta.vc_general .vc_tta-panel.vc_active .vc_tta-panel-title .vc_tta-controls-icon:before, .vc_general.vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading:hover, .vc_general.vc_tta .vc_tta-panel.vc_active .vc_tta-panel-heading:hover, .blog-normal .content-wrap .entry-posted-on, input[type=text]:focus, input[type=email]:focus, input[type=tel]:focus, input[type=date]:focus, input[type=number]:focus, textarea:focus, select:focus, input[type=password]:focus, button, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span, .btn-primary.color-3, .btn-primary.style-2.color-3, .btn-primary.color-4:hover, .btn-primary.style-2.color-4:hover, p.stars a, p.stars a.star-1:after, p.stars a.star-2:after, p.stars a.star-3:after, p.stars a.star-4:after, p.stars a.star-5:after, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle { border-color: #e24886; }
.vc_general.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a, .woocommerce-tabs > ul > li.active a, .timetable-tabs.ui-tabs .ui-tabs-nav li.ui-tabs-active a:after, .timetable-tabs.ui-tabs .ui-tabs-nav li a:hover:after { border-bottom-color: #e24886; }
.primary-background, .widget .overlay, .ttbase-icon-box-six, .ttbase-pricing-table.emphasis, .text-tabs .tab-title:after, .content-link a:hover, .owl-theme .owl-dots .owl-dot:hover span, .btn-primary.style-2.color-3, .btn-primary.color-4:hover, .btn-primary.style-2.color-4:hover, .ttbase-skillbar-bar, .woocommerce .products .onsale, .product .onsale, p.stars a:hover, p.stars a.active, p.stars a.active:after, .woocommerce-message, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range { background-color: #e24886; }
.secondary-color, .ttbase-icon-box-six .ttbase-icon-box-six-icon, .btn-primary.color-4, .woocommerce-tabs > ul > li a, .woocommerce table.shop_table th, .woocommerce-page table.shop_table th, .woocommerce table.shop_table td.actions, .woocommerce table.cart a.remove, .woocommerce-page table.cart a.remove, .woocommerce #content table.cart a.remove, .woocommerce-page #content table.cart a.remove, .ttbase-latest-blog .blog-item .blog-item-description .post-date { color: #2c3449; }
.secondary-background, .btn-primary.color-3:hover, .btn-primary.style-2.color-3:hover, .btn-primary.style-2.color-4, .woocommerce table.cart a.remove:hover, .woocommerce-page table.cart a.remove:hover, .woocommerce #content table.cart a.remove:hover, .woocommerce-page #content table.cart a.remove:hover { background-color: #2c3449; }
.btn-primary.color-3:hover, .btn-primary.style-2.color-3:hover, .btn-primary.color-4, .btn-primary.style-2.color-4 { border-color: #2c3449; }
.accent-color { color: #ebf3f9; }
.accent-background, .ttbase-pricing-table.boxed, .table-style-1 tr:nth-child(even), .content-link a, blockquote, .vc_general.vc_tta .vc_tta-panel .vc_tta-panel-heading:hover, .content-link a, .quantity .input-text, .variations_form table, #reviews li .comment-text, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content { background-color: #ebf3f9; }
body { color: #2e323f; }
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 { color: #2c3449; }
a, .share-content .share-button, .comment-list .icon-reply, .products .button.add_to_cart_button, .woocommerce .widget_price_filter .button, .woocommerce .widget_layered_nav li.chosen a, .woocommerce .widget_product_categories > ul > li.current-cat > a, .woocommerce .widget_product_categories > ul > li.current-cat:after, .read-more-link i, .ttbase-latest-blog .blog-item h5 a, .content-wrap .entry-title a, .ttbase-recent-posts-entry-title a { color: #e24886; }
a:focus, a:hover, a:active, .widget ul li a:before, .products .button.add_to_cart_button:before, .products .button.add_to_cart_button:hover, .woocommerce .widget_price_filter .button:before, .woocommerce .widget_price_filter .button:hover, .content-wrap .entry-title a:hover, .ttbase-recent-posts-entry-title a:hover, .ttbase-latest-blog .blog-item h3 a:hover, .ttbase-latest-blog .blog-item h5 a:hover { color: #2c3449; }
.btn-primary, .menu-button, gform_button, .woocommerce input.button.alt { border-radius: 36px !important; }
.btn-primary, input[type=submit], .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary:active.focus, .btn-primary:active:focus, .menu-button, .menu-button.active.focus, .menu-button.active:focus, .menu-button:active.focus, .menu-button:active:focus, .gform_button, .gform_button.active.focus, .gform_button.active:focus, .gform_button:active.focus, .gform_button:active:focus, .woocommerce input.button.alt, .btn-primary.color-2:hover, .btn-primary.style-2.color-2:hover, .btn-primary.style-2 { border-color: #e24886; }
.btn-primary, .gform_button, input[type=submit], .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary:active.focus, .btn-primary:active:focus, .gform_button.active.focus, .gform_button.active:focus, .gform_button:active.focus, .gform_button:active:focus, .menu-button a, .header-transparent-full .nav-menu li.menu-button a, .header-transparent-boxed .nav-menu li.menu-button a, .header-transparent-full .sticky-nav.scrolled .nav-menu li.menu-button a, .header-transparent-boxed .sticky-nav.scrolled .nav-menu li.menu-button a, .menu-button a.active.focus, .menu-button a.active:focus, .menu-button a:active.focus, .menu-button a:active:focus, .woocommerce input.button.alt { color: #e24886; }
.btn-primary.style-2, .gform_button.style-2, .nav-menu li.menu-button.style-2, .btn-primary.style-2.active.focus, .btn-primary.style-2.active:focus, .btn-primary.style-2:active.focus, .btn-primary.style-2:active:focus, .gform_button.style-2.active.focus, .gform_button.style-2.active:focus, .gform_button.style-2:active.focus, .gform_button.style-2:active:focus, .btn-primary.color-2:hover, .btn-primary.style-2.color-2:hover { background-color: #e24886; }
.btn-primary:hover, .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary.style-2:hover, .btn-primary.style-2.active, .btn-primary.style-2.focus, .btn-primary.style-2:active, .btn-primary.style-2:focus, .btn-primary[disabled]:hover, .btn-primary.style-1[disabled]:hover, .menu-button:hover, .nav-menu li.menu-button.style-2:hover, .header-transparent-full .sticky-nav.scrolled .nav-menu li.menu-button.style-2:hover, .header-transparent-boxed .sticky-nav.scrolled .nav-menu li.menu-button.style-2:hover, .menu-button:focus, .menu-button:active, .gform_button:hover, .gform_button:focus, .gform_button:active, .woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .btn-primary.style-2.color-2 { background-color: #2c3449; }
.btn-primary:hover, .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary.style-2:hover, .btn-primary.style-2.active, .btn-primary.style-2.focus, .btn-primary.style-2:active, .btn-primary.style-2:focus, .menu-button:hover, .menu-button:focus, .menu-button:active, .nav-menu li.menu-button.style-2:hover, .header-transparent-full .sticky-nav.scrolled .nav-menu li.menu-button.style-2:hover, .header-transparent-boxed .sticky-nav.scrolled .nav-menu li.menu-button.style-2:hover, .gform_button:hover, .gform_button:focus, .gform_button:active, .btn-primary[disabled]:hover, .woocommerce input.button.alt:hover, .woocommerce input.button.alt:active, .woocommerce input.button.alt:focus, .btn-primary.color-2, .btn-primary.style-2.color-2 { border-color: #2c3449; }
.btn-primary.color-2 { color: #2c3449; }
.btn-primary.style-2, .header-transparent-boxed .nav-menu li.menu-button.style-2 a, .nav-menu li.menu-button.style-2 a, .header-transparent-full .nav-menu li.menu-button.style-2 a, .header-transparent-full .sticky-nav.scrolled .nav-menu li.menu-button.style-2 a, .header-transparent-boxed .sticky-nav.scrolled .nav-menu li.menu-button.style-2 a { color: #ffffff; }
.btn-primary:hover, .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .gform_button:hover, .gform_button.active, .gform_button.focus, .gform_button:active, .gform_button:focus, .woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button.alt:active { color: #ffffff; }
.btn-primary.style-3 { background: linear-gradient(to right, #e24886, #bc2260); }
#go-top { background-color: #e24886; }
#go-top:hover { background-color: #2c3449; }
#go-top { border-radius: 34px; }
.modal-screen { background: #202229; }
.site-footer { background-color: #2c3449; }
footer { background-image: url("http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/uploads/sites/4/2017/02/yogax_footerbg.png"); }
footer { background-size: 100% 100%; }
footer { background-repeat: repeat-y; }
.top-footer-container { border-top-color: #ef4a8d; }
.site-footer .widget .title { color: #434e5f; }
.site-footer .widget .title:after { border-color: #e24886; }
.site-footer { color: #686868; }
footer .widget ul li a, .footer-bottom-right-content .menu li a { color: #e24886; }
footer .widget ul li a:hover, footer .widget ul li a:before, footer .widget .tagcloud a:hover, .footer-bottom-right-content .menu li.current_page_item a, .footer-bottom-right-content .menu li:hover a { color: #e24886; }
.footer-bottom-right-content .menu li.current_page_item, .footer-bottom-right-content .menu li:hover { border-color: #e24886; }
.site-footer .current_page_item a { color: #e24886; }
.site-footer .current_page_item a:after, .site-footer .current_page_item a:hover:after { background-color: #e24886; }
.widget ul li { border-color: #232838; }
.bottom-footer-container { border-top-color: #232838; }
.timetable .row_gray { background-color: #ebf3f9; }
.timetable tbody tr { background-color: #ffffff; }
.timetable tbody tr { border-top-color: #dfdfdf; }
.timetable td { color: #2c3449; }
.timetable th { color: #2c3449; }
.timetable .event { background-color: #2c3449; }
.timetable .event:hover, .timetable .event.tooltip:hover { background-color: #e24886; }
.timetable .event a { color: #e24886; }
.timetable .event.tooltip:hover a, .timetable .event:hover a { color: #2c3449; }
.timetable .event { color: #ffffff; }
.timetable .event:hover, .timetable .event.tooltip:hover { color: #ffffff; }
.social-icon-widget ul.dark li a { color: #abb0be; }
.social-icon-widget ul.dark li { background-color: ; }
.social-icon-widget ul.dark li { border-color: #343c54; }
.social-icon-widget ul.dark li:hover a { color: #e24886; }
.social-icon-widget ul.dark li:hover { background-color: ; }
.social-icon-widget ul.dark li:hover { border-color: #e24886; }
.social-icon-widget ul.color li a { color: #e24886; }
.social-icon-widget ul.color li { background-color: ; }
.social-icon-widget ul.color li { border-color: #e24886; }
.social-icon-widget ul.color li:hover a { color: #2c3449; }
.social-icon-widget ul.color li:hover { background-color: #e24886; }
.social-icon-widget ul.color li:hover { border-color: #e24886; }
.wpcf7-style-1 label { color: #2c3449; }
.wpcf7-style-1 .wpcf7-select, .wpcf7-style-1 .wpcf7-textarea, .wpcf7-style-1 .wpcf7-text, .wpcf7-style-1 .wpcf7-date, .wpcf7-style-1 .bootstrap-filestyle, .wpcf7-style-1 .bootstrap-filestyle .form-control, .wpcf7-style-1 .checkbox-option .outer, .wpcf7-style-1 .radio-option .outer { background: #ffffff; }
.wpcf7-style-1 .wpcf7-select, .wpcf7-style-1 .wpcf7-textarea, .wpcf7-style-1 .wpcf7-text, .wpcf7-style-1 .wpcf7-date, .wpcf7-style-1 .bootstrap-filestyle, .wpcf7-style-1 .bootstrap-filestyle .form-control, .wpcf7-style-1 .checkbox-option .outer, .wpcf7-style-1 .radio-option .outer { border-color: #e0e0e0; }
.wpcf7-style-1 .wpcf7-select, .wpcf7-style-1 .wpcf7-textarea, .wpcf7-style-1 .wpcf7-text, .wpcf7-style-1 .wpcf7-date, .wpcf7-style-1 .bootstrap-filestyle, .wpcf7-style-1 .bootstrap-filestyle .form-control, .wpcf7-style-1 .checkbox-option .outer, .wpcf7-style-1 .radio-option .outer, .wpcf7-style-1 .checkbox-option .inner, .wpcf7-style-1 .radio-option .inner { border-radius: 0px; }
.wpcf7-style-1 .wpcf7-select:focus, .wpcf7-style-1 .wpcf7-textarea:focus, .wpcf7-style-1 .wpcf7-text:focus, .wpcf7-style-1 .wpcf7-date:focus, .wpcf7-style-1 .bootstrap-filestyle:focus, .wpcf7-style-1 .wpcf7-select.focus, .wpcf7-style-1 .wpcf7-textarea.focus, .wpcf7-style-1 .wpcf7-text.focus, .wpcf7-style-1 .bootstrap-filestyle.focus { border-color: #e24886; }
.wpcf7-style-1 .checkbox-option .inner { background: #ababab; }
.wpcf7-style-1 .checkbox-option.checked .inner, .wpcf7-style-1 .radio-option.checked .inner { background: #e24886; }
.wpcf7-style-2 label { color: #2c3449; }
.wpcf7-style-2 .wpcf7-select, .wpcf7-style-2 .wpcf7-textarea, .wpcf7-style-2 .wpcf7-text, .wpcf7-style-2 .wpcf7-date, .wpcf7-style-2 .bootstrap-filestyle, .wpcf7-style-2 .bootstrap-filestyle .form-control, .wpcf7-style-2 .checkbox-option .outer, .wpcf7-style-2 .radio-option .outer { background: #f2f2f3; }
.wpcf7-style-2 .wpcf7-select, .wpcf7-style-2 .wpcf7-textarea, .wpcf7-style-2 .wpcf7-text, .wpcf7-style-2 .wpcf7-date, .wpcf7-style-2 .bootstrap-filestyle, .wpcf7-style-2 .bootstrap-filestyle .form-control, .wpcf7-style-2 .checkbox-option .outer, .wpcf7-style-2 .radio-option .outer { border-color: #eaeaea; }
.wpcf7-style-2 .wpcf7-select, .wpcf7-style-2 .wpcf7-textarea, .wpcf7-style-2 .wpcf7-text, .wpcf7-style-2 .wpcf7-date, .wpcf7-style-2 .bootstrap-filestyle, .wpcf7-style-2 .bootstrap-filestyle .form-control, .wpcf7-style-2 .checkbox-option .outer, .wpcf7-style-2 .radio-option .outer, .wpcf7-style-2 .checkbox-option .inner, .wpcf7-style-2 .radio-option .inner { border-radius: 0px; }
.wpcf7-style-2 .wpcf7-select:focus, .wpcf7-style-2 .wpcf7-textarea:focus, .wpcf7-style-2 .wpcf7-text:focus, .wpcf7-style-2 .wpcf7-date:focus, .wpcf7-style-2 .bootstrap-filestyle:focus, .wpcf7-style-2 .wpcf7-select.focus, .wpcf7-style-2 .wpcf7-textarea.focus, .wpcf7-style-2 .wpcf7-text.focus, .wpcf7-style-2 .bootstrap-filestyle.focus { border-color: #e24886; }
.wpcf7-style-2 .checkbox-option .inner { background: #ababab; }
.wpcf7-style-2 .checkbox-option.checked .inner, .wpcf7-style-2 .radio-option.checked .inner { background: #e24886; }
.wpcf7-style-3 label { color: #353535; }
.wpcf7-style-3 .wpcf7-select, .wpcf7-style-3 .wpcf7-textarea, .wpcf7-style-3 .wpcf7-text, .wpcf7-style-3 .wpcf7-date, .wpcf7-style-3 .bootstrap-filestyle, .wpcf7-style-3 .bootstrap-filestyle .form-control, .wpcf7-style-3 .checkbox-option .outer, .wpcf7-style-3 .radio-option .outer { background: #ffffff; }
.wpcf7-style-3 .wpcf7-select, .wpcf7-style-3 .wpcf7-textarea, .wpcf7-style-3 .wpcf7-text, .wpcf7-style-3 .wpcf7-date, .wpcf7-style-3 .bootstrap-filestyle, .wpcf7-style-3 .bootstrap-filestyle .form-control, .wpcf7-style-3 .checkbox-option .outer, .wpcf7-style-3 .radio-option .outer { border-color: #d9d9d9; }
.wpcf7-style-3 .wpcf7-select:focus, .wpcf7-style-3 .wpcf7-textarea:focus, .wpcf7-style-3 .wpcf7-text:focus, .wpcf7-style-3 .wpcf7-date:focus, .wpcf7-style-3 .bootstrap-filestyle:focus, .wpcf7-style-3 .wpcf7-select.focus, .wpcf7-style-3 .wpcf7-textarea.focus, .wpcf7-style-3 .wpcf7-text.focus, .wpcf7-style-3 .bootstrap-filestyle.focus { border-color: #e24886; }
.wpcf7-style-3 .checkbox-option .inner { background: #ababab; }
.wpcf7-style-3 .checkbox-option.checked .inner, .wpcf7-style-3 .radio-option.checked .inner { background: #e24886; }
/* WP Customizer end */
</style>
<link rel='stylesheet' id='yogax-font-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/css/ttbase-font.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-smoothness-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/contact-form-7/includes/js/jquery-ui/themes/smoothness/jquery-ui.min.css?ver=1.11.4' type='text/css' media='screen' />
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.3.1'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.3.1'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/js/ttbase-twitter.min.js'></script>
<link rel='https://api.w.org/' href='http://ttdemo2.wpengine.com/yogax/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ttdemo2.wpengine.com/yogax/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://ttdemo2.wpengine.com/yogax/wp-includes/wlwmanifest.xml" /> 
<link rel="canonical" href="http://ttdemo2.wpengine.com/yogax/" />
<link rel='shortlink' href='http://ttdemo2.wpengine.com/yogax/' />
<link rel="alternate" type="application/json+oembed" href="http://ttdemo2.wpengine.com/yogax/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fttdemo2.wpengine.com%2Fyogax%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://ttdemo2.wpengine.com/yogax/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fttdemo2.wpengine.com%2Fyogax%2F&#038;format=xml" />
<!-- Load Google Fonts --><link href="https://fonts.googleapis.com/css?family=Quicksand:300italic,400italic,500italic,600italic,700italic,800italic,400,300,500,600,700,800&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro:300italic,400italic,500italic,600italic,700italic,800italic,400,300,500,600,700,800&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro:300italic,400italic,500italic,600italic,700italic,800italic,400,300,500,600,700,800&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Source%20Sans%20Pro:300italic,400italic,500italic,600italic,700italic,800italic,400,300,500,600,700,800&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic" rel="stylesheet" type="text/css"><!-- Typography CSS --><style type="text/css">body,h1,h2,h3,h4,h5,.header_text_wrapper h1,.header_text_wrapper .subtitle,.btn-primary, .menu-button, .gform_button,.woocommerce input.button.alt,input[type=submit],.icons-tabs .tab-title span,.vc_tta.vc_general .vc_tta-panel-title,.vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-list .vc_tta-tab a,.nav-menu li a,.site-footer .widget .title{font-family:Quicksand;}p, .textwidget{font-family:Source Sans Pro;}.intro{font-weight:300;font-size:20px;line-height:28px;}.x-large .header_text_wrapper h1{font-weight:400;text-transform:none;}.header_text_wrapper .subtitle{font-weight:300;}.large .header_text_wrapper h1{font-weight:400;letter-spacing:-2px;text-transform:none;}.small .header_text_wrapper h1{font-weight:400;text-transform:none;}.x-small .header_text_wrapper h1{font-weight:500;letter-spacing:-1px;text-transform:none;}h2{font-weight:400;font-size:54px;letter-spacing:-2px;text-transform:none;}h3{text-transform:none;}.nav-menu li a{font-weight:600;font-size:16px;}.site-footer p{font-family:Source Sans Pro;}.site-footer ul{font-family:Source Sans Pro;}.btn-primary, .menu-button, .gform_button, .woocommerce input.button.alt, input[type=submit], .nav-menu li.menu-button a{font-weight:700;}</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;					
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>
		<style type="text/css" id="wp-custom-css">
			.top-footer-container {
    border-top: 4px solid #ef4a8d;
}		</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1486548216817{padding-top: 2% !important;}.vc_custom_1485690988563{border-right-width: 5px !important;padding-top: 7% !important;padding-right: 7% !important;padding-bottom: 7% !important;padding-left: 7% !important;background-color: #ffffff !important;border-right-color: #e24886 !important;border-right-style: solid !important;}.vc_custom_1485700134685{padding-top: 6% !important;padding-bottom: 6% !important;}.vc_custom_1485701462406{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485701468442{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485701480468{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485699447965{border-left-width: 5px !important;padding-top: 7% !important;padding-right: 7% !important;padding-bottom: 7% !important;padding-left: 7% !important;background-color: #ffffff !important;border-left-color: #e24886 !important;border-left-style: solid !important;}.vc_custom_1484048067044{padding-top: 6% !important;padding-bottom: 6% !important;}.vc_custom_1484142724950{padding-top: 6% !important;padding-bottom: 6% !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-3253 ttbase-shortcodes  ttbase-shortcodes-responsive wpb-js-composer js-comp-ver-5.4.5 vc_responsive" >

<div id="page" class="site-wrapper full-width header-transparent-full">

    <header id="masthead" class="header transparent full header-border">
    <nav class="navigation v-align" >
        <div class="container-fluid">
            <div class="row v-align">
                
<!-- normal size logo -->
    <div class="logo-wrapper">
        <a href="index.php" id="site-logo" title="AM" rel="home">
                            <img src="images/logo.png" alt="AM" style=" width: 200px" srcset="" class="img-responsive"  />
                    </a>
    </div>
                <!-- Menu -->
                

                
                <div class="col-md-12">       
                    <div class="nav-menu pull-right">
                      <ul id="main-nav" class="menu">
                        <div class="navbar-collapse-right" >
 <ul class="nav navbar-nav navbar-right">
 <li id="1069973405-menu-item-2923" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3253 current_page_item active no-mega-menu" ><a href="index.php" class=""><i class="fa fa-home"></i><b> HOME </b></a></li>
 <li id="162979464-menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="about.php" class=""><i class="fa fa-info"></i><b> ABOUT US </b></a></li>
<!--<li id="162979464-menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="pramoter.php" class=""><i class="fa fa-user"></i><b> PRAMOTER </b></a></li>-->
<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="meditation.php" class=""><i class="fa fa-music"></i><b> MEDITATION</b></a>
<!--<div class="second-lvl"><ul>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="schedule.html" class=""><i class="fa fa-calendar"></i><b> SCHEDULE </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="testimonial.html" class=""><i class="fa fa-pencil-square-o"></i><b> TESTIMONIALS </b></a></li>
    </ul>
</div>-->
<!--<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="art.php" class=""><i class="fa fa-paint-brush"></i><b> ART </b></a>-->
<!--<div class="second-lvl"><ul>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="music.php" class=""><i class="fa fa-music"></i><b> LEARN TO SING </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="dance.php" class=""><i class="fa fa-play"></i><b> LEARN TO DANCE </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="draw.php" class=""><i class="fa fa-pencil-square-o"></i><b> LEARN TO DRAW </b></a></li>
    </ul>
</div>-->
<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="events.php" class=""><i class="fa fa-music"></i><b> EVENTS </b></a>

<li id="1775298573-menu-item-3264" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="p-gallery.php" class=""><i class="fa fa-picture-o"></i> <b> PHOTO GALLERY </b></a></li>
<li id="2104552354-menu-item-3255" class=" " ><a href="contact.php" class=""><i class="fa fa-envelope"></i><b> CONTACT US</b></a></li>
<?php
if (login_check($mysqli) == true) {
    $logged = 'in';?>

  <li><a class="btn-nav" href="#"><b>Hi&nbsp<?php echo $uname; ?>,</b></a></li>
  <?php
} 
else {
    $logged = 'out';
}
?>
<style>
.btn {
    border: 1px solid black;
    background-color: pink;
    height: 5px;
    color: solid black;
    padding: 15px 12px;
    font-size: 16px;
    cursor: pointer;
    margin-right: 4px;

}

</style>
    <li><button type="button" class="btn"><a href="registration/index.php"><b>Sign In</b></a></button>
     <button type="button" class="btn"><a href="includes/logout.php"><b>Log Out</b></a></li></button>
                    </ul> 
                    </div>
</li>
</ul>
</div>               
 </div>
    </nav>
</header>
  <div id="mobile-header" class="mobile-header">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 v-align">
          <div id="mobile-logo" class="logo">
                                      <a href="index.php" id="site-logo-mobile" title="AM" rel="home">
                                <img src="images/logo.png" alt="AM" style=" width: 150px" srcset="" class="img-responsive"/></a>
                            </a>
                                  </div>
          <a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
        </div>    
      </div>
  </div>
</div>
<div id="mobile-navigation">
  <div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="menu-main-container"><ul id="mobile-nav" class="menu"><li id="menu-item-2923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-2923"><a href="index.php" class=""><i class="fa fa-home"></i><b> HOME </b></a>
<li id="menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3257"><a href="about.php" class=""><i class="fa fa-info"></i><b> ABOUT US </b></a></li>
<!--<li id="menu-item-3264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3264"><a href="pramoter.php" class=""><i class="fa fa-user"></i><b> PRAMOTER </b></a></li>-->
<li id="menu-item-3255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="meditation.php" class=""><i class="fa fa-music"></i><b> MEDITATION</b></a>
<!--<ul class="sub-menu">
    <li id="menu-item-2949" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2949"><i class="fa fa-calendar"></i><b> SCHEDULE</b></a></li>
    <li id="menu-item-2950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2950"><a href="testimonial.html" class=""><i class="fa fa-pencil-square-o"></i><b> TESTIMONIALS</b></a></li>
  </ul>-->
</li>
  <!--<li id="menu-item-2946" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2946"><a href="art.php" class=""><i class="fa fa-paint-brush"></i><b> ART </b></a>
  <ul class="sub-menu">
    <li id="menu-item-3196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3196"><a href="music.php" class=""><i class="fa fa-music"></i><b> LEARN TO SING </b></a></li>
    <li id="menu-item-3195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3195"><a href="dance.php" class=""><i class="fa fa-play"></i><b> LEARN TO DANCE </b></a></li>
    <li id="menu-item-3199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3199"><a href="draw.php" class=""><i class="fa fa-pencil-square-o"></i><b> LEARN TO DRAW </b></a></li>
  </ul>
</li>-->
 <li id="menu-item-3202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3202"><a href="events.php" class=""><i class="fa fa-music"></i><b> EVENTS </b></a></li>
   <li id="menu-item-3203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3203"><a href="p-gallery.php" class=""><i class="fa fa-picture-o"></i> <b> PHOTO GALLERY </b></a></li>
<li id="menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2420"><a href="contact.php" class=""><i class="fa fa-envelope"></i><b> CONTACT US</b></a></li>
<?php
if (login_check($mysqli) == true) {
    $logged = 'in';?>

  <li><a class="btn-nav" href="#"><b>Hi&nbsp<?php echo $uname; ?>,</b></a></li>
  <?php
} 
else {
    $logged = 'out';
}
?>
<style>
.btn {
    border: 1px solid black;
    background-color: pink;
    height: 40px;
    color: solid black;
    padding: 2px 5px;
    font-size: 16px;
    cursor: pointer;
    margin-left: 4px;
}

</style>
    <li><button type="button" class="btn"><a href="registration/index.php"><b>Sign In</b></a></button>
      <button type="button" class="btn"><a href="includes/logout.php"><b>Log Out</b></a></li></button>
               
</li>
</ul></div>                   </div>
    </div>
  </div>
</div><link href="https://fonts.googleapis.com/css?family=Quicksand:400%7CSource+Sans+Pro:300%2C400%7COpen+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#e3edf6;padding:0px;">


	<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6.3.1">
		 <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="vendor/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<ul>	<!-- SLIDE  -->
	<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://ttdemo2.wpengine.com/yogax/wp-content/uploads/sites/4/2017/01/yogax_slider_1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="Challenge" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="images/1.jpg"  alt="" title=""  width="1800" height="1002" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-1-layer-1" 
			 data-x="['left','left','left','left']" data-hoffset="['62','62','62','61']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-173','-173','-173','-130']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":359.999694824,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;">Discover your </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-1-layer-3" 
			 data-x="['left','left','left','left']" data-hoffset="['69','69','69','63']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-97','-97','-97','-77']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1069.99969482,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;">inner Sanctuary </div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-1-layer-5" 
			 data-x="['left','left','left','left']" data-hoffset="['70','70','68','63']" 
			 data-y="['top','top','top','top']" data-voffset="['431','431','461','337']" 
						data-fontsize="['20','20','20','16']"
			data-lineheight="['30','30','30','22']"
			data-fontweight="['300','300','300','400']"
			data-color="['rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(44,52,73,1)']"
			data-width="['530','530','530','371']"
			data-height="['121','121','121','93']"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1709.99969482,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; min-width: 600px; max-width: 530px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 25px; line-height: 40px; font-weight: 400; color: rgba(255,255,255);font-family:Source Sans Pro;"><b>Challenge yourself at art meditation using functional movements performed at high intensity. It time to go beyond your limits and discover your mind. </b></div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption  " 
			 id="slide-1-layer-11" 
			 data-x="['left','left','left','left']" data-hoffset="['69','69','69','65']" 
			 data-y="['top','top','top','top']" data-voffset="['597','597','597','440']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;"><a href="about.php" class="btn btn-primary btn-large style-3 " target="_self" title="See full class list" rel=""></a> </div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://ttdemo2.wpengine.com/yogax/wp-content/uploads/sites/4/2017/01/yogax_slider_3-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="Challenge" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="images/15.jpg"  alt="" title=""  width="1800" height="998" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 5 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-2-layer-1" 
			 data-x="['left','left','left','left']" data-hoffset="['62','62','62','61']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-173','-173','-173','-130']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":359.999694824,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;">Lighten your </div>

		<!-- LAYER NR. 6 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-2-layer-3" 
			 data-x="['left','left','left','left']" data-hoffset="['61','61','61','63']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-89','-89','-89','-77']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1069.99969482,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;">Hearts & Minds </div>

		<!-- LAYER NR. 7 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-2-layer-5" 
			 data-x="['left','left','left','left']" data-hoffset="['70','70','68','63']" 
			 data-y="['top','top','top','top']" data-voffset="['430','430','461','337']" 
						data-fontsize="['20','20','20','16']"
			data-lineheight="['30','30','30','22']"
			data-fontweight="['300','300','300','400']"
			data-color="['rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(44,52,73,1)']"
			data-width="['530','530','530','371']"
			data-height="['121','121','121','93']"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1709.99969482,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7; min-width: 530px; max-width: 530px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 25
      px; line-height: 30px; font-weight: 300; color: rgba(34e5,,,1);font-family:Source Sans Pro;"><b>Meditation is the discovery that the point of life is always arrived at in the immediate moment.</b></div>

		<!-- LAYER NR. 8 -->
		<div class="tp-caption  " 
			 id="slide-2-layer-11" 
			 data-x="['left','left','left','left']" data-hoffset="['69','69','69','65']" 
			 data-y="['top','top','top','top']" data-voffset="['597','597','597','440']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;"><a href="meditation.php" class="btn btn-primary btn-large style-3 " target="_self" title="Join us now" rel=""></a> </div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="Challenge" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="images/16.jpg"  alt="" title="yogax_slider_2"  width="1800" height="998" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 9 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-3-layer-1" 
			 data-x="['left','left','left','left']" data-hoffset="['62','62','62','61']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-173','-173','-173','-130']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":359.999694824,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;">Gather new </div>

		<!-- LAYER NR. 10 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-3-layer-3" 
			 data-x="['left','left','left','left']" data-hoffset="['61','61','61','63']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-89','-89','-89','-77']" 
						data-fontsize="['76','76','76','54']"
			data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1069.99969482,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1); font-family:Quicksand;letter-spacing:-2px;">Energy </div>

		<!-- LAYER NR. 11 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-3-layer-5" 
			 data-x="['left','left','left','left']" data-hoffset="['70','70','68','63']" 
			 data-y="['top','top','top','top']" data-voffset="['430','430','461','337']" 
						data-fontsize="['20','20','20','16']"
			data-lineheight="['30','30','30','22']"
			data-fontweight="['300','300','300','400']"
			data-color="['rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(44,52,73,1)']"
			data-width="['530','530','530','371']"
			data-height="['121','121','121','93']"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1709.99969482,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7; min-width: 530px; max-width: 530px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 20px; line-height: 30px; font-weight: 300; color: rgba(34e5,,,1);font-family:Source Sans Pro;">MEDITATION</b> before you learn how to mediate, You <b>MUST</b> unlearn what you think meditation <b>MIGHT BE!!!"</b></em></h2> </div>

		<!-- LAYER NR. 12 -->
		<div class="tp-caption  " 
			 id="slide-3-layer-11" 
			 data-x="['left','left','left','left']" data-hoffset="['69','69','69','65']" 
			 data-y="['top','top','top','top']" data-voffset="['597','597','597','440']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;"><a href="registration/index.php" class="btn btn-primary btn-large style-3 " target="_self" title="Join us now" rel=""></a> </div>
      <!-- SLIDE  -->
  <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="Challenge" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
    <img src="images/20.jpg"  alt="" title=""  width="1800" height="998" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 13-->
    <div class="tp-caption   tp-resizeme" 
       id="slide-2-layer-1" 
       data-x="['left','left','left','left']" data-hoffset="['62','62','62','61']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-173','-173','-173','-130']" 
            data-fontsize="['76','76','76','54']"
      data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"delay":359.999694824,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
      data-textAlign="['inherit','inherit','inherit','inherit']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 5; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;"></div>

    <!-- LAYER NR. 14-->
    <div class="tp-caption   tp-resizeme" 
       id="slide-4-layer-3" 
       data-x="['left','left','left','left']" data-hoffset="['61','61','61','63']" 
       data-y="['middle','middle','middle','middle']" data-voffset="['-89','-89','-89','-77']" 
            data-fontsize="['76','76','76','54']"
      data-color="['rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(67,78,95,1)','rgba(44,52,73,1)']"
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"delay":1069.99969482,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
      data-textAlign="['inherit','inherit','inherit','inherit']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 6; white-space: nowrap; font-size: 76px; line-height: 22px; font-weight: 400; color: rgba(67,78,95,1);font-family:Quicksand;letter-spacing:-2px;"></div>

    <!-- LAYER NR. 15-->
    <div class="tp-caption   tp-resizeme" 
       id="slide-4-layer-5" 
       data-x="['left','left','left','left']" data-hoffset="['70','70','68','63']" 
       data-y="['top','top','top','top']" data-voffset="['430','430','461','337']" 
            data-fontsize="['20','20','20','16']"
      data-lineheight="['30','30','30','22']"
      data-fontweight="['300','300','300','400']"
      data-color="['rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(34e5,,,1)','rgba(44,52,73,1)']"
      data-width="['530','530','530','371']"
      data-height="['121','121','121','93']"
      data-whitespace="normal"
 
      data-type="text" 
      data-responsive_offset="on" 

      data-frames='[{"delay":1709.99969482,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
      data-textAlign="['inherit','inherit','inherit','inherit']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 7; min-width: 530px; max-width: 530px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 25
      px; line-height: 30px; font-weight: 300; color: rgba(34e5,,,1);font-family:Source Sans Pro;"><b></b></div>

    <!-- LAYER NR. 16 -->
    <div class="tp-caption  " 
       id="slide-4-layer-11" 
       data-x="['left','left','left','left']" data-hoffset="['69','69','69','65']" 
       data-y="['top','top','top','top']" data-voffset="['597','597','597','440']" 
            data-width="none"
      data-height="none"
      data-whitespace="nowrap"
 
      data-type="text" 
      data-responsive_offset="on" 
      data-responsive="off"
      data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
      data-textAlign="['inherit','inherit','inherit','inherit']"
      data-paddingtop="[0,0,0,0]"
      data-paddingright="[0,0,0,0]"
      data-paddingbottom="[0,0,0,0]"
      data-paddingleft="[0,0,0,0]"

      style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;"> </div>
  
  <!-- SLIDE  -->
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}
						else{
							var htmlDiv = document.createElement("div");
							htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
							document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
						}
					</script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
setREVStartSize({c: jQuery('#rev_slider_1_1'), responsiveLevels: [1240,1240,778,480], gridwidth: [1240,1240,778,480], gridheight: [868,868,960,720], sliderLayout: 'fullscreen', fullScreenAutoWidth:'off', fullScreenAlignForce:'off', fullScreenOffsetContainer:'', fullScreenOffset:''});
			
var revapi1,
	tpj=jQuery;
			
tpj(document).ready(function() {
	if(tpj("#rev_slider_1_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1_1");
	}else{
		revapi1 = tpj("#rev_slider_1_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//ttdemo2.wpengine.com/yogax/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
				onHoverStop:"off",
				bullets: {
					enable:true,
					hide_onmobile:false,
					style:"hermes",
					hide_onleave:false,
					direction:"vertical",
									container:"layergrid",
					h_align:"right",
					v_align:"center",
					h_offset:0,
					v_offset:0,
					space:5,
					tmp:''
				}
			},
			responsiveLevels:[1240,1240,778,480],
			visibilityLevels:[1240,1240,778,480],
			gridwidth:[1240,1240,778,480],
			gridheight:[868,868,960,720],
			lazyType:"none",
			shadow:0,
			spinner:"spinner2",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
	
});	/*ready*/
</script>
		<script>
					var htmlDivCss = ' #rev_slider_1_1_wrapper .tp-loader.spinner2{ background-color: #e24886 !important; } ';
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
					</script>
					<script>
					var htmlDivCss = unescape(".hermes.tp-bullets%20%7B%0A%7D%0A%0A.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20rgb%2867%2C%2078%2C%2095%29%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%28226%2C%2072%2C%20134%2C%201%29%3B%0A%7D%0A.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20rgb%2867%2C%2078%2C%2095%29%3B%0A%20%20box-shadow%3A%200%200%201px%20rgb%2867%2C%2078%2C%2095%29%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				  </script>
				</div><!-- END REVOLUTION SLIDER -->


     
<div class="wrapper pdt0 pdb75" id="page-wrapper">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 content-area">
                <a id="home" class="in-page-link" href="#"></a>
	            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"  style="min-height:18px; border-top: solid 10px #e24886; border-bottom: solid 4px #e24886; " class="vc_row wpb_row vc_row-fluid vc_row-no-padding">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div>


</div>
    <div class="vc_row-full-width vc_clearfix"></div>
<div  style="padding-top: 60px; padding-bottom: 60px; " class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1486548216817"><div class="wpb_wrapper">
	<div class="ttbase-class-grid">

			<div id="211962089" class="ttbase-class-items ttbase-grid  clearfix" data-id="211962089">  
			<div class="term-health-mind ttbase-class-item-wrapper ttbase-col ttbase-count-1 ttbase-col-3">
					<div class="ttbase-class-item text-center">
        				        					<a href="" title="" class="ttbase-class-item-image">
        						<img class="img-responsive" src="http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/uploads/sites/4/2017/01/yogax_services_meditation.png" alt="Meditation" />
        						<div class="ttbase-class-item-image-overlay clearfix" ></div>
        						<div class="ttbase-class-item-image-content">
        							<h5 class="ttbase-class-item-subtitle">
        								Keeps Your Mind free         							</h5>
        							<h3 class="ttbase-class-item-heading">
        								      							</h3>
        						</div>
        					</a>
        			    					    
					    							<div class="ttbase-class-item-content ttbase-class-item-excerpt" style="background-color:; border-color:"><p>
						 <b><font color="#CD5C5C">“Music, once admitted to the soul, becomes a sort of spirit, and never dies and makes your mind free"</b></font></p>
														</div>
										</div>
				</div>
			 
							

				<div class="term-mind-balance ttbase-class-item-wrapper ttbase-col ttbase-count-2 ttbase-col-3">
					<div class="ttbase-class-item text-center">
        				        					<a href="" title="" class="ttbase-class-item-image">
        						<img class="img-responsive" src="http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/uploads/sites/4/2017/01/yogax_services_yoga.png" alt="Yoga" />
        						<div class="ttbase-class-item-image-overlay clearfix" ></div>
        						<div class="ttbase-class-item-image-content">
        							<h5 class="ttbase-class-item-subtitle">
        								Balance Your Mind        							</h5>
        							<h3 class="ttbase-class-item-heading">
        								      							</h3>

        						</div>
        					</a>
        			    					    
					    							<div class="ttbase-class-item-content ttbase-class-item-excerpt" style="background-color:; border-color:"><p>
							 <b><font color="#CD5C5C">	“Happiness is not a matter of intensity but of balance and order and rhythm and harmony.”</b></font></p>
														</div>
										</div>
				</div>
			 
							

				<div class="term-body-strength ttbase-class-item-wrapper ttbase-col ttbase-count-3 ttbase-col-3">
					<div class="ttbase-class-item text-center">
        				        					<a href="" class="ttbase-class-item-image">
        						<img class="img-responsive" src="http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/uploads/sites/4/2017/01/yogax_services_pilates.png" alt="Pilates" />
        						<div class="ttbase-class-item-image-overlay clearfix" ></div>
        						<div class="ttbase-class-item-image-content">
        							<h5 class="ttbase-class-item-subtitle">
        								Gives Strength         							</h5>
        							<h3 class="ttbase-class-item-heading">
        								    							</h3>
        						</div>
        					</a>
        			    					    
					    							<div class="ttbase-class-item-content ttbase-class-item-excerpt" style="background-color:; border-color:"><p>
						<b><font color="#CD5C5C">	“Music is the strongest form of magic which gives you strength to defeat the problems."						</b></font></p>
														</div>
										</div>
				</div>
			 
					</div>
	</div>
	</div></div></div>
 

<div data-vc-full-width="true" data-vc-full-width-init="false"  style="min-height:650px; background-image: url(images/14.jpeg); " class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex ttbase-relative ttbase-row-image">

<div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill"><div class="vc_column-inner vc_custom_1485690988563"><div class="wpb_wrapper"><h2 class="ttbase-heading ttbase-heading-none text-align-left  has-animation fade" style="font-size: 60px;"><span>The Inner Middle.</span></h2><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
<p class="intro  has-animation fade"><b><p align="justify">“Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything. Experience meditation by listening to music and feel your own heart what it says..!!!"</p></b></p></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div></div></div></div></div>


</div>
    <div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1485700134685"><div class="wpb_wrapper"><h2 class="ttbase-heading ttbase-heading-none text-align-center " ><span>About us.</span></h2><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
<p class="intro text-center"><b><em>“Music is a language that doesn’t speak in particular words. 
  <br>It speaks in emotions, and if it’s in the bones, it’s in the bones.” 
  ~ Keith Richards<br/></b></em>
  <br><b><font color="#CD5C5C">
ART MEDITATION prepares your mind to live your life in terms of music and make you live your daydreams in music. <br>The idea is that to examine the uncovering and working through fears and axieties related to death and mourning by using an effective tool - MUSIC THERAPY
<br/></font></b></br>
</p>
<div class="vc_empty_space"   style="height: 32px" >
  <span class="vc_empty_space_inner"></span>
</div>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_column-gap-25">
  <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1485701462406">
      <div class="wpb_wrapper">            
        <div class="ttbase-icon-box clearfix ttbase-icon-box-one align-center" style="padding-left:80px;">
            <div class="ttbase-icon-box-one-icon ttbase-icon-box-icon"  style="color:#434e5f;font-size:70px;">
              <span class="im im-Smartphone-2"></span>
            </div>
              <h3 class="ttbase-icon-box-one-heading " style=color:#e24886;>
                   +91 98213 66041</h3>
                <div class="ttbase-icon-box-one-content clearfix">
                    <p>\<b>Available 24 hours</b></p>
                </div>
                </div>
                </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
      <div class="vc_column-inner vc_custom_1485701468442">
        <div class="wpb_wrapper">            
          <div class="ttbase-icon-box clearfix ttbase-icon-box-one align-center" style="padding-left:80px;">
              <div class="ttbase-icon-box-one-icon ttbase-icon-box-icon"  style="color:#434e5f;font-size:64px;">
                <span class="im im-Envelope"></span>
              </div>
              <h3 class="ttbase-icon-box-one-heading " style=color:#e24886;>
                    E-Mail Us                 </h3>
                <div class="ttbase-icon-box-one-content clearfix">    
                    <p><b>Response within 48 hours</b></p>
                </div>
          </div>       
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
      <div class="vc_column-inner vc_custom_1485701480468">
        <div class="wpb_wrapper">            
          <div class="ttbase-icon-box clearfix ttbase-icon-box-one align-center" style="padding-left:80px;">
            <div class="ttbase-icon-box-one-icon ttbase-icon-box-icon"  style="color:#434e5f;font-size:64px;">
              <span class="im im-Building"></span>
            </div>
              <h3 class="ttbase-icon-box-one-heading " style=color:#e24886;>
                   Kharghar</h3>
            <div class="ttbase-icon-box-one-content clearfix">
                    <p><b>Navi Mumbai, India</b></p>
                </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div data-vc-full-width="true" data-vc-full-width-init="false"  style="min-height:650px; background-image: url(images/4.jpg); " class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex ttbase-relative ttbase-row-image">

<div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill"><div class="vc_column-inner vc_custom_1485699447965"><div class="wpb_wrapper"><h2 class="ttbase-heading ttbase-heading-none text-align-left  has-animation fade" style="font-size: 60px;"><span>Mind in Balance.</span></h2><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>
<p class="intro  has-animation fade"><p align="justify"><b>“The best and safest thing is to keep a balance in your life, acknowledge the great powers around us and in us. If you can do that, and live that way, you are really a wise man.”</p></b></p></div></div></div></div></div></div></div>
</div>
    
   <div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1484142724950"><div class="wpb_wrapper"><h2 class="ttbase-heading ttbase-heading-none text-align-center " ><span>Sessions</span></h2><div class="vc_empty_space"   style="height: 60px" ><span class="vc_empty_space_inner"></span></div>
<div class="ttbase-latest-blog"><div class="blog-carousel owl-carousel owl-theme"><div class="blog-item" style="background-color:#ffffff;border-color:#e3edf6"><a href="meditation.php" title="" class="blog-pic color"><img src="images1/9.jpg"></i></a><div class="blog-item-description">
		  					<h5 class="post-date">December 23, 2017</h5>
							<h3 class="title"><a href="" title=""></a></h3>
					  		<div><p><div class="read-more-link-wrapper"><a class="read-more-link" href="meditation.php"><b>Read more</b><i class="icon-next"></i></a></div></div>
				  		</div></div><div class="blog-item" style="background-color:#ffffff;border-color:#e3edf6"><a href="" title="" class="blog-pic color"><img src="images1/11.jpg"></span><i class="icon-plus"></i></a><div class="blog-item-description">
		  					<h5 class="post-date">October 18, 2015</h5>
							<h3 class="title"><a href="" title=""></a></h3>
					  		<div><p><div class="read-more-link-wrapper"><a class="read-more-link" href="meditation.php"><b>Read more</b><i class="icon-next"></i></a></div></div>
				  		</div></div><div class="blog-item" style="background-color:#ffffff;border-color:#e3edf6"><a href="" title="" class="blog-pic color"><img src="images1/23.jpg"></span><i class="icon-plus"></i></a><div class="blog-item-description">
		  					<h5 class="post-date">October 18, 2015</h5>
							<h3 class="title"><a href="meditation.php" title=""></a></h3>
					  		<div><p><div class="read-more-link-wrapper"><a class="read-more-link" href="meditation.php"><b>Read more</b><i class="icon-next"></i></a></div></div>
				  		</div></div><div class="blog-item" style="background-color:#ffffff;border-color:#e3edf6"><a href="upbringing.php" title="" class="blog-pic color"><img src="pics/44.jpg" style=" height:250px" alt="" /><span class="blog-overlay"></span><i class="icon-plus"></i></a><div class="blog-item-description">
		  					<h5 class="post-date">November 22, 2013</h5>
							<h3 class="title"><a href="" title=""></a></h3>
					  		<div><p><div class="read-more-link-wrapper"><a class="read-more-link" href="meditation.php"><b>Read more</b><i class="icon-next"></i></a></div></div>
				  		</div></div></div></div><div class="clearfix"></div></div></div></div>


</div>

    
            </div>
        </div>
    </div><!-- Container end -->
</div><!-- Wrapper end -->




        <!-- Go Top Links -->
<a href="#" id="go-top"><i class="fa fa-angle-up"></i></a>

</div>

<!----Go to page---->
<!-- Footer -->
<footer class="site-footer no-separator">
        <div class="top-footer-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                          <div id="ttbase_framework_image_widget-3" class="widget widget_ttbase_framework_image_widget">
        <div class="ttbase-image-widget" >
                    <img class="img-responsive" src="images/logo.png" alt=""/>
                  </div>

      </div>                              </div>
              
              <!-- Add the extra clearfix for only the required viewport -->
               <div class="clearfix visible-sm-block visible-md-block"></div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                          <div id="text-2" class="widget widget_text"><h4 align="justify" class="title">About us</h4>     <div class="textwidget">
                            <p align="justify"><b>The idea is that to examine the uncovering and working through fears and anxieties related to death and mourning by using an effective tool <b><font color="#CD5C5C">"MUSIC THERAPY"</font></b>. In this, Examination is done basically on the latency age child and early adolescent at the end stage of life-from time of diagnosis of terminal illness to death.</b></p></div>
    </div>                              </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
                          <div id="ttbase_framework_opening_hours_widget-2" class="widget widget-opening-hours"><h4 class="title">Opening Hours</h4><div class="opening-hours"><ul><li class="weekday">Monday<span class="right">07:00-17:00</span></li><li class="weekday">Tuesday<span class="right">07:00-17:00</span></li><li class="weekday">Wednesday<span class="right">07:00-17:00</span></li><li class="weekday">Thursday<span class="right">07:00-17:00</span></li><li class="weekday">Friday<span class="right">07:00-17:00</span></li><li class="weekday">Saturday<span class="right">07:00-17:00</span></li><li class="weekday">Sunday<span class="right">07:00-17:00</span></li></ul></div></div>                              </div>
            </div>
        </div>
    </div>
        </footer>
      
<!-- #page -->
<a href="#" id="go-top"><i class="fa fa-angle-up"></i></a>

</div>
			<script type="text/javascript">
				function revslider_showDoubleJqueryError(sliderID) {
					var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
					errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
					errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
					errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
					errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
						jQuery(sliderID).show().html(errorMessage);
				}
			</script>
			<link rel='stylesheet' id='animate-css-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=5.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='map-icons-style-css'  href='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/css/map-icons.min.css?ver=4.9.6' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/ttdemo2.wpengine.com\/yogax\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1","jqueryUi":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/js/bootstrap.min.js?ver=20160901'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/js/bootstrap-filestyle.min.js?ver=20160901'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/js/scripts.min.js?ver=20161205'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/themes/yogax/js/yogax-main.min.js?ver=20161205'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-includes/js/wp-embed.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.5'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/yogax-ext/shortcodes/js/yogax-class.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=5.4.5'></script>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyAczvbMZbgbPjgBbwEB-yxX4_TkREfUuxM&#038;ver=4.9.6'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/ttbase-shortcodes/shortcodes/js/map-icons.min.js?ver=4.9.6'></script>
<script type='text/javascript' src='http://20qz3liwl8g1cfwk01f3wr81.wpengine.netdna-cdn.com/yogax/wp-content/plugins/ttbase-framework-yogax/ttbase-shortcodes/shortcodes/js/ttbase-carousel.min.js'></script>

	<script type="text/javascript">
	jQuery(document).ready(function($){
		"use strict";

	    	});

	</script>
	

</body>
</html>
