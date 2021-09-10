<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Clymene</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="{{ asset('registrasi/css/base.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/skeleton.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/layout.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/settings.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('registrasi/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/retina.css') }}"/>
	<link rel="stylesheet" href="{{ asset('registrasi/css/animsition.min.css') }}"/>
	
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-gold.css') }}" title="1">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-2.css') }}" title="2">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-3.css') }}" title="3">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-4.css') }}" title="4">
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-5.css') }}" title="5">	
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-6.css') }}" title="6">	
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('registrasi/css/colors/color-7.css') }}" title="7">
	

		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="{{ asset('registrasi/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('registrasi/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('registrasi/apple-touch-icon-114x114.png') }}">
	
	
	
</head>
<body>	
	<!-- Primary Page Layout
	================================================== -->

	<div class="animsition">	
	
    <!-- Switch Panel -->
    <div id="switch">
        <div class="content-switcher" >        
			<p>Color Options:</p>
			<ul class="header">           
				<li><a href="#" onClick="setActiveStyleSheet('1'); return false;" class="button color switch" style="background-color:#cfa144"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('2'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('3'); return false;" class="button color switch" style="background-color:#2ecc71"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('4'); return false;" class="button color switch" style="background-color:#e74c3c"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('5'); return false;" class="button color switch" style="background-color:#34495e"></a></li> 
				<li><a href="#" onClick="setActiveStyleSheet('6'); return false;" class="button color switch" style="background-color:#f1c40f"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('7'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
			</ul>        
			<div class="clear"></div>    
			<div id="hide">
				<img  src="{{ asset('registrasi/images/close.png') }}" alt="" /> 
			</div>
        </div>
	</div>
	<div id="show" style="display: block;">
        <div id="setting"></div>
    </div>
    <!-- Switch Panel -->	


	
	
	<!-- MENU
    ================================================== -->	
	
	<div class="header-top">
	
		<header class="cd-main-header">
			<a class="cd-logo animsition-link" href="index.html"><img src="{{ asset('registrasi/images/logo.png') }}" alt="Logo"></a>

			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
				<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
			</ul> <!-- cd-header-buttons -->
		</header>
		
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
				<li>
					<a href="index.html" class="animsition-link">Home</a>
				</li>
				<li class="has-children">
					<a href="#">Pages</a>

					<ul class="cd-secondary-nav is-hidden">
						<li class="go-back"><a href="#0">Menu</a></li>
						<li class="see-all"><a href="#">call to action</a></li>
						<li class="has-children">
							<a href="#">Home</a>

							<ul class="is-hidden">
								<li class="go-back"><a href="#0">Pages</a></li>
								<li class="has-children">
									<a href="#0">Home Corporate</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="corporate-home-1.html" class="animsition-link">Corporate Layout 1</a></li>
										<li><a href="corporate-home-2.html" class="animsition-link">Corporate Layout 2</a></li>
										<li><a href="corporate-home-3.html" class="animsition-link">Corporate Layout 3</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Home Portfolio</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="portfolio-home-1.html" class="animsition-link">Portfolio Layout 1</a></li>
										<li><a href="portfolio-home-2.html" class="animsition-link">Portfolio Layout 2</a></li>
										<li><a href="masonry-home.html" class="animsition-link">Masonry</a></li>
										<li><a href="ajax-home.html" class="animsition-link">Ajax</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Home Blog</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="blog-home-1.html" class="animsition-link">Blog Layout 1</a></li>
										<li><a href="blog-home-2.html" class="animsition-link">Blog Layout 2</a></li>
										<li><a href="blog-home-3.html" class="animsition-link">Blog Layout 3</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Home Shop</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="shop-home-1.html" class="animsition-link">Shop Layout 1</a></li>
										<li><a href="shop-home-2.html" class="animsition-link">Shop Layout 2</a></li>
										<li><a href="shop-home-3.html" class="animsition-link">Shop Layout 3</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Home Fullscreen</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="image-home.html" class="animsition-link">Fullscreen Image</a></li>
										<li><a href="slider-home.html" class="animsition-link">Fullscreen Slider</a></li>
										<li><a href="video-home.html" class="animsition-link">Fullscreen Video</a></li>
										<li><a href="youtube-video-home.html" class="animsition-link">Fullscreen YouTube Video</a></li>
									</ul>
								</li>
								<li><a href="parallax-home.html" class="animsition-link">Home Parallax</a></li>
								<li class="has-children">
									<a href="#0">One Page</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Home</a></li>
										<li><a href="one-page-home.html" class="animsition-link">One Page</a></li>
										<li><a href="one-page-home-2.html" class="animsition-link">One Page 3D menu</a></li>
									</ul>
								</li>
								<li><a href="showcase-home-1.html" class="animsition-link">Home App Showcase</a></li>
							</ul>
						</li>

						<li class="has-children">
							<a href="#">About and Services</a>

							<ul class="is-hidden">
								<li class="go-back"><a href="#0">Pages</a></li>
								<li><a href="about-1.html" class="animsition-link">About Layout 1</a></li>
								<li><a href="about-2.html" class="animsition-link">About Layout 2</a></li>
								<li><a href="about-me.html" class="animsition-link">About Me</a></li>
								<li><a href="services-1.html" class="animsition-link">Services Layout 1</a></li>
								<li><a href="services-2.html" class="animsition-link">Services Layout 2</a></li>
								<li><a href="team.html" class="animsition-link">Meet The Team</a></li>
								<li><a href="office.html" class="animsition-link">Our Office</a></li>
								<li><a href="faq.html" class="animsition-link">FAQ</a></li>
							</ul>
						</li>

						<li class="has-children">
							<a href="#">Blog</a>

							<ul class="is-hidden">
								<li class="go-back"><a href="#0">Pages</a></li>
								<li class="has-children">
									<a href="#0">Grid Layouts</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Blog</a></li>
										<li><a href="blog-grid-full.html" class="animsition-link">Grid Full Width</a></li>
										<li><a href="blog-grid-left.html" class="animsition-link">Grid Left Sidebar</a></li>
										<li><a href="blog-grid-right.html" class="animsition-link">Grid Right Sidebar</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Large Image Layouts</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Blog</a></li>
										<li><a href="blog-large-full.html" class="animsition-link">Large Image Full Width</a></li>
										<li><a href="blog-large-left.html" class="animsition-link">Large Image Left Sidebar</a></li>
										<li><a href="blog-large-right.html" class="animsition-link">Large Image Right Sidebar</a></li>
									</ul>
								</li>
								<li><a href="image-post.html" class="animsition-link">Image Post</a></li>
								<li><a href="slider-post.html" class="animsition-link">Slider Post</a></li>
								<li><a href="video-post.html" class="animsition-link">Video Post</a></li>
								<li><a href="audio-post.html" class="animsition-link">Audio Post</a></li>
								<li><a href="link-post.html" class="animsition-link">Link Post</a></li>
								<li><a href="quote-post.html" class="animsition-link">Quote Post</a></li>
							</ul>
						</li>

						<li class="has-children">
							<a href="#">Portfolio</a>

							<ul class="is-hidden">
								<li class="go-back"><a href="#0">Pages</a></li>
								<li class="has-children">
									<a href="#0">Grid Layouts</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Portfolio</a></li>
										<li><a href="grid-2col.html" class="animsition-link">2 Columns</a></li>
										<li><a href="grid-3col.html" class="animsition-link">3 Columns</a></li>
										<li><a href="grid-4col.html" class="animsition-link">4 Columns</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Masonry Layouts</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Portfolio</a></li>
										<li><a href="masonry-mixed.html" class="animsition-link">Mixed Columns</a></li>
										<li><a href="masonry-2col.html" class="animsition-link">2 Columns</a></li>
										<li><a href="masonry-3col.html" class="animsition-link">3 Columns</a></li>
										<li><a href="masonry-4col.html" class="animsition-link">4 Columns</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0">Ajax Portfolio</a>

									<ul class="is-hidden">
										<li class="go-back"><a href="#0">Portfolio</a></li>
										<li><a href="ajax-masonry-mixed.html" class="animsition-link">Mixed Columns</a></li>
										<li><a href="ajax-masonry-2col.html" class="animsition-link">2 Columns Masonry</a></li>
										<li><a href="ajax-masonry-3col.html" class="animsition-link">3 Columns Masonry</a></li>
										<li><a href="ajax-masonry-4col.html" class="animsition-link">4 Columns Masonry</a></li>
										<li><a href="ajax-grid-2col.html" class="animsition-link">2 Columns Grid</a></li>
										<li><a href="ajax-grid-3col.html" class="animsition-link">3 Columns Grid</a></li>
										<li><a href="ajax-grid-4col.html" class="animsition-link">4 Columns Grid</a></li>
									</ul>
								</li>
								<li><a href="slider-project.html" class="animsition-link">Slider Project</a></li>
								<li><a href="video-project.html" class="animsition-link">Video Project</a></li>
								<li><a href="gallery-project.html" class="animsition-link">Gallery Project</a></li>
								<li><a href="parallax-project.html" class="animsition-link">Parallax Project</a></li>
								<li><a href="fullscreen-project.html" class="animsition-link">Fullscreen Project</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shop</a>

					<ul class="cd-nav-gallery is-hidden">
						<li class="go-back"><a href="#0">Menu</a></li>
						<li class="see-all"><a href="shop-all.html" class="animsition-link">Browse All</a></li>
						<li>
							<a class="cd-nav-item animsition-link" href="shop-1.html">
								<img src="{{ asset('registrasi/images/shop1.jpg') }}" alt="Product Image">
								<h3>men</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-2.html">
								<img src="{{ asset('registrasi/images/shop2.jpg') }}" alt="Product Image">
								<h3>women</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-3.html">
								<img src="{{ asset('registrasi/images/shop3.jpg') }}" alt="Product Image">
								<h3>underwear</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-4.html">
								<img src="{{ asset('registrasi/images/shop4.jpg') }}" alt="Product Image">
								<h3>jewellry</h3>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shortcodes</a>
					<ul class="cd-nav-icons is-hidden">
						<li class="go-back"><a href="#0">Menu</a></li>
						<li class="see-all"><a href="more-shortcodes.html" class="animsition-link">More Shortcodes</a></li>
						<li>
							<a class="cd-nav-item item-1 animsition-link" href="buttons.html">
								<h3>Buttons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-2 animsition-link" href="icons.html">
								<h3>Icons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-3 animsition-link" href="counters.html">
								<h3>Counters</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-4 animsition-link" href="carousels.html">
								<h3>Carousels</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-5 animsition-link" href="media.html">
								<h3>Media</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-6 animsition-link" href="blockquotes.html">
								<h3>Blockquotes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-7 animsition-link" href="process.html">
								<h3>Process Steps</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-8 animsition-link" href="alert.html">
								<h3>Alert Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-9 animsition-link" href="tabs.html">
								<h3>Tabs</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-10 animsition-link" href="pricing.html">
								<h3>Pricing Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-11 animsition-link" href="clients.html">
								<h3>Clients</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-12 animsition-link" href="lightbox.html">
								<h3>Lightbox</h3>
								<p>This is the page description</p>
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="contact.html" class="animsition-link">Contact</a>
				</li>
				
				<li>
					<a href="cart.html" class="animsition-link"><i class="fa fa-fw">&#xf07a;</i>cart</a>
				</li>
				
			</ul> <!-- primary-nav -->
		</nav> <!-- cd-nav -->

		<div id="cd-search" class="cd-search">
			<form>
				<input type="search" placeholder="Search...">
			</form>
		</div>	
	
	</div>
	
	<main class="cd-main-content">
	
	<!-- HOME SECTION
    ================================================== -->
	
	<section class="home">
	
		<div class="slider-container">
			<div class="tp-banner-container" style="overflow: visible;">
				<div class="tp-banner revslider-initialised tp-simpleresponsive" id="revslider-9" style="max-height: 800px; height: 276px;">
					<ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
						<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: inherit; opacity: 0.5625;" class="">

							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="images/2.jpg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="images/2.jpg" data-src="images/2.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;{{ asset('registrasi/images/2.jpg') }}&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div></div>
							
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.24, 2.45);" class="tp-parallax-container" data-parallaxlevel="1"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-10 start" data-x="10" data-y="170" data-speed="500" data-start="700" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 3.45px; top: 58.65px; visibility: visible; opacity: 0; transform: matrix3d(0.35836, -0.93358, 0, 0, 0.93358, 0.35836, 0, 0, 0, 0, 1, -0.00166, -56, -90, 0, 1);">
									C
								</div></div>	
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.96, 9.8);" class="tp-parallax-container" data-parallaxlevel="4"><div class="tp-caption color-big randomrotate tp-resizeme rs-parallaxlevel-7 start" data-x="50" data-y="370" data-speed="500" data-start="900" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 17.25px; top: 127.65px; visibility: visible; opacity: 0; transform: matrix3d(0.25881, 0.96592, 0, 0, -0.96592, 0.25881, 0, 0, 0, 0, 1, -0.00166, -77, -37, 0, 1);">
									R
								</div></div>
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.72, 7.35);" class="tp-parallax-container" data-parallaxlevel="3"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-4 start" data-x="210" data-y="230" data-speed="500" data-start="1100" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 72.45px; top: 79.35px; visibility: visible; opacity: 0; transform: matrix3d(0.12186, 0.99254, 0, 0, -0.99254, 0.12186, 0, 0, 0, 0, 1, -0.00166, -88, 15, 0, 1);">
									E
								</div></div>	
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 300; transform: matrix(1, 0, 0, 1, -1.68, 17.15);" class="tp-parallax-container" data-parallaxlevel="7"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-2 start" data-x="280" data-y="490" data-speed="500" data-start="1300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 300; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 96.6px; top: 169.05px; visibility: visible; opacity: 0; transform: matrix3d(0.05233, 0.99862, 0, 0, -0.99862, 0.05233, 0, 0, 0, 0, 1, -0.00166, -30, 42, 0, 1);">
									A
								</div></div>
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -2.4, 24.5);" class="tp-parallax-container" data-parallaxlevel="10"><div class="tp-caption color-big randomrotate tp-resizeme rs-parallaxlevel-1 start" data-x="450" data-y="410" data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 155.25px; top: 141.45px; visibility: visible; opacity: 0; transform: matrix3d(0.54463, -0.83867, 0, 0, 0.83867, 0.54463, 0, 0, 0, 0, 1, -0.00166, -81, 36, 0, 1);">
									T
								</div></div>
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -1.68, 17.15);" class="tp-parallax-container" data-parallaxlevel="7"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-2 start" data-x="640" data-y="370" data-speed="500" data-start="1700" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 220.8px; top: 127.65px; visibility: visible; opacity: 0; transform: matrix3d(0.96126, 0.27563, 0, 0, -0.27563, 0.96126, 0, 0, 0, 0, 1, -0.00166, 82, -89, 0, 1);">
									I
								</div></div>	
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 300; transform: matrix(1, 0, 0, 1, -0.96, 9.8);" class="tp-parallax-container" data-parallaxlevel="4"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-3 start" data-x="780" data-y="220" data-speed="500" data-start="1900" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 300; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 269.1px; top: 75.9px; visibility: visible; opacity: 0; transform: matrix3d(-0.05233, 0.99862, 0, 0, -0.99862, -0.05233, 0, 0, 0, 0, 1, -0.00166, 77, -27, 0, 1);">
									v
								</div></div>
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.96, 9.8);" class="tp-parallax-container" data-parallaxlevel="4"><div class="tp-caption color-big randomrotate tp-resizeme rs-parallaxlevel-7 start" data-x="850" data-y="410" data-speed="500" data-start="2100" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 293.25px; top: 141.45px; visibility: visible; opacity: 0; transform: matrix3d(0.40673, -0.91354, 0, 0, 0.91354, 0.40673, 0, 0, 0, 0, 1, -0.00166, 54, -85, 0, 1);">
									i
								</div></div>
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.96, 9.8);" class="tp-parallax-container" data-parallaxlevel="4"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-7 start" data-x="940" data-y="510" data-speed="500" data-start="2300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 324.3px; top: 175.95px; visibility: visible; opacity: 0; transform: matrix3d(0.43837, -0.89879, 0, 0, 0.89879, 0.43837, 0, 0, 0, 0, 1, -0.00166, -77, 4, 0, 1);">
									T
								</div></div>	
								<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 500; transform: matrix(1, 0, 0, 1, -0.72, 7.35);" class="tp-parallax-container" data-parallaxlevel="3"><div class="tp-caption black-big randomrotate tp-resizeme rs-parallaxlevel-4 start" data-x="1040" data-y="310" data-speed="500" data-start="2500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 66px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 66px; left: 358.8px; top: 106.95px; visibility: visible; opacity: 0; transform: matrix3d(0.52991, 0.84804, 0, 0, -0.84804, 0.52991, 0, 0, 0, 0, 1, -0.00166, 69, 62, 0, 1);">
									Y
								</div></div>
								<div class="tp-caption sfb ltl tp-resizeme start" data-x="375" data-y="210" data-speed="500" data-start="100" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 400; white-space: nowrap; left: 129.375px; top: 72.45px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, -1409, 0, 0, 1);">
									<img src="{{ asset('registrasi/images/iphone.png') }}" alt="" style="width: 155.25px; height: 325.68px;">
								</div>							

						</li>
						<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;" class="current-sr-slide-visible">

							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="{{ asset('registrasi/images/9.jpg') }}" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="images/9.jpg" data-src="images/9.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;images/9.jpg&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div></div>
							
								<div class="tp-caption black-heavy-2 randomrotate tp-resizeme start" data-speed="200" data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: -37.95px 0px 0px; padding: 0px; letter-spacing: 1px; font-size: 17px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
									<span class="slider-text-color" style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 17px;">responsive</span> and retina ready
								</div>
								<div class="tp-caption black-small randomrotate tp-resizeme start splitted" data-speed="200" data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; white-space: nowrap; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 8px; border-width: 0px; margin: -13.8px 0px 0px; padding: 0px; letter-spacing: 2px; font-size: 8px; visibility: visible; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><div class="tp-splitted" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">
</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0.609626; transform: matrix3d(0.99719, 0.07487, 0, 0, -0.07487, 0.99719, 0, 0, 0, 0, 1, -0.00209, 30.8396, 14.0535, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 6.48e-06; transform: matrix3d(0.22495, -0.97436, 0, 0, 0.97436, 0.22495, 0, 0, 0, 0, 1, -0.00166, -16.9999, -76.9995, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.98768, -0.15643, 0, 0, 0.15643, 0.98768, 0, 0, 0, 0, 1, -0.00166, -4, -23, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.1908, 0.98162, 0, 0, -0.98162, 0.1908, 0, 0, 0, 0, 1, -0.00166, 86, -85, 0, 1);" class="tp-splitted">W</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(-0.17364, 0.9848, 0, 0, -0.9848, -0.17364, 0, 0, 0, 0, 1, -0.00166, 61, 19, 0, 1);" class="tp-splitted">E</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.88294, 0.46947, 0, 0, -0.46947, 0.88294, 0, 0, 0, 0, 1, -0.00166, -52, 93, 0, 1);" class="tp-splitted">A</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.94551, -0.32556, 0, 0, 0.32556, 0.94551, 0, 0, 0, 0, 1, -0.00166, -12, -25, 0, 1);" class="tp-splitted">R</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.73135, 0.68199, 0, 0, -0.68199, 0.73135, 0, 0, 0, 0, 1, -0.00166, 13, 24, 0, 1);" class="tp-splitted">E</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.60181, -0.79863, 0, 0, 0.79863, 0.60181, 0, 0, 0, 0, 1, -0.00166, -17, -5, 0, 1);" class="tp-splitted">R</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.4848, 0.87461, 0, 0, -0.87461, 0.4848, 0, 0, 0, 0, 1, -0.00166, -81, 26, 0, 1);" class="tp-splitted">E</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.5, 0.86602, 0, 0, -0.86602, 0.5, 0, 0, 0, 0, 1, -0.00166, 32, -26, 0, 1);" class="tp-splitted">L</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.95105, -0.30901, 0, 0, 0.30901, 0.95105, 0, 0, 0, 0, 1, -0.00166, 15, -20, 0, 1);" class="tp-splitted">E</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.76604, 0.64278, 0, 0, -0.64278, 0.76604, 0, 0, 0, 0, 1, -0.00166, -45, 78, 0, 1);" class="tp-splitted">N</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.3746, 0.92718, 0, 0, -0.92718, 0.3746, 0, 0, 0, 0, 1, -0.00166, -39, -68, 0, 1);" class="tp-splitted">T</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.99619, -0.08715, 0, 0, 0.08715, 0.99619, 0, 0, 0, 0, 1, -0.00166, -73, -1, 0, 1);" class="tp-splitted">L</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.88294, -0.46947, 0, 0, 0.46947, 0.88294, 0, 0, 0, 0, 1, -0.00166, -34, 20, 0, 1);" class="tp-splitted">E</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.97029, 0.24192, 0, 0, -0.24192, 0.97029, 0, 0, 0, 0, 1, -0.00166, -28, -49, 0, 1);" class="tp-splitted">S</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.83867, -0.54463, 0, 0, 0.54463, 0.83867, 0, 0, 0, 0, 1, -0.00166, 42, 70, 0, 1);" class="tp-splitted">S</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.98768, 0.15643, 0, 0, -0.15643, 0.98768, 0, 0, 0, 0, 1, -0.00166, -44, 60, 0, 1);" class="tp-splitted">I</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.58778, -0.80901, 0, 0, 0.80901, 0.58778, 0, 0, 0, 0, 1, -0.00166, -61, 32, 0, 1);" class="tp-splitted">N</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.77714, 0.62932, 0, 0, -0.62932, 0.77714, 0, 0, 0, 0, 1, -0.00166, -53, 14, 0, 1);" class="tp-splitted">M</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(-0.12186, -0.99254, 0, 0, 0.99254, -0.12186, 0, 0, 0, 0, 1, -0.00166, -36, 26, 0, 1);" class="tp-splitted">O</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.43837, 0.89879, 0, 0, -0.89879, 0.43837, 0, 0, 0, 0, 1, -0.00166, -5, 24, 0, 1);" class="tp-splitted">V</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.99452, -0.10452, 0, 0, 0.10452, 0.99452, 0, 0, 0, 0, 1, -0.00166, -71, -83, 0, 1);" class="tp-splitted">I</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.86602, -0.49999, 0, 0, 0.49999, 0.86602, 0, 0, 0, 0, 1, -0.00166, 18, -94, 0, 1);" class="tp-splitted">N</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.96592, -0.25881, 0, 0, 0.25881, 0.96592, 0, 0, 0, 0, 1, -0.00166, -97, 42, 0, 1);" class="tp-splitted">G</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.9063, 0.42261, 0, 0, -0.42261, 0.9063, 0, 0, 0, 0, 1, -0.00166, -36, -62, 0, 1);" class="tp-splitted">B</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.76604, -0.64278, 0, 0, 0.64278, 0.76604, 0, 0, 0, 0, 1, -0.00166, 61, -7, 0, 1);" class="tp-splitted">O</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.99452, 0.10452, 0, 0, -0.10452, 0.99452, 0, 0, 0, 0, 1, -0.00166, -15, -54, 0, 1);" class="tp-splitted">U</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.99939, -0.03489, 0, 0, 0.03489, 0.99939, 0, 0, 0, 0, 1, -0.00166, -35, 57, 0, 1);" class="tp-splitted">N</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.85716, 0.51503, 0, 0, -0.51503, 0.85716, 0, 0, 0, 0, 1, -0.00166, -57, 65, 0, 1);" class="tp-splitted">D</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.97029, -0.24192, 0, 0, 0.24192, 0.97029, 0, 0, 0, 0, 1, -0.00166, -93, -81, 0, 1);" class="tp-splitted">A</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.32556, -0.94551, 0, 0, 0.94551, 0.32556, 0, 0, 0, 0, 1, -0.00166, 22, 38, 0, 1);" class="tp-splitted">R</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.12186, -0.99254, 0, 0, 0.99254, 0.12186, 0, 0, 0, 0, 1, -0.00166, -73, -47, 0, 1);" class="tp-splitted">I</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.57357, 0.81915, 0, 0, -0.81915, 0.57357, 0, 0, 0, 0, 1, -0.00166, -9, -70, 0, 1);" class="tp-splitted">E</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.71933, 0.69465, 0, 0, -0.69465, 0.71933, 0, 0, 0, 0, 1, -0.00166, 51, -100, 0, 1);" class="tp-splitted">S</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.99984, 0.01745, 0, 0, -0.01745, 0.99984, 0, 0, 0, 0, 1, -0.00166, -21, -94, 0, 1);" class="tp-splitted">
</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(-0.03489, -0.99939, 0, 0, 0.99939, -0.03489, 0, 0, 0, 0, 1, -0.00166, -89, 21, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.62932, -0.77714, 0, 0, 0.77714, 0.62932, 0, 0, 0, 0, 1, -0.00166, -15, 11, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.46947, 0.88294, 0, 0, -0.88294, 0.46947, 0, 0, 0, 0, 1, -0.00166, 98, -67, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.77714, 0.62932, 0, 0, -0.62932, 0.77714, 0, 0, 0, 0, 1, -0.00166, 98, -73, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.69465, 0.71933, 0, 0, -0.71933, 0.69465, 0, 0, 0, 0, 1, -0.00166, -71, 48, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(-0.13917, -0.99026, 0, 0, 0.99026, -0.13917, 0, 0, 0, 0, 1, -0.00166, -19, 58, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.3746, -0.92718, 0, 0, 0.92718, 0.3746, 0, 0, 0, 0, 1, -0.00166, -99, -50, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.78801, 0.61566, 0, 0, -0.61566, 0.78801, 0, 0, 0, 0, 1, -0.00166, 51, -65, 0, 1);" class="tp-splitted">	</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(0.24192, 0.97029, 0, 0, -0.97029, 0.24192, 0, 0, 0, 0, 1, -0.00166, -21, -86, 0, 1);" class="tp-splitted">	</div></div> </div></div>
							<a href="#"><div class="button-slider">discover</div></a>	

						</li>
					</ul>
				<div class="tp-loader spinner4" style="display: none;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div class="tp-bannertimer" style="visibility: hidden; width: 2.94286%; transform: translate3d(0px, 0px, 0px);"></div></div>
			<div class="tp-bullets  simplebullets round" style="bottom: 30px; left: 50%; margin-left: -26px;"><div class="bullet first"></div><div class="bullet last selected"></div><div class="tpclear"></div></div><div style="visibility:hidden;display:none" class="tp-leftarrow  tparrows round"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;images/2.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Intro Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div><div style="visibility:hidden;display:none" class="tp-rightarrow  tparrows round"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;images/2.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Intro Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div></div>
		</div>
		
	</section>	
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top" id="scroll-link">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h2>WELCOME TO Clymene</h2>
						<div class="subtitle">Multipurpose <span class="subtitle-written">HTML5</span> Template</div>
					</div>
				</div>
				<div class="sixteen columns remove-bottom" data-scroll-reveal="enter bottom move 400px over 1s after 0.1s">
					<div class="full-image">
						<img src="{{ asset('registrasi/images/home1.png') }}"  alt="">
					</div>
				</div>
			</div>
		</section>
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top-bottom">
			<div class="container">
				<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="services-boxes-1">
						<div class="icon-box">&#xf085;</div>
						<h6>FULLY CUSTOMIZABLE</h6>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<div class="services-boxes-1">
						<div class="icon-box">&#xf121;</div>
						<h6>UNLIMITED OPTIONS</h6>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="services-boxes-1">
						<div class="icon-box">&#xf06e;</div>
						<h6>RETINA READY</h6>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</section>

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>QODE PROCESS</h3>
						<div class="subtitle">Carefully <span class="subtitle-written">crafted elements</span> come together into one amazing design.</div>
					</div>
				</div>
				<div class="sixteen columns">
					<div id="cd-timeline" class="cd-container">
						<div class="cd-timeline-block">
							<div class="cd-timeline-img">&#xf0eb;</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<h6>IDEA</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
								<a href="#0" class="cd-read-more">Read more</a>
								<span class="cd-date">20%</span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->

						<div class="cd-timeline-block">
							<div class="cd-timeline-img">&#xf200;</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<h6>CONCEPT</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
								<a href="#0" class="cd-read-more">Read more</a>
								<span class="cd-date">40%</span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->

						<div class="cd-timeline-block">
							<div class="cd-timeline-img">&#xf0d0;</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<h6>DESIGN</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
								<a href="#0" class="cd-read-more">Read more</a>
								<span class="cd-date">60%</span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->

						<div class="cd-timeline-block">
							<div class="cd-timeline-img">&#xf085;</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<h6>DEVELOP</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
								<a href="#0" class="cd-read-more">Read more</a>
								<span class="cd-date">80%</span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->

						<div class="cd-timeline-block">
							<div class="cd-timeline-img">&#xf201;</div> <!-- cd-timeline-img -->

							<div class="cd-timeline-content">
								<h6>TEST</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
								<a href="#0" class="cd-read-more">Read more</a>
								<span class="cd-date">100%</span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->
					</div>
				</div>
			</div>
		</section>
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section parallax-section parallax-section-padding-top-bottom">
		
			<div class="parallax-1"></div>	
			
			<div class="container">
				<div class="container">
					<div class="four columns">
						<div class="facts-box-1">
							<div class="facts-box-1-num"><span class="counter">82</span><div class="line"></div></div>
							<h6>FINISHED PROJECTS</h6> 
						</div>
					</div>
					<div class="four columns">
						<div class="facts-box-1">
							<div class="facts-box-1-num"><span class="counter">8723</span><div class="line"></div></div>
							<h6>LINES OF CODE</h6> 
						</div>
					</div>
					<div class="four columns">
						<div class="facts-box-1">
							<div class="facts-box-1-num"><span class="counter">513</span><div class="line"></div></div>
							<h6>CUPS OF COFFEE</h6> 
						</div>
					</div>
					<div class="four columns">
						<div class="facts-box-1">
							<div class="facts-box-1-num"><span class="counter">3419</span><div class="line"></div></div>
							<h6>CUSTOM COUNTERS</h6> 
						</div>
					</div>
				</div>
			</div>
		</section>	
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="five columns">
					<div class="cd-product cd-container">
						<div class="cd-product-wrapper">
							<img src="{{ asset('registrasi/images/iphone.png') }}" alt="Preview image">
							<ul>
								<li class="cd-single-point">
									<a class="cd-img-replace" href="#0">More</a>
									<div class="cd-more-info cd-top">
										<h6>Title</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio esse placeat minus fugit, voluptate, quos, ea, nisi temporibus repudiandae perspiciatis natus.</p>
										<a href="#0" class="cd-close-info cd-img-replace">Close</a>
									</div>
								</li> <!-- .cd-single-point -->

								<li class="cd-single-point">
									<a class="cd-img-replace" href="#0">More</a>
									<div class="cd-more-info cd-top">
										<h6>Title</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio esse placeat minus fugit, voluptate, quos, ea, nisi temporibus repudiandae perspiciatis natus.</p>
										<a href="#0" class="cd-close-info cd-img-replace">Close</a>
									</div>
								</li> <!-- .cd-single-point -->

								<li class="cd-single-point">
									<a class="cd-img-replace" href="#0">More</a>
									<div class="cd-more-info cd-right">
										<h6>Title</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio esse placeat minus fugit, voluptate, quos, ea, nisi temporibus repudiandae perspiciatis natus.</p>
										<a href="#0" class="cd-close-info cd-img-replace">Close</a>
									</div>
								</li> <!-- .cd-single-point -->

								<li class="cd-single-point">
									<a class="cd-img-replace" href="#0">More</a>
									<div class="cd-more-info cd-left">
										<h6>Title</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae distinctio esse placeat minus fugit, voluptate, quos, ea, nisi temporibus repudiandae perspiciatis natus.</p>
										<a href="#0" class="cd-close-info cd-img-replace">Close</a>
									</div>
								</li> <!-- .cd-single-point -->
							</ul>
						</div> <!-- .cd-product-wrapper -->
					</div> <!-- .cd-product -->
				</div>
				<div class="eleven columns">
					<div class="section-title left">
						<h3>Points of Interest</h3>
						<div class="subtitle left">Use this to <span class="subtitle-written">highlight the points of interest</span> of your products. Just a click to open a brief description of each point.</div>
					</div>
					<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
						<div class="icon-box">&#xf10a;</div>
						<h6>100% RESPONSIVE</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
					<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
						<div class="icon-box">&#xf06e;</div>
						<h6>RETINA READY</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
					<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
						<div class="icon-box">&#xf121;</div>
						<h6>INTERACTIVE ELEMENTS</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
					<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
						<div class="icon-box">&#xf121;</div>
						<h6>UNLIMITED OPTIONS</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</section>	
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>OUR LATEST WORKS</h3>
						<div class="subtitle">WE ARE <span class="subtitle-written">Clymene</span> CREATIVE AGENCY.</div>
					</div>
				</div>
			</div>
			<div class="portfolio-wrap-1">
				<a href="slider-project.html" class="animsition-link">
					<div class="portfolio-box-1">
						<div class="mask-1"></div>
						<img src="{{ asset('registrasi/images/portfolio/1.jpg') }}" alt="">
						<h6>holy sadie</h6>
					</div>
				</a>
				<a href="video-project.html" class="animsition-link">
					<div class="portfolio-box-1">
						<div class="mask-1"></div>
						<img src="{{ asset('registrasi/images/portfolio/2.jpg') }}" alt="">
						<h6>dreamy honey</h6>
					</div>
				</a>
				<a href="gallery-project.html" class="animsition-link">
					<div class="portfolio-box-1">
						<div class="mask-1"></div>
						<img src="{{ asset('registrasi/images/portfolio/3.jpg') }}" alt="">
						<h6>crazy layla</h6>
					</div>
				</a>
				<a href="parallax-project.html" class="animsition-link">
					<div class="portfolio-box-1">
						<div class="mask-1"></div>
						<img src="{{ asset('registrasi/images/portfolio/4.jpg') }}" alt="">
						<h6>creative zoe</h6>
					</div>
				</a>
			</div>
			<div class="call-to-action-1">
				<div class="action-top-1">over 80 finished projects</div>
				<h5>ALL WORKS</h5>
				<a href="grid-2col.html" class="button-1 animsition-link">Discover</a>
			</div>
		</section>		
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>WHAT OUR CLIENTS SAY</h3>
					</div>
				</div>
				<div class="sixteen columns">
					<div id="owl-blockquotes" class="owl-carousel owl-theme">
						<div class="item blockquotes-1">
							<div class="arrow-right"></div>
							<img src="{{ asset('registrasi/images/team11.jpg') }}" alt="">
							<h6>JAMES BEAN</h6>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia. Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
							<div class="company-name">CEO, CompanyName</div>
						</div>
						<div class="item blockquotes-1">
							<div class="arrow-right"></div>
							<img src="{{ asset('registrasi/images/team22.jpg') }}" alt="">
							<h6>ISABELLA MORO</h6>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia. Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
							<div class="company-name">CEO, CompanyName</div>
						</div>
						<div class="item blockquotes-1">
							<div class="arrow-right"></div>
							<img src="{{ asset('registrasi/images/team33.jpg') }}" alt="">
							<h6>DAVID IVE</h6>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia. Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
							<div class="company-name">CEO, CompanyName</div>
						</div>
						<div class="item blockquotes-1">
							<div class="arrow-right"></div>
							<img src="{{ asset('registrasi/images/team44.jpg') }}" alt="">
							<h6>MARIA BEAN</h6>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. A small river named Duden flows by their place and supplies it with the necessary regelialia. Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
							<div class="company-name">CEO, CompanyName</div>
						</div>
					</div>	
				</div>
			</div>
		</section>

	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<ul id="owl-logos" class="owl-carousel owl-theme">
						<li><img  src="{{ asset('registrasi/images/logos/1.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/2.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/3.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/4.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/1.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/2.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/3.png') }}" alt="" /></li>
						<li><img  src="{{ asset('registrasi/images/logos/4.png') }}" alt="" /></li>
					</ul>
				</div>
			</div>
		</section>

	<!-- FOOTER
    ================================================== -->	
	
		<section class="section footer-1 section-padding-top-bottom">	
			<div class="container">
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
					<a href="index.html" class="animsition-link"><div class="logo-footer"></div></a>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Kraljevo</h6>
					<p>Nikole Tesle 41, Serbia<br/>
					+381 602037802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Belgrade</h6>
					<p>Heroja Maricica 23, Serbia<br/>
					+381 642342802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
					<div class="social-bottom">
						<ul class="list-social">
							<li class="icon-soc">
								<a href="#">&#xf099;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09a;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09b;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf0d5;</a>
							</li>
						</ul>	
					</div>
					<p><i class="icon-footer">&#xf0e0;</i><a href="mailto:office@yoursite.com" title="">office@yoursite.com</a></p>
				</div>	
			</div>
		</section>
		<section class="section footer-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<p>© ALL RIGHTS RESERVED. MADE BY IG DESIGN 2014</p>
				</div>	
			</div>
		</section>
		
	</main>		

	<div class="scroll-to-top">&#xf106;</div>

	</div>

	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="{{ asset('registrasi/js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/modernizr.custom.js') }}"></script> 
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.mobile.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/retina-1.1.0.min.js') }}"></script>	
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.animsition.min.js') }}"></script>
<script type="text/javascript">
(function($) { "use strict";
	$(document).ready(function() {
	  
	  $(".animsition").animsition({
	  
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link', 
		// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
		//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		
		overlay               :   false,
		
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	});  
})(jQuery);
</script>
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.themepunch.tools.min.js') }}"></script>   
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.easing.js') }}"></script>	
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.hidescroll.min.js') }}"></script>	
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
<!-- <script type="text/javascript" src="js/smoothScroll.js"></script> -->
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/scrollReveal.js') }}"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="{{ asset('registrasi/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript"> 
(function($) { "use strict";          
			jQuery(document).ready(function() {
				var offset = 450;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.scroll-to-top').fadeIn(duration);
					} else {
						jQuery('.scroll-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.scroll-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
})(jQuery);
</script>
<script type="text/javascript" src="{{ asset('registrasi/js/styleswitcher.js') }}"></script>
<script type="text/javascript" src="{{ asset('registrasi/js/custom-index.js') }}"></script>  	  
<!-- End Document
================================================== -->
</body>
</html>