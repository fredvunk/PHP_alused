<html>
<head>
    <title>Listing 6.12</title>
</head>
<body>
<?php
function fontWrap($txt, $size=3)
{
    print "<font size=\"$size\"face=\"Helvetica,Arial,Sans-serif\">$txt</font>";
}
fontWrap("A heading<br>",5);
fontWrap("some body text<br>");
fontWrap("some more body text<br>");
fontWrap("yet more body text<br>");
?>
</body>
</html>