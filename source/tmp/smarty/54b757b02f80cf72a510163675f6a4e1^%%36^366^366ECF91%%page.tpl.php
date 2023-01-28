<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:13
         compiled from layout/page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'layout/page.tpl', 29, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->getClassName() == 'alist' || $this->_tpl_vars['oView']->getClassName() == 'start'): ?>
	<?php $this->assign('sidebar', ""); ?>
	
<?php endif; ?>

<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
	<?php $this->assign('sidebar', ""); ?>
<?php endif; ?>

<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['oView']->showRDFa()): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rdfa/rdfa.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    

    <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>

    <div id="wrapper" <?php if ($this->_tpl_vars['sidebar']): ?>class="sidebar<?php echo $this->_tpl_vars['sidebar']; ?>
"<?php endif; ?> <?php if (! $this->_tpl_vars['sidebar'] && $this->_tpl_vars['oView']->getClassName() == 'start'): ?>class="amazon_start"<?php endif; ?>>
		
        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">

            <div class="underdog">

                <div class="row">

                    <?php if ($this->_tpl_vars['oView']->getClassName() == 'start' && count($this->_tpl_vars['oView']->getBanners()) > 0): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/promoslider.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>

                </div>
				
				<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
				<div class="Icons">
					<div class="row">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/icons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
				<div class="promotion">
					<div class="row">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/promoboxes.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
				<div class="promotion">
					<div class="row">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/nachrichtstart.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				</div>
				<?php endif; ?>

                <div class="content-box">

                    <?php if ($this->_tpl_vars['oView']->getClassName() != 'start' && ! $this->_tpl_vars['blHideBreadcrumb']): ?>
                        
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        
                    <?php endif; ?>

                    <?php echo $this->_smarty_vars['capture']['loginErrors']; ?>


                    <div class="row">
                        <?php if ($this->_tpl_vars['sidebar'] && $this->_tpl_vars['sidebar'] != 'Right'): ?>
                            <div class="col-xs-12 col-md-3 <?php echo $this->_tpl_vars['oView']->getClassName(); ?>
" id="sidebar_responsive">
                                <div id="sidebar">
									<div class="row">
                                    	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									</div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-xs-12 <?php if ($this->_tpl_vars['sidebar']): ?>col-md-9<?php endif; ?>" id="content_responsive">

                            <div id="content">
                                
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                                    <?php $_from = $this->_tpl_vars['oxidBlock_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
                                        <?php echo $this->_tpl_vars['_block']; ?>

                                    <?php endforeach; endif; unset($_from); ?>
                                
                            </div>

                        </div>

                        <?php if ($this->_tpl_vars['sidebar'] && $this->_tpl_vars['sidebar'] == 'Right'): ?>
                            <div class="col-xs-12 col-md-3 <?php echo $this->_tpl_vars['oView']->getClassName(); ?>
">
                                <div id="sidebar">
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>
		<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/extrawerbung.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/seotext.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
		
		
        
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
    

    <i class="fa fa-chevron-circle-up icon-4x" id="jumptotop"></i>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_pageBody', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/base.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>