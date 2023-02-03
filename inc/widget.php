<?php

/**
 * Hive latest Post widget Development
 */
class Hive_Latest_Posts_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'hive_latest_posts_widget', // Base ID
            __('Hive Latest Posts', 'hive-support'), // Name
            array('description' => __('Displays the title and excerpt of the latest posts', 'hive-support'),) // Args
        );
        add_action('widgets_init', function () {
            register_widget('Hive_Latest_Posts_Widget');
        });
    }

    public function widget($args, $instance)
    {
        echo '<div class="hive_blogDetails__sidebar">';
        if (!empty($instance['title'])) {
            echo '<h4 class="hive_blogDetails__sidebar__title"> ' . apply_filters('widget_title', $instance['title']) . '</h4>';
        }
        echo '<div class="hive_blogDetails__sidebar__inner mt-4">';
        $posts = array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_of_posts'],
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $latest_posts = new WP_Query($posts);

        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
?>
                <div class="hive_blogDetails__sidebar__inner__item">
                    <div class="hive_blogDetails__sidebar__flex">
                        <div class="hive_blogDetails__sidebar__thumb">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-widget'); ?></a>
                        </div>
                        <div class="hive_blogDetails__sidebar__contents">
                            <h5 class="hive_blogDetails__sidebar__contents__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="hive_blogDetails__sidebar__contents__date mt-2"><?php echo esc_html(get_the_date('j F, Y')); ?></p>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();

        echo '</div></div>';
    }

    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Recent blogs', 'hive-support');
        }
        if (isset($instance['number_of_posts'])) {
            $number_of_posts = $instance['number_of_posts'];
        } else {
            $number_of_posts = 3;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number_of_posts'); ?>"><?php _e('Number of Posts:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_of_posts'); ?>" name="<?php echo $this->get_field_name('number_of_posts'); ?>" type="number" min="1" max="10" value="<?php echo esc_attr($number_of_posts); ?>" />
        </p>
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['number_of_posts']  = (!empty($new_instance['number_of_posts'])) ? $new_instance['number_of_posts'] : '';
        return $instance;
    }
}
$Hive_Latest_Posts_Widget = new Hive_Latest_Posts_Widget();

/**
 * Hive Post Tag list Development widget
 */
class hive_tag_list_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'hive_tag_list_widget', // Base ID
            __('Hive Tag List', 'hive-support'), // Name
            array('description' => __('Displays Post tag List', 'hive-support'),) // Args
        );
        add_action('widgets_init', function () {
            register_widget('hive_tag_list_widget');
        });
    }

    public function widget($args, $instance)
    {
        echo '<div class="hive_blogDetails__sidebar">';
        if (!empty($instance['title'])) {
            echo '<h4 class="hive_blogDetails__sidebar__title"> ' . apply_filters('widget_title', $instance['title']) . '</h4>';
        } ?>

        <div class="hive_blogDetails__sidebar__inner mt-4">
            <div class="hive_blogDetails__sidebar__tag">
                <ul class="hive_blogDetails__sidebar__tag__list">
                    <?php
                    $tags = get_tags();
                    if ($tags) :
                        foreach ($tags as $tag) : ?>
                            <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php
        echo '</div>';
    }

    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Tags', 'hive-support');
        }
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
$Hive_Tag_list = new hive_tag_list_widget();


