<?php

/*
*
    アップデート通知非表示
*
*/

// remove_action( 'load-update-core.php', 'wp_update_plugins' );
// add_filter( 'pre_site_transient_update_plugins', function($a)  {return  null;});
// add_filter('pre_site_transient_update_core', function($a)  {return  null;});
// show_admin_bar( false );

/*

    管理画面

*/
function remove_admin_menus() {
    global $menu; 
    unset($menu[2]);        // ダッシュボード
    unset($menu[5]);        // 投稿
    unset($menu[25]);       // コメント
        
    if (!current_user_can('level_10')) {
        //unset($menu[10]);       // メディア
        //unset($menu[20]);       // 固定ページ
        unset($menu[60]);       // 外観
        unset($menu[65]);       // プラグイン
        unset($menu[70]);       // ユーザー
        unset($menu[75]);       // ツール
        //unset($menu[80]);       // 設定
    }
}
add_action('admin_menu', 'remove_admin_menus');


function post_hide_menu(){
    $post_type = $_GET['post_type'];
    $post_action = $_GET['action'];
    if($post_type == 'job' || $post_action == 'edit'){
        echo '<style type="text/css">.page-title-action{display: none;}</style>';
    }
}
function my_admin_menu() {
  global $submenu;
    foreach ($submenu as $parent => $sub) {
      foreach ($sub as $index => $data) {
        if ( 0 === strpos( $data[2], 'post-new.php?post_type=job' ))
            unset( $submenu[$parent][$index] );
        }
    }
}
add_action( 'admin_menu', 'my_admin_menu' );
add_action('admin_menu', 'post_hide_menu');
add_action('admin_head-post-new.php', 'post_hide_menu');
add_action('admin_head-post.php', 'post_hide_menu');


/*

    管理画面サムネイルサイズの調整

*/
function img_thumb_set_small(){
    echo '<style type="text/css">.repeater img, img.acf-image-image{ max-width: 150px; height: auto;}</style>';
}
add_action('admin_head-post-new.php', 'img_thumb_set_small');
add_action('admin_head-post.php', 'img_thumb_set_small');


/*

    タイトルの整形

*/
function get_site_title(){
    global $post;
    $post_type = get_post_type();
    $is_cat = is_category();
    $is_child = $post->post_parent;
    
    // post_title
    if($post_type == 'page'){ $post_title =  get_the_title(); }
    else if(!$is_cat){ $post_title = get_post_type_object($post_type)->label; }
    else{ $post_title = single_cat_title('', false); }
    
    
    $site_title = get_bloginfo('name');
    $this_url = $_SERVER["REQUEST_URI"];
    $_url = explode('/', $this_url);
    $_url_len = count($_url) - 1;   
    if(empty($_url[$_url_len])){ $_url_len --; }
    $_dir = $_url[$_url_len];


    if(is_home()){
        $str = $site_title;
    }else{
        $str = $post_title . ' | ' . $site_title;
    }
    
    // page /job/
    if($_url[$_url_len - 1] == 'job'){
        $str = get_the_title() . ' | ' . $post_title . ' | ' . $site_title;
    }
    
    if($_url[$_url_len] == 'newgraduate' || $_url[$_url_len] == 'career'){ $str = '採用情報　' . $str; }
    if($_url[$_url_len - 1] == 'career'){ $str = '採用情報　' . $str; }
    
    echo strip_tags($str);
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
        echo '<p class="ico_new">NEW</p>';
    }
}

add_filter('the_time', 'dynamictime');

function dynamictime() {
  global $post;
  $date = $post->post_date;
  $time = get_post_time('G', true, $post);
  $mytime = time() - $time;
  if($mytime > 0 && $mytime < 7*24*60*60)
    $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
  else
    $mytimestamp = date(get_option('date_format'), strtotime($date));
  return $mytimestamp;
}


?>