<?php
/** 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids247_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="column one-half footerlogohide">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    			<img id="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Your Image Description Here" />
				</a>
			</div>
			<div class="column one-half">
				<p class="sub">Subscribe to our news letter!</p>
				<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
			</div>
		</div>
		<div class="row">
			<p class="copyright"> Denver, CO | Copyright <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved.</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
