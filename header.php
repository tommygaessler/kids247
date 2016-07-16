<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids247_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php echo the_field('post_description'); ?>">
<!-- OG -->

<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?php echo the_field('post_description'); ?>" />
<meta property="og:image" content="<?php echo the_field('post_hero_image'); ?>" />
<meta property="og:type" content="article" />
<meta property="article:author" content="" />
<meta property="og:site_name" content="kids247.org" />

<!-- TC -->

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kids247"> 
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="<?php echo the_field('post_description'); ?>">
<meta name="twitter:image" content="<?php echo the_field('post_hero_image'); ?>">

<!-- Links -->
<link rel="shortcut icon" href="http://localhost/wp-content/themes/kids247/images/logo-header.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="genericons/genericons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/min/dropdown-min.js"></script>
<?php wp_head(); ?>

<script type="text/javascript">
$(document).ready(function(){

	$("input.es_textbox_class").attr("placeholder", "Email");
	});
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids247' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    			<img id="header-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Your Image Description Here" />
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="genericon genericon-menu"></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
