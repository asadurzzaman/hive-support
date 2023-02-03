<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hive_support
 */

?>
<div class="hive_blog_area section-bg-2 padding-top-100 padding-bottom-100">
    <div class="container">

        <div class="row g-4">

            <div class="col-lg-4 col-sm-6">
                <div class="hive_blog">
                    <div class="hive_blog__thumb">
                        <?php hive_support_post_thumbnail('blog-post'); ?>
                    </div>
                    <div class="hive_blog__contents mt-3">
                        <h4 class="hive_blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>?</a></h4>
                        <p class="hive_blog__para mt-2"><?php the_excerpt(); ?></p>
                        <div class="btn-wrapper mt-3">
                            <a href="<?php the_permalink(); ?>" class="hive_btn btn_bg_1">Read article</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">

                <div class="hive_blog">
                    <div class="hive_blog__contents">
                        <h4 class="hive_blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="hive_blog__para mt-3"><?php the_excerpt(); ?></p>
                        <div class="btn-wrapper mt-3">
                            <a href="<?php the_permalink(); ?>" class="hive_btn btn_bg_1">Read article</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row g-4 mt-4">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
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
            <?php
                endwhile;
                the_posts_navigation();
            endif;
            ?>

        </div>

    </div>
</div>