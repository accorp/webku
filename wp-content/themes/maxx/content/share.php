    <!-- SHARING -->
	<div class="footer_share">
	    <div class="infooter_share">
    	<?php 
			if ( is_singular() ) {  
			    if (have_posts()):
				    while (have_posts()): the_post(); 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'slide', true);
						if (has_post_thumbnail()) { 
                            echo '<div class="infooter_img" style="background-image: url('. esc_attr( $thumb_url[0] ) .');">';
					    	echo '</div>';							
						} else {
							if ( get_theme_mod('maxx_default_thumbnail') != "" ) {
								echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_mod('maxx_default_thumbnail_share') ).');">';
								echo '</div>';
							} else {
								echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_file_uri('images/share.jpg') ).');">';
								echo '</div>';
							}
						}
					endwhile;
				endif; 
		    } else if ( is_page() ) { 
			    if (have_posts()):
				        while (have_posts()): the_post(); 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'slide', true);
						if (has_post_thumbnail()) { 
                            echo '<div class="infooter_img" style="background-image: url('. esc_attr( $thumb_url[0] ) .');">';
					    	echo '</div>';							
						} else {
							if ( get_theme_mod('maxx_default_thumbnail') != "" ) {
								echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_mod('maxx_default_thumbnail_share') ).');">';
								echo '</div>';
							} else {
								echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_file_uri('images/share.jpg') ).');">';
								echo '</div>';
							}
						}
					endwhile;
				endif; 
			} else {
			    if ( get_theme_mod('maxx_default_thumbnail_share') != "" ) {
		        	echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_mod('maxx_default_thumbnail_share') ).');">';
					echo '</div>';
				} else {
					echo '<div class="infooter_img" style="background-image: url('. esc_attr( get_theme_file_uri('images/share.jpg') ).');">';
					echo '</div>';
				}
			} 
			if ( is_front_page() ) {
				echo '<div class="infooter_title">';
				bloginfo('name');
				echo '</div>';
			} else {
				echo '<div class="infooter_title">';
				wp_title('');
				echo '</div>';
		    }
		?>
		</div>
	
	<div class="infooter_icon">
		<a href="https://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php wp_title() ?>" target="_blank" title="<?php echo esc_html_e('Share to Facebook', 'maxx'); ?>">
		    <i class="icon-facebook"></i>
		</a>
		<a href="https://twitter.com/home?status=<?php wp_title() ?> <?php the_permalink() ?>" target="_blank" title="<?php echo esc_html_e('Share to Twitter', 'maxx'); ?>">
			<i class="icon-twitter"></i>
		</a>
		<a class="web_wa" target="_blank" href="https://wa.me/send?text=<?php wp_title() ?> <?php the_permalink() ?>" title="<?php echo esc_html_e('Share to WhatsApp', 'maxx'); ?>">
			<i class="icon-whatsapp"></i>
		</a>
		<a class="mob_wa" target="_blank" href="https://api.whatsapp.com/send?text=<?php is_front_page() ? bloginfo('name') : wp_title(''); ?> <?php echo rawurlencode( home_url($wp->request) ); ?>" title="<?php echo esc_html_e('Share to WhatsApp', 'maxx'); ?>">
			<i class="icon-whatsapp"></i>
		</a>
		<a href="https://t.me/share/url?url=<?php the_permalink() ?>&text=<?php wp_title() ?>" target="_blank" title="<?php echo esc_html_e('Share to Telegram', 'maxx'); ?>">
			<i class="icon-telegram"></i>
		</a>
	</div>
	</div>