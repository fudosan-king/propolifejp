<?php

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// ウィジェット
if ( function_exists('register_sidebar') )
	register_sidebar();

// 画像挿入タグ　不要なものを削除する
function my_remove_img_attr($html, $id, $alt, $title, $align, $size){
 
    $html = preg_replace('/ width="\d+"/', '', $html);
    $html = preg_replace('/ height="\d+"/', '', $html);
    $html = preg_replace('/ class=".+"/', '', $html);
    $html = preg_replace('/ title=".+"/', '', $html);
 
return $html;
}
?>