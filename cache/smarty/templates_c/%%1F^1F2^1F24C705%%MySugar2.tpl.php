<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:37
         compiled from themes%5CSuiteP%5Cinclude/MySugar/tpls/MySugar2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getscript', 'themes\\SuiteP\\include/MySugar/tpls/MySugar2.tpl', 63, false),array('function', 'counter', 'themes\\SuiteP\\include/MySugar/tpls/MySugar2.tpl', 73, false),array('function', 'sugar_getjspath', 'themes\\SuiteP\\include/MySugar/tpls/MySugar2.tpl', 164, false),)), $this); ?>

<?php echo '
    <style>
        .menu {
            z-index: 100;
        }

        .subDmenu {
            z-index: 100;
        }

        div.moduleTitle {
            height: 10px;
        }
    </style>
'; ?>


<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_yui_widgets.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => 'include/javascript/dashlets.js'), $this);?>


<div class="clear"></div>

<!-- Construct Dashlets -->
<div id="pageContainer" class="yui-skin-sam">
    <div class="row" id="pageNum_<?php echo $this->_tpl_vars['activePage']; ?>
_div">
        <table width="100%" class="dashletTable">
            <tr>
                <?php echo smarty_function_counter(array('assign' => 'hiddenCounter','start' => 0,'print' => false), $this);?>

                <?php $_from = $this->_tpl_vars['columns']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colNum'] => $this->_tpl_vars['data']):
?>
                    <td class="dashletcontainer" valign='top'>
                        <ul class='noBullet' id='col_<?php echo $this->_tpl_vars['activePage']; ?>
_<?php echo $this->_tpl_vars['colNum']; ?>
'>
                            <li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
b'
                                style='height: 5px; margin-top:12px;' class='noBullet'>
                                &nbsp;&nbsp;&nbsp;
                            </li>
                            <?php $_from = $this->_tpl_vars['data']['dashlets']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dashlet']):
?>
                                <li class='noBullet' id='dashlet_<?php echo $this->_tpl_vars['id']; ?>
'>
                                    <div id='dashlet_entire_<?php echo $this->_tpl_vars['id']; ?>
' class='dashletPanel'>
                                        <?php echo $this->_tpl_vars['dashlet']['script']; ?>

                                        <?php echo $this->_tpl_vars['dashlet']['displayHeader']; ?>

                                        <?php echo $this->_tpl_vars['dashlet']['display']; ?>

                                        <?php echo $this->_tpl_vars['dashlet']['displayFooter']; ?>

                                    </div>
                                </li>
                            <?php endforeach; endif; unset($_from); ?>
                            <li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
' style='height: 5px'
                                class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
                        </ul>
                    </td>
                    <?php echo smarty_function_counter(array(), $this);?>

                <?php endforeach; endif; unset($_from); ?>
            </tr>
        </table>
    </div>
</div>

<script type="text/javascript">
    var activePage = <?php echo $this->_tpl_vars['activePage']; ?>
;
    var colNum = <?php echo $this->_tpl_vars['colNum']; ?>
;
    var theme = '<?php echo $this->_tpl_vars['theme']; ?>
';
    current_user_id = '<?php echo $this->_tpl_vars['current_user']; ?>
';
    jsChartsArray = new Array();
    var moduleName = '<?php echo $this->_tpl_vars['module']; ?>
';
    document.body.setAttribute("class", "yui-skin-sam");
    <?php echo '

    $(function(){
        var percent = Math.round(100/(colNum+1));
        $(\'#pageContainer #pageNum_\'+activePage+\'_div .dashletcontainer\').addClass(\'col-\'+percent);
    });

    var mySugarLoader = new YAHOO.util.YUILoader({
        require : ["my_sugar", "sugar_charts"],
        // Bug #48940 Skin always must be blank
        skin: {
            base: \'blank\',
            defaultSkin: \'\'
        },
        onSuccess: function(){
            initMySugar();
            initmySugarCharts();
            SUGAR.mySugar.maxCount = 	'; ?>
<?php echo $this->_tpl_vars['maxCount']; ?>
<?php echo ';
            SUGAR.mySugar.homepage_dd = new Array();
            var j = 0;

            '; ?>

            var dashletIds = <?php echo $this->_tpl_vars['dashletIds']; ?>
;

            <?php if (! $this->_tpl_vars['lock_homepage']): ?>
            for(i in dashletIds) {
                SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
                SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
                // Bug #47097 : Dashlets not displayed after moving them
                // add new property to save real id of dashlet, it needs to have ability reload dashlet by id
                SUGAR.mySugar.homepage_dd[j].dashletID = dashletIds[i];
                SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;
                SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
                j++;
                }
            <?php if ($this->_tpl_vars['hiddenCounter'] > 0): ?>
            for(var wp = 0; wp <= <?php echo $this->_tpl_vars['hiddenCounter']; ?>
; wp++) {
                SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
                }
            <?php endif; ?>
            YAHOO.util.DDM.mode = 1;
            <?php endif; ?>
            <?php echo '
            SUGAR.mySugar.renderDashletsDialog();
            SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);

            resizeGraphs();
            '; ?>

            <?php echo '
        }
    });
    mySugarLoader.addModule({
        name :"my_sugar",
        type : "js",
        fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => 'include/MySugar/javascript/MySugar.js'), $this);?>
"<?php echo ',
        varName: "initMySugar",
        requires: []
    });
    mySugarLoader.addModule({
        name :"sugar_charts",
        type : "js",
        fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarCharts/Jit/js/mySugarCharts.js"), $this);?>
"<?php echo ',
        varName: "initmySugarCharts",
        requires: []
    });
    mySugarLoader.insert();
    '; ?>

</script>