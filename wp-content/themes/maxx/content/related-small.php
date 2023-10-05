        <?php
            $args = array(
			    'post_type' => 'post', 
			    'posts_per_page' => 6, 
				'post__not_in' => array($post->ID), 
				'orderby' => 'rand',
			);
		    query_posts($args);?>
					
			<div class="related_small"><?php echo esc_html_e( 'Related posts', 'maxx' ); ?></div>
				
			<div class="small_list maxx_clear">
				<?php 
					if (have_posts()):
	                    while (have_posts()): the_post(); 	
						?>
						
					    	<div class="small_post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
						    
					    <?php
				    	endwhile; 
			    	endif;
				?>
			</div>
			
			<?php 
			wp_reset_query();