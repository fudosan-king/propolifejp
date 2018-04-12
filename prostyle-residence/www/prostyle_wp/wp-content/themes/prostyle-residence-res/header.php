<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        wp_head();

        $title = !empty($post->post_title) ? $post->post_title : get_option('blogname');
        $description = get_option('blogdescription');
        $keywords = "";

        $isFrontPage = is_front_page() ? 'true' : 'false';

        /* AIO SEO Pack integrate */
        $aioseo = get_option('aioseop_options');
        $aioseo_use_static_info = $aioseo['aiosp_use_static_home_info'];

        if ( $aioseo_use_static_info == 0 ){
            $title = !empty($aioseo['aiosp_home_title']) ? $aioseo['aiosp_home_title'] : $title;
            $keywords = !empty($aioseo['aiosp_home_keywords']) ? $aioseo['aiosp_home_keywords'] : $keywords;
            $description = !empty($aioseo['aiosp_home_description']) ? $aioseo['aiosp_home_description'] : $description;
        }else{
            $idFrontPage = get_option( 'page_on_front' );
            $frontPost = get_post($idFrontPage);

            $title = !empty($frontPost->post_title) ? $frontPost->post_title : get_option('blogname');

            $aioseop_is_post_disabled = get_post_meta($idFrontPage, '_aioseop_disable', true);
            if (empty($aioseop_is_post_disabled)){
                $title = !empty(get_post_meta($idFrontPage, '_aioseop_title', true)) ? get_post_meta($idFrontPage, '_aioseop_title', true) : $title;
                $keywords = !empty(get_post_meta($idFrontPage, '_aioseop_keywords', true)) ? get_post_meta($idFrontPage, '_aioseop_keywords', true) : $keywords;
                $description = !empty(get_post_meta($idFrontPage, '_aioseop_description', true)) ? get_post_meta($idFrontPage, '_aioseop_description', true) : $description;
            }
        }

        if ( !is_front_page() ):

            $collect_post_metas = get_post_meta(get_the_id());
            $aioseop_is_post_disabled = get_post_meta(get_the_id(), '_aioseop_disable', true);

            if (empty($aioseop_is_post_disabled)){
                $title = !empty(get_post_meta(get_the_id(), '_aioseop_title', true)) ? get_post_meta(get_the_id(), '_aioseop_title', true) : $title;
                $keywords = !empty(get_post_meta(get_the_id(), '_aioseop_keywords', true)) ? get_post_meta(get_the_id(), '_aioseop_keywords', true) : $keywords;
                $description = !empty(get_post_meta(get_the_id(), '_aioseop_description', true)) ? get_post_meta(get_the_id(), '_aioseop_description', true) : $description;

            }

        endif;

        // echo "Title: ".$title."<br>";
        // echo "Keywords: ".$keywords."<br>";
        // echo "Description: ".$description."<br>";
    ?>

    <title><?php echo $title ?></title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/style.css"; ?>" media="screen, print">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/buy.css"; ?>" media="screen, print">

    <div id="fb-root"></div>
    <script>

    jQuery(document).ready(function(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            // jQuery('.fb-page').attr('data-width', 600);
            // console.log(jQuery('.fb-page').attr('data-width'));
        }
    });

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KFVKSR');</script>
    <!-- End Google Tag Manager -->

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFVKSR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container" <?php if (is_page($post->ID) && $post->post_name == 'buy') { ?> style="max-width:initial"; <?php } ?> >

        <div class="row">
            <div id="header">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="pre_title">
                        <h1 class="pri"><a href="/">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                ?>
                                    <img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php the_title(); ?>" />
                                <?php
                            } else {
                                    echo get_bloginfo( 'name' );
                            }
                         ?>

                        </a></h1>
                        <div class="extra">
                            <?php get_template_part('/content', 'navbar'); ?>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="header_right">
                        <p class="head_tel pri">
                            <img src="<?php echo get_template_directory_uri()."/img/common/tel_blown.png"; ?> " alt="tel:0800-111-1678" />
                            受付時間／10:00〜19:00　定休日／水曜日※祝日を除く<br />
                            携帯電話・PHSからもご利用いただけます。
                        </p>

                        <div  class="head_tel extra" align="center">
                            <a href="tel:0800-111-1678">
                                <img src="<?php echo get_template_directory_uri()."/img/common/tel_blown.png"; ?> " alt="tel:0800-111-1678" />
                            </a>
                        </div>

                        <div class="pri">
                            <?php
                                wp_nav_menu(array('theme_location' => 'header-menu'));
                            ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>


