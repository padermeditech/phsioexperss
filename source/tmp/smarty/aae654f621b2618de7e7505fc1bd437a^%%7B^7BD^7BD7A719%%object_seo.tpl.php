<?php /* Smarty version 2.6.31, created on 2023-01-09 12:22:58
         compiled from object_seo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'object_seo.tpl', 1, false),array('function', 'oxmultilang', 'object_seo.tpl', 32, false),array('function', 'oxinputhelp', 'object_seo.tpl', 64, false),)), $this); ?>
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
    <input type="hidden" name="oxidCopy" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
    <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['actlang']; ?>
">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>


<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['actlang']; ?>
">

        <table border="0" width="98%">

        
            <?php if ($this->_tpl_vars['oView']->showCatSelect()): ?>
            <tr>
                <td class="edittext" width="120">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_ACTCAT'), $this);?>

                </td>
                <td class="edittext">
                    <select <?php echo $this->_tpl_vars['readonly']; ?>
 onChange="document.myedit.submit();" name="aSeoData[oxparams]">
                        <?php $this->assign('sActId', $this->_tpl_vars['oView']->getActCatId()); ?>
                        <?php $this->assign('iActLang', $this->_tpl_vars['oView']->getActCatLang()); ?>
                        <?php $_from = $this->_tpl_vars['oView']->getSelectionList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sListType'] => $this->_tpl_vars['aLangList']):
?>
                            <?php $_from = $this->_tpl_vars['aLangList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iLang'] => $this->_tpl_vars['aList']):
?>
                                <?php $this->assign('blCat', '1'); ?>

                                <?php if ($this->_tpl_vars['sListType'] == 'oxcategory'): ?>
                                    <?php $this->assign('sLabel', ((is_array($_tmp='GENERAL_SEO_CAT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
                                <?php elseif ($this->_tpl_vars['sListType'] == 'oxvendor'): ?>
                                    <?php $this->assign('sLabel', ((is_array($_tmp='GENERAL_SEO_VND')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
                                <?php elseif ($this->_tpl_vars['sListType'] == 'oxmanufacturer'): ?>
                                    <?php $this->assign('sLabel', ((is_array($_tmp='GENERAL_SEO_MANUFACTURER')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
                                
                                
                                <?php endif; ?>

                                <optgroup label="<?php echo $this->_tpl_vars['sLabel']; ?>
">
                                    <?php $_from = $this->_tpl_vars['aList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oListItem']):
?>
                                        <option value="<?php echo $this->_tpl_vars['sListType']; ?>
#<?php echo $this->_tpl_vars['oListItem']->getId(); ?>
#<?php echo $this->_tpl_vars['oListItem']->getLanguage(); ?>
" <?php if ($this->_tpl_vars['sActId'] == $this->_tpl_vars['oListItem']->getId() && $this->_tpl_vars['iActLang'] == $this->_tpl_vars['oListItem']->getLanguage()): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['oListItem']->getTitle(); ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </optgroup>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <?php if (! $this->_tpl_vars['blCat']): ?>
                            <option value="">--</option>
                        <?php endif; ?>
                    </select>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_ACTCAT'), $this);?>

                </td>
            </tr>
            <?php endif; ?>


            <tr>
                <td class="edittext" width="120">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_FIXED'), $this);?>

                </td>
                <td class="edittext">
                <input class="edittext" type="checkbox" name="aSeoData[oxfixed]" value='1' <?php if ($this->_tpl_vars['oView']->isEntryFixed()): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_FIXED'), $this);?>

                </td>
            </tr>

            <?php if ($this->_tpl_vars['oView']->isSuffixSupported()): ?>
                <tr>
                    <td class="edittext" width="120">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_SHOWSUFFIX'), $this);?>

                    </td>
                    <td class="edittext">
                    <input class="edittext" type="checkbox" name="blShowSuffix" value='1' <?php if ($this->_tpl_vars['oView']->isEntrySuffixed()): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_SHOWSUFFIX'), $this);?>

                    </td>
                </tr>
            <?php endif; ?>

            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_URL'), $this);?>

                </td>
                <td class="edittext">
                <input type="text" class="editinput" style="width: 100%;" name="aSeoData[oxseourl]" value="<?php echo $this->_tpl_vars['oView']->getEntryUri(); ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_URL'), $this);?>

                </td>
            </tr>

            <tr>
                <td class="edittext" valign="top">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_OXKEYWORDS'), $this);?>

                </td>
                <td class="edittext">
                  <textarea type="text" class="editinput" style="width: 100%; height: 78px"  name="aSeoData[oxkeywords]" <?php echo $this->_tpl_vars['readonly']; ?>
><?php echo $this->_tpl_vars['oView']->getEntryMetaData('oxkeywords'); ?>
</textarea>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_OXKEYWORDS'), $this);?>

                </td>
            </tr>

            <tr>
                <td class="edittext" valign="top">
                  <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEO_OXDESCRIPTION'), $this);?>

                </td>
                <td class="edittext">
                  <textarea type="text" class="editinput" style="width: 100%; height: 78px"  name="aSeoData[oxdescription]" <?php echo $this->_tpl_vars['readonly']; ?>
><?php echo $this->_tpl_vars['oView']->getEntryMetaData('oxdescription'); ?>
</textarea>
                  <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_SEO_OXDESCRIPTION'), $this);?>

                </td>
            </tr>
        

        <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext"><br>
                
                
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language_edit.tpl", 'smarty_include_vars' => array('custreadonly' => $this->_tpl_vars['custreadonly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext">
            <input type="submit" class="edittext" onclick="document.getElementById('myedit').fnc.value='save';" name="saveArticle" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
><br>
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