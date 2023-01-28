<?php
set_time_limit(500000);
$seite = "https://www.physioexpress.de/";
$maxdurchlauefe = 3; // max = 5

$urls  = array();

$notUrls = array(
			"https://www.physioexpress.de/out/",
			"https://www.physioexpress.de/index.php?cl",
			"https://www.physioexpress.de/modules/",
			"http://schema.org/",
			"mailto:",
			"#",
			"http://neu.physioexpress.de/",
			"https://ec.europa.eu/odr",
			"https://www.bmu.de/",
			"https://www.mercateo.com",
			"https://www.sport-tec.de",
			"?pgNr",
			"https://physioexpress.de/",
			"https://www.physioexpress.de/Nach-Hersteller/",
			"searchparam",
			"_artperpage"
				);


findeUrls($seite);
findeUrls("https://www.physioexpress.de/Gymnastikartikel/",1);
findeUrls("https://www.physioexpress.de/Gymnastikartikel/",1);

function findeUrls($url){
	global $notUrls;
	global $urls;
	$html_str = file_get_contents($url);
	preg_match_all('/href="(.*?)"/s',$html_str,$a);
	foreach ($a[1] as $value) {
		$check = true;
		foreach($notUrls as $value2){
			if(strpos($value,$value2)!==false){
				$check = false;
			}
		}
		if($check){
			if(!in_array($value,$urls)){
				if(strpos($seite,$value)!==true){
					$urls[] = $value;
				}
			}
		}
	}	
}


if($maxdurchlauefe >= 2){
	foreach($urls as $value){
		findeUrls($value);
	}
}

if($maxdurchlauefe >= 3){
	foreach($urls as $value){
		findeUrls($value);
	}
}

if($maxdurchlauefe >= 4){
	foreach($urls as $value){
		findeUrls($value);
	}
}

if($maxdurchlauefe >= 5){
	foreach($urls as $value){
		findeUrls($value);
	}
}

$handle = fopen ("sitemap.xml", "w");
$inhalt = '<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	';
foreach($urls as $value){
	$zufall =  rand(0, 60);
	$heute = time() - ($zufall*60*60*24);
	$datum = date("Y-m-d",$heute);
	$inhalt .= '<url>
		<loc>'.$value.'</loc>
		<lastmod>'.$datum.'</lastmod>
		<changefreq>monthly</changefreq>
	</url>
';
}
$inhalt .= '</urlset>';
fwrite ($handle, $inhalt);
fclose ($handle);

print $inhalt;
?>