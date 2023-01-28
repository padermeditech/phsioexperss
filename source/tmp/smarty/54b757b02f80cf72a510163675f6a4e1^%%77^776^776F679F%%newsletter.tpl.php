<?php /* Smarty version 2.6.31, created on 2023-01-06 12:16:19
         compiled from page/account/newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/account/newsletter.tpl', 2, false),array('function', 'oxmultilang', 'page/account/newsletter.tpl', 5, false),array('insert', 'oxid_tracker', 'page/account/newsletter.tpl', 15, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='NEWSLETTER_SETTINGS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php if ($this->_tpl_vars['oView']->getSubscriptionStatus() != 0): ?>
        <?php if ($this->_tpl_vars['oView']->getSubscriptionStatus() == 1): ?>
            <div class="alert alert-success"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION_SUCCESS'), $this);?>
</div>
        <?php else: ?>
            <div class="alert alert-success"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION_CANCELED'), $this);?>
</div>
        <?php endif; ?>
    <?php endif; ?>

    <h1 id="newsletterSettingsHeader" class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER_SETTINGS'), $this);?>
</h1>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/account_newsletter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'newsletter')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>