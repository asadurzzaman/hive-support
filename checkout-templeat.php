<?php
/**
 * Template Name: Checkout Page
 */

get_header();
?>
<div class="section-bg-2 padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-6"> 
			<main id="primary" class="site-main">

				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
