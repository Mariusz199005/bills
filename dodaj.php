<?php
include("head.php");
?>

<form action="dodaj.php" method="post">
    <table>
        <tr>
            <td>Podaj typ rachunku</td><td><input name="nazwa"></td>
        </tr>
        <tr>
            <td>Podaj kwotę rachunku</td><td><input name="kwota"></td>
        </tr>
        <tr>
            <td>Czy zapłacony? </td><td><input type="radio" name="zaplacony" value="tak">Tak
<input type="radio" name="zaplacony" value="nie">Nie</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Dodaj rachunek"></td>
        </tr>
    </table>
</form>
<?php

 if(isset($_POST['submit'])) {
    include("wpiszdopliku.php");
//     $nazwa=$_POST['nazwa'];
// $kwota=$_POST['kwota'];
// $zaplacony=$_POST['zaplacony'];
// $wpis="\r\n".$nazwa.",".$kwota.",".$zaplacony.",";
// $plik=fopen("dane.txt","a");


// fwrite($plik,$wpis);
// echo("Dodano 1 wiersz!");
  } 

?>

<?php
include("foot.php");
?>	