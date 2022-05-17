<?php /* Smarty version 2.6.33, created on 2022-05-08 12:43:08
         compiled from themes%5CSuiteP%5Cinclude/DetailView/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'themes\\SuiteP\\include/DetailView/header.tpl', 89, false),)), $this); ?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}
<?php if ($this->_tpl_vars['preForm']): ?>
<?php echo $this->_tpl_vars['preForm']; ?>

<?php endif; ?>
<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>

<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
    <tr>
        <td class="buttons" align="left" NOWRAP width="80%">
            <div class="actionsContainer">
                <form action="index.php" method="post" name="DetailView" id="formDetailView">
                    <input type="hidden" name="module" value="{$module}">
                    <input type="hidden" name="record" value="{$fields.id.value}">
                    <input type="hidden" name="return_action">
                    <input type="hidden" name="return_module">
                    <input type="hidden" name="return_id">
                    <input type="hidden" name="module_tab">
                    <input type="hidden" name="isDuplicate" value="false">
                    <input type="hidden" name="offset" value="{$offset}">
                    <input type="hidden" name="action" value="EditView">
                    <input type="hidden" name="sugar_body_only">
                    <?php if (isset ( $this->_tpl_vars['form']['hidden'] )): ?>
                    <?php $_from = $this->_tpl_vars['form']['hidden']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <?php echo $this->_tpl_vars['field']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                    {if !$config.enable_action_menu}
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/include/DetailView/actions_buttons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    {/if}
                </form>

            </div>

        </td>


        <td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
            <?php if ($this->_tpl_vars['panelCount'] == 0): ?>
                        <?php if ($this->_tpl_vars['SHOW_VCR_CONTROL'] && $this->_tpl_vars['config']['enable_action_menu'] == false): ?>
            {$PAGINATION}
            <?php endif; ?>
            <?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

            <?php endif; ?>
        </td>
                <?php if (! empty ( $this->_tpl_vars['form'] ) && isset ( $this->_tpl_vars['form']['links'] )): ?>
        <td align="right" width="10%">&nbsp;</td>
        <td align="right" width="100%" NOWRAP class="buttons">
            <div class="actionsContainer">
                <?php $_from = $this->_tpl_vars['form']['links']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
                <?php echo $this->_tpl_vars['link']; ?>
&nbsp;
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </td>
        <?php endif; ?>
    </tr>
</table>