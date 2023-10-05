<?php
function maxx_customize_color( $wp_customize ) {

}
add_action( 'customize_register', 'maxx_customize_color', 11 );

function maxx_customize_css() {
    ?>
    <style type="text/css">
        body { 
	    	background: <?php echo esc_html( get_theme_mod('maxx_body_bg', "#ffffff") ); ?>; 
			color: <?php echo esc_html( get_theme_mod('maxx_body_col', "#111111") ); ?>; 
		}
		.footer_share,
		.area_secondary {
			background: <?php echo esc_html( get_theme_mod('maxx_body_bg', "#ffffff") ); ?>; 
		}
		.infooter_title {
			color: <?php echo esc_html( get_theme_mod('maxx_body_col', "#111111") ); ?>; 
		}
		.infooter_icon i {
			color: <?php echo esc_html( get_theme_mod('maxx_body_bg', "#ffffff") ); ?>; 
			background: <?php echo esc_html( get_theme_mod('maxx_body_col', "#111111") ); ?>; 
		}
		a { 
	    	color: <?php echo esc_html( get_theme_mod('maxx_body_link', "#444444") ); ?>; 
		}
		.header,
		.maxx_logo,
		.maxx_social { 
	    	background: <?php echo esc_html( get_theme_mod('maxx_header_bg', "#111111") ); ?>; 
		}
		.maxx_social i {
			background: <?php echo esc_html( get_theme_mod('maxx_header_icon_bg', "") ); ?> !important; 
			color: <?php echo esc_html( get_theme_mod('maxx_header_icon_col', "") ); ?> !important; 
		}
		.maxx_form_search { 
	    	background: <?php echo esc_html( get_theme_mod('maxx_search_bg', "#eeeeee") ); ?>; 
			border: 1px solid <?php echo esc_html( get_theme_mod('maxx_search_border', "#444444") ); ?>; 
		}
		.maxx_input input[type="text"]  {
			background: <?php echo esc_html( get_theme_mod('maxx_search_bg', "#eeeeee") ); ?>; 
			color: <?php echo esc_html( get_theme_mod('maxx_search_col', "#111111") ); ?>;
		}
		.maxx_button { 
			color: <?php echo esc_html( get_theme_mod('maxx_button_col', "#111111") ); ?>;
			background: <?php echo esc_html( get_theme_mod('maxx_button_bg', "#ffcc33") ); ?>;
		}
		.maxx_flat_menu {
			background: <?php echo esc_html( get_theme_mod('maxx_mainmenu_bg', "#ffffff") ); ?>; 
			border-top: 1px solid <?php echo esc_html( get_theme_mod('maxx_mainmenu_border', "#ffffff") ); ?>; 
			color: <?php echo esc_html( get_theme_mod('maxx_mainmenu_acc', "#111111") ); ?>; 
		}
		.nav  {
			background: <?php echo esc_html( get_theme_mod('maxx_mainmenu_bg', "#ffffff") ); ?>; 
		}
		.nav .accordion li.menu-item-has-children:before {
			background: <?php echo esc_html( get_theme_mod('maxx_mainmenu_acc', "#444444") ); ?>; 
		}
		.nav .accordion a,
		.mobile_icon i {
			color: <?php echo esc_html( get_theme_mod('maxx_mainmenu_col', "#111111") ); ?>; 
		}
	    .mobile_icon	{
			color: <?php echo esc_html( get_theme_mod('maxx_mainmenu_col', "#111111") ); ?> !important; 
		}
		.nav .accordion li > .sub-menu {
			background: <?php echo esc_html( get_theme_mod('maxx_submenu_bg', "#ffffff") ); ?> !important; 
		}
		.nav .accordion li > .sub-menu > li a {
			color: <?php echo esc_html( get_theme_mod('maxx_submenu_col', "#111111") ); ?> !important; 
		}
		.runtime {
			background: <?php echo esc_html( get_theme_mod('maxx_run_spanbg', "#ffcc33") ); ?>; 
			color: <?php echo esc_html( get_theme_mod('maxx_run_spancol', "#111111") ); ?>; 
		}
		.scrollin a {
			color: <?php echo esc_html( get_theme_mod('maxx_run_link', "#111111") ); ?>; 
		}
		
		.loop_classic {
			background: <?php echo esc_html( get_theme_mod('maxx_loop_bg_col', "#ffffff") ); ?>; 
		}
		.span_author {
			color: <?php echo esc_html( get_theme_mod('maxx_loop_author', "#111111") ); ?>; 
		}
		.span_time {
			color: <?php echo esc_html( get_theme_mod('maxx_loop_date', "#444444") ); ?>; 
		}
		.span_time a {
			color: <?php echo esc_html( get_theme_mod('maxx_loop_cat', "#111111") ); ?>; 
		}
		.classic_title a {
			color: <?php echo esc_html( get_theme_mod('maxx_loop_title', "#111111") ); ?>; 
		}
		.pagination a {
			background: <?php echo esc_html( get_theme_mod('maxx_page_bg', "#ffffff") ); ?>;
			color: <?php echo esc_html( get_theme_mod('maxx_page_col', "#111111") ); ?>;
			border: 2px solid <?php echo esc_html( get_theme_mod('maxx_page_bor', "#111111") ); ?>;
		}
		.pagination a.active {
			background: <?php echo esc_html( get_theme_mod('maxx_actpage_bg', "#ffffff") ); ?>;
			color: <?php echo esc_html( get_theme_mod('maxx_actpage_col', "#111111") ); ?>;
			border: 2px solid <?php echo esc_html( get_theme_mod('maxx_actpage_bor', "#dd3355") ); ?>;
		}
		
		
		
		
		
		
		
		
		
		
		
		
		.area_secondary .widget_block h1,
        .area_secondary .widget_block h2,
        .area_secondary .widget_block h3,
        .area_secondary .widget_block h4,
        .area_secondary .widget_block h5,
        .area_secondary .widget_block h6 {
			color: <?php echo esc_html( get_theme_mod('maxx_side_head', "#111111") ); ?>; 
		}
		.area_secondary {
			color: <?php echo esc_html( get_theme_mod('maxx_side_col', "#111111") ); ?>; 
		}
		.area_secondary a {
			color: <?php echo esc_html( get_theme_mod('maxx_side_link', "#111111") ); ?>; 
		}
		.area_secondary .late__time a {
			color: <?php echo esc_html( get_theme_mod('maxx_side_acc', "#444444") ); ?>; 
		}
		
		
		.the_title {
			color: <?php echo esc_html( get_theme_mod('maxx_single_head', "#111111") ); ?>; 
		}
		.primary_big  {
			color: <?php echo esc_html( get_theme_mod('maxx_single_col', "#111111") ); ?>; 
		}
		
		.single_time span {
			color: <?php echo esc_html( get_theme_mod('maxx_single_acc', "#444444") ); ?>; 
		}
		
		.primary_featured,
		.classic_img,
		.late_list_img {
			border-radius: <?php echo esc_html( get_theme_mod('maxx_round_img', "8px") ); ?>;
		}
		
		.maxxfooter {
			background: <?php echo esc_html( get_theme_mod('maxx_footarea_bg', "#ffffff") ); ?>; 
			color: <?php echo esc_html( get_theme_mod('maxx_footarea_col', "#111111") ); ?>; 
		}
		.logofooter a {
			color: <?php echo esc_html( get_theme_mod('maxx_footarea_link', "#444444") ); ?>; 
		}
		
		@media screen and (max-width: 982px) {
			
		}
		
		
		
		
		
    </style>
    <?php
}
add_action( 'wp_head', 'maxx_customize_css');