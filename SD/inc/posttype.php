<?php
add_action( 'init', 'web' );
function web() {
    $labels = array(
        'name'               => _x( 'web', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'web', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'web', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'web', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New web', 'biodynamicsmedical' ),
        'new_item'           => __( 'New web', 'biodynamicsmedical' ),
        'edit_item'          => __( 'Edit web', 'biodynamicsmedical' ),
        'view_item'          => __( 'View web', 'biodynamicsmedical' ),
        'all_items'          => __( 'All web', 'biodynamicsmedical' ),
        'search_items'       => __( 'Search web', 'biodynamicsmedical' ),
        'parent_item_colon'  => __( 'Parent web:', 'biodynamicsmedical' ),
        'not_found'          => __( 'No web found.', 'biodynamicsmedical' ),
        'not_found_in_trash' => __( 'No web found in Trash.', 'biodynamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'web' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'web' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'web', $args );
}


add_action( 'init', 'persoanl' );
function persoanl() {
    $labels = array(
        'name'               => _x( 'persoanl', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'persoanl', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'persoanl', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'persoanl', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New persoanl', 'biodynamicsmedical' ),
        'new_item'           => __( 'New persoanl', 'biodynamicsmedical' ),
        'edit_item'          => __( 'Edit persoanl', 'biodynamicsmedical' ),
        'view_item'          => __( 'View persoanl', 'biodynamicsmedical' ),
        'all_items'          => __( 'All persoanl', 'biodynamicsmedical' ),
        'search_items'       => __( 'Search persoanl', 'biodynamicsmedical' ),
        'parent_item_colon'  => __( 'Parent persoanl:', 'biodynamicsmedical' ),
        'not_found'          => __( 'No persoanl found.', 'biodynamicsmedical' ),
        'not_found_in_trash' => __( 'No persoanl found in Trash.', 'biodynamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'persoanl' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'persoanl' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'persoanl', $args );
}
