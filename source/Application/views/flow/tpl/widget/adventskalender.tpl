[{block name="dd_widget_adventskalender"}]

[{assign var="heute" value=$smarty.now|date_format:"%d.%m.%Y"}]
[{assign var="words" value=$oDetailsProduct->oxarticles__oxartnum->value}]

[{if $heute == "01.12.2022"}]
	[{assign var=produkte value="10501"}]
	[{assign var=tuer value="Türchen Nummer 1"}]
	[{assign var=artikelname value="die Hipbänder"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "02.12.2022"}]
	[{assign var=produkte value="15055"}]
	[{assign var=tuer value="Türchen Nummer 2"}]
	[{assign var=artikelname value="den Polsterhocker"}]
	[{assign var=rabatt value="20€"}]
[{/if}]

[{if $heute == "03.12.2022"}]
	[{assign var=produkte value="17361,17362"}]
	[{assign var=tuer value="Türchen Nummer 3"}]
	[{assign var=artikelname value="die Dr. Grimm Wiegands Händedesinfektion"}]
	[{assign var=rabatt value="40,09%"}]
[{/if}]

[{if $heute == "04.12.2022"}]
	[{assign var=produkte value="11402"}]
	[{assign var=tuer value="Türchen Nummer 4"}]
	[{assign var=artikelname value="den Stepper step.compact"}]
	[{assign var=rabatt value="16,67%"}]
[{/if}]

[{if $heute == "05.12.2022"}]
	[{assign var=produkte value="15500,15500-V"}]
	[{assign var=tuer value="Türchen Nummer 5"}]
	[{assign var=artikelname value="das Lagerungs Trio set 1"}]
	[{assign var=rabatt value="10€"}]
[{/if}]

[{if $heute == "06.12.2022"}]
	[{assign var=produkte value="14380"}]
	[{assign var=tuer value="Türchen Nummer 6"}]
	[{assign var=artikelname value="die Mini Massage gun"}]
	[{assign var=rabatt value="20€"}]
[{/if}]

[{if $heute == "07.12.2022"}]
	[{assign var=produkte value="14425,14426,14427,14428,14425-V"}]
	[{assign var=tuer value="Türchen Nummer 7"}]
	[{assign var=artikelname value="die Triggerbälle"}]
	[{assign var=rabatt value="15%"}]
[{/if}]

[{if $heute == "08.12.2022"}]
	[{assign var=produkte value="14363"}]
	[{assign var=tuer value="Türchen Nummer 8"}]
	[{assign var=artikelname value="das BalanceRoll® Set Maxi 4"}]
	[{assign var=rabatt value="9€"}]
[{/if}]

[{if $heute == "09.12.2022"}]
	[{assign var=produkte value="12240"}]
	[{assign var=tuer value="Türchen Nummer 9"}]
	[{assign var=artikelname value="die Mini Wirbelsäule"}]
	[{assign var=rabatt value="15%"}]
[{/if}]

[{if $heute == "10.12.2022"}]
	[{assign var=produkte value="14458,14459,14458-V"}]
	[{assign var=tuer value="Türchen Nummer 10"}]
	[{assign var=artikelname value="den Therapeuten Daumen"}]
	[{assign var=rabatt value="25%"}]
[{/if}]

[{if $heute == "11.12.2022"}]
	[{assign var=produkte value="14352"}]
	[{assign var=tuer value="Türchen Nummer 11"}]
	[{assign var=artikelname value="das Therapeuten 3er Set"}]
	[{assign var=rabatt value="25%"}]
[{/if}]

[{if $heute == "12.12.2022"}]
	[{assign var=produkte value="15376"}]
	[{assign var=tuer value="Türchen Nummer 12"}]
	[{assign var=artikelname value="das softX® Mobilisationskeil-Set"}]
	[{assign var=rabatt value="10%"}]
[{/if}]

[{if $heute == "13.12.2022"}]
	[{assign var=produkte value="10495,10496,10497,10498,10499,10500,10495-V"}]
	[{assign var=tuer value="Türchen Nummer 13"}]
	[{assign var=artikelname value="das mini hip.band"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "14.12.2022"}]
	[{assign var=produkte value="10520,10521,10522,10523,10524,10525,10526,10527,10528,10529"}]
	[{assign var=tuer value="Türchen Nummer 14"}]
	[{assign var=artikelname value="die Medizinbälle"}]
	[{assign var=rabatt value="10%"}]
[{/if}]

[{if $heute == "15.12.2022"}]
	[{assign var=produkte value="14429,14430,14430-V,14431,14432"}]
	[{assign var=tuer value="Türchen Nummer 15"}]
	[{assign var=artikelname value="den trigger-peanut.ball"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "16.12.2022"}]
	[{assign var=produkte value="15079,15078,15080,15078-V"}]
	[{assign var=tuer value="Türchen Nummer 16"}]
	[{assign var=artikelname value="den Therapiehocker eckig"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "17.12.2022"}]
	[{assign var=produkte value="10001,10003,10005,10007,10001-V"}]
	[{assign var=tuer value="Türchen Nummer 17"}]
	[{assign var=artikelname value="den physio.stick"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "18.12.2022"}]
	[{assign var=produkte value="13513,13513-V,13514,13515,13516"}]
	[{assign var=tuer value="Türchen Nummer 18"}]
	[{assign var=artikelname value="die gewichts.manschetten soft"}]
	[{assign var=rabatt value="10%"}]
[{/if}]

[{if $heute == "19.12.2022"}]
	[{assign var=produkte value="14381"}]
	[{assign var=tuer value="Türchen Nummer 19"}]
	[{assign var=artikelname value="die physio.gun"}]
	[{assign var=rabatt value="50€"}]
[{/if}]

[{if $heute == "20.12.2022"}]
	[{assign var=produkte value="17233,17233_1,17233_2,17233_3,17233_4"}]
	[{assign var=tuer value="Türchen Nummer 20"}]
	[{assign var=artikelname value="das squeezy arm.band"}]
	[{assign var=rabatt value="2€"}]
[{/if}]

[{if $heute == "21.12.2022"}]
	[{assign var=produkte value="11360"}]
	[{assign var=tuer value="Türchen Nummer 21"}]
	[{assign var=artikelname value="das speed. rope pro"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "22.12.2022"}]
	[{assign var=produkte value="13190,13190-V,13191,13192,13193,13194,13195,13197"}]
	[{assign var=tuer value="Türchen Nummer 22"}]
	[{assign var=artikelname value="die dumb.bell"}]
	[{assign var=rabatt value="20%"}]
[{/if}]

[{if $heute == "23.12.2022"}]
	[{assign var=produkte value="10519"}]
	[{assign var=tuer value="Türchen Nummer 23"}]
	[{assign var=artikelname value="das Medizinball Set"}]
	[{assign var=rabatt value="10%"}]
[{/if}]

[{if $heute == "24.12.2022"}]
	[{assign var=produkte value="15171"}]
	[{assign var=tuer value="Türchen Nummer 24"}]
	[{assign var=artikelname value="die Behandlungsbank plusX hydraulik"}]
	[{assign var=rabatt value="200€"}]
[{/if}]



[{if $produkte|strstr:$words}]
	<img src="https://www.physioexpress.de/out/flow/img/mini_weihnachten_adventskalender_product.jpg" style="width:100%;"><br><br>
	<div class="ausstellungstuecke">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<p><b>[{$tuer}]</b></p>
		<p>Bist du auch schon in Weihnachtsstimmung? Wir freuen uns ungemein auf Weihnachten und können es kaum abwarten. Um die die vorweihnachtliche Zeit zu verkürzen, bieten wir dir einen Adventskalender an, bei dem du täglich ordentlich sparen kannst.
		Im heutigem Türchen findest du <b>[{$artikelname}]</b>. Du bekommst heute den ganzen Tag nochmals <b>[{$rabatt}]</b> Rabatt auf diesen Artikel.</p>
	</div>
	<br><br>
[{/if}]

[{/block}]