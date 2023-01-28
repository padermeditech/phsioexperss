<?php /* Smarty version 2.6.31, created on 2023-01-25 11:02:20
         compiled from ox:oxnewsletterplainemailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxnewsletterplainemailoxcontent01', 1, false),)), $this); ?>
<?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
 Newsletter Hallo <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->oxuser__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->getRawValue(); ?>
, vielen Dank für Ihre Anmeldung zu unserem Newsletter. Um den Newsletter freizuschalten klicken Sie bitte auf folgenden Link: <?php echo $this->_tpl_vars['subscribeLink']; ?>
 Ihr <?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
 Team