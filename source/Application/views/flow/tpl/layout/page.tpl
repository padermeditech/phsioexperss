[{if $oView->getClassName() == 'alist' || $oView->getClassName() eq "start"}]
	[{assign var="sidebar" value=""}]
	
[{/if}]

[{if $oView->getClassName()=='start'}]
	[{assign var="sidebar" value=""}]
[{/if}]

[{capture append="oxidBlock_pageBody"}]
    [{if $oView->showRDFa()}]
        [{include file="rdfa/rdfa.tpl"}]
    [{/if}]

    [{block name="layout_header"}]
        [{include file="layout/header.tpl"}]
    [{/block}]

    [{assign var="blFullwidth" value=$oViewConf->getViewThemeParam('blFullwidthLayout')}]

    <div id="wrapper" [{if $sidebar}]class="sidebar[{$sidebar}]"[{/if}] [{if !$sidebar && $oView->getClassName()=='start' }]class="amazon_start"[{/if}]>
		
        <div class="[{if $blFullwidth}]container[{else}]container-fluid[{/if}]">

            <div class="underdog">

                <div class="row">

                    [{if $oView->getClassName()=='start' && $oView->getBanners()|@count > 0}]
                        [{include file="widget/promoslider.tpl"}]
                    [{/if}]

                </div>
				
				[{if $oView->getClassName()=='start'}]
				<div class="Icons">
					<div class="row">
						[{include file="widget/icons.tpl"}]
					</div>
				</div>
				[{/if}]
				
				[{if $oView->getClassName()=='start'}]
				<div class="promotion">
					<div class="row">
						[{include file="widget/promoboxes.tpl"}]
					</div>
				</div>
				[{/if}]
				
				[{if $oView->getClassName()=='start'}]
				<div class="promotion">
					<div class="row">
							[{include file="widget/nachrichtstart.tpl"}]
					</div>
				</div>
				[{/if}]

                <div class="content-box">

                    [{if $oView->getClassName() != "start" && !$blHideBreadcrumb}]
                        [{block name="layout_breadcrumb"}]
                            [{include file="widget/breadcrumb.tpl"}]
                        [{/block}]
                    [{/if}]

                    [{$smarty.capture.loginErrors}]

                    <div class="row">
                        [{if $sidebar && $sidebar != "Right"}]
                            <div class="col-xs-12 col-md-3 [{$oView->getClassName()}]" id="sidebar_responsive">
                                <div id="sidebar">
									<div class="row">
                                    	[{include file="layout/sidebar.tpl"}]
									</div>
                                </div>
                            </div>
                        [{/if}]

                        <div class="col-xs-12 [{if $sidebar}]col-md-9[{/if}]" id="content_responsive">

                            <div id="content">
                                [{block name="content_main"}]
                                    [{include file="message/errors.tpl"}]

                                    [{foreach from=$oxidBlock_content item="_block"}]
                                        [{$_block}]
                                    [{/foreach}]
                                [{/block}]
                            </div>

                        </div>

                        [{if $sidebar && $sidebar == "Right"}]
                            <div class="col-xs-12 col-md-3 [{$oView->getClassName()}]">
                                <div id="sidebar">
                                    [{include file="layout/sidebar.tpl"}]
                                </div>
                            </div>
                        [{/if}]
                    </div>

                </div>

            </div>

        </div>
		[{if $oView->getClassName()=='start'}]
				[{include file="widget/extrawerbung.tpl"}]
		[{/if}]
		
		[{if $oView->getClassName()=='start'}]
				[{include file="widget/seotext.tpl"}]
		[{/if}]
		
		
		
		
        
    </div>

    [{include file="layout/footer.tpl"}]

    [{block name="layout_init_social"}]
    [{/block}]

    <i class="fa fa-chevron-circle-up icon-4x" id="jumptotop"></i>
[{/capture}]
[{include file="layout/base.tpl"}]
