<?php 

class ACFHomeFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_banner'] = get_field('section_banner');
		$this->data['section_feature'] = get_field('section_feature');
		$this->data['section_concept'] = get_field('section_concept');
		$this->data['section_rooms'] = get_field('section_rooms');
		$this->data['section_location'] = get_field('section_location');
		$this->data['section_outline'] = get_field('section_outline');
		$this->data['section_gallery'] = get_field('section_gallery');
		$this->data['section_access'] = get_field('section_access');
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

	public static function _sectionBanner(){
		return json_decode(json_encode(get_field('section_banner')));
	}

	public static function _sectionFeature(){
		return json_decode(json_encode(get_field('section_feature')));
	}

	public static function _sectionConcept(){
		return json_decode(json_encode(get_field('section_concept')));
	}

	public static function _sectionRooms(){
		return json_decode(json_encode(get_field('section_rooms'))) ;
	}

	public static function _sectionLocation(){
		return json_decode(json_encode(get_field('section_location'))) ;
	}

	public static function _sectionOutline(){
		return json_decode(json_encode(get_field('section_outline'))) ;
	}

	public static function _sectionGallery(){
		return json_decode(json_encode(get_field('section_gallery'))) ;
	}

	public static function _sectionAccess(){
		return json_decode(json_encode(get_field('section_access'))) ;
	}
}

?>