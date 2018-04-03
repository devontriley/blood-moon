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

//alt grid
$clickableRow = get_sub_field('clickable_row'); // stil need to add

//post grid specific variables
$postOrigin = get_sub_field('post_origin');
$queryOrigin = get_sub_field('post_origin') == 'query';
$choiceOrigin = get_sub_field('post_origin') == 'choice';
$postType = get_sub_field('post_type');
$postQuantity = get_sub_field('post_quantity');
$postOrder = get_sub_field('post_order');
$postOrderby = get_sub_field('post_orderby');
$postSelection = get_sub_field('post_selection');

?>

<div class="grid <?php if($gridLayout){echo $gridLayout; } ?>">
    <div class="inner">

        <!-- add title, subtitle, etc here -->

        <?php
        if($gridHeader || $gridSubheader){ ?>
            <div class="text-wrapper"> <?php
                if($gridHeader){ ?>
                    <p class="header">
                        <?php echo $gridHeader; ?>
                    </p><!-- .header --><?php
                }

                if($gridSubheader){ ?>
                    <p class="subheader">
                        <?php echo $gridSubheader; ?>
                    </p><!-- .subheader --><?php
                } ?>
            </div><!-- .text-wrapper--><?php
        }

        // alternating grid layout
        if($altGrid){
            include('grid-alt.php');
        }

        // icon grid layout
        if($iconGrid){
            include('grid-icon.php');
        }

        // post grid layout
        if($postGrid){
            include('grid-post.php');
        }

        // bottom button option
        if($hasButton){
            button();
        } ?>

    </div> <!-- .inner -->
</div><!-- .grid -->
