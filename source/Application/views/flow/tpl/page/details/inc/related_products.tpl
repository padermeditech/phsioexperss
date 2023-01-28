[{block name="details_relatedproducts_also_bought"}]
    [{if $oView->getAlsoBoughtTheseProducts()}]
        [{include file="widget/product/list_related.tpl" type="grid" listId="alsoBought" head="CUSTOMERS_ALSO_BOUGHT"|oxmultilangassign subhead="PAGE_DETAILS_CUSTOMERS_ALSO_BOUGHT_SUBHEADER"|oxmultilangassign products=$oView->getAlsoBoughtTheseProducts()}]
    [{/if}]
[{/block}]

[{block name="details_relatedproducts_accessoires"}]
    [{if $oView->getAccessoires()|count}]
        [{capture append="oxidBlock_productbar"}]
            [{include file="widget/product/list_related.tpl" type="grid" listId="accessories" products=$oView->getAccessoires() head="ACCESSORIES"|oxmultilangassign subhead="WIDGET_PRODUCT_RELATED_PRODUCTS_ACCESSORIES_SUBHEADER"|oxmultilangassign}]
        [{/capture}]
    [{/if}]
[{/block}]

[{block name="details_relatedproducts_similarproducts"}]
    [{if $oView->getSimilarProducts()|count}]
        [{include file="widget/product/list_related.tpl" type="grid" listId="similar"  products=$oView->getSimilarProducts() head="SIMILAR_PRODUCTS"|oxmultilangassign subhead="WIDGET_PRODUCT_RELATED_PRODUCTS_SIMILAR_SUBHEADER"|oxmultilangassign}]
    [{/if}]
[{/block}]

[{if $oxidBlock_productbar}]
<div id="relProducts" class="relatedProducts">
        [{foreach from=$oxidBlock_productbar item="_block"}]
            [{$_block}]
        [{/foreach}]
    </div>
[{/if}]