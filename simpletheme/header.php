<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider-pro.css" media="screen" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.sliderPro.min.js"></script>

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <style>
      .slidekiji a {
        visibleSize: 'auto';
      }
    </style>
  </head>
  <body <?php body_class(); ?>>

    <header class="page-header">
      <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        </a>
      </h1>
    </header>

    <?php wp_nav_menu(); ?>

    <div id="contents" class="page_top">
      <!-- スライダー -->
      <?php get_template_part( 'slider' ); ?>
    </div>
