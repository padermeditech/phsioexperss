<?php /* Smarty version 2.6.31, created on 2022-12-28 13:27:42
         compiled from form/forgotpwd_email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/forgotpwd_email.tpl', 1, false),array('function', 'oxmultilang', 'form/forgotpwd_email.tpl', 5, false),array('block', 'oxifcontent', 'form/forgotpwd_email.tpl', 34, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<p>
    <?php echo smarty_function_oxmultilang(array('ident' => 'HAVE_YOU_FORGOTTEN_PASSWORD'), $this);?>
<br>
    <?php echo smarty_function_oxmultilang(array('ident' => 'HERE_YOU_SET_UP_NEW_PASSWORD'), $this);?>

</p>

<form class="form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="forgotpwd" method="post" novalidate="novalidate">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

        <input type="hidden" name="fnc" value="forgotpassword">
        <input type="hidden" name="cl" value="forgotpwd">
        <input type="hidden" name="actcontrol" value="forgotpwd">
    </div>

    <div class="form-group">
        <label class="req control-label col-md-3"><?php echo smarty_function_oxmultilang(array('ident' => 'YOUR_EMAIL_ADDRESS'), $this);?>
</label>

        <div class="col-md-9">
            <input id="forgotPasswordUserLoginName<?php echo $this->_tpl_vars['idPrefix']; ?>
" type="email" name="lgn_usr" value="<?php echo $this->_tpl_vars['oView']->getActiveUsername(); ?>
" class="form-control" required="required">
            <p class="help-block"></p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button class="btn btn-primary submitButton" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'REQUEST_PASSWORD'), $this);?>
</button>
        </div>
    </div>
</form>

<?php echo smarty_function_oxmultilang(array('ident' => 'REQUEST_PASSWORD_AFTERCLICK'), $this);?>
<br><br>
<?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxforgotpwd','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>