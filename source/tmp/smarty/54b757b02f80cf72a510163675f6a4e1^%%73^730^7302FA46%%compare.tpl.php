<?php /* Smarty version 2.6.31, created on 2022-12-28 11:42:21
         compiled from page/compare/compare.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/compare/compare.tpl', 2, false),array('modifier', 'cat', 'page/compare/compare.tpl', 26, false),array('function', 'oxscript', 'page/compare/compare.tpl', 9, false),array('function', 'oxgetseourl', 'page/compare/compare.tpl', 26, false),array('function', 'oxmultilang', 'page/compare/compare.tpl', 29, false),array('insert', 'oxid_tracker', 'page/compare/compare.tpl', 61, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='COMPARE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>

    <?php echo $this->_tpl_vars['oView']->setNoPaging(); ?>


    <?php $this->assign('articleList', $this->_tpl_vars['oView']->getCompArtList()); ?>
    <?php $this->assign('atributeList', $this->_tpl_vars['oView']->getAttributeList()); ?>

    <?php echo smarty_function_oxscript(array('include' => "js/pages/compare.min.js"), $this);?>


    <h1 id="productComparisonHeader" class="page-header"><?php echo $this->_tpl_vars['template_title']; ?>
</h1>
    <?php if ($this->_tpl_vars['oView']->getCompareItemsCnt() >= 1): ?>
        <div id="comparePlayground">
            <div id="compareLandscape">
                <table class="table-bordered">
                    <tbody>
                        <tr class="products">
                            <?php $_from = $this->_tpl_vars['articleList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['compareArticles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['compareArticles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iProdNr'] => $this->_tpl_vars['product']):
        $this->_foreach['compareArticles']['iteration']++;
?>
                                <?php if (($this->_foreach['compareArticles']['iteration'] <= 1)): ?>
                                    <th class="attrib-title no-border" scope="row">&nbsp;</th>
                                <?php endif; ?>

                                <td class="item-wrapper text-center">
                                    <div class="move-controls btn-group">
                                        <?php if (! $this->_tpl_vars['product']->hidePrev): ?>
                                            <a id="compareLeft_<?php echo $this->_tpl_vars['product']->oxarticles__oxid->value; ?>
" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=") : smarty_modifier_cat($_tmp, "cl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName())),'params' => ((is_array($_tmp="fnc=moveleft&amp;aid=".($this->_tpl_vars['product']->oxarticles__oxnid->value)."&amp;pgNr=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getActPage()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getActPage()))), $this);?>
" class="btn btn-default movePrev">&laquo;</a>
                                        <?php endif; ?>

                                        <a href="javascript:;" class="btn btn-default disabled"><?php echo smarty_function_oxmultilang(array('ident' => 'MOVE'), $this);?>
</a>

                                        <?php if (! $this->_tpl_vars['product']->hideNext): ?>
                                            <a id="compareRight_<?php echo $this->_tpl_vars['product']->oxarticles__oxid->value; ?>
" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=") : smarty_modifier_cat($_tmp, "cl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName())),'params' => ((is_array($_tmp="fnc=moveright&amp;aid=".($this->_tpl_vars['product']->oxarticles__oxnid->value)."&amp;pgNr=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getActPage()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getActPage()))), $this);?>
" class="btn btn-default moveNext">&raquo;</a>
                                        <?php endif; ?>
                                    </div>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/compare/inc/compareitem.tpl", 'smarty_include_vars' => array('product' => $this->_tpl_vars['product'],'testid' => $this->_foreach['comparelist']['iteration'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                        <?php $_from = $this->_tpl_vars['atributeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['compareAttributes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['compareAttributes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iProdNr'] => $this->_tpl_vars['oAttrib']):
        $this->_foreach['compareAttributes']['iteration']++;
?>
                            <tr>
                                <th class="attrib-title" scope="row"><?php echo $this->_tpl_vars['oAttrib']->title; ?>
:</th>

                                <?php $_from = $this->_tpl_vars['articleList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['compareArticles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['compareArticles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iProdNr'] => $this->_tpl_vars['product']):
        $this->_foreach['compareArticles']['iteration']++;
?>
                                    <td class="attrib-text">
                                        <?php if ($this->_tpl_vars['oAttrib']->aProd[$this->_tpl_vars['iProdNr']] && $this->_tpl_vars['oAttrib']->aProd[$this->_tpl_vars['iProdNr']]->value): ?>
                                            <?php echo $this->_tpl_vars['oAttrib']->aProd[$this->_tpl_vars['iProdNr']]->value; ?>

                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; endif; unset($_from); ?>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <p class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_SELECT_AT_LEAST_ONE_PRODUCT'), $this);?>
</p>
    <?php endif; ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php if (! $this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php ob_start(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'compare')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>