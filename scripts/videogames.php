<?php

require 'functions/sanitize_input.php';

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'id';

$videogames = $query->selectAll('videogames_pec3', 'Videogame');

$filter_developer = sanitize($filter_developer, 'filter_developer');

$filter_genre = sanitize($filter_genre, 'filter_genre');

$filtered_query = "select * from videogames_pec3 where developer='{$filter_developer}' or genre='{$filter_genre}'";
$videogames_filtered = $query->sortVideogames($filtered_query, 'Videogame');

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

$itemsPerPage = 5;
$totalPages = count($videogames) / $itemsPerPage;

if ($currentPage < 1) {
    $currentPage = 1;
} elseif ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}

$startIndex = ($currentPage - 1) * $itemsPerPage;

if ($videogames_filtered != null) {
    $currentVideogames = $videogames_filtered;
}
else {
    $currentVideogames = array_slice($videogames, $startIndex, $itemsPerPage);
}

require __DIR__ . '/../views/videojuegos.view.php';