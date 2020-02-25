<?php

add_action('init', 'esliceu_post_types');
function esliceu_post_types(){
    //Events post types
    register_post_type( 'event', array(
        'supports'=>array('title','editor','excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'type new event',
            'edit_item' => 'Edit event',
            'all_items' => 'All events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    //Programs Post Type
    register_post_type( 'program', array(
        'supports'=>array('title','editor'),
        'rewrite' => array('slug' => 'program'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'type new program',
            'edit_item' => 'Edit program',
            'all_items' => 'All programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));
}

?>