<?php /* Smarty version 2.6.33, created on 2022-05-08 12:38:18
         compiled from modules/ModuleBuilder/tpls/MBModule/vardef.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strstr', 'modules/ModuleBuilder/tpls/MBModule/vardef.tpl', 46, false),)), $this); ?>
<?php echo '<?php'; ?>

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

$dictionary['<?php echo $this->_tpl_vars['class']['name']; ?>
'] = array(
    'table' => '<?php echo $this->_tpl_vars['class']['table_name']; ?>
',
    'audited' => <?php echo $this->_tpl_vars['class']['audited']; ?>
,
    'inline_edit' => true,
<?php if (! ( ((is_array($_tmp=$this->_tpl_vars['class']['templates'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'file') : strstr($_tmp, 'file')) )): ?>
    'duplicate_merge' => true,
<?php endif; ?>
    'fields' => <?php echo $this->_tpl_vars['class']['fields_string']; ?>
,
    'relationships' => <?php echo $this->_tpl_vars['class']['relationships']; ?>
,
    'optimistic_locking' => true,
<?php if (! empty ( $this->_tpl_vars['class']['table_name'] ) && ! empty ( $this->_tpl_vars['class']['templates'] )): ?>
    'unified_search' => true,
<?php endif; ?>
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('<?php echo $this->_tpl_vars['class']['name']; ?>
', '<?php echo $this->_tpl_vars['class']['name']; ?>
', array(<?php echo $this->_tpl_vars['class']['templates']; ?>
));