<?php
/*
Plugin Name: Nice Trailingslashit
Plugin URI: http://www.wuwx.net/projects/nice-trailingslashit/
Description: Add "/" at the feed, category, tag, page, archives and other page's end, but content.
Author: wuwx
Version: 3.0.1
Author URI: http://www.wuwx.net/
*/
function nice_trailingslashit($string, $type_of_url) {
	if ($type_of_url != 'single')
		$string = trailingslashit($string);
	return $string;
}
add_filter('user_trailingslashit', 'nice_trailingslashit', 10, 2);
?>
