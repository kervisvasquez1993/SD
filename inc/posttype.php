<?php
add_action( 'init', 'portafolio2' );
function portafolio2() {
    $labels = array(
        'name'               => _x( 'portafolio2', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'portafolio2', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'portafolio2', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'portafolio2', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New portafolio2', 'biodynamicsmedical' ),
        'new_item'           => __( 'New portafolio2', 'biodynamicsmedical' ),
        'edit_item'          => __( 'Edit portafolio2', 'biodynamicsmedical' ),
        'view_item'          => __( 'View portafolio2', 'biodynamicsmedical' ),
        'all_items'          => __( 'All portafolio2', 'biodynamicsmedical' ),
        'search_items'       => __( 'Search portafolio2', 'biodynamicsmedical' ),
        'parent_item_colon'  => __( 'Parent portafolio2:', 'biodynamicsmedical' ),
        'not_found'          => __( 'No portafolio2 found.', 'biodynamicsmedical' ),
        'not_found_in_trash' => __( 'No portafolio2 found in Trash.', 'biodynamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'portafolio2' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portafolio2' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'portafolio2', $args );
}


add_action( 'init', 'personal' );
function personal() {
    $labels = array(
        'name'               => _x( 'personal', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'personal', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'personal', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'personal', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New personal', 'biodynamicsmedical' ),
        'new_item'           => __( 'New personal', 'biodynamicsmedical' ),
        'edit_item'          => __( 'Edit personal', 'biodynamicsmedical' ),
        'view_item'          => __( 'View personal', 'biodynamicsmedical' ),
        'all_items'          => __( 'All personal', 'biodynamicsmedical' ),
        'search_items'       => __( 'Search personal', 'biodynamicsmedical' ),
        'parent_item_colon'  => __( 'Parent personal:', 'biodynamicsmedical' ),
        'not_found'          => __( 'No personal found.', 'biodynamicsmedical' ),
        'not_found_in_trash' => __( 'No personal found in Trash.', 'biodynamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'personal' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'personal' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'personal', $args );
}
