<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>


<form id="mcp" method="post" action="<?php echo (isset($this->_rootref['S_MCP_ACTION'])) ? $this->_rootref['S_MCP_ACTION'] : ''; ?>">

<fieldset class="forum-selection">
	<label for="fo"><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <select name="f" id="fo"><?php echo (isset($this->_rootref['S_FORUM_OPTIONS'])) ? $this->_rootref['S_FORUM_OPTIONS'] : ''; ?></select></label>
	<input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>

<h1><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h1>

	<p class="panel"><?php echo ((isset($this->_rootref['L_EXPLAIN'])) ? $this->_rootref['L_EXPLAIN'] : ((isset($user->lang['EXPLAIN'])) ? $user->lang['EXPLAIN'] : '{ EXPLAIN }')); ?></p>

	<?php if (sizeof($this->_tpldata['postrow'])) {  ?>

		<div class="display-actions">
			<?php $this->_tpldata['DEFINE']['.']['TOTAL'] = '' . (isset($this->_rootref['TOTAL'])) ? $this->_rootref['TOTAL'] : '' . ''; $this->_tpl_include('pagination.html'); ?>

			<div class="display-actions-end"></div>
		</div>
		<table class="normal-table">
			<thead>
				<tr>
					<th><?php if ($this->_rootref['S_TOPICS']) {  echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); } else { echo ((isset($this->_rootref['L_POST'])) ? $this->_rootref['L_POST'] : ((isset($user->lang['POST'])) ? $user->lang['POST'] : '{ POST }')); } ?></th>
					<?php if (! $this->_rootref['S_TOPICS']) {  ?><td class="moderation"><?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?></td><?php } ?>

					<td class="moderation"><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></td>
					<td class="mark-col"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?> <input type="checkbox" id="post_id_list_all" value="<?php echo $_postrow_val['POST_ID']; ?>" onclick="marklist_all('mcp', 'post_id_list[', 'post_id_list_all');" title="<?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?>" /></td>
				</tr>
			</thead>
			<tbody>

				<?php $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if ($_postrow_val['S_DELETED_TOPIC']) {  ?>

						<tr><th colspan="3"><?php echo ((isset($this->_rootref['L_DELETED_TOPIC'])) ? $this->_rootref['L_DELETED_TOPIC'] : ((isset($user->lang['DELETED_TOPIC'])) ? $user->lang['DELETED_TOPIC'] : '{ DELETED_TOPIC }')); ?></th></tr>
					<?php } else { ?>

						<tr>
							<th>
								<a href="<?php echo $_postrow_val['U_VIEW_DETAILS']; ?>" class="topictitle"><?php echo $_postrow_val['POST_SUBJECT']; ?></a>
								<div class="desc"><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_postrow_val['POST_AUTHOR_FULL']; ?> &raquo; <?php echo $_postrow_val['POST_TIME']; ?></div>
							</th>
							<?php if (! $this->_rootref['S_TOPICS']) {  ?><td class="moderation"><a href="<?php echo $_postrow_val['U_TOPIC']; ?>"><?php echo $_postrow_val['TOPIC_TITLE']; ?></a></td><?php } ?>

							<td class="moderation"><a href="<?php echo $_postrow_val['U_VIEWFORUM']; ?>"><?php echo $_postrow_val['FORUM_NAME']; ?></a></td>
				 			<td class="mark-col"><input type="checkbox" name="post_id_list[]" value="<?php echo $_postrow_val['POST_ID']; ?>" onclick="marklist_each('mcp', 'post_id_list[', 'post_id_list_all');" /></td>
						</tr>
					<?php } }} ?>

			</tbody>
		</table>

		<fieldset class="display-options">
			<label><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
			<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label><label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?></label>
			<?php if ($this->_rootref['TOPIC_ID']) {  ?><label><input type="checkbox" class="radio" name="t" value="<?php echo (isset($this->_rootref['TOPIC_ID'])) ? $this->_rootref['TOPIC_ID'] : ''; ?>" checked="checked" /> <strong><?php echo ((isset($this->_rootref['L_ONLY_TOPIC'])) ? $this->_rootref['L_ONLY_TOPIC'] : ((isset($user->lang['ONLY_TOPIC'])) ? $user->lang['ONLY_TOPIC'] : '{ ONLY_TOPIC }')); ?></strong></label><?php } ?>

			<input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />
		</fieldset>

		<div class="display-actions">
			<div class="buttons">
				<input type="submit" name="action[disapprove]" value="<?php echo ((isset($this->_rootref['L_DISAPPROVE'])) ? $this->_rootref['L_DISAPPROVE'] : ((isset($user->lang['DISAPPROVE'])) ? $user->lang['DISAPPROVE'] : '{ DISAPPROVE }')); ?>" />
				<input type="submit" name="action[approve]" value="<?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?>" />
			</div>
			<?php $this->_tpl_include('pagination.html'); ?>

			<div class="display-actions-end"></div>
		</div>

	<?php } else { ?>

		<p class="no-entries"><?php if ($this->_rootref['S_TOPICS']) {  echo ((isset($this->_rootref['L_NO_TOPICS_QUEUE'])) ? $this->_rootref['L_NO_TOPICS_QUEUE'] : ((isset($user->lang['NO_TOPICS_QUEUE'])) ? $user->lang['NO_TOPICS_QUEUE'] : '{ NO_TOPICS_QUEUE }')); } else { echo ((isset($this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'] : ((isset($user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'] : '{ UNAPPROVED_POSTS_ZERO_TOTAL }')); } ?></p>
	<?php } ?>


</form>

<?php $this->_tpl_include('mcp_footer.html'); ?>