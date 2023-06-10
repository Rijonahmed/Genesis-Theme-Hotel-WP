<?php
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
        'menu_icon' => 'dashicons-images-alt',
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