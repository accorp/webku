<?php
$wp_customize->add_section('maxx_running',array(
    'title'       => __( 'Running Text', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting( 'maxx_run_spanbg' , array(
    'default'     => "#ffcc33",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_run_spanbg', array(
		'description'        => __( 'Span Background', 'maxx' ),
        'section'      => 'maxx_running',
		)
	)
);
$wp_customize->add_setting( 'maxx_run_spancol' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_run_spancol', array(
		'description'        => __( 'Span Color', 'maxx' ),
        'section'      => 'maxx_running',
		)
	)
);
$wp_customize->add_setting( 'maxx_run_link' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_run_link', array(
		'description'        => __( 'Link Color', 'maxx' ),
        'section'      => 'maxx_running',
		)
	)
);