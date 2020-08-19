<?php

// Custom Event Post tYpe...

function university_event_post_type()
{
    add_theme_support('post-thumbnails');
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions',

        ),
        //'taxonomies' => array('category', 'tag'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'singular_name' => __('event'),
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Event',
            'update_item' => 'Update Events',
        ),
        'menu_icon' => 'dashicons-calendar-alt',
    ));

//    For Programs Types

    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions',

        ),
        //'taxonomies' => array('category', 'tag'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'singular_name' => __('program'),
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Program',
            'update_item' => 'Update Program',
        ),
        'menu_icon' => 'dashicons-format-video',
    ));

}

add_action('init', 'university_event_post_type');