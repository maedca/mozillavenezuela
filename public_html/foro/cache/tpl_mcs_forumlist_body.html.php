<?php if (!defined('IN_PHPBB')) exit; $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

			</tbody></table>
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

			<table class="normal-table forumlist">
				<thead>
					<tr>
						<th class="forumname"><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></th>
						<td class="forum-state"></td>
						<td class="topics"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></td>
						<td class="posts"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></td>
						<td class="lastpost"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></td>
					</tr>
				</thead>
				<tbody>
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  ?>

				<tr>
					<th class="forumname" title="<?php echo $_forumrow_val['FORUM_FOLDER_IMG_ALT']; ?>">
						<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?><img class="row-image" src="<?php echo $_forumrow_val['FORUM_IMAGE_SRC']; ?>" alt="" /><?php } ?>

						<div class="row-text">
							<a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" class="forumtitle"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
							<div class="desc"><?php echo $_forumrow_val['FORUM_DESC']; ?></div>
							<?php if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><div class="desc"><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?> <?php echo $_forumrow_val['SUBFORUMS']; ?></div><?php } ?>

						</div>
					</th>
					<?php if ($_forumrow_val['CLICKS']) {  ?>

						<td class="redirect" colspan="3"><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></td>
					<?php } else if (! $_forumrow_val['S_IS_LINK']) {  ?>

						<td class="forum-state">
							<?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><div><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a></div><?php } if ($_forumrow_val['S_LOCKED_FORUM']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else if ($_forumrow_val['S_UNREAD_FORUM']) {  echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); } ?>

						</td>
						<td class="topics"><?php echo $_forumrow_val['TOPICS']; ?></td>
						<td class="posts"><?php echo $_forumrow_val['POSTS']; ?></td>
						<td class="lastpost">
							<?php if ($_forumrow_val['LAST_POST_TIME']) {  if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_forumrow_val['LAST_POSTER_FULL']; ?><div><?php echo $_forumrow_val['LAST_POST_TIME']; ?></div><?php } else { echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); } ?>

						</td>
					<?php } else { ?><td class="redirect" colspan="3"></td><?php } ?>

				</tr>
	<?php } if ($_forumrow_val['S_LAST_ROW']) {  ?>

			</tbody></table>
	<?php } }} else { if (! $this->_rootref['S_VIEWFORUM']) {  ?>

		<p class="no-entries"><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p>
	<?php } } ?>