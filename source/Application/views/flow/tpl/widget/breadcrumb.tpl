
[{block name="dd_widget_breadcrumb"}]
    [{strip}]
        <div class="row">
            <div class="col-xs-12">
                [{block name="dd_widget_breadcrumb_list_inner"}]
                    <ol id="breadcrumb" class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                        [{block name="dd_widget_breadcrumb_list"}]
                            <li class="text-muted">[{oxmultilang ident="YOU_ARE_HERE"}]:</li>
                            [{assign var=counter value=1}]
                            [{foreach from=$oView->getBreadCrumb() item="sCrum" name="breadcrumb"}]
                                [{if $oView->getClassName()=='alist' && $smarty.foreach.breadcrumb.last}]
										
									[{else}]
										<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"[{if $oView->getClassName()!='details' && $oView->getClassName()!='alist' && $oView->getClassName()!='manufacturerlist'}][{if $smarty.foreach.breadcrumb.last}] class="active"[{/if}][{/if}]>
											<a href="[{if $sCrum.link}][{$sCrum.link}][{else}]#[{/if}]" title="[{$sCrum.title|escape:'html'}]" itemprop="item">
												<span itemprop="name">[{$sCrum.title}]</span>
											</a>
											<meta itemprop="position" content="[{$counter}]" />
										 </li>
									[{/if}]	
                            [{assign var=counter value=$counter+1}] 
                            [{/foreach}]
							[{if $oView->getClassName()=='details'}]
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"[{if $smarty.foreach.breadcrumb.last}] class="active"[{/if}]>
									<h1 itemprop="name">[{if $oDetailsProduct->oxarticles__asy_seotitle!=''}][{$oDetailsProduct->oxarticles__asy_seotitle}][{else}][{$oDetailsProduct->oxarticles__oxtitle}][{/if}]</h1>
									<meta itemprop="position" content="[{$counter}]" />
								</li>
							[{/if}]
							[{if $oView->getClassName()=='alist'}]
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"[{if $smarty.foreach.breadcrumb.last}] class="active"[{/if}]>
									<h1 itemprop="name">[{if $actCategory->oxcategories__asy_seotitle!=''}][{$actCategory->oxcategories__asy_seotitle}][{else}][{$oView->getTitle()}][{/if}]</h1>
									<meta itemprop="position" content="[{$counter}]" />
								</li>
							[{/if}]
							[{if $oView->getClassName()=='manufacturerlist'}]
								<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"[{if $smarty.foreach.breadcrumb.last}] class="active"[{/if}]>
									<h1 itemprop="name">[{if $actCategory->oxcategories__asy_seotitle!=''}][{$actCategory->oxcategories__asy_seotitle}][{else}][{$oView->getTitle()}][{/if}]</h1>
									<meta itemprop="position" content="[{$counter}]" />
								</li>
							[{/if}]

                        [{/block}]
                    </ol>
                [{/block}]
            </div>
        </div>
    [{/strip}]
[{/block}]
