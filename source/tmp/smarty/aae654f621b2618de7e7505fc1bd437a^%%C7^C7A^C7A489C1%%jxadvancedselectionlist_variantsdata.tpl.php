<?php /* Smarty version 2.6.31, created on 2022-12-30 10:55:08
         compiled from jxadvancedselectionlist_variantsdata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'jxadvancedselectionlist_variantsdata.tpl', 1, false),array('function', 'oxmultilang', 'jxadvancedselectionlist_variantsdata.tpl', 50, false),)), $this); ?>
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

<script type="text/javascript">
    <!--
    window.onload = function ()
    {
        <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
        <?php endif; ?>
        top.reloadEditFrame();
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
    function processUnitInput( oSelect, sInputId )
    {
        document.getElementById( sInputId ).disabled = oSelect.value ? true : false;
    }
    //-->
</script>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="jxadvancedselectionlist_variantsdata">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>
<br/>
<?php if ($this->_tpl_vars['errorMessage']): ?>
    <div class="error"><?php echo $this->_tpl_vars['errorMessage']; ?>
</div><br/>
<?php endif; ?>

<?php if ($this->_tpl_vars['aVariantsData']): ?>
    <h2><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_SELECTION_OPTIONS_DATA'), $this);?>
</h2>
    <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" enctype="multipart/form-data" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['iMaxUploadFileSize']; ?>
">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="jxadvancedselectionlist_variantsdata">
        <input type="hidden" name="fnc" value="save">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
        <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

        <table cellspacing="0" cellpadding="5" border="1" height="100%" width="100%">
            <tr height="10">
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_SELECTION_OPTION_TITLE'), $this);?>
</th>
                <th></th>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_ICON'), $this);?>
</th>
            </tr>
            <?php $_from = $this->_tpl_vars['aVariantsData']['selectionOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sOptionKey'] => $this->_tpl_vars['aOptionData']):
?>
            <tr>
                <td colspan="">
                    <?php echo $this->_tpl_vars['aOptionData']['title']; ?>

                    <input type="hidden" name="variantsdata[selectionOptions][<?php echo $this->_tpl_vars['sOptionKey']; ?>
][title]" value="<?php echo $this->_tpl_vars['aOptionData']['title']; ?>
">
                </td>
                <td colspan="">
                    <input type="hidden" id="option-image-input-<?php echo $this->_tpl_vars['sOptionKey']; ?>
" name="variantsdata[selectionOptions][<?php echo $this->_tpl_vars['sOptionKey']; ?>
][icon]" value="<?php echo $this->_tpl_vars['aOptionData']['icon']; ?>
">
                    <input type="file" name="variantsdataoptionicons_<?php echo $this->_tpl_vars['sOptionKey']; ?>
">
                </td>
                <td colspan="" class="edittext" id="option-image-<?php echo $this->_tpl_vars['sOptionKey']; ?>
" style="text-align: center;">
                    <?php if ($this->_tpl_vars['aOptionData']['icon']): ?>
                        <img src="/<?php echo $this->_tpl_vars['sImgDir']; ?>
/<?php echo $this->_tpl_vars['aOptionData']['icon']; ?>
" style="max-height:100px; max-width:100px; width:100%; vertical-align:middle;">
                        <a href="#" class="delete" style="float:none; display:inline-block; vertical-align:middle;" onclick="document.getElementById('option-image-<?php echo $this->_tpl_vars['sOptionKey']; ?>
').innerHTML='';document.getElementById('option-image-input-<?php echo $this->_tpl_vars['sOptionKey']; ?>
').value='';return false"></a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <br/>
        <input type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_SAVE'), $this);?>
" class="edittext" style="vertical-align: top;">
    </form>
<?php else: ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'JXADVANCEDSELECTIONLIST_VARIANTS_DATA_NOT_AVAILABLE'), $this);?>

<?php endif; ?>

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