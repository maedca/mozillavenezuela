=== Image Widget ===
Contributors: Shane & Peter, Inc.
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4BSPTNFFY6AL6
Tags: widget, image, ad, banner, simple, upload, sidebar, admin, thickbox, resize
Requires at least: 2.8
Tested up to: 2.9.1.1
Stable tag: 3.1.5

== Description ==

Simple image widget that uses native Wordpress upload thickbox to add image widgets to your site.

* MU Compatible
* Handles image resizing and alignment
* Link the image
* Title and Description
* Very versatile.  All fields are optional.
* Upload, link to external image, or select an image from your media collection using the built in thickbox browser.
* Language Support for German (feel free to contribute other languages)

This plugin is actively supported and we will do our best to help you. In return we simply as 3 things:

1. Help Out. If you see a question on the forum you can help with or have a great idea and want to code it up and submit a patch, that would be just plain awesome and we will shower your with praise. Might even be a good way to get to know us and lead to some paid work if you freelance.  Also, we are happy to post translations if you provide them.
1. Donate - if this is generating enough revenue to support our time it makes all the difference in the world
https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4BSPTNFFY6AL6

== Installation ==

= Install =

1. Unzip the `image-widget.zip` file. 
1. Upload the the `image-widget` folder (not just the files in it!) to your `wp-contents/plugins` folder. If you're using FTP, use 'binary' mode.

= Activate =

1. In your WordPress administration, go to the Plugins page
1. Activate the Image Widget plugin and a subpage for the plugin will appear
   in your Manage menu.
1. Go to the Appearance > Widget page and place the widget in your sidebar in the Design

If you find any bugs or have any ideas, please mail us.

Please visit the forum for questions or comments: http://wordpress.org/tags/image-widget/

== Changelog ==

= 3.1.5 =

Fixed PHP 5 bug.  Removed 'public' declaration. http://wordpress.org/support/topic/362167  Thanks mpwalsh8, jleuze, PoLaR5, NancyA and phoney36

= 3.1.4 =

* Added support for ALT tags.  If no alt tag is entered the title is used.

= 3.1.3 =

* Added German language support (Thank you Rüdiger Weiß!!!)

= 3.1.2 =

* Fix bug: XHTML Compliance (thanks HGU for offering a patch and thanks webmasterlistingarts for filing the bug)
* Replaced `<p>` with `<div>` in description to also improve XHTML compliance.

= 3.1.1 =

* Fix bug: php4 reported error: PHP Parse error:  syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR or '}' (thanks natashaelaine and massimopaolini)

= 3.0.10 =

* Fix bug: improve tab filters.

= 3.0.9 =

* Fix bug: update tabs filter to not kill tabs if upload window is for non widget uses.

= 3.0.8 =

* Remove the "From URL" tab since it isn't supported.
* Replace "Insert into Post" with "Insert into Widget" in thickbox.

= 3.0.7 =

* Fix Dean's Fcuk editor conflict. (Thanks for the report Laurie L_T_G)
* Fix IE8 bug (Remove extra comma from line 66 of js - thanks for the report reface)
* Update functions and enqueued scripts to only trigger on widget page.

= 3.0.6 =

Fix crash on insert into post.

= 3.0.5 =

Thank you smurkas, squigie and laurie!!!  Special thanks to Cameron Clark from http://prolifique.com a.k.a capnhairdo for contributing invaluable javascript debugging skills and throwing together some great code.

* PHP4 compatibility
* Tighter integration with the thickbok uploader attributes including caption, description, alignment, and link
* Tighter image resize preview
* Add Image link becomes "Change Image" once image has been added

= 3.0.4 =

* Minor description changes

= 3.0.3 =

* Fixed the broken "Add Image" link (THANK YOU SMURKAS!!!)

= 3.0.2 =

* Added PHPDoc comments
* Temporarily fixed install bug where no image is saved if resize is not working. (thank you Paul Kaiser from Champaign, Il for your helpful QA support)

= 3.0.1 =

* Added 'sp_image_widget' domain for language support.

= 3.0 =

* Completely remodeled the plugin to use the native wordpress uploader and be compatible with Wordpress 2.8 plugin architecture.
* Removed externalized widget admin.

= 2.2.2 =

* Update <li> to be $before_widget and $after_widget (Thanks again to Lois Turley)

= 2.2.1 =

* Update `<div>` to be `<li>` (Thanks to Lois Turley)

= 2.2 =

* Fixed missing DIV close tag (Thank you Jesper Goos)
* Updated all short tags to proper php tags (Thank you Jonathan Volks from Mannix Marketing)

= 2.1 =

* Link Target

= 2.0 =

* Multi widget support
* WP 2.7.1 Compatibility
* Class encapsulation

== Screenshots ==

1. Image Widget admin screen.
1. Thickbox uploader for the Image Widget
1. Image Widget on the front of a plain Wordpress install.

== Frequently Asked Questions ==

= Where do I go to file a bug or ask a question? =

Please visit the forum for questions or comments: http://wordpress.org/tags/image-widget/

 == Upgrade Notice ==

This upgrade should have no impact on existing installs.