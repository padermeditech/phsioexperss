[{assign var="blFirstTab" value=true}]
[{assign var="oConfig" value=$oViewConf->getConfig()}]

[{block name="details_tabs_longdescription"}]
    [{oxhasrights ident="SHOWLONGDESCRIPTION"}]
        [{assign var="oLongdesc" value=$oDetailsProduct->getLongDescription()}]
		[{assign var="actCategory" value=$oView->getActiveCategory()}]
		[{assign var="artikelnummer_lehrtafel" value="12122-V,12122,12123,12134,12132,12327,12135,12133,12328,12126,12124,12127,12125,12450-V,12450,12451,12452,12453,12454,12455,12456,12457,12458,12459,12460,12461,12462,12463,12464,12465,12466,12467,12468,12469,12470,12471,12472,12473"}]
		[{assign var="akt_artikelnummer" value=$oDetailsProduct->oxarticles__oxartnum->value}]
        [{if $oLongdesc->value}]
            <div id="description" class="tab-pane[{if $blFirstTab}] active[{/if}]">
			
				[{if $artikelnummer_lehrtafel|strstr:$akt_artikelnummer}]
					[{assign var="seo-title" value=$oDetailsProduct->oxarticles__asy_seotitle->value}]
					[{if $oDetailsProduct->oxarticles__oxvarselect->value|strstr:'Mini-Poster'}]
						[{assign var="lehrtafel_art" value="Mini-Poster"}]
						[{assign var="lehrtafel_art_plural" value="Mini-Poster"}]
						[{assign var="beleistung" value="ohne Beleistung"}]
						[{assign var="groesse" value="24 x 34 cm"}]
						[{assign var="artikel" value="Das"}]
					[{elseif $oDetailsProduct->oxarticles__oxvarselect->value|strstr:'Poster'}]
						[{assign var="lehrtafel_art" value="Poster"}]
						[{assign var="lehrtafel_art_plural" value="Poster"}]
						[{assign var="beleistung" value="mit Beleistung"}]
						[{assign var="groesse" value="50 x 70 cm"}]
						[{assign var="artikel" value="Das"}]
					[{else}]
						[{assign var="lehrtafel_art" value="Lehrtafel"}]
						[{assign var="lehrtafel_art_plural" value="Lehrtafeln"}]
						[{assign var="beleistung" value="mit Beleistung"}]
						[{assign var="groesse" value="70 x 100 cm"}]
						[{assign var="artikel" value="Die"}]
					[{/if}]
						
					[{if $oDetailsProduct->oxarticles__oxvarselect->value}]
						[{assign var="postername" value=$oDetailsProduct->oxarticles__oxvarselect->value}]
						[{assign var="awords" value="|"|explode:$postername}]
						[{assign var="title_variante" value=$awords[0]}]
					[{else}]
						[{assign var="title_variante" value=$oDetailsProduct->oxarticles__oxtitle->value}]
					[{/if}]
					
					[{if $oDetailsProduct->oxarticles__oxvarselect->value|strstr:'unlaminiert'}]
						[{assign var="laminiert_unlaminiert" value='ist <b>unlaminiert.</b> Laminierte Poster oder Lehrtafeln haben  durch die Laminierung einen zus??tzlichen Schutz vor Rissen, Besch??digungen und Schmutz.'}]
					[{elseif $oDetailsProduct->oxarticles__oxvarselect->value|strstr:'laminiert'}]
						[{assign var="laminiert_unlaminiert" value='ist <b>laminiert</b> und dadurch zus??tzlich rei??fest. Laminierte Poster oder Lehrtafeln sind praktisch unverw??stlich und absolut rei??fest. Sie k??nnen mit einem wasserl??slichen Filzstift beschriftet werden, und anschlie??end muss man sie nur abwischen.'}]
					[{else}]
						[{assign var="laminiert_unlaminiert" value='kann <b>laminiert</b> oder <b>unlaminiert</b> geliefert werden. Laminierte Lehrtafeln oder Poster sind praktisch unverw??stlich und absolut rei??fest. Sie k??nnen mit einem wasserl??slichen Filzstift beschriftet werden, und anschlie??end muss man sie nur abwischen.'}]
					[{/if}]
				
					
					[{if $seo-title}]
						<h2>Beschreibung [{$seo-title}]</h2>
					[{else}]
						<h2>Beschreibung [{$lehrtafel_art}] [{$title_variante}]</h2>	
					[{/if}]
					
					[{if $$oLongdesc}]
						</p>[{oxeval var=$oLongdesc}]</p>
					[{/if}]
					
					[{if $oDetailsProduct->oxarticles__oxvarselect->value|strstr:'Poster'}]
						<p>Die anatomischen <b>[{$lehrtafel_art_plural}] [{$title_variante}]</b> sind eine originalgetreue Vierfarbenproduktion der gro??en Lehrtafeln - 
						gedruckt auf 250g Kunstdruckkarton. [{$artikel}] [{$lehrtafel_art}] hat eine Gr????e von [{$groesse}] und besitzt an der R??ckseite eine Aufh??nge??se zum 
						Aufh??ngen an die Wand.</p>
					[{else}]
						<p>Die anatomische <b>Lehrtafel [{$title_variante}]</b> ist aus Kunststoff-Folie gefertigt und besitzt eine Metall-Leiste am oberen und unteren Rand. Zur Befestigung verf??gt die 
						Lehtafel ??ber eine Aufh??ngekordel. Die Beschriftungen sind zweisprachig: deutsch und englisch.</p>	
					[{/if}]
					
					<p>Die anatomischen [{$lehrtafel_art_plural}] stellen komplexe anatomische Zusammenh??nge leicht verst??ndlich und ??bersichtlich dar. 
					Sie sind mit deutscher ??berschrift und deutsch/lateinische Nomenklatur versehen. Die Erl??uterungstexte sind in Deutsch und Englisch dargestellt. 
					Perfekt geeignet f??r den Arzt, den Physiotherapeuten oder den Unterricht in der Schule. 
					Eine Aufkl??rung des Patienten kann mithilfe der anatomischen [{$lehrtafel_art_plural}] leicht und verst??ndlich erfolgen. In anschaulicherweise wird das Thema [{$title_variante}] bildlich veranschaulicht.</p>
					
					<p>[{$artikel}] [{$lehrtafel_art}] [{$laminiert_unlaminiert}]</p>
					
				[{else}]
					<p>[{oxeval var=$oLongdesc}]</p>
				[{/if}]
				
				[{if $oDetailsProduct->oxarticles__oxexturl->value}]
					<a id="productExturl" class="js-external" href="http://[{$oDetailsProduct->oxarticles__oxexturl->value}]">
					[{if $oDetailsProduct->oxarticles__oxurldesc->value}]
                        [{$oDetailsProduct->oxarticles__oxurldesc->value}]
                    [{else}]
                        [{$oDetailsProduct->oxarticles__oxexturl->value}]
                    [{/if}]
                    </a>
                [{/if}]
					
            </div>
            [{assign var="blFirstTab" value=false}]
        [{/if}]
    [{/oxhasrights}]
[{/block}]


[{block name="details_tabs_attributes"}]
    [{if $oView->getAttributes()}]
        [{capture append="tabs"}]<a href="#attributes" data-toggle="tab">[{oxmultilang ident="SPECIFICATION"}]</a>[{/capture}]
        [{capture append="tabsContent"}]
            <div id="attributes" class="tab-pane[{if $blFirstTab}] active[{/if}]">[{include file="page/details/inc/attributes.tpl"}]</div>
            [{assign var="blFirstTab" value=false}]
        [{/capture}]
    [{/if}]
[{/block}]

[{block name="details_tabs_pricealarm"}]
    [{if $oView->isPriceAlarm() && !$oDetailsProduct->isParentNotBuyable()}]
        [{capture append="tabs"}]<a href="#pricealarm" data-toggle="tab">[{oxmultilang ident="PRICE_ALERT"}]</a>[{/capture}]
        [{capture append="tabsContent"}]
            <div id="pricealarm" class="tab-pane[{if $blFirstTab}] active[{/if}]">[{include file="form/pricealarm.tpl"}]</div>
            [{assign var="blFirstTab" value=false}]
        [{/capture}]
    [{/if}]
[{/block}]

[{block name="details_tabs_tags"}]
[{/block}]

[{block name="details_tabs_media"}]
    [{if $oView->getMediaFiles() || $oDetailsProduct->oxarticles__oxfile->value}]
        [{capture append="tabs"}]<a href="#media" data-toggle="tab">[{oxmultilang ident="MEDIA"}]</a>[{/capture}]
        [{capture append="tabsContent"}]
            <div id="media" class="tab-pane[{if $blFirstTab}] active[{/if}]">[{include file="page/details/inc/media.tpl"}]</div>
            [{assign var="blFirstTab" value=false}]
        [{/capture}]
    [{/if}]
[{/block}]

[{block name="details_tabs_comments"}]
[{/block}]

[{block name="details_tabs_invite"}]
[{/block}]

<!--[{block name="details_tabs_main"}]
    [{if $tabs}]
        <div class="tabbedWidgetBox clear">
            <ul id="itemTabs" class="nav nav-tabs">
                [{foreach from=$tabs item="tab" name="tabs"}]
                    <li[{if $smarty.foreach.tabs.first}] class="active"[{/if}]>[{$tab}]</li>
                [{/foreach}]
                [{block name="details_tabs_social_navigation"}][{/block}]
            </ul>
            <div class="tab-content">
                [{foreach from=$tabsContent item="tabContent" name="tabsContent"}]
                    [{$tabContent}]
                [{/foreach}]
                [{block name="details_tabs_social_content"}][{/block}]
            </div>
        </div>
    [{/if}]
[{/block}] -->

