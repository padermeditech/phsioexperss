<?php /* Smarty version 2.6.31, created on 2023-01-06 12:16:17
         compiled from page/account/password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/account/password.tpl', 2, false),array('function', 'oxmultilang', 'page/account/password.tpl', 6, false),array('insert', 'oxid_tracker', 'page/account/password.tpl', 21, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='CHANGE_PASSWORD')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>

    <?php if ($this->_tpl_vars['oView']->isPasswordChanged()): ?>
        <div class="alert alert-success">
            <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_PASSWORD_CHANGED'), $this);?>

        </div>
    <?php endif; ?>
    <?php if (count ( $this->_tpl_vars['Errors'] ) > 0 && count ( $this->_tpl_vars['Errors']['user'] ) > 0): ?>
        <div class="alert alert-danger">
            <?php $_from = $this->_tpl_vars['Errors']['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                <p><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php endif; ?>

    <h1 id="personalSettingsHeader" class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'CHANGE_PASSWORD'), $this);?>
</h1>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/user_password.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'password')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>