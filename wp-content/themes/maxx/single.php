<?php 
    get_header();
	
	if (have_posts()):
	    while (have_posts()): the_post(); 
		global $post;
		$maxx_video_embed = get_post_meta($post->ID, 'maxx_video_embed', true);
		$maxx_editor_name = get_post_meta($post->ID, 'maxx_editor_name', true);
	    $maxx_news_source = get_post_meta($post->ID, 'maxx_news_source', true);
		?>
		
		<div class="nav_breadcrumb">
	    	<div class="breadcrumb_inner">
		    	<?php theme_nav_breadcrumb(); ?>
			</div>
		</div>
		<div class="area_content">
			<div class="area_primary">
				<div class="primary_content">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    <?php settViews(get_the_ID()); ?>
						<div class="primary_big">
						
						    <div class="single_author maxx_clear">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
								<div class="data_author">
									<div class="name_author"><span><?php the_author(); ?></span> <?php echo __('on', 'maxx'); ?> <span><?php the_category(' '); ?></span></div>
									<div class="single_time"><?php echo esc_html(get_the_date('j M Y H:i') ); ?> - <span><?php echo sprintf( __( '%s reading', 'aktual' ), reading_time() ); ?></span></div>
								</div>
							</div>
							
						    <h1 class="the_title"><?php the_title(); ?></h1>
				           
					    	<?php 
								if ($maxx_video_embed == !'') {
									echo '<div class="primary_featured primary_video">';
									// Show Video
									echo wp_oembed_get( $maxx_video_embed );
									echo '</div>';
								} else {
									    echo '<div class="primary_featured">';
									    // Show Featured Image
										if (has_post_thumbnail()) {
											the_post_thumbnail('full');
											if (get_the_post_thumbnail_caption()) {
											    echo '<div class="maxx_caption">';
											        the_post_thumbnail_caption();
										        echo '</div>';
											}
										}
										echo '</div>';
								}
							?>
							<?php if ( $maxx_editor_name != '' ) { ?>
						    	<div class="the_editor"><strong>Editor :</strong> <em><?php echo $maxx_editor_name; ?></em></div>
							<?php } ?>
							
							<div class="maxx_clear">
						        <div id="videoscroll" class="maxx_article">
							        <?php 
									the_content();
									
									wp_link_pages(array(
								    	'before' => '<p class="page-link-wrap"><span class="halaman-text">Halaman : </span> ',
										'after' => '</p>',
										'next_or_number' => 'next_and_number', # activate parameter overloading
										'nextpagelink' => __('Selanjutnya', 'nomina'),
										'previouspagelink' => __('Sebelumnya', 'nomina'),
										'pagelink' => '%',
									));
									?>
									
									<?php if ( $maxx_news_source != '' ) { ?>
						            	<div class="the_editor"><strong>Sumber :</strong> <em><?php echo $maxx_news_source; ?></em></div>
						         	<?php } ?>
									
									<div class="maxx_tags maxx_clear">
							            <?php the_tags('',''); ?>
									</div>
										
						        </div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
		
		<?php 
		endwhile; 
	endif; 
	
	get_footer();