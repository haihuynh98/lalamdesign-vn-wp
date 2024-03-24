<?php
/*
Plugin Name: Tiger Portfolio Management
Description: Portfolio management plugin by Hari Huynh.
Version: 1.0
Author: Hari Huynh
*/

function register_tiger_portfolio_taxonomy() {
	$labels = array(
		'name'              => 'Portfolio Categories',
		'singular_name'     => 'Portfolio Category',
		'search_items'      => 'Search Portfolio Categories',
		'all_items'         => 'All Portfolio Categories',
		'parent_item'       => 'Parent Portfolio Category',
		'parent_item_colon' => 'Parent Portfolio Category:',
		'edit_item'         => 'Edit Portfolio Category',
		'update_item'       => 'Update Portfolio Category',
		'add_new_item'      => 'Add New Portfolio Category',
		'new_item_name'     => 'New Portfolio Category Name',
		'menu_name'         => 'Portfolio Categories',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'rewrite'           => array( 'slug' => 'du-an/danh-muc' ),
	);

	register_taxonomy( 'portfolio_category', array( 'tiger_portfolio' ), $args );
}

add_action( 'init', 'register_tiger_portfolio_taxonomy' );

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
		'taxonomies'         => array(
			'portfolio_category'
		),
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'          => 'dashicons-portfolio', // You can change the icon
		'rewrite'            => array( 'slug' => 'du-an' )
	);

	register_post_type( 'tiger_portfolio', $args );
}

add_action( 'init', 'register_tiger_portfolio_post_type' );

// Add custom photo crop size 500px x 500px
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'tiger_portfolio_thumbnail', 500, 500, true );
}

