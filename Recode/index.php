<!doctype html>
<html>
<head>
    <title>PHP - väljastus</title>
</head>
<body>
<h1>Avaleht</h1>
<menu>
    <a href="index.php">Avaleht</a>
    <a href="kaart.php?leht=kaart">Kaart</a>
    <a href="kontakt.php?leht=kontakt">Kontakt</a>
    <a href="portfoolio.php?leht=portfoolio">Portfoolio</a>
</menu>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    ?>
    <h2>Tere</h2>
    <?php
}
?>
</body>
</html>