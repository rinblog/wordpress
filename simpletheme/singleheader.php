<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="page-header">
      <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        </a>
      </h1>
    </header>

    <?php wp_nav_menu(); ?>

