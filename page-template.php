<?php
/*
Template Name: Text Page
*/

get_header(); 
?>

<section id="test-page" class="test-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="content">

        <?php 

            $basic = get_field('basic');
        
        ?>
        <div class="basic">

            <h1> <?php echo $basic['basic_text']; ?> </h1>
            <?php echo $basic['text_aira']; ?>
            <p><?php echo $basic['number']; ?></p>
            <a href="<?php echo $basic['email']; ?>"><?php echo $basic['email']; ?></a> <br>
            <a href="<?php echo $basic['number']; ?>"> click </a><br>
            <?php echo $basic['password']; ?>


        </div>

        <?php 

            $content = get_field('content');
            $content_body = $content['content_body'];

        ?>

        <div class="content">

            <img src="<?php echo $content_body['add_a_image']; ?>"  alt="">
            <?php echo $content_body['add_i_file']; ?>
            <?php echo $content_body['wysiwyg_editor']; ?>
            <?php echo $content_body['oembed']; ?>

        </div>

        <?php 

            $choice = get_field('choice');
            $choice_body = $choice['choice_body'];

        ?>

        <div class="choice">

            <?php echo $choice_body['select_option']; ?> <br>
            <?php if (is_array($choice_body['checkbox'])) {
                    echo implode(', ', $choice_body['checkbox']);
                    } else {
                echo $choice_body['checkbox'];
                }
                ?> <br>
            <?php echo $choice_body['radio_button']; ?><br>
            <?php echo $choice_body['buttons_']; ?><br>
            <?php echo $choice_body['true_false']; ?><br>

        </div>

        <?php 

            $advince = get_field('advince');
            $advance_body = $advince['advance_body'];

        ?>

        <div class="advince">

            <?php 
                function my_acf_google_map_api( $api ){
                    $api['key'] = $advance_body['google_map'];
                    return $api;
                }
                add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
            ?>

            <?php echo $advance_body['date_picker']; ?><br>
            <?php echo $advance_body['date_time']; ?><br>
            <?php echo $advance_body['time_picker']; ?><br>

            <div style="background-color: <?php echo $advance_body['color_picker']; ?>;" class="advance_color">
                <h2>Color Picker</h2>
            </div> 

            <img style="width:200px;" src="<?php echo $advance_body['icon_picker']; ?>" alt="<?php echo $advance_body['icon_picker']; ?>"> <br>



        </div>

        <?php 

            $relational = get_field('relational');
            $relational_body = $relational['relational_body'];
            $relationship = $relational_body['relationship'];
            $link = $relational_body['relational_link'];
            $post_object_setup = $relational_body['post_object_setup'];
            $term = $relational_body['taxonomy'];
            $user = $relational_body['user'];
            $page_link = $relational_body['page_link'];

        ?>
    <br><br>
        <div class="Relational">
                <a href="<?php print_r($link);?>">Link click</a>
        </div>

                <br><br>

                <?php
                    if ( $post_object_setup ) {
                        $post_object = get_post( $post_object_setup );
                        if ( $post_object ) : ?>
                            <h3><?php echo esc_html( $post_object->post_title ); ?></h3>
                <?php endif;
                }
            ?>

            <br><br>

            <a href="<?php echo esc_html($page_link); ?>">Page Link</a>
            <br><br>


            <div style="background:#000; color:#fff;" class="Relation_div">
                <?php
                    if( $relationship ): ?>
                    <ul>
                        <?php foreach( $relationship as $post ):
                        setup_postdata($post); ?>
                            <li>
                                <a style="color:#fff;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <span> :A custom field from this post: <?php the_field( 'relationship' ); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

                    <br><br>
                <?php 
                    if ( is_array($term) && !empty($term) ) {
                        $term = $term[0];
                    }

                    if ( isset($term->name) && isset($term->description) ) : ?>
                        <h2> Taxonomy:  <?php echo esc_html( $term->name ); ?></h2>
                        <p><?php echo esc_html( $term->description ); ?></p>
                    <?php endif; ?>


                        <br> <br>
                <?php
                if( $user ): ?>
                <div class="author-box">
                    <h3><?php echo $user['display_name']; ?></h3>
                    <?php if( $user['user_description'] ): ?>
                        <p><?php echo $user['user_description']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>



            <?php 
            if (have_posts()) : 
                while (have_posts()) : 
                    the_post(); 
                    the_content(); 
                endwhile; 
            endif; 
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
