<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:47
         compiled from widget/adventskalender.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'widget/adventskalender.tpl', 3, false),array('modifier', 'strstr', 'widget/adventskalender.tpl', 176, false),)), $this); ?>


<?php $this->assign('heute', ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y"))); ?>
<?php $this->assign('words', $this->_tpl_vars['oDetailsProduct']->oxarticles__oxartnum->value); ?>

<?php if ($this->_tpl_vars['heute'] == "01.12.2022"): ?>
	<?php $this->assign('produkte', '10501'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 1"); ?>
	<?php $this->assign('artikelname', "die Hipbänder"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "02.12.2022"): ?>
	<?php $this->assign('produkte', '15055'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 2"); ?>
	<?php $this->assign('artikelname', 'den Polsterhocker'); ?>
	<?php $this->assign('rabatt', "20€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "03.12.2022"): ?>
	<?php $this->assign('produkte', "17361,17362"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 3"); ?>
	<?php $this->assign('artikelname', "die Dr. Grimm Wiegands Händedesinfektion"); ?>
	<?php $this->assign('rabatt', "40,09%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "04.12.2022"): ?>
	<?php $this->assign('produkte', '11402'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 4"); ?>
	<?php $this->assign('artikelname', "den Stepper step.compact"); ?>
	<?php $this->assign('rabatt', "16,67%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "05.12.2022"): ?>
	<?php $this->assign('produkte', "15500,15500-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 5"); ?>
	<?php $this->assign('artikelname', 'das Lagerungs Trio set 1'); ?>
	<?php $this->assign('rabatt', "10€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "06.12.2022"): ?>
	<?php $this->assign('produkte', '14380'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 6"); ?>
	<?php $this->assign('artikelname', 'die Mini Massage gun'); ?>
	<?php $this->assign('rabatt', "20€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "07.12.2022"): ?>
	<?php $this->assign('produkte', "14425,14426,14427,14428,14425-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 7"); ?>
	<?php $this->assign('artikelname', "die Triggerbälle"); ?>
	<?php $this->assign('rabatt', "15%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "08.12.2022"): ?>
	<?php $this->assign('produkte', '14363'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 8"); ?>
	<?php $this->assign('artikelname', "das BalanceRoll® Set Maxi 4"); ?>
	<?php $this->assign('rabatt', "9€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "09.12.2022"): ?>
	<?php $this->assign('produkte', '12240'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 9"); ?>
	<?php $this->assign('artikelname', "die Mini Wirbelsäule"); ?>
	<?php $this->assign('rabatt', "15%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "10.12.2022"): ?>
	<?php $this->assign('produkte', "14458,14459,14458-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 10"); ?>
	<?php $this->assign('artikelname', 'den Therapeuten Daumen'); ?>
	<?php $this->assign('rabatt', "25%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "11.12.2022"): ?>
	<?php $this->assign('produkte', '14352'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 11"); ?>
	<?php $this->assign('artikelname', 'das Therapeuten 3er Set'); ?>
	<?php $this->assign('rabatt', "25%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "12.12.2022"): ?>
	<?php $this->assign('produkte', '15376'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 12"); ?>
	<?php $this->assign('artikelname', "das softX® Mobilisationskeil-Set"); ?>
	<?php $this->assign('rabatt', "10%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "13.12.2022"): ?>
	<?php $this->assign('produkte', "10495,10496,10497,10498,10499,10500,10495-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 13"); ?>
	<?php $this->assign('artikelname', "das mini hip.band"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "14.12.2022"): ?>
	<?php $this->assign('produkte', "10520,10521,10522,10523,10524,10525,10526,10527,10528,10529"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 14"); ?>
	<?php $this->assign('artikelname', "die Medizinbälle"); ?>
	<?php $this->assign('rabatt', "10%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "15.12.2022"): ?>
	<?php $this->assign('produkte', "14429,14430,14430-V,14431,14432"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 15"); ?>
	<?php $this->assign('artikelname', "den trigger-peanut.ball"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "16.12.2022"): ?>
	<?php $this->assign('produkte', "15079,15078,15080,15078-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 16"); ?>
	<?php $this->assign('artikelname', 'den Therapiehocker eckig'); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "17.12.2022"): ?>
	<?php $this->assign('produkte', "10001,10003,10005,10007,10001-V"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 17"); ?>
	<?php $this->assign('artikelname', "den physio.stick"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "18.12.2022"): ?>
	<?php $this->assign('produkte', "13513,13513-V,13514,13515,13516"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 18"); ?>
	<?php $this->assign('artikelname', "die gewichts.manschetten soft"); ?>
	<?php $this->assign('rabatt', "10%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "19.12.2022"): ?>
	<?php $this->assign('produkte', '14381'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 19"); ?>
	<?php $this->assign('artikelname', "die physio.gun"); ?>
	<?php $this->assign('rabatt', "50€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "20.12.2022"): ?>
	<?php $this->assign('produkte', "17233,17233_1,17233_2,17233_3,17233_4"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 20"); ?>
	<?php $this->assign('artikelname', "das squeezy arm.band"); ?>
	<?php $this->assign('rabatt', "2€"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "21.12.2022"): ?>
	<?php $this->assign('produkte', '11360'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 21"); ?>
	<?php $this->assign('artikelname', "das speed. rope pro"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "22.12.2022"): ?>
	<?php $this->assign('produkte', "13190,13190-V,13191,13192,13193,13194,13195,13197"); ?>
	<?php $this->assign('tuer', "Türchen Nummer 22"); ?>
	<?php $this->assign('artikelname', "die dumb.bell"); ?>
	<?php $this->assign('rabatt', "20%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "23.12.2022"): ?>
	<?php $this->assign('produkte', '10519'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 23"); ?>
	<?php $this->assign('artikelname', 'das Medizinball Set'); ?>
	<?php $this->assign('rabatt', "10%"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['heute'] == "24.12.2022"): ?>
	<?php $this->assign('produkte', '15171'); ?>
	<?php $this->assign('tuer', "Türchen Nummer 24"); ?>
	<?php $this->assign('artikelname', 'die Behandlungsbank plusX hydraulik'); ?>
	<?php $this->assign('rabatt', "200€"); ?>
<?php endif; ?>



<?php if (((is_array($_tmp=$this->_tpl_vars['produkte'])) ? $this->_run_mod_handler('strstr', true, $_tmp, $this->_tpl_vars['words']) : strstr($_tmp, $this->_tpl_vars['words']))): ?>
	<img src="https://www.physioexpress.de/out/flow/img/mini_weihnachten_adventskalender_product.jpg" style="width:100%;"><br><br>
	<div class="ausstellungstuecke">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<p><b><?php echo $this->_tpl_vars['tuer']; ?>
</b></p>
		<p>Bist du auch schon in Weihnachtsstimmung? Wir freuen uns ungemein auf Weihnachten und können es kaum abwarten. Um die die vorweihnachtliche Zeit zu verkürzen, bieten wir dir einen Adventskalender an, bei dem du täglich ordentlich sparen kannst.
		Im heutigem Türchen findest du <b><?php echo $this->_tpl_vars['artikelname']; ?>
</b>. Du bekommst heute den ganzen Tag nochmals <b><?php echo $this->_tpl_vars['rabatt']; ?>
</b> Rabatt auf diesen Artikel.</p>
	</div>
	<br><br>
<?php endif; ?>
