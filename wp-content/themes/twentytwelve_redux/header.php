<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>
<html class="no-js ie lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Device icons from Andy Clark's 320andup mobile framework. Images should be changed to match site branding if uncommmented and used -->

<!-- 16x16 
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"> -->
<!-- 32x32 
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"> -->
<!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
<!-- <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-precomposed.png"> -->
<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-72x72-precomposed.png"> -->
<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-114x114-precomposed.png"> -->
<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-144x144-precomposed.png"> -->

<!--iOS -->

<!-- <meta name="apple-mobile-web-app-title" content="320 and Up"> -->
<!-- <meta name="viewport" content="initial-scale=1.0"> (Use if apple-mobile-web-app-capable below is set to yes) -->
<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->

<!-- iPhone 3GS, pre-2011 iPod Touch -->
<!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup-320x460.png" media="screen and (max-device-width:320px)"> -->
<!-- iPhone 4, 4S and 2011 iPod Touch-->
<!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup-640x920.png" media="(max-device-width:480px) and (-webkit-min-device-pixel-ratio:2)"> -->
<!-- iPhone 5 and 2012 iPod Touch -->
<!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup-640x1096.png" media="(max-device-width:548px) and (-webkit-min-device-pixel-ratio:2)"> -->
<!-- iPad landscape -->
<!-- <link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup-1024x748.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:landscape)"> -->
<!-- iPad Portrait -->
<!-- <link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup-768x1004.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:portrait)"> -->

<!-- Windows 8 / RT -->
<!-- meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-144x144-precomposed.png" -->
<!-- meta name="msapplication-TileColor" content="#000" -->
<meta http-equiv="cleartype" content="on">

<?php wp_head(); ?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
<![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><span class="icon-reorder icon-large" aria-hidden="true"></span><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">