<?php /* Smarty version 2.6.31, created on 2022-12-28 11:36:22
         compiled from form/contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/contact.tpl', 1, false),array('function', 'oxmultilang', 'form/contact.tpl', 16, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<?php $this->assign('editval', $this->_tpl_vars['oView']->getUserData()); ?>
<form class="form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" role="form" novalidate="novalidate">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="fnc" value="send"/>
        <input type="hidden" name="cl" value="contact"/>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxfname'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <div class="form-group">
            <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'TITLE'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/salutation.tpl", 'smarty_include_vars' => array('name' => "editval[oxuser__oxsal]",'value' => $this->_tpl_vars['editval']['oxuser__oxsal'],'class' => "form-control selectpicker show-tick")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxfname']): ?> oxInValid<?php endif; ?>">
            <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'FIRST_NAME'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <input type="text" name="editval[oxuser__oxfname]" size="70" maxlength="255" value="<?php echo $this->_tpl_vars['editval']['oxuser__oxfname']; ?>
" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxlname']): ?> oxInValid<?php endif; ?>">
            <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'LAST_NAME'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <input type="text" name="editval[oxuser__oxlname]" size=70 maxlength=255 value="<?php echo $this->_tpl_vars['editval']['oxuser__oxlname']; ?>
" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors']['oxuser__oxusername']): ?> oxInValid<?php endif; ?>">
            <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <input id="contactEmail" type="email" name="editval[oxuser__oxusername]"  size=70 maxlength=255 value="<?php echo $this->_tpl_vars['editval']['oxuser__oxusername']; ?>
" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group<?php if ($this->_tpl_vars['aErrors'] && ! $this->_tpl_vars['oView']->getContactSubject()): ?> oxInValid<?php endif; ?>">
            <label class="req control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBJECT'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <input type="text" name="c_subject" size="70" maxlength=80 value="<?php echo $this->_tpl_vars['oView']->getContactSubject(); ?>
" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE'), $this);?>
</label>
            <div class="col-lg-10 controls">
                <textarea rows="15" cols="70" name="c_message" class="form-control"><?php echo $this->_tpl_vars['oView']->getContactMessage(); ?>
</textarea>
            </div>
        </div>
    

    

    
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <p class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'COMPLETE_MARKED_FIELDS'), $this);?>
</p>
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-envelope"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'SEND'), $this);?>

                </button>
            </div>
        </div>
    
</form>