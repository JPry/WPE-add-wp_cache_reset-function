<?php
/**
 * Plugin Name: Add wp_cache_reset() function
 * Plugin URI: https://github.com/JCPry/WPE-add-wp_cache_reset-function
 * Description: For compatibility, ensure that the wp_cache_reset() function exists.
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL3
 */

if ( ! function_exists( 'wp_cache_reset' ) ) {
    function wp_cache_reset() {
        _deprecated_function( __FUNCTION__, '3.5' );
        
        // Doesn't do anything else. Just return true
        return true;
    }
}