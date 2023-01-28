<?php /* Smarty version 2.6.31, created on 2023-01-24 23:31:02
         compiled from ox:oxrighttocancellegendf2f7f69cc56a9494d04f03996f3afc5c0 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'ox:oxrighttocancellegendf2f7f69cc56a9494d04f03996f3afc5c0', 3, false),array('modifier', 'oxaddparams', 'ox:oxrighttocancellegendf2f7f69cc56a9494d04f03996f3afc5c0', 4, false),)), $this); ?>
                        <p class="agbConfirmation checkbox">
                            <label>
                                <input id="checkAgbTop" type="checkbox" name="ord_agb" value="1"> <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxagb','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    Ich habe die <a id="test_OrderOpenAGBBottom" rel="nofollow" href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
" onclick="window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['oCont']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "plain=1") : smarty_modifier_oxaddparams($_tmp, "plain=1")); ?>
', 'agb_popup', 'resizable=yes,status=no,scrollbars=yes,menubar=no,width=620,height=400');return false;" class="fontunderline">AGB</a> gelesen und erkläre mich mit ihnen einverstanden.&nbsp;
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrightofwithdrawal','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    Ich wurde über mein <a id="test_OrderOpenWithdrawalBottom" rel="nofollow" href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
" onclick="window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['oCont']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "plain=1") : smarty_modifier_oxaddparams($_tmp, "plain=1")); ?>
', 'rightofwithdrawal_popup', 'resizable=yes,status=no,scrollbars=yes,menubar=no,width=620,height=400');return false;"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a> informiert.
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </label>
                        </p>
                    