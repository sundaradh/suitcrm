<?php /* Smarty version 2.6.33, created on 2022-05-08 12:43:43
         compiled from include/ListView/ListViewButtons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/ListView/ListViewButtons.tpl', 4, false),array('function', 'eval', 'include/ListView/ListViewButtons.tpl', 7, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['form']['buttons'] )): ?>
<ul class="list-view-action-buttons">

    <?php echo smarty_function_counter(array('assign' => 'num_action_buttons','start' => 0,'print' => false), $this);?>

    <?php if (count ( $this->_tpl_vars['form']['buttons'] ) > $this->_tpl_vars['num_action_buttons']): ?>
        <?php $_from = $this->_tpl_vars['form']['buttons']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
        <?php if (is_array ( $this->_tpl_vars['button'] ) && $this->_tpl_vars['button']['customCode']): ?><li><?php echo smarty_function_eval(array('var' => $this->_tpl_vars['button']['customCode']), $this);?>
 </li><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
</ul>
<?php endif; ?>