<?php /* Smarty version 2.6.31, created on 2023-01-02 10:56:54
         compiled from form/user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/user.tpl', 1, false),array('function', 'oxmultilang', 'form/user.tpl', 42, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>


<?php ob_start(); ?>
    <?php echo '$(\'input,select,textarea\').not(\'[type=submit]\').jqBootstrapValidation({filter: function(){if( $( \'#shippingAddress\' ).css( \'display\' ) == \'block\' ){return $(this).is(\':visible, .selectpicker[required]\');}else{return $(this).is(\':visible, #addressForm .selectpicker[required]\');}}});'; ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sValidationJS', ob_get_contents());ob_end_clean(); ?>

<?php echo smarty_function_oxscript(array('add' => $this->_tpl_vars['sValidationJS']), $this);?>


    <form class="js-oxValidate form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="order" method="post" novalidate="novalidate">
        
            <?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>
            <div class="addressCollumns">
                <div class="hidden">
                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                    <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                    <input type="hidden" name="fnc" value="changeuser_testvalues">
                    <input type="hidden" name="cl" value="account_user">
                    <input type="hidden" name="CustomError" value='user'>
                    <input type="hidden" name="blshowshipaddress" value="1">
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                            <?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>

                            <button id="userChangeAddress" class="btn btn-warning btn-xs hasTooltip pull-right" name="changeBillAddress" type="button" title="<?php echo smarty_function_oxmultilang(array('ident' => 'CHANGE'), $this);?>
">
                                <i class="fa fa-pencil"></i>
                            </button>
                        
                    </div>
                    <div class="panel-body">
                        
                            
                                <div id="addressText">
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/billing_address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            
                            
                                <div style="display: none;" id="addressForm">
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_billing.tpl", 'smarty_include_vars' => array('noFormSubmit' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            
                        
                    </div>
                </div>

                <?php echo smarty_function_oxscript(array('add' => "$('#userChangeAddress').click( function() { $('#addressForm, #addressText').toggle();return false;});"), $this);?>


                                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESSES'), $this);?>

                            
                        </div>
                        <div class="panel-body">
                            <div class="checkbox">
                                
                                    <label>
                                        <input type="checkbox" name="blshowshipaddress" id="showShipAddress" <?php if (! $this->_tpl_vars['oView']->showShipAddress()): ?>checked<?php endif; ?> value="0"> <?php echo smarty_function_oxmultilang(array('ident' => 'USE_BILLINGADDRESS_FOR_SHIPPINGADDRESS'), $this);?>

                                    </label>
                                
                            </div>
                            
                                <div id="shippingAddress" class="spacer" <?php if (! $this->_tpl_vars['oView']->showShipAddress()): ?> style="display: none;" <?php endif; ?>>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_shipping.tpl", 'smarty_include_vars' => array('noFormSubmit' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            
                        </div>
                    </div>
                    <?php echo smarty_function_oxscript(array('add' => "$('#showShipAddress').change( function() { $('#shippingAddress').toggle($(this).is(':not(:checked)')); });"), $this);?>

                
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <button id="accUserSaveTop" class="btn btn-primary" name="userform" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'SAVE'), $this);?>
</button>
                </div>
            </div>
        
    </form>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/delete_shipping_address_modal.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>