<?php
global $dir_name, $dir_category, $temp_dir, $current_lang, $current_page_url;
$current_page_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$current_page_dir = (empty($dir_category))? $dir_name: $dir_category . '/' . $dir_name;
$current_page_data = get_page_data(get_page_by_path($current_page_dir));
$has_script_page = array('home', 'access', 'business', 'main', 'group');
$temp_dir = get_stylesheet_directory_uri();
$current_lang = qtrans_getLanguage();

$tw_lang;
$fb_lang;
if($current_lang == 'ja'){ $tw_lang = 'ja'; $fb_lang = 'ja_JP';}
else if($current_lang == 'en'){ $tw_lang = 'en'; $fb_lang = 'en_US';}
else if($current_lang == 'cn'){ $tw_lang = 'zh-cn'; $fb_lang = 'zh_CN';}
else{ $tw_lang = 'ja'; $fb_lang = 'ja';}

// delete qtrans_front_language
setcookie("qtrans_front_language", $current_lang, time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title><?php get_site_title(); ?></title>
<meta name="keywords" content="<?php echo get_ogmeta('keyword'); ?>" />
<meta name="description" content="<?php echo $current_page_data['meta_desc']; ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/common/favicon.png" type="image/x-icon" />
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/common/favicon.png" type="image/x-icon" />
<meta property="fb:app_id" content="" />
<meta property="og:locale" content="<?php echo $fb_lang; ?>" />
<meta property="og:site_name" content="<?php echo get_ogmeta('site_name'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $current_page_url; ?>" />
<meta property="og:title" content="<?php get_site_title(); ?>" />
<meta property="og:description" content="<?php echo $current_page_data['meta_desc']; ?>" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/common/images/ogimg_<?php echo $current_lang; ?>.jpg" />
<meta name="google-site-verification" content="TRYiZFxGSFvEkT9-ikzQnUGlITjcNkzllS1RuBWxW1M" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/<?php echo $dir_name; ?>.css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.transit.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.smarttouch.min.js"></script>
<?php if($dir_name == 'home'): ?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.mousewheel.min.js"></script><?php endif; print "\n"; ?>
    <?php if($dir_name == 'access'): ?><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwiqaQu5zYrnVkSkfG9XfyXXcHRqbgLIk"></script><?php endif; print "\n"; ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/common.js"></script>
<?php foreach($has_script_page as $p): if($p == $dir_name): ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/<?php echo $dir_name; ?>.js"></script>
<?php endif; endforeach; ?>

<?php
if ($post->post_name == 'works' || $post->post_name == 'works-detail'
 || $post->post_name == 'works-renovation-plus' || $post->post_name == 'works-renovation-log_mansion'
 || $post->post_name == 'works-renovation-order_renovation' || $post->post_name == 'works-renovation-reform'){
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/common/css/base.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/common/css/detail.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/works/css/style.css'; ?>">

    <!-- Works JS start-->
    <script src="https://works-event.chronicle-web.com/wp-content/themes/chronicle/common/js/jquery.bxslider.js"></script>
    <script src="https://works-event.chronicle-web.com/wp-content/themes/chronicle/works/js/script.js"></script>
    <!-- //Works JS end-->

    <?php
}

if ($post->post_name == 'event' || $post->post_name == 'event-detail'
    || $post->post_name == 'event_pref-tokyo' || $post->post_name == 'event_pref-oosaka'
    || $post->post_name == 'event_pref-nagoya' || $post->post_name == 'event_pref-kanagawa'
    || $post->post_name == 'event_pref-fukuoka'   ){
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/common/css/base.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/common/css/detail.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/common/candy/event/css/style.css'; ?>">
    <?php
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.8/SmoothScroll.min.js"></script>

</head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9S2NL');</script>
<!-- End Google Tag Manager -->

<body id="<?php echo $dir_name; ?>" class="<?php echo $current_lang; ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9S2NL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo $fb_lang; ?>/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
    <h1><a href="/"><img src="<?php bloginfo('template_directory'); ?>/common/images/img_logo_chronicle_ja.png" width="202" alt="<?php echo get_ogmeta('site_name'); ?>"></a></h1>
    <div id="gnav">
        <ul id="gnav_list">
            <?php
            $whats = get_page_data(get_page_by_path('whats-chronicle'));
            $lang = $whats['lang'];
            $title = $whats['title'];
            ?>
            <?php if($lang): ?><li><p><a href="https://www.chronicle-web.com/" target="_blank"><?php echo $title; ?></a></p></li><?php endif; echo "\n"; ?>

            <?php
                $menu_parents = array('news', 'company');
                foreach($menu_parents as $menu_parent):
                $get_page_parents = get_page_data(get_page_by_path($menu_parent));
                $parents_id = $get_page_parents['id'];
                $parents_title = $get_page_parents['title'];
            ?>
            <?php if($get_page_parents['lang']): ?>
            <li<?php if($dir_category == $menu_parent): echo ' class="current"'; endif; ?>>
                <p class="parents"><?php echo $parents_title; ?></p>
                <ul>
                    <?php
                        $row_num = 0;
                    $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $parents_id);
                        $child_pages = get_pages($args);
                        foreach($child_pages as $child_page): setup_postdata($child_page);
                        $post_name = $child_page->post_name;
                        $page_id = $child_page->ID;
                        $slug = $child_page->post_name;
                        $page_title = get_post_meta($page_id, 'gnav_title', true);
                        $lang_select_keys = get_post_meta($page_id, 'check_language');
                        $is_show_language = false;
                        for($i = 0; $i < 3; $i ++){
                            if($lang_select_keys[0][$i] == $current_lang){
                                $is_show_language = true;
                                break;
                            }
                        }
                        $page_url = get_permalink($page_id);
                        $col_bg = ($row_num % 2 == 1)? true: false;
                    ?>
                    <?php if($is_show_language): ?>
                    <li class="<?php echo $slug; ?><?php if($col_bg): echo ' bg'; endif; ?>" id="post-<?php the_ID(); ?>"><a href="<?php echo $page_url; ?>"><?php echo $page_title; ?></a></li>
                    <?php endif; echo "\n"; ?>
                    <?php if($is_show_language){ $row_num += 1; }; ?>
                    <?php endforeach; wp_reset_postdata();?>
                </ul>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>

            <?php
            $menu_parents = array('business');
            foreach($menu_parents as $menu_parent):
            $get_page_parents = get_page_data(get_page_by_path($menu_parent));
            $parents_id = $get_page_parents['id'];
            $parents_title = $get_page_parents['title'];
            ?>
            <?php if($get_page_parents['lang']): ?>
            <li<?php if($dir_category == $menu_parent): echo ' class="current"'; endif; ?>>
                <p class="parents"><?php echo $parents_title; ?></p>
                <ul>
                    <?php
                    $row_num = 0;
                    $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $parents_id, 'exclude' => 3330);
                    $child_pages = get_pages($args);
                    foreach($child_pages as $child_page): setup_postdata($child_page);
                    $post_name = $child_page->post_name;
                    $page_id = $child_page->ID;
                    $slug = $child_page->post_name;
                    $page_title = get_post_meta($page_id, 'gnav_title', true);
                    $lang_select_keys = get_post_meta($page_id, 'check_language');
                    $is_show_language = false;
                    for($i = 0; $i < 3; $i ++){
                        if($lang_select_keys[0][$i] == $current_lang){
                            $is_show_language = true;
                            break;
                        }
                    }
                    $page_url = get_permalink($page_id);
                    $col_bg = ($row_num % 2 == 1)? true: false;
                    ?>
                    <?php if($is_show_language): ?>
                    <li class="<?php echo $slug; ?><?php if($col_bg): echo ' bg'; endif; ?>" id="post-<?php the_ID(); ?>"><a href="<?php echo $page_url; ?>"><?php echo $page_title; ?></a></li>
                    <?php endif; echo "\n"; ?>
                    <?php if($is_show_language){ $row_num += 1; }; ?>
                    <?php endforeach; wp_reset_postdata();?>
                    <li><a href="https://www.propolife.co.jp/group/" target="_blank">グループ企業</a></li>
                    <?php
                        $pagebuy_data = get_page_data(get_page_by_path('buy'));
                     ?>
                    <li><a href="<?php echo  $pagebuy_data['url']; ?>" target="_blank"><?php echo  $pagebuy_data['title']; ?></a></li>
                </ul>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>

            <?php
                $access = get_page_data(get_page_by_path('company/access'));
            ?>
            <li class="sp"><a href="<?php echo $access['url']; ?>"><?php echo $access['title']; ?></a></li>
            <?php
                $recruitment = get_page_data(get_page_by_path('recruitment'));
                $lang = $recruitment['lang'];
                $title = $recruitment['title'];
            ?>
            <?php if($lang): ?><li><p class="parents"><a href="https://www.propolife.co.jp/recruit/" target="_blank"><?php echo $title; ?></a></p></li><?php endif; echo "\n"; ?>

           <!--  <li class="lang">
                <?php //switch_language(); ?>
            </li> -->

            <li class="icon-social">
                <span class="menu-name">公式SNS</span>
                <a href="https://www.facebook.com/chronicle.web.official/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/icon-facebook.png" alt=""></a>
                <a href="https://www.instagram.com/chronicle_web.official/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/icon-instagram.png" alt=""></a>
                <a href="https://page.line.me/hci7480k" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/icon-line.png" alt=""></a>
                <a href="https://www.pinterest.jp/chronicleofficial/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/images/icon-pinterest.png" alt=""></a>
            </li>
        </ul>
    </div>
    <p class="gnav_ico"></p>
</div><!-- // #header -->

<?php include_once('sub_globalnav.php'); ?>

<div id="wrap">
