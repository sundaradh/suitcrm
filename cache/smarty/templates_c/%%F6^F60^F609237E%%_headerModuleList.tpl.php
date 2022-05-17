<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:24
         compiled from themes/SuiteP/tpls/_headerModuleList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_link', 'themes/SuiteP/tpls/_headerModuleList.tpl', 58, false),array('function', 'sugar_translate', 'themes/SuiteP/tpls/_headerModuleList.tpl', 114, false),array('function', 'suite_check_access', 'themes/SuiteP/tpls/_headerModuleList.tpl', 120, false),array('function', 'counter', 'themes/SuiteP/tpls/_headerModuleList.tpl', 213, false),array('function', 'search_controller', 'themes/SuiteP/tpls/_headerModuleList.tpl', 514, false),array('modifier', 'lower', 'themes/SuiteP/tpls/_headerModuleList.tpl', 117, false),array('modifier', 'replace', 'themes/SuiteP/tpls/_headerModuleList.tpl', 117, false),array('modifier', 'default', 'themes/SuiteP/tpls/_headerModuleList.tpl', 770, false),)), $this); ?>
<!--Start Responsive Top Navigation Menu -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="dropdown">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="dropdown-menu mobile_menu" role="menu" id="mobile_menu">
                <?php $_from = $this->_tpl_vars['groupTabs']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                    <?php if (($this->_foreach['groupList']['iteration'] == $this->_foreach['groupList']['total'])): ?>
                        <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group']; ?>
<?php $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                        <?php $_from = $this->_tpl_vars['modules']['modules']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulekey'] => $this->_tpl_vars['module']):
?>
                            <li role="presentation" data-test="1">
                                <?php ob_start(); ?>moduleTab_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
_<?php echo $this->_tpl_vars['module']; ?>
<?php $this->_smarty_vars['capture']['moduleTabId'] = ob_get_contents();  $this->assign('moduleTabId', ob_get_contents());ob_end_clean(); ?>
                                <a href="javascript:void(0)" onclick="window.location.href = '<?php echo smarty_function_sugar_link(array('id' => $this->_tpl_vars['moduleTabId'],'module' => $this->_tpl_vars['modulekey'],'link_only' => 1,'data' => $this->_tpl_vars['module'],'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
'">
                                    <?php echo $this->_tpl_vars['module']; ?>

                                    <?php if ($this->_tpl_vars['modulekey'] != 'Home' && $this->_tpl_vars['modulekey'] != 'Calendar'): ?>
                                        <span class="glyphicon glyphicon-plus"  onclick="window.location.href = 'index.php?action=EditView&module=<?php echo $this->_tpl_vars['modulekey']; ?>
'"></span>
                                                                            <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php $_from = $this->_tpl_vars['modules']['extra']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                            <li role="presentation" data-test="2">
                                <a href="javascript:void(0)" onclick="window.location.href = '<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
'">
                                    <?php echo $this->_tpl_vars['submodulename']; ?>

                                    <span class="glyphicon glyphicon-plus"  onclick="window.location.href = 'index.php?action=EditView&module=<?php echo $this->_tpl_vars['submodule']; ?>
'"></span>
                                                                    </a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <div id="mobileheader" class="mobileheader">
                <div id="modulelinks" class="modulelinks">
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <span class="modulename" data-toggle="dropdown" aria-expanded="false">
                                <?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module'],'caret' => true), $this);?>

                            </span>
                                <ul class="dropdown-menu" role="menu">
                                <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                    <?php if (is_array ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) && count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                        <li class="mobile-current-actions" role="presentation">
                                           <ul class="mobileCurrentTab">
                                               <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                                   <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                       <li class="mobile-action"><a></a><span>&nbsp;</span></li>
                                                   <?php else: ?>
                                                       <li class="mobile-action"><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</a></li>
                                                   <?php endif; ?>
                                               <?php endforeach; endif; unset($_from); ?>
                                           </ul>
                                        </li>
                                    <?php else: ?>
                                        <li class="mobile-action"><a><?php echo $this->_tpl_vars['APP']['LBL_NO_SHORTCUT_MENU']; ?>
</a></li>
                                    <?php endif; ?>
                            <?php endif; ?>

                                    <?php if (is_array ( $this->_tpl_vars['recentRecords'] ) && count ( $this->_tpl_vars['recentRecords'] ) > 0): ?>
                                        <li class="recent-links-title" role="presentation">
                                            <a><strong><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</strong></a>
                                        </li>
                                        <li role="presentation">
                                            <ul class="recent-list">
                                                <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                    <?php if ($this->_foreach['lastViewed']['iteration'] < 4): ?>                                                         <li class="recentlinks" role="presentation">
                                                            <a title="<?php echo smarty_function_sugar_translate(array('module' => $this->_tpl_vars['item']['module_name'],'label' => 'LBL_MODULE_NAME'), $this);?>
"
                                                               accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                               href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-detail">
                                                                <span class="suitepicon suitepicon-module-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['module_name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                                                <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                            </a>
                                                            <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                            <?php if ($this->_tpl_vars['access']): ?>
                                                                 <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-edit"><span class=" glyphicon glyphicon-pencil"></a>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </ul>
                                         </li>
                                    <?php endif; ?>

                                    <?php if (is_array ( $this->_tpl_vars['favoriteRecords'] ) && count ( $this->_tpl_vars['favoriteRecords'] ) > 0): ?>
                                        <li class="favorite-links-title" role="presentation">
                                            <a><strong><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</strong></a>
                                        </li>
                                        <li>
                                            <ul class="favorite-list">
                                                <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                    <?php if ($this->_foreach['lastViewed']['iteration'] < 4): ?>                                                         <li class="favoritelinks" role="presentation">
                                                            <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                               accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                               href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
"  class="favorite-links-detail">
                                                                <span class="suitepicon suitepicon-module-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['module_name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                                                <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                            </a>
                                                            <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                            <?php if ($this->_tpl_vars['access']): ?>
                                                                <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                </ul>

                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
        </div>
        <div class="desktop-toolbar" id="toolbar">
            <?php if ($this->_tpl_vars['USE_GROUP_TABS']): ?>
                <ul class="nav navbar-nav">
                    <li class="navbar-brand-container">
                            <a class="navbar-brand with-home-icon suitepicon suitepicon-action-home" href="index.php?module=Home&action=index"></a>
                    </li>
                    <?php $this->assign('groupSelected', false); ?>
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <?php if ($this->_tpl_vars['name'] != 'Home'): ?>
                                <li class="topnav">
                                    <span class="currentTabLeft">&nbsp;</span>
                                    <span class="currentTab"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module']), $this);?>
</span>
                                    <span>&nbsp;</span>
                                                                        <?php $this->assign('foundRecents', false); ?>
                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <?php $this->assign('foundRecents', true); ?>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>


                                                                        <?php $this->assign('foundFavorits', false); ?>
                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name']): ?>
                                            <?php $this->assign('foundFavorits', true); ?>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <?php if ($this->_tpl_vars['foundRecents'] || $this->_tpl_vars['foundFavorits'] || ( is_array ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) && count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0 )): ?>

                                        <ul class="dropdown-menu" role="menu">
                                            <li class="current-module-action-links">
                                                <ul>
                                                    <?php if (is_array ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) && count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                                        <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                                            <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                                                                                            <?php else: ?>
                                                                <li><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><span class="topnav-fake-icon"></span><span aria-hidden="true"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</span></a></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </li>

                                                                                        <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleRecentRecordsTotal','assign' => 'submoduleRecentRecordsTotal','print' => false), $this);?>

                                            <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name'] && $this->_tpl_vars['submoduleRecentRecordsTotal'] == 0): ?>
                                                    <li class="recent-links-title"><a><strong><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</strong></a></li>
                                                    <?php echo smarty_function_counter(array('name' => 'submoduleRecentRecordsTotal','print' => false), $this);?>

                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                                <li class="current-module-recent-links">
                                                    <ul>
                                                                                                                <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleRecentRecords','assign' => 'submoduleRecentRecords','print' => false), $this);?>

                                                        <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                            <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name'] && $this->_tpl_vars['submoduleRecentRecords'] < 3): ?>
                                                                <li class="recentlinks" role="presentation">
                                                                    <a title="<?php echo smarty_function_sugar_translate(array('module' => $this->_tpl_vars['item']['module_name'],'label' => 'LBL_MODULE_NAME'), $this);?>
"
                                                                       accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                                       href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-detail">

                                                                        <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                                    </a>
                                                                    <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                                    <?php if ($this->_tpl_vars['access']): ?>
                                                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-edit"><span class=" glyphicon glyphicon-pencil"></a>
                                                                    <?php endif; ?>
                                                                </li>
                                                                <?php echo smarty_function_counter(array('name' => 'submoduleRecentRecords','print' => false), $this);?>

                                                            <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </ul>
                                                </li>





                                            <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleFavoriteRecordsTotal','assign' => 'submoduleFavoriteRecordsTotal','print' => false), $this);?>

                                            <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name'] && $this->_tpl_vars['submoduleFavoriteRecordsTotal'] == 0): ?>
                                                    <li class="favorite-links-title"><a><strong><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</strong></a></li>
                                                    <?php echo smarty_function_counter(array('name' => 'submoduleFavoriteRecordsTotal','print' => false), $this);?>

                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                            <li class="current-module-favorite-links">
                                                <ul>
                                                                                                        <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleFavoriteRecords','assign' => 'submoduleFavoriteRecords','print' => false), $this);?>

                                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['name'] && $this->_tpl_vars['submoduleFavoriteRecords'] < 3): ?>
                                                            <li class="favoritelinks" role="presentation">
                                                                <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                                   accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                                   href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-detail">
                                                                    <span class="suitepicon suitepicon-module-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['module_name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                                                    <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                                </a>
                                                                <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                                <?php if ($this->_tpl_vars['access']): ?>
                                                                    <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-edit"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                                <?php endif; ?>
                                                            </li>
                                                            <?php echo smarty_function_counter(array('name' => 'submoduleFavoriteRecords','print' => false), $this);?>

                                                        <?php endif; ?>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </ul>
                                            </li>
                                        </ul>

                                    <?php endif; ?>
                                 </li>
                            <?php endif; ?>

                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['groupTabs']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                        <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group']; ?>
<?php $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                        <li class="topnav <?php if (($this->_foreach['groupList']['iteration'] == $this->_foreach['groupList']['total'])): ?>all<?php endif; ?>">
                            <span class="notCurrentTabLeft">&nbsp;</span><span class="notCurrentTab">
                            <a href="#" id="grouptab_<?php echo ($this->_foreach['groupList']['iteration']-1); ?>
" class="dropdown-toggle grouptab"><?php echo $this->_tpl_vars['group']; ?>
</a>
                            <span class="notCurrentTabRight">&nbsp;</span>
                            <ul class="dropdown-menu" role="menu" <?php if (($this->_foreach['groupList']['iteration'] == $this->_foreach['groupList']['total'])): ?> class="All"<?php endif; ?>>
                                <?php $_from = $this->_tpl_vars['modules']['modules']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modulekey'] => $this->_tpl_vars['module']):
?>
                                    <li>
                                        <?php ob_start(); ?>moduleTab_<?php echo ($this->_foreach['moduleList']['iteration']-1); ?>
_<?php echo $this->_tpl_vars['module']; ?>
<?php $this->_smarty_vars['capture']['moduleTabId'] = ob_get_contents();  $this->assign('moduleTabId', ob_get_contents());ob_end_clean(); ?>
                                        <?php echo smarty_function_sugar_link(array('id' => $this->_tpl_vars['moduleTabId'],'module' => $this->_tpl_vars['modulekey'],'data' => $this->_tpl_vars['module'],'extraparams' => $this->_tpl_vars['extraparams']), $this);?>

                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                                <?php $_from = $this->_tpl_vars['modules']['extra']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                                    <li>
                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>
</a>
                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
                            <?php echo '
                <script>
                  var windowResize = function() {
                    // Since the height can be changed in Sass.
                    // Take a measurement of the initial desktop navigation bar height with just one menu item
                    $(\'.desktop-toolbar ul.navbar-nav > li\').not(\'.all\').addClass(\'hidden\');
                    var dth = $(\'.desktop-toolbar\').outerHeight();

                    // Show all desktop menu items
                    $(\'.desktop-toolbar ul.navbar-nav > li.hidden\').removeClass(\'hidden\');

                    // Remove the each menu item from the end of the toolbar until
                    // the navigation bar is the matches the initial height.
                    while($(\'.desktop-toolbar\').outerHeight() > dth) {
                      ti = $(\'.desktop-toolbar ul.navbar-nav > li\').not(\'.hidden\').not(\'.all\');
                      $(ti).last().addClass(\'hidden\');
                    }
                  };
                  $(window).resize(windowResize);
                  $(document).ready(windowResize);
                </script>
            '; ?>

            <?php else: ?>

                <ul class="nav navbar-nav navbar-horizontal-fluid">
                    <li class="navbar-brand-container">
                        <a class="navbar-brand with-home-icon" href="index.php?module=Home&action=index">
                            <span class="suitepicon suitepicon-action-home"></span>
                        </a>
                    </li>
                    <?php $_from = $this->_tpl_vars['groupTabs']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['modules']):
        $this->_foreach['groupList']['iteration']++;
?>
                        <?php ob_start(); ?>parentTab=<?php echo $this->_tpl_vars['group']; ?>
<?php $this->_smarty_vars['capture']['extraparams'] = ob_get_contents();  $this->assign('extraparams', ob_get_contents());ob_end_clean(); ?>
                    <?php endforeach; endif; unset($_from); ?>

                    <!--nav items with actions -->
                    <?php $_from = $this->_tpl_vars['modules']['modules']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                        <?php if ($this->_tpl_vars['submodule'] != 'Home'): ?>
                            <li class="topnav with-actions">
                                <span class="notCurrentTabLeft">&nbsp;</span>
                                <span class="dropdown-toggle headerlinks notCurrentTab"> <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>
</a> </span>
                                <span class="notCurrentTabRight">&nbsp;</span>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <ul>
                                            <?php if (is_array ( $this->_tpl_vars['shortcutTopMenu'] ) && count ( $this->_tpl_vars['shortcutTopMenu'] ) > 0): ?>
                                                <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['submodule']]; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                                    <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                                                                                            <?php else: ?>
                                                        <li><a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
"><span class="topnav-fake-icon"></span><span aria-hidden="true"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</span></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                                                        <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleRecentRecordsTotal','assign' => 'submoduleRecentRecordsTotal','print' => false), $this);?>

                                    <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['submodule'] && $this->_tpl_vars['submoduleRecentRecordsTotal'] == 0): ?>
                                            <li class="recent-links-title"><a><strong><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</strong></a></li>
                                            <?php echo smarty_function_counter(array('name' => 'submoduleRecentRecordsTotal','print' => false), $this);?>

                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <li>
                                        <ul>
                                                                                        <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleRecentRecords','assign' => 'submoduleRecentRecords','print' => false), $this);?>

                                            <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                                <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['submodule'] && $this->_tpl_vars['submoduleRecentRecords'] < 3): ?>
                                                    <li class="recentlinks" role="presentation">
                                                        <a title="<?php echo smarty_function_sugar_translate(array('module' => $this->_tpl_vars['item']['module_name'],'label' => 'LBL_MODULE_NAME'), $this);?>
"
                                                           accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                           href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-detail">
                                                            <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                        </a>
                                                        <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                        <?php if ($this->_tpl_vars['access']): ?>
                                                            <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-edit"><span class=" glyphicon glyphicon-pencil"></a>
                                                        <?php endif; ?>
                                                    </li>
                                                    <?php echo smarty_function_counter(array('name' => 'submoduleRecentRecords','print' => false), $this);?>

                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </li>
                                                                        <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleFavoriteRecordsTotal','assign' => 'submoduleFavoriteRecordsTotal','print' => false), $this);?>

                                    <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['submodule'] && $this->_tpl_vars['submoduleFavoriteRecordsTotal'] == 0): ?>
                                            <li class="favorite-links-title"><a><strong><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</strong></a></li>
                                            <?php echo smarty_function_counter(array('name' => 'submoduleFavoriteRecordsTotal','print' => false), $this);?>

                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <li>
                                        <ul>
                                                                                <?php echo smarty_function_counter(array('start' => 0,'name' => 'submoduleFavoriteRecords','assign' => 'submoduleFavoriteRecords','print' => false), $this);?>

                                        <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                                            <?php if ($this->_tpl_vars['item']['module_name'] == $this->_tpl_vars['submodule'] && $this->_tpl_vars['submoduleFavoriteRecords'] < 3): ?>
                                                <li class="favoritelinks" role="presentation">
                                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
"
                                                       accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                                       href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-detail">
                                                        <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                                    </a>
                                                    <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                                    <?php if ($this->_tpl_vars['access']): ?>
                                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-edit"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></a>
                                                    <?php endif; ?>
                                                </li>
                                                <?php echo smarty_function_counter(array('name' => 'submoduleFavoriteRecords','print' => false), $this);?>

                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if (count ( $this->_tpl_vars['moduleExtraMenu'] ) > 0): ?>
                        <li class="topnav overflow-toggle-menu">
                            <span class="notCurrentTabLeft">&nbsp;</span>
                            <span class="dropdown-toggle headerlinks notCurrentTab"><a href="#"><?php echo $this->_tpl_vars['APP']['LBL_MORE']; ?>
</a></span>
                            <span class="notCurrentTabRight">&nbsp;</span>
                            <ul id="overflow-menu" class="dropdown-menu" role="menu">
                                <!--nav items without actions -->
                                <?php $_from = $this->_tpl_vars['modules']['extra']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submodule'] => $this->_tpl_vars['submodulename']):
?>
                                    <li class="topnav without-actions">
                                        <span class=" notCurrentTab"> <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['submodule'],'link_only' => 1,'extraparams' => $this->_tpl_vars['extraparams']), $this);?>
"><?php echo $this->_tpl_vars['submodulename']; ?>
</a> </span>
                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="hidden hidden-actions"></div>
                                <?php echo '
                    <script>
                        var windowResize = function() {
                            // reset navbar
                            var $navCollapsedItems = $(\'ul#overflow-menu > li.with-actions\');
                            if(typeof $navCollapsedItems !== "undefined") {
                                $($navCollapsedItems).each(function() {
                                    $(this).addClass(\'topnav\');
                                    $(this).insertBefore(\'.overflow-toggle-menu\');
                                });
                            }



                            var $navItemMore = $(\'.navbar-horizontal-fluid > li.overflow-toggle-menu\'),
                                    $navItems = $(\'.navbar-horizontal-fluid > li.with-actions\'),
                                    navItemMoreWidth = navItemWidth = $navItemMore.width(),
                                    windowWidth = $(window).width() - ($(window).width()  * 0.55),
                                    navItemMoreLeft, offset, navOverflowWidth;

                            $navItems.each(function() {
                                navItemWidth += $(this).width();
                            });

                            // Remove nav items that are cause the right hand nav-bar items to wrap
                            while (navItemWidth > windowWidth) {
                                navItemWidth -= $navItems.last().width();
                                $navItems.last().removeClass(\'topnav\');
                                $navItems.last().prependTo(\'#overflow-menu\');
                                $navItems.splice(-1,1);
                            }
                            if(typeof $navItemMoreLeft !== "undefined") {
                                navItemMoreLeft = $(\'.navbar-horizontal-fluid .overflow-toggle-menu\').offset().left;
                                navOverflowWidth = $(\'#overflow-menu\').width();
                                offset = navItemMoreLeft + navItemMoreWidth - navOverflowWidth;
                            }
                        };
                        $(window).resize(windowResize);
                        windowResize();
                    </script>
                '; ?>


            <?php endif; ?>
        </div>

        <!-- Right side of the main navigation -->
        <div class="mobile-bar">
            <ul id="toolbar" class="toolbar">
                <li id="quickcreatetop" class="create dropdown nav navbar-nav quickcreatetop">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $this->_tpl_vars['APP']['LBL_CREATE_BUTTON_LABEL']; ?>
<span class="suitepicon suitepicon-action-caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Accounts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Contacts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Opportunities','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Leads','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Documents','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Calls','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Tasks','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                    </ul>
                </li>
                <li id="" class="dropdown nav navbar-nav navbar-search">
                    <button id="searchbutton" class="dropdown-toggle btn btn-default searchbutton suitepicon suitepicon-action-search" data-toggle="dropdown" aria-expanded="true">
                    </button>
                    <div class="dropdown-menu" role="menu" aria-labelledby="searchbutton">
                        <form id="searchformdropdown" class="searchformdropdown" name='UnifiedSearch' action='index.php'
                              onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                            <?php echo smarty_function_search_controller(array(), $this);?>

                            <input type="hidden" class="form-control" name="module" value="Home">
                            <input type="hidden" class="form-control" name="search_form" value="false">
                            <input type="hidden" class="form-control" name="advanced" value="false">
                            <div class="input-group">
                                <input type="text" class="form-control query_string" name="query_string" id="query_string"
                                       placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                            </span>
                            </div>
                        </form>
                    </div>
                </li>
                <li id="desktop_notifications" class="dropdown nav navbar-nav desktop_notifications">
                    <button class="alertsButton btn dropdown-toggle suitepicon suitepicon-action-alerts" data-toggle="dropdown"
                            aria-expanded="false">
                        <span class="alert_count hidden">0</span>
                    </button>
                    <div id="alerts" class="dropdown-menu" role="menu"><?php echo $this->_tpl_vars['APP']['LBL_EMAIL_ERROR_VIEW_RAW_SOURCE']; ?>
</div>
                </li>
                <li>
                    <form id="searchform" class="navbar-form searchform" name='UnifiedSearch' action='index.php'
                          onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                        <?php echo smarty_function_search_controller(array(), $this);?>

                        <input type="hidden" class="form-control" name="module" value="Home">
                        <input type="hidden" class="form-control" name="search_form" value="false">
                        <input type="hidden" class="form-control" name="advanced" value="false">
                        <div class="input-group">
                            <input type="text" class="form-control query_string " name="query_string" id="query_string"
                                   placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li id="globalLinks" class="dropdown nav navbar-nav globalLinks-mobile">

                    <button id="usermenucollapsed" class="dropdown-toggle btn btn-default usermenucollapsed" data-toggle="dropdown" aria-expanded="true">
                        <span class="suitepicon suitepicon-action-user-small"></span>
                    </button>
                    <ul class="dropdown-menu user-dropdown user-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li role="presentation">
                            <a href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'>
                                <?php echo $this->_tpl_vars['APP']['LBL_PROFILE']; ?>

                            </a>
                        </li>
                        <?php $_from = $this->_tpl_vars['GCLS']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcl_key'] => $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>
                            <li role="presentation">
                                <a id="<?php echo $this->_tpl_vars['gcl_key']; ?>
_link"
                                   href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
"
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> 
                                   onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"
                                   <?php endif; ?>
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['TARGET'] )): ?> 
                                   target="<?php echo $this->_tpl_vars['GCL']['TARGET']; ?>
"
                                   <?php endif; ?>
                                   ><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li role="presentation"><a role="menuitem" id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
'
                                                   class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="tablet-bar">
            <ul id="toolbar" class="toolbar">
                <li id="quickcreatetop" class="create dropdown nav navbar-nav quickcreatetop">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $this->_tpl_vars['APP']['LBL_CREATE_BUTTON_LABEL']; ?>
<span class="suitepicon suitepicon-action-caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Accounts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Contacts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Opportunities','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Leads','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Documents','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Calls','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Tasks','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                    </ul>
                </li>
                <li id="" class="dropdown nav navbar-nav navbar-search">
                    <button id="searchbutton" class="dropdown-toggle btn btn-default searchbutton suitepicon suitepicon-action-search" data-toggle="dropdown" aria-expanded="true">
                    </button>
                    <div class="dropdown-menu" role="menu" aria-labelledby="searchbutton">
                        <form id="searchformdropdown" class="searchformdropdown" name='UnifiedSearch' action='index.php'
                              onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                            <?php echo smarty_function_search_controller(array(), $this);?>

                            <input type="hidden" class="form-control" name="module" value="Home">
                            <input type="hidden" class="form-control" name="search_form" value="false">
                            <input type="hidden" class="form-control" name="advanced" value="false">
                            <div class="input-group">
                                <input type="text" class="form-control query_string" name="query_string" id="query_string"
                                       placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                            </span>
                            </div>
                        </form>
                    </div>
                </li>
                <li>
                    <form id="searchform" class="navbar-form searchform" name='UnifiedSearch' action='index.php'
                          onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                        <?php echo smarty_function_search_controller(array(), $this);?>

                        <input type="hidden" class="form-control" name="module" value="Home">
                        <input type="hidden" class="form-control" name="search_form" value="false">
                        <input type="hidden" class="form-control" name="advanced" value="false">
                        <div class="input-group">
                            <input type="text" class="form-control query_string" name="query_string" id="query_string"
                                   placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li id="desktop_notifications" class="dropdown nav navbar-nav desktop_notifications">
                    <button class="alertsButton btn dropdown-toggle suitepicon suitepicon-action-alerts" data-toggle="dropdown"
                            aria-expanded="false">
                        <span class="alert_count hidden">0</span>
                    </button>
                    <div id="alerts" class="dropdown-menu" role="menu"><?php echo $this->_tpl_vars['APP']['LBL_EMAIL_ERROR_VIEW_RAW_SOURCE']; ?>
</div>
                </li>
                <li id="globalLinks" class="dropdown nav navbar-nav globalLinks-mobile">

                    <button id="usermenucollapsed" class="dropdown-toggle btn btn-default usermenucollapsed" data-toggle="dropdown"
                            aria-expanded="true">
                        <span class="suitepicon suitepicon-action-current-user"></span>
                    </button>
                    <ul class="dropdown-menu user-dropdown user-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li role="presentation">
                            <a href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'>
                                <?php echo $this->_tpl_vars['APP']['LBL_PROFILE']; ?>

                            </a>
                        </li>
                        <?php $_from = $this->_tpl_vars['GCLS']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcl_key'] => $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>
                            <li role="presentation">
                                <a id="<?php echo $this->_tpl_vars['gcl_key']; ?>
_link"
                                   href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
"
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> 
                                   onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"
                                   <?php endif; ?>
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['TARGET'] )): ?> 
                                   target="<?php echo $this->_tpl_vars['GCL']['TARGET']; ?>
"
                                   <?php endif; ?>
                                   ><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li role="presentation"><a role="menuitem" id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
'
                                                   class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="desktop-bar">
            <ul id="toolbar" class="toolbar">
                <li id="quickcreatetop" class="create dropdown nav navbar-nav quickcreatetop">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $this->_tpl_vars['APP']['LBL_CREATE_BUTTON_LABEL']; ?>
<span class="suitepicon suitepicon-action-caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Accounts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Contacts','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Opportunities','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Leads','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Documents&action=EditView&return_module=Documents&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Documents','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Calls','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                        <li><a href="index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_CREATE']; ?>
<?php echo smarty_function_sugar_translate(array('module' => 'Tasks','label' => 'LBL_MODULE_NAME'), $this);?>
</a></li>
                    </ul>
                </li>
                <li id="" class="dropdown nav navbar-nav navbar-search">
                    <button id="searchbutton" class="dropdown-toggle btn btn-default searchbutton suitepicon suitepicon-action-search" data-toggle="dropdown" aria-expanded="true">
                    </button>
                    <div class="dropdown-menu" role="menu" aria-labelledby="searchbutton">
                        <form id="searchformdropdown" class="searchformdropdown" name='UnifiedSearch' action='index.php'
                              onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                            <?php echo smarty_function_search_controller(array(), $this);?>

                            <input type="hidden" class="form-control" name="module" value="Home">
                            <input type="hidden" class="form-control" name="search_form" value="false">
                            <input type="hidden" class="form-control" name="advanced" value="false">
                            <div class="input-group">
                                <input type="text" class="form-control query_string" name="query_string" id="query_string"
                                       placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                            </span>
                            </div>
                        </form>
                    </div>
                </li>
                <li>
                    <form id="searchform" class="navbar-form searchform" name='UnifiedSearch' action='index.php'
                          onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                        <?php echo smarty_function_search_controller(array(), $this);?>

                        <input type="hidden" class="form-control" name="module" value="Home">
                        <input type="hidden" class="form-control" name="search_form" value="false">
                        <input type="hidden" class="form-control" name="advanced" value="false">
                        <div class="input-group">
                            <input type="text" class="form-control query_string" name="query_string" id="query_string"
                                   placeholder="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
..." value="<?php echo $this->_tpl_vars['SEARCH']; ?>
"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default suitepicon suitepicon-action-search"></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li id="desktop_notifications" class="dropdown nav navbar-nav desktop_notifications">
                    <button class="alertsButton btn dropdown-toggle suitepicon suitepicon-action-alerts" data-toggle="dropdown"
                            aria-expanded="false">
                        <span class="alert_count hidden">0</span>
                    </button>
                    <div id="alerts" class="dropdown-menu" role="menu"><?php echo $this->_tpl_vars['APP']['LBL_EMAIL_ERROR_VIEW_RAW_SOURCE']; ?>
</div>
                </li>
                <li id="globalLinks" class="dropdown nav navbar-nav globalLinks-desktop">
                    <button id="with-label" class="dropdown-toggle user-menu-button" title="<?php echo $this->_tpl_vars['CURRENT_USER']; ?>
"data-toggle="dropdown" aria-expanded="true">
                        <span class="suitepicon suitepicon-action-current-user"></span>
                        <span class="globallabel-user"><?php echo $this->_tpl_vars['CURRENT_USER']; ?>
</span>
                        <span class="suitepicon suitepicon-action-caret"></span>
                    </button>
                    <ul class="dropdown-menu user-dropdown user-menu" role="menu" aria-labelledby="with-label">
                        <li role="presentation">
                            <a href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'>
                                <?php echo $this->_tpl_vars['APP']['LBL_PROFILE']; ?>

                            </a>
                        </li>
                        <?php $_from = $this->_tpl_vars['GCLS']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcl_key'] => $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>
                            <li role="presentation">
                                <a id="<?php echo $this->_tpl_vars['gcl_key']; ?>
_link"
                                   href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
"
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> 
                                   onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"
                                   <?php endif; ?>
                                   <?php if (! empty ( $this->_tpl_vars['GCL']['TARGET'] )): ?>
                                   target="<?php echo $this->_tpl_vars['GCL']['TARGET']; ?>
"
                                   <?php endif; ?>
                                   ><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <li role="presentation"><a role="menuitem" id="logout_link" href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
'
                                                   class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a></li>
                    </ul>
                </li>
            </ul>

        </div>
</nav>
<!--End Responsive Top Navigation Menu -->
<?php if ($this->_tpl_vars['THEME_CONFIG']['display_sidebar']): ?>
    <!--Start Page Container and Responsive Sidebar -->
    <div id='sidebar_container' class="container-fluid sidebar_container">

        <a id="buttontoggle" class="buttontoggle"><span></span></a>

        <div <?php if (((is_array($_tmp=@$_COOKIE['sidebartoggle'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 'collapsed'): ?>style="display:none"<?php endif; ?>
             class="sidebar">

                <div id="actionMenuSidebar" class="actionMenuSidebar">
                    <?php $_from = $this->_tpl_vars['moduleTopMenu']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
                            <ul>
                                <?php if (isset ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) && is_array ( $this->_tpl_vars['shortcutTopMenu'] ) && count ( $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']] ) > 0): ?>
                                    <h2 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</h2>
                                    <?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <?php if ($this->_tpl_vars['item']['URL'] == "-"): ?>
                                            <li><a></a><span>&nbsp;</span></li>
                                        <?php else: ?>
                                            <li class="actionmenulinks" role="presentation">
                                                <a href="<?php echo $this->_tpl_vars['item']['URL']; ?>
" data-action-name="<?php echo $this->_tpl_vars['item']['MODULE_NAME']; ?>
">
                                                    <div class="side-bar-action-icon">
                                                        <span class="suitepicon suitepicon-action-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['MODULE_NAME'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                                    </div>
                                                    <div class="actionmenulink"><?php echo $this->_tpl_vars['item']['LABEL']; ?>
</div>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>

                <div id="recentlyViewedSidebar" class="recentlyViewedSidebar">
                    <?php if (is_array ( $this->_tpl_vars['recentRecords'] ) && count ( $this->_tpl_vars['recentRecords'] ) > 0): ?>
                    <h2 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</h2>
                    <?php endif; ?>
                    <ul class="nav nav-pills nav-stacked">
                        <?php $_from = $this->_tpl_vars['recentRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                            <?php if ($this->_tpl_vars['item']['module_name'] != 'Emails' && $this->_tpl_vars['item']['module_name'] != 'InboundEmail' && $this->_tpl_vars['item']['module_name'] != 'EmailAddresses'): ?><!--Check to ensure that recently viewed emails or email addresses are not displayed in the recently viewed panel.-->
                                <?php if (($this->_foreach['lastViewed']['iteration']-1) < 5): ?>
                                    <div class="recently_viewed_link_container_sidebar">
                                        <li class="recentlinks" role="presentation">
                                            <a title="<?php echo smarty_function_sugar_translate(array('module' => $this->_tpl_vars['item']['module_name'],'label' => 'LBL_MODULE_NAME'), $this);?>
"
                                               accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
"
                                               href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
"
                                               class="recent-links-detail">
                                                <span class="suitepicon suitepicon-module-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['module_name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                                <span><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                            </a>
                                            <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                            <?php if ($this->_tpl_vars['access']): ?>
                                                <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['item_id'],'link_only' => 1), $this);?>
" class="recent-links-edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
                 <div id="favoritesSidebar" class="favoritesSidebar">
                <?php if (is_array ( $this->_tpl_vars['favoriteRecords'] ) && count ( $this->_tpl_vars['favoriteRecords'] ) > 0): ?>
                    <h2 class="recent_h3"><?php echo $this->_tpl_vars['APP']['LBL_FAVORITES']; ?>
</h2>
                <?php endif; ?>
                    <ul class="nav nav-pills nav-stacked">
                        <?php $_from = $this->_tpl_vars['favoriteRecords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['lastViewed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastViewed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['lastViewed']['iteration']++;
?>
                            <?php if (($this->_foreach['lastViewed']['iteration']-1) < 5): ?>
                            <div class="recently_viewed_link_container_sidebar">
                                <li class="recentlinks" role="presentation">
                                    <a title="<?php echo $this->_tpl_vars['item']['module_name']; ?>
" accessKey="<?php echo $this->_foreach['lastViewed']['iteration']; ?>
" href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'DetailView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-detail">
                                        <span class="suitepicon suitepicon-module-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['module_name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-')); ?>
"></span>
                                        <span aria-hidden="true"><?php echo $this->_tpl_vars['item']['item_summary_short']; ?>
</span>
                                    </a>
                                    <?php ob_start(); ?><?php echo smarty_function_suite_check_access(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'edit','record' => $this->_tpl_vars['item']['item_id']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('access', ob_get_contents());ob_end_clean(); ?>
                                    <?php if ($this->_tpl_vars['access']): ?>
                                        <a href="<?php echo smarty_function_sugar_link(array('module' => $this->_tpl_vars['item']['module_name'],'action' => 'EditView','record' => $this->_tpl_vars['item']['id'],'link_only' => 1), $this);?>
" class="favorite-links-edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    <?php endif; ?>
                                </li>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
            </div>
        <!--</div>-->
    </div>
    <!--End Responsive Sidebar -->
<?php endif; ?>
<!--Start Page content -->