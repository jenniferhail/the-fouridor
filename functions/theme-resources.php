<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightyResources(){
		wp_enqueue_style('mightily-css', get_template_directory_uri() . '/app/assets/css/style.min.css', '', filemtime(get_template_directory() . '/app/assets/css/style.min.css'));
        wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/app/assets/components/jquery/jquery3.min.js', '3.3.1', filemtime(get_template_directory() . '/app/assets/components/jquery/jquery3.min.js'), true);
        wp_enqueue_script('jquery');
		wp_enqueue_script('mightily-js', get_template_directory_uri() . '/app/assets/js/scripts.min.js', 'jquery', filemtime(get_template_directory() . '/app/assets/js/scripts.min.js'), true);
    }
    add_action('wp_enqueue_scripts', 'mightyResources');

    //======================================================================
	// META TAGS
	//======================================================================
	// Adding meta so that we can load it in non Wordpress pages i.e. Netforum
	function add_meta_tags() {
		echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
	}
	add_action('wp_head', 'add_meta_tags', 1);

    //======================================================================
	// ACF Responsive Image
	//======================================================================
    function acf_responsive_image($image_id, $image_size, $max_width){
    	// check the image ID is not blank
    	if($image_id != '') {
    		// set the default src image size
    		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
    		// set the srcset with various image sizes
    		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
    		// generate the markup for the responsive image
    		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
    	}
    }

    //======================================================================
	// ACF Options Page
	//======================================================================
    if( function_exists('acf_add_options_page') ) {
    	acf_add_options_page(array(
    		'page_title' 	=> 'App Options',
    		'menu_title'	=> 'App Options',
    		'menu_slug' 	=> 'app-options',
    		'capability'	=> 'edit_posts',
    		'redirect'		=> false
    	));
    }
?>
