<?php
class Rachunek
{
	public $id;
	public $nazwa;
	public $kwota;
	public $zaplacony;

	
	
	


}

if(isset($_GET['id']))
{
$id=$_GET['id'];
$nowedane;
$plik=file("dane.txt");
foreach($plik as $linia)
{
    $test=explode(',',$linia);
    if($test[0]=="$id")
    {
        $nowalinia=$test[0].",".$test[1].",".$test[2].",tak,\n";
        $nowedane[]=$nowalinia;
    }
    else
    {
        $nowedane[]=$linia;
    }


}
$tekst=trim(($nowedane[count($nowedane)-1]));
$nowedane[count($nowedane)-1]=$tekst;
$plikk=fopen("dane.txt","w");



foreach($nowedane as $linia)
{
   fwrite($plikk,$linia);
  
}
}

$plik=fopen("dane.txt","r");
$j=0;

while(!feof($plik))
{
	$linia=fgets($plik);
	$dane=explode(",",$linia);
	$tablica[$j]=new Rachunek();
	$tablica[$j]->id=$dane[0];
	$tablica[$j]->nazwa=$dane[1];
	$tablica[$j]->kwota=$dane[2];
	$tablica[$j]->zaplacone=$dane[3];
	$j++;

	
}
echo(count($tablica));


function porownaj($a, $b)
	{
		if ($a->zaplacone == $b->zaplacone) {
			return 0;
		}
		if ($a->zaplacone < $b->zaplacone) {
			return -1;
		}
		else
		{ 
			return 1;
		}
	}
usort($tablica, "porownaj");
$suma=0;
$sumaniezaplacone=0;
foreach($tablica as $linia)
{
	$suma+=$linia->kwota;
	if($linia->zaplacone=="nie")
	{
		echo("<tr class=\"red\">");
		$sumaniezaplacone+=$linia->kwota;
	}
	else
	{
		echo("<tr class=\"green\">");
	}
	echo("<td>$linia->nazwa</td><td>$linia->kwota</td><td>");
	if($linia->zaplacone=="nie")
	{
		echo("$linia->zaplacone<a href=\"index.php?id=$linia->id\">-ZAPŁAĆ</a>");
	}
	else
	{
		echo("$linia->zaplacone");
	}
	echo("</td></tr>");

}
echo("<tr><td>Niezapłacone:$sumaniezaplacone</td></tr>");
echo("<tr><td>RAZEM:$suma</td></tr>");


?>