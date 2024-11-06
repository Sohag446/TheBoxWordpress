<?php
/*
Template Name: Article Page
*/
get_header();
?>

<div class="article_body">
    <div class="article_container">
        <div class="cat_name_allPage">
            <h1> Articles </h1>
        </div>
        <div class="search_shortLinks">
            <div class=""></div>
            <div class="article_search">
                <form action="" method="post">
                    <input class="search_bar" type="text" name="s" value="<?php echo (is_search() && !empty(get_search_query())) ? esc_attr(get_search_query()) : ''; ?>">
                    <input type="hidden" name="post_type" value="article">
                    <button class="search_btn" type="submit">Search</button>
                </form>
            </div>

        </div>
        <div class="category_nav">
            <ul>
                <li class="active-category"><a href="<?php echo get_post_type_archive_link('article'); ?>">All</a></li>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'article_category',
                    'hide_empty' => false,
                ));
                foreach ($terms as $term) {
                    $active_class = (is_tax('article_category', $term->slug)) ? 'active-category' : '';
                    echo '<li class="' . $active_class . '"><a href="' . esc_url(get_term_link($term)) . '">' . $term->name . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="article_page">
            <div class="page_article_body">
                <?php
                if (is_search() && !empty(get_search_query())) {
                    $search_args = array(
                        'post_type'      => 'article',
                        'posts_per_page' => 10,
                        's'              => get_search_query(),
                    );
                    $search_query = new WP_Query($search_args);

                    if ($search_query->have_posts()) :
                        echo '<div class="search_results">';

                        $search_query->the_post();
                        ?>
                        <div class="page_article_firstP">
                            <div class="page_article_first__docu">
                                <div class="article_title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="page_article_first_excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <div class="page_article_first_thumbnails">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                                </a>
                            </div>
                        </div>
                        <?php
                        echo '<div class="page_article_blog_posts">';
                        echo '<script>document.querySelector(".search_bar").value = "";</script>';
                        while ($search_query->have_posts()) : $search_query->the_post();
                        ?>
                            <div class="page_article_blogStr">
                                <div class="page_article_thumbnails">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                    </a>
                                </div>
                                <div class="page_article_docu">
                                    <div class="page_article_cat_date">
                                        <div class="page_article_cat">
                                            <?php
                                                $show_one_cat = get_the_terms(get_the_ID(), 'article_category');
                                                if($show_one_cat && !is_wp_error($show_one_cat)){
                                                    if(count($show_one_cat) > 1){
                                                        $first_one_cat = $show_one_cat[0];
                                                        echo '<a href="' . esc_url(get_term_link($first_one_cat)) . '">' . esc_html($first_one_cat->name) . '</a>';
                                                    }else{
                                                        $one_cat = $show_one_cat[0];
                                                        echo '<a href="' . esc_url(get_term_link($one_cat)) . '">' . esc_html($one_cat->name) . '</a>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="page_article_date">
                                            <p><?php echo get_the_date(); ?></p>
                                        </div>
                                    </div>
                                    <div class="article_title">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    </div>
                                    <div class="page_article_author">
                                        <div class="page_article_author_image">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                                        </div>
                                        <div class="page_article_author_name">
                                            <p><?php the_author(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        echo '</div>';
                    else :
                        echo '<p>No search results found for "' . get_search_query() . '".</p>';
                        echo '<script>document.querySelector(".search_bar").value = "";</script>';
                    endif;
                    wp_reset_postdata();
                } else {
                    $tax_query = array();
                    if (isset($_GET['article_category'])) {
                        $tax_query[] = array(
                            'taxonomy' => 'article_category',
                            'field'    => 'slug',
                            'terms'    => sanitize_text_field($_GET['article_category']),
                        );
                    }
                    $first_post_args = array(
                        'post_type'      => 'article',
                        'posts_per_page' => 1,
                        'tax_query'      => $tax_query,
                    );
                    $first_post_query = new WP_Query($first_post_args);
                    if ($first_post_query->have_posts()) :
                        while ($first_post_query->have_posts()) : $first_post_query->the_post();
                    ?>
                    <div class="page_article_firstP">
                        <div class="page_article_first__docu">
                            <div class="article_title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="page_article_first_excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="page_article_first_thumbnails">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                            </a>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    $other_posts_args = array(
                        'post_type'      => 'article',
                        'posts_per_page' => 9,
                        'offset'         => 1,
                        'tax_query'      => $tax_query,
                    );
                    $other_posts_query = new WP_Query($other_posts_args);
                    if ($other_posts_query->have_posts()) :
                    ?>
                    <div class="page_article_blog_posts">
                        <?php while ($other_posts_query->have_posts()) : $other_posts_query->the_post(); ?>
                        <div class="page_article_blogStr">
                            <div class="page_article_thumbnails">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                </a>
                            </div>
                            <div class="page_article_docu">
                                <div class="page_article_cat_date">
                                    <div class="page_article_cat">
                                        <?php
                                            $show_one_cat = get_the_terms(get_the_ID(), 'article_category');
                                            if($show_one_cat && !is_wp_error($show_one_cat)){
                                                if(count($show_one_cat) > 1){
                                                    $first_one_cat = $show_one_cat[0];
                                                    echo '<a href="' . esc_url(get_term_link($first_one_cat)) . '">' . esc_html($first_one_cat->name) . '</a>';
                                                }else{
                                                    $one_cat = $show_one_cat[0];
                                                    echo '<a href="' . esc_url(get_term_link($one_cat)) . '">' . esc_html($one_cat->name) . '</a>';
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="page_article_date">
                                        <p><?php echo get_the_date(); ?></p>
                                    </div>
                                </div>
                                <div class="article_title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="page_article_author">
                                    <div class="page_article_author_image">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
                                    </div>
                                    <div class="page_article_author_name">
                                        <p><?php the_author(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    else :
                        echo "<p>No articles found.</p>";
                    endif;
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
        <div class="article_pagination">
    <?php
        $big_number = 999999999;
        $current_page = max(1, get_query_var('paged'));
        $total_pages = isset($other_posts_query) ? $other_posts_query->max_num_pages : (isset($search_query) ? $search_query->max_num_pages : 1);
        
        $pagination_links = paginate_links(array(
            'base'      => str_replace($big_number, '%#%', esc_url(get_pagenum_link($big_number))),
            'format'    => '?paged=%#%',
            'current'   => $current_page,
            'total'     => $total_pages,
            'type'      => 'array',
            'prev_text' => '<span class="arrow"> ← </span>',
            'next_text' => '<span class="arrow"> → </span>',
        ));
        
        if (is_array($pagination_links)) :
            echo '<div class="article_pagination"><ul class="article_list">';
            foreach ($pagination_links as $link) {
                echo "<li class='article_item'>$link</li>";
            }
            echo '</ul></div>';
        endif;
    ?>
</div>
        <?php
        wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>