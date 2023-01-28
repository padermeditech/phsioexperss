<?php /* Smarty version 2.6.31, created on 2022-12-29 15:21:17
         compiled from article_stock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_stock.tpl', 1, false),array('modifier', 'oxformdate', 'article_stock.tpl', 92, false),array('function', 'oxmultilang', 'article_stock.tpl', 57, false),array('function', 'oxinputhelp', 'article_stock.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
function loadLang(obj)
{
    var langvar = document.getElementById("agblang");
    if (langvar != null )
        langvar.value = obj.value;
    document.myedit.submit();
}
function editThis( sID )
{
    var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
    oTransfer.oxid.value = sID;
    oTransfer.cl.value = top.basefrm.list.sDefClass;

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( "search" );
    oSearch.oxid.value = sID;
    oSearch.actedit.value = 0;
    oSearch.submit();
}
//-->
</script>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="article_stock">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>
<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="article_stock">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
    <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <table cellspacing="0" cellpadding="0" border="0" style="width:100%;">
        <tr>
          <td valign="top" class="edittext" style="padding-left:10px;width:50%">
            <table cellspacing="0" cellpadding="0" border="0">
              
                  <?php if ($this->_tpl_vars['oxparentid']): ?>
                  <tr>
                    <td class="edittext" width="160">
                      <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_VARIANTE'), $this);?>
</b>
                    </td>
                    <td class="edittext">
                      <a href="Javascript:editThis('<?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxid->value; ?>
');" class="edittext"><b><?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxartnum->value; ?>
 <?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxtitle->value; ?>
</b></a>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                    <td class="edittext">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_STOCK'), $this);?>

                    </td>
                    <td class="edittext">
                      <input type="text" class="editinput" size="20" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstock->fldmax_length; ?>
" name="editval[oxarticles__oxstock]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstock->value; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_stock')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_STOCK'), $this);?>

                    </td>
                  </tr>
                  <tr>
                    <td class="edittext">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_STOCKFLAG'), $this);?>

                    </td>
                    <td class="edittext">
                      <select name="editval[oxarticles__oxstockflag]" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <option value="1" <?php if ($this->_tpl_vars['edit']->oxarticles__oxstockflag->value == 1): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_STANDARD'), $this);?>
</option>
                        <option value="4" <?php if ($this->_tpl_vars['edit']->oxarticles__oxstockflag->value == 4): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_EXTERNALSTOCK'), $this);?>
</option>
                        <option value="2" <?php if ($this->_tpl_vars['edit']->oxarticles__oxstockflag->value == 2): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_OFFLINE'), $this);?>
</option>
                        <option value="3" <?php if ($this->_tpl_vars['edit']->oxarticles__oxstockflag->value == 3): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NONORDER'), $this);?>
</option>
                      </select>
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_STOCKFLAG'), $this);?>

                    </td>
                  </tr>
                  <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_DELIVERY'), $this);?>

                    </td>
                    <td class="edittext">
                      <input type="text" class="editinput" size="20" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxdelivery->fldmax_length; ?>
" name="editval[oxarticles__oxdelivery]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxarticles__oxdelivery)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_delivery')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_DELIVERY'), $this);?>

                    </td>
                  </tr>

                <tr>
                  <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_DELTIME'), $this);?>

                  </td>
                  <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_MINDELTIME'), $this);?>
&nbsp;<input type="text" class="editinput" size="3" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmindeltime->fldmax_length; ?>
" name="editval[oxarticles__oxmindeltime]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmindeltime->value; ?>
">

                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_MAXDELTIME'), $this);?>
&nbsp;<input type="text" class="editinput" size="3" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmaxdeltime->fldmax_width; ?>
" name="editval[oxarticles__oxmaxdeltime]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmaxdeltime->value; ?>
">

                    &nbsp;<select name="editval[oxarticles__oxdeltimeunit]" class="editinput">
                    <option value="DAY" <?php if ($this->_tpl_vars['edit']->oxarticles__oxdeltimeunit->value == 'DAY'): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_DAYS'), $this);?>
</option>
                    <option value="WEEK" <?php if ($this->_tpl_vars['edit']->oxarticles__oxdeltimeunit->value == 'WEEK'): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_WEEKS'), $this);?>
</option>
                    <option value="MONTH" <?php if ($this->_tpl_vars['edit']->oxarticles__oxdeltimeunit->value == 'MONTH'): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_MONTHS'), $this);?>
</option>
                    </select>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_DELTIME'), $this);?>

                  </td>
                </tr>

                  <tr>
                    <td class="edittext wrap">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_REMINDACTIV'), $this);?>

                    </td>
                    <td class="edittext">
                      <input type="checkbox" class="editinput" name="editval[oxarticles__oxremindactive]" value='<?php if ($this->_tpl_vars['edit']->oxarticles__oxremindactive->value): ?><?php echo $this->_tpl_vars['edit']->oxarticles__oxremindactive->value; ?>
<?php else: ?>1<?php endif; ?>' <?php if ($this->_tpl_vars['edit']->oxarticles__oxremindactive->value): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
 <?php if ($this->_tpl_vars['oxparentid']): ?>readonly disabled<?php endif; ?>>
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_REMINDACTIV'), $this);?>

                      <input type="text" class="editinput" size="20" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxremindamount->fldmax_length; ?>
" name="editval[oxarticles__oxremindamount]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxremindamount->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_REMINDAMAOUNT'), $this);?>

                    </td>
                  </tr>
                  <tr>
                    <td class="edittext" colspan="2"><br>
                      <fieldset title="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ARTICLE_OXSTOCKTEXT'), $this);?>
" style="padding-left: 5px;">
                      <legend><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ARTICLE_OXSTOCKTEXT'), $this);?>
</legend><br>
                      <table>
                        <tr>
                          <td class="edittext">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LANGUAGE'), $this);?>

                          </td>
                          <td class="edittext">
                             <select name="editlanguage" id="test_editlanguage" class="editinput" onChange="Javascript:loadLang(this);" <?php echo $this->_tpl_vars['readonly']; ?>
 <?php echo $this->_tpl_vars['readonly_fields']; ?>
>
                             <?php $_from = $this->_tpl_vars['otherlang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
                             <option value="<?php echo $this->_tpl_vars['lang']; ?>
"<?php if ($this->_tpl_vars['olang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['olang']->sLangDesc; ?>
</option>
                             <?php endforeach; endif; unset($_from); ?>
                             </select>
                             <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_LANGUAGE'), $this);?>

                          </td>
                        </tr>
                        <tr>
                          <td class="edittext">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_STOCKTEXT'), $this);?>

                          </td>
                          <td class="edittext">
                            <input type="text" class="editinput" size="40" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstocktext->fldmax_length; ?>
" name="editval[oxarticles__oxstocktext]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstocktext->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_STOCKTEXT'), $this);?>

                          </td>
                        </tr>
                        <tr>
                          <td class="edittext">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_NOSTOCKTEXT'), $this);?>

                          </td>
                          <td class="edittext">
                            <input type="text" class="editinput" size="40" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxnostocktext->fldmax_length; ?>
" name="editval[oxarticles__oxnostocktext]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxnostocktext->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_NOSTOCKTEXT'), $this);?>

                          </td>
                        </tr>
                      </table>
                      </fieldset>
                    </td>
                  </tr>
              
<tr>
    <td class="edittext">
        <?php echo smarty_function_oxmultilang(array('ident' => 'JXPYSIOXPRESSTHEME_DISCOUNT_PIECE_UNIT'), $this);?>

    </td>
    <td class="edittext">
        <input type="text" class="editinput" name="editval[oxarticles__jxdiscountpieceunit]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__jxdiscountpieceunit->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
    </td>
</tr>
              <tr>
                <td class="edittext" colspan="2"><br><br>
                  <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'"" <?php echo $this->_tpl_vars['readonly']; ?>
><br>
                </td>
              </tr>
            </table>
          </td>
            <!-- Start right column -->
          <td valign="top" class="edittext" style="padding-top:10px;padding-left:10px;width:50%">
            <fieldset title="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_TITLE'), $this);?>
" style="padding-left: 5px; padding-right: 5px;">
            <legend><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_TITLE'), $this);?>
</legend><br>
            <table cellspacing="0" cellpadding="1" border="0" >
            <?php $this->assign('oddclass', '2'); ?>
            <?php $_from = $this->_tpl_vars['amountprices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['amountprice']):
?>
              <?php if (is_array ( $this->_tpl_vars['errorscaleprice'] ) && in_array ( $this->_tpl_vars['amountprice']->oxprice2article__oxid->value , $this->_tpl_vars['errorscaleprice'] )): ?>
              <tr>
                  <td colspan="3">
                      <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_ERRORSCALEPRICE'), $this);?>
</div>
                  </td>
              </tr>
              <?php endif; ?>
              <tr>
              <?php if ($this->_tpl_vars['oddclass'] == 2): ?>
                <?php $this->assign('oddclass', ""); ?>
              <?php else: ?>
                <?php $this->assign('oddclass', '2'); ?>
              <?php endif; ?>
                <td class="listitem<?php echo $this->_tpl_vars['oddclass']; ?>
" nowrap>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'), $this);?>

                    <input type="text" size="6" name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][oxprice2article__oxamount]" value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxamount->value; ?>
" />
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTTO'), $this);?>

                    <input type="text" size="6" name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][oxprice2article__oxamountto]" value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxamountto->value; ?>
" />
                </td>
                <td class="listitem<?php echo $this->_tpl_vars['oddclass']; ?>
" nowrap>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_PRICE'), $this);?>

                    <select class="edittext" name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][pricetype]">
                    <option value="oxprice2article__oxaddabs" <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value): ?> selected="selected" <?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_ABS'), $this);?>

                    <option value="oxprice2article__oxaddperc" <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value): ?> selected="selected" <?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_DISCOUNT'), $this);?>

                    </select>
                    <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value): ?>
                    <input class="edittext" size="6" type="text" name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][price]" value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value; ?>
" />
                    <?php elseif ($this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value): ?>
                    <input class="edittext" size="6" type="text" name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][price]" value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value; ?>
" />
                    <?php endif; ?>
                </td>
                <td class=listitem<?php echo $this->_tpl_vars['oddclass']; ?>
>
                  <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=article_stock&priceid=<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
&fnc=deleteprice&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
" onClick='return confirm("<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_YOUWANTTODELETE'), $this);?>
")' class="delete"></a>
                </td>
              </tr>
            <?php endforeach; endif; unset($_from); ?>
            <?php if (count ( $this->_tpl_vars['amountprices'] ) > 0): ?>
            <tr>
                <td colspan=3><br>
                    <input type="submit" class="edittext" name="saveAll" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='updateprices'"><br><br>
                </td>
            </tr>
            <tr>
                <td colspan=3>
                    <hr />
                </td>
            </tr>
            <?php endif; ?>
              <tr>
                <td class="edittext" colspan=3>
                  <table>
                    <?php if ($this->_tpl_vars['amountgroupprices']): ?>
<tr>
    <td colspan="4">
        <table style="margin-left: -5px;margin-right: -5px;">
            <tr>
                <td colspan="4"><h3><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_GROUP_PRICES'), $this);?>
</h3></td>
            </tr>
            <?php $_from = $this->_tpl_vars['amountgroupprices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['amountprice']):
?>
            <?php if (is_array ( $this->_tpl_vars['errorscaleprice'] ) && in_array ( $this->_tpl_vars['amountprice']->oxprice2article__oxid->value , $this->_tpl_vars['errorscaleprice'] )): ?>
            <tr>
                <td colspan="3">
                    <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_ERRORSCALEPRICE'), $this);?>
</div>
                </td>
            </tr>
            <?php endif; ?>
            <tr>
                <?php if ($this->_tpl_vars['oddclass'] == 2): ?>
                <?php $this->assign('oddclass', ""); ?>
                <?php else: ?>
                <?php $this->assign('oddclass', '2'); ?>
                <?php endif; ?>
                <td class="listitem<?php echo $this->_tpl_vars['oddclass']; ?>
" nowrap>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'), $this);?>

                    <input type="text" size="6"
                           name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][oxprice2article__oxamount]"
                           value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxamount->value; ?>
"/>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTTO'), $this);?>

                    <input type="text" size="6"
                           name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][oxprice2article__oxamountto]"
                           value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxamountto->value; ?>
"/>
                </td>
                <td class="listitem<?php echo $this->_tpl_vars['oddclass']; ?>
" nowrap>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_PRICE'), $this);?>

                    <select class="edittext"
                            name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][pricetype]">
                        <option value="oxprice2article__oxaddabs" <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value): ?>
                                selected="selected" <?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_ABS'), $this);?>

                        <option value="oxprice2article__oxaddperc"
                                <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value): ?> selected="selected" <?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_DISCOUNT'), $this);?>

                    </select>
                    <?php if ($this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value): ?>
                <input class="edittext" size="6" type="text"
                       name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][price]"
                       value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxaddabs->value; ?>
"/>
                    <?php elseif ($this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value): ?>
                <input class="edittext" size="6" type="text"
                       name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][price]"
                       value="<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxaddperc->value; ?>
"/>
                    <?php endif; ?>
                </td>
                <td class="listitem<?php echo $this->_tpl_vars['oddclass']; ?>
" nowrap>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_PRICE_GROUP'), $this);?>

                    <select class="edittext"
                            name="updateval[<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
][jxpricegroup]">
                        <option value="">-</option>
                        <option value="1"
                                <?php if ($this->_tpl_vars['amountprice']->oxprice2article__jxpricegroup->value == 1): ?>selected="selected"
                                <?php endif; ?>>A
                        </option>
                        <option value="2"
                                <?php if ($this->_tpl_vars['amountprice']->oxprice2article__jxpricegroup->value == 2): ?>selected="selected"
                                <?php endif; ?>>B
                        </option>
                        <option value="3"
                                <?php if ($this->_tpl_vars['amountprice']->oxprice2article__jxpricegroup->value == 3): ?>selected="selected"
                                <?php endif; ?>>C
                        </option>
                    </select>
                </td>
                <td class=listitem<?php echo $this->_tpl_vars['oddclass']; ?>
>
                    <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=article_stock&priceid=<?php echo $this->_tpl_vars['amountprice']->oxprice2article__oxid->value; ?>
&fnc=deleteprice&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
"
                       onClick='return confirm("<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_YOUWANTTODELETE'), $this);?>
")' class="delete"></a>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </td>
</tr>
<tr>
    <td colspan=3><br>
        <input type="submit" class="edittext" name="saveAll" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='updateprices'"><br><br>
    </td>
</tr>
<?php endif; ?>
<tr>
    <td colspan="2"><br/><h3><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_ADD_NEW_PRICE'), $this);?>
</h3></td>
</tr>
<tr>
    <td class="edittext">
        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'), $this);?>

    </td>
    <td class="edittext">
        <input class="edittext" type="text" name="editval[oxprice2article__oxamount]">
    </td>
    <td class="edittext">
        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_AMOUNTTO'), $this);?>

    </td>
    <td class="edittext">
        <input class="edittext" type="text" name="editval[oxprice2article__oxamountto]">
        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM'), $this);?>

    </td>
</tr>
<tr>
    <td class="edittext">
        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_PRICE'), $this);?>
 (<?php echo $this->_tpl_vars['oActCur']->sign; ?>
)
    </td>
    <td class="edittext" nowrap colspan=3>
        <select class="edittext" name="editval[pricetype]">
            <option value="oxprice2article__oxaddabs"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_ABS'), $this);?>

            <option value="oxprice2article__oxaddperc"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_AMOUNTPRICE_DISCOUNT'), $this);?>

        </select>
        <input class="edittext" type="text" name="editval[price]">
        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE'), $this);?>

    </td>
    <td>
    </td>
</tr>
<tr>
    <td class="edittext">
        <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_PRICE_GROUP'), $this);?>

    </td>
    <td class="edittext" nowrap colspan=3>
        <select class="edittext" name="editval[jxpricegroup]">
            <option value="">-</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
        </select>
    </td>
    <td>
    </td>
</tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td colspan=3><br>
                  <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_STOCK_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='addprice'""><br><br>
                </td>
              </tr>
            </table>
            </fieldset>
          </td>
        </tr>
    </table>
</form>
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