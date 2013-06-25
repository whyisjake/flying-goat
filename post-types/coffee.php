<?php

function coffee_init() {
	register_post_type( 'coffee', array(
		'hierarchical'        => false,
		'public'              => true,
		'show_in_nav_menus'   => true,
		'show_ui'             => true,
		'supports'            => array( 'title', 'editor' ),
		'has_archive'         => true,
		'query_var'           => true,
		'rewrite'             => true,
		'labels'              => array(
			'name'                => __( 'Coffees', 'flying-goat' ),
			'singular_name'       => __( 'Coffee', 'flying-goat' ),
			'add_new'             => __( 'Add new coffee', 'flying-goat' ),
			'all_items'           => __( 'Coffees', 'flying-goat' ),
			'add_new_item'        => __( 'Add new coffee', 'flying-goat' ),
			'edit_item'           => __( 'Edit coffee', 'flying-goat' ),
			'new_item'            => __( 'New coffee', 'flying-goat' ),
			'view_item'           => __( 'View coffee', 'flying-goat' ),
			'search_items'        => __( 'Search coffees', 'flying-goat' ),
			'not_found'           => __( 'No coffees found', 'flying-goat' ),
			'not_found_in_trash'  => __( 'No coffees found in trash', 'flying-goat' ),
			'parent_item_colon'   => __( 'Parent coffee', 'flying-goat' ),
			'menu_name'           => __( 'Coffees', 'flying-goat' ),
		),
	) );

}
add_action( 'init', 'coffee_init' );

function coffee_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['coffee'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Coffee updated. <a target="_blank" href="%s">View coffee</a>', 'flying-goat'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'flying-goat'),
		3 => __('Custom field deleted.', 'flying-goat'),
		4 => __('Coffee updated.', 'flying-goat'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Coffee restored to revision from %s', 'flying-goat'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Coffee published. <a href="%s">View coffee</a>', 'flying-goat'), esc_url( $permalink ) ),
		7 => __('Coffee saved.', 'flying-goat'),
		8 => sprintf( __('Coffee submitted. <a target="_blank" href="%s">Preview coffee</a>', 'flying-goat'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Coffee scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview coffee</a>', 'flying-goat'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Coffee draft updated. <a target="_blank" href="%s">Preview coffee</a>', 'flying-goat'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'coffee_updated_messages' );
