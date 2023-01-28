<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:53
         compiled from tcklarna_checkout_voucher_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tcklarna_checkout_voucher_box.tpl', 8, false),)), $this); ?>
<div class="col-sm-<?php if ($this->_tpl_vars['oViewConf']->isUserLoggedIn() && ( $this->_tpl_vars['savedAddresses'] == false || ! $this->_tpl_vars['shippingAddressAllowed'] )): ?>12<?php else: ?>6<?php endif; ?>">
    <?php $this->assign('couponUsed_1', $this->_tpl_vars['oViewConf']->getShowVouchers()); ?>
    <?php $this->assign('couponUsed_2', $this->_tpl_vars['oxcmp_basket']->getVoucherDiscValue()); ?>
    <div class="drop-container <?php if ($this->_tpl_vars['couponUsed_1'] && $this->_tpl_vars['couponUsed_2']): ?>active<?php endif; ?>" id="klarnaVouchersWidget">
        <div class="drop-trigger">
            <div class="klarna-label">
                <span class="glyphicon glyphicon-star pull-left" aria-hidden="true"></span>
                <span class="klarna-voucher-label"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_OUTSIDE_VOUCHER'), $this);?>
</span>
                <span class="glyphicon glyphicon-menu-down pull-right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="drop-content" <?php if ($this->_tpl_vars['couponUsed_1'] && $this->_tpl_vars['couponUsed_2']): ?>style="display: block;"<?php endif; ?>">
            <div class="voucherData">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tcklarna_checkout_voucher_data.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div>
                <form name="voucher" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" role="form">
                    <div class="" id="coupon">
                        <div class="hidden">
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <input type="hidden" name="cl" value="KlarnaAjax">
                            <input type="hidden" name="fnc" value="addVoucher">
                            <input type="hidden" name="CustomError" value="basket">
                        </div>

                        <div class="form-group">
                            <label class="req sr-only"
                                   for="input_voucherNr"><?php echo smarty_function_oxmultilang(array('ident' => 'ENTER_COUPON_NUMBER'), $this);?>
</label>

                            <input type="text" name="voucherNr" size="30"
                                   class="form-control"
                                   id="input_voucherNr"
                                   placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'ENTER_COUPON_NUMBER'), $this);?>
"
                                   required="required">
                        </div>
                        <div class="form-group">

                            <button type="submit" id="submitVoucher"
                                    class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'REDEEM_COUPON'), $this);?>

                            </button>
                            <div class="help-block"></div>
                        </div>
                        <div class="help-block"></div>
                    </div>
                </form>
            </div>
    </div>
</div>
</div>