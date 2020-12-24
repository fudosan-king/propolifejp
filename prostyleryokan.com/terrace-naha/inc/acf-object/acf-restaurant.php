<?php 

class ACFRestaurantFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_intro'] = get_field('section_intro');
		$this->data['section_menu'] = get_field('section_menu');
		$this->data['section_detail'] = get_field('section_detail');
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

	public static function _sectionIntro(){
		return json_decode(json_encode(get_field('section_intro')));
	}

	public static function _sectionMenu(){
		return json_decode(json_encode(get_field('section_menu')));
	}

	public static function _sectionDetail(){
		return json_decode(json_encode(get_field('section_detail')));
	}
}

?>