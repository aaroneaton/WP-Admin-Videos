<?php
/*
 * Plugin Name: WP Admin Videos
 * Plugin URI: https://github.com/channeleaton/WP-Admin-Videos
 * Description: Add training videos to your WordPress admin area
 * Version: 0.1
 * Author: J. Aaron Eaton
 * Author URI: http://channeleaton.com
 * License: GPL2
 */

if( ! array_key_exists( 'wp-admin-vids', $GLOBALS ) ) {

  class WP_Admin_Vids {
  
  }

  $GLOBALS['wp-admin-vids'] = new WP_Admin_Vids;

} // end if
