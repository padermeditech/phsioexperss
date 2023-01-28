[{include file="headitem.tpl" title="[OXID Benutzerverwaltung]"}]

<script type="text/javascript">
<!--

function _groupExp(el) {
    var _cur = el.parentNode;

    if (_cur.className == "exp") _cur.className = "";
      else _cur.className = "exp";
}

function showPleaseWait()
{
     var mask = document.getElementById("pleasewaiting");
     
     for (i=0;i<document.getElementsByTagName("div").length; i++) { 
        if ( document.getElementsByTagName("div").item(i).className == "box") 
        {  
        	winW = document.getElementsByTagName("div").item(i).offsetWidth;
            winH = document.getElementsByTagName("div").item(i).offsetHeight;
        } 
     } 

     if(mask )
     {
         mask.style.height = winH - 2;
         mask.style.width = winW - 20;
         mask.style.left = 30;
         mask.style.visibility = 'visible';
     }
}

function hidePleaseWait()
{
    var mask = document.getElementById("pleasewaiting");
    if(mask) mask.style.visibility = 'hidden';
}

//-->
</script>
<style>
<!--

.box {
  background-image: url('https://update.draufgeschaut.de/img/dg.gif');
  background-repeat: no-repeat;
  background-position: right bottom;
}

.dg { width: 24px;
      height: 24px;
      border: 1px solid #363431;
      padding: 1px 1px 1px 1px;
      background-color: #D1D2D2
}

div#pleasewaiting{
   background: url('[{ $oViewConf->getModuleUrl('dgsearch','out/admin/img/loading-bar.gif') }]') no-repeat 50% 50%;
   z-index: 50;
   position: absolute;
   top: 0px;
   left: 0px;
   width: 100%;
   height: 100%;
   background-color: rgb(255, 255, 255);
   opacity: 0.5;
   visibility: hidden; 
}
-->
</style>
<form name="transfer" id="transfer" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{ $oViewConf->getHiddenSid() }]
    <input type="hidden" name="oxid" value="[{  $oViewConf->getActiveShopId() }]" />
    <input type="hidden" name="cl" value="dgsearch_main" />
</form>


<form name="myedit" id="myedit" action="[{ $oViewConf->getSelfLink() }]" method="post">
[{ $oViewConf->getHiddenSid() }]
<input type="hidden" name="cl" value="dgsearch_main" />
<input type="hidden" name="fnc" value="" />
<input type="hidden" name="oxid" value="[{ $oViewConf->getActiveShopId() }]" />

<div onclick="hidePleaseWait()" id="pleasewaiting"></div>

<div class="groupExp">
        <div class="exp">
            <a href="#" onclick="_groupExp(this);return false;" class="rc"><b>Einstellungen</b></a>
            <dl>
                <dt>
                    <textarea class="txtfield" name="confarrs[aSearchCols]" [{ $readonly}]>[{$confarrs.aSearchCols}]</textarea>
                    [{ oxinputhelp ident="HELP_SHOP_CONFIG_SEARCHFIELDS" }]
                </dt>
                <dd>
                    [{ oxmultilang ident="SHOP_CONFIG_SEARCHFIELDS" }]
                </dd>
                <div class="spacer"></div>
            </dl>

            <dl>
                <dt>
                    <input type="hidden" name="confbools[blSearchUseAND]" value="false">
                    <input id="blSearchUseAND" type="checkbox" name="confbools[blSearchUseAND]" value="true"  [{if ($confbools.blSearchUseAND)}]checked[{/if}] [{ $readonly}]>
                    [{ oxinputhelp ident="HELP_" }]
                </dt>
                <dd>
                    <label for="blSearchUseAND">[{ oxmultilang ident="SHOP_CONFIG_SEARCHUSEAND" }]</label>
                </dd>
                <div class="spacer"></div>
            </dl>
            <dl>
                <dt>
                    <input type="text" class="txt" name="confstrs[dgSearchAmount]" value="[{$confstrs.dgSearchAmount}]" size="3" [{ $readonly}]>
                </dt>
                <dd>
                    Anzahl der Artikel die angezeigt werden
                </dd>
                <div class="spacer"></div>
            </dl>
            <dl>
                <dt>
                    <input type="text" class="txt" name="confstrs[dgSearchAlpha]" value="[{$confstrs.dgSearchAlpha}]" size="3" [{ $readonly}]>
                </dt>
                <dd>
                    suchen ab dem ? Buchstaben
                </dd>
                <div class="spacer"></div>
            </dl>
            <dl>
                <dt>
                    <input type="text" class="txt" name="confstrs[dgSearchDelay]" value="[{$confstrs.dgSearchDelay}]" size="3" [{ $readonly}]>
                </dt>
                <dd>
                    suchen mit ? Millisekunden Vers&ouml;gerung
                </dd>
                <div class="spacer"></div>
            </dl>
            <dl>
                <dt>
                    <input type="hidden" name="confbools[dgSearchManufacturer]" value="false">
                    <input id="dgSearchManufacturer" type="checkbox" name="confbools[dgSearchManufacturer]" value="true"  [{if ($confbools.dgSearchManufacturer)}]checked[{/if}] [{ $readonly}]>
                    
                </dt>
                <dd>
                    <label for="dgSearchManufacturer">Lieferanten Suche</label>
                </dd>
                <div class="spacer"></div>
            </dl>
            
            <dl>
                <dt>
                    <input type="hidden" name="confbools[dgSearchCategory]" value="false">
                    <input id="dgSearchCategory" type="checkbox" name="confbools[dgSearchCategory]" value="true"  [{if ($confbools.dgSearchCategory)}]checked[{/if}] [{ $readonly}]>
                    
                </dt>
                <dd>
                    <label for="dgSearchCategory">Kategorien Suche</label>
                </dd>
                <div class="spacer"></div>
            </dl>
            
            <dl>
                <dt>
                    <input type="hidden" name="confbools[dgSearchLog]" value="false">
                    <input id="dgSearchLog" type="checkbox" name="confbools[dgSearchLog]" value="true"  [{if ($confbools.dgSearchLog)}]checked[{/if}] [{ $readonly}]>
                    
                </dt>
                <dd>
                   <label for="dgSearchLog"> Suche mit loggen.</label>
                </dd>
                <div class="spacer"></div>
            </dl>
            
            <dl>
                <dt> </dt>
                <dd>                      
                   <button type="submit" class="edittext" onclick="showPleaseWait();this.form.fnc.value='save'"  [{ $readonly }]>[{ oxmultilang ident="ARTICLE_MAIN_SAVE" }]</button>
                </dd>
                <div class="spacer"></div>
            </dl>
         </div>
</div>
</form>
[{include file="bottomnaviitem.tpl" }]

[{include file="bottomitem.tpl"}]
