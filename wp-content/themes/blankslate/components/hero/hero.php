<?php

// layout types
$heroLayout = get_sub_field('hero_layout_format');
$fullImg = get_sub_field('hero_layout_format') == 'full_image';
$fullVideo = get_sub_field('hero_layout_format') == 'full_video';
$fiftyFifty = get_sub_field('hero_layout_format') == 'fifty_fifty';

// custom field variables
$heroHeader = get_sub_field('hero_header');
$heroSubheader = get_sub_field('hero_subheader');
$heroImg = get_sub_field('hero_image');
$fullHeroImg = wp_get_attachment_image($heroImg["id"], 'full');
$imgPosition = get_sub_field('hero_image_position');
$positionClass = $imgPosition == "Left" ? "image-left" : "image-right";
$videoType = get_sub_field('hero_video_type');
$videoEmbed = get_sub_field('hero_video_type') == 'youtube_embed';
$videoFile = get_sub_field('hero_video_type') == 'file_upload';
$heroVideoFile = get_sub_field('hero_video_file'); // make sure this displays right
$heroVideoId = get_sub_field('hero_video_id');
$heroGraphic = get_sub_field('hero_graphic');
$hasButton = get_sub_field('has_button');

?>

<div class="hero <?php if($heroLayout){ echo $heroLayout; }?>" <?php if($fullImg){echo 'style= "background-image: url('. $heroImg["url"] .')"';}?>>
    <div class="inner <?php if($fiftyFifty){ echo $positionClass; }?>">

        <?php // full image hero
        if( $fullImg ){
            include('hero-fullimg.php');
        }

        // full video hero
        if( $fullVideo ){
            include('hero-fullvideo.php');
        }

        // 50/50 image hero
        if( $fiftyFifty ){
            include('hero-5050.php');
        }
        ?>

    </div> <!-- .inner -->
</div> <!-- .hero -->
