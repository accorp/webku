<?php get_header(); ?>
    
	<div class="area_content">
		<div class="area_content_outer maxx_clear">
		    <div class="area_primary">
		        <h1 class="archive_head">
			    	<?php 
				    	echo esc_html_e('Search : ', 'maxx');
				    	the_search_query();
			    	?>
		    	</h1>
		    	<?php 
				
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