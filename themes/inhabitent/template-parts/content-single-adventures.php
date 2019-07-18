<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_title( '<h2 class="adventure-title">', '</h2>' ); ?>
		<h3 class="adventure-author">By <?php the_author(); ?></h3>
	   <?php the_content(); ?>

       <div class="single-product-social">
		<a href="#"><i class="fab fa-facebook-f"></i>Like</a>
		<a href="#"><i class="fab fa-twitter"></i>Tweet</a>
		<a href="#"><i class="fab fa-pinterest"></i>Pin</a>		
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
