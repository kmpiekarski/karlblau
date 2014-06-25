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
    <nav class="site-nav">
      <a class="site-nav-item" href="#"><img src="img/icons/soundcloud-icon.png" width="32" /></a>
      <a class="site-nav-item" href="#"><img src="img/icons/facebook-icon.png" width="32" /></a>
      <a class="site-nav-item" href="#"><img src="img/icons/tumblr-icon.png" width="32" /></a>
      <a class="site-nav-item" href="#"><img src="img/icons/twitter-icon.png" width="32" /></a>
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

    <h4>SHOWS</h4>
    <p>
      <ul>

<!-- TEMPORARY//REMOVE WHEN IMPLEMENTED -->
        <li>08/14 // Art Depot – Anacortes, WA</li>
        <li>08/15 // Seattle – Bellingham, WA</li>
        <li>08/16 // Hollow Earth Radio – Seattle, WA</li>
        <li>08/17 // Mississippi Studios – Portland, OR</li>
        <li>08/18 // The Northern – Olympia, WA</li>

      </ul>
    </p>
  </div>
</div><!-- /.site-sidebar -->
