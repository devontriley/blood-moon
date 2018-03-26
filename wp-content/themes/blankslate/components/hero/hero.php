<?php

// layout types
$fullImg = get_sub_field('hero_layout_format') == 'full_image';
$fullMedia = get_sub_field('hero_layout_format') == 'full_media';
$fiftyFifty = get_sub_field('hero_layout_format') == 'fifty_fifty';

// custom field variables
$heroHeader = get_sub_field('hero_header');
$heroSubheader = get_sub_field('hero_subheader');
$heroImg = get_sub_field('hero_image');
$fullHeroImg = wp_get_attachment_image($heroImg, 'full');
$imgPosition = get_sub_field('hero_image_position');
$positionClass = $imgPosition == "Left" ? "image-left" : "image-right";
$heroMedia = get_sub_field('hero_media');
$heroGraphic = get_sub_field('hero_graphic');
$hasButton = get_sub_field('has_button');

if(have_posts()) : while(have_posts()) : the_post();

    if(have_rows('hero') ):

        while(have_rows('hero')) : the_row(); ?>

            <div class="hero">
                <div class="inner <?php if($fiftyFifty){ echo $imgPosition; } ?>">

                    <?php // full image hero
                    if( $fullImg ){
                        get_template_part('hero', 'fullimg');
                    }

                    // full media hero
                    if( $fullMedia ){
                        get_template_part('hero', 'fullmedia');
                    }

                    // 50/50 image hero
                    if( $fiftyFifty ){
                        get_template_part('hero', '5050');
                    } ?>

                </div> <!-- .inner -->
            </div> <!-- .hero --> <?php
        endwhile; // while hero flex content has rows

    endif; // if hero flex content has rows

endif;

?>