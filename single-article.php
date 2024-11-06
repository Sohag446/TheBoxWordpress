<?php
get_header(); ?>

<div class="breadcrumb_function">
    <?php
        function custom_breadcrumb() {
            echo '<a href="' . home_url() . '">Home</a> » ';
            echo '<a href="' . get_permalink(get_page_by_title('Article')->ID) . '">Article</a> » ';

            if (is_single()) {
                $terms = get_the_terms(get_the_ID(), 'article_category');
                if ($terms && !is_wp_error($terms)) {
                    $first_term = reset($terms);
                    $term_link = get_term_link($first_term);
                    echo '<a href="' . esc_url($term_link) . '">' . esc_html($first_term->name) . '</a> » ';
                }

                echo esc_html(get_the_title());
            } elseif (is_search()) {
                echo "Search Results for... ";
                echo '"<em>' . esc_html(get_search_query()) . '</em>"';
            }
        }
    ?>
</div>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="single-article">
                <h1><?php the_title(); ?></h1>

                <div class="article_breadcrumb"><?php custom_breadcrumb(); ?></div>
                
                <div class="page_article_author_date">
                    <div class="page_article_author">
                        <div class="page_article_author_image">
                            <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                        </div>
                        <div class="page_article_author_name">
                            <p><?php the_author(); ?></p>
                        </div>
                    </div>
                    <span class="line">|</span>
                    <div class="date"><?php echo get_the_date(); ?></div> 
                </div>
                <div class="featured-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="related_posts">
                <div class="related_posts_heading">
                    <h2>Related Posts</h2>
                </div>
                <div class="related_body">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'article_category');
                    if ($terms && !is_wp_error($terms)) {
                        $term_ids = wp_list_pluck($terms, 'term_id');
                        $related_posts = get_posts(array(
                            'post_type'      => 'article',
                            'posts_per_page' => 3,
                            'post__not_in'   => array(get_the_ID()),
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'article_category',
                                    'field'    => 'term_id',
                                    'terms'    => $term_ids,
                                ),
                            ),
                        ));
                        if ($related_posts) :
                            foreach ($related_posts as $post) :
                                ?>
                                <div class="related_post">
                                    <div class="related_thumbnail page_article_thumbnails">
                                        <a href="<?php echo get_permalink($post->ID); ?>">
                                            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                            </a>
                                    </div>
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                    <div class="page_article_date">
                                        <p><?php echo get_the_date(); ?></p>
                                    </div>
                                    <div class="related_article_title ">
                                        <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
                                    </div>
            
            
                                    <?php endif; ?>
                                </div>
                            <?php endforeach;
                        else :
                            echo "<p>No related posts found.</p>";
                        endif;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
            
                <?php endwhile;
            else :
                echo "<p>No article found.</p>";
            endif;
            ?>
        </div>
<?php
get_footer();
