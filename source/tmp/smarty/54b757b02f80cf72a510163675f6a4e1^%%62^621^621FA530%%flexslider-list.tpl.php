<?php /* Smarty version 2.6.31, created on 2022-12-28 10:47:03
         compiled from widget/product/flexslider-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'widget/product/flexslider-list.tpl', 11, false),)), $this); ?>
<div class="row">
	<div class="boxwrapper">
		<div class="flexslider" id="boxwrapper_<?php echo $this->_tpl_vars['listId']; ?>
">
			<div class="flexslider_heading">
				<?php echo $this->_tpl_vars['head']; ?>

			</div>
			<ul class="slides">
				<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['productlist']['iteration']++;
?>
					<?php if (strpos ( $this->_tpl_vars['_product']->getThumbnailUrl() , 'nopic.jpg' ) === false): ?>
						<li>
							<?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'sWidgetType' => 'product','sListType' => "listitem_".($this->_tpl_vars['type']),'iIndex' => $this->_tpl_vars['testid'],'blDisableToCart' => $this->_tpl_vars['blDisableToCart'],'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => $this->_tpl_vars['showMainLink'],'recommid' => $this->_tpl_vars['recommid'],'owishid' => $this->_tpl_vars['owishid'],'toBasketFunction' => $this->_tpl_vars['toBasketFunction'],'removeFunction' => $this->_tpl_vars['removeFunction'],'altproduct' => $this->_tpl_vars['altproduct'],'inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1,'testid' => $this->_tpl_vars['testid']), $this);?>

						</li>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
</div>
