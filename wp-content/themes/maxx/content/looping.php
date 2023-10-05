<?php
	if ( have_posts() ) { 
		echo '<div class="late_news maxx_clear publication-list">';
	    while ( have_posts() ) : the_post();
		?>     
			<div class="loop_classic maxx_clear <?php echo get_theme_mod('maxx_loop_mode', 'with_shadow'); ?>">
				    <div class="classic_img">
					    <a href="<?php the_permalink(); ?>">
					    <?php 
					    if (has_post_thumbnail()) { 
						    the_post_thumbnail('midsmall', array(
						    	'alt' => trim(strip_tags($post->post_title)),
						    	'title' => trim(strip_tags($post->post_title)),
					    	)); 
					    } else {
							if ( get_theme_mod('maxx_default_thumbnail') != "" ) {
								$normal = attachment_url_to_postid( get_theme_mod('maxx_default_thumbnail'));
								$shownormal = wp_get_attachment_image_url( $normal, 'midsmall' );
								echo '<img src="'. esc_url( $shownormal ) .'"/>';
							} else {
			    	        	 echo '<img src="'. esc_url( get_template_directory_uri() ).'/images/thumb.jpg"/>';
							}
						} ?>
						</a>
					</div>
				    <div class="classic_over">
					    <div class="classic_author maxx_clear <?php echo get_theme_mod('maxx_loop_avatar', 'with_avatar'); ?>">
						    <?php 
							    if ( get_theme_mod('maxx_loop_avatar') !== 'without_avatar' ) {
									echo get_avatar( get_the_author_meta( 'ID' ), 35 );
								}
							?>
							<div class="loop_author">
					        	<span class="span_author"><?php the_author(); ?></span>
								<span class="span_time"><?php timepublish_post(); ?> / <?php the_category(' '); ?></span>
							</div>
						</div>
						<div class="classic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					</div>
			</div>
		<?php
		endwhile; 
		echo '</div>';
	} else {
		echo '<div class="area_404">';
		echo '<div class="ooops">Oops!</div>';
		echo '<div class="description_404">'. __( 'No posts found', 'maxx' ) .'</div>';
		echo '</div>';
	}
	