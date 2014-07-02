<?php

add_action( 'init', 'create_sponsors' );
add_theme_support( 'post-thumbnails' );

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function wish_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	register_widget( 'Wish_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'twentyfourteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Page Middle Content Widget', 'twentyfourteen' ),
		'id'            => 'homepage',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	
}
add_action( 'widgets_init', 'wish_widgets_init' );


 
function create_sponsors() {
 
    $labels = array( 
  	    'name'               => __( 'Sponsors', 'text_domain' ),
		'singular_name'      => __( 'Sponsor', 'text_domain' ),
		'add_new'            => _x( 'Add New sponsor', '${4:Name}', 'text_domain' ),
		'add_new_item'       => __( 'Add New sponsor', 'text_domain}' ),
		'edit_item'          => __( 'Edit sponsor', 'text_domain' ),
		'new_item'           => __( 'New sponsor', 'text_domain' ),
		'view_item'          => __( 'View sponsor', 'text_domain' ),
		'search_items'       => __( 'Search sponsors', 'text_domain' ),
		'not_found'          => __( 'No sponsor found', 'text_domain' ),
		'not_found_in_trash' => __( 'No sponsor found in Trash', 'text_domain' ),
		'parent_item_colon'  => __( 'Parent sponsor:', 'text_domain' ),
		'menu_name'          => __( 'Sponsors', 'text_domain' ),
    );
 
    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'description'         => 'description',		
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		//'menu_icon'         => '',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post', 
		'supports'            => array( 
									'title', 'editor','thumbnail' 																		
								),
    );
 
    register_post_type( 'cpt_sponsor', $args );
}
