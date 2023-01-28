[{* |layout/base.tpl|base_js|dgsearch_base_js.tpl|2| *}]

[{ $smarty.block.parent }]
[{oxscript include=$oViewConf->getModuleUrl('dgsearch','out/azure/src/dgsearch.js') priority=10 }]
[{assign var="_dgSearchurl" value=$oViewConf->getBaseDir() }]
[{oxscript add="$('#searchParam').dgSearchList({ searchUrl: '`$_dgSearchurl`index.php?add=1' });"}]
[{assign var="oConf" value=$oViewConf->getConfig()}]
<input id="dgSearchDelay" type="hidden" name="dgSearchDelay" value="[{ $oConf->getConfigParam('dgSearchDelay')|default:"1" }]" />
<input id="dgSearchAlpha" type="hidden" name="dgSearchAlpha" value="[{ $oConf->getConfigParam('dgSearchAlpha')|default:"1" }]" />
 [{ if $oView->getClassName() == "search" }]

 [{/if}]