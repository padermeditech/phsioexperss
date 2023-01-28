<?php /* Smarty version 2.6.31, created on 2022-12-28 10:46:57
         compiled from page/details/inc/productmain.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/details/inc/productmain.tpl', 1, false),array('function', 'oxmultilang', 'page/details/inc/productmain.tpl', 74, false),array('function', 'oxgetseourl', 'page/details/inc/productmain.tpl', 89, false),array('function', 'oxprice', 'page/details/inc/productmain.tpl', 341, false),array('function', 'oxstyle', 'page/details/inc/productmain.tpl', 376, false),array('function', 'oxid_include_dynamic', 'page/details/inc/productmain.tpl', 1187, false),array('function', 'mailto', 'page/details/inc/productmain.tpl', 1221, false),array('modifier', 'cat', 'page/details/inc/productmain.tpl', 12, false),array('modifier', 'getimagesize', 'page/details/inc/productmain.tpl', 232, false),array('modifier', 'strip_tags', 'page/details/inc/productmain.tpl', 245, false),array('modifier', 'explode', 'page/details/inc/productmain.tpl', 271, false),array('modifier', 'strstr', 'page/details/inc/productmain.tpl', 306, false),array('modifier', 'json_encode', 'page/details/inc/productmain.tpl', 424, false),array('modifier', 'replace', 'page/details/inc/productmain.tpl', 810, false),array('modifier', 'html_entity_decode', 'page/details/inc/productmain.tpl', 810, false),array('modifier', 'oxmultilangassign', 'page/details/inc/productmain.tpl', 861, false),array('modifier', 'number_format', 'page/details/inc/productmain.tpl', 932, false),array('modifier', 'trim', 'page/details/inc/productmain.tpl', 1084, false),array('modifier', 'oxescape', 'page/details/inc/productmain.tpl', 1084, false),array('modifier', 'default', 'page/details/inc/productmain.tpl', 1221, false),array('block', 'oxhasrights', 'page/details/inc/productmain.tpl', 37, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/pages/details.min.js",'priority' => 10), $this);?>


<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<?php $this->assign('oManufacturer', $this->_tpl_vars['oView']->getManufacturer()); ?>
<?php $this->assign('aVariantSelections', $this->_tpl_vars['oView']->getVariantSelections()); ?>

<?php if ($this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['rawselections']): ?>
    <?php $this->assign('_sSelectionHashCollection', ""); ?>
    <?php $_from = $this->_tpl_vars['aVariantSelections']['rawselections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iKey'] => $this->_tpl_vars['oSelectionList']):
?>
        <?php $this->assign('_sSelectionHash', ""); ?>
        <?php $_from = $this->_tpl_vars['oSelectionList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iPos'] => $this->_tpl_vars['oListItem']):
?>
            <?php $this->assign('_sSelectionHash', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['_sSelectionHash'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['iPos']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['iPos'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ":") : smarty_modifier_cat($_tmp, ":")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oListItem']['hash']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oListItem']['hash'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "|") : smarty_modifier_cat($_tmp, "|"))); ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php if ($this->_tpl_vars['_sSelectionHash']): ?>
            <?php if ($this->_tpl_vars['_sSelectionHashCollection']): ?><?php $this->assign('_sSelectionHashCollection', ((is_array($_tmp=$this->_tpl_vars['_sSelectionHashCollection'])) ? $this->_run_mod_handler('cat', true, $_tmp, ",") : smarty_modifier_cat($_tmp, ","))); ?><?php endif; ?>
            <?php $this->assign('_sSelectionHashCollection', ((is_array($_tmp=$this->_tpl_vars['_sSelectionHashCollection'])) ? $this->_run_mod_handler('cat', true, $_tmp, "'".($this->_tpl_vars['_sSelectionHash'])."'") : smarty_modifier_cat($_tmp, "'".($this->_tpl_vars['_sSelectionHash'])."'"))); ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php echo smarty_function_oxscript(array('add' => "oxVariantSelections  = [".($this->_tpl_vars['_sSelectionHashCollection'])."];"), $this);?>


    <form class="js-oxWidgetReload" action="<?php echo $this->_tpl_vars['oView']->getWidgetLink(); ?>
" method="get">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oView']->getClassName(); ?>
">
        <input type="hidden" name="oxwparent" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
        <input type="hidden" name="listtype" value="<?php echo $this->_tpl_vars['oView']->getListType(); ?>
">
        <input type="hidden" name="nocookie" value="1">
        <input type="hidden" name="cnid" value="<?php echo $this->_tpl_vars['oView']->getCategoryId(); ?>
">
        <input type="hidden" name="anid" value="<?php if (! $this->_tpl_vars['oDetailsProduct']->oxarticles__oxparentid->value): ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxid->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxparentid->value; ?>
<?php endif; ?>">
        <input type="hidden" name="actcontrol" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
        <?php if ($this->_tpl_vars['oConfig']->getRequestParameter('preview')): ?>
            <input type="hidden" name="preview" value="<?php echo $this->_tpl_vars['oConfig']->getRequestParameter('preview'); ?>
">
        <?php endif; ?>
    </form>
<?php endif; ?>

<?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <form class="js-oxProductForm" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post">
        <div class="hidden">
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
            <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxid->value; ?>
">
            <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value; ?>
">
            <input type="hidden" name="parentid" value="<?php if (! $this->_tpl_vars['oDetailsProduct']->oxarticles__oxparentid->value): ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxid->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxparentid->value; ?>
<?php endif; ?>">
            <input type="hidden" name="panid" value="">
            <?php if (! $this->_tpl_vars['oDetailsProduct']->isNotBuyable()): ?>
                <input type="hidden" name="fnc" value="tobasket">
            <?php endif; ?>
        </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div class="detailsInfo clear" itemscope itemtype="http://schema.org/Product">
    <div class="row">
        <div class="col-xs-12 col-md-6 details-col-left">
		
			
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/details/inc/morepics.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            

<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInDetails() && ! $this->_tpl_vars['oDetailsProduct']->isNotBuyable()): ?>
    <?php if ($this->_tpl_vars['oView']->oePayPalShowECSPopup()): ?>

        <?php if ($this->_tpl_vars['oViewConf']->getActiveTheme() == 'flow'): ?>
            <div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="popup1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <span class="h4 modal-title" id="popup1Label">&nbsp;</span>
                        </div>
                        <div class="modal-body">
                            <?php if ($this->_tpl_vars['oView']->oePayPalGetArticleAmount() > 1): ?>
                            <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_SAME_ITEMS_QUESTION','args' => $this->_tpl_vars['oView']->oePayPalGetArticleAmount()), $this);?>

                            <?php else: ?>
                            <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_SAME_ITEM_QUESTION','args' => $this->_tpl_vars['oView']->oePayPalGetArticleAmount()), $this);?>

                            <?php endif; ?>
                        </div>
                        <div class="modal-footer">


                            <button id="actionAddToBasketAndGoToCheckout" type="submit" class="btn btn-default">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_BUTTON_ADD_ITEM'), $this);?>

                            </button>
                            <button id="actionNotAddToBasketAndGoToCheckout" type="submit" class="btn btn-default">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_BUTTON_DO_NOT_ADD_ITEM'), $this);?>

                            </button>
                            <div class="oePayPalPopupNav">
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
"
                                   class="btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_MINIBASKET_DISPLAY_BASKET'), $this);?>
</a>

                                <button class="btn btn-default" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_CANCEL'), $this);?>
</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo smarty_function_oxscript(array('add' => "$('#popup1').modal('show');"), $this);?>


        <?php else: ?>

            <div id="popupECS" class="popupBox corners FXgradGreyLight glowShadow">
                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('x.png'); ?>
" alt="" class="closePop">

                <p>
                    <?php if ($this->_tpl_vars['oView']->oePayPalGetArticleAmount() > 1): ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_SAME_ITEMS_QUESTION','args' => $this->_tpl_vars['oView']->oePayPalGetArticleAmount()), $this);?>

                    <?php else: ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_SAME_ITEM_QUESTION','args' => $this->_tpl_vars['oView']->oePayPalGetArticleAmount()), $this);?>

                    <?php endif; ?>
                </p>

                <div class="clear">
                    <button id="actionAddToBasketAndGoToCheckout" type="submit" class="submitButton largeButton">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_BUTTON_ADD_ITEM'), $this);?>

                    </button>
                    <button id="actionNotAddToBasketAndGoToCheckout" type="submit" class="submitButton largeButton">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_BUTTON_DO_NOT_ADD_ITEM'), $this);?>

                    </button>
                    <div class="oePayPalPopupNav">
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
"
                           class="textButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_MINIBASKET_DISPLAY_BASKET'), $this);?>
</a>
                        <button class="textButton largeButton closePop"><?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_CANCEL'), $this);?>
</button>
                    </div>
                </div>
            </div>

            <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxmodalpopup.js",'priority' => 10), $this);?>


                        <?php echo smarty_function_oxscript(array('add' => '$(function(){$("body").oxModalPopup({target: "#popupECS", openDialog: true});})'), $this);?>

        <?php endif; ?>

        <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/js/oepaypalonclickproceedaction.js'),'priority' => 10), $this);?>


                <?php echo smarty_function_oxscript(array('add' => '$("#actionNotAddToBasketAndGoToCheckout").oePayPalOnClickProceedAction({sAction: "actionNotAddToBasketAndGoToCheckout"});'), $this);?>

        <?php echo smarty_function_oxscript(array('add' => '$("#actionAddToBasketAndGoToCheckout").oePayPalOnClickProceedAction({sAction: "actionAddToBasketAndGoToCheckout"});'), $this);?>


                <?php echo smarty_function_oxscript(array('add' => ((is_array($_tmp=((is_array($_tmp='$("#amountToBasket").val(')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->oePayPalGetArticleAmount()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->oePayPalGetArticleAmount())))) ? $this->_run_mod_handler('cat', true, $_tmp, ');') : smarty_modifier_cat($_tmp, ');'))), $this);?>


                <?php if ($this->_tpl_vars['oView']->oePayPalGetPersistentParam()): ?>
            <?php echo smarty_function_oxscript(array('add' => ((is_array($_tmp=((is_array($_tmp='$("#persistentParam").val("')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->oePayPalGetPersistentParam()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->oePayPalGetPersistentParam())))) ? $this->_run_mod_handler('cat', true, $_tmp, '");') : smarty_modifier_cat($_tmp, '");'))), $this);?>

        <?php endif; ?>

                <?php if ($this->_tpl_vars['oView']->oePayPalGetSelection()): ?>
            <?php $_from = $this->_tpl_vars['oView']->oePayPalGetSelection(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['selection']):
?>
                <?php echo smarty_function_oxscript(array('add' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='
                    $("#productSelections input[name=\'sel[')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ']\']").val("') : smarty_modifier_cat($_tmp, ']\']").val("')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['selection']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['selection'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '");
                    var sSelectionName') : smarty_modifier_cat($_tmp, '");
                    var sSelectionName')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ' = $("#productSelections div:eq(') : smarty_modifier_cat($_tmp, ' = $("#productSelections div:eq(')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ') ul li a[data-seletion-id=') : smarty_modifier_cat($_tmp, ') ul li a[data-seletion-id=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['selection']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['selection'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ']").text();
                    $("#productSelections div:eq(') : smarty_modifier_cat($_tmp, ']").text();
                    $("#productSelections div:eq(')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ') p span").text(sSelectionName') : smarty_modifier_cat($_tmp, ') p span").text(sSelectionName')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ');
                ') : smarty_modifier_cat($_tmp, ');
                '))), $this);?>

            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

                <?php if ($this->_tpl_vars['oView']->oePayPalDisplayCartInPayPal() == 0): ?>
            <?php echo smarty_function_oxscript(array('add' => '$("input[name=displayCartInPayPal]").attr("checked", false);'), $this);?>

        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

			
			
                        <?php $this->assign('bHasSelectionList', false); ?>
<?php $this->assign('bHasVarinatsList', false); ?>
<?php if ($this->_tpl_vars['oViewConf']->showSelectLists()): ?>
    <?php $this->assign('oSelections', $this->_tpl_vars['oDetailsProduct']->getSelections()); ?>
    <?php if ($this->_tpl_vars['oSelections']): ?>
    <?php $this->assign('bHasSelectionList', true); ?>
    <?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['oView']->getVariantSelections()): ?>
    <?php $this->assign('bHasVarinatsList', true); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['bHasSelectionList'] || $this->_tpl_vars['bHasVarinatsList']): ?>
<?php echo smarty_function_oxscript(array('add' => "
    // DOM structure change if selection list is available (it is quite hard to implement it in template only so will do it by js)
    if ($('.cl-details').length && $('#product-tobasket-alternative-box').length) {
        $('#productPrice').detach().appendTo('#product-tobasket-alternative-box');
        $('#priceunitrene').detach().appendTo('#product-tobasket-alternative-box');
        $('.jx-current-selection-combination-desc').detach().appendTo('#product-tobasket-alternative-box');
        $('#details .tobasket').detach().appendTo('#product-tobasket-alternative-box');
        $('#morePicsContainer').detach().prependTo('.product-sticky-container');
    }
"), $this);?>

    <div class="product-sticky-container">
<?php endif; ?>

<?php $this->assign('newProducts', ''); ?>
<?php $this->assign('setProducts', ''); ?>
<?php $this->assign('isNewProduct', $this->_tpl_vars['oDetailsProduct']->isNewProduct($this->_tpl_vars['newProducts'])); ?>
<?php $this->assign('isSetProduct', $this->_tpl_vars['oDetailsProduct']->isSetProduct($this->_tpl_vars['setProducts'])); ?>
<?php $this->assign('isSaleProduct', $this->_tpl_vars['oDetailsProduct']->isSaleProduct()); ?>
<?php $this->assign('isConfiguratorProduct', $this->_tpl_vars['oDetailsProduct']->isConfiguratorProduct()); ?>
<?php if ($this->_tpl_vars['isNewProduct'] || $this->_tpl_vars['isSetProduct']): ?>
<div class="badge-wrapper-left">
    <?php if ($this->_tpl_vars['isNewProduct']): ?><div class="badge badge-new"><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_BADGE_NEW'), $this);?>
</div><?php endif; ?>
    <?php if ($this->_tpl_vars['isSetProduct']): ?><div class="badge badge-set"><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_BADGE_SET'), $this);?>
</div><?php endif; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['isSaleProduct'] || $this->_tpl_vars['isConfiguratorProduct']): ?>
<div class="badge-wrapper-right">
    <?php if ($this->_tpl_vars['isSaleProduct']): ?><div class="badge badge-sale"><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_BADGE_SALE'), $this);?>
</div><?php endif; ?>
    <?php if ($this->_tpl_vars['isConfiguratorProduct']): ?><div class="badge badge-configurator"><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_BADGE_CONFIGURATOR'), $this);?>
</div><?php endif; ?>
</div>
<?php endif; ?>
<?php echo smarty_function_oxscript(array('add' => "
    if ($('.cl-details').length && $('.details-col-left .picture a').length) {
        $('.details-col-left .badge-wrapper-left').detach().appendTo('.details-col-left .picture a');
        $('.details-col-left .badge-wrapper-right').detach().appendTo('.details-col-left .picture a');
    }
"), $this);?>


                <?php echo smarty_function_oxscript(array('include' => "js/libs/photoswipe.min.js",'priority' => 8), $this);?>

                <?php echo smarty_function_oxscript(array('include' => "js/libs/photoswipe-ui-default.min.js",'priority' => 8), $this);?>

                <?php echo smarty_function_oxscript(array('add' => "$( document ).ready( function() { if( !window.isMobileDevice() ) Flow.initDetailsEvents(); });"), $this);?>


                                <?php if ($this->_tpl_vars['blWorkaroundInclude']): ?>
                    <?php echo smarty_function_oxscript(array('add' => "$( document ).ready( function() { Flow.initEvents();});"), $this);?>

                <?php endif; ?>

                <?php if ($this->_tpl_vars['oView']->showZoomPics()): ?>
                                        <?php if ($this->_tpl_vars['oConfig']->getConfigParam('sAltImageUrl') || $this->_tpl_vars['oConfig']->getConfigParam('sSSLAltImageUrl')): ?>
                        <?php $this->assign('aPictureInfo', getimagesize($this->_tpl_vars['oPictureProduct']->getMasterZoomPictureUrl(1))); ?>
                    <?php else: ?>
                        <?php $this->assign('sPictureName', $this->_tpl_vars['oPictureProduct']->oxarticles__oxpic1->value); ?>
                        <?php $this->assign('aPictureInfo', getimagesize($this->_tpl_vars['oConfig']->getMasterPicturePath("product/1/".($this->_tpl_vars['sPictureName'])))); ?>
                    <?php endif; ?>

                    <div class="picture text-center">
                        <a href="<?php echo $this->_tpl_vars['oPictureProduct']->getMasterZoomPictureUrl(1); ?>
" id="zoom1"<?php if ($this->_tpl_vars['aPictureInfo']): ?> data-width="<?php echo $this->_tpl_vars['aPictureInfo']['0']; ?>
" data-height="<?php echo $this->_tpl_vars['aPictureInfo']['1']; ?>
"<?php endif; ?>>
                            <img src="<?php echo $this->_tpl_vars['oView']->getActPicture(); ?>
" alt="&Ouml;ffne <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__asy_seotitle != ''): ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__asy_seotitle; ?>
<?php else: ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle; ?>
<?php endif; ?>" title="<?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__asy_seotitle != ''): ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__asy_seotitle; ?>
<?php else: ?><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle; ?>
<?php endif; ?>" itemprop="image" class="img-responsive">
                        </a>
                    </div>
                <?php else: ?>
                    <div class="picture  text-center">
                        <img src="<?php echo $this->_tpl_vars['oView']->getActPicture(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['oPictureProduct']->oxarticles__oxtitle->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['oPictureProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['oPictureProduct']->oxarticles__oxtitle->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['oPictureProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" itemprop="image" class="img-responsive">
                    </div>
                <?php endif; ?>
            

<?php if ($this->_tpl_vars['bHasSelectionList'] || $this->_tpl_vars['bHasVarinatsList']): ?>
    <div id="product-tobasket-alternative-box"></div>
    </div>
<?php endif; ?>

            
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-col-middle ulshortdesc">
            
                <div id="productTitle" itemprop="name">
					<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value; ?>

                </div>
            
						
			
			<div class="row artikelnummerrow">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 details-col-middle">
										
						<?php $this->assign('words', $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value); ?>
						<?php $this->assign('awords', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['words']) : explode($_tmp, $this->_tpl_vars['words']))); ?>
						<?php echo smarty_function_oxmultilang(array('ident' => 'ARTNUM','suffix' => 'COLON'), $this);?>
 <span id="article_nummer"><?php echo $this->_tpl_vars['awords'][0]; ?>
</span>
					
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 details-col-middle">
										<div class="star-ratings">
						<?php if ($this->_tpl_vars['oView']->ratingIsActive()): ?>
							
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/reviews/rating.tpl", 'smarty_include_vars' => array('itemid' => "anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value),'sRateUrl' => $this->_tpl_vars['oDetailsProduct']->getLink())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							
						<?php endif; ?>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 details-col-middle">
					<?php if ($this->_tpl_vars['oManufacturer']): ?>
					<div class="brandLogo">
						
							<a href="<?php echo $this->_tpl_vars['oManufacturer']->getLink(); ?>
" title="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
">
								<?php if ($this->_tpl_vars['oManufacturer']->oxmanufacturers__oxicon->value): ?>
									<img src="<?php echo $this->_tpl_vars['oManufacturer']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
" class="img-fluid">
								<?php endif; ?>
							</a>
						
					</div>
				<?php endif; ?>
				</div>
			</div>
			
			
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/adventskalender.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
			
			<?php if (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, "Ausstellungsstück") : strstr($_tmp, "Ausstellungsstück"))): ?>
				<div class="ausstellungstuecke">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					<p><b>Dies ist ein Ausstellungsstück</b></p>
					<p>Ausstellungsstücke sind Produkte, die wir zu Vorzeigezwecke in unserer Ausstellung, auf Messen oder in unseren Filialen ausgestellt haben. Die Produkte sind nahezu nicht benutzt und sind vollkommen funktionstüchtig. Ausstellungsstücke sind nur begrenzt vorrätig und werden preiswerter angeboten.</p>
				</div>
			<?php endif; ?>
			
			<?php if (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'Restposten') : strstr($_tmp, 'Restposten'))): ?>
				<div class="restposten">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					<p><b>Dies ist ein Restposten</b></p>
					<p>Restposten sind Produkte, die wir abverkaufen oder bei denen es nur noch wenige Varianten gibt. Alle Restposten sind komplett neu, nicht benutzt und vollkommen funktionstüchtig. Restposten sind nur begrenzt vorrätig und werden preiswerter angeboten.</p>
				</div>
			<?php endif; ?>
			

                        
                <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWSHORTDESCRIPTION')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxshortdesc->rawValue): ?>
                        <div class="shortdesc" id="productShortdesc"><?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxshortdesc->rawValue; ?>
</div>
                    <?php endif; ?>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            

                        <div class="information" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <div class="productMainInfo<?php if ($this->_tpl_vars['oManufacturer']->oxmanufacturers__oxicon->value): ?> hasBrand<?php endif; ?>">

                                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <div class="additionalInfo clearfix">
                        <?php $this->assign('oUnitPrice', $this->_tpl_vars['oDetailsProduct']->getUnitPrice()); ?>
                        <?php if ($this->_tpl_vars['oUnitPrice']): ?>
    <span id="productPriceUnit" class="jx-price-per-unit" data-unit-quantity="<?php echo $this->_tpl_vars['oDetailsProduct']->getUnitQuantity(); ?>
"><span class="unit-price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oUnitPrice'],'currency' => $this->_tpl_vars['currency']), $this);?>
</span> <?php echo $this->_tpl_vars['currency']->sign; ?>
  / <?php echo $this->_tpl_vars['oDetailsProduct']->getUnitName(); ?>
</span>
<?php endif; ?>

<?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
<?php if ($this->_tpl_vars['oDetailsProduct']->getFPrice()): ?>
    <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFPrice()); ?>
    <?php if ($this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
    <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFVarMinPrice()); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="jx-price-per-pack"><span class="unit-price">
        <?php $this->assign('discountUnitLabel_main', $this->_tpl_vars['oDetailsProduct']->getDiscountUnitLabel()); ?>
        <?php echo $this->_tpl_vars['fPrice']; ?>
</span> <?php echo $this->_tpl_vars['currency']->sign; ?>
 / <?php if ($this->_tpl_vars['discountUnitLabel_main']): ?><?php echo $this->_tpl_vars['discountUnitLabel_main']; ?>

<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => '_UNIT_PIECE'), $this);?>
<?php endif; ?></div>
                    </div>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

                    <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxweight->value): ?>
                        <div class="weight">
                            
                                <?php echo smarty_function_oxmultilang(array('ident' => 'WEIGHT','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxweight->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'KG'), $this);?>

                            
                        </div>
                    <?php endif; ?>

                    
                        <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxvpe->value > 1): ?>
                            <span class="vpe small"><?php echo smarty_function_oxmultilang(array('ident' => 'DETAILS_VPE_MESSAGE_1'), $this);?>
 <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxvpe->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'DETAILS_VPE_MESSAGE_2'), $this);?>
</span>
                            <br>
                        <?php endif; ?>
                    

                    <?php $this->assign('blCanBuy', true); ?>
                                        <?php if ($this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['selections']): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('jxadvancedselectionlist','out/src/css/jxadvancedselectionlist.css')), $this);?>

<?php endif; ?>

<?php $this->assign('oParentProduct', $this->_tpl_vars['oDetailsProduct']); ?>
<?php if ($this->_tpl_vars['oDetailsProduct']->isVariant()): ?>
    <?php $this->assign('oParentProduct', $this->_tpl_vars['oDetailsProduct']->getParentArticle()); ?>
<?php endif; ?>

<?php echo smarty_function_oxscript(array('add' => "$(function () {
    $('#variants .dropdown-menu.vardrop a').each(function (i, e) {
        if (!$(this).attr('data-selection-id')) {
            $(this).closest('li').hide();
        }
    });

    $('#variants .selectbox').each(function (i, e) {
        if ($(this).find('input[type=\'hidden\']').first().val()) {
            $('#variants  .selectbox').eq( $('#variants  .selectbox').index( $(this) ) + 1 ).show();
        }
    });

    $('#variants .selectbox a.active').click(function (i, e) {
        $(this).closest('.vardrop').find('a').first().click();
    });

    var iconsDirPath = $('.variants-wrapper').first().attr('data-icons-dir-path');
    var variantsData = $('.variants-wrapper').first().attr('data-variants-data');
    variantsData = JSON.parse(variantsData);

    $('#variants a[data-selection-id]').each(function (i, e) {
        var id = $(this).attr('data-selection-id');
        var optionData = variantsData && variantsData['selectionOptions'] && variantsData['selectionOptions'][id] ? variantsData['selectionOptions'][id] : [];
        var title = null;
        var icon = null;

        if (optionData && optionData.icon) {
            icon = optionData.icon;
            title = optionData.title;

            $(this).append('<img class=\"option-icon\" src=\"/'+iconsDirPath+icon+'\" alt=\"'+title+'\" title=\"'+title+'\" width=\"50\">');
            $(this).addClass('with-icon');
        }
    });

});
"), $this);?>

<div class="variants-wrapper <?php if ($this->_tpl_vars['oParentProduct']->oxarticles__jxadvancedselectionlistusestepbystepselection->value): ?>step-by-step-selection-enabled<?php endif; ?>"
     data-icons-dir-path="<?php echo $this->_tpl_vars['oParentProduct']->getVariantsIconDirPath(); ?>
"
     data-variants-data='<?php echo json_encode($this->_tpl_vars['oParentProduct']->getVariantsAdditionalData()); ?>
'>
    
                        <?php if ($this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['selections']): ?>
                            <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxajax.min.js",'priority' => 10), $this);?>

                            <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxarticlevariant.min.js",'priority' => 10), $this);?>

                            <?php echo smarty_function_oxscript(array('add' => "$( '#variants' ).oxArticleVariant();"), $this);?>

                            <?php $this->assign('blCanBuy', $this->_tpl_vars['aVariantSelections']['blPerfectFit']); ?>
                            <?php if (! $this->_tpl_vars['blHasActiveSelections']): ?>
                                <?php if (! $this->_tpl_vars['blCanBuy'] && ! $this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
                                    <?php $this->assign('blCanBuy', true); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div id="variants" class="selectorsBox js-fnSubmit clear">
                                <?php $this->assign('blHasActiveSelections', false); ?>
                                <?php $_from = $this->_tpl_vars['aVariantSelections']['selections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iKey'] => $this->_tpl_vars['oList']):
?>
                                    <?php if ($this->_tpl_vars['oList']->getActiveSelection()): ?>
                                        <?php $this->assign('blHasActiveSelections', true); ?>
                                    <?php endif; ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/selectbox.tpl", 'smarty_include_vars' => array('oSelectionList' => $this->_tpl_vars['oList'],'iKey' => $this->_tpl_vars['iKey'],'blInDetails' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <div class="clearfix"></div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        <?php endif; ?>
                    
</div>


<?php echo smarty_function_oxscript(array('add' => "$('.selectorsBox a').on('change',refreshKlarnaMessage());"), $this);?>

<script>
    function refreshKlarnaMessage() {
        window.KlarnaOnsiteService = window.KlarnaOnsiteService || [];  // Making sure that data layer exists in case JavaScript Library is loaded later for any reason
        window.KlarnaOnsiteService.push({eventName: 'refresh-placements'}); // Push the event to the data layer
    }
</script>



                </div>

                                
<?php if ($this->_tpl_vars['oViewConf']->showSelectLists()): ?>
    <?php $this->assign('oSelections', $this->_tpl_vars['oDetailsProduct']->getSelections()); ?>
    <?php $this->assign('sDetailsProductId', $this->_tpl_vars['oDetailsProduct']->getId()); ?>
    <?php $this->assign('oCurrency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    <?php $this->assign('oPrice', $this->_tpl_vars['oDetailsProduct']->getPrice()); ?>
    <?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
	<?php $this->assign('name1', $this->_tpl_vars['oDetailsProduct']->oxarticles__duplicatetitle1->rawValue); ?>
	<?php $this->assign('name2', $this->_tpl_vars['oDetailsProduct']->oxarticles__duplicatetitle2->rawValue); ?>

    <?php if ($this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
        <?php $this->assign('oPrice', $this->_tpl_vars['oDetailsProduct']->getVarMinPrice()); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['oSelections']): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('jxadvancedselectionlist','out/src/css/jxadvancedselectionlist.css')), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "
    $(function () {
        var hiddenOptionsRelationDataTable = JSON.parse($('#jx-hidden-options-indicator').attr('data-table'));

        function jx_number_format (number, decimals, decPoint, thousandsSep) {
          number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
          var n = !isFinite(+number) ? 0 : +number;
          var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
          var sep = typeof thousandsSep === 'undefined' ? ',' : thousandsSep;
          var dec = typeof decPoint === 'undefined' ? '.' : decPoint;
          var s = '';

          var toFixedFix = function toFixedFix(n, prec) {
            if (('' + n).indexOf('e') === -1) {
              return +(Math.round(n + 'e+' + prec) + 'e-' + prec);
            } else {
              var arr = ('' + n).split('e');
              var sig = '';

              if (+arr[1] + prec > 0) {
                sig = '+';
              }

              return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec);
            }
          }; // @todo: for IE parseFloat(0.55).toFixed(0) = 0;


          s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.');

          if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
          }

          if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
          }

          return s.join(dec);
        }

        function reinit_pswp() {
            // Remove old PhotoSwipe click event
                $('#zoom1').off('click');
                pswp = Flow.setPhotoSwipe();

                $('#zoom1').click( function(e) {
                    e.preventDefault();
                    var iIndex = 0;

                    if ($('#morePicsContainer').length) {
                        iIndex = $('#morePicsContainer').find('a.selected').data('num') - 1;
                    }

                    pswp.open(iIndex, this);
                }
            );
        }

        function jx_update_price() {
            var defaultPrice = $('#jx-price-indicator').attr('data-price');
            var decimalsSeparator = $('#jx-price-indicator').attr('data-decimalsseparator');
            var thousandSeparator = $('#jx-price-indicator').attr('data-thousandseparator');
            var currentPrice = $('#jx-price-indicator').attr('data-currentprice');
            var firstImg = $('#morePicsContainer img').first();
            var firstImgA = $(firstImg).closest('a');
            var soloImage = $('.details-col-left img').first();
            var soloImageA = $(soloImage).closest('a');
            var calculatedPrice = defaultPrice;
            var possibleImages = new Object();
            var possibleDescriptions = new Object();
            var possibleImagesKeys = null;
            var possibleImagesMaxKey = null;
            var formattedPrice = null;
            var parts = null;
            var productImage = null;
            var productImageDesc = '';

            if (!currentPrice) {
                currentPrice = jx_number_format(calculatedPrice, 2, decimalsSeparator, thousandSeparator);
            }

            $('.jx-selectorsBox input:radio').each(function () {
                var fePrice = $(this).attr('data-feprice');

                if (this.checked) {
                    if (fePrice) {
                        if (fePrice.indexOf('%') === -1) {
                            calculatedPrice = parseFloat(calculatedPrice) + parseFloat(fePrice);
                        } else {
                            parts = fePrice.split('%');
                            calculatedPrice = parseFloat(calculatedPrice) + (parseFloat(calculatedPrice) * parts[0] / 100);
                        }
                    }
                }
            });

            formattedPrice = jx_number_format(calculatedPrice, 2, decimalsSeparator, thousandSeparator);

            $('#productPrice .price').text($('#productPrice .price').text().replace(currentPrice, formattedPrice));
            $('#jx-price-indicator').attr('data-currentprice', formattedPrice);
            $('#jx-price-indicator').trigger('price-data-updated');



            // Image detection
            $('.option-images-data-block .img-set-data').each(function () {
                var imgPower = 0;
                var imgPath = $(this).attr('data-img');
                var imgDesc = $(this).attr('data-desc');
                var isGlobal = $(this).attr('data-is-global');

                if (!isGlobal) {
                    imgPower++;
                }

                $(this).find('i').each(function(){
                    var optionVal = $(this).attr('data-option-val');
                    var selectedInput = $('.jx-selectorsBox input:radio:checked[data-full-option-id=\"'+optionVal+'\"]');

                    if (!optionVal) {
                        return;
                    }

                    if (selectedInput.length) {
                        imgPower = imgPower + 10;
                    } else {
                        imgPower = -999999;
                    }
                });

                if (imgPower > 0) {
                    possibleImages[imgPower] = imgPath;
                    possibleDescriptions[imgPower] = imgDesc;
                }
            });

            possibleImagesKeys = Object.keys(possibleImages).map(function(item) {
                return parseInt(item);
            });

            possibleImagesMaxKey = possibleImagesKeys.length ? Math.max.apply(Math, possibleImagesKeys) : 0;

            if (possibleImagesMaxKey) {
                productImage = possibleImages[possibleImagesMaxKey];
                productImageDesc = possibleDescriptions[possibleImagesMaxKey];
            }

            // We have at least 2 product images
            if ($(firstImg).length) {
                if (productImage) {
                    if (!$(firstImg).attr('data-default-icon')) {
                        $(firstImg).attr('data-default-icon', $(firstImg).attr('src'));
                    }

                    if (!$(firstImgA).attr('data-default-zoom-url')) {
                        $(firstImgA).attr('data-default-zoom-url', $(firstImgA).attr('data-zoom-url'));
                    }

                    if (!$(firstImgA).attr('data-default-href')) {
                        $(firstImgA).attr('data-default-href', $(firstImgA).attr('href'));
                    }

                    $(firstImg).attr('src', productImage);
                    $(firstImgA).removeData('zoom-url');
                    $(firstImgA).attr('href', productImage).attr('data-zoom-url', productImage);
                    $('.jx-current-selection-combination-desc').text(productImageDesc);
                    $(firstImgA).click();
                    reinit_pswp();
                } else {
                    $(firstImg).attr('src', $(firstImg).attr('data-default-icon'));
                    $(firstImgA).removeData('zoom-url');
                    $(firstImgA).attr('href', $(firstImgA).attr('data-default-href')).attr('data-zoom-url', $(firstImgA).attr('data-default-zoom-url'));
                    $('.jx-current-selection-combination-desc').text('');
                    $(firstImgA).click();
                    reinit_pswp();
                }
            } else if ($(soloImage).length) {
                if (productImage) {
                    if (!$(soloImage).attr('data-default-src')) {
                        $(soloImage).attr('data-default-src', $(soloImage).attr('src'));
                    }

                    if (!$(soloImageA).attr('data-default-href')) {
                        $(soloImageA).attr('data-default-href', $(soloImageA).attr('href'));
                    }

                    $(soloImage).attr('src', productImage);
                    $(soloImageA).attr('href', productImage);
                    $('.jx-current-selection-combination-desc').text(productImageDesc);
                    reinit_pswp();
                } else {
                    $(soloImage).attr('src', $(soloImage).attr('data-default-src'));
                    $(soloImageA).attr('href', $(soloImageA).attr('data-default-href'))
                    $('.jx-current-selection-combination-desc').text('');
                    reinit_pswp();
                }
            }
        }

        function updateRelatedOptionsVisibility(){
            var firstAvailable = null;

            $('.jx-selectorsBox input:radio:checked').each(function () {
                var fullOptionId = $(this).attr('data-full-option-id');
                var fullOptionIdGeneral = $(this).attr('data-full-option-id-general');

                if (fullOptionId && hiddenOptionsRelationDataTable[fullOptionId]){
                    $.each(hiddenOptionsRelationDataTable[fullOptionId], function(i, v){
                        $('[data-full-option-id=\"'+v+'\"]').attr('disabled', true);
                        $('[data-full-option-id=\"'+v+'\"]').closest('.option-wrap').addClass('disabled');
                        $('[data-full-option-id-general=\"'+v+'\"]').attr('disabled', true);
                        $('[data-full-option-id-general=\"'+v+'\"]').closest('.option-wrap').addClass('disabled');
                    });
                }

                if (fullOptionIdGeneral && hiddenOptionsRelationDataTable[fullOptionIdGeneral]){
                    $.each(hiddenOptionsRelationDataTable[fullOptionIdGeneral], function(i, v){
                        $('[data-full-option-id=\"'+v+'\"]').attr('disabled', true);
                        $('[data-full-option-id=\"'+v+'\"]').closest('.option-wrap').addClass('disabled');
                        $('[data-full-option-id-general=\"'+v+'\"]').attr('disabled', true);
                        $('[data-full-option-id-general=\"'+v+'\"]').closest('.option-wrap').addClass('disabled');
                    });
                }
            });

            $('.option-wrap.disabled input[type=\"radio\"][disabled]:checked').each(function () {
                firstAvailable = $(this).closest('.jx-option-group').find('.option-wrap:not(.disabled)');

                if (firstAvailable.length) {
                    $(firstAvailable).find('label').click();
                } else {
                    firstAvailable = $(this).closest('.jx-option-group').find('.option-wrap').first();
                    $(firstAvailable).removeClass('disabled');
                    $(firstAvailable).find('input').attr('disabled', false);
                    $(firstAvailable).find('label').click();
                }
            });
        }

        $('.jx-selectorsBox input[type=radio]').change(function() {
            jx_update_price();

            $('.option-wrap').removeClass('disabled');
            $('.jx-selectorsBox input:radio').removeAttr('disabled');
            updateRelatedOptionsVisibility();
        });

        jx_update_price();
        updateRelatedOptionsVisibility();
    });
    "), $this);?>

    <div class="jx-selectorsBox-wrapper">
        <span id="jx-price-indicator"
              data-price="<?php echo $this->_tpl_vars['oPrice']->getPrice(); ?>
"
              data-currency="<?php echo $this->_tpl_vars['oCurrency']->name; ?>
"
              data-decimalsseparator="<?php if ($this->_tpl_vars['oCurrency']->dec): ?><?php echo $this->_tpl_vars['oCurrency']->dec; ?>
<?php else: ?>,<?php endif; ?>"
              data-thousandseparator="<?php if ($this->_tpl_vars['oCurrency']->thousand): ?><?php echo $this->_tpl_vars['oCurrency']->thousand; ?>
<?php else: ?>.<?php endif; ?>"
        ></span>
        <?php if ($this->_tpl_vars['oConfig']->getConfigParam('jxadvancedselectionlist_main_showexpandbutton')): ?>
            <a class="btn btn-primary" data-toggle="collapse" href="#productSelections" role="button" aria-expanded="false" aria-controls="productSelections">
                <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_CUSTOMIZATION'), $this);?>

            </a>
        <?php endif; ?>
        <div class="jx-selectorsBox<?php if ($this->_tpl_vars['oConfig']->getConfigParam('jxadvancedselectionlist_main_showexpandbutton')): ?> collapse<?php endif; ?>" id="productSelections">
            <?php $_from = $this->_tpl_vars['oSelections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['selections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['selections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oSelectionList']):
        $this->_foreach['selections']['iteration']++;
?>
                <?php $this->assign('iKey', ($this->_foreach['selections']['iteration']-1)); ?>
                <?php $this->assign('oOptions', $this->_tpl_vars['oSelectionList']->getSelections()); ?>

                <?php if ($this->_tpl_vars['iKey'] == 0): ?>
                    <?php $this->assign('aAllHiddenOptionsRelations', $this->_tpl_vars['oSelectionList']->getAllHiddenOptionsRelations()); ?>
                    <span id="jx-hidden-options-indicator"
                          data-table='<?php echo json_encode($this->_tpl_vars['aAllHiddenOptionsRelations']); ?>
'
                    ></span>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['oOptions']): ?>
                    <?php $this->assign('aImageSets', $this->_tpl_vars['oSelectionList']->getImageSets($this->_tpl_vars['sDetailsProductId'])); ?>

                    <div class="option-images-data-block">
                        <?php $_from = $this->_tpl_vars['aImageSets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aImageSetItem']):
?>
                        <div class="img-set-data" data-img="/<?php echo $this->_tpl_vars['aImageSetItem']['img']; ?>
" data-desc="<?php echo $this->_tpl_vars['aImageSetItem']['description']; ?>
" data-is-global="<?php echo $this->_tpl_vars['aImageSetItem']['isGlobal']; ?>
">
                            <?php $_from = $this->_tpl_vars['aImageSetItem']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['optionVal']):
?>
                            <i data-option-val="<?php echo $this->_tpl_vars['optionVal']; ?>
"></i>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>

                    <div class="jx-option-group">
                        <div class="jx-option-group-label"><?php echo $this->_tpl_vars['oSelectionList']->getLabel(); ?>
</div>
                        <?php if ($this->_tpl_vars['editable'] !== false): ?>
                        <?php $_from = $this->_tpl_vars['oOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOption']):
?>
                        <div class="option-wrap">
                            <input type="radio"
                                   <?php if ($this->_tpl_vars['oOption']->isDisabled()): ?>disabled<?php endif; ?>
                                   id="jx-selection-<?php echo $this->_tpl_vars['iKey']; ?>
-<?php echo $this->_tpl_vars['oOption']->getValue(); ?>
"
                                   name="sel[<?php echo $this->_tpl_vars['iKey']; ?>
]"
                                   value="<?php echo $this->_tpl_vars['oOption']->getValue(); ?>
"
                                   <?php if ($this->_tpl_vars['oOption']->isActive()): ?> checked<?php endif; ?>
                                   data-feprice="<?php echo $this->_tpl_vars['oOption']->fePrice; ?>
"
                                   data-full-option-id="<?php echo $this->_tpl_vars['oOption']->fullOptionId; ?>
"
                                   data-full-option-id-general="<?php echo $this->_tpl_vars['oSelectionList']->getId(); ?>
|||*">
                            <label class="<?php if ($this->_tpl_vars['oOption']->isActive()): ?> active<?php endif; ?><?php if ($this->_tpl_vars['oOption']->icon): ?> with-icon<?php endif; ?>" for="jx-selection-<?php echo $this->_tpl_vars['iKey']; ?>
-<?php echo $this->_tpl_vars['oOption']->getValue(); ?>
">
                                <?php if ($this->_tpl_vars['oOption']->icon): ?><img class="option-icon" src="/<?php echo $this->_tpl_vars['oOption']->icon; ?>
" alt="<?php echo $this->_tpl_vars['oSelectionList']->getLabel(); ?>
 <?php echo $this->_tpl_vars['oOption']->getName(); ?>
" title="<?php echo $this->_tpl_vars['oSelectionList']->getLabel(); ?>
 <?php echo $this->_tpl_vars['oOption']->getName(); ?>
" width="50"><?php endif; ?>
                                <i class="fa fa-check-circle selected-marker" aria-hidden="true"></i>
                                <?php echo $this->_tpl_vars['oOption']->getName(); ?>

                                <?php if ($this->_tpl_vars['oOption']->description || $this->_tpl_vars['oOption']->icon): ?>
                                    <button type="button"
                                            data-toggle="modal"
                                            class="open-description-modal"
                                            data-target="#jx-selection-modal-<?php echo $this->_tpl_vars['iKey']; ?>
-<?php echo $this->_tpl_vars['oOption']->getValue(); ?>
">
                                        <i class="fa fa-info"></i>
                                    </button>
                                    <div class="modal fade jx-selection-modal" id="jx-selection-modal-<?php echo $this->_tpl_vars['iKey']; ?>
-<?php echo $this->_tpl_vars['oOption']->getValue(); ?>
" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title"><span class="modalh1"><?php echo $this->_tpl_vars['oOption']->getName(); ?>
</span></div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php if ($this->_tpl_vars['oOption']->image): ?>
                                                <div class="option-image"><img src="/<?php echo $this->_tpl_vars['oOption']->image; ?>
" alt="<?php echo $this->_tpl_vars['oSelectionList']->getLabel(); ?>
 <?php echo $this->_tpl_vars['oOption']->getName(); ?>
" img="<?php echo $this->_tpl_vars['oSelectionList']->getLabel(); ?>
 <?php echo $this->_tpl_vars['oOption']->getName(); ?>
"></div>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oOption']->description): ?>
                                                <div class="option-description">
													<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oOption']->description)) ? $this->_run_mod_handler('replace', true, $_tmp, "--Name1--", $this->_tpl_vars['name1']) : smarty_modifier_replace($_tmp, "--Name1--", $this->_tpl_vars['name1'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "--Name2--", $this->_tpl_vars['name2']) : smarty_modifier_replace($_tmp, "--Name2--", $this->_tpl_vars['name2'])))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)); ?>

												</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <?php endif; ?>
                            </label>
                        </div>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
    <div class="jx-current-selection-combination-desc"></div>
    <?php endif; ?>
<?php endif; ?>


                <div class="pricebox col-xs-12 col-sm-12 col-md-12 col-lg-12 details-col-middle">
                    
                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <?php $this->assign('tprice', $this->_tpl_vars['oDetailsProduct']->getTPrice()); ?>
                            <?php $this->assign('price', $this->_tpl_vars['oDetailsProduct']->getPrice()); ?>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    

                    

                    
                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <?php $this->assign('bHasSelectionList', false); ?>
<?php if ($this->_tpl_vars['oViewConf']->showSelectLists()): ?>
    <?php $this->assign('oSelections', $this->_tpl_vars['oDetailsProduct']->getSelections()); ?>
    <?php if ($this->_tpl_vars['oSelections']): ?>
        <?php $this->assign('bHasSelectionList', true); ?>
    <?php endif; ?>
<?php endif; ?>

        <?php if ($this->_tpl_vars['oDetailsProduct']->getFPrice()): ?>
        <?php $this->assign('sFrom', ""); ?>
        <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFPrice()); ?>
        <?php if ($this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
        <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFVarMinPrice()); ?>
        <?php if ($this->_tpl_vars['oDetailsProduct']->isRangePrice()): ?>
        <?php $this->assign('sFrom', ((is_array($_tmp='PRICE_FROM')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
        <?php endif; ?>
        <?php endif; ?>
		<div class="price_All">
			<label id="productPrice" class="price"
				   data-original-price="<?php echo $this->_tpl_vars['fPrice']; ?>
"
				   data-decimalsseparator="<?php if ($this->_tpl_vars['oCurrency']->dec): ?><?php echo $this->_tpl_vars['oCurrency']->dec; ?>
<?php else: ?>,<?php endif; ?>"
				   data-thousandseparator="<?php if ($this->_tpl_vars['oCurrency']->thousand): ?><?php echo $this->_tpl_vars['oCurrency']->thousand; ?>
<?php else: ?>.<?php endif; ?>">
				
					<?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['tprice']): ?>
							<del class="price-old" data-original-price="<?php echo $this->_tpl_vars['tprice']->getBruttoPrice(); ?>
"><span><?php echo $this->_tpl_vars['tprice']->getBruttoPrice(); ?>
</span> <?php echo $this->_tpl_vars['currency']->sign; ?>
</del>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				
				<span class="one-item-price <?php if ($this->_tpl_vars['tprice'] && $this->_tpl_vars['tprice']->getBruttoPrice() > $this->_tpl_vars['price']->getBruttoPrice()): ?> text-danger<?php endif; ?>">
				<span class="price-from"><?php echo $this->_tpl_vars['sFrom']; ?>
</span>
				<span class="price"><?php echo $this->_tpl_vars['fPrice']; ?>
</span>
				<span class="currency"><?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
				<?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
				<span class="price-markup">*</span>
				<?php endif; ?>
				<span class="hidden">
					<span itemprop="price"><?php echo $this->_tpl_vars['fPrice']; ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
				</span>
				</span>
				<div class="all-items-price">
					<div class="without-discount">
						<span class="all-items-price__price-from"><?php echo $this->_tpl_vars['sFrom']; ?>
</span>
						<span class="all-items-price__price"></span>
						<span class="all-items-price__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
						<?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
						<span class="all-items-price__price-markup">*</span>
						<?php endif; ?>
					</div>
					<div class="with-discount">
						<span class="all-items-price__price-from"><?php echo $this->_tpl_vars['sFrom']; ?>
</span>
						<span class="all-items-price__price"></span>
						<span class="all-items-price__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
						<?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
						<span class="all-items-price__price-markup">*</span>
						<?php endif; ?>
					</div>
					<div class="saving-notice">
						<b><?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_SAVING'), $this);?>
:</b>
						<span class="saving-notice__price"></span>
						<span class="saving-notice__currency"><?php echo $this->_tpl_vars['currency']->sign; ?>
</span>
					</div>
				</div>
			</label>
			<?php endif; ?>
		</div>
        <?php if ($this->_tpl_vars['oDetailsProduct']->loadAmountPriceInfo()): ?>
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
        <div class="discount-prices">
            <div class="discount-prices-header">
                <span><?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
</span><span>
                <?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
</span><span>
                <?php echo smarty_function_oxmultilang(array('ident' => 'PRICE'), $this);?>
</span>
            </div>
            <div class="discount-prices-body">
                <?php $_from = $this->_tpl_vars['oDetailsProduct']->loadAmountPriceInfo(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['amountPrice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['amountPrice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['priceItem']):
        $this->_foreach['amountPrice']['iteration']++;
?>
                <div class="discount-row">
                    <?php $this->assign('discountUnitLabel', $this->_tpl_vars['oDetailsProduct']->getDiscountUnitLabel()); ?>
                    <span class="discount-qty" data-qty=<?php echo $this->_tpl_vars['priceItem']->oxprice2article__oxamount->value; ?>
><?php echo smarty_function_oxmultilang(array('ident' => 'PRICE_FROM'), $this);?>
 <?php echo $this->_tpl_vars['priceItem']->oxprice2article__oxamount->value; ?>
 <?php if ($this->_tpl_vars['discountUnitLabel']): ?><?php echo $this->_tpl_vars['discountUnitLabel']; ?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => '_UNIT_PIECE'), $this);?>
<?php endif; ?></span>
					
					
					
					<span class="discount-value">
                    <?php if ($this->_tpl_vars['priceItem']->oxprice2article__oxaddperc->value): ?>
                        <i class="discount-data" data-discount-value="<?php echo $this->_tpl_vars['priceItem']->oxprice2article__oxaddperc->value; ?>
" data-discount-type="perc"></i>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['priceItem']->oxprice2article__oxaddperc->value)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
%
                    <?php else: ?>
                        <i class="discount-data" data-discount-value="<?php echo $this->_tpl_vars['priceItem']->fbrutprice; ?>
" data-dicount-type="abs"></i>
                        
                        <?php echo $this->_tpl_vars['priceItem']->fbrutprice; ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

                        <?php if ($this->_tpl_vars['oDetailsProduct']->getUnitName() && $this->_tpl_vars['priceItem']->fbrutamountprice): ?>
                            (<?php echo $this->_tpl_vars['priceItem']->fbrutamountprice; ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
 / <?php echo $this->_tpl_vars['oDetailsProduct']->getUnitName(); ?>
)
                        <?php endif; ?>
                        
                    <?php endif; ?>
                </span><span class="discount-final-price">
                    <span class="price-val"></span> <?php echo $this->_tpl_vars['currency']->sign; ?>

                </span>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
        <?php endif; ?>
		<?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__jxpackamount->value): ?>
        <div id="pack-amount-indicator" style="display: none;" data-amount="<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__jxpackamount->value; ?>
" data-pack-label="<?php echo smarty_function_oxmultilang(array('ident' => '_UNIT_PIECE'), $this);?>
"></div>
        <?php endif; ?>
<?php echo smarty_function_oxscript(array('add' => "
    $(function () {
        if (window.updateDiscountPriceBlock) {
            window.updateDiscountPriceBlock();
        }
    });
"), $this);?>

<?php if ($this->_tpl_vars['oViewConf']->isModuleActive('oepaypal') && $this->_tpl_vars['oViewConf']->showPayPalBannerOnProductDetailsPage()): ?>
    <?php $this->assign('bannerAmount', $this->_tpl_vars['oxcmp_basket']->getBruttoSum()); ?>
    <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
        <?php $this->assign('bannerAmount', $this->_tpl_vars['oxcmp_basket']->getNettoSum()); ?>
    <?php endif; ?>
    <?php if (( $this->_tpl_vars['oxcmp_basket']->getArtStockInBasket($this->_tpl_vars['oDetailsProduct']->getId()) === 0 ) && ! $this->_tpl_vars['oxcmp_basket']->hasProductVariantInBasket($this->_tpl_vars['oDetailsProduct'])): ?>
        <?php $this->assign('oPrice', $this->_tpl_vars['oDetailsProduct']->getPrice()); ?>
        <?php if ($this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
            <?php $this->assign('oPrice', $this->_tpl_vars['oDetailsProduct']->getVarMinPrice()); ?>
        <?php endif; ?>
        <?php $this->assign('productPrice', $this->_tpl_vars['oPrice']->getPrice()); ?>
        <?php $this->assign('bannerAmount', $this->_tpl_vars['bannerAmount']+$this->_tpl_vars['productPrice']); ?>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "installment_banners.tpl", 'smarty_include_vars' => array('amount' => $this->_tpl_vars['bannerAmount'],'selector' => $this->_tpl_vars['oViewConf']->getPayPalBannerProductDetailsPageSelector())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

				</div>
				<div class="pricebox col-xs-12 col-sm-12 col-md-12 col-lg-12 details-col-middle">
												<?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<div id="priceunitrene">
								<?php $this->assign('oUnitPrice', $this->_tpl_vars['oDetailsProduct']->getUnitPrice()); ?>
								<?php if ($this->_tpl_vars['oUnitPrice']): ?>
    <span id="productPriceUnit" class="jx-price-per-unit" data-unit-quantity="<?php echo $this->_tpl_vars['oDetailsProduct']->getUnitQuantity(); ?>
"><span class="unit-price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oUnitPrice'],'currency' => $this->_tpl_vars['currency']), $this);?>
</span> <?php echo $this->_tpl_vars['currency']->sign; ?>
  / <?php echo $this->_tpl_vars['oDetailsProduct']->getUnitName(); ?>
</span>
<?php endif; ?>

<?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
<?php if ($this->_tpl_vars['oDetailsProduct']->getFPrice()): ?>
    <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFPrice()); ?>
    <?php if ($this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
    <?php $this->assign('fPrice', $this->_tpl_vars['oDetailsProduct']->getFVarMinPrice()); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="jx-price-per-pack"><span class="unit-price">
        <?php $this->assign('discountUnitLabel_main', $this->_tpl_vars['oDetailsProduct']->getDiscountUnitLabel()); ?>
        <?php echo $this->_tpl_vars['fPrice']; ?>
</span> <?php echo $this->_tpl_vars['currency']->sign; ?>
 / <?php if ($this->_tpl_vars['discountUnitLabel_main']): ?><?php echo $this->_tpl_vars['discountUnitLabel_main']; ?>

<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => '_UNIT_PIECE'), $this);?>
<?php endif; ?></div>
							</div>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</div>
							
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    
                </div>
				
				<div class="rabatte col-xs-12 col-sm-6 col-md-6 col-lg-6 details-col-middle"></div>
				
                <div class="tobasket clearfix">
                                        
                        <?php if ($this->_tpl_vars['oView']->isPersParam()): ?>
                            <div class="persparamBox clear form-group">
                                <label for="persistentParam" class="control-label"><?php echo smarty_function_oxmultilang(array('ident' => 'LABEL'), $this);?>
</label>
                                <input type="text" id="persistentParam" name="persparam[details]" value="<?php echo $this->_tpl_vars['oDetailsProduct']->aPersistParam['text']; ?>
" size="35" class="form-control">
                            </div>
                        <?php endif; ?>
                    
					
					
                        <?php if ($this->_tpl_vars['oDetailsProduct']->getStockStatus() == -1): ?>
                            <span class="stockFlag notOnStock">
                                <i class="fa fa-circle text-danger"></i>
                                <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnostocktext->value): ?>
                                    <link itemprop="availability" href="http://schema.org/OutOfStock"/>
                                    <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxnostocktext->value; ?>

                                <?php elseif ($this->_tpl_vars['oViewConf']->getStockOffDefaultMessage()): ?>
                                    <link itemprop="availability" href="http://schema.org/OutOfStock"/>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NOT_ON_STOCK'), $this);?>

                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['oDetailsProduct']->getDeliveryDate()): ?>
                                    <link itemprop="availability" href="http://schema.org/PreOrder"/>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'AVAILABLE_ON'), $this);?>
 <?php echo $this->_tpl_vars['oDetailsProduct']->getDeliveryDate(); ?>

                                <?php endif; ?>
                            </span>
                        <?php elseif ($this->_tpl_vars['oDetailsProduct']->getStockStatus() == 1): ?>
                            <link itemprop="availability" href="http://schema.org/InStock"/>
                            <span class="stockFlag lowStock">
                                <i class="fa fa-circle text-warning"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'LOW_STOCK'), $this);?>

                            </span>
                        <?php elseif ($this->_tpl_vars['oDetailsProduct']->getStockStatus() == 0): ?>
                            <span class="stockFlag">
                                <link itemprop="availability" href="http://schema.org/InStock"/>
                                <i class="fa fa-circle text-success"></i>
                                <?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxstocktext->value): ?>
                                    <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxstocktext->value; ?>

                                <?php elseif ($this->_tpl_vars['oViewConf']->getStockOnDefaultMessage()): ?>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'READY_FOR_SHIPPING'), $this);?>

                                <?php endif; ?>
                            </span>
                        <?php endif; ?>
                    

                    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php if ($this->_tpl_vars['oDetailsProduct']->isBuyable()): ?>
                            <span class="deliverytime">
                                
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/details/inc/deliverytime.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                
                            </span>
                        <?php endif; ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

                    
                        <div class="tobasketFunction clear">
                            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <?php if (! $this->_tpl_vars['oDetailsProduct']->isNotBuyable()): ?>
                                    <div class="input-group">
                                        <input id="amountToBasket" type="number" name="am" step="1" value="1" autocomplete="off" class="form-control">
                                        <div class="input-group-tweak">
                                            <button id="toBasket" type="submit" <?php if (! $this->_tpl_vars['blCanBuy']): ?>disabled="disabled"<?php endif; ?> class="btn btn-primary submitButton largeButton"><i class="fa fa-shopping-cart"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>
</button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        </div>
                    
<?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabledInDetails() && ! $this->_tpl_vars['oDetailsProduct']->isNotBuyable()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    <div id="paypalExpressCheckoutDetailsBox" class="paypalExpressCheckoutBox paypalExpressCheckoutDetailsBox">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="oePayPalCancelURL" value="<?php echo $this->_tpl_vars['oView']->oePayPalGetCancelUrl(); ?>
"/>
        <input type="image" name="paypalExpressCheckoutButton" id="paypalExpressCheckoutDetailsButton"
               class="paypalExpressCheckoutDetailsButton" <?php if (! $this->_tpl_vars['blCanBuy']): ?>disabled="disabled"<?php endif; ?>
        src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png" title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">
        <div class="paypalExpressCheckoutMsg">
            <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                <a href="#" class="paypalHelpIcon small">?</a>
                <div class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                </div>
                <input type="checkbox" name="displayCartInPayPal" value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

            <?php endif; ?>
        </div>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").hover(function (){$(this).parent(".paypalExpressCheckoutMsg").children(".paypalHelpBox").toggle();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").click(function (){return false;});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$("#paypalExpressCheckoutDetailsButton").click(function (){$("<input />").attr("type", "hidden").attr("name", "doPaypalExpressCheckoutFromDetailsPage").attr("value", "true").appendTo(".js-oxProductForm");return true;});'), $this);?>

    <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/js/oepaypalonclickproceedaction.js'),'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$( "#paypalExpressCheckoutDetailsButton" ).oePayPalOnClickProceedAction( {sAction: "actionExpressCheckoutFromDetailsPage"} );'), $this);?>

<?php endif; ?>

<?php if (! $this->_tpl_vars['oDetailsProduct']->isNotBuyable() && $this->_tpl_vars['oViewConf']->isKlarnaCheckoutEnabled() && $this->_tpl_vars['oViewConf']->addBuyNow()): ?>
    <div>
        <a class="btn btn-primary largeButton submitButton klarna-express-button <?php if (! $this->_tpl_vars['blCanBuy']): ?>disabled<?php endif; ?>" href="#">
            <?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_BUY_NOW'), $this);?>

        </a>
    </div>
    <div class="clear clearfix"></div>
    <?php echo smarty_function_oxscript(array('add' => '$(".klarna-express-button").KlarnaProceedAction( {sAction: "actionKlarnaExpressCheckoutFromDetailsPage"} );'), $this);?>

<?php endif; ?>

<?php $this->assign('aKlPromotion', $this->_tpl_vars['oViewConf']->getOnSitePromotionInfo('sKlarnaCreditPromotionProduct',$this->_tpl_vars['oDetailsProduct'])); ?>
<?php $this->assign('sKlarnaMessagingScript', $this->_tpl_vars['oViewConf']->getOnSitePromotionInfo('sKlarnaMessagingScript')); ?>
<?php if ($this->_tpl_vars['aKlPromotion'] && ((is_array($_tmp=$this->_tpl_vars['sKlarnaMessagingScript'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp))): ?>
    <div id="credit_promo">
        <?php echo $this->_tpl_vars['aKlPromotion']; ?>

    </div>
    <div class="clear clearfix"></div>
<?php endif; ?>

<style>
    .klarna-express-button {
        margin-bottom: 5px;
    }

    body.cl-details .tobasket .tobasketFunction{
        display:inline-block;
    }
</style>

                    
						<div class="row row_payments">
							<div class="payments_detail payments_detail_first">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_paypal_small.png" alt="Zahlung mit PayPal" title="Bezahlung mit PayPal">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_lastschrift_small.png" alt="Zahlung per Lastschrift" title="Zahlung per Bankeinzug">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_rechnung_small.png" alt="Zahlung per Rechnung" title="Bezahlen mit Rechnung">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_sofortkauf_small.png" alt="Zahlung mit Sofortkauf" title="Bezahlen mit Sofortkauf">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_ratenkauf_small.png" alt="Zahlung mit Ratenkauf" title="Bezahlen mit Ratenkauf">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_visa_small.png" alt="Zahlung mit Visa Kreditkarte" title="Bezahlen mit Visa Kreditkarte">
							</div>
							<div class="payments_detail">
								<img src="https://www.physioexpress.de/out/flow/img/klarna_mastercard_small.png" alt="Zahlung mit Mastercard Kreditkarte" title="Bezahlen mit mastercard Kreditkarte">
							</div>
						</div>
                    

                    
                    
                </div>
            </div>
        </div>
		
		
		<!--
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 details-col-right">
            <?php if ($this->_tpl_vars['oManufacturer']): ?>
                <div class="brandLogo">
                    
                        <a href="<?php echo $this->_tpl_vars['oManufacturer']->getLink(); ?>
" title="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
">
                            <?php if ($this->_tpl_vars['oManufacturer']->oxmanufacturers__oxicon->value): ?>
                                <img src="<?php echo $this->_tpl_vars['oManufacturer']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
">
                            <?php endif; ?>
                        </a>
                        <span itemprop="brand" class="hidden"><?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
</span>
                    
                </div>
            <?php endif; ?>

            <?php $this->assign('oSession', $this->_tpl_vars['oConfig']->getSession()); ?>

            
                
                    <ul class="list-unstyled action-links">
                        <li>
                            <?php if ($this->_tpl_vars['oViewConf']->getShowCompareList()): ?>
                                <?php echo smarty_function_oxid_include_dynamic(array('file' => "page/details/inc/compare_links.tpl",'testid' => "",'type' => 'compare','aid' => $this->_tpl_vars['oDetailsProduct']->oxarticles__oxid->value,'anid' => $this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value,'in_list' => $this->_tpl_vars['oDetailsProduct']->isOnComparisonList(),'page' => $this->_tpl_vars['oView']->getActPage(),'text_to_id' => 'COMPARE','text_from_id' => 'REMOVE_FROM_COMPARE_LIST'), $this);?>

                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if ($this->_tpl_vars['oViewConf']->getShowSuggest()): ?>
                                <a id="suggest" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=suggest") : smarty_modifier_cat($_tmp, "cl=suggest")),'params' => ((is_array($_tmp="anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'RECOMMEND'), $this);?>
</a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if ($this->_tpl_vars['oViewConf']->getShowListmania()): ?>
                                <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                                    <a id="recommList" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=recommadd") : smarty_modifier_cat($_tmp, "cl=recommadd")),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="aid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value)."&amp;anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams())))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;stoken=") : smarty_modifier_cat($_tmp, "&amp;stoken=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_LISTMANIA_LIST'), $this);?>
</a>
                                <?php else: ?>
                                    <a id="loginToRecommlist" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account")),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;sourcecl=") : smarty_modifier_cat($_tmp, "&amp;sourcecl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName())))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_LISTMANIA_LIST'), $this);?>
</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                                <a id="linkToNoticeList" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=") : smarty_modifier_cat($_tmp, "cl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName())),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="aid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value)."&amp;anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value)."&amp;fnc=tonoticelist&amp;am=1")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams())))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;stoken=") : smarty_modifier_cat($_tmp, "&amp;stoken=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_WISH_LIST'), $this);?>
</a>
                            <?php else: ?>
                                <a id="loginToNotice" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account")),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;sourcecl=") : smarty_modifier_cat($_tmp, "&amp;sourcecl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName())))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_WISH_LIST'), $this);?>
</a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php if ($this->_tpl_vars['oViewConf']->getShowWishlist()): ?>
                                <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                                    <a id="linkToWishList" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=") : smarty_modifier_cat($_tmp, "cl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName())),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="aid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value)."&anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value)."&amp;fnc=towishlist&amp;am=1")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams())))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;stoken=") : smarty_modifier_cat($_tmp, "&amp;stoken=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oSession']->getSessionChallengeToken()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_GIFT_REGISTRY'), $this);?>
</a>
                                <?php else: ?>
                                    <a id="loginToWish" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account")),'params' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp="anid=".($this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;sourcecl=") : smarty_modifier_cat($_tmp, "&amp;sourcecl=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getTopActiveClassName())))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_TO_GIFT_REGISTRY'), $this);?>
</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php echo smarty_function_mailto(array('extra' => 'id="questionMail"','address' => ((is_array($_tmp=@$this->_tpl_vars['oDetailsProduct']->oxarticles__oxquestionemail->value)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['oxcmp_shop']->oxshops__oxinfoemail->value) : smarty_modifier_default($_tmp, @$this->_tpl_vars['oxcmp_shop']->oxshops__oxinfoemail->value)),'subject' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='QUESTIONS_ABOUT_THIS_PRODUCT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value)),'text' => ((is_array($_tmp='QUESTIONS_ABOUT_THIS_PRODUCT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))), $this);?>

                        </li>
                    </ul>
                
            
        </div>
		-->
    </div>
</div>

<?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    </form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>