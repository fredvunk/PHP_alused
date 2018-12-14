<?php

/*function funktsiooniNimi($param1, $param2, ...$paramN) { tegevused, mis toimuvad fn sees }*/



function numbriKordumine($arv, $kontrollNumber) {
    //leia, mitu korda siin esinemas number 5;
    $numberKokku = 0;
    while ($arv != 0) {
        $number = $arv % 10;
        if($number == $kontrollNumber) {
            $numberKokku = $numberKokku +1; // $numberkokku++;
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.' korda<br>';
}
numbriKordumine(44258755745, 5);
