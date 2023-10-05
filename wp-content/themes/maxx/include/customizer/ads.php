<?php
$wp_customize->add_section('maxx_setting_ads',array(
    'title'       => __( 'Ads Slots', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_ads_afterheader',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('maxx_ads_afterheader',array(
    'label'       => __( 'After Header', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'maxx_ads_afterheader',
));
$wp_customize->add_setting('maxx_left_floating',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('maxx_left_floating',array(
    'label'       => __( 'Floating Left', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'maxx_left_floating',
));
$wp_customize->add_setting('maxx_right_floating',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('maxx_right_floating',array(
    'label'       => __( 'Floating Right', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'maxx_right_floating',
));
$wp_customize->add_setting('maxx_ads_beforefooter',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('maxx_ads_beforefooter',array(
    'label'       => __( 'Before Footer', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'maxx_ads_beforefooter',
));

$wp_customize->add_setting('maxx_ads_bottom',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('maxx_ads_bottom',array(
    'label'       => __( 'Sticky Bottom', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'maxx_ads_bottom',
));

$wp_customize->add_setting('inline_ads_one',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('inline_ads_one',array(
    'label'       => __( 'Inline Ads 1', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'inline_ads_one',
));
$wp_customize->add_setting('inline_ads_two',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('inline_ads_two',array(
    'label'       => __( 'Inline Ads 2', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'inline_ads_two',
));
$wp_customize->add_setting('inline_rel_ads',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_textarea'
));
$wp_customize->add_control('inline_rel_ads',array(
    'label'       => __( 'Left Related Ads', 'maxx' ),
    'type'        => 'textarea',
    'section'     => 'maxx_setting_ads',
    'settings'    => 'inline_rel_ads',
));