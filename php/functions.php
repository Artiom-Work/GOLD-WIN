<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.css', array(), '11.2.4' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_deregister_script( 'jquery' ); 
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/lib/jquery/jquery-3-7-1.js', array(), '3.7.1', true );
	wp_register_script( 'jquery-ui-custom', get_template_directory_uri() . '/assets/lib/jquery/jquery-ui-1-14-1.js', array( 'jquery' ), '1.14.1', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-custom' );

	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.js', array(), '11.2.4', true );
	wp_enqueue_script( 'theme-accordion', get_template_directory_uri() . '/assets/js/accordion.js', array( 'jquery', 'jquery-ui-custom' ), null, true );
	wp_enqueue_script( 'swiper-init', get_template_directory_uri() . '/assets/js/swiper.js', array( 'swiper-js' ), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
});

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support("custom-logo");

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
// menues
if( ! function_exists('register_menus') ) :
function register_menus(){
		register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'header_menu_mobile' => 'Мобильное mеню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );
}
endif;

add_action( 'after_setup_theme', 'register_menus' );

add_filter( 'nav_menu_css_class', 'wp_kama_nav_menu_css_class_filter', 10, 4 );
	function wp_kama_nav_menu_css_class_filter( $classes, $menu_item, $args, $depth ){
		$classes = [];
		$classes[] = 'nav__list-item';	
		return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );

function filter_nav_menu_link_attributes( $atts, $menu_item, $args, $depth ){

	$atts['class'] = 'nav__link' ;

	if ( $args->theme_location === 'header_menu_mobile' ) {
    $atts['class'] = 'nav__link-mobile-menu'; 
  }

	return $atts;
}

?>