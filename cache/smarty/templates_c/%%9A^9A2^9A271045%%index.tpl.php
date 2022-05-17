<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:45
         compiled from modules/Administration/index.tpl */ ?>


<div class="dashletPanelMenu wizard">
<div class="bd">

		<div class="screen admin-panel">
<?php $_from = $this->_tpl_vars['ADMIN_GROUP_HEADER']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['val1']):
?>

   <?php if (isset ( $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][1] )): ?>
   <p><?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][0]; ?>
<?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][1]; ?>

   <table class="other view">

   <?php else: ?>
   <p><?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][0]; ?>
<?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][2]; ?>

   <table class="other view">
   <?php endif; ?>

    <?php $this->assign('i', 0); ?>
    <?php $_from = $this->_tpl_vars['VALUES_3_TAB'][$this->_tpl_vars['j']]; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link_idx'] => $this->_tpl_vars['admin_option']):
?>
        <tr>
            <?php if (isset ( $this->_tpl_vars['COLNUM'][$this->_tpl_vars['j']][$this->_tpl_vars['i']] )): ?>
                <td width="20%" scope="row">
                    <span class="suitepicon suitepicon-admin-<?php echo $this->_tpl_vars['ICONS'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
"></span>
                    <a id='<?php echo $this->_tpl_vars['ID_TAB'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
' href='<?php echo $this->_tpl_vars['ITEM_URL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
' class="tabDetailViewDL2Link"><?php echo $this->_tpl_vars['ITEM_HEADER_LABEL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</a>
                </td>
                <td width="30%"><?php echo $this->_tpl_vars['ITEM_DESCRIPTION'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</td>
            <?php else: ?>
                <td width="20%" scope="row">&nbsp;</td>
                <td width="30%">&nbsp;</td>
            <?php endif; ?>
        </tr>
    <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
    <?php endforeach; endif; unset($_from); ?>

</table>
<p/>
<?php endforeach; endif; unset($_from); ?>

</div>
</div>

</div>

