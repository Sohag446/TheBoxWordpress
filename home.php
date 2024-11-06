<?php add_filter( 'use_block_editor_for_post', '__return_false' ); ?>

<?php
/* 
*This section for displaying the Header
*/
get_header();


?>
<div class="container">
    <div class="blog_section">
        <?php get_template_part( 'template/blog_setup'); ?>
</div>
  
<?php 
    get_footer();
?>