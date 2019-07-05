<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :

function site_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_image_size('home-thumb',600,450,true);

}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', get_template_directory_uri() ."/assets/js/jquery-3.1.1.min.js");
  wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
  wp_enqueue_script( 'site-script-mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js');
  wp_enqueue_script( 'site-script-fontawesome', "https://kit.fontawesome.com/3bccf4d453.js");
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'Serviço';
  $submenu['edit.php'][5][0] = 'Serviços';
  $submenu['edit.php'][10][0] = 'Adicionar Serviços';
  echo '';
}
function change_post_object_label() {
      global $wp_post_types;
      $labels = &$wp_post_types['post']->labels;
      $labels->name = 'Serviços';
      $labels->singular_name = 'Serviço';
      $labels->add_new = 'Adicionar Serviço';
      $labels->add_new_item = 'Adicionar Serviço';
      $labels->edit_item = 'Editar Serviço';
      $labels->new_item = 'Serviço';
      $labels->view_item = 'Ver Serviço';
      $labels->search_items = 'Procurar Serviço';
      $labels->not_found = 'Serviço não encontrado';
      $labels->not_found_in_trash = 'Sem Serviços na lixeira';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );