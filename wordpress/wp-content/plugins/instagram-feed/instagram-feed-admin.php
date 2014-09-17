<?php

function sb_instagram_menu() {
    add_menu_page(
        'Instagram Feed',
        'Instagram Feed',
        'manage_options',
        'instagram',
        'sb_instagram_settings_page'
    );
    add_submenu_page(
        'instagram',
        'Settings',
        'Settings',
        'manage_options',
        'instagram',
        'sb_instagram_settings_page'
    );
}
add_action('admin_menu', 'sb_instagram_menu');


function sb_instagram_settings_page() {

    //Hidden fields
    $sb_instagram_settings_hidden_field = 'sb_instagram_settings_hidden_field';

    //Declare defaults
    $sb_instagram_settings_defaults = array(
        'sb_instagram_at'                   => '',
        'sb_instagram_user_id'              => '',
        'sb_instagram_width'                => '100',
        'sb_instagram_width_unit'           => '%',
        'sb_instagram_height'               => '',
        'sb_instagram_num'                  => '20',
        'sb_instagram_height_unit'          => '',
        'sb_instagram_cols'                 => '',
        'sb_instagram_image_padding'        => '',
        'sb_instagram_image_padding_unit'   => '',
        // 'sb_instagram_sort'                 => '',
        'sb_instagram_background'           => '',
        'sb_instagram_show_btn'             => true,
        'sb_instagram_btn_background'       => '',
        'sb_instagram_btn_text_color'       => '',
        'sb_instagram_image_res'            => 'full'
    );
    //Save defaults in an array
    $options = wp_parse_args(get_option('sb_instagram_settings'), $sb_instagram_settings_defaults);
    add_option( 'sb_instagram_settings', $options );

    //Set the page variables
    $sb_instagram_at = $options[ 'sb_instagram_at' ];
    $sb_instagram_user_id = $options[ 'sb_instagram_user_id' ];
    $sb_instagram_width = $options[ 'sb_instagram_width' ];
    $sb_instagram_width_unit = $options[ 'sb_instagram_width_unit' ];
    $sb_instagram_height = $options[ 'sb_instagram_height' ];
    $sb_instagram_height_unit = $options[ 'sb_instagram_height_unit' ];
    $sb_instagram_num = $options[ 'sb_instagram_num' ];
    $sb_instagram_cols = $options[ 'sb_instagram_cols' ];
    $sb_instagram_image_padding = $options[ 'sb_instagram_image_padding' ];
    $sb_instagram_image_padding_unit = $options[ 'sb_instagram_image_padding_unit' ];
    // $sb_instagram_sort = $options[ 'sb_instagram_sort' ];
    $sb_instagram_background = $options[ 'sb_instagram_background' ];
    $sb_instagram_show_btn = $options[ 'sb_instagram_show_btn' ];
    $sb_instagram_btn_background = $options[ 'sb_instagram_btn_background' ];
    $sb_instagram_btn_text_color = $options[ 'sb_instagram_btn_text_color' ];
    $sb_instagram_image_res = $options[ 'sb_instagram_image_res' ];

    // See if the user has posted us some information. If they did, this hidden field will be set to 'Y'.
    if( isset($_POST[ $sb_instagram_settings_hidden_field ]) && $_POST[ $sb_instagram_settings_hidden_field ] == 'Y' ) {

        $sb_instagram_at = $_POST[ 'sb_instagram_at' ];
        $sb_instagram_user_id = $_POST[ 'sb_instagram_user_id' ];
        $sb_instagram_width = $_POST[ 'sb_instagram_width' ];
        $sb_instagram_width_unit = $_POST[ 'sb_instagram_width_unit' ];
        $sb_instagram_height = $_POST[ 'sb_instagram_height' ];
        $sb_instagram_height_unit = $_POST[ 'sb_instagram_height_unit' ];
        $sb_instagram_num = $_POST[ 'sb_instagram_num' ];
        $sb_instagram_cols = $_POST[ 'sb_instagram_cols' ];
        $sb_instagram_image_padding = $_POST[ 'sb_instagram_image_padding' ];
        $sb_instagram_image_padding_unit = $_POST[ 'sb_instagram_image_padding_unit' ];
        // $sb_instagram_sort = $_POST[ 'sb_instagram_sort' ];
        $sb_instagram_background = $_POST[ 'sb_instagram_background' ];
        $sb_instagram_show_btn = $_POST[ 'sb_instagram_show_btn' ];
        $sb_instagram_btn_background = $_POST[ 'sb_instagram_btn_background' ];
        $sb_instagram_btn_text_color = $_POST[ 'sb_instagram_btn_text_color' ];
        $sb_instagram_image_res = $_POST[ 'sb_instagram_image_res' ];

        $options[ 'sb_instagram_at' ] = $sb_instagram_at;
        $options[ 'sb_instagram_user_id' ] = $sb_instagram_user_id;
        $options[ 'sb_instagram_width' ] = $sb_instagram_width;
        $options[ 'sb_instagram_width_unit' ] = $sb_instagram_width_unit;
        $options[ 'sb_instagram_height' ] = $sb_instagram_height;
        $options[ 'sb_instagram_height_unit' ] = $sb_instagram_height_unit;
        $options[ 'sb_instagram_num' ] = $sb_instagram_num;
        $options[ 'sb_instagram_cols' ] = $sb_instagram_cols;
        $options[ 'sb_instagram_image_padding' ] = $sb_instagram_image_padding;
        $options[ 'sb_instagram_image_padding_unit' ] = $sb_instagram_image_padding_unit;
        // $options[ 'sb_instagram_sort' ] = $sb_instagram_sort;
        $options[ 'sb_instagram_background' ] = $sb_instagram_background;
        $options[ 'sb_instagram_show_btn' ] = $sb_instagram_show_btn;
        $options[ 'sb_instagram_btn_background' ] = $sb_instagram_btn_background;
        $options[ 'sb_instagram_btn_text_color' ] = $sb_instagram_btn_text_color;
        $options[ 'sb_instagram_image_res' ] = $sb_instagram_image_res;

        update_option( 'sb_instagram_settings', $options );

        ?>
        <div class="updated"><p><strong><?php _e('Settings saved.', 'custom-facebook-feed' ); ?></strong></p></div>
    <?php } ?>

    <div id="sbi_admin" class="wrap">
        <div id="header">
            <h2><?php _e('Instagram Feed Settings'); ?></h2>
        </div>
        <form name="form1" method="post" action="">
            <input type="hidden" name="<?php echo $sb_instagram_settings_hidden_field; ?>" value="Y">

            <table class="form-table">
                <tbody>
                    <h3><?php _e('Step 1: Configure'); ?></h3>

                    <div id="sbi_config">
                        <a href="https://instagram.com/oauth/authorize/?client_id=1654d0c81ad04754a898d89315bec227&redirect_uri=http://johndoesdesign.com/instagram-dev.php?return_uri=<?php echo admin_url('admin.php?page=instagram'); ?>&response_type=token" class="sbi_admin_btn"><?php _e('Log in and get my Access Token and User ID'); ?></a>
                    </div>
                    
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Access Token'); ?></label></th>
                        <td>
                            <input name="sb_instagram_at" id="sb_instagram_at" type="text" value="<?php esc_attr_e( $sb_instagram_at ); ?>" size="50" />
                            &nbsp;<a class="sbi_tooltip_link" href="JavaScript:void(0);"><?php _e("What is this?"); ?></a>
                            <p class="sbi_tooltip"><?php _e("In order to display your photos you need an Access Token from Instagram. To get yours, simply click the button above and log into Instagram."); ?>.</p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('User ID'); ?></label></th>
                        <td>
                            <input name="sb_instagram_user_id" id="sb_instagram_user_id" type="text" value="<?php esc_attr_e( $sb_instagram_user_id ); ?>" size="25" />
                            &nbsp;<a class="sbi_tooltip_link" href="JavaScript:void(0);"><?php _e("What is this?"); ?></a>
                            <p class="sbi_tooltip"><?php _e("This is the ID of the Instagram account you want to display photos from. To get your ID simply click on the button above and log into Instagram.<br /><br />You can also display photos from other peoples Instagram accounts. To find their User ID you can use <a href='http://jelled.com/instagram/lookup-user-id' target='_blank'>this tool</a>."); ?></p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>
            <hr />

            <table class="form-table">
                <tbody>
                    <h3><?php _e('Step 2: Customize'); ?></h3>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Width of Feed'); ?></label></th>
                        <td>
                            <input name="sb_instagram_width" type="text" value="<?php esc_attr_e( $sb_instagram_width ); ?>" size="4" />
                            <select name="sb_instagram_width_unit">
                                <option value="px" <?php if($sb_instagram_width_unit == "px") echo 'selected="selected"' ?> ><?php _e('px'); ?></option>
                                <option value="%" <?php if($sb_instagram_width_unit == "%") echo 'selected="selected"' ?> ><?php _e('%'); ?></option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Height of Feed'); ?></label></th>
                        <td>
                            <input name="sb_instagram_height" type="text" value="<?php esc_attr_e( $sb_instagram_height ); ?>" size="4" />
                            <select name="sb_instagram_height_unit">
                                <option value="px" <?php if($sb_instagram_height_unit == "px") echo 'selected="selected"' ?> ><?php _e('px'); ?></option>
                                <option value="%" <?php if($sb_instagram_height_unit == "%") echo 'selected="selected"' ?> ><?php _e('%'); ?></option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Number of Photos'); ?></label></th>
                        <td>
                            <input name="sb_instagram_num" type="text" value="<?php esc_attr_e( $sb_instagram_num ); ?>" size="4" />
                            <span class="sbi_note"><?php _e('Number of photos to show initially. Maximum of 33.'); ?></span>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Number of Columns'); ?></label></th>
                        <td>

                            <select name="sb_instagram_cols">
                                <option value="1" <?php if($sb_instagram_cols == "1") echo 'selected="selected"' ?> ><?php _e('1'); ?></option>
                                <option value="2" <?php if($sb_instagram_cols == "2") echo 'selected="selected"' ?> ><?php _e('2'); ?></option>
                                <option value="3" <?php if($sb_instagram_cols == "3") echo 'selected="selected"' ?> ><?php _e('3'); ?></option>
                                <option value="4" <?php if($sb_instagram_cols == "4") echo 'selected="selected"' ?> ><?php _e('4'); ?></option>
                                <option value="5" <?php if($sb_instagram_cols == "5") echo 'selected="selected"' ?> ><?php _e('5'); ?></option>
                                <option value="6" <?php if($sb_instagram_cols == "6") echo 'selected="selected"' ?> ><?php _e('6'); ?></option>
                                <option value="7" <?php if($sb_instagram_cols == "7") echo 'selected="selected"' ?> ><?php _e('7'); ?></option>
                                <option value="8" <?php if($sb_instagram_cols == "8") echo 'selected="selected"' ?> ><?php _e('8'); ?></option>
                                <option value="9" <?php if($sb_instagram_cols == "9") echo 'selected="selected"' ?> ><?php _e('9'); ?></option>
                                <option value="10" <?php if($sb_instagram_cols == "10") echo 'selected="selected"' ?> ><?php _e('10'); ?></option>
                            </select>

                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Image Resolution'); ?></label></th>
                        <td>

                            <select name="sb_instagram_image_res">
                                <option value="full" <?php if($sb_instagram_image_res == "full") echo 'selected="selected"' ?> ><?php _e('Full size (640x640)'); ?></option>
                                <option value="medium" <?php if($sb_instagram_image_res == "medium") echo 'selected="selected"' ?> ><?php _e('Medium (306x306)'); ?></option>
                                <option value="thumb" <?php if($sb_instagram_image_res == "thumb") echo 'selected="selected"' ?> ><?php _e('Thumbnail (150x150)'); ?></option>
                            </select>

                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Padding around Images'); ?></label></th>
                        <td>
                            <input name="sb_instagram_image_padding" type="text" value="<?php esc_attr_e( $sb_instagram_image_padding ); ?>" size="4" />
                            <select name="sb_instagram_image_padding_unit">
                                <option value="px" <?php if($sb_instagram_image_padding_unit == "px") echo 'selected="selected"' ?> ><?php _e('px'); ?></option>
                                <option value="%" <?php if($sb_instagram_image_padding_unit == "%") echo 'selected="selected"' ?> ><?php _e('%'); ?></option>
                            </select>
                        </td>
                    </tr>
                    <!-- <tr valign="top">
                        <th scope="row"><label><?php _e('Sort Images By'); ?></label></th>
                        <td>
                            <select name="sb_instagram_sort">
                                <option value="none" <?php if($sb_instagram_sort == "none") echo 'selected="selected"' ?> ><?php _e('None'); ?></option>
                                <option value="most-recent" <?php if($sb_instagram_sort == "most-recent") echo 'selected="selected"' ?> ><?php _e('Newest to Oldest'); ?></option>
                                <option value="least-recent" <?php if($sb_instagram_sort == "least-recent") echo 'selected="selected"' ?> ><?php _e('Oldest to newest'); ?></option>
                                <option value="most-liked" <?php if($sb_instagram_sort == "most-liked") echo 'selected="selected"' ?> ><?php _e('Most liked first'); ?></option>
                                <option value="least-liked" <?php if($sb_instagram_sort == "least-liked") echo 'selected="selected"' ?> ><?php _e('Least liked first'); ?></option>
                                <option value="most-commented" <?php if($sb_instagram_sort == "most-commented") echo 'selected="selected"' ?> ><?php _e('Most commented first'); ?></option>
                                <option value="least-commented" <?php if($sb_instagram_sort == "least-commented") echo 'selected="selected"' ?> ><?php _e('Least commented first'); ?></option>
                                <option value="random" <?php if($sb_instagram_sort == "random") echo 'selected="selected"' ?> ><?php _e('Random'); ?></option>
                            </select>
                        </td>
                    </tr> -->
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Background Color'); ?></label></th>
                        <td>
                            <input name="sb_instagram_background" type="text" value="<?php esc_attr_e( $sb_instagram_background ); ?>" class="sbi_colorpick" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e("Show the 'Load More' button"); ?></label></th>
                        <td>
                            <input type="checkbox" name="sb_instagram_show_btn" id="sb_instagram_show_btn" <?php if($sb_instagram_show_btn == true) echo 'checked="checked"' ?> />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Button Background Color'); ?></label></th>
                        <td>
                            <input name="sb_instagram_btn_background" type="text" value="<?php esc_attr_e( $sb_instagram_btn_background ); ?>" class="sbi_colorpick" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label><?php _e('Button Text Color'); ?></label></th>
                        <td>
                            <input name="sb_instagram_btn_text_color" type="text" value="<?php esc_attr_e( $sb_instagram_btn_text_color ); ?>" class="sbi_colorpick" />
                        </td>
                    </tr>

                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>

        <hr />

        <h3><?php _e('Step 3: Displaying your Feed'); ?></h3>
        <p><?php _e("Copy and paste the following shortcode directly into the page, post or widget where you'd like the feed to show up:"); ?></p>
        <input type="text" value="[instagram-feed]" size="16" readonly="readonly" style="text-align: center;" onclick="this.focus();this.select()" title="<?php _e('To copy, click the field then press Ctrl + C (PC) or Cmd + C (Mac).'); ?>" />

        <p><?php _e("If you'd like to display multiple feeds then you can set different settings directly in the shortcode like so:"); ?>
        <code>[instagram-feed num=9 cols=3]</code></p>
        <p><?php _e("See the table below for a full list of available shortcode options:"); ?></p>

        <table class="sbi_shortcode_table">
            <tbody>
                <tr valign="top">
                    <th scope="row"><?php _e('Shortcode option'); ?></th>
                    <th scope="row"><?php _e('Description'); ?></th>
                    <th scope="row"><?php _e('Example'); ?></th>
                </tr>
                <tr>
                    <td>id</td>
                    <td><?php _e('An Instagram User ID'); ?></td>
                    <td><code>[instagram-feed id=1234567]</code></td>
                </tr>
                    <td>width</td>
                    <td>The width of your feed. Any number.</td>
                    <td><code>[instagram-feed width=50]</code></td>
                </tr>
                <tr>
                    <td>widthunit</td>
                    <td>The unit of the width. 'px' or '%'</td>
                    <td><code>[instagram-feed widthunit=%]</code></td>
                </tr>
                <tr>
                    <td>height</td>
                    <td>The height of your feed. Any number.</td>
                    <td><code>[instagram-feed height=250]</code></td>
                </tr>
                <tr>
                    <td>heightunit</td>
                    <td>The unit of the height. 'px' or '%'</td>
                    <td><code>[instagram-feed heightunit=px]</code></td>
                </tr>
                <tr>
                    <td>num</td>
                    <td>The number of photos to display initially. Maximum is 33.</td>
                    <td><code>[instagram-feed num=10]</code></td>
                </tr>
                <tr>
                    <td>cols</td>
                    <td>The number of columns in your feed. 1 - 10.</td>
                    <td><code>[instagram-feed cols=5]</code></td>
                </tr>
                <tr>
                    <td>imagepadding</td>
                    <td>The spacing around your photos</td>
                    <td><code>[instagram-feed imagepadding=10]</code></td>
                </tr>
                <tr>
                    <td>imagepaddingunit</td>
                    <td>The unit of the padding. 'px' or '%'</td>
                    <td><code>[instagram-feed imagepaddingunit=px]</code></td>
                </tr>
                <tr>
                    <td>background</td>
                    <td>The background color of the feed. Any hex color code.</td>
                    <td><code>[instagram-feed background=#ffff00]</code></td>
                </tr>
                <tr>
                    <td>showbutton</td>
                    <td>Whether to show the 'Load More' button. 'true' or 'false'.</td>
                    <td><code>[instagram-feed showbutton='false']</code></td>
                </tr>
                <tr>
                    <td>buttoncolor</td>
                    <td>The background color of the button. Any hex color code.</td>
                    <td><code>[instagram-feed buttoncolor=#000]</code></td>
                </tr>
                <tr>
                    <td>buttontextcolor</td>
                    <td>The text color of the button. Any hex color code.</td>
                    <td><code>[instagram-feed buttontextcolor=#fff]</code></td>
                </tr>
                <tr>
                    <td>imageres</td>
                    <td>The resolution/size of the photos. 'full', 'medium' or 'thumb'.</td>
                    <td><code>[instagram-feed imageres=full]</code></td>
                </tr>
            </tbody>
        </table>

        <a href="http://wordpress.org/plugins/custom-facebook-feed/" target="_blank" style="display: block; margin: 20px 0 0 0;">
            <img src="<?php echo plugins_url( 'img/cff-promo.png' , __FILE__ ) ?>" alt="The Custom Facebook Feed plugin">
        </a>
    </div> <!-- end #admin -->

<?php
}

function sb_instagram_admin_style() {
        wp_register_style( 'sb_instagram_admin_css', plugin_dir_url( __FILE__ ) . 'css/sb-instagram-admin.css', false, '1.0.0' );
        wp_enqueue_style( 'sb_instagram_admin_css' );
        wp_enqueue_style( 'wp-color-picker' );
}
add_action( 'admin_enqueue_scripts', 'sb_instagram_admin_style' );

function sb_instagram_admin_scripts() {
    wp_enqueue_script( 'sb_instagram_admin_js', plugin_dir_url( __FILE__ ) . 'js/sb-instagram-admin.js' );
    if( !wp_script_is('jquery-ui-draggable') ) { 
        wp_enqueue_script(
            array(
            'jquery',
            'jquery-ui-core',
            'jquery-ui-draggable'
            )
        );
    }
    wp_enqueue_script(
        array(
        'hoverIntent',
        'wp-color-picker'
        )
    );
}
add_action( 'admin_enqueue_scripts', 'sb_instagram_admin_scripts' );


?>