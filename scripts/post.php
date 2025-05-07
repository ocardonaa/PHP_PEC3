<?php

require __DIR__ . '/../config/bootstrap.php';
require __DIR__ . '/../database/Videogame.php';

$videogame_id = 0;

if (isset($_GET['id'])) {
    $videogame_id = $_GET['id'];
}

$id = htmlspecialchars($videogame_id);

if ($id != 0) {
    $random_videogame = $query->singleVideogame($id, 'videogames_pec3', 'Videogame')[0];
}

require __DIR__ . '/../views/random-videogame.view.php'; 

?>