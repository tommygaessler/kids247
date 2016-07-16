<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids247_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area row gallery">
		<main id="main" class="site-main stories" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header"><h1>Stories</h1></header>
			<!-- .page-header -->
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<div class="column one-half" style="background-image: url(<?php the_field('stories_feature_image'); ?>);">
			            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
			            <!-- <a href="<?php the_permalink(); ?>">➞</a> -->
			            <p><?php the_field('stories_introduction_text'); ?><p></a>
			        </div>
			<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
