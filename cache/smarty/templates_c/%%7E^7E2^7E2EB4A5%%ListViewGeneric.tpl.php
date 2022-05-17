<?php /* Smarty version 2.6.33, created on 2022-05-08 12:39:46
         compiled from themes%5CSuiteP%5Cinclude/ListView/ListViewGeneric.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 41, false),array('function', 'sugar_getjspath', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 43, false),array('function', 'counter', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 133, false),array('function', 'sugar_translate', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 170, false),array('function', 'sugar_ajax_url', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 267, false),array('function', 'sugar_evalcolumn_old', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 271, false),array('function', 'sugar_field', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 273, false),array('function', 'sugar_getimage', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 280, false),array('modifier', 'replace', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 88, false),array('modifier', 'default', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 158, false),array('modifier', 'lower', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 160, false),array('modifier', 'upper', 'themes\\SuiteP\\include/ListView/ListViewGeneric.tpl', 163, false),)), $this); ?>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewColumnsFilterDialog.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/popup_helper.js'), $this);?>
'></script>


<script>
<?php echo '
	$(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	  		$(node).sugarActionMenu();
	  	});

        $(\'.selectActionsDisabled\').children().each(function(index) {
            $(this).attr(\'onclick\',\'\').unbind(\'click\');
        });

        var selectedTopValue = $("#selectCountTop").attr("value");
        if(typeof(selectedTopValue) != "undefined" && selectedTopValue != "0"){
        	sugarListView.prototype.toggleSelected();
        }
	});
'; ?>

</script>
<?php $this->assign('currentModule', $this->_tpl_vars['pageData']['bean']['moduleDir']); ?>
<?php $this->assign('singularModule', $this->_tpl_vars['moduleListSingular'][$this->_tpl_vars['currentModule']]); ?>
<?php $this->assign('moduleName', $this->_tpl_vars['moduleList'][$this->_tpl_vars['currentModule']]); ?>
<?php $this->assign('hideTable', false); ?>

<?php if ($this->_tpl_vars['form']['headerTpl']): ?>
    <?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['form']['headerTpl']), $this);?>

<?php endif; ?>

<?php if (count ( $this->_tpl_vars['data'] ) == 0): ?>
	<?php $this->assign('hideTable', true); ?>
	<div class="list view listViewEmpty">
        <?php if ($this->_tpl_vars['showFilterIcon']): ?>
			<div class="filterContainer">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewSearchLink.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
        <?php endif; ?>
		<?php if ($this->_tpl_vars['displayEmptyDataMesssages']): ?>
        <?php if (strlen ( $this->_tpl_vars['query'] ) == 0): ?>
                <?php ob_start(); ?><a href="?module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&action=EditView&return_module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_CREATE_BUTTON_LABEL']; ?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('createLink', ob_get_contents());ob_end_clean(); ?>
                <?php ob_start(); ?><a href="?module=Import&action=Step1&import_module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&return_module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&return_action=index"><?php echo $this->_tpl_vars['APP']['LBL_IMPORT']; ?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('importLink', ob_get_contents());ob_end_clean(); ?>
                <?php ob_start(); ?><a target="_blank" href='?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugar_info']['sugar_version']; ?>
&edition=<?php echo $this->_tpl_vars['sugar_info']['sugar_flavor']; ?>
&lang=&help_module=<?php echo $this->_tpl_vars['currentModule']; ?>
&help_action=&key='><?php echo $this->_tpl_vars['APP']['LBL_CLICK_HERE']; ?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('helpLink', ob_get_contents());ob_end_clean(); ?>

			<?php if (! ( isset ( $this->_tpl_vars['options']['hide_edit_link'] ) && $this->_tpl_vars['options']['hide_edit_link'] === true ) && ! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
				<p class="msg"> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['APP']['MSG_EMPTY_LIST_VIEW_NO_RESULTS'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<item2>", $this->_tpl_vars['createLink']) : smarty_modifier_replace($_tmp, "<item2>", $this->_tpl_vars['createLink'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "<item3>", $this->_tpl_vars['importLink']) : smarty_modifier_replace($_tmp, "<item3>", $this->_tpl_vars['importLink'])); ?>
 </p>
			<?php endif; ?>

        <?php elseif ($this->_tpl_vars['query'] == "-advanced_search"): ?>
            <p class="msg emptyResults">
                <?php echo $this->_tpl_vars['APP']['MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA']; ?>

            </p>
        <?php else: ?>
            <p class="msg">
                <?php ob_start(); ?>"<?php echo $this->_tpl_vars['query']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('quotedQuery', ob_get_contents());ob_end_clean(); ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['APP']['MSG_LIST_VIEW_NO_RESULTS'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<item1>", $this->_tpl_vars['quotedQuery']) : smarty_modifier_replace($_tmp, "<item1>", $this->_tpl_vars['quotedQuery'])); ?>

            </p>
			<?php if ($this->_tpl_vars['pageData']): ?>
            <p class="submsg">
                <a href="?module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&action=EditView&return_module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&return_action=DetailView">
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['APP']['MSG_LIST_VIEW_NO_RESULTS_SUBMSG'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<item1>", $this->_tpl_vars['quotedQuery']) : smarty_modifier_replace($_tmp, "<item1>", $this->_tpl_vars['quotedQuery'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "<item2>", $this->_tpl_vars['singularModule']) : smarty_modifier_replace($_tmp, "<item2>", $this->_tpl_vars['singularModule'])); ?>

                </a>
            </p>
			<?php endif; ?>
        <?php endif; ?>
    <?php else: ?>
        <p class="msg">
            <?php echo $this->_tpl_vars['APP']['LBL_NO_DATA']; ?>

        </p>
	<?php endif; ?>
	</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['multiSelectData']; ?>

<?php if ($this->_tpl_vars['hideTable'] == false): ?>
	<div class="list-view-rounded-corners">
		<table cellpadding='0' cellspacing='0' border='0' class='list view table-responsive'>
	<thead>
		<?php $this->assign('link_select_id', 'selectLinkTop'); ?>
		<?php $this->assign('link_action_id', 'actionLinkTop'); ?>
		<?php $this->assign('actionsLink', $this->_tpl_vars['actionsLinkTop']); ?>
		<?php $this->assign('selectLink', $this->_tpl_vars['selectLinkTop']); ?>
		<?php $this->assign('action_menu_location', 'top'); ?>

		<tr height='20'>
			<?php if ($this->_tpl_vars['prerow']): ?>
				<th class="td_alt">&nbsp;</th>
			<?php endif; ?>
			<?php if (! ( isset ( $this->_tpl_vars['options']['hide_edit_link'] ) && $this->_tpl_vars['options']['hide_edit_link'] === true ) && ! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
				<th class='td_alt quick_view_links'>&nbsp;</th>
			<?php endif; ?>
			<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

            <?php $this->assign('datahide', 'xs sm'); ?>
			<?php $_from = $this->_tpl_vars['displayColumns']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['params']):
?>
                <?php if ($this->_tpl_vars['colCounter'] == '3'): ?><?php $this->assign('datahide', 'xs sm'); ?><?php endif; ?>
                <?php if ($this->_tpl_vars['colCounter'] == '5'): ?><?php $this->assign('datahide', 'md'); ?><?php endif; ?>

				<?php if ($this->_tpl_vars['colCounter'] == '0'): ?>
					<?php $this->assign('hide', ""); ?>
				<?php elseif ($this->_tpl_vars['colHeader'] == 'NAME'): ?>
					<?php $this->assign('hide', ""); ?>
				<?php elseif ($this->_tpl_vars['colCounter'] > '10'): ?>
					<?php $this->assign('hide', "hidden-xs hidden-sm hidden-md"); ?>
				<?php elseif ($this->_tpl_vars['colCounter'] > '4'): ?>
					<?php $this->assign('hide', "hidden-xs hidden-sm"); ?>
				<?php elseif ($this->_tpl_vars['colCounter'] > '0'): ?>
					<?php $this->assign('hide', "hidden-xs"); ?>
				<?php else: ?>
					<?php $this->assign('hide', ""); ?>
				<?php endif; ?>
                <?php if ($this->_tpl_vars['colHeader'] == 'NAME' || $this->_tpl_vars['params']['bold']): ?>
					<th scope='col' data-toggle="true" class="<?php echo $this->_tpl_vars['hide']; ?>
">
				<?php else: ?>
					<th scope='col' data-breakpoints="<?php echo $this->_tpl_vars['datahide']; ?>
" class="<?php echo $this->_tpl_vars['hide']; ?>
">
				<?php endif; ?>
						<div>
						<?php if (((is_array($_tmp=@$this->_tpl_vars['params']['sortable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))): ?>
							<?php if ($this->_tpl_vars['params']['url_sort']): ?>
								<a href='<?php echo $this->_tpl_vars['pageData']['urls']['orderBy']; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
' class='listViewThLinkS1'>
							<?php else: ?>
								<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
									<a href='javascript:sListView.order_checks("<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['ordering']['sortOrder'])) ? $this->_run_mod_handler('default', true, $_tmp, 'ASCerror') : smarty_modifier_default($_tmp, 'ASCerror')); ?>
", "<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
" , "<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
<?php echo '2_'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pageData']['bean']['objectName'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '_ORDER_BY'; ?>
")' class='listViewThLinkS1'>
								<?php else: ?>
									<a href='javascript:sListView.order_checks("ASC", "<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
" , "<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
<?php echo '2_'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pageData']['bean']['objectName'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '_ORDER_BY'; ?>
")' class='listViewThLinkS1'>
								<?php endif; ?>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['params']['hide_header_label'] ) && $this->_tpl_vars['params']['hide_header_label'] == true): ?>
							<?php else: ?>
							<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

						&nbsp;&nbsp;  <?php endif; ?>
							<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
								<?php if ($this->_tpl_vars['pageData']['ordering']['sortOrder'] == 'ASC'): ?>
									<?php ob_start(); ?>arrow_down.<?php echo $this->_tpl_vars['arrowExt']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
									<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT_DESC'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt_sort', ob_get_contents());ob_end_clean(); ?>
									<span class="suitepicon suitepicon-action-sorting-ascending" title="<?php echo $this->_tpl_vars['alt_sort']; ?>
"></span>
								<?php else: ?>
									<?php ob_start(); ?>arrow_up.<?php echo $this->_tpl_vars['arrowExt']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
									<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT_ASC'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt_sort', ob_get_contents());ob_end_clean(); ?>
									<span class="suitepicon suitepicon-action-sorting-descending" title="<?php echo $this->_tpl_vars['alt_sort']; ?>
"></span>
								<?php endif; ?>
							<?php else: ?>
								<?php ob_start(); ?>arrow.<?php echo $this->_tpl_vars['arrowExt']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
								<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt_sort', ob_get_contents());ob_end_clean(); ?>
								<span class="suitepicon suitepicon-action-sorting-none" title="<?php echo $this->_tpl_vars['alt_sort']; ?>
"></span>
							<?php endif; ?>
							</a>
						<?php else: ?>
							<?php if (! isset ( $this->_tpl_vars['params']['noHeader'] ) || $this->_tpl_vars['params']['noHeader'] == false): ?>
                                <?php if (isset ( $this->_tpl_vars['params']['hide_header_label'] ) && $this->_tpl_vars['params']['hide_header_label'] == true): ?>
                                <?php else: ?>
                                    <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

									&nbsp;&nbsp;  <?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
						</div>
					</th>
				<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

			<?php endforeach; endif; unset($_from); ?>
						<th><?php echo $this->_tpl_vars['pageData']['additionalDetails'][$this->_tpl_vars['id']]; ?>
</th>
		</tr>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/ListView/ListViewPaginationTop.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</thead>
	<tbody>
		<?php echo smarty_function_counter(array('start' => $this->_tpl_vars['pageData']['offsets']['current'],'print' => false,'assign' => 'offset','name' => 'offset'), $this);?>

		<?php $_from = $this->_tpl_vars['data']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
		    <?php echo smarty_function_counter(array('name' => 'offset','print' => false), $this);?>

	        <?php $this->assign('scope_row', true); ?>

			<?php if ((1 & $this->_foreach['rowIteration']['iteration'])): ?>
				<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][0]); ?>
			<?php else: ?>
				<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][1]); ?>
			<?php endif; ?>
			<tr height='20' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1'>
				<?php if ($this->_tpl_vars['prerow']): ?>
				<td>
				 <?php if (! $this->_tpl_vars['is_admin'] && $this->_tpl_vars['is_admin_for_user'] && $this->_tpl_vars['rowData']['IS_ADMIN'] == 1): ?>
						<input type='checkbox' disabled="disabled" class='listview-checkbox' value='<?php echo $this->_tpl_vars['rowData']['ID']; ?>
'>
				 <?php else: ?>
	                    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_THIS_ROW_TITLE'), $this);?>
" onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='listview-checkbox' name='mass[]' value='<?php echo $this->_tpl_vars['rowData']['ID']; ?>
'>
				 <?php endif; ?>
				</td>
				<?php endif; ?>
				<?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
	            <?php ob_start(); ?><?php if ($this->_tpl_vars['params']['dynamic_module']): ?><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkModule', ob_get_contents());ob_end_clean(); ?>
	            <?php ob_start(); ?><?php if ($this->_tpl_vars['act']): ?><?php echo $this->_tpl_vars['act']; ?>
<?php else: ?>EditView<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('action', ob_get_contents());ob_end_clean(); ?>
				<?php if (isset ( $this->_tpl_vars['options']['hide_edit_link'] ) && $this->_tpl_vars['options']['hide_edit_link'] === true): ?>
				<?php else: ?>
					<td>
                        <?php if ($this->_tpl_vars['pageData']['rowAccess'][$this->_tpl_vars['id']]['edit'] && ! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
							<a class="edit-link" title='<?php echo $this->_tpl_vars['editLinkString']; ?>
' id="edit-<?php echo $this->_tpl_vars['rowData']['ID']; ?>
"
							   href="index.php?module=<?php echo $this->_tpl_vars['linkModule']; ?>
&offset=<?php echo $this->_tpl_vars['offset']; ?>
&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
&return_module=<?php echo $this->_tpl_vars['linkModule']; ?>
&action=<?php echo $this->_tpl_vars['action']; ?>
&record=<?php echo $this->_tpl_vars['rowData']['ID']; ?>
"
							>
                                <?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LNK_EDIT'), $this);?>
<?php $this->_smarty_vars['capture']['tmp1'] = ob_get_contents();  $this->assign('alt_edit', ob_get_contents());ob_end_clean(); ?>
								<span class="suitepicon suitepicon-action-edit"></span></a>
                        <?php endif; ?>
					</td>
				<?php endif; ?>

				<?php endif; ?>
				<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

				<?php $_from = $this->_tpl_vars['displayColumns']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
?>
					<?php if ($this->_tpl_vars['colCounter'] == '0'): ?>
						<?php $this->assign('hide', ""); ?>
					<?php elseif ($this->_tpl_vars['col'] == 'NAME'): ?>
						<?php $this->assign('hide', ""); ?>
					<?php elseif ($this->_tpl_vars['colCounter'] > '10'): ?>
						<?php $this->assign('hide', "hidden-xs hidden-sm hidden-md"); ?>
					<?php elseif ($this->_tpl_vars['colCounter'] > '4'): ?>
						<?php $this->assign('hide', "hidden-xs hidden-sm"); ?>
					<?php elseif ($this->_tpl_vars['colCounter'] > '0'): ?>
						<?php $this->assign('hide', "hidden-xs"); ?>
					<?php else: ?>
						<?php $this->assign('hide', ""); ?>
					<?php endif; ?>
                    <?php echo $this->_tpl_vars['displayColumns'][$this->_sections['type']['index']]; ?>

				    <?php echo '<td '; ?><?php if ($this->_tpl_vars['scope_row']): ?><?php echo ' scope=\'row\' '; ?><?php endif; ?><?php echo ' align=\''; ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?><?php echo '\' valign="top" type="'; ?><?php echo $this->_tpl_vars['displayColumns'][$this->_tpl_vars['col']]['type']; ?><?php echo '" field="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['col'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?><?php echo '" class="'; ?><?php echo $this->_tpl_vars['hide']; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['inline_edit'] && ( $this->_tpl_vars['displayColumns'][$this->_tpl_vars['col']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['displayColumns'][$this->_tpl_vars['col']]['inline_edit'] ) )): ?><?php echo 'inlineEdit'; ?><?php endif; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['params']['type'] == 'teamset' )): ?><?php echo 'nowrap'; ?><?php endif; ?><?php echo ''; ?><?php if (preg_match ( '/PHONE/' , $this->_tpl_vars['col'] )): ?><?php echo ' phone'; ?><?php endif; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['col'] == 'NAME' || $this->_tpl_vars['params']['bold']): ?><?php echo '<b>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['params']['dynamic_module']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir'])); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkModule', ob_get_contents());ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['act']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['act']; ?><?php echo ''; ?><?php else: ?><?php echo 'DetailView'; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('action', ob_get_contents());ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('record', ob_get_contents());ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo 'index.php?module='; ?><?php echo $this->_tpl_vars['linkModule']; ?><?php echo '&offset='; ?><?php echo $this->_tpl_vars['offset']; ?><?php echo '&stamp='; ?><?php echo $this->_tpl_vars['pageData']['stamp']; ?><?php echo '&return_module='; ?><?php echo $this->_tpl_vars['linkModule']; ?><?php echo '&action='; ?><?php echo $this->_tpl_vars['action']; ?><?php echo '&record='; ?><?php echo $this->_tpl_vars['record']; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('url', ob_get_contents());ob_end_clean(); ?><?php echo '<'; ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?><?php echo ' href="'; ?><?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['url']), $this);?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['params']['customCode']): ?><?php echo ''; ?><?php echo smarty_function_sugar_evalcolumn_old(array('var' => $this->_tpl_vars['params']['customCode'],'rowData' => $this->_tpl_vars['rowData']), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_function_sugar_field(array('parentFieldArray' => $this->_tpl_vars['rowData'],'vardef' => $this->_tpl_vars['params'],'displayType' => 'ListView','field' => $this->_tpl_vars['col']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (empty ( $this->_tpl_vars['rowData'][$this->_tpl_vars['col']] ) && empty ( $this->_tpl_vars['params']['customCode'] )): ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?><?php echo '</'; ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?><?php echo '>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['inline_edit'] && ( $this->_tpl_vars['displayColumns'][$this->_tpl_vars['col']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['displayColumns'][$this->_tpl_vars['col']]['inline_edit'] ) )): ?><?php echo '<div class="inlineEditIcon">'; ?><?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo '</td>'; ?>

	                <?php $this->assign('scope_row', false); ?>
					<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>


				<?php endforeach; endif; unset($_from); ?>
				<td align='right'><?php echo $this->_tpl_vars['pageData']['additionalDetails'][$this->_tpl_vars['id']]; ?>
</td>
		    	</tr>
		<?php endforeach; else: ?>
		<tr height='20' class='<?php echo $this->_tpl_vars['rowColor'][0]; ?>
S1'>
		    <td colspan="<?php echo $this->_tpl_vars['colCount']; ?>
">
		        <em><?php echo $this->_tpl_vars['APP']['LBL_NO_DATA']; ?>
</em>
		    </td>
		</tr>
		<?php endif; unset($_from); ?>
    <?php $this->assign('link_select_id', 'selectLinkBottom'); ?>
    <?php $this->assign('link_action_id', 'actionLinkBottom'); ?>
    <?php $this->assign('selectLink', $this->_tpl_vars['selectLinkBottom']); ?>
    <?php $this->assign('actionsLink', $this->_tpl_vars['actionsLinkBottom']); ?>
    <?php $this->assign('action_menu_location', 'bottom'); ?>
	</tbody>
	<tfoot>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/ListView/ListViewPaginationBottom.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</tfoot>
	</table></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['contextMenus']): ?>
<script type="text/javascript">
<?php echo $this->_tpl_vars['contextMenuScript']; ?>

<?php echo '
function lvg_nav(m,id,act,offset,t){
  if (t.href.search(/#/) < 0) {
  }
    else{
        if(act==\'pte\'){
            act=\'ProjectTemplatesEditView\';
        }
        else if(act==\'d\'){
            act=\'DetailView\';
        }else if( act ==\'ReportsWizard\'){
            act = \'ReportsWizard\';
        }else{
            act=\'EditView\';
        }
    '; ?>

        url = 'index.php?module='+m+'&offset=' + offset + '&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
&return_module='+m+'&action='+act+'&record='+id;
        t.href=url;
    <?php echo '
    }
}'; ?>

<?php echo '
    function lvg_dtails(id){'; ?>

        return SUGAR.util.getAdditionalDetails( '<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['bean']['moduleDir'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['params']['module']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['params']['module'])); ?>
',id, 'adspan_'+id);<?php echo '}'; ?>

</script>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<?php endif; ?>


<?php if ($this->_tpl_vars['form']['footerTpl']): ?>
    <?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['form']['headerTpl']), $this);?>

<?php endif; ?>