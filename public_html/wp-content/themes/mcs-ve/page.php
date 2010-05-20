<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="article" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>

				<?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'kubrick') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.', 'kubrick'), '<p>', '</p>'); ?>

	<?php comments_template(); ?> 

<?php get_footer(); ?>