<?php if (!defined('IN_PHPBB')) exit; ?><script type="text/javascript">
function showHideAttachPanel() {
	document.getElementById('attach-panel').style.display = document.getElementById('attach-panel-check').checked ? 'block' : 'none';
	if (!document.getElementById('attach-panel-check').checked) {
		document.getElementById('fileupload').value='';
		document.getElementById('filecomment').value='';
	}
}
</script>
<div class="panel"><input type="checkbox" onclick="showHideAttachPanel();" id="attach-panel-check" /> <label for="attach-panel-check"><?php echo ((isset($this->_rootref['L_ADD_ATTACHMENT'])) ? $this->_rootref['L_ADD_ATTACHMENT'] : ((isset($user->lang['ADD_ATTACHMENT'])) ? $user->lang['ADD_ATTACHMENT'] : '{ ADD_ATTACHMENT }')); ?></label>
<div id="attach-panel">
	<dl class="kvlist">
		<dt><label for="fileupload"><?php echo ((isset($this->_rootref['L_FILENAME'])) ? $this->_rootref['L_FILENAME'] : ((isset($user->lang['FILENAME'])) ? $user->lang['FILENAME'] : '{ FILENAME }')); ?>:</label></dt>
		<dd>
			<input type="file" name="fileupload" id="fileupload" maxlength="<?php echo (isset($this->_rootref['FILESIZE'])) ? $this->_rootref['FILESIZE'] : ''; ?>" value="" />
			<input type="submit" name="add_file" value="<?php echo ((isset($this->_rootref['L_ADD_FILE'])) ? $this->_rootref['L_ADD_FILE'] : ((isset($user->lang['ADD_FILE'])) ? $user->lang['ADD_FILE'] : '{ ADD_FILE }')); ?>" onclick="upload = true;" />
		</dd>
		<dt><label for="filecomment"><?php echo ((isset($this->_rootref['L_FILE_COMMENT'])) ? $this->_rootref['L_FILE_COMMENT'] : ((isset($user->lang['FILE_COMMENT'])) ? $user->lang['FILE_COMMENT'] : '{ FILE_COMMENT }')); ?>:</label></dt>
		<dd><textarea name="filecomment" id="filecomment" rows="3" cols="40"><?php echo (isset($this->_rootref['FILE_COMMENT'])) ? $this->_rootref['FILE_COMMENT'] : ''; ?></textarea></dd>
	</dl>
</div>
</div>