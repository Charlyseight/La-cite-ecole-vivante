<?php

register_nav_menu('main-menu', 'main navigation', 'cite');

function assets($path){
    return get_template_directory_uri() . '/' . trim($path, '/');
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function cite_register_custom_post_types() {
    register_post_type('teamteachers', [
        'label' => 'Teamteachers',
        'labels' => [
            'singular_name' => 'Teamteacher',
            'add_new_item' => 'Add a new teacher'
        ],
        'description' => 'All the teachers in high School la cité école vivante',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => ['slug' => 'teamteachers']
    ]);
    register_post_type('teampops', [
        'label' => 'Teampops',
        'labels' => [
            'singular_name' => 'Teampop',
            'add_new_item' => 'Add a new pop'
        ],
        'description' => 'All the person in the pop in high School la cité école vivante',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => ['slug' => 'teampops']
    ]);
    register_post_type('teamdir', [
        'label' => 'Teamdirs',
        'labels' => [
            'singular_name' => 'Teamdir',
            'add_new_item' => 'Add a new dir'
        ],
        'description' => 'All the person in the direction in high School la cité école vivante',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => ['slug' => 'teamdirs']
    ]);
}
add_theme_support('post-thumbnails');
add_action('init', 'cite_register_custom_post_types');

function remove_fields(){
    remove_post_type_support('page', 'editor');
}