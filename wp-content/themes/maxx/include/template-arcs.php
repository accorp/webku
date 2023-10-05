<?php
/*
 * Register widget (sidebar).
 */
function maxx_widgets_init() {
	
}
add_action('widgets_init', 'maxx_widgets_init');

function maxx_pre_set_transient_update_theme ( $transient ) {
	
		if( empty( $transient->checked['maxx'] ) )
			return $transient;
		$checking = curl_init();
		curl_setopt($checking, CURLOPT_URL, 'https://update.ciuss.com/update/maxx.json' );
		// 3 second timeout to avoid issue on the server
		curl_setopt($checking, CURLOPT_TIMEOUT, 3 );
		curl_setopt($checking, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($checking);
		curl_close($checking);
		// make sure that we received the data in the response is not empty
		if( empty( $result ) )
			return $transient;
		//check server version against current installed version
		if( $data = json_decode( $result ) ){
			if( version_compare( $transient->checked['maxx'], $data->new_version, '<' ) )
				$transient->response['maxx'] = (array) $data;
		}
		return $transient;
	
}
add_filter ( 'pre_set_site_transient_update_themes', 'maxx_pre_set_transient_update_theme' );