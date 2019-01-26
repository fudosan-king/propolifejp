<?php 
// header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; Charset=UTF-8');

include_once "api/api.php";

$api = new WP_API();

// print_r($api->get_post_by_slug("マンション-vs-一戸建て-3"));

$pageType = isset($_REQUEST['pageType']) && !empty($_REQUEST['pageType']) ? $_REQUEST['pageType'] : NULL;
$nameAPI = isset($_REQUEST['nameAPI']) && !empty($_REQUEST['nameAPI']) ? $_REQUEST['nameAPI'] : NULL;
$paged = isset($_REQUEST['paged']) && !empty($_REQUEST['paged']) ? $_REQUEST['paged'] : 1;

if ($pageType) {

	switch ($pageType) {

		case 'index': {
			$json = array(
				"list_posts" => $api->get_all_posts(6),
				"popular_posts" => $api->get_popular_posts(),
				"list_terms" => $api->get_terms_taxonomy()
			);
			print_r(json_encode($json,JSON_UNESCAPED_UNICODE));
		}	break;

		case 'article': {
			$slug = isset($_REQUEST['slug']) && !empty($_REQUEST['slug']) ? $_REQUEST['slug'] : NULL;

			$json = array(
				"article" => $api->get_post_by_slug($slug),
				"recent_posts" => $api->get_recent_posts(),
				"list_terms" => $api->get_terms_taxonomy()
			);
			print_r(json_encode($json,JSON_UNESCAPED_UNICODE));
		}	break;

		case 'get_post_by_id':
			$id = isset($_REQUEST['id']) && !empty($_REQUEST['id']) ? $_REQUEST['id'] : NULL;
			print_r($api->get_post_by_id($id));
			break;
		case 'get_terms_taxonomy':
			print_r($api->get_terms_taxonomy());
			break;
		default:
			# code...
			break;
	}
	
}

if ($nameAPI) {

	switch ($nameAPI) {

		case 'get_all_posts':
			print_r($api->get_all_posts(6, $paged, true));
			break;

		case 'get_recent_posts':
			// $paged
			print_r($api->get_recent_posts($paged, true));
			break;

		case 'get_post_by_id':
			$id = isset($_REQUEST['id']) && !empty($_REQUEST['id']) ? $_REQUEST['id'] : NULL;
			print_r($api->get_post_by_id($id));
			break;

		case 'get_post_by_slug':{
			$slug = isset($_REQUEST['slug']) && !empty($_REQUEST['slug']) ? $_REQUEST['slug'] : NULL;
			print_r($api->get_post_by_slug($slug));
		}break;

		case 'get_terms_taxonomy':
			print_r($api->get_terms_taxonomy());
			break;
		default:
			# code...
			break;
	}
	
}

?>
