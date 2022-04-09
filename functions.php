<?php

function bzstudio_setup() {
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'bzstudio' ),
			'bottom' => __( 'Bottom Menu', 'bzstudio' ),
		)
	);

//	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
//	remove_action('wp_head', 'index_rel_link');
//	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wp_generator');
//	remove_filter('the_content', 'wptexturize');
}

add_action( 'after_setup_theme', 'bzstudio_setup' );

function bzstudio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bzstudio' ),
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
}

add_action( 'widgets_init', 'bzstudio_widgets_init' );

function bzstudio_styles_and_scripts() {
	// 加载进度条
	wp_enqueue_style( 'pace', get_theme_file_uri( '/assets/css/pace-theme-minimal.min.css' ), array(), '1.2.4' );

	// 进度条
	wp_enqueue_script( 'pace', get_theme_file_uri( '/assets/js/pace.min.js' ), array(), '1.2.4' );
	// 菜单
	wp_enqueue_script( 'main-menu', get_theme_file_uri( '/assets/js/main-menu.js' ), array( 'jquery' ), '20220122', true );
}

add_action( 'wp_enqueue_scripts', 'bzstudio_styles_and_scripts' );

require get_template_directory() . '/inc/template-tags.php';

// 登录页面
function bzstudio_login_page() {
	//echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/inc/login.css" />'."\n";
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/assets/css/login-page.css" />' . "\n";
	//echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/jquery.min.js"></script>'."\n";
//	echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/jquery/jquery@1.9.0/jquery.min.js"></script>' . "\n";
}

add_action( 'login_head', 'bzstudio_login_page' );