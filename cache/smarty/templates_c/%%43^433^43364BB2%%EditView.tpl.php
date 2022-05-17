<?php /* Smarty version 2.6.33, created on 2022-05-08 13:15:43
         compiled from modules/ACLRoles/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_action_menu', 'modules/ACLRoles/EditView.tpl', 68, false),)), $this); ?>


<script>
<?php echo '
function set_focus(){
	document.getElementById(\'name\').focus();
}
'; ?>

</script>

<form method='POST' name='EditView' action='index.php'>
<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0 class="actionsContainer">
<tbody>
<tr>
<td>
<input type='hidden' name='record' value='<?php echo $this->_tpl_vars['ROLE']['id']; ?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='<?php echo $this->_tpl_vars['ISDUPLICATE']; ?>
'>
<input type='hidden' name='return_record' value='<?php echo $this->_tpl_vars['RETURN']['record']; ?>
'>
<input type='hidden' name='return_action' value='<?php echo $this->_tpl_vars['RETURN']['action']; ?>
'>
<input type='hidden' name='return_module' value='<?php echo $this->_tpl_vars['RETURN']['module']; ?>
'> &nbsp;
<?php echo smarty_function_sugar_action_menu(array('id' => 'roleEditActions','class' => 'clickMenu fancymenu','buttons' => $this->_tpl_vars['ACTION_MENU'],'flat' => true), $this);?>

</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="edit view"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td scope="row" align='right'><?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
:<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td><td >
<input id='name' name='name' type='text' value='<?php echo $this->_tpl_vars['ROLE']['name']; ?>
'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td scope="row" align='right'><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION']; ?>
:</td>
<td ><textarea name='description' cols="80" rows="8"><?php echo $this->_tpl_vars['ROLE']['description']; ?>
</textarea></td>
</tr>
</table>

</form>
<script type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '<?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
');
</script>