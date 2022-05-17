<?php /* Smarty version 2.6.33, created on 2022-05-08 12:35:39
         compiled from modules/ModuleBuilder/tpls/studioRelationships.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/studioRelationships.tpl', 47, false),)), $this); ?>
<?php if ($this->_tpl_vars['view_module'] != 'KBDocuments'): ?>
<input type='button' name='addrelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_ADD_RELATIONSHIP']; ?>
'
	class='button' onclick='ModuleBuilder.moduleLoadRelationship2("");' style="margin-bottom:5px;">
<?php endif; ?>
<div id='relGrid'></div>
<?php if ($this->_tpl_vars['studio']): ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUSTOM_RELATIONSHIPS','module' => 'ModuleBuilder'), $this);?>
</h3><?php endif; ?>
<script>
<?php echo '
//Workaround for YUI bug 2527707: http://yuilibrary.com/projects/yui2/ticket/913efafad48ce433199f3e72e4847b18, should be removed when YUI 2.8+ is used
YAHOO.widget.DataTable.prototype.getColumn = function(column) {
    var oColumn = this._oColumnSet.getColumn(column);

    if(!oColumn) {
        // Validate TD element
        var elCell = column.nodeName.toLowerCase() != "th" ? this.getTdEl(column) : false;
        if(elCell) {
            oColumn = this._oColumnSet.getColumn(elCell.cellIndex);
        }
        // Validate TH element
        else {
            elCell = this.getThEl(column);
            if(elCell) {
                // Find by TH el ID
                var allColumns = this._oColumnSet.flat;
                for(var i=0, len=allColumns.length; i<len; i++) {
                    if(allColumns[i].getThEl().id === elCell.id) {
                        oColumn = allColumns[i];
                    } 
                }
            }
        }
    }
    if(!oColumn) {
        YAHOO.log("Could not get Column for column at " + column, "info", this.toString());
    }
    return oColumn;
};
'; ?>

var relationships = {relationships:<?php echo $this->_tpl_vars['relationships']; ?>
};
var grid = new YAHOO.widget.ScrollingDataTable('relGrid',
	[
	    {key:'name',       label: SUGAR.language.get('ModuleBuilder','LBL_REL_NAME'),        width: 200, sortable: true},
	    {key:'lhs_module', label: SUGAR.language.get('ModuleBuilder','LBL_LHS_MODULE'),      width: 120, sortable: true},
	    {key:'relationship_type', label: SUGAR.language.get('ModuleBuilder','LBL_REL_TYPE'), width: 120, sortable: true},
	    {key:'rhs_module', label: SUGAR.language.get('ModuleBuilder','LBL_RHS_MODULE'),      width: 120, sortable: true}
	],<?php echo '
	new YAHOO.util.LocalDataSource(relationships, {
	    responseSchema: {
		   resultsList : "relationships",
		   fields : [{key : "name"}, {key: "lhs_module"}, {key: "relationship_type"}, {key: "rhs_module"}]
	    }
	}),
    {MSG_EMPTY: SUGAR.language.get(\'ModuleBuilder\',\'LBL_NO_RELS\'), height:"auto"}
);
grid.subscribe("rowMouseoverEvent", grid.onEventHighlightRow); 
grid.subscribe("rowMouseoutEvent", grid.onEventUnhighlightRow); 
grid.subscribe("rowClickEvent", function(args){
    var rel = this.getRecord(args.target).getData();
    var editTab = ModuleBuilder.findTabById("relEditor");
    if (editTab) ModuleBuilder.tabPanel.removeTab(editTab);
    var name = rel.name.indexOf("*") > -1 ? rel.name.substring(0, rel.name.length-1) : rel.name;
    ModuleBuilder.moduleLoadRelationship2(name);
});
grid.render();

'; ?>

ModuleBuilder.module = '<?php echo $this->_tpl_vars['view_module']; ?>
';
ModuleBuilder.MBpackage = '<?php echo $this->_tpl_vars['view_package']; ?>
';
ModuleBuilder.helpRegisterByID('relGrid');
<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>
ModuleBuilder.helpSetup('relationshipsHelp','default');
<?php else: ?>
ModuleBuilder.helpSetup('studioWizard','relationshipsHelp');
<?php endif; ?>
</script>