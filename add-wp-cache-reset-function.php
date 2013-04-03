<?php
/**
 * Plugin Name: Add wp_cache_reset() function
 * Plugin URI: https://github.com/JCPry/WPE-add-wp_cache_reset-function
 * Description: For compatibility, ensure that the wp_cache_reset() function exists.
 * Version: 1.1
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL3
 */

if ( ! function_exists( 'wp_cache_reset' ) ) {
    function wp_cache_reset() {
        _deprecated_function( __FUNCTION__, '3.5' );
        
        global $wp_object_cache;
        
        // While we should use the WP_Object_Cache::reset() method, that might not exist
        return $wp_object_cache->flush();
    }
}
