<?php 
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids247_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			$description = get_field('programs_description');
			$embed = get_field('programs_event_ticket')
			?>
			
			<div id="<?php the_field('service_slug'); ?>">

				<div class="hero" style="background-image: url(<?php echo the_field('program_hero_image'); ?>);">
					<h1 id="<?php the_field('service_slug'); ?>"><?php the_title(); ?></h1>
				</div>
				<div class="row">
				<p><?php echo $description; ?></p>
				<?php echo $embed; ?>
				</div>

				<div class="services">
			    <div class="servicerow">

			    
				<h1 class="programs"><?php echo $programs; ?></h1>
				

			    <?php
			        $args = array( 
			            'post_type' => 'services',
			            'posts_per_page' => 4
			        );
			        $loop = new WP_Query( $args );
			        while ( $loop->have_posts() ) : $loop->the_post();
			    ?>

			        <div class="column one-fourth">
			        	<img class="service-icon" src="<?php the_field('service_icon'); ?>">
    					<h3 class="service-title"><?php the_title(); ?></h3>
    					<p class="service-description"><?php the_field('service_description'); ?></p>
    					<a href="/programs#<?php the_field('service_slug'); ?>"><button>Learn more and register!</button></a>
			        </div>

			    <?php endwhile; ?>
    				<?php wp_reset_postdata(); ?>
				</div>
			</div>
			<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
				
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
