<?php
/*
Plugin Name: Add Lightbox
Plugin URI: http://mdkart.fr/blog/plugin-add-lightbox-pour-wordpress/
Description: This plugin automatically add the rel="lightbox[ID_OF_THE_POST]" to images linked in a post. ID_OF_THE_POST is unique per post so all images per post are grouped in one lightbox set. Doesn't add the the files required for lightbox!
Author: Mdkart
Author URI: http://mdkart.fr
Version: 0.4.1
Put in /wp-content/plugins/ of your Wordpress installation
Inpsired by this thread : http://wordpress.org/support/topic/106529
*/
add_filter('the_content', 'addlightboxrel_replace', 12);
add_filter('get_comment_text', 'addlightboxrel_replace');
function addlightboxrel_replace ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="lightbox['.$post->ID.']"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
?>