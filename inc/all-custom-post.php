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

// custom package register
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