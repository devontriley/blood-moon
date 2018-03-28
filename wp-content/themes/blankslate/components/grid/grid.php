<?php

//layout types
$gridLayout = get_sub_field('grid_layout_format');
$altGrid = get_sub_field('grid_layout_format') == 'alt_grid';
$iconGrid = get_sub_field('grid_layout_format') == 'icon_grid';
$postGrid = get_sub_field('grid_layout_format') == 'post_grid';

//general custom field variables
$gridHeader = get_sub_field('grid_header');
$gridSubheader = get_sub_field('grid_subheader');
$gridColCount = get_sub_field('grid_col_count'); //dropdown 2-6
$hasButton = get_sub_field('has_button');
$btnLink = get_sub_field('button_link');
$btnPath = get_sub_field('button_path');

//alt grid specific variables
$imgBlockBackground = get_sub_field('img_block_background_image');
$imgBlockHeader = get_sub_field('img_block_header');
$imgBlockContent = get_sub_field('img_block_content');
$textBlockHeader = get_sub_field('text_block_header');
$textBlockContent = get_sub_field('text_block_content');

//icon grid specific variables - will be in repeater submodule
$colIcon = get_sub_field('col_icon');
$iconFiletype = wp_check_filetype($colIcon);
$colHeader = get_sub_field('col_header');
$colContent = get_sub_field('col_content');
$isLink = get_sub_field('link_option');
$linkSrc = get_sub_field('link_source');
// add i variable

//post grid specific variables
$postOrigin = get_sub_field('post_origin');
$queryOrigin = get_sub_field('post_origin') == 'query';
$choiceOrigin = get_sub_field('post_origin') == 'choice';
$postType = get_sub_field('post_type');
$postQuantity = get_sub_field('post_quantity');
$postOrder = get_sub_field('post_order');

?>

<div class="grid <?php if($gridLayout){echo $gridLayout; } ?>">
    <div class="inner">

        <?php
        // alternating grid
        if($altGrid){
            include('grid-alt.php');
        }

        // icon grid
        if($iconGrid){
            include('grid-icon.php');
        }

        // post grid
        if($postGrid){
            include('grid-post.php');
        }
        ?>

    </div> <!-- .inner -->
</div><!-- .grid -->
