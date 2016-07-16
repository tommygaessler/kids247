<?php

/**
 * Template Name: Home Page
 *
 * @package Kids247_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		while ( have_posts() ) : the_post();

			$heroBkgd = get_field('hero_background_image');
			$heroHeadLine = get_field('hero_headline');
			$heroSubhead = get_field('hero_subheadline');
			$mission = get_field('mission_statement');
			$programs = get_field('programs');
			$videoLabel = get_field('video_label');
		?>

			
			<!-- <div class="hero" style="background-image: url()">
				<h1><?php echo $heroHeadLine; ?></h1>
				<p><?php echo $heroSubhead; ?></p>
			</div> -->

			<?php echo do_shortcode('[smartslider3 slider=2]'); ?>

			<!-- Mission -->
			<div class="mission">
				<div class="row">
					<h1><?php echo $mission; ?></h1>
				</div>
			</div>

			<!-- Begin Services -->
			<div class="services">
			    <div class="servicerow">

			    
				<h1 class="programs"><?php echo $programs; ?></h1>
				

			    <?php
			        $args = array( 
			            'post_type' => 'services',
			            'posts_per_page' => 3
			        );
			        $loop = new WP_Query( $args );
			        while ( $loop->have_posts() ) : $loop->the_post();
			    ?>

			        <div class="column one-third">
			        	<img class="service-icon" src="<?php the_field('service_icon'); ?>">
    					<a href="/<?php the_title(); ?>"><h3 class="service-title"><?php the_title(); ?></h3></a>
			        </div>

			    <?php endwhile; ?>
    				<?php wp_reset_postdata(); ?>
				</div>
			</div>
			<!-- End Services -->

			<!-- Begin Portfolio -->
			<div class="stories">

			   <a href="/stories" class="kidstories" style="text-align: center;">Kids of Divorce Stories</a>

			    <?php the_field('dads247'); ?>
			    
			    
			</div>
			<!-- End Portfolio -->
			

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
