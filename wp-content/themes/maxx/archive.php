<?php get_header(); ?>
	
	<div class="area_content">
		<div class="area_content_outer maxx_clear">
		    <div class="area_primary">
		        <?php 
			    echo '<h1 class="archive_head">';
			    if ( is_category() ) {
				    echo single_cat_title('', false);
			    } else if ( is_tag() ) {
				    echo sprintf( __( 'Tag : %s', 'maxx' ), single_tag_title('', false) );
			    } else if ( is_author() ) {
			   	    echo sprintf( __( 'Author : %s', 'maxx' ), esc_html( $userdata->display_name ) );
			    } else if ( is_day() ) {
				    echo esc_html( get_the_time('d F Y') );
			    } else if ( is_month() ) {
				    echo esc_html( get_the_time('F Y') );
			    } else if ( is_year() ) {
				    echo esc_html( get_the_time('Y') );
			    }
			    echo '</h1>';
				
				echo '<div class="nav_breadcrumb"><div class="breadcrumb_inner">';
				theme_nav_breadcrumb();
				echo '</div></div>';
			    
				get_template_part('content/looping');
				get_template_part('content/pagination');
				?>
				<div class="archive_widget">
		    	<?php
			    	if ( is_active_sidebar( 'widget-archive' ) ) {
						dynamic_sidebar( 'widget-archive' );
					}
				?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>