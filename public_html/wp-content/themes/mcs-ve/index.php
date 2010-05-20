<?php





get_header(); ?>



	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('article') ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
				<div class="h4 meta"><?php printf($post_date_by_auther_with_x_comments, get_the_time(__('F jS, Y', 'kubrick')), get_the_author()) ?>
				<?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></div>

				<div class="entry">
					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
				</div>

				<ul class="meta taxonomy box">
					<?php the_tags('<li>' . __('Tags:', 'kubrick') . ' ', ', ', '</li>'); ?>
					<li><?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?></li>
					<?php edit_post_link(__('Edit', 'kubrick'), '<li>', '</li>'); ?>
				</ul>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
		</div>

	<?php else : ?>

		<h1><?php _e('Not Found', 'kubrick'); ?></h1>
		<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
		<?php get_search_form(); ?>

    <?php endif; ?>
<?php get_footer(); ?>
