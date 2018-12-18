<?php
$kasutajad = array(); // tühi massiiv
// andmete lisamine
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
$lisaKasutajad = array('mark', 'george');

// massiivi pikkus
$kasutajadKokku = count($kasutajad);
for($i = 0; $i < 3; $i++) {
    echo $kasutajad[$i].'<br>';
}

array_shift($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++) {
    echo $kasutajad[$i].'<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for($i = 0; $i < count($uuedKasutajad); $i++) {
    echo $uuedKasutajad[$i].'<br>';
}

echo '<hr>';

foreach ($uuedKasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
}