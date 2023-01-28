<?php /* Smarty version 2.6.31, created on 2023-01-25 11:02:20
         compiled from ox:oxnewsletteremailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxnewsletteremailoxcontent01', 1, false),)), $this); ?>
Hallo <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->oxuser__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxfname->value; ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->value; ?>
,<br /><br /> vielen Dank für Ihre Anmeldung zu unserem Newsletter.*<br /> <br /> Um den Newsletter freizuschalten klicken Sie bitte auf folgenden Link:<br /> <br /> <a href="<?php echo $this->_tpl_vars['subscribeLink']; ?>
"><?php echo $this->_tpl_vars['subscribeLink']; ?>
</a><br /> <br /> Ihr <?php echo $this->_tpl_vars['shop']->oxshops__oxname->value; ?>
 Team<br /><br /><br /><br /><br /><span style="font-size: 8pt;">*Erst nach dieser Bestätigung erhalten Sie regelmäßig unseren kostenlosen Newsletter. Selbstverständlich Können Sie den Newsletter jederzeit abbestellen. Am Ende eines jeden Newsletters finden Sie einen entsprechenden Abmeldelink. Wurde Ihre E-Mail-Adresse ohne Ihr Wissen für den PhysioExpress Newsletter eingetragen, bitten wir Sie diese E-Mail zu ignorieren.<br /></span>