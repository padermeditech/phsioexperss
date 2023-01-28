<?php /* Smarty version 2.6.31, created on 2023-01-02 10:56:54
         compiled from form/fieldset/user_email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/fieldset/user_email.tpl', 2, false),)), $this); ?>
<div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxusername']): ?> oxInValid<?php endif; ?>">
    <label class="req control-label col-lg-3"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS'), $this);?>
</label>
    <div class="col-lg-9">
        <input class="js-oxValidate js-oxValidate_notEmpty js-oxValidate_email oxValidate_enterPass oxValidate_enterPassTarget[oxValidate_pwd] form-control" type="text" name="invadr[oxuser__oxusername]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxusername'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxusername']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxusername->value; ?>
<?php endif; ?>" size="37">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxusername'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="help-block"></div>
    </div>
</div>

<div class="oxValidate_pwd form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?> oxInValid<?php endif; ?>" <?php if (! $this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?>style="display:none;"<?php endif; ?>>
    <label class="req control-label col-lg-3"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD'), $this);?>
</label>
    <div class="col-lg-9">
        <input class="js-oxValidate js-oxValidate_notEmpty form-control" type="password" size="37" name="user_password">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="help-block"></div>
    </div>
</div>