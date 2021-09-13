<?php

function load_theme_scripts()
{
  wp_register_style('main', get_template_directory_uri() . '/dist/main.css', array(), 2, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');

add_filter('show_admin_bar', '__return_false');

function theme_support_options() {
  $defaults = array(
  'height'      => 150,
  'width'       => 250,
  'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
  'flex-width'  => false
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 // call the function in the hook
 add_action( 'after_setup_theme', 'theme_support_options' );

 function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>