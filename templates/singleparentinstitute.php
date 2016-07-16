<?php
/**
 * Template Name: Single Parent Institute Page
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?>
			
			<div class="hero" style="background-image: url(<?php echo the_field('singleparentinstitute_hero_image'); ?>);">
			<h1><?php the_title(); ?></h1>
			</div>

			<div class="row">
			
			<p><?php the_field('singleparentinstitute_description'); ?></p>

			<?php the_field('singleparentinstitute_event_embed'); ?>

			    
    				    		</div>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
