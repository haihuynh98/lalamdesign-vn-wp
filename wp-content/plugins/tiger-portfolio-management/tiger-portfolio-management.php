<?php
/*
Plugin Name: Tiger Portfolio Management
Description: Portfolio management plugin by Hari Huynh.
Version: 1.0
Author: Hari Huynh
*/

// Register Tiger Portfolio Custom Post Type
function register_tiger_portfolio_post_type() {
    $labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Tiger Portfolio',
        'add_new'            => 'Add New Portfolio',
        'add_new_item'       => 'Add New Portfolio',
        'edit_item'          => 'Edit Portfolio',
        'new_item'           => 'New Portfolio',
        'view_item'          => 'View Portfolio',
        'search_items'       => 'Search Portfolios',
        'not_found'          => 'No portfolios found',
        'not_found_in_trash' => 'No portfolios found in Trash',
        'menu_name'          => 'Portfolios',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor'),
        'menu_icon'          => 'dashicons-portfolio', // You can change the icon
    );

    register_post_type('tiger_portfolio', $args);
}
add_action('init', 'register_tiger_portfolio_post_type');
