<?php /* Smarty version 2.6.31, created on 2023-01-25 08:56:40
         compiled from ox:oxordersendemailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxordersendemailoxcontent01', 1, false),)), $this); ?>
<p>Guten Tag, <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
,<br>
<br>
Ihre Bestellung <?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
 wurde verpackt und ist auf dem Weg zu Ihnen.&nbsp;</p><p>Sollte Ihre Lieferung nicht innerhalb der nächsten 7 Werktage bei Ihnen eintreffen, können Sie gerne unseren Kundenservice unter 05251/778077 kontaktieren oder nutzen Sie unser Kontaktformular.<br>
<br></p>