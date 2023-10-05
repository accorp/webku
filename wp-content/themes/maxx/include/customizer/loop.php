<?php
$wp_customize->add_section('maxx_postloop',array(
    'title'       => __( 'Post Archive', 'maxx' ),
    'priority'    => 10,
    'panel'       => 'maxx_setting_customizer',
));
$wp_customize->add_setting('maxx_hidden_l1',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_l1',array(
	'description'  => __('<div class="headsetting">Box Post Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_hidden_l1',
));

$wp_customize->add_setting('maxx_loop_mode',array(
    'default'     => 'with_shadow',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_loop_mode',array(
	'description'  => __( 'Box Style', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'with_shadow'      => __( 'Box With Shadow', 'maxx' ),
		'without_shadow'   => __( 'Box Without Shadow', 'maxx' ),
	),
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_loop_mode',
));

$wp_customize->add_setting('maxx_loop_avatar',array(
    'default'     => 'with_avatar',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_loop_avatar',array(
	'description'  => __( 'Author Avatar', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'with_avatar'      => __( 'Show Avatar', 'maxx' ),
		'without_avatar'   => __( 'Hide Avatar', 'maxx' ),
	),
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_loop_avatar',
));

$wp_customize->add_setting('maxx_hidden_lcol',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_lcol',array(
	'description'  => __('<div class="headsetting">Box Color Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_hidden_lcol',
));

$wp_customize->add_setting( 'maxx_loop_bg_col' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_loop_bg_col', array(
		'description'        => __( 'Background', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_loop_author' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_loop_author', array(
		'description'        => __( 'Author Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_loop_date' , array(
    'default'     => "#444444",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_loop_date', array(
		'description'        => __( 'Date Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_loop_cat' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_loop_cat', array(
		'description'        => __( 'Category Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_loop_title' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_loop_title', array(
		'description'        => __( 'Title Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);


$wp_customize->add_setting('maxx_hidden_lpag',array(
    'default'     => '',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_hidden_lpag',array(
	'description'  => __('<div class="headsetting">Pagination Setting</div>', 'maxx'),
    'type'         => 'hidden',
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_hidden_lpag',
));
$wp_customize->add_setting('maxx_paged_dir',array(
    'default'     => 'center_paged',
	'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control('maxx_paged_dir',array(
	'description'  => __( 'Position', 'maxx' ),
    'type'         => 'select',
	'choices'     => array(
		'center_paged' => __( 'Center', 'maxx' ),
		'left_paged'   => __( 'Left', 'maxx' ),
	),
    'section'      => 'maxx_postloop',
    'settings'     => 'maxx_paged_dir',
));
$wp_customize->add_setting( 'maxx_page_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_page_bg', array(
		'description'        => __( 'Background', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_page_bor' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_page_bor', array(
		'description'        => __( 'Border Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_page_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_page_col', array(
		'description'        => __( 'Text Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);

$wp_customize->add_setting( 'maxx_actpage_bg' , array(
    'default'     => "#ffffff",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_actpage_bg', array(
		'description'        => __( 'Active Background', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_actpage_bor' , array(
    'default'     => "#dd3355",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_actpage_bor', array(
		'description'        => __( 'Active Border Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);
$wp_customize->add_setting( 'maxx_actpage_col' , array(
    'default'     => "#111111",
    'transport'   => 'refresh',
	'sanitize_callback' => 'wp_kses_post'
));
$wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'maxx_actpage_col', array(
		'description'        => __( 'Active Text Color', 'maxx' ),
        'section'      => 'maxx_postloop',
		)
	)
);

















