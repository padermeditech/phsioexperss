<?php /* Smarty version 2.6.31, created on 2023-01-11 08:23:10
         compiled from email/html/ordershipped.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'email/html/ordershipped.tpl', 19, false),array('modifier', 'cat', 'email/html/ordershipped.tpl', 19, false),array('function', 'oxcontent', 'email/html/ordershipped.tpl', 21, false),array('function', 'oxmultilang', 'email/html/ordershipped.tpl', 24, false),)), $this); ?>
		<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php ob_start(); ?>
    table.orderarticles th {
        white-space: nowrap;
    }
    table.orderarticles th, table.orderarticles td {
        border: 1px solid #d4d4d4;
        font-size: 13px;
        padding:5px;
    }
    table.orderarticles {
        border-collapse: collapse;
    }
    table.orderarticles thead th {
        background-color: #ebebeb;
    }
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('style', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/header.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='DD_ORDERSHIPPED_HEADING')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, " #") : smarty_modifier_cat($_tmp, " #")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['order']->oxorder__oxordernr->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['order']->oxorder__oxordernr->value)),'style' => $this->_tpl_vars['style'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
       <?php echo smarty_function_oxcontent(array('ident' => 'oxordersendemail'), $this);?>

    
    
        <h2 style="color:#044996; border-bottom: 2px solid #f8a61c; margin-bottom: 10px;"><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS'), $this);?>
</h2>
    
    
        <p>
            <?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?>
              <?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxdelstateid->value; ?>

              <?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->value; ?>

            <?php else: ?>
              <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<br>
              <?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

              <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>

            <?php endif; ?>
        </p>
        <br/>
    
    
        <h2 style="color:#044996; border-bottom: 2px solid #f8a61c; margin-bottom: 10px;"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
</h2>
    
    <table class="orderarticles" border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
            <tr>
                <th class="text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
</th>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT'), $this);?>
</th>
            </tr>
        </thead>
        <tbody>
            
                <?php $_from = $this->_tpl_vars['order']->getOrderArticles(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderArticle']):
?>
                    <tr valign="top">
                        <td align="right" class="text-right"><?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxamount->value; ?>
</td>
                        <td>
                            <?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->value; ?>

                            <br><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_NO','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxartnum->value; ?>

                        </td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            
        </tbody>
    </table>
    <br/>
	
        <?php if ($this->_tpl_vars['order']->getShipmentTrackingUrl()): ?>	
            <p><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPMENT_TRACKING','suffix' => 'COLON'), $this);?>
 <a href="<?php echo $this->_tpl_vars['order']->getShipmentTrackingUrl(); ?>
" target="_blank" title="<?php echo smarty_function_oxmultilang(array('ident' => 'CLICK_HERE'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'CLICK_HERE'), $this);?>
</a></p>	
            <br/>	
        <?php endif; ?>	
    

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>