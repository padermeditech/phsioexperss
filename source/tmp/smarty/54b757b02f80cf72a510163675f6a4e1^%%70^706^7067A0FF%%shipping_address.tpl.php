<?php /* Smarty version 2.6.31, created on 2023-01-02 10:50:00
         compiled from widget/address/shipping_address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'widget/address/shipping_address.tpl', 4, false),array('function', 'oxmultilang', 'widget/address/shipping_address.tpl', 9, false),)), $this); ?>
<?php if ($this->_tpl_vars['delivadr']): ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxcompany->value): ?> <strong><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxcompany->value; ?>
</strong><br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxaddinfo->value): ?> <?php echo $this->_tpl_vars['delivadr']->oxaddress__oxaddinfo->value; ?>
<br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxsal->value || $this->_tpl_vars['delivadr']->oxaddress__oxfname->value || $this->_tpl_vars['delivadr']->oxaddress__oxlname->value): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['delivadr']->oxaddress__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
&nbsp;<?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfname->value; ?>
&nbsp;<?php echo $this->_tpl_vars['delivadr']->oxaddress__oxlname->value; ?>
<br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxstreet->value || $this->_tpl_vars['delivadr']->oxaddress__oxstreetnr->value): ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxstreet->value; ?>
&nbsp;<?php echo $this->_tpl_vars['delivadr']->oxaddress__oxstreetnr->value; ?>
<br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxstateid->value): ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxstateid->value; ?>
 <?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxzip->value || $this->_tpl_vars['delivadr']->oxaddress__oxcity->value): ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxzip->value; ?>
&nbsp;<?php echo $this->_tpl_vars['delivadr']->oxaddress__oxcity->value; ?>
<br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxcountry->value): ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxcountry->value; ?>
<br><br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxfon->value): ?><strong><?php echo smarty_function_oxmultilang(array('ident' => 'PHONE'), $this);?>
</strong> <?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfon->value; ?>
<br><?php endif; ?>
    <?php if ($this->_tpl_vars['delivadr']->oxaddress__oxfax->value): ?><strong><?php echo smarty_function_oxmultilang(array('ident' => 'FAX'), $this);?>
</strong> <?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfax->value; ?>
<br><?php endif; ?>
<?php endif; ?>