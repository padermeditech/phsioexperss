<?php /* Smarty version 2.6.31, created on 2023-01-09 17:44:10
         compiled from ox:oxregisteremailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxregisteremailoxcontent01', 1, false),)), $this); ?>
Hallo, <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->oxuser__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxfname->value; ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->value; ?>
, vielen Dank für Ihre Registrierung bei <?php echo $this->_tpl_vars['shop']->oxshops__oxname->value; ?>
!<br>
<br>
Sie können sich ab sofort auch mit Ihrer E-Mail-Adresse <strong><?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>
</strong> einloggen.<br>
<br>
Ihr <?php echo $this->_tpl_vars['shop']->oxshops__oxname->value; ?>
 Team<br>