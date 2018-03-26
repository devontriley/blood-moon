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

?>

<div class="hero">
    <div class="inner <?php if($fiftyFifty){ echo $imgPosition; } ?>">

        <?php // full image hero
        if( $fullImg ){
            include('hero-fullimg.php');
        }

        // full media hero
        if( $fullMedia ){
            include('hero-fullmedia.php');
        }

        // 50/50 image hero
        if( $fiftyFifty ){
            include('hero-5050.php');
        } ?>

    </div> <!-- .inner -->
</div> <!-- .hero -->
