<?php

/*
*
    アップデート通知非表示
*
*/
show_admin_bar( false );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));

function set_my_scrip(){
    ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jssor.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jssor.slider.js"></script>
    
    <script>
        function imgLoaded(img){
            var imgWrapper = img.parentNode;
            imgWrapper.className += imgWrapper.className ? ' loaded' : 'loaded';
        };

        $(function() {
            
    var _SlideshowTransitions = [
    //Collapse Random
    { $Duration: 1000, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }
    //Fade in LR Chess
    , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

    //Rotate VDouble+ out
    , { $Duration: 1000, x: -1, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.85 } }

    ////Swing Inside in Stairs
    , { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }

    //Zoom HDouble+ out
    , { $Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    ////Dodge Pet Inside in Stairs
    , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }

    //Rotate Zoom+ out BL
    , { $Duration: 1200, x: 4, y: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8 } }

    //Dodge Dance Inside in Random
    , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5 } }

    //Rotate VFork+ out
    , { $Duration: 1200, x: -3, y: 1, $Rows: 2, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7 } }

    //Clip and Chess in
    , { $Duration: 1200, y: -1, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Top: [0.5, 0.5], $Clip: [0, 0.5] }, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12 }, $ScaleClip: 0.5 }

    ////Swing Inside in Swirl
    , { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationSwirl, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 1.3, $Top: 2.5} }

    ////Rotate Zoom+ out
    , { $Duration: 1200, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} }

    ////Dodge Pet Inside in ZigZag
    , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Round: { $Left: 0.8, $Top: 2.5} }

    //Rotate Zoom- out TL
    , { $Duration: 1200, x: 0.5, y: 0.5, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.5 } }

    //Rotate Zoom- in BR
    , { $Duration: 1200, x: -0.6, y: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5 } }

    // Wave out Eagle
    , { $Duration: 1500, y: -0.5, $Delay: 60, $Cols: 24, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationCircle, $Easing: $JssorEasing$.$EaseInWave, $Round: { $Top: 1.5 } }

    //Expand Stairs
    , { $Duration: 1000, $Delay: 30, $Cols: 10, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: $JssorEasing$.$EaseInQuad }

    //Fade Clip out H
    , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    ////Dodge Pet Inside in Random Chess
    , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 80, $Cols: 10, $Rows: 4, $Clip: 15, $During: { $Left: [0.2, 0.8], $Top: [0.2, 0.8] }, $ChessMode: { $Column: 15, $Row: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseLinear }, $Round: { $Left: 0.8, $Top: 2.5} }
    ];

    var _CaptionTransitions = [];
    _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
    _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
    _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
    _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
    _CaptionTransitions["TR"] = { $Duration: 900, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

    _CaptionTransitions["L|IB"] = { $Duration: 1200, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
    _CaptionTransitions["R|IB"] = { $Duration: 1200, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
    _CaptionTransitions["T|IB"] = { $Duration: 1200, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };

    _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
    _CaptionTransitions["CLIP|TB"] = { $Duration: 900, $Clip: 12, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
    _CaptionTransitions["CLIP|L"] = { $Duration: 900, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

    _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
    _CaptionTransitions["MCLIP|T"] = { $Duration: 900, $Clip: 4, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };

    _CaptionTransitions["WV|B"] = { $Duration: 1200, x: -0.2, y: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Left: 1.5} };

    _CaptionTransitions["TORTUOUS|VB"] = { $Duration: 1800, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} };

    _CaptionTransitions["LISTH|R"] = { $Duration: 1500, x: -0.8, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic, $ScaleClip: 0.8, $Opacity: 2, $During: { $Left: [0.4, 0.6], $Clip: [0, 0.4], $Opacity: [0.4, 0.6]} };

    _CaptionTransitions["RTT|360"] = { $Duration: 900, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 };
    _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };

    _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };

    _CaptionTransitions["T|IE*IE"] = { $Duration: 1800, y: 0.8, $Zoom: 11, $Rotate: -1.5, $Easing: { $Top: $JssorEasing$.$EaseInOutElastic, $Zoom: $JssorEasing$.$EaseInElastic, $Rotate: $JssorEasing$.$EaseInOutElastic }, $Opacity: 2, $During: { $Zoom: [0, 0.8], $Opacity: [0, 0.7] }, $Round: { $Rotate: 0.5} };

    _CaptionTransitions["RTTS|R"] = { $Duration: 900, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };
    _CaptionTransitions["RTTS|T"] = { $Duration: 900, y: 0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} };

    _CaptionTransitions["DDGDANCE|RB"] = { $Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} };
    _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
    _CaptionTransitions["DDG|TR"] = { $Duration: 1200, x: -0.3, y: 0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 0.8} };

    _CaptionTransitions["FLTTR|R"] = { $Duration: 900, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };
    _CaptionTransitions["FLTTRWN|LT"] = { $Duration: 1800, x: 0.5, y: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.7], $Top: [0.1, 0.7] }, $Round: { $Top: 1.3} };

    _CaptionTransitions["ATTACK|BR"] = { $Duration: 1500, x: -0.1, y: -0.5, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Top: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $During: { $Left: [0.3, 0.7], $Top: [0, 0.7] }, $Round: { $Left: 1.3} };

    _CaptionTransitions["FADE"] = { $Duration: 900, $Opacity: 2 };

    var options = {
        $AutoPlay:true,
        $AutoPlaySteps: 1,
        $AutoPlayInterval: 2000,
        $PauseOnHover: 1,
        $ArrowKeyNavigation: true,
        $SlideEasing: $JssorEasing$.$EaseOutQuint,
        $SlideDuration: 800,
        $MinDragOffsetToSlide: 20,
        // $SlideWidth: 2000,
        // $SlideHeight: 700,
        $SlideSpacing: 0,
        $DisplayPieces: 1,
        $ParkingPosition: 0,
        $UISearchMode:1,
        $PlayOrientation: 1,
        $DragOrientation: 3,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: _SlideshowTransitions,
            $TransitionsOrder: 1,
            $ShowLink: true
        },

        $CaptionSliderOptions: {
            $Class: $JssorCaptionSlider$,
            $CaptionTransitions: _CaptionTransitions,
            $PlayInMode: 1,
            $PlayOutMode: 3
        },

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $ChanceToShow:2,
            $AutoCenter:0,
            $Steps: 1
        },

        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $ChanceToShow:0,
            $AutoCenter: 1,
            $Steps: 1,
            $Lanes: 1,
            $SpacingX: 4,
            $SpacingY: 4,
            $Orientation: 1
        }
    };
    var jssor1_slider = new $JssorSlider$("sliderContainer", options);
    function ScaleSlider() {
        var parentWidth = jssor1_slider.$Elmt.parentNode.clientWidth;
        if (parentWidth)
            jssor1_slider.$ScaleWidth(Math.max(Math.min(parentWidth,2000), 300));
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
});
</script>
    <?php
}
add_action('wp_head', 'set_my_scrip');

function fancybox(){ ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' );?>/assets/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' );?>/assets/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' );?>/assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
<script type="text/javascript" src="<?php bloginfo( 'template_directory' );?>/assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.fancybox-buttons').fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        prevEffect : 'elastic',
        nextEffect : 'elastic',
        closeBtn  : false,
        helpers : {
            title : {
                type : 'inside'
            },
            buttons : {}
        },
        afterLoad : function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });
});
</script>
    <?php 
} 
add_action('wp_footer','fancybox');

/*

    メニュー項目取得

*/

function get_page_data($data){
    global $post, $current_lang;
    $page_data = array();
    $page_id = $data->ID;

    $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'include' => $page_id);
    $this_post = get_pages($args);

    foreach($this_post as $post): setup_postdata($post);
        $page_title = str_replace(array("\r\n","\n","\r", "<br />", "<br>"), '', get_post_meta($page_id, 'gnav_title', true));
        $page_url = get_permalink($page_id);
        $lang_select_keys = get_post_meta($page_id, 'check_language');
        $meta_desc = get_post_meta($page_id, 'meta_description');
        $meta_desc = $meta_desc[0];
        $is_show_language = false;
        for($i = 0; $i < 3; $i ++){
            if($lang_select_keys[0][$i] == $current_lang){
                $is_show_language = true;
                break;
            }
        }
        $page_data += array('id' => $page_id, 'title' => $page_title, 'url' => $page_url, 'lang' => $is_show_language, 'meta_desc' => $meta_desc);

    endforeach; wp_reset_postdata();
    return $page_data;
}


/*

    フッター用 事業内容ショールーム表示

*/
function get_showroom_info(){
    global $current_lang;
    $showroom_url = 'https://www.chronicle-plus.com/showroom/';
    if($current_lang == 'ja'){ $showroom_title = 'ショールーム';}
    if($current_lang == 'en'){ $showroom_title = 'SHOWROOM';}
    if($current_lang == 'cn'){ $showroom_title = '展厅';}
    $str = '<a href="' . $showroom_url . '" target="_blank">' . $showroom_title . '</a>';

    echo $str;
}


/*
　
    SNSシェアのインクルード

*/

function include_sns_share(){
    return include_once(TEMPLATEPATH . '/sns_share.php');
}

/*

    ニュースSNSシェアのインクルード

*/

function include_news_sns_share(){
    return include_once(TEMPLATEPATH . '/news_sns_share.php');
}


/*

    og Meta出し分け

*/
function get_ogmeta($_meta){
    global $current_lang;

    $str;

    if($_meta == 'site_name'){
        if($current_lang == 'ja'){ $str = 'リノベーションならクロニクル';}
        else if($current_lang == 'en'){ $str = 'CHRONICLE, inc. | Bringing Freedom and Wonder to Residences';}
        else if($current_lang == 'cn'){ $str = '株式会社CHRONICLE | 赋予“住宅”自由与浪漫。';}
    }

    if($_meta == 'title'){
        if($current_lang == 'ja'){ $str = 'リノベーションならクロニクル';}
        else if($current_lang == 'en'){ $str = 'CHRONICLE, inc. | Bringing Freedom and Wonder to Residences';}
        else if($current_lang == 'cn'){ $str = '株式会社CHRONICLE | 赋予“住宅”自由与浪漫。';}
    }

    if($_meta == 'keyword'){
        if($current_lang == 'ja'){ $str = '天然無垢材,リノベーション,リフォーム,中古マンション,不動産仲介,プロポライフグループ,propolife group,クロニクル';}
        else if($current_lang == 'en'){ $str = 'CHRONICLE,Renovation,Reform,CHRONICLE,PROSTYLE,news';}
        else if($current_lang == 'cn'){ $str = 'CHRONICLE,翻修,房地产买卖中介,改建,公寓';}
    }

    return $str;
}


/*

    コンタクトのURLを取得

*/
function get_contact_page_url(){
    global $current_lang;

    $url;
    if($current_lang == 'ja'){ $url = 'https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab'; }
    else if($current_lang == 'en'){ $url = 'https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ocqbp-68ed4a00bbb50f5ba8e0ae609624a3e5'; }
    else if($current_lang == 'cn'){ $url = 'https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ocqbp-68ed4a00bbb50f5ba8e0ae609624a3e5'; }

    return $url;
}


/*

    ホームTOPICSアイコン

*/
function get_topics_icon($cat){
    $type;
    if($cat == 'information'){ $type = '企業からのお知らせ'; }
    if($cat == 'pressrelease'){ $type = 'プレスリリース'; }
    if($cat == 'media'){ $type = 'メディア掲載情報'; }

    $topics_icon = '<span class="' . $cat . '">' . $type . '</span>';
    return $topics_icon;
}



/*

    パンくずの取得

*/

function show_topicpath(){
    global $post, $post_title, $is_post_parent, $post_parent_title, $dir_category;
    $home = get_page_data(get_page_by_path('home'));
    $home_name = $home['title'];
    $parent_page = get_the_title($post->post_parent);
    $current_page = get_the_title();
    $post_type = get_post_type();

    echo '<div id="topic_path">' . "\n";
    echo '<ul>' . "\n";
    echo '<li><a href="/">' . $home_name. '</a></li>' . "\n" . '<li>';
    if($post->post_parent != 0){ echo $parent_page . ' / '; }
    if($is_post_parent != 0){ echo $post_parent_title . ' / '; }
    if($post_type == 'page'){ echo $current_page . '</li>' . "\n"; }
    if($post_type != 'page'){ echo $post_title . '</li>' . "\n"; }
    echo '</ul>' . "\n";
    echo '</div>' . "\n";
}


/*

    タイトルの整形

*/
function get_site_title(){
    global $post, $current_lang, $post_title;
    if(empty($post_title)){ $post_title = get_the_title(); }
    $parent_page = get_the_title($post->post_parent);
    $site_title;
    if($current_lang == 'ja'){ $site_title = 'リノベーションならクロニクル';}
    if($current_lang == 'en'){ $site_title = 'CHRONICLE, inc. | Bringing Freedom and Wonder to Residences';}
    if($current_lang == 'cn'){ $site_title = '株式会社CHRONICLE | 赋予“住宅”自由与浪漫。';}

    $this_url = $_SERVER["REQUEST_URI"];
    $_url = split('/', $this_url);
    $_url_len = count($_url) - 1;
    if(empty($_url[$_url_len])){ $_url_len --; }

    $_dir = $_url[$_url_len];

    if($this_url == '/' || $this_url == '/ja/' || $this_url == '/en/' || $this_url == '/cn/'){
        $str = $site_title;
    }else if(empty($parent_page) && !empty($post_title)){
        $str = $post_title . ' | ' . $site_title;
    }else{
        $str = $post_title . ' | ' . '株式会社クロニクル';
    }

    echo $str;
}


/*

    言語切替表示
*/

function switch_language(){
    global $dir_name, $current_lang;

    $this_url = $_SERVER["REQUEST_URI"];
    $_url = split('/', $this_url);

    if($current_lang == 'ja'){
         $_this_url = (strpos($this_url, '/ja/'))? '/' . str_replace('/ja/', '', $this_url): $this_url;
        $en_url = '/en' . $_this_url;
        $cn_url = '/cn' . $_this_url;

        if($_url[1] == 'news'){
            $en_url = '/en';
            $cn_url = '/cn';
        }

        echo '<p class="en"><a href="' . $en_url . '"><span>ENGLISH</span></a></p>';
        echo '<p class="cn"><a href="' . $cn_url . '"><span>中文</span></a>';
    }

    if($current_lang == 'en'){
        $_this_url = '/' . str_replace('/en/', '', $this_url);
        $ja_url = '/ja' . $_this_url;
        $cn_url = '/cn' . $_this_url;

        echo '<p class="ja"><a href="' . $ja_url . '"><span>日本語</span></a></p>';
        echo '<p class="cn"><a href="' . $cn_url . '"><span>中文</span></a>';
    }

    if($current_lang == 'cn'){
        $_this_url = '/' . str_replace('/cn/', '', $this_url);
        $ja_url = '/ja' . $_this_url;
        $en_url = '/en' . $_this_url;

        echo '<p class="ja"><a href="' . $ja_url . '"><span>日本語</span></a></p>';
        echo '<p class="en"><a href="' . $en_url . '"><span>ENGLISH</span></a>';
    }

}



/*

    現在時刻の比較 -> ポストステータスの表示

*/

function get_newicon($post_date){
    global $post;

    $_past_week = strtotime(date("Y/m/d",strtotime("-1 week")));
    $_next_week = strtotime(date("Y/m/d",strtotime("1 week")));
    $_post_date = strtotime($post_date);

    if($_past_week < $_post_date){
        echo '<span class="ico_new">NEW</span>';
    }
}


// Advanced Custom Fieldsでのプレビュー対応
/*
function get_preview_id($postId)
{
    global $post;
    $previewId = 0;

    if (($post->ID == $postId) && $_GET['preview'] &&  ($postId == url_to_postid($_SERVER['REQUEST_URI']))) {
        $preview = wp_get_post_autosave($postId);
        if ($preview != false) { $previewId = $preview->ID; }
    }

    return $previewId;
}

function get_preview_postmeta($metaValue, $postId, $metaKey, $single)
{
    if ($previewId = get_preview_id($postId)) {
        if ($postId != $previewId) {
            $metaValue = get_post_meta($previewId, $metaKey, $single);
        }
    }

    return $metaValue;
}
add_filter('get_post_metadata', 'get_preview_postmeta', 10, 4);


function save_preview_postmeta($postId)
{
    global $wpdb, $acf;  // $acfがadvanced custom filedsのglobal 変数

    if (wp_is_post_revision($postId)) {
        if (count($_POST['fields']) != 0) {
            foreach ($_POST['fields'] as $key => $value) {
                if (count(get_metadata('post', $postId, $field['name'], $value)) != 0) {
                    update_metadata('post', $postId, $field['name'], $value);
                    update_metadata('post', $postId, "_" . $field['name'], $field['key']);
                } else {
                    add_metadata('post', $postId, $field['name'], $value);
                    add_metadata('post', $postId, "_" . $field['name'], $field['key']);
                }
            }
        }
        do_action('save_preview_postmeta', $postId);
    }
}
add_action('wp_insert_post', 'save_preview_postmeta');
*/



/*	指定した投稿タイプのビジュアルエディターを非表示にする
/*---------------------------------------------------------*/
add_action('admin_print_styles', 'admin_parents_css_custom');
function admin_parents_css_custom() {
    global $typenow;
    if($typenow == 'ir'):
    echo '<style>#postdivrich {display: none;}</style>';
    endif;
}



?>
