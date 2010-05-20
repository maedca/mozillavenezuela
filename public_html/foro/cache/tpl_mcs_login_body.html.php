<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post" id="login">
		<h1><?php if ($this->_rootref['LOGIN_EXPLAIN']) {  echo (isset($this->_rootref['LOGIN_EXPLAIN'])) ? $this->_rootref['LOGIN_EXPLAIN'] : ''; } else { echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); } ?></h1>
		<?php if ($this->_rootref['LOGIN_ERROR']) {  ?><div class="error"><?php echo (isset($this->_rootref['LOGIN_ERROR'])) ? $this->_rootref['LOGIN_ERROR'] : ''; ?></div><?php } ?>

<div class="panel">
		<dl class="kvlist login-list">
			<dt><label for="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
			<dd><input type="text" tabindex="1" name="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" id="<?php echo (isset($this->_rootref['USERNAME_CREDENTIAL'])) ? $this->_rootref['USERNAME_CREDENTIAL'] : ''; ?>" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></dd>
			<dt><label for="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
			<dd><input type="password" tabindex="2" id="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" name="<?php echo (isset($this->_rootref['PASSWORD_CREDENTIAL'])) ? $this->_rootref['PASSWORD_CREDENTIAL'] : ''; ?>" size="25" /></dd>
		
		<?php if ($this->_rootref['CAPTCHA_TEMPLATE'] && $this->_rootref['S_CONFIRM_CODE']) {  $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 3; if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) { $this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']); } } ?>

		</dl>
		
		<?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN']) {  if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><div><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></div><?php } ?>

			<div><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></div>
		<?php } ?>

</div>

		<div><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="login" tabindex="6" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" /></div>

		<?php if ($this->_rootref['S_DISPLAY_FULL_LOGIN'] && ( $this->_rootref['U_SEND_PASSWORD'] || $this->_rootref['U_RESEND_ACTIVATION'] || $this->_rootref['S_ADMIN_AUTH'] )) {  ?>

			<div class="panel"><ul class="linklist">
				<?php if ($this->_rootref['U_SEND_PASSWORD']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_SEND_PASSWORD'])) ? $this->_rootref['U_SEND_PASSWORD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORGOT_PASS'])) ? $this->_rootref['L_FORGOT_PASS'] : ((isset($user->lang['FORGOT_PASS'])) ? $user->lang['FORGOT_PASS'] : '{ FORGOT_PASS }')); ?></a></li><?php } if ($this->_rootref['U_RESEND_ACTIVATION']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_RESEND_ACTIVATION'])) ? $this->_rootref['U_RESEND_ACTIVATION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESEND_ACTIVATION'])) ? $this->_rootref['L_RESEND_ACTIVATION'] : ((isset($user->lang['RESEND_ACTIVATION'])) ? $user->lang['RESEND_ACTIVATION'] : '{ RESEND_ACTIVATION }')); ?></a></li><?php } if (! $this->_rootref['S_ADMIN_AUTH'] && $this->_rootref['S_REGISTER_ENABLED']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></li><?php } ?>

			</ul></div>
		<?php } ?>


</form>

<?php $this->_tpl_include('overall_footer.html'); ?>