<?php

// WordPress Minimum Version
if ( version_compare( $GLOBALS['wp_version'], '5.8', '<' ) ) {
	require get_template_directory() . '/include/back-compat.php';
}

// Theme Translation Folder
load_theme_textdomain( 'maxx', get_template_directory() . '/languages' );

// Global Width Content
function the_global_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_global_content_width', 840 );
}
add_action( 'after_setup_theme', 'the_global_content_width', 0 );

// Theme Setup Activation
if ( ! function_exists( 'the_berita_setup' ) ) :
    function the_berita_setup() {
		
		// Head Title
    	add_theme_support( 'title-tag' );
		// Custom Logo
		add_theme_support( 'custom-logo', array(
	    	'height'      => 240,
	    	'width'       => 600,
	    	'flex-height' => true,
    	) );
		// Thumbnail Size;
	    add_theme_support( 'post-thumbnails' );
		add_image_size( 'berita', 320, 240, true );
		add_image_size( 'slide', 600, 450, true );
		add_image_size( 'small', 80, 60, true );
    	add_image_size( 'midsmall', 120, 120, true );
		
		add_theme_support( 'html5', array(
	    	'search-form', 'comment-form', 'comment-list',
    	));
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'automatic-feed-links' );
		add_filter('embed_oembed_html', 'responsive_embed', 10, 3);
		
		// Navigation
		register_nav_menus(array(
	    	'navigation' => __( 'Location Header Navigation', 'maxx' ),
    	));
		register_nav_menus(array(
	    	'footerone' => __( 'Location Footer', 'maxx' ),
    	));
		
    }

endif;
add_action( 'after_setup_theme', 'the_berita_setup' );

// Theme Hidden Admin Bar
show_admin_bar( false );

// Cache Update Theme
function berita_feed_cache( $seconds ) {
  return 120;
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'berita_feed_cache' ); 

// Functional Require File
require get_template_directory() . '/include/customizer.php';
require get_template_directory() . '/include/template-tags.php';
require get_template_directory() . '/include/theme-color.php';
require get_template_directory() . '/include/partialrefresh.php';
require get_template_directory() . '/include/custom-fonts.php';
require get_template_directory() . '/include/user-profile.php';
require get_template_directory() . '/include/template-arcs.php';

// Default Post Per Page
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
	update_option( 'posts_per_page', 10 );
}

// Add Theme Pagination
function berita_pagination() {

	if ( is_singular() )
		return;
	global $wp_query;

	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	if ( $paged >= 1 )
		$links[] = $paged;
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? 'active' : 'normal';
		printf( '<a%s href="%s">%s</a>' . "\n", ' class="'. esc_attr( $class ) .'"', esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo ' … ';
	}

	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? 'active' : 'normal';
		printf( '<a%s href="%s">%s</a>' . "\n", ' class="'. esc_attr( $class ) .'"', esc_url( get_pagenum_link( $link ) ), esc_html( $link ) );
	}

	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo ' … ' . "\n";
		$class = $paged == $max ? 'active' : 'normal';
		printf( '<a%s href="%s">%s</a>' . "\n", ' class="'. esc_attr( $class ) .'"', esc_url( get_pagenum_link( $max ) ), esc_html( $max ) );
	}

}

// Single Reading Time
function reading_time() {
	global $post;
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	
	$timer = __( 'minutes', 'maxx' );
	
	$totalreadingtime = $readingtime . ' ' . $timer;

    return $totalreadingtime;
}

// Theme Popular Post
function maxx_popular_posts( $post_id ) {
	$count_key = 'popular_posts';
	$count = get_post_meta( $post_id, $count_key, true );
	if ($count == '') {
		$count = 0;
		delete_post_meta( $post_id, $count_key );
		add_post_meta( $post_id, $count_key, '0' );
	} else {
		$count++;
		update_post_meta( $post_id, $count_key, $count );
	}
}
// Theme Track Popular Post
function maxx_track_posts($post_id) {
	if ( !is_single() ) return;
	if ( empty( $post_id ) ) {
		global $post;
		$post_id = $post->ID;
	}
	maxx_popular_posts( $post_id );
}
add_action('wp_head', 'maxx_track_posts');

// Theme Get View Post
function getViews( $postID ){ 
    $count_key = 'post_views_count'; 
	$count = get_post_meta( $postID, $count_key, true ); 
	
	if( $count == '' ){ 
    	delete_post_meta( $postID, $count_key ); 
    	add_post_meta( $postID, $count_key, '0' ); return "0 View"; 
	} 
	return $count; 
} 

// Theme Set View Post
function settViews( $postID ) { 
    $count_key = 'post_views_count'; 
	$count = get_post_meta( $postID, $count_key, true ); 
	
	if( $count=='' ){ 
    	$count = 0; delete_post_meta( $postID, $count_key ); 
    	add_post_meta( $postID, $count_key, '0' ); 
	} else { 
    	$count++; 
    	update_post_meta( $postID, $count_key, $count ); 
	} 
}

// Theme Smart Excerpt
function new_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

function smart_excerpt( $string, $limit ) {
	$words = explode( " ", $string );
	if ( count( $words ) >= $limit ) {
		$dots = '..';
	} else {
		$dots = '';
	}
	echo implode( " ", array_splice( $words, 0, $limit ) ).esc_html( $dots );
}

// Rest Change Media
function media_rest_change( $result, $server, $request ) {
	$method = $request->get_method();
	if ( 'GET' !== $method ) {
		return $result;
	}

	$url = $request->get_route();
	if ( ! is_user_logged_in() || ( false === strpos( $url, '/wp/v2/media/' ) ) ) {
		return $result;
	}

	if ( 'edit' === $request->get_param( 'context' ) ) {
		$request->set_param( 'context', 'view' );
	}

	return $result;
}
add_filter( 'rest_pre_dispatch', 'media_rest_change', 10, 3 );

// Theme Comment List
function commentslist( $comment, $args, $depth ) { 
    ?>
	
	    <div class="maxx_comment maxx_clear">
		    <div class="comment__avatar">
		        <?php if ( get_avatar( $comment ) ) { ?>
					<?php echo get_avatar( $comment, 40 ); ?>
				<?php } else { ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar.png"/>
				<?php } ?>
			</div>
			<div class="comment__meta">
				<?php if ( $comment->comment_approved == '0' ): ?>
					<p><?php echo esc_html_e( 'Your comment awaiting Admin moderation.', 'maxx' ) ?></p>
					<br/>
				<?php endif; ?>
				<div class="comment__author">
				    <span><?php echo get_comment_author_link(); ?></span><br/><em><?php timepublish_post(); ?></em>
				</div>
				<?php comment_text() ?>
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
			</div>
		</div>
    <?php
}

/**
 * Breadcrumb.
 */
require get_template_directory() . '/include/breadcrumb.php';

/**
 * Post After Publish.
 */
function post_publish_after() {
	if ( ! is_admin() ) {
	global $post;
	$date = get_post_time('G', true, $post);
	
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'year', 'maxx' ), __( 'year', 'maxx' ) ),
		array( 60 * 60 * 24 * 30 , __( 'month', 'maxx' ), __( 'month', 'maxx' ) ),
		array( 60 * 60 * 24 * 7, __( 'week', 'maxx' ), __( 'week', 'maxx' ) ),
		array( 60 * 60 * 24 , __( 'day', 'maxx' ), __( 'day', 'maxx' ) ),
		array( 60 * 60 , __( 'hour', 'maxx' ), __( 'hour', 'maxx' ) ),
		array( 60 , __( 'minute', 'maxx' ), __( 'minute', 'maxx' ) ),
		array( 1, __( 'second', 'maxx' ), __( 'second', 'maxx' ) )
	);

	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}
	
	$current_time = current_time( 'mysql', $gmt = 7 ); // waktu Indonesia GMT + 7
	$newer_date = strtotime( $current_time );

	$since = $newer_date - $date;

	if ( 0 > $since )
		return __( '', 'maxx' );

	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];

		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}

	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
	
	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'second', 'maxx' );
	}
	$output .= __('&nbsp;ago', 'maxx');
	return $output;
    }
}

add_filter('the_time', 'post_publish_after');

/**
 * Comment
 */
function getPostComments($postID){
    $query_post = get_post($postID);
    $num = $query_post->comment_count;
 
    return $num;
}

/**
 * Remove Lazy Load
 */
function my_no_loading_filter( $attr, $attachment, $size ) {
  unset( $attr['loading'] );
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'my_no_loading_filter', 10, 3 );



function maxx_stylescripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$refresh = date_i18n("His");
	wp_enqueue_style('maxx-style', get_stylesheet_uri(), array(), $refresh );
	wp_enqueue_style('maxx-font', get_template_directory_uri().'/css/maxx-font.css', array(), $theme_version );
	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_footer', 'maxx_stylescripts');

function maxx_hidescripts() {
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
}
add_action('wp_enqueue_scripts', 'maxx_hidescripts');



// Register Admin Script
function admin_customizercss() {
    wp_register_style( 'customizer_css', get_template_directory_uri() . '/css/customizer.css', false, '1.0.0' );
    wp_enqueue_style( 'customizer_css' );
}
add_action( 'admin_enqueue_scripts', 'admin_customizercss' );

// Remove jQuery Theme
function maxx_headscript() {
	global $wp_customize;
    if ( isset( $wp_customize ) ) {
        wp_enqueue_script( 'jquery' );
	} else {
		wp_deregister_script( 'jquery' );
	}
}
add_action('wp_enqueue_scripts', 'maxx_headscript');

// Customize Preview
function maxx_customize_preview_js() {
	wp_enqueue_script( 'maxx-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'maxx_customize_preview_js' );

// Register Theme Widget
function maxxx_widgets_init() {
	
    register_sidebar(array(
		'name'          => __('Sidebar', 'maxx'),
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="%2$s widget_block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
	require get_template_directory().'/widgets/latest-sidebar.php';
	register_widget('LatestSidebar');
	
}
add_action('widgets_init', 'maxxx_widgets_init');

// Related Post Short Code
function related_post_code( $atts ) {
    extract( shortcode_atts( array(
    	'number'      => 1,
		'read_related'    => '<div class="read_related">',
		'related_title'   => __( '<div class="related_title">Read Also</div>', 'maxx' ),
		'related_content' => '<div class="related_content">',
		'openul'	  => '<ul>',
		'id'          => get_the_ID(),
    ), $atts ) );
	
	$post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;
	
	$return_string = '';
	$return_string .= ''.$read_related;
	$the_query = new WP_Query( array(
    	'category__in' => $cat_ids, 
		'orderby'      => 'rand', 
		'order'        => 'DESC' , 
		'showposts'    => $number , 
		'post__not_in' => array( $id ), 
	));
	
	if ( $the_query->have_posts() ) { 
    	while ( $the_query->have_posts() ) { $the_query->the_post();
		    global $post;
			if ( empty( $display_name ) ) {
				$display_name     = get_the_author_meta( 'display_name', $post->post_author );
			} else {
				$display_name     = get_the_author_meta( 'nickname', $post->post_author );
			}
		    
	    	$return_string .= '<div class="related_inline maxx_clear">';
			$return_string .= get_the_post_thumbnail(get_the_ID(),'midsmall');
			$return_string .= '<div class="related_right">';
			$return_string .= $related_title;
			$return_string .= '<div class="related_link"><a target="_blank" href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></div>';
			$return_string .= '<div class="related_time">' . get_the_date('d M Y') . '</div>';
            $return_string .= '</div></div>';
		} 
    } else {
        $return_string .= '';
	}
	
	wp_reset_postdata();
	
	$return_string .= '</div>';
	
	return $return_string;
}
add_shortcode( 'inlinerelated', 'related_post_code' );

// Inline Related Post 1
add_filter('the_content', 'maxx_inline_related_post');
function maxx_inline_related_post($content)
{	if(is_singular('post')){
		$content_block = explode('<p>',$content);
		if( !empty( $content_block[20] ) ) {	
	    	$content_block[20] .= do_shortcode('[inlinerelated]');
		}
		if( !empty( $content_block[50] ) ) {	
	    	$content_block[50] .= do_shortcode('[inlinerelated]');
		}
		for( $i=1; $i<count($content_block); $i++ ) {	
	    	$content_block[$i] = '<p>'.$content_block[$i];
		}
		$content = implode('',$content_block);
	}
	return $content;	
}

// Inline Related Post 2
add_filter('the_content', 'maxx_inline_ads');
function maxx_inline_ads($content)
{	if(is_singular('post')){
		$content_ads = explode('</p>',$content);
		if( !empty( $content_ads[0] ) ) {	
	    	$content_ads[0] .= '<div class="inline_ads">' . html_entity_decode( get_theme_mod( 'inline_ads_one' ) ) . '</div>';
		}
		if( !empty( $content_ads[3] ) ) {	
	    	$content_ads[3] .= '<div class="inline_ads">' . html_entity_decode( get_theme_mod( 'inline_ads_two' ) ) . '</div>';
		}
		for( $i=1; $i<count($content_ads); $i++ ) {	
	    	$content_ads[$i] = '</p>'.$content_ads[$i];
		}
		$content = implode('',$content_ads);
	}
	return $content;	
}

// Metabox Video
add_action('admin_init', 'maxx_video_post', 1);
function maxx_video_post() {
	add_meta_box('maxx_video_embed', 'Additional Data', 'maxx_video_embed', 'post', 'normal', 'high');
}
	
function maxx_video_embed() {
	global $post;
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	$maxx_video_embed = get_post_meta($post->ID, 'maxx_video_embed', true);
	$maxx_editor_name = get_post_meta($post->ID, 'maxx_editor_name', true);
	$maxx_news_source = get_post_meta($post->ID, 'maxx_news_source', true);

	echo '<div class="maxx_inner_input">';
	echo '<input type="text" name="maxx_video_embed" value="' . $maxx_video_embed  . '" class="widefat" /><br/>';
	echo __('Add video link from Youtube, Vimeo, etc', 'maxx');
	echo '<br/><br/><input type="text" name="maxx_editor_name" value="' . $maxx_editor_name  . '" class="widefat" /><br/>';
	echo __('List of post Editor', 'maxx');
	echo '<br/><br/><input type="text" name="maxx_news_source" value="' . $maxx_news_source  . '" class="widefat" /><br/>';
	echo __('News source or reference', 'maxx');
    echo '</div>';
}
	
// save inputan
function maxx_video_embed_meta($post_id, $post) {
    if ( ! isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	if ( !current_user_can( 'edit_post', $post->ID ))
	    return $post->ID;
		
	$events_meta['maxx_video_embed'] = isset($_POST['maxx_video_embed']) ? $_POST['maxx_video_embed'] : '';
	$events_meta['maxx_editor_name'] = isset($_POST['maxx_editor_name']) ? $_POST['maxx_editor_name'] : '';
	$events_meta['maxx_news_source'] = isset($_POST['maxx_news_source']) ? $_POST['maxx_news_source'] : '';

	foreach ($events_meta as $key => $value) {      
		if( $post->post_type == 'revision' ) return;
	    $value = implode(',', (array)$value); 
	    if(get_post_meta($post->ID, $key, FALSE)) { 
	        update_post_meta($post->ID, $key, $value);
	    } else { 
	        add_post_meta($post->ID, $key, $value);
	    }
	    if(!$value) delete_post_meta($post->ID, $key); 
	}
}
add_action('save_post', 'maxx_video_embed_meta', 1, 2); 

// Load More Loop
function weichie_load_more() {
    $ajaxposts = new WP_Query([
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $_POST['paged'],
    ]);

    $response = '';

    if($ajaxposts->have_posts()) {
        while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        ?>
            <div class="loop_classic maxx_clear">
				    <div class="classic_img loop_loading">
					    <a href="<?php the_permalink(); ?>">
					    <?php 
					    if (has_post_thumbnail()) { 
						    the_post_thumbnail('midsmall', array(
						    	'alt' => trim(strip_tags($post->post_title)),
						    	'title' => trim(strip_tags($post->post_title)),
					    	)); 
					    } ?>
						</a>
					</div>
				    <div class="classic_over loop_loading">
					    <div class="classic_author maxx_clear">
					    	<?php echo get_avatar( get_the_author_meta( 'ID' ), 35 ); ?>
							<div class="maxx_clear">
						    	<span class="author_span">Laporan : <?php the_author(); ?></span>
								<span class="publish_span"><?php timepublish_post(); ?> / <?php the_category(' '); ?></span>
							</div>
						</div>
						<div class="classic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					</div>
			</div>
		<?php
        endwhile;
    } else {
        $response = '';
    }

    echo $response;
    exit;
  exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');

// Call Newsticker
if ( ! function_exists( 'get_header_newsticker' ) ) :
    function get_header_newsticker() {
		get_template_part( 'header/newsticker' );
	}
endif;



// Pagination Single
function wp_link_pages_args_prevnext_add($args) {
    global $page, $numpages, $more, $pagenow;

    if ($args['next_or_number'] !== 'next_and_number') 
        return $args; # exit early

    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early

   /* if ($page - 1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
        ; */

    if ($page < $numpages) # there is a next page
        $args['after'] = _wp_link_page($page+1)
            . $args['link_before'] . ' ' . $args['nextpagelink'] . $args['link_after'] . '</a>'
            . $args['after']
        ;

    return $args;
}

add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');