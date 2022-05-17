<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:33
         compiled from themes%5CSuiteP%5Cinclude/MySugar/tpls/MySugar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getscript', 'themes\\SuiteP\\include/MySugar/tpls/MySugar.tpl', 59, false),array('function', 'counter', 'themes\\SuiteP\\include/MySugar/tpls/MySugar.tpl', 80, false),array('function', 'sugar_getjspath', 'themes\\SuiteP\\include/MySugar/tpls/MySugar.tpl', 247, false),)), $this); ?>
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


<?php echo $this->_tpl_vars['chartResources']; ?>

<?php echo $this->_tpl_vars['mySugarChartResources']; ?>

<div class="dashboard">
        <ul class="nav nav-tabs nav-dashboard">

        <?php $_from = $this->_tpl_vars['dashboardPages']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabNum'] => $this->_tpl_vars['tab']):
?>
            <?php if ($this->_tpl_vars['tabNum'] == 0): ?>
                <li role="presentation" class="active">
                    <a id="tab<?php echo $this->_tpl_vars['tabNum']; ?>
" href="#tab_content_<?php echo $this->_tpl_vars['tabNum']; ?>
" data-toggle="tab" <?php if (! $this->_tpl_vars['lock_homepage']): ?>ondblclick="renameTab(<?php echo $this->_tpl_vars['tabNum']; ?>
)"<?php endif; ?> onClick="retrievePage(<?php echo $this->_tpl_vars['tabNum']; ?>
);" class="hidden-xs">
                        <?php echo $this->_tpl_vars['dashboardPages'][$this->_tpl_vars['tabNum']]['pageTitle']; ?>

                    </a>

                    <a id="xstab<?php echo $this->_tpl_vars['tabNum']; ?>
" href="#" class="visible-xs first-tab-xs dropdown-toggle" data-toggle="dropdown">
                        <?php echo $this->_tpl_vars['dashboardPages'][$this->_tpl_vars['tabNum']]['pageTitle']; ?>

                        <span class="suitepicon suitepicon-action-caret"></span>
                    </a>
                    <ul id="first-tab-menu-xs" class="dropdown-menu">
                        <?php echo smarty_function_counter(array('name' => 'tabCountXS','start' => -1,'print' => false,'assign' => 'tabCountXS'), $this);?>

                        <?php $_from = $this->_tpl_vars['dashboardPages']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta'] => $this->_tpl_vars['xstab']):
?>
                            <?php echo smarty_function_counter(array('name' => 'tabCountXS','print' => false), $this);?>

                            <li role="presentation">
                                <a id="tabxs<?php echo $this->_tpl_vars['tabCountXS']; ?>
" href="#tab_content_<?php echo $this->_tpl_vars['tabCountXS']; ?>
" data-toggle="tab"  onClick="retrievePage(<?php echo $this->_tpl_vars['tabCountXS']; ?>
);">
                                    <?php echo $this->_tpl_vars['dashboardPages'][$this->_tpl_vars['tabCountXS']]['pageTitle']; ?>

                                </a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
            <?php else: ?>
                <li role="presentation">
                    <a id="tab<?php echo $this->_tpl_vars['tabNum']; ?>
" href="#tab_content_<?php echo $this->_tpl_vars['tabNum']; ?>
"  data-toggle="tab"  <?php if (! $this->_tpl_vars['lock_homepage']): ?>ondblclick="renameTab(<?php echo $this->_tpl_vars['tabNum']; ?>
)"<?php endif; ?> onClick="retrievePage(<?php echo $this->_tpl_vars['tabNum']; ?>
);" class="hidden-xs">
                        <?php echo $this->_tpl_vars['dashboardPages'][$this->_tpl_vars['tabNum']]['pageTitle']; ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        <?php if (! $this->_tpl_vars['lock_homepage']): ?>
            <li id="tab-actions" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
<span class="suitepicon suitepicon-action-caret"></span></a>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/MySugar/tpls/actions_menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </li>
        <?php endif; ?>
    </ul>
    <div class="clearfix"></div>
    <div class="tab-content">
        <?php $_from = $this->_tpl_vars['dashboardPages']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabNum'] => $this->_tpl_vars['tab']):
?>
            <?php if ($this->_tpl_vars['tabNum'] == 0): ?>
            <div class="tab-pane active fade in" id='tab_content_<?php echo $this->_tpl_vars['tabNum']; ?>
'>
            <?php else: ?>
            <div class="tab-pane fade" id='tab_content_<?php echo $this->_tpl_vars['tabNum']; ?>
'>
            <?php endif; ?>
                <img src="themes/SuiteP/images/loading.gif" width="48" height="48" align="baseline" border="0" alt="">
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
</div>
    <div class="modal fade modal-add-dashlet" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $this->_tpl_vars['lblAddDashlets']; ?>
</h4>
                </div>
                <div class="modal-body" id="dashletsList">
                    <p><img src="themes/SuiteP/images/loading.gif" width="48" height="48" align="baseline" border="0" alt=""></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->_tpl_vars['app']['LBL_CLOSE_BUTTON_TITLE']; ?>
</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade modal-add-dashboard" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $this->_tpl_vars['lblAddTab']; ?>
</h4>
                </div>
                <div class="modal-body" id="dashboardDialog">
                    <p><img src="themes/SuiteP/images/loading.gif" width="48" height="48" align="baseline" border="0" alt=""></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_LABEL']; ?>
</button>
                    <button type="button" class="btn btn-danger btn-add-dashboard" data-dismiss="modal"><?php echo $this->_tpl_vars['lblAddTab']; ?>
</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade modal-edit-dashboard" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $this->_tpl_vars['app']['LBL_EDIT_TAB']; ?>
</h4>
                </div>
                <div class="modal-body">
                    <p><img src="themes/SuiteP/images/loading.gif" width="48" height="48" align="baseline" border="0" alt=""></p>                </div>
                    <div class="container-fluid">
                        <div class="panel panel-default panel-template">
                            <div class="panel-heading">
                                <div>
                                    <div class="col-xs-10 col-sm-11 col-md-11">
                                        <div class="edit-dashboard-tabs">
                                            <span class="suitepicon suitepicon-mimetype-tab"></span>
                                            <span class="panel-title">Untitled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->_tpl_vars['app']['LBL_CLOSE_BUTTON_TITLE']; ?>
</button></div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- fix errors in mysugar.js -->
    <div style="visibility: collapse">
        <div id="dashletsDialog"></div>
        <div id="dashletsDialog_c"></div>
    </div>

<script type="text/javascript" src="themes/SuiteP/include/MySugar/javascript/AddRemoveDashboardPages.js"></script>
<script type="text/javascript" src="themes/SuiteP/include/MySugar/javascript/retrievePage.js"></script>
<script type="text/javascript">

    var activePage = <?php echo $this->_tpl_vars['activePage']; ?>
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
    var mySugarLoader = new YAHOO.util.YUILoader({
        require: ["my_sugar", "sugar_charts"],
        // Bug #48940 Skin always must be blank
        skin: {
            base: \'blank\',
            defaultSkin: \'\'
        },
        onSuccess: function () {
            initMySugar();
            initmySugarCharts();
            SUGAR.mySugar.maxCount =    '; ?>
<?php echo $this->_tpl_vars['maxCount']; ?>
<?php echo ';
            SUGAR.mySugar.homepage_dd = new Array();
            var j = 0;

            '; ?>

            var dashletIds = <?php echo $this->_tpl_vars['dashletIds']; ?>
;

            <?php if (! $this->_tpl_vars['lock_homepage']): ?>
            for (i in dashletIds) {
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
            for (var wp = 0; wp <= <?php echo $this->_tpl_vars['hiddenCounter']; ?>
; wp++) {
                SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_' + activePage + '_hidden' + wp);
                }
            <?php endif; ?>
            YAHOO.util.DDM.mode = 1;
            <?php endif; ?>
            <?php echo '
            SUGAR.mySugar.renderDashletsDialog();
            SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
            '; ?>

            <?php echo '
        }
    });
    mySugarLoader.addModule({
        name: "my_sugar",
        type: "js",
        fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => 'include/MySugar/javascript/MySugar.js'), $this);?>
"<?php echo ',
        varName: "initMySugar",
        requires: []
    });
    mySugarLoader.addModule({
        name: "sugar_charts",
        type: "js",
        fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarCharts/Jit/js/mySugarCharts.js"), $this);?>
"<?php echo ',
        varName: "initmySugarCharts",
        requires: []
    });
    mySugarLoader.insert();
    '; ?>

</script>