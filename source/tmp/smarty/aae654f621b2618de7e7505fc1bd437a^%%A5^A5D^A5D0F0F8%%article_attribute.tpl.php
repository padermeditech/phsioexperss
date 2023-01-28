<?php /* Smarty version 2.6.31, created on 2022-12-29 15:21:29
         compiled from article_attribute.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_attribute.tpl', 1, false),array('function', 'oxmultilang', 'article_attribute.tpl', 39, false),array('block', 'oxhasrights', 'article_attribute.tpl', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
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

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="article_attribute">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<table cellspacing="0" cellpadding="0" border="0" width="96%">
    <tr>
        <td valign="top" class="edittext">
            <?php if ($this->_tpl_vars['oxparentid']): ?>
                <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_VARIANTE'), $this);?>
<a href="Javascript:editThis('<?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxid->value; ?>
');" class="edittext"><b><?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxartnum->value; ?>
 <?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxtitle->value; ?>
</b></a><br>
                <br>
            <?php endif; ?>

            
                <?php $this->_tag_stack[] = array('oxhasrights', array('object' => $this->_tpl_vars['edit'],'readonly' => $this->_tpl_vars['readonly'])); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <input type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_ATTRIBUTE_ASSIGNATTRIBUTE'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=article_attribute&aoc=1&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            

            <?php if (! $this->_tpl_vars['edit']->blForeignArticle): ?>
                <br><br>
                <a class="edittext" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=attribute" target="_new"><b><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_ATTRIBUTE_OPENINNEWWINDOW'), $this);?>
</b></a>
            <?php endif; ?>

        </td>

        <!-- Anfang rechte Seite -->
        <td valign="top" class="edittext" align="left" width="50%">
            
                <?php $this->_tag_stack[] = array('oxhasrights', array('object' => $this->_tpl_vars['edit'],'readonly' => $this->_tpl_vars['readonly'])); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <input type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_ATTRIBUTE_ASSIGNSELECTLIST'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=article_attribute&aoc=2&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            
        </td>
        <!-- Ende rechte Seite -->
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