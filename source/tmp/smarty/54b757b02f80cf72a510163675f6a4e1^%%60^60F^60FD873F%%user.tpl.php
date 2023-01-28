<?php /* Smarty version 2.6.31, created on 2022-12-28 11:07:12
         compiled from page/checkout/user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'page/checkout/user.tpl', 14, false),array('modifier', 'trim', 'page/checkout/user.tpl', 14, false),array('modifier', 'oxescape', 'page/checkout/user.tpl', 14, false),array('function', 'oxmultilang', 'page/checkout/user.tpl', 20, false),array('function', 'oxstyle', 'page/checkout/user.tpl', 30, false),array('function', 'oxscript', 'page/checkout/user.tpl', 74, false),array('insert', 'oxid_tracker', 'page/checkout/user.tpl', 101, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ""); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 2)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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

    
        <?php if (! $this->_tpl_vars['oxcmp_user'] && ! $this->_tpl_vars['oView']->getLoginOption()): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/options.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        
            <?php if (! $this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oView']->getLoginOption() == 1): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_noregistration.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        

        
            <?php if (! $this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oView']->getLoginOption() == 3): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_registration.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        

        
            <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_change.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        
    
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
    
        <?php if (! $this->_tpl_vars['oxcmp_user'] && ! $this->_tpl_vars['oView']->getLoginOption()): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/options.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        
            <?php if (! $this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oView']->getLoginOption() == 1): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_noregistration.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        

        
            <?php if (! $this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oView']->getLoginOption() == 3): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_registration.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        

        
            <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_checkout_change.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        
    
<?php endif; ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>