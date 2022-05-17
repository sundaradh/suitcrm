<?php /* Smarty version 2.6.33, created on 2022-05-08 12:35:17
         compiled from modules/ModuleBuilder/tpls/MBModule/fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/MBModule/fields.tpl', 56, false),)), $this); ?>


<div id='studiofields'>
<input type='button' name='addfieldbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_ADDFIELD']; ?>
' class='button' onclick='ModuleBuilder.moduleLoadField("");'>&nbsp;
<?php if ($this->_tpl_vars['editLabelsMb'] == '1'): ?>
<input type='button' name='addfieldbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_EDLABELS']; ?>
' class='button' onclick='ModuleBuilder.moduleLoadLabels("mb");'>
<?php else: ?>
<input type='button' name='addfieldbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_EDLABELS']; ?>
' class='button' onclick='ModuleBuilder.moduleLoadLabels("studio");'>
<?php endif; ?>
</div>

<br>

<div id="field_table"></div>
<?php if ($this->_tpl_vars['studio']): ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUSTOM_FIELDS','module' => 'ModuleBuilder'), $this);?>
</h3><?php endif; ?>

<script type="text/javascript">

var customFieldsData = <?php echo $this->_tpl_vars['customFieldsData']; ?>
;

<?php echo '
//create sortName function to apply custom sorting for the name column which contains HTML
var sortName = function(a, b, desc)
{
    var comp = YAHOO.util.Sort.compare;
    var aString = a.getData(\'name\').replace(/<[^>]*>/g, "");
    var bString = b.getData(\'name\').replace(/<[^>]*>/g, "");
    return comp(aString, bString, desc);
};

var editFieldFormatter = function(elCell, oRecord, oColumn, oData)
{
  var label = customFieldsData[oData] ? \'* \' + oData : oData;
  elCell.innerHTML = "<a class=\'mbLBLL\' href=\'javascript:void(0)\' id=\'" + oData + "\' onclick=\'ModuleBuilder.moduleLoadField(\\"" + oData + "\\");\'>" + label + "</a>";
};

var labelFormatter = function(elCell, oRecord, oColumn, oData)
{
    if (oData)
        elCell.innerHTML = oData.replace(/\\:\\s*?$/, \'\');
};

var myColumnDefs = [
    {key:"name", label:SUGAR.language.get("ModuleBuilder", "LBL_NAME"),sortable:true, resizeable:true, formatter:"editFieldFormatter", width:150, sortOptions:{sortFunction:sortName, defaultDir:YAHOO.widget.DataTable.CLASS_ASC}},
    {key:"label", label:SUGAR.language.get("ModuleBuilder", "LBL_DROPDOWN_ITEM_LABEL"),sortable:true, resizeable:true, formatter:"labelFormatter", width:200},
    {key:"type", label:SUGAR.language.get("ModuleBuilder", "LBL_DATA_TYPE"),sortable:true,resizeable:true, width:125}
];
'; ?>


var myDataSource = new YAHOO.util.DataSource(<?php echo $this->_tpl_vars['fieldsData']; ?>
);
myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
<?php echo '
myDataSource.responseSchema = {fields: ["label","name","type"]};
YAHOO.widget.DataTable.Formatter.editFieldFormatter = editFieldFormatter;
YAHOO.widget.DataTable.Formatter.labelFormatter = labelFormatter;

var fieldsTable = new YAHOO.widget.ScrollingDataTable("field_table", myColumnDefs, myDataSource);

fieldsTable.doBeforeSortColumn = function(column, sortDirection)
{
    var url = \'index.php?module=ModuleBuilder&action=savetablesort&column=\' + column.getKey() + \'&direction=\' + sortDirection;
    
    $.post(
        url
    );
    
    return true;
};


fieldsTable.subscribe("rowMouseoverEvent", fieldsTable.onEventHighlightRow);
fieldsTable.subscribe("rowMouseoutEvent", fieldsTable.onEventUnhighlightRow);
fieldsTable.subscribe("rowClickEvent", function(args) {
    var field = this.getRecord(args.target).getData();
    ModuleBuilder.moduleLoadField(field.name);
});

fieldsTable.render("#field_table");
'; ?>


<?php if (! empty ( $this->_tpl_vars['sortPreferences'] )): ?>
pref = <?php echo $this->_tpl_vars['sortPreferences']; ?>
;
sortDirection = (pref.direction == 'ASC') ? YAHOO.widget.DataTable.CLASS_ASC : YAHOO.widget.DataTable.CLASS_DESC;
fieldsTable.sortColumn(fieldsTable.getColumn(pref.key), sortDirection);
<?php endif; ?>

ModuleBuilder.module = '<?php echo $this->_tpl_vars['module']->name; ?>
';
ModuleBuilder.MBpackage = '<?php echo $this->_tpl_vars['package']->name; ?>
';
ModuleBuilder.helpRegisterByID('studiofields', 'input');
<?php if ($this->_tpl_vars['package']->name != 'studio'): ?>
ModuleBuilder.helpSetup('fieldsEditor','mbDefault');
<?php else: ?>
ModuleBuilder.helpSetup('fieldsEditor','default');
<?php endif; ?>
</script>

<style>
<?php echo '
a.mbLBLL {
	text-decoration:none;
	font-weight:normal;
	color:black;
}

#field_table {
    text-align:left;
}
'; ?>

</style>