<?php /* Smarty version 2.6.33, created on 2022-05-08 12:35:47
         compiled from modules/ModuleBuilder/tpls/studioRelationship.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ModuleBuilder/tpls/studioRelationship.tpl', 83, false),array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/studioRelationship.tpl', 100, false),)), $this); ?>

<form name='relform' onsubmit='return false;'>
<input type='hidden' name='to_pdf' value='1'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='SaveRelationship'>
<input type='hidden' name='remove_tables' value='true' id="rel_remove_tables">
<?php if (! empty ( $this->_tpl_vars['view_package'] )): ?>
<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif; ?>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
' />
<?php if ($this->_tpl_vars['rel']['relationship_only']): ?>
<input type='hidden' name='relationship_only' value='1'>
<?php endif; ?>
<table style="width:100%;" class="relform">
	<tr>
		<td colspan='2' style="padding:5px 5px 15px 5px">
			<?php if (! $this->_tpl_vars['rel']['readonly']): ?>
				<?php if (empty ( $this->_tpl_vars['view_package'] )): ?>
				<input type='button' name='saverelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVEPUBLISH']; ?>
' onclick='if(check_form("relform"))
				<?php else: ?>
				<input type='button' name='saverelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE']; ?>
' onclick='if(check_form("relform"))
				<?php endif; ?>
				ModuleBuilder.submitForm("relform");' class='button'>
				<?php if (! empty ( $this->_tpl_vars['view_package'] )): ?>
				&nbsp;
				<?php endif; ?>
			<?php endif; ?>
			<?php if (( $this->_tpl_vars['rel']['from_studio'] || $this->_tpl_vars['rel']['readonly'] && ! $this->_tpl_vars['is_new'] ) && $this->_tpl_vars['rel']['relationship_type'] != 'one-to-one'): ?>
			<input type='button' name='saverelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE']; ?>
' onclick='if(check_form("relform")){ this.form.action.value="SaveRelationshipLabel"; ModuleBuilder.submitForm("relform");}' class='button'>
			<?php endif; ?>
			<input type='button' name='cancelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_CANCEL']; ?>
' onclick='ModuleBuilder.tabPanel.removeTab(ModuleBuilder.findTabById("relEditor"));' class='button'>
            <?php if ($this->_tpl_vars['hideLevel'] < 3 && ( $this->_tpl_vars['rel']['from_studio'] || ! $this->_tpl_vars['rel']['readonly'] && ! $this->_tpl_vars['is_new'] )): ?>
			<input type='button' name='deleterelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_DELETE']; ?>
' onclick='ModuleBuilder.deleteRel()' class='button'>
            <?php endif; ?>

		</td>
	</tr>
	<?php if (empty ( $this->_tpl_vars['view_package'] ) && $this->_tpl_vars['rel']['relationship_type'] != 'one-to-one'): ?>
	<tr>
		<td class='mbLBLL'>
			<?php echo $this->_tpl_vars['mod_strings']['LBL_DROPDOWN_LANGUAGE']; ?>
:&nbsp;
			<?php echo smarty_function_html_options(array('name' => 'relationship_lang','id' => 'relationship_lang','options' => $this->_tpl_vars['available_languages'],'selected' => $this->_tpl_vars['selected_lang'],'onchange' => 'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value, null, "true");'), $this);?>

		</td>
	</tr>
	<?php endif; ?>
	<tr >
       <td>
       <?php if (! empty ( $this->_tpl_vars['rel']['relationship_name'] )): ?>
       <span align="right" scope="row"><?php echo $this->_tpl_vars['mod_strings']['LBL_REL_NAME']; ?>
:&nbsp;</span><span><?php echo $this->_tpl_vars['rel']['relationship_name']; ?>
</span>
       <?php endif; ?>
       <input type="hidden" value="<?php echo $this->_tpl_vars['rel']['relationship_name']; ?>
" name="relationship_name" />
       </td>
    </tr>
	<tr><td colspan=2>
		<table class="edit view">
		    <tr><th align="center" colspan=2><?php echo $this->_tpl_vars['mod_strings']['LBL_LHS_MODULE']; ?>
</th><th><?php echo $this->_tpl_vars['mod_strings']['LBL_REL_TYPE']; ?>
</th><th colspan=2><?php echo $this->_tpl_vars['mod_strings']['LBL_RHS_MODULE']; ?>
</th></tr>
			<tr>
				<td align="right" scope="row">
				<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULE'), $this);?>
:
				</td>
				<td>
					<input name='ignore' value="<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['module_key']), $this);?>
" disabled >
					<input type='hidden' name='lhs_module' value='<?php echo $this->_tpl_vars['module_key']; ?>
'>
				</td>
				<td>
				<?php if ($this->_tpl_vars['rel']['readonly']): ?>
                    <?php echo smarty_function_html_options(array('disabled' => true,'name' => 'relationship_type','id' => 'relationship_type_field','output' => $this->_tpl_vars['translated_cardinality'],'values' => $this->_tpl_vars['cardinality'],'selected' => $this->_tpl_vars['selected_cardinality']), $this);?>

				<?php else: ?>
                    <?php echo smarty_function_html_options(array('name' => 'relationship_type','id' => 'relationship_type_field','output' => $this->_tpl_vars['translated_cardinality'],'values' => $this->_tpl_vars['cardinality'],'selected' => $this->_tpl_vars['selected_cardinality'],'onchange' => 'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value);'), $this);?>

				<?php endif; ?>
				</td>
				<td align="right" scope="row">
				<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULE'), $this);?>
:
				</td>
				<td><?php if ($this->_tpl_vars['rel']['readonly']): ?>
					<input name="rhs_module" id="rhs_mod_field" value="<?php echo $this->_tpl_vars['rel']['rhs_module']; ?>
" disabled>
					<?php else: ?>
                    <?php echo smarty_function_html_options(array('name' => 'rhs_module','id' => 'rhs_mod_field','output' => $this->_tpl_vars['translated_relatable'],'values' => $this->_tpl_vars['relatable'],'selected' => $this->_tpl_vars['rel']['rhs_module'],'onchange' => 'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value, true);'), $this);?>

					<?php endif; ?>
				</td>
			</tr>

            <?php if ($this->_tpl_vars['rel']['relationship_only']): ?>
                <tr>
                    <td colspan=3>
                    <?php echo $this->_tpl_vars['mod_strings']['LBL_RELATIONSHIP_ONLY']; ?>

                    </td>
                </tr>
            <?php else: ?>
						<?php if (! empty ( $this->_tpl_vars['rel']['rhs_module'] ) && $this->_tpl_vars['rel']['relationship_type'] != 'one-to-one'): ?>
			<tr>
                <?php if ($this->_tpl_vars['rel']['relationship_type'] == 'many-to-many' || $this->_tpl_vars['rel']['relationship_type'] == 'many-to-one'): ?>
                    <td align="right" scope="row"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REL_LABEL'), $this);?>
:</td>
                    <td><input name="lhs_label" id="lhs_label" value="<?php echo $this->_tpl_vars['rel']['lhs_label']; ?>
"  ></td>
                <?php else: ?>
                    <td></td><td><input type="hidden" name="lhs_label" id="lhs_label" value="<?php echo $this->_tpl_vars['rel']['lhs_label']; ?>
"  ></td>
                <?php endif; ?>
                <td></td>
                <?php if ($this->_tpl_vars['rel']['relationship_type'] != 'many-to-one'): ?> 
                <td align="right" scope="row"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REL_LABEL'), $this);?>
:</td>
                <td><input name="rhs_label" id="rhs_label" value="<?php echo $this->_tpl_vars['rel']['rhs_label']; ?>
"  ></td>
                <?php else: ?>
                    <td></td><td><input type="hidden" name="rhs_label" id="rhs_label" value="<?php echo $this->_tpl_vars['rel']['rhs_label']; ?>
"  ></td>
                <?php endif; ?>
            </tr>
            <tr>
                <?php if ($this->_tpl_vars['rel']['relationship_type'] == 'many-to-many' || $this->_tpl_vars['rel']['relationship_type'] == 'many-to-one'): ?>
                <td align="right" scope="row"><?php echo $this->_tpl_vars['mod_strings']['LBL_SUBPANEL_FROM']; ?>
 <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['rel']['lhs_module']), $this);?>
:</td>
                <td> <?php if ($this->_tpl_vars['rel']['readonly']): ?>
                    <input name="lhs_subpanel" id="lhs_subpanel" value="<?php echo $this->_tpl_vars['rel']['lhs_subpanel']; ?>
" disabled>
                    <?php else: ?>
                    <?php echo smarty_function_html_options(array('name' => 'lhs_subpanel','id' => 'lhs_subpanel','output' => $this->_tpl_vars['lhspanels'],'values' => $this->_tpl_vars['lhspanels'],'selected' => $this->_tpl_vars['rel']['lhs_subpanel'],'alt' => $this->_tpl_vars['mod_strings']['LBL_MSUB']), $this);?>

                    <?php endif; ?>
                </td>
                <?php else: ?><td></td><td></td><?php endif; ?>
                <td></td>
                <?php if ($this->_tpl_vars['rel']['relationship_type'] != 'many-to-one'): ?> 
                <td align="right" scope="row"><?php echo $this->_tpl_vars['mod_strings']['LBL_SUBPANEL_FROM']; ?>
 <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['rel']['rhs_module']), $this);?>
:</td>
                <td>
                <?php if ($this->_tpl_vars['rel']['readonly']): ?>
                    <input name="lhs_subpanel" id="lhs_subpanel" value="<?php echo $this->_tpl_vars['rel']['rhs_subpanel']; ?>
" disabled>
                <?php else: ?>
                    <?php echo smarty_function_html_options(array('name' => 'rhs_subpanel','id' => 'rhs_subpanel','output' => $this->_tpl_vars['rhspanels'],'values' => $this->_tpl_vars['rhspanels'],'selected' => $this->_tpl_vars['rel']['rhs_subpanel'],'alt' => $this->_tpl_vars['mod_strings']['LBL_RSUB']), $this);?>

                <?php endif; ?>
				</td>
				<?php endif; ?>
				
				
            </tr>
			<tr>
                                                
			<?php endif; ?> 			<?php endif; ?> 		</table>
	</td></tr>
</table>
</form>
<script>
<?php echo '
ModuleBuilder.deleteRel = function()
{
    YAHOO.util.Dom.get("rel_remove_tables").value = true;
	YAHOO.SUGAR.MessageBox.show(
	{
	    type:\'confirm\',
		width: 300,
	    '; ?>

	    msg:'<b><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONFIRM_RELATIONSHIP_DELETE'), $this);?>
</b>' + 
	       "<div style='height:1em;'>&nbsp;</div><p><input type='checkbox' onclick='YAHOO.util.Dom.get(\"rel_remove_tables\").value = this.checked ? \"\" : true;' />" +
		   "&nbsp;<?php echo smarty_function_sugar_translate(array('label' => 'ML_LBL_DO_NOT_REMOVE_TABLES','module' => 'Administration'), $this);?>
</p>",
	    <?php echo '
	    fn: function(confirm) {
		    if (confirm == \'yes\') {
		        document.forms.relform.action.value="DeleteRelationship";
			    ModuleBuilder.submitForm("relform");
			    ModuleBuilder.tabPanel.removeTab(ModuleBuilder.findTabById("relEditor"));
			}
		}
	});		
}
'; ?>
	
addForm('relform');
addToValidate('relform', 'label', 'varchar', true, '<?php echo $this->_tpl_vars['mod_strings']['LBL_JS_VALIDATE_REL_LABEL']; ?>
');
<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>
ModuleBuilder.helpSetup('relationshipsHelp','addRelationship');
<?php else: ?>
ModuleBuilder.helpSetup('studioWizard','relationshipHelp');
<?php endif; ?>

</script>