<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:48
         compiled from layout/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'layout/footer.tpl', 18, false),array('function', 'oxid_include_widget', 'layout/footer.tpl', 21, false),array('function', 'oxscript', 'layout/footer.tpl', 217, false),array('block', 'oxifcontent', 'layout/footer.tpl', 181, false),array('modifier', 'escape', 'layout/footer.tpl', 277, false),array('modifier', 'oxmultilangassign', 'layout/footer.tpl', 344, false),)), $this); ?>

    <?php $this->assign('blShowFullFooter', $this->_tpl_vars['oView']->showSearch()); ?>
    <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>
    <?php echo $this->_tpl_vars['oView']->setShowNewsletter($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowNewsletterForm')); ?>


    <?php if ($this->_tpl_vars['oxcmp_user']): ?>
        <?php $this->assign('force_sid', $this->_tpl_vars['oView']->getSidForWidget()); ?>
    <?php endif; ?>

    <footer id="footer">
        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="row">
                        <div class="footer-left-part">
                            
                                <section class="col-xs-12 <?php if ($this->_tpl_vars['blShowFullFooter']): ?>col-sm-3<?php else: ?>col-sm-6<?php endif; ?> footer-box footer-box-service">
                                    <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'SERVICES'), $this);?>
</div>
                                    <div class="footer-box-content">
                                        
                                            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwServiceList','noscript' => 1,'nocookie' => 1,'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                        
                                    </div>
                                </section>
                            
                            
                                <section class="col-xs-12 <?php if ($this->_tpl_vars['blShowFullFooter']): ?>col-sm-3<?php else: ?>col-sm-6<?php endif; ?> footer-box footer-box-information">
                                    <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'INFORMATION'), $this);?>
</div>
                                    <div class="footer-box-content">
                                        
                                            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwInformation','noscript' => 1,'nocookie' => 1,'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                        
                                    </div>
                                </section>
                            
                            <?php if ($this->_tpl_vars['blShowFullFooter']): ?>
                                
                                    <section class="col-xs-12 col-sm-3 footer-box footer-box-manufacturers">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'OUR_BRANDS'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwManufacturerList','_parent' => $this->_tpl_vars['oView']->getClassName(),'noscript' => 1,'nocookie' => 1), $this);?>

                                            
                                        </div>
                                    </section>
                                
                                
                                    <section class="col-xs-12 col-sm-3 footer-box footer-box-categories">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'CATEGORIES'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','_parent' => $this->_tpl_vars['oView']->getClassName(),'sWidgetType' => 'footer','noscript' => 1,'nocookie' => 1), $this);?>

                                            
                                        </div>
                                    </section>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="row">
                        <div class="footer-right-part">
                            <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0">
                                <?php if ($this->_tpl_vars['oView']->showNewsletter()): ?>
                                    <section class="footer-box footer-box-newsletter">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <p class="small"><?php echo smarty_function_oxmultilang(array('ident' => 'FOOTER_NEWSLETTER_INFO'), $this);?>
</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/footer/newsletter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                            
                                        </div>
                                    </section>
									<br>
                                <?php endif; ?>
								
								
									<section class="footer-box footer-box-payments">
                                        <div class="h4 footer-box-title">Zahlungsarten</div>
                                        <div class="footer-box-content">
                                            
                                                <div class="row row_payments">
													<div class="payments_detail payments_detail_first">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_paypal_small.png" alt="Zahlung mit PayPal" title="Bezahlung mit PayPal">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_lastschrift_small.png" alt="Zahlung per Lastschrift" title="Zahlung per Bankeinzug">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_visa_small.png" alt="Zahlung mit Visa Kreditkarte" title="Bezahlen mit Visa Kreditkarte">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_mastercard_small.png" alt="Zahlung mit Mastercard Kreditkarte" title="Bezahlen mit mastercard Kreditkarte">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_rechnung_small.png" alt="Zahlung per Rechnung" title="Bezahlen mit Rechnung">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_sofortkauf_small.png" alt="Zahlung mit Sofortkauf" title="Bezahlen mit Sofortkauf">
													</div>
													<div class="payments_detail">
														<img src="https://www.physioexpress.de/out/flow/img/klarna_ratenkauf_small.png" alt="Zahlung mit Ratenkauf" title="Bezahlen mit Ratenkauf">
													</div>
												</div>
                                            
                                        </div>
                                    </section>
								

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

                        
                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl')): ?>
                    <div class="social-links">
                        <div class="row">
                            <section class="col-xs-12">
                                <div class="text-center">
                                    
                                        <ul class="list-inline">
                                            
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl'); ?>
">
                                                            <i class="fa fa-facebook"></i> <span>Facebook</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl'); ?>
">
                                                            <i class="fa fa-google-plus-square"></i> <span>Google+</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl'); ?>
">
                                                            <i class="fa fa-twitter"></i> <span>Twitter</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl'); ?>
">
                                                            <i class="fa fa-youtube-square"></i> <span>YouTube</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl'); ?>
">
                                                            <i class="fa fa-wordpress"></i> <span>Blog</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            
                                        </ul>
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif; ?>
            
                    </div>

        <?php if ($this->_tpl_vars['oView']->isPriceCalculated()): ?>
        
        
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxdeliveryinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <div id="incVatInfo">
            <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
            * <span class="deliveryInfo"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING'), $this);?>
<a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING2'), $this);?>
</a></span>
            <?php else: ?>
            * <span class="deliveryInfo"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS'), $this);?>
<a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING2'), $this);?>
</a></span>
            <?php endif; ?>
        </div>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        
        
        <?php endif; ?>
    </footer>

    <div class="legal">
        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">
            <div class="legal-box">
                <div class="row">
                    <section class="col-sm-12">
                        
                            <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxstdfooter','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        
                    </section>
                </div>
            </div>
        </div>

    </div>


<?php $this->assign('aKlFooter', $this->_tpl_vars['oViewConf']->getKlarnaFooterContent()); ?>
<?php if ($this->_tpl_vars['aKlFooter']['script']): ?>
    <?php echo $this->_tpl_vars['aKlFooter']['script']; ?>

<?php endif; ?>
<?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/tcklarna_scripts.js'),'priority' => 10), $this);?>


<?php if ($this->_tpl_vars['aKlFooter']): ?>

    <?php ob_start(); ?>
    <?php if ($this->_tpl_vars['aKlFooter']['url']): ?>
        <?php if ($this->_tpl_vars['oViewConf']->getActiveTheme() == 'azure'): ?>
            <li class="klarna-logo">
                <style>
                    .kl-logo {margin-top: 30px;padding: 4px 20px;}
                    .kl-logo img { max-width: 100%;}
                </style>

                <div class="kl-logo">
                    <div class="kl-logo-inner">
                        <img width="135" height="75" src="<?php echo $this->_tpl_vars['aKlFooter']['url']; ?>
">
                    </div>
                </div>
            </li>
        <?php else: ?>
            <section class="klarna-logo">
                <style>
                    .kl-logo { margin-top: 30px; }
                    .kl-logo-inner { width: 80%; }
                    .kl-logo img { max-width: 100%;}
                </style>

                <div class="kl-logo">
                    <div class="<?php if (( $this->_tpl_vars['aKlFooter']['class'] === 'logoFooter' || $this->_tpl_vars['aKlFooter']['class'] === 'logoBlack' || $this->_tpl_vars['aKlFooter']['class'] === 'logoWhite' )): ?>kl-logo-inner<?php endif; ?>">
                        <img <?php if (( $this->_tpl_vars['aKlFooter']['class'] === 'logoFooter' )): ?>width="135" height="75"<?php endif; ?> src="<?php echo $this->_tpl_vars['aKlFooter']['url']; ?>
">
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>
    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('klFooterContent', ob_get_contents());ob_end_clean(); ?>

    <script>
        function embedKlarnaLogo(content) {
            var theme = '<?php echo $this->_tpl_vars['oViewConf']->getActiveTheme(); ?>
';
            var $content = $(content)
            if(theme === 'flow'){
                $('.footer-right-part div:first').append($content);
            }
            if(theme === 'wave'){
                $('.footer-box-newsletter').append($content);
            }
            if(theme === 'azure'){
                $('#footerCategories .list.categories').append($content);
            }

            // get logo in natural size
            var $img = $content.find('img');
            var parsedUrl = $img.attr('src').split('width=');
            if(parsedUrl.length > 1) {
                var prevStyle = getComputedStyle($content.prev().children().first()[0]);
                $img.attr('src', parsedUrl[0] + 'width=' + parseInt(prevStyle.width));
            }
        }
    </script>
    <?php $this->assign('klFooterContent', ((is_array($_tmp=$this->_tpl_vars['klFooterContent'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'))); ?>
    <?php echo smarty_function_oxscript(array('add' => "embedKlarnaLogo('".($this->_tpl_vars['klFooterContent'])."');"), $this);?>

<?php endif; ?>




<?php if ($this->_tpl_vars['oViewConf']->getActiveTheme() === 'azure'): ?>
    <?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/js/azure_patch.js'),'priority' => 3), $this);?>

<?php endif; ?>
<?php if ($this->_tpl_vars['oViewConf']->showCheckoutTerms()): ?>
    <?php $this->assign('klarnaLawNotifUrl', $this->_tpl_vars['oViewConf']->getLawNotificationsLinkKco()); ?>
    <style>
        #legalModal iframe {
            padding-top: 30px;
            width: 100%;
            border: 0;
        }

        .modal-dialog button.close {
            position: absolute;
            right: 0;
            z-index: 1;
            font-size: 30px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2;
            background-color: #fff;
            padding: 0;
            margin: 14px;
            border: none;
        }

        .modal-dialog button.close:hover {
            opacity: .7;
        }

        label {
            font-weight: normal;
        }

        .klarna-notification {
            text-decoration: underline;
            color: #009EC0;
        }

        .klarna-notification:hover {
            text-decoration: none;
            color: #008DB0;
        }
    </style>
    <div class="klarna-modal modal fade" id="legalModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="btn btn-default close pull" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <iframe style="max-width: 660px !important; height: 500px !important;"
                            src="<?php echo $this->_tpl_vars['klarnaLawNotifUrl']; ?>
" scrolling="yes"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php ob_start(); ?>
        <div class="klarna-law-notice">
            <?php $this->assign('klarnaLawNoticeMessage', ((is_array($_tmp='TCKLARNA_LAW_NOTICE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp, $this->_tpl_vars['oViewConf']->getLawNotificationsLinkKco()) : smarty_modifier_oxmultilangassign($_tmp, $this->_tpl_vars['oViewConf']->getLawNotificationsLinkKco()))); ?>
            <?php echo $this->_tpl_vars['klarnaLawNoticeMessage']; ?>

        </div>
    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('lawNoticeTemplate', ob_get_contents());ob_end_clean(); ?>
    <script>
        if (window.addEventListener) {
            window.addEventListener('load', insertKlarnaNotifications)
        } else {
            window.attachEvent('onload', insertKlarnaNotifications)
        }

        function insertKlarnaNotifications() {

            var $noticeBox = $("<?php echo ((is_array($_tmp=$this->_tpl_vars['lawNoticeTemplate'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
");

            // my account
            var $loginForm = $('form[name=login]');
            if ($loginForm.length > 0) {
                $noticeBox.clone()
                    .appendTo($loginForm.find('div.checkbox:last'));
            }

            var $registerForm = $('form[name=order]');
            if ($registerForm.length && $registerForm.find('input[name=cl][value=register]').length) {
                $noticeBox.clone()
                    .appendTo($registerForm.find('span.help-block').last());
            }

            $('a.klarna-notification').click(function (e) {
                e.preventDefault();
                $('#legalModal').modal('show');
            });
        }
    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['oViewConf']->getActiveTheme() === 'wave'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('tcklarna','out/src/css/tc_klarna_style_wave.css'); ?>
"/>
<?php endif; ?>

<?php if ($this->_tpl_vars['oView']->isRootCatChanged()): ?>
    <div id="scRootCatChanged" class="popupBox corners FXgradGreyLight glowShadow">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/privatesales/basketexcl.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>
<script>
function setArticleNummer(){
	if(document.getElementById('article_nummer')){
		art_num = document.getElementById('article_nummer').innerHTML;
		if(document.cookie){
			artikelnummern_cookie = getCookie('artikelnummern_cookie');
			if(artikelnummern_cookie){
				
			}else{
				var a = new Date();
				a = new Date(a.getTime() + 1000*60*60*24*365);
				document.cookie = 'artikelnummern_cookie='+art_num+'; expires='+a.toGMTString()+';';
			}
			console.log(art_num);
		}
	}
}
setArticleNummer();
</script>