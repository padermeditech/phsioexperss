[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]

[{ if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]


<script type="text/javascript">
<!--
[{ if $updatemain }]
    var oTransfer = parent.edit.document.getElementById("transfer");
    oTransfer.oxid.value=sID;
    oTransfer.cl.value='dgsearch_main';

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();
[{ /if}]
window.onload = function ()
{
    top.reloadEditFrame();
    [{ if $updatelist == 1}]
        top.oxid.admin.updateList('[{ $oxid }]');
    [{ /if}]
}
//-->
</script>
<style>

#dgLizenzSreen{ line-height: 34px; line-height: 34px; color: #888888;  position: absolute; right: 54px; bottom: 30px; font-weight:normal;}
#dgLanguageSreen{color: #888888;  position: absolute; right: 54px; bottom: 5px; font-weight:normal;}</style>

<form name="search" id="search" action="[{ $oViewConf->getSelfLink() }]" method="post">
[{ $oViewConf->getHiddenSid() }]
<input type="hidden" name="cl" value="dgsearch_list">
<input type="hidden" name="lstrt" value="[{ $lstrt }]">
<input type="hidden" name="sort" value="[{ $sort }]">
<input type="hidden" name="actedit" value="[{ $actedit }]">
<input type="hidden" name="oxid" value="[{ $oxid }]">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="updatenav" value="">

[{include file="pagetabsnippet.tpl"}]
<script type="text/javascript">
if (parent.parent != null && parent.parent.setTitle )
{   parent.parent.sShopTitle   = "[{$actshopobj->oxshops__oxname->value}]";
    parent.parent.sMenuItem    = "draufgeschaut®";
    parent.parent.sMenuSubItem = "OXID eShop Vorbestellung";
    parent.parent.sWorkArea    = "[{$_act}]";
    parent.parent.setTitle();
}
</script>
<div id="dgLanguageSreen"> <a target="blank" href="http://www.volker-doerk.de/index.php?cl=search&searchparam=suche">Modul bewerten</a> </div>

[{if $sLizenzNumber }]
<div id="dgLizenzSreen">Lizenz: [{ $sLizenzNumber }]</div>
[{/if}]
</body>
</html>