<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form id="confirm" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">


		<h1><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></h1>
		<?php if ($this->_rootref['ADDITIONAL_MSG']) {  ?><p class="panel"><?php echo (isset($this->_rootref['ADDITIONAL_MSG'])) ? $this->_rootref['ADDITIONAL_MSG'] : ''; ?></p><?php } if ($this->_rootref['S_NOTIFY_POSTER']) {  ?>

			<dl class="panel">
				<dt></dt>
				<dd><label><input type="checkbox" name="notify_poster" checked="checked" /> <?php if ($this->_rootref['S_APPROVE']) {  echo ((isset($this->_rootref['L_NOTIFY_POSTER_APPROVAL'])) ? $this->_rootref['L_NOTIFY_POSTER_APPROVAL'] : ((isset($user->lang['NOTIFY_POSTER_APPROVAL'])) ? $user->lang['NOTIFY_POSTER_APPROVAL'] : '{ NOTIFY_POSTER_APPROVAL }')); } else { echo ((isset($this->_rootref['L_NOTIFY_POSTER_DISAPPROVAL'])) ? $this->_rootref['L_NOTIFY_POSTER_DISAPPROVAL'] : ((isset($user->lang['NOTIFY_POSTER_DISAPPROVAL'])) ? $user->lang['NOTIFY_POSTER_DISAPPROVAL'] : '{ NOTIFY_POSTER_DISAPPROVAL }')); } ?></label></dd>
			</dl>
		<?php } if (! $this->_rootref['S_APPROVE']) {  ?>

		<div class="panel">
			<dl class="kvlist mcp-reject">
				<dt><label><?php echo ((isset($this->_rootref['L_DISAPPROVE_REASON'])) ? $this->_rootref['L_DISAPPROVE_REASON'] : ((isset($user->lang['DISAPPROVE_REASON'])) ? $user->lang['DISAPPROVE_REASON'] : '{ DISAPPROVE_REASON }')); ?>:</label></dt>
				<dd><select name="reason_id">
					<?php $_reason_count = (isset($this->_tpldata['reason'])) ? sizeof($this->_tpldata['reason']) : 0;if ($_reason_count) {for ($_reason_i = 0; $_reason_i < $_reason_count; ++$_reason_i){$_reason_val = &$this->_tpldata['reason'][$_reason_i]; ?><option value="<?php echo $_reason_val['ID']; ?>"<?php if ($_reason_val['S_SELECTED']) {  ?> selected="selected"<?php } ?>><?php echo $_reason_val['DESCRIPTION']; ?></option><?php }} ?>

					</select>
				</dd>
				<dt><label for="reason"><?php echo ((isset($this->_rootref['L_MORE_INFO'])) ? $this->_rootref['L_MORE_INFO'] : ((isset($user->lang['MORE_INFO'])) ? $user->lang['MORE_INFO'] : '{ MORE_INFO }')); ?>:</label></dt>
				<dd><textarea name="reason" id="reason" rows="4" cols="40"><?php echo (isset($this->_rootref['REASON'])) ? $this->_rootref['REASON'] : ''; ?></textarea><div class="explain"><?php echo ((isset($this->_rootref['L_CAN_LEAVE_BLANK'])) ? $this->_rootref['L_CAN_LEAVE_BLANK'] : ((isset($user->lang['CAN_LEAVE_BLANK'])) ? $user->lang['CAN_LEAVE_BLANK'] : '{ CAN_LEAVE_BLANK }')); ?></div></dd>
			</dl>
		</div>
		<?php } ?>


		<div class="panel"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></div>

		<div>
			<input type="submit" name="confirm" value="<?php echo (isset($this->_rootref['YES_VALUE'])) ? $this->_rootref['YES_VALUE'] : ''; ?>" /> 
			<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

		</div>

</form>

<?php $this->_tpl_include('overall_footer.html'); ?>