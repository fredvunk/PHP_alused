<?php
$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddel',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
    );
for($i = 0; $i < count($kasutajad); $i++){
    echo'<table border="2px black solid">';
    foreach ($kasutajad[$i] as $info) {
        if ($kasutajad[$i][3] == 'female') {
            echo'<tr>';
            echo '<div style="color: red">';
            echo'</tr>';
        } else {
            echo'<tr>';
            echo '<div style="color: blue">';
        }
        echo'</tr>';
        echo $info . '</div>';
        echo'</tr>';
    }
    echo'</table>';
    echo '<hr>';
}