<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:53
         compiled from tcklarna_checkout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxstyle', 'tcklarna_checkout.tpl', 3, false),array('function', 'oxmultilang', 'tcklarna_checkout.tpl', 23, false),array('function', 'oxscript', 'tcklarna_checkout.tpl', 42, false),array('modifier', 'count', 'tcklarna_checkout.tpl', 26, false),)), $this); ?>
<?php ob_start(); ?>
    <?php if (! $this->_tpl_vars['confError']): ?>
        <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/css/tcklarna_style.css')), $this);?>


        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tcklarna_country_select_popup.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['sKlarnaIframe']): ?>
            <?php $this->assign('savedAddresses', $this->_tpl_vars['oView']->getFormattedUserAddresses()); ?>
            <div class="container klarna-outside-forms">
                <div class="row kco-style">
                    <?php if (! $this->_tpl_vars['oViewConf']->isUserLoggedIn()): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tcklarna_checkout_login_box.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['savedAddresses'] && $this->_tpl_vars['shippingAddressAllowed']): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tcklarna_checkout_address_box.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tcklarna_checkout_voucher_box.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <?php if ($this->_tpl_vars['blShowCountryReset']): ?>
                    <div class="row kco-style">
                        <div class="col-md-6">
                            <p id="resetCountry" style="margin-left: 0">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_CHOOSE_YOUR_NOT_SUPPORTED_COUNTRY'), $this);?>

                            </p>
                        </div>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['oView']->getNonKlarnaCountries())) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0): ?>
                            <div class="col-md-6">
                                <select class="form-control js-country-select" id="other-countries">
                                    <option disabled selected><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_MORE_COUNTRIES'), $this);?>
</option>
                                    <?php $_from = $this->_tpl_vars['oView']->getNonKlarnaCountries(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['otherCountries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['otherCountries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['country']):
        $this->_foreach['otherCountries']['iteration']++;
?>
                                        <option value="<?php echo $this->_tpl_vars['country']->oxcountry__oxisoalpha2->value; ?>
"><?php echo $this->_tpl_vars['country']->oxcountry__oxtitle->value; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="klarna-iframe-container">
                <?php echo $this->_tpl_vars['sKlarnaIframe']; ?>

                                <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/tcklarna_checkout_handler.js'),'priority' => 10), $this);?>

            </div>
        <?php else: ?>
            <div class="kco-placeholder"></div>
            <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/tcklarna_checkout_handler.js'),'priority' => 10), $this);?>

            <?php echo smarty_function_oxscript(array('add' => "$('#myModal').modal('show');"), $this);?>

        <?php endif; ?>

    <?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>