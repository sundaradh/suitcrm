<?php /* Smarty version 2.6.33, created on 2022-05-08 12:43:09
         compiled from themes/SuiteP/include/DetailView/tab_panel_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 52, false),array('function', 'sugar_evalcolumn', 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 146, false),array('function', 'sugar_field', 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 152, false),)), $this); ?>
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
{*<!-- tab_panel_content.tpl START -->*}

{*<!-- tab panel main div -->*}

<?php $_from = $this->_tpl_vars['panel']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>

    {*row*}

    {*<!-- ROW -->*}
<div class="row detail-view-row">

    <?php echo smarty_function_counter(array('name' => 'columnCount','start' => 0,'print' => false,'assign' => 'columnCount'), $this);?>


    <?php $_from = $this->_tpl_vars['rowData']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>

        {*column*}

        {*<!-- COLUMN -->*}

        <?php if ($this->_foreach['colIteration']['total'] > 1 && $this->_tpl_vars['colData']['colspan'] != 3): ?>
            {*<!-- DIV column - colspan != 3 -->*}
            <div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
">
        <?php else: ?>
            {*<!-- DIV column - colspan = 3 -->*}
            <div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
">
        <?php endif; ?>


        <?php echo smarty_function_counter(array('name' => 'fieldCount','start' => 0,'print' => false,'assign' => 'fieldCount'), $this);?>


        <?php $_from = $this->_tpl_vars['colData']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['fieldIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fieldIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['subField']):
        $this->_foreach['fieldIteration']['iteration']++;
?>

            <?php if (! ( ! isset ( $this->_tpl_vars['subField']['name'] ) || ! $this->_tpl_vars['subField']['name'] )): ?>
                {*<!-- [hide!!] -->*}

                <?php if ($this->_tpl_vars['fieldCount'] < $this->_foreach['colIteration']['total'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>

                    <?php if ($this->_foreach['colIteration']['total'] > 1 && $this->_tpl_vars['colData']['colspan'] != 3): ?>
                        {*<!-- DIV inside - colspan != 3 -->*}

                    <?php if (($this->_foreach['colIteration']['iteration']-1) == 0): ?>
                        <div class="col-xs-12 col-sm-4 label col-1-label">
                    <?php else: ?>
                        <div class="col-xs-12 col-sm-4 label col-2-label">
                    <?php endif; ?>
                    <?php else: ?>
                        {*<!-- DIV inside - colspan = 3 -->*}
                        <div class="col-xs-12 col-sm-2 label col-1-label">
                    <?php endif; ?>

                    {*label*}

                    {*<!-- LABEL -->*}

                    <?php if (isset ( $this->_tpl_vars['colData']['field']['customLabel'] )): ?>
                        <?php echo $this->_tpl_vars['colData']['field']['customLabel']; ?>

                    <?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] ) && strpos ( $this->_tpl_vars['colData']['field']['label'] , '$' )): ?>
                        {capture name="label" assign="label"}<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
{/capture}
                        {$label|strip_semicolon}:
                    <?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
                        {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                        {$label|strip_semicolon}:
                    <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
                        {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                        {$label|strip_semicolon}:
                    <?php else: ?>
                        &nbsp;
                    <?php endif; ?>

                    <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] ) || isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] ) && isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                        <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] )): ?>
                            {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['colData']['field']['popupHelp']; ?>
" module="<?php echo $this->_tpl_vars['module']; ?>
"}{/capture}
                        <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                            {capture name="popupText" assign="popupText"}{sugar_translate label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                        <?php endif; ?>
                        {sugar_help text=$popupText WIDTH=400}
                    <?php endif; ?>

                    </div>
                    {*<!-- /DIV inside  -->*}

                    <?php if ($this->_foreach['colIteration']['total'] > 1 && $this->_tpl_vars['colData']['colspan'] != 3): ?>
                        {*<!-- phone (version 1) -->*}
                        <div class="col-xs-12 col-sm-8 detail-view-field<?php if ($this->_tpl_vars['inline_edit'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] ) )): ?> inlineEdit<?php endif; ?><?php if (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] ) && $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] == 'phone'): ?> phone<?php endif; ?>" type="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type']; ?>
" field="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
" <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?>>
                    <?php else: ?>
                        {*<!-- phone (version 2) -->*}
                        <div class="col-xs-12 col-sm-10 detail-view-field<?php if ($this->_tpl_vars['inline_edit'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] ) )): ?> inlineEdit<?php endif; ?><?php if (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] ) && $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] == 'phone'): ?> phone<?php endif; ?>" type="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type']; ?>
" field="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
" <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?>>
                    <?php endif; ?>

                    <?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>



                    {*<!-- simple hidden start -->*}
                    {if !$fields.<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
.hidden}



                    <?php endif; ?>

                    <?php echo $this->_tpl_vars['colData']['field']['prefix']; ?>



                    <?php if (( $this->_tpl_vars['colData']['field']['customCode'] && ! $this->_tpl_vars['colData']['field']['customCodeRenderField'] ) || $this->_tpl_vars['colData']['field']['assign']): ?>
                        {counter name="panelFieldCount" print=false}
                        <span id="<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field'],'colData' => $this->_tpl_vars['colData']), $this);?>
</span>
                    <?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] && ! empty ( $this->_tpl_vars['colData']['field']['fields'] )): ?>

                        <?php $_from = $this->_tpl_vars['colData']['field']['fields']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField']):
?>
                            <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['subField']]): ?>
                                {counter name="panelFieldCount" print=false}
                                <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','tabindex' => $this->_tpl_vars['tabIndex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['subField']],'displayType' => 'DetailView'), $this);?>
&nbsp;
                            <?php else: ?>
                                {counter name="panelFieldCount" print=false}
                                <?php echo $this->_tpl_vars['subField']; ?>

                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                    <?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
                        {counter name="panelFieldCount" print=false}
                        <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'DetailView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type']), $this);?>

                    <?php endif; ?>

                    <?php if (! empty ( $this->_tpl_vars['colData']['field']['customCode'] ) && $this->_tpl_vars['colData']['field']['customCodeRenderField']): ?>
                        {counter name="panelFieldCount" print=false}
                        <span id="<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
" class="sugar_field"><?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field'],'colData' => $this->_tpl_vars['colData']), $this);?>
</span>
                    <?php endif; ?>

                    <?php echo $this->_tpl_vars['colData']['field']['suffix']; ?>


                    <?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>



                    {/if}
                    {*<!-- simple hidden finish -->*}



                    <?php endif; ?>

                        <?php if ($this->_tpl_vars['inline_edit'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] ) )): ?>
                        <div class="inlineEditIcon col-xs-hidden">
                            <span class="suitepicon suitepicon-action-edit"></span>
                        </div>
                        <?php endif; ?>

                    </div>
                    {*<!-- /phone (version 1/2) -->*}

                <?php endif; ?>



                <?php echo smarty_function_counter(array('name' => 'fieldCount','print' => false), $this);?>


            {*<!-- [/hide!!] -->*}
            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>

        </div>
        {*<!-- /DIV column -->*}


    <?php endforeach; endif; unset($_from); ?>
    <?php echo smarty_function_counter(array('name' => 'columnCount','print' => false), $this);?>


</div>
<?php endforeach; endif; unset($_from); ?>

{*<!-- /tab panel main div -->*}