<?php /* Smarty version 2.6.31, created on 2022-12-28 16:55:34
         compiled from page/info/suggest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/info/suggest.tpl', 5, false),array('block', 'oxifcontent', 'page/info/suggest.tpl', 9, false),array('insert', 'oxid_tracker', 'page/info/suggest.tpl', 14, false),)), $this); ?>
<?php ob_start(); ?>
    <h1 class="page-header"><?php echo $this->_tpl_vars['oView']->getTitle(); ?>
</h1>

    <ol>
        <li><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_ENTER_YOUR_ADDRESS_AND_MESSAGE'), $this);?>
</li>
        <li><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_RECOMMEND_CLICK_ON_SEND'), $this);?>
</li>
    </ol>

    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxsecurityinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <p><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_READ_DETAILS'), $this);?>
 <a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></p>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/suggest.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Right')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>