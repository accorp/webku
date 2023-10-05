<?php
$wp_customize->add_section('maxx_single',array(
    'title'       => __( 'Single Post', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_sg4',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_sg4',array(
	'description'  => __('<div class="headsetting">Color Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_single',
    'settings'     => 'maxx_hidden_sg4',
));
$wp_customize->add_setting( 'maxx_single_head' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_single_head', array(
		'description'        => __( 'Heading Color', 'maxx' ),
        'section'      => 'maxx_single',
		)
	)
);
$wp_customize->add_setting( 'maxx_single_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_single_col', array(
		'description'        => __( 'Text Color', 'maxx' ),
        'section'      => 'maxx_single',
		)
	)
);
$wp_customize->add_setting( 'maxx_single_acc' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_single_acc', array(
		'description'        => __( 'Accent Color', 'maxx' ),
        'section'      => 'maxx_single',
		)
	)
);