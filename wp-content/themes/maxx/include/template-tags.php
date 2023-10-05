<?php

// Custom Logo
if ( ! function_exists( 'maxx_custom_logo' ) ) :
    function maxx_custom_logo() {
    	if ( function_exists( 'the_custom_logo' ) ) {
			    the_custom_logo();
	    }
    }
endif;
// Switch Header
function maxx_customize_partial_headerswitch() {
	maxx_header_switch();
}
if ( ! function_exists( 'maxx_header_switch' ) ) :
    function maxx_header_switch() {
    	if ( get_theme_mod('header_switch') != "" ) {
			get_template_part('header/' . get_theme_mod('header_switch'));
	    }
    }
endif;
// Head Search
if ( ! function_exists( 'maxx_search_news' ) ) :
    function maxx_search_news() {
    	get_template_part('top-content/search');
    }
endif;

// Social Media
function maxx_customize_partial_facebook() {
	maxx_social_icon();
}
function maxx_customize_partial_twitter() {
	maxx_social_icon();
}
function maxx_customize_partial_instagram() {
	maxx_social_icon();
}
function maxx_customize_partial_youtube() {
	maxx_social_icon();
}
if ( ! function_exists( 'maxx_social_icon' ) ) :
	function maxx_social_icon() {
		if ( get_theme_mod('facebook_data') != "" ) {
	        echo '<a target="_blank" href="'. esc_url( get_theme_mod( 'facebook_data' ) ).'" aria-label="Facebook"><i class="icon-facebook"></i></a>';
	    }
		if ( get_theme_mod('twitter_data') != "" ) {
	        echo '<a target="_blank" href="'. esc_url( get_theme_mod( 'twitter_data' ) ).'" aria-label="Twitter"><i class="icon-twitter"></i></a>';
	    }
		if ( get_theme_mod('instagram_data') != "" ) {
	        echo '<a target="_blank" href="'. esc_url( get_theme_mod( 'instagram_data' ) ).'" aria-label="Instagram"><i class="icon-instagram"></i></a>';
	    }
		if ( get_theme_mod('youtube_data') != "" ) {
	        echo '<a target="_blank" href="'. esc_url( get_theme_mod( 'youtube_data' ) ).'" aria-label="Youtube"><i class="icon-youtube"></i></a>';
	    }
	}
endif;

// Single Related Post Type
if ( ! function_exists( 'post_related_by_category' ) ) :
	function post_related_by_category() {
		get_template_part('content/related-post');
	}
endif;

// Single Related Post Type
if ( ! function_exists( 'post_related_small' ) ) :
	function post_related_small() {
		get_template_part('content/related-small');
	}
endif;

// Meta Header
if ( ! function_exists( 'maxx_head_meta' ) ) :
    function maxx_head_meta() {
        get_template_part('header/meta');
	}
endif;

// Description
if ( ! function_exists( 'head_meta_desc_maxx' ) ) :
    function head_meta_desc_maxx() {
		if (is_front_page()) {
			bloginfo('description');
		} else if (is_singular()) {
			if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60);
		} else {
			echo '';
		}
	}
endif;


function maxx_customize_partial_footerlogo() {
	maxx_footer_logo();
}
if ( ! function_exists( 'maxx_footer_logo' ) ) :
    function maxx_footer_logo() {
		if ( get_theme_mod('maxx_footer_logo') != "" ) {
	        echo '<img src="'. esc_url( get_theme_mod( 'maxx_footer_logo' ) ).'"/>';
	    } else {
			echo '';
		}
	}
endif;
function maxx_customize_partial_footertext() {
	maxx_footer_text();
}
if ( ! function_exists( 'maxx_footer_text' ) ) :
    function maxx_footer_text() {
		if ( get_theme_mod('maxx_footer_text') != "" ) {
	        echo esc_html( get_theme_mod( 'maxx_footer_text' ) );
	    } else {
			echo __( 'Maecenas et varius velit, ut vehicula leo. Proin consequat libero magna. Vestibulum eleifend ligula a risus viverra ultrices. Sed sit amet placerat purus. Duis ultrices est in magna', 'maxx' );
		}
	}
endif;

// Footer
function maxx_customize_partial_copyright() {
	maxx_text_footer();
}
if ( ! function_exists( 'maxx_text_footer' ) ) :
	function maxx_text_footer() {
		$webname = get_bloginfo('name');
	    echo sprintf(__('&copy; %1$s. Maxx theme from <a href="%2$s">Ciuss Creative</a>. Proudly powered by <a href="%3$s">WordPress</a>', 'maxx' ), $webname, 'https://ciuss.com', 'https://wordpress.org' );
    }
endif;




// Ads
function maxx_customize_partial_headerads() {
	maxx_header_ads();
}
if ( ! function_exists( 'maxx_header_ads' ) ) :
    function maxx_header_ads() {
		if ( get_theme_mod('maxx_ads_afterheader') != "" ) {
			echo '<div class="inner_header_ads">';
	        echo html_entity_decode( get_theme_mod( 'maxx_ads_afterheader' ) );
			echo '</div>';
	    } else {
			echo '';
		}
	}
endif;
function maxx_customize_partial_floatingleft() {
	maxx_floating_left();
}
if ( ! function_exists( 'maxx_floating_left' ) ) :
    function maxx_floating_left() {
		if ( get_theme_mod('maxx_left_floating') != "" ) {
			echo '<div class="side_float"><span>x</span>';
	        echo html_entity_decode( get_theme_mod( 'maxx_left_floating' ) );
			echo '</div>';
	    } else {
			echo '';
		}
	}
endif;

function maxx_customize_partial_floatingright() {
	maxx_floating_right();
}
if ( ! function_exists( 'maxx_floating_right' ) ) :
    function maxx_floating_right() {
		if ( get_theme_mod('maxx_right_floating') != "" ) {
			echo '<div class="side_float"><span>x</span>';
	        echo html_entity_decode( get_theme_mod( 'maxx_right_floating' ) );
			echo '</div>';
	    } else {
			echo '';
		}
	}
endif;

function maxx_customize_partial_relads() {
	inline_rel_ads();
}

if ( ! function_exists( 'inline_rel_ads' ) ) :
    function inline_rel_ads() {
		if ( get_theme_mod('inline_rel_ads') != "" ) {
			echo '<div class="inner_rel_ads">';
	        echo html_entity_decode( get_theme_mod( 'inline_rel_ads' ) );
			echo '</div>';
	    } else {
			echo '';
		}
	}
endif;

if ( ! function_exists( 'timepublish_post' ) ) :
    function timepublish_post() {
		if ( get_theme_mod('maxx_timeformat') !== "day" ) {
			the_time();
		} else {
			echo get_the_date('d M Y - H:i');
		}
	}
endif;

function maxx_customize_partial_beforefooter() {
	maxx_before_footer();
}
if ( ! function_exists( 'maxx_before_footer' ) ) :
    function maxx_before_footer() {
		if ( get_theme_mod('maxx_ads_beforefooter') != "" ) {
	        echo html_entity_decode( get_theme_mod( 'maxx_ads_beforefooter' ) );
	    } else {
			echo '';
		}
	}
endif;

function maxx_customize_partial_bottomads() {
	maxx_bottom_ads_floating();
}
if ( ! function_exists( 'maxx_bottom_ads_floating' ) ) :
    function maxx_bottom_ads_floating() {
		if ( get_theme_mod('maxx_ads_bottom') != "" ) {
			echo '<div class="bottom_float"><span>x</span>';
	        echo html_entity_decode( get_theme_mod( 'maxx_ads_bottom' ) );
			echo '</div>';
	    } else {
			echo '';
		}
	}
endif;


function maxx_facebook_pixel() {
		if ( get_theme_mod('maxx_pixel_code') != "" ) {
			?>
	        <!-- Meta Pixel Code -->
	        <script>
	        !function(f,b,e,v,n,t,s)
	        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	        n.queue=[];t=b.createElement(e);t.async=!0;
	        t.src=v;s=b.getElementsByTagName(e)[0];
	        s.parentNode.insertBefore(t,s)}(window, document,'script',
	        'https://connect.facebook.net/en_US/fbevents.js');
	        fbq('init', '<?php echo esc_html( get_theme_mod('maxx_pixel_code') ); ?>');
	        fbq('track', 'PageView');
	        </script>
	        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo rawurlencode( get_theme_mod('maxx_pixel_code') ); ?>&ev=PageView&noscript=1" /></noscript>
            <!-- End Meta Pixel Code -->
			<?php
		}
}
add_action('wp_footer', 'maxx_facebook_pixel');



function maxx_no_lite_host() {
    return preg_replace("(^https?://)", "", site_url());
}

function maxx_pro_library_encrypt($string, $length = 16)
{
    $secret_key = 'AUTH_KEY';
    $secret_iv = 'AUTH_SALT';

    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, $length);

    return base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
}

function maxx_pro_library_decrypt($string, $length = 16)
{
    $secret_key = 'AUTH_KEY';
    $secret_iv = 'AUTH_SALT';

    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, $length);

    return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
}