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

function cite_register_image_sizes() {
    add_image_size('cite-thumbnail', 614, 350, true);
    add_image_size('cite-big', 1232, 822, true);
}
add_action('after_setup_theme', 'cite_register_image_sizes');

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/
function remove_admin_menu_items() {
    $remove_menu_items = array(__('Comments'), __('Posts'), __('Tools'));
    global $menu;
    end ($menu);
    while (prev($menu)){
        $item = explode(' ',$menu[key($menu)][0]);
        if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
            unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_admin_menu_items');

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Editor Menu Items */
/*-----------------------------------------------------------------------------------*/
function remove_editor_menu_items() {
    $remove_menu_items = array(__('Comments'), __('Posts'), __('Tools'));
    global $menu;
    end ($menu);
    while (prev($menu)){
        $item = explode(' ',$menu[key($menu)][0]);
        if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
            unset($menu[key($menu)]);}
    }
}
add_action('editor_menu', 'remove_editor_menu_items');
