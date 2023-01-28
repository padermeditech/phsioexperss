<div id="detailsMain">
    [{include file="page/details/inc/productmain.tpl"}]
</div>

<div id="detailsRelated" class="detailsRelated clear">
    <div class="relatedInfo[{if !$oView->getSimilarProducts() && !$oView->getCrossSelling() && !$oView->getAccessoires()}] relatedInfoFull[{/if}]">
        <div class="row">
            <div class="col-xs-12">
                [{include file="page/details/inc/tabs.tpl"}]
				[{include file="page/details/inc/haveyouseen.tpl"}]
                [{if $oView->isReviewActive()}]
                    <div class="widgetBox reviews">
                        [{include file="widget/reviews/reviews.tpl"}]
                    </div>
                [{/if}]
            </div>
        </div>
    </div>

    <div class="row">
        <hr>
    </div>

    [{include file="page/details/inc/related_products.tpl"}]
</div>
