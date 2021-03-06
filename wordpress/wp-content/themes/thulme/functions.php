<?php

require_once locate_template('/lib/post-format-plural-strings.php');

/**
 * Enqueue scripts and stylesheets
 */
function thulme_scripts() {
  // Deregister Roots Bootstrap responsive styles
  wp_dequeue_style('roots_bootstrap_responsive');
  wp_deregister_style('roots_bootstrap_responsive');

  // Enqueue font styles from Typography.com
  wp_enqueue_style('typography_com', '//cloud.typography.com/7770232/774582/css/fonts.css', false, null);

  // Enqueue theme scripts
  wp_enqueue_script('thulme_plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true);
  wp_enqueue_script('thulme_main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery', 'thulme_plugins'), null, true);
}
add_action('wp_enqueue_scripts', 'thulme_scripts', 200);

/**
 * Theme initial setup and constants
 */
function thulme_setup() {
  // Make theme available for translation
  load_theme_textdomain('thulme', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'secondary_navigation' => __('Secondary Navigation', 'thulme'),
  ));

  // Register support for post formats
  add_theme_support( 'post-formats', array( 'audio', 'video', 'link' ) );
}
add_action('after_setup_theme', 'thulme_setup');

/**
 * Return a mailto link with post URL
 */
function thulme_post_mailto_url(){
  global $post;
  $title = htmlspecialchars($post->post_title);
  $subject = htmlspecialchars(get_bloginfo('name')).': '.$title;
  $body = get_permalink($post->ID);
  $url = 'mailto:?subject='.rawurlencode($subject).'&amp;body='.rawurlencode($body);
  return $url;
}

/**
 * Add category nicenames in body and post class
 */
function category_id_class($classes) {
  global $post;
  foreach((get_the_category($post->ID)) as $category) :
    $classes[] = 'category-' . $category->category_nicename;
  endforeach;

  return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');
