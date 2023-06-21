<?php

// slider register
function custom_slider(){
    register_post_type( 'slide', 
    array(
        'labels'=> array(
            'name' => ('Slider'),
            'singular_name' => ('Slider'),
            'add_new' => ('Add New Slider'),
            'add_new_item' => ('Add New Slider'),
            'edit_item' => ('Edit Slider'),
            'new_item' => ('New Slider'),
            'view_item' => ('View Slider'),
            'not_found'=> ('Sorry, we cound\'n find the Slider you are looking for. '),
        ),
        'menu_icon' => 'dashicons-slides',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Slider'),
        'supports' => array('title', 'thumbnail', 'editor' , 'excerpt'),

    )
    
    );
    add_theme_support('post-thumbnails');
}
add_action( 'init', 'custom_slider');

// custom package register start
function custom_package(){
    register_post_type( 'package', 
    array(
        'labels'=> array(
            'name' => ('Package'),
            'singular_name' => ('Package'),
            'add_new' => ('Add New Package'),
            'add_new_item' => ('Add New Package'),
            'edit_item' => ('Edit Package'),
            'new_item' => ('New Package'),
            'view_item' => ('View Package'),
            'not_found'=> ('Sorry, we cound\'n find the Package you are looking for. '),
        ),
        'menu_icon' => 'dashicons-store',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Package'),
        'supports' => array('title', 'thumbnail', 'editor' , 'excerpt'),

    )
    
    );
    add_theme_support('post-thumbnails');
}
add_action( 'init', 'custom_package');

// custom package register end



// custom sister properties register
function custom_sister(){
    register_post_type( 'Sister', 
    array(
        'labels'=> array(
            'name' => ('Sister Properties'),
            'singular_name' => ('Sister Properties'),
            'add_new' => ('Add New Sister Properties'),
            'add_new_item' => ('Add New Sister Properties'),
            'edit_item' => ('Edit Sister Properties'),
            'new_item' => ('New Sister Properties'),
            'view_item' => ('View Sister Properties'),
            'not_found'=> ('Sorry, we cound\'n find the Sister Properties you are looking for. '),
        ),
        'menu_icon' => 'dashicons-editor-table',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Sister Properties'),
        'supports' => array('title', 'thumbnail', 'editor' , 'excerpt'),

    )
    
    );
    add_theme_support('post-thumbnails');
}


add_action( 'init', 'custom_sister');

// custom Our Rooms register
function custom_our_rooms(){
    register_post_type( 'rooms', 
    array(
        'labels'=> array(
            'name' => ('Our Rooms'),
            'singular_name' => ('Our Rooms'),
            'add_new' => ('Add New Our Rooms'),
            'add_new_item' => ('Add New Our Rooms'),
            'edit_item' => ('Edit Our Rooms'),
            'new_item' => ('New Our Rooms'),
            'view_item' => ('View Our Rooms'),
            'not_found'=> ('Sorry, we cound\'n find the Our Rooms you are looking for. '),
        ),
        'menu_icon' => 'dashicons-admin-multisite',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Our Rooms'),
        'supports' => array('title', 'thumbnail', 'editor' , 'excerpt'),

    )
    
    );
    add_theme_support('post-thumbnails');
}


add_action( 'init', 'custom_our_rooms');




// custom Grand Hotel register
function custom_grand_hotel(){
    register_post_type( 'grand-hotel', 
    array(
        'labels'=> array(
            'name' => ('Grand Hotel'),
            'singular_name' => ('Grand Hotel'),
            'add_new' => ('Add New Grand Hotel'),
            'add_new_item' => ('Add New Grand Hotel'),
            'edit_item' => ('Edit Grand Hotel'),
            'new_item' => ('New Grand Hotel'),
            'view_item' => ('View Grand Hotel'),
            'not_found'=> ('Sorry, we cound\'n find the Grand Hotel you are looking for. '),
        ),
        'menu_icon' => 'dashicons-building',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Grand Hotel'),
        'supports' => array('title', 'thumbnail', 'editor' , 'excerpt'),

    )
    
    );
    add_theme_support('post-thumbnails');
}


add_action( 'init', 'custom_grand_hotel');



function create_rooms_types_function(){
    $labels = array(
        'name' => _x('Rooms Types', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Room', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Room', '', 'your_text_domain'),
        'add_new_item' => __('Add New Room', 'your_text_domain'),
        'edit_item' => __('Edit Room', 'your_text_domain'),
        'new_item' => __('New Room', 'your_text_domain'),
        'all_items' => __('All Rooms Types', 'your_text_domain'),
        'view_item' => __('View Rooms Types', 'your_text_domain'),
        'search_items' => __('Search Room', 'your_text_domain'),
        'not_found' => __('No Room found', 'your_text_domain'),
        'not_found_in_trash' => __('No Room on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Rooms Types', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'rooms-types'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail','editor' , 'excerpt')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('rooms_category', array('rooms-types'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'rooms_category',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'cat'))
    );
    register_post_type('rooms-types', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_rooms_types_function');