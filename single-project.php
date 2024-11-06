<?php
get_header();
?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>
        <div class="custom_project_aira">
            <div class="custom_project_thumbnails">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnails'); ?>
                </a>
            </div>
            <div class="custom_project_docu">
                <div class="project_title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>

                <div class="project_developer">
                    <?php if (get_field('developer')) : ?>
                        <h2>The Developer: </h2> 
                        <h2><?php echo get_field('developer'); ?></h2>
                    <?php endif; ?>
                </div>

                <div class="project_price_aira">
                    <?php if (get_field('project_price')) : ?>
                        <h2>Price: </h2> <h2><?php echo get_field('project_price'); ?><span>$</span></h2>
                    <?php endif; ?>
                </div>

                <div class="project_release_date">
                    <?php if (get_field('project_date')) : ?>
                        <h2>Release Date: </h2>
                        <h2><?php echo get_field('project_date'); ?></h2>
                    <?php endif; ?>
                </div>

                <div class="project_image">
	                <?php $image = get_field('add_project_image'); ?>
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>

                <div class="project_desc">
                    <?php if (get_field('description')) : ?>
                        <h2>All About The Project : </h2> 
                        <p><?php echo get_field('description'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
        endwhile;
    else :
        _e("No Project Found", 'TheBoxcompany');
    endif;
    ?>
</div>
<?php get_footer(); ?>
