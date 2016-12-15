<?php

/************* CUSTOM FUNCTIONS *********************/
		
/**
* @param WP_Query $query
* @return WP_Query
*/
function add_custom_post_type( $query ) {
    if ( $query->is_main_query() && ( is_home() || is_archive() || is_category() ) )
        $query->set( 'post_type', array( 'post', 'ai1ec_event' ) );
    return $query;
}
add_action( 'pre_get_posts', 'add_custom_post_type' );

?>