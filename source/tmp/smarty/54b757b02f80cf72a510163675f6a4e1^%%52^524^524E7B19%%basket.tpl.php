<?php /* Smarty version 2.6.31, created on 2022-12-28 10:45:16
         compiled from page/checkout/basket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/checkout/basket.tpl', 12, false),array('function', 'oxstyle', 'page/checkout/basket.tpl', 19, false),array('function', 'oxscript', 'page/checkout/basket.tpl', 110, false),array('function', 'oxid_include_widget', 'page/checkout/basket.tpl', 135, false),array('modifier', 'strip_tags', 'page/checkout/basket.tpl', 62, false),array('modifier', 'trim', 'page/checkout/basket.tpl', 62, false),array('modifier', 'oxescape', 'page/checkout/basket.tpl', 62, false),array('insert', 'oxid_tracker', 'page/checkout/basket.tpl', 266, false),)), $this); ?>
<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<?php ob_start(); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

        <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
            
                <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                <div class="spacer"></div>
            
        <?php endif; ?>

        <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            <?php if ($this->_tpl_vars['oViewConf']->isModuleActive('oepaypal') && $this->_tpl_vars['oViewConf']->showPayPalBannerOnCheckoutPage()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal_installment.css')), $this);?>

    <?php $this->assign('basketAmount', $this->_tpl_vars['oxcmp_basket']->getPrice()); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "installment_banners.tpl", 'smarty_include_vars' => array('amount' => $this->_tpl_vars['basketAmount']->getPrice(),'selector' => $this->_tpl_vars['oViewConf']->getPayPalBannerPaymentPageSelector())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>


                <div class="spacer"></div>
                <div class="alert alert-danger" id="empty-basket-warning">
                    <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" title="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
" class="btn btn-default"><i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'DD_BASKET_BACK_TO_SHOP'), $this);?>
</a>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>

                </div>
            

        <?php else: ?>
            
                <div class="well well-sm cart-buttons">
                    
                        <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-left">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                </div>
                                <button type="submit" class="btn btn-default submitButton largeButton pull-left">
                                    <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                                </button>
                            </form>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" class="btn btn-default submitButton largeButton pull-left">
                                <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                            </a>
                        <?php endif; ?>
                    

                    <?php if (! $this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        <?php ob_start(); ?>
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher">
    <input type="hidden" name="fnc" value="setExpressCheckout">
    <input type="hidden" name="oePayPalRequestedControllerKey" value="<?php echo $this->_tpl_vars['oView']->getClassKey(); ?>
">
    <input type="image" name="paypalExpressCheckoutButtonECS" class="paypalCheckoutBtn"
           src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
           title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">
        <div class="paypalExpressCheckoutMsg">
            <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                <a href="#" class="paypalHelpIcon small"
                   style="position: relative; float:left; display:inline-block; left: 0; margin-right:8px;">?</a>
                <div class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                </div>
                <input type="checkbox" name="displayCartInPayPal"
                   value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

            <?php endif; ?>
        </div>
<?php $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent'] = ob_get_contents(); ob_end_clean(); ?>

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabled() && ( ( 'user' != $this->_tpl_vars['oView']->getClassKey() ) || ( ( 'user' == $this->_tpl_vars['oView']->getClassKey() && ! $this->_tpl_vars['oxcmp_user'] ) ) )): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-right">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
    <?php if ('user' == $this->_tpl_vars['oView']->getClassKey()): ?>
        <div class="clearfix"></div>
        <div class="lineBox paypalExpressCheckoutBoxUser">
            <div id="paypalExpressCheckoutBox" class="col-xs-12">
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                    <div class="panel panel-default oePayPalECSForm">
                        <?php echo $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent']; ?>

                    </div>
                </form>
             </div>
        </div>
    <?php else: ?>
        <div id="paypalExpressCheckoutBox" class="paypalExpressCheckoutBox">
            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                <div>
                    <?php echo $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent']; ?>

                </div>
            </form>
        </div>
    <?php endif; ?>
    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").hover(function (){$(this).parent(".paypalExpressCheckoutMsg").children(".paypalHelpBox").toggle();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").click(function (){return false;});'), $this);?>

<?php else: ?>
    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-right">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
<?php endif; ?>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            

<?php $this->assign('_product', $this->_tpl_vars['oView']->getAdvancedCheckoutTrendingProduct()); ?>

<?php if ($this->_tpl_vars['_product']): ?>
<div class="trending-product">
    <div class="trending-product-header"><span><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDCHECKOUT_OUR_TIP'), $this);?>
</span></div>
    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','isMinibasketAccessory' => 1,'defaultAmountInputValue' => 1,'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'sWidgetType' => 'product','sListType' => 'listitem_grid','iIndex' => $this->_tpl_vars['testid'],'blDisableToCart' => 1,'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => $this->_tpl_vars['showMainLink'],'recommid' => $this->_tpl_vars['recommid'],'owishid' => $this->_tpl_vars['owishid'],'toBasketFunction' => $this->_tpl_vars['toBasketFunction'],'removeFunction' => $this->_tpl_vars['removeFunction'],'altproduct' => $this->_tpl_vars['altproduct'],'inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1,'testid' => $this->_tpl_vars['testid']), $this);?>

</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['oViewConf']->isModuleActive('oepaypal') && $this->_tpl_vars['oViewConf']->showPayPalBannerOnCheckoutPage()): ?>
    <div id="basket-paypal-installment-banner"></div>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal_installment.css')), $this);?>

    <?php $this->assign('basketAmount', $this->_tpl_vars['oxcmp_basket']->getPrice()); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "installment_banners.tpl", 'smarty_include_vars' => array('amount' => $this->_tpl_vars['basketAmount']->getPrice(),'selector' => $this->_tpl_vars['oViewConf']->getPayPalBannerCartPageSelector())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>


<?php if ($this->_tpl_vars['openAmazonLogin']): ?>
    <script>
        window.onload = clickWidgetButton;
        function clickWidgetButton(){
            var theButton = document.getElementById('OffAmazonPaymentsWidgets0');
            theButton.click();
        }
    </script>
<?php endif; ?>

<?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/css/tcklarna_style.css')), $this);?>


            <div class="lineBox">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/basketcontents.tpl", 'smarty_include_vars' => array('editable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>

            
                <div class="well well-sm cart-buttons">
                    

                    
                        <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-left">
                                <div class="backtoshop">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                    <button type="submit" class="btn btn-default submitButton largeButton pull-left">
                                        <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                                    </button>
                                </div>
                            </form>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" class="btn btn-default submitButton largeButton pull-left">
                                <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                            </a>
                        <?php endif; ?>
                    

                    <?php if (! $this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        <?php ob_start(); ?>
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher">
    <input type="hidden" name="fnc" value="setExpressCheckout">
    <input type="hidden" name="oePayPalRequestedControllerKey" value="<?php echo $this->_tpl_vars['oView']->getClassKey(); ?>
">
    <input type="image" name="paypalExpressCheckoutButtonECS" class="paypalCheckoutBtn"
           src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
           title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">
        <div class="paypalExpressCheckoutMsg">
            <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                <a href="#" class="paypalHelpIcon small"
                   style="position: relative; float:left; display:inline-block; left: 0; margin-right:8px;">?</a>
                <div class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                </div>
                <input type="checkbox" name="displayCartInPayPal"
                   value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

            <?php endif; ?>
        </div>
<?php $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent'] = ob_get_contents(); ob_end_clean(); ?>

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabled() && ( ( 'user' != $this->_tpl_vars['oView']->getClassKey() ) || ( ( 'user' == $this->_tpl_vars['oView']->getClassKey() && ! $this->_tpl_vars['oxcmp_user'] ) ) )): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
    <?php if ('user' == $this->_tpl_vars['oView']->getClassKey()): ?>
        <div class="clearfix"></div>
        <div class="lineBox paypalExpressCheckoutBoxUser">
            <div id="paypalExpressCheckoutBox" class="col-xs-12">
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                    <div class="panel panel-default oePayPalECSForm">
                        <?php echo $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent']; ?>

                    </div>
                </form>
             </div>
        </div>
    <?php else: ?>
        <div id="paypalExpressCheckoutBox" class="paypalExpressCheckoutBox">
            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                <div>
                    <?php echo $this->_smarty_vars['capture']['paypalExpressCheckoutFormContent']; ?>

                </div>
            </form>
        </div>
    <?php endif; ?>
    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").hover(function (){$(this).parent(".paypalExpressCheckoutMsg").children(".paypalHelpBox").toggle();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").click(function (){return false;});'), $this);?>

<?php else: ?>
    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
<?php endif; ?>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            
        <?php endif; ?>
        <?php if ($this->_tpl_vars['oView']->isWrapping()): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/wrapping.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>