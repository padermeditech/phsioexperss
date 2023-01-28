[{if $oViewConf->isKlarnaCheckoutEnabled()}]
    [{if !$oViewConf->isActiveControllerKlarnaExpress()}]
        [{$smarty.block.parent}]
        [{if $_prefix == 'modal'}]
            <script>
                var button = '<a class="btn btn-primary submitButton largeButton" ' +
                    'href="[{oxgetseourl ident=$oViewConf->getSslSelfLink()|cat:"cl=KlarnaExpress"|html_entity_decode}]">' +
                    '[{oxmultilang ident="TCKLARNA_GO_TO_CHECKOUT"}]</a>';
            </script>
            [{oxscript add='$(".modal-footer").append(button);'}]
        [{else}]
            <script>
                var url = "[{ $oViewConf->getSslSelfLink()|cat:"cl=KlarnaExpress"|html_entity_decode}]";
            </script>
            [{oxscript add='$("p.functions .btn-primary").attr("href", url);'}]
        [{/if}]
    [{/if}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]


