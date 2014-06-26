<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="col-sm-3 col-sm-offset-1 site-sidebar">
  <div class="sidebar-module">
    <nav class="site-nav social-icons">
      <a class="site-nav-item" href="https://soundcloud.com/karl_blau" target="_blank"><img src="/wp-content/themes/karlblau2014/img/icons/soundcloud-icon.png" width="32" /></a>
      <a class="site-nav-item" href="www.facebook.com/pages/Karl-Blau/121113991324019" target="_blank"><img src="/wp-content/themes/karlblau2014/img/icons/facebook-icon.png" width="32" /></a>
      <a class="site-nav-item" href="http://klaps.bandcamp.com/" target="_blank"><img src="/wp-content/themes/karlblau2014/img/icons/bandcamp-icon.png" width="32" /></a>
      <a class="site-nav-item" href="https://twitter.com/twentyfourteen" target="_blank"><img src="/wp-content/themes/karlblau2014/img/icons/twitter-icon.png" width="32" /></a>
    </nav>

		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav role="navigation" class="navigation site-navigation secondary-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav>
		<?php endif; ?>
  </div>
  <div class="sidebar-module sidebar-module-inset opaque-back anti-list">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->
		<?php endif; ?>

  </div>
</div><!-- /.site-sidebar -->
