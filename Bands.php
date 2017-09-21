<?php
$longevita = array (0,0,0,0);
$maxLong = 0;
$minLong = 99999;
$count = 0;
//Pink Floyd
$pinkFloyd["nome"]= "Pink Floyd";
$pinkFloyd["genere"]= "progressive rock";
$pinkFloyd["annoI"]= 1965;
$pinkFloyd["annoF"]= 2005;
//AC/DC
$acdc["nome"]= "AC/DC";
$acdc["genere"]= "hard rock";
$acdc["annoI"]= 1973;
$acdc["annoF"]=2017;
//Beatles
$beatles["nome"]= "Beatles";
$beatles["genere"]= "beat";
$beatles["annoI"]= 1960;
$beatles["annoF"]=1970;
//Led Zeppelin
$led["nome"]="Led Zeppelin";
$led["genere"]="blues rock";
$led["annoI"]=1965;
$led["annoF"]=1980;
//band più longeva
$longevita[0]=$pinkFloyd["annoF"]-$pinkFloyd["annoI"];
$longevita[1]=$acdc["annoF"]-$acdc["annoI"];
$longevita[2]=$beatles["annoF"]-$beatles["annoI"];
$longevita[3]=$led["annoF"]-$led["annoI"];
echo "ANALIZZIAMO LE INFORMAZIONI DI 4 BAND: PINK FLOYD, AC/DC, BEATLES E ROLLING STONES \n\n\n";
for($i = 0 ; $i<4; $i++)
{
	if($maxLong<$longevita[$i])
	{
		$maxLong=$longevita[$i];
	}
}
if($maxLong==$longevita[0])
{
	$maxName="Pink Floyd";
}
else if($maxLong==$longevita[1])
{
	$maxName="AC/DC";
}
else if($maxLong==$longevita[2])
{
	$maxName="Beatles";
}
else
{
	$maxName="Led Zeppelin";
}
echo "La band più longeva sono gli ".$maxName.", attivi per ".$maxLong." anni.\n";
//band meno longeva
for($i = 0 ; $i<4; $i++)
{
	if($minLong>$longevita[$i])
	{
		$minLong=$longevita[$i];
	}
}
if($minLong==$longevita[0])
{
	$minName="Pink Floyd";
}
else if($minLong==$longevita[1])
{
	$minName="AC/DC";
}
else if($minLong==$longevita[2])
{
	$minName="Beatles";
}
else if($minLong==$longevita[3])
{
	$minName="Led Zeppelin";
}
echo "La band meno longeva sono i ".$minName.", attivi per ".$minLong." anni.\n";
$sum = $longevita[0]+$longevita[1]+$longevita[2]+$longevita[3];
$media = $sum / 4;
echo "La media del periodo di attività delle 4 band è ".$media." anni.\n\n";
echo "Andiamo ora a vedere il principale genere musicale per ogni band: \n";
echo $pinkFloyd["nome"].": ".$pinkFloyd["genere"]."\n";
echo $acdc["nome"].": ".$acdc["genere"]."\n";
echo $beatles["nome"].": ".$beatles["genere"]."\n";
echo $led["nome"].": ".$led["genere"]."\n";
?>
