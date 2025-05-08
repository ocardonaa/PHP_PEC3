<?php

// extraemos las páginas
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'id';

// obtenemos los videojuegos
$videogames = $query->selectAll('videogames_pec3', 'Videogame');

//saneamos el input de filtro por genero o developer
$filter_developer = filter_input(INPUT_GET, 'filter_developer', FILTER_SANITIZE_STRING);
$filter_developer = $filter_developer != null ? trim($filter_developer) : '';

$filter_genre = filter_input(INPUT_GET, 'filter_genre', FILTER_SANITIZE_STRING);
$filter_genre = $filter_genre != null ? trim($filter_genre) : '';

// llamamos a la query para filtrar por developer o genero
$filtered_query = "select * from videogames_pec3 where developer='{$filter_developer}' or genre='{$filter_genre}'";
$videogames_filtered = $query->sortVideogames($filtered_query, 'Videogame');

// ordenación ascendente o descentende por año de lanzamiento. Default ordena por id del juego
switch ($sort_by) {
    case 'release_asc': 
        $custom_query = "select * from videogames_pec3 order by release_year;";
        $videogames = $query->sortVideogames($custom_query, 'Videogame');
        break;
    case 'release_desc':
        $custom_query = "select * from videogames_pec3 order by release_year desc;";
        $videogames = $query->sortVideogames($custom_query, 'Videogame');
        break;
    default:
        $custom_query = "select * from videogames_pec3";
        $videogames = $query->sortVideogames($custom_query, 'Videogame');
        break;
} 

// lógica de la paginación
$itemsPerPage = 5;
$totalPages = count($videogames) / $itemsPerPage;

if ($currentPage < 1) {
    $currentPage = 1;
} elseif ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}

$startIndex = ($currentPage - 1) * $itemsPerPage;

// decide que juegos mostrar
if ($videogames_filtered != null) {
    $currentVideogames = $videogames_filtered;
}
else {
    $currentVideogames = array_slice($videogames, $startIndex, $itemsPerPage);
}

// llama al front, es decir al php que hace de vista, usando html + css + php
require __DIR__ . '/../views/videojuegos.view.php';