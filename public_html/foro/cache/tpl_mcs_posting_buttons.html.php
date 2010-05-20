<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
// <![CDATA[
	var form_name = 'postform';
	var text_name = <?php if ($this->_tpldata['DEFINE']['.']['SIG_EDIT']) {  ?>'signature'<?php } else { ?>'message'<?php } ?>;
	var load_draft = false;
	var upload = false;

	// Define the bbCode tags
	var imageTag = false;

	// Helpline messages
	var help_line = {
		b: '<?php echo ((isset($this->_rootref['LA_BBCODE_B_HELP'])) ? $this->_rootref['LA_BBCODE_B_HELP'] : ((isset($this->_rootref['L_BBCODE_B_HELP'])) ? addslashes($this->_rootref['L_BBCODE_B_HELP']) : ((isset($user->lang['BBCODE_B_HELP'])) ? addslashes($user->lang['BBCODE_B_HELP']) : '{ BBCODE_B_HELP }'))); ?>',
		i: '<?php echo ((isset($this->_rootref['LA_BBCODE_I_HELP'])) ? $this->_rootref['LA_BBCODE_I_HELP'] : ((isset($this->_rootref['L_BBCODE_I_HELP'])) ? addslashes($this->_rootref['L_BBCODE_I_HELP']) : ((isset($user->lang['BBCODE_I_HELP'])) ? addslashes($user->lang['BBCODE_I_HELP']) : '{ BBCODE_I_HELP }'))); ?>',
		u: '<?php echo ((isset($this->_rootref['LA_BBCODE_U_HELP'])) ? $this->_rootref['LA_BBCODE_U_HELP'] : ((isset($this->_rootref['L_BBCODE_U_HELP'])) ? addslashes($this->_rootref['L_BBCODE_U_HELP']) : ((isset($user->lang['BBCODE_U_HELP'])) ? addslashes($user->lang['BBCODE_U_HELP']) : '{ BBCODE_U_HELP }'))); ?>',
		q: '<?php echo ((isset($this->_rootref['LA_BBCODE_Q_HELP'])) ? $this->_rootref['LA_BBCODE_Q_HELP'] : ((isset($this->_rootref['L_BBCODE_Q_HELP'])) ? addslashes($this->_rootref['L_BBCODE_Q_HELP']) : ((isset($user->lang['BBCODE_Q_HELP'])) ? addslashes($user->lang['BBCODE_Q_HELP']) : '{ BBCODE_Q_HELP }'))); ?>',
		c: '<?php echo ((isset($this->_rootref['LA_BBCODE_C_HELP'])) ? $this->_rootref['LA_BBCODE_C_HELP'] : ((isset($this->_rootref['L_BBCODE_C_HELP'])) ? addslashes($this->_rootref['L_BBCODE_C_HELP']) : ((isset($user->lang['BBCODE_C_HELP'])) ? addslashes($user->lang['BBCODE_C_HELP']) : '{ BBCODE_C_HELP }'))); ?>',
		l: '<?php echo ((isset($this->_rootref['LA_BBCODE_L_HELP'])) ? $this->_rootref['LA_BBCODE_L_HELP'] : ((isset($this->_rootref['L_BBCODE_L_HELP'])) ? addslashes($this->_rootref['L_BBCODE_L_HELP']) : ((isset($user->lang['BBCODE_L_HELP'])) ? addslashes($user->lang['BBCODE_L_HELP']) : '{ BBCODE_L_HELP }'))); ?>',
		o: '<?php echo ((isset($this->_rootref['LA_BBCODE_O_HELP'])) ? $this->_rootref['LA_BBCODE_O_HELP'] : ((isset($this->_rootref['L_BBCODE_O_HELP'])) ? addslashes($this->_rootref['L_BBCODE_O_HELP']) : ((isset($user->lang['BBCODE_O_HELP'])) ? addslashes($user->lang['BBCODE_O_HELP']) : '{ BBCODE_O_HELP }'))); ?>',
		p: '<?php echo ((isset($this->_rootref['LA_BBCODE_P_HELP'])) ? $this->_rootref['LA_BBCODE_P_HELP'] : ((isset($this->_rootref['L_BBCODE_P_HELP'])) ? addslashes($this->_rootref['L_BBCODE_P_HELP']) : ((isset($user->lang['BBCODE_P_HELP'])) ? addslashes($user->lang['BBCODE_P_HELP']) : '{ BBCODE_P_HELP }'))); ?>',
		w: '<?php echo ((isset($this->_rootref['LA_BBCODE_W_HELP'])) ? $this->_rootref['LA_BBCODE_W_HELP'] : ((isset($this->_rootref['L_BBCODE_W_HELP'])) ? addslashes($this->_rootref['L_BBCODE_W_HELP']) : ((isset($user->lang['BBCODE_W_HELP'])) ? addslashes($user->lang['BBCODE_W_HELP']) : '{ BBCODE_W_HELP }'))); ?>',
		a: '<?php echo ((isset($this->_rootref['LA_BBCODE_A_HELP'])) ? $this->_rootref['LA_BBCODE_A_HELP'] : ((isset($this->_rootref['L_BBCODE_A_HELP'])) ? addslashes($this->_rootref['L_BBCODE_A_HELP']) : ((isset($user->lang['BBCODE_A_HELP'])) ? addslashes($user->lang['BBCODE_A_HELP']) : '{ BBCODE_A_HELP }'))); ?>',
		s: '<?php echo ((isset($this->_rootref['LA_BBCODE_S_HELP'])) ? $this->_rootref['LA_BBCODE_S_HELP'] : ((isset($this->_rootref['L_BBCODE_S_HELP'])) ? addslashes($this->_rootref['L_BBCODE_S_HELP']) : ((isset($user->lang['BBCODE_S_HELP'])) ? addslashes($user->lang['BBCODE_S_HELP']) : '{ BBCODE_S_HELP }'))); ?>',
		f: '<?php echo ((isset($this->_rootref['LA_BBCODE_F_HELP'])) ? $this->_rootref['LA_BBCODE_F_HELP'] : ((isset($this->_rootref['L_BBCODE_F_HELP'])) ? addslashes($this->_rootref['L_BBCODE_F_HELP']) : ((isset($user->lang['BBCODE_F_HELP'])) ? addslashes($user->lang['BBCODE_F_HELP']) : '{ BBCODE_F_HELP }'))); ?>',
		e: '<?php echo ((isset($this->_rootref['LA_BBCODE_E_HELP'])) ? $this->_rootref['LA_BBCODE_E_HELP'] : ((isset($this->_rootref['L_BBCODE_E_HELP'])) ? addslashes($this->_rootref['L_BBCODE_E_HELP']) : ((isset($user->lang['BBCODE_E_HELP'])) ? addslashes($user->lang['BBCODE_E_HELP']) : '{ BBCODE_E_HELP }'))); ?>',
		d: '<?php echo ((isset($this->_rootref['LA_BBCODE_D_HELP'])) ? $this->_rootref['LA_BBCODE_D_HELP'] : ((isset($this->_rootref['L_BBCODE_D_HELP'])) ? addslashes($this->_rootref['L_BBCODE_D_HELP']) : ((isset($user->lang['BBCODE_D_HELP'])) ? addslashes($user->lang['BBCODE_D_HELP']) : '{ BBCODE_D_HELP }'))); ?>'
		<?php $_custom_tags_count = (isset($this->_tpldata['custom_tags'])) ? sizeof($this->_tpldata['custom_tags']) : 0;if ($_custom_tags_count) {for ($_custom_tags_i = 0; $_custom_tags_i < $_custom_tags_count; ++$_custom_tags_i){$_custom_tags_val = &$this->_tpldata['custom_tags'][$_custom_tags_i]; ?>

			,cb_<?php echo $_custom_tags_val['BBCODE_ID']; ?>: '<?php echo $_custom_tags_val['A_BBCODE_HELPLINE']; ?>'
		<?php }} ?>

	}

// ]]>
</script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/editor.js"></script>

<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

<ul id="editor-toolbar">
	<?php if ($this->_rootref['S_SMILIES_ALLOWED'] && sizeof($this->_tpldata['smiley'])) {  ?>

	<li><input type="button" onclick="showHideToolMenu('smiley-box'); return false;" value="<?php echo ((isset($this->_rootref['L_SMILIES'])) ? $this->_rootref['L_SMILIES'] : ((isset($user->lang['SMILIES'])) ? $user->lang['SMILIES'] : '{ SMILIES }')); ?>" />
		<div id="smiley-box" class="toolbar-popup box color">
			<?php $_smiley_count = (isset($this->_tpldata['smiley'])) ? sizeof($this->_tpldata['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$this->_tpldata['smiley'][$_smiley_i]; ?>

				<a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); showHideToolMenu('smiley-box'); return false;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" /></a>
			<?php }} if ($this->_rootref['S_SHOW_SMILEY_LINK'] && $this->_rootref['S_SMILIES_ALLOWED']) {  ?>

				<br /><a href="<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;"><?php echo ((isset($this->_rootref['L_MORE_SMILIES'])) ? $this->_rootref['L_MORE_SMILIES'] : ((isset($user->lang['MORE_SMILIES'])) ? $user->lang['MORE_SMILIES'] : '{ MORE_SMILIES }')); ?></a>
			<?php } ?>

		</div>
		<script type="text/javascript">showHideToolMenu('smiley-box');</script>
	</li>
	<?php } ?>


	<li><input type="button" onclick="showHideToolMenu('options-box'); return false;" value="<?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>" />
		<div id="options-box" class="toolbar-popup box color">
		<?php if ($this->_rootref['BBCODE_STATUS']) {  ?>

		<?php echo (isset($this->_rootref['BBCODE_STATUS'])) ? $this->_rootref['BBCODE_STATUS'] : ''; ?><br />
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<?php echo (isset($this->_rootref['IMG_STATUS'])) ? $this->_rootref['IMG_STATUS'] : ''; ?><br />
			<?php echo (isset($this->_rootref['FLASH_STATUS'])) ? $this->_rootref['FLASH_STATUS'] : ''; ?><br />
			<?php echo (isset($this->_rootref['URL_STATUS'])) ? $this->_rootref['URL_STATUS'] : ''; ?><br />
		<?php } ?>

		<?php echo (isset($this->_rootref['SMILIES_STATUS'])) ? $this->_rootref['SMILIES_STATUS'] : ''; ?>

		<?php } if (! $this->_rootref['S_SHOW_DRAFTS'] && ! $this->_tpldata['DEFINE']['.']['SIG_EDIT'] == (1)) {  ?>

			<hr />
			<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

				<div><input type="checkbox" name="disable_bbcode" id="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?> /> <label for="disable_bbcode"><?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?></label></div>
			<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

				<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?></label></div>
			<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

				<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?></label></div>
			<?php } if ($this->_rootref['S_SIG_ALLOWED']) {  ?>

				<div><label for="attach_sig"><input type="checkbox" name="attach_sig" id="attach_sig"<?php echo (isset($this->_rootref['S_SIGNATURE_CHECKED'])) ? $this->_rootref['S_SIGNATURE_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_ATTACH_SIG'])) ? $this->_rootref['L_ATTACH_SIG'] : ((isset($user->lang['ATTACH_SIG'])) ? $user->lang['ATTACH_SIG'] : '{ ATTACH_SIG }')); ?></label></div>
			<?php } if ($this->_rootref['S_LOCK_TOPIC_ALLOWED']) {  ?>

				<div><label for="lock_topic"><input type="checkbox" name="lock_topic" id="lock_topic"<?php echo (isset($this->_rootref['S_LOCK_TOPIC_CHECKED'])) ? $this->_rootref['S_LOCK_TOPIC_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_LOCK_TOPIC'])) ? $this->_rootref['L_LOCK_TOPIC'] : ((isset($user->lang['LOCK_TOPIC'])) ? $user->lang['LOCK_TOPIC'] : '{ LOCK_TOPIC }')); ?></label></div>
			<?php } if ($this->_rootref['S_LOCK_POST_ALLOWED']) {  ?>

				<div><label for="lock_post"><input type="checkbox" name="lock_post" id="lock_post"<?php echo (isset($this->_rootref['S_LOCK_POST_CHECKED'])) ? $this->_rootref['S_LOCK_POST_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_LOCK_POST'])) ? $this->_rootref['L_LOCK_POST'] : ((isset($user->lang['LOCK_POST'])) ? $user->lang['LOCK_POST'] : '{ LOCK_POST }')); ?> [<?php echo ((isset($this->_rootref['L_LOCK_POST_EXPLAIN'])) ? $this->_rootref['L_LOCK_POST_EXPLAIN'] : ((isset($user->lang['LOCK_POST_EXPLAIN'])) ? $user->lang['LOCK_POST_EXPLAIN'] : '{ LOCK_POST_EXPLAIN }')); ?>]</label></div>
			<?php } if ($this->_rootref['S_TYPE_TOGGLE'] || $this->_rootref['S_TOPIC_TYPE_ANNOUNCE'] || $this->_rootref['S_TOPIC_TYPE_STICKY']) {  ?>

			<hr />
			<?php } if ($this->_rootref['S_TYPE_TOGGLE']) {  ?>

			<dl>
				<dt><label for="topic_type-0"><?php if ($this->_rootref['S_EDIT_POST']) {  echo ((isset($this->_rootref['L_CHANGE_TOPIC_TO'])) ? $this->_rootref['L_CHANGE_TOPIC_TO'] : ((isset($user->lang['CHANGE_TOPIC_TO'])) ? $user->lang['CHANGE_TOPIC_TO'] : '{ CHANGE_TOPIC_TO }')); } else { echo ((isset($this->_rootref['L_POST_TOPIC_AS'])) ? $this->_rootref['L_POST_TOPIC_AS'] : ((isset($user->lang['POST_TOPIC_AS'])) ? $user->lang['POST_TOPIC_AS'] : '{ POST_TOPIC_AS }')); } ?>:</label></dt>
				<dd><?php $_topic_type_count = (isset($this->_tpldata['topic_type'])) ? sizeof($this->_tpldata['topic_type']) : 0;if ($_topic_type_count) {for ($_topic_type_i = 0; $_topic_type_i < $_topic_type_count; ++$_topic_type_i){$_topic_type_val = &$this->_tpldata['topic_type'][$_topic_type_i]; ?><div><label for="topic_type-<?php echo $_topic_type_val['VALUE']; ?>"><input type="radio" name="topic_type" id="topic_type-<?php echo $_topic_type_val['VALUE']; ?>" value="<?php echo $_topic_type_val['VALUE']; ?>"<?php echo $_topic_type_val['S_CHECKED']; ?> /><?php echo $_topic_type_val['L_TOPIC_TYPE']; ?></label></div><?php }} ?></dd>
			</dl>
			<?php } if ($this->_rootref['S_TOPIC_TYPE_ANNOUNCE'] || $this->_rootref['S_TOPIC_TYPE_STICKY']) {  ?>

			<dl>
				<dt><label for="topic_time_limit"><?php echo ((isset($this->_rootref['L_STICK_TOPIC_FOR'])) ? $this->_rootref['L_STICK_TOPIC_FOR'] : ((isset($user->lang['STICK_TOPIC_FOR'])) ? $user->lang['STICK_TOPIC_FOR'] : '{ STICK_TOPIC_FOR }')); ?>:</label></dt>
				<dd><label for="topic_time_limit"><input type="text" name="topic_time_limit" id="topic_time_limit" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['TOPIC_TIME_LIMIT'])) ? $this->_rootref['TOPIC_TIME_LIMIT'] : ''; ?>" /> <?php echo ((isset($this->_rootref['L_DAYS'])) ? $this->_rootref['L_DAYS'] : ((isset($user->lang['DAYS'])) ? $user->lang['DAYS'] : '{ DAYS }')); ?></label>
				<div class="explain"><?php echo ((isset($this->_rootref['L_STICK_TOPIC_FOR_EXPLAIN'])) ? $this->_rootref['L_STICK_TOPIC_FOR_EXPLAIN'] : ((isset($user->lang['STICK_TOPIC_FOR_EXPLAIN'])) ? $user->lang['STICK_TOPIC_FOR_EXPLAIN'] : '{ STICK_TOPIC_FOR_EXPLAIN }')); ?></div>
				</dd>
			</dl>
			<?php } if ($this->_rootref['S_EDIT_REASON']) {  ?>

			<dl>
				<dt><label for="edit_reason"><?php echo ((isset($this->_rootref['L_EDIT_REASON'])) ? $this->_rootref['L_EDIT_REASON'] : ((isset($user->lang['EDIT_REASON'])) ? $user->lang['EDIT_REASON'] : '{ EDIT_REASON }')); ?>:</label></dt>
				<dd><input type="text" name="edit_reason" id="edit_reason" value="<?php echo (isset($this->_rootref['EDIT_REASON'])) ? $this->_rootref['EDIT_REASON'] : ''; ?>" /></dd>
			</dl>
			<?php } } if ($this->_tpldata['DEFINE']['.']['SIG_EDIT']) {  ?>

			<hr />
			<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

				<div><label for="disable_bbcode"><input type="checkbox" name="disable_bbcode" id="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?></label></div>
			<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

				<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?></label></div>
			<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

				<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?> /> <?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?></label></div>
			<?php } } ?>


		</div>
		<script type="text/javascript">showHideToolMenu('options-box');</script>
	</li>

	<li><input type="button" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbfontstyle('[b]','[/b]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_B_HELP'])) ? $this->_rootref['L_BBCODE_B_HELP'] : ((isset($user->lang['BBCODE_B_HELP'])) ? $user->lang['BBCODE_B_HELP'] : '{ BBCODE_B_HELP }')); ?>" /></li>
	<li><input type="button" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbfontstyle('[i]','[/i]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_I_HELP'])) ? $this->_rootref['L_BBCODE_I_HELP'] : ((isset($user->lang['BBCODE_I_HELP'])) ? $user->lang['BBCODE_I_HELP'] : '{ BBCODE_I_HELP }')); ?>" /></li>
	<li><input type="button" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbfontstyle('[u]','[/u]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_U_HELP'])) ? $this->_rootref['L_BBCODE_U_HELP'] : ((isset($user->lang['BBCODE_U_HELP'])) ? $user->lang['BBCODE_U_HELP'] : '{ BBCODE_U_HELP }')); ?>" /></li>
	<?php if ($this->_rootref['S_BBCODE_QUOTE']) {  ?>

		<li><input type="button" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbfontstyle('[quote]','[/quote]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_Q_HELP'])) ? $this->_rootref['L_BBCODE_Q_HELP'] : ((isset($user->lang['BBCODE_Q_HELP'])) ? $user->lang['BBCODE_Q_HELP'] : '{ BBCODE_Q_HELP }')); ?>" /></li>
	<?php } ?>

	<li class="expanded-only"><input type="button" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbfontstyle('[code]','[/code]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_C_HELP'])) ? $this->_rootref['L_BBCODE_C_HELP'] : ((isset($user->lang['BBCODE_C_HELP'])) ? $user->lang['BBCODE_C_HELP'] : '{ BBCODE_C_HELP }')); ?>" /></li>
	<li class="expanded-only"><input type="button" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbfontstyle('[list]','[/list]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_L_HELP'])) ? $this->_rootref['L_BBCODE_L_HELP'] : ((isset($user->lang['BBCODE_L_HELP'])) ? $user->lang['BBCODE_L_HELP'] : '{ BBCODE_L_HELP }')); ?>" /></li>
	<li class="expanded-only"><input type="button" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbfontstyle('[list=]','[/list]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_O_HELP'])) ? $this->_rootref['L_BBCODE_O_HELP'] : ((isset($user->lang['BBCODE_O_HELP'])) ? $user->lang['BBCODE_O_HELP'] : '{ BBCODE_O_HELP }')); ?>" /></li>
	<li class="expanded-only"><input type="button" accesskey="t" name="addlitsitem" value="[*]" style="width: 40px" onclick="bbsinglestyle('[*]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_LISTITEM_HELP'])) ? $this->_rootref['L_BBCODE_LISTITEM_HELP'] : ((isset($user->lang['BBCODE_LISTITEM_HELP'])) ? $user->lang['BBCODE_LISTITEM_HELP'] : '{ BBCODE_LISTITEM_HELP }')); ?>" /></li>
	<?php if ($this->_rootref['S_BBCODE_IMG']) {  ?>

		<li class="expanded-only"><input type="button" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbfontstyle('[img]','[/img]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_P_HELP'])) ? $this->_rootref['L_BBCODE_P_HELP'] : ((isset($user->lang['BBCODE_P_HELP'])) ? $user->lang['BBCODE_P_HELP'] : '{ BBCODE_P_HELP }')); ?>" /></li>
	<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

		<li class="expanded-only"><input type="button" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbfontstyle('[url]','[/url]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_W_HELP'])) ? $this->_rootref['L_BBCODE_W_HELP'] : ((isset($user->lang['BBCODE_W_HELP'])) ? $user->lang['BBCODE_W_HELP'] : '{ BBCODE_W_HELP }')); ?>" /></li>
	<?php } if ($this->_rootref['S_BBCODE_FLASH']) {  ?>

		<li class="expanded-only"><input type="button" accesskey="d" name="addbbcode18" value="Flash" onclick="bbfontstyle('[flash=]', '[/flash]')" title="<?php echo ((isset($this->_rootref['L_BBCODE_D_HELP'])) ? $this->_rootref['L_BBCODE_D_HELP'] : ((isset($user->lang['BBCODE_D_HELP'])) ? $user->lang['BBCODE_D_HELP'] : '{ BBCODE_D_HELP }')); ?>" /></li>
	<?php } ?>

	<li class="expanded-only"><select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="<?php echo ((isset($this->_rootref['L_BBCODE_F_HELP'])) ? $this->_rootref['L_BBCODE_F_HELP'] : ((isset($user->lang['BBCODE_F_HELP'])) ? $user->lang['BBCODE_F_HELP'] : '{ BBCODE_F_HELP }')); ?>">
		<option value="50"><?php echo ((isset($this->_rootref['L_FONT_TINY'])) ? $this->_rootref['L_FONT_TINY'] : ((isset($user->lang['FONT_TINY'])) ? $user->lang['FONT_TINY'] : '{ FONT_TINY }')); ?></option>
		<option value="85"><?php echo ((isset($this->_rootref['L_FONT_SMALL'])) ? $this->_rootref['L_FONT_SMALL'] : ((isset($user->lang['FONT_SMALL'])) ? $user->lang['FONT_SMALL'] : '{ FONT_SMALL }')); ?></option>
		<option value="100" selected="selected"><?php echo ((isset($this->_rootref['L_FONT_NORMAL'])) ? $this->_rootref['L_FONT_NORMAL'] : ((isset($user->lang['FONT_NORMAL'])) ? $user->lang['FONT_NORMAL'] : '{ FONT_NORMAL }')); ?></option>
		<?php if (! $this->_rootref['MAX_FONT_SIZE'] || $this->_rootref['MAX_FONT_SIZE'] >= (150)) {  ?>

			<option value="150"><?php echo ((isset($this->_rootref['L_FONT_LARGE'])) ? $this->_rootref['L_FONT_LARGE'] : ((isset($user->lang['FONT_LARGE'])) ? $user->lang['FONT_LARGE'] : '{ FONT_LARGE }')); ?></option>
			<?php if (! $this->_rootref['MAX_FONT_SIZE'] || $this->_rootref['MAX_FONT_SIZE'] >= (200)) {  ?>

				<option value="200"><?php echo ((isset($this->_rootref['L_FONT_HUGE'])) ? $this->_rootref['L_FONT_HUGE'] : ((isset($user->lang['FONT_HUGE'])) ? $user->lang['FONT_HUGE'] : '{ FONT_HUGE }')); ?></option>
			<?php } } ?>

	</select></li>
	<li class="expanded-only"><input type="button" name="bbpalette" id="bbpalette" value="<?php echo ((isset($this->_rootref['L_FONT_COLOR'])) ? $this->_rootref['L_FONT_COLOR'] : ((isset($user->lang['FONT_COLOR'])) ? $user->lang['FONT_COLOR'] : '{ FONT_COLOR }')); ?>" onclick="showHideToolMenu('colour-palette'); return false;" title="<?php echo ((isset($this->_rootref['L_BBCODE_S_HELP'])) ? $this->_rootref['L_BBCODE_S_HELP'] : ((isset($user->lang['BBCODE_S_HELP'])) ? $user->lang['BBCODE_S_HELP'] : '{ BBCODE_S_HELP }')); ?>" />
		<div id="colour-palette" class="toolbar-popup box color">
				<script type="text/javascript">
				// <![CDATA[
					colorPalette('v', 15, 10);
				// ]]>
				</script>
		</div>
		<script type="text/javascript">showHideToolMenu('colour-palette');</script>
	</li>
	<?php $_custom_tags_count = (isset($this->_tpldata['custom_tags'])) ? sizeof($this->_tpldata['custom_tags']) : 0;if ($_custom_tags_count) {for ($_custom_tags_i = 0; $_custom_tags_i < $_custom_tags_count; ++$_custom_tags_i){$_custom_tags_val = &$this->_tpldata['custom_tags'][$_custom_tags_i]; ?>

		<li class="expanded-only"><input type="button" name="addbbcode<?php echo $_custom_tags_val['BBCODE_ID']; ?>" value="<?php echo $_custom_tags_val['BBCODE_TAG']; ?>" onclick="bbfontstyle(<?php echo $_custom_tags_val['BBCODE_NAME']; ?>)" title="<?php echo $_custom_tags_val['BBCODE_HELPLINE']; ?>" /></li>
	<?php }} ?>

	<li class="expanded-only"><input type="button" value="<<" onclick="addRemoveClassName(document.getElementById('editor-toolbar'), 'expanded');" title="<?php echo ((isset($this->_rootref['L_COLLAPSE_VIEW'])) ? $this->_rootref['L_COLLAPSE_VIEW'] : ((isset($user->lang['COLLAPSE_VIEW'])) ? $user->lang['COLLAPSE_VIEW'] : '{ COLLAPSE_VIEW }')); ?>" /></li>
	<li class="collapsed-only"><input type="button" value=">>" onclick="addRemoveClassName(document.getElementById('editor-toolbar'), 'expanded');" title="<?php echo ((isset($this->_rootref['L_EXPAND_VIEW'])) ? $this->_rootref['L_EXPAND_VIEW'] : ((isset($user->lang['EXPAND_VIEW'])) ? $user->lang['EXPAND_VIEW'] : '{ EXPAND_VIEW }')); ?>" /></li>
</ul>
<?php } ?>