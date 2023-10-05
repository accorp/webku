<?php
function maxx_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'maxx_upgrade_notice' );
}
add_action( 'after_switch_theme', 'maxx_switch_theme' );

function maxx_upgrade_notice() {
	$message = sprintf( 
	    /* translators: %s: WordPress version. */
	    __( 'Maxx need at least WordPress version 6.1. Your current version is %s.', 'maxx' ), $GLOBALS['wp_version'] 
	);
	printf( '<div class="error"><p>%s</p></div>', esc_html( $message ) );
}

function maxx_customize() {
	wp_die( sprintf( 
	    /* translators: %s: WordPress version. */
	    esc_html( 'Maxx need at least WordPress version 6.1. Your current version is %s.', 'maxx' ), esc_html( $GLOBALS['wp_version'] ) 
		), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'maxx_customize' );

function maxx_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( 
		    /* translators: %s: WordPress version. */
	    	esc_html( 'Maxx need at least WordPress version 6.1. Your current version is %s.', 'maxx' ), esc_html( $GLOBALS['wp_version'] ) ) 
		);
	}
}
add_action( 'template_redirect', 'maxx_preview' );
