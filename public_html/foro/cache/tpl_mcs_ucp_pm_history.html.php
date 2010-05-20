<?php if (!defined('IN_PHPBB')) exit; ?><span class="expand-collapse-view"><a id="review" href="#" onclick="viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').firstChild; if (rev_text.data == '<?php echo ((isset($this->_rootref['LA_EXPAND_VIEW'])) ? $this->_rootref['LA_EXPAND_VIEW'] : ((isset($this->_rootref['L_EXPAND_VIEW'])) ? addslashes($this->_rootref['L_EXPAND_VIEW']) : ((isset($user->lang['EXPAND_VIEW'])) ? addslashes($user->lang['EXPAND_VIEW']) : '{ EXPAND_VIEW }'))); ?>'){rev_text.data = '<?php echo ((isset($this->_rootref['LA_COLLAPSE_VIEW'])) ? $this->_rootref['LA_COLLAPSE_VIEW'] : ((isset($this->_rootref['L_COLLAPSE_VIEW'])) ? addslashes($this->_rootref['L_COLLAPSE_VIEW']) : ((isset($user->lang['COLLAPSE_VIEW'])) ? addslashes($user->lang['COLLAPSE_VIEW']) : '{ COLLAPSE_VIEW }'))); ?>'; } else if (rev_text.data == '<?php echo ((isset($this->_rootref['LA_COLLAPSE_VIEW'])) ? $this->_rootref['LA_COLLAPSE_VIEW'] : ((isset($this->_rootref['L_COLLAPSE_VIEW'])) ? addslashes($this->_rootref['L_COLLAPSE_VIEW']) : ((isset($user->lang['COLLAPSE_VIEW'])) ? addslashes($user->lang['COLLAPSE_VIEW']) : '{ COLLAPSE_VIEW }'))); ?>'){rev_text.data = '<?php echo ((isset($this->_rootref['LA_EXPAND_VIEW'])) ? $this->_rootref['LA_EXPAND_VIEW'] : ((isset($this->_rootref['L_EXPAND_VIEW'])) ? addslashes($this->_rootref['L_EXPAND_VIEW']) : ((isset($user->lang['EXPAND_VIEW'])) ? addslashes($user->lang['EXPAND_VIEW']) : '{ EXPAND_VIEW }'))); ?>'}; return false;"><?php echo ((isset($this->_rootref['L_EXPAND_VIEW'])) ? $this->_rootref['L_EXPAND_VIEW'] : ((isset($user->lang['EXPAND_VIEW'])) ? $user->lang['EXPAND_VIEW'] : '{ EXPAND_VIEW }')); ?></a></span>

<h2><?php echo ((isset($this->_rootref['L_MESSAGE_HISTORY'])) ? $this->_rootref['L_MESSAGE_HISTORY'] : ((isset($user->lang['MESSAGE_HISTORY'])) ? $user->lang['MESSAGE_HISTORY'] : '{ MESSAGE_HISTORY }')); ?>: <?php echo (isset($this->_rootref['HISTORY_TITLE'])) ? $this->_rootref['HISTORY_TITLE'] : ''; ?></h2>

<div id="topicreview">
	<?php $_history_row_count = (isset($this->_tpldata['history_row'])) ? sizeof($this->_tpldata['history_row']) : 0;if ($_history_row_count) {for ($_history_row_i = 0; $_history_row_i < $_history_row_count; ++$_history_row_i){$_history_row_val = &$this->_tpldata['history_row'][$_history_row_i]; ?>

		<div class="post">

<div class="postbody" id="pr<?php echo $_history_row_val['MSG_ID']; ?>">
	<?php if ($_history_row_val['U_QUOTE'] || $_history_row_val['MESSAGE_AUTHOR_QUOTE']) {  ?>

		<ul class="linklist actionlist">
			<li><a <?php if ($_history_row_val['U_QUOTE']) {  ?>href="<?php echo $_history_row_val['U_QUOTE']; ?>"<?php } else { ?>href="#postingbox" onclick="addquote(<?php echo $_history_row_val['MSG_ID']; ?>, '<?php echo $_history_row_val['MESSAGE_AUTHOR_QUOTE']; ?>');"<?php } ?> title="<?php echo ((isset($this->_rootref['L_QUOTE'])) ? $this->_rootref['L_QUOTE'] : ((isset($user->lang['QUOTE'])) ? $user->lang['QUOTE'] : '{ QUOTE }')); ?> <?php echo $_history_row_val['MESSAGE_AUTHOR']; ?>"><?php echo ((isset($this->_rootref['L_QUOTE'])) ? $this->_rootref['L_QUOTE'] : ((isset($user->lang['QUOTE'])) ? $user->lang['QUOTE'] : '{ QUOTE }')); ?> <?php echo $_history_row_val['MESSAGE_AUTHOR']; ?></a></li>
		</ul>
	<?php } ?>


	<h2><a href="<?php echo $_history_row_val['U_VIEW_MESSAGE']; ?>" <?php if ($_history_row_val['S_CURRENT_MSG']) {  ?>class="current"<?php } ?>><?php echo $_history_row_val['SUBJECT']; ?></a></h2>    
	<p class="author"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon_post_target.gif" alt="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>" /> <?php echo ((isset($this->_rootref['L_MESSAGE_BY_AUTHOR'])) ? $this->_rootref['L_MESSAGE_BY_AUTHOR'] : ((isset($user->lang['MESSAGE_BY_AUTHOR'])) ? $user->lang['MESSAGE_BY_AUTHOR'] : '{ MESSAGE_BY_AUTHOR }')); ?> <?php echo $_history_row_val['MESSAGE_AUTHOR_FULL']; ?> &raquo;<?php echo $_history_row_val['SENT_DATE']; ?></p>
	<div class="content"><?php echo $_history_row_val['MESSAGE']; ?></div>
	<div id="message_<?php echo $_history_row_val['MSG_ID']; ?>" style="display: none;"><?php echo $_history_row_val['DECODED_MESSAGE']; ?></div>
</div>

		</div>
		<?php if (! $_history_row_val['S_LAST_ROW']) {  ?><hr /><?php } }} ?>

</div>

<!-- <p><a href="#cp-main"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></p> -->