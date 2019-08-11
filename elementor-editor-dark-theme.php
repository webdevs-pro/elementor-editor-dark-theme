<?php
 
/**
*
* Plugin Name: Elementor Editor Eark Theme
*
* Plugin URI: https://github.com/AlexIschenko/elementor-code-editor-popup
* Description: This plugin adds a dark ui theme to the Elementor page builder
* Version: 1.6.4
*
* Author: Alex Ischenko
*
* License: GPL 3.0
*
*/


add_action( 'elementor/editor/after_enqueue_styles', function() {
	
	echo '<style type="text/css">

	.elementor-panel .elementor-control.elementor-control-type-divider .elementor-control-content {
		background-color: transparent;
		border: none;
		height: 22px;
	}
	
	.elementor-panel#elementor-panel,
	.elementor-panel .elementor-control { 
		background: #23282d !important;
		color: #c6c6c6 !important;
	}
	
	.elementor-panel .elementor-element {
		background-color: rgba(255,255,255,0.07) !important;
	}

	.elementor-panel .elementor-control-type-structure .elementor-control-structure-title:before,
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-more-presets-title:before {
		background-color: #181c21;
	}
	
	.elementor-panel .panel-elements-category-items {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
	}
	
	.elementor-panel .elementor-element-wrapper {
		flex: 1 1 120px;
	}
	
	
	
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-title:after,
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-more-presets-title:after	{
		background-color: #3b3b3b !important;
	}
	
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-title,
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-more-presets-title	{
		color: #ccc !important;
	}
	
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-preset {
		border: 1px solid #3b3b3b !important;
	}
	
	.elementor-panel .elementor-control-type-structure .elementor-control-structure-preset path {
		fill: #181c21 !important;
	}
	
	.elementor-panel .elementor-control-type-switcher .elementor-switch-label {
		background: #434551 !important;
	}
	
	.elementor-panel .elementor-control-type-switcher .elementor-switch-input:checked ~ .elementor-switch-label {
		background: #808080 !important;
	}
	
	.elementor-panel .elementor-responsive-switcher {
		background-color: transparent !important;
	}
	
	.elementor-panel .elementor-responsive-switcher {
		-webkit-border-radius: 3px !important;
		border-radius: 3px !important;
	}
	
	.elementor-device-mobile .elementor-panel .elementor-responsive-switcher-mobile,
	.elementor-device-tablet .elementor-panel .elementor-responsive-switcher-tablet {
		background-color: #666 !important;
	}

	.elementor-panel .elementor-panel-navigation {
		background-color: #1f1f26 !important;
	}
	.elementor-panel .elementor-panel-navigation .elementor-panel-navigation-tab a {
		color: #c8c8c8 !important;
	}
	.elementor-panel .elementor-panel-navigation .elementor-panel-navigation-tab.active {
		background-image: -webkit-gradient(linear,left top,left bottom,from(#ffffff1a),to(#ffffff1a)) !important;
		background-image: -webkit-linear-gradient(top,#ffffff1a,#ffffff1a) !important;
		background-image: -o-linear-gradient(top,#ffffff1a,#ffffff1a) !important;
		background-image: linear-gradient(180deg,#ffffff1a,#ffffff1a) !important;
		border-bottom: 3px solid #898989 !important;
	}
	
	input#elementor-panel-elements-search-input:focus {
		background-color: hsla(0, 0%, 10.2%, 0.7) !important;
	}
	
	.select2-container--default .select2-selection--single {
		background-color: #23282d !important;
		border: 1px solid #565656 !important;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #ccc !important;
	}
	.select2-dropdown {
		background-color: #3f4347 !important;
		border: 1px solid #565656 !important;
	}
	.select2-container--default .select2-search--dropdown .select2-search__field {
		color: #ccc !important;
	}
	.select2-results__group,
	.select2-results__option {
		color: #ccc !important;
	}
	.select2-container--default .select2-results__option[aria-selected="true"] {
		background-color: #e0e0e0 !important;
		color: #333 !important;
	}
	.select2-container--default .select2-results__option--highlighted[aria-selected="true"]{
		background-color: #e0e0e0 !important;
		color: #333 !important;
	}
	.select2-container--default .select2-results__option--highlighted {
		background-color: #595959 !important;
		color: #fff !important;
	}
	.elementor-panel .elementor-control-type-dimensions .elementor-link-dimensions.unlinked {
		background-color: #bfbfbf !important;
		border: 1px solid #565656 !important;
	}
	.elementor-panel .elementor-control-type-dimensions .elementor-link-dimensions:not(.unlinked) {
		background-color: #444 !important;
		border: 1px solid #565656 !important;
	}
	.elementor-panel .elementor-choices input:not(:checked) + .elementor-choices-label {
		background-color: #32373e !important;
		
	}
	.elementor-panel .elementor-choices input:checked + .elementor-choices-label {
		background-color: #7d7d7d !important;
		color: #ccc !important;
	}
	
	.elementor-panel .elementor-control.elementor-control-separator-after:after {
		display: none !important;
	}
	.elementor-panel .elementor-control.elementor-control-separator-before:before {
		background-color: #181c21 !important;
		color: #ccc !important;
	}
	
	.elementor-panel .elementor-choices {
		background-color: #565656 !important;
	}
	
	.elementor-panel .wp-picker-container.wp-picker-active {
		background-color: #23282d !important;
		border: solid #fff0 !important;
	}
	.iris-border {
		background-color: #fff0 !important;
	}
	
	#elementor-mode-switcher {
		background-color: #23282d !important;
	}
	
	.elementor-panel #elementor-panel-header {
		background-color: #4a4f54 !important;
	}
	
	.elementor-panel .elementor-element .icon,
	.elementor-panel .elementor-element .title,
	.elementor-panel .elementor-element:hover .icon,
	.elementor-panel .elementor-element:hover .title,
	.elementor-panel .elementor-panel-heading-toggle,
	.elementor-panel .elementor-panel-heading-title,
	.elementor-input-style,
	.elementor-panel input,
	.elementor-panel select,
	.elementor-panel textarea {
		color: #ccc !important;
	}
	
	.elementor-panel select {
		-moz-appearance: none !important;
		text-indent: 0.01px !important;
		text-overflow: "" !important;
	}

	.elementor-panel option {
		color: #333 !important;
	}

	.elementor-panel .elementor-panel-heading {
		border-bottom: 1px solid #3b3b3b !important;
		background-color: rgba(255,255,255,0.07) !important;
	}

	.elementor-panel .elementor-control.elementor-control-separator-default::before {
		background-color: #3b3b3b !important;
	}

	.elementor-panel .elementor-slider {
		background-color: #4d4d4d !important;
	}

	.elementor-panel .elementor-slider .ui-slider-handle {
		background-color: #9f9f9f !important;
	}

	input[disabled] {
		background-color: #535353 !important;
		color: #d5d5d5 !important;
	}
	
	.elementor-input-style:not(:focus),
	.elementor-panel input:not(:focus),
	.elementor-panel select:not(:focus),
	.elementor-panel textarea:not(:focus) {
		border-color: #565656 !important;
	}

	.elementor-input-style:focus,
	.elementor-panel select:focus,
	.elementor-panel textarea:focus,
	.elementor-panel input:focus {
		 border-color: #666 !important;
	}
	
	.elementor-panel .elementor-panel-scheme-color-system-items,
	.elementor-panel .elementor-panel-scheme-color-system-items:hover {
		border: none !important;
	}
	
	.elementor-panel .elementor-panel-menu-item:hover,
	.elementor-panel .elementor-panel-menu-item:not(:hover),
	.elementor-panel .elementor-panel-scheme-buttons,
	.elementor-panel .elementor-panel-box {
		background-color: transparent !important;
	}
	
	.ace-tm .ace_scroller {
		background-color: #eee !important;
		color: #454242 !important;
	}
	.elementor-panel .elementor-panel-footer-sub-menu-wrapper {
		z-index: 4 !important;
	}
	
	
	
	
	.elementor-panel .elementor-control-type-popover_toggle .elementor-control-popover-toggle-toggle:checked + .elementor-control-popover-toggle-toggle-label {
		color: #ccc !important;
	}
	
	.elementor-panel .elementor-control-type-popover_toggle .elementor-control-popover-toggle-toggle-label {
		border: 1px solid #565656 !important;
	}
	
	.elementor-panel .elementor-controls-popover:before {
		border-bottom-color: #23282d !important;
	}
	
	.elementor-panel .elementor-controls-popover {
		background-color: #23282d !important;
	}
	
	.elementor-panel .elementor-controls-popover {
		-webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.45) !important;
		box-shadow: 0 0 25px rgba(0, 0, 0, 0.45) !important;
	}

	/* code editor popup */
	.elementor-control-custom_css.ai_drag,
	.elementor-control-html.ai_drag,
	.elementor-control-custom_js.ai_drag {
		border: 1px solid #555 !important;
	}

	.maximize_button {
		border: 1px solid #555;
	}
	.minimize_button {
		border: 1px solid #555;
	}


	</style>';
	
} );


require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AlexIschenko/elementor-editor-dark-theme',
	__FILE__,
	'elementor-editor-dark-theme'
);