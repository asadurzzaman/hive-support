<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hive_support
 */

get_header();
?>
<div class="section-bg-2 padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="row gy-5">
			<div class="col-lg-8">
				<div class="hive_blogDetails">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'hive-support') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'hive-support') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="hive_blogDetails__sticky">
					<?php dynamic_sidebar('blog-sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>