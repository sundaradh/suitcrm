<?php /* Smarty version 2.6.33, created on 2022-05-08 12:37:05
         compiled from themes%5CSuiteP%5Cmodules/ModuleBuilder/tpls/layoutView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 47, false),array('function', 'sugar_help', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 55, false),array('function', 'counter', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 76, false),array('function', 'eval', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 92, false),array('modifier', 'upper', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 125, false),array('modifier', 'escape', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/layoutView.tpl', 286, false),)), $this); ?>


<?php if ($this->_tpl_vars['disable_layout']): ?>
<span class='required'>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SYNC_TO_DETAILVIEW_NOTICE','module' => 'ModuleBuilder'), $this);?>

</span>
<?php endif; ?>
<table id='layoutEditorButtons' cellspacing='2'>
    <tr>
    <?php echo $this->_tpl_vars['buttons']; ?>

	<?php if ($this->_tpl_vars['view'] == 'editview'): ?>
	<td><input type="checkbox" <?php if ($this->_tpl_vars['syncDetailEditViews']): ?>checked="true"<?php endif; ?> id="syncCheckbox" onclick="document.forms.prepareForSave.sync_detail_and_edit.value=this.checked">
	   <?php echo smarty_function_sugar_translate(array('label' => 'LBL_SYNC_TO_DETAILVIEW','module' => 'ModuleBuilder'), $this);?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod']['LBL_SYNC_TO_DETAILVIEW_HELP']), $this);?>

	</input></td>
	<?php endif; ?>
    </tr>
</table>
<div id='layoutEditor' style="width:675px;">
<input type='hidden' id='fieldwidth' value='<?php echo $this->_tpl_vars['fieldwidth']; ?>
'>
<input type='hidden' id='maxColumns' value='<?php echo $this->_tpl_vars['maxColumns']; ?>
'>
<input type='hidden' id='nextPanelId' value='<?php echo $this->_tpl_vars['nextPanelId']; ?>
'>
<div id='toolbox'>
    <h1><?php echo $this->_tpl_vars['mod']['LBL_TOOLBOX']; ?>
</h1>
    <div id='delete'>
        <h2 class="deleteme"><i class="icon-trash"></i><span><?php echo $this->_tpl_vars['mod']['LBL_DELETE']; ?>
</span></h2>
    </div>
	<?php if (! isset ( $this->_tpl_vars['fromPortal'] ) && ! isset ( $this->_tpl_vars['wireless'] ) && empty ( $this->_tpl_vars['single_panel'] )): ?>
    <div id='panelproxy'></div>
    <?php endif; ?>
    <div id='rowproxy'></div>
    <div id='availablefields'>
    <p id='fillerproxy'></p>

    <?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','start' => '1'), $this);?>

    <?php $_from = $this->_tpl_vars['available_fields']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['col']):
?>
        <?php $this->assign('field', $this->_tpl_vars['col']['name']); ?>
        <div class='le_field' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
            <?php if (! $this->_tpl_vars['fromModuleBuilder'] && ( $this->_tpl_vars['col']['name'] != '(filler)' )): ?>
                <?php ob_start(); ?>class="le_edit" style="float:right; cursor:pointer;" onclick="editFieldProperties('<?php echo $this->_tpl_vars['idCount']; ?>
', '<?php echo $this->_tpl_vars['col']['label']; ?>
');"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('otherAttributes', ob_get_contents());ob_end_clean(); ?>
                <img src="themes/SuiteP/images/edit_inline.svg" <?php echo $this->_tpl_vars['otherAttributes']; ?>
/>
            <?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'address' )): ?>
                <?php echo $this->_tpl_vars['icon_address']; ?>

            <?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'phone' )): ?>
                <?php echo $this->_tpl_vars['icon_phone']; ?>

            <?php endif; ?>
            <span id='le_label_<?php echo $this->_tpl_vars['idCount']; ?>
'>
            <?php if (! empty ( $this->_tpl_vars['translate'] ) && isset ( $this->_tpl_vars['col']['label'] ) && ! empty ( $this->_tpl_vars['col']['label'] )): ?>
                <?php echo smarty_function_eval(array('var' => $this->_tpl_vars['col']['label'],'data2' => $this->_tpl_vars['col'],'assign' => 'newLabel'), $this);?>

                <?php if ($this->_tpl_vars['from_mb']): ?>
                <?php echo $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['newLabel']]; ?>

                <?php else: ?>
                <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['newLabel'],'module' => $this->_tpl_vars['language']), $this);?>

                <?php endif; ?>
 			<?php else: ?>
                <?php $this->assign('label', $this->_tpl_vars['col']['label']); ?>
                <?php if (! empty ( $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['label']] )): ?>
                    <?php echo $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['label']]; ?>

                <?php else: ?>
                	<?php echo $this->_tpl_vars['label']; ?>

                <?php endif; ?>
            <?php endif; ?></span>
            <span class='field_name'><?php echo $this->_tpl_vars['col']['name']; ?>
</span>
            <span class='field_label'><?php echo $this->_tpl_vars['col']['label']; ?>
</span>
            <span id='le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
' class='field_tabindex'><?php echo $this->_tpl_vars['col']['tabindex']; ?>
</span>
        </div>
        <?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>

    <?php endforeach; endif; unset($_from); ?>
    </div>
</div>

<div id='panels' style='float:left; overflow-y:auto; overflow-x:hidden'>

<h3><?php echo $this->_tpl_vars['layouttitle']; ?>
</h3>
<?php echo smarty_function_counter(array('name' => 'idCounter','assign' => 'idCounter','start' => '1'), $this);?>

<?php $_from = $this->_tpl_vars['layout']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['panelid'] => $this->_tpl_vars['panel']):
?>

    <div class='le_panel' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>

        <div class='panel_label' id='le_panellabel_<?php echo $this->_tpl_vars['idCount']; ?>
'>
          <span class='panel_name' id='le_panelname_<?php echo $this->_tpl_vars['idCount']; ?>
'>
          	<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['panelid'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['panel_upper'] = ob_get_contents();  $this->assign('panel_upper', ob_get_contents());ob_end_clean(); ?>
			<?php if ($this->_tpl_vars['panelid'] == 'default'): ?>
          		<?php echo $this->_tpl_vars['mod']['LBL_DEFAULT']; ?>

			<?php elseif ($this->_tpl_vars['from_mb'] && isset ( $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['panel_upper']] )): ?>
                <?php echo $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['panel_upper']]; ?>

			<?php elseif (! empty ( $this->_tpl_vars['translate'] )): ?>
			    <?php echo smarty_function_sugar_translate(array('label' => ((is_array($_tmp=$this->_tpl_vars['panelid'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)),'module' => $this->_tpl_vars['language']), $this);?>

			<?php else: ?>
			    <?php echo $this->_tpl_vars['panelid']; ?>

			<?php endif; ?></span>
          <span class='panel_id' id='le_panelid_<?php echo $this->_tpl_vars['idCount']; ?>
'><?php echo $this->_tpl_vars['panelid']; ?>
</span>
        </div>
        <?php if ($this->_tpl_vars['panelid'] != 'default'): ?>
            <?php ob_start(); ?>class="le_edit" style="float:left; cursor:pointer;" onclick="editPanelProperties('<?php echo $this->_tpl_vars['idCount']; ?>
');"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('otherAttributes', ob_get_contents());ob_end_clean(); ?>
            <span class="glyphicon glyphicon-pencil" <?php echo $this->_tpl_vars['otherAttributes']; ?>
></span>
        <?php endif; ?>
        <span id="le_paneltype_<?php echo $this->_tpl_vars['idCount']; ?>
" style="float:left;">
        &nbsp;&nbsp;<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_TYPE','module' => 'ModuleBuilder'), $this);?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod']['LBL_TABDEF_TYPE_OPTION_HELP']), $this);?>
:
        <?php if ($this->_tpl_vars['idCounter'] == 1): ?>
            <?php $this->assign('firstpanelid', $this->_tpl_vars['panelid']); ?>
            <?php $this->assign('firstpanelidcount', $this->_tpl_vars['idCount']); ?>
        <?php endif; ?>
        <select id="le_paneltype_select_<?php echo $this->_tpl_vars['idCount']; ?>
" onchange="document.forms.prepareForSave.tabDefs_<?php echo $this->_tpl_vars['panelid']; ?>
_newTab.value=this.value; showHideBox(this.value, <?php echo $this->_tpl_vars['idCount']; ?>
, '<?php echo $this->_tpl_vars['panelid']; ?>
', '<?php echo $this->_tpl_vars['firstpanelid']; ?>
', <?php echo $this->_tpl_vars['firstpanelidcount']; ?>
);"
                title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_TYPE_HELP','module' => 'ModuleBuilder'), $this);?>
">
          <option value="0" <?php if ($this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['newTab'] == false): ?>selected="selected"<?php endif; ?>><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_TYPE_OPTION_PANEL','module' => 'ModuleBuilder'), $this);?>
</option>
          <?php if ($this->_tpl_vars['disable_tabs'] != true): ?>
          <option value="1" <?php if ($this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['newTab'] == true): ?>selected="selected"<?php endif; ?>><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_TYPE_OPTION_TAB','module' => 'ModuleBuilder'), $this);?>
</option>
          <?php endif; ?>
        </select>
        </span>
        <span id="le_panelcollapse_<?php echo $this->_tpl_vars['idCount']; ?>
" style="float:right;<?php if (isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['newTab'] == true): ?>display:none;<?php endif; ?>">
        &nbsp;<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_COLLAPSE','module' => 'ModuleBuilder'), $this);?>
?
        <input type="checkbox" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TABDEF_COLLAPSE_HELP','module' => 'ModuleBuilder'), $this);?>
" <?php if ($this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['panelDefault'] == 'collapsed'): ?>checked="checked"<?php endif; ?>
          onclick="<?php echo 'if(this.checked) { document.forms.prepareForSave.tabDefs_'; ?>
<?php echo $this->_tpl_vars['panelid']; ?>
<?php echo '_panelDefault.value=\'collapsed\'; } else { document.forms.prepareForSave.tabDefs_'; ?>
<?php echo $this->_tpl_vars['panelid']; ?>
<?php echo '_panelDefault.value=\'expanded\';}'; ?>
" />
        </span>
        <?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>


        <?php $_from = $this->_tpl_vars['panel']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rid'] => $this->_tpl_vars['row']):
?>
            <div class='le_row' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
            <?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>


            <?php $_from = $this->_tpl_vars['row']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['col']):
?>
                <?php $this->assign('field', $this->_tpl_vars['col']['name']); ?>
                <div class='le_field' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
                    <?php if (! $this->_tpl_vars['fromModuleBuilder'] && ( $this->_tpl_vars['col']['name'] != '(filler)' )): ?>
                        <?php ob_start(); ?>class="le_edit" style="float:right; cursor:pointer;" onclick="editFieldProperties('<?php echo $this->_tpl_vars['idCount']; ?>
', '<?php echo $this->_tpl_vars['col']['label']; ?>
');"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('otherAttributes', ob_get_contents());ob_end_clean(); ?>
                        <img src="themes/SuiteP/images/edit_inline.svg" <?php echo $this->_tpl_vars['otherAttributes']; ?>
/>
                    <?php endif; ?>

                    <?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'address' )): ?>
                        <?php echo $this->_tpl_vars['icon_address']; ?>

                    <?php endif; ?>
                    <?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'phone' )): ?>
                        <?php echo $this->_tpl_vars['icon_phone']; ?>

                    <?php endif; ?>
                    <span id='le_label_<?php echo $this->_tpl_vars['idCount']; ?>
'>
                    <?php if (! empty ( $this->_tpl_vars['translate'] ) && isset ( $this->_tpl_vars['col']['label'] ) && ! empty ( $this->_tpl_vars['col']['label'] )): ?>
                        <?php echo smarty_function_eval(array('var' => $this->_tpl_vars['col']['label'],'data1' => $this->_tpl_vars['col'],'assign' => 'label'), $this);?>

                        <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['label'],'module' => $this->_tpl_vars['language']), $this);?>

                    <?php else: ?>
                        <?php $this->assign('label', $this->_tpl_vars['col']['label']); ?>
		                <?php if (! empty ( $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['label']] )): ?>
		                    <?php echo $this->_tpl_vars['current_mod_strings'][$this->_tpl_vars['label']]; ?>

		                <?php elseif (! empty ( $this->_tpl_vars['mod'][$this->_tpl_vars['label']] )): ?>
		                    <?php echo $this->_tpl_vars['mod'][$this->_tpl_vars['label']]; ?>

		                <?php else: ?>
		                	<?php echo $this->_tpl_vars['label']; ?>

		                <?php endif; ?>
		            <?php endif; ?></span>
                    <span class='field_name'><?php echo $this->_tpl_vars['col']['name']; ?>
</span>
                    <span class='field_label'><?php echo $this->_tpl_vars['col']['label']; ?>
</span>
                    <span id='le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
' class='field_tabindex'><?php echo $this->_tpl_vars['col']['tabindex']; ?>
</span>
                </div>
                <?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>

            <?php endforeach; endif; unset($_from); ?>

        </div>
    <?php endforeach; endif; unset($_from); ?>

    </div>
    <?php echo smarty_function_counter(array('name' => 'idCounter','assign' => 'idCounter','print' => false), $this);?>

<?php endforeach; endif; unset($_from); ?>

</div>
<input type='hidden' id='idCount' value='<?php echo $this->_tpl_vars['idCount']; ?>
'>
</div>

<form name='prepareForSave' id='prepareForSave' action='index.php'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<input type='hidden' name='view' value='<?php echo $this->_tpl_vars['view']; ?>
'>
<input type='hidden' name="panels_as_tabs" value='<?php echo $this->_tpl_vars['displayAsTabs']; ?>
'>
<?php $_from = $this->_tpl_vars['layout']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['panelid'] => $this->_tpl_vars['panel']):
?>
<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['panelid'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['panel_upper'] = ob_get_contents();  $this->assign('panel_upper', ob_get_contents());ob_end_clean(); ?>
<input type="hidden" name="tabDefs_<?php echo $this->_tpl_vars['panelid']; ?>
_newTab" value="<?php if ($this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['newTab'] == true): ?>1<?php else: ?>0<?php endif; ?>" />
<input type="hidden" name="tabDefs_<?php echo $this->_tpl_vars['panelid']; ?>
_panelDefault" value="<?php echo $this->_tpl_vars['tabDefs'][$this->_tpl_vars['panel_upper']]['panelDefault']; ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type='hidden' name="sync_detail_and_edit" value='<?php echo $this->_tpl_vars['syncDetailEditViews']; ?>
'>
<!-- BEGIN SUGARCRM flav=ent ONLY -->
<?php if ($this->_tpl_vars['fromPortal']): ?>
    <input type='hidden' name='PORTAL' value='1'>
<?php endif; ?>
<!-- END SUGARCRM flav=ent ONLY -->
<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>
    <input type='hidden' name='MB' value='1'>
    <input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif; ?>
<input type='hidden' name='to_pdf' value='1'>
</form>
<script>
<?php echo '



var editPanelProperties = function (panelId, view) {
    panelId = "" + panelId;
	var key_label = document.getElementById(\'le_panelid_\' + panelId).innerHTML.replace(/^\\s+|\\s+$/g,\'\');
	var value_label = document.getElementById(\'le_panelname_\' + panelId).innerHTML.replace(/^\\s+|\\s+$/g,\'\');
	var params = "module=ModuleBuilder&action=editProperty&view_module=" + encodeURIComponent(ModuleBuilder.module)
	            + (ModuleBuilder.package ?  "&view_package=" + encodeURIComponent(ModuleBuilder.package) : "")
                + "&view=" + encodeURIComponent(view) + "&id_label=le_panelname_" + encodeURIComponent(panelId) + "&name_label=label_" + encodeURIComponent(key_label.toUpperCase())
                + "&title_label=" + encodeURIComponent(SUGAR.language.get("ModuleBuilder", "LBL_LABEL_TITLE")) + "&value_label=" + encodeURIComponent(value_label);
    ModuleBuilder.getContent(params);
};

var showHideBox = function (newTab, idCount, panelId, firstPanelId, firstPanelIdCount) {
    var collapseBox = document.getElementById(\'le_panelcollapse_\' + idCount);
    if (newTab == "1") {
        collapseBox.style.display = \'none\';
        if (idCount != firstPanelIdCount) {
            document.getElementById(\'le_paneltype_select_\' + firstPanelIdCount).options[1].selected = true;
            document.getElementById(\'le_panelcollapse_\' + firstPanelIdCount).style.display = \'none\';
            document.forms.prepareForSave[\'tabDefs_\' + firstPanelId + \'_newTab\'].value = \'1\';
            document.getElementById(\'le_paneltype_select_\' + firstPanelIdCount).disabled = true;
        }
    }
    else {
        var elem = document.getElementById(\'prepareForSave\').elements;
        var has_tab = false;
        collapseBox.style.display = \'block\';
        for (var i = 0; i < elem.length; i++) {
            if (elem[i].name.match(/^tabDefs_.*_newTab$/)) {
                if (elem[i].value == \'1\' && elem[i].name != panelId && elem[i].name != \'tabDefs_\'+firstPanelId+\'_newTab\')
                    has_tab = true;
            }
        }
        if (has_tab == false) {
            document.getElementById(\'le_paneltype_select_\' + firstPanelIdCount).disabled = false;
        }
    }
};

'; ?>

var editFieldProperties = function (idCount, label) {
	var value_label = document.getElementById('le_label_' + idCount).innerHTML.replace(/^\s+|\s+$/g,'');
	var value_tabindex = document.getElementById('le_tabindex_' + idCount).innerHTML.replace(/^\s+|\s+$/g,'');
	var title_label = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LABEL_TITLE','module' => 'ModuleBuilder'), $this);?>
';
	var title_tabindex = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAB_ORDER','module' => 'ModuleBuilder'), $this);?>
';

	ModuleBuilder.getContent(
	  	'module=ModuleBuilder&action=editProperty'
	  + '&view_module=<?php echo ((is_array($_tmp=$this->_tpl_vars['view_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
' + '<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>&view_package=<?php echo $this->_tpl_vars['view_package']; ?>
<?php endif; ?>'
	  +	'&view=<?php echo ((is_array($_tmp=$this->_tpl_vars['view'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&id_label=le_label_' + encodeURIComponent(idCount)
	  + '&name_label=label_' + encodeURIComponent(label) + '&title_label=' + encodeURIComponent(title_label)
	  + '&value_label=' + encodeURIComponent(value_label) + '&id_tabindex=le_tabindex_' + encodeURIComponent(idCount)
	  + '&title_tabindex=' + encodeURIComponent(title_tabindex)
	  + '&name_tabindex=tabindex&value_tabindex=' + encodeURIComponent(value_tabindex) );

}

Studio2.firstPanelId = "<?php echo $this->_tpl_vars['firstpanelid']; ?>
";
Studio2.firstPanelIdCount = <?php echo $this->_tpl_vars['firstpanelidcount']; ?>
;
Studio2.init();
if('<?php echo $this->_tpl_vars['view']; ?>
'.toLowerCase() != 'editview')
    ModuleBuilder.helpSetup('layoutEditor','default'+'<?php echo $this->_tpl_vars['view']; ?>
'.toLowerCase());
if('<?php echo $this->_tpl_vars['from_mb']; ?>
')
    ModuleBuilder.helpUnregisterByID('saveBtn');

ModuleBuilder.MBpackage = "<?php echo $this->_tpl_vars['view_package']; ?>
";

Studio2.requiredFields = [<?php echo $this->_tpl_vars['required_fields']; ?>
];
<?php echo '
//rrs: this is for IE 7 which only supports javascript 1.6 and does not have indexOf support.
if (typeof new Array().indexOf == "undefined") {
  Array.prototype.indexOf = function (obj, start) {
    for (var i = (start || 0); i < this.length; i++) {
      if (this[i] == obj) {
        return i;
      }
    }
    return -1;
  }
}
'; ?>

ModuleBuilder.module = "<?php echo $this->_tpl_vars['view_module']; ?>
";
ModuleBuilder.package=<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>"<?php echo $this->_tpl_vars['view_package']; ?>
"<?php else: ?>false<?php endif; ?>;


ModuleBuilder.disablePopupPrompt = <?php if ($this->_tpl_vars['syncDetailEditViews']): ?><?php echo $this->_tpl_vars['syncDetailEditViews']; ?>
<?php else: ?>false<?php endif; ?>;
</script>