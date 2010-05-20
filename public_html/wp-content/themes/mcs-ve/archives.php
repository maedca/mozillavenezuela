<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<?php /*get_search_form();*/ ?>

<h1><?php _e('Archives by Month:', 'kubrick'); ?></h1>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h1><?php _e('Archives by Subject:', 'kubrick'); ?></h1>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
<?php get_footer(); ?>
