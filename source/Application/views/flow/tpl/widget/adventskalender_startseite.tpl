[{block name="dd_widget_adventskalender"}]

[{assign var="heute" value=$smarty.now|date_format:"%Y%m%d"}]
[{assign var="words" value=$oDetailsProduct->oxarticles__oxartnum->value}]

[{if $heute == "28.11.2022"}]
	[{assign var=produkte value="17344-V,17344,17338,17352"}]
[{/if}]


[{if $produkte|strstr:$words}]
	adventskalender
[{/if}]


<div class="container-fluid adventskalender_start">
	<img src="out/flow/img/adventskalender_heading_bild.jpg" id="headerbild_adventsmarkt">
	<div class="adventskalender_main">
		<div class="adv_text">Machen Sie sich bereit für Wehnachten! Diesen Monat haben wir einige tolle Angebote auf unsere Website. Verpassen Sie nicht unsere Weihnachts-DEALS und sparen Sie bis zu 40% auf ausgewählte Artikel.</div>
		<div class="adv_angebote">
			<div class="adv_produkt">
				<div class="kalender_tag">1</div>
				[{if $heute <= "20221201"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Tubes-und-Uebungsbaender/top-vit-hip-band-3er-Set.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/hip_band_set_fitness-baender__resistance_bands_01.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/01_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">2</div>
				[{if $heute <= "20221202"}]
				<a href="https://www.physioexpress.de/Behandlungsliegen/Hocker/Hoehenverstellbar/Therapiehocker-Physiotherapie-mit-Rollen.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/therapiehocker_physiotherapie_mit_rollen.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/02_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">3</div>
				[{if $heute <= "20221203"}]
				<a href="https://www.physioexpress.de/Praxisorganisation/Seifen-Desinfektion/Dr-Grimm-Wiegand-s-Haendedesinfektion.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/17361_dr.grimmwiegands_hndedesinfektion_500ml_weboptimiert.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/03_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">4</div>
				[{if $heute <= "20221204"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Balance-Gleichgewicht-Koordination/Stepboards/top-vit-step-compact.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/11402_aerobic_step.compact(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/04_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">5</div>
				[{if $heute <= "20221205"}]
				<a href="https://www.physioexpress.de/Behandlungsliegen/Lagerungsmaterial/Lagerungs-Trio-Set-1.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/eisblau(12).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/05_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">6</div>
				[{if $heute <= "20221206"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Massage-Guns/mini-massagepistole.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/mini_massagepistole_massagegun_01.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/06_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">7</div>
				[{if $heute <= "20221207"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Triggerpunkt-Therapie/top-vit-trigger-ball-hellblau-soft.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14425_triggerball_eshop(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/07_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">8</div>
				[{if $heute <= "20221208"}]
				<a href="https://www.physioexpress.de/BalanceRoll-Set-Maxi-4.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14363_balanceroll_set_maxi4.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/08_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">9</div>
				[{if $heute <= "20221209"}]
				<a href="https://www.physioexpress.de/Anatomie/Anatomische-Modelle/Mini-Wirbelsaeule.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/12240_miniwirbelsaeule1.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/09_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">10</div>
				[{if $heute <= "20221210"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Handtherapie/Therapeuten-Daumen/care-harmony-therapeuten-daumen.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14458_care_harmony_therapeutendaumen_allefarben.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/10_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">11</div>
				[{if $heute <= "20221211"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Reflexhammer-Winkelmesser/Therapeuten-3er-Set.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14352_therapeutenset_3er.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/11_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">12</div>
				[{if $heute <= "20221212"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Mobilisationshilfen/softX-Mobilisationskeil-Set.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/15376_softx_mobilisationskeilset.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/12_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">13</div>
				[{if $heute <= "20221213"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Tubes-und-Uebungsbaender/Mini-Resistenzbaender-Hip-Band.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/10500_mini.hip.band_5erset(2)(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/13_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">14</div>
				[{if $heute <= "20221214"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Medizinbaelle/top-vit-medizin-baelle.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/10519-10529_medizin.ball_gruppe(2).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/14_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">15</div>
				[{if $heute <= "20221215"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Triggerpunkt-Therapie/top-vit-trigger-peanut-ball.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14430-14432_topvit_trigger_penautball_alle2.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/15_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">16</div>
				[{if $heute <= "20221216"}]
				<a href="https://www.physioexpress.de/Behandlungsliegen/Hocker/Hocker/Therapiehocker-eckig.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/3erandre.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/16_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">17</div>
				[{if $heute <= "20221217"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Tubes-und-Uebungsbaender/top-vit-physio-stick.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/gymnastikstab_mit_seilen_fitnessstab.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/17_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">18</div>
				[{if $heute <= "20221218"}]
				<a href="https://www.physioexpress.de/Trainingstherapie/Hanteln-und-Gewichte/top-vit-gewichts-manschetten-soft.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/topvitgewichtsmanschetten.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/18_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">19</div>
				[{if $heute <= "20221219"}]
				<a href="https://www.physioexpress.de/Therapiebedarf/Massage-Guns/top-vit-physio-gun.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/14381_topvit_physio.gun(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/19_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">20</div>
				[{if $heute <= "20221220"}]
				<a href="https://www.physioexpress.de/Praxisorganisation/Seifen-Desinfektion/top-vit-squeezy-armband.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/hygiene_armband_desinfektion_hygienearmband.jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/20_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">21</div>
				[{if $heute <= "20221221"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Turn-und-Gymnastikzubehoer/top-vit-speed-rope-Professional-Profi-Springseil.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/11360_speed.ropeprofessional(2).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/21_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">22</div>
				[{if $heute <= "20221222"}]
				<a href="https://www.physioexpress.de/Trainingstherapie/Hanteln-und-Gewichte/top-vit-dumb-bell.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/13191_topvit_dumb.bell_apple(1).png">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/22_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">23</div>
				[{if $heute <= "20221223"}]
				<a href="https://www.physioexpress.de/Gymnastikartikel/Medizinbaelle/top-vit-medizin-ball-Set.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/1/130_130_70/10519-10529_medizin.ball_gruppe(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/23_cross.jpg">
				[{/if}]
			</div>
			<div class="adv_produkt">
				<div class="kalender_tag">24</div>
				[{if $heute <= "20221224"}]
				<a href="https://www.physioexpress.de/Behandlungsliegen/Therapieliegen/pader-pluSX-2-0-Hydraulik-zweiteilig.html">
					<img src="https://www.physioexpress.de/out/pictures/generated/product/2/130_130_70/15171_behandlungsbank_elektrisch_therapiebank_weiss_12_bordeaux(1).jpg">
				</a>
				[{else}]
					<img src="https://www.physioexpress.de/out/flow/img/24_cross.jpg">
				[{/if}]
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>


[{/block}]