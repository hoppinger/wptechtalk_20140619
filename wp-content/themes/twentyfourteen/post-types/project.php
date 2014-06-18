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
      'name'                => __( 'Projects', 'wp-techtalk' ),
      'singular_name'       => __( 'Project', 'wp-techtalk' ),
      'all_items'           => __( 'Projects', 'wp-techtalk' ),
      'new_item'            => __( 'New project', 'wp-techtalk' ),
      'add_new'             => __( 'Add New', 'wp-techtalk' ),
      'add_new_item'        => __( 'Add New project', 'wp-techtalk' ),
      'edit_item'           => __( 'Edit project', 'wp-techtalk' ),
      'view_item'           => __( 'View project', 'wp-techtalk' ),
      'search_items'        => __( 'Search projects', 'wp-techtalk' ),
      'not_found'           => __( 'No projects found', 'wp-techtalk' ),
      'not_found_in_trash'  => __( 'No projects found in trash', 'wp-techtalk' ),
      'parent_item_colon'   => __( 'Parent project', 'wp-techtalk' ),
      'menu_name'           => __( 'Projects', 'wp-techtalk' ),
    ),
  ) );

}
add_action( 'init', 'project_init' );

function project_updated_messages( $messages ) {
  global $post;

  $permalink = get_permalink( $post );

  $messages['project'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Project updated. <a target="_blank" href="%s">View project</a>', 'wp-techtalk'), esc_url( $permalink ) ),
    2 => __('Custom field updated.', 'wp-techtalk'),
    3 => __('Custom field deleted.', 'wp-techtalk'),
    4 => __('Project updated.', 'wp-techtalk'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s', 'wp-techtalk'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Project published. <a href="%s">View project</a>', 'wp-techtalk'), esc_url( $permalink ) ),
    7 => __('Project saved.', 'wp-techtalk'),
    8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>', 'wp-techtalk'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
    9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>', 'wp-techtalk'),
    // translators: Publish box date format, see http://php.net/date
    date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
    10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>', 'wp-techtalk'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'project_updated_messages' );
