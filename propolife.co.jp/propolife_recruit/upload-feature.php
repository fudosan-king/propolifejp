<?php 
	header('Content-Type: application/json');
    $result = array();

    $result['status'] = 'OK';


    $result['resume_link'] = isset($_FILES['resume']) ? wp_upload_media_file($_FILES['resume']) : '';
    $result['record_link'] = isset($_FILES['record']) ? wp_upload_media_file($_FILES['record']) : '';

	echo json_encode($result);

	function wp_upload_media_file($file=null){
	    // WordPress environment
	    require( dirname(__FILE__) . '/../../../wp-load.php' );
	     
	    $wordpress_upload_dir = wp_upload_dir();
	    // $wordpress_upload_dir['path'] is the full server path to wp-content/uploads/2017/05, for multisite works good as well
	    // $wordpress_upload_dir['url'] the absolute URL to the same folder, actually we do not need it, just to show the link to file
	    $i = 1; // number of tries when the file with the same name is already exists
	     
	    $profile_file = $file;
	    $new_file_path = $wordpress_upload_dir['path'] . '/' . $profile_file['name'];
	    $new_file_mime = mime_content_type( $profile_file['tmp_name'] );
	     
	    if( empty( $profile_file ) )
	        die( 'File is not selected.' );
	     
	    if( $profile_file['error'] )
	        die( $profile_file['error'] );
	     
	    if( $profile_file['size'] > wp_max_upload_size() )
	        die( 'It is too large than expected.' );
	     
	    if( !in_array( $new_file_mime, get_allowed_mime_types() ) )
	        die( 'WordPress doesn\'t allow this type of uploads.' );
	     
	    while( file_exists( $new_file_path ) ) {
	        $i++;
	        $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $profile_file['name'];
	    }
	     
	    // looks like everything is OK
	    if( move_uploaded_file( $profile_file['tmp_name'], $new_file_path ) ) {
	     
	     
	        $upload_id = wp_insert_attachment( array(
	            'guid'           => $new_file_path, 
	            'post_mime_type' => $new_file_mime,
	            'post_title'     => preg_replace( '/\.[^.]+$/', '', $profile_file['name'] ),
	            'post_content'   => '',
	            'post_status'    => 'inherit'
	        ), $new_file_path );
	     
	        // wp_generate_attachment_metadata() won't work if you do not include this file
	        require_once( ABSPATH . 'wp-admin/includes/image.php' );
	     
	        // Generate and save the attachment metas into the database
	        wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
	     
	        return get_attachment_link( $upload_id, $leavename = false );
	     
	    }
	}
?>