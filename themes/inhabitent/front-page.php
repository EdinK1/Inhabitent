<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="landing">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>
			
			<?php endwhile; // End of the loop. ?>
		</section>

		<div class="container">
		<section class="shop-stuff">

			<h2 class="title">Shop Stuff</h2>

			<ul class="shop-terms">

			<?php $terms = get_terms(array(
			'taxonomy' => 'product_type',
			));?>

			<?php if ($terms) : foreach ($terms as $term) :?>

			
				<li class="shop-term">
					<img src="<?php echo get_template_directory_uri() . "/images/product-type-icons/" . $term->slug . ".svg"; ?>" />
					<p><?= $term->description ?></p>
				<a href="<?= esc_url(get_term_link($term)); ?>">
					<?= $term->name; ?> Stuff
					</a>
				</li>

			<?php endforeach; endif;?>
			</ul>
		</section>

		<section class="journal">

		<h2 class="title">Inhabitent Journal</h2>

		<ul class="journal-posts">

        <?php
          $blog_posts = get_posts(array(
            'post_type' => 'post',
			'posts_per_page' => 3,
		  ));

		  foreach ($blog_posts as $post) : setup_postdata($post);
		  get_template_part('template-parts/content', 'front-page-journal');
		  endforeach; wp_reset_postdata();
	  ?>

		</ul>		
		</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
