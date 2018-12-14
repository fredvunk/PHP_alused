<?php
header('Refresh: 1');
// for
/*
 * for($jm = alg; $jm < lopp; $jm++){
 *      tegevused, mis sooritatakse
 *      nii kaua kui tsükli $jm
 *      väärtus on väiksem kui lõppväärtus
 * }
 * */
echo '<h4>Tsüklid - for</h4>';
echo '<table>';
for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';