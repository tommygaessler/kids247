<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kids247_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
		?>



		<!-- added this -->

		<h2 class="stories-header"><?php the_title(); ?></h2>

			<div class="categories">

			<p>Posted in <?php echo get_the_category_list(', '); ?></p>
			</div>

			<a href="https://twitter.com/share" class="twitter-share-button" data-via="helpingkids247" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

		<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php the_permalink(); ?>&layout=button&mobile_iframe=true&width=58&height=20&appId" width="58" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

		<img src="<?php echo the_field('post_hero_image'); ?>">

		<?php the_content(); ?>

		<?php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();