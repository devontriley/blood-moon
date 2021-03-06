<?php
if($altGrid){
    if( have_rows('alt_grid_row') ):

        $iteration = 0;

        while( have_rows('alt_grid_row') ): the_row(); ?>
            <div class="row-inner">
                <?php
                //repeater vars
                $imgBlockBackground = get_sub_field('img_block_background_image');
                $fullImgBlockBackground = wp_get_attachment_image($imgBlockBackground["id"], 'full');
                $imageOrientation = $iteration % 2 !== 0 ? 'right' : 'left';
                $imgBlockHeader = get_sub_field('img_block_header');
                $imgBlockContent = get_sub_field('img_block_content');
                $textBlockHeader = get_sub_field('text_block_header');
                $textBlockContent = get_sub_field('text_block_content');
                $hasButton = get_sub_field('has_button');
                $url = (!empty($btnPath)) ? get_permalink($btnPath[0]) : $btnLink;

                if($clickableRow){ ?>
                    <a href="<?php echo $url; ?>" class="cover-link"></a> <?php
                } ?>

                <div class="img-block <?php echo $imageOrientation; ?>">
                    <?php if($imgBlockBackground){
                        echo $fullImgBlockBackground;
                    }

                    if($imgBlockHeader){ ?>
                        <div class="image-block-header">
                            <?php echo $imgBlockHeader; ?>
                        </div><!-- .image-block-title --> <?php
                    }

                    if($imgBlockContent){ ?>
                        <div class="image-block-content">
                            <?php echo $imgBlockContent; ?>
                        </div> <!-- .image-block-content --> <?php
                    }?>
                </div><!-- .img-block -->

                <div class="text-block">
                    <div class="text-inner">

                        <?php if($textBlockHeader){ ?>
                            <div class="text-block-header">
                                <?php echo $textBlockHeader; ?>
                            </div><!-- .text-block-header --><?php
                        } ?>

                        <?php if($textBlockContent){ ?>
                            <div class="text-block-content">
                                <?php echo $textBlockContent; ?>
                            </div><!-- .text-block-content --><?php
                        }

                        if($has_button){
                            button();
                        } ?>

                    </div><!-- .text-inner -->
                </div><!-- .text-block -->

            </div><!-- .row-inner --> <?php
            $iteration++;
        endwhile; // while alt grid row has rows
    endif; // if alt grid row has rows
}
?>