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
<html>
<title>Art Meditation- Learn To Draw</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Times New Roman", georgia">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family:"Lato", sans-serif;}
body, html {
    height: 100%;
    color: #000;
    line-height: 1.8;}
    .bgimg-1 {
    background-image: url('images/51.jpg');
    min-height: 550px;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%);
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
</style>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family:"Lato", sans-serif;}
body, html {
    height: 100%;
    color: #000;
    line-height: 1.8;
}

* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
</style>
<body>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://ttdemo2.wpengine.com/yogax/xmlrpc.php">
    
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Yogax  &raquo; Feed" href="http://ttdemo2.wpengine.com/yogax/feed/" />
<link rel="alternate" type="application/rss+xml" title="Yogax  &raquo; Comments Feed" href="http://ttdemo2.wpengine.com/yogax/comments/feed/" />
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/ttdemo2.wpengine.com\/yogax\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.6"}};
      !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
     <style type="text/css">
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #000;
    line-height: 1.8;
}
.bgimg-1 {
    background-image: url('images/51.jpg');
    min-height: 100%;
    
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
    .popup {
  position: fixed;
  display: block;
  min-height: 0;
  background: #FFFAFA;
  border-radius: 10px;
  opacity: 0;
  color: rgba(0,0,0,0.4);
  top: 50%;
  left: 50%;
/* user-select: none */
  z-index: 100;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.popup_show {
  -webkit-animation-name: fadeInDown;
          animation-name: fadeInDown;
  -webkit-animation-duration: 0.1s;
          animation-duration: 0.1s;
  -webkit-animation-timing-function: cubic-bezier(0.55, 0.12, 0.49, 0.89);
          animation-timing-function: cubic-bezier(0.55, 0.12, 0.49, 0.89);
/*animation-timing-function: cubic-bezier(.53,.01,.18,.68)*/
/* animation-timing-function: cubic-bezier(.68,.12,.53,.9) */
  opacity: 1;
  height: auto;
}
.popup_content {
  padding: 3.5rem 5rem 4rem 5rem;
  position: relative;
}
.close {
  position: absolute;
  cursor: pointer;
  font-size: 1.7rem;
  font-weight: 300;
  top: 10px;
  color: #FFFFFF;
  right: 10px;
  padding: 0rem 0.8rem 0.3rem 0.8rem;
  border-radius: 50%;
  background: rgba(0,0,0,0.1);
  transition: all 0.3s ease-in-out;
}
.close:hover {
  background: rgba(0,0,0,0.2);
}

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
}   </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1486548216817{padding-top: 2% !important;}.vc_custom_1485690988563{border-right-width: 5px !important;padding-top: 7% !important;padding-right: 7% !important;padding-bottom: 7% !important;padding-left: 7% !important;background-color: #ffffff !important;border-right-color: #e24886 !important;border-right-style: solid !important;}.vc_custom_1485700134685{padding-top: 6% !important;padding-bottom: 6% !important;}.vc_custom_1485701462406{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485701468442{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485701480468{border-top-width: 5px !important;border-bottom-width: 5px !important;padding-top: 12% !important;padding-bottom: 10% !important;border-top-color: #e3edf6 !important;border-top-style: solid !important;border-bottom-color: #e3edf6 !important;border-bottom-style: solid !important;}.vc_custom_1485699447965{border-left-width: 5px !important;padding-top: 7% !important;padding-right: 7% !important;padding-bottom: 7% !important;padding-left: 7% !important;background-color: #ffffff !important;border-left-color: #e24886 !important;border-left-style: solid !important;}.vc_custom_1484048067044{padding-top: 6% !important;padding-bottom: 6% !important;}.vc_custom_1484142724950{padding-top: 6% !important;padding-bottom: 6% !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-3253 ttbase-shortcodes  ttbase-shortcodes-responsive wpb-js-composer js-comp-ver-5.4.5 vc_responsive" >
















<div id="page" class="site-wrapper full-width header-transparent-full">

    <header id="masthead" class="header transparent full header-border">
    <nav class="navigation v-align" >
        <div class="container-fluid">
            <div class="row v-align">
                
<!-- normal size logo -->
    <div class="logo-wrapper">
        <a href="index.html" id="site-logo" title="AM" rel="home">
                            <img src="images/logo.jpg" alt="Yogax " style=" width: 100px;  height:80px"; srcset="" class="img-responsive"  />
                    </a>
    </div>
                <!-- Menu -->
                

       
                <div class="col-md-12">       
                    <div class="nav-menu pull-right">
                      <ul id="main-nav" class="menu">
                        <div class="navbar-collapse-right" >
 <ul class="nav navbar-nav navbar-right">
 <li id="1069973405-menu-item-2923" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="index.php" class=""><i class="fa fa-home"></i><b> HOME </b></a></li>
 <li id="162979464-menu-item-3257" class="" ><a href="about.php" class=""><i class="fa fa-info"></i><b> ABOUT US </b></a></li>
<li id="162979464-menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="pramoter.php" class=""><i class="fa fa-user"></i><b> PRAMOTER </b></a></li>
<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="meditation.php" class=""><i class="fa fa-music"></i><b> MEDITATION</b></a>
<div class="second-lvl"><ul>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="schedule.html" class=""><i class="fa fa-calendar"></i><b> SCHEDULE </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="testimonial.html" class=""><i class="fa fa-pencil-square-o"></i><b> TESTIMONIALS </b></a></li>
    </ul>
</div>
<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="art.php" class=""><i class="fa fa-paint-brush"></i><b> ART </b></a>
<div class="second-lvl"><ul>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="music.php" class=""><i class="fa fa-music"></i><b> LEARN TO SING </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="dance.php" class=""><i class="fa fa-play"></i><b> LEARN TO DANCE </b></a></li>
  <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="draw.php" class=""><i class="fa fa-pencil-square-o"></i><b> LEARN TO DRAW </b></a></li>
   <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="play.php" class=""><i class="  fa fa-play-circle-o"></i><b> LEARN TO PLAY </b></a></li>
    </ul>
    
</div>
<li id="1956553309-menu-item-2420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  no-mega-menu " ><a href="events.php" class=""><i class="fa fa-music"></i><b> EVENTS </b></a>
<li id="1775298573-menu-item-3264" class="menu-item menu-item-type-post_type menu-item-object-page  no-mega-menu " ><a href="portfolio.html" class=""><i class="fa fa-picture-o"></i> <b> PHOTO GALLERY </b></a></li>
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
    height: 40px;
    color: solid black;
    padding: 25px 12px;
    font-size: 16px;
    cursor: pointer;
    margin-left: 4px;

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
                                <img src="images/logo.jpg" alt="AM" width= 80px; srcset="" class="img-responsive"/></a>
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

            <div class="menu-main-container"><ul id="mobile-nav" class="menu"><li id="menu-item-2923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2923"><a href="index.php" class=""><i class="fa fa-home"></i><b> HOME </b></a>
<li id="menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3257"><a href="about.php" class=""><i class="fa fa-info"></i><b> ABOUT US </b></a></li>
<li id="menu-item-3264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3264"><a href="pramoter.php" class=""><i class="fa fa-user"></i><b> PRAMOTER </b></a></li>
<li id="menu-item-3255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="meditation.php" class=""><i class="fa fa-music"></i><b> MEDITATION</b></a>
<ul class="sub-menu">
    <li id="menu-item-2949" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2949"><i class="fa fa-calendar"></i><b> SCHEDULE</b></a></li>
    <li id="menu-item-2950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2950"><a href="testimonial.html" class=""><i class="fa fa-pencil-square-o"></i><b> TESTIMONIALS</b></a></li>
  </ul>
</li>
  <li id="menu-item-2946" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2946"><a href="art.php" class=""><i class="fa fa-paint-brush"></i><b> ART </b></a>
  <ul class="sub-menu">
    <li id="menu-item-3196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3196"><a href="music.php" class=""><i class="fa fa-music"></i><b> LEARN TO SING </b></a></li>
    <li id="menu-item-3195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3195"><a href="dance.php" class=""><i class="fa fa-play"></i><b> LEARN TO DANCE </b></a></li>
    <li id="menu-item-3199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-3199"><a href="draw.php" class=""><i class="fa fa-pencil-square-o"></i><b> LEARN TO DRAW </b></a></li>
      <li id="1682564414-menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children sub no-mega-menu open-left " ><a href="play.php" class=""><i class="  fa fa-play-circle-o"></i><b> LEARN TO PLAY </b></a></li>
    </ul>
 
</li>
 <li id="menu-item-3202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3202"><a href="events.php" class=""><i class="fa fa-music"></i><b> EVENTS </b></a></li>
   <li id="menu-item-3203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3203"><a href="portfolio.html" class=""><i class="fa fa-picture-o"></i> <b> PHOTO GALLERY </b></a></li>
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




<!--</div>
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <ul class="w3-navbar" id="myNavbar">
    <li class="w3-text-red"><a href="index.html"><i class="fa fa-home"></i> <b> HOME</b></a></li>
    <li class="w3-hover-text-red"><a href="about.html"><i class="fa fa-info"></i><b> ABOUT US</b></a></li>
  <li class="w3-text-red"><a href="trainee.html"><i class="fa fa-user"></i><b> TRAINEE</b></a></li>
  <li class="w3-text-red"><a href="upbringing.html"><i class="fa fa-music"></i><b> UPBRINGING MEDITATION</b></a></li>
  <li class="w3-text-red"><a href="portfolio.html"><i class="fa fa-camera"></i> <b>PORTFOLIO</b></a></li>
  <li class="w3-text-red"><a href="contact.html"><i class="fa fa-envelope"></i><b> CONTACT US</b></a></li>
  </ul>
</div>
<div class="w3-content w3-container w3-padding-32">
  <h2 class="w3-center"><b>ABOUT US</b></h2></div>-->
  <style>
p.Monospace {
    font-family: "Lucida Console";
}

p.sansserif {
    font-family:"Trebuchet MS", Helvetica, sans-serif;
}
</style>
  
  
<div class="bgimg-1 w3-display-container"></div>
  <img src="images/52.jpg" alt="" style="width:100%;height:100%"><a href="" style="text-decoration: none">
  <div class="w3-content w3-container w3-padding-64">
  <p align="center"><p class="blacktext">
  <center><b><font color="black"> Instrument Playing is not a luxury , <b></b><b><font color=" #C71585"> Instrument Playing  is a necessity</font></b><b></b></center>
<br>
  <center><p align="justify"><b><font color="black">The benefits of music have reported that playing a musical instrument on a regular basis can help bring down stress.  <b><font color=" #C71585"></font></b> Studies show that playing an instrument help in lowering the heart rate and blood pressure, which in turn lowers the stress hormone corticol, thus making us free; relaxed. learning to play an instrument brings with it a comforting routine of daily practice that helps in keeping the stress hormones away. Michael Jolkovski, a psychologist who specializes in musicians, feels that music also helps in bringing down stress by helping people connect with others. "It (music) can satisfy the need to unwind from the worries of life, but unlike the other things people often use for this purpose, such as excessive eating, drinking, or TV or aimless web browsing, it makes people more alive and connected with one another. "</center></p></font>
 <center> <p align="justify"><font color="black">
    <b>Playing a musical instrument makes you smarter, improves your social life,  helps build confidence,  teaches patience, fosters creativity,  improves memory, develops discipline,and also gives you a sense of achievement.
<br></center></font>
      <br><center><font color="black">The best sayings ever:</font><b><font color="#C71585"> <br><b>“The only instrument through which time could be converted to yield greatness is the instrumentality of work.”
</b></font></b> <br></center>
    <!--<p align="justify"><b><font color="black"><br>
 <br><center><b><font color="#C71585"> <br><b></b></font></b> <br></center>

    </p></p></center></p></b></font>-->
  
  </div>
  

<!-- Footer -->
<footer class="site-footer no-separator"> 
        <div class="top-footer-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                          <div id="ttbase_framework_image_widget-3" class="widget widget_ttbase_framework_image_widget">
        <div class="ttbase-image-widget" >
                    <img class="img-responsive" width= 80px; src="images/logo.jpg" alt=""/>
                  </div>

      </div>                              </div>
              <div class="col-xs-12 col-sm-6 col-lg-3">
                          <div id="ttbase_framework_contact_widget-2" class="widget widget_ttbase_framework_contact_widget">
        <h4 class="title">Contact</h4>
        <div class="contact-widget  clearfix">

                    
          
            <div class="contact-widget-description clearfix">
              If you have any feedback or questions do not hesitate to contact us           </div>

                    
          
            <div class="contact-widget-address clearfix">
              <span class="fa fa-map-marker"></span>
              <p><b>ART MEDITATION<br />
Kharghar, NAVI MUMBAI,INDIA</b></p>
            </div>
    
              
              
            <div class="contact-widget-phone clearfix">
              <span class="fa fa-phone"></span>
              <b>Phone: +91 98213 66041 </b>           </div>
    
              
              
            <!--<div class="contact-widget-fax clearfix">
              <span class="fa fa-fax"></span>
              0800 999111223            </div>-->
    
              
              
            <div class="contact-widget-email">
              <span class="fa fa-envelope"></span>
                              <span>
                  vikram_sangeet@yahoo.co.in</b>              </span>
                                
                          </div>
    
                    
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
<!-- Go Top Links -->
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
