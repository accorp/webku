<?php get_header(); ?>

	<div class="area_content maxx_clear">
		    <div class="area_primary">
		    	<div class="home_widget">
		    	<?php
			    	if ( is_front_page() && !is_paged() ) {
						if ( is_active_sidebar( 'widget-home' ) ) {
							dynamic_sidebar( 'widget-home' );
						}
					}
				?>
				</div>
				<?php 
			    	get_template_part('content/looping');
					get_template_part('content/pagination');
				?>
			</div>
			<?php  get_sidebar(); ?>
	</div>

<?php get_footer(); ?>