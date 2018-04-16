<?php
/*
  Plugin Name: CMT Main Configuration
  Plugin URI: https://github.com/scalpmed/cmt-main
  Description: Customizes WordPress in various of ways for CMT.
  Version: 1.0
  Author: Duane Leem
  Author URI: https://duaneleem.com
  License: GPLv2+
  Text Domain: cmt-main
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Change login page logo from WP to CMT.
 */
function cmt_change_logo() {
  require_once("includes/cmt-customize-login.php");
  CMT_Customize_Login_Screen::init();
}
add_action("login_enqueue_scripts", "cmt_change_logo");

/**
 * Remove WP admin bar for subscriber.
 */
function cmt_removeAdminBarForSubscriber() {
  require_once("includes/cmt-remove-admin-bar.php");
  CMT_Remove_Admin_Bar::init();
} // cmt_removeAdminBarForSubscriber()
add_action("after_setup_theme", "cmt_removeAdminBarForSubscriber");