<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <?= "<h1>Videojuegos de la página $currentPage</h1>"; ?>
    <?php require 'partials/session_name.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <form method="GET" action="">
        <button type="submit" name="sort" value="release_asc">Sort by released year Ascending</button>
        <button type="submit" name="sort" value="release_desc">Sort by released year Descending</button>
        <br>
        <label for="filter_developer">Filter by developer:</label>
        <input type="text" id="filter_developer" name="filter_developer" value="<?php echo htmlspecialchars($filter_developer); ?>" />
        <br>
        <label for="filter_genre">Filter by genre:</label>
        <input type="text" id="filter_genre" name="filter_genre" value="<?php echo htmlspecialchars($filter_genre); ?>" />
        <br>
        <button type='submit'>Apply filters</button>
    </form>
    <ul>
        <?php foreach ($currentVideogames as $videogame) : ?>
            <li>
                <?php echo "<a href=videogame" . $videogame->id . '>Title:' . $videogame->title ."</a>"?>
            </li>
            <li>
                Developer: <?= $videogame->developer; ?>
            </li>
            <li>
                Platform: <?= $videogame->platform; ?>
            </li>
            <li>
                <?php echo '<img src="' . htmlspecialchars($videogame->cover_image) . '" alt="Cover image" />'; ?>
            </li>
        <?php endforeach; ?>
        <?php if ($currentPage > 1) : ?>
            <?= "<a class='larger-text' href='?page=" . ($currentPage - 1) . '&sort=' . urlencode($sort_by) . "'>Previous</a> "; ?>
        <?php endif; ?>
        <?php 
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentPage) {
                    echo "<strong class='larger-text'>$i</strong>";
                } else {
                    echo "<a class='larger-text' href='?page=" . $i . '&sort=' . urlencode($sort_by) . "'>$i</a> ";
                }
            }
        ?>
        <?php if ($currentPage < $totalPages) : ?>
            <?= "<a class='larger-text' href='?page=" . ($currentPage + 1) . '&sort=' . urlencode($sort_by) . "'>Next</a>"; ?>
        <?php endif; ?>
    </ul>
</body>
</html>