<!doctype html>
<html>
<head>
    <title>PHP - väljastus</title>
</head>
<body>
<h1>About1</h1>
<menu>
    <a href="about1.php">About1</a>
    <a href="about2.php">About2</a>
    <a href="about3.php">About3</a>
    <a href="about4.php">About4</a>
    <a href="about5.php">About5</a>
</menu>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('about2','about3','about4');
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