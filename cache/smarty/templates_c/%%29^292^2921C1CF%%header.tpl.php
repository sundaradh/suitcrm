<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:32
         compiled from themes%5CSuiteP%5Cmodules/Calendar/tpls/header.tpl */ ?>

<?php if ($this->_tpl_vars['controls']): ?>

<div class="clear"></div>

<div style='float:left; width: 70%;'>
<?php $_from = $this->_tpl_vars['tabs']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['tabs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['tab']):
        $this->_foreach['tabs']['iteration']++;
?>
	<input type="button" class="button" <?php if ($this->_tpl_vars['view'] == $this->_tpl_vars['k']): ?> selected <?php endif; ?> id="<?php echo $this->_tpl_vars['tabs_params'][$this->_tpl_vars['k']]['id']; ?>
" title="<?php echo $this->_tpl_vars['tabs_params'][$this->_tpl_vars['k']]['title']; ?>
" value="<?php echo $this->_tpl_vars['tabs_params'][$this->_tpl_vars['k']]['title']; ?>
" onclick="<?php echo $this->_tpl_vars['tabs_params'][$this->_tpl_vars['k']]['link']; ?>
">
<?php endforeach; endif; unset($_from); ?>
</div>

<div style="float:left; text-align: right; width: 30%; font-size: 12px;">
	<?php if ($this->_tpl_vars['view'] == 'sharedWeek' || $this->_tpl_vars['view'] == 'sharedMonth'): ?>
		<input id="userListButtonId" type="button" class="btn btn-info" value="<?php echo $this->_tpl_vars['MOD']['LBL_EDIT_USERLIST']; ?>
" data-toggle="modal" data-target=".modal-calendar-user-list"">
	<?php endif; ?>
	<?php if ($this->_tpl_vars['view'] != 'year' && ! $this->_tpl_vars['print']): ?>
	<button id="goto_date_trigger" class="btn btn-danger">
		<span class="dateTime module-calendar">
		<span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" ></span>
					<input type="hidden" id="goto_date" name="goto_date" value="<?php echo $this->_tpl_vars['current_date']; ?>
">
					<script type="text/javascript">
					Calendar.setup (<?php echo '{'; ?>

                      inputField : "goto_date",
                      ifFormat : "%m/%d/%Y",
                      daFormat : "%m/%d/%Y",
                      button : "goto_date_trigger",
                      singleClick : true,
                      dateStr : "<?php echo $this->_tpl_vars['current_date']; ?>
",
                      step : 1,
                      onUpdate: goto_date_call,
                      startWeekday: <?php echo $this->_tpl_vars['start_weekday']; ?>
,
                      weekNumbers:false
                        <?php echo '}'; ?>
);
                    <?php echo '
                    YAHOO.util.Event.onDOMReady(function(){
                      YAHOO.util.Event.addListener("goto_date","change",goto_date_call);
                    });
                    function goto_date_call(){
                      CAL.goto_date_call();
                    }
                    '; ?>

					</script>
	</span>
	</button>
	<?php endif; ?>
	<input type="button" id="" class="btn btn-info" data-toggle="modal" data-target=".modal-calendar-settings" value="<?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
">
</div>

<div style='clear: both;'></div>

<?php endif; ?>


<div class="row monthHeader">
    <div class="col-xs-1"><?php echo $this->_tpl_vars['previous']; ?>
</div>
    <div class="col-xs-10 text-center"><h3><?php echo $this->_tpl_vars['date_info']; ?>
</h3></div>
    <div class="col-xs-1 text-right"><?php echo $this->_tpl_vars['next']; ?>
</div>
    <br>
</div>