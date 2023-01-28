<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:47
         compiled from page/details/inc/haveyouseen.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'page/details/inc/haveyouseen.tpl', 2, false),array('modifier', 'oxmultilangassign', 'page/details/inc/haveyouseen.tpl', 6, false),)), $this); ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['oView']->getCrossSelling())) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
		<div class="row">
        <hr>
    </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/list_related.tpl", 'smarty_include_vars' => array('type' => 'grid','listId' => 'cross','products' => $this->_tpl_vars['oView']->getCrossSelling(),'head' => ((is_array($_tmp='HAVE_YOU_SEEN')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'subhead' => ((is_array($_tmp='WIDGET_PRODUCT_RELATED_PRODUCTS_CROSSSELING_SUBHEADER')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
