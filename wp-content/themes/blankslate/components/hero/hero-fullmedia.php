<?php

$heroHeader = get_sub_field('hero_header');
$heroSubheader = get_sub_field('hero_subheader');
$heroMedia = get_sub_field('hero_media');
$imgPosition = get_sub_field('hero_image_position');
$heroGraphic = get_sub_field('hero_graphic');
$hasButton = get_sub_field('has_button');

?>

<div class="hero">
    <div class="inner">

        <?php if($heroMedia){
            echo $heroMedia;
        }

        echo '<div class="text-wrapper">';
        if($heroHeader){
            echo '<h1 class="header">'. $heroHeader .'</h1>';
        }

        if($heroSubheader){
            echo '<p class="subheader">'. $heroSubheader .'</p>';
        }

        if($heroGraphic){
            echo $heroGraphic;
        }

        if($hasButton){
            echo '<div class="button-container">';
            button();
            echo '</div><!-- button-container -->';
        }
        echo '</div> <!-- .text-wrapper -->'; ?>

    </div> <!-- .inner -->
</div> <!-- .hero -->
