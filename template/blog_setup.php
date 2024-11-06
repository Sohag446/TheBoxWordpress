<?php
    
    if(have_posts()):
        while(have_posts()): the_post();
        ?>

            <div class="blog_aria">
                <div class="post_thumbnails_aira">
                <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?> </a>
                </div>
                <div class="post_details_aria">
                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                    <div class="post_categories">
                        <span></span><?php the_category(', '); ?>
                    </div>
                    <div class="post_excerpt">
                        <?php echo custom_excerpt(5); ?>
                    </div>

                </div>
            </div>


    <?php
        endwhile;
    else:
        _e("No post Found");
    endif;
    ?>

</div>

    <div id="page_nav">
        <?php if('thebox_pagenav') { thebox_pagenav(); } else { ?>
            <?php next_posts_link(); ?>
            <?php previous_posts_link(); ?>
        <?php } ?>
    </div>