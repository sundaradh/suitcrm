<?php /* Smarty version 2.6.33, created on 2022-05-08 13:16:02
         compiled from modules/ACLRoles/EditViewBody.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/ACLRoles/EditViewBody.tpl', 42, false),)), $this); ?>
<script src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ACLRoles/ACLRoles.js'), $this);?>
"></script>
<b><?php echo $this->_tpl_vars['MOD']['LBL_EDIT_VIEW_DIRECTIONS']; ?>
</b>
<table width='100%'><tr>
<td width= '100%'  valign='top'>
<div id='category_data'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ACLRoles/EditAllBody.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</td></tr>
</table>

