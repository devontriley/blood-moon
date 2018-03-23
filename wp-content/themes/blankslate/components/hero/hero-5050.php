<?php

$heroHeader = get_sub_field('hero_header');
$heroSubheader = get_sub_field('hero_subheader');
$heroImg = get_sub_field('hero_image');
$fullHeroImg = wp_get_attachment_image($heroImg, 'full');
$imgPosition = get_sub_field('hero_image_position');
$heroGraphic = get_sub_field('hero_graphic');
$hasButton = get_sub_field('has_button');

?>

<div class="hero">
    <div class="inner">

        <?php if($heroImg){
            echo '<div class="img-wrapper">';
            echo $fullHeroImg;
            echo '</div><!-- .img-wrapper -->';
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
