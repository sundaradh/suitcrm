<?php /* Smarty version 2.6.33, created on 2022-05-08 12:31:40
         compiled from themes%5CSuiteP%5Cmodules/ModuleBuilder/tpls/includes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'themes\\SuiteP\\modules/ModuleBuilder/tpls/includes.tpl', 42, false),)), $this); ?>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/JSTransaction.js'), $this);?>
" ></script>
<script>
	var jstransaction = new JSTransaction();
	<?php echo '
	if (SUGAR.themes.tempHideLeftCol){
    	SUGAR.themes.tempHideLeftCol();
    }
    '; ?>

</script>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => "include/ytree/TreeView/css/folders/tree.css"), $this);?>
" />

<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studio2.js'), $this);?>
' ></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studio2PanelDD.js'), $this);?>
' ></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studio2RowDD.js'), $this);?>
' ></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studio2FieldDD.js'), $this);?>
' ></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studiotabgroups.js'), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/studio2ListDD.js'), $this);?>
' ></script>

<!--end ModuleBuilder Assistant!-->
<script type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/ModuleBuilder.js'), $this);?>
'></script>
<script type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/SimpleList.js'), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/javascript/JSTransaction.js'), $this);?>
' ></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/tiny_mce/tiny_mce.js'), $this);?>
' ></script>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => "modules/ModuleBuilder/tpls/MB.css"), $this);?>
" />