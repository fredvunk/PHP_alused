<?php
$kasutajad = array(); // tühi massiiv
// andmete lisamine
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
$lisaKasutajad = array('mark', 'george');
echo '<pre>';
print_r($kasutajad);
print_r($lisaKasutajad);
echo '</pre>';
//var_dump($kasutajad);