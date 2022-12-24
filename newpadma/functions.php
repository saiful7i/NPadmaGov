<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'PM' => 'primary',
) );

// register nav menus

register_sidebar([
    'name'=> 'BD Govt Logo',
    'id' => 'bdgovlogo',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Hero Title',
    'id' => 'herotitle',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Hero Card 1',
    'id' => 'card1',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Hero Card 2',
    'id' => 'card2',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Hero Card 3',
    'id' => 'card3',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Line left',
    'id' => 'line_left',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Photo tile',
    'id' => 'phototitle',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'line Right',
    'id' => 'line_right',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Photo Card 1',
    'id' => 'photocard1',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Photo Card 2',
    'id' => 'photocard2',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Photo Card 3',
    'id' => 'photocard3',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'Photo Card 4',
    'id' => 'photocard4',
    'before_widget'  => '',
	'after_widget'   => '',
]);
register_sidebar([
    'name'=> 'newstitle',
    'id' => 'newstitle',
    'before_widget'  => '',
	'after_widget'   => '',
]);
?>