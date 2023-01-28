<?php /* Smarty version 2.6.31, created on 2023-01-03 15:00:23
         compiled from tcklarna_checkout_address_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tcklarna_checkout_address_box.tpl', 6, false),)), $this); ?>
<div class="col-sm-6">
    <div class="drop-container" id="klarnaAddressWidget">
        <div class="drop-trigger">
            <div class="klarna-label">
                <span class="glyphicon glyphicon-book pull-left" aria-hidden="true"></span>
                <span class="klarna-address-label"> <?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_CHOOSE_DELIVERY_ADDRESS'), $this);?>

                            </span>
                <span class="glyphicon glyphicon-menu-down pull-right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="drop-content fixed">
            <form name="address" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" role="form">
                <div class="hidden">
                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                    <input type="hidden" name="cl" value="KlarnaExpress">
                    <input type="hidden" name="fnc" value="setKlarnaDeliveryAddress">
                    <input type="hidden" name="klarna_address_id" value="">
                </div>
                <div class="form-group">
                    <div class="btn-group">
                        <button type="button"
                                class="btn btn-default disabled js-klarna-selected-address">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_CHOOSE_DELIVERY_ADDRESS'), $this);?>
</button>
                        <button type="button" class="btn btn-default dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php $_from = $this->_tpl_vars['savedAddresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['delAddrList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['delAddrList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oxid'] => $this->_tpl_vars['address']):
        $this->_foreach['delAddrList']['iteration']++;
?>
                                <li class="js-klarna-address-list-item"
                                    data-address-id="<?php echo $this->_tpl_vars['oxid']; ?>
">
                                    <div class="klarna-formatted-address"><?php echo $this->_tpl_vars['address']; ?>
</div>
                                </li>
                                <?php if (! ($this->_foreach['delAddrList']['iteration'] == $this->_foreach['delAddrList']['total'])): ?>
                                    <li role="separator" class="divider"></li>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" id="setDeliveryAddress"
                            class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_USE_AS_DELIVERY_ADDRESS'), $this);?>

                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
