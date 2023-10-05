<?php get_header(); ?>

	<div class="area_content">
		<div class="area_content_outer maxx_clear">
		    <div class="area_primary">
			    <div class="area_404">
				    <div class="ooops">Oops!</div>
		            <h1 class="archive_404 head_404"><?php echo __( '404, Page Not Found', 'maxx' ); ?></h1>
			        <div class="description_404"><?php echo __( 'this page not found or link you visit is expired', 'maxx' ); ?></div>
		    	</div>
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
