<?php

// ============= Recent posts halim ===============

class recent_posts extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'recent_posts',  // Base ID
            'Recent posts halim'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('recent_posts');
        });
    }

    public $args = array(
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>'
    );

    public function widget($args, $instance)
    {

        echo $args['before_widget'];
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent posts', 'halim');
        // $title =  $instance['title']
?>
        <h4><?php echo $title; ?></h4>
        <ul>
            <?php
            wp_reset_postdata();
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $instance['number'],
                // 'order_by' => 'date',
                'order' => $instance['order']
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();

            ?>

                <a href="<?php the_permalink() ?>">
                    <li class=" latest-posts">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                        <?php the_title() ?>
                    </li>
                </a>

            <?php   }
            wp_reset_postdata()  ?>


        </ul>
    <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {

        $instance['title'] = !empty($instance['title']) ? $instance['title'] : __('Recent posts', 'halim');
        // $text = !empty($instance['text']) ? $instance['text'] : esc_html__('', 'text_domain');
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo __('Title:', 'halim'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  $instance['title']; ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php echo __('Number of post:', 'halim'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo  $instance['number']; ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('order')); ?>"><?php echo __('Order:', 'halim'); ?></label>
            <select name="<?php echo esc_attr($this->get_field_name('order')); ?>" id="<?php echo esc_attr($this->get_field_id('order')); ?>">
                <option value="ASC">ASC</option>
                <option value="DESC">DESC</option>
            </select>
        </p>


<?php

    }

    // public function update($new_instance, $old_instance)
    // {

    //     $instance = array();

    //     $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    //     $instance['text'] = (!empty($new_instance['text'])) ? $new_instance['text'] : '';

    //     return $instance;
    // }
}
$my_widget = new recent_posts();
