<?php

/*
*
    アップデート通知非表示
*
*/

// remove_action( 'load-update-core.php', 'wp_update_plugins' );
// add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
// add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));

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
    if($current_lang == 'ja'){ $showroom_title = '店舗/ショールーム';}
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
        if($current_lang == 'ja'){ $str = '株式会社プロポライフ | 「住」に自由とロマンを。';}
        else if($current_lang == 'en'){ $str = 'PROPOLIFE, inc. | Bringing Freedom and Wonder to Residences';}
        else if($current_lang == 'cn'){ $str = '株式会社PROPOLIFE | 赋予“住宅”自由与浪漫。';}
    }
    
    if($_meta == 'title'){
        if($current_lang == 'ja'){ $str = '株式会社プロポライフ | 「住」に自由とロマンを。';}
        else if($current_lang == 'en'){ $str = 'PROPOLIFE, inc. | Bringing Freedom and Wonder to Residences';}
        else if($current_lang == 'cn'){ $str = '株式会社PROPOLIFE | 赋予“住宅”自由与浪漫。';}
    }
    
    if($_meta == 'keyword'){
        if($current_lang == 'ja'){ $str = '株式会社プロポライフ,PROPOLIFE,ニュース,企業情報,事業概要,採用情報';}
        else if($current_lang == 'en'){ $str = 'PROPOLIFE,Renovation,Reform,CHRONICLE,PROSTYLE,news';}
        else if($current_lang == 'cn'){ $str = 'PROPOLIFE,翻修,房地产买卖中介,改建,公寓';}
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
    if($current_lang == 'ja'){ $site_title = '株式会社プロポライフ | 「住」に自由とロマンを。';}
    if($current_lang == 'en'){ $site_title = 'PROPOLIFE, inc. | Bringing Freedom and Wonder to Residences';}
    if($current_lang == 'cn'){ $site_title = '株式会社PROPOLIFE | 赋予“住宅”自由与浪漫。';}
    
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
        $str = $post_title . ' | ' . $site_title;
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

?>