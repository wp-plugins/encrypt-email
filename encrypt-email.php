<?php

/**
 * Plugin Name: Encrypt Email
 * Plugin URI: http://github.com/lukewatts/encrypt-email
 * Description: A plugin which encrypts mailto links using Wordpress function antispambot()
 * Version: 3.2.0
 * Author: Luke Watts
 * Author URI: http://luke-watts.com
 * License: GPLv2
 */

require_once(plugin_dir_path(__FILE__) . 'tinyMCE/encrypt-email-button.php');   // Class which handles creating TinyMCE button
require_once(plugin_dir_path(__FILE__) . 'libs/EncryptEmailShortcode.php');     // Class which handles creating the shortcodes
require_once(plugin_dir_path(__FILE__) . 'libs/EncryptEmailAsset.php');         // Class which handles loading the scripts and styles
require_once(plugin_dir_path(__FILE__) . 'libs/EncryptEmailQuickTag.php');      // Class which handles creating QuickTags

new EncryptEmailShortcode;  // Creates shortcodes
new EncryptEmailAsset;      // Loads JS and CSS
new EncryptEmailQuickTag;   // Creates QuickTags
