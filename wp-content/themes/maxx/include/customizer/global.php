<?php
$wp_customize->add_section('maxx_general',array(
    'title'       => __( 'Global Setting', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_g1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_g1',array(
	'description'  => __('<div class="headsetting">Global Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general',
    'settings'     => 'maxx_hidden_g1',
));

$wp_customize->add_setting( 'global_site_width' , array(
    'default'     => 1000,
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'global_site_width', array(
    'label' =>  'Box Width ( 1000 - 1100 pixel )',
    'settings' => 'global_site_width',
    'min' => 1000,
    'max' => 1100,
    'step' => 1,
    'section' => 'maxx_general',
) ) );

$wp_customize->add_setting( 'maxx_body_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_body_bg', array(
		'description'  => __( 'Body Background', 'maxx' ),
        'section'      => 'maxx_general',
		)
	)
);
$wp_customize->add_setting( 'maxx_body_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_body_col', array(
        'description'  => __( 'Body Color', 'maxx' ),
        'section'      => 'maxx_general',
		)
	)
);
$wp_customize->add_setting( 'maxx_body_link' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_body_link', array(
        'description'  => __( 'Body Link', 'maxx' ),
        'section'      => 'maxx_general',
		)
	)
);


$wp_customize->add_setting('maxx_hidden_t1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_t1',array(
	'description'  => __('<div class="headsetting notfirst">Default Thumbnail Post</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general',
    'settings'     => 'maxx_hidden_t1',
));
$wp_customize->add_setting( 'maxx_default_thumbnail', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'maxx_default_thumbnail', array(
    'section'    => 'maxx_general',
    'settings'   => 'maxx_default_thumbnail',
    'button_labels' => array(
        'select' => __( 'Choose Image', 'maxx' ),
        'remove' => __( 'Remove Image', 'maxx' ),
        'change' => __( 'Change Image', 'maxx' ),
    )
)));
$wp_customize->add_setting('maxx_hidden_t2',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_t2',array(
	'description'  => __('<div class="headsetting notfirst">Default Thumbnail Share</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general',
    'settings'     => 'maxx_hidden_t2',
));
$wp_customize->add_setting( 'maxx_default_thumbnail_share', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'maxx_default_thumbnail_share', array(
    'description' => '',
    'section'     => 'maxx_general',
    'settings'    => 'maxx_default_thumbnail_share',
    'button_labels' => array(
        'select' => __( 'Choose Image', 'maxx' ),
        'remove' => __( 'Remove Image', 'maxx' ),
        'change' => __( 'Change Image', 'maxx' ),
    )
)));

$wp_customize->add_setting('maxx_hidden_g4',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_g4',array(
	'description'  => __('<div class="headsetting notfirst">Image Appearance</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general',
    'settings'     => 'maxx_hidden_g4',
));
$wp_customize->add_setting('maxx_round_img',array(
    'default'     => '8px',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_round_img',array(
	'description'  => __( 'Rounded Image', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'8px'      => __( 'Activate', 'maxx' ),
		'0px'      => __( 'Deactivate', 'maxx' ),
	),
    'section'      => 'maxx_general',
    'settings'     => 'maxx_round_img',
));
$wp_customize->add_setting('maxx_hidden_g5',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_g5',array(
	'description'  => __('<div class="headsetting notfirst">Publish Date Format</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_general',
    'settings'     => 'maxx_hidden_g5',
));
$wp_customize->add_setting('maxx_timeformat',array(
    'default'     => 'time',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_timeformat',array(
	'description'  => __( 'Choose format date for post', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'time'      => __( 'Relative Time', 'maxx' ),
		'day'       => __( 'Publish Date', 'maxx' ),
	),
    'section'      => 'maxx_general',
    'settings'     => 'maxx_timeformat',
));


















