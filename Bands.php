<?php
$longevita =array(0,0,0,0);
$maxLong = 0;
$minLong = 99999;
//Pink Floyd
$pinkFloyd["nome"]= "Pink Floyd";
$pinkFloyd["nazione"]= "Inghilterra";
$pinkFloyd["genere"]= "progressive rock";
$pinkFloyd["annoI"]= 1965;
$pinkFloyd["annoF"]= 2005;
//AC/DC
$acdc["nome"]= "AC/DC";
$acdc["nazione"]= "Australia";
$acdc["genere"]= "hard rock";
$acdc["annoI"]= 1973;
$acdc["annoF"]=2017;
//Beatles
$beatles["nome"]= "Beatles";
$beatles["nazione"]= "Australia";
$beatles["genere"]= "beat";
$beatles["annoI"]= 1960;
$beatles["annoF"]=1970;
//Led Zeppelin
$led["nome"]="Led Zeppelin";
$led["nazione"]="Inghilterra";
$led["genere"]="blues rock";
$led["annoI"]=1965;
$led["annoF"]=1980;
//band più longeva
$longevita[0]=$pinkFloyd["annoF"]-$pinkFloyd["annoI"];
$longevita[1]=$acdc["annoF"]-$acdc["annoI"];
$longevita[2]=$beatles["annoF"]-$beatles["annoI"];
$longevita[3]=$led["annoF"]-$led["annoI"];
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
echo "La band più longeva sono i ".$maxName.", attivi per ".$maxLong." anni.\n";
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
else
{
	$minName="Led Zeppelin";
}
echo "La band meno longeva sono i ".$minName.", attivi per ".$minLong." anni.";
?>
