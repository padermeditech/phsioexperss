<?php /* Smarty version 2.6.31, created on 2022-12-28 13:27:42
         compiled from page/account/forgotpwd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'page/account/forgotpwd.tpl', 3, false),array('function', 'oxmultilang', 'page/account/forgotpwd.tpl', 19, false),array('modifier', 'oxmultilangassign', 'page/account/forgotpwd.tpl', 9, false),array('insert', 'oxid_tracker', 'page/account/forgotpwd.tpl', 54, false),)), $this); ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['oView']->isEnabledPrivateSales()): ?>
        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCookieNote','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

    <?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_pageBody', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>

    <?php if ($this->_tpl_vars['oView']->showUpdateScreen()): ?>
        <?php $this->assign('template_title', ((is_array($_tmp='NEW_PASSWORD')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php elseif ($this->_tpl_vars['oView']->updateSuccess()): ?>
        <?php $this->assign('template_title', ((is_array($_tmp='CHANGE_PASSWORD')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php else: ?>
        <?php $this->assign('template_title', ((is_array($_tmp='FORGOT_PASSWORD')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php endif; ?>

    <h1 class="page-header"><?php echo $this->_tpl_vars['template_title']; ?>
</h1>

    <?php if ($this->_tpl_vars['oView']->isExpiredLink()): ?>
        <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_LINK_EXPIRED'), $this);?>
</div>
    <?php elseif ($this->_tpl_vars['oView']->showUpdateScreen()): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/forgotpwd_change_pwd.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php elseif ($this->_tpl_vars['oView']->updateSuccess()): ?>
        <div class="alert alert-success"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD_CHANGED'), $this);?>
</div>

        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="forgotpwd" method="post" role="form">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="start">
                <button id="backToShop" class="submitButton largeButton btn btn-primary" type="submit">
                    <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'BACK_TO_SHOP'), $this);?>

                </button>
            </div>
        </form>
    <?php else: ?>
        <?php if ($this->_tpl_vars['oView']->getForgotEmail()): ?>
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD_WAS_SEND_TO'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getForgotEmail(); ?>
</div>
            <div class="bar">
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="forgotpwd" method="post">
                    <div>
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <input type="hidden" name="cl" value="start">
                        <button id="backToShop" class="btn btn-primary submitButton largeButton" type="submit">
                            <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'BACK_TO_SHOP'), $this);?>

                        </button>
                    </div>
                 </form>
             </div>
        <?php else: ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/forgotpwd_email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['oView']->isActive('PsLogin')): ?>
        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

    <?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['oView']->isActive('PsLogin')): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/popup.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
