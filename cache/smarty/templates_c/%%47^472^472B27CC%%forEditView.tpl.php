<?php /* Smarty version 2.6.33, created on 2022-05-08 13:15:16
         compiled from include/SugarEmailAddress/templates/forEditView.tpl */ ?>
<?php 
global $emailInstances;
if (empty($emailInstances))
	$emailInstances = array();
if (!isset($emailInstances[$this->_tpl_vars['module']]))
	$emailInstances[$this->_tpl_vars['module']] = 0;
$this->_tpl_vars['index'] = $emailInstances[$this->_tpl_vars['module']];
$emailInstances['module']++;
 ?>
<script type="text/javascript" language="javascript">
var emailAddressWidgetLoaded = false;
</script>
	<script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
<script type="text/javascript">
	var module = '<?php echo $this->_tpl_vars['module']; ?>
';
</script>

<div class="col-xs-12">
	<div class="col-xs-12 email-address-add-line-container emailaddresses" id="<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo $this->_tpl_vars['index']; ?>
">
		<?php ob_start(); ?>id="<?php echo $this->_tpl_vars['module']; ?>
<?php echo $this->_tpl_vars['index']; ?>
_email_widget_add" onclick="SUGAR.EmailAddressWidget.instances.<?php echo $this->_tpl_vars['module']; ?>
<?php echo $this->_tpl_vars['index']; ?>
.addEmailAddress('<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo $this->_tpl_vars['index']; ?>
','', false);"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean(); ?>
		<button type="button" class="btn btn-danger email-address-add-button" title="<?php echo $this->_tpl_vars['app_strings']['LBL_ID_FF_ADD_EMAIL']; ?>
 " <?php echo $this->_tpl_vars['other_attributes']; ?>
>
			<span class="suitepicon suitepicon-action-plus"></span><span></span>
		</button>
	</div>
	<div class="col-xs-12 email-address-lines-container">
				<div class="col-xs-12 template email-address-line-container hidden">
			<div class="col-xs-12 col-sm-6  email-address-input-container <?php if ($this->_tpl_vars['module'] == 'Users'): ?> email-address-users-profile<?php endif; ?>">
				<div class="input-group email-address-input-group">
					<input type="email" id="email-address-input" class="form-control" placeholder="email@example.com" title="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_TITLE']; ?>
">
					<input type="hidden" id="record-id">
					<input type="hidden" id="verified-flag" class="verified-flag" value="true"/>
					<input type="hidden" id="verified-email-value" class="verified-email-value" value=""/>
					<input type=hidden id="<?php echo $this->_tpl_vars['module']; ?>
_email_widget_id" name="<?php echo $this->_tpl_vars['module']; ?>
_email_widget_id" value="">
					<input type=hidden id='emailAddressWidget' name='emailAddressWidget' value='1'>
					<span class="input-group-btn">
					<button type="button" id="email-address-remove-button" class="btn btn-danger email-address-remove-button" name="" title="<?php echo $this->_tpl_vars['app_strings']['LBL_ID_FF_REMOVE_EMAIL']; ?>
">
						<span class="suitepicon suitepicon-action-minus"></span>
					</button>
				</span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 email-address-options-container">


				<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center email-address-option">
					<label class="text-sm col-xs-12"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIMARY']; ?>
</label>
					<div><input type="radio" name="" id="email-address-primary-flag" class="email-address-primary-flag" value="" enabled="true" tabindex="0" checked="true" title="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIM_TITLE']; ?>
"></div>
				</div>

				<?php if ($this->_tpl_vars['useReplyTo'] == true): ?>
				<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center email-address-option">
					<label class="text-sm  col-xs-12"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_REPLY_TO']; ?>
</label>
					<div><input type="checkbox" name="" id="email-address-reply-to-flag" class="email-address-reply-to-flag" value="" enabled="true"></div>
				</div>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['useOptOut'] == true): ?>
				<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center email-address-option">
					<label class="text-sm col-xs-12"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT']; ?>
</label>
					<div><input type="checkbox" name="" title="<?php echo $this->_tpl_vars['app_strings']['LBL_ID_FF_OPT_OUT']; ?>
" id="email-address-opt-out-flag" class="email-address-opt-out-flag" value="" enabled="true"></div>
				</div>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['useInvalid'] == true): ?>
				<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center email-address-option">
					<label class="text-sm col-xs-12"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>
</label>
					<div><input type="checkbox" name="" title="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>
" id="email-address-invalid-flag" class="email-address-invalid-flag" value="" enabled="true"></div>
				</div>
				<?php endif; ?>

                <?php if ($this->_tpl_vars['useOptIn'] == true): ?>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center email-address-option">
						<label class="text-sm col-xs-12"><?php echo $this->_tpl_vars['app_strings']['LBL_OPT_IN']; ?>
</label>
						<div>
                                                    <input type="hidden" name="shouldSaveOptInFlag" value="1">
                                                    <input type="checkbox" name="" title="<?php echo $this->_tpl_vars['app_strings']['LBL_OPT_IN']; ?>
" 
                                                           id="email-address-opted-in-flag" class="email-address-opted-in-flag" value="" enabled="true">
                                                </div>
					</div>
                <?php endif; ?>
			</div>
		</div>

	</div>
</div>
<input type="hidden" name="useEmailWidget" value="true">
<script type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
var eaw = SUGAR.EmailAddressWidget.instances.<?php echo $this->_tpl_vars['module']; ?>
<?php echo $this->_tpl_vars['index']; ?>
 = new SUGAR.EmailAddressWidget("<?php echo $this->_tpl_vars['module']; ?>
");
eaw.emailView = '<?php echo $this->_tpl_vars['emailView']; ?>
';
eaw.emailIsRequired = "<?php echo $this->_tpl_vars['required']; ?>
";
eaw.tabIndex = '<?php echo $this->_tpl_vars['tabindex']; ?>
';
var addDefaultAddress = '<?php echo $this->_tpl_vars['addDefaultAddress']; ?>
';
var prefillEmailAddress = '<?php echo $this->_tpl_vars['prefillEmailAddresses']; ?>
';
var prefillData = <?php echo $this->_tpl_vars['prefillData']; ?>
;
if(prefillEmailAddress == 'true') {
	eaw.prefillEmailAddresses('<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo $this->_tpl_vars['index']; ?>
', prefillData);
} else if(addDefaultAddress == 'true') {
	eaw.addEmailAddress('<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo $this->_tpl_vars['index']; ?>
', '',true);
}
if('<?php echo $this->_tpl_vars['module']; ?>
_email_widget_id') {
   document.getElementById('<?php echo $this->_tpl_vars['module']; ?>
_email_widget_id').value = eaw.count;
}
SUGAR_callsInProgress--;
</script>