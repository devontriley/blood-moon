<?php
//echo 'TEST';
if(have_rows('components')) :
    while(have_rows('components')) :
        the_row();

        switch(get_row_layout()){
            case 'hero':
            include('hero/hero.php');
            break;
        }
    endwhile;
endif;

?>