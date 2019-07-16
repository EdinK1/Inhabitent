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
					<img src="#" />
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
			
			
		</section>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
