<?php
$allikas = 'pallivise.csv';
$minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($minu_csv)){
    $rida = fgetcsv($minu_csv, filesize($allikas),';');
    $arv = count($rida); //rea väljade arv
    echo $jrk.'. '; //järjekorra nr
    $jrk++;
    for($i = 0; $i<$arv; $i++){
        echo $rida[$i].' ';
    }
    echo '<br>';
}
fclose($minu_csv);

