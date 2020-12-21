<?php 

class ACFGalleryFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_content'] = get_field('section_content');
	}

	function getData(){
		return $this->data;
	}

	public static function _print(){
		$obj = new self();
		print_r($obj->getData());
	}

	public static function _data(){
		$obj = new self();
		return $obj->getData();
	}

	public static function _sectionContent(){
		return json_decode(json_encode(get_field('section_content')));
	}
}

?>