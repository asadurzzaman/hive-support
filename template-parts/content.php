<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hive_support
 */

?>
<div class="hive_blogDetails__thumb">
	<?php the_post_thumbnail() ?>
</div>
<div class="hive_blogDetails__contents mt-4">
	<h3 class="hive_blogDetails__title"><?php the_title(); ?></h3>
	<div class="hive_blogDetails__flex mt-4">
		<div class="hive_blogDetails__author">
			<div class="hive_blogDetails__author__thumb">
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php echo get_avatar('ID', 65,) ?></a>
			</div>
			<div class="hive_blogDetails__author__contents">
				<h5 class="hive_blogDetails__author__title"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php echo esc_html(get_the_author()); ?></a></h5>
				<p class="hive_blogDetails__author__para mt-2"><?php echo esc_html(get_the_date('j F, Y')); ?></p>
			</div>
		</div>
		<div class="hive_blogDetails__social">
			<h6 class="hive_blogDetails__social__para">Share to:</h6> 
			<?php echo do_shortcode('[social]'); 
			?>
		</div>
	</div>
	<div class="hive_blogDetails__inner mt-4">
		<?php the_content(); ?>
	</div>
	<?php 
	if(has_tag()) :
	?>
	<div class="hive_blogDetails__tag mt-4 mt-lg-5">
		<p class="hive_blogDetails__tagPara">Tags:</p>
		<ul class="hive_blogDetails__tag__list">
			<?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
		</ul>
	</div>

	<?php 
	endif;
	?>
</div>