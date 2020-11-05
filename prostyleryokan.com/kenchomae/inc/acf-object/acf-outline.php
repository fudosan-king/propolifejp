<?php 

class ACFOutlineFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_outline'] = get_field('section_outline');
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

	public static function _sectionOutline(){
		return json_decode(json_encode(get_field('section_outline')));
	}
}

?>