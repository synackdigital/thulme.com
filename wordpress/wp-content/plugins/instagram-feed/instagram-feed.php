<?php 
/*
Plugin Name: Instagram Feed
Plugin URI: http://smashballoon.com/instagram-feed
Description: Add a simple customizable Instagram feed to your website
Version: 1.1.6
Author: Smash Balloon
Author URI: http://smashballoon.com/
License: GPLv2 or later

Copyright 2014  Smash Balloon LLC (email : hey@smashballoon.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Include admin
include dirname( __FILE__ ) .'/instagram-feed-admin.php';

// Add shortcodes
add_shortcode('instagram-feed', 'display_instagram');
function display_instagram($atts, $content = null) {


    /******************* SHORTCODE OPTIONS ********************/

    $options = get_option('sb_instagram_settings');
    
    //Pass in shortcode attrbutes
    $atts = shortcode_atts(
    array(
        'id' => $options[ 'sb_instagram_user_id' ],
        'width' => $options[ 'sb_instagram_width' ],
        'widthunit' => $options[ 'sb_instagram_width_unit' ],
        'height' => $options[ 'sb_instagram_height' ],
        'heightunit' => $options[ 'sb_instagram_height_unit' ],
        'num' => $options[ 'sb_instagram_num' ],
        'cols' => $options[ 'sb_instagram_cols' ],
        'imagepadding' => $options[ 'sb_instagram_image_padding' ],
        'imagepaddingunit' => $options[ 'sb_instagram_image_padding_unit' ],
        'background' => $options[ 'sb_instagram_background' ],
        'showbutton' => $options[ 'sb_instagram_show_btn' ],
        'buttoncolor' => $options[ 'sb_instagram_btn_background' ],
        'buttontextcolor' => $options[ 'sb_instagram_btn_text_color' ],
        'imageres' => $options[ 'sb_instagram_image_res' ]
    ), $atts);


    /******************* VARS ********************/

    //User ID
    $sb_instagram_user_id = trim($atts['id']);

    //Container styles
    $sb_instagram_width = $atts['width'];
    $sb_instagram_width_unit = $atts['widthunit'];
    $sb_instagram_height = $atts['height'];
    $sb_instagram_height_unit = $atts['heightunit'];
    $sb_instagram_image_padding = $atts['imagepadding'];
    $sb_instagram_image_padding_unit = $atts['imagepaddingunit'];
    $sb_instagram_background = $atts['background'];

    //Layout options
    $sb_instagram_cols = $atts['cols'];

    $sb_instagram_styles = 'style="';
    if($sb_instagram_cols == 1) $sb_instagram_styles .= 'max-width: 640px; ';
    if ( !empty($sb_instagram_width) ) $sb_instagram_styles .= 'width:' . $sb_instagram_width . $sb_instagram_width_unit .'; ';
    if ( !empty($sb_instagram_height) && $sb_instagram_height != '0' ) $sb_instagram_styles .= 'height:' . $sb_instagram_height . $sb_instagram_height_unit .'; ';
    if ( !empty($sb_instagram_background) ) $sb_instagram_styles .= 'background-color: ' . $sb_instagram_background . '; ';
    if ( !empty($sb_instagram_image_padding) ) $sb_instagram_styles .= 'padding-bottom: ' . (2*intval($sb_instagram_image_padding)).$sb_instagram_image_padding_unit . '; ';
    $sb_instagram_styles .= '"';

    //Load more button styles
    $sb_instagram_show_btn = $atts['showbutton'];
    if($sb_instagram_show_btn == 'false') $sb_instagram_show_btn = false;
    $sb_instagram_btn_background = $atts['buttoncolor'];
    $sb_instagram_btn_text_color = $atts['buttontextcolor'];

    $sb_instagram_button_styles = 'style="';
    if ( !empty($sb_instagram_btn_background) ) $sb_instagram_button_styles .= 'background: '.$sb_instagram_btn_background.'; ';
    if ( !empty($sb_instagram_btn_text_color) ) $sb_instagram_button_styles .= 'color: '.$sb_instagram_btn_text_color.';';
    $sb_instagram_button_styles .= '"';


    /******************* CONTENT ********************/

    $sb_instagram_content = '<div id="sb_instagram" class="sbi ';
    if ( !empty($sb_instagram_height) ) $sb_instagram_content .= 'sbi_fixed_height ';
    $sb_instagram_content .= 'sbi_col_' . trim($sb_instagram_cols);
    $sb_instagram_content .= '" '.$sb_instagram_styles .' data-id="' . $sb_instagram_user_id . '" data-num="' . trim($atts['num']) . '" data-res="' . trim($atts['imageres']) . '">';

    $sb_instagram_content .= '<div id="sbi_images" style="padding: '.$sb_instagram_image_padding . $sb_instagram_image_padding_unit .';">';

    //Error messages
    if( empty($sb_instagram_user_id) || !isset($sb_instagram_user_id) ) $sb_instagram_content .= '<p>Please enter a User ID either on the Instagram plugin Settings page or directly in the shortcode, like so: [instagram-feed id=1234567]</p>';
    if( empty($options[ 'sb_instagram_at' ]) || !isset($options[ 'sb_instagram_at' ]) ) $sb_instagram_content .= '<p>Please enter an Access Token on the Instagram Feed plugin Settings page</p>';

    $sb_instagram_content .= '</div>
    <div id="sbi_load">';
    if( $sb_instagram_show_btn ) $sb_instagram_content .= '<a href="javascript:void(0);" '.$sb_instagram_button_styles.'>Load More...</a>';
    $sb_instagram_content .= '</div>
    </div>';
 
    //Return our feed HTML to display
    return $sb_instagram_content;

}


#############################

//Allows shortcodes in theme
add_filter('widget_text', 'do_shortcode');

//Enqueue stylesheet
add_action( 'wp_enqueue_scripts', 'sb_instagram_styles_enqueue' );
function sb_instagram_styles_enqueue() {
    wp_register_style( 'sb_instagram_styles', plugins_url('css/sb-instagram.css?1', __FILE__) );
    wp_enqueue_style( 'sb_instagram_styles' );
}

//Enqueue scripts
add_action( 'wp_enqueue_scripts', 'sb_instagram_scripts_enqueue' );
function sb_instagram_scripts_enqueue() {
    //Register the script to make it available
    wp_register_script( 'sb_instagram_scripts', plugins_url( '/js/sb-instagram.js?2' , __FILE__ ), array('jquery'), '1.8', true );

    //Options to pass to JS file
    $sb_instagram_settings = get_option('sb_instagram_settings');
    $data = array(
        'sb_instagram_at' => trim($sb_instagram_settings['sb_instagram_at'])
        // 'sb_instagram_user_id' => trim($sb_instagram_settings['sb_instagram_user_id'])
    );

    //Enqueue it to load it onto the page
    wp_enqueue_script('sb_instagram_scripts');

    //Pass option to JS file
    wp_localize_script('sb_instagram_scripts', 'sb_instagram_js_options', $data);
}

//Uninstall
function sb_instagram_uninstall()
{
    if ( ! current_user_can( 'activate_plugins' ) )
        return;
    //Settings
    delete_option( 'sb_instagram_settings' );
}
register_uninstall_hook( __FILE__, 'sb_instagram_uninstall' );


// error_reporting(~0);
?>