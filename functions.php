<?php
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles() {
    wp_deregister_script('jquery');

    wp_enqueue_script('main', get_template_directory_uri() . '/bundle.js',  false, null, true ); 

    wp_enqueue_style('style', get_stylesheet_uri(), false );  
		function remove_admin_login_header() {
			remove_action('wp_head', '_admin_bar_bump_cb');
	}
		show_admin_bar( false );
}

function webp_upload_mimes( $existing_mimes ) {
	// add webp to the list of mime types
	$existing_mimes['webp'] = 'image/webp';
	// return the array back to the function with our added mime type
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
	if ($result === false) {
			$displayable_image_types = array( IMAGETYPE_WEBP );
			$info = @getimagesize( $path );
			if (empty($info)) {
					$result = false;
			} elseif (!in_array($info[2], $displayable_image_types)) {
					$result = false;
			} else {
					$result = true;
			}
	}
	return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

?>