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
                        <span>Category: </span><?php the_category(', '); ?>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>


    <?php
        endwhile;
    else:
        _e("No post Found");
    endif;
    ?>

</div>
