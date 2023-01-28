<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:45
         compiled from dgsearch/dgsearchpopup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'dgsearch/dgsearchpopup.tpl', 2, false),array('modifier', 'cat', 'dgsearch/dgsearchpopup.tpl', 3, false),array('modifier', 'count', 'dgsearch/dgsearchpopup.tpl', 11, false),array('function', 'oxmultilang', 'dgsearch/dgsearchpopup.tpl', 19, false),)), $this); ?>
<?php $this->assign('searchparamforhtml', $this->_tpl_vars['oView']->getSearchParamForHtml()); ?>
<?php $this->assign('search_head', ((is_array($_tmp='PAGE_SEARCH_SEARCH_HITSFOR')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
<?php $this->assign('search_head', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oView']->getArticleCount())) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['search_head']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['search_head'])))) ? $this->_run_mod_handler('cat', true, $_tmp, " &quot;") : smarty_modifier_cat($_tmp, " &quot;")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getSearchParamForHtml()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getSearchParamForHtml())))) ? $this->_run_mod_handler('cat', true, $_tmp, "&quot;") : smarty_modifier_cat($_tmp, "&quot;"))); ?>

<?php if ($this->_tpl_vars['oView']->getArticleCount()): ?>


<link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('dgsearch','out/azure/src/dgsearch.css'); ?>
" type="text/css" />
<?php $this->assign('colspan', 2); ?>
<?php $this->assign('dgSearchManufacturer', $this->_tpl_vars['oView']->dgSearchManufacturer()); ?>
<?php if (count($this->_tpl_vars['dgSearchManufacturer']) > 0): ?>
<?php $this->assign('colspan', 3); ?>
<?php ob_start(); ?>
<table border="0" cellpadding="5" cellspacing="2">
  <colgroup>
    <col width="100%">
  </colgroup>
  <tr>
    <th><?php echo smarty_function_oxmultilang(array('ident' => 'FOOTER_MANUFACTURERS'), $this);?>
</th>
  </tr>
  <tr>
     <td class="manufaturer">
       <?php $_from = $this->_tpl_vars['dgSearchManufacturer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['manufacturer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['manufacturer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oManufacturer']):
        $this->_foreach['manufacturer']['iteration']++;
?>
          <a href="<?php echo $this->_tpl_vars['oManufacturer']->getLink(); ?>
"><img border="0" alt="" src="<?php echo $this->_tpl_vars['oManufacturer']->getIconUrl(); ?>
" height="42" /></a>
       <?php endforeach; endif; unset($_from); ?>
     </td>
  </tr>
</table>
<br />
<?php $this->_smarty_vars['capture']['dgSearchManufacturerHtml'] = ob_get_contents(); ob_end_clean(); ?>
<?php endif; ?>
<?php $this->assign('dgSearchCategory', $this->_tpl_vars['oView']->dgSearchCategory()); ?>
<?php if (count($this->_tpl_vars['dgSearchCategory']) > 0): ?>
<?php $this->assign('colspan', 3); ?>
<?php ob_start(); ?>
<table border="0" cellpadding="5" cellspacing="2">
  <colgroup>
    <col width="100%">
  </colgroup>
  <tr>
    <th><?php echo smarty_function_oxmultilang(array('ident' => 'FOOTER_CATEGORIES'), $this);?>
</th>
  </tr>
  <tr>
     <td class="category">
     <table border="0" cellpadding="0" cellspacing="2">
     <?php $_from = $this->_tpl_vars['dgSearchCategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oCategory']):
        $this->_foreach['category']['iteration']++;
?>
      <tr>
        <td>                        
          <a href="<?php echo $this->_tpl_vars['oCategory']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCategory']->oxcategories__oxtitle->value; ?>
</a>
        </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
     </table>
    </td>
  </tr>
</table>
<br />
<?php $this->_smarty_vars['capture']['dgSearchCategoryHtml'] = ob_get_contents(); ob_end_clean(); ?>
<?php endif; ?>

<table border="0" cellpadding="5" cellspacing="2">
<?php if ($this->_tpl_vars['colspan'] == 2): ?>
  <colgroup>
    <col width="5%">
    <col width="95%">
  </colgroup>
<?php elseif ($this->_tpl_vars['colspan'] == 3): ?>
  <colgroup>
    <col width="5%">
    <col width="60%">
    <col width="35%">
  </colgroup>
<?php endif; ?>
  <tr>
      <td align="right" colspan="<?php echo $this->_tpl_vars['colspan']; ?>
"><a href="#" onclick="$('#searchresults').html('').hide();" class="dgclosePop">x</a></td>
    </tr>
    <?php $_from = $this->_tpl_vars['oView']->getArticleList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oArticle']):
        $this->_foreach['article']['iteration']++;
?>
      <tr>
	    <td class="article">
            <div class="article-block">
            <a href="<?php echo $this->_tpl_vars['oArticle']->getLink(); ?>
">
                <div class="product_image_s_container">
                    <img alt="" src="<?php echo $this->_tpl_vars['oArticle']->getIconUrl(); ?>
" />
                </div>
                <div class="article-info">
                    <span><?php echo $this->_tpl_vars['oArticle']->oxarticles__oxtitle->value; ?>
</span>
                    <small><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_NO','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['oArticle']->oxarticles__oxartnum->value; ?>
</small>
                </div>
            </a>
            </div>
        </td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>