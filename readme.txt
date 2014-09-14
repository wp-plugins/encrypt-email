=== Encrypt Email ===
Contributors: LukeQuietus, Affinity4
Donate link: http://luke-watts.com/doesnt-want-donations
Tags: email, spam protection, encrypt, encryption, email encryption, encrypt email, encoder, encode email, email cypher, cypher
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.1.0
 
This plugin allows users to encrypt emails in their content and widgets using a simple shortcode. The encryption uses a native Wordpress function antispambot().
 
== Description ==
 
This plugin allows users to encrypt emails in their content and widgets using a simple shortcode. The encryption uses a native Wordpress function antispambot().
 
To encrypt your email simply use the shortcode:

[encrypt_email email="your@email-here.com" text="Text displayed"]

or since v1.1.0 you can wrap your email in the shortcode using:

[encrypted_email]your@email-here.com[/encrypted_email]

If you want to display specific text use:

[encrypted_email text="Text to be displayed goes here"]your@email-here.com[/encrypted_email]
 
= Future Features =
* In a future release there will be a TinyMCE button which will allow you to simply highlight your email in the content and wrap it in the shortcode which will encrypt it. For now you'll have to simply type it.
 
= Want to contribute? =
* Fork the project on [Github](https://github.com/lukewatts/encrypt-email)
* Contact me through my website at [Luke Watts](http://luke-watts.com)
 
== Installation ==
 
1. Upload the entire `encrypt-email` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Simply place the shortcode with the email attribute filled out correctly and be spam free*

 *I can't ACTUALLY gaurantee you'll be spam free but you'll certainly be alot better off than you'd be with nothing.
 
== Frequently Asked Questions ==
 
= Does this plugin work with newest WP version and also older versions? =
Yes, this plugin works with WordPress 3 upwards!
 
= Will this work in my theme's widget areas? =
As long as the theme has enabled shortcodes in your sidebar / widgets then this method will work. However, if the widget is already inserting the <a href="mailto: "></a> link then this shortcode won't work in such fields. You'll notice upon saving the widget then it removes everything after the first " sign.
 
== Screenshots ==
 
No screenshots available at this time.
 
== Changelog ==
 
=1.1.0=
* Tested compatibility for WordPress 4.0
* Added shortcode [encrypted_email] which allows you to wrap emails in your content to encrypt them.

= 1.0.0 =
* Initial release
 
== Upgrade Notice ==

=1.1.0=
* Tested compatibility for WordPress 4.0
* Added shortcode [encrypted_email] which allows you to wrap emails in your content to encrypt them.

= 1.0 =
* Initial release