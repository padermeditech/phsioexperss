<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_b2b',
    'title'        => '<img src="../modules/asy/asy_seotitle/module_icon.png" alt="Alpha-Sys" title="Alpha-Sys"> B2B Erweiterungen (Netto-Preise, etc.)',
    'description'  => array(
        'de' => 'Dieses Modul erweitert Ihren Shop um wesentliche B2B Features wie die Anzeige von Netto-Preisen.'
    ),
    'thumbnail'    => 'module_logo.png',
    'version'      => '2.0.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'thumbnail'    => 'module_logo.png',
    'extend'       => array(
        \OxidEsales\Eshop\Core\Config::class => \AlphaSys\AsyB2B\Core\Config::class,
    ),
    'controllers' => array(
    ),
    'events'       => array(
    ),
    'templates' => array(
    ),
    'blocks' => array(
    ),
    'settings' => array(
        array('group' => 'asy_b2b_main', 'name' => 'aB2BCustomerGroups', 'type' => 'arr',   'value' => array('oxiddealer') ),
    )
);
