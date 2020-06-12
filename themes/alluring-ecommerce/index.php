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
		<section>
			<h2>
				The Finest Tequila
			</h2>
		</section>

		<section>
			<h2>
				Top Shelf Whiskey
			</h2>
		</section>

		<section>
			<h2>
				Vodka
			</h2>
		</section>

		<section>
			<h2>
				Rum
			</h2>
         <img src="http://localhost/liqmaps/wp-content/uploads/2020/06/Rum_pic.jpg" alt=" image">
		</section>

		<section>
			<h2>
				Cognac
			</h2>
         <img src="http://localhost/liqmaps/wp-content/uploads/2020/06/Cognac_pic.png" alt=" image">

		</section>

		<section>
			<h2>
				Rye
			</h2>
		</section>


	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
