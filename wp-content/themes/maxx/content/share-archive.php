    <!-- SHARING -->
	<div class="share">
		<a href="https://facebook.com/share.php?u=<?php echo rawurlencode( home_url($wp->request) ); ?>&amp;t=<?php the_title() ?>" target="_blank" title="<?php echo esc_html_e('Share to Facebook', 'maxx'); ?>">
		    <i class="icon-facebook"></i>
		</a>
		<a href="https://twitter.com/home?status=<?php the_title() ?> <?php echo rawurlencode( home_url($wp->request) ); ?>" target="_blank" title="<?php echo esc_html_e('Share to Twitter', 'maxx'); ?>">
			<i class="icon-twitter"></i>
		</a>
		<a class="web_wa" target="_blank" href="https://wa.me/send?text=<?php the_title() ?> <?php echo rawurlencode( home_url($wp->request) ); ?>" title="<?php echo esc_html_e('Share to WhatsApp', 'maxx'); ?>">
			<i class="icon-whatsapp"></i>
		</a>
		<a class="mob_wa" target="_blank" href="https://api.whatsapp.com/send?text=<?php the_title() ?> <?php echo rawurlencode( home_url($wp->request) ); ?>" title="<?php echo esc_html_e('Share to WhatsApp', 'maxx'); ?>">
			<i class="icon-whatsapp"></i>
		</a>
		<a href="https://t.me/share/url?url=<?php echo rawurlencode( home_url($wp->request) ); ?>&text=<?php the_title() ?>" target="_blank" title="<?php echo esc_html_e('Share to Telegram', 'maxx'); ?>">
			<i class="icon-telegram"></i>
		</a>
	</div>