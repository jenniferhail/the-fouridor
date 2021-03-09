<?php

// =========================================================================
// REGISTER A NEW CUSTOM POST TYPE
// =========================================================================
// Create a custom taxonomy
// add_action( 'init', 'create_customPost_category', 0 );
//
// function create_customPost_category() {
// 	$labels = array(
// 		'name'              => _x( 'Post Categories', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Post Category', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Search Post Category' ),
// 		'all_items'         => __( 'All Post Categories' ),
// 		'parent_item'       => __( 'Parent Post Category' ),
// 		'parent_item_colon' => __( 'Parent Post Category:' ),
// 		'edit_item'         => __( 'Edit Post Category' ),
// 		'update_item'       => __( 'Update Post Category' ),
// 		'add_new_item'      => __( 'Add New Post Category' ),
// 		'new_item_name'     => __( 'New Post Category Name' ),
// 		'menu_name'         => __( 'Post Category' ),
// 	);
//
// 	$args = array(
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'post-category' ),
// 	);
//
// 	register_taxonomy( 'post_category', array( 'post' ), $args );
// }

// =========================================================================
// REGISTER A NEW CUSTOM POST TYPE
// =========================================================================
// Create a custom taxonomy
// add_action( 'init', 'create_customPost_category', 0 );
//
// function create_customPost_category() {
// 	$labels = array(
// 		'name'              => _x( 'Post Categories', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Post Category', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Search Post Category' ),
// 		'all_items'         => __( 'All Post Categories' ),
// 		'parent_item'       => __( 'Parent Post Category' ),
// 		'parent_item_colon' => __( 'Parent Post Category:' ),
// 		'edit_item'         => __( 'Edit Post Category' ),
// 		'update_item'       => __( 'Update Post Category' ),
// 		'add_new_item'      => __( 'Add New Post Category' ),
// 		'new_item_name'     => __( 'New Post Category Name' ),
// 		'menu_name'         => __( 'Post Category' ),
// 	);
//
// 	$args = array(
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'post-category' ),
// 	);
//
// 	register_taxonomy( 'post_category', array( 'post' ), $args );
// }

// =========================================================================
// EDIT COLUMNS FOR A POST TYPE
// =========================================================================
// function edit_advertise_columns( $columns ) {
//
// 	$columns = array(
// 		'cb' => '<input type="checkbox" />',
// 		'title' => __( 'Title' ),
// 		'box_ad' => __( 'Box Ad' ),
// 		'card_ad' => __( 'Card Ad' ),
// 		'banner_ad' => __( 'Banner Ad' ),
// 		'date' => __( 'Date' )
// 	);
//
// 	return $columns;
// }
//
// add_filter( 'manage_edit-post_type_advertise_columns', 'edit_advertise_columns' ) ;
//
// function manage_advertise_custom_columns( $column, $postid ) {
// 	global $post;
// 	switch( $column ) {
//
// 		case 'box_ad' :
// 		case 'card_ad' :
// 		case 'banner_ad' :
//
// 			// Get the post meta
// 			$impressions = get_post_meta($postid, $column . '-impression-count', true);
// 			$clicks = get_post_meta($postid, $column . '-click-count', true);
//
// 			// If meta values are empty, set them to 0
// 			if (empty($impressions)){
// 				$impressions = 0;
// 			}
// 			if (empty($clicks)){
// 				$clicks = 0;
// 			}
//
// 			echo 'Clicks: ' . $clicks . ' / Impr: ' . $impressions;
//
// 		break;
// 		// Break out of swtch statement for other columns
// 		default :
// 		break;
// 	}
// }
//
// add_action( 'manage_post_type_advertise_posts_custom_column', 'manage_advertise_custom_columns', 10, 2 );

?>
