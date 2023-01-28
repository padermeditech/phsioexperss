<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:47
         compiled from widget/product/listitem_grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxhasrights', 'widget/product/listitem_grid.tpl', 28, false),array('modifier', 'strstr', 'widget/product/listitem_grid.tpl', 54, false),array('function', 'oxmultilang', 'widget/product/listitem_grid.tpl', 67, false),)), $this); ?>

    <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
    <?php $this->assign('blDisableToCart', $this->_tpl_vars['oView']->getDisableToCart()); ?>
    <?php $this->assign('iIndex', $this->_tpl_vars['oView']->getIndex()); ?>
    <?php $this->assign('showMainLink', $this->_tpl_vars['oView']->getShowMainLink()); ?>

    <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    <?php if ($this->_tpl_vars['showMainLink']): ?>
        <?php $this->assign('_productLink', $this->_tpl_vars['product']->getMainLink()); ?>
    <?php else: ?>
        <?php $this->assign('_productLink', $this->_tpl_vars['product']->getLink()); ?>
    <?php endif; ?>
    <?php $this->assign('aVariantSelections', $this->_tpl_vars['product']->getVariantSelections(null,null,1)); ?>
    <?php $this->assign('blShowToBasket', true); ?>     <?php if ($this->_tpl_vars['blDisableToCart'] || $this->_tpl_vars['product']->isNotBuyable() || ( $this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['selections'] ) || $this->_tpl_vars['product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['product']->getSelections(1) ) || $this->_tpl_vars['product']->getVariants()): ?>
        <?php $this->assign('blShowToBasket', false); ?>
    <?php endif; ?>
<a href="<?php echo $this->_tpl_vars['_productLink']; ?>
" title="<?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
">
    <form name="tobasket<?php echo $this->_tpl_vars['testid']; ?>
" <?php if ($this->_tpl_vars['blShowToBasket']): ?>action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post"<?php else: ?>action="<?php echo $this->_tpl_vars['_productLink']; ?>
" method="get"<?php endif; ?>>
        <div class="hidden">
            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <input type="hidden" name="pgNr" value="<?php echo $this->_tpl_vars['oView']->getActPage(); ?>
">
            <?php if ($this->_tpl_vars['recommid']): ?>
                <input type="hidden" name="recommid" value="<?php echo $this->_tpl_vars['recommid']; ?>
">
            <?php endif; ?>
            <?php if ($this->_tpl_vars['blShowToBasket']): ?>
            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
                <?php if ($this->_tpl_vars['owishid']): ?>
                    <input type="hidden" name="owishid" value="<?php echo $this->_tpl_vars['owishid']; ?>
">
                <?php endif; ?>
                <?php if ($this->_tpl_vars['toBasketFunction']): ?>
                    <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['toBasketFunction']; ?>
">
                <?php else: ?>
                    <input type="hidden" name="fnc" value="tobasket">
                <?php endif; ?>
                <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxid->value; ?>
">
                <?php if ($this->_tpl_vars['altproduct']): ?>
                    <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['altproduct']; ?>
">
                <?php else: ?>
                    <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
                <?php endif; ?>
                <input type="hidden" name="am" value="1">
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <input type="hidden" name="cl" value="details">
                <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
            <?php endif; ?>
        </div>

        <?php $this->assign('hoverImg', $this->_tpl_vars['product']->getPictureUrl(2)); ?>
<?php $this->assign('hasHoverImg', 1); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['hoverImg'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "nopic.jpg") : strstr($_tmp, "nopic.jpg"))): ?>
    <?php $this->assign('hasHoverImg', 0); ?>
<?php endif; ?>

<?php $this->assign('isNewProduct', $this->_tpl_vars['oView']->isNewProduct()); ?>
<?php $this->assign('isSetProduct', $this->_tpl_vars['oView']->isSetProduct()); ?>
<?php $this->assign('isSaleProduct', $this->_tpl_vars['oView']->isSaleProduct()); ?>
<?php $this->assign('isConfiguratorProduct', $this->_tpl_vars['oView']->isConfiguratorProduct()); ?>


<div class="picture text-center list-product-pictures-wrapper">
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
    <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('spinner.gif'); ?>
" data-src="<?php echo $this->_tpl_vars['product']->getThumbnailUrl(); ?>
" alt="<?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
" class="img-responsive <?php if ($this->_tpl_vars['hasHoverImg']): ?>with-hover-img<?php endif; ?>">
    <?php if ($this->_tpl_vars['hasHoverImg']): ?>
        <div class="img-responsive list-product-hover-img">
            <div style="background-image: url('<?php echo $this->_tpl_vars['hoverImg']; ?>
')"></div>
        </div>
    <?php endif; ?>
</div>

        <div class="listDetails text-center">
            
                <div class="title">
                        <span><?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
</span>
                </div>
            

<?php $this->assign('iRatingValue', $this->_tpl_vars['oView']->getRatingValue()); ?>

<div class="list-block-rating">
    
        <?php unset($this->_sections['starRatings']);
$this->_sections['starRatings']['name'] = 'starRatings';
$this->_sections['starRatings']['start'] = (int)0;
$this->_sections['starRatings']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['starRatings']['show'] = true;
$this->_sections['starRatings']['max'] = $this->_sections['starRatings']['loop'];
$this->_sections['starRatings']['step'] = 1;
if ($this->_sections['starRatings']['start'] < 0)
    $this->_sections['starRatings']['start'] = max($this->_sections['starRatings']['step'] > 0 ? 0 : -1, $this->_sections['starRatings']['loop'] + $this->_sections['starRatings']['start']);
else
    $this->_sections['starRatings']['start'] = min($this->_sections['starRatings']['start'], $this->_sections['starRatings']['step'] > 0 ? $this->_sections['starRatings']['loop'] : $this->_sections['starRatings']['loop']-1);
if ($this->_sections['starRatings']['show']) {
    $this->_sections['starRatings']['total'] = min(ceil(($this->_sections['starRatings']['step'] > 0 ? $this->_sections['starRatings']['loop'] - $this->_sections['starRatings']['start'] : $this->_sections['starRatings']['start']+1)/abs($this->_sections['starRatings']['step'])), $this->_sections['starRatings']['max']);
    if ($this->_sections['starRatings']['total'] == 0)
        $this->_sections['starRatings']['show'] = false;
} else
    $this->_sections['starRatings']['total'] = 0;
if ($this->_sections['starRatings']['show']):

            for ($this->_sections['starRatings']['index'] = $this->_sections['starRatings']['start'], $this->_sections['starRatings']['iteration'] = 1;
                 $this->_sections['starRatings']['iteration'] <= $this->_sections['starRatings']['total'];
                 $this->_sections['starRatings']['index'] += $this->_sections['starRatings']['step'], $this->_sections['starRatings']['iteration']++):
$this->_sections['starRatings']['rownum'] = $this->_sections['starRatings']['iteration'];
$this->_sections['starRatings']['index_prev'] = $this->_sections['starRatings']['index'] - $this->_sections['starRatings']['step'];
$this->_sections['starRatings']['index_next'] = $this->_sections['starRatings']['index'] + $this->_sections['starRatings']['step'];
$this->_sections['starRatings']['first']      = ($this->_sections['starRatings']['iteration'] == 1);
$this->_sections['starRatings']['last']       = ($this->_sections['starRatings']['iteration'] == $this->_sections['starRatings']['total']);
?>
        <?php if ($this->_tpl_vars['iRatingValue'] == 0): ?>
            <i class="fa fa-star rating-star-empty"></i>
        <?php else: ?>
            <?php if ($this->_tpl_vars['iRatingValue'] > 1): ?>
                <i class="fa fa-star rating-star-filled"></i>
                <?php $this->assign('iRatingValue', $this->_tpl_vars['iRatingValue']-1); ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['iRatingValue'] < 0.5): ?>
                    <?php if ($this->_tpl_vars['iRatingValue'] < 0.3): ?>
                        <i class="fa fa-star rating-star-empty"></i>
                    <?php else: ?>
                        <i class="fa fa-star-half-o rating-star-filled"></i>
                    <?php endif; ?>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php elseif ($this->_tpl_vars['iRatingValue'] > 0.7): ?>
                    <i class="fa fa-star rating-star-filled"></i>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php else: ?>
                    <i class="fa fa-star-half-o rating-star-filled"></i>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php endfor; endif; ?>
   
</div>

            <div class="price text-center">
                <div class="content">
                    
                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <?php $this->assign('oUnitPrice', $this->_tpl_vars['product']->getUnitPrice()); ?>
                            <?php $this->assign('tprice', $this->_tpl_vars['product']->getTPrice()); ?>
                            <?php $this->assign('price', $this->_tpl_vars['product']->getPrice()); ?>

                            <?php if ($this->_tpl_vars['tprice'] && $this->_tpl_vars['tprice']->getBruttoPrice() > $this->_tpl_vars['price']->getBruttoPrice()): ?>
<span class="oldPrice text-muted">
                                    <del><?php echo $this->_tpl_vars['product']->getFTPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</del>
                                </span>
                            <?php endif; ?>

                            
                                <?php if ($this->_tpl_vars['product']->getFPrice()): ?>
                                    <span class="lead text-nowrap">
                                        <?php if ($this->_tpl_vars['product']->isRangePrice()): ?>
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'PRICE_FROM'), $this);?>

                                            <?php if (! $this->_tpl_vars['product']->isParentNotBuyable()): ?>
                                                <?php echo $this->_tpl_vars['product']->getFMinPrice(); ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['product']->getFVarMinPrice(); ?>

                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if (! $this->_tpl_vars['product']->isParentNotBuyable()): ?>
                                                <?php echo $this->_tpl_vars['product']->getFPrice(); ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['product']->getFVarMinPrice(); ?>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php echo $this->_tpl_vars['currency']->sign; ?>

                                        <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                                             <?php if (! ( $this->_tpl_vars['product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['product']->getSelections(1) ) || $this->_tpl_vars['product']->getVariants() )): ?>*<?php endif; ?>
                                        <?php endif; ?>
                                    </span>
                                <?php endif; ?>
                            
                            
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    

<?php $this->assign('isMinibasketAccessory', $this->_tpl_vars['oView']->getViewParameter('isMinibasketAccessory')); ?>
<?php $this->assign('defaultAmountInputValue', $this->_tpl_vars['oView']->getViewParameter('defaultAmountInputValue')); ?>

<?php if ($this->_tpl_vars['isMinibasketAccessory']): ?>
    <?php if ($this->_tpl_vars['product']->isNotBuyable() || ( $this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['selections'] ) || $this->_tpl_vars['product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['product']->getSelections(1) ) || $this->_tpl_vars['product']->getVariants()): ?>
        <a class="more-info" href="<?php echo $this->_tpl_vars['_productLink']; ?>
">
            <button class="btn btn-primary" title="<?php echo smarty_function_oxmultilang(array('ident' => 'MORE_INFO'), $this);?>
">
                <?php echo smarty_function_oxmultilang(array('ident' => 'MORE_INFO'), $this);?>

            </button>
        </a>
    <?php else: ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
        <input type="hidden" name="fnc" value="tobasket">
        <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxid->value; ?>
">
            <?php if ($this->_tpl_vars['altproduct']): ?>
        <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['altproduct']; ?>
">
            <?php else: ?>
        <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
            <?php endif; ?>
        <div class="form-group">
            <input type="number" name="am" value="<?php echo $this->_tpl_vars['defaultAmountInputValue']; ?>
" size="3" autocomplete="off" class="form-control amount">
        </div>
        <button type="submit" class="btn btn-primary hasTooltip" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>
">
            <?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>

        </button>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
<?php endif; ?>
                </div>
            </div>
            
        </div>
    </form>
</a>