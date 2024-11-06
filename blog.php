<div class="blog_section">
    
    <?php
    
    if(have_posts()):
        while(have_posts()): the_post();
        ?>
    
        <div class="container">
            <div class="blog_aria">
                <div class="post_thumbnails_aira">
                <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?> </a>
                </div>
                <div class="post_details_aria">
                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                    <?php the_excerpt(); ?>
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