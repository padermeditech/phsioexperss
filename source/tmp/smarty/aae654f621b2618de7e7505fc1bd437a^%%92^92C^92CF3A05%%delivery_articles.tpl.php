<?php /* Smarty version 2.6.31, created on 2022-12-28 10:42:37
         compiled from popups/delivery_articles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'popups/delivery_articles.tpl', 1, false),array('modifier', 'cat', 'popups/delivery_articles.tpl', 11, false),array('modifier', 'oxupper', 'popups/delivery_articles.tpl', 11, false),array('function', 'oxmultilang', 'popups/delivery_articles.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "popups/headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
    initAoc = function()
    {

        YAHOO.oxid.container1 = new YAHOO.oxid.aoc( 'container1',
                                                    [ <?php $_from = $this->_tpl_vars['oxajax']['container1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iKey'] => $this->_tpl_vars['aItem']):
?>
                                                       <?php echo $this->_tpl_vars['sSep']; ?>
<?php echo '{ key:\'_'; ?><?php echo $this->_tpl_vars['iKey']; ?><?php echo '\', ident: '; ?><?php if ($this->_tpl_vars['aItem']['4']): ?><?php echo 'true'; ?><?php else: ?><?php echo 'false'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['aItem']['4']): ?><?php echo ',label: \''; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='GENERAL_AJAX_SORT_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['aItem']['0']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['aItem']['0'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?><?php echo '\',visible: '; ?><?php if ($this->_tpl_vars['aItem']['2']): ?><?php echo 'true'; ?><?php else: ?><?php echo 'false'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '}'; ?>

                                                      <?php $this->assign('sSep', ","); ?>
                                                      <?php endforeach; endif; unset($_from); ?> ],
                                                    '<?php echo $this->_tpl_vars['oViewConf']->getAjaxLink(); ?>
cmpid=container1&container=delivery_articles&synchoxid=<?php echo $this->_tpl_vars['oxid']; ?>
'
                                                    );

        <?php $this->assign('sSep', ""); ?>

        YAHOO.oxid.container2 = new YAHOO.oxid.aoc( 'container2',
                                                    [ <?php $_from = $this->_tpl_vars['oxajax']['container2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iKey'] => $this->_tpl_vars['aItem']):
?>
                                                       <?php echo $this->_tpl_vars['sSep']; ?>
<?php echo '{ key:\'_'; ?><?php echo $this->_tpl_vars['iKey']; ?><?php echo '\', ident: '; ?><?php if ($this->_tpl_vars['aItem']['4']): ?><?php echo 'true'; ?><?php else: ?><?php echo 'false'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['aItem']['4']): ?><?php echo ',label: \''; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='GENERAL_AJAX_SORT_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['aItem']['0']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['aItem']['0'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?><?php echo '\',visible: '; ?><?php if ($this->_tpl_vars['aItem']['2']): ?><?php echo 'true'; ?><?php else: ?><?php echo 'false'; ?><?php endif; ?><?php echo ',formatter: YAHOO.oxid.aoc.custFormatter'; ?><?php endif; ?><?php echo '}'; ?>

                                                      <?php $this->assign('sSep', ","); ?>
                                                      <?php endforeach; endif; unset($_from); ?> ],
                                                    '<?php echo $this->_tpl_vars['oViewConf']->getAjaxLink(); ?>
cmpid=container2&container=delivery_articles&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
'
                                                    )
        YAHOO.oxid.container1.modRequest = function( sRequest )
        {
            oSelect = $('artcat');
            if ( oSelect.selectedIndex ) {
                sRequest += '&oxid='+oSelect.options[oSelect.selectedIndex].value+'&synchoxid=<?php echo $this->_tpl_vars['oxid']; ?>
';
            }
            return sRequest;
        }
        YAHOO.oxid.container1.filterCat = function( e, OObj )
        {
            YAHOO.oxid.container1.getPage( 0 );
        }
        YAHOO.oxid.container1.getDropAction = function()
        {
            return 'fnc=addarttodel';
        }

        YAHOO.oxid.container2.getDropAction = function()
        {
            return 'fnc=removeartfromdel';
        }
        $E.addListener( $('artcat'), "change", YAHOO.oxid.container1.filterCat, $('artcat') );
    }
    $E.onDOMReady( initAoc );
</script>

    <table width="100%">
        <colgroup>
            <col span="2" width="50%" />
        </colgroup>
        <tr class="edittext">
            <td colspan="2"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_AJAX_DESCRIPTION'), $this);?>
<br><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_FILTERING'), $this);?>
<br /><br /></td>
        </tr>
        <tr class="edittext">
            <td align="center"><b><?php echo smarty_function_oxmultilang(array('ident' => 'DELIVERY_ARTICLES_ALLATRICLES'), $this);?>
</b></td>
            <td align="center"><b><?php echo smarty_function_oxmultilang(array('ident' => 'DELIVERY_ARTICLES_SETARTICLES'), $this);?>
</b></td>
        </tr>
        <tr>
            <td class="oxid-aoc-category">
                <select name="artcat" id="artcat">
                <?php $_from = $this->_tpl_vars['artcattree']->aList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
                <option value="<?php echo $this->_tpl_vars['pcat']->oxcategories__oxid->value; ?>
"><?php echo $this->_tpl_vars['pcat']->oxcategories__oxtitle->value; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
            <td valign="top" id="container1"></td>
            <td valign="top" id="container2"></td>
        </tr>
        <tr>
            <td class="oxid-aoc-actions"><input type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_AJAX_ASSIGNALL'), $this);?>
" id="container1_btn"></td>
            <td class="oxid-aoc-actions"><input type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_AJAX_UNASSIGNALL'), $this);?>
" id="container2_btn"></td>
        </tr>
    </table>

</body>
</html>
