<?php

$sMetadataVersion = '2.1';

$aModule = [
	'id' => 'dgsearch',
	'title' => '<b style="-moz-border-radius: 2px;-webkit-border-radius: 2px;-khtml-border-radius: 2px;border-radius: 2px;background:#d1d2d2;font-size: 10px;border:1px solid #282828;padding:2px;font-weight:900;font-family:Verdana;"><span style="color: #282828;">d</span><span style="color: #880c02;">g</span></b> Simple Search',
	'description' => [
		'de' => '&nbsp; Unterst&uuml;tzen Sie unsere kostenlose Module <a href="https://paypal.me/draufgeschaut">https://paypal.me/draufgeschaut</a><br /><br />F&uuml;r die Installation &uuml;ber den Composer f&uuml;hren Sie folgende Befehle aus:<br /><ul><li>php composer config repositories.draufgeschaut composer https://update.draufgeschaut.de</li><li>php composer require draufgeschaut/dgsearch</li></ul>',
		'en' => '&nbsp; Unterst&uuml;tzen Sie unsere kostenlose Module <a href="https://paypal.me/draufgeschaut">https://paypal.me/draufgeschaut</a><br /><br />F&uuml;r die Installation &uuml;ber den Composer f&uuml;hren Sie folgende Befehle aus:<br /><ul><li>php composer config repositories.draufgeschaut composer https://update.draufgeschaut.de</li><li>php composer require draufgeschaut/dgsearch</li></ul>',
        'fr' => '&nbsp; Unterst&uuml;tzen Sie unsere kostenlose Module <a href="https://paypal.me/draufgeschaut">https://paypal.me/draufgeschaut</a><br /><br />F&uuml;r die Installation &uuml;ber den Composer f&uuml;hren Sie folgende Befehle aus:<br /><ul><li>php composer config repositories.draufgeschaut composer https://update.draufgeschaut.de</li><li>php composer require draufgeschaut/dgsearch</li></ul>' ],
	'thumbnail' => 'picture.png',
	'version' => '5.00',
	'author' => 'Volker D&ouml;rk, draufgeschaut.de',
	'email' => 'support@draufgeschaut.de',
	'url' => 'http://www.volker-doerk.de',
	'settings' => [], 
    'templates' => [ 
		'dgsearch/dgsearch_admin.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_admin.tpl',
		'dgsearch/dgsearch_exception.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_exception.tpl',
		'dgsearch/dgsearch_list.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_list.tpl',
		'dgsearch/dgsearch_main.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_main.tpl',
		'dgsearch/dgsearch_setup.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_setup.tpl',
		'dgsearch/dgsearch_support.tpl' => 'dgsearch/Application/views/admin/tpl/dgsearch_support.tpl',
		'dgsearch/dgsearchpopup.tpl' => 'dgsearch/Application/views/azure/tpl/dgsearchpopup.tpl' ], 
    'blocks' => [ 
		[ 'template' => 'layout/base.tpl', 'block' => 'base_js', 'file' => 'dgsearch_base_js.tpl', 'position' => '2' ],
		[ 'template' => 'layout/base.tpl', 'block' => 'base_style', 'file' => 'dgsearch_base_style.tpl', 'position' => '2' ] ], 
	'controllers' => [ 
		'dgsearch' => \dgModule\dgSearchModul\Application\Model\dgSearch::class,
		'dgsearch_admin' => \dgModule\dgSearchModul\Application\Controller\Admin\dgSearch_Admin::class,
		'dgsearch_list' => \dgModule\dgSearchModul\Application\Controller\Admin\dgSearch_List::class,
		'dgsearch_main' => \dgModule\dgSearchModul\Application\Controller\Admin\dgSearch_Main::class,
		'dgsearch_setup' => \dgModule\dgSearchModul\Application\Controller\Admin\dgSearch_Setup::class,
		'dgsearch_support' => \dgModule\dgSearchModul\Application\Controller\Admin\dgSearch_Support::class,
		'dgsearchconfig' => \dgModule\dgSearchModul\Application\Model\dgSearchConfig::class,
		'dgsearchevents' => \dgModule\dgSearchModul\Application\Model\dgSearchEvents::class,
		'dgsearchpopup' => \dgModule\dgSearchModul\Application\Controller\dgSearchPopUp::class,
		'dgsearchupdate' => \dgModule\dgSearchModul\Application\Model\dgSearchUpdate::class ], 
	'extend' => [ 
		\OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => \dgModule\dgSearchModul\Modul\dgSearch_Navigation::class,
		\OxidEsales\Eshop\Application\Model\Search::class => \dgModule\dgSearchModul\Modul\dgSearch_oxSearch::class ], 
    'smartyPluginDirectories' => [],
    'events' => [
        'onActivate'   => '\dgModule\dgSearchModul\Application\Model\dgSearchEvents::onActivate',
        'onDeactivate' => '\dgModule\dgSearchModul\Application\Model\dgSearchEvents::onDeactivate'  ]
    ];
      
?>