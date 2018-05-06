<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" class="container">

		<nav id="site-navigation" class="top-bar">
			<div class="top-bar-left">
				<ul class="dropdown menu" data-dropdown-menu>
					<li class="menu-text"><?php bloginfo( 'name' );?></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<li><input type="search" placeholder="Search"></li>
					<li><button type="button" class="button">Search</button></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->

		<div class="grid-x">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 id="cell site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h3 id="cell site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
				<?php
			endif;
			$starter_description = get_bloginfo( 'description', 'display' );
			if ( $starter_description || is_customize_preview() ) :
				?>
				<h4 class="cell subheader" id="site-description"><?php echo $starter_description; /* WPCS: xss ok. */ ?></h4>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #header -->

	<div id="content" class="container">
