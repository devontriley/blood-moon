<?php

if(have_rows('components')) :
    while(have_rows('components')) :
        the_row();

        switch(get_row_layout()){
            case 'hero':
            include('hero/hero.php');
            break;

            case 'grid':
            include('grid/grid.php');
            break;
        }
    endwhile;
endif;

?>