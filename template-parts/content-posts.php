<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hive_support
 */

?>
<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="hive_blog">
        <div class="hive_blog__thumb">
            <?php hive_support_post_thumbnail('blog-post'); ?>
        </div>
        <div class="hive_blog__contents mt-3">
            <h4 class="hive_blog__titleTwo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p class="hive_blog__para mt-2"><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>