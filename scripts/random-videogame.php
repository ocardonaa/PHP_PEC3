<?php

$rand_id = rand(1,10);
$random_videogame = $query->singleVideogame($rand_id, 'videogames_pec3', 'Videogame')[0];

require __DIR__ . '/../views/random-videogame.view.php';