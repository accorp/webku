<?php
$wp_customize->add_section('maxx_setting_sosial',array(
    'title'       => __( 'Social Media', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));

$wp_customize->add_setting('facebook_data',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('facebook_data',array(
    'label'        => __( 'Facebook', 'maxx' ),
    'type'         => 'url',
    'section'      => 'maxx_setting_sosial',
    'settings'     => 'facebook_data',
	'input_attrs' => array(
        'placeholder' => __( 'https://...', 'maxx' ),
    )
));
// Twitter
$wp_customize->add_setting('twitter_data',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('twitter_data',array(
    'label'        => __( 'Twitter', 'maxx' ),
    'type'         => 'url',
    'section'      => 'maxx_setting_sosial',
    'settings'     => 'twitter_data',
	'input_attrs' => array(
        'placeholder' => __( 'https://...', 'maxx' ),
    )
));
// Instagram
$wp_customize->add_setting('instagram_data',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('instagram_data',array(
    'label'       => __( 'Instagram', 'maxx' ),
    'type'        => 'url',
    'section'     => 'maxx_setting_sosial',
    'settings'    => 'instagram_data',
	'input_attrs' => array(
        'placeholder' => __( 'https://...', 'maxx' ),
    )
));
// Youtube
$wp_customize->add_setting('youtube_data',array(
    'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('youtube_data',array(
    'label'       => __( 'Youtube', 'maxx' ),
    'type'        => 'url',
    'section'     => 'maxx_setting_sosial',
    'settings'    => 'youtube_data',
	'input_attrs' => array(
        'placeholder' => __( 'https://...', 'maxx' ),
    )
));