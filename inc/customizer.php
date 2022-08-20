<?php

define( 'background_image_types', array(
	'inner'    => __( 'Inner', 'binzhengstudio' ),
	'external' => __( 'External', 'binzhengstudio' )
) );

function binzhengstudio_customize_partial_blogname() {
	bloginfo( 'name' );
}

function binzhengstudio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function binzhengstudio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'            => '.site-title a',
				'container_inclusive' => false,
				'render_callback'     => 'binzhengstudio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'            => '.site-description',
				'container_inclusive' => false,
				'render_callback'     => 'binzhengstudio_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section( 'binzhengstudio_background_image', array(
		'title'      => __( 'Background Image', 'binzhengstudio' ),
		'panel'      => '',
		'priority'   => 80,
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_setting(
		'binzhengstudio_background_image_type',
		array(
			'type'      => 'theme_mod',
			'default'   => 'inner',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'binzhengstudio_background_image_type',
		array(
			'label'    => __( 'Background Image Type', 'binzhengstudio' ),
			'section'  => 'binzhengstudio_background_image',
			'type'     => 'select',
			'choices'  => background_image_types,
			'default'  => 'inner',
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'binzhengstudio_background_image',
		array(
			'type'      => 'theme_mod',
			'default'   => '',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'binzhengstudio_background_image',
			array(
				'label'   => __( 'Background Image', 'binzhengstudio' ),
				'section' => 'binzhengstudio_background_image',
			)
		)
	);

	$wp_customize->add_setting(
		'binzhengstudio_background_image_url',
		array(
			'type'      => 'theme_mod',
			'default'   => '',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Code_Editor_Control(
			$wp_customize,
			'binzhengstudio_background_image_url',
			array(
				'label'   => __( 'test' ),
				'section' => 'binzhengstudio_background_image'
			)
		)
	);
}

add_action( 'customize_register', 'binzhengstudio_customize_register' );