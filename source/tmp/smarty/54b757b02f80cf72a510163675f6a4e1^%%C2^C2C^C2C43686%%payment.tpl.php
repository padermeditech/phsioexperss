<?php /* Smarty version 2.6.31, created on 2022-12-28 11:06:48
         compiled from page/checkout/payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxstyle', 'page/checkout/payment.tpl', 6, false),array('function', 'oxmultilang', 'page/checkout/payment.tpl', 26, false),array('function', 'oxprice', 'page/checkout/payment.tpl', 48, false),array('function', 'oxscript', 'page/checkout/payment.tpl', 92, false),array('function', 'oxgetseourl', 'page/checkout/payment.tpl', 338, false),array('modifier', 'oxmultilangassign', 'page/checkout/payment.tpl', 135, false),array('modifier', 'trim', 'page/checkout/payment.tpl', 137, false),array('modifier', 'cat', 'page/checkout/payment.tpl', 354, false),array('block', 'oxifcontent', 'page/checkout/payment.tpl', 349, false),array('insert', 'oxid_tracker', 'page/checkout/payment.tpl', 376, false),)), $this); ?>
<?php ob_start(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 3)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['oViewConf']->isModuleActive('oepaypal') && $this->_tpl_vars['oViewConf']->showPayPalBannerOnCheckoutPage()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal_installment.css')), $this);?>

    <?php $this->assign('basketAmount', $this->_tpl_vars['oxcmp_basket']->getPrice()); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "installment_banners.tpl", 'smarty_include_vars' => array('amount' => $this->_tpl_vars['basketAmount']->getPrice(),'selector' => $this->_tpl_vars['oViewConf']->getPayPalBannerPaymentPageSelector())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>


        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
        
            <?php if ($this->_tpl_vars['oView']->getAllSets()): ?>
                <?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" name="shipping" id="shipping" method="post">
                    <div class="hidden">
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
                        <input type="hidden" name="fnc" value="changeshipping">
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php if ($this->_tpl_vars['oView']->getAllSetsCnt() > 1): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SELECT_SHIPPING_METHOD'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'SELECTED_SHIPPING_CARRIER'), $this);?>
<?php endif; ?></h3>
                        </div>
                        <div class="panel-body">
                            
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="sShipSet" onchange="this.form.submit();">
                                        <?php $_from = $this->_tpl_vars['oView']->getAllSets(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ShipSetSelect'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ShipSetSelect']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sShipID'] => $this->_tpl_vars['oShippingSet']):
        $this->_foreach['ShipSetSelect']['iteration']++;
?>
                                            <option value="<?php echo $this->_tpl_vars['sShipID']; ?>
" <?php if ($this->_tpl_vars['oShippingSet']->blSelected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['oShippingSet']->oxdeliveryset__oxtitle->value; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                </div>
                                <noscript>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'UPDATE_SHIPPING_CARRIER'), $this);?>
</button>
                                    </div>
                                </noscript>
                            

                            <?php $this->assign('oDeliveryCostPrice', $this->_tpl_vars['oxcmp_basket']->getDeliveryCost()); ?>
                            <?php if ($this->_tpl_vars['oDeliveryCostPrice'] && $this->_tpl_vars['oDeliveryCostPrice']->getPrice() > 0): ?>
                                <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForDelivery')): ?>
                                    <div id="shipSetCost"><br>
                                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'CHARGES','suffix' => 'COLON'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCostPrice']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                            (<?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCostPrice']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
)
                                        </b>
                                    </div>
                                <?php else: ?>
                                    <div id="shipSetCost"><br>
                                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'CHARGES','suffix' => 'COLON'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCostPrice']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</b>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        

        
            <?php $this->assign('iPayError', $this->_tpl_vars['oView']->getPaymentError()); ?>

            <?php if ($this->_tpl_vars['iPayError'] == 1): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_COMPLETE_FIELDS_CORRECTLY'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == 2): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_AUTHORIZATION_FAILED'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == 4): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_UNAVAILABLE_SHIPPING_METHOD'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == 5): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_AUTHORIZATION_FAILED'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] >= 6): ?>
                <!--Add custom error message here-->
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_AUTHORIZATION_FAILED'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == -1): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_UNAVAILABLE_PAYMENT_ERROR'), $this);?>
 "<?php echo $this->_tpl_vars['oView']->getPaymentErrorText(); ?>
").</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == -2): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NO_SHIPPING_METHOD_FOUND'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == -3): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_SELECT_ANOTHER_PAYMENT'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == -4): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_BANK_CODE_INVALID'), $this);?>
</div>
            <?php elseif ($this->_tpl_vars['iPayError'] == -5): ?>
                <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PAYMENT_ACCOUNT_NUMBER_INVALID'), $this);?>
</div>
            <?php endif; ?>
        

        
            <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxpayment.min.js",'priority' => 10), $this);?>

            <?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

            <?php echo smarty_function_oxscript(array('add' => "$( '#payment' ).oxPayment();"), $this);?>

            <?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>

            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" class="form-horizontal js-oxValidate payment" id="payment" name="order" method="post" novalidate="novalidate">
                <div class="hidden">
                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                    <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                    <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
                    <input type="hidden" name="fnc" value="validatepayment">
                </div>

                <?php if ($this->_tpl_vars['oView']->getPaymentList()): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 id="paymentHeader" class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD'), $this);?>
</h3>
                        </div>
                        <div class="panel-body">
                            <?php $this->assign('inptcounter', "-1"); ?>
                            <?php $_from = $this->_tpl_vars['oView']->getPaymentList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['PaymentSelect'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['PaymentSelect']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sPaymentID'] => $this->_tpl_vars['paymentmethod']):
        $this->_foreach['PaymentSelect']['iteration']++;
?>
                                <?php $this->assign('inptcounter', ($this->_tpl_vars['inptcounter']+1)); ?>
                                <?php if ($this->_tpl_vars['sPaymentID'] == 'oxidpaypal' && $this->_tpl_vars['oViewConf']->isStandardCheckoutEnabled()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div class="well well-sm">
        <dl>
            <dt>
                <input id="payment_<?php echo $this->_tpl_vars['sPaymentID']; ?>
" type="radio" name="paymentid" value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                <?php if ($this->_tpl_vars['oView']->getCheckedPaymentId() == $this->_tpl_vars['paymentmethod']->oxpayments__oxid->value): ?>checked<?php endif; ?>>
                <label for="payment_<?php echo $this->_tpl_vars['sPaymentID']; ?>
"><b><?php echo $this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value; ?>
</b></label>
            </dt>
            <dd class="<?php if ($this->_tpl_vars['oView']->getCheckedPaymentId() == $this->_tpl_vars['paymentmethod']->oxpayments__oxid->value): ?>activePayment<?php endif; ?>">
                <?php if ($this->_tpl_vars['paymentmethod']->getPrice() && $this->_tpl_vars['paymentmethod']->oxpayments__oxaddsum->rawValue != 0): ?>
                    <?php if ($this->_tpl_vars['oxcmp_basket']->getPayCostNet()): ?>
                        <?php echo $this->_tpl_vars['paymentmethod']->getFNettoPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['paymentmethod']->getFPriceVat(); ?>

                    <?php else: ?>
                        <?php echo $this->_tpl_vars['paymentmethod']->getFBruttoPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

                    <?php endif; ?>
                <?php endif; ?>
                <div class="paypalDescBox">
                    <a href="#"><img class="paypalPaymentImg"
                                     src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_LOGO_IMG'), $this);?>
"
                                     border="0" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_PAYMENT_HELP_LINK_TEXT'), $this);?>
"></a>
                    <a href="#" class="paypalHelpIcon">?</a>
                    <?php $this->assign('paypalHelpLink', ((is_array($_tmp='OEPAYPAL_PAYMENT_HELP_LINK')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
                    <?php echo smarty_function_oxscript(array('add' => "$('.paypalPaymentImg, .paypalHelpIcon').click(function (){window.open('".($this->_tpl_vars['paypalHelpLink'])."','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=500, height=450');return false;});"), $this);?>

                    <?php if (((is_array($_tmp=$this->_tpl_vars['paymentmethod']->oxpayments__oxlongdesc)) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp))): ?>
                        <div class="paypalPaymentDesc">
                            <?php echo $this->_tpl_vars['paymentmethod']->oxpayments__oxlongdesc->getRawValue(); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                <p class="paypalExpressCheckoutMsg">
                    <input type="checkbox" name="displayCartInPayPal" value="1"
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                </p>
                <?php endif; ?>
            </dd>
        </dl>
    </div>
<?php elseif ($this->_tpl_vars['sPaymentID'] != 'oxidpaypal'): ?>
    <?php if ($this->_tpl_vars['oViewConf']->isKlarnaPaymentsEnabled() && $this->_tpl_vars['oView']->loadKlarnaPaymentWidget): ?>
    <?php if ($this->_tpl_vars['oView']->getCheckedPaymentId() == $this->_tpl_vars['paymentmethod']->oxpayments__oxid->value): ?>
        <?php $this->assign('is_checked', true); ?>
    <?php else: ?>
        <?php $this->assign('is_checked', false); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['sPaymentID'] == 'klarna_pay_later'): ?>
        <div class="well well-sm kp-outer">
            <dl>
                <dt>
                    <input class="kp-radio" id="kp-pl" data-payment_id="pay_later" type="radio" name="paymentid"
                           value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                           <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                    <label for="kp-pl"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                    <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">

                </dt>
                <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_PAY_LATER_SUBTITLE'), $this);?>
</dt>
                <dt>
                    <?php if ($this->_tpl_vars['kpError']): ?>
                        <div class="kp-method alert alert-info"
                             style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                    <?php else: ?>
                        <div id="pay_later" class="kp-method" style="display: none;"></div>
                    <?php endif; ?>
                </dt>
            </dl>
        </div>
    <?php elseif ($this->_tpl_vars['sPaymentID'] == 'klarna_slice_it'): ?>
        <div class="well well-sm kp-outer">
            <dl>
                <dt>
                    <input class="kp-radio" id="kp-pot" data-payment_id="pay_over_time" type="radio"
                           name="paymentid"
                           value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                           <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                    <label for="kp-pot"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                    <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">
                </dt>
                <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_SLICE_IT_SUBTITLE'), $this);?>
</dt>
                <dt>
                    <?php if ($this->_tpl_vars['kpError']): ?>
                        <div class="kp-method alert alert-info"
                             style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                    <?php else: ?>
                        <div id="pay_over_time" class="kp-method" style="display: none;"></div>
                    <?php endif; ?>
                </dt>
            </dl>
        </div>
    <?php elseif ($this->_tpl_vars['sPaymentID'] == 'klarna_directdebit'): ?>
    <div class="well well-sm kp-outer">
        <dl>
            <dt>
                <input class="kp-radio" id="kp-dd" data-payment_id="direct_debit" type="radio"
                       name="paymentid"
                       value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                       <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                <label for="kp-dd"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">
            </dt>
            <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_PAY_NOW_SUBTITLE'), $this);?>
</dt>
            <dt>
                <?php if ($this->_tpl_vars['kpError']): ?>
                <div class="kp-method alert alert-info"
                     style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                <?php else: ?>
                <div id="direct_debit" class="kp-method" style="display: none;"></div>
                <?php endif; ?>
            </dt>
        </dl>
    </div>
    <?php elseif ($this->_tpl_vars['sPaymentID'] == 'klarna_card'): ?>
    <div class="well well-sm kp-outer">
        <dl>
            <dt>
                <input class="kp-radio" id="kp-dd" data-payment_id="card" type="radio"
                       name="paymentid"
                       value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                       <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                <label for="kp-dd"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">
            </dt>
            <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_PAY_NOW_SUBTITLE'), $this);?>
</dt>
            <dt>
                <?php if ($this->_tpl_vars['kpError']): ?>
                <div class="kp-method alert alert-info"
                     style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                <?php else: ?>
                <div id="card" class="kp-method" style="display: none;"></div>
                <?php endif; ?>
            </dt>
        </dl>
    </div>
    <?php elseif ($this->_tpl_vars['sPaymentID'] == 'klarna_sofort'): ?>
    <div class="well well-sm kp-outer">
        <dl>
            <dt>
                <input class="kp-radio" id="kp-so" data-payment_id="direct_bank_transfer" type="radio"
                       name="paymentid"
                       value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                       <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                <label for="kp-so"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">
            </dt>
            <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_PAY_NOW_SUBTITLE'), $this);?>
</dt>
            <dt>
                <?php if ($this->_tpl_vars['kpError']): ?>
                <div class="kp-method alert alert-info"
                     style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                <?php else: ?>
                <div id="direct_bank_transfer" class="kp-method" style="display: none;"></div>
                <?php endif; ?>
            </dt>
        </dl>
    </div>
    <?php elseif ($this->_tpl_vars['sPaymentID'] == 'klarna_pay_now'): ?>
        <div class="well well-sm kp-outer">
            <dl>
                <dt>
                    <input class="kp-radio" id="kp-pn" data-payment_id="pay_now" type="radio"
                           name="paymentid"
                           value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
"
                           <?php if ($this->_tpl_vars['is_checked']): ?>checked<?php endif; ?>>
                    <label for="kp-pn"><b><?php echo $this->_tpl_vars['oView']->removeKlarnaPrefix($this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value); ?>
</b></label>
                    <img src="<?php echo $this->_tpl_vars['paymentmethod']->getBadgeUrl(); ?>
">
                </dt>
                <dt style="font-weight: normal"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_PAY_NOW_SUBTITLE'), $this);?>
</dt>
                <dt>
                    <?php if ($this->_tpl_vars['kpError']): ?>
                        <div class="kp-method alert alert-info"
                             style="<?php if (! $this->_tpl_vars['is_checked']): ?>display: none; <?php endif; ?>max-width:700px"><?php echo $this->_tpl_vars['kpError']; ?>
</div>
                    <?php else: ?>
                        <div id="pay_now" class="kp-method" style="display: none;"></div>
                    <?php endif; ?>
                </dt>
            </dl>
        </div>
    <?php else: ?>
        
                                    <div class="well well-sm">
                                        <?php if ($this->_tpl_vars['sPaymentID'] == 'oxidcashondel'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxidcashondel.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php elseif ($this->_tpl_vars['sPaymentID'] == 'oxidcreditcard'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxidcreditcard.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php elseif ($this->_tpl_vars['sPaymentID'] == 'oxiddebitnote'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxiddebitnote.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php else: ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_other.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php endif; ?>
                                    </div>
                                
    <?php endif; ?>
<?php else: ?>
    
                                    <div class="well well-sm">
                                        <?php if ($this->_tpl_vars['sPaymentID'] == 'oxidcashondel'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxidcashondel.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php elseif ($this->_tpl_vars['sPaymentID'] == 'oxidcreditcard'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxidcreditcard.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php elseif ($this->_tpl_vars['sPaymentID'] == 'oxiddebitnote'): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_oxiddebitnote.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php else: ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/payment_other.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php endif; ?>
                                    </div>
                                
<?php endif; ?>

<?php endif; ?>

                            <?php endforeach; endif; unset($_from); ?>

                        </div>
                    </div>

                    
                        <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                            <div class="alert alert-info">
                                <b><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</b>
                            </div>
                        <?php else: ?>
                            <div class="well well-sm cart-buttons">
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getOrderLink()), $this);?>
" class="btn btn-default pull-left prevStep submitButton largeButton" id="paymentBackStepBottom"><i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                                <button type="submit" name="userform" class="btn btn-primary pull-right submitButton nextStep largeButton" id="paymentNextStepBottom"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i></button>
                                <div class="clearfix"></div>
                            </div>
                        <?php endif; ?>
                    

                <?php elseif ($this->_tpl_vars['oView']->getEmptyPayment()): ?>
                    
                        <div class="lineBlock"></div>
                        <h3 id="paymentHeader" class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_INFORMATION'), $this);?>
</h3>
                        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxnopaymentmethod','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        <input type="hidden" name="paymentid" value="oxempty">
                        <div class="lineBox clear">
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="btn btn-default pull-left prevStep submitButton largeButton"><i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                            <button type="submit" name="userform" class="btn btn-primary pull-right submitButton nextStep largeButton" id="paymentNextStepBottom"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i></button>
                        </div>
                    
                <?php endif; ?>
            </form>
        

<?php if ($this->_tpl_vars['oViewConf']->isKlarnaPaymentsEnabled() && $this->_tpl_vars['oView']->loadKlarnaPaymentWidget): ?>
    <div class="loading" style="display: none;">Loading&#8230;</div>
    <div class="kp-method alert alert-info tcklarna-message"
         style="display: none; max-width:700px"><?php echo smarty_function_oxmultilang(array('ident' => 'KP_NOT_AVAILABLE_FOR_COMPANIES'), $this);?>
</div>
    <script>
        var tcKlarnaClientToken = "<?php echo $this->_tpl_vars['client_token']; ?>
";
        var tcKlarnaIsB2B = "<?php echo $this->_tpl_vars['tcKlarnaIsB2B']; ?>
";
    </script>
    <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/tcklarna_payments_handler.js')), $this);?>

    <?php echo smarty_function_oxscript(array('include' => "https://x.klarnacdn.net/kp/lib/v1/api.js"), $this);?>

    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/css/tcklarna_payments.css')), $this);?>

<?php endif; ?>
    

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>