<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
		<div <?php post_class('article') ?> id="post-<?php the_ID(); ?>">
			<h1<?php if (strlen($post->post_title)>50) echo 'class="long"' ?>><?php the_title(); ?></h1>

			<div class="h4 meta"><?php echo sprintf($post_date_at_time_by_author, get_the_time(__('l, F jS, Y', 'kubrick')), get_the_time(), get_the_author()) ?></div>
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'kubrick') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<ul class="meta taxonomy box">
					<?php the_tags( '<li>' . __('Tags:', 'kubrick') . ' ', ', ', '</li>'); ?>
					<li><?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?></li>
					<?php edit_post_link(__('Edit this entry', 'kubrick'),'<li>','</li>') ?>
				</ul>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>

<?php endif; ?>



<?php get_footer(); ?>
