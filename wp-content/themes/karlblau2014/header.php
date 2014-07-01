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
  <meta name="description" content="digital portal of singer-songwriter, spellcaster, human, Karl Blau">
  <meta name="author" content="Site design and development by Kenneth M. Piekarski (http://www.kmpiekarski.com) in the Summer of 2014">
  <meta name="copyright" content="Copyright <?= date('Y') ?>, Karl Blau" />
  <link rel="shortcut icon" href="favicon.ico">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- Custom styles for this template -->
  <!-- <link href="/wp-content/themes/karlblau2014/css/twentyfourteen.css" rel="stylesheet"> -->
  <link href="/wp-content/themes/karlblau2014/css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-masthead">
  <div class="site-header">
    <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php /*bloginfo( 'name' );*/ ?><img src="/wp-content/themes/karlblau2014/img/karl-blau-header-yellow.png"></a></div>
    <div class="container">
      <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
    </div>
  </div><!-- .site-header -->
</div><!-- .site-masthead -->

<div class="hfeed site container">

  <div class="row">
