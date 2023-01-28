<?php
$con = mysqli_connect("localhost", "d0343f6a", "4F6T6QoE9x5r2My5", "d0343f6a");
if(!$con)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

//$artikelnummern = array("15130", "15131", "15285", "15293");

$artikelnummern = file_get_contents('art_num_physio.txt');

$sql = "SELECT DISTINCT
			article.OXTITLE as Artikelname,
			article.OXARTNUM as Artikelnummer,
			article.OXEAN as EAN,
			article.OXSHORTDESC as Beschreibung,
			article.OXPRICE as Nettopreis,
			CONCAT('https://www.physioexpress.de/out/pictures/generated/product/1/750_750_70/' , article.OXPIC1) as GrossesBild,
			CONCAT('https://www.physioexpress.de/out/pictures/master/product/1/' , article.OXPIC1) as KleinesBild,
			article.OXPIC1 as BildUrl,
			article.OXID as ID
		FROM 
			oxarticles as article,
			oxseo as seo
		WHERE
			article.OXID = seo.OXOBJECTID AND
			article.OXPARENTID = '' AND
			article.OXACTIVE = '1' AND
			article.OXARTNUM IN (".$artikelnummern.") AND
			seo.OXEXPIRED = '0' AND
			seo.OXSEOURL NOT LIKE '%Hersteller%'
		";
//print $sql;
$res = mysqli_query($con, $sql);
$fp = fopen('daten_physio_de.csv', 'w');
$ueberschrift = array('Artikelname', 'Artikelnummer', 'EAN', 'Beschreibung', 'Nettopreis', 'GrossesBild', 'KleinesBild', 'URL');
fputcsv($fp, $ueberschrift);
while($data = mysqli_fetch_array($res)){
	$artikelname = $data['Artikelname'];
	$artikelnummer = substr($data['Artikelnummer'],0,5);
	$ean = $data['EAN'];
	$beschreibung = $data['Beschreibung'];
	$nettopreis = str_replace(".",",",$data['Nettopreis']);
	
	print $nettopreis."<br>";
	
	if(!file_exists("../out/pictures/master/product/1/".$data['BildUrl'])){
		$grossesBild = "";
	}else{
		$grossesBild = $data['GrossesBild'];
	}
	
	if(!file_exists("../out/pictures/generated/product/1/750_750_70/".$data['BildUrl'])){
		$kleinesBild = "";
	}else{
		$kleinesBild = $data['KleinesBild'];
	}
	
	$sql2 = "SELECT * FROM oxseo WHERE OXOBJECTID = '".$data['ID']."' ORDER BY OXFIXED DESC, OXTIMESTAMP DESC LIMIT 0,1";
	//print $sql2."<br>";
	$res2 = mysqli_query($con, $sql2);
	
	//print_r($res2);
	$data2 = mysqli_fetch_array($res2);
	
	$url = 'https://www.physioexpress.de/'.$data2['OXSEOURL'];
	
	
	$daten = array($artikelname, $artikelnummer, $ean, $beschreibung, $nettopreis, $grossesBild, $kleinesBild, $url);
	fputcsv($fp, $daten);
}

fclose($fp);
/*
			article.OXTITLE as Artikelname,
			article.OXARTNUM as Artikelnummer,
			article.OXEAN as EAN,
			article.OXSHORTDESC as Beschreibung,
			article.OXPRICE as Nettopreis,
			CONCAT('https://www.physioexpress.de/out/pictures/generated/product/1/750_750_70/' , article.OXPIC1) as GrossesBild,
			CONCAT('https://www.physioexpress.de/out/pictures/generated/product/1/' , article.OXPIC1) as KleinesBild, 
			CONCAT('https://www.physioexpress.de/' , seo.OXSEOURL) as URL 
*/

?>