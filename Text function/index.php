<?php
// sisend->mARIO; väljund --> Tere, Mario!

$tekst = 'mARIO';
echo 'Tere, '.ucfirst(strtolower($tekst)).'<br>';

// sisend --> stalker, väljund --> S.T.A.L.K.E.R

$kiri = 'stalker';
echo strtoupper($kiri[0]);
echo '.'.strtoupper($kiri[1]);
echo '.'.strtoupper($kiri[2]);
echo '.'.strtoupper($kiri[3]);
echo '.'.strtoupper($kiri[4]);
echo '.'.strtoupper($kiri[5]);
echo '.'.strtoupper($kiri[6]).'<br>';

// sisend--> noob, väljund --> ****
$ules = 'sa oled noob';
$asendus = '****';
$otsitav_algus = 8;
$otsitav_pikkus = 4;
echo substr_replace($ules, $asendus, $otsitav_algus, $otsitav_pikkus).'<br>';

// sisend --> Ülle ja Doos, vljund --> ylle.doos@khk.edu.ee

$nimi_pere = "Ülle Doos";
$alg_tahed = array('Ü', 'ö','õ');
$muut_tahed= array('u', 'o','o');
$nimi_pere_ok = strtolower(str_replace($alg_tahed, $muut_tahed, $nimi_pere));
echo "Nimi, ilma keelatud tähtedeta: ".$nimi_pere_ok;
echo '<br>';
$nimed = str_word_count($nimi_pere_ok, 1);
$eesnimi = $nimed[0];
$perenimi = $nimed[1];
echo 'eesnimi: '.$eesnimi;
echo '<br>';
echo 'perenimi: '.$perenimi;
//emaili loomine
echo '<br>';
$email = $eesnimi.'.'.$perenimi.'@khk.ee';
echo 'Email: '.$email;