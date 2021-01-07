<?php

    // indexed array
    $names = array('Turki','Ahmad','Ali','Saad');

    foreach($names as $name) {
        echo $name . '<br>';
    }



    // associative array
    $nicknames = array('Abu Saad' => 'Turki', 'Abu Turki' => 'Saad');

    foreach($nicknames as $key => $value) {
        echo $key . '<br>';
    }