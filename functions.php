<?php

function lista($songs) {

    for ($i = 0; $i <= 9; $i++) {
        echo $songs[$i];
        echo "<br/>";
    } 

};

function listan($songArray) {

    foreach ($songArray as $value) {
        echo $value["namn"]. $value["poäng"]. "<br>";
    }

};

// createSongArray = ($songName $songPoints) {

// }



?>