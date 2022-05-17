<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:33
         compiled from modules/Calendar/tpls/repeat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/Calendar/tpls/repeat.tpl', 56, false),array('modifier', 'default', 'modules/Calendar/tpls/repeat.tpl', 88, false),)), $this); ?>

<div id="edit_all_recurrences_block" style="display: none;">
	<button type="button" id="btn-edit-all-recurrences" onclick="CAL.edit_all_recurrences();"> <?php echo $this->_tpl_vars['MOD']['LBL_EDIT_ALL_RECURRENCES']; ?>
 </button>
	<button type="button" id="btn-remove-all-recurrences" onclick="CAL.remove_all_recurrences();"> <?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_ALL_RECURRENCES']; ?>
 </button>
</div>

<div id="cal-repeat-block" style="display: none;">
<form name="CalendarRepeatForm" id="CalendarRepeatForm" onsubmit="return false;">

<input type="hidden" name="repeat_parent_id">
<table class="edit view" width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_TYPE']; ?>
:</td>
		<td width="37.5%" valign="top">
			<select name="repeat_type" onchange="toggle_repeat_type();"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['APPLIST']['repeat_type_dom']), $this);?>
</select>
		</td>
	</tr>
	
	<tr id="repeat_interval_row" style="display: none;">
		<td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_INTERVAL']; ?>
:</td>
		<td width="37.5%" valign="top">
			<select name="repeat_interval"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['repeat_intervals'],'selected' => '1'), $this);?>
</select> <span id="repeat-interval-text"></span>
		</td>
	</tr>
	
	<tr id="repeat_end_row" style="display: none;">
		<td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END']; ?>
:</td>
		<td width="37.5%" valign="top">
			<div>
				<input type="radio" name="repeat_end_type" value="number" id="repeat_count_radio" checked onclick="toggle_repeat_end();" style="position: relative; top: -5px;"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END_AFTER']; ?>
 
				<input type="input" size="3" name="repeat_count" value="10"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_OCCURRENCES']; ?>

			</div>
			<div>					
				<input type="radio" name="repeat_end_type" id="repeat_until_radio" value="date" onclick="toggle_repeat_end();" style="position: relative; top: -5px;"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END_BY']; ?>

				<input type="input" size="11" maxlength="10" id="repeat_until_input" name="repeat_until" value="" disabled>
				<span class="suitepicon suitepicon-module-calendar" id="repeat_until_trigger"></span>
							
				<script type="text/javascript">
						Calendar.setup (<?php echo '{'; ?>

							inputField : "repeat_until_input",
							ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
							daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
							button : "repeat_until_trigger",
							singleClick : true,
							dateStr : "",
							step : 1,
							startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
							weekNumbers:false
						<?php echo '}'; ?>
);
				</script>														
			</div>
		</td>
	</tr>
	
	<tr id="repeat_dow_row" style="display: none;">
		<td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_DOW']; ?>
:</td>
		<td width="37.5%" valign="top">
			<?php $_from = $this->_tpl_vars['dow']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['dow'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dow']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['d']):
        $this->_foreach['dow']['iteration']++;
?>
				<?php echo $this->_tpl_vars['d']['label']; ?>
 <input type="checkbox" id="repeat_dow_<?php echo $this->_tpl_vars['d']['index']; ?>
" name="repeat_dow[]" style="margin-right: 10px;"> 	
			<?php endforeach; endif; unset($_from); ?>
		</td>
	</tr>
	
</table>
</form>
</div>

<script type="text/javascript">	
<?php echo '
	function toggle_repeat_type(){
		
		if(typeof validate != "undefined" && typeof validate[\'CalendarRepeatForm\'] != "undefined")
			validate[\'CalendarRepeatForm\'] = undefined;
			
		if(document.forms[\'CalendarRepeatForm\'].repeat_type.value == ""){
			document.getElementById("repeat_interval_row").style.display = "none";
			document.getElementById("repeat_end_row").style.display = "none";
		}else{						
			document.getElementById("repeat_interval_row").style.display = "";
			document.getElementById("repeat_end_row").style.display = "";
			toggle_repeat_end();
		}
		
		var repeat_dow_row = document.getElementById("repeat_dow_row");
		if(document.forms[\'CalendarRepeatForm\'].repeat_type.value == "Weekly"){
			repeat_dow_row.style.display = "";
		}else{
			repeat_dow_row.style.display = "none";
		}
		
		var intervalTextElm = document.getElementById(\'repeat-interval-text\');		
		if (intervalTextElm && typeof SUGAR.language.languages.app_list_strings[\'repeat_intervals\'] != \'undefined\') {
			intervalTextElm.innerHTML = SUGAR.language.languages.app_list_strings[\'repeat_intervals\'][document.forms[\'CalendarRepeatForm\'].repeat_type.value];
		}
	}

	function toggle_repeat_end(){	
		if(document.getElementById("repeat_count_radio").checked){
			document.forms[\'CalendarRepeatForm\'].repeat_until.setAttribute("disabled","disabled");
			document.forms[\'CalendarRepeatForm\'].repeat_count.removeAttribute("disabled");
			document.getElementById("repeat_until_trigger").style.display = "none";	
			
			if(typeof validate != "undefined" && typeof validate[\'CalendarRepeatForm\'] != "undefined"){
				removeFromValidate(\'CalendarRepeatForm\', \'repeat_until\');
			}
			addToValidateMoreThan(\'CalendarRepeatForm\', \'repeat_count\', \'int\', true, "'; ?>
<?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_COUNT']; ?>
<?php echo '", 1);
		}else{
			document.forms[\'CalendarRepeatForm\'].repeat_count.setAttribute("disabled","disabled");			
			document.forms[\'CalendarRepeatForm\'].repeat_until.removeAttribute("disabled");
			document.getElementById("repeat_until_trigger").style.display = "";
			
			if(typeof validate != "undefined" && typeof validate[\'CalendarRepeatForm\'] != "undefined"){
				removeFromValidate(\'CalendarRepeatForm\', \'repeat_count\');
			}
			addToValidate(\'CalendarRepeatForm\', \'repeat_until\', \'date\', true, "'; ?>
<?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_UNTIL']; ?>
<?php echo '");
		}
		
		// prevent an issue when a calendar date picker is hidden under a dialog
		var editContainer = document.getElementById(\'cal-edit_c\');
		if (editContainer) {
			var pickerContainer = document.getElementById(\'container_repeat_until_trigger_c\');
			if (pickerContainer) {
				pickerContainer.style.zIndex = editContainer.style.zIndex + 1;
			}
		}		
	}
'; ?>

</script>
