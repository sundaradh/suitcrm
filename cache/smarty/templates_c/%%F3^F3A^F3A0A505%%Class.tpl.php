<?php /* Smarty version 2.6.33, created on 2022-05-08 12:38:18
         compiled from modules/ModuleBuilder/tpls/MBModule/Class.tpl */ ?>
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

<?php $_from = $this->_tpl_vars['class']['requires']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['require']):
?>
require_once('<?php echo $this->_tpl_vars['require']; ?>
');
<?php endforeach; endif; unset($_from); ?>

class <?php echo $this->_tpl_vars['class']['name']; ?>
 extends <?php echo $this->_tpl_vars['class']['extends']; ?>

{
    public $new_schema = true;
    public $module_dir = '<?php echo $this->_tpl_vars['class']['name']; ?>
';
    public $object_name = '<?php echo $this->_tpl_vars['class']['name']; ?>
';
    public $table_name = '<?php echo $this->_tpl_vars['class']['table_name']; ?>
';
    public $importable = <?php if ($this->_tpl_vars['class']['importable']): ?>true<?php else: ?>false<?php endif; ?>;

<?php $_from = $this->_tpl_vars['class']['fields']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['def']):
?>
    public $<?php echo $this->_tpl_vars['field']; ?>
;
<?php endforeach; endif; unset($_from); ?>
	
<?php if ($this->_tpl_vars['class']['acl']): ?>
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
<?php endif; ?>
	
}