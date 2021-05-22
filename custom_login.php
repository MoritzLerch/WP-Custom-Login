<?php
  defined('ABSPATH') or die("Thanks for visting");
  /**
  * Plugin Name: Custom Login Page
  * Plugin URI: https://www.moritz-lerch.de
  * Description: Plugin, um das Anmeldefenster von WordPress zu personalisieren. Custom Logo + Darkmode
  * Version: 1.8
  * Author: Moritz Lerch
  * Author URI: https://www.moritz-lerch.de
  * License: GPL2
  * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  * Text Domain:  cus-wp-admin-logo
  */


// logo
function custom_login_logo() { 
    $dir = plugin_dir_url( __FILE__ );
    $reldir = str_replace(get_home_url(), "", $dir);
    $file = $reldir . "assets/logo.svg";
    
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $file ?>);
			background-size: 150px;
			width: 150px;
			height: 150px;
            padding-bottom: 30px;
        }
    </style>
<?php }

function custom_login_darkmode() { ?>
    <style type="text/css">
        body.login {
            background-color: #141b2d;
            color: #fff;
        }
        body.login > div > form {
            background: #1f2940;
            border: none; 
            border-radius: 5px;
        }
        .login .button {
            transition: ease-out 300ms;
        }
        .login #login_error, .login .message, .login .success {
            background-color: #1f2940 !important;
        }
        .login form .input, .login form input[type="checkbox"], .login input[type="text"] {
            background-color: #141b2d !important;
        }
        .login input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], select, textarea {
            color: #fff !important;
        }
        .login #backtoblog a, .login #nav a {
            color: #656d75 !important;
            transition: ease-out 300ms;
        }
        .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
            color: #8da6b9 !important;
        }
    </style>
<?php }

// link
function custom_login_logo_url() {
    return get_bloginfo( 'url' );
}

// title
function custom_login_logo_url_title() {
    return get_bloginfo('blogname');
}

add_action('login_enqueue_scripts', 'custom_login_logo');
add_action('login_enqueue_scripts', 'custom_login_darkmode');
add_filter('login_headerurl', 'custom_login_logo_url');
add_filter('login_headertitle', 'custom_login_logo_url_title');
?>