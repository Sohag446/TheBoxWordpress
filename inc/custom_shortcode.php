<?php 

//short code
add_shortcode('custom_post_tabs', 'display_custom_post_tabs');

function display_custom_post_tabs() {
    ob_start();

    foreach ($categories as $category) {
        $args = array(
            'post_type' => array('post','project'),
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => array('category','project'),
                    'field' => 'slug',
                    'terms' => $category,
                ),
            ),
        );

        $query = new WP_Query($args);

        echo '<div class="project_demo_content" id="' . esc_attr($category) . '">';
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="post-item">';
                if (has_post_thumbnail()) {
                    echo get_the_post_thumbnail();
                }
                echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
                echo '<p>' . get_the_excerpt() . '</p>';
                echo '</div>';
            }
        }
        wp_reset_postdata();
        echo '</div>';
    }

    echo '</div>';

    return ob_get_clean();
}
