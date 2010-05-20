<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_TYPE'] == (1)) {  ?><!-- CONFIRM_REG, includes/constants.php:149 -->
<h2><?php echo ((isset($this->_rootref['L_CONFIRMATION'])) ? $this->_rootref['L_CONFIRMATION'] : ((isset($user->lang['CONFIRMATION'])) ? $user->lang['CONFIRMATION'] : '{ CONFIRMATION }')); ?></h2>
<div class="panel">
	<p><?php echo ((isset($this->_rootref['L_CONFIRM_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_EXPLAIN'] : ((isset($user->lang['CONFIRM_EXPLAIN'])) ? $user->lang['CONFIRM_EXPLAIN'] : '{ CONFIRM_EXPLAIN }')); ?></p>
	<dl class="kvlist ucp-register">
<?php } ?>


	<dt><label for="confirm_code"><?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>:</label></dt>
	<dd><img src="<?php echo (isset($this->_rootref['CONFIRM_IMAGE_LINK'])) ? $this->_rootref['CONFIRM_IMAGE_LINK'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>" /></dd>
	<dd><input type="text" name="confirm_code" id="confirm_code" size="8" maxlength="8" tabindex="<?php echo (isset($this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'])) ? $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>" />
	<?php if ($this->_rootref['S_CONFIRM_REFRESH']) {  ?><input type="submit" name="refresh_vc" id="refresh_vc" value="<?php echo ((isset($this->_rootref['L_VC_REFRESH'])) ? $this->_rootref['L_VC_REFRESH'] : ((isset($user->lang['VC_REFRESH'])) ? $user->lang['VC_REFRESH'] : '{ VC_REFRESH }')); ?>" /><?php } ?>

	<input type="hidden" name="confirm_id" id="confirm_id" value="<?php echo (isset($this->_rootref['CONFIRM_ID'])) ? $this->_rootref['CONFIRM_ID'] : ''; ?>" />
	<div class="explain"><?php echo ((isset($this->_rootref['L_CONFIRM_CODE_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_CODE_EXPLAIN'] : ((isset($user->lang['CONFIRM_CODE_EXPLAIN'])) ? $user->lang['CONFIRM_CODE_EXPLAIN'] : '{ CONFIRM_CODE_EXPLAIN }')); ?></div></dd>

<?php if ($this->_rootref['S_TYPE'] == (1)) {  ?>

	</dl>
</div>
<?php } ?>