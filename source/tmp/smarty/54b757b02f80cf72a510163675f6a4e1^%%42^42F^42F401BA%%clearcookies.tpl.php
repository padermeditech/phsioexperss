<?php /* Smarty version 2.6.31, created on 2022-12-30 23:56:20
         compiled from page/info/clearcookies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'page/info/clearcookies.tpl', 6, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', $this->_tpl_vars['oView']->getTitle()); ?>
    <h1 class="page-header"><?php echo $this->_tpl_vars['oView']->getTitle(); ?>
</h1>
    <div class="cmsContent">
        <p>
            <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxcookiesexplanation','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </p>
    </div>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>