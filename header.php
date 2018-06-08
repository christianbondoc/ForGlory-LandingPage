<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package For-Glory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>





<div id="page" class="site "> <!--Container here later maybe -->

<nav class="site-header sticky-top py-1">
	<div class="container d-flex flex-column flex-md-row justify-content-between">
		<a class="header-logo" href="<?php echo get_option("siteurl"); ?>">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/Assets/forglorylogo.png" >
		</a>

		<div class="bs_menu_items nav navbar-nav nav-center">
			<div class="nav-bar" id="nav-bar">
			<a class="ddIcon" onClick="ddFunction()">&#9776</a>
			<?php

				if ( is_front_page() &&  is_home() ) {
					wp_nav_menu();  
				} 
				?>
		</div>
			</div>
	</div>
</nav>


	
	<div id="content" class="site-content">
		