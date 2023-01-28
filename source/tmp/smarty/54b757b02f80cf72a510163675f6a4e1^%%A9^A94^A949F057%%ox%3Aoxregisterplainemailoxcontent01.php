<?php /* Smarty version 2.6.31, created on 2023-01-09 17:44:10
         compiled from ox:oxregisterplainemailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxregisterplainemailoxcontent01', 1, false),)), $this); ?>
<p><?php echo $this->_tpl_vars['shop']->oxshops__oxregistersubject->getRawValue(); ?>
 Hallo, <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->oxuser__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->getRawValue(); ?>
, vielen Dank für Ihre Registrierung bei <?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
! Sie können sich ab sofort auch mit Ihrer E-Mail-Adresse (<?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>
) einloggen. Ihr <?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
 Team</p>