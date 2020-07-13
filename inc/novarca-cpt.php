<?php

class NovarcaCPT {
	public static $_instance = null;
	
	public static function get_instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self;
		}
		
		return self::$_instance;
	}
	
	public function __construct() {
		add_action( 'init', array( $this, 'register_cpt' ) );
	}
	
	public function register_cpt() {
		
		// registering custom post type
		$labels = array(
			'name'               => _x( 'Consultants', 'post type general name', 'novarca' ),
			'singular_name'      => _x( 'Consultant', 'post type singular name', 'novarca' ),
			'menu_name'          => _x( 'Consultants', 'admin menu', 'novarca' ),
			'name_admin_bar'     => _x( 'Consultant', 'add new on admin bar', 'novarca' ),
			'add_new'            => _x( 'Add New', 'Consultant', 'novarca' ),
			'add_new_item'       => __( 'Add New Consultant', 'novarca' ),
			'new_item'           => __( 'New Consultant', 'novarca' ),
			'edit_item'          => __( 'Edit Consultant', 'novarca' ),
			'view_item'          => __( 'View Consultant', 'novarca' ),
			'all_items'          => __( 'All Consultants', 'novarca' ),
			'search_items'       => __( 'Search Consultants', 'novarca' ),
			'parent_item_colon'  => __( 'Parent Consultants:', 'novarca' ),
			'not_found'          => __( 'No Consultants found.', 'novarca' ),
			'not_found_in_trash' => __( 'No Consultants found in Trash.', 'novarca' )
		);
		
		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'novarca' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'consultants' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-businessman',
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
		);
		
		register_post_type( 'novarca-consultant', $args );
	}
}

NovarcaCPT::get_instance();