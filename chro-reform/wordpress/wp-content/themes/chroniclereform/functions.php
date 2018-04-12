<?php

// アイキャッチ画像を使用
add_theme_support( 'post-thumbnails' );

// 通常記事のアイキャッチ画像サイズ
set_post_thumbnail_size( 230, 150, true );

// ブログ用アイキャッチ画像サイズ
add_image_size( 'blogThumb', 120, 120, true );

// 施工例用アイキャッチ画像サイズ01
add_image_size( 'worksThumb', 200, 120, true );

// ピックアップ用アイキャッチ画像サイズ01
add_image_size( 'pickThumb', 82, 82, true );

//カスタム投稿パーマリンク「/taxonomy/」　を削除
/*function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
    return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);*/


/* スタッフブログのカスタム投稿タイプ追加 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'blog', /* 「blog」という名前のカスタム投稿タイプ */
    array(
      'labels' => array(
        'name' => __( 'スタッフブログ' ),
        'singular_name' => __( 'スタッフブログ' )
      ),
      'public' => true,	
	  'rewrite' => true,
	  'menu_position' =>5,
	  'has_archive' => true,
      'supports' => array( 'title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes' ),
    )
  );
}

// スタッフブログ カテゴリタイプ
  register_taxonomy(
    'blogcat', 
    'blog', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
	  'query_var' => true,
	  'rewrite' => true,
      'show_ui' => true
    )
  );

/* メディア＆ニュースのカスタム投稿タイプ追加 */
add_action( 'init', 'create_post_type02' );
function create_post_type02() {
  register_post_type( 'news', /* 「news」という名前のカスタム投稿タイプ */
    array(
      'labels' => array(
        'name' => __( 'メディア＆ニュース' ),
        'singular_name' => __( 'メディア＆ニュース' )
      ),
      'public' => true,	
	  'rewrite' => true,
	  'menu_position' =>6,
	  'has_archive' => true,
      'supports' => array( 'title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes' ),
    )
  );
}

// メディア＆ニュース カテゴリタイプ
  register_taxonomy(
    'newscat', 
    'news', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
	  'query_var' => true,
	  'rewrite' => true,
      'show_ui' => true
    )
  );


/* 施工事例のカスタム投稿タイプ追加 */
add_action( 'init', 'create_post_type03' );
function create_post_type03() {
  register_post_type( 'works', /* 「works」という名前のカスタム投稿タイプ */
    array(
      'labels' => array(
        'name' => __( '施工事例' ),
        'singular_name' => __( '施工事例' )
      ),
      'public' => true,	
	  'rewrite' => true,
	  'menu_position' =>6,
	  'has_archive' => true,
      'supports' => array( 'title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes' ),
    )
  );
}

/* 施工事例 カテゴリタイプ */
  register_taxonomy(
    'workscat', 
    'works', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
	  'query_var' => true,
	  'rewrite' => true,
      'show_ui' => true
    )
  );

/* 事例投稿画面でAddQuicktagをON */
add_filter( 'addquicktag_post_types', 'my_addquicktag_post_types' );
function my_addquicktag_post_types( $post_types ) {
    $post_types[] = 'works';
    return $post_types;
}

/* ギャラリーのスタイルを変更 */
function remove_gallery_css() {
  return "";
}
add_filter('gallery_style', 'remove_gallery_css');

function fix_gallery_output( $output ){
  $output = preg_replace("%<br style=.*clear: both.* />%", "", $output);
  $output = preg_replace("%<dl class='gallery-item'>%", "", $output);
  $output = preg_replace("%<dt class='gallery-icon portrait'>%", "<li>", $output);
  $output = preg_replace("%<dt class='gallery-icon landscape'>%", "<li>", $output);
  $output = preg_replace("%</dt></dl><dl class='gallery-item'>%", "</li>", $output);
  $output = preg_replace("%<dd class='wp-caption-text gallery-caption'>%", "", $output);
  $output = preg_replace("%</dt></dl>%", "</li>", $output);
  $output = preg_replace("%		</div>%", "", $output);

  return $output;
}

add_filter('the_content', 'fix_gallery_output',11, 1);


/* 画像のwidth、heightを削除 */

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
 
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
   return $html;
}


/* 記事の最初の画像を取得 */

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){
    $first_img = "/img/noimg_media.gif";
  }
  return $first_img;
}

// メディア＆ニュース 件数指定

function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    if ( $query->is_post_type_archive('news') ) {
        $query->set( 'posts_per_page', '5' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
?>