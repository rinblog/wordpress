<?php add_theme_support( 'menus' ); ?>

<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	));
}

/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme(){
 // アイキャッチ画像を有効にする
 add_theme_support( 'post-thumbnails' ); 
 // アイキャッチ画像サイズを指定する（横：640px 縦：384）
 // 画像サイズをオーバーした場合は切り抜き
 set_post_thumbnail_size( 640, 384, true ); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

function slider_scripts(){
	wp_enqueue_script( 'slider', get_template_directory_uri() .'/assets/js/slider.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'slider_scripts' );

