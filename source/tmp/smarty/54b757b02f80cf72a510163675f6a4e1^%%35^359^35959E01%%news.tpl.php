<?php /* Smarty version 2.6.31, created on 2022-12-28 11:52:36
         compiled from page/info/news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/info/news.tpl', 2, false),array('modifier', 'date_format', 'page/info/news.tpl', 12, false),array('function', 'oxmultilang', 'page/info/news.tpl', 5, false),array('insert', 'oxid_tracker', 'page/info/news.tpl', 22, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='LATEST_NEWS_AND_UPDATES_AT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <div>
    <?php $this->assign('oNews', $this->_tpl_vars['oView']->getNews()); ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'LATEST_NEWS_AND_UPDATES_AT'), $this);?>
 <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value; ?>
</h1>
    <div class="listRefine clear bottomRound">
    </div>
        <?php $_from = $this->_tpl_vars['oNews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oNews']):
?>
            <?php if (! empty ( $this->_tpl_vars['oNews'] ) && ! empty ( $this->_tpl_vars['oNews']->oxnews__oxshortdesc->value )): ?>
                <div>
                    <h3>
                        <span><?php echo ((is_array($_tmp=$this->_tpl_vars['oNews']->oxnews__oxdate->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
 - </span> <?php echo $this->_tpl_vars['oNews']->oxnews__oxshortdesc->value; ?>

                    </h3>
                    <?php echo $this->_tpl_vars['oNews']->getLongDesc(); ?>

                </div>
            <?php else: ?>

            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/locator/listlocator.tpl", 'smarty_include_vars' => array('locator' => $this->_tpl_vars['oView']->getPageNavigation(),'place' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>