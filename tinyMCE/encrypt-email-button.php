<?php
/**
 * Encrypt Email TinyMCE Button
 *
 * @return void
 * @since  2.0.0
 */
function lw_encrypt_email_add_mce_button()
{
  if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
    return;
  }

  if (get_user_option('rich_editing') == 'true') {
    add_filter('mce_external_plugins', 'lw_add_encrypt_email_button');
    add_filter('mce_buttons', 'lw_register_encrypt_email_button');
  }
}
add_action('admin_head', 'lw_encrypt_email_add_mce_button');

/**
 * Add encrypt-email-mce-plugin.js file
 * 
 * @param  string $plugin_array Add path to encrypt-email-mce-plugin.js to $plugin_array
 * @return string               Absolute path to encrypt-email-mce-plugin.js
 * @since  2.0.0
 */
function lw_add_encrypt_email_button($plugin_array)
{
  $plugin_array['lw_mce_encrypt_email'] = plugins_url() . '/encrypt-email/tinyMCE/js/encrypt-email-mce-plugin.js';
  
  return $plugin_array;
}

/**
 * Add lw_mce_enrypt_email to $buttons array
 * @param  array $buttons Array of TinyMCE buttons
 * @return array          Array of TinyMCE buttons
 * @since  2.0.0
 */
function lw_register_encrypt_email_button($buttons)
{
  array_push($buttons, 'lw_mce_encrypt_email');
  
  return $buttons;
}