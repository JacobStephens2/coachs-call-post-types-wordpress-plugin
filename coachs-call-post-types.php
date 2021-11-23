<?php

/**
 * Plugin Name:       Coach's Call Post Types and Taxonomies
 * Plugin URI:        https://github.com/JacobStephens2/coachs-call-post-types
 * Description:       A simple plugin for creating custom post types and taxonomies related to a Coach's Call.
 * Version:           1.0.0
 * Author:            Jacob Stephens
 * Author URI:        https:/stewardgoods.com/
 * License:           GPLv3
 * License URI:       https://github.com/JacobStephens2/coachs-call-post-types/blob/main/LICENSE.txt
 * Text Domain:       coachs-call-post-types
 * Domain Path:       /languages
 */

 if ( ! defined( 'WPINC' ) ) {
   die;
 }

define( 'CC_VERSION', '1.0.0' );
define( 'CCDOMAIN', 'coachs-call-post-types' );
define( 'CCPATH', plugin_dir_path( __FILE__ ) );

require_once( CCPATH . '/post-types/register.php' );
add_action( 'init', 'cc_register_coach_quote_type' );

?>