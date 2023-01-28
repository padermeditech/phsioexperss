<?php /* Smarty version 2.6.31, created on 2022-12-28 11:36:22
         compiled from page/info/contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/info/contact.tpl', 3, false),array('modifier', 'cat', 'page/info/contact.tpl', 3, false),array('modifier', 'urlencode', 'page/info/contact.tpl', 17, false),array('function', 'oxmultilang', 'page/info/contact.tpl', 7, false),array('function', 'oxscript', 'page/info/contact.tpl', 11, false),array('function', 'oxmailto', 'page/info/contact.tpl', 43, false),array('insert', 'oxid_tracker', 'page/info/contact.tpl', 55, false),)), $this); ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['oView']->getContactSendStatus()): ?>
        <?php $this->assign('_statusMessage', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='DD_CONTACT_THANKYOU1')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value))); ?>
        <?php $this->assign('_statusMessageSuffix', ((is_array($_tmp='DD_CONTACT_THANKYOU2')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/notice.tpl", 'smarty_include_vars' => array('statusMessage' => ((is_array($_tmp=$this->_tpl_vars['_statusMessage'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['_statusMessageSuffix']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['_statusMessageSuffix'])))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_CONTACT_PAGE_HEADING'), $this);?>
</h1>

    <?php $this->assign('sGoogleMapsAddr', $this->_tpl_vars['oViewConf']->getViewThemeParam('sGoogleMapsAddr')); ?>
    <?php if ($this->_tpl_vars['sGoogleMapsAddr']): ?>
        <?php echo smarty_function_oxscript(array('include' => "js/libs/pages/contact.min.js",'priority' => 10), $this);?>


        <div class="row">
            <div class="col-xs-12">
                <div class="google-maps">
                    <figure>
                        <iframe width="100%" height="400" style="width:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.de/maps?t=m&amp;q=<?php echo ((is_array($_tmp=$this->_tpl_vars['sGoogleMapsAddr'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;ie=UTF8&amp;hq=<?php echo ((is_array($_tmp=$this->_tpl_vars['sGoogleMapsAddr'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;output=embed"></iframe>
                    </figure>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-xs-12 col-lg-3 pull-right">
            <h2 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_CONTACT_ADDRESS_HEADING'), $this);?>
</h2>
            <div itemscope itemtype="http://schema.org/Organization">
                <address>
                    <strong itemprop="name"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxcompany->value; ?>
</strong><br>
                    <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxstreet->value; ?>
</span><br>
                        <span itemprop="postalCode"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxzip->value; ?>
</span> <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxcity->value; ?>
<br>
                        <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxcountry->value; ?>
<br>
                        <span class="hidden" itemprop="addressLocality"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxcity->value; ?>
, <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxcountry->value; ?>
</span>
                    </span>
                    <?php if ($this->_tpl_vars['oxcmp_shop']->oxshops__oxtelefon->value): ?>
                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'PHONE','suffix' => 'COLON'), $this);?>
</strong> <span itemprop="telephone"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtelefon->value; ?>
</span><br>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['oxcmp_shop']->oxshops__oxtelefax->value): ?>
                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'FAX','suffix' => 'COLON'), $this);?>
</strong> <span itemprop="faxNumber"><?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtelefax->value; ?>
</span><br>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['oxcmp_shop']->oxshops__oxinfoemail->value): ?>
                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL','suffix' => 'COLON'), $this);?>
</strong> <span itemprop="email"><?php echo smarty_function_oxmailto(array('address' => $this->_tpl_vars['oxcmp_shop']->oxshops__oxinfoemail->value), $this);?>
</span><br>
                    <?php endif; ?>
                    <span class="hidden" itemprop="url"><?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
</span>
                </address>
            </div>
        </div>
        <div class="col-xs-12 col-lg-9">
            <h2 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_CONTACT_FORM_HEADING'), $this);?>
</h2>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>