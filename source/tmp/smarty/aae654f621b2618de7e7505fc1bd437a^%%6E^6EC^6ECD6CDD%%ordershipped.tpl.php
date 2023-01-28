<?php /* Smarty version 2.6.31, created on 2023-01-11 08:23:10
         compiled from email/plain/ordershipped.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxcontent', 'email/plain/ordershipped.tpl', 5, false),array('function', 'oxmultilang', 'email/plain/ordershipped.tpl', 9, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>


<?php echo smarty_function_oxcontent(array('ident' => 'oxordersendplainemail'), $this);?>




<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_SHIPPED_TO','suffix' => 'COLON'), $this);?>




<?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?>
    <?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->getRawValue(); ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->getRawValue(); ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxdelstateid->value; ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->getRawValue(); ?>

<?php else: ?>
    <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->getRawValue(); ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->getRawValue(); ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

    <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->getRawValue(); ?>

<?php endif; ?>



<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>




<?php $_from = $this->_tpl_vars['order']->getOrderArticles(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderArticle']):
?>
<?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxamount->value; ?>
 <?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxtitle->getRawValue(); ?>
 <?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->getRawValue(); ?>

<?php endforeach; endif; unset($_from); ?>



<?php echo smarty_function_oxmultilang(array('ident' => 'YOUR_TEAM','args' => $this->_tpl_vars['shop']->oxshops__oxname->getRawValue()), $this);?>




<?php if ($this->_tpl_vars['order']->getShipmentTrackingUrl()): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPMENT_TRACKING','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->getShipmentTrackingUrl(); ?>
<?php endif; ?>


<?php echo smarty_function_oxcontent(array('ident' => 'oxemailfooterplain'), $this);?>