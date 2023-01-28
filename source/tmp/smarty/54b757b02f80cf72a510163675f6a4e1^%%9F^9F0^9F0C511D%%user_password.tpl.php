<?php /* Smarty version 2.6.31, created on 2023-01-06 12:16:17
         compiled from form/user_password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/user_password.tpl', 1, false),array('function', 'oxmultilang', 'form/user_password.tpl', 17, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<form class="js-oxValidate form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="changepassword" method="post" novalidate="novalidate">
    <?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>

    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

        <input type="hidden" name="fnc" value="changePassword">
        <input type="hidden" name="cl" value="account_password">
        <input type="hidden" name="CustomError" value='user'>
        <input type="hidden" id="passwordLength" value="<?php echo $this->_tpl_vars['oViewConf']->getPasswordLength(); ?>
">
    </div>

        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?> oxInValid<?php endif; ?>">
            <label class="control-label col-lg-3" for="passwordOld"><?php echo smarty_function_oxmultilang(array('ident' => 'OLD_PASSWORD'), $this);?>
</label>
            <div class="col-lg-5">
                <input type="password" id="passwordOld" name="password_old" class="js-oxValidate js-oxValidate_notEmpty form-control" required="">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?> oxInValid<?php endif; ?>">
            <label class="control-label col-lg-3" for="passwordNew"><?php echo smarty_function_oxmultilang(array('ident' => 'NEW_PASSWORD'), $this);?>
</label>
            <div class="col-lg-5">
                <input type="password" id="passwordNew" name="password_new" class="js-oxValidate js-oxValidate_notEmpty js-oxValidate_length js-oxValidate_match form-control" required="">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?> oxInValid<?php endif; ?>">
            <label class="control-label col-lg-3" for="passwordNewConfirm"><?php echo smarty_function_oxmultilang(array('ident' => 'CONFIRM_PASSWORD'), $this);?>
</label>
            <div class="col-lg-5">
                <input type="password" id="passwordNewConfirm" name="password_new_confirm" class="js-oxValidate js-oxValidate_notEmpty js-oxValidate_length js-oxValidate_match form-control" required="" data-validation-matches-match="password_new" data-validation-matches-message="<?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_DO_NOT_MATCH'), $this);?>
">
                <div class="help-block"></div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-3 col-lg-5">
                <button id="savePass" type="submit" class="btn btn-primary" role="button"><?php echo smarty_function_oxmultilang(array('ident' => 'SAVE'), $this);?>
</button>
            </div>
        </div>
</form>