<?php
$wp_customize->add_section('maxx_header',array(
    'title'       => __( 'Top Header', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_h1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_h1',array(
	'description'  => __('<div class="headsetting">Heading Block</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_header',
    'settings'     => 'maxx_hidden_h1',
));
$wp_customize->add_setting( 'maxx_header_bg' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_header_bg', array(
		'description'        => __( 'Background', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting('maxx_hidden_sos',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_sos',array(
	'description'  => __('<div class="headsetting notfirst">Social Media</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_header',
    'settings'     => 'maxx_hidden_sos',
));
$wp_customize->add_setting( 'maxx_header_icon_bg' , array(
    'default'     => "#222222",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_header_icon_bg', array(
        'description'        => __( 'Icon Background', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting( 'maxx_header_icon_col' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_header_icon_col', array(
        'description'        => __( 'Icon Color', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting('maxx_hidden_h3',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_h3',array(
	'description'  => __('<div class="headsetting notfirst">Search Form</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_header',
    'settings'     => 'maxx_hidden_h3',
));
$wp_customize->add_setting( 'maxx_search_bg' , array(
    'default'     => "#eeeeee",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_search_bg', array(
		'description'        => __( 'Background', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting( 'maxx_search_border' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_search_border', array(
        'description'        => __( 'Border Color', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting( 'maxx_search_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_search_col', array(
        'description'        => __( 'Input Color', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting( 'maxx_button_bg' , array(
    'default'     => "#ffcc33",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_button_bg', array(
        'description'        => __( 'Button Background', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);
$wp_customize->add_setting( 'maxx_button_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_button_col', array(
        'description'        => __( 'Button Color', 'maxx' ),
        'section'      => 'maxx_header',
		)
	)
);