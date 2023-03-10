[{block name="footer_services"}]
    <ul class="services list-unstyled">
        [{block name="footer_services_items"}]
            <li><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=contact"}]" rel="nofollow">[{oxmultilang ident="CONTACT"}]</a></li>
            [{if $oViewConf->getViewThemeParam('blFooterShowHelp')}]
                <li><a href="[{$oViewConf->getHelpPageLink()}]" rel="nofollow">[{oxmultilang ident="HELP"}]</a></li>
            [{/if}]
			<li><a href="https://www.physioexpress.de/mein-konto" rel="nofollow">[{oxmultilang ident="B2B"}]</a></li>
            [{if $oViewConf->getViewThemeParam('blFooterShowLinks')}]
                <li><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=links"}]" rel="nofollow">[{oxmultilang ident="LINKS"}]</a></li>
            [{/if}]
            [{if $oView->isActive('Invitations')}]
                <li><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=invite"}]" rel="nofollow">[{oxmultilang ident="INVITE_YOUR_FRIENDS"}]</a></li>
            [{/if}]
            [{oxhasrights ident="TOBASKET"}]
                <li>
                    <a href="[{oxgetseourl ident=$oViewConf->getBasketLink()}]" rel="nofollow">
                        [{oxmultilang ident="CART"}]
                    </a>
                    [{if $oxcmp_basket && $oxcmp_basket->getItemsCount() > 0}] <span class="badge">[{$oxcmp_basket->getItemsCount()}]</span>[{/if}]
                </li>
            [{/oxhasrights}]
            <li><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=account"}]" rel="nofollow">[{oxmultilang ident="ACCOUNT"}]</a></li>
            <li>
                <a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=account_noticelist"}]" rel="nofollow">
                    [{oxmultilang ident="WISH_LIST"}]
                </a>
                [{if $oxcmp_user && $oxcmp_user->getNoticeListArtCnt()}] <span class="badge">[{$oxcmp_user->getNoticeListArtCnt()}]</span>[{/if}]
            </li>
            [{if $oViewConf->getShowWishlist()}]
                <li>
                    <a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=account_wishlist"}]" rel="nofollow">
                        [{oxmultilang ident="MY_GIFT_REGISTRY"}]
                    </a>
                    [{if $oxcmp_user && $oxcmp_user->getWishListArtCnt()}] <span class="badge">[{$oxcmp_user->getWishListArtCnt()}]</span>[{/if}]
                </li>
                <li>
                    <a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=wishlist" params="wishid="|cat:$oView->getWishlistUserId()}]" rel="nofollow">
                        [{oxmultilang ident="PUBLIC_GIFT_REGISTRIES"}]
                    </a>
                </li>
            [{/if}]
            [{if $oView->isEnabledDownloadableFiles()}]
                <li><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=account_downloads"}]" rel="nofollow">[{oxmultilang ident="MY_DOWNLOADS"}]</a></li>
            [{/if}]
        [{/block}]
    </ul>
[{/block}]