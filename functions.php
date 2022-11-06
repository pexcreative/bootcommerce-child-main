<?php
// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled Bootstrap
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/lib/bootstrap.min.css'));
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

// WooCommerce
require get_template_directory() . '/woocommerce/woocommerce-functions.php';

//Agregando personalizado.css
function custom_styles() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/personalizado.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

////////////////////////////////////////////////////////////////
// COMIENZA TU EDICION//remover SIDEBAR de SINGLE PRODUCT