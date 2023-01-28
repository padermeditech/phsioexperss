<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:53
         compiled from tcklarna_checkout_voucher_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tcklarna_checkout_voucher_data.tpl', 7, false),array('function', 'oxprice', 'tcklarna_checkout_voucher_data.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['oxcmp_basket']->getVoucherDiscValue()): ?>
    <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    <?php $_from = $this->_tpl_vars['oxcmp_basket']->getVouchers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Voucher'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Voucher']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sVoucher']):
        $this->_foreach['Voucher']['iteration']++;
?>
    <div class="couponData">
        <strong>
            <span>
                <?php echo smarty_function_oxmultilang(array('ident' => 'COUPON'), $this);?>
&nbsp;(<?php echo smarty_function_oxmultilang(array('ident' => 'NUMBER_2'), $this);?>
 <?php echo $this->_tpl_vars['sVoucher']->sVoucherNr; ?>
)
            </span>

            <a href="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
&amp;cl=KlarnaAjax&amp;fnc=removeVoucher&amp;voucherId=<?php echo $this->_tpl_vars['sVoucher']->sVoucherId; ?>
" class="removeFn text-danger" rel="nofollow">
                <i class="fa fa-times"></i>
                <?php echo smarty_function_oxmultilang(array('ident' => 'REMOVE'), $this);?>

            </a>

            <span id="voucherAmount">
                <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['sVoucher']->dVoucherdiscount*-1,'currency' => $this->_tpl_vars['currency']), $this);?>

            </span>
        </strong>
    </div>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>