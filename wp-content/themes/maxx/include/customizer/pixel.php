<?php
$wp_customize->add_section('maxx_setting_pixel',array(
    'title'       => __( 'Facebook Pixel', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));

$wp_customize->add_setting('maxx_pixel_code',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_pixel_code',array(
    'label'       => __( 'Insert Pixel ID', 'maxx' ),
    'type'        => 'text',
    'section'     => 'maxx_setting_pixel',
    'settings'    => 'maxx_pixel_code',
));
