<?php

/*
Plugin Name: Advanced Custom Fields: ACF Codemirror Area
Plugin URI: https://github.com/ryanradmkt/ACF-CodeMirror-Area-Field-Type
Description: First pass based off of <a href="https://wordpress.org/plugins/advanced-custom-fields-code-area-field/" target="_blank">Advanced Custom Fields - Code Area Field</a>
Version: 1.0.0
Author: RAD MKT
Author URI: http://radmkt.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-FIELD_NAME', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_FIELD_NAME( $version ) {
	
	include_once('acf-FIELD_NAME-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_FIELD_NAME');	




// 3. Include field type for ACF4
function register_fields_FIELD_NAME() {
	
	include_once('acf-FIELD_NAME-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_FIELD_NAME');	



	
?>