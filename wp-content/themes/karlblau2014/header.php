<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.ico">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- Custom styles for this template -->
  <!-- <link href="/wp-content/themes/karlblau2014/css/karlblau.css" rel="stylesheet"> -->
  <link href="/wp-content/themes/karlblau2014/css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>

			<!--<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php /*_e( 'Search', 'twentyfourteen' );*/ ?></a>
			</div> -->

			<div class="container">
        <nav class="site-nav">
          <button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
          <a class="site-nav-item" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
      </div>
		</div><!-- site-header -->

		<!-- <div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php /*get_search_form();*/ ?>
			</div>
		</div> -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
		<div class="row">