  <?php

function newsarticle_init() {
  register_post_type( 'newsarticle', array(
    'hierarchical'      => false,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_ui'           => true,
    'supports'          => array( 'title', 'editor' ),
    'has_archive'       => true,
    'query_var'         => true,
    'rewrite'           => true,
    'labels'            => array(
      'name'                => __( 'Newsarticles', 'wp-techtalk' ),
      'singular_name'       => __( 'Newsarticle', 'wp-techtalk' ),
      'all_items'           => __( 'Newsarticles', 'wp-techtalk' ),
      'new_item'            => __( 'New newsarticle', 'wp-techtalk' ),
      'add_new'             => __( 'Add New', 'wp-techtalk' ),
      'add_new_item'        => __( 'Add New newsarticle', 'wp-techtalk' ),
      'edit_item'           => __( 'Edit newsarticle', 'wp-techtalk' ),
      'view_item'           => __( 'View newsarticle', 'wp-techtalk' ),
      'search_items'        => __( 'Search newsarticles', 'wp-techtalk' ),
      'not_found'           => __( 'No newsarticles found', 'wp-techtalk' ),
      'not_found_in_trash'  => __( 'No newsarticles found in trash', 'wp-techtalk' ),
      'parent_item_colon'   => __( 'Parent newsarticle', 'wp-techtalk' ),
      'menu_name'           => __( 'Newsarticles', 'wp-techtalk' ),
    ),
  ) );

}
add_action( 'init', 'newsarticle_init' );

function newsarticle_updated_messages( $messages ) {
  global $post;

  $permalink = get_permalink( $post );

  $messages['newsarticle'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Newsarticle updated. <a target="_blank" href="%s">View newsarticle</a>', 'wp-techtalk'), esc_url( $permalink ) ),
    2 => __('Custom field updated.', 'wp-techtalk'),
    3 => __('Custom field deleted.', 'wp-techtalk'),
    4 => __('Newsarticle updated.', 'wp-techtalk'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Newsarticle restored to revision from %s', 'wp-techtalk'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Newsarticle published. <a href="%s">View newsarticle</a>', 'wp-techtalk'), esc_url( $permalink ) ),
    7 => __('Newsarticle saved.', 'wp-techtalk'),
    8 => sprintf( __('Newsarticle submitted. <a target="_blank" href="%s">Preview newsarticle</a>', 'wp-techtalk'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
    9 => sprintf( __('Newsarticle scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview newsarticle</a>', 'wp-techtalk'),
    // translators: Publish box date format, see http://php.net/date
    date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
    10 => sprintf( __('Newsarticle draft updated. <a target="_blank" href="%s">Preview newsarticle</a>', 'wp-techtalk'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
  );

  return $messages;
}
add_filter( 'post_updated_messages', 'newsarticle_updated_messages' );
