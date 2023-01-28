<?php /* Smarty version 2.6.31, created on 2022-12-28 10:47:42
         compiled from page/info/content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'oxid_tracker', 'page/info/content.tpl', 12, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('oContent', $this->_tpl_vars['oView']->getContent()); ?>
    <?php $this->assign('tpl', $this->_tpl_vars['oViewConf']->getActTplName()); ?>
    <?php $this->assign('oxloadid', $this->_tpl_vars['oViewConf']->getActContentLoadId()); ?>
    <?php $this->assign('template_title', $this->_tpl_vars['oView']->getTitle()); ?>

    <h1 class="page-header"><?php echo $this->_tpl_vars['template_title']; ?>
</h1>
    <article class="cmsContent">
        <?php echo $this->_tpl_vars['oView']->getParsedContent(); ?>

    </article>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>