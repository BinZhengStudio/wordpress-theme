<?php

function binzhengstudio_setup() {
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'binzhengstudio' ),
			'bottom' => __( 'Bottom Menu', 'binzhengstudio' ),
		)
	);

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 960, 540, true );

	add_theme_support(
		'custom-logo',
		array(
			'width'      => 128,
			'height'     => 128,
			'flex-width' => true,
		)
	);

//	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
//	remove_action('wp_head', 'index_rel_link');
//	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action( 'wp_head', 'wp_generator' );
//	remove_filter('the_content', 'wptexturize');
}

add_action( 'after_setup_theme', 'binzhengstudio_setup' );

function binzhengstudio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'binzhengstudio' ),
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
}

add_action( 'widgets_init', 'binzhengstudio_widgets_init' );

function binzhengstudio_styles_and_scripts() {
	// 进度条css
	wp_enqueue_style( 'main', get_theme_file_uri( '/assets/css/main.min.css' ), array(), '20221230' );
	wp_enqueue_style( 'pace', get_theme_file_uri( '/assets/css/pace-theme-minimal.min.css' ), array(), '1.2.4' );
	wp_enqueue_style( 'genericons', get_theme_file_uri( '/assets/genericons/genericons.min.css' ), array(), '20220711' );
	if ( is_user_logged_in() ) {
		wp_enqueue_style( 'wpadminbar', get_theme_file_uri( '/assets/css/admin-bar.min.css' ), array(), '20221230' );
	}
//	wp_enqueue_style( 'accessibility', get_theme_file_uri( '/assets/css/accessibility.min.css' ), array(), '20220711' );
	// genericons css

	// 进度条js
	wp_enqueue_script( 'pace', get_theme_file_uri( '/assets/js/pace.min.js' ), array(), '1.2.4' );
	// 顶部菜单
	wp_enqueue_script( 'main-menu', get_theme_file_uri( '/assets/js/main-menu.min.js' ), array( 'jquery' ), '20221230', true );
//	wp_enqueue_script( 'accessibility-menu', get_theme_file_uri( '/assets/js/accessibility.min.js' ), array( 'jquery' ), '20220711', true );
}

add_action( 'wp_enqueue_scripts', 'binzhengstudio_styles_and_scripts' );

require get_template_directory() . '/inc/template-tags.php';

// 登录页面
function binzhengstudio_login_page() {
	//echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/inc/login.css" />'."\n";
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/assets/css/login-page.min.css" />' . "\n";
	//echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/jquery.min.js"></script>'."\n";
//	echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/jquery/jquery@1.9.0/jquery.min.js"></script>' . "\n";
}

add_action( 'login_head', 'binzhengstudio_login_page' );