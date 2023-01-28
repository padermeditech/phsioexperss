<?php
/**
 * Price enter mode: bruto
 * Price view mode:  neto
 * Product count: count of used products
 * VAT info: 19%
 * Currency rate: 1.0
 * Discounts: -
 * Vouchers: -
 * Wrapping: -;
 * Gift cart:  -;
 * Costs VAT caclulation rule: proportional
 * Costs:
 *  1. Payment -
 *  2. Delivery -
 *  3. TS +
 */
$aData = array(
    'articles' => array(
        0 => array(
            'oxid'                     => 111,
            'oxprice'                  => 24.95,
            'oxvat'                    => 19,
            'amount'                   => 1,
        ),
    ),
    'expected' => array(
        'articles' => array(
             111 => array( '20,97', '20,97' ),
        ),
        'totals' => array(
            'totalBrutto' => '24,95',
            'totalNetto'  => '20,97',
            'vats' => array(
                19 => '3,98'
            ),
            'grandTotal'  => '24,95'
        ),
    ),
    'options' => array(
        'config' => array(
                'blEnterNetPrice' => false,
                'blShowNetPrice' => true,
                'blShowVATForWrapping' => true,
                'blShowVATForPayCharge' => true,
                'blShowVATForDelivery' => true,
                'sAdditionalServVATCalcMethod' => 'proportional',
        ),
        'activeCurrencyRate' => 1.00,
    ),
);
