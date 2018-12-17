<html>
<head>
    <title>Listing 6.14</title>
</head>
<body>
<?php
function addFive($num)
{
    $num += 5;
}
$orignum = 10;
addFive(&$orignum);
print($orignum);
?>
</body>
</html>