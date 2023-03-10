		[{assign var="shop"      value=$oEmailView->getShop()}]
[{assign var="oViewConf" value=$oEmailView->getViewConfig()}]
[{capture assign="style"}]
    table.orderarticles th {
        white-space: nowrap;
    }
    table.orderarticles th, table.orderarticles td {
        border: 1px solid #d4d4d4;
        font-size: 13px;
        padding:5px;
    }
    table.orderarticles {
        border-collapse: collapse;
    }
    table.orderarticles thead th {
        background-color: #ebebeb;
    }
[{/capture}]
[{include file="email/html/header.tpl" title="DD_ORDERSHIPPED_HEADING"|oxmultilangassign|cat:" #"|cat:$order->oxorder__oxordernr->value style=$style}]
    [{block name="email_html_ordershipped_sendemail"}]
       [{oxcontent ident="oxordersendemail"}]
    [{/block}]
    [{block name="email_html_ordershipped_infoheader"}]
        <h2 style="color:#044996; border-bottom: 2px solid #f8a61c; margin-bottom: 10px;">[{oxmultilang ident="SHIPPING_ADDRESS"}]</h2>
    [{/block}]
    [{block name="email_html_ordershipped_address"}]
        <p>
            [{if $order->oxorder__oxdellname->value}]
              [{$order->oxorder__oxdelcompany->value}]<br>
              [{$order->oxorder__oxdelfname->value}] [{$order->oxorder__oxdellname->value}]<br>
              [{$order->oxorder__oxdelstreet->value}] [{$order->oxorder__oxdelstreetnr->value}]<br>
              [{$order->oxorder__oxdelstateid->value}]
              [{$order->oxorder__oxdelzip->value}] [{$order->oxorder__oxdelcity->value}]
            [{else}]
              [{$order->oxorder__oxbillcompany->value}]<br>
              [{$order->oxorder__oxbillfname->value}] [{$order->oxorder__oxbilllname->value}]<br>
              [{$order->oxorder__oxbillstreet->value}] [{$order->oxorder__oxbillstreetnr->value}]<br>
              [{$order->oxorder__oxbillstateid->value}]
              [{$order->oxorder__oxbillzip->value}] [{$order->oxorder__oxbillcity->value}]
            [{/if}]
        </p>
        <br/>
    [{/block}]
    [{block name="email_html_ordershipped_oxordernr"}]
        <h2 style="color:#044996; border-bottom: 2px solid #f8a61c; margin-bottom: 10px;">[{oxmultilang ident="ORDER_NUMBER" suffix="COLON"}] [{$order->oxorder__oxordernr->value}]</h2>
    [{/block}]
    <table class="orderarticles" border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
            <tr>
                <th class="text-right">[{oxmultilang ident="QUANTITY"}]</th>
                <th>[{oxmultilang ident="PRODUCT"}]</th>
            </tr>
        </thead>
        <tbody>
            [{block name="email_html_ordershipped_orderarticles"}]
                [{foreach from=$order->getOrderArticles(true) item=oOrderArticle}]
                    <tr valign="top">
                        <td align="right" class="text-right">[{$oOrderArticle->oxorderarticles__oxamount->value}]</td>
                        <td>
                            [{$oOrderArticle->oxorderarticles__oxtitle->value}] [{$oOrderArticle->oxorderarticles__oxselvariant->value}]
                            <br>[{oxmultilang ident="PRODUCT_NO" suffix="COLON"}] [{$oOrderArticle->oxorderarticles__oxartnum->value}]
                        </td>
                    </tr>
                [{/foreach}]
            [{/block}]
        </tbody>
    </table>
    <br/>
[{block name="email_html_ordershipped_shipmenttrackingurl"}]	
        [{if $order->getShipmentTrackingUrl()}]	
            <p>[{oxmultilang ident="SHIPMENT_TRACKING" suffix="COLON"}] <a href="[{$order->getShipmentTrackingUrl()}]" target="_blank" title="[{oxmultilang ident="CLICK_HERE"}]">[{oxmultilang ident="CLICK_HERE"}]</a></p>	
            <br/>	
        [{/if}]	
    [{/block}]

[{include file="email/html/footer.tpl"}]