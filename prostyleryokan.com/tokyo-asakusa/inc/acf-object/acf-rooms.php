<?php 

class ACFRoomsFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_relaxing'] = get_field('section_relaxing');
		$this->data['section_rooms_detail'] = get_field('section_rooms_detail');
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

	public static function _sectionRelaxing(){
		return json_decode(json_encode(get_field('section_relaxing')));
	}

	public static function _sectionRoomsDetail(){
		return json_decode(json_encode(get_field('section_rooms_detail')));
	}
}

?>