<?php
/*
 * Copyright (c) 2023. Designed and built by Zachary Berridge.
 */

if ( !class_exists( 'ZB_ACF_Options_Page' )):
	class ZB_ACF_Options_Page {

	public static function zb_add_options_pages() {
		if ( function_exists( 'acf_add_options_page' ) ) {

			// Add theme general settings pages and sub-pages
			acf_add_options_page( array(
				'page_title' => 'Theme General Settings',
				'menu_title' => 'Theme Settings',
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => false
			) );

			acf_add_options_sub_page( array(
				'page_title'  => 'Theme Header Settings',
				'menu_title'  => 'Header',
				'parent_slug' => 'theme-general-settings',
			) );

			acf_add_options_sub_page( array(
				'page_title'  => 'Theme Footer Settings',
				'menu_title'  => 'Footer',
				'parent_slug' => 'theme-general-settings',
			) );

			// Add "Options" Page for custom gallery block
			acf_add_options_page( array(
				'page_title' => 'Theme Galleries',
				'menu_title' => 'Galleries',
				'menu_slug'  => 'theme-galleries',
				'capability' => 'edit_posts',
				'redirect'   => false
			) );

		}
	}
}

endif;

add_action( 'init', [ 'ZB_ACF_Options_Page', 'zb_add_options_pages' ] );