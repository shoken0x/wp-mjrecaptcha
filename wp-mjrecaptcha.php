<?php
/*
Plugin Name: WP-MJreCAPTCHA
Plugin URI: https://github.com/syokenz/wp-mjrecaptcha
Description: Integrates Mahjong reCAPTCHA anti-spam solutions with wordpress
Version: 0.1.0
Author: Shoken Fujisaki
Email: mjrecaptcha@gmail.com
Author URI: https://github.com/syokenz
*/

// this is the 'driver' file that instantiates the objects and registers every hook

define('ALLOW_INCLUDE', true);

require_once('mjrecaptcha.php');
#require_once('mailhide.php');

$recaptcha = new reCAPTCHA('mjrecaptcha_options');
#$mailhide = new MailHide('mailhide_options');

?>
