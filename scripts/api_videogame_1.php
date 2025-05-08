<?php

$uri= $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$id = substr($uri, -1);
$videogame = $query->singleVideogame($id, 'videogames_pec3', 'Videogame')[0];
echo json_encode($videogame, JSON_PRETTY_PRINT);