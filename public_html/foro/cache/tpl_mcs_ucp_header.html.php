<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<h1><?php echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?></h1>

<?php if (sizeof($this->_tpldata['friends_online']) || sizeof($this->_tpldata['friends_offline'])) {  ?>

	<dl>
		<dt><?php echo ((isset($this->_rootref['L_FRIENDS'])) ? $this->_rootref['L_FRIENDS'] : ((isset($user->lang['FRIENDS'])) ? $user->lang['FRIENDS'] : '{ FRIENDS }')); ?></dt>
		<?php $_friends_online_count = (isset($this->_tpldata['friends_online'])) ? sizeof($this->_tpldata['friends_online']) : 0;if ($_friends_online_count) {for ($_friends_online_i = 0; $_friends_online_i < $_friends_online_count; ++$_friends_online_i){$_friends_online_val = &$this->_tpldata['friends_online'][$_friends_online_i]; ?>

			<dd class="friend-online" title="<?php echo ((isset($this->_rootref['L_FRIENDS_ONLINE'])) ? $this->_rootref['L_FRIENDS_ONLINE'] : ((isset($user->lang['FRIENDS_ONLINE'])) ? $user->lang['FRIENDS_ONLINE'] : '{ FRIENDS_ONLINE }')); ?>"><?php echo $_friends_online_val['USERNAME_FULL']; ?> <?php if ($this->_rootref['S_SHOW_PM_BOX']) {  ?> <input type="submit" name="add_to[<?php echo $_friends_online_val['USER_ID']; ?>]" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" /><?php } if ($_friends_online_val['S_LAST_ROW'] && sizeof($this->_tpldata['friends_offline'])) {  ?><hr /><?php } ?></dd>
		<?php }} $_friends_offline_count = (isset($this->_tpldata['friends_offline'])) ? sizeof($this->_tpldata['friends_offline']) : 0;if ($_friends_offline_count) {for ($_friends_offline_i = 0; $_friends_offline_i < $_friends_offline_count; ++$_friends_offline_i){$_friends_offline_val = &$this->_tpldata['friends_offline'][$_friends_offline_i]; ?>

			<dd class="friend-offline" title="<?php echo ((isset($this->_rootref['L_FRIENDS_OFFLINE'])) ? $this->_rootref['L_FRIENDS_OFFLINE'] : ((isset($user->lang['FRIENDS_OFFLINE'])) ? $user->lang['FRIENDS_OFFLINE'] : '{ FRIENDS_OFFLINE }')); ?>"><?php echo $_friends_offline_val['USERNAME_FULL']; ?> <?php if ($this->_rootref['S_SHOW_PM_BOX']) {  ?><input type="submit" name="add_to[<?php echo $_friends_offline_val['USER_ID']; ?>]" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" /><?php } ?></dd>
		<?php }} ?>

	</dl>
<?php } ?>


<ul class="tabs">
	<?php $_t_block1_count = (isset($this->_tpldata['t_block1'])) ? sizeof($this->_tpldata['t_block1']) : 0;if ($_t_block1_count) {for ($_t_block1_i = 0; $_t_block1_i < $_t_block1_count; ++$_t_block1_i){$_t_block1_val = &$this->_tpldata['t_block1'][$_t_block1_i]; ?>

	<li <?php if ($_t_block1_val['S_SELECTED']) {  ?>class="activetab"<?php } ?>><a href="<?php echo $_t_block1_val['U_TITLE']; ?>"><?php echo $_t_block1_val['L_TITLE']; ?></a></li>
	<?php }} ?>

</ul>

<?php if ($this->_rootref['S_COMPOSE_PM']) {  ?>

<form id="postform" method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<?php } ?>


	<div class="tabcontent">

		<ul class="tabs">
		<?php if ($this->_rootref['S_PRIVMSGS']) {  $_t_block2_count = (isset($this->_tpldata['t_block2'])) ? sizeof($this->_tpldata['t_block2']) : 0;if ($_t_block2_count) {for ($_t_block2_i = 0; $_t_block2_i < $_t_block2_count; ++$_t_block2_i){$_t_block2_val = &$this->_tpldata['t_block2'][$_t_block2_i]; if ($this->_rootref['S_PRIVMSGS'] && ! $_t_block2_val['S_LAST_ROW']) {  ?>

					<li<?php if ($_t_block2_val['S_SELECTED']) {  ?> class="activetab"<?php } ?>><a href="<?php echo $_t_block2_val['U_TITLE']; ?>"><?php echo $_t_block2_val['L_TITLE']; ?></a></li>
				<?php } }} $_folder_count = (isset($this->_tpldata['folder'])) ? sizeof($this->_tpldata['folder']) : 0;if ($_folder_count) {for ($_folder_i = 0; $_folder_i < $_folder_count; ++$_folder_i){$_folder_val = &$this->_tpldata['folder'][$_folder_i]; ?>

				<li<?php if ($_folder_val['S_CUR_FOLDER']) {  ?> class="activetab"<?php } ?>><a href="<?php echo $_folder_val['U_FOLDER']; ?>"><?php echo $_folder_val['FOLDER_NAME']; ?> <?php if ($_folder_val['UNREAD_MESSAGES'] > 0) {  ?><strong>(<?php echo $_folder_val['UNREAD_MESSAGES']; ?>)</strong><?php } ?></a></li>
			<?php }} } $_t_block2_count = (isset($this->_tpldata['t_block2'])) ? sizeof($this->_tpldata['t_block2']) : 0;if ($_t_block2_count) {for ($_t_block2_i = 0; $_t_block2_i < $_t_block2_count; ++$_t_block2_i){$_t_block2_val = &$this->_tpldata['t_block2'][$_t_block2_i]; if (( $this->_rootref['S_PRIVMSGS'] && $_t_block2_val['S_LAST_ROW'] ) || ! $this->_rootref['S_PRIVMSGS']) {  ?>

				<li<?php if ($_t_block2_val['S_SELECTED']) {  ?> class="activetab"<?php } ?>><a href="<?php echo $_t_block2_val['U_TITLE']; ?>"><?php echo $_t_block2_val['L_TITLE']; ?></a></li>
			<?php } }} ?>

		</ul>

	<div class="tabcontent">