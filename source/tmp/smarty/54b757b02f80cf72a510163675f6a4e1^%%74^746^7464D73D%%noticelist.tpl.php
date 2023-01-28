<?php /* Smarty version 2.6.31, created on 2023-01-02 11:16:03
         compiled from page/account/noticelist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/account/noticelist.tpl', 2, false),array('function', 'oxmultilang', 'page/account/noticelist.tpl', 3, false),array('insert', 'oxid_tracker', 'page/account/noticelist.tpl', 11, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='MY_WISH_LIST')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
     <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'MY_WISH_LIST'), $this);?>
</h1>

    <?php if ($this->_tpl_vars['oView']->getNoticeProductList()): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/list.tpl", 'smarty_include_vars' => array('type' => 'line','listId' => 'noticelistProductList','title' => "",'products' => $this->_tpl_vars['oView']->getNoticeProductList(),'removeFunction' => 'tonoticelist','owishid' => $this->_tpl_vars['oxcmp_user']->oxuser__oxid->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <p class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'WISH_LIST_EMPTY'), $this);?>
</p>
    <?php endif; ?>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'noticelist')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>