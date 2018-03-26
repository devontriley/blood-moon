<?php
// find variables in hero.php

if($heroImg){ ?>
    <div class="img-wrapper"> <?php
        echo $fullHeroImg; ?>
    </div><!-- .img-wrapper --> <?php
} ?>

<div class="text-wrapper"> <?php
    if($heroHeader){ ?>
    <h1 class="header"><?php echo $heroHeader ?></h1> <?php
    }

    if($heroSubheader){ ?>
        <p class="subheader"><?php echo $heroSubheader ?></p> <?php
    }

    if($heroGraphic){
        echo $heroGraphic;
    }

    if($hasButton){ ?>
        <div class="button-container"> <?php
            button(); ?>
        </div><!-- button-container --> <?php
    } ?>
</div> <!-- .text-wrapper -->
