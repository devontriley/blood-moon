<?php

var $fullImg = get_row_layout() == 'full_image';
var $fullMedia = get_row_layout() == 'full_media';
var $fiftyFifty = get_row_layout() == '5050';

if(have_posts()) : while(have_posts()) : the_post();

    if(have_rows('hero') ):

        while(have_rows('hero')) : the_row();

            // full image hero
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
            }
        endwhile; // while hero flex content has rows

    endif; // if hero flex content has rows

endif;

?>