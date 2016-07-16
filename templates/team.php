<?php
/**
 * Template Name: Team Page
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
			
			

			<div class="row">
			
			

			<?php
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
    				<?php wp_reset_postdata(); ?>

			    
    		</div>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
