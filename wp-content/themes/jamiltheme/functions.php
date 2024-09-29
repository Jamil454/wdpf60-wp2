<?php

add_theme_support('post-thumbnails');
// function rkbtheme_setup(){
// add_theme_support('post-thumbnails');
// }
// add_action('init', 'slider_post_type');
function register_jamil_menu(){
    register_nav_menu('primary', __('Main Location', 'jamiltheme'));
    // register_nav_menu( 'primary',__('Footer Menu Location','mytheme') );
}

add_action('after_setup_theme', 'register_jamil_menu');

function slider_post_type(){
    register_post_type('jamil_slider',
        array(
            'labels'      => array(
                'name'          => __('Sliders', 'jamiltheme'),
                'singular_name' => __('Slider', 'jamiltheme'),
            ),
            'public'      => true,
            'supports' => array('title', 'editor', 'thumbnail')
            
        )
    );
}
add_action('init', 'slider_post_type');

/**
 * Add a sidebar.
 */
function sidebar_widgets_areas() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'jamiltheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jamiltheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div></div>',
		
		
	) );
    register_sidebar( array(
		'name'          => __( 'Right Sidebar-1', 'jamiltheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jamiltheme' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widgets_areas' );

?>