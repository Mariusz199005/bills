<?php
//$plik=fopen("dane.txt",r);



$plik=file('dane.txt');
$ile=count($plik)-1;
//$tablica=explode(",",$plik[$ile]);
///$id=$tablica[0];
///echo($id);

$id=explode(",",$plik[$ile])[0];
echo($id);
?>