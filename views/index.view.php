<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <h1>Home Page</h1>
    <?php require 'partials/session_name.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <ul>
        <?php foreach ($videogames_arr as $videogame) : ?>
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
    </ul>
</body>
</html>