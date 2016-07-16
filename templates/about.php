<?php
/**
 * Template Name: About Page
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
			
			<div class="hero" style="background-image: url(<?php echo the_field('about_hero_image'); ?>);">
			<h1><?php the_title(); ?></h1>
			</div>

			<div class="row">
			
			<!-- <h2>Who We Are</h2> -->
			<p><?php the_field('mission'); ?></p>
			<!-- <h2>Who We Serve</h2> -->
			<!-- <p><?php the_field('vision'); ?></p> -->
			<!-- <h2>What We Do</h2> -->
			<!-- <p><?php the_field('history'); ?></p> -->
			<!-- <h2>Board of Directors Leadership Team</h2> -->

			<!-- <?php
			        $args = array( 
			            'post_type' => 'team',
			            'posts_per_page' => 3
			        );
			        $loop = new WP_Query( $args );
			        while ( $loop->have_posts() ) : $loop->the_post();
			    ?>

			        <div class="column one-third">
			        	<img src="<?php the_field('profile_image'); ?>">
    					<h3><?php the_field('profile_name'); ?></h3>
    					<h4><?php the_field('profile_title'); ?></h4>
    					<p><?php the_field('profile_bio'); ?></p>
			        </div>

			    <?php endwhile; ?>
    				<?php wp_reset_postdata(); ?> -->
    		</div>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
