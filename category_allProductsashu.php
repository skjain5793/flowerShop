<?php $id = @$_GET['id']; ?>

<?php
include("config.php");

$fetchCategoryNameQuery = mysqli_query($conn,"select * from categories where cid='$id'");

$fetchCategory = mysqli_fetch_array($fetchCategoryNameQuery);

$category = $fetchCategory['category'];

$fetchCategorySubcategories = mysqli_query($conn,"select * from subcategories where cid = '$id'");

?>

<!DOCTYPE html>

<html lang="en-US" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<title>Flowrist1</title>


		<style type="text/css">
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
.header-topbar1, .wcaccount-topbar .wcaccount-dropdown > li {
    border-bottom: 1px;
    border-style: solid;
    border-color: #e9e9e9;
    height: 60px!important;
	background-color: #3b589c!important;
}
.header-topbar {
    font-size: 12px;
   background-color: #e1f1fc!important;
}

.topbar-notification .news-text {
    padding: 6px 0;

    text-align: center!important;
}

.co{color:black!important;}


</style>
<link rel='stylesheet' id='css-bootstrap-min-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='css'  href='css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='css'  href='css/styles4.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-notice-front-css'  href='wp-content/plugins/pl-emallshop-extensions/assets/css/cookie-notice.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='jquery-colorbox-css'  href='wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='wp-content/plugins/woocommerce/assets/css/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800' type='text/css' media='all' />
<link rel='stylesheet' id='product-bootstrap-min-css'  href='wp-content/themes/product/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-Font-Awesome-css'  href='wp-content/themes/product/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-woocommerce-css'  href='wp-content/themes/product/css/woocommerce.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-woocommerce-layout-css'  href='wp-content/themes/product/css/woocommerce-layout.css' type='text/css' media='all' />
<!--<link rel='stylesheet' id='product-jquery.fancybox-css'  href='wp-content/themes/product/css/jquery.fancybox.css' type='text/css' media='all' />-->
<link rel='stylesheet' id='product-owl-carousel-css'  href='wp-content/themes/product/js/owl-carousel/assets/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-owl-theme-default-min-css'  href='wp-content/themes/product/js/owl-carousel/assets/owl.theme.default.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-animate-css'  href='wp-content/themes/product/js/owl-carousel/assets/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-style-css'  href='wp-content/themes/product/style.css' type='text/css' media='all' />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .modal-dialog {
  position:absolute;
  top:50% !important;
  transform: translate(0, -50%) !important;
  -ms-transform: translate(0, -50%) !important;
  -webkit-transform: translate(0, -50%) !important;
  margin:auto 5%;
  width:90%;
  height:80%;
}
.modal-content {
  min-height:100%;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
}
.modal-body {
  position:absolute;
  top:45px; // height of header
  bottom:45px;  // height of footer
  left:0;
  overflow-y:auto;
}
.modal-footer {
  position:absolute;
  bottom:0;
  left:0;
  right:0;
}
  </style>


<style id='product-style-inline-css' type='text/css'>
	/*
	* page width
	*/
	.wrapper.boxed-layout, .wrapper .container{
		width:1170px;
	}
	body{
		background-color:#ffffff;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
	}

	/*
	* Body color Scheme
	*/
	body{
		color:#656565;
	}
	h1, h2, h3, h4, h5, h6{
		color:#212121;
	}
	a, .woocommerce ul.cart_list li a{
		color:#212121;
	}
	a:hover, a:focus, #header .header-cart-content .cart-item-detail a:hover, .category-entry:hover .category-content a, .entry-media .post-link:hover a, .woocommerce ul.cart_list li a:hover, .entry-footer a:hover, .entry-title a:hover {
		color:#e86f9d;
	}
	.header-cart-content .cart_list.product_list_widget .cart-box-title, .header-cart-content .cart_list.product_list_widget .empty, .header-cart-content .total, .header-cart-content .cart-product-list{
		color:#656565;
	}
	.product_list_widget .cart-item-detail .quantity, .woocommerce.widget_shopping_cart .total .amount, .header-cart-content .cart-product-list p.total .amount, .woocommerce ul.products .product-entry .product-content .price, .widget .product-price, .widget .product-categories li.current-cat-parent > a, .widget .product-categories li.current-cat-parent > span, .widget .product-categories li.current-cat > a, .widget .product-categories li.current-cat > span, .woocommerce .single-product-entry .product-price .price, .woocommerce .single-product-entry .single_variation .price, .single-product-entry .entry-summary .product-title-price .amount, .single-product-entry .entry-summary .product-title-price del, .single-product-entry .entry-summary .product-title-price ins, .entry-content .more-link, .portfolio-content .more-link, .services ul.services .service-item i, .entry-footer a, .entry-title a, .woocommerce .woocommerce-pagination ul.page-numbers span,.woocommerce .woocommerce-pagination ul.page-numbers a, .woocommerce ul.products .product-buttons .quickview:before, .woocommerce  ul.products .product-image .quickview-button a, .category-content, .category_and_sub_category_box .show-all-cate a, .categories-slider-content.sub_category_box .show-all-cate a, .entry-day, .woocommerce .single-product-entry .entry-summary .product_meta .sku_wrapper span, .woocommerce .single-product-entry .entry-summary .product_meta .brand_in a, .woocommerce .single-product-entry .entry-summary .product_meta .posted_in a, .woocommerce .single-product-entry .entry-summary .product_meta .tagged_as a, article.post .entry-header h2, .comment-list .comment-reply-link, .portfolio-list .portfolioFilter a, .portfolio-skill a, .entry-information ul p i, .portfolio-list .effect4 .portfolio-content, .portfolio-list .effect4 .portfolio-content a, .header-middle .customer-support, .posts-navigation .pagination > li > a, .posts-navigation .pagination > li > span, .search-product-list .search-product-price{
		color:#f79662;
	}
	.product-toolbar .gridlist-toggle > a, .woocommerce ul.products .product-buttons .compare:before, .woocommerce ul.products .product-buttons .add_to_wishlist:before, .woocommerce ul.products .yith-wcwl-wishlistaddedbrowse a:before, .woocommerce ul.products .yith-wcwl-wishlistexistsbrowse a:before, .woocommerce ul.products .product-content .product-buttons .quickview:before, .owl-theme .owl-nav .owl-prev, .owl-theme .owl-nav .owl-next, .single-product-entry  .entry-summary .product-navbar, .woocommerce .single-product-entry .entry-summary .compare, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist a, .single-product-entry .entry-summary .product_meta .brand_in a:hover, .single-product-entry .entry-summary .product_meta .posted_in a:hover, .single-product-entry .entry-summary .product_meta .tagged_as a:hover, .post-navigation a, .header-post-navigation .nav-links li a, .woocommerce .widget_layered_nav ul.yith-wcan-label li a, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li a, .woocommerce .widget_layered_nav ul.yith-wcan-label li span, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li span, .footer .widget  ul.services .service-icon, .woocommerce ul.products .product-entry .product-content a:hover h3, article .entry-action a{
		color:#e86f9d;
	}
	button, .button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .widget .tagcloud a:hover, .single-product-entry .thumbnails-carousel .owl-buttons .owl-prev, .single-product-entry .thumbnails-carousel .owl-buttons .owl-next, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce  ul.products .product-content .product-buttons .product-cart a.added_to_cart, .pagination .page-numbers.current, .lmp_load_more_button .lmp_button, .cwallowcookies.button, .entry-content .more-link:hover, .entry-summary .more-link:hover, .portfolio-content .more-link:hover, .entry-media blockquote, .entry-media .post-link, .woocommerce .woocommerce-pagination ul.page-numbers span.current, .woocommerce .woocommerce-pagination ul.page-numbers a:hover, .widget_price_filter .ui-slider .ui-slider-handle, .product-section .section-tab .nav-tabs li a:hover, .product-section .section-tab .nav-tabs li.active a, .testimonials .quote-content p, .testimonials-list .quote-content p, .entry-date .entry-month, .back-to-top, .portfolio-list .portfolioFilter a.current, .portfolio-list .portfolioFilter a:hover, .portfolio-list .effect1 .hentry:hover .portfolio-content, .portfolio-list .effect2 .hentry:hover .portfolio-content, .portfolio-list .effect3 .hentry:hover .portfolio-content, .woocommerce-MyAccount-navigation > ul li a, .header-cart-content .cart-style-1 .cart-icon, .header-cart-content .heading-cart.cart-style-3:before, .posts-navigation .pagination > li:hover > a, .topbar-notification .news-title, .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover, .product-items li.product .product-image .owl-theme .owl-controls .owl-dot.active span, .product-items li.product .product-image .owl-theme .owl-controls.clickable .owl-dot:hover span, .woocommerce  ul.products.product-style3.grid-view li.product:hover .product-buttons .product-cart a, .woocommerce  ul.products.product-style3.product-carousel li.product:hover .product-buttons .product-cart a{
		background-color:#f79662;
	}
	.woocommerce .selectBox-options li.selectBox-selected a{
		background-color:#f79662 !important;
	}
	.category-menu .category-menu-title, button:hover, .button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover,  input[type="submit"]:focus, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .single-product-entry .thumbnails-carousel .owl-buttons .owl-prev:hover, .single-product-entry .thumbnails-carousel .owl-buttons .owl-next:hover, .search-control-group .tt-menu .tt-suggestion:hover, .search-control-group .tt-menu .tt-suggestion.is-active, .lmp_load_more_button .lmp_button:hover, .cwallowcookies.button:hover, .cwcookiesmoreinfo.button:hover, .product-toolbar .gridlist-toggle .grid-view.active, .product-toolbar .gridlist-toggle .grid-view:hover, .product-toolbar .gridlist-toggle .list-view.active, .product-toolbar .gridlist-toggle .list-view:hover, .woocommerce ul.products .product-buttons .compare:hover, .woocommerce ul.products .product-buttons .compare.added, .woocommerce ul.products .product-buttons .add_to_wishlist:hover, .woocommerce ul.products .yith-wcwl-wishlistaddedbrowse a, .woocommerce ul.products .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products .product-content .product-buttons .quickview:hover, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span, .owl-theme .owl-nav .owl-prev:hover, .owl-theme .owl-nav .owl-next:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .countdown .countdown-section, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist:hover, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist:hover a, .woocommerce .single-product-entry .entry-summary .compare:hover, .single-product-entry .entry-summary .product-prev:hover .product-navbar, .single-product-entry .entry-summary .product-next:hover .product-navbar, .back-to-top:hover, .post-navigation .nav-previous:hover, .post-navigation .nav-next:hover, .header-post-navigation .nav-links li:hover, .portfolio-content .project-url a, .woocommerce-MyAccount-navigation > ul li a:hover, .topbar-cart .cart-count, .header-cart-content .cart-style-2 .cart-count, .header-wishlist .wishlist-count, .header-compare .compare-count, .topbar-cart .cart-count, .header-navigation  .header-cart-content .cart-style-1 .cart-icon, .header-navigation .header-cart-content .heading-cart.cart-style-3:before, .woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover, .woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a, .single-product-entry .thumbnails-carousel .owl-nav .owl-prev, .single-product-entry .thumbnails-carousel .owl-nav .owl-next, .product-items li.product .product-image .owl-nav .owl-prev, .product-items li.product .product-image .owl-nav .owl-next, article .entry-action a:hover{
		background-color:#e86f9d;
	}
	.woocommerce .selectBox-options li.selectBox-hover a{
		background-color:#e86f9d !important;
	}
	.product-section .section-header .section-title h3:before, .widget-section .widget-title h3:before, .testimonials-section .section-header .section-title h3:before, .widget .tagcloud a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product div.products h2 span:before, .cart-collaterals .cross-sells h2 span:before, .social-share h3 span:before, .navigation h3 span:before, .related-posts h3 span:before,.related-portfolios h3 span:before , #yith-wcwl-popup-message, .pagination .page-numbers.current, .entry-content .more-link:hover, .entry-summary .more-link:hover, .woocommerce .woocommerce-pagination ul.page-numbers span.current, .woocommerce .woocommerce-pagination ul.page-numbers a:hover, .product-section .section-tab .nav-tabs li a:hover, .product-section .section-tab .nav-tabs li.active a, .portfolio-list .portfolioFilter a.current, .portfolio-list .portfolioFilter a:hover, .portfolio-list .default_effect .portfolio-content, .related-portfolios .default_effect .portfolio-content, .posts-navigation .pagination > li:hover > a, .newsletter-section .section-header .section-title h3:before, .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover{
		border-color:#f79662;
	}
	.single-product-entry  .entry-summary .product-next .product-next-popup:before, .single-product-entry  .entry-summary .product-prev:hover .product-prev-popup:before, .woocommerce div.product .woocommerce-tabs ul.tabs:before, .product-section.products_carousel .section-tab, .post-navigation .nav-next .post-nav-thumb, .header-post-navigation .nav-next .post-nav-thumb, .post-navigation .nav-previous .post-nav-thumb, .header-post-navigation .nav-previous .post-nav-thumb, .header-cart-content .cart-product-list:before{
		border-bottom-color:#f79662 !important;
	}
	.widget li a::before, .topbar-notification .news-title::before{
		border-left-color:#f79662;
	}
	ul.main-navigation .sub-menu, ul.main-navigation .emallshop-megamenu-wrapper, .widget-area .widget, .header-cart-content .cart-product-list, .single-product-entry  .entry-summary .product-next .product-next-popup, .single-product-entry  .entry-summary .product-prev .product-prev-popup, .post-navigation .nav-next .post-nav-thumb:before, .header-post-navigation .nav-next .post-nav-thumb:before, .post-navigation .nav-previous .post-nav-thumb:before, .header-post-navigation .nav-previous .post-nav-thumb:before, .emallshop-main-menu .sub-menu, .emallshop-main-menu .emallshop-megamenu-wrapper, .footer {
		border-top-color:#f79662;
	}
	.product-toolbar .gridlist-toggle .grid-view.active, .product-toolbar .gridlist-toggle .grid-view:hover, .product-toolbar .gridlist-toggle .list-view.active, .product-toolbar .gridlist-toggle .list-view:hover, .woocommerce ul.products .product-content .product-extra-info, .owl-theme .owl-nav .owl-prev:hover, .owl-theme .owl-nav .owl-next:hover, .blogs_carousel .blog-entry .hentry:hover, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist:hover, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist:hover a, .woocommerce .single-product-entry .entry-summary .compare:hover, .single-product-entry .entry-summary .product-prev:hover .product-navbar, .single-product-entry .entry-summary .product-next:hover .product-navbar, .woocommerce .widget_layered_nav ul.yith-wcan-label li a, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li a, .woocommerce .widget_layered_nav ul.yith-wcan-label li span, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li span, .woocommerce .widget_layered_nav ul.yith-wcan-label li a:hover, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li a:hover, .woocommerce .widget_layered_nav ul.yith-wcan-label li.chosen a, .woocommerce-page .widget_layered_nav ul.yith-wcan-label li.chosen a, .single-product-entry .thumbnails-carousel .owl-item .item.active-item, .single-product-entry .thumbnails-carousel .owl-nav .owl-prev, .single-product-entry .thumbnails-carousel .owl-nav .owl-next{
		border-color:#e86f9d;
	}
	.product-items .list-view li.product:hover{
		border-bottom-color:#e86f9d;
	}
	.woocommerce a.selectBox, .woocommerce .selectBox-dropdown, .selectBox-dropdown-menu li a .woocommerce a.selectBox, .woocommerce a.selectBox:hover, .posts-navigation .pagination > li > a, .posts-navigation .pagination > li > span{
		border-color:#e9e9e9;
	}
	.woocommerce a.selectBox, .woocommerce a.selectBox:hover{
		border-bottom-color:#e9e9e9 !important;
	}
	.product-items .list-view li.product{
		border-bottom-color:#e9e9e9;
	}
	.product-toolbar .gridlist-toggle > a, table, th, td,.emallshop-main-menu .emallshop-vertical-menu, .widget, .secondary .widget > select,.widget .tagcloud a, .widget.yith-woocompare-widget .clear-all, .comment-area-wrap, .comment-avatar img, .comment-respond, .single-product-entry .thumbnails-carousel .owl-item .item, .woocommerce .single-product-entry .entry-summary .quantity .qty, .woocommerce-tabs .panel, .product-section .section-inner, .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1, .woocommerce .col2-set .col-2,.woocommerce-page .col2-set .col-2, .woocommerce .woocommerce-pagination ul.page-numbers span, .woocommerce .woocommerce-pagination ul.page-numbers a, .related-posts .hentry, .services ul.services .service-item, .testimonials-section .quote-meta  .client-image, .blogs_carousel .blog-entry .hentry, input, textarea, .woocommerce div.product .woocommerce-tabs ul.tabs li, .blog-posts .hentry, .portfolio-list .portfolioFilter a, .portfolio-list .hentry, .related-portfolios .hentry, .woocommerce form.checkout_coupon, .woocommerce form.login, .woocommerce form.register, .search-area, select, .emallshop-vertical-menu.main-navigation, .navigation.comment-navigation .nav-links, .search-control-group .tt-menu, .header-services .icon-service, .product-section .section-tab .nav-tabs li a, .single-product-entry .images #product-image{
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color: #3b589c;
	}
	.product-items li.product:hover, .product-items li.category-entry:hover, .product-section.products_brands .brands-carousel li.brand-item:hover, .woocommerce ul.products .product-buttons .add_to_wishlist, .woocommerce ul.products .yith-wcwl-wishlistaddedbrowse a, .woocommerce ul.products .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products .product-content .product-buttons .quickview, .woocommerce ul.products .product-buttons .compare, .owl-theme .owl-nav .owl-prev, .owl-theme .owl-nav .owl-next, .single-product-entry .entry-summary .product-navbar, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist, .post-navigation .nav-previous, .post-navigation .nav-next, .header-post-navigation .nav-links li:hover, .header-post-navigation .nav-links li, article .entry-action a {
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color:#e86f9d;
	}
	.emallshop-main-menu > ul.emallshop-vertical-menu > li > a, .emallshop-main-menu ul.emallshop-vertical-menu .sub-menu li, .widget-title,.widget_rss li, .widget ul.post-list-widget li, .widget ul.product_list_widget li, .portfolio_one_column .entry-portfolio .portfolio-skill, .woocommerce .single-product-entry .entry-summary .cart, .woocommerce div.product div.products h2, .cart-collaterals .cross-sells h2, .social-share h3, .navigation h3, .related-posts h3, .related-portfolios h3, .product-section.categories_and_products .section-title > a h3, .product-section .section-tab .nav-tabs, .product-section .section-tab .nav-tabs li a, .product-section .section-header .section-title, .newsletter-section .section-header .section-title, .testimonials-section .section-header .section-title, .widget-section .widget-title,  .woocommerce ul.cart_list li, .woocommerce ul.product_list_widget li, .product-toolbar, .product .entry-summary .product-countdown, .portfolio-list .one_column_grid, .portfolio-list .one_column_grid  .portfolio-skill, .emallshop-vertical-menu.main-navigation > li > a, .related-posts h3, .title_with_products_tab.product-section .section-header{
		border-bottom:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.portfolio_one_column .entry-portfolio .portfolio-skill, .woocommerce .single-product-entry .entry-summary .cart, .product-items .category-entry, .woocommerce-pagination, .portfolio-list .one_column_grid  .portfolio-skill, .woocommerce  ul.products .product-content .product-attrs{
		border-top:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.product-items .category-entry{
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.product-section.categories_and_products .section-tab, .categories_and_products.brands-products .section-content, .categories_and_products.only-categories .section-content, .categories_and_products.brands-categories .section-content, .product-section .section-brands .banner-img, .search-control-group .search-bar-controls{
		border-left:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	button, input, select, textarea, button,.button, input[type="button"], input[type="reset"], input[type="submit"], .lmp_load_more_button .lmp_button, ul.main-navigation li a .emallshop-menu-label span, .post-navigation .nav-next .post-nav-thumb, .header-post-navigation .nav-next .post-nav-thumb, .post-navigation .nav-previous .post-nav-thumb, .header-post-navigation .nav-previous .post-nav-thumb, .posts-navigation, ul.social-link li a, .wcaccount-topbar .wcaccount-dropdown, .search-area, .navigation.comment-navigation .nav-links, .selectBox-dropdown-menu.categories-filter-selectBox-dropdown-menu, .search-control-group .tt-menu, .header-cart-content .heading-cart.cart-style-3:before, .header-services .icon-service, .header-cart-content .cart-product-list, .widget .tagcloud a, .widget.yith-woocompare-widget .clear-all, .blog-posts .hentry, .entry-thumbnail .entry-action a, .entry-content .more-link, .entry-summary .more-link, .portfolio-content .more-link, .blogs_carousel .blog-entry .hentry, .entry-date, .comment-area-wrap, .comment-respond, .comment-avatar img, .woocommerce-tabs #reviews .comment-text, .comment-list, .woocommerce #content div.product #reviews .comment img, .woocommerce div.product #reviews .comment img, .woocommerce-page #content div.product #reviews .comment img, .woocommerce-page div.product #reviews .comment img, .related-posts .hentry, .testimonials-section .quote-content p, .testimonials-section .quote-meta  .client-image, .testimonials .quote-content p, .testimonials-list .quote-content p, .product-section.products_brands .brands-carousel .slide-row li.brand-item, .countdown .countdown-section, .emallshop-notice-wrapper, .category-content, .woocommerce .selectBox-dropdown, .selectBox-dropdown-menu li a .woocommerce a.selectBox, .woocommerce a.selectBox:hover, .product-items li.product, .product-items li.category-entry, .woocommerce  ul.products.product-style2 .product-content .product-buttons .compare, .woocommerce  ul.products.product-style2 .product-content .product-buttons .add_to_wishlist, .woocommerce  ul.products.product-style2 .product-content .yith-wcwl-wishlistaddedbrowse a, .woocommerce  ul.products.product-style2 .product-content .yith-wcwl-wishlistexistsbrowse a, .woocommerce  ul.products.product-style2 .product-content .product-buttons .quickview, .woocommerce  ul.products.product-style1 .product-content .product-buttons .compare, .woocommerce  ul.products.product-style1 .product-content .product-buttons .add_to_wishlist, .woocommerce  ul.products.product-style1 .product-content .yith-wcwl-wishlistaddedbrowse a, .woocommerce  ul.products.product-style1 .product-content .yith-wcwl-wishlistexistsbrowse a, .woocommerce  ul.products.product-style1 .product-content .product-buttons .quickview, .woocommerce  ul.products.product-style2 .product-content .product-buttons .product-cart a, .woocommerce  ul.products.product-style1 .product-content .product-buttons .product-cart a, .woocommerce ul.products.product-style3.list-view .product-buttons .product-cart a, .woocommerce ul.products.product-style3.list-view .product-buttons .compare, .woocommerce ul.products.product-style3.list-view .product-buttons .add_to_wishlist, .woocommerce ul.products.product-style3.list-view .yith-wcwl-wishlistaddedbrowse a, .woocommerce ul.products.product-style3.list-view .yith-wcwl-wishlistexistsbrowse a, .woocommerce ul.products.product-style3.list-view .product-content .product-buttons .quickview, .woocommerce ul.products.product-style3.list-view .product-content .product-buttons .product-cart a, .single-product-entry .images #product-image, .single-product-entry .thumbnails-carousel .owl-item .item, .single-product-entry  .entry-summary .product-next .product-next-popup, .single-product-entry  .entry-summary .product-prev .product-prev-popup, .woocommerce table.shop_table, .woocommerce .cart_totals, .woocommerce-checkout .order_review,  .order_details-area, .customer-details-area, .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1, .woocommerce .col2-set .col-2, .woocommerce-page .col2-set .col-2, .woocommerce form.checkout_coupon, .woocommerce form.login, .woocommerce form.register, .woocommerce-MyAccount-navigation > ul li a, .portfolio-list .hentry, .related-portfolios .hentry, .portfolio-content .project-url a, .woocommerce .single-product-entry .entry-summary .yith-wcwl-add-to-wishlist, .woocommerce .single-product-entry .entry-summary .compare, .portfolio-list .portfolioFilter a, .widget-area .widget, .single-product-entry .thumbnails-carousel .owl-nav .owl-prev, .single-product-entry .thumbnails-carousel .owl-nav .owl-next, .content-area .rev_slider_wrapper li.tp-revslider-slidesli, div.wpb_single_image .vc_single_image-wrapper img, .post-slider.owl-carousel .owl-nav .owl-prev, .post-slider.owl-carousel .owl-nav .owl-next, #cookie-notice.cn-bottom.box, .category-banner-content .category-banner, .newsletter-content.modal-content, .wpb_wrapper .vc_single_image-wrapper{
		border-radius: 3px;
	}
	.topbar-notification .news-title, .header-cart-content .cart-style-1 .cart-icon, .owl-theme .owl-nav .owl-prev, .services ul.services .service-item:first-child, .product-toolbar .gridlist-toggle > a:first-child, .woocommerce .woocommerce-pagination ul.page-numbers li:first-child .page-numbers, .product-items li.product .product-image .owl-nav .owl-prev, .single-product-entry .product-prev .product-navbar, .header-post-navigation .nav-links li:first-child{
		border-radius:3px 0 0 3px;
	}
	.search-area .search-bar-controls .search-btn, .header-cart-content .cart-style-1 .cart-count, .owl-theme .owl-nav .owl-next, .services ul.services .service-item:last-child, .product-toolbar .gridlist-toggle > a:last-child, .woocommerce .woocommerce-pagination ul.page-numbers li:last-child .page-numbers, .product-items li.product .product-image .owl-nav .owl-next, .single-product-entry .product-next .product-navbar, .header-post-navigation .nav-links li:last-child{
		border-radius:0 3px 3px 0;
	}
	.back-to-top, .product-section .section-tab .nav-tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li, .vertical-menu-section .category-menu .category-menu-title{
		border-radius:3px 3px 0 0;
	}
	.woocommerce  ul.products .product-content .product-extra-info, .woocommerce div.product .woocommerce-tabs .panel{
		border-radius: 0 0 3px 3px;
	}
	.pagination > li:last-child > a, .pagination > li:last-child > span{
		border-bottom-right-radius: 3px;
		border-top-right-radius:3px;
	}
	.pagination > li:first-child > a, .pagination > li:first-child > span{
		border-bottom-left-radius:3px;
		border-top-left-radius:3px;
	}
	::-webkit-input-placeholder {
	   color:#656565;
	}
	:-moz-placeholder { /* Firefox 18- */
	  color:#656565;
	}
	::-moz-placeholder {  /* Firefox 19+ */
	   color:#656565;
	}
	:-ms-input-placeholder {
	   color:#656565;
	}


	@media only screen and (max-width : 480px) {
		.woocommerce-cart table.cart tr, .woocommerce table.wishlist_table tbody tr{
			border-top:1px;
			border-bottom:1px;
			border-left:1px;
			border-right:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
		.woocommerce-cart table.cart tr:last-child, .woocommerce table.wishlist_table tbody tr:last-child{
			border-bottom:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
	}
	@media (min-width:480px) and (max-width:620px){
		.woocommerce-cart table.cart tr, .woocommerce table.wishlist_table tbody tr{
			border-top:1px;
			border-bottom:1px;
			border-left:1px;
			border-right:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
		.woocommerce-cart table.cart tr:last-child, .woocommerce table.wishlist_table tbody tr:last-child{
			border-bottom:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
	}
	@media only screen and (max-width : 991px) {
		.section-sub-categories{
			border-top:1px;
			border-bottom:1px;
			border-left:1px;
			border-right:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
		.section-sub-categories{
			border-radius:3px;
		}
	}
	/* @media only screen and (max-width : 1199px) {
		.header-middle .mobile-main-navigation, .header-middle .mobile-main-navigation .toggle-menu h4{
			color:#f79662;
		}
	} */

	/*
	* topbar color scheme
	*/
	.header-topbar, .wcaccount-topbar .wcaccount-dropdown{
		background-color:#ffffff;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#656565;
	}
	.header-topbar input[type="textbox"], .header-topbar input[type="email"], .header-topbar select, .header-topbar textarea{
		background-color:#ffffff;
		color:#656565;
	}
	.header-topbar a{
		color:#212121;
	}
	.header-topbar a:hover{
		color:#e86f9d;
	}
	.header-topbar a:active{
		color:#e86f9d;
	}
	.header-topbar ::-webkit-input-placeholder {
	   color:#656565;
	}
	.header-topbar :-moz-placeholder { /* Firefox 18- */
	  color:#656565;
	}
	.header-topbar ::-moz-placeholder {  /* Firefox 19+ */
	   color:#656565;
	}
	.header-topbar :-ms-input-placeholder {
	   color:#656565;
	}
	.header-topbar input[type="textbox"], .header-topbar input[type="email"], .header-topbar select, .header-topbar textarea{
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.header-topbar, .wcaccount-topbar .wcaccount-dropdown > li {
		border-bottom:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.topbar-right > span:last-child{
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.topbar-right > span{
		border-left:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}


	@media only screen and (max-width : 480px) {
		.header-topbar .topbar-right{
			border-top:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
	}
	@media (min-width: 481px) and (max-width: 767px) {
		.header-topbar .topbar-right{
			border-top:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
	}

	/*
	* header color scheme
	*/
	.header-middle{
		background-color:#ffffff;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#656565;
	}
	.header-middle .header-right > span > a, .header-middle .header-cart.cart-style-2 > a, .header-middle .header-cart-content .heading-cart.cart-style-3 h6, .header-middle .header-cart-content .heading-cart.cart-style-3 a, .header-middle .header-cart-content .heading-cart.cart-style-3 h6, .header-services .content-service h6{
		color:#656565;
	}
	.header-middle .search-area, .woocommerce .header-middle .search-bar-controls a.selectBox{
		background-color:#ffffff;
	}
	.header-middle .search-area .search-field, .header-middle .search-bar-controls a.selectBox{
		color:#656565;
	}
	.header-middle a{
		color:#212121;
	}
	.header-middle a:hover, .header-middle .header-right > span > a:hover, .header-middle .header-cart.cart-style-2 > a:hover{
		color:#e86f9d;
	}
	.header-middle a:active{
		color:#e86f9d;
	}
	.header-middle ::-webkit-input-placeholder {
	   color:#656565;
	}
	.header-middle :-moz-placeholder { /* Firefox 18- */
	  color:#656565;
	}
	.header-middle ::-moz-placeholder {  /* Firefox 19+ */
	   color:#656565;
	}
	.header-middle :-ms-input-placeholder {
	   color:#656565;
	}
	.header-middle .search-area, .header-middle .header-cart-content .cart-style-1 .cart-count, .header-services .icon-service{
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	/*.header-middle{
		border-bottom:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}*/
	.header-middle .search-control-group .search-bar-controls, .header-middle ul.emallshop-horizontal-menu.main-navigation > li{
		border-left:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.header-middle ul.emallshop-horizontal-menu.main-navigation > li:last-child{
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	@media only screen and (min-width : 1200px) {
		.header-middle ul.main-navigation > li > a{
			color:#212121;
		}
		.header-middle ul.main-navigation > li > a:hover{
			color:#e86f9d;
		}
		.header-middle ul.main-navigation > li > a:active{
			color:#e86f9d;
		}
	}

	/*
	* navigation bar color scheme
	*/
	.header-navigation{
		background-color:#f79662;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#ffffff;
	}
	.header-navigation .category-menu .category-menu-title h4, .header-navigation .category-menu .category-menu-title, .header-navigation .header-cart-content .heading-cart.cart-style-3 h6, .header-navigation .header-cart-content .heading-cart.cart-style-3 a{
		color:#ffffff;
	}
	.header-navigation .category-menu .category-menu-title, .header-navigation .search-area .search-bar-controls .search-btn {
		background-color:#e86f9d;
	}
	.header-navigation .search-area, .woocommerce .header-navigation .search-bar-controls a.selectBox{
		background-color:#ffffff;
	}
	.header-navigation .search-area .search-field, .header-navigation .search-bar-controls a.selectBox{
		color:#656565;
	}
	.header-navigation a{
		color:#ffffff;
	}
	.header-navigation a:hover{
		color:#ffffff;
	}
	.header-navigation a:active{
		color:#ffffff;
	}
	.header-navigation ::-webkit-input-placeholder {
	   color:#656565;
	}
	.header-navigation :-moz-placeholder { /* Firefox 18- */
	  color:#656565;
	}
	.header-navigation ::-moz-placeholder {  /* Firefox 19+ */
	   color:#656565;
	}
	.header-navigation :-ms-input-placeholder {
	   color:#656565;
	}
	.header-navigation .search-area, .header-navigation .header-cart-content .cart-style-1 .cart-count{
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.header-navigation ul.emallshop-horizontal-menu.main-navigation > li{
		border-left:1px;
		border-style:solid;
		border-color:#fb9c68;
	}
	.header-navigation ul.emallshop-horizontal-menu.main-navigation > li:last-child{
		border-right:1px;
		border-style:solid;
		border-color:#fb9c68;
	}


	/*
	* Menu color scheme
	*/
	ul.main-navigation .sub-menu, ul.main-navigation .emallshop-megamenu-wrapper, ul.main-navigation .toggle-submenu{
		background-color:#ffffff;
		color:#656565;
	}
	ul.main-navigation .sub-menu li a, ul.main-navigation .emallshop-megamenu-title a, .emallshop-megamenu-wrapper .emallshop-megamenu-submenu .widget li a{
		color:#212121;
	}
	ul.main-navigation .sub-menu li a:hover, ul.main-navigation .emallshop-megamenu-title a:hover, .emallshop-megamenu-wrapper .emallshop-megamenu-submenu .widget li a:hover{
		color:#e86f9d;
	}
	ul.main-navigation .sub-menu li a:active, ul.main-navigation .emallshop-megamenu-title a:active, .emallshop-megamenu-wrapper .emallshop-megamenu-submenu .widget li a:action{
		color:#e86f9d;
	}
	ul.main-navigation .sub-menu li, ul.main-navigation .widget_rss li, ul.main-navigation .widget ul.post-list-widget li{
		border-bottom:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	ul.main-navigation .emallshop-megamenu-wrapper .emallshop-megamenu > li{
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}


	@media only screen and (max-width : 1199px) {
		ul.main-navigation li a:hover{
			color:#e86f9d;
		}
		.emallshop-main-menu ul.main-navigation li a{
			border-bottom:1px;
			border-style:solid;
			border-color:#e9e9e9;
		}
	}

	/*
	* Page heading color scheme
	*/
	#header .page-heading{
		background-color:#FCFCFC;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#656565;
	}
	.page-heading .page-header .page-title{
		color:#212121;
	}
	#header .page-heading{
		border-bottom:1px;
		border-style:solid;
		border-color:#f5f5f5;
	}
	.page-heading a{
		color:#212121;
	}
	.page-heading a:hover{
		color:#e86f9d;
	}

	/*
	* footer color scheme
	*/
	.footer .footer-top, .footer .footer-middle{
		background-color:#fcfcfc;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#656565;
	}
	.footer .widget-title{
		color:white!important;
	}
	.footer input[type="textbox"], .footer input[type="email"], .footer select, .footer textarea{
		background-color:#ffffff;
		color:#656565;
	}
	.footer .footer-top a, .footer .footer-middle  a{
		color:white!important;
	}
	.footer .footer-top a:hover, .footer .footer-middle a:hover{
		color:#e86f9d;
	}
	.footer .footer-top a:active, .footer .footer-middle a:active{
		color:#e86f9d;
	}
	.footer ::-webkit-input-placeholder {
	   color:#656565;
	}
	.footer :-moz-placeholder { /* Firefox 18- */
	  color:#656565;
	}
	.footer ::-moz-placeholder {  /* Firefox 19+ */
	   color:#656565;
	}
	.footer :-ms-input-placeholder {
	   color:#656565;
	}
	.footer input[type="textbox"], .footer input[type="email"], .footer select, .footer textarea{
		border-top:1px;
		border-bottom:1px;
		border-left:1px;
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}
	.footer .footer-top, .footer .footer-middle{
		border-bottom:1px;
		border-style:solid;
		border-color: rgba(224, 203, 203, 0.08);
	}
	.footer .popular-categories .categories-list li{
		border-right:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}

	/*
	* Copyright color scheme
	*/
	.footer-copyright{
		background-color:#3b589c;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#656565;
	}
	.footer-copyright a{
		color:#212121;
	}
	.footer-copyright a:hover{
		color:#e86f9d;
	}
	.footer-copyright a:active{
		color:#e86f9d;
	}
	.footer-copyright{
		border-bottom:1px;
		border-style:solid;
		border-color:#e9e9e9;
	}

	/*
	* General color scheme
	*/
	.product .product-highlight .out-of-stock span{
		background-color:#FF4557;
	}
	.product .product-highlight .onsale span{
		background-color:#60BF79;
	}
	.product .product-highlight .new span{
		background-color:#48c2f5;
	}
	.product .product-highlight .featured span{
		background-color:#ff781e;
	}

	.yit-wcan-container .yith-wcan-loading {
		background: url(wp-content/themes/emallshop/admin/images/ajax-loader.gif) no-repeat center;
	}

	/*
	* Newsletter Color
	*/
	.newsletter-content.modal-content{
		background-color:#0ba2e8;
		background-image:url();
		background-repeat:;
		background-size:;
		background-attachment:;
		background-position:;
		color:#ffffff;
	}
	.newsletter-content .close, .newsletter-content .newsletter-text > h1{
		color:#ffffff;
	}
	.newsletter-content .mc4wp-form-fields input[type="submit"]{
		background-color:#FF8400;
	}

	p {
    margin-bottom: 0.8em;
    color: white!IMPORTANT;
}

.footer-middle ul.about-us li i {

    COLOR: WHITE!IMPORTANT;
}

.product-toolbar .gridlist-toggle > a, table, th, td, .emallshop-main-menu .emallshop-vertical-menu, .widget, .secondary .widget > select, .widget .tagcloud a, .widget.yith-woocompare-widget .clear-all, .comment-area-wrap, .comment-avatar img, .comment-respond, .single-product-entry .thumbnails-carousel .owl-item .item, .woocommerce .single-product-entry .entry-summary .quantity .qty, .woocommerce-tabs .panel, .product-section .section-inner, .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1, .woocommerce .col2-set .col-2, .woocommerce-page .col2-set .col-2, .woocommerce .woocommerce-pagination ul.page-numbers span, .woocommerce .woocommerce-pagination ul.page-numbers a, .related-posts .hentry, .services ul.services .service-item, .testimonials-section .quote-meta .client-image, .blogs_carousel .blog-entry .hentry, input, textarea, .woocommerce div.product .woocommerce-tabs ul.tabs li, .blog-posts .hentry, .portfolio-list .portfolioFilter a, .portfolio-list .hentry, .related-portfolios .hentry, .woocommerce form.checkout_coupon, .woocommerce form.login, .woocommerce form.register, .search-area, select, .emallshop-vertical-menu.main-navigation, .navigation.comment-navigation .nav-links, .search-control-group .tt-menu, .header-services .icon-service, .product-section .section-tab .nav-tabs li a, .single-product-entry .images #product-image {
    border-top: 1px;
    border-bottom: 1px;
    border-left: 1px;
    border-right: 1px;
    border-style: solid;
   border-color: #3b589c!IMPORTANT;
}
</style>

<link rel='stylesheet' id='bsf-Defaults-css'  href='wp-content/uploads/smile_fonts/Defaults/Defaults.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript'>

var wc_add_to_cart_params = {"ajax_url":"\/emallshop\/beauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/emallshop\/beauty\/product-category\/hair-care\/?add_to_wishlist=556&wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/cart\/","is_cart":"","cart_redirect_after_add":"no"};

</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.7.2" />
<meta name="generator" content="WooCommerce 2.6.9" />
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<meta name="generator" content="Powered by Slider Revolution 5.3.0 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

<script>
function fetchCategoryProducts(id)
{
	window.location = "category_allProducts.php?id="+id;
}
</script>



</head>


<body class="archive tax-product_cat term-hair-care term-44 sticky-navigation woocommerce woocommerce-page yith-wcan-free wpb-js-composer js-comp-ver-5.0 vc_responsive">


<div class="wrapper">
	<header id="header" class="header-4">

		<div class="header-topbar">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
						<div class="topbar-notification">

			<div class="news-text">
				<span class="break-new" style="text-align:center;"><a href="#" style="color:black;font-size: 13px; ">Super Sale 50%Big Promotion on Valentine daysGift 15 Voucher for</a> </span>
			</div>
		</div>
				</div>

		</div>
	</div>
</div>
<div class="header-middle">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">

		<div class="header-logo" style="float:right;">
							<a href="#" rel="home"> <img src="images/logo.png" alt="logo" ></a>
					</div>			</div>

			<div class="col-sm-5">
				<div class="header-right">
							<aside  class="widget coming_stay_connected">

		<div class="stay-connected-widget style-1">
					<ul class="social-link">
							<li class="icon-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="icon-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

										<li class="icon-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>

										<li class="icon-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
			</div>

		</aside>

				</div>
			</div>
		</div>
	</div>
</div>


<div class="header-topbar1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="search-area">
    <form id="search-header-form" method="get" class="woocommerce-product-search" action="#">
        <div class="search-control-group control-group">
			<div class="search-field-area">
				<label class="screen-reader-text">I'm shopping for...</label>
				<input type="search" class="search-field" placeholder="I&#039;m shopping for..." value="" name="s" title="I&#039;m shopping for..." />
				<img class="Typeahead-spinner" src="images/ajax-loader.gif" alt="search loader">
			</div>
            <div class="search-bar-controls">


			<button type="submit" class="search-btn"></button>
            <input type="hidden" name="post_type" value="product" />
            </div>
        </div>
    </form>
</div>			</div>

		</div>
	</div>
</div>









<div class="header-navigation">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-9">
							<div class="header-main-navigation" role="navigation">
				<div class="emallshop-main-menu visible-lg"><ul id="menu-primary-menu" class="emallshop-horizontal-menu main-navigation"><li  id="menu-item-584"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-200 current_page_item menu-item-584"  ><a    href="#">About Us<span class="emallshop-menu-label"></span></a></li>
<li  id="menu-item-585"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-585 emallshop-megamenu-menu"  ><a    href="#">FAQ</a>
<div class='product-megamenu-wrapper product-columns-3 columns-per-row-3 columns-3 col-span-6' data-maxwidth='1100' ><div class='row'>

<div style='clear:both;'></div>
</div>
</div>
</li>
<li  id="menu-item-606"  class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-606 emallshop-megamenu-menu"  ><a    href="#">My Account<span class="emallshop-menu-label"></span> </a>

</li>
<li  id="menu-item-586"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-586 emallshop-dropdown-menu"  ><a    href="#">Contact</a>

</li>


</ul></div>





		<div class="mobile-main-navigation visible-xs visible-sm visible-md">
					<div class="toggle-menu">
						<h4>Main Menu</h4>
						<span class="down-up"><i class="fa fa-list"></i></span>
					</div>
				</div>
				<div class="emallshop-main-menu emallshop-mobile-menu"><ul id="menu-primary-menu-1" class="main-navigation emallshop-horizontal-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-200 current_page_item menu-item-584"><a href="#">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-585"><a href="#">Shop</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-672"><a href="#">Pages</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-670"><a href="#">Shop</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-669"><a href="#">My Account</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-667"><a href="#">Cart</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-668"><a href="#">Checkout</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-847"><a href="#">Order Tracking</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-671"><a href="#">Wishlist</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-666"><a href="#">Categories</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-660"><a href="#">Hair Care</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-661"><a href="#">Luxury Beauty</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-662"><a href="#">Make-Up &#038; Nails</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-663"><a href="#">Mens Grooming</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-664"><a href="#">Skin Care</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-665"><a href="#">Tools &#038; Accessories</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-843"><a href="#">Product Variation</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-842"><a href="#">New Product</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-840"><a href="#">Sale Products</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-841"><a href="#">Featured Product</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-839"><a href="#">Variable Product</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-844"><a href="#">External Product</a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-606"><a href="#">Luxury Beauty</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-607"><a href="#">Hair Care</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-608"><a href="#">Conditioners</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-609"><a href="#">Hair Oils</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-610"><a href="#">Hair Treatments</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-611"><a href="#">Shampoos</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-626"><a href="#">Bath &#038; Shower</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-627"><a href="#">Fragrance</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-640"><a href="#">Hair Styling Tools</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-612"><a href="#">Make-Up &#038; Nails</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-613"><a href="#">Eyes</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-614"><a href="#">Face</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-615"><a href="#">Nails</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-628"><a href="#">Tools &#038; Accessories</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-629"><a href="#">Bags &#038; Cases</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-630"><a href="#">Hair Styling Tools</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-638"><a href="#">Face Cleansers</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-616"><a href="#">Mens Grooming</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-617"><a href="#">Fragrances &#038; Deodorants</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-618"><a href="#">Haircare &#038; Styling</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-619"><a href="#">Men’s Skincare</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-620"><a href="#">Shavers and trimmers</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-631"><a href="#">Make-up Brushes &#038; Tools</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-632"><a href="#">Nail Tools</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-636"><a href="#">Conditioners</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-637"><a href="#">Hair Oils</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-621"><a href#">Skin Care</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-622"><a href="#">Day creams &#038; Moisturizers</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-623"><a href="#">Face Cleansers</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-624"><a href="#">Night Creams</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-625"><a href="#">Toners &#038; Astringents</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-633"><a href="#">Tools &#038; Accessories</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-634"><a href="#">Bags &#038; Cases</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-635"><a href="#">Hair Styling Tools</a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-586"><a href="#">Pages</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-641"><a href="#">About Us</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646"><a href="#">Services</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-642"><a href="#">Contact Us</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-643"><a href="#">Contact Us 2</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-644"><a href="#">Contact Us 3</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="#">Tabs</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645"><a href="#">FAQ</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-648"><a href="#">404 Page</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-587"><a href="#">Blog</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a href="#">Blog Large Image</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-593"><a href="#">Blog Small Image</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-589"><a href="#">Blog Masonry Grid</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590"><a href="#">2 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-591"><a href="#">3 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-592"><a href="#">4 Columns</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-650"><a href="#">Single Post</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-653"><a href="#">Post Format: Image</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-652"><a href="#">Post Format: Gallery</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-656"><a href="#">Post Format: Video (YouTube)</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-655"><a href="#">Post Format: Quote</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-651"><a href="#">Post Format: Audio</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-654"><a href="#">Post Format: Link</a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-594"><a href="#">Portfolios</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-599"><a href="#">Normal Grid</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-600"><a href="#">1 Column</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-601"><a href="#">2 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-602"><a href="#">3 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-603"><a href="#">4 Columns</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-595"><a href="#">Masonry Grid</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-596"><a href="#">2 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-597"><a href="#">3 Columns</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-598"><a href="#">4 Columns</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-657"><a href="#">Single Portfolio</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-605"><a href="#">Buy Now!</a></li>
</ul></div>			</div>
				</div>
			<div class="col-xs-6 col-md-3">
						<div class="header-cart-content">
							<div class="heading-cart cart-style-3">
					<a class="cart-contents" href="#">
						<h6>Shopping Cart</h6>
						<span>0 item(s) - <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#x20a8;</span>0.00</span></span>
					</a>

				</div>
						<div class="cart-product-list woocommerce">


<ul class="cart_list product_list_widget ">


		<li class="empty">No products in the cart.</li>


</ul>


			</div>
		</div>
				</div>
		</div>
	</div>
</div>


			</header>
	<div id="main-content" class="site-content">

		<div class="container">
				<div class="row"><br>
				<div class="page-heading page-heading-2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 ">

								<div class="page-header">
																	<h1 class="page-title"><?php echo $category; ?></h1>
																</div>

						<nav class="woocommerce-breadcrumb" ><a href="#">Home</a> <i class="fa fa-angle-right"></i> <?php echo $category; ?></nav>
					</div>
				</div>
			</div>
		</div>
        	<div class="content-area col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">





	<div class="woocommerce-message"><a href="#" class="button wc-forward">View Cart</a> &ldquo;Maxtop Electric Hair Straightener Comb Brush&rdquo; has been added to your cart.</div>

		<div class="product-toolbar" >

	<div class="gridlist-toggle">
					<a href="#" class="grid grid-view active" title="View as Grid"><i class="fa fa-th"></i></a>
									<a href="#" class="list list-view " title="View as List"><i class="fa fa-th-list"></i></a>
					</div>
	<form class="woocommerce-ordering" method="get">

	Sort By:	<select name="orderby" class="orderby selectBox">
					<option value="menu_order"  selected='selected'>Default sorting</option>
					<option value="popularity" >Sort by popularity</option>
					<option value="rating" >Sort by average rating</option>
					<option value="date" >Sort by newness</option>
					<option value="price" >Sort by price: low to high</option>
					<option value="price-desc" >Sort by price: high to low</option>
			</select>
	<input type="hidden" name="add_to_wishlist" value="556" /><input type="hidden" name="add-to-cart" value="556" /></form>

		<div class="product-toolbar-pagination">

		<form class="show-products-number" method="get">
			<span>View:</span>
			<select name="showproducts" class="selectBox">
				<option value="6" >6 </option><option value="8" >8 </option><option value="10" >10 </option><option value="12"  selected='selected'>12 </option><option value="15" >15 </option><option value="16" >16 </option><option value="18" >18 </option><option value="20" >20 </option><option value="24" >24 </option><option value="27" >27 </option><option value="28" >28 </option><option value="30" >30 </option><option value="32" >32 </option><option value="33" >33 </option><option value="36" >36 </option><option value="40" >40 </option><option value="48" >48 </option><option value="60" >60 </option><option value="72" >72 </option><option value="84" >84 </option><option value="108" >108 </option><option value="120" >120 </option>			</select>
			<input type="hidden" name="add_to_wishlist" value="556"><input type="hidden" name="add-to-cart" value="556">		</form>

		</div>

		</div>
		<div class="product-items">





		<ul class="products product-style1 is_shop grid grid-view" data-navigation="1" data-pagination="0">


<?php


		while($categorySubcategory = mysqli_fetch_array($fetchCategorySubcategories))
	  {
			$subcategoryId =  $categorySubcategory['sid'];
			$fetchProductsQuery = mysqli_query($conn,"select * from products where sid = '$subcategoryId'");
			while($products = mysqli_fetch_array($fetchProductsQuery))
			{
			?>



					<li class="col-xs-6 col-sm-6 col-md-4 col-lg-3 post-556 product type-product status-publish has-post-thumbnail" data-postID="post-556">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">




				<div class="onsale"><span>50% Off</span></div>
			</div>
		<img width="300" height="351" src="admin/products/<?php echo $products['image']; ?>" class="front-image wp-post-image" alt="" /></a>			<div class="product-slider-controls owl-nav post-556">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-556">
		    <div class="yith-wcwl-add-button hide" style="display:none">


<a href="#" rel="nofollow" data-product-id="556" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>



	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="556" rel="nofollow">Compare</a></div>				
			<!--	<div class="quickview-button">
					<a class="quickview" href="#"  data-toggle="modal" data-target="#myModal" data-product_id="556">Quick View</a>
				</div>		-->
				
								
			
			    <div class="quickview-button">
					<a class="quickview"  href="#deletepost-<?php echo $products['pid'];?>" data-toggle="modal"  data-product_id="556">Quick View</a>
					           <!--                 <a href="#deletepost-<?php echo $products['pid'];?>" data-toggle="modal">
                                <span class="label label-important">Delete post</span>
                            </a>-->

				</div>		
			
				</div>




		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3><?php echo $products['name']; ?></h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="4"><span style="width:80%"><strong class="rating">4</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p class="co"><?php echo $products['description']; ?>.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs.</span><?php echo $products['actual_price']; ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span><?php echo $products['price']; ?></span></ins></span>

		</div>
		<div class="product-buttons">

		<div class=""> <!-- product-cart class -->
		<a rel="nofollow" href="#" id="<?php echo $products['pid']; ?>" data-quantity="1" data-product_id="556" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" onclick="addToCart(this.id)">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-556">
		    <div class="yith-wcwl-add-button hide" style="display:none">


<a href="#" rel="nofollow" data-product-id="556" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>



	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="556" rel="nofollow">Compare</a></div>			
         <!--   <div class="quickview-button">
				<a class="quickview" href="#"  data-toggle="modal" data-target="#myModal" data-product_id="556">Quick View </a>
			</div> -->
			
				
			<div class="quickview-button">
					<a class="quickview" href="#deletepost-<?php echo $products['pid'];?>" data-toggle="modal" data-product_id="556">Quick View</a>
					                    <!--        <a href="#deletepost-<?php echo $products['pid'];?>" data-toggle="modal">
                                <span class="label label-important">Delete post</span>
                            </a>-->

		    </div>		
			
			
		</div>

		</div>
			</div>
			
			
			



<div class="modal fade" id="deletepost-<?php echo $products['pid'];?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $products['name']; ?></h4>
        </div>
        <div class="modal-body">
			<div class="row">
				<div class="col-md-6"><img src="admin/products/<?php echo $products['image'];?>" class="img-rounded img-responsive img-full"></div>
				<div class="col-md-6">
					<strong>Product : </strong><?php echo $products['name']; ?> <br> <br>
					<strong>Price : </strong><del>Rs. <?php echo $products['actual_price']; ?></del>  <ins>Rs. <?php echo $products['price']; ?></ins>  <br><br>
					<strong>Description : </strong><?php echo $products['description']; ?>

				</div>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



			
			
			
			

</li>
<?php } } ?>



			


		</ul>






		</div>



		</div>

	<div id="sidebar" class="sidebar col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
	<div id="secondary" class="secondary">

<?php $fetchAllCategories = mysqli_query($conn,"select * from categories");

?>


					<div id="widget-area" class="widget-area" role="complementary">
<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h3 class="widget-title">Product Categories</h3>
				<ul class="product-categories">

<?php 	while($allCategories = mysqli_fetch_array($fetchAllCategories)) { ?>

<li class="cat-item cat-item-44 current-cat cat-parent"><a href="#" id="<?php echo $allCategories['cid']; ?>" onclick = "fetchCategoryProducts(this.id);"><?php echo $allCategories['category']; ?></a> <span class="count"></span></li>
<?php } ?>

       </ul>
</aside>

<aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
	<h3 class="widget-title">Filter by price</h3>
	<form method="get" action="#">
			<div class="price_slider_wrapper">
				<div class="price_slider" style="display:none;"></div>
				<div class="price_slider_amount">
					<input type="text" id="min_price" name="min_price" value="" data-min="225" placeholder="Min price" />
					<input type="text" id="max_price" name="max_price" value="" data-max="265" placeholder="Max price" />
					<button type="submit" class="button">Filter</button>
					<div class="price_label" style="display:none;">
						Price: <span class="from"></span> &mdash; <span class="to"></span>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</form>
		</aside>
		
		
			<aside id="emallshop-products-2" class="widget emallshop_widget_products"><h3 class="widget-title">Recent Products</h3>
			            <ul class="product_list_widget owl-carousel productsCarousel-5898375ec1441 woocommerce">
															<li class="slide-row">
							<ul>

						<li>
	<div class="product-image">
		<a href="#" title="Balancing Lotus Herbals Youth Rx pH">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Balancing-Lotus-Herbals-Youth-Rx-pH-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Balancing Lotus Herbals Youth Rx pH">
			<span class="product-title">Balancing Lotus Herbals Youth Rx pH</span>
		</a>
		<div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>		<span class="product-price">
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>195.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>155.00</span></ins>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Lakme True Wear Pinks N238 Nail Color - 9 ml">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Lakme-True-Wear-Pinks-N238-Nail-Color-9-ml-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Lakme True Wear Pinks N238 Nail Color - 9 ml">
			<span class="product-title">Lakme True Wear Pinks N238 Nail Color - 9 ml</span>
		</a>
		<div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>38.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Ecostay Volumising Mascara">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Ecostay Volumising Mascara">
			<span class="product-title">Ecostay Volumising Mascara</span>
		</a>
				<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>18.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Flawless White Visible Lightening Day Cream 50 g">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Flawless-White-Visible-Lightening-Day-Cream-50-g-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Flawless White Visible Lightening Day Cream 50 g">
			<span class="product-title">Flawless White Visible Lightening Day Cream 50 g</span>
		</a>
		<div class="star-rating" title="Rated 3 out of 5"><span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>125.00</span>		</span>
	</div>
</li>
												</ul>
						</li>
																				<li class="slide-row">
							<ul>

						<li>
	<div class="product-image">
		<a href="#" title="Maxtop Electric Hair Straightener Comb Brush">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Maxtop-Electric-Hair-Straightener-Comb-Brush-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Maxtop Electric Hair Straightener Comb Brush">
			<span class="product-title">Maxtop Electric Hair Straightener Comb Brush</span>
		</a>
		<div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>		<span class="product-price">
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>445.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>225.00</span></ins>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Oriflame Seductive Musk Eau De Toilette">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Oriflame-Seductive-Musk-Eau-De-Toilette-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Oriflame Seductive Musk Eau De Toilette">
			<span class="product-title">Oriflame Seductive Musk Eau De Toilette</span>
		</a>
		<div class="star-rating" title="Rated 3 out of 5"><span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>12.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Milk And Honey Gold Smoothing Sugar Scrub 200gm">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Oriflame-Milk-And-Honey-Gold-Smoothing-Sugar-Scrub-200gm-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Milk And Honey Gold Smoothing Sugar Scrub 200gm">
			<span class="product-title">Milk And Honey Gold Smoothing Sugar Scrub 200gm</span>
		</a>
				<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>15.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Beauty Balm - Anti Wrinkle Cream 40 gm">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Beauty-Balm-Anti-Wrinkle-Cream-40-gm-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Beauty Balm - Anti Wrinkle Cream 40 gm">
			<span class="product-title">Beauty Balm - Anti Wrinkle Cream 40 gm</span>
		</a>
		<div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>78.00</span>		</span>
	</div>
</li>
												</ul>
						</li>
																				<li class="slide-row">
							<ul>

						<li>
	<div class="product-image">
		<a href="#" title="Blushing Blush Brush Colorbar Keep">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Blushing-Blush-Brush-Colorbar-Keep-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Blushing Blush Brush Colorbar Keep">
			<span class="product-title">Blushing Blush Brush Colorbar Keep</span>
		</a>
		<div class="star-rating" title="Rated 3.33 out of 5"><span style="width:66.6%"><strong class="rating">3.33</strong> out of 5</span></div>		<span class="product-price">
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>14.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>5.00</span></ins>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Cream Pond&#039;S Gold Radiance Youthful 50gm">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Cream-PondS-Gold-Radiance-Youthful-50gm-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Cream Pond&#039;S Gold Radiance Youthful 50gm">
			<span class="product-title">Cream Pond'S Gold Radiance Youthful 50gm</span>
		</a>
		<div class="star-rating" title="Rated 4.33 out of 5"><span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>16.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Face Wash Oriflame Pure Skin 150ml">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Face-Wash-Oriflame-Pure-Skin-150ml-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Face Wash Oriflame Pure Skin 150ml">
			<span class="product-title">Face Wash Oriflame Pure Skin 150ml</span>
		</a>
		<div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>		<span class="product-price">
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>35.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="Fogg Monarch Fragrance Body Spray for Men">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Fogg-Monarch-Fragrance-Body-Spray-for-Men-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="Fogg Monarch Fragrance Body Spray for Men">
			<span class="product-title">Fogg Monarch Fragrance Body Spray for Men</span>
		</a>
		<div class="star-rating" title="Rated 3.67 out of 5"><span style="width:73.4%"><strong class="rating">3.67</strong> out of 5</span></div>		<span class="product-price">
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>175.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs. </span>100.00</span></ins>		</span>
	</div>
</li>
												</ul>
						</li>
												</ul>
			                <script type="text/javascript">
                    jQuery(document).ready(function($) {
						var emallshop_rtl = false;
						if($("body").hasClass("rtl")){
							emallshop_rtl =  true;
						}
                        jQuery(".productsCarousel-5898375ec1441").owlCarousel({
							autoplay:true,
							autoplayHoverPause: true,
							loop: false,
							rtl: emallshop_rtl,
                            items:1,
                            nav: true,
							navText: ['',''],
							dots:true,
                            lazyLoad: true,
							smartSpeed: 1000,
							rewind: true,
                            addClassActive: true,
                        });
						$( '.owl-carousel').addClass('owl-theme');
                    });
                </script>

        </aside>					</div>

	</div>
</div>

			</div>
		</div>


	</div>

	<footer id="footer" class="footer">
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_about_us"><div class="about-us-widget"><p class="about-logo"><a href="#"><img src="images/logo.png"  /></a></p><p style="color:Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p><ul class="about-us"><li><i class="fa fa-home"></i><span style="color:white">Lorem Ipsum, 2046 Lorem Ipsum</span></li><li><i class="fa fa-phone"></i><span style="color:white">576-245-2478</span></li><li><i class="fa fa-print"></i><span style="color:white">786-277-7999</span></li><li><i class="fa fa-envelope-o"></i><span><a href="#">talkthrough.in</a></span></li><li><i class="fa fa-globe"></i><span><a href="#">www.emall.com</a></span></li><li><i class="fa fa-clock-o"></i><span style="color:white">Mon - Fri / 9:00 AM - 6:00 PM</span></li></ul></div></aside>				</div>
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_twitter"><h6 class="widget-title">Twitter Feed</h6><div class="twitter-bubble"><ul class="twitter-list"><li class="lastItem firstItem"><div class="media"><i class="pull-left fa fa-twitter" style="color: white;"></i><div class="media-body" style="color:white">@presslayouts  Nice Theme</div></div></li><li class="lastItem firstItem"><div class="media"><i class="pull-left fa fa-twitter" style="color: white;"></i><div class="media-body" style="color:white">hello</div></div></li></ul></div></aside>				</div>
				<div class="col-sm-6 col-md-3">
							<aside id="recent-posts-3" class="widget widget_recent_entries">		<h3 class="widget-title">Recent Posts</h3>		<ul>
					<li>
				<a href="#">Duis autem vel eum iriure dolor</a>
						</li>
					<li>
				<a href="#">Stet clita kasd gubergren</a>
						</li>
					<li>
				<a href="#">Lorem ipsum dolor sit amet</a>
						</li>
					<li>
				<a href="#">Dolore magna aliquam erat</a>
						</li>
					<li>
				<a href="#">Duis autem vel eum iriure dolor</a>
						</li>
					<li>
				<a href="#">Stet clita kasd gubergren</a>
						</li>
					<li>
				<a href="#">Post Format: Gallery</a>
						</li>
					<li>
				<a href="#">Post Format: Image</a>
						</li>
				</ul>
		</aside>						</div>
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_newsletter"><h6 class="widget-title">Newsletter</h6>

		<div class="newsletter-widget">

							<p>Signup today for free and be the first to get notified on new updates. </p>

			<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-854" method="post" data-id="854" data-name="Newsletter Form" ><div class="mc4wp-form-fields"><p>
	<label>Email address: </label>
	<input type="email" name="EMAIL" placeholder="Your email address" required />
</p>

<p>
	<input type="submit" value="Sign up" />
</p><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div><input type="hidden" name="_mc4wp_timestamp" value="1486367472" /><input type="hidden" name="_mc4wp_form_id" value="854" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /></div><div class="mc4wp-response"></div></form>	</div>

		</aside><aside  class="widget coming_stay_connected">

		<div class="stay-connected-widget style-1">
					<ul class="social-link">
							<li class="icon-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="icon-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

										<li class="icon-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>

										<li class="icon-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
			</div>

		</aside>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_about_us"><div class="about-us-widget"><p class="about-logo"><a href="#"><img src="images/logo.png"  /></a></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></div></aside>				</div>
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_twitter"><h6 class="widget-title">Twitter Feed</h6><div class="twitter-bubble"><ul class="twitter-list"><li class="lastItem firstItem"><div class="media"><i class="pull-left fa fa-twitter" style="color: white;"></i><div class="media-body" style="color:white">@presslayouts  Nice Theme</div></div></li><li class="lastItem firstItem"><div class="media"><i class="pull-left fa fa-twitter" style="color: white;"></i><div class="media-body" style="color:white">hello</div></div></li></ul></div></aside>				</div>
				<div class="col-sm-6 col-md-3">
							<aside id="recent-posts-3" class="widget widget_recent_entries">		<h6 class="widget-title">Recent Posts</h6>		<ul>
					<li>
				<a href="#">Duis autem vel eum iriure dolor</a>
						</li>
					<li>
				<a href="#">Stet clita kasd gubergren</a>
						</li>
					<li>
				<a href="#">Lorem ipsum dolor sit amet</a>
						</li>


				</ul>
		</aside>						</div>
				<div class="col-sm-6 col-md-3">
					<aside  class="widget coming_newsletter"><h6 class="widget-title">Newsletter</h6>

		<div class="newsletter-widget">

							<p >Signup today for free and be the first to get notified on new updates. </p>

			<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-854" method="post" data-id="854" data-name="Newsletter Form" ><div class="mc4wp-form-fields"><p>
	<label>Email address: </label>

</p>

<p>
	<input type="submit" value="Sign up" />
</p><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div><input type="hidden" name="_mc4wp_timestamp" value="1486367472" /><input type="hidden" name="_mc4wp_form_id" value="854" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /></div><div class="mc4wp-response"></div></form>		</div>

		</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<p>&copy; 2016 talkthrough. All Rights Reserved.</p>
				</div>
				<div class="col-xs-12 col-sm-6 text-right">
											<div class="payments-method">
							<img src="images/payments-method.png" alt="Payments">
						</div>
									</div>
			</div>
		</div>
	</div>
</footer>
			<div class="back-to-top">
			<i class="fa  fa-arrow-up"></i>
		</div>

</div>

		<script type="text/javascript">

			jQuery('body').append('<div class="emallshop-notice-wrapper"><div class="emallshop-notice"></div><div class="close"><i class="fa fa-times-circle"></i></div></div>');

			jQuery('.emallshop-notice-wrapper .close').on('click', function(){
				jQuery('.emallshop-notice-wrapper').fadeOut();
				jQuery('.emallshop-notice').html('');
			});
			jQuery('body').on( 'adding_to_cart', function(event, button, data) {
				var ajaxPId = button.attr('data-product_id');
				var ajaxPQty = button.attr('data-quantity');


				jQuery.post(
					myAjax.ajaxurl,
					{
						'action': 'get_productinfo',
						'data':   {'pid': ajaxPId,'quantity': ajaxPQty}
					},
					function(response){
						jQuery('.emallshop-notice').html(response);
					}
				);
			});
			jQuery('body').on( 'added_to_cart', function(event, fragments, cart_hash) {

				jQuery('.emallshop-notice-wrapper').fadeIn();
			});
		</script>


		<script type="text/javascript">
			jQuery(document).ready(function($) {
				var emallshop_rtl = false;
				if($("body").hasClass("rtl")){
					emallshop_rtl =  true;
				}
				$('.product-items li.product').each(function(){
					var productGalleryCarousel = $(this).find('.product_image_gallery');
					var interval;
					productGalleryCarousel.owlCarousel({
						items:				1,
						loop:				true,
						autoplayTimeout:	1500,
						rtl:				emallshop_rtl,
						smartSpeed:			450,
						mouseDrag:			false,
						touchDrag:			false,
						//nav:				true,
						navText: 			['',''],
						dots: 				false,
					});

					$(this).hover(function(){
						productGalleryCarousel.owlCarousel('invalidate', 'all').owlCarousel('refresh');
					});

					function stopOwlPropagation(element) {
						jQuery(element).on('to.owl.carousel', function(e) { e.stopPropagation(); });
						jQuery(element).on('next.owl.carousel', function(e) { e.stopPropagation(); });
						jQuery(element).on('prev.owl.carousel', function(e) { e.stopPropagation(); });
						jQuery(element).on('destroy.owl.carousel', function(e) { e.stopPropagation(); });
					}
					stopOwlPropagation('.owl-carousel');



						var nextOwl = $(this).find('.product-slider-controls .owl-next');
						var prevOwl = $(this).find('.product-slider-controls .owl-prev');

						prevOwl.click(function(){
							productGalleryCarousel.trigger('prev.owl.carousel');
						});
						nextOwl.click(function(){
							productGalleryCarousel.trigger('next.owl.carousel');
						});
									});
			});
		</script>
	<script></script><script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}function maybePrefixUrlField() {
	if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
	for( var j=0; j < urlFields.length; j++ ) {
		addEventListener(urlFields[j],'blur',maybePrefixUrlField);
	}
}
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {


	var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
	for(var i=0; i<dateFields.length; i++) {
		if(!dateFields[i].placeholder) {
			dateFields[i].placeholder = 'YYYY-MM-DD';
		}
		if(!dateFields[i].pattern) {
			dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
		}
	}
}

})();</script><script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>

<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
var cnArgs = {"ajaxurl":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-admin\/admin-ajax.php","hideEffect":"fade","onScroll":"0","onScrollOffset":"100","cookieName":"cookie_notice_accepted","cookieValue":"TRUE","cookieTime":"2592000","cookiePath":"\/emallshop\/beauty\/","cookieDomain":""};
</script>
<script type='text/javascript' src='wp-content/plugins/pl-emallshop-extensions/assets/js/cookie-notice.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/bootstrap.min.js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='wp-includes/js/masonry.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/typeahead.bundle.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/handlebars.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.countdown.plugin.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.countdown.min.js'></script>
<!--<script type='text/javascript' src='wp-content/themes/product/js/jquery.fancybox.pack.js'></script>-->
<script type='text/javascript' src='wp-content/themes/product/js/jquery.lazyloadxt.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/theia-sticky-sidebar.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/echo.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.cookie.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/cookiealert.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/owl-carousel/owl.carousel.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/zoomsl-3.0.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/modernizr.custom.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/toucheffects.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/load_products.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/functions.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/wp-typeahead.js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js'></script>
<script type='text/javascript'>
var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"","max_price":""};
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>



<script>
function addToCart(id)
{
	alert(id);
	
	$.ajax(
             {
                 url: "add_cart.php?action=add&pid="+id+"&quantity=1",
                 success: function (value) {
alert("done");
//                    $("#cart").html(value);

                 }
             });

	
}	
</script>


 <!--   <script>
$(document).ready(function(){
	
	alert("called");
	
	    $('#myModal').modal('show');
	alert("test");
    $('#myModal').on('shown', function (e) {
		alert("shown");

        var rowid = $(e.relatedTarget).data('id');
		alert(rowid);
        $.ajax({
			url: "info.php?id="+rowid,
            success : function(data){
				alert(data);
            $('.modal-body').html(data);//Show fetched data from database
            }
        });
     });
});
</script>-->
</body>
</html>
