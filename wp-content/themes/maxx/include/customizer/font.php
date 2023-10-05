<?php
$wp_customize->add_section('maxx_general_font',array(
    'title'       => __( 'Font Setting', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_g2',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_g2',array(
	'description'  => __('<div class="headsetting">Global Font</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_hidden_g2',
));
$wp_customize->add_setting('maxx_body_font',array(
    'default'     => 'Roboto',
	'transport'   => 'refresh',
	'sanitize_callback' => 'web_sanitize_fonts'
));
$wp_customize->add_control('maxx_body_font',array(
	'description'        => __( 'Font Family', 'maxx' ),
    'type'         => 'select',
	'choices'      => $font_choices,
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_body_font',
));
$wp_customize->add_setting('maxx_body_fontsize',array(
    'default'     => 14,
	'transport'   => 'refresh',
	'sanitize_callback' => 'absint'
));
$wp_customize->add_control('maxx_body_fontsize',array(
	'description'  => __( 'Font Size', 'maxx' ),
    'type'         => 'number',
	'input_attrs' => array(
        'min'     => 13,
		'max'     => 16,
    ),
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_body_fontsize',
));
$wp_customize->add_setting('maxx_hidden_g3',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_g3',array(
	'description'  => __('<div class="headsetting notfirst">Heading Font (H1-H6)</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_hidden_g3',
));
$wp_customize->add_setting('maxx_heading_font',array(
    'default'     => 'Roboto',
	'transport'   => 'refresh',
	'sanitize_callback' => 'web_sanitize_fonts'
));
$wp_customize->add_control('maxx_heading_font',array(
	'description'        => __( 'Font Family', 'maxx' ),
    'type'         => 'select',
	'choices'      => $font_choices,
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_heading_font',
));
$wp_customize->add_setting('maxx_heading_fontweight',array(
    'default'     => 700,
	'transport'   => 'refresh',
	'sanitize_callback' => 'absint'
));
$wp_customize->add_control('maxx_heading_fontweight',array(
	'description'  => __( 'Font Weight', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'300'      => __( 'Light', 'maxx' ),
		'400'      => __( 'Normal', 'maxx' ),
		'600'      => __( 'Semi Bold', 'maxx' ),
		'700'      => __( 'Bold', 'maxx' ),
	),
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_heading_fontweight',
));

$wp_customize->add_setting('maxx_hidden_m2',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_m2',array(
	'description'  => __('<div class="headsetting notfirst">Font Menu</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_hidden_m2',
));
$wp_customize->add_setting('maxx_menu_font',array(
    'default'     => 'Roboto',
	'transport'   => 'refresh',
	'sanitize_callback' => 'web_sanitize_fonts'
));
$wp_customize->add_control('maxx_menu_font',array(
	'description'        => __( 'Font Family', 'maxx' ),
    'type'         => 'select',
	'choices'      => $font_choices,
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_menu_font',
));
$wp_customize->add_setting('maxx_menu_fontsize',array(
    'default'     => 14,
	'transport'   => 'refresh',
	'sanitize_callback' => 'absint'
));
$wp_customize->add_control('maxx_menu_fontsize',array(
	'description'  => __( 'Font Size', 'maxx' ),
    'type'         => 'number',
	'input_attrs' => array(
        'min'     => 13,
		'max'     => 16,
    ),
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_menu_fontsize',
));
$wp_customize->add_setting('maxx_menu_fontweight',array(
    'default'     => 700,
	'transport'   => 'refresh',
	'sanitize_callback' => 'absint'
));
$wp_customize->add_control('maxx_menu_fontweight',array(
	'description'  => __( 'Font Weight', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'300'      => __( 'Light', 'maxx' ),
		'400'      => __( 'Normal', 'maxx' ),
		'600'      => __( 'Semi Bold', 'maxx' ),
		'700'      => __( 'Bold', 'maxx' ),
	),
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_menu_fontweight',
));




$wp_customize->add_setting('maxx_hidden_l2',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_l2',array(
	'description'  => __('<div class="headsetting notfirst">Font Archive</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_hidden_l2',
));
$wp_customize->add_setting('maxx_loop_font',array(
    'default'     => 'Roboto',
	'transport'   => 'refresh',
	'sanitize_callback' => 'web_sanitize_fonts'
));
$wp_customize->add_control('maxx_loop_font',array(
	'description'  => __( 'Author Font Family', 'maxx' ),
    'type'         => 'select',
	'choices'      => $font_choices,
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_loop_font',
));
$wp_customize->add_setting('maxx_loop_fontweight',array(
    'default'     => 700,
	'transport'   => 'refresh',
	'sanitize_callback' => 'absint'
));
$wp_customize->add_control('maxx_loop_fontweight',array(
	'description'  => __( 'Font Weight', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'300'      => __( 'Light', 'maxx' ),
		'400'      => __( 'Normal', 'maxx' ),
		'600'      => __( 'Semi Bold', 'maxx' ),
		'700'      => __( 'Bold', 'maxx' ),
	),
    'section'      => 'maxx_general_font',
    'settings'     => 'maxx_loop_fontweight',
));
