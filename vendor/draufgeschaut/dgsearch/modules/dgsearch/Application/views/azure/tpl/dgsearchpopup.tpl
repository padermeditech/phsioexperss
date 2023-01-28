[{assign var="searchparamforhtml" value=$oView->getSearchParamForHtml() }]
[{assign var="search_head" value="PAGE_SEARCH_SEARCH_HITSFOR"|oxmultilangassign}]
[{assign var="search_head" value=$oView->getArticleCount()|cat:" "|cat:$search_head|cat:" &quot;"|cat:$oView->getSearchParamForHtml()|cat:"&quot;"}]

[{if $oView->getArticleCount() }]


<link rel="stylesheet" href="[{$oViewConf->getModuleUrl('dgsearch','out/azure/src/dgsearch.css')}]" type="text/css" />
[{assign var="colspan" value=2 }]
[{assign var="dgSearchManufacturer" value=$oView->dgSearchManufacturer() }]
[{ if $dgSearchManufacturer|@count > 0 }]
[{assign var="colspan" value=3 }]
[{capture name="dgSearchManufacturerHtml"}]
<table border="0" cellpadding="5" cellspacing="2">
  <colgroup>
    <col width="100%">
  </colgroup>
  <tr>
    <th>[{oxmultilang ident="FOOTER_MANUFACTURERS"}]</th>
  </tr>
  <tr>
     <td class="manufaturer">
       [{foreach from=$dgSearchManufacturer name=manufacturer item=oManufacturer}]
          <a href="[{ $oManufacturer->getLink() }]"><img border="0" alt="" src="[{ $oManufacturer->getIconUrl() }]" height="42" /></a>
       [{/foreach}]
     </td>
  </tr>
</table>
<br />
[{/capture}]
[{/if}]
[{assign var="dgSearchCategory" value=$oView->dgSearchCategory() }]
[{ if $dgSearchCategory|@count > 0 }]
[{assign var="colspan" value=3 }]
[{capture name="dgSearchCategoryHtml"}]
<table border="0" cellpadding="5" cellspacing="2">
  <colgroup>
    <col width="100%">
  </colgroup>
  <tr>
    <th>[{oxmultilang ident="FOOTER_CATEGORIES"}]</th>
  </tr>
  <tr>
     <td class="category">
     <table border="0" cellpadding="0" cellspacing="2">
     [{foreach from=$dgSearchCategory name=category item=oCategory}]
      <tr>
        <td>                        
          <a href="[{ $oCategory->getLink() }]">[{ $oCategory->oxcategories__oxtitle->value }]</a>
        </td>
      </tr>
     [{/foreach}]
     </table>
    </td>
  </tr>
</table>
<br />
[{/capture}]
[{/if}]

<table border="0" cellpadding="5" cellspacing="2">
[{if $colspan == 2 }]
  <colgroup>
    <col width="5%">
    <col width="95%">
  </colgroup>
[{elseif $colspan == 3 }]
  <colgroup>
    <col width="5%">
    <col width="60%">
    <col width="35%">
  </colgroup>
[{/if}]
  <tr>
      <td align="right" colspan="[{$colspan}]"><a href="#" onclick="$('#searchresults').html('').hide();" class="dgclosePop">x</a></td>
    </tr>
    [{foreach from=$oView->getArticleList() name=article item=oArticle}]
      <tr>
	    <td class="article">
            <div class="article-block">
            <a href="[{ $oArticle->getLink() }]">
                <div class="product_image_s_container">
                    <img alt="" src="[{ $oArticle->getIconUrl() }]" />
                </div>
                <div class="article-info">
                    <span>[{$oArticle->oxarticles__oxtitle->value }]</span>
                    <small>[{oxmultilang ident="PRODUCT_NO" suffix="COLON"}] [{$oArticle->oxarticles__oxartnum->value}]</small>
                </div>
            </a>
            </div>
        </td>
      </tr>
    [{/foreach}]
</table>
[{/if}]