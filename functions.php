<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Registrar o CSS e o JS
function apice_saude_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o Script de Plugins, com dependência do jquery, sem especificar versão e no footer do site
	wp_register_script( 'acordion-script', get_template_directory_uri() . '/js/acordion.js', array( 'jquery' ), false, true );
	wp_register_script( 'slick-script', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), false, true );

	// Coloca script no site
	wp_enqueue_script( 'main-script' );
}
add_action( 'wp_enqueue_scripts', 'apice_saude_scripts' );

// Registrar o Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'principal' ));
}
add_action( 'init', 'register_my_menu' );

function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);