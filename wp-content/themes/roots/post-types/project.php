<?php

function project_init() {
	register_post_type( 'project', array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'query_var'         => true,
		'rewrite'           => true,
		'labels'            => array(
			'name'                => __( 'Projects', 'roots' ),
			'singular_name'       => __( 'Project', 'roots' ),
			'all_items'           => __( 'Projects', 'roots' ),
			'new_item'            => __( 'New project', 'roots' ),
			'add_new'             => __( 'Add New', 'roots' ),
			'add_new_item'        => __( 'Add New project', 'roots' ),
			'edit_item'           => __( 'Edit project', 'roots' ),
			'view_item'           => __( 'View project', 'roots' ),
			'search_items'        => __( 'Search projects', 'roots' ),
			'not_found'           => __( 'No projects found', 'roots' ),
			'not_found_in_trash'  => __( 'No projects found in trash', 'roots' ),
			'parent_item_colon'   => __( 'Parent project', 'roots' ),
			'menu_name'           => __( 'Projects', 'roots' ),
		),
	) );

}
add_action( 'init', 'project_init' );

function project_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['project'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Project updated. <a target="_blank" href="%s">View project</a>', 'roots'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'roots'),
		3 => __('Custom field deleted.', 'roots'),
		4 => __('Project updated.', 'roots'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s', 'roots'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Project published. <a href="%s">View project</a>', 'roots'), esc_url( $permalink ) ),
		7 => __('Project saved.', 'roots'),
		8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>', 'roots'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>', 'roots'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>', 'roots'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'project_updated_messages' );
