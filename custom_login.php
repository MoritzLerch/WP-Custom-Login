<?php
  defined('ABSPATH') or die("Thanks for visting");
  /**
  * Plugin Name: Custom Login Page
  * Plugin URI: https://moritz-lerch.de
  * Description: Plugin, um das Anmeldefenster von WordPress zu personalisieren / momentan noch ohne Variablen
  * Version: 1.7
  * Author: Moritz Lerch
  * Author URI: https://moritz-lerch.de
  * License: GPL2
  * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  * Text Domain:  cus-wp-admin-logo
  */

	
// logo
function custom_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(http://YOURWEBSITEURL/wp-content/themes/img/logo.png);
			background-size: 150px;
			width: 150px;
			height: 150px;
            padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'custom_login_logo' );

// link
function custom_login_logo_url() {
    return get_bloginfo( 'url' );
}

add_filter( 'login_headerurl', 'custom_login_logo_url' );

// title
function custom_login_logo_url_title() {
    return get_bloginfo( 'blogname' );
}

add_filter( 'login_headertitle', 'custom_login_logo_url_title' );
?>
