<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:47
         compiled from page/details/inc/tabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxhasrights', 'page/details/inc/tabs.tpl', 5, false),array('modifier', 'strstr', 'page/details/inc/tabs.tpl', 13, false),array('modifier', 'explode', 'page/details/inc/tabs.tpl', 37, false),array('function', 'oxeval', 'page/details/inc/tabs.tpl', 59, false),array('function', 'oxmultilang', 'page/details/inc/tabs.tpl', 101, false),)), $this); ?>
<?php $this->assign('blFirstTab', true); ?>
<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>


    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWLONGDESCRIPTION')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->assign('oLongdesc', $this->_tpl_vars['oDetailsProduct']->getLongDescription()); ?>
		<?php $this->assign('actCategory', $this->_tpl_vars['oView']->getActiveCategory()); ?>
		<?php $this->assign('artikelnummer_lehrtafel', "12122-V,12122,12123,12134,12132,12327,12135,12133,12328,12126,12124,12127,12125,12450-V,12450,12451,12452,12453,12454,12455,12456,12457,12458,12459,12460,12461,12462,12463,12464,12465,12466,12467,12468,12469,12470,12471,12472,12473"); ?>
		<?php $this->assign('akt_artikelnummer', $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value); ?>
        <?php if ($this->_tpl_vars['oLongdesc']->value): ?>
            <div id="description" class="tab-pane<?php if ($this->_tpl_vars['blFirstTab']): ?> active<?php endif; ?>">
			
				<?php if (((is_array($_tmp=$this->_tpl_vars['artikelnummer_lehrtafel'])) ? $this->_run_mod_handler('strstr', true, $_tmp, $this->_tpl_vars['akt_artikelnummer']) : strstr($_tmp, $this->_tpl_vars['akt_artikelnummer']))): ?>
					<?php $this->assign("seo-title", $this->_tpl_vars['oDetailsProduct']->oxarticles__asy_seotitle->value); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'Mini-Poster') : strstr($_tmp, 'Mini-Poster'))): ?>
						<?php $this->assign('lehrtafel_art', "Mini-Poster"); ?>
						<?php $this->assign('lehrtafel_art_plural', "Mini-Poster"); ?>
						<?php $this->assign('beleistung', 'ohne Beleistung'); ?>
						<?php $this->assign('groesse', '24 x 34 cm'); ?>
						<?php $this->assign('artikel', 'Das'); ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'Poster') : strstr($_tmp, 'Poster'))): ?>
						<?php $this->assign('lehrtafel_art', 'Poster'); ?>
						<?php $this->assign('lehrtafel_art_plural', 'Poster'); ?>
						<?php $this->assign('beleistung', 'mit Beleistung'); ?>
						<?php $this->assign('groesse', '50 x 70 cm'); ?>
						<?php $this->assign('artikel', 'Das'); ?>
					<?php else: ?>
						<?php $this->assign('lehrtafel_art', 'Lehrtafel'); ?>
						<?php $this->assign('lehrtafel_art_plural', 'Lehrtafeln'); ?>
						<?php $this->assign('beleistung', 'mit Beleistung'); ?>
						<?php $this->assign('groesse', '70 x 100 cm'); ?>
						<?php $this->assign('artikel', 'Die'); ?>
					<?php endif; ?>
						
					<?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value): ?>
						<?php $this->assign('postername', $this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value); ?>
						<?php $this->assign('awords', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['postername']) : explode($_tmp, $this->_tpl_vars['postername']))); ?>
						<?php $this->assign('title_variante', $this->_tpl_vars['awords'][0]); ?>
					<?php else: ?>
						<?php $this->assign('title_variante', $this->_tpl_vars['oDetailsProduct']->oxarticles__oxtitle->value); ?>
					<?php endif; ?>
					
					<?php if (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'unlaminiert') : strstr($_tmp, 'unlaminiert'))): ?>
						<?php $this->assign('laminiert_unlaminiert', 'ist <b>unlaminiert.</b> Laminierte Poster oder Lehrtafeln haben  durch die Laminierung einen zusätzlichen Schutz vor Rissen, Beschädigungen und Schmutz.'); ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'laminiert') : strstr($_tmp, 'laminiert'))): ?>
						<?php $this->assign('laminiert_unlaminiert', 'ist <b>laminiert</b> und dadurch zusätzlich reißfest. Laminierte Poster oder Lehrtafeln sind praktisch unverwüstlich und absolut reißfest. Sie können mit einem wasserlöslichen Filzstift beschriftet werden, und anschließend muss man sie nur abwischen.'); ?>
					<?php else: ?>
						<?php $this->assign('laminiert_unlaminiert', 'kann <b>laminiert</b> oder <b>unlaminiert</b> geliefert werden. Laminierte Lehrtafeln oder Poster sind praktisch unverwüstlich und absolut reißfest. Sie können mit einem wasserlöslichen Filzstift beschriftet werden, und anschließend muss man sie nur abwischen.'); ?>
					<?php endif; ?>
				
					
					<?php if ($this->_tpl_vars['seo']-$this->_tpl_vars['itle']): ?>
						<h2>Beschreibung <?php echo $this->_tpl_vars['seo']-$this->_tpl_vars['itle']; ?>
</h2>
					<?php else: ?>
						<h2>Beschreibung <?php echo $this->_tpl_vars['lehrtafel_art']; ?>
 <?php echo $this->_tpl_vars['title_variante']; ?>
</h2>	
					<?php endif; ?>
					
					<?php if ("$".($this->_tpl_vars['oLongdesc'])): ?>
						</p><?php echo smarty_function_oxeval(array('var' => $this->_tpl_vars['oLongdesc']), $this);?>
</p>
					<?php endif; ?>
					
					<?php if (((is_array($_tmp=$this->_tpl_vars['oDetailsProduct']->oxarticles__oxvarselect->value)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'Poster') : strstr($_tmp, 'Poster'))): ?>
						<p>Die anatomischen <b><?php echo $this->_tpl_vars['lehrtafel_art_plural']; ?>
 <?php echo $this->_tpl_vars['title_variante']; ?>
</b> sind eine originalgetreue Vierfarbenproduktion der großen Lehrtafeln - 
						gedruckt auf 250g Kunstdruckkarton. <?php echo $this->_tpl_vars['artikel']; ?>
 <?php echo $this->_tpl_vars['lehrtafel_art']; ?>
 hat eine Größe von <?php echo $this->_tpl_vars['groesse']; ?>
 und besitzt an der Rückseite eine Aufhängeöse zum 
						Aufhängen an die Wand.</p>
					<?php else: ?>
						<p>Die anatomische <b>Lehrtafel <?php echo $this->_tpl_vars['title_variante']; ?>
</b> ist aus Kunststoff-Folie gefertigt und besitzt eine Metall-Leiste am oberen und unteren Rand. Zur Befestigung verfügt die 
						Lehtafel über eine Aufhängekordel. Die Beschriftungen sind zweisprachig: deutsch und englisch.</p>	
					<?php endif; ?>
					
					<p>Die anatomischen <?php echo $this->_tpl_vars['lehrtafel_art_plural']; ?>
 stellen komplexe anatomische Zusammenhänge leicht verständlich und übersichtlich dar. 
					Sie sind mit deutscher Überschrift und deutsch/lateinische Nomenklatur versehen. Die Erläuterungstexte sind in Deutsch und Englisch dargestellt. 
					Perfekt geeignet für den Arzt, den Physiotherapeuten oder den Unterricht in der Schule. 
					Eine Aufklärung des Patienten kann mithilfe der anatomischen <?php echo $this->_tpl_vars['lehrtafel_art_plural']; ?>
 leicht und verständlich erfolgen. In anschaulicherweise wird das Thema <?php echo $this->_tpl_vars['title_variante']; ?>
 bildlich veranschaulicht.</p>
					
					<p><?php echo $this->_tpl_vars['artikel']; ?>
 <?php echo $this->_tpl_vars['lehrtafel_art']; ?>
 <?php echo $this->_tpl_vars['laminiert_unlaminiert']; ?>
</p>
					
				<?php else: ?>
					<p><?php echo smarty_function_oxeval(array('var' => $this->_tpl_vars['oLongdesc']), $this);?>
</p>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxexturl->value): ?>
					<a id="productExturl" class="js-external" href="http://<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxexturl->value; ?>
">
					<?php if ($this->_tpl_vars['oDetailsProduct']->oxarticles__oxurldesc->value): ?>
                        <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxurldesc->value; ?>

                    <?php else: ?>
                        <?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxexturl->value; ?>

                    <?php endif; ?>
                    </a>
                <?php endif; ?>
					
            </div>
            <?php $this->assign('blFirstTab', false); ?>
        <?php endif; ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>




    <?php if ($this->_tpl_vars['oView']->getAttributes()): ?>
        <?php ob_start(); ?><a href="#attributes" data-toggle="tab"><?php echo smarty_function_oxmultilang(array('ident' => 'SPECIFICATION'), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabs', ob_get_contents());ob_end_clean(); ?>
        <?php ob_start(); ?>
            <div id="attributes" class="tab-pane<?php if ($this->_tpl_vars['blFirstTab']): ?> active<?php endif; ?>"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/details/inc/attributes.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
            <?php $this->assign('blFirstTab', false); ?>
        <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabsContent', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>



    <?php if ($this->_tpl_vars['oView']->isPriceAlarm() && ! $this->_tpl_vars['oDetailsProduct']->isParentNotBuyable()): ?>
        <?php ob_start(); ?><a href="#pricealarm" data-toggle="tab"><?php echo smarty_function_oxmultilang(array('ident' => 'PRICE_ALERT'), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabs', ob_get_contents());ob_end_clean(); ?>
        <?php ob_start(); ?>
            <div id="pricealarm" class="tab-pane<?php if ($this->_tpl_vars['blFirstTab']): ?> active<?php endif; ?>"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/pricealarm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
            <?php $this->assign('blFirstTab', false); ?>
        <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabsContent', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>






    <?php if ($this->_tpl_vars['oView']->getMediaFiles() || $this->_tpl_vars['oDetailsProduct']->oxarticles__oxfile->value): ?>
        <?php ob_start(); ?><a href="#media" data-toggle="tab"><?php echo smarty_function_oxmultilang(array('ident' => 'MEDIA'), $this);?>
</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabs', ob_get_contents());ob_end_clean(); ?>
        <?php ob_start(); ?>
            <div id="media" class="tab-pane<?php if ($this->_tpl_vars['blFirstTab']): ?> active<?php endif; ?>"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/details/inc/media.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
            <?php $this->assign('blFirstTab', false); ?>
        <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('tabsContent', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>








<!--
    <?php if ($this->_tpl_vars['tabs']): ?>
        <div class="tabbedWidgetBox clear">
            <ul id="itemTabs" class="nav nav-tabs">
                <?php $_from = $this->_tpl_vars['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tab']):
        $this->_foreach['tabs']['iteration']++;
?>
                    <li<?php if (($this->_foreach['tabs']['iteration'] <= 1)): ?> class="active"<?php endif; ?>><?php echo $this->_tpl_vars['tab']; ?>
</li>
                <?php endforeach; endif; unset($_from); ?>
                
            </ul>
            <div class="tab-content">
                <?php $_from = $this->_tpl_vars['tabsContent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabsContent'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabsContent']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tabContent']):
        $this->_foreach['tabsContent']['iteration']++;
?>
                    <?php echo $this->_tpl_vars['tabContent']; ?>

                <?php endforeach; endif; unset($_from); ?>
                
            </div>
        </div>
    <?php endif; ?>
 -->
