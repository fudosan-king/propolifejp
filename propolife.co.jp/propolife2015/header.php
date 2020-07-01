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
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/<?php echo $dir_name; ?>.css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.transit.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.smarttouch.min.js"></script>
<?php if($dir_name == 'home'): ?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.mousewheel.min.js"></script><?php endif; print "\n"; ?>
<?php if($dir_name == 'access'): ?><script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&language=<?php if($current_lang == 'cn'){ echo 'zh-CN'; }else{ echo $current_lang; }; ?>"></script><?php endif; print "\n"; ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/common.js"></script>
<?php foreach($has_script_page as $p): if($p == $dir_name): ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/<?php echo $dir_name; ?>.js"></script>
<?php endif; endforeach; ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-58LD4XD');</script>
<!-- End Google Tag Manager -->
</head>
<body id="<?php echo $dir_name; ?>" class="<?php echo $current_lang; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58LD4XD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $fb_lang; ?>/sdk.js#xfbml=1&version=v2.4&appId=";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
    <h1><a href="/"><img src="<?php bloginfo('template_directory'); ?>/common/images/img_logo_propolife_<?php echo $current_lang; ?>.png" width="202" alt="<?php echo get_ogmeta('site_name'); ?>"></a></h1>
    <div id="gnav">
        <ul id="gnav_list">
            <?php
                $menu_parents = array('news', 'company', 'business');
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
                    <?php if($is_show_language): ?><li class="<?php echo $slug; ?><?php if($col_bg): echo ' bg'; endif; ?>"><a href="<?php echo $page_url; ?>"><?php echo $page_title; ?></a></li><?php endif; echo "\n"; ?>
                    <?php if($is_show_language){ $row_num += 1; } endforeach; wp_reset_postdata();?>
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
            <?php if($lang): ?><li><p><a href="/recruit/index.html" target="_blank"><?php echo $title; ?></a></p></li><?php endif; echo "\n"; ?>
            <li class="lang">
                <?php switch_language(); ?>
            </li>
        </ul>
    </div>
    <p class="gnav_ico"></p>
</div><!-- // #header -->

<?php include_once('sub_globalnav.php'); ?>

<div id="wrap">
