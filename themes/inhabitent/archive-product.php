<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$args = array('numberposts' => 16,
			'post_type' => 'product',
			'order'       => 'ASC' 	
		);
			$posts = get_posts($args);
		?>


		<?php if ( ! empty($posts) ) : ?>


			<div class="container">
			<header class="page-header">
			<h1 class="shop-title">Shop Stuff</h1>
			<?php $terms = get_terms(array(
			'taxonomy' => 'product_type',
			'order' => 'ASC'
          ));?>

        <ul class="shop-terms">
          <?php if ($terms) : foreach ($terms as $term) :?>
              
			<li class="entry-title">
			<a href="<?= esc_url(get_term_link($term)); ?>">
                <?= $term->name; ?>
				</a>
              </li>

          <?php endforeach; endif;?>
        </ul>

			</header><!-- .page-header -->

			<section class="shop">

			<?php /* Start the Loop */ ?>
			<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

				<?php
					get_template_part( 'template-parts/content-product' );
				?>
			<?php endforeach; wp_reset_postdata(); ?>


			</section>
			</div>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
