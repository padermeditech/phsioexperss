<?php /* Smarty version 2.6.31, created on 2023-01-02 10:57:22
         compiled from page/account/order.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/account/order.tpl', 2, false),array('modifier', 'date_format', 'page/account/order.tpl', 18, false),array('function', 'oxmultilang', 'page/account/order.tpl', 3, false),array('insert', 'oxid_tracker', 'page/account/order.tpl', 102, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='ORDER_HISTORY')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_HISTORY'), $this);?>
</h1>

    <?php $this->assign('oOrders', $this->_tpl_vars['oView']->getOrderList()); ?>

    
        <?php if (count ( $this->_tpl_vars['oOrders'] ) > 0): ?>
            <?php $this->assign('oArticleList', $this->_tpl_vars['oView']->getOrderArticleList()); ?>
            <ol class="list-unstyled">
                <?php $_from = $this->_tpl_vars['oOrders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'DD_ORDER_ORDERDATE'), $this);?>
</strong>
                                        <span id="accOrderDate_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxorderdate->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</span>
                                        <span><?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxorderdate->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
</span>
                                    </div>
                                    <div class="col-xs-3">
                                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'STATUS'), $this);?>
</strong>
                                        <span id="accOrderStatus_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
">
                                            <?php if ($this->_tpl_vars['order']->oxorder__oxstorno->value): ?>
                                                <span class="note"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_IS_CANCELED'), $this);?>
</span>
                                            <?php elseif ($this->_tpl_vars['order']->oxorder__oxsenddate->value != "-"): ?>
                                                <span><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPED'), $this);?>
</span>
                                            <?php else: ?>
                                                <span class="note"><?php echo smarty_function_oxmultilang(array('ident' => 'NOT_SHIPPED_YET'), $this);?>
</span>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    <div class="col-xs-3">
                                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_NUMBER'), $this);?>
</strong>
                                        <span id="accOrderNo_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
"><?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
</span>
                                    </div>
                                    <div class="col-xs-3">
                                        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPMENT_TO'), $this);?>
</strong>
                                            <span id="accOrderName_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
">
                                            <?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?>
                                                <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->value; ?>

                                                <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->value; ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>

                                                <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>

                                            <?php endif; ?>
                                        </span>
                                        <?php if ($this->_tpl_vars['order']->getShipmentTrackingUrl()): ?>
                                            &nbsp;|&nbsp;<strong><?php echo smarty_function_oxmultilang(array('ident' => 'TRACKING_ID'), $this);?>
</strong>
                                            <span id="accOrderTrack_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
">
                                                <a href="<?php echo $this->_tpl_vars['order']->getShipmentTrackingUrl(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'TRACK_SHIPMENT'), $this);?>
</a>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'CART'), $this);?>
</strong>
                                
                                <ol class="list-unstyled">
                                    <?php $_from = $this->_tpl_vars['order']->getOrderArticles(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['testOrderItem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['testOrderItem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['orderitem']):
        $this->_foreach['testOrderItem']['iteration']++;
?>
                                        <?php $this->assign('sArticleId', $this->_tpl_vars['orderitem']->oxorderarticles__oxartid->value); ?>
                                        <?php $this->assign('oArticle', $this->_tpl_vars['oArticleList'][$this->_tpl_vars['sArticleId']]); ?>
                                        <li id="accOrderAmount_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
_<?php echo $this->_foreach['testOrderItem']['iteration']; ?>
">
                                            <?php echo $this->_tpl_vars['orderitem']->oxorderarticles__oxamount->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'QNT'), $this);?>

                                            <?php if ($this->_tpl_vars['oArticle']->oxarticles__oxid->value && $this->_tpl_vars['oArticle']->isVisible()): ?>
                                                <a id="accOrderLink_<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
_<?php echo $this->_foreach['testOrderItem']['iteration']; ?>
" href="<?php echo $this->_tpl_vars['oArticle']->getLink(); ?>
">
                                            <?php endif; ?>
                                            <?php echo $this->_tpl_vars['orderitem']->oxorderarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['orderitem']->oxorderarticles__oxselvariant->value; ?>
 <span class="amount"></span>
                                            <?php if ($this->_tpl_vars['oArticle']->oxarticles__oxid->value && $this->_tpl_vars['oArticle']->isVisible()): ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php $_from = $this->_tpl_vars['orderitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
?>
                                                <?php if ($this->_tpl_vars['aParam']): ?>
                                                    <br /><?php echo smarty_function_oxmultilang(array('ident' => 'DETAILS'), $this);?>
: <?php echo $this->_tpl_vars['aParam']; ?>

                                                <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                                                                                                                </li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ol>
                                
                            </div>
                        </div>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ol>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/locator/listlocator.tpl", 'smarty_include_vars' => array('locator' => $this->_tpl_vars['oView']->getPageNavigation(),'place' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_EMPTY_HISTORY'), $this);?>

        <?php endif; ?>
    
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'orderhistory')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>