<?php
if(have_rows('icon_block')) : ?>
    <div class="icon-cols-wrapper col-<?php echo $gridColCount ?>"> <?php
    $iteration = 1;

    while(have_rows('icon_block')) : the_row();
        $colIcon = get_sub_field('col_icon');
        $colIconFull = wp_get_attachment_image($colIcon, 'full');
        $iconFiletype = wp_check_filetype($colIcon);
        $colHeader = get_sub_field('col_header');
        $colContent = get_sub_field('col_content');
        $isLink = get_sub_field('link_option');
        $linkSrc = get_sub_field('link_source'); ?>

        <div class="icon-block <?php echo $iteration; ?>"> <?php
            if($colIcon){
                if($isLink){ ?>
                    <a class="icon-link" href="<?php echo get_permalink($linkSrc[0]); ?>">
                        <div class="icon-wrapper"> <?php
                            echo $colIconFull; ?>
                        </div><!-- .icon-wrapper -->
                    <?php
                } else { ?>
                    <div class="icon-wrapper"> <?php
                        echo $colIconFull; ?>
                    </div> <!-- .icon-wrapper --> <?php
                    }
                }

                if($colHeader){
                    if($isLink){ ?>
                        <p class="col-header"><?php echo $colHeader;?></p>
                        </a><!-- .icon-link--><?php
                    } else { ?>
                        <p class="col-header"><?php echo $colHeader;?></p><?php
                    }
                }

                if($colContent){
                    echo $colContent;
                }?>
        </div> <!-- .icon-block --> <?php
        $iteration++;
    endwhile; // while icon block has rows ?>

    </div><!-- .icon-cols-wrapper--><?php

endif; // if icon block has rows

if($hasBtn){
    button();
}

?>