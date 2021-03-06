<?php

function aardvark_setup(){
	register_nav_menu('top', 'Top Nav');
	register_nav_menu('footer', 'Footer Menu');
	register_sidebar(array(
		  'name' => __( 'Left Sidebar' ),
		  'id' => 'left_sidebar',
		  'description' => __( 'Widgets in this area will be shown on the left-hand side.' ),
		  'before_title' => '<h2>',
		  'after_title' => '</h2>',
		  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
));
register_sidebar(array(
		  'name' => __( 'In-Post Sidebar' ),
		  'id' => 'post_sidebar',
		  'description' => __( 'Widgets in this area will be shown next to the post content.' ),
		  'before_title' => '<h2>',
		  'after_title' => '</h2>',
		  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
)
	);
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 768, 400, true);
}
add_action( 'init', 'aardvark_setup' );

function aardvark_scripts_styles(){
	wp_enqueue_script('bootstrap',  get_stylesheet_directory_uri() .'/js/bootstrap.min.js', null, '3.0.3', true);
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'bootstrap-style',  get_stylesheet_directory_uri() .'/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-theme',  get_stylesheet_directory_uri() .'/css/bootstrap-theme.min.css');
	wp_enqueue_style( 'aardvark-style', get_stylesheet_uri(), false, 1);
}
add_action( 'wp_enqueue_scripts', 'aardvark_scripts_styles' );

// Register Custom Navigation Walker
require_once('library/wp_bootstrap_navwalker.php');

function aardvark_customizations( $wp_customize ) {
   $wp_customize->add_setting( 'menu_background' , array(
    'default'     => '#71B098', 
	'type'=> 'option',
	'capability'=> 'edit_theme_options'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_background', 
		array('label'=>__( 'Menu Background Color', 'aardvark'), 'section'=> 'colors', 'settings' => 'menu_background')));
}
add_action( 'customize_register', 'aardvark_customizations' );

if ( ! isset( $content_width ) )
    $content_width = 850;

