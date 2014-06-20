<?php

function thema_init() {
	register_taxonomy( 'thema', array( 'post' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Themas', 'roots' ),
			'singular_name'              => _x( 'Thema', 'taxonomy general name', 'roots' ),
			'search_items'               => __( 'Search themas', 'roots' ),
			'popular_items'              => __( 'Popular themas', 'roots' ),
			'all_items'                  => __( 'All themas', 'roots' ),
			'parent_item'                => __( 'Parent thema', 'roots' ),
			'parent_item_colon'          => __( 'Parent thema:', 'roots' ),
			'edit_item'                  => __( 'Edit thema', 'roots' ),
			'update_item'                => __( 'Update thema', 'roots' ),
			'add_new_item'               => __( 'New thema', 'roots' ),
			'new_item_name'              => __( 'New thema', 'roots' ),
			'separate_items_with_commas' => __( 'Themas separated by comma', 'roots' ),
			'add_or_remove_items'        => __( 'Add or remove themas', 'roots' ),
			'choose_from_most_used'      => __( 'Choose from the most used themas', 'roots' ),
			'menu_name'                  => __( 'Themas', 'roots' ),
		),
	) );

}
add_action( 'init', 'thema_init' );
