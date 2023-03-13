<?php
$nazwa=$_POST['nazwa'];
$kwota=$_POST['kwota'];
$zaplacony=$_POST['zaplacony'];
$plik=file('dane.txt');
$ile=count($plik)-1;
$id=explode(",",$plik[$ile])[0];
$id++;


$wpis="\n".$id.",".$nazwa.",".$kwota.",".$zaplacony.",";
$plikk=fopen("dane.txt","a");


fwrite($plikk,$wpis);
echo("Dodano rachunek!");
//header("index.php");
?>
