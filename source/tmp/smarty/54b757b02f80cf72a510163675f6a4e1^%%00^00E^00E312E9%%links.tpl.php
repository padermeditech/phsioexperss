<?php /* Smarty version 2.6.31, created on 2022-12-28 11:22:15
         compiled from page/info/links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/info/links.tpl', 2, false),array('modifier', 'count', 'page/info/links.tpl', 6, false),array('modifier', 'date_format', 'page/info/links.tpl', 12, false),array('function', 'oxmultilang', 'page/info/links.tpl', 3, false),array('insert', 'oxid_tracker', 'page/info/links.tpl', 21, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='LINKS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'LINKS'), $this);?>
</h1>

    <?php $this->assign('aLinkList', $this->_tpl_vars['oView']->getLinksList()); ?>
    <?php if (count($this->_tpl_vars['aLinkList']) > 0): ?>
        <ul class="list-unstyled">
            <?php $_from = $this->_tpl_vars['oView']->getLinksList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['linksList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['linksList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['link']):
        $this->_foreach['linksList']['iteration']++;
?>
                <li>
                    <h2>
                        <a href="<?php echo $this->_tpl_vars['link']->oxlinks__oxurl->value; ?>
" target="_blank"><?php echo $this->_tpl_vars['link']->oxlinks__oxurl->value; ?>
</a>
                        <small>&ndash; <?php echo ((is_array($_tmp=$this->_tpl_vars['link']->oxlinks__oxinsert->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</small>
                    </h2>
                    <article><?php echo $this->_tpl_vars['link']->oxlinks__oxurldesc->value; ?>
</article>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php else: ?>
        <p class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_LINKS_NO_ENTRIES'), $this);?>
</p>
    <?php endif; ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>