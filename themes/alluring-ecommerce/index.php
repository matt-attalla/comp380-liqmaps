<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guten_shop
 */

get_header();
?>
<div id="primary" style="min-width: 100%;">
	<main id="main" class="site-main" style="display: block;">
		<div>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/liqmaps-hero.jpg" alt="Main image">
		</div>

		<section>
			<div class="container">
				<h2>
					The Finest Tequila
				</h2>
				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'tequila'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
		</section>
		<section>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/whiskey-section_image.jpg" alt="Whiskey Image">
			<div class="container">
				<h2>
					Top Shelf Whiskey
				</h2>

				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'whiskey'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/vodka-section_image.jpg" alt="Vodka Image">
			<div class="container">
				<h2>
					Vodka
				</h2>
				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'vodka'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/rum-section_image.jpg" alt="Rum Image">
			<div class="container">
				<h2>
					Rum
				</h2>
				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'rum'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/cognac-section_image.jpg" alt="Cognac Image">
			<div class="container">
				<h2>
					Cognac
				</h2>
				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'cognac'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
			</div>
		</section>

		<section>
			<img src="http://localhost:8888/liqmaps/wp-content/uploads/2020/07/rye-section_image.jpg" alt="Rye Image">
			<div class="container">
				<h2>
					Rye
				</h2>
				<div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
					<ul class="d-flex flex-wrap w-100 list-unstyled m-0 p-0">
						<?php

						$args = array(
							'post_type' => 'product',
							'product_cat' => 'rye'
						);

						$loop = new WP_Query($args);
						while ($loop->have_posts()) : $loop->the_post();
							wc_get_template_part('content', 'product');

						endwhile;
						wp_reset_query(); // Remember to reset 
						?>
					</ul>
				</div>
			</div>
		</section>
		<div class="modal fade" id="modalAgeCheck" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<h2 class="modal-title" id="staticBackdropLabel">Are you over the age of 21?</h2>
						<p>
							Please verify that you are 21 years of age or older to enter this site.
						</p>
						<div>
							<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Yes</button>
							<button type="button" class="btn btn-danger btn-block" id="noButton" data-url="https://google.com" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
