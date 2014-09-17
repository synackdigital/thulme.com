=== Instagram Feed ===
Contributors: smashballoon
Tags: Instagram, Instagram feed, Instagram photos, Instagram plugin, Instagram stream, Custom Instagram Feed, responsive Instagram, mobile Instagram, Instagram posts, Instagram wall, Instagram account
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.1.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a beautifully clean, customizable, and responsive Instagram feed to your website

== Description ==

Display the Instagram photo feed of any non-private Instagram account.

= Features =
* Super **simple to set up**
* Completely **responsive** and mobile ready - layout looks great on any screen size and in any container width
* **Completely customizable** - Customize the width, height, number of photos, number of columns, image size, background color, image spacing and more!
* Display **multiple Instagram feeds** on the same page or on different pages throughout your site
* Use the built-in **shortcode options** to completely customize each of your Instagram feeds
* Display thumbnail, medium or **full-size photos** from your Instagram feed
* **Infinitely load more** of your Instagram photos with the 'Load More' button

= Benefits =
* Increase your Instagram followers by displaying your Instagram content on your website
* Save time and increase efficiency by only posting your photos to Instagram and automatically displaying them on your website

= Featured Review =
"**Great instagram plugin & support** - Was looking for a plugin that gave me control over how it displayed (specifically, 3-columns). This plugin did the trick quite nicely! And when I had a minor issue with obtaining the code I needed from Instagram to get it working, a quick email to support at smash balloon was replied to within hours. Good plugin, good support!" - [olivmich](http://wordpress.org/support/topic/great-instagram-plugin-support 'Great instagram plugin & support')

= Feedback or Support =
We're dedicated to providing the most customizable, robust and well supported Instagram feed plugin in the world, so if you have an issue or have any feedback on how to improve the plugin then please open a ticket in the [Support forum](http://wordpress.org/support/plugin/instagram-feed 'Instagram Feed Support Forum').

Lots more features coming soon!

== Installation ==

1. Install the Instagram plugin either via the WordPress plugin directory, or by uploading the files to your web server (in the `/wp-content/plugins/` directory).
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to the 'Instagram Feed' settings page to configure your Instagram feed.
4. Use the shortcode `[instagram-feed]` in your page, post or widget to display your photos.
5. You can display multiple Instagram feeds by using shortcode options, for example: `[instagram-feed id=YOUR_USER_ID_HERE cols=3 width=50 widthunit=%]`

= Shortcode Options =
* **id** - An Instagram User ID - Example: `[instagram-feed id=1234567]`
* **width** - The width of your feed. Any number - Example: `[instagram-feed width=50]`
* **widthunit** - The unit of the width. 'px' or '%' - Example: `[instagram-feed widthunit=%]`
* **height** - The height of your feed. Any number - Example: `[instagram-feed height=250]`
* **heightunit** - The unit of the height. 'px' or '%' - Example: `[instagram-feed heightunit=px]`
* **num** - The number of photos to display initially. Maximum is 33 - Example: `[instagram-feed num=10]`
* **cols** - The number of columns in your feed. 1 - 10 - Example: `[instagram-feed cols=5]`
* **imagepadding** - The spacing around your photos - Example: `[instagram-feed imagepadding=10]`
* **imagepaddingunit** - The unit of the padding. 'px' or '%' - Example: `[instagram-feed imagepadding=px]`
* **background** - The background color of the feed. Any hex color code - Example: `[instagram-feed background=#ffff00]`
* **showbutton** - Whether to show the 'Load More' button. 'true' or 'false' - Example: `[instagram-feed showbutton='false']`
* **buttoncolor** - The background color of the button. Any hex color code - Example: `[instagram-feed buttoncolor=#000]`
* **buttontextcolor** - The text color of the button. Any hex color code - Example: `[instagram-feed buttontextcolor=#fff]`
* **imageres** - The resolution/size of the photos. 'full', 'medium' or 'thumb' - Example: `[instagram-feed imageres=full]`

== Frequently Asked Questions ==

= Can I display multiple Instagram feeds on my site or on the same page? =

Yep. You can display multiple Instagram feeds by using our built-in shortcode options, for example: `[instagram-feed id=YOUR_USER_ID_HERE cols=3 width=50 widthunit=%]`.

= How do I find my Instagram Access Token and User ID =

We've made it super easy. Simply click on the big blue button on the Instagram plugins Settings page and log into your Instagram account. The plugin will then retrieve and display both your Access Token and User ID from Instagram.

You can also display photos from other peoples Instagram accounts. To find their Instagram User ID you can use [this tool](http://jelled.com/instagram/lookup-user-id).

= Are there any security issues with using an Access Token on my site? =

Nope. The Access Token used in the plugin is a "read only" token, which means that it could never be used maliciously to manipulate your Instagram account.

= My Instagram feed isn't display. Why not!? =

There are 2 common reasons for this:

* Your Instagram account is set to private. Instagram doesn't allow photos from private Instagram accounts to be displayed publicly.
* Your website contains a JavaScript error which is preventing JavaScript from running. The plugin uses JavaScript to load the Instagram photos into your page and so needs JavaScript to be running in order to work. You would need to remove any existing JavaScript errors on your website for the plugin to be able to load in your feed.

If you're still having an issue displaying your feed then please open a ticket in the [Support forum](http://wordpress.org/support/plugin/instagram-feed 'Instagram Feed Support Forum') with a link to the page where you're trying to display the feed and, if possible, a link to your Instagram account.

= How do I embed my Instagram Feed directly into a WordPress page template? =

You can embed your Instagram feed directly into a template file by using the WordPress [do_shortcode](http://codex.wordpress.org/Function_Reference/do_shortcode) function: `<?php echo do_shortcode('[instagram-feed]'); ?>`.

= What are the available shortcode options that I can use to customize my Instagram feed? =

The below options are available on the Instagram Feed Settings page but can also be used directly in the `[instagram-feed]` shortcode to customize individual Instagram feeds on a feed-by-feed basis.

* **id** - An Instagram User ID - Example: `[instagram-feed id=1234567]`
* **width** - The width of your feed. Any number - Example: `[instagram-feed width=50]`
* **widthunit** - The unit of the width. 'px' or '%' - Example: `[instagram-feed widthunit=%]`
* **height** - The height of your feed. Any number - Example: `[instagram-feed height=250]`
* **heightunit** - The unit of the height. 'px' or '%' - Example: `[instagram-feed heightunit=px]`
* **num** - The number of photos to display initially. Maximum is 33 - Example: `[instagram-feed num=10]`
* **cols** - The number of columns in your feed. 1 - 10 - Example: `[instagram-feed cols=5]`
* **imagepadding** - The spacing around your photos - Example: `[instagram-feed imagepadding=10]`
* **imagepaddingunit** - The unit of the padding. 'px' or '%' - Example: `[instagram-feed imagepadding=px]`
* **background** - The background color of the feed. Any hex color code - Example: `[instagram-feed background=#ffff00]`
* **showbutton** - Whether to show the 'Load More' button. 'true' or 'false' - Example: `[instagram-feed showbutton='false']`
* **buttoncolor** - The background color of the button. Any hex color code - Example: `[instagram-feed buttoncolor=#000]`
* **buttontextcolor** - The text color of the button. Any hex color code - Example: `[instagram-feed buttontextcolor=#fff]`
* **imageres** - The resolution/size of the photos. 'full', 'medium' or 'thumb' - Example: `[instagram-feed imageres=full]`

== Screenshots ==

1. Display your Instagram photos in multiple columns and with a scrollbar if desired.
2. Customize the number of columns, colors and size of your Instagram feed.
3. An example of two columns with no space between photos.
4. The Instagram Settings page. Super simple to set up and customize.

== Changelog ==

= 1.1.6 =
* Fix: A maximum width is now only applied to the feed when the photos are displayed in one column
* Added a banner to the settings page promoting our free [Custom Facebook Feed](http://wordpress.org/plugins/custom-facebook-feed/) plugin

= 1.1.5 =
* Fix: Added a line of code which enables shortcodes to be used in widgets for themes which don't have it enabled

= 1.1.4 =
* Fix: Fixed an issue with the Access Token and User ID retrieval functionality in certain web browsers

= 1.1.3 =
* Fix: Fixed an issue with the maximum image width
* Fix: Corrected a typo in the Shortcode Options table

= 1.1.1 =
* Pre-tested for the upcoming WordPress 4.0 update
* Fix: Fixed an uncommon issue related to the output of the Instagram content

= 1.1 =
* New: Added an option to set the number of Instagram photos to be initially displayed
* New: Added an option to show or hide the 'Load More' button
* New: Added 'Step 3' to the Settings page explaining how to display your feed using the [instagram-feed] shortcode
* New: Added a full list of all available shortcode options to help you if customizing multiple Instagram feeds

= 1.0.2 =
* Fix: Fixed an issue with the Instagram login URL on the Settings page

= 1.0.1 =
* Fix: Fixed an issue with the 'Load More' button opening an empty browser window in Firefox

= 1.0 =
* Launched the Instagram Feed plugin!