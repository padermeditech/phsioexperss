[{assign var="aKlPromotion" value=$oViewConf->getOnSitePromotionInfo('sKlarnaStripPromotion')}]
[{assign var="sKlarnaMessagingScript" value=$oViewConf->getOnSitePromotionInfo('sKlarnaMessagingScript')}]
[{if $aKlPromotion && $oView->getClassName() === 'start' && $sKlarnaMessagingScript|trim}]
    <div>
        [{$aKlPromotion}]
    </div>
    <div class="clear clearfix"></div>
[{/if}]



[{$smarty.block.parent}]