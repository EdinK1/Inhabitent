<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header 
			<?php if(has_block('inhabitent/hero-image-header') || is_singular( 'adventures' )) : echo 'transparent';  endif;?>" role="banner">
				<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="logo">
					<a href="<?= get_home_url() ?>">
					<img src="<?= has_block('inhabitent/hero-image-header') || is_singular( 'adventures' ) ?  get_stylesheet_directory_uri() . '/images/logos/3.png' : get_stylesheet_directory_uri() . '/images/logos/2.png';?>" alt="">
					</a>
				</div>	
				
				<div class="links">
				<button class="menu-toggle" aria-controls="primary-menu"
						aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?= get_search_form(); ?>
				</div>
				</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">