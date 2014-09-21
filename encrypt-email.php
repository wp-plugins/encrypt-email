<?php
/**
 * Plugin Name: Encrypt Email
 * Plugin URI: http://github.com/lukewatts/encrypt-email
 * Description: A plugin which encrypts mailto links using Wordpress function antispambot()
 * Version: 2.0.0
 * Author: Luke Watts
 * Author URI: http://luke-watts.com
 * License: GPLv2
 */

/**
 * Encrypts email using Wordpress function antispambot()
 *
 * Shortcode [encrypt_email]
 *
 * Shortcode optional attributes [encrypt_email email="your@email-here.com" text="Contact Us"]
 *
 * @param array
 * @return string
 * @since  1.0.0
 */
function lw_encrypt_email( $atts ) {
  
  // Extract attributes into variables
  extract( shortcode_atts( array(
    'email' => 'your@email-here.com',
    'text'  => '',
  ), $atts, 'encrypt_email' ) );

  // Encrypt the email given
  $encrypted_email = antispambot( $email );

  // If no display text set then use the encrypted email
  if($text == '') {
    $text = $encrypted_email;
  }

  // Build and output the encrytped mailto link
  return '<a href="mailto: ' . $encrypted_email . '">' . $text . '</a>';
}

add_shortcode( 'encrypt_email', 'lw_encrypt_email' );

/**
 * Allows wrapping of emails in content and widgets using [encrypted_email]email@here.com[/encrypted_email]
 *
 * Shorcode optional attributes [encrypted_email text="Text to be displayed goes here"]email@here.com[encrypted_email]
 * 
 * @param  array  $atts     The attributes used in the shortcode
 * @param  string $content  The content to be wrapped with the shortcode
 * @return string           The markup to be dynamically created and output
 * @since  1.1.0
 */
function lw_encrypted_email( $atts, $content = null ) {
  
  // Extract attributes into variables
  extract( shortcode_atts( array(
    'text' => '',
  ), $atts ) );

  // Encrypts the email given
  $content = antispambot( $content );


  // If no display text set then use the encrypted email
  if( $text == '' ) {
    $text = $content;
  }

  // Build and output the ecrypted email link
  return '<a href="mailto:' . $content . '">' . $text . '</a>';
}

add_shortcode( 'encrypted_email', 'lw_encrypted_email' );

/* TinyMCE Button Plugin */
include_once( 'tinyMCE/encrypt-email-button.php' );