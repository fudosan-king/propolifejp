<?php 

function phone_title_map($title=''){
	$page_info = get_page_by_path( 'general-addition-info' );

	$profile_group = get_field('company_profile', $page_info->ID);

	$phone_list = array_column($profile_group['phone_list'], 'phone_number', 'phone_name');

	return !empty($phone_list[$title]) ? $phone_list[$title] : '';
}

function email_title_map($title=''){
	$page_info = get_page_by_path( 'general-addition-info' );

	$profile_group = get_field('company_profile', $page_info->ID);

	$email_list = array_column($profile_group['email_list'], 'email', 'title');

	return !empty($email_list[$title]) ? $email_list[$title] : '';
}

function _qt ($str) {
	$lang = qtrans_getLanguage();
	return qtrans_use($lang, $str, false);
}

?>