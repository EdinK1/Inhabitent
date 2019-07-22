<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer style="background: url(<?= get_stylesheet_directory_uri() . '/images/dark-wood.png'; ?>)" id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<ul>
						<span class="info-title">Contact Info</span>
						<li>
							<a href="mailto:info.inhabitent@gmail.com">
							<i class="fas fa-envelope"></i> info@inhabitent.com</a>
						</li>
						<li>
							<a href="#">
							<i class="fas fa-phone-alt"></i> 778-456-7891</a>
						</li>
						<li>
							<a href="#"><i class="fab fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-twitter-square"></i></a>
							<a href="#"><i class="fab fa-google-plus-square"></i></a>
						</li>
					</ul>

					<ul>
						<span class="info-title">Business Hours</span>
						<li><span>Monday-Friday:</span> 9am to 5pm</li>
						<li><span>Saturday:</span> 10am to 2pm</li>
						<li><span>Sunday: </span>Closed</li>
					</ul>
					<ul class="footer-last">
						<img class="footer-logo" src="<?= get_stylesheet_directory_uri() . '/images/logos/4.png'; ?>" alt="">
					</ul>
					</div><!-- .site-info -->
				<p>COPYRIGHT © 2019 INHABITENT</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
