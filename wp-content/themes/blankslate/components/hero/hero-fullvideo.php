<?php
// find variables in hero.php

if($videoFile){
//    echo $heroVideo;
} if($videoEmbed){ ?>
    <div id="ytWrapper">
        <div id="ytplayer">
            <!-- should this be in js folder? requires php var -->
            <script>
                // Load the IFrame Player API code asynchronously.
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                var player;
                function onYouTubePlayerAPIReady() {
                    player = new YT.Player('ytplayer', {
                        height: '720',
                        width: '100%',
                        videoId: '<?php echo $heroVideoId; ?>',
                        playerVars: {
                            autoplay: 1,
                            showinfo: 0,
                            controls: 0,
                            modestbranding: 0,
                            fs: 0,
                            loop: 1,
                            iv_load_policy: 3,
                            vq: 'hd1080'
                        },
                        events: {
                            'onReady' : onPlayerReady,
                        }
                    });
                }

                function onPlayerReady(event){
                    player.mute();

                    // function vidRescale(){
                    //     var frame = document.getElementById('ytWrapper'),
                    //         w = $(frame).width()+200,
                    //         h = $(frame).height()+200;
                    //
                    //     //aspect ratio
                    //     if(w/h > 16/9){
                    //         player.setSize(w, w/16*9);
                    //         $(player).css({'left':'0px'});
                    //     } else {
                    //         player.setSize(h/9*16, h);
                    //         $(player).css({'left' : -
                    //                 ($(player).outerWidth()-w)/2});
                    //     }
                    // }
                    //
                    // $(window).on('load resize', function(){
                    //     vidRescale();
                    // });
                }
            </script>
        </div><!-- #ytplayer -->
    </div> <!-- .ytWrapper --> <?php
}?>

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