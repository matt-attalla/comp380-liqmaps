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
<div id="primary">
	<main id="main" class="site-main" style="display: block;">
		<div>
			<img src="http://localhost/liqmaps/wp-content/uploads/2020/06/Liqmaps-Hero.jpg" alt="Main image">
		</div>
		<div class="container">
			<section>
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
			</section>

			<section>
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
			</section>

			<section>
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
			</section>

			<section>
				<h2>
					Cognac
				</h2>

			</section>

			<section>
				<h2>
					Rye
				</h2>
			</section>
		</div>



	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
