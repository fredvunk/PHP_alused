<html>
<head>
    <title>Listing 6.11</title>
</head>
<body>
<?php
function fontWrap($txt, $size)
{
    print "<font size=\"$size\"face=\"Helvetica,Arial,Sans-serif\">$txt</font>";
}
fontWrap("A heading<br>",5);
fontWrap("some body text<br>",3);
fontWrap("some more body text<br>",3);
fontWrap("yet more body text<br>",3);
?>
</body>
</html>