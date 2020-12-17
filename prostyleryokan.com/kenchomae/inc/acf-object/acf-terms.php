<?php 

class ACFTermsFields
{
	private $data = Array();

	function __construct(){
		$this->data['section_notice'] = get_field('section_notice');
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

	public static function _sectionNotice(){
		return json_decode(json_encode(get_field('section_notice')));
	}

	public static function listItem() {
		return json_decode(json_encode(get_field('list_item')));
	}
}

?>