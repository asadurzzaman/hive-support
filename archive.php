<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hive_support
 */

get_header();
?>
<div class="section-bg-2 padding-top-100 padding-bottom-100 archive-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row g-4">
			<?php query_posts('offset=0&showposts=2'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-lg-4 col-sm-6">
						<div class="hive_blog">
							<div class="hive_blog__thumb">
								<?php hive_support_post_thumbnail('blog-post-big'); ?>
							</div>
							<div class="hive_blog__contents mt-3">
								<h4 class="hive_blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="hive_blog__para mt-2"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
								<div class="btn-wrapper mt-3">
									<a href="<?php the_permalink(); ?>" class="hive_btn btn_bg_1">Read article</a>
								</div>
							</div>
						</div>
					</div>
			<?php endwhile;
			endif; ?> 
			<?php wp_reset_query(); ?>
			<div class="col-lg-4 col-md-6">
				<?php query_posts('offset=2&showposts=2'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="hive_blog">
							<div class="hive_blog__contents">
								<h4 class="hive_blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="hive_blog__para mt-3"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
								<div class="btn-wrapper mt-3">
									<a href="<?php the_permalink(); ?>" class="hive_btn btn_bg_1">Read article</a>
								</div>
							</div>
						</div>
				<?php endwhile;
				endif; ?> 
			</div>
			<?php wp_reset_query(); ?>
		</div>
		<div class="row g-4 mt-4">
			<?php query_posts('offset=4'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="hive_blog">
							<div class="hive_blog__thumb">
								<?php hive_support_post_thumbnail('blog-post'); ?>
							</div>
							<div class="hive_blog__contents mt-3">
								<h4 class="hive_blog__titleTwo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="hive_blog__para mt-2"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
							</div>
						</div>
					</div>

			<?php endwhile;
			endif; ?>
		</div>
		<?php wp_reset_query(); ?>
	</div>
</div>					
<?php 
get_footer();
