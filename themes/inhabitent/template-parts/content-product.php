<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header>
		<?php the_title( sprintf( '<div class="shop-desc"><h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
		<span class="entry-meta shop-price"> <?=number_format( get_post_custom()['price'][0], 2);  
        ?>
      </span>
	</header><!-- .entry-header -->
</article><!-- #post-## -->