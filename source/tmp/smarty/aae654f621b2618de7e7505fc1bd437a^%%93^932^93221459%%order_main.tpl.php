<?php /* Smarty version 2.6.31, created on 2022-12-29 06:46:15
         compiled from order_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'order_main.tpl', 1, false),array('modifier', 'oxformdate', 'order_main.tpl', 108, false),array('modifier', 'replace', 'order_main.tpl', 118, false),array('modifier', 'cat', 'order_main.tpl', 147, false),array('modifier', 'oxupper', 'order_main.tpl', 148, false),array('modifier', 'escape', 'order_main.tpl', 244, false),array('function', 'oxmultilang', 'order_main.tpl', 47, false),array('function', 'oxinputhelp', 'order_main.tpl', 59, false),array('function', 'oxscript', 'order_main.tpl', 260, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
function ThisDate( sID)
{
    document.myedit['editval[oxorder__oxpaid]'].value=sID;
}
//-->
</script>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<?php $this->assign('oCurr', $this->_tpl_vars['edit']->getOrderCurrency()); ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['oCurr']->id; ?>
">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="order_main">
</form>


<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['oCurr']->id; ?>
">
<input type="hidden" name="cl" value="order_main">
<input type="hidden" name="fnc" value="save">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

<table cellspacing="0" cellpadding="0" border="0" width="100%">

<tr>

    <td valign="top" class="edittext" width="650px">

        <table cellspacing="0" cellpadding="0" border="0">
        
            
                <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_IPADDRESS'), $this);?>

                    </td>
                    <td class="edittext">
                    <?php echo $this->_tpl_vars['edit']->oxorder__oxip->value; ?>

                    </td>
                </tr>
                <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ORDERNUM'), $this);?>

                    </td>
                    <td class="edittext">
                    <input type="text" class="editinput" size="15" maxlength="<?php echo $this->_tpl_vars['edit']->oxorder__oxordernr->fldmax_length; ?>
" name="editval[oxorder__oxordernr]" value="<?php echo $this->_tpl_vars['edit']->oxorder__oxordernr->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_ORDERNUM'), $this);?>

                    </td>
                </tr>
                <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_BILLNUM'), $this);?>

                    </td>
                    <td class="edittext">
                    <input type="text" class="editinput" size="15" maxlength="<?php echo $this->_tpl_vars['edit']->oxorder__oxbillnr->fldmax_length; ?>
" name="editval[oxorder__oxbillnr]" value="<?php echo $this->_tpl_vars['edit']->oxorder__oxbillnr->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_BILLNUM'), $this);?>

                    </td>
                </tr>
                <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_DISCOUNT'), $this);?>

                    </td>
                    <td class="edittext">
                    <input type="text" class="editinput" size="15" maxlength="<?php echo $this->_tpl_vars['edit']->oxorder__oxdiscount->fldmax_length; ?>
" name="editval[oxorder__oxdiscount]" value="<?php echo $this->_tpl_vars['edit']->oxorder__oxdiscount->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
> (<?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
)
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_DISCOUNT'), $this);?>

                    </td>
                </tr>
                <?php $_from = $this->_tpl_vars['aVouchers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVoucher']):
?>
                <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_USERVOUCHER'), $this);?>
:&nbsp;
                    </td>
                    <td class="edittext">
                    <?php echo $this->_tpl_vars['sVoucher']; ?>

                    </td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            
            <tr>
                <td class="edittext" colspan="2">
                     <br>
                    <table style="border : 1px #A9A9A9; border-style : solid solid solid solid; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; width: 600px;">
                        
                            <tr>
                                <td class="edittext" colspan="3">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_PAYMENT_INFORMATION'), $this);?>

                                </td>
                            </tr>
    
                            <?php if ($this->_tpl_vars['edit']->blIsPaid): ?>
                            <tr>
                                <td class="edittext" valign="middle">
                                <b><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_ORDERPAID'), $this);?>
</b>
                                </td>
                                <td class="edittext" valign="bottom">
                                <b><?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxpaid->value)) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
</b>
                                </td>
                                <td class="edittext"></td>
                            </tr>
                            <?php endif; ?>
    
                            <tr>
                                <td class="edittext">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_PAIDON'), $this);?>

                                </td>
                                <td class="edittext"><?php $this->assign('date', ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxpaid->value)) ? $this->_run_mod_handler('replace', true, $_tmp, "0000-00-00 00:00:00", "") : smarty_modifier_replace($_tmp, "0000-00-00 00:00:00", ""))); ?>
                                    <input type="text" class="editinput" size="25" name="editval[oxorder__oxpaid]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxpaid)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vonbis')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>&nbsp;<a href="Javascript:ThisDate('<?php echo ((is_array($_tmp=$this->_tpl_vars['sNowValue'])) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
');" class="edittext" <?php if ($this->_tpl_vars['readonly']): ?>onclick="JavaScript:return false;"<?php endif; ?>><u><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_CURRENT_DATE'), $this);?>
</u></a>
                                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_PAIDON'), $this);?>

                                </td>
                                <td class="edittext"></td>
                            </tr>
                            <tr>
                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_PAIDWITH'), $this);?>
:</td>
                                <td class="edittext">
                                    <?php if ($this->_tpl_vars['oPayments']): ?>
                                        <select name="setPayment" class="editinput" style="width: 135px;">
                                        <option value="oxempty" <?php if ($this->_tpl_vars['edit']->oxorder__oxpaymenttype->value == 'oxempty'): ?>SELECTED<?php endif; ?>>----</option>
                                        <?php $_from = $this->_tpl_vars['oPayments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sPaymentId'] => $this->_tpl_vars['oPayment']):
?>
                                        <option value="<?php echo $this->_tpl_vars['sPaymentId']; ?>
" <?php if ($this->_tpl_vars['edit']->oxorder__oxpaymenttype->value == $this->_tpl_vars['sPaymentId']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['oPayment']->oxpayments__oxdesc->value; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                        </select>
                                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_PAIDWITH'), $this);?>

                                    <?php else: ?>
                                        <b><?php echo $this->_tpl_vars['paymentType']->oxpayments__oxdesc->value; ?>
</b>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        
                    </table>
                    <br />
                    <table cellspacing="0" cellpadding="0" border="0">
                        
                            <?php if ($this->_tpl_vars['paymentType']->aDynValues): ?>
                                <?php $_from = $this->_tpl_vars['paymentType']->aDynValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                                <?php $this->assign('ident', ((is_array($_tmp='ORDER_OVERVIEW_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['value']->name) : smarty_modifier_cat($_tmp, $this->_tpl_vars['value']->name))); ?>
                                <?php $this->assign('ident', ((is_array($_tmp=$this->_tpl_vars['ident'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))); ?>
                                    <tr>
                                        <td class="edittext" width="70">
                                        <?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['ident']), $this);?>

                                        </td>
                                        <td class="edittext">
                                        <input type="text" class="editinput" size="20" maxlength="64" name="dynvalue[<?php echo $this->_tpl_vars['value']->name; ?>
]" value="<?php echo $this->_tpl_vars['value']->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; unset($_from); ?>
                                <tr>
                                    <td class="edittext" colspan="3">&nbsp;</td>
                                </tr>
                            <?php endif; ?>
                        
                    </table>
                </td>
            </tr>
            <tr>
                <td class="edittext" colspan="2">
                    <table style="border : 1px #A9A9A9; border-style : solid solid solid solid; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px; width: 600px;">
                        
                            <tr>
                                <td class="edittext" colspan="3">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_SHIPPING_INFORMATION'), $this);?>

                                </td>
                            </tr>
                            <tr>
                                <td class="edittext">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_TRACKCODE'), $this);?>
&nbsp;&nbsp;
                                </td>
                                <td class="edittext">
                                <input type="text" class="editinput" size="25" maxlength="<?php echo $this->_tpl_vars['edit']->oxorder__oxtrackcode->fldmax_length; ?>
" name="editval[oxorder__oxtrackcode]" value="<?php echo $this->_tpl_vars['edit']->oxorder__oxtrackcode->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_TRACKCODE'), $this);?>

                                <?php if ($this->_tpl_vars['edit']->oxorder__oxtrackcode->value && $this->_tpl_vars['edit']->getShipmentTrackingUrl()): ?>
                                    <a href="<?php echo $this->_tpl_vars['edit']->getShipmentTrackingUrl(); ?>
" target="_blank"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_TRACKCODE_LINK'), $this);?>
</a>
                                <?php endif; ?>
                                </td>
                            </tr>
                            <tr >
                                <td class="edittext">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DELIVERYCOST'), $this);?>

                                </td>
                                <td class="edittext">
                                <input type="text" class="editinput" size="15" maxlength="<?php echo $this->_tpl_vars['edit']->oxorder__oxdelcost->fldmax_length; ?>
" name="editval[oxorder__oxdelcost]" value="<?php echo $this->_tpl_vars['edit']->oxorder__oxdelcost->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
> (<?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
)
                                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_DELIVERYCOST'), $this);?>

                                </td>
                            </tr>
                            <tr>
                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_DELTYPE'), $this);?>
:</td>
                                <td class="edittext">
                                    <select name="setDelSet" class="editinput" style="width: 135px;" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                    <option value="">----</option>
                                    <?php $_from = $this->_tpl_vars['oShipSet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sShipSetId'] => $this->_tpl_vars['oShipSet']):
?>
                                    <option value="<?php echo $this->_tpl_vars['sShipSetId']; ?>
" <?php if ($this->_tpl_vars['edit']->oxorder__oxdeltype->value == $this->_tpl_vars['sShipSetId']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['oShipSet']->oxdeliveryset__oxtitle->value; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_MAIN_DELTYPE'), $this);?>

                                </td>
                                <td>
                                    <input type="submit" class="edittext" name="save" id="shippNowButton" onclick="document.sendorder.sendmail.value=document.getElementById('sendmail').checked?1:0;document.sendorder.submit();return false;" value="&nbsp;&nbsp;<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NOWSEND'), $this);?>
&nbsp;&nbsp;" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                    <input id='sendmail' class="edittext" type="checkbox" name="sendmail" value='1' <?php echo $this->_tpl_vars['readonly']; ?>
> <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SENDEMAIL'), $this);?>

                                </td>
                            </tr>
                            <tr>
                                <td class="edittext" valign="middle">
                                <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SENDON'), $this);?>
</b>
                                </td>
                                <td class="edittext" valign="bottom">
                                <b><?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxsenddate->value)) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
</b>
                                </td>
                                <td>
                                <input type="submit" class="edittext" name="save" id="resetShippingDateButton" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SETBACKSENDTIME'), $this);?>
" onclick="document.resetorder.submit();return false;" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                </td>
                            </tr>
                        
                    </table>
                </td>
            </tr>
        
<?php if ($this->_tpl_vars['isKlarnaOrder']): ?>
    <style>
        div.messagebox.warn {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc;
        }

        div.messagebox.danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
    <?php if ($this->_tpl_vars['sErrorMessage']): ?>
        <script>
            var messagebox = '<div class="messagebox danger"><?php echo ((is_array($_tmp=$this->_tpl_vars['sErrorMessage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
</div>';
            document.getElementById("myedit").insertAdjacentHTML("beforebegin", messagebox);
        </script>
    <?php elseif ($this->_tpl_vars['sWarningMessage']): ?>
        <script>
            var messagebox = '<div class="messagebox warn"><?php echo ((is_array($_tmp=$this->_tpl_vars['sWarningMessage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
</div>';
            document.getElementById("myedit").insertAdjacentHTML("beforebegin", messagebox);
        </script>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['sMessage']): ?>
        <script>
            var messagebox = '<div class="messagebox"><?php echo ((is_array($_tmp=$this->_tpl_vars['sMessage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
</div>';
            document.getElementById("myedit").insertAdjacentHTML("beforebegin", messagebox);
        </script>
    <?php endif; ?>

    <?php echo smarty_function_oxscript(array('add' => 'document.getElementsByName("setDelSet")[0].disabled = "disabled";'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => 'document.getElementsByName("editval[oxorder__oxdelcost]")[0].disabled = "disabled";'), $this);?>

<?php endif; ?>
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext"><br>
            <input type="submit" class="edittext" name="save" id="saveFormButton" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
><br><br>
            </td>
        </tr>
        </table>
        </form>
    </td>

    <!-- Anfang rechte Seite -->
    <td class="edittext" align="left" valign="bottom">
        
            <form name="senddownloadlinks" id="senddownloadlinks" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['oCurr']->id; ?>
">
                <input type="hidden" name="cl" value="order_main">
                <input type="hidden" name="fnc" value="senddownloadlinks">
                <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_MAIN_SEND_DOWNLOADS'), $this);?>
 <input type="submit" class="edittext" name="save" value="&nbsp;&nbsp;<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEND'), $this);?>
&nbsp;&nbsp;" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </form>
        
        
            <form name="resetorder" id="resetorder" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['oCurr']->id; ?>
">
                <input type="hidden" name="cl" value="order_main">
                <input type="hidden" name="fnc" value="resetorder">
                <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
            </form>
        
        
            <form name="sendorder" id="sendorder" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['oCurr']->id; ?>
">
                <input type="hidden" name="cl" value="order_main">
                <input type="hidden" name="fnc" value="sendorder">
                <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <input type="hidden" name="sendmail" value='0'>
            </form>
        
 <br>
  <br>
   <br>
    <br>
     <br>
    </td>


    </tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>