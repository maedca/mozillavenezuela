<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">
	<h2><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></h2>
	<div class="panel">
		<dl class="kvlist">
			<dt><label for="subject"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label></dt>
			<dd><input type="text" name="subject" id="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" /></dd>
		</dl>
		<div id="message-box">
			<textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3"></textarea>
		</div>
		<div>
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

			<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>

			<input type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
		</div>
	</div>
</form>