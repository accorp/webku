<?php
    if ( get_theme_mod( 'maxx_footer_trends' ) == '-1 days' ) {
		$rangetime = '-1 days';
		$namerange = __('this day', 'maxx');
	} else if ( get_theme_mod( 'maxx_footer_trends' ) == '-7 days' ) {
		$rangetime = '-7 days';
		$namerange = __('this week', 'maxx');
	} else {
		$rangetime = '-30 days';
		$namerange = __('this month', 'maxx');
	}
	$trend_arg = array( 
    	'post_type' => 'post', 
		'numberposts' => 10,
		'ignore_sticky_posts' => 1,
		'post_status'       => 'publish',
		'meta_key'          => 'post_views_count',
		'orderby'           => 'meta_value_num',
		'date_query'        => array(
	    	'after'   => $rangetime,
		)
	); 
	global $post;
	$get_trend = get_posts($trend_arg);
	if ( !empty( $get_trend ) ) { 
		echo '<div class="mobile_trend">';
	    foreach ($get_trend as $post):
		?>     
			<div class="trend_list">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		<?php
		endforeach; 
		echo '</div>';
	} else {
		echo '<div class="mobile_trend">';
		echo sprintf(__('No new posts found %s', 'maxx'), $namerange );
		echo '</div>';
	}
	