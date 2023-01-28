<?php /* Smarty version 2.6.31, created on 2022-12-29 13:36:00
         compiled from page/info/newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/info/newsletter.tpl', 5, false),array('block', 'oxifcontent', 'page/info/newsletter.tpl', 9, false),array('insert', 'oxid_tracker', 'page/info/newsletter.tpl', 36, false),)), $this); ?>
<?php ob_start(); ?>
    <div class="row">
        <div class="col-xs-12">
            <?php if ($this->_tpl_vars['oView']->getNewsletterStatus() == 4 || ! $this->_tpl_vars['oView']->getNewsletterStatus()): ?>
                <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'STAY_INFORMED'), $this);?>
</h1>
                <div class="row">
                    <div class="col-lg-7">
                        <article>
                            <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxnewstlerinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </article>
                    </div>
                    <div class="col-lg-5"></div>
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/newsletter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php elseif ($this->_tpl_vars['oView']->getNewsletterStatus() == 1): ?>
                <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_THANKYOU_FOR_SUBSCRIBING_NEWSLETTERS'), $this);?>
</h1>
                <article>
                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_SENT_CONFIRMATION_EMAIL'), $this);?>
</p>
                </article>
            <?php elseif ($this->_tpl_vars['oView']->getNewsletterStatus() == 2): ?>
                <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_CONGRATULATIONS'), $this);?>
</h1>
                <article>
                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION_ACTIVATED'), $this);?>
</p>
                </article>
            <?php elseif ($this->_tpl_vars['oView']->getNewsletterStatus() == 3): ?>
                <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'SUCCESS'), $this);?>
</h1>
                <article>
                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION_CANCELED'), $this);?>
</p>
                </article>
            <?php endif; ?>
        </div>
    </div>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker')), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>