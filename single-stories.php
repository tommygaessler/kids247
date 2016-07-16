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
		while ( have_posts() ) : the_post(); ?>

			<h2 class="stories-header"><?php the_title(); ?></h2>

			<div class="categories"><p>Categories: <?php echo get_the_category_list(', '); ?></p>
			<div>

			<div class="video-container">
				<?php the_field('stories_hero_video') ?>
			</div>
			
			<p class="intro"><?php the_field('stories_introduction_text'); ?></p>

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
