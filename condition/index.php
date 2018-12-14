<?php
// tingimuslaused
echo '<h4>Tingimuslaused</h4>';
$foor = 'sinine';
switch ($foor){
    case 'punane':
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: orange">kollane!</p>';
        break;
    case 'roheline':
        echo '<p style="color: green">roheline!</p>';
        break;
    default:
        echo '<p>mingi teine!</p>';
        break;
}