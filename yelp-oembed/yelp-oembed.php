<?php
/*
Plugin Name: Sample-plugin
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: sample-plugin
Domain Path: /languages
*/
if ( ! defined( 'ABSPATH' ) ) exit; 
wp_parse_url('http://www.trajano.net');
require_once('function.php');

function my_custom_function_in_main() {
  return "hello";
}
