<?php get_header(); ?>
    
	<div class="nav_breadcrumb">
	    <div class="breadcrumb_inner">
	        <?php theme_nav_breadcrumb(); ?>
        </div>
    </div>
	
	<?php
        if (have_posts()):
	    	while (have_posts()): the_post(); 
			?>
			
			<div class="area_content">
		    	<div class="area_content_outer maxx_clear">
				    
					<!-- Left Content -->
					<div class="area_primary">
					    <div class="primary_content">
						    
							<div class="area_title">
							    <h1 class="maxx_the_title"><?php the_title(); ?></h1>
							</div>
							
							<?php settViews(get_the_ID()); ?>
							
							<div class="primary_big">
				                
					    		<div class="primary_featured">
							    	<?php 
									    // Featured Image
								    	if (has_post_thumbnail()) {
											the_post_thumbnail('full');
										}
									?>
							    </div>
							
						    	<div class="maxx_article maxx_clear">
							        <?php the_content(); ?>
						    	</div>
								
							</div>
							
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
		
		<?php 
		endwhile; 
	    endif; 
	?>
	
<?php get_footer(); ?>