<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:31
         compiled from include/get_form_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strpos', 'include/get_form_header.tpl', 1, false),)), $this); ?>
<?php $this->assign('is_min_max', ((is_array($_tmp=$this->_tpl_vars['other_text'])) ? $this->_run_mod_handler('strpos', true, $_tmp, "_search.gif") : strpos($_tmp, "_search.gif"))); ?>
<?php if ($this->_tpl_vars['is_min_max'] !== false): ?>
    <?php $this->assign('form_title', ($this->_tpl_vars['other_text'])." ".($this->_tpl_vars['form_title'])); ?>
<?php endif; ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
    <tr>
        <td nowrap>
            <h3><span><?php echo $this->_tpl_vars['form_title']; ?>
</span></h3>
        </td>

        <?php $this->assign('keywords', "array('class=\"button\"', 'class=\"button\"', 'class=button', '</form>')"); ?>
        <?php $this->assign('match', false); ?>

        <?php $_from = $this->_tpl_vars['keywords']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['left']):
?>
            <?php if ($this->_tpl_vars['other_text']): ?>
                <?php $this->assign('found_match', ((is_array($_tmp=$this->_tpl_vars['left'])) ? $this->_run_mod_handler('strpos', true, $_tmp, $this->_tpl_vars['other_text']) : strpos($_tmp, $this->_tpl_vars['other_text']))); ?>
                <?php if ($this->_tpl_vars['found_match'] !== false): ?>
                    <?php $this->assign('match', true); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['other_text'] && $this->_tpl_vars['match'] == true): ?>
                <td colspan="10" width="100%"><IMG height="1" width="1" src="<?php echo $this->_tpl_vars['blankImageURL']; ?>
" alt=""></td>
            </tr>
                <tr>
                    <td width="100%" align="left" valign="middle" nowrap style="padding-bottom: 2px;"><?php echo $this->_tpl_vars['other_text']; ?>
</td>
                    <?php if ($this->_tpl_vars['show_help']): ?>
                        <td align="right" nowrap>
                            <?php if ($this->_tpl_vars['REQUEST']['action'] != 'EditView'): ?>
                                <a href="index.php?<?php echo $this->_tpl_vars['GLOBALS']['request_string']; ?>
" class="utilsLink">
                                    <img src="<?php echo $this->_tpl_vars['printImageURL']; ?>
" alt="<?php echo $this->_tpl_vars['app_strings']['LBL_PRINT']; ?>
" border="0" align="absmiddle">
                                </a>&nbsp;
                                <a href="index.php?<?php echo $this->_tpl_vars['GLOBALS']['request_string']; ?>
" class="utilsLink">
                                    <?php echo $this->_tpl_vars['app_strings']['LNK_PRINT']; ?>

                                </a>
                            <?php endif; ?>
                            &nbsp;
                            <a href="index.php?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugar_version']; ?>
&edition=<?php echo $this->_tpl_vars['sugar_flavor']; ?>
&lang=<?php echo $this->_tpl_vars['current_language']; ?>
&help_module=<?php echo $this->_tpl_vars['current_module']; ?>
&help_action=<?php echo $this->_tpl_vars['current_action']; ?>
&key=<?php echo $this->_tpl_vars['server_unique_key']; ?>
"
                               class="utilsLink" target="_blank">
                                <img src="<?php echo $this->_tpl_vars['helpImageURL']; ?>
" alt="Help" border="0" align="absmiddle">
                            </a>&nbsp;
                            <a href="index.php?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugar_version']; ?>
&edition=<?php echo $this->_tpl_vars['sugar_flavor']; ?>
&lang=<?php echo $this->_tpl_vars['current_language']; ?>
&help_module=<?php echo $this->_tpl_vars['current_module']; ?>
&help_action=<?php echo $this->_tpl_vars['current_action']; ?>
&key=<?php echo $this->_tpl_vars['server_unique_key']; ?>
"
                               class="utilsLink" target="_blank">
                                <?php echo $this->_tpl_vars['app_strings']['LNK_HELP']; ?>

                            </a>
                        </td>
                <?php endif; ?>
        <?php else: ?>
                <?php if ($this->_tpl_vars['other_text'] && $this->_tpl_vars['is_min_max'] == false): ?>
                    <td width="20"><img height="1" width="20" src="<?php echo $this->_tpl_vars['blankImageURL']; ?>
" alt=""></td>
                    <td valign="middle" nowrap width="100%"><?php echo $this->_tpl_vars['other_text']; ?>
</td>
                <?php else: ?>
                    <td width="100%"><img height="1" width="1" src="<?php echo $this->_tpl_vars['blankImageURL']; ?>
" alt=""></td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['show_help']): ?>
                    <td align="right" nowrap>
                        <?php if ($this->_tpl_vars['REQUEST']['action'] != 'EditView'): ?>
                        <a href="index.php?<?php echo $this->_tpl_vars['GLOBALS']['request_string']; ?>
" class="utilsLink">
                            <img src="<?php echo $this->_tpl_vars['printImageURL']; ?>
" alt="<?php echo $this->_tpl_vars['app_strings']['LBL_PRINT']; ?>
" border="0" align="absmiddle">
                        </a>
                        &nbsp;
                        <a href="index.php?<?php echo $this->_tpl_vars['GLOBALS']['request_string']; ?>
" class="utilsLink">
                            <?php echo $this->_tpl_vars['app_strings']['LNK_PRINT']; ?>
</a>
                        <?php endif; ?>
                        &nbsp;
                        <a href="index.php?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugar_version']; ?>
&edition=<?php echo $this->_tpl_vars['sugar_flavor']; ?>
&lang=<?php echo $this->_tpl_vars['current_language']; ?>
&help_module=<?php echo $this->_tpl_vars['current_module']; ?>
&help_action=<?php echo $this->_tpl_vars['current_action']; ?>
&key=<?php echo $this->_tpl_vars['server_unique_key']; ?>
"
                           class="utilsLink" target="_blank">
                            <img src="<?php echo $this->_tpl_vars['helpImageURL']; ?>
" alt="<?php echo $this->_tpl_vars['app_strings']['LBL_HELP']; ?>
" border="0" align="absmiddle">
                        </a>&nbsp;
                        <a href="index.php?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugar_version']; ?>
&edition=<?php echo $this->_tpl_vars['sugar_flavor']; ?>
&lang=<?php echo $this->_tpl_vars['current_language']; ?>
&help_module=<?php echo $this->_tpl_vars['current_module']; ?>
&help_action=<?php echo $this->_tpl_vars['current_action']; ?>
&key=<?php echo $this->_tpl_vars['server_unique_key']; ?>
"
                           class="utilsLink" target="_blank"><?php echo $this->_tpl_vars['app_strings']['LNK_HELP']; ?>
</a>
                    </td>
                <?php endif; ?>
        <?php endif; ?>
    </tr>
</table>
