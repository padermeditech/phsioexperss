[{capture append="oxidBlock_content"}]
    [{assign var="oConfig" value=$oViewConf->getConfig()}]
    [{assign var='rsslinks' value=$oView->getRssLinks()}]
    [{oxscript include="js/pages/start.min.js"}]


	[{* <a href="[{ oxgetseourl ident=$oViewConf->getHomeLink()}]out/pdf/katalog_2018_web.pdf" target="_blank"><div id="startpage_b1"></div></a> *}]

	[{* <a href="[{ oxgetseourl oxid="859be35b14340cdc04cef7cc0d878be7" type="oxcategory" }]"><div id="startpage_b2"></div></a> *}]

	
	[{assign var="oBargainArticles" value=$oView->getBargainArticleList()}]
    [{assign var="oNewestArticles" value=$oView->getNewestArticles()}]
    [{assign var="oTopArticles" value=$oView->getTop5ArticleList()}]
	[{assign var="oCategoryArticles" value=$oView->getCategoryArticleList()}]

	
	<div class="responsiveflexslider">
		[{if $oNewestArticles && $oNewestArticles->count()}]
			[{include file="widget/product/flexslider-list.tpl" type=$oViewConf->getViewThemeParam('sStartPageListDisplayType') head="START_NEWEST_HEADER"|oxmultilangassign subhead="START_NEWEST_SUBHEADER"|oxmultilangassign listId="newItems" products=$oNewestArticles rsslink=$rsslinks.newestArticles rssId="rssNewestProducts" showMainLink=true iProductsPerLine=4}]
	   [{/if}]
	</div>
	
	<div class="responsiveflexslider">
		[{if $oCategoryArticles && $oCategoryArticles->count()}]
			[{include file="widget/product/flexslider-list.tpl" type=$oViewConf->getViewThemeParam('sStartPageListDisplayType') head="Gebrauchte Behandlungsliegen" subhead="START_NEWEST_SUBHEADER"|oxmultilangassign listId="categoryItems" products=$oCategoryArticles rsslink=$rsslinks.newestArticles rssId="rssNewestProducts" showMainLink=true iProductsPerLine=4}]
		[{/if}]
	</div>

	[{if $oView->getClassName()=='start'}]
		<div class="promotion">
			<div class="row">
				[{include file="widget/promoboxes2.tpl"}]
			</div>
		</div>
	[{/if}]
	
	[{include file="widget/aktionenshop.tpl"}]
	
	    [{if $oBargainArticles && $oBargainArticles->count()}]
        [{include file="widget/product/list.tpl" type=$oViewConf->getViewThemeParam('sStartPageListDisplayType') head="START_BARGAIN_HEADER"|oxmultilangassign subhead="START_BARGAIN_SUBHEADER"|oxmultilangassign listId="bargainItems" products=$oBargainArticles rsslink=$rsslinks.bargainArticles rssId="rssBargainProducts" showMainLink=true iProductsPerLine=4}]
    [{/if}]

    [{include file="widget/gebrauchtboerse.tpl"}]
	
    [{oxifcontent ident="oxstartwelcome" object="oCont"}]
        <div class="welcome-teaser">[{$oCont->oxcontents__oxcontent->value}]</div>
    [{/oxifcontent}]


	<div class="responsiveflexslider">
		[{if $oTopArticles && $oTopArticles->count()}]
			[{include file="widget/product/flexslider-list.tpl" type=$oViewConf->getViewThemeParam('sStartPageListDisplayType') head="START_TOP_PRODUCTS_HEADER"|oxmultilangassign subhead="START_TOP_PRODUCTS_SUBHEADER"|oxmultilangassign listId="topBox" products=$oTopArticles rsslink=$rsslinks.topArticles rssId="rssTopProducts" showMainLink=true iProductsPerLine=4}]
		[{/if}]
	</div>


	
    [{if $oViewConf->getViewThemeParam('bl_showManufacturerSlider')}]
        [{include file="widget/manufacturersslider.tpl"}]
    [{/if}]


    [{insert name="oxid_tracker"}]
[{/capture}]




[{include file="layout/page.tpl"}]