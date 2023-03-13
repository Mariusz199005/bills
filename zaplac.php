<?php

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

echo("$id<br>$test[0]<br>");

foreach($nowedane as $linia)
{
   fwrite($plikk,$linia);
  
}
?>