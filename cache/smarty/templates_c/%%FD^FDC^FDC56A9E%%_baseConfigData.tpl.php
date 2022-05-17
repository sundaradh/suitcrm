<?php /* Smarty version 2.6.33, created on 2022-05-08 13:15:16
         compiled from modules/Emails/templates/_baseConfigData.tpl */ ?>

SUGAR.email2.composeLayout.charsets = <?php echo $this->_tpl_vars['emailCharsets']; ?>
;
SUGAR.default_inbound_accnt_id = '<?php echo $this->_tpl_vars['defaultOutID']; ?>
';
if(!SUGAR.email2.userPrefs) {
    var userPrefs = SUGAR.email2.userPrefs = <?php echo $this->_tpl_vars['userPrefs']; ?>
;
}
SUGAR.email2.signatures = <?php echo $this->_tpl_vars['defaultSignature']; ?>
;
<?php echo $this->_tpl_vars['tinyMCE']; ?>

linkBeans = <?php echo $this->_tpl_vars['linkBeans']; ?>
;
<?php echo $this->_tpl_vars['lang']; ?>
