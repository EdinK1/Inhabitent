<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function custom_login_logo() {
	?>
	<style type="text/css">
	body.login div#login h1 a {
		background: url(http://localhost/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text-dark.svg) no-repeat center center/contain;
		padding-bottom: 30px;
		width: 320px;
		height: 25px;
	}
		
	body.login div#login form#loginform input#wp-submit {
	background: rgb(36, 138, 130);
	}
	
	</style>
	<?php
	} add_action( 'login_enqueue_scripts', 'custom_login_logo' );
	?>
	<?php 
	add_filter( 'login_headerurl', 'custom_loginlogo_url' );

	function custom_loginlogo_url($url) {
	
		 return  'https://localhost/inhabitent';
	
	}
	

	
