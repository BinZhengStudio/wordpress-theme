<button class="top-menu-button" aria-controls="top-menu" aria-expanded="false">
    菜单
</button>
<nav class="menu-items" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'binzhengstudio' ); ?>">
	<?php wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>
</nav>