<?php /* Smarty version 2.6.31, created on 2022-12-30 10:55:00
         compiled from article_variant.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_variant.tpl', 1, false),array('function', 'oxmultilang', 'article_variant.tpl', 21, false),array('function', 'oxinputhelp', 'article_variant.tpl', 101, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
function SetSticker( sStickerId, oObject)
{
    if (oObject.selectedIndex != -1) {
        oSticker = document.getElementById(sStickerId);
        oSticker.style.display = "";
        oSticker.style.backgroundColor = "#FFFFCC";
        oSticker.style.borderWidth = "1px";
        oSticker.style.borderColor = "#000000";
        oSticker.style.borderStyle = "solid";
        oSticker.innerHTML         = oObject.item(oObject.selectedIndex).innerHTML;
    } else {
        oSticker.style.display = "none";
    }
}
function deleteThis( sID)
{
    blCheck = confirm("<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_YOUWANTTODELETE'), $this);?>
");
    if (blCheck == true) {
        var oSearch = document.getElementById("search");
        oSearch.fnc.value='deletevariant';
        oSearch.voxid.value=sID;
        oSearch.submit();
    }
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
    <input type="hidden" name="cl" value="article_variant">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<form name="myedit1" id="myedit1" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="article_variant">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<?php $this->assign('blWhite', ""); ?>
<?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
  <table border="0">
    <tr>
      
      <td class="edittext">
        <table cellspacing="0" cellpadding="0" border="0">

          <form name="myedit3" id="myedit3" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
          <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

          <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
          <input type="hidden" name="cl" value="article_variant">
          <input type="hidden" name="fnc" value="">
          <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">

          <tr>
            <td class="edittext">
              <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_SELECTLIST'), $this);?>

            </td>
            <td class="edittext"></td>
          </tr>
          <tr>
            <td class="edittext">
              <select name="allsel[]" size="20" multiple class="editinput" style="width:150px;" <?php echo $this->_tpl_vars['readonly']; ?>
 onchange="JavaScript:SetSticker('_3',this)">
              <?php $_from = $this->_tpl_vars['allsel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
              <option value="<?php echo $this->_tpl_vars['pcat']->oxselectlist__oxid->value; ?>
" <?php if ($this->_tpl_vars['pcat']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['pcat']->oxselectlist__oxtitle->value; ?>
<?php if ($this->_tpl_vars['pcat']->oxselectlist__oxident->value): ?> | <?php echo $this->_tpl_vars['pcat']->oxselectlist__oxident->value; ?>
<?php endif; ?></option>
              <?php endforeach; endif; unset($_from); ?>
              </select>
              <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_VARIANT_SELECTLIST'), $this);?>

            </td>
            <td class="edittext">
              &nbsp;<a href="Javascript:document.myedit3.fnc.value='addsel';document.myedit3.submit();"><b>==></b></a>&nbsp;<br>
            </td>
          </tr>
          <tr>
            <td class="edittext">
              <br><br><span name="_3" id="_3" style="position:absolute;height:17px;padding-left:4px;padding-right:4px;padding-top:4px;"></span>
            </td>
            <td></td>
            <td class="edittext">
              <br><br><span name="_4" id="_4" style="position:absolute;height:17px;padding-left:4px;padding-right:4px;padding-top:4px;"></span>
            </td>
          </tr>

          </form>

        </table>
      </td>
      
      <td>&nbsp;</td>
      <td class="edittext" valign=top>

        <form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
        <input type="hidden" name="cl" value="article_variant">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="fnc" value="changename">
        <input type="hidden" name="voxid" value="">
        <b><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_VARNAME'), $this);?>
</b><br>
        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarname->fldmax_length; ?>
" name="editval[oxarticles__oxvarname]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarname->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_VARIANT_VARNAME'), $this);?>

        <?php if (! $this->_tpl_vars['oViewConf']->isBuyableParent()): ?><input class="edittext" type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_ARTSAVE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
><?php endif; ?>
        <br><br>

        <div style="overflow-x:auto;">
        <table cellspacing="0" cellpadding="0" border="0" width="730">
          <tr>
            
                <td class="listheader first" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_EDIT'), $this);?>
 </td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_ACTIVE'), $this);?>
 </td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_CHOICE'), $this);?>
 </td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_ARTNUM'), $this);?>
</td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_PRICE'), $this);?>
 (<?php echo $this->_tpl_vars['oActCur']->sign; ?>
)</td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_SORT'), $this);?>
</td>
                <td class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_STOCK'), $this);?>
</td>
                <td class="listheader" colspan="2">&nbsp;</td>
            
          </tr>

          <?php if ($this->_tpl_vars['oViewConf']->isBuyableParent()): ?>

          <tr>
            
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">&nbsp;</td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">&nbsp;</td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="80" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarselect->fldmax_length; ?>
" name="editval[oxarticles__oxvarselect]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarselect->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="5" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxartnum->fldmax_length; ?>
" name="editval[oxarticles__oxartnum]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxartnum->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="7" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxprice->fldmax_length; ?>
" name="editval[oxarticles__oxprice]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxprice->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">&nbsp;</td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstock->fldmax_length; ?>
" name="editval[oxarticles__oxstock]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxstock->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
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
                </td>
            
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input class="edittext" type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_ARTSAVE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
          </tr>
          <tr><td colspan=9>&nbsp;</td><tr>
          <?php endif; ?>

          </form>

          <form name="myedit2" id="myedit2" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
          <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

          <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
          <input type="hidden" name="cl" value="article_variant">
          <input type="hidden" name="fnc" value="savevariants">
          <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="parentvarname" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarname->value; ?>
">

          <?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
          <?php $this->assign('_cnt1', $this->_tpl_vars['_cnt1']+1); ?>
          <tr id="test_variant.<?php echo $this->_tpl_vars['_cnt1']; ?>
">
            
            <?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
            <?php $this->assign('hasvariants', true); ?>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><a href="Javascript:editThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'editvariant')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
/editvariant.gif" width="15" height="15" alt="" border="0" align="absmiddle"></a></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
" align="center"><input class="edittext" type="checkbox" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxactive]" value='1' <?php if ($this->_tpl_vars['listitem']->oxarticles__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="80" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxvarselect->fldmax_length; ?>
" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxvarselect]" value="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxvarselect->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="5" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxartnum->fldmax_length; ?>
" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxartnum]" value="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxartnum->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="7" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxprice->fldmax_length; ?>
" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxprice]" value="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxprice->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxsort->fldmax_length; ?>
" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxsort]" value="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxsort->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxstock->fldmax_length; ?>
" name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxstock]" value="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxstock->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
              <select name="editval[<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
][oxarticles__oxstockflag]" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
              <option value="1" <?php if ($this->_tpl_vars['listitem']->oxarticles__oxstockflag->value == 1): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_STANDARD'), $this);?>
</option>
              <option value="4" <?php if ($this->_tpl_vars['listitem']->oxarticles__oxstockflag->value == 4): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_EXTERNALSTOCK'), $this);?>
</option>
              <option value="2" <?php if ($this->_tpl_vars['listitem']->oxarticles__oxstockflag->value == 2): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_OFFLINE'), $this);?>
</option>
              <option value="3" <?php if ($this->_tpl_vars['listitem']->oxarticles__oxstockflag->value == 3): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NONORDER'), $this);?>
</option>
              </select>
            </td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
              <a href="Javascript:deleteThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="delete"<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
            </td>
            
          </tr>

          <?php if ($this->_tpl_vars['blWhite'] == '2'): ?>
            <?php $this->assign('blWhite', ""); ?>
          <?php else: ?>
            <?php $this->assign('blWhite', '2'); ?>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>

          <?php if ($this->_tpl_vars['hasvariants']): ?>
          <tr>
            <td colspan="9" align="right">
              <input class="edittext" type="submit" onClick="document.forms['myedit2'].elements['parentvarname'].value = document.forms['search'].elements['editval[oxarticles__oxvarname]'].value;" value=" <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_VARSAVE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
          </tr>

          <tr>
            <td  colspan=9 align=right>&nbsp;</td>
          </tr>
          <?php endif; ?>
          </form>

          
<tr>
    <td colspan=9 style="padding-bottom: 20px;">
        <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_USE_STEP_BY_STEP_SELECTION'), $this);?>

        <input type="hidden" name="editval[oxarticles__jxadvancedselectionlistusestepbystepselection]" value="0">
        <input class="edittext" type="checkbox" name="editval[oxarticles__jxadvancedselectionlistusestepbystepselection]" value='1' <?php if ($this->_tpl_vars['edit']->oxarticles__jxadvancedselectionlistusestepbystepselection->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
    </td>
</tr>
<tr>
    <td colspan=9 style="padding-bottom: 20px;">
        <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_SHARE_DISCOUNTS_BETWEEN_VARIANTS'), $this);?>

        <input type="hidden" name="editval[oxarticles__jxadvancedselectionlistsharediscounts]" value="0">
        <input class="edittext" type="checkbox" name="editval[oxarticles__jxadvancedselectionlistsharediscounts]" value='1' <?php if ($this->_tpl_vars['edit']->oxarticles__jxadvancedselectionlistsharediscounts->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
    </td>
</tr>

          <tr>

            <?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
            <form name="myedit4" id="myedit4" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
            <input type="hidden" name="cl" value="article_variant">
            <input type="hidden" name="fnc" value="savevariant">
            <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
            <input type="hidden" name="voxid" value="-1">
            <input type="hidden" name="parentvarname" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvarname->value; ?>
">

            
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
" colspan="2">&nbsp;</td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="80" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxvarselect->fldmax_length; ?>
" name="editval[oxarticles__oxvarselect]" value="" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="5" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxartnum->fldmax_length; ?>
" name="editval[oxarticles__oxartnum]" value="" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="7" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxprice->fldmax_length; ?>
" name="editval[oxarticles__oxprice]" value="" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxsort->fldmax_length; ?>
" name="editval[oxarticles__oxsort]" value="" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
"><input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['listitem']->oxarticles__oxstock->fldmax_length; ?>
" name="editval[oxarticles__oxstock]" value="" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
                <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">

                  <select name="editval[oxarticles__oxstockflag]" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  <option value="1"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_STANDARD'), $this);?>
</option>
                  <option value="4"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_EXTERNALSTOCK'), $this);?>
</option>
                  <option value="2"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_OFFLINE'), $this);?>
</option>
                  <option value="3"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NONORDER'), $this);?>
</option>
                  </select>

                </td>
            

            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
" align="right"><input class="edittext" type="submit" onClick="document.forms['myedit4'].elements['parentvarname'].value = document.forms['search'].elements['editval[oxarticles__oxvarname]'].value;" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_VARIANT_NEWVAR'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
></td>
          </tr>

          </form>

          <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
          
          <tr>
            <td  colspan=9><br>

              <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>
              <table cellspacing="2" cellpadding="2" border="0" bgcolor="#D3DFEC">
                <tr>
                  <td align="left" class="saveinnewlangtext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LANGUAGE'), $this);?>

                  </td>
                  <td align="left">
                    <select name="editlanguage" id="test_editlanguage" class="saveinnewlanginput" onChange="Javascript:document.myedit.submit();">
                    <?php $_from = $this->_tpl_vars['otherlang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
                    <option value="<?php echo $this->_tpl_vars['lang']; ?>
" <?php if ($this->_tpl_vars['olang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['olang']->sLangDesc; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['posslang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['desc']):
?>
                    <option value="<?php echo $this->_tpl_vars['lang']; ?>
" <?php if ($this->_tpl_vars['editlanguage'] == $this->_tpl_vars['lang']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['desc']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                  </td>
                </tr>
              </table>
              <?php endif; ?>

            </td>
          </tr>
          
        </table>
        </div>

        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="article_variant">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">

        <table cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
            <td class="edittext">&nbsp;</td>
          </tr>
        </table>

        </form>
        

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