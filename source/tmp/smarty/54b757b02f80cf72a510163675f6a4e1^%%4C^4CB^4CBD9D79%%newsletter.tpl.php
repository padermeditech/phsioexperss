<?php /* Smarty version 2.6.31, created on 2022-12-29 13:36:00
         compiled from form/newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/newsletter.tpl', 1, false),array('function', 'oxmultilang', 'form/newsletter.tpl', 14, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<?php $this->assign('aRegParams', $this->_tpl_vars['oView']->getRegParams()); ?>
<form class="form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" role="form" novalidate="novalidate">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="fnc" value="send">
        <input type="hidden" name="cl" value="newsletter">
        <input type="hidden" name="editval[oxuser__oxcountryid]" value="<?php echo $this->_tpl_vars['oView']->getHomeCountryId(); ?>
">
    </div>

    <div class="form-group">
        <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'TITLE'), $this);?>
</label>

        <div class="col-lg-5">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/salutation.tpl", 'smarty_include_vars' => array('name' => "editval[oxuser__oxsal]",'value' => $this->_tpl_vars['aRegParams']['oxuser__oxsal'],'class' => "form-control selectpicker show-tick")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'FIRST_NAME'), $this);?>
</label>

        <div class="col-lg-5">
            <input class="form-control" id="newsletterFname" type="text" name="editval[oxuser__oxfname]" maxlength="40" value="<?php if ($this->_tpl_vars['aRegParams']['oxuser__oxfname']): ?><?php echo $this->_tpl_vars['aRegParams']['oxuser__oxfname']; ?>
<?php endif; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'LAST_NAME'), $this);?>
</label>

        <div class="col-lg-5">
            <input class="form-control" id="newsletterLname" type="text" name="editval[oxuser__oxlname]" maxlength="40" value="<?php if ($this->_tpl_vars['aRegParams']['oxuser__oxlname']): ?><?php echo $this->_tpl_vars['aRegParams']['oxuser__oxlname']; ?>
<?php endif; ?>">
        </div>
    </div>
    <div class="form-group<?php if ($this->_tpl_vars['aErrors']): ?> oxInValid<?php endif; ?>">
        <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL'), $this);?>
</label>

        <div class="col-lg-5">
            <input id="newsletterUserName" type="email" class="form-control" name="editval[oxuser__oxusername]" maxlength="40" value="<?php if ($this->_tpl_vars['aRegParams']['oxuser__oxusername']): ?><?php echo $this->_tpl_vars['aRegParams']['oxuser__oxusername']; ?>
<?php endif; ?>" required="required">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-5">
            <label for="newsletterSubscribeOn" class="checkbox-inline">
                <input id="newsletterSubscribeOn" type="radio" name="subscribeStatus" value="1" checked> <?php echo smarty_function_oxmultilang(array('ident' => 'SUBSCRIBE'), $this);?>

            </label>
            <label for="newsletterSubscribeOff" class="checkbox-inline">
                <input id="newsletterSubscribeOff" type="radio" name="subscribeStatus" value="0"> <?php echo smarty_function_oxmultilang(array('ident' => 'UNSUBSCRIBE'), $this);?>

            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-5">
            <p class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'COMPLETE_MARKED_FIELDS'), $this);?>
</p>
            <button id="newsLetterSubmit" class="btn btn-primary" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBMIT'), $this);?>
</button>
        </div>
    </div>
</form>