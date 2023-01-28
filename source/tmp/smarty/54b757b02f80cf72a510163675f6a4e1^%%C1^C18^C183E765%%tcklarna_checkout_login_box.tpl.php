<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:53
         compiled from tcklarna_checkout_login_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tcklarna_checkout_login_box.tpl', 6, false),array('function', 'oxgetseourl', 'tcklarna_checkout_login_box.tpl', 41, false),array('modifier', 'cat', 'tcklarna_checkout_login_box.tpl', 41, false),)), $this); ?>
<div class="col-sm-6">
    <div class="drop-container" id="klarnaLoginWidget">
        <div class="drop-trigger">
            <div class="klarna-label">
                <span class="glyphicon glyphicon-user pull-left" aria-hidden="true"></span>
                <span class="klarna-login-label"> <?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_ALREADY_A_CUSTOMER'), $this);?>
</span>
                <span class="glyphicon glyphicon-menu-down pull-right" aria-hidden="true"></span>
            </div>
        </div>
        <div class="drop-content">
            <?php $this->assign('bIsError', 0); ?>
            <?php ob_start(); ?>
                <?php $_from = $this->_tpl_vars['Errors']['loginBoxErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                    <p id="errorBadLogin" class="alert alert-danger"><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
                    <?php $this->assign('bIsError', 1); ?>
                <?php endforeach; endif; unset($_from); ?>
            <?php $this->_smarty_vars['capture']['loginErrors'] = ob_get_contents(); ob_end_clean(); ?>
            <form class="form" name="login" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
"
                  method="post">
                <div id="loginBox" class="" <?php if ($this->_tpl_vars['bIsError']): ?>style="display: block;" <?php endif; ?>>
                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                    <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                    <input type="hidden" name="fnc" value="login_noredirect">
                    <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
                    <input type="hidden" name="pgNr" value="<?php echo $this->_tpl_vars['oView']->getActPage(); ?>
">
                    <input type="hidden" name="CustomError" value="loginBoxErrors">

                    <div class="form-group">
                        <input type="email" name="lgn_usr" value=""
                               class="form-control"
                               placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS'), $this);?>
">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" name="lgn_pwd"
                                   class="form-control"
                                   value="" placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD'), $this);?>
">
                            <span class="input-group-btn">
                                        <a class="forgotPasswordOpener btn btn-default"
                                           href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=forgotpwd") : smarty_modifier_cat($_tmp, "cl=forgotpwd"))), $this);?>
"
                                           title="<?php echo smarty_function_oxmultilang(array('ident' => 'FORGOT_PASSWORD'), $this);?>
">?</a>
                                </span>
                        </div>
                    </div>

                    <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled ( 'blShowRememberMe' )): ?>
                        <div class="checkbox checkbox-fix">
                            <label>
                                <input type="checkbox" class="checkbox-fix" value="1" name="lgn_cook">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'REMEMBER_ME'), $this);?>

                            </label>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>

                    </button>

                </div>
            </form>
        </div>
    </div>

</div>