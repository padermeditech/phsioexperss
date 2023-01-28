[{ $smarty.block.parent }]

[{if $payment->oxpayments__oxid->value !== 'bestitamazon'}]
    <script>
        if(typeof amazon !== 'undefined')
            delete amazon;
    </script>
[{/if}]