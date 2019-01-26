<?php
echo '<h1>Tellimine</h1>';
echo '<h1>Tellimine</h1>';
$radius = $_GET['ruum'];
$radius2 = $_GET['ruum2'];
$radius3 = $_GET['ruum3'];

$area=pi()*$radius*$radius;
echo 'Kera ruumala on: '.$area.'<br>';

const ONE_THIRD = 0.3;
const HEIGHT = 2.5;

$area=ONE_THIRD*$radius2*pi()*$radius2*$radius2*HEIGHT.'<br>';
echo 'Koonuse ruumala on: '.$area.'<br>';

$area=pi()*$radius3*$radius3*HEIGHT.'<br>';
echo 'Silindri ruumala on: '.$area.'<br>';

?>