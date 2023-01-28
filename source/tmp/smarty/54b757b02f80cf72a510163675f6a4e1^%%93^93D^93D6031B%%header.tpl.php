<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:13
         compiled from layout/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'layout/header.tpl', 2, false),array('function', 'oxid_include_dynamic', 'layout/header.tpl', 93, false),array('modifier', 'trim', 'layout/header.tpl', 6, false),array('insert', 'oxid_newbasketitem', 'layout/header.tpl', 92, false),)), $this); ?>
<?php if ($this->_tpl_vars['oViewConf']->getTopActionClassName() != 'clearcookies' && $this->_tpl_vars['oViewConf']->getTopActionClassName() != 'mallstart'): ?>
    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCookieNote','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

<?php endif; ?>
<?php $this->assign('aKlPromotion', $this->_tpl_vars['oViewConf']->getOnSitePromotionInfo('sKlarnaStripPromotion')); ?>
<?php $this->assign('sKlarnaMessagingScript', $this->_tpl_vars['oViewConf']->getOnSitePromotionInfo('sKlarnaMessagingScript')); ?>
<?php if ($this->_tpl_vars['aKlPromotion'] && $this->_tpl_vars['oView']->getClassName() === 'start' && ((is_array($_tmp=$this->_tpl_vars['sKlarnaMessagingScript'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp))): ?>
    <div>
        <?php echo $this->_tpl_vars['aKlPromotion']; ?>

    </div>
    <div class="clear clearfix"></div>
<?php endif; ?>




    <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>

    <header id="header">
		
		<div id="fsb_bar"><i class="fa fa-truck"></i> Kostenloser Paketversand ab <span id="fsb_symbol"></span><span id="fsb_amount">49 €*</span> &nbsp; &nbsp; &nbsp;  <i class="fa fa-phone"></i> 05251/778077  &nbsp; &nbsp; &nbsp; <i class="fa fa-lock"></i> Sicher einkaufen &uuml;ber SSL </div>

        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">

            <div class="header-box">

                <div class="row">
                    <div class="col-xs-5 col-sm-5 col-md-4 logo-col">
                        
                            <?php $this->assign('slogoImg', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoFile')); ?>
                            <?php $this->assign('sLogoWidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoWidth')); ?>
                            <?php $this->assign('sLogoHeight', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoHeight')); ?>
                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" title="Physio Express">
                                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['slogoImg']); ?>
" alt="Physio Express" title="Start" id="logo_pmt">
                            </a>
                        
                    </div>
                    <div class="col-xs-7 col-sm-6 col-md-4 col-md-push-4 menus-col">
                        
                            <div class="menu-dropdowns pull-right">
                                
                                                                        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwLanguageList','lang' => $this->_tpl_vars['oViewConf']->getActLanguageId(),'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

                                
								

                                
                                    <?php if ($this->_tpl_vars['oxcmp_user'] || $this->_tpl_vars['oView']->getCompareItemCount() || $this->_tpl_vars['Errors']['loginBoxErrors']): ?>
                                        <?php $this->assign('blAnon', 0); ?>
                                        <?php $this->assign('force_sid', $this->_tpl_vars['oViewConf']->getSessionId()); ?>
                                    <?php else: ?>
                                        <?php $this->assign('blAnon', 1); ?>
                                    <?php endif; ?>
                                                                        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwServiceMenu','_parent' => $this->_tpl_vars['oView']->getClassName(),'force_sid' => $this->_tpl_vars['force_sid'],'nocookie' => $this->_tpl_vars['blAnon'],'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

                                

                                
                                                                        <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                        <?php $this->assign('blAnon', 0); ?>
                                        <?php $this->assign('force_sid', $this->_tpl_vars['oViewConf']->getSessionId()); ?>
                                    <?php else: ?>
                                        <?php $this->assign('blAnon', 1); ?>
                                    <?php endif; ?>
                                    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwMiniBasket','nocookie' => $this->_tpl_vars['blAnon'],'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                
                            </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6" style="margin: inherit;">
						
						<div class="col-xs-12 col-sm-12 col-md-12 search-col">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
                        
                    </div>

                </div>

            </div>
        </div>

        
            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','cnid' => $this->_tpl_vars['oView']->getCategoryId(),'sWidgetType' => 'header','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

        

    </header>



<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_newbasketitem', 'tpl' => "widget/minibasket/newbasketitemmsg.tpl", 'type' => 'message')), $this); ?>

<?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/minibasket/minibasketmodal.tpl"), $this);?>