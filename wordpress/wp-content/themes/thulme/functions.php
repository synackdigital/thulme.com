<?php
/**
 * Enqueue scripts and stylesheets
 */
function thulme_scripts() {
  // Deregister Roots Bootstrap responsive styles
  wp_dequeue_style('roots_bootstrap_responsive');
  wp_deregister_style('roots_bootstrap_responsive');

  // Deregister Roots main styles
  wp_deregister_style('roots_main');

  // Enqueue scripts for Flat-UI
  wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-ui-1.10.3.custom.min.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-ui-touch-punch', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.ui.touch-punch.min.js', array('jquery','jquery-ui'), null, true);
  wp_enqueue_script('bootstrap-select', get_stylesheet_directory_uri() . '/assets/js/vendor/bootstrap-select.js', array('jquery','roots_bootstrap'), null, true);
  wp_enqueue_script('bootstrap-switch', get_stylesheet_directory_uri() . '/assets/js/vendor/bootstrap-switch.js', array('jquery','roots_bootstrap'), null, true);
  wp_enqueue_script('flatui-checkbox', get_stylesheet_directory_uri() . '/assets/js/vendor/flatui-checkbox.js', array('jquery','roots_bootstrap'), null, true);
  wp_enqueue_script('flatui-radio', get_stylesheet_directory_uri() . '/assets/js/vendor/flatui-radio.js', array('jquery','roots_bootstrap'), null, true);
  wp_enqueue_script('jquery-tagsinput', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.tagsinput.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-placeholder', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.placeholder.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-stacktable', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.stacktable.js', array('jquery'), null, true);

  // Enqueue theme scripts
  wp_enqueue_script('thulme_plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', false, null, true);
  wp_enqueue_script('thulme_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'thulme_scripts', 200);

/**
 * After roots theme setup
 */
function thulme_theme_setup(){
  remove_filter('excerpt_length', 'roots_excerpt_length');
  remove_filter('excerpt_more', 'roots_excerpt_more');
}
add_action( 'after_setup_theme', 'thulme_theme_setup' );

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
