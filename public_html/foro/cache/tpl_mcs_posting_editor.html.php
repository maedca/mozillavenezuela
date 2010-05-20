<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_EDIT_DRAFT']) {  ?><strong><a href="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_DRAFTS'])) ? $this->_rootref['L_BACK_TO_DRAFTS'] : ((isset($user->lang['BACK_TO_DRAFTS'])) ? $user->lang['BACK_TO_DRAFTS'] : '{ BACK_TO_DRAFTS }')); ?></a></strong><?php } ?>

	<!--<?php if ($this->_rootref['S_DISPLAY_REVIEW']) {  ?><strong><a href="#review"><?php echo ((isset($this->_rootref['L_TOPIC_REVIEW'])) ? $this->_rootref['L_TOPIC_REVIEW'] : ((isset($user->lang['TOPIC_REVIEW'])) ? $user->lang['TOPIC_REVIEW'] : '{ TOPIC_REVIEW }')); ?></a></strong><?php } ?>-->

	<?php if ($this->_rootref['ERROR']) {  ?><p class="error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></p><?php } if ($this->_rootref['S_PRIVMSGS'] && ! $this->_rootref['S_SHOW_DRAFTS']) {  if ($this->_rootref['S_ALLOW_MASS_PM']) {  if (! $this->_rootref['S_EDIT_POST']) {  ?>

			<div>
				<textarea id="username_list" name="username_list" cols="50" rows="2"></textarea>
				<div><input type="submit" name="add_to" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" /></div>
				<div><input type="submit" name="add_bcc" value="<?php echo ((isset($this->_rootref['L_ADD_BCC'])) ? $this->_rootref['L_ADD_BCC'] : ((isset($user->lang['ADD_BCC'])) ? $user->lang['ADD_BCC'] : '{ ADD_BCC }')); ?>" /></div>
				<div><a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></div>
			</div>
			<?php } if (sizeof($this->_tpldata['to_recipient'])) {  ?>

				<dl class="kvlist postinglist">
					<dt><label><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</label></dt>
					<dd>
						<?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if (! $_to_recipient_val['S_FIRST_ROW'] && $_to_recipient_val['S_ROW_COUNT'] % (2) == 0) {  ?></dd><dd><?php } if ($_to_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>"><strong><?php echo $_to_recipient_val['NAME']; ?></strong></a> <?php } else { echo $_to_recipient_val['NAME_FULL']; ?> <?php } if (! $this->_rootref['S_EDIT_POST']) {  ?><input type="submit" name="remove_<?php echo $_to_recipient_val['TYPE']; ?>[<?php echo $_to_recipient_val['UG_ID']; ?>]" value="x" /><?php } }} ?>

					</dd>
				</dl>
			<?php } if (sizeof($this->_tpldata['bcc_recipient'])) {  ?>

				<dl>
					<dt><label><?php echo ((isset($this->_rootref['L_BCC'])) ? $this->_rootref['L_BCC'] : ((isset($user->lang['BCC'])) ? $user->lang['BCC'] : '{ BCC }')); ?>:</label></dt>
					<dd>
						<?php $_bcc_recipient_count = (isset($this->_tpldata['bcc_recipient'])) ? sizeof($this->_tpldata['bcc_recipient']) : 0;if ($_bcc_recipient_count) {for ($_bcc_recipient_i = 0; $_bcc_recipient_i < $_bcc_recipient_count; ++$_bcc_recipient_i){$_bcc_recipient_val = &$this->_tpldata['bcc_recipient'][$_bcc_recipient_i]; if (! $_bcc_recipient_val['S_FIRST_ROW'] && $_bcc_recipient_val['S_ROW_COUNT'] % (2) == 0) {  ?></dd><dd><?php } if ($_bcc_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_bcc_recipient_val['U_VIEW']; ?>"><strong><?php echo $_bcc_recipient_val['NAME']; ?></strong></a><?php } else { echo $_bcc_recipient_val['NAME_FULL']; ?> <?php } if (! $this->_rootref['S_EDIT_POST']) {  ?><input type="submit" name="remove_<?php echo $_bcc_recipient_val['TYPE']; ?>[<?php echo $_bcc_recipient_val['UG_ID']; ?>]" value="x" /><?php } }} ?>

					</dd>
				</dl>
			<?php } } else { ?>

			<dl class="kvlist postinglist">
				<dt><label for="username_list"><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</label></dt>
				<?php if (sizeof($this->_tpldata['to_recipient'])) {  ?>

					<dd>
						<?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if (! $_to_recipient_val['S_FIRST_ROW'] && $_to_recipient_val['S_ROW_COUNT'] % (2) == 0) {  ?></dd><dd><?php } if ($_to_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>"><strong><?php echo $_to_recipient_val['NAME']; ?></strong></a><?php } else { echo $_to_recipient_val['NAME_FULL']; ?> <?php } if (! $this->_rootref['S_EDIT_POST']) {  ?><input type="submit" name="remove_<?php echo $_to_recipient_val['TYPE']; ?>[<?php echo $_to_recipient_val['UG_ID']; ?>]" value="x" /><?php } }} ?>

					</dd>
				<?php } if (! $this->_rootref['S_EDIT_POST']) {  ?>

				<dd>
					<input type="text" name="username_list" id="username_list" size="20" value="" />
					<input type="submit" name="add_to" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" />
					<div class="explain"><a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></div>
				</dd>
				<?php } ?>

			</dl>
		<?php } if ($this->_rootref['S_GROUP_OPTIONS']) {  ?>

			<dl class="kvlist postinglist">
				<dd><label for="group_list"><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); ?>:</label> <select name="group_list[]" id="group_list" multiple="multiple" size="4"><?php echo (isset($this->_rootref['S_GROUP_OPTIONS'])) ? $this->_rootref['S_GROUP_OPTIONS'] : ''; ?></select></dd>
			</dl>
		<?php } } if ($this->_rootref['S_DELETE_ALLOWED'] || $this->_rootref['S_SHOW_TOPIC_ICONS'] || $this->_rootref['S_SHOW_PM_ICONS'] || ( ! $this->_rootref['S_PRIVMSGS'] && $this->_rootref['S_DISPLAY_USERNAME'] ) || $this->_rootref['S_POST_ACTION'] || $this->_rootref['S_PRIVMSGS'] || $this->_rootref['S_EDIT_DRAFT']) {  ?>

	<dl class="kvlist postinglist">
	<?php if ($this->_rootref['S_DELETE_ALLOWED']) {  ?>

		<dt><label for="delete"><?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>:</label></dt>
		<dd><label for="delete"><input type="checkbox" name="delete" id="delete" /> <?php echo ((isset($this->_rootref['L_DELETE_POST_WARN'])) ? $this->_rootref['L_DELETE_POST_WARN'] : ((isset($user->lang['DELETE_POST_WARN'])) ? $user->lang['DELETE_POST_WARN'] : '{ DELETE_POST_WARN }')); ?></label></dd>
	<?php } if ($this->_rootref['S_SHOW_TOPIC_ICONS'] || $this->_rootref['S_SHOW_PM_ICONS']) {  ?>

		<dt><label for="icon"><?php echo ((isset($this->_rootref['L_ICON'])) ? $this->_rootref['L_ICON'] : ((isset($user->lang['ICON'])) ? $user->lang['ICON'] : '{ ICON }')); ?>:</label></dt>
		<dd>
			<label for="icon"><input type="radio" name="icon" id="icon" value="0" checked="checked" /> <?php if ($this->_rootref['S_SHOW_TOPIC_ICONS']) {  echo ((isset($this->_rootref['L_NO_TOPIC_ICON'])) ? $this->_rootref['L_NO_TOPIC_ICON'] : ((isset($user->lang['NO_TOPIC_ICON'])) ? $user->lang['NO_TOPIC_ICON'] : '{ NO_TOPIC_ICON }')); } else { echo ((isset($this->_rootref['L_NO_PM_ICON'])) ? $this->_rootref['L_NO_PM_ICON'] : ((isset($user->lang['NO_PM_ICON'])) ? $user->lang['NO_PM_ICON'] : '{ NO_PM_ICON }')); } ?></label>
			<?php $_topic_icon_count = (isset($this->_tpldata['topic_icon'])) ? sizeof($this->_tpldata['topic_icon']) : 0;if ($_topic_icon_count) {for ($_topic_icon_i = 0; $_topic_icon_i < $_topic_icon_count; ++$_topic_icon_i){$_topic_icon_val = &$this->_tpldata['topic_icon'][$_topic_icon_i]; ?><label for="icon-<?php echo $_topic_icon_val['ICON_ID']; ?>"><input type="radio" name="icon" id="icon-<?php echo $_topic_icon_val['ICON_ID']; ?>" value="<?php echo $_topic_icon_val['ICON_ID']; ?>" <?php echo $_topic_icon_val['S_ICON_CHECKED']; ?> /><img src="<?php echo $_topic_icon_val['ICON_IMG']; ?>" width="<?php echo $_topic_icon_val['ICON_WIDTH']; ?>" height="<?php echo $_topic_icon_val['ICON_HEIGHT']; ?>" alt="" title="" /></label> <?php }} ?>

		</dd>
	<?php } if (! $this->_rootref['S_PRIVMSGS'] && $this->_rootref['S_DISPLAY_USERNAME']) {  ?>

		<dt><label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
		<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></dd>
	<?php } if ($this->_rootref['S_POST_ACTION'] || $this->_rootref['S_PRIVMSGS'] || $this->_rootref['S_EDIT_DRAFT']) {  ?>

		<dt><label for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label></dt>
		<dd><input type="text" name="subject" id="subject" size="45" maxlength="<?php if ($this->_rootref['S_NEW_MESSAGE']) {  ?>60<?php } else { ?>64<?php } ?>" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; echo (isset($this->_rootref['DRAFT_SUBJECT'])) ? $this->_rootref['DRAFT_SUBJECT'] : ''; ?>" /></dd>
		<?php if ($this->_rootref['CAPTCHA_TEMPLATE'] && $this->_rootref['S_CONFIRM_CODE']) {  $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 3; if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) { $this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']); } } } ?>

	</dl>
	<?php } $this->_tpl_include('posting_buttons.html'); ?>



	<div id="message-box">
		<textarea <?php if ($this->_rootref['S_UCP_ACTION'] && ! $this->_rootref['S_PRIVMSGS'] && ! $this->_rootref['S_EDIT_DRAFT']) {  ?>name="signature" id="signature" style="height: 9em;"<?php } else { ?>name="message" id="message"<?php } ?> rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; echo (isset($this->_rootref['DRAFT_MESSAGE'])) ? $this->_rootref['DRAFT_MESSAGE'] : ''; echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></textarea>
	</div>

<?php if ($this->_tpldata['DEFINE']['.']['EXTRA_POSTING_OPTIONS'] == (1)) {  if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?>

	<div>
			<?php if ($this->_rootref['S_NOTIFY_ALLOWED']) {  ?>

				<div><label for="notify"><input type="checkbox" name="notify" id="notify"<?php echo (isset($this->_rootref['S_NOTIFY_CHECKED'])) ? $this->_rootref['S_NOTIFY_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_NOTIFY_REPLY'])) ? $this->_rootref['L_NOTIFY_REPLY'] : ((isset($user->lang['NOTIFY_REPLY'])) ? $user->lang['NOTIFY_REPLY'] : '{ NOTIFY_REPLY }')); ?></label></div>
			<?php } ?>

	</div>
	<?php if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  if (! $this->_rootref['S_SHOW_DRAFTS']) {  ?>

	</div>
	<?php } if ($this->_rootref['S_HAS_ATTACHMENTS']) {  ?>

		<h2><?php echo ((isset($this->_rootref['L_POSTED_ATTACHMENTS'])) ? $this->_rootref['L_POSTED_ATTACHMENTS'] : ((isset($user->lang['POSTED_ATTACHMENTS'])) ? $user->lang['POSTED_ATTACHMENTS'] : '{ POSTED_ATTACHMENTS }')); ?></h2>
		<div class="panel">

			<?php $_attach_row_count = (isset($this->_tpldata['attach_row'])) ? sizeof($this->_tpldata['attach_row']) : 0;if ($_attach_row_count) {for ($_attach_row_i = 0; $_attach_row_i < $_attach_row_count; ++$_attach_row_i){$_attach_row_val = &$this->_tpldata['attach_row'][$_attach_row_i]; ?>

				<h3><a href="<?php echo $_attach_row_val['U_VIEW_ATTACHMENT']; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo $_attach_row_val['FILENAME']; ?></a></h3>
				<dl class="kvlist postinglist">
					<dt><label for="comment_list_<?php echo $_attach_row_val['ASSOC_INDEX']; ?>"><?php echo ((isset($this->_rootref['L_FILE_COMMENT'])) ? $this->_rootref['L_FILE_COMMENT'] : ((isset($user->lang['FILE_COMMENT'])) ? $user->lang['FILE_COMMENT'] : '{ FILE_COMMENT }')); ?>:</label></dt>
					<dd><textarea name="comment_list[<?php echo $_attach_row_val['ASSOC_INDEX']; ?>]" id="comment_list_<?php echo $_attach_row_val['ASSOC_INDEX']; ?>" rows="3" cols="40"><?php echo $_attach_row_val['FILE_COMMENT']; ?></textarea></dd>
				</dl>
				<div>
					<?php if ($this->_rootref['S_INLINE_ATTACHMENT_OPTIONS']) {  ?><input type="button" value="<?php echo ((isset($this->_rootref['L_PLACE_INLINE'])) ? $this->_rootref['L_PLACE_INLINE'] : ((isset($user->lang['PLACE_INLINE'])) ? $user->lang['PLACE_INLINE'] : '{ PLACE_INLINE }')); ?>" onclick="attach_inline(<?php echo $_attach_row_val['ASSOC_INDEX']; ?>, '<?php echo $_attach_row_val['A_FILENAME']; ?>');" /> <?php } ?>

					<input type="submit" name="delete_file[<?php echo $_attach_row_val['ASSOC_INDEX']; ?>]" value="<?php echo ((isset($this->_rootref['L_DELETE_FILE'])) ? $this->_rootref['L_DELETE_FILE'] : ((isset($user->lang['DELETE_FILE'])) ? $user->lang['DELETE_FILE'] : '{ DELETE_FILE }')); ?>" />
				</div>
				<?php echo $_attach_row_val['S_HIDDEN']; ?>

				<?php if (! $_attach_row_val['S_LAST_ROW']) {  ?><hr /><?php } }} ?>

		</div>
	<?php } } ?>

	<div class="posting-submit-buttons">
		<?php echo (isset($this->_rootref['S_HIDDEN_ADDRESS_FIELD'])) ? $this->_rootref['S_HIDDEN_ADDRESS_FIELD'] : ''; ?>

		<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<?php if ($this->_rootref['S_HAS_DRAFTS']) {  ?><input type="submit" accesskey="d" tabindex="8" name="load" value="<?php echo ((isset($this->_rootref['L_LOAD_DRAFT'])) ? $this->_rootref['L_LOAD_DRAFT'] : ((isset($user->lang['LOAD_DRAFT'])) ? $user->lang['LOAD_DRAFT'] : '{ LOAD_DRAFT }')); ?>" onclick="load_draft = true;" /> <?php } if ($this->_rootref['S_SAVE_ALLOWED']) {  ?><input type="submit" accesskey="k" tabindex="7" name="save" value="<?php echo ((isset($this->_rootref['L_SAVE_DRAFT'])) ? $this->_rootref['L_SAVE_DRAFT'] : ((isset($user->lang['SAVE_DRAFT'])) ? $user->lang['SAVE_DRAFT'] : '{ SAVE_DRAFT }')); ?>" /> <?php } ?>

		<input type="submit" tabindex="5" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>"<?php if (! $this->_rootref['S_PRIVMSGS']) {  ?> onclick="document.getElementById('postform').action += '#preview';"<?php } ?> />
		<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
	</div>
	<?php } if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?><div><?php } } ?>