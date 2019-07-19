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

		<section class="adventures">

		<h2 class="title">Latest Adventures</h2>

		<ul class="adventures-posts">

        <?php
          $adventures_posts = get_posts(array(
            'post_type' => 'adventures',
			'posts_per_page' => 4,
			'order' => 'ASC'
		  ));

		  foreach ($adventures_posts as $post) : setup_postdata($post);
		  get_template_part('template-parts/content', 'front-page-adventures');
		  endforeach; wp_reset_postdata();
		  ?>
		<a class="btn-more" href="<?php echo esc_url(get_post_type_archive_link('adventures')); ?>">More Adventures</a>
		</ul>		
		</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
