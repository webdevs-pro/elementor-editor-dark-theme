<?php
 
/**
*
* Plugin Name: Elementor Editor Dark Theme
*
* Plugin URI: https://github.com/AlexIschenko/elementor-editor-dark-theme
* Description: This plugin adds a dark ui theme to the Elementor page builder
* Version: 2.3
*
* Author: Alex Ischenko
*
* License: GPL 3.0
*
*/


add_action( 'elementor/editor/after_enqueue_styles', function() {
	wp_enqueue_style('elementor-editor-dark-theme', plugin_dir_url( __FILE__ ) . '/css/dark-theme.css' );
} );


require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AlexIschenko/elementor-editor-dark-theme',
	__FILE__,
	'elementor-editor-dark-theme'
);