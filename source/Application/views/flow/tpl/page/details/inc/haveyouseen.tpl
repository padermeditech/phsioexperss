[{block name="details_relatedproducts_crossselling"}]
    [{if $oView->getCrossSelling()|count}]
		<div class="row">
        <hr>
    </div>
        [{include file="widget/product/list_related.tpl" type="grid" listId="cross" products=$oView->getCrossSelling() head="HAVE_YOU_SEEN"|oxmultilangassign subhead="WIDGET_PRODUCT_RELATED_PRODUCTS_CROSSSELING_SUBHEADER"|oxmultilangassign}]
    [{/if}]
[{/block}]
