<?php /* Smarty version 2.6.31, created on 2022-12-28 19:51:41
         compiled from page/checkout/thankyou.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/checkout/thankyou.tpl', 11, false),array('function', 'oxscript', 'page/checkout/thankyou.tpl', 17, false),array('function', 'oxgetseourl', 'page/checkout/thankyou.tpl', 35, false),array('modifier', 'cat', 'page/checkout/thankyou.tpl', 38, false),array('insert', 'oxid_tracker', 'page/checkout/thankyou.tpl', 52, false),)), $this); ?>
<?php ob_start(); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 5)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php $this->assign('order', $this->_tpl_vars['oView']->getOrder()); ?>
        <?php $this->assign('basket', $this->_tpl_vars['oView']->getBasket()); ?>

        <div id="thankyouPage">
            <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU'), $this);?>
</h3>

            <?php if ($this->_tpl_vars['sKlarnaIframe']): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'REGISTERED_YOUR_ORDER','args' => $this->_tpl_vars['klOrder']->oxorder__oxordernr->value), $this);?>

    <div class="klarna-iframe-container">
        <?php echo $this->_tpl_vars['sKlarnaIframe']; ?>

        <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/tcklarna_checkout_handler.js'),'priority' => 10), $this);?>

    </div>
<?php else: ?>
    
                <?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU_FOR_ORDER'), $this);?>
 <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value; ?>
. <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'REGISTERED_YOUR_ORDER','args' => $this->_tpl_vars['order']->oxorder__oxordernr->value), $this);?>
 <br>
                <?php if (! $this->_tpl_vars['oView']->getMailError()): ?>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_YOU_RECEIVED_ORDER_CONFIRM'), $this);?>
<br>
                <?php else: ?><br>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_CONFIRMATION_NOT_SUCCEED'), $this);?>
<br>
                <?php endif; ?>
                <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_WE_WILL_INFORM_YOU'), $this);?>
<br><br>
            
<?php endif; ?>

            
                <?php echo smarty_function_oxmultilang(array('ident' => 'YOU_CAN_GO'), $this);?>

                <a id="backToShop" rel="nofollow" href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getHomeLink()), $this);?>
" class="link"><?php echo smarty_function_oxmultilang(array('ident' => 'BACK_TO_START_PAGE'), $this);?>
</a>
                <?php if ($this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OR'), $this);?>

                    <a id="orderHistory" rel="nofollow" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_order") : smarty_modifier_cat($_tmp, "cl=account_order"))), $this);?>
" class="link"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECK_YOUR_ORDER_HISTORY'), $this);?>
</a>.
                <?php endif; ?>
            

            
            

            <?php if ($this->_tpl_vars['oView']->getAlsoBoughtTheseProducts()): ?>
                <br><br>
                <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'WHO_BOUGHT_ALSO_BOUGHT'), $this);?>
</h1>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/list.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['oView']->getListDisplayType(),'listId' => 'alsoBoughtThankyou','products' => $this->_tpl_vars['oView']->getAlsoBoughtTheseProducts(),'blDisableToCart' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        </div>
    
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>