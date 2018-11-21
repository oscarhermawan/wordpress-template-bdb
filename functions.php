<?php
  function link_css_stylesheet() {
      $parent_style = 'parent_style';
      wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js');
      wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);
      wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  }

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
  add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
  add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

  add_action('wp_enqueue_scripts', 'link_css_stylesheet');
  register_nav_menus(array(
    'packages' => 'Footer Menu Packages',
    'about' => 'Footer Menu About'
  ))


?>
