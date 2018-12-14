<?php
//header('Refresh: 1');
//// for
///*
// * for($jm = alg; $jm < lopp; $jm++){
// *      tegevused, mis sooritatakse
// *      nii kaua kui tsükli $jm
// *      väärtus on väiksem kui lõppväärtus
// * }
// * */
//echo '<h4>Tsüklid - for</h4>';
//echo '<table>';
//for($rida = 1; $rida <= 5; $rida++){
//    echo '<tr>';
//    for($veerg = 1; $veerg <= 5; $veerg++) {
//        $varv = '#';
//        for($kord = 1; $kord <= 6; $kord++){
//            $varv = $varv.dechex(rand(0,15));
//        }
//        echo '<td style="background: ' . $varv . '">';
//        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
//        echo '</td>';
//    }
//    echo '</tr>';
//}
//echo '</table>';

echo '<hr>';
// korrutustabel
echo '<table style="border-collapse: collapse">';
// ülemine punane riba
for($arv2 = 0; $arv2 <= 10; $arv2++){
    /* if($arv2 == 0){
         $txt = '&nbsp;';
     } else {
         $txt = $arv2;
     }*/
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightgreen">';
    echo $txt;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks punane kast
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcoral">';
    echo $arv1;
    echo '</th>';
    // korrutustabeli elemendid - korrutamise tulemused
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp
echo '<hr>';

$arv = 123;
$numbriteSumma = 0;
while ($arv !=0) {
//    leiame numbri
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
//    valmistame arvu järgmiseks tsükli sammuks
    $arv = $arv / 10;
        settype($arv,  int);
    echo 'Uus arv on '.$arv.'<br>';
//    leiame ka hetkel oleva summa
    $numbriteSumma = $numbriteSumma + $number;
    echo 'Hetkel summa = '.$numbriteSumma.'<br>';
}
echo 'Lõplik summa = '.$numbriteSumma.'<br>';
echo '<hr>';

$arv = 44258755745;
//leia, mitu korda siin esinemas number 5;
$numberKokku = 0;
while ($arv != 0) {
    $number = $arv % 10;
    if($number == 5) {
        $numberKokku = $numberKokku +1; // $numberkokku++;
    }
    $arv = $arv / 10;
    settype($arv, 'int');
}
echo 'Number 5 esineb antud arvus '.$numberKokku.' korda<br>';