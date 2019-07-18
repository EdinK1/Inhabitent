		<li>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="journal-desc">			
		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="journal-date">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		</p>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<a class="btn" href="<?php echo esc_url(get_permalink()); ?>">Read More</a>
	</div>
	</li>