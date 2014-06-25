<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- /.row -->
	</div><!-- /.container -->

	<footer class="site-footer">
		<?php get_sidebar( 'footer' ); ?>
    <p>
      <a href="#">hop to top!</a>
    </p>
	</footer><!-- .site-footer -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/wp-content/themes/karlblau2014/js/bootstrap.min.js"></script>
  <script src="/wp-content/themes/karlblau2014/js/docs.min.js"></script>

  <?php wp_footer(); ?>
</body>
</html>
