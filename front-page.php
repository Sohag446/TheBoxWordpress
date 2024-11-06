<?php
/* 
*This template for displaying the Header
*/
get_header();
?>



    <?php 
    
        $Header_aira = get_field('Header_aira');
        $banner_header_heading = $Header_aira['banner_header_heading'];
        $banner_imagess = $Header_aira['banner_imagess'];
        $hero_future = $Header_aira['banner_hero_future_project_details'];
    ?>
    <section id="home" class="hero">
                <div class="hero_body">
                    <div style="background-image: url(<?php echo $banner_imagess['banner_background_image_1']; ?>);" class="slider_1">
                        <div class="container">
                            <div class="hero_duco">
                                <div class="hero_docu_body">
                                <h1><?php echo $banner_header_heading['banner_h1_1']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url(<?php echo $banner_imagess['banner_background_image_2']; ?>;" class="slider_2">
                        <div class="container">
                            <div class="hero_duco">
                                <div class="hero_docu_body">
                                    <h1><?php echo $banner_header_heading['banner_h1_2']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url(<?php echo $banner_imagess['banner_background_image_3']; ?>;" class="slider_3">
                        <div class="container">
                            <div class="hero_duco">
                                <div class="hero_docu_body">
                                    <h1><?php echo $banner_header_heading['banner_h1_3']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url(<?php echo $banner_imagess['banner_background_image_4']; ?>;" class="slider_4">
                        <div class="container">
                            <div class="hero_duco">
                                <div class="hero_docu_body">
                                    <h1><?php echo $banner_header_heading['banner_h1_4']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="container">
                    <div class="hero_futurePJ">
                        <div class="hero_futurePJ_duco">
                            <h4><?php echo $hero_future['hero_futurepj_heading']; ?></h4>
                            <p><?php echo $hero_future['hero_futurepj_document']; ?></p>
                        </div>
                        <div class="hero_futurePJ_btn">
                            <div class="futurePJ_btn_back">
                                <a href="#"><img src="<?php echo $hero_future['future_project_btn_back_img']; ?>" alt="Vector Back"></a>
                                <a href="#"><p><?php echo $hero_future['future_project_btn_back_text']; ?></p></a>
                            </div>
                            <div class="futurePJ_btn_next">
                                <a href="#"><p><?php echo $hero_future['future_project_btn_next_text']; ?></p></a>
                                <a href=""><img src="<?php echo $hero_future['future_project_btn_next_image']; ?>" alt="Vector Next"></a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </header>

        <!-- ------------Structure of Reasons--------------  -->

        <?php 
        $reputation_section = get_field('our_reputation_section');
        if($reputation_section): ?>

        <section class="reasons">

            <?php $reputation_heading = $reputation_section['our_reputation_heading_details'];
            if($reputation_heading): ?>
                <div class="our_reputation_heading_details">
                    <h3><?php echo $reputation_heading['our_reputation_heading_text']; ?></h3>
                </div>
            <?php endif; ?>

            <div class="reasons_docu">

                
            <?php $reputation_1st = $reputation_section['our_reputation_1st_colum_details'];
                    if($reputation_1st): ?>
                <div class="reasons_services our_reputation_1st_colum_details">
                    <img src="<?php echo $reputation_1st['our_reputation_1st_colum_image']; ?>" />
                    <h4><?php echo $reputation_1st['our_reputation_1st_colum_heading']; ?></h4>
                    <p><?php echo $reputation_1st['our_reputation_1st_colum__p']; ?></p>
                </div>

            <?php endif; ?>

            <?php $reputation_2nd = $reputation_section['our_reputation_2nd_colum_details'];
                if($reputation_2nd): ?>

                <div class="reasons_teams">
                    <img src="<?php echo $reputation_2nd['our_reputation_2nd_colum_image']; ?>" alt="services Icon">
                    <h4><?php echo $reputation_2nd['our_reputation_2nd_colum_heading']; ?></h4>
                    <p><?php echo $reputation_2nd['our_reputation_2nd_colum_p']; ?></p>
                </div>

            <?php endif; ?>

            <?php $reputation_3rd = $reputation_section['our_reputation_3rd_colum_details'];

            if($reputation_3rd): ?>

                <div class="reasons_designs">
                    <img src="<?php echo $reputation_3rd['our_reputation_3rd_colum_image']; ?>" alt="services Icon">
                    <h4><?php echo $reputation_3rd['our_reputation_3rd_colum_heading']; ?></h4>
                    <p><?php echo $reputation_3rd['our_reputation_3rd_colum_p']; ?></p>
                </div>

            <?php endif; ?>

            </div>
        </section>
        <?php endif; ?>
        
        
        <!-- ------------Structure of about_us--------------  -->
         <?php
            $about_section = get_field('about_us_section');
            if($about_section):
         ?>
        <div class="container">
             <section id="about_us" class="about_us">
                <?php $about_background = $about_section['about_us_cover_image_background']; 
                if($about_background): ?>

                    <div class="about_us_img">
                        <img src="<?php echo $about_background['about_us_cover_image']; ?>" alt="Unsplash photo">
                    </div>
                <?php endif; ?>

                <?php $about_details = $about_section['about_us_all_details'];
                if($about_details): ?> 
                <div class="about_us_docu">
                    <h3><?php echo $about_details['about_us_heading'] ?></h3>
                    <div class="about_us_docuP">
                        <p><?php echo $about_details['about_us_document_1'] ?></p>
                        <p><?php echo $about_details['about_us_document_2'] ?></p>
                    </div>
                    <div class="about_us_btn hover_effect">
                        <a href="#"><?php echo $about_details['about_us_button'] ?></a>
                    </div>
                </div>

                <?php endif; ?>
             </section>
         </div>
         <?php endif; ?>


         <?php 
    $services_section_group = get_field('services_section_group');

    // Check if services_section_group is an array and contains necessary keys
    if (is_array($services_section_group)) {
        $services_heading = isset($services_section_group['services_heading']) ? $services_section_group['services_heading'] : null;
        $services_first_document = isset($services_section_group['services_first_document']) ? $services_section_group['services_first_document'] : null;
    } else {
        $services_heading = null;
        $services_first_document = null;
    }
?>

<!-- ------------Structure of Services--------------  -->


            <?php       

               $services_section_all = get_field('services_section_all');
               $services_heading_text = $services_section_all['services_heading_text'];
               $services_value = $services_section_all['services_value'];

            ?>
        <!-- ------------Structure of Services--------------  -->

        <section id="services" class="services">
            <div class="container">
                <?php if (is_array($services_heading) && isset($services_heading['services_heading_text_h1'])) : ?>
                <h3><?php echo $services_heading['services_heading_text_h1']; ?></h3>
                <?php else : ?>
                <h3>Services</h3>
                <?php endif; ?>
            
                <div class="services_duco">
                    <div class="construction hover_effect">
                        <img src="<?php echo $services_value['services_1st_image']; ?>" alt="Consultation">
                        <h4><?php echo $services_value['services_1st_text']; ?></h4>
                    </div>

                    <div class="renovation hover_effect">
                        <img src="<?php echo $services_value['services_2nd_image']; ?>" alt="Renovation">
                        <h4><?php echo $services_value['services_2nd_text']; ?></h4>
                    </div>
                    <div class="consultation2 hover_effect">
                        <img src="<?php echo $services_value['services_3rd_image']; ?>" alt="Consultation">
                        <h4><?php echo $services_value['services_3rd_text']; ?></h4>
                    </div>
                    <div class="repair hover_effect">
                        <img src="<?php echo $services_value['services_4th_image']; ?>" alt="Repair">
                        <h4><?php echo $services_value['services_4th_text']; ?></h4>
                    </div>
                    <div class="architecture hover_effect">
                        <img src="<?php echo $services_value['services_5th_image']; ?>" alt="Architecture">
                        <h4><?php echo $services_value['services_5th_text']; ?></h4>
                    </div>
                    <div class="electric hover_effect">
                        <img src="<?php echo $services_value['services_6th_image']; ?>" alt="Electric">
                        <h4><?php echo $services_value['services_6th_text']; ?></h4>
                    </div>
                </div>
            </div>
        </section>
    

        <?php $experience_section = get_field('experience_section');
              $achievement_1st_row = $experience_section['experience_achievement_1st_row_details'];
              $achievement_2nd_row = $experience_section['experience_achievement_2nd_row__details'];
              $achievement_3rd_row = $experience_section['experience_achievement_3rd_row_details'];
              $achievement_4th_row = $experience_section['experience_achievement_4th_row_details'];
              $experience_details = $experience_section['years_of_experience_details'];



        ?>
         <!-- ------------Structure of Achievement--------------  -->
          <section>
            <div class="container">
                <div class="achievement">
                    <div class="achievement_awards">
                        <div class="achievement_project_clients">
                            <div class="achievement_project">
                                <img src="<?php echo $achievement_1st_row['experience_achievement_1st_row_image']; ?>" alt="Projects Completed">
                                <h1><?php echo $achievement_1st_row['experience_achievement_1st_row_heading']; ?></h1>
                                <p><?php echo $achievement_1st_row['experience_achievement_1st_row_document']; ?></p>
                            </div>
                            <div class="achievement_clients">
                                <img src="<?php echo  $achievement_2nd_row['experience_achievement_2nd_row_image']; ?>" alt="Happy Clients">
                                <h1><?php echo $achievement_2nd_row['experience_achievement_2nd_row_heading'] ?></h1>
                                <p><?php echo $achievement_2nd_row['experience_achievement_2nd_row_document'] ?></p>
                            </div>
                        </div>
                        <div class="achievement_awards_business">
                            <div class="achievement_business">
                                <img src="<?php echo $achievement_3rd_row['experience_achievement_3rd_row_image']; ?>" alt="Business">
                                <h1><?php echo $achievement_3rd_row['experience_achievement_3rd_row_heading']; ?></h1>
                                <p><?php echo $achievement_3rd_row['experience_achievement_3rd_row_document']; ?></p>
                            </div>
                            <div class="achievement-business_awards">
                                <img src="<?php echo $achievement_4th_row['experience_achievement_4th_row_image']; ?>" alt="Awards Win">
                                <h1><?php echo $achievement_4th_row['experience_achievement_4th_row_heading']; ?></h1>
                                <p><?php echo $achievement_4th_row['experience_achievement_4th_row_document']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="achievement_experience">
                        <h1><?php echo $experience_details['years_of_experience']; ?></h1>
                        <p><?php echo $experience_details['experience_document']; ?></p>
                        <div class="achievement_experience_btn hover_effect">
                            <a href="#contact_us"><?php echo $experience_details['experience_button']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
          </section>

          <?php $consultation_section = get_field('consultation_section');
          if($consultation_section):
            ?>
         <!-- ------------Structure of consultation--------------  -->
        <?php $consultation_bg = $consultation_section['consultation_background_image'];
        if($consultation_bg): ?>
          <section style="background-image: url(<?php echo $consultation_bg['consultation_back_photo'] ?>);" class="consultation">
            <?php endif; ?>
            <div class="container">
                <div class="consultation_body">
                    <?php $consultation_details = $consultation_section['consultation_details'];
                    if($consultation_details): ?>
                    <div class="consultation_contact">
                        <h3><?php echo $consultation_details['consultation_heading']; ?></h3>
                        <div class="consultation_contact_number">
                            <p><?php echo $consultation_details['consultation_call_text']; ?></p>
                            <a href="tel:<?php echo $consultation_details['consultation_call_number']; ?>"><?php echo $consultation_details['consultation_call_number']; ?></a>
                        </div>
                    <?php endif; ?> 
                    </div>

                    <div class="consultation_btn hover_effect">
                        <a><?php echo $consultation_details['consultation_button_link']; ?></a>
                    </div>

                </div>
            </div>
          </section>
          <?php endif; ?>


          <?php $project_section_de = get_field('project_section');
                $project_heading_de = $project_section_de['project_heading'];
                $project_all_details = $project_section_de['project_all_details'];
                $project_all_2nd = $project_all_details['project_all_2nd_element'];
                $project_all_3rd = $project_all_details['project_all_3rd_element'];
                $project_all_4th = $project_all_details['project_all_4th_element'];
                $options_1_button = $project_section_de['project_list_options_1_button'];
                $project_list_options_1 =  $options_1_button['project_list_options_1'];
                $project_list_options_2 = $project_section_de['project_list_options_2_details'];
                $options_2_images =  $project_list_options_2['project_list_options_2_images'];
                $project_list_options_3 = $project_section_de['project_list_options_3_details'];
                $options_3_image = $project_list_options_3['project_list_options_3_image'];

          ?>
         <!-- ------------Structure of project--------------  -->
        <div class="container">
        <section id="project" class="project">
            <?php if (is_array($project_heading_de) && isset($project_heading_de['project_heading_text'])) : ?>
                <h3><?php echo esc_html($project_heading_de['project_heading_text']); ?></h3>
            <?php else : ?>
                <h3>Project</h3>
            <?php endif; ?>
    
        <div class="project_body">
            <div class="project_duco">
                <ul>
                    <li class="project_li active" data-tab="all">All</li>
                    <li class="project_li" data-tab="commercial">Commercial</li>
                    <li class="project_li" data-tab="residential">Residential</li>
                    <li class="project_li" data-tab="other">Other</li>
                </ul>
            </div>

            <div class="project_slider_tab">
                <div id="all" class="project_demo active">
                    <div class="project_tab">
                        <div class="project_slide">
                            <?php
                            $all_posts_query = new WP_Query([
                                'post_type' => 'project',
                                'posts_per_page' => -1
                            ]);
                            
                            if ($all_posts_query->have_posts()) :
                                while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                                    <div class="project_slide_items">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="project_demo_document">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div id="commercial" class="project_demo">
                    <div class="project_tab">
                        <div class="project_slide">
                            <?php
                            $commercial_query = new WP_Query([
                                'post_type' => 'project',
                                'posts_per_page' => -1,
                                'project_category' => 'commercial',
                               
                            ]);

                            if ($commercial_query->have_posts()) :
                                while ($commercial_query->have_posts()) : $commercial_query->the_post(); ?>
                                    <div class="project_slide_items">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="project_demo_document">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div id="residential" class="project_demo">
                    <div class="project_tab">
                        <div class="project_slide">
                            <?php
                            $residential_query = new WP_Query([
                                'project_category' => 'residential',
                                'post_type' => 'project',
                                'posts_per_page' => -1
                            ]);
                            

                            if ($residential_query->have_posts()) :
                                while ($residential_query->have_posts()) : $residential_query->the_post(); ?>
                                    <div class="project_slide_items">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="project_demo_document">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div id="other" class="project_demo">
                    <div class="project_tab">
                        <div class="project_slide">
                            <?php
                            $other_query = new WP_Query([
                                'project_category' => 'other',
                                'post_type' => 'project',
                                'posts_per_page' => -1
                            ]);

                            if ($other_query->have_posts()) :
                                while ($other_query->have_posts()) : $other_query->the_post(); ?>
                                    <div class="project_slide_items">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="project_demo_document">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
        
          <?php $contact_us_section = get_field('contact_us_section');
                $contact_us_decument = $contact_us_section['contact_us_decument'];
                $contact_us_all_input = $contact_us_section['contact_us_all_input'];
                $contact_reason_option = $contact_us_all_input['contact_reason_option'];
          ?>

        <!-- ------------Structure of Contact Us--------------  -->
     <section id="contact_us" class="contact_us">
         <div class="container">
            <div class="contact_body">
                <div class="contact_us_docu">
                    <h3><?php echo $contact_us_decument['contact_us_heading'] ?></h3>
                    <p><?php echo $contact_us_decument['contact_us_document'] ?></p>
                </div>
                <div class="contact_us_input">
                    <form action="">
                        <div class="contact_us_input_nameEmail">
                            <div class="contact_us_input_name">
                                <label for="input_name"><?php echo  $contact_us_all_input['contact_name_placeholder']; ?><span><?php echo  $contact_us_all_input['contact_name_placeholder_symbol']; ?></span> </label>
                                <input id="input_name" type="text" required>
                            </div>
                            <div class="contact_us_input_Email">
                                <label for="input_email"> <?php echo  $contact_us_all_input['contact_email_placeholder']; ?><span><?php echo  $contact_us_all_input['contact_email_placeholder_symbol']; ?></span></label>
                                <input id="input_email" type="email" required>
                            </div>
                        </div>
                        <div class="contact_us_input_contactingPhone">
                            <div class="contact_us_input_contacting">
                                <label for="reason" class="floating-label"><?php echo  $contact_us_all_input['contact_reason_placeholder_text']; ?><span><?php echo  $contact_us_all_input['contact_reason_placeholder_symbol']; ?></span></label>
                                <select required id="reason">
                                    <option value="" disabled selected></span></option>
                                    <option value="support"><?php echo $contact_reason_option['contact_reason_option_1']; ?></option>
                                    <option value="sales"><?php echo $contact_reason_option['contact_reason_option_2']; ?></option>
                                    <option value="feedback"><?php echo $contact_reason_option['contact_reason_option_3']; ?></option>
                                    <option value="other"><?php echo $contact_reason_option['contact_reason_option_4']; ?></option>
                                </select>
                            </div>
                            <div class="contact_us_input_Phone">
                                <label for="input_number"><?php echo  $contact_us_all_input['contact_phone_placeholder']; ?><span><?php echo  $contact_us_all_input['contact_phone_placeholder_symbol']; ?></span></label>
                                <input id="input_number" type="phone" required>
                            </div>
                        </div>
                        <div class="contact_us_input_nameEmail" required>
                            <textarea placeholder="<?php echo  $contact_us_all_input['contact_message_placeholder']; ?>" rows="9"></textarea>
                        </div>
                        <div class="contact_us_input_indicatesRequired">
                            <p><span><?php echo  $contact_us_all_input['contact_fill_up_required_fields_symble']; ?></span><?php echo  $contact_us_all_input['contact_fill_up_required_fields_text']; ?></p>
                        </div>
                        <div class="contact_us_btn hover_effect">
                            <input type="submit" value="<?php echo  $contact_us_all_input['contact_submit_button']; ?>">
                        </div>
                    </form>
                </div>
            </div>
         </div>
     </section>
  
<?php 
    get_footer();
?>