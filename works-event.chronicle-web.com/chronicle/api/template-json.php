<?php 

class TEMPLATE_JSON
{

	/* JSON TEMPLATE */
	function json_post_template($obj, $context = array()) {

		$args = array(
			"ID" => $obj->ID,
			"author" => $obj->post_author,
			"date" => date('m.d.Y', strtotime($obj->post_date)),
			"date_gmt" => date('m.d.Y', strtotime($obj->post_date_gmt)),
			"content" => $obj->post_content,
			"title" => $obj->post_title,
			"name" => $obj->post_name,
			"modified" => date('m.d.Y', strtotime($obj->post_modified)),
			"modified_gmt" => date('m.d.Y', strtotime($obj->post_modified_gmt)),
			"guid" => $obj->guid,
			"type" => $obj->post_type,

			"thumbnails" => $context["thumbnails"] ,

			"terms" => $context["terms"] ,
		);

		return $args;
	}

	function json_term_template ($obj) {
		$args = array(
	
			"ID" => $obj->term_id,
			"name" => $obj->name,
			"slug" => $obj->slug,
			"term_group" => $obj->term_group,
			"term_taxonomy_id" => $obj->term_taxonomy_id,
			"taxonomy" => $obj->taxonomy,
			"description" => $obj->description,
			"parent" => $obj->parent,
			"count" => $obj->count,
	
		);

		return $args;
	}

}
?>