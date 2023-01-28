<?php /* Smarty version 2.6.31, created on 2022-12-28 11:18:05
         compiled from message/err_404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'message/err_404.tpl', 3, false),array('function', 'oxgetseourl', 'message/err_404.tpl', 23, false),array('modifier', 'escape', 'message/err_404.tpl', 8, false),array('modifier', 'cat', 'message/err_404.tpl', 9, false),)), $this); ?>
<?php ob_start(); ?>
    <div class="err-404">
        <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR'), $this);?>
</h1>
        <div class="row">
            <div class="col-md-6">
                <p>
                    <?php if ($this->_tpl_vars['sUrl']): ?>
                        <?php $this->assign('sModifiedUrl', ((is_array($_tmp=$this->_tpl_vars['sUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
                        <?php $this->assign('sModifiedUrl', ((is_array($_tmp=((is_array($_tmp="<i><strong>'")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sModifiedUrl']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sModifiedUrl'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "'</strong></i>") : smarty_modifier_cat($_tmp, "'</strong></i>"))); ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_404','args' => $this->_tpl_vars['sModifiedUrl']), $this);?>

                    <?php else: ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_404'), $this);?>

                    <?php endif; ?>
                </p>

                <p>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_START_TEXT'), $this);?>
<br>
                    <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" class="btn btn-default" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_START_BUTTON'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_START_BUTTON'), $this);?>
</a>
                </p>

                <p>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_CONTACT_TEXT'), $this);?>
<br>
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=contact") : smarty_modifier_cat($_tmp, "cl=contact"))), $this);?>
" class="btn btn-default" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_CONTACT_BUTTON'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_ERR_404_CONTACT_BUTTON'), $this);?>
</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="gears-box hidden-xs">
                    <div class="paper-overlay"></div>
                    <img class="gear-rotate reverse" style="top: -55px; left: 65px;" src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('404/gear.png'); ?>
">
                    <img class="gear-rotate" style="top: 177px; left: -11px;" src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('404/gear.png'); ?>
">
                    <img class="gear-rotate" style="top: 19px; right: -26px;" src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('404/gear.png'); ?>
">
                </div>
            </div>
        </div>
    </div>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('blHideBreadcrumb' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>