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

		</div><!-- #main --><!-- /.row -->
	</div><!-- #page --><!-- /.container -->

	<footer class="site-footer">
		<?php get_sidebar( 'footer' ); ?>
    <p>
      <a href="#">hop to top!</a>
    </p>
	</footer><!-- .site-footer -->

	<?php wp_footer(); ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/docs.min.js"></script>
</body>
</html>
