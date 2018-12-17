<html>
<head>
    <title>Listing 6.8</title>
</head>
<body>
<?php
$life = 42;
function meaningOfLife()
{
    global $life;
    print "The meaning of life is $life<br>";
}
meaningOfLife();
?>
</body>
</html>