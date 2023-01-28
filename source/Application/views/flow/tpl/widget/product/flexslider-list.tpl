<div class="row">
	<div class="boxwrapper">
		<div class="flexslider" id="boxwrapper_[{$listId}]">
			<div class="flexslider_heading">
				[{$head}]
			</div>
			<ul class="slides">
				[{foreach from=$products item="_product" name="productlist"}]
					[{if strpos($_product->getThumbnailUrl(), 'nopic.jpg') === false }]
						<li>
							[{oxid_include_widget cl="oxwArticleBox" _parent=$oView->getClassName() nocookie=1 _navurlparams=$oViewConf->getNavUrlParams() iLinkType=$_product->getLinkType() _object=$_product anid=$_product->getId() sWidgetType=product sListType=listitem_$type iIndex=$testid blDisableToCart=$blDisableToCart isVatIncluded=$oView->isVatIncluded() showMainLink=$showMainLink recommid=$recommid owishid=$owishid toBasketFunction=$toBasketFunction removeFunction=$removeFunction altproduct=$altproduct inlist=$_product->isInList() skipESIforUser=1 testid=$testid}]
						</li>
					[{/if}]
				[{/foreach}]
			</ul>
		</div>
	</div>
</div>

