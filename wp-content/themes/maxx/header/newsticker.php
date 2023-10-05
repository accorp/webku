        <div class="runscroll">
	        <div class="scroll text4">
			    <div class="scrollin">
                    <?php
						$break_args = array( 
							'post_type' => 'post', 
							'numberposts' => 10,
						); 
						global $post;
						$break_news = get_posts($break_args);
						foreach ($break_news as $post):
						    setup_postdata($post); 
							?>
								<div class="runin">
									<span class="runtime"><?php echo the_time(); ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							<?php
						endforeach;
						wp_reset_query(); 
					?>
                </div>
				<div class="scrollin">
                    <?php
						$break_args = array( 
							'post_type' => 'post', 
							'numberposts' => 10,
						); 
						global $post;
						$break_news = get_posts($break_args);
						foreach ($break_news as $post):
						    setup_postdata($post); 
							?>
								<div class="runin">
									<span class="runtime"><?php echo the_time(); ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							<?php
						endforeach;
						wp_reset_query(); 
					?>
                </div>
			</div>
		</div>