<?php

use Themosis\Support\Facades\Filter;

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
Filter::add('body_class', function ($classes) {
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
});

/**
 * Remove meta box data
 */

add_action('admin_menu', 'remove_default_post_screen_metaboxes');
function remove_default_post_screen_metaboxes()
{
	remove_meta_box('postcustom', 'post', 'normal'); // Custom Fields Metabox
	remove_meta_box('commentsdiv', 'post', 'normal'); // Comments Metabox
	remove_meta_box('commentstatusdiv', 'post', 'normal'); // Comments Metabox
	remove_meta_box('trackbacksdiv', 'post', 'normal'); // Talkback Metabox
	remove_meta_box('slugdiv', 'post', 'normal'); // Slug Metabox
	remove_meta_box('authordiv', 'post', 'normal'); // Author Metabox
	add_theme_support('post-thumbnails', array('post'));
}

add_action('admin_menu', 'remove_default_page_screen_metaboxes');
function remove_default_page_screen_metaboxes()
{
	remove_meta_box('postcustom', 'page', 'normal'); // Custom Fields Metabox
	remove_meta_box('postexcerpt', 'page', 'normal'); // Excerpt Metabox
	remove_meta_box('commentsdiv', 'page', 'normal'); // Comments Metabox
	remove_meta_box('commentstatusdiv', 'page', 'normal'); // Comments Metabox
	remove_meta_box('trackbacksdiv', 'page', 'normal'); // Talkback Metabox
	remove_meta_box('slugdiv', 'page', 'normal'); // Slug Metabox
	remove_meta_box('authordiv', 'page', 'normal'); // Author Metabox
	remove_post_type_support('page', 'editor'); // Author Editor
}

add_action('admin_menu', 'custom_page_default');
function custom_page_default()
{
	// Get the Post ID.
	if (isset($_GET['post']))
		$post_id = $_GET['post'];
	else if (isset($_POST['post_ID']))
		$post_id = $_POST['post_ID'];

	if (!isset($post_id) || empty($post_id))
		return;

	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);

	// Do something for the template

	if (!in_array($template_file, array("default", "faq"))) {
		remove_post_type_support('page', 'editor');
	} else {
		add_post_type_support('page', 'editor');
	}
}

/**
 * Add meta box media
 */

add_filter('attachment_fields_to_edit', 'custom_media_add_media_custom_field', null, 2);
function custom_media_add_media_custom_field($form_fields, $post)
{
	$field_value = get_post_meta($post->ID, 'custom_url', true);

	$form_fields['custom_url'] = array(
		'value' => $field_value ? $field_value : '',
		'label' => 'URL',
		'helps' => 'Ajouter un lien',
		'input'  => 'text'
	);

	return $form_fields;
}

add_action('edit_attachment', 'custom_media_save_attachment');
function custom_media_save_attachment($attachment_id)
{
	if (isset($_REQUEST['attachments'][$attachment_id]['custom_url'])) {
		$custom_media_style = $_REQUEST['attachments'][$attachment_id]['custom_url'];
		update_post_meta($attachment_id, 'custom_url', $custom_media_style);
	}
}

function add_site_favicon()
{
	echo '<link rel="icon" type="image/png" sizes="32x32" href=" ' . get_template_directory_uri() . '/dist/images/favicon/favicon-32x32.png">';
	echo '<link rel="icon" type="image/png" sizes="96x96" href=" ' . get_template_directory_uri() . '/dist/images/favicon/favicon-96x96.png">';
	echo '<link rel="icon" type="image/png" sizes="16x16" href=" ' . get_template_directory_uri() . '/dist/images/favicon/favicon-16x16.png">';
}

add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');

/**
 * Remove meta box media
 */

add_action('admin_footer', 'admin_custom_media');
function admin_custom_media()
{
	echo '<style>.attachment-details span.has-description, .attachment-details p#alt-text-description, .attachment-details [data-setting="caption"], div.attachment-display-settings { display : none !important; }</style>';
}

add_action('admin_head-post.php', 'hide_media_stuff_wpse_120894');
add_action('admin_head-post-new.php', 'hide_media_stuff_wpse_120894');
function hide_media_stuff_wpse_120894()
{
?>
	<style type="text/css">
		.attachment-details span.has-description,
		.attachment-details p#alt-text-description,
		.attachment-details [data-setting="caption"],
		div.attachment-display-settings {
			display: none
		}
	</style>
<?php
}

/**
 * Remove span contact form 7
 */

add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});

/**
 * Clean theme HTML5
 */

if (!is_admin()) {
	add_action(
		'after_setup_theme',
		function () {
			add_theme_support('html5', ['script', 'style']);
		}
	);

	add_action('wp_loaded', 'output_buffer_start');
	function output_buffer_start()
	{
		ob_start("output_callback");
	}

	function output_callback($buffer)
	{
		return preg_replace("%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer);
	}

	add_filter('style_loader_tag', 'optimize_style_tags', 10, 4);
	function optimize_style_tags($html, $handle, $href, $media)
	{
		return '<link rel="stylesheet" href="' . $href . '" media="' . $media . '">' . "\n";
	}

	add_filter('script_loader_tag', 'optimize_script_tags', 10, 3);
	function optimize_script_tags($tag, $handle, $src)
	{
		return '<script src="' . $src . '"></script>' . "\n";
	}
}

/**
 * Add function save post / draft
 */

add_action("save_post", "save_metabox");
add_action("save_draft", "save_metabox");
function save_metabox()
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	} else {
		$options = array();

		foreach ($_POST as $key => $value) {
			if (substr($key, 0, 3) === 'th_') {
				$options[] = $key;
			}
		}

		foreach ($options as $O) {
			update_post_meta(get_the_ID(), $O, $_POST[$O]);
		}
	}
}

/**
 * Hide permalink
 */

add_filter('get_sample_permalink_html', 'hide_permalink');
function hide_permalink()
{
	return '';
}

add_filter('get_custom_logo',  'custom_logo_url');
function custom_logo_url($html)
{

	$custom_logo_id = get_theme_mod('custom_logo');
	$url = network_site_url();
	$html = sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
		esc_url($url),
		wp_get_attachment_image($custom_logo_id, 'full', false, array(
			'class'    => 'custom-logo',
		))
	);
	return $html;
}

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/**
 * Add function autosave
 */

add_action('admin_footer', 'admin_custom_script');
function admin_custom_script()
{
	echo '<script>
          jQuery(document).ready(function($) {
          $(document).on("click", ".themosis__tabs__menu button, .supports-drag-drop, .themosis__collection__button--remove, .themosis__input__radio", function() {
            $(".themosis__metabox__footer button").click();
          });

          $(document).on("mouseup", ".themosis__collection__item.selected", function() {
            $(".themosis__metabox__footer button").click();
          });

          $(document).on("touchstart", function(e) {
            if(($(e.target).text() == "Insert") || ($(e.target).text() == "Remove Selected")) {
              setTimeout(
                function() {
                  $(".themosis__metabox__footer button").click();
                }, 500);
            }
          });
        });
  </script>';
}


/**
 * Remove save button metabox themosis
 */

// add_action('admin_footer', 'admin_custom_footer');
// function admin_custom_footer() {
// 	echo '<style>.themosis__metabox__footer button { display : none !important; }</style>';
// }


/**
 * Remove head and footer links
 */

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'rel_canonical');
remove_action('template_redirect', 'rest_output_link_header', 11);
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
	add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

add_filter('show_admin_bar', '__return_false');

function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
	if ('dns-prefetch' == $relation_type) {
		$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
		$urls = array_diff($urls, array($emoji_svg_url));
	}

	return $urls;
}


function no_wordpress_errors(){
	return 'Une erreur est survenue...';
  }
  add_filter( 'login_errors', 'no_wordpress_errors' );
