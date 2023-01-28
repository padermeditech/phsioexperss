<?php /* Smarty version 2.6.31, created on 2022-12-28 16:55:34
         compiled from form/suggest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/suggest.tpl', 3, false),array('function', 'oxmultilang', 'form/suggest.tpl', 16, false),array('modifier', 'strip_tags', 'form/suggest.tpl', 50, false),)), $this); ?>
<?php $this->assign('_oProduct', $this->_tpl_vars['oView']->getProduct()); ?>
<?php $this->assign('editval', $this->_tpl_vars['oView']->getSuggestData()); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jqBootstrapValidation.min.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('input,select,textarea').not('[type=submit]').jqBootstrapValidation();"), $this);?>


<form class="form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" novalidate="novalidate">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

        <input type="hidden" name="fnc" value="send">
        <input type="hidden" name="cl" value="suggest">
        <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['_oProduct']->oxarticles__oxnid->value; ?>
">
        <input type="hidden" name="CustomError" value='suggest'>
    </div>

    <h3 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'CARD_TO','suffix' => 'COLON'), $this);?>
</h3>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'RECIPIENT_NAME','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" name="editval[rec_name]" size="73" maxlength="73" value="<?php echo $this->_tpl_vars['editval']->rec_name; ?>
" required="required">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'RECIPIENT_EMAIL','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <input class="form-control" type="email" name="editval[rec_email]" size="73" maxlength="73" value="<?php echo $this->_tpl_vars['editval']->rec_email; ?>
" required="required">
            <div class="help-block"></div>
        </div>
    </div>

    <h3 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'FROM','suffix' => 'COLON'), $this);?>
</h3>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'SENDER_NAME','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" name="editval[send_name]" size=73 maxlength=73 value="<?php echo $this->_tpl_vars['editval']->send_name; ?>
" required="required">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'SENDER_EMAIL','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <input class="form-control" type="email" name="editval[send_email]" size=73 maxlength=73 value="<?php echo $this->_tpl_vars['editval']->send_email; ?>
" required="required">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBJECT','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" name="editval[send_subject]" size=73 maxlength=73 value="<?php if ($this->_tpl_vars['editval']->send_subject): ?><?php echo $this->_tpl_vars['editval']->send_subject; ?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'HAVE_A_LOOK','suffix' => 'COLON'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['_oProduct']->oxarticles__oxtitle->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php endif; ?>" required="required">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-lg-3 req"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE','suffix' => 'COLON'), $this);?>
</label>
        <div class="col-lg-9">
            <textarea cols="70" rows="8" name="editval[send_message]" class="areabox form-control" required="required"><?php if ($this->_tpl_vars['editval']->send_message): ?><?php echo $this->_tpl_vars['editval']->send_message; ?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SUGGEST_MESSAGE','args' => $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value), $this);?>
<?php endif; ?></textarea>
            <div class="help-block"></div>
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