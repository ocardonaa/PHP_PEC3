<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index View</title>
</head>
<body>
    <ul>
        <?php foreach ($videogames_arr as $videogame) : ?>
            <li>
                Title: <?= $videogame->title; ?>
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