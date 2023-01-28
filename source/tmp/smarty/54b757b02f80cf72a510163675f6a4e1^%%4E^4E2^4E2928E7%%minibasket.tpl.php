<?php /* Smarty version 2.6.31, created on 2022-12-28 10:45:16
         compiled from widget/minibasket/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxhasrights', 'widget/minibasket/minibasket.tpl', 7, false),array('function', 'oxscript', 'widget/minibasket/minibasket.tpl', 9, false),array('function', 'oxmultilang', 'widget/minibasket/minibasket.tpl', 17, false),array('function', 'math', 'widget/minibasket/minibasket.tpl', 55, false),array('function', 'oxid_include_widget', 'widget/minibasket/minibasket.tpl', 99, false),array('function', 'oxgetseourl', 'widget/minibasket/minibasket.tpl', 123, false),array('function', 'oxprice', 'widget/minibasket/minibasket.tpl', 184, false),array('function', 'oxstyle', 'widget/minibasket/minibasket.tpl', 207, false),array('modifier', 'count', 'widget/minibasket/minibasket.tpl', 31, false),array('modifier', 'strip_tags', 'widget/minibasket/minibasket.tpl', 33, false),array('modifier', 'cat', 'widget/minibasket/minibasket.tpl', 123, false),array('modifier', 'trim', 'widget/minibasket/minibasket.tpl', 217, false),array('modifier', 'oxescape', 'widget/minibasket/minibasket.tpl', 217, false),array('modifier', 'html_entity_decode', 'widget/minibasket/minibasket.tpl', 364, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount() >= 5): ?>
    <?php $this->assign('blScrollable', true); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
        <?php echo smarty_function_oxscript(array('include' => "js/libs/jquery.flexslider.min.js",'priority' => 2), $this);?>

        <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('jxadvancedcheckout','out/src/js/jxadvancedcheckout.js'),'priority' => 10), $this);?>

        <div class="modal fade basketFlyout" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</span>
                        </button>
                        <h4 class="modal-title" id="basketModalLabel"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout">
                            <div class="last-added-item">
                                <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['_product']->isLastAddedItem()): ?>
                                        <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                        <?php $this->assign('oArticle', $this->_tpl_vars['_product']->getArticle()); ?>
                                        <?php $this->assign('oAccessoires', $this->_tpl_vars['oArticle']->getAccessoires()); ?>
                                        <?php $this->assign('iAccessoiresCount', count($this->_tpl_vars['oAccessoires'])); ?>
                                        <div class="item-image">
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                                                                <img src="<?php echo $this->_tpl_vars['oArticle']->getThumbnailUrl(); ?>
#" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" onerror="this.src='/out/pflanzenheld/img/nopic.jpg'"/>
                                            </a>
                                        </div>
                                        <div class="item-description">
                                            <div class="title">
                                                <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
                                            </div>
                                            <div class="artnum">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'ARTNUM','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value; ?>

                                            </div>
                                            <div class="price-wrapper">
                                                <span class="amount"><?php echo $this->_tpl_vars['_product']->getAmount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => '_UNIT_PIECE'), $this);?>
</span>
                                                <span class="price">
                                                    <?php $this->assign('priceWithoutDiscount', $this->_tpl_vars['_product']->getDetailsPageCalculatedPriceWithoutDiscount()); ?>
                                                    <?php $this->assign('summPriceWithoutDiscount', $this->_tpl_vars['priceWithoutDiscount']*$this->_tpl_vars['_product']->getAmount()); ?>
                                                    <?php $this->assign('oPrice', $this->_tpl_vars['_product']->getPrice()); ?>
                                                    <?php $this->assign('summTotalPrice', $this->_tpl_vars['oPrice']->getPrice()); ?>
                                                    <?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['summPriceWithoutDiscount'],'y' => $this->_tpl_vars['summTotalPrice'],'assign' => 'priceSaving','format' => "%.2f"), $this);?>

                                                    <?php if ($this->_tpl_vars['priceSaving']): ?>
                                                        <div class="without-discount">
                                                            <span class="all-items-price__price"><?php echo $this->_tpl_vars['_product']->getFTotalDetailsPageCalculatedPriceWithoutDiscount(); ?>
</span>
                                                            <span class="all-items-price__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>

                                                            <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                                                                <?php if (! ( $this->_tpl_vars['oArticle']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['oArticle']->getSelections(1) ) || $this->_tpl_vars['oArticle']->getVariants() )): ?>*<?php endif; ?>
                                                            <?php endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="with-discount">
                                                            <span class="all-items-price__price"><?php echo $this->_tpl_vars['_product']->getFTotalPrice(); ?>
</span>
                                                            <span class="all-items-price__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>

                                                            <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                                                                <?php if (! ( $this->_tpl_vars['oArticle']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['oArticle']->getSelections(1) ) || $this->_tpl_vars['oArticle']->getVariants() )): ?>*<?php endif; ?>
                                                            <?php endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="saving-notice">
                                                            <b><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_SAVING'), $this);?>
:</b>
                                                            <span class="saving-notice__price"><?php echo $this->_tpl_vars['priceSaving']; ?>
</span>
                                                            <span class="saving-notice__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php echo $this->_tpl_vars['_product']->getFTotalPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>

                                                        <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                                                            <?php if (! ( $this->_tpl_vars['oArticle']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['oArticle']->getSelections(1) ) || $this->_tpl_vars['oArticle']->getVariants() )): ?>*<?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>

                                        <?php if ($this->_tpl_vars['iAccessoiresCount'] > 0): ?>
                                            <?php ob_start(); ?>
                                                <div class="boxwrapper">
                                                <div class="flexslider">
                                                    <div class="accessoires-block-header">
                                                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDCHECKOUT_ACCESSORIES_HEADER'), $this);?>
</b> <?php echo $this->_tpl_vars['minibasketItemTitle']; ?>

                                                    </div>
                                                    <ul class="slides">
                                                        <?php $_from = $this->_tpl_vars['oAccessoires']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['accessoires'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['accessoires']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['accessoires']['iteration']++;
?>
                                                        <?php $this->assign('type', $this->_tpl_vars['oViewConf']->getViewThemeParam('sStartPageListDisplayType')); ?>
                                                        <li>
                                                            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','isMinibasketAccessory' => 1,'defaultAmountInputValue' => 0,'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'sWidgetType' => 'product','sListType' => 'listitem_grid','iIndex' => $this->_tpl_vars['testid'],'blDisableToCart' => 1,'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => $this->_tpl_vars['showMainLink'],'recommid' => $this->_tpl_vars['recommid'],'owishid' => $this->_tpl_vars['owishid'],'toBasketFunction' => $this->_tpl_vars['toBasketFunction'],'removeFunction' => $this->_tpl_vars['removeFunction'],'altproduct' => $this->_tpl_vars['altproduct'],'inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1,'testid' => $this->_tpl_vars['testid']), $this);?>

                                                        </li>
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_basketmodal_accessoires_products', ob_get_contents());ob_end_clean(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <div class="accessoires-block">
                                <?php $_from = $this->_tpl_vars['oxidBlock_basketmodal_accessoires_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
                                <?php echo $this->_tpl_vars['_block']; ?>

                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        </div>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <div class="action-buttons">
                            <button type="button" class="btn btn-default close-btn" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_CONTINUE_SHOPPING'), $this);?>
</button>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" style="display: none" id="add-accessories-btn" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDCHECKOUT_ACCESSORIES_SUBMIT'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDCHECKOUT_ACCESSORIES_SUBMIT'), $this);?>
</a>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <?php echo smarty_function_oxscript(array('add' => "$('#basketModal').modal('show');"), $this);?>

        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        
        <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        
    <?php endif; ?>
<?php else: ?>
    <?php if ($this->_tpl_vars['oViewConf']->isKlarnaCheckoutEnabled()): ?>
    <?php if (! $this->_tpl_vars['oViewConf']->isActiveControllerKlarnaExpress()): ?>
        
    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

            <?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
                <div class="modal fade basketFlyout" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</span>
                                </button>
                                <h4 class="modal-title" id="basketModalLabel"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</h4>
                            </div>
                            <div class="modal-body">
                                <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout">
                                            <div class="">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_TITLE'), $this);?>
</th>
                                                            <th class="text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_PRICE'), $this);?>
</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                                            
                                                                <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                                            <span class="item">
                                                                                <?php if ($this->_tpl_vars['_product']->getAmount() > 1): ?>
                                                                                    <?php echo $this->_tpl_vars['_product']->getAmount(); ?>
 &times;
                                                                                <?php endif; ?>
                                                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong class="price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
 *</strong>
                                                                    </td>
                                                                </tr>
                                                            
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                                
                                                                    <td><strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong></td>
                                                                    <td class="text-right">
                                                                        <strong class="price">
                                                                            <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                                                            <?php else: ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                                                            <?php endif; ?>
                                                                            <?php echo $this->_tpl_vars['currency']->sign; ?>
 *
                                                                        </strong>
                                                                    </td>
                                                                

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInMiniBasket()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div id="paypalExpressCheckoutMiniBasketBox" class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher"/>
                <input type="hidden" name="fnc" value="setExpressCheckout"/>
                <input type="hidden" name="oePayPalCancelURL" value="<?php echo $this->_tpl_vars['oViewConf']->getCurrentURL(); ?>
"/>
                <input type="image" name="paypalExpressCheckoutButton" id="paypalExpressCheckoutMiniBasketImage"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small" id="paypalHelpIconMiniBasket">?</a>

                    <div id="paypalHelpBoxMiniBasket" class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>
                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").hover(function (){$("#paypalHelpBoxMiniBasket").show();},function (){$("#paypalHelpBoxMiniBasket").hide();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").click(function (){return false;});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalExpressCheckoutMiniBasketBox").appendTo($("#paypalExpressCheckoutMiniBasketBox").parent().children("p.functions"))'), $this);?>

    <?php endif; ?>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_CONTINUE_SHOPPING'), $this);?>
</button>
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo smarty_function_oxscript(array('add' => "$('#basketModal').modal('show');"), $this);?>

            <?php else: ?>
                
                    <p class="title">
                        <strong><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</strong>
                    </p>
                

                <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout<?php if ($this->_tpl_vars['blScrollable']): ?> scrollable<?php endif; ?>">
                    
                        <table class="table table-bordered table-striped">
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                
                                    <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                    <tr>
                                        <td class="picture text-center">
                                            <span class="badge"><?php echo $this->_tpl_vars['_product']->getAmount(); ?>
</span>
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                <img src="<?php echo $this->_tpl_vars['_product']->getIconUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"/>
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
                                        </td>
                                        <td class="price text-right"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                
                            <?php endforeach; endif; unset($_from); ?>
                            <tr>
                                <td class="total_label" colspan="2">
                                    <strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong>
                                </td>
                                <td class="total_price text-right">
                                    <strong>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                        <?php endif; ?>
                                        &nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>

                                    </strong>
                                </td>
                            </tr>
                        </table>
                        <div class="clearfix">
                            

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInMiniBasket()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div id="paypalExpressCheckoutMiniBasketBox" class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher"/>
                <input type="hidden" name="fnc" value="setExpressCheckout"/>
                <input type="hidden" name="oePayPalCancelURL" value="<?php echo $this->_tpl_vars['oViewConf']->getCurrentURL(); ?>
"/>
                <input type="image" name="paypalExpressCheckoutButton" id="paypalExpressCheckoutMiniBasketImage"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small" id="paypalHelpIconMiniBasket">?</a>

                    <div id="paypalHelpBoxMiniBasket" class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>
                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").hover(function (){$("#paypalHelpBoxMiniBasket").show();},function (){$("#paypalHelpBoxMiniBasket").hide();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").click(function (){return false;});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalExpressCheckoutMiniBasketBox").appendTo($("#paypalExpressCheckoutMiniBasketBox").parent().children("p.functions"))'), $this);?>

    <?php endif; ?>

                        </div>
                    
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                
                    <p class="functions clear text-right">
                        <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=payment") : smarty_modifier_cat($_tmp, "cl=payment"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php else: ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php endif; ?>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                    </p>
                
            <?php endif; ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        
    <?php endif; ?>

        <?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
            <script>
                var button = '<a class="btn btn-primary submitButton largeButton" ' +
                    'href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=KlarnaExpress") : smarty_modifier_cat($_tmp, "cl=KlarnaExpress")))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp))), $this);?>
">' +
                    '<?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_GO_TO_CHECKOUT'), $this);?>
</a>';
            </script>
            <?php echo smarty_function_oxscript(array('add' => '$(".modal-footer").append(button);'), $this);?>

        <?php else: ?>
            <script>
                var url = "<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=KlarnaExpress") : smarty_modifier_cat($_tmp, "cl=KlarnaExpress")))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)); ?>
";
            </script>
            <?php echo smarty_function_oxscript(array('add' => '$("p.functions .btn-primary").attr("href", url);'), $this);?>

        <?php endif; ?>
    <?php endif; ?>
<?php else: ?>
    
    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

            <?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
                <div class="modal fade basketFlyout" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</span>
                                </button>
                                <h4 class="modal-title" id="basketModalLabel"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</h4>
                            </div>
                            <div class="modal-body">
                                <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout">
                                            <div class="">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_TITLE'), $this);?>
</th>
                                                            <th class="text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_PRICE'), $this);?>
</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                                            
                                                                <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                                            <span class="item">
                                                                                <?php if ($this->_tpl_vars['_product']->getAmount() > 1): ?>
                                                                                    <?php echo $this->_tpl_vars['_product']->getAmount(); ?>
 &times;
                                                                                <?php endif; ?>
                                                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong class="price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
 *</strong>
                                                                    </td>
                                                                </tr>
                                                            
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                                
                                                                    <td><strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong></td>
                                                                    <td class="text-right">
                                                                        <strong class="price">
                                                                            <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                                                            <?php else: ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                                                            <?php endif; ?>
                                                                            <?php echo $this->_tpl_vars['currency']->sign; ?>
 *
                                                                        </strong>
                                                                    </td>
                                                                

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInMiniBasket()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div id="paypalExpressCheckoutMiniBasketBox" class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher"/>
                <input type="hidden" name="fnc" value="setExpressCheckout"/>
                <input type="hidden" name="oePayPalCancelURL" value="<?php echo $this->_tpl_vars['oViewConf']->getCurrentURL(); ?>
"/>
                <input type="image" name="paypalExpressCheckoutButton" id="paypalExpressCheckoutMiniBasketImage"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small" id="paypalHelpIconMiniBasket">?</a>

                    <div id="paypalHelpBoxMiniBasket" class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>
                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").hover(function (){$("#paypalHelpBoxMiniBasket").show();},function (){$("#paypalHelpBoxMiniBasket").hide();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").click(function (){return false;});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalExpressCheckoutMiniBasketBox").appendTo($("#paypalExpressCheckoutMiniBasketBox").parent().children("p.functions"))'), $this);?>

    <?php endif; ?>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_CONTINUE_SHOPPING'), $this);?>
</button>
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo smarty_function_oxscript(array('add' => "$('#basketModal').modal('show');"), $this);?>

            <?php else: ?>
                
                    <p class="title">
                        <strong><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</strong>
                    </p>
                

                <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout<?php if ($this->_tpl_vars['blScrollable']): ?> scrollable<?php endif; ?>">
                    
                        <table class="table table-bordered table-striped">
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                
                                    <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                    <tr>
                                        <td class="picture text-center">
                                            <span class="badge"><?php echo $this->_tpl_vars['_product']->getAmount(); ?>
</span>
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                <img src="<?php echo $this->_tpl_vars['_product']->getIconUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"/>
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
                                        </td>
                                        <td class="price text-right"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                
                            <?php endforeach; endif; unset($_from); ?>
                            <tr>
                                <td class="total_label" colspan="2">
                                    <strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong>
                                </td>
                                <td class="total_price text-right">
                                    <strong>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                        <?php endif; ?>
                                        &nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>

                                    </strong>
                                </td>
                            </tr>
                        </table>
                        <div class="clearfix">
                            

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInMiniBasket()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div id="paypalExpressCheckoutMiniBasketBox" class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oepaypalexpresscheckoutdispatcher"/>
                <input type="hidden" name="fnc" value="setExpressCheckout"/>
                <input type="hidden" name="oePayPalCancelURL" value="<?php echo $this->_tpl_vars['oViewConf']->getCurrentURL(); ?>
"/>
                <input type="image" name="paypalExpressCheckoutButton" id="paypalExpressCheckoutMiniBasketImage"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small" id="paypalHelpIconMiniBasket">?</a>

                    <div id="paypalHelpBoxMiniBasket" class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>
                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").hover(function (){$("#paypalHelpBoxMiniBasket").show();},function (){$("#paypalHelpBoxMiniBasket").hide();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalHelpIconMiniBasket").click(function (){return false;});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalExpressCheckoutMiniBasketBox").appendTo($("#paypalExpressCheckoutMiniBasketBox").parent().children("p.functions"))'), $this);?>

    <?php endif; ?>

                        </div>
                    
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                
                    <p class="functions clear text-right">
                        <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=payment") : smarty_modifier_cat($_tmp, "cl=payment"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php else: ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php endif; ?>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                    </p>
                
            <?php endif; ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        
    <?php endif; ?>

<?php endif; ?>



<?php endif; ?>