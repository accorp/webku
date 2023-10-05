<?php
/**
 * Customizer WP maxx
 * Setting tema dari menu Customizer
 */

function maxx_partial_refresh( $wp_customize ) {

    $wp_customize->selective_refresh->add_partial(
		'header_switch',
		array(
			'selector'            => '.header',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_headerswitch',
		)
    );
    $wp_customize->selective_refresh->add_partial(
		'facebook_data',
		array(
			'selector'            => '.maxx_social',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_facebook',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'twitter_data',
		array(
			'selector'            => '.maxx_social',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_twitter',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'instagram_data',
		array(
			'selector'            => '.maxx_social',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_instagram',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'youtube_data',
		array(
			'selector'            => '.maxx_social',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_youtube',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_footer_logo',
		array(
			'selector'            => '.maxx_footer_logo',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_footerlogo',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_footer_text',
		array(
			'selector'            => '.maxx_footer_text',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_footertext',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_left_floating',
		array(
			'selector'            => '.left_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_floatingleft',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_right_floating',
		array(
			'selector'            => '.right_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_floatingright',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_ads_afterheader',
		array(
			'selector'            => '.header_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_headerads',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'inline_rel_ads',
		array(
			'selector'            => '.rel_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_relads',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_ads_beforefooter',
		array(
			'selector'            => '.footer_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_beforefooter',
		)
    );
	
	$wp_customize->selective_refresh->add_partial(
		'maxx_ads_bottom',
		array(
			'selector'            => '.bottom_ads',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_bottomads',
		)
    );
	$wp_customize->selective_refresh->add_partial(
		'maxx_footer_copyright',
		array(
			'selector'            => '.copyright',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_copyright',
		)
    );
	
	$wp_customize->selective_refresh->add_partial(
		'loop_by_user',
		array(
			'selector'            => '.loop-post',
			'container_inclusive' => false,
			'render_callback'     => 'maxx_customize_partial_loopbyuser',
		)
    );

}
add_action( 'customize_register', 'maxx_partial_refresh', 11 );