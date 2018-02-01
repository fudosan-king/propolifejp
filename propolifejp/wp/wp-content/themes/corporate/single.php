<?php
$post = $wp_query->post;
if ( in_category(array( 'news' )) ) {
include(STYLESHEETPATH.'/single-news.php');
}
if ( in_category(array( 'information' )) ) {
include(STYLESHEETPATH.'/single-news.php');
} 
if ( in_category(array( 'media' )) ) {
include(STYLESHEETPATH.'/single-media.php');
} 
else {
include(STYLESHEETPATH.'/single-pressrelease.php');
}
?>