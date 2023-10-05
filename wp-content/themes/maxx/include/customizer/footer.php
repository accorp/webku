<?php
$wp_customize->add_section('maxx_setting_footertext',array(
    'title'       => __( 'Footer Area', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));

$wp_customize->add_setting('maxx_hidden_ff8',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_ff8',array(
	'description'  => __('<div class="headsetting">Color Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_setting_footertext',
    'settings'     => 'maxx_hidden_ff8',
));
$wp_customize->add_setting( 'maxx_footarea_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_footarea_bg', array(
        'description'  => __( 'Background', 'maxx' ),
        'section'      => 'maxx_setting_footertext',
		)
	)
);
$wp_customize->add_setting( 'maxx_footarea_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_footarea_col', array(
        'description'  => __( 'Text Color', 'maxx' ),
        'section'      => 'maxx_setting_footertext',
		)
	)
);
$wp_customize->add_setting( 'maxx_footarea_link' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_footarea_link', array(
        'description'  => __( 'Link Color', 'maxx' ),
        'section'      => 'maxx_setting_footertext',
		)
	)
);