<?php /* Smarty version 2.6.31, created on 2023-01-06 12:16:19
         compiled from form/account_newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/account_newsletter.tpl', 10, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" name="newsletter" class="form-horizontal" method="post">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

        <input type="hidden" name="fnc" value="subscribe">
        <input type="hidden" name="cl" value="account_newsletter">
    </div>

    <div class="form-group">
        <label class="control-label col-lg-3" for="status"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER_SUBSCRIPTION'), $this);?>
</label>
        <div class="col-lg-4">
            <select name="status" id="status" class="form-control selectpicker">
                <option value="1"<?php if ($this->_tpl_vars['oView']->isNewsletter()): ?> selected<?php endif; ?> ><?php echo smarty_function_oxmultilang(array('ident' => 'YES'), $this);?>
</option>
                <option value="0"<?php if (! $this->_tpl_vars['oView']->isNewsletter()): ?> selected<?php endif; ?> ><?php echo smarty_function_oxmultilang(array('ident' => 'NO'), $this);?>
</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-3 col-lg-7">
            <p><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION'), $this);?>
</p>
            <button id="newsletterSettingsSave" type="submit" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'SAVE'), $this);?>
</button>
        </div>
    </div>
</form>