<?php /* Smarty version 2.6.33, created on 2022-05-08 13:15:17
         compiled from modules/Emails/templates/emailSettingsFolders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimage', 'modules/Emails/templates/emailSettingsFolders.tpl', 54, false),)), $this); ?>

<table cellpadding="4" class="view">
    <tr>
        <th colspan="4">
            <h4><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_TITLE']; ?>
</h4>
        </th>
    </tr>
    <tr>
        <td valign="top" scope="row">
            <div class="div-title">
                <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_USER_FOLDERS']; ?>
:
                <div id="rollover">
                    <a href="#"
                       class="rollover"><?php echo smarty_function_sugar_getimage(array('alt' => $this->_tpl_vars['mod_strings']['LBL_HELP'],'name' => 'helpInline','ext' => ".gif",'other_attributes' => 'border="0" '), $this);?>

                        <span><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_MULTISELECT']; ?>
</span></a>
                </div>
            </div>
            <div>

                <select multiple size="8" name="userFolders[]" id="userFolders"
                        onchange="SUGAR.email2.folders.updateSubscriptions();"></select>

            </div>
        </td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right">
            <input type="button" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_DONE_BUTTON_LABEL']; ?>
   "
                   onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
        </td>
    </tr>
</table>