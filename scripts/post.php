<?php

$videogame_id = 0;

if (isset($_GET['id'])) {
    $videogame_id = $_GET['id'];
}

$uri = $_SERVER['REQUEST_URI'];

$videogame_id = strlen($uri) == 12 ? substr($uri, -2) : substr($uri, -1);

$id = htmlspecialchars($videogame_id);

if ($id != 0) {
    $random_videogame = $query->singleVideogame($id, 'videogames_pec3', 'Videogame')[0];
}

require __DIR__ . '/../views/random-videogame.view.php'; 