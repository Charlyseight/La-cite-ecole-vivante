<?php

register_nav_menu('main-menu', 'main navigation');

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

/*-----------------------------------------------------------------------------------*/
/* get back item menu wp */
/*-----------------------------------------------------------------------------------*/

/*
* Get Navigation ID from given Location
*/
function cite_get_nav_id($location){
    foreach (get_nav_menu_locations() as $navLocation => $navId) {
        if($navLocation == $location) return $navId;
    }
    //arreter l'execution
    return false;
}

function cite_get_nav_items($location){
    $id = cite_get_nav_id($location);
    $children = [];
    $nav = [];
    if (!$id) return $nav;
    //recuperer les items du menu $location
    $items = wp_get_nav_menu_items($id);
    // Boucler dedans
    foreach ($items as $object) {
        // creer un objet (stdClass)
        $item = new stdClass();
        // assigner les propriétés url & label a cet objet
        $item->url = $object->url;
        $item->label = $object->title;
        $item->parent = intval($object->menu_item_parent);
        $item->icon = $object->classes[0];
        $item->children = [];
        if ($item->parent) {
            $children[] = $item;
        }else{
            // pousser cet objet dans un tableau
            $nav[$object->ID] = $item;
        }
    }
    foreach ($children as $item) {
        $nav[$item->parent]->children[] = $item;
    }
    //retourne ce tableau
    return $nav;
}


// add hook
//add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
/*function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
    if ( isset( $args->sub_menu ) ) {
        $root_id = 0;

        // find the current menu item
        foreach ( $sorted_menu_items as $menu_item ) {
            if ( $menu_item->current ) {
                // set the root id based on whether the current menu item has a parent or not
                $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
                break;
            }
        }

        // find the top level parent
        if ( ! isset( $args->direct_parent ) ) {
            $prev_root_id = $root_id;
            while ( $prev_root_id != 0 ) {
                foreach ( $sorted_menu_items as $menu_item ) {
                    if ( $menu_item->ID == $prev_root_id ) {
                        $prev_root_id = $menu_item->menu_item_parent;
                        // don't set the root_id to 0 if we've reached the top of the menu
                        if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
                        break;
                    }
                }
            }
        }
        $menu_item_parents = array();
        foreach ( $sorted_menu_items as $key => $item ) {
            // init menu_item_parents
            if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;
            if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
                // part of sub-tree: keep!
                $menu_item_parents[] = $item->ID;
            } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
                // not part of sub-tree: away with it!
                unset( $sorted_menu_items[$key] );
            }
        }

        return $sorted_menu_items;
    } else {
        return $sorted_menu_items;
    }
}*/


