<?php

$videogames = $query->selectAll('videogames_pec3', 'Videogame');

$per_page = 10;
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_parts = explode('/', trim($request_uri, '/'));
$page = 1;

if (count($uri_parts) >= 3 && strtolower($uri_parts[0]) === 'api' && strtolower($uri_parts[1]) === 'videogames') {
    $requested_page = intval($uri_parts[2]);
    if ($requested_page > 0) {
        $page = $requested_page;
    }
}

$total_items = count($videogames);
$total_pages = ceil($total_items / $per_page);
if ($page > $total_pages) {
    $page = $total_pages;
}
if ($page < 1) {
    $page = 1;
}

$offset = ($page - 1) * $per_page;
$paginated_data = array_slice($videogames, $offset, $per_page);
echo json_encode($paginated_data, JSON_PRETTY_PRINT);