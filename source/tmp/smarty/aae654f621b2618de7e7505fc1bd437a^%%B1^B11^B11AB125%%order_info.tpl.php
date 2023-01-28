<?php /* Smarty version 2.6.31, created on 2022-12-28 11:29:11
         compiled from include/order_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'include/order_info.tpl', 5, false),)), $this); ?>
<table border="0" cellspacing="0" cellpadding="0" id="order.info">

  <?php if ($this->_tpl_vars['edit']->isNettoMode()): ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INETTO'), $this);?>
</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalNetSum(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DISCOUNT'), $this);?>
&nbsp;&nbsp;</td>
    <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedDiscount(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php $_from = $this->_tpl_vars['aProductVats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iVat'] => $this->_tpl_vars['dVatPrice']):
?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IVAT'), $this);?>
 (<?php echo $this->_tpl_vars['iVat']; ?>
%)</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['dVatPrice']; ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IBRUTTO'), $this);?>
</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalBrutSum(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php else: ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IBRUTTO'), $this);?>
</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalBrutSum(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>

  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DISCOUNT'), $this);?>
&nbsp;&nbsp;</td>
    <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedDiscount(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INETTO'), $this);?>
</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalNetSum(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php $_from = $this->_tpl_vars['aProductVats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iVat'] => $this->_tpl_vars['dVatPrice']):
?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IVAT'), $this);?>
 (<?php echo $this->_tpl_vars['iVat']; ?>
%)</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['dVatPrice']; ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['edit']->oxorder__oxvoucherdiscount->value): ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_VOUCHERS'), $this);?>
</td>
    <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedTotalVouchers(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DELIVERYCOST'), $this);?>
&nbsp;&nbsp;</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedeliveryCost(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_PAYCOST'), $this);?>
&nbsp;&nbsp;</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedPayCost(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php if ($this->_tpl_vars['edit']->oxorder__oxwrapcost->value): ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_WRAPPING'), $this);?>
&nbsp;<?php if ($this->_tpl_vars['wrapping']): ?>(<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxname->value; ?>
)<?php endif; ?>&nbsp;</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedWrapCost(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['edit']->oxorder__oxgiftcardcost->value): ?>
  <tr>
    <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_CARD'), $this);?>
&nbsp;<?php if ($this->_tpl_vars['giftCard']): ?>(<?php echo $this->_tpl_vars['giftCard']->oxwrapping__oxname->value; ?>
)<?php endif; ?>&nbsp;</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedGiftCardCost(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>
  <?php endif; ?>
  
  
  <tr>
    <td class="edittext" height="25"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SUMTOTAL'), $this);?>
&nbsp;&nbsp;</td>
    <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalOrderSum(); ?>
</b></td>
    <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
  </tr>  
  
</table>