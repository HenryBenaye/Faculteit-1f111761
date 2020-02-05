<?php
echo("Van welk getal wil je de faculiteit  weten?").PHP_EOL;
$keuze = readline("");
$antwoord = 1;
for($i = 1; $i <= $keuze; $i++){

    $antwoord= $i * $antwoord;
}
echo($antwoord);
?>