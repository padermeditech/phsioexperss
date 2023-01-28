<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:48
         compiled from widget/header/cookienote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/header/cookienote.tpl', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->isEnabled() && $_COOKIE['displayedCookiesNotification'] != '1'): ?>
    <div id="cookieNote" style="display:none;">
		<div class="hinweis">
			<div class="alert alert-info" style="margin: 0;">
				<p>Wir verwenden Cookies und andere Technologien auf unserer Webseite. Einige von ihnen sind essenziell, während andere uns helfen, diese Webseite und Ihre Erfahrung zu verbessern. 
				Personenbezogene Daten können verarbeitet werden (z. B. IP-Adressen), z. B. für personalisierte Anzeigen und Inhalte oder Anzeigen- und Inhaltsmessung.</p>
				
				<div class="buttonsdivcookie">
					<a href="#" id="notakzeptCookie" onclick="setCookie('essenziell','no');return false;">Nur essentielle Cookies akzeptieren</a>
				</div>
				<div class="buttonsdivcookie">
					<a href="#" id="akzeptCookie" onclick="setCookie('essenziell','yes');return false;">Alle Cookies akzeptieren</a>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
    </div>
<?php endif; ?>
<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>
