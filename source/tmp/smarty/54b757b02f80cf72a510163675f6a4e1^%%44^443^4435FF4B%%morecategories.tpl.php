<?php /* Smarty version 2.6.31, created on 2023-01-10 01:10:48
         compiled from page/list/morecategories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/list/morecategories.tpl', 2, false),array('function', 'oxscript', 'page/list/morecategories.tpl', 8, false),array('modifier', 'count', 'page/list/morecategories.tpl', 7, false),array('insert', 'oxid_tracker', 'page/list/morecategories.tpl', 93, false),)), $this); ?>
<?php ob_start(); ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'CATEGORY_OVERVIEW'), $this);?>
</h1>

    <?php $this->assign('_navcategorytree', $this->_tpl_vars['oView']->getCategoryTree()); ?>
    <?php $this->assign('_iCategoriesPerRow', 3); ?>
    <?php $this->assign('iSubCategoriesCount', 0); ?>
    <?php if (((is_array($_tmp=$this->_tpl_vars['_navcategorytree'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
        <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxequalizer.min.js",'priority' => 10), $this);?>

        <?php echo smarty_function_oxscript(array('add' => "$(window).load(function(){ if( !isMobileDevice() ) { oxEqualizer.equalHeight( $( '.subcatList .row .panel' ) ); } });"), $this);?>

        <div class="subcatList">
            <div class="row">
                <?php $_from = $this->_tpl_vars['_navcategorytree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MoreSubCat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MoreSubCat']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category']):
        $this->_foreach['MoreSubCat']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['category']->getIsVisible()): ?>
                                                <?php if ($this->_tpl_vars['category']->getContentCats()): ?>
                            <?php $_from = $this->_tpl_vars['category']->getContentCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MoreCms'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MoreCms']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ocont']):
        $this->_foreach['MoreCms']['iteration']++;
?>
                                <?php $this->assign('iSubCategoriesCount', $this->_tpl_vars['iSubCategoriesCount']+1); ?>
                                <div class="box">
                                    <h3>
                                        <a id="moreSubCms_<?php echo $this->_foreach['MoreSubCat']['iteration']; ?>
_<?php echo $this->_foreach['MoreCms']['iteration']; ?>
" href="<?php echo $this->_tpl_vars['ocont']->getLink(); ?>
"><?php echo $this->_tpl_vars['ocont']->oxcontents__oxtitle->value; ?>
</a>
                                    </h3>
                                    <ul class="content"></ul>
                                </div>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['iSubCategoriesCount']%$this->_tpl_vars['_iCategoriesPerRow'] == 0): ?>
                            </div><div class="row">
                        <?php endif; ?>
                        <?php $this->assign('iSubCategoriesCount', $this->_tpl_vars['iSubCategoriesCount']+1); ?>
                        <?php $this->assign('iconUrl', $this->_tpl_vars['category']->getIconUrl()); ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a id="moreSubCat_<?php echo $this->_foreach['MoreSubCat']['iteration']; ?>
" href="<?php echo $this->_tpl_vars['category']->getLink(); ?>
">
                                            <?php echo $this->_tpl_vars['category']->oxcategories__oxtitle->value; ?>
<?php if ($this->_tpl_vars['oView']->showCategoryArticlesCount() && ( $this->_tpl_vars['category']->getNrOfArticles() > 0 )): ?> (<?php echo $this->_tpl_vars['category']->getNrOfArticles(); ?>
)<?php endif; ?>
                                        </a>
                                    </h3>
                                </div>
                                                                <?php if ($this->_tpl_vars['category']->getHasVisibleSubCats()): ?>
                                    <div class="panel-body">
                                        <?php if ($this->_tpl_vars['iconUrl']): ?>
                                            <div class="text-center">
                                                <a href="<?php echo $this->_tpl_vars['category']->getLink(); ?>
">
                                                    <img src="<?php echo $this->_tpl_vars['category']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['category']->oxcategories__oxtitle->value; ?>
" class="img-thumbnail" height="100" width="168">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <ul class="content">
                                            <?php $_from = $this->_tpl_vars['category']->getSubCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
                                                <?php if ($this->_tpl_vars['subcategory']->getIsVisible()): ?>
                                                                                                        <?php $_from = $this->_tpl_vars['subcategory']->getContentCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MoreCms'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MoreCms']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ocont']):
        $this->_foreach['MoreCms']['iteration']++;
?>
                                                        <li>
                                                            <a href="<?php echo $this->_tpl_vars['ocont']->getLink(); ?>
"><strong><?php echo $this->_tpl_vars['ocont']->oxcontents__oxtitle->value; ?>
</strong></a>
                                                        </li>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                    <li>
                                                        <a href="<?php echo $this->_tpl_vars['subcategory']->getLink(); ?>
">
                                                            <strong><?php echo $this->_tpl_vars['subcategory']->oxcategories__oxtitle->value; ?>
</strong><?php if ($this->_tpl_vars['oView']->showCategoryArticlesCount() && ( $this->_tpl_vars['subcategory']->getNrOfArticles() > 0 )): ?> (<?php echo $this->_tpl_vars['subcategory']->getNrOfArticles(); ?>
)<?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </div>
                                <?php elseif ($this->_tpl_vars['iconUrl']): ?>
                                    <div class="panel-body catPicOnly">
                                        <div class="subcatPic text-center">
                                            <?php if ($this->_tpl_vars['iconUrl']): ?>
                                                <a href="<?php echo $this->_tpl_vars['category']->getLink(); ?>
">
                                                    <img src="<?php echo $this->_tpl_vars['category']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['category']->oxcategories__oxtitle->value; ?>
" class="img-thumbnail" height="100" width="168">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="content"></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['iSubCategoriesCount']%$this->_tpl_vars['_iCategoriesPerRow'] == 0): ?>
                        </div>
                        <div class="row">
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker')), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>