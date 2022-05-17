<?php /* Smarty version 2.6.33, created on 2022-05-08 12:42:54
         compiled from themes%5CSuiteP%5Cmodules/SavedSearch/SavedSearchForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'themes\\SuiteP\\modules/SavedSearch/SavedSearchForm.tpl', 50, false),array('modifier', 'default', 'themes\\SuiteP\\modules/SavedSearch/SavedSearchForm.tpl', 81, false),)), $this); ?>
<div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div<?php if ($this->_tpl_vars['orderBySelectOnly']): ?> style="display:none;"<?php endif; ?>>
            <input id='displayColumnsDef' type='hidden' name='displayColumns'>
            <input id='hideTabsDef' type='hidden' name='hideTabs'>
            <?php echo $this->_tpl_vars['columnChooser']; ?>

            <br>
        </div>
        <div class="col-xs-12">
            <label><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ORDER_BY_COLUMNS','module' => 'SavedSearch'), $this);?>
</label>

        </div>
        <div class="form-item">
            <select name='orderBy' id='orderBySelect'>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="col-xs-12">
            <label><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DIRECTION','module' => 'SavedSearch'), $this);?>
</label>
        </div>
        <div class="form-item radios">
            <div><input id='sort_order_desc_radio' type='radio' name='sortOrder' value='DESC'
                        <?php if ($this->_tpl_vars['selectedSortOrder'] == 'DESC'): ?>checked<?php endif; ?>>&nbsp;<span
                        onclick='document.getElementById("sort_order_desc_radio").checked = true'
                        style="cursor: pointer; cursor: hand"><?php echo $this->_tpl_vars['MOD']['LBL_DESCENDING']; ?>
</span></div>

            <div><input id='sort_order_asc_radio' type='radio' name='sortOrder' value='ASC'
                        <?php if ($this->_tpl_vars['selectedSortOrder'] == 'ASC'): ?>checked<?php endif; ?>>&nbsp;<span
                        onclick='document.getElementById("sort_order_asc_radio").checked = true'
                        style="cursor: pointer; cursor: hand"><?php echo $this->_tpl_vars['MOD']['LBL_ASCENDING']; ?>
</span>
            </div>
        </div>
    </div>

</div>
<script>
    SUGAR.savedViews.columnsMeta = <?php echo $this->_tpl_vars['columnsMeta']; ?>
;
    columnsMeta = <?php echo $this->_tpl_vars['columnsMeta']; ?>
;
    saved_search_select = "<?php echo $this->_tpl_vars['SAVED_SEARCH_SELECT']; ?>
";
    selectedSortOrder = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['selectedSortOrder'])) ? $this->_run_mod_handler('default', true, $_tmp, 'DESC') : smarty_modifier_default($_tmp, 'DESC')); ?>
";
    selectedOrderBy = "<?php echo $this->_tpl_vars['selectedOrderBy']; ?>
";


    <?php echo '
    //this populates the label that shows the name of the current saved view
    //The label is located under the update/delete buttons
    function fillInLabels() {
        //this javascript runs and populates values in savedSearchForm.tpl
        x = document.getElementById(\'saved_search_select\');
        if ((typeof(x) != \'undefined\' && x != null) && x.selectedIndex != 0) {
            curr_search_name = document.getElementById(\'curr_search_name\');
            curr_search_name.innerHTML = \'\';
            curr_search_name.appendChild(document.createTextNode(\'"\' + x.options[x.selectedIndex].text + \'"\'));
            document.getElementById(\'ss_update\').disabled = false;
            document.getElementById(\'ss_delete\').disabled = false;
            $(\'.hideUnusedSavedSearchElements\').show();
        } else {
            document.getElementById(\'ss_update\').disabled = true;
            document.getElementById(\'ss_delete\').disabled = true;
            document.getElementById(\'curr_search_name\').innerHTML = \'\';
            $(\'.hideUnusedSavedSearchElements\').hide();
        }
    }
    //call scripts that need to get run onload of this form.  This function is called when image
    //to collapse/show subpanels is loaded
    function loadSSL_Scripts() {
        //this will fill in the name of the current module, and enable/disable update/delete buttons
        fillInLabels();
        //this populates the order by dropdown, and activates the chooser widget.
        SUGAR.savedViews.handleForm();
    }

    '; ?>

</script>