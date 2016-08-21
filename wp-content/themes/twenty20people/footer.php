<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twenty20people
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer container" role="contentinfo">
		<div class="footer-menu">
		<?php for($i=1; $i<=5; $i++) { ?>
			<div class="footer-col">
				<ul>
					<li>About Us</li>
					<li>Surry House</li>
					<li>Our Story</li>
					<li>Press</li>
				</ul>
			</div>
		<?php } ?>	
		<div class="clearfix"></div>
		</div>
		<div class="site-info text-center">
			
			
			<h2><?php printf( _e( '74-76 Campbell Street, Surry Hills 2010 Sydney <br> See your empire. Build it.', 'twenty20people' )); ?></h2>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
