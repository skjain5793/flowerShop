<?php $id =  @$_GET['id']; ?>

<?php

include("config.php");

?>

<?php $fetchProductsQuery = mysqli_query($conn,"select * from products where pid = '$id'"); ?>

<?php $fetchProducts = mysqli_fetch_array($fetchProductsQuery); ?>

<!DOCTYPE html>

<html lang="en-US" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">

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

.co{color:white!important;}
</style>
<link rel='stylesheet' id='css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='css'  href='css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='css'  href='css/styles4.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-notice-front-css'  href='wp-content/plugins/pl-emallshop-extensions/assets/css/cookie-notice.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='wp-content/plugins/woocommerce/assets/css/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-colorbox-css'  href='wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800' type='text/css' media='all' />
<link rel='stylesheet' id='product-bootstrap-min-css'  href='wp-content/themes/product/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-Font-Awesome-css'  href='wp-content/themes/product/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-woocommerce-css'  href='wp-content/themes/product/css/woocommerce.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-woocommerce-layout-css'  href='wp-content/themes/product/css/woocommerce-layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-jquery.fancybox-css'  href='wp-content/themes/product/css/jquery.fancybox.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-owl-carousel-css'  href='wp-content/themes/product/js/owl-carousel/assets/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-owl-theme-default-min-css'  href='wp-content/themes/product/js/owl-carousel/assets/owl.theme.default.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-animate-css'  href='wp-content/themes/product/js/owl-carousel/assets/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-style-css'  href='wp-content/themes/product/style.css' type='text/css' media='all' />
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
		color: WHITE!important;
	}
	.footer input[type="textbox"], .footer input[type="email"], .footer select, .footer textarea{
		background-color:#ffffff;
		color: white!important;
	}
	.footer .footer-top a, .footer .footer-middle  a{
		color: white!important;
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
		background-color: #3b589c;
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


.footer-middle ul.about-us li i {
    COLOR: WHITE!IMPORTANT;
}

</style>
<link rel='stylesheet' id='bsf-Defaults-css'  href='wp-content/uploads/smile_fonts/Defaults/Defaults.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript'>
var wc_add_to_cart_params = {"ajax_url":"\/emallshop\/beauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/emallshop\/beauty\/product\/maxtop-electric-hair-straightener-comb-brush\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>

</head>


<body class="product-template-default single single-product postid-556 sticky-navigation woocommerce woocommerce-page yith-wcan-free wpb-js-composer js-comp-ver-5.0 vc_responsive">


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

<div class="page-heading page-heading-2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 ">

						<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Tools &amp; Accessories</a> <i class="fa fa-angle-right"></i> <a href="#">Hair Styling Tools</a> <i class="fa fa-angle-right"></i> <?php echo $fetchProducts['name']; ?></nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="main-content" class="site-content">

		<div class="container">
				<div class="row">
        	<div class="content-area col-xs-12 col-sm-8 col-md-9">




<div itemscope itemtype="http://schema.org/Product" id="product-556" class="post-556 product type-product status-publish has-post-thumbnail product_cat-conditioners product_cat-hair-care product_cat-hair-oils product_cat-hair-styling-tools product_cat-hair-treatments product_cat-shampoos product_cat-tools-accessories product_tag-accessories product_tag-women product_brand-reebok product_brand-umbro product_brand-vans first instock sale taxable shipping-taxable purchasable product-type-simple">
	<div class="single-product-entry">
		<div class="row">
			<div class="col-xs-12 col-md-5">
							<div class="product-highlight">




				<div class="onsale"><span>50% Off</span></div>
			</div>
		<div class="images">
	<div id="product-image">

				<img id="outer-zoom" width="676" height="726" src="admin/products/<?php echo $fetchProducts['image']; ?>" data-large="http://demo.presslayouts.com/emallshop/beauty/wp-content/uploads/2016/10/6.jpg" alt="" />

				</div>
		<div class="thumbnails columns-3 thumbnails-carousel owl-carousel">				<div class="item">
					<a class="fancybox" href="#"></a>
					<img width="120" height="140" src="wp-content/uploads/2016/10/Philips-Combo-of-HP8643-Hair-Dryer-Hair-Straightner-120x140.jpg" class="lazyOwl" alt="" data-large="http://demo.presslayouts.com/emallshop/beauty/wp-content/uploads/2016/10/Philips-Combo-of-HP8643-Hair-Dryer-Hair-Straightner.jpg" title="" />
				</div>
							<div class="item">
					<a class="fancybox" href="#"></a>
					<img width="120" height="140" src="wp-content/uploads/2016/10/Maxtop-Electric-Hair-Straightener-Comb-Brush-120x140.jpg" class="lazyOwl" alt="" data-large="http://demo.presslayouts.com/emallshop/beauty/wp-content/uploads/2016/10/Maxtop-Electric-Hair-Straightener-Comb-Brush.jpg" title="" />
				</div>
			</div>
	</div>
			</div>
			<div class="col-xs-12 col-md-7">
				<div class="summary entry-summary">

		<div class="single-product-title"><h1 itemprop="name" class="product_title entry-title"><?php echo $fetchProducts['name']; ?></h1>					<div class="product-next-previous">
								<div class="product-prev">
				<a href="#">
				<span class="product-navbar">
												<i class="fa fa-chevron-left"></i>
															</span>
				<div class="product-prev-popup">
					<div class="product-thumb">
						 <img width="120" height="140" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />					</div>
					<div class="product-title-price">
						<span class="ptitle">Ecostay Volumising Mascara</span>
						<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>18.00</span>					</div>
				</div>
				</a>
			</div>
					<div class="product-next">
				<a href="#">
				<span class="product-navbar">
												<i class="fa fa-chevron-right"></i>
															</span>
				<div class="product-next-popup">
					<div class="product-thumb">
						 <img width="120" height="140" src="wp-content/uploads/2016/10/Oriflame-Seductive-Musk-Eau-De-Toilette-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />					</div>
					<div class="product-title-price">
						<span class="ptitle">Oriflame Seductive Musk Eau De Toilette</span>
						<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>					</div>
				</div>
				</a>
			</div>
							</div>
		</div>
	<div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star-rating" title="Rated 4 out of 5">
			<span style="width:80%">
				<strong itemprop="ratingValue" class="rating">4</strong> out of <span itemprop="bestRating">5</span>				based on <span itemprop="ratingCount" class="rating">3</span> customer ratings			</span>
		</div>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">3</span> customer reviews)</a>	</div>


		<div class="product-price"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetchProducts['actual_price']; ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetchProducts['price']; ?></span></ins></p>

	<meta itemprop="price" content="225" />
	<meta itemprop="priceCurrency" content="USD" />
	<link itemprop="availability" href="http://schema.org/InStock" />

</div>

		<span class="availability instock">In  Stock</span>


		</div><div itemprop="description">
	<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>




	<form class="cart" method="post" enctype='multipart/form-data'>

	 	<div class="quantity">
	<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
</div>

	 	<input type="hidden" name="add-to-cart" value="556" />

	 	<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

			</form>



<div class="yith-wcwl-add-to-wishlist add-to-wishlist-556">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="556" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><a href="#" class="compare button" data-product_id="556" rel="nofollow">Compare</a><div class="product_meta">

	 <span class="brand_in">Brands: <a href="#" rel="tag">Reebok</a> , <a href="#" rel="tag">Umbro</a> , <a href="#" rel="tag">Vans</a> </span>


		<span class="posted_in">Categories: <a href="#" rel="tag">Conditioners</a>, <a href="#" rel="tag">Hair Care</a>, <a href="#" rel="tag">Hair Oils</a>, <a href="#l" rel="tag">Hair Styling Tools</a>, <a href="#" rel="tag">Hair Treatments</a>, <a href="#" rel="tag">Shampoos</a>, <a href="#" rel="tag">Tools &amp; Accessories</a></span>


		<span class="tagged_as">Tags: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Women</a></span>


</div>

<div class="social-share-button"><style type="text/css" scoped="scoped">
					.social-share-button{
						display: table;
						margin: 2.6781em 0;
						width: 100%;
					}
					.social-share-item{
						float: left;
						margin-right:.6781em;
					}
					.social-share-linkedin, .social-share-twitter{margin-top: .2em;}
				</style><div class="social-share-fb social-share-item" ><div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "../connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script><div class="fb-like" data-href="http://demo.presslayouts.com/emallshop/beauty/product/maxtop-electric-hair-straightener-comb-brush/" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div></div> <div class="social-share-twitter social-share-item" >
						<a href="#" class="twitter-share-button" data-url="http://demo.presslayouts.com/emallshop/beauty/product/maxtop-electric-hair-straightener-comb-brush/" data-text="<?php echo $fetchProducts['name']; ?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="../platform.twitter.com/widgets.js"></script>
					</div> <div class="social-share-linkedin social-share-item">
						<script src="../platform.linkedin.com/in.js" type="text/javascript"></script>
						<script type="IN/Share" data-url="http%3A%2F%2Fdemo.presslayouts.com%2Femallshop%2Fbeauty%2Fproduct%2Fmaxtop-electric-hair-straightener-comb-brush%2F" data-counter="right"></script>
					</div> <div class="social-share-google-plus social-share-item">

						<div class="g-plusone" data-size="medium" data-href="http%3A%2F%2Fdemo.presslayouts.com%2Femallshop%2Fbeauty%2Fproduct%2Fmaxtop-electric-hair-straightener-comb-brush%2F"></div>


						<script type="text/javascript">
						  (function() {
							var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
							po.src = "../apis.google.com/js/plusone.js";
							var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
					</div> </div>				</div>
			</div>
		</div>
	</div>


	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs">
							<li class="description_tab">
					<a href="#tab-description">Description</a>
				</li>
							<li class="reviews_tab">
					<a href="#tab-reviews">Reviews (3)</a>
				</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">

  <h2>Product Description</h2>

<p ><?php echo $fetchProducts['description']; ?></p>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
				<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">3 reviews for <span><?php echo $fetchProducts['name']; ?></span></h2>


			<ol class="commentlist">
				<li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-37">

	<div id="comment-37" class="comment_container">

		<img alt='' src='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=60&amp;d=mm&amp;r=g' srcset='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />
		<div class="comment-text">


	<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
		<span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
	</div>


	<p class="meta">
		<strong itemprop="author">admin</strong> &ndash; <time itemprop="datePublished" datetime="2016-11-17T12:39:03+00:00">November 17, 2016</time>:
	</p>

<div itemprop="description" class="description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
</div>
		</div>
	</div>
</li>
<li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment byuser comment-author-admin bypostauthor odd alt thread-odd thread-alt depth-1" id="li-comment-53">

	<div id="comment-53" class="comment_container">

		<img alt='' src='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=60&amp;d=mm&amp;r=g' srcset='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />
		<div class="comment-text">


	<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
		<span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
	</div>


	<p class="meta">
		<strong itemprop="author">admin</strong> &ndash; <time itemprop="datePublished" datetime="2016-11-17T12:41:30+00:00">November 17, 2016</time>:
	</p>

<div itemprop="description" class="description"><p>Lectus tristique ligula, quis pretium elit diam a nisi.</p>
</div>
		</div>
	</div>
</li>
<li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-66">

	<div id="comment-66" class="comment_container">

		<img alt='' src='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=60&amp;d=mm&amp;r=g' srcset='http://0.gravatar.com/avatar/0e45b77b4948e7171a6254d8d3291cc4?s=120&amp;d=mm&amp;r=g 2x' class='avatar avatar-60 photo' height='60' width='60' />
		<div class="comment-text">


	<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
		<span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
	</div>


	<p class="meta">
		<strong itemprop="author">admin</strong> &ndash; <time itemprop="datePublished" datetime="2016-11-17T12:43:25+00:00">November 17, 2016</time>:
	</p>

<div itemprop="description" class="description"><p>Sit amet velit metus. Proin posuere, ligula nec porttitor eget luctus, risus lectus tristique ligula, quis vivam pretium elit diam a nisi. Proin vehicula malesuada dolor, vel rutrum. quam sollicitudin.</p>
</div>
		</div>
	</div>
</li>
			</ol>


			</div>


		<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="#" method="post" id="commentform" class="comment-form" novalidate>
				<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-rating"><label for="rating">Your Rating</label><select name="rating" id="rating" aria-required="true" required>
							<option value="">Rate&hellip;</option>
							<option value="5">Perfect</option>
							<option value="4">Good</option>
							<option value="3">Average</option>
							<option value="2">Not that bad</option>
							<option value="1">Very Poor</option>
						</select></p><p class="comment-form-comment"><label for="comment">Your Review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='556' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>			</form>
			</div>
				</div>
		</div>


	<div class="clear"></div>
</div>
			</div>
			</div>


	<div class="related products">

		<h2><span>Related Products</span></h2>

		<div id="section-58982bb2ab2e3" class="product-items">

		<ul class="products product-style1 product-carousel owl-carousel" data-navigation="1" data-pagination="0">


									<li class="slide-row">
						<ul>
								<li class="post-561 product type-product status-publish has-post-thumbnail product_cat-bath-shower product_cat-fragrance product_cat-luxury-beauty product_tag-skin product_tag-women product_brand-adidas product_brand-asics product_brand-babolat first instock featured taxable shipping-taxable purchasable product-type-simple" data-postID="post-561">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">



				<div class="featured"><span>Featured</span></div>

			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Cream-PondS-Gold-Radiance-Youthful-50gm-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Cream-PondS-Gold-Radiance-Youthful-50gm-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Balancing-Lotus-Herbals-Youth-Rx-pH-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Oriflame-Seductive-Musk-Eau-De-Toilette-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Cream-PondS-Gold-Radiance-Youthful-50gm-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-561">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-561">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="561" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="561" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="561">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Cream Pond&#8217;S Gold Radiance Youthful 50gm</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="4.33"><span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>16.00</span></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="561" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-561">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="561" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="561" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="561">Quick View</a>
			</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


									<li class="slide-row">
						<ul>
								<li class="post-563 product type-product status-publish has-post-thumbnail product_cat-bags-cases product_cat-hair-styling-tools product_cat-make-up-brushes-tools product_cat-nail-tools product_cat-tools-accessories product_tag-accessories product_brand-lacoste product_brand-lotto product_brand-mizuno  instock sale taxable shipping-taxable purchasable product-type-simple" data-postID="post-563">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">




				<div class="onsale"><span>65% Off</span></div>
			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Blushing-Blush-Brush-Colorbar-Keep-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Blushing-Blush-Brush-Colorbar-Keep-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Maxtop-Electric-Hair-Straightener-Comb-Brush-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Philips-Combo-of-HP8643-Hair-Dryer-Hair-Straightner-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Blushing-Blush-Brush-Colorbar-Keep-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-563">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-563">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="563" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="563" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="563">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Blushing Blush Brush Colorbar Keep</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="3.33"><span style="width:66.6%"><strong class="rating">3.33</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>14.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>5.00</span></ins></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="563" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-563">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="563" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="563" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="563">Quick View</a>
			</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


									<li class="slide-row">
						<ul>
								<li class="post-555 product type-product status-publish has-post-thumbnail product_cat-day-creams-moisturizers product_cat-face-cleansers product_cat-hair-styling-tools product_cat-mens-skincare product_cat-mens-grooming product_cat-skin-care product_tag-men product_tag-skin product_tag-women product_brand-adidas product_brand-lotto  instock featured taxable shipping-taxable purchasable product-type-simple" data-postID="post-555">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">



				<div class="featured"><span>Featured</span></div>

			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Moisturising-Lotion-badam-milk-cream-300-ml-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Moisturising-Lotion-badam-milk-cream-300-ml-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Fogg-Monarch-Fragrance-Body-Spray-for-Men-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Skinn-by-Titan-Sheer-Womens-Fragrance-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Olay-Day-Cream-Normal-Total-Effect-7-In-One-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Moisturising-Lotion-badam-milk-cream-300-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-555">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-555">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="555" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="555" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="555">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Moisturising Lotion badam &#038; milk cream 300 ml</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="3"><span style="width:60%"><strong class="rating">3</strong> out of 5</span> </div><span class="product-rating-count">(1)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>55.00</span></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="555" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-555">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="555" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="555" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="555">Quick View</a>
			</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


									<li class="slide-row">
						<ul>
								<li class="post-559 product type-product status-publish has-post-thumbnail product_cat-fragrances-deodorants product_cat-haircare-styling product_cat-mens-skincare product_cat-mens-grooming product_cat-shavers-and-trimmers product_tag-men product_tag-skin product_tag-women product_brand-asics product_brand-babolat product_brand-fila last instock taxable shipping-taxable purchasable product-type-simple" data-postID="post-559">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">





			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Face-Wash-Oriflame-Pure-Skin-150ml-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Face-Wash-Oriflame-Pure-Skin-150ml-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Moisturising-Lotion-badam-milk-cream-300-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Olay-Day-Cream-Normal-Total-Effect-7-In-One-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Fogg-Monarch-Fragrance-Body-Spray-for-Men-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Face-Wash-Oriflame-Pure-Skin-150ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-559">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-559">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="559" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="559" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="559">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Face Wash Oriflame Pure Skin 150ml</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</span></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="559" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-559">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="559" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="559" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="559">Quick View</a>
			</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


									<li class="slide-row">
						<ul>
								<li class="post-562 product type-product status-publish has-post-thumbnail product_cat-eyes product_cat-face product_cat-lips product_cat-make-up-nails product_cat-nails product_tag-nails product_tag-women product_brand-converse product_brand-fila product_brand-lacoste first instock taxable shipping-taxable purchasable product-type-variable has-children" data-postID="post-562">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">





			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Lakme-True-Wear-Pinks-N238-Nail-Color-9-ml-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Lakme-True-Wear-Pinks-N238-Nail-Color-9-ml-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Oriflame-Seductive-Musk-Eau-De-Toilette-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Flawless-White-Visible-Lightening-Day-Cream-50-g-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Calvin-Klein-Euphoria-Women-EDP-50-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Lakme-True-Wear-Pinks-N238-Nail-Color-9-ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-562">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-562">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="562" data-product-type="variable" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="562" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="562">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Lakme True Wear Pinks N238 Nail Color &#8211; 9 ml</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>38.00</span></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="562" data-product_sku="" class="button product_type_variable add_to_cart_button">Select options</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-562">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="562" data-product-type="variable" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="562" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="562">Quick View</a>
			</div>
		</div>


		<div class="product-extra-info">
			<div class="product-attrs">

					<div class="product-attribute">
					Color : 							<span class="attr-value">
								Gold							</span> - 							<span class="attr-value">
								Pink							</span> - 							<span class="attr-value">
								Red							</span>					</div>
							</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


									<li class="slide-row">
						<ul>
								<li class="post-560 product type-product status-publish has-post-thumbnail product_cat-bath-shower product_cat-luxury-beauty product_cat-make-up-brushes-tools product_cat-tools-accessories product_tag-beauty product_tag-women product_brand-lotto product_brand-mizuno product_brand-new-balance  instock taxable shipping-taxable purchasable product-type-simple" data-postID="post-560">
	<div class="product-entry">

		<div class="product-image product-image-style3">
		<a href="#" class="woocommerce-LoopProduct-link">			<div class="product-highlight">





			</div>
		<img width="300" height="351" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-300x351.jpg" class="front-image wp-post-image" alt="" /><ul class="product_image_gallery owl-carousel owl-theme"><li><img width="300" height="351" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-300x351.jpg" class="front-image wp-post-image" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Cream-PondS-Gold-Radiance-Youthful-50gm-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Face-Wash-Oriflame-Pure-Skin-150ml-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Balancing-Lotus-Herbals-Youth-Rx-pH-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li><li><img width="300" height="351" src="wp-content/uploads/2016/10/Ecostay-Volumising-Mascara-300x351.jpg" class="attachment-shop_catalog size-shop_catalog" alt="" /></li></ul></a>			<div class="product-slider-controls owl-nav post-560">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>


		<div class="product-buttons">

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-560">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="560" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="560" rel="nofollow">Compare</a></div>				<div class="quickview-button">
					<a class="quickview" href="#" data-product_id="560">Quick View</a>
				</div>		</div>

		</div>

		<div class="product-content">

		<div class="product-title-rating">		<a class="product-title" href="#">
		<h3>Ecostay Volumising Mascara</h3>		</a>
		<div class="product-rating"> <div class="rating-content"> <div class="star-rating" title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span> </div><span class="product-rating-count">(3)</span></div></div>
		</div>		<div class="short-description">
			<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
		</div>
		<div class="product-loop-price">
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>18.00</span></span>

		</div>
		<div class="product-buttons">

		<div class="product-cart">
		<a rel="nofollow" href="#" data-quantity="1" data-product_id="560" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
		</div>

<div class="yith-wcwl-add-to-wishlist add-to-wishlist-560">
		    <div class="yith-wcwl-add-button show" style="display:block">


<a href="#" rel="nofollow" data-product-id="560" data-product-type="simple" class="add_to_wishlist" >
        Add to Wishlist</a>
<img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="#" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div><div class="woocommerce product compare-button"><a href="#" class="compare button" data-product_id="560" rel="nofollow">Compare</a></div>			<div class="quickview-button">
				<a class="quickview" href="#" data-product_id="560">Quick View</a>
			</div>
		</div>

		</div>
			</div>
</li>
										</ul>
					</li>


			</ul>
		</div>

	</div>


	<meta itemprop="url" content="index.html" />

</div>




		</div>

	<div id="sidebar" class="sidebar col-xs-12 col-sm-4 col-md-3 ">
	<div id="secondary" class="secondary">

					<div id="widget-area" class="widget-area" role="complementary">
				<aside id="emallshop-qr-code-2" class="widget emallshop_widget_qr_code"><h3 class="widget-title">QR Code</h3><img src="https://chart.googleapis.com/chart?chs=265x265&amp;cht=qr&amp;chld=H|1&amp;chl=http://demo.presslayouts.com/emallshop/beauty/product/maxtop-electric-hair-straightener-comb-brush/"  class=" qr-code-image" /></aside>
			<aside id="emallshop-products-4" class="widget emallshop_widget_products"><h3 class="widget-title">Recent Products</h3>
			            <ul class="product_list_widget owl-carousel productsCarousel-58982bb2d3734 woocommerce">
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
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>195.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>155.00</span></ins>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>38.00</span>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>18.00</span>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>125.00</span>		</span>
	</div>
</li>

						<li>
	<div class="product-image">
		<a href="#" title="<?php echo $fetchProducts['name']; ?>">
			<img width="120" height="140" src="wp-content/uploads/2016/10/Maxtop-Electric-Hair-Straightener-Comb-Brush-120x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />		</a>
	</div>
	<div class="product-details">
		<a href="#" title="<?php echo $fetchProducts['name']; ?>">
			<span class="product-title"><?php echo $fetchProducts['name']; ?></span>
		</a>
		<div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>		<span class="product-price">
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetchProducts['actual_price']; ?></span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetchProducts['name']; ?></span></ins>		</span>
	</div>
</li>
												</ul>
						</li>
																				<li class="slide-row">
							<ul>

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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>78.00</span>		</span>
	</div>
</li>

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
		<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>14.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>5.00</span></ins>		</span>
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
		<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>16.00</span>		</span>
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
                        jQuery(".productsCarousel-58982bb2d3734").owlCarousel({
							autoplay:true,
							autoplayHoverPause: true,
							loop: true,
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
					<aside  class="widget coming_about_us"><div class="about-us-widget"><p class="about-logo"><a href="#"><img src="images/logo.png"  /></a></p><p class="co">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p><ul class="about-us"><li><i class="fa fa-home"></i><span style="color:white">Lorem Ipsum, 2046 Lorem Ipsum</span></li><li><i class="fa fa-phone"></i><span style="color:white">576-245-2478</span></li><li><i class="fa fa-print"></i><span style="color:white">786-277-7999</span></li><li><i class="fa fa-envelope-o"></i><span><a href="#">talkthrough.in</a></span></li><li><i class="fa fa-globe"></i><span><a href="#">www.emall.com</a></span></li><li><i class="fa fa-clock-o"></i><span style="color:white">Mon - Fri / 9:00 AM - 6:00 PM</span></li></ul></div></aside>				</div>
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

							<p class="co">Signup today for free and be the first to get notified on new updates. </p>

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
					<aside  class="widget coming_about_us"><div class="about-us-widget"><p class="about-logo"><a href="#"><img src="images/logo.png"  /></a></p><p class="co">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></div></aside>				</div>
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

							<p class="co">Signup today for free and be the first to get notified on new updates. </p>

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
					<p class="co">&copy; 2016 talkthrough. All Rights Reserved.</p>
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
<script type='text/javascript'>
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
var cnArgs = {"ajaxurl":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-admin\/admin-ajax.php","hideEffect":"fade","onScroll":"0","onScrollOffset":"100","cookieName":"cookie_notice_accepted","cookieValue":"TRUE","cookieTime":"2592000","cookiePath":"\/emallshop\/beauty\/","cookieDomain":""};
</script>
<script type='text/javascript' src='wp-content/plugins/pl-emallshop-extensions/assets/js/cookie-notice.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript'>
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript'>
var woocommerce_params = {"ajax_url":"\/emallshop\/beauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/emallshop\/beauty\/product\/maxtop-electric-hair-straightener-comb-brush\/?wc-ajax=%%endpoint%%"};
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js'></script>
<script type='text/javascript'>
var wc_cart_fragments_params = {"ajax_url":"\/emallshop\/beauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/emallshop\/beauty\/product\/maxtop-electric-hair-straightener-comb-brush\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript'>
var yith_woocompare = {"ajaxurl":"\/emallshop\/beauty\/product\/maxtop-electric-hair-straightener-comb-brush\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes","loader":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"Compare"};
</script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js'></script>
<script type='text/javascript'>
var yith_wcwl_l10n = {"ajax_url":"\/emallshop\/beauty\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
</script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/bootstrap.min.js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='wp-includes/js/masonry.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/typeahead.bundle.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/handlebars.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.countdown.plugin.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='wp-content/themes/product/js/jquery.fancybox.pack.js'></script>
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
<script type='text/javascript'>
var ajax_pagination = {"the_lmp_js_data":[{"type":"pagination","use_mobile":false,"mobile_type":"more_button","mobile_width":767,"is_AAPF":"","buffer":50,"load_image":"<div class=\"lmp_products_loading\"><img src=\"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-content\/themes\/emallshop\/admin\/images\/ajax-loader.gif\"><\/div>","load_img_class":".lmp_products_loading","load_more":"<div class=\"lmp_load_more_button\"><a class=\"lmp_button\" href=\"#load_next_page\">Load More<\/a><\/div>","lazy_load":false,"lazy_load_m":false,"LLanimation":"zoomInUp","loading":"Loading...","loading_class":"","end_text":"No more blog","end_text_class":"","products":".blog-posts","item":"article.post","pagination":".posts-navigation","next_page":".posts-navigation a.next"},{"type":"pagination","use_mobile":false,"mobile_type":"more_button","mobile_width":767,"is_AAPF":"","buffer":50,"load_image":"<div class=\"lmp_products_loading\"><img src=\"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-content\/themes\/emallshop\/admin\/images\/ajax-loader.gif\"><\/div>","load_img_class":".lmp_products_loading","load_more":"<div class=\"lmp_load_more_button\"><a class=\"lmp_button\" href=\"#load_next_page\">Load More<\/a><\/div>","lazy_load":false,"lazy_load_m":false,"LLanimation":"zoomInUp","loading":"Loading...","loading_class":"","end_text":"No more blog","end_text_class":"","products":".portfolioContainer","item":".portfolio-item","pagination":".posts-navigation","next_page":".posts-navigation a.next"},{"type":"infinity_scroll","use_mobile":false,"mobile_type":"more_button","mobile_width":767,"is_AAPF":"","buffer":50,"load_image":"<div class=\"lmp_products_loading\"><img src=\"http:\/\/demo.presslayouts.com\/emallshop\/beauty\/wp-content\/themes\/emallshop\/admin\/images\/ajax-loader.gif\"><\/div>","load_img_class":".lmp_products_loading","load_more":"<div class=\"lmp_load_more_button\"><a class=\"lmp_button\" href=\"#load_next_page\"><i class=\"fa  fa-arrow-circle-o-down\"><\/i> Load More<\/a><\/div>","lazy_load":false,"lazy_load_m":false,"LLanimation":"","loading":"Loading...","loading_class":"","end_text":"No more product","end_text_class":"","products":"ul.products.is_shop","item":"li.product","pagination":".woocommerce-pagination","next_page":".woocommerce-pagination a.next"}]};
</script>
<script type='text/javascript' src='wp-content/themes/product/js/load_products.js'></script>
<script type='text/javascript'>
var myAjax = {"ajaxurl":"http:\/\/demo.presslayouts.com\/product\/beauty\/wp-admin\/admin-ajax.php"};
var emallshopOwlArg = {"productsCarousel":{"section-58982bb2ab2e3":{"autoplay":"true","loop":"true","navigation":"true","dots":"false","rp_desktop":"4","rp_small_desktop":3,"rp_tablet":2,"rp_mobile":2,"rp_small_mobile":1}}};
</script>
<script type='text/javascript' src='wp-content/themes/product/js/functions.js'></script>
<script type='text/javascript'>
var wp_typeahead = {"rtl":"","ajaxurl":"http:\/\/demo.presslayouts.com\/product\/beauty\/wp-admin\/admin-ajax.php","enable_live_search":"1"};
</script>
<script type='text/javascript' src='wp-content/themes/product/js/wp-typeahead.js'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min.js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript'>
var mc4wp_forms_config = [];
</script>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'></script>

</body>
</html>
