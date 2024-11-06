<?php
get_header();


?>
<div class="container">
    <div class="blog_section">
        <?php get_template_part( 'template/post_setup'); ?>
        <div id="comments_area">
            <?php comments_template(); ?>
        </div>

    </div>
</div>

    
<?php 
    get_footer();
?>