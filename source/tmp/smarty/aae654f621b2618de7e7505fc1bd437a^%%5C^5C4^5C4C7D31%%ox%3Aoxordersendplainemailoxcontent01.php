<?php /* Smarty version 2.6.31, created on 2023-01-25 08:56:40
         compiled from ox:oxordersendplainemailoxcontent01 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxordersendplainemailoxcontent01', 1, false),)), $this); ?>
Guten Tag <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->getRawValue(); ?>
,

unser Vertriebszentrum hat soeben folgende Artikel versandt. Test