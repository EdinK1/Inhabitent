<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
	<li class="adventure">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="adventure-desc">
		<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
		<a class="btn" href="<?php echo esc_url(get_permalink()); ?>">Read More</a>
		</div>
	</li>