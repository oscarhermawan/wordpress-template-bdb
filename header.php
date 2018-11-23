<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
  </head>
  <body>
    <header class="navigasi">
        <?php
          $args = array('theme_location' => 'top_menu');
          wp_nav_menu($args);
        ?>
    </header>
