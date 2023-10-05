<?php
$wp_customize->add_section('maxx_sidebar',array(
    'title'       => __( 'Right Sidebar', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_s1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_s1',array(
	'description'  => __('<div class="headsetting">Sidebar Color Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_sidebar',
    'settings'     => 'maxx_hidden_s1',
));
$wp_customize->add_setting( 'maxx_side_head' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_side_head', array(
		'description'        => __( 'Heading Color', 'maxx' ),
        'section'      => 'maxx_sidebar',
		)
	)
);
$wp_customize->add_setting( 'maxx_side_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_side_col', array(
		'description'        => __( 'Text Color', 'maxx' ),
        'section'      => 'maxx_sidebar',
		)
	)
);
$wp_customize->add_setting( 'maxx_side_acc' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_side_acc', array(
		'description'        => __( 'Accent Color', 'maxx' ),
        'section'      => 'maxx_sidebar',
		)
	)
);
$wp_customize->add_setting( 'maxx_side_link' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_side_link', array(
		'description'        => __( 'Link Color', 'maxx' ),
        'section'      => 'maxx_sidebar',
		)
	)
);