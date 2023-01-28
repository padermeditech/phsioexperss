<?php /* Smarty version 2.6.31, created on 2022-12-28 13:27:19
         compiled from form/login_account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/login_account.tpl', 1, false),array('function', 'oxmultilang', 'form/login_account.tpl', 12, false),array('function', 'oxgetseourl', 'form/login_account.tpl', 65, false),array('modifier', 'oxmultilangassign', 'form/login_account.tpl', 5, false),array('modifier', 'cat', 'form/login_account.tpl', 65, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<?php if ($this->_tpl_vars['oView']->getAccountDeletionStatus() == true): ?>
    <?php $this->assign('statusMessage', ((is_array($_tmp='DD_DELETE_MY_ACCOUNT_SUCCESS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/success.tpl", 'smarty_include_vars' => array('statusMessage' => $this->_tpl_vars['statusMessage'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12 col-md-6 pull-right">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_LOGIN_ACCOUNT_PANEL_LOGIN_TITLE'), $this);?>
</div>
            <div class="panel-body">
                <form name="login" class="js-oxValidate form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" novalidate="novalidate">
                    <div class="hidden">
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                        <input type="hidden" name="fnc" value="login_noredirect">
                        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
                        <input type="hidden" name="tpl" value="<?php echo $this->_tpl_vars['oViewConf']->getActTplName(); ?>
">
                        <input type="hidden" name="oxloadid" value="<?php echo $this->_tpl_vars['oViewConf']->getActContentLoadId(); ?>
">
                        <?php if ($this->_tpl_vars['oView']->getArticleId()): ?>
                            <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['oView']->getArticleId(); ?>
">
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['oView']->getProduct()): ?>
                            <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
                            <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
                        <?php endif; ?>
                    </div>

                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_ALREADY_CUSTOMER'), $this);?>
</p>

                    <div class="form-group<?php if ($this->_tpl_vars['aErrors']): ?> oxInValid<?php endif; ?>">
                        <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL'), $this);?>
</label>
                        <div class="col-lg-10">
                            <input id="loginUser" class="js-oxValidate js-oxValidate_notEmpty form-control" type="text" name="lgn_usr" role="loginUser" required="required">
                            <div class="help-block"></div></div>
                    </div>
                    <div class="form-group<?php if ($this->_tpl_vars['aErrors']): ?> oxInValid<?php endif; ?>">
                        <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD'), $this);?>
</label>
                        <div class="col-lg-10">
                            <input id="loginPwd" class="js-oxValidate js-oxValidate_notEmpty  form-control" type="password" name="lgn_pwd" role="loginPwd" required="required">
                            <div class="help-block"></div></div>
                    </div>
                    <?php if ($this->_tpl_vars['oView']->showRememberMe()): ?>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="checkbox" name="lgn_cook" value="1"> <?php echo smarty_function_oxmultilang(array('ident' => 'KEEP_LOGGED_IN'), $this);?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button id="loginButton" type="submit" class="btn btn-primary btn-block" role="loginButton"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>
</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <a id="forgotPasswordLink" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=forgotpwd") : smarty_modifier_cat($_tmp, "cl=forgotpwd"))), $this);?>
" class="textLink"><?php echo smarty_function_oxmultilang(array('ident' => 'FORGOT_PASSWORD'), $this);?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-xs-12 col-md-6 pull-left">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_LOGIN_ACCOUNT_PANEL_CREATE_TITLE'), $this);?>
</div>
            <div class="panel-body">
                <p><?php echo smarty_function_oxmultilang(array('ident' => 'DD_LOGIN_ACCOUNT_PANEL_CREATE_BODY'), $this);?>
</p>
                <a id="openAccountLink" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=register") : smarty_modifier_cat($_tmp, "cl=register"))), $this);?>
" class="btn btn-primary btn-block" role="button"><?php echo smarty_function_oxmultilang(array('ident' => 'OPEN_ACCOUNT'), $this);?>
</a><br />
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>