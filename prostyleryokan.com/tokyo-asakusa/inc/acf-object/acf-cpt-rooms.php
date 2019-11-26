<?php 

class ACFRoomsCPTFields
{
	private $data = Array();

	function __construct($postID){
		$_post = get_post( $postID );
		$this->data['post'] = $_post;
		$this->data['description'] = get_field('description', $_post);
		$this->data['introduction'] = get_field('introduction', $_post);
		$this->data['box_content'] = get_field('box_content', $_post);

	}

	function getData(){
		return $this->data;
	}

	public static function _print($postID){
		$obj = new self($postID);
		print_r($obj->getData());
	}

	public static function _data($postID){
		$obj = new self($postID);
		return json_decode(json_encode($obj->getData()));
	}

	public static function _description($postID){
		$_post = get_post( $postID );
		return json_decode(json_encode(get_field('description', $_post)));
	}

	public static function _introduction($postID){
		$_post = get_post( $postID );
		return json_decode(json_encode(get_field('introduction', $_post)));
	}

	public static function _boxContent($postID){
		$_post = get_post( $postID );
		return json_decode(json_encode(get_field('box_content', $_post)));
	}

}

?>