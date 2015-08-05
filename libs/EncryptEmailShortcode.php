<?php 

/**
 * Shortcodes for Encrypt Email Plugin
 *
 * @since 2.2.0
 *       
 */
class EncryptEmailShortcode
{
	/**
	 * Construct
	 *
	 * Automatically creates the shortcodes once a new method is written.
	 * Uses the same name as the method for the shortcode tag.
	 *
	 * Example: dropcap method creates the shortcode [dropcap]
	 *
	 * @since 1.0.0
	 */
	public function __construct()
	{
			$shortcodes = get_class_methods($this);
			
			for ($i = 0; count($shortcodes) > $i; $i ++) {
					add_shortcode($shortcodes[$i], array(
							$this,
							$shortcodes[$i]
					));
			}
	}

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
	public function encrypt_email($atts)
	{
		
		// Extract attributes into variables
		extract(shortcode_atts(array(
			'email' => 'your@email-here.com',
			'text'  => '',
		), $atts, 'encrypt_email'));

		// Encrypt the email given
		$encrypted_email = antispambot($email);

		// If no display text set then use the encrypted email
		if ($text == '') {
			$text = $encrypted_email;
		}

		// Build and output the encrytped mailto link
		return '<a href="mailto: ' . $encrypted_email . '" class="encrypted-email">' . $text . '</a>';
	}

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
	public function encrypted_email($atts, $content = null)
	{
		
		// Extract attributes into variables
		extract(shortcode_atts(array(
			'text' => '',
		), $atts));

		// Encrypts the email given
		$content = antispambot($content);


		// If no display text set then use the encrypted email
		if ($text == '') {
			$text = $content;
		}

		// Build and output the ecrypted email link
		return '<a href="mailto:' . $content . '" class="encrypted-email">' . $text . '</a>';
	}
}
