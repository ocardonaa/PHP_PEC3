<?php

$rand_arr = array(1,2);

$i = 3;
while ($i != 0) {
    $rand_int = rand(3, 10);
    if (!in_array($rand_int, $rand_arr)) {
        array_push($rand_arr, $rand_int);
        $i--;
    }
}

$videogames_arr = array();

for ($i = 0; $i < count($rand_arr); $i++) {
    $random_videogame = $query->singleVideogame($rand_arr[$i], 'videogames_pec3', 'Videogame')[0];
    array_push($videogames_arr, $random_videogame);
}

require __DIR__ .  '/../views/index.view.php';