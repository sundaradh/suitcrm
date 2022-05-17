<?php /* Smarty version 2.6.33, created on 2022-05-08 13:15:19
         compiled from modules/Reminders/tpls/remindersDefaults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/Reminders/tpls/remindersDefaults.tpl', 103, false),)), $this); ?>
<?php echo '

<style type="text/css">

</style>
'; ?>

	<?php if ($this->_tpl_vars['fields']['reminder_time']): ?>            	
            	
            	<?php $this->assign('REMINDER_TIME_OPTIONS', $this->_tpl_vars['fields']['reminder_time']['options']); ?>
            	<?php $this->assign('EMAIL_REMINDER_TIME_OPTIONS', $this->_tpl_vars['fields']['reminder_time']['options']); ?>	
            	
            	<?php if (! $this->_tpl_vars['fields']['reminder_checked']['value']): ?>            		
            		<?php $this->assign('REMINDER_TIME', -1); ?>
            	<?php else: ?>
            		<?php $this->assign('REMINDER_TIME', $this->_tpl_vars['fields']['reminder_time']['value']); ?>
            	<?php endif; ?>
            	<?php if (! $this->_tpl_vars['fields']['email_reminder_checked']['value']): ?>            		
            		<?php $this->assign('EMAIL_REMINDER_TIME', -1); ?>
            	<?php else: ?>
            		<?php $this->assign('EMAIL_REMINDER_TIME', $this->_tpl_vars['fields']['email_reminder_time']['value']); ?>
            	<?php endif; ?>
	<?php endif; ?>
	
	<?php $this->assign('REMINDER_TIME_DISPLAY', 'none'); ?>
	<?php $this->assign('EMAIL_REMINDER_TIME_DISPLAY', 'none'); ?>
	<?php if ($this->_tpl_vars['REMINDER_TIME'] != -1): ?>
            	            	<?php $this->assign('REMINDER_TIME_DISPLAY', 'inline'); ?>	
	<?php endif; ?>
        <?php if ($this->_tpl_vars['EMAIL_REMINDER_TIME'] != -1): ?>
            	            	<?php $this->assign('EMAIL_REMINDER_TIME_DISPLAY', 'inline'); ?>
        <?php endif; ?>


<?php if ($this->_tpl_vars['view'] == 'EditView' || $this->_tpl_vars['view'] == 'QuickCreate' || $this->_tpl_vars['view'] == 'QuickEdit'): ?>
<?php else: ?>
	<?php $this->assign('disabled', 'disabled'); ?>
<?php endif; ?>


<!-- Reminders field default in EditViews -->
<div id="reminders">

	<?php if (! $this->_tpl_vars['disabled']): ?>
		<div class="col">
			<span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDERS_ACTIONS']; ?>
</span>&nbsp;
		</div>
	<?php endif; ?>

	<div class="col">
		<input name="reminder_checked" type="hidden" value="0">
		<input name="reminder_checked" type="checkbox" class="popup_chkbox" value="1"<?php if ($this->_tpl_vars['REMINDER_CHECKED']): ?> checked="checked"<?php endif; ?> <?php echo $this->_tpl_vars['disabled']; ?>
>
		<span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDERS_POPUP']; ?>
</span>&nbsp;

		<?php if (! $this->_tpl_vars['disabled']): ?>
			<br>
			<!-- <span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDERS_WHEN']; ?>
</span> -->
			<select tabindex="0" class="popup_timer_sel" name="reminder_time"<?php echo $this->_tpl_vars['disabled']; ?>
>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['REMINDER_TIME_OPTIONS'],'selected' => $this->_tpl_vars['REMINDER_TIME']), $this);?>

			</select>
			<br>
			&nbsp;
		<?php else: ?>
			<?php echo $this->_tpl_vars['REMINDER_TIME_OPTIONS'][$this->_tpl_vars['REMINDER_TIME']]; ?>

		<?php endif; ?>
	</div>

	<div class="col">
		<input name="email_reminder_checked" type="hidden" value="0">
		<input name="email_reminder_checked" type="checkbox" class="email_chkbox" value="1"<?php if ($this->_tpl_vars['EMAIL_REMINDER_CHECKED']): ?> checked="checked"<?php endif; ?> <?php echo $this->_tpl_vars['disabled']; ?>
>
		<span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDERS_EMAIL']; ?>
</span>&nbsp;

		<?php if (! $this->_tpl_vars['disabled']): ?>
			<!-- <span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDERS_WHEN']; ?>
</span> -->
			<br>
			<select tabindex="0" class="email_timer_sel" name="email_reminder_time"<?php echo $this->_tpl_vars['disabled']; ?>
>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['REMINDER_TIME_OPTIONS'],'selected' => $this->_tpl_vars['EMAIL_REMINDER_TIME']), $this);?>

			</select>
			<br>
			&nbsp;
		<?php else: ?>
			<?php echo $this->_tpl_vars['REMINDER_TIME_OPTIONS'][$this->_tpl_vars['EMAIL_REMINDER_TIME']]; ?>

		<?php endif; ?>
	</div>

</div>

<?php echo '
<script type="text/javascript">

	$(function(){
		
	});

</script>
'; ?>




