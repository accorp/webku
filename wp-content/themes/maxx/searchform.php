<div class="maxx_form_search">
	<form method="get" id="searchpost" action="<?php bloginfo('url'); ?>">
		<div class="maxx_input">
		    <input name="s" type="text" placeholder="<?php echo esc_attr_e( 'Search...', 'maxx' ); ?>" value="" />
			<input name="post_type" type="hidden" value="post" />
		</div>
		<div class="maxx_button">
			<button type="submit" aria-label="<?php echo esc_attr_e( 'Search...', 'maxx' ); ?>"><i class="icon-search"></i></button>
		</div>
	</form>
</div>
