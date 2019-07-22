		<li>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="journal-desc">	
		<span class="journal-date"><?= the_date('d F Y')?> / </span>
		<span class="journal-comments"><?= comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
		<?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<a class="btn" href="<?php echo esc_url(get_permalink()); ?>">Read Entry</a>
	</div>
	</li>