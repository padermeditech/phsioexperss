<?php /* Smarty version 2.6.31, created on 2022-12-30 14:42:43
         compiled from email/plain/newsletteroptin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxcontent', 'email/plain/newsletteroptin.tpl', 5, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php $this->assign('user', $this->_tpl_vars['oEmailView']->getUser()); ?>

<?php echo smarty_function_oxcontent(array('ident' => 'oxnewsletterplainemail'), $this);?>


<?php echo smarty_function_oxcontent(array('ident' => 'oxemailfooterplain'), $this);?>