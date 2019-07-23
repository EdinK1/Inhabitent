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

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content single-post-content">
		<?php the_content(); ?>
		
		<div class="single-post-cat-tags"> 
		<span>Posted in → <?php the_category('<span>', '</span>'); ?></span>
		<span><?php the_tags('Tagged → '); ?></span>
		</div>
	
		<div class="single-post-social">
		<a href="#"><i class="fab fa-facebook-f"></i>Like</a>
		<a href="#"><i class="fab fa-twitter"></i>Tweet</a>
		<a href="#"><i class="fab fa-pinterest"></i>Pin</a>		
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->


<?php comments_template('./comments.php', true) ?>
