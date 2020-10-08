<?php
function register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );


if ( ! function_exists( 'eats_setup' ) ) :
function eats_setup(){
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
	add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
endif;
add_action( 'after_setup_theme', 'eats_setup' );

function enqueue_eats_scripts(){

	 wp_enqueue_script('jquery');
	 wp_enqueue_script('nav', get_template_directory_uri() . '/js/nav.js', array(), false, true);
	wp_enqueue_style('style', get_stylesheet_uri(), 'style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_eats_scripts' );



?>