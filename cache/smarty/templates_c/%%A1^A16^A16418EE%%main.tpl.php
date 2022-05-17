<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:32
         compiled from modules/Calendar/tpls/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'modules/Calendar/tpls/main.tpl', 202, false),array('function', 'sugar_getjspath', 'modules/Calendar/tpls/main.tpl', 308, false),array('function', 'sugar_getscript', 'modules/Calendar/tpls/main.tpl', 317, false),)), $this); ?>

<script type="text/javascript">

	global_langPrefix = "<?php echo $this->_tpl_vars['langprefix']; ?>
";
	global_edit = true;
	global_view = "<?php echo $this->_tpl_vars['view']; ?>
";
	global_style = "<?php echo $this->_tpl_vars['style']; ?>
";
	global_t_step = <?php echo $this->_tpl_vars['t_step']; ?>
;
	global_current_user_id = "<?php echo $this->_tpl_vars['current_user_id']; ?>
";
	global_current_user_name = "<?php echo $this->_tpl_vars['current_user_name']; ?>
";
	global_time_format = "<?php echo $this->_tpl_vars['time_format']; ?>
";
	global_enable_repeat = "<?php echo $this->_tpl_vars['enable_repeat']; ?>
";
	global_items_draggable = "<?php echo $this->_tpl_vars['items_draggable']; ?>
";
	global_items_resizable = "<?php echo $this->_tpl_vars['items_resizable']; ?>
";
	global_cells_per_day = <?php echo $this->_tpl_vars['cells_per_day']; ?>
;
	global_dashlet = "<?php echo $this->_tpl_vars['dashlet']; ?>
";
	global_grid_start_ts = <?php echo $this->_tpl_vars['grid_start_ts']; ?>
;
	global_basic_min_height = <?php echo $this->_tpl_vars['basic_min_height']; ?>
;
	global_timeslots = 30;
	global_start_week_day = "<?php echo $this->_tpl_vars['start_weekday']; ?>
";
    global_datetime_format = "<?php echo $this->_tpl_vars['datetime_user_format']; ?>
";
	global_year = "<?php echo $this->_tpl_vars['year']; ?>
";
	global_month = "<?php echo $this->_tpl_vars['month']; ?>
";
	global_day = "<?php echo $this->_tpl_vars['day']; ?>
";
	global_start_time = "<?php echo $this->_tpl_vars['day_start_time']; ?>
";
	global_end_time = "<?php echo $this->_tpl_vars['day_end_time']; ?>
";
	global_colorList = <?php echo $this->_tpl_vars['activityColors']; ?>
;
	calendar_items = <?php echo $this->_tpl_vars['a_str']; ?>
;

	<?php echo '
	views = {
		sharedMonth: {
			type: \'month\',
			buttonText: \'Shared Month\'
		},
		sharedWeek: {
			type: \'agendaWeek\',
			buttonText: \'Shared Week\'
		}
	};
	'; ?>


	<?php echo '
	YAHOO.util.Event.onDOMReady(function(){
		dom_loaded = true;
	});

	function check_cal_loaded(){
		return (typeof cal_loaded != \'undefined\' && cal_loaded == true && typeof dom_loaded != \'undefined\' && dom_loaded == true);
	}
	'; ?>




	SUGAR.util.doWhen(check_cal_loaded, function()<?php echo '{'; ?>


		CAL.view = "<?php echo $this->_tpl_vars['view']; ?>
";
		CAL.style = "<?php echo $this->_tpl_vars['style']; ?>
";
		CAL.t_step = <?php echo $this->_tpl_vars['t_step']; ?>
;
		CAL.current_user_id = global_current_user_id;
		CAL.current_user_name = global_current_user_name;
		CAL.time_format = "<?php echo $this->_tpl_vars['time_format']; ?>
";
		CAL.enable_repeat = "<?php echo $this->_tpl_vars['enable_repeat']; ?>
";
		CAL.items_draggable = "<?php echo $this->_tpl_vars['items_draggable']; ?>
";
		CAL.items_resizable = "<?php echo $this->_tpl_vars['items_resizable']; ?>
";
		CAL.cells_per_day = <?php echo $this->_tpl_vars['cells_per_day']; ?>
;
		CAL.current_params = <?php echo '{}'; ?>
;
		CAL.dashlet = "<?php echo $this->_tpl_vars['dashlet']; ?>
";
		CAL.grid_start_ts = <?php echo $this->_tpl_vars['grid_start_ts']; ?>
;
		CAL.scroll_slot = <?php echo $this->_tpl_vars['scroll_slot']; ?>
;

		CAL.basic.min_height = <?php echo $this->_tpl_vars['basic_min_height']; ?>
;


		CAL.lbl_create_new = "<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_NEW_RECORD']; ?>
";
		CAL.lbl_edit = "<?php echo $this->_tpl_vars['MOD']['LBL_EDIT_RECORD']; ?>
";
		CAL.lbl_saving = "<?php echo $this->_tpl_vars['MOD']['LBL_SAVING']; ?>
";
		CAL.lbl_loading = "<?php echo $this->_tpl_vars['MOD']['LBL_LOADING']; ?>
";
		CAL.lbl_sending = "<?php echo $this->_tpl_vars['MOD']['LBL_SENDING_INVITES']; ?>
";
		CAL.lbl_confirm_remove = "<?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_REMOVE']; ?>
";
		CAL.lbl_confirm_remove_all_recurring = "<?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_REMOVE_ALL_RECURRING']; ?>
";

		CAL.lbl_error_saving = "<?php echo $this->_tpl_vars['MOD']['LBL_ERROR_SAVING']; ?>
";
		CAL.lbl_error_loading = "<?php echo $this->_tpl_vars['MOD']['LBL_ERROR_LOADING']; ?>
";
		CAL.lbl_repeat_limit_error = "<?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_LIMIT_ERROR']; ?>
";

		CAL.year = <?php echo $this->_tpl_vars['year']; ?>
;
		CAL.month = <?php echo $this->_tpl_vars['month']; ?>
;
		CAL.day = <?php echo $this->_tpl_vars['day']; ?>
;

		CAL.print = <?php echo $this->_tpl_vars['isPrint']; ?>
;



		CAL.field_list = new Array();
		CAL.field_disabled_list = new Array();

		CAL.act_types = [];
		CAL.act_types['Meetings'] = 'meeting';
		CAL.act_types['Calls'] = 'call';
		CAL.act_types['Tasks'] = 'task';

		<?php echo '

		CAL.init_edit_dialog({
			width: "'; ?>
<?php echo $this->_tpl_vars['editview_width']; ?>
<?php echo '",
			height: "'; ?>
<?php echo $this->_tpl_vars['editview_height']; ?>
<?php echo '"
		});

		YAHOO.util.Event.on("btn-save","click",function(){
			if(!CAL.check_forms())
				return false;
			CAL.dialog_save();
		});
		YAHOO.util.Event.on("btn-send-invites","click",function(){
			if(!CAL.check_forms())
				return false;
			CAL.get("send_invites").value = "1";
			CAL.dialog_save();
		});
		YAHOO.util.Event.on("btn-delete","click",function(){
			if(CAL.get("record").value != "")
				if(confirm(CAL.lbl_confirm_remove))
					CAL.dialog_remove();
		});
		YAHOO.util.Event.on("btn-cancel","click",function(){
			document.schedulerwidget.reset();
            if(document.getElementById(\'empty-search-message\')) {
                document.getElementById(\'empty-search-message\').style.display = \'none\';
            }
//            CAL.editDialog.cancel();
		});
		YAHOO.util.Event.on("btn-full-form","click",function(){
			CAL.full_form();
		});
		CAL.select_tab("cal-tab-1");

		YAHOO.util.Event.on(CAL.get("btn-cancel-settings"), \'click\', function(){
			CAL.settingsDialog.cancel();
		});

		YAHOO.util.Event.on(CAL.get("btn-save-settings"), \'click\', function(){
			CAL.get("form_settings").submit();
		});

		'; ?>


		cal_loaded = null;
	});
</script>

<div class="modal fade modal-cal-edit" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="title-cal-edit"></h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
						<?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['form']), $this);?>

						<div id="scheduler"></div>
					<?php if ($this->_tpl_vars['enable_repeat']): ?>
						<?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['repeat']), $this);?>

					<?php endif; ?>
				</div>
			</div>
			<div class="modal-footer">
				<button id="btn-save" class="button" type="button"><?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON']; ?>
</button>
				<button id="btn-cancel" class="button" type="button" data-dismiss="modal"><?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON']; ?>
</button>
				<button id="btn-delete" class="button" type="button"><?php echo $this->_tpl_vars['MOD']['LBL_DELETE_BUTTON']; ?>
</button>
				<button id="btn-send-invites" class="button" type="button"><?php echo $this->_tpl_vars['MOD']['LBL_SEND_INVITES']; ?>
</button>
				<button id="btn-full-form" class="button" type="button"><?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<div class="modal fade modal-cal-tasks-edit" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="title-cal-tasks-edit"><?php echo $this->_tpl_vars['MOD']['LNK_TASK']; ?>
</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

				</div>
			</div>
			<div class="modal-footer">
				<button id="btn-view-task" class="button" type="button"><?php echo $this->_tpl_vars['MOD']['LNK_TASK_VIEW']; ?>
</button>
				<button id="btn-tasks-full-form" class="button" type="button"><?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<div class="modal fade modal-cal-events-edit" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="title-cal-events-edit"><?php echo $this->_tpl_vars['MOD']['LNK_EVENT']; ?>
</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

				</div>
			</div>
			<div class="modal-footer">
				<button id="btn-view-events" class="button" type="button"><?php echo $this->_tpl_vars['MOD']['LNK_EVENT_VIEW']; ?>
</button>
				<button id="btn-events-full-form" class="button" type="button"><?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<?php if ($this->_tpl_vars['settings']): ?>
<?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['settings']), $this);?>

<?php endif; ?>
	
<script type="text/javascript">	
<?php echo $this->_tpl_vars['GRjavascript']; ?>

</script>
	
<script type="text/javascript">	
<?php echo '
YAHOO.util.Event.onDOMReady(function(){	
	var schedulerLoader = new YAHOO.util.YUILoader({
		require : ["jsclass_scheduler"],
        skin: { base: \'blank\', defaultSkin: \'\' },
		onSuccess: function(){
			var root_div = document.getElementById(\'scheduler\');
			var sugarContainer_instance = new SugarContainer(document.getElementById(\'scheduler\'));
			sugarContainer_instance.start(SugarWidgetScheduler);
		}
	});
	schedulerLoader.addModule({
		name :"jsclass_scheduler",
		type : "js",
		fullpath: "modules/Meetings/jsclass_scheduler.js",
		varName: "global_rpcClient",
		requires: []
	});
	schedulerLoader.insert();
});	
'; ?>
	
</script>
	
<script type="text/javascript" src="include/javascript/jsclass_base.js"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js"></script>	
	
<style type="text/css">
<?php echo '
	.schedulerDiv h3{
		display: none;
	}
	.schedulerDiv{
		width: auto !important;
	}
'; ?>

</style>	



<link type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => "modules/Calendar/fullcalendar/fullcalendar.min.css"), $this);?>
" rel="stylesheet" />
<link type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => "modules/Calendar/fullcalendar/fullcalendar.print.min.css"), $this);?>
" media='print' rel="stylesheet" />

<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/qtip/jquery.qtip.min.js"), $this);?>
'></script>
<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "modules/Calendar/fullcalendar/lib/moment.min.js"), $this);?>
'></script>
<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "modules/Calendar/fullcalendar/fullcalendar.min.js"), $this);?>
'></script>
<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "modules/Calendar/fullcalendar/locale-all.js"), $this);?>
'></script>

<div id='calendarContainer'></div>
<?php echo smarty_function_sugar_getscript(array('file' => "modules/Calendar/Cal.js"), $this);?>
