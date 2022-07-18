<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="main-menu" role="banner">
    <div class="main-menu-wrapper">
        <div class="site-branding">
            <?php the_custom_logo() ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
                </a>
            </h1>

			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) :
				?>
                <p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
        </div>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<?php get_template_part( 'template-parts/header/menu', 'top' ); ?>
		<?php endif; ?>
    </div>
</header>
<div id="page" class="site">