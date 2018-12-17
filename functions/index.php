<html>
<head>
    <title>Listing 6.10</title>
</head>
<body>
<?php
$life = 42;
$num_of_calls = 0;
function andAnotherThing($txt)
{
    static $num_of_calls = 0;
    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherThing("Widgets");
print("We build a fine range of widgets<p>");
andAnotherThing("Doodads");
print("Finest in the world<p>");
?>
</body>
</html>