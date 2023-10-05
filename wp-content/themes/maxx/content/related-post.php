        <?php
            $args = array(
			    'post_type' => 'post', 
			    'posts_per_page' => 6, 
				'post__not_in' => array($post->ID), 
				'orderby' => 'rand',
			);
		    query_posts($args);?>
					
			<h3 class="related_heads"><?php echo esc_html_e( 'Related posts', 'maxx' ); ?></h3>
				
			<div class="related_list maxx_clear">
				<?php 
				    $relcount = 0;
					if (have_posts()):
	                    while (have_posts()): the_post(); 	
						$relcount++;
						?>
						
					    	<div class="rel_post">
							    <div class="rel_inner">
								    <a href="<?php the_permalink() ?>" class="rel_img">
								    <?php 
									    // Featured Image
								    	if (has_post_thumbnail()) {
											the_post_thumbnail('berita');
										}  else {
											if ( get_theme_mod('maxx_default_thumbnail') != "" ) {
												$original = attachment_url_to_postid( get_theme_mod('maxx_default_thumbnail'));
												$showoriginal = wp_get_attachment_image_url( $original, 'berita' );
												echo '<img src="'. esc_url( $showoriginal ) .'"/>';
											} else {
			    	        				    echo '<img src="'. esc_url( get_template_directory_uri() ).'/images/share.jpg"/>';
											}
										}
									?>
									</a>
									<div class="rel_time"><?php timepublish_post(); ?></div>
						        	<div class="rel_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
								</div>
						    </div>
					    	<div class="rel_post<?php echo $relcount; ?> maxx_clear"></div>

					    <?php
				    	endwhile; 
			    	endif;
				?>
			</div>
			
			<?php 
			wp_reset_query();