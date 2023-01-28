<?php /* Smarty version 2.6.31, created on 2022-12-30 10:55:06
         compiled from article_review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_review.tpl', 1, false),array('modifier', 'oxformdate', 'article_review.tpl', 37, false),array('function', 'oxmultilang', 'article_review.tpl', 42, false),array('function', 'oxinputhelp', 'article_review.tpl', 56, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
    <input type="hidden" name="cl" value="article_review">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="article_review">
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

  <table cellspacing="0" cellpadding="0" border="0" height="100%" width="100%">
    <tr height="10">
      <td></td><td></td>
    </tr>
    <tr>
      <td width="15"></td>
      <td valign="top" class="edittext">

        
            <select name="rev_oxid" size="15" class="editinput" style="width:160px;" onChange="Javascript:document.myedit.submit();">
            <?php $_from = $this->_tpl_vars['allreviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['allitem']):
?>
            <option value="<?php echo $this->_tpl_vars['allitem']->oxreviews__oxid->value; ?>
" <?php if ($this->_tpl_vars['allitem']->selected): ?>SELECTED<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['allitem']->oxreviews__oxcreate)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
        
        <br><br>
        <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_REVIEW_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'"">
        <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_REVIEW_DELETE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='delete'""><br>

      </td>
      <!-- Anfang rechte Seite -->
      <td valign="top" class="edittext" align="left" valign="top">
      <?php if ($this->_tpl_vars['user']): ?>
        <table>
          
              <?php if ($this->_tpl_vars['blShowActBox']): ?>
              <tr>
                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_REVIEW_ACTIVE'), $this);?>
 :</td>
                <td class="edittext">
                    <input class="edittext" type="checkbox" name="editval[oxreviews__oxactive]" value='1' <?php if ($this->_tpl_vars['editreview']->oxreviews__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_REVIEW_ACTIVE'), $this);?>

                    <br>
                </td>
              </tr>
              <?php endif; ?>
              <tr>
                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_REVIEW_POSTEDFROM'), $this);?>
</td>
                <td class="edittext"><?php echo $this->_tpl_vars['user']->oxuser__oxfname->value; ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->value; ?>
</td>
              </tr>
              <tr>
                <td class="edittext" valign="top"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_REVIEW_TEXT'), $this);?>
</td>
                <td class="edittext">
                  <textarea class="editinput" cols="100" rows="15" wrap="VIRTUAL" name="editval[oxreviews__oxtext]"><?php echo $this->_tpl_vars['editreview']->oxreviews__oxtext->value; ?>
</textarea>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_REVIEW_TEXT'), $this);?>

                  <br>
                </td>
              </tr>
          
        </table>
      <?php endif; ?>
      </td>
    <!-- Ende rechte Seite -->
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