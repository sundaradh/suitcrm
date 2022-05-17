<?php /* Smarty version 2.6.33, created on 2022-05-08 12:31:40
         compiled from modules/ModuleBuilder/tpls/assistantJavascript.tpl */ ?>
<script>
<?php echo '
if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);
'; ?>

<?php if ($this->_tpl_vars['userPref']): ?>
	<?php echo 'Assistant.processUserPref("'; ?>
<?php echo $this->_tpl_vars['userPref']; ?>
<?php echo '");'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['assistant']['key'] && $this->_tpl_vars['assistant']['group']): ?>
	<?php echo 'Assistant.mbAssistant.setBody(SUGAR.language.get(\'ModuleBuilder\',\'assistantHelp\').'; ?>
<?php echo $this->_tpl_vars['assistant']['group']; ?>
<?php echo '.'; ?>
<?php echo $this->_tpl_vars['assistant']['key']; ?>
<?php echo ');'; ?>

<?php endif; ?>
<?php echo '
	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}
'; ?>

</script>