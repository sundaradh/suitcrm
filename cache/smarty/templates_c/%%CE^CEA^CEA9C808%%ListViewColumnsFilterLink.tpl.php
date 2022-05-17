<?php /* Smarty version 2.6.33, created on 2022-05-08 12:43:43
         compiled from include/ListView/ListViewColumnsFilterLink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/ListView/ListViewColumnsFilterLink.tpl', 3, false),)), $this); ?>
<ul class="clickMenu selectmenu SugarActionMenu columnsFilterLink listViewLinkButton listViewLinkButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
" onclick="columnsFilter.onOpen();">
    <li class="sugar_action_button">
        <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target=".modal-columns-filter" title='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COLUMN_CHOOSER'), $this);?>
'></a>
    </li>
</ul>