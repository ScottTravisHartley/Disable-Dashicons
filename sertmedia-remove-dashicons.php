<?php 
/*
Plugin Name: Disable Dashicons
Plugin URI: https://www.sertmedia.com
Description: Disable dashicons to reduce page-weight for non-logged in users. 
Version: 1.0
Author: SERT Media
Author URI: https://www.sertmedia.com
*/

function sertmedia_remove_dashicons_junk() {
    if ( ! is_user_logged_in() ) {
          wp_dequeue_style('dashicons');
    }
}
add_action( 'wp_enqueue_scripts', 'sertmedia_remove_dashicons_junk' );