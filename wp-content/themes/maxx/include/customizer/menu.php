<?php
$wp_customize->add_section('maxx_mainmenu',array(
    'title'       => __( 'Menu Header', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_m1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_m1',array(
	'description'  => __('<div class="headsetting">Menu Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_mainmenu',
    'settings'     => 'maxx_hidden_m1',
));
$wp_customize->add_setting('maxx_menu_date',array(
    'default'     => 'date_right',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_menu_date',array(
	'description'  => __( 'Date Position', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'date_left'      => __( 'Date on Left', 'maxx' ),
		'date_right'      => __( 'Date on Right', 'maxx' ),
	),
    'section'      => 'maxx_mainmenu',
    'settings'     => 'maxx_menu_date',
));
$wp_customize->add_setting( 'maxx_mainmenu_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_mainmenu_bg', array(
		'description'        => __( 'Background', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);
$wp_customize->add_setting( 'maxx_mainmenu_border' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_mainmenu_border', array(
		'description'        => __( 'Border Top Color', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);
$wp_customize->add_setting( 'maxx_mainmenu_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_mainmenu_col', array(
		'description'        => __( 'Menu Color', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);
$wp_customize->add_setting( 'maxx_mainmenu_acc' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_mainmenu_acc', array(
		'description'        => __( 'Accent Color', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);
$wp_customize->add_setting( 'maxx_submenu_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_submenu_bg', array(
		'description'        => __( 'Submenu Background', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);
$wp_customize->add_setting( 'maxx_submenu_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_submenu_col', array(
		'description'        => __( 'Submenu Color', 'maxx' ),
        'section'      => 'maxx_mainmenu',
		)
	)
);

