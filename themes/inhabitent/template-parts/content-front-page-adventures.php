		<li>
		<div style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php the_post_thumbnail_url(); ?>) no-repeat center center/cover" class="adventure-desc">			

		<?php the_title( sprintf( '<h2 class="adventure-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<a class="btn" href="<?php echo esc_url(get_permalink()); ?>">Read More</a>
	</div>
	</li>