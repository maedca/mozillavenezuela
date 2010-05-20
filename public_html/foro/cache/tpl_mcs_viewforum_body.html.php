<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<h1><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></h1>

<?php if ($this->_rootref['S_HAS_SUBFORUM'] && ! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  $this->_tpldata['DEFINE']['.']['MARKFORUMS'] = 1; } if ($this->_rootref['S_FORUM_RULES'] && ! $this->_rootref['U_FORUM_RULES']) {  ?>

	<div class="rules"><?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?></div>
<?php } if ($this->_rootref['MODERATORS']) {  ?><div class="foruminfo"><strong><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?></strong>: <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></div><?php } $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['S_NO_READ_ACCESS']) {  if ($this->_rootref['S_FORUM_RULES'] && $this->_rootref['U_FORUM_RULES']) {  ?>

		<div class="rules"><a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></strong></a></div>
	<?php } ?>


	<div class="panel">
		<strong><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></strong>
	</div>

	<?php if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

		<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">
			<h2><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></h2>
			<div class="panel">
				<dl class="kvlist login-list">
					<dt><label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
					<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></dd>
					<dt><label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
					<dd><input type="password" tabindex="2" id="password" name="password" size="25" /></dd>
				</dl>
				<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><div><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></div><?php } ?>

				<div><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></div>
			</div>
			<div><input type="submit" name="login" tabindex="5" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" /></div>
			<?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?><div class="panel"><ul class="linklist"><li><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></li></ul></div><?php } ?>

		</form>
	<?php } } ?>


	<div class="display-actions">
		<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

			<div class="buttons">
				<div class="<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>locked-icon<?php } else { ?>post-icon<?php } ?>" title="<?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); } ?>">
					<a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>" class="image-button"><?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); } ?></a>
				</div>
			</div>
		<?php } if ($this->_rootref['S_FORUM_RULES'] && $this->_rootref['U_FORUM_RULES']) {  ?>

			<div class="other"><a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></strong></a></div>
		<?php } if (sizeof($this->_tpldata['topicrow']) && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  if ($this->_rootref['TOTAL_USERS']) {  $this->_tpldata['DEFINE']['.']['TOTAL'] = '' . (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : '' . ''; } else if ($this->_rootref['TOTAL_POSTS']) {  $this->_tpldata['DEFINE']['.']['TOTAL'] = '' . (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : '' . ''; } else if ($this->_rootref['TOTAL_TOPICS']) {  $this->_tpldata['DEFINE']['.']['TOTAL'] = '' . (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : '' . ''; } else { $this->_tpldata['DEFINE']['.']['TOTAL'] = '$TOTAL ERROR IN TEMPLATE'; } $this->_tpl_include('pagination.html'); } ?>

		<div class="display-actions-end"></div>
	</div>

<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if (! $_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ! $_topicrow_val['S_FIRST_ROW']) {  ?>

		</tbody></table>
	<?php } if ($_topicrow_val['S_FIRST_ROW'] || ! $_topicrow_val['S_TOPIC_TYPE_SWITCH']) {  ?>

		<table class="normal-table<?php if ($_topicrow_val['S_TOPIC_TYPE_SWITCH']) {  ?> announcement<?php } ?>"><thead>
			<tr>
				<th class="topictitle">
					<?php if ($this->_rootref['S_DISPLAY_ACTIVE']) {  ?>

						<?php echo ((isset($this->_rootref['L_ACTIVE_TOPICS'])) ? $this->_rootref['L_ACTIVE_TOPICS'] : ((isset($user->lang['ACTIVE_TOPICS'])) ? $user->lang['ACTIVE_TOPICS'] : '{ ACTIVE_TOPICS }')); ?>

					<?php } else if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && $_topicrow_val['S_TOPIC_TYPE'] > (1)) {  ?>

						<?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?>

					<?php } else { ?>

						<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>

						<?php if ($this->_rootref['TOTAL_TOPICS'] && ! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><span class="desc"> - <a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a></span><?php } } ?>

				</th>
				<td class="forum-state"></td>
				<td class="posts"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></td>
				<td class="views"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></td>
				<td class="lastpost"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></td>
			</tr>
	</thead>
	<tbody>
	<?php } ?>


		<tr class="<?php if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> reported<?php } ?>">
			<th class="topictitle" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>">
				<a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
				<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a> <?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a><?php } if ($_topicrow_val['PAGINATION']) {  ?><strong class="pagination"><?php echo $_topicrow_val['PAGINATION']; ?></strong><?php } if ($_topicrow_val['ATTACH_ICON_IMG']) {  echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <?php } ?>

				<div class="desc"><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_topicrow_val['FIRST_POST_TIME']; ?></div>
			</th>
			<td class="forum-state">
				<?php if ($_topicrow_val['S_TOPIC_MOVED']) {  ?><div><?php echo ((isset($this->_rootref['L_TOPIC_MOVED'])) ? $this->_rootref['L_TOPIC_MOVED'] : ((isset($user->lang['TOPIC_MOVED'])) ? $user->lang['TOPIC_MOVED'] : '{ TOPIC_MOVED }')); ?></div><?php } if ($_topicrow_val['S_POST_STICKY']) {  echo ((isset($this->_rootref['L_ICON_STICKY'])) ? $this->_rootref['L_ICON_STICKY'] : ((isset($user->lang['ICON_STICKY'])) ? $user->lang['ICON_STICKY'] : '{ ICON_STICKY }')); } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?><!--<?php echo ((isset($this->_rootref['L_ICON_ANNOUNCEMENT'])) ? $this->_rootref['L_ICON_ANNOUNCEMENT'] : ((isset($user->lang['ICON_ANNOUNCEMENT'])) ? $user->lang['ICON_ANNOUNCEMENT'] : '{ ICON_ANNOUNCEMENT }')); ?>--><?php } if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><div>
					<a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>">
						<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_topic_newest.gif"
							alt="<?php echo ((isset($this->_rootref['L_VIEW_NEWEST_POST'])) ? $this->_rootref['L_VIEW_NEWEST_POST'] : ((isset($user->lang['VIEW_NEWEST_POST'])) ? $user->lang['VIEW_NEWEST_POST'] : '{ VIEW_NEWEST_POST }')); ?>" title="<?php echo ((isset($this->_rootref['L_VIEW_NEWEST_POST'])) ? $this->_rootref['L_VIEW_NEWEST_POST'] : ((isset($user->lang['VIEW_NEWEST_POST'])) ? $user->lang['VIEW_NEWEST_POST'] : '{ VIEW_NEWEST_POST }')); ?>" />
					</a>
					<?php echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); ?>

				</div><?php } ?>

			</td>
			<td class="posts"><?php echo $_topicrow_val['REPLIES']; ?></td>
			<td class="views"><?php echo $_topicrow_val['VIEWS']; ?></td>
			<td class="lastpost"><span <?php if ($_topicrow_val['LAST_POST_TIME']) {  ?>class="date"<?php } ?>><?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?><br /><?php echo $_topicrow_val['LAST_POST_TIME']; ?></span></td>
		</tr>

	<?php if ($_topicrow_val['S_LAST_ROW']) {  ?>

			</tbody></table>
	<?php } }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>

	<div class="panel">
		<strong><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></strong>
	</div>
	<?php } } if ($this->_rootref['S_SELECT_SORT_DAYS'] && ! $this->_rootref['S_DISPLAY_ACTIVE'] && ! $this->_rootref['S_IS_BOT']) {  ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>">
		<fieldset class="display-options">
			<label><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
			<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
			<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></label>
		</fieldset>
	</form>
<?php } if (sizeof($this->_tpldata['topicrow']) && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>

	<div class="display-actions">
		<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

		<div class="buttons">
			<div class="<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>locked-icon<?php } else { ?>post-icon<?php } ?>" title="<?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_TOPIC'])) ? $this->_rootref['L_POST_TOPIC'] : ((isset($user->lang['POST_TOPIC'])) ? $user->lang['POST_TOPIC'] : '{ POST_TOPIC }')); } ?>">
				<a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>" class="image-button"><?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); } ?></a>
			</div>
		</div>
		<?php } $this->_tpl_include('pagination.html'); ?>

		<div class="display-actions-end"></div>
	</div>
<?php } $this->_tpl_include('jumpbox.html'); ?>


<!-- IF S_DISPLAY_ONLINE_LIST - ->
	<div class="section left">
		<h2><!- - IF U_VIEWONLINE - -><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><!- - ELSE - -><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?><!- - ENDIF - -></h2>
		<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p>
	</div>
<!- - ENDIF -->

<!-- IF S_DISPLAY_POST_INFO - ->
	<div class="section right">
		<h2><?php echo ((isset($this->_rootref['L_FORUM_PERMISSIONS'])) ? $this->_rootref['L_FORUM_PERMISSIONS'] : ((isset($user->lang['FORUM_PERMISSIONS'])) ? $user->lang['FORUM_PERMISSIONS'] : '{ FORUM_PERMISSIONS }')); ?></h2>
		<p><!- - BEGIN rules - -><?php echo $_rules_val['RULE']; ?><br /><!- - END rules - -></p>
	</div>
<!- - ENDIF -->

<?php $this->_tpl_include('overall_footer.html'); ?>