<?php /* Smarty version 2.6.31, created on 2023-01-11 09:35:29
         compiled from oeextendedorderadminorderpackage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'oeextendedorderadminorderpackage.tpl', 1, false),array('modifier', 'oxmultilangsal', 'oeextendedorderadminorderpackage.tpl', 28, false),array('modifier', 'oxformdate', 'oeextendedorderadminorderpackage.tpl', 51, false),array('modifier', 'oxaddslashes', 'oeextendedorderadminorderpackage.tpl', 106, false),array('function', 'oxmultilang', 'oeextendedorderadminorderpackage.tpl', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='OEEXTENDEDORDERADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => ' ')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
<!--
function printWindow()
{
    bV = parseInt(navigator.appVersion);
    if (bV >= 4)
        window.print();
}
//  End -->
</script>
<style media="print"> #noprint{ display:none; }</style>
<br>
<div id="noprint"><br>
<a class="listitem" href="javascript:printWindow();"><b><?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_SHOWPACKLIST'), $this);?>
</b></a><br>
<br><br></div>

<span class="listitem">
<b><?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_PACKLIST'), $this);?>
</b><br><br>
</span>

<?php $_from = $this->_tpl_vars['resultset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>

<table cellspacing="0" cellpadding="0" border="0" width="98%" style="padding-top : 10px; padding-bottom : 10px; padding-left : 5px;  padding-right : 5px; border : 1px #000000; border-style : solid solid solid solid;">
<tr>
    <td class="listitem" width="150" valign="top">
        <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_BILLADDRESS'), $this);?>
<br></b>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
&nbsp;<?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
&nbsp;<?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<br>
        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<br>
        <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
  <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<br>
        <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
&nbsp;<?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>
<br>
        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->value; ?>
<br>
        <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_USTID'), $this);?>
: <?php echo $this->_tpl_vars['order']->oxorder__oxbillustid->value; ?>
<br>
        <?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->value; ?>
<br>
        <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_FON'), $this);?>
: <?php echo $this->_tpl_vars['order']->oxorder__oxbillfon->value; ?>
<br>
        <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_FAX'), $this);?>
: <?php echo $this->_tpl_vars['order']->oxorder__oxbillfax->value; ?>
<br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxremark->value): ?><b><br><?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_REMARK'), $this);?>
: <br><?php echo $this->_tpl_vars['order']->oxorder__oxremark->value; ?>
</b><br><?php endif; ?>
    </td>
    <td class="listitem" width="150" valign="top">
        <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DELIVERYADDRESS'), $this);?>
:<br></b>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdelsal->value): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxdelsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
<?php endif; ?>&nbsp;<?php if ($this->_tpl_vars['order']->oxorder__oxdelfname->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
<?php endif; ?>&nbsp;<?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdellname->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<?php endif; ?><br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdelcompany->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<?php endif; ?><br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdelstreet->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->value; ?>
&nbsp;<?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
&nbsp;<?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<?php endif; ?><br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdelzip->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
<?php endif; ?>&nbsp;<?php if ($this->_tpl_vars['order']->oxorder__oxdelcity->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>
<?php endif; ?><br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdelcountry->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelcountry->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->value; ?>
<?php endif; ?><br>
        <?php if ($this->_tpl_vars['order']->oxorder__oxdeladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdeladdinfo->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->value; ?>
<?php endif; ?><br><br>
        <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_FON'), $this);?>
: <?php if ($this->_tpl_vars['order']->oxorder__oxdelfon->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelfon->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillfon->value; ?>
<?php endif; ?><br>
        <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_FAX'), $this);?>
: <?php if ($this->_tpl_vars['order']->oxorder__oxdelfax->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdelfax->value; ?>
<?php else: ?><?php echo $this->_tpl_vars['order']->oxorder__oxbillfax->value; ?>
<?php endif; ?><br>
    </td>
    <td class="packitem" valign="top">
    <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_ORDERNR1'), $this);?>
<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
 - <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_ORDERNR2'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxorderdate->value)) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
<br><br>
            <table cellspacing="2" cellpadding="0" border="0" width="100%">
            <?php $_from = $this->_tpl_vars['order']->getOrderArticles(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
                    <tr>
                            <td class="packitem" valign="top"><b><?php echo $this->_tpl_vars['article']->oxorderarticles__oxamount->value; ?>
</b></td>
                            <td class="packitem" valign="top"><?php echo $this->_tpl_vars['article']->oxorderarticles__oxartnum->value; ?>
 </td>
                            <td class="packitem" valign="top"><?php echo $this->_tpl_vars['article']->oxorderarticles__oxtitle->value; ?>


                            <?php $_from = $this->_tpl_vars['article']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['persparams'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['persparams']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
        $this->_foreach['persparams']['iteration']++;
?>
                                <?php if ($this->_tpl_vars['aParam']): ?>
                                    <br />
                                    <?php if (($this->_foreach['persparams']['iteration'] <= 1) && ($this->_foreach['persparams']['iteration'] == $this->_foreach['persparams']['total'])): ?>
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_DETAILS'), $this);?>

                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['sVar']; ?>
 :
                                    <?php endif; ?>
                                    <?php echo $this->_tpl_vars['aParam']; ?>

                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>

                            </td>
                            <td class="packitem" valign="top"><?php echo $this->_tpl_vars['article']->oxorderarticles__oxselvariant->value; ?>
</td>
                            <td class="packitem" valign="middle"><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
/rectangle.gif" alt="" width="20" height="20" border="0"></td>
                    </tr>
                    <?php $this->assign('_wrap', $this->_tpl_vars['article']->getWrapping()); ?>
                    <?php if ($this->_tpl_vars['_wrap']): ?>
                    <tr>
                            <td class="listitem" valign="top"></td>
                            <td class="listitem" valign="top"></td>
                            <td class="listitem" valign="top"><?php echo $this->_tpl_vars['_wrap']->oxwrapping__oxname->value; ?>
</td>
                            <td class="listitem" valign="top"></td>
                            <td class="listitem" valign="middle"></td>
                    </tr>
                    <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

            <?php $this->assign('_card', $this->_tpl_vars['order']->getGiftCard()); ?>
            <?php if ($this->_tpl_vars['_card']): ?>
            <tr>
                    <td class="listitem" valign="top"></td>
                    <td class="listitem" valign="top"></td>
                    <td class="listitem" valign="top"><b><?php echo $this->_tpl_vars['_card']->oxwrapping__oxname->value; ?>
</b></td>
                    <td class="listitem" valign="top"></td>
                    <td class="listitem" valign="middle"></td>
            </tr>
            <?php endif; ?>
            </table>
    </td>
</tr>
</table>
<br>
<?php endforeach; endif; unset($_from); ?>

<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'OEEXTENDEDORDERADMIN_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>