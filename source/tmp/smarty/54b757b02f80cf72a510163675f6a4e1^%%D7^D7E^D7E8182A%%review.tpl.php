<?php /* Smarty version 2.6.31, created on 2023-01-13 11:14:54
         compiled from page/review/review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/review/review.tpl', 2, false),array('function', 'oxid_include_widget', 'page/review/review.tpl', 12, false),array('function', 'oxmultilang', 'page/review/review.tpl', 21, false),)), $this); ?>
<?php ob_start(); ?>
    <?php echo smarty_function_oxscript(array('include' => "js/pages/review.min.js",'priority' => 10), $this);?>


    <?php if ($this->_tpl_vars['oView']->getProduct()): ?>
        <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
        <?php $this->assign('_productLink', $this->_tpl_vars['product']->getLink()); ?>

        <div class="list-container" id="<?php echo $this->_tpl_vars['listId']; ?>
">
            <div class="row lineView newItems">
                
                    <div class="productData col-xs-12 productBox">
                        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'iLinkType' => $this->_tpl_vars['product']->getLinkType(),'_object' => $this->_tpl_vars['product'],'anid' => $this->_tpl_vars['product']->getId(),'sWidgetType' => 'product','sListType' => 'listitem_line','iIndex' => 'list_1','blDisableToCart' => true,'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => true,'toBasketFunction' => false,'removeFunction' => false,'skipESIforUser' => 1), $this);?>

                    </div>
                
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['oView']->isReviewActive()): ?>
        <div class="widgetBox reviews">
            <h4><?php echo smarty_function_oxmultilang(array('ident' => 'WRITE_PRODUCT_REVIEW'), $this);?>
</h4>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/reviews/reviews.tpl", 'smarty_include_vars' => array('sReviewUserHash' => $this->_tpl_vars['oView']->getReviewUserHash(),'oDetailsProduct' => $this->_tpl_vars['oView']->getProduct(),'oReviewUser' => $this->_tpl_vars['oView']->getReviewUser())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
