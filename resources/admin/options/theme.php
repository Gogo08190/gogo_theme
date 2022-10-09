<?php

/**
 * Define your theme custom code.
*/

add_action( 'customize_register', function( $wp_customize ) {
	remove_action( 'customize_controls_enqueue_scripts', array( $wp_customize->nav_menus, 'enqueue_scripts' ) );
	remove_action( 'customize_register', array( $wp_customize->nav_menus, 'customize_register' ), 11 );
	remove_filter( 'customize_dynamic_setting_args', array( $wp_customize->nav_menus, 'filter_dynamic_setting_args' ) );
	remove_filter( 'customize_dynamic_setting_class', array( $wp_customize->nav_menus, 'filter_dynamic_setting_class' ) );
	remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'print_templates' ) );
	remove_action( 'customize_controls_print_footer_scripts', array( $wp_customize->nav_menus, 'available_items_template' ) );
	remove_action( 'customize_preview_init', array( $wp_customize->nav_menus, 'customize_preview_init' ) );
	$wp_customize->remove_panel('themes');
	$wp_customize->remove_section("custom_css");
	$wp_customize->remove_section("static_front_page");
  }, 10 );


add_action( 'wp_before_admin_bar_render', 'admin_bar_links' );
function admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	$wp_admin_bar->remove_menu('updates');          // Remove the updates link
	$wp_admin_bar->remove_menu('comments');         // Remove the comments link
	$wp_admin_bar->remove_menu('new-content');      // Remove the content link
	$wp_admin_bar->remove_menu('revisr');      		// Remove revisr
	$wp_admin_bar->remove_menu('view');
}

add_filter( 'wp_lazy_loading_enabled', '__return_false' );

add_filter('admin_footer_text', 'remove_footer_admin');
function remove_footer_admin () {
	echo "<p class='alignleft'>Thème par Gogo08 / Hugo</p>";
}
