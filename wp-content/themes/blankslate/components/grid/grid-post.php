<?php

$postOrigin = get_sub_field('post_origin');
$queryOrigin = get_sub_field('post_origin') == 'query';
$choiceOrigin = get_sub_field('post_origin') == 'choice';
$postType = get_sub_field('post_type');
$postQuantity = get_sub_field('post_quantity');
$postOrder = get_sub_field('post_order');
$postOrderby = get_sub_field('post_orderby');
$postSelection = get_sub_field('post_selection');

?>

<div class="post-grid-wrapper col-<?php echo $gridColCount ?>"><?php
    if($queryOrigin){
        //WP QUERY
        $args = array (
            'post_type' => $postType,
            'post_count' => $postQuantity,
            'order' => $postOrder,
            'orderby' => $postOrderby
        );

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <div class="post-block">
                    <?php echo get_the_title(); ?>
                </div><?php
            }
            wp_reset_postdata();
        } else {
            // no posts found
        }
    } elseif($choiceOrigin) {
        // PULL POSTS FROM RELATIONSHIP FIELD
        if($postSelection){

            foreach($postSelection as $gridPost){
                setup_postdata($gridPost); ?>
                <div class="post-block">
                    <?php echo get_the_title($gridPost);
                    echo the_content(); ?>
                </div><?php
            } // endforeach
            wp_reset_postdata();

        } // if postSelection
    } // elseif choice
    ?>
</div><!-- .post-grid-wrapper -->
