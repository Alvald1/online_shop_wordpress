<?php
add_action( 'wp_enqueue_scripts', 'add_js_and_css');
add_action( 'after_setup_theme', 'add_features');
add_action( 'after_setup_theme', 'add_menu');
add_action( 'widgets_init', 'register_my_widgets' );
add_action( 'get_header', 'bake_my_wp_remove_storefront_sidebar' );
function bake_my_wp_remove_storefront_sidebar() {
	if ( is_product_category() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}
// Добавляем скрипты и стили к теме
function enqueue_custom_scripts() {
    // Подключаем jQuery
    wp_enqueue_script('jquery');

    // Добавляем ваш пользовательский скрипт
    wp_enqueue_script('custom-script', get_template_directory_uri( ) . '/assets/js/custom-script.js', array('jquery'), null, true);

    // Передаем атрибут name в JavaScript
	wp_localize_script('custom-script', 'theme_vars', array(
        'template_directory_uri' => get_template_directory_uri(),
    ));
    
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


	
function register_my_widgets(){

	register_sidebar( array(
		'name'          => "sidebar-0",
		'id'            => "sidebar-0",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );

	register_sidebar( array(
	'name' => __( 'Single Post After Content', 'wpmu' ),
	'id' => 'single-after-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));
// category archive - before content widget area
register_sidebar( array(
	'name' => __( 'Category Archive Before Content', 'wpmu' ),
	'id' => 'category-before-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));
	
// custom page template - before content widget area
register_sidebar( array(
	'name' => __( 'Widgetized Page Before Content', 'wpmu' ),
	'id' => 'widgetized-page-before-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));

// custom page template - after content widget area
register_sidebar( array(
	'name' => __( 'Widgetized Page After Content', 'wpmu' ),
	'id' => 'widgetized-page-after-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));
}



function add_js_and_css(){
    wp_enqueue_style( 'style', get_stylesheet_uri(  ));

	if(is_page_template( 'templates/contacts.php' )){
		wp_enqueue_script('custom-script_2', get_template_directory_uri( ) . '/assets/js/custom-script_2.js', array('jquery'), null, true);
		wp_enqueue_script( 'list', get_template_directory_uri(  ) . '/assets/js/list.min.js',null,null,true );
	}
	if(is_category( 'obuv' )){
		wp_enqueue_script( 'list', get_template_directory_uri(  ) . '/assets/js/mixitup.min.js',null,null,true );
	}
}
function add_features(){
	add_theme_support('post-thumbnails',array('post'));
    add_theme_support( 'custom-logo', [
		'height'      => 100,
		'width'       => 162,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
	add_image_size( 'adv-thumbnails',100,100,true );
}
function add_menu(){
    register_nav_menu( 'top', 'Главное меню сайта' );
    register_nav_menu( 'bottom', 'Политика конфиденциальности' );
}
add_theme_support( 'woocommerce' );
?>